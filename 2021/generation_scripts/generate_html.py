from rdflib import Graph, Namespace, Literal
from rdflib.namespace import RDF, RDFS
from rdflib.plugins.sparql import prepareQuery

schema = Namespace("https://schema.org/")
g = Graph()
g.parse("out.nt", format="ntriples")
g.serialize("out.ttl",format='ttl')

# Since the program is already printed out, first I print the static code associated
# with each paper. In the future it would be great to have this automatically too.
# HTML code is printed and copied into the program

q1 = prepareQuery('''
  SELECT distinct ?name ?paperTitle ?url ?type WHERE {
    ?p schema:hasPart ?resource;
        schema:title ?paperTitle.
    ?resource a ?type.
    optional {?resource schema:name ?name}.
    ?resource schema:url ?url.
  }
  ''', initNs = { "schema":schema})


papers_html = {}

for r in g.query(q1):
  # print(r.paperTitle)
  if r.paperTitle in papers_html.keys():
      html_values = papers_html[r.paperTitle]
  else:
      html_values = "<br/>"
  name = r.name
  value_to_append = ""
  if "Dataset" in r.type:
      if name is None:
          value_to_append = """
          <a href="%s">
          <i class="fas fa-database"></i> Data</a></span>
          """ % r.url
      else:
          value_to_append = """
          <span data-toggle="tooltip" data-placement="top" title="%s"><a href="%s">
          <i class="fas fa-database"></i> Data</a></span>
          """ %(r.name, r.url)
  elif "SourceCode" in r.type:
      if name is None:
          value_to_append = """
          <a href="%s">
          <i class="fas fa-code"></i> Code</a></span>
          """ % r.url
      else:
          value_to_append = """
          <span data-toggle="tooltip" data-placement="top" title="%s"><a href="%s">
          <i class="fas fa-code"></i> Code</a></span>
          """ %(r.name, r.url)
  else: # Ontology
      if name is None:
          value_to_append = """
          <a href="%s">
          <i class="fas fa-sitemap"></i> Ontology</a></span>
          """ % r.url
      else:
          value_to_append = """
          <span data-toggle="tooltip" data-placement="top" title="%s"><a href="%s">
          <i class="fas fa-sitemap"> Ontology</a></span>
          """ % (r.name,r.url)
  html_values+=","
  html_values+=(value_to_append)
  papers_html[r.paperTitle] = html_values

#for key, value in papers_html.items():
#    print("%s \n########\n  %s " %(key,value))



# Script for generating the full program
papers_authors = {}
#Select papers and authors.
q2 = prepareQuery('''
  SELECT distinct ?paperTitle (GROUP_CONCAT(DISTINCT ?author;SEPARATOR=', ') AS ?authors) WHERE {
    ?p a schema:ScholarlyArticle;
        schema:title ?paperTitle;
        schema:author ?a.
    ?a schema:givenName ?name;
       schema:familyName ?lastName.
    bind(concat(str(?name), " ", str(?lastName))as ?author)
  }group by ?paperTitle
  ''', initNs = { "schema":schema})

for r in g.query(q2):
    #print(r.paperTitle, r.authors)
    papers_authors[r.paperTitle] = r.authors

#print (papers_html)

papers_data = {}
papers_code = {}
papers_ontos = {}
# Select the resources and metadata.
q3 = prepareQuery('''
  SELECT distinct ?paperTitle ?name ?url ?type ?license ?description ?doi WHERE {
    ?p schema:hasPart ?resource;
        schema:title ?paperTitle.
    ?resource a ?type.
    ?resource schema:url ?url.
    optional {?resource schema:name ?name}.
    optional {?resource schema:license ?license}.
    optional {?resource schema:description ?description}.
    optional {?resource schema:identifier ?doi}.
  }
''', initNs = {"schema":schema})

# Template: <a href="link"> <span data-toggle="tooltip" data-placement="top" title="Short description of the dataset. License">Dataset [License]</span></a>
for r in g.query(q3):
    # print(r.paperTitle, r.url, r.name, r.description)
    name = r.name
    if name is None:
        if "Dataset" in r.type:
            name = "Data"
        elif "Software" in r.type or "Demo" in r.type:
            name = "Code"
        else:
            name = "Ontology"
    entry ="""
        <a href="%s"><i class="fas fa-external-link-alt"></i> <span data-toggle="tooltip" data-placement="top" title="!DESC!">%s</a>!DOI!!LICENSE!</span>"""% (r.url,name)
    doi = ""
    license = ""
    desc = ""
    if r.doi is not None:
        doi = " <span data-toggle=\"tooltip\" data-placement=\"top\" title=\"Digital Object Identifier\"><a href=\""+r.doi+"\"><img src=\"img/doi.png\" width=\"20\"></a></span>"
    if r.description is not None:
        desc = r.description
    if r.license is not None:
        license = " (<span class=\"badge badge-primary\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"License\">"+r.license+"</span>)"
    entry = entry.replace("!DESC!",desc)
    entry = entry.replace("!LICENSE!",license)
    entry = entry.replace("!DOI!",doi)
    if "Dataset" in r.type:
        if r.paperTitle in papers_data.keys():
            papers_data[r.paperTitle].append(entry)
        else:
            papers_data[r.paperTitle] = [entry]
            #print (papers_data[r.paperTitle])
    elif "Software" in r.type or "Demo" in r.type:
        if r.paperTitle in papers_code.keys():
            papers_code[r.paperTitle].append(entry)
        else:
            papers_code[r.paperTitle] = [entry]
    else:
        if r.paperTitle in papers_ontos.keys():
            papers_ontos[r.paperTitle].append(entry)
        else:
            papers_ontos[r.paperTitle] = [entry]

# Create HTML for each title. We do not print authors because they come out of order.
# Result is printed in stdout and copied in accepted papers.

for key, value in papers_authors.items():
    print("####")
    print(key)
    if key in papers_code or key in papers_data or key in papers_ontos:
        print("<ul>")
        if key in papers_code:
            if len(papers_code[key]) == 1:
                print("<li><strong>Code</strong>:" + papers_code[key][0]+ "</li>")
            else:
                print("<li><strong>Code</strong>:")
                print("<ul>")
                for entry in papers_code[key]:
                    print("<li>" + entry+ "</li>")
                print("</ul>")
                print("</li>")
        if key in papers_data:
            if len(papers_data[key]) == 1:
                print("<li><strong>Data</strong>:" + papers_data[key][0]+ "</li>")
            else:
                print("<li><strong>Data</strong>:")
                print("<ul>")
                for entry in papers_data[key]:
                    print("<li>" + entry+ "</li>")
                print("</ul>")
                print("</li>")
        if key in papers_ontos:
            if len(papers_ontos[key]) == 1:
                print("<li><strong>Ontology</strong>:" + papers_ontos[key][0]+ "</li>")
            else:
                print("<li><strong>Ontology</strong>:")
                print("<ul>")
                for entry in papers_ontos[key]:
                    print("<li>" + entry+ "</li>")
                print("</ul>")
                print("</li>")
        print("</ul>")
