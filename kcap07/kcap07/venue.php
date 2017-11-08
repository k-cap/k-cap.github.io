<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
  <title>K-CAP 2007 - The Fourth International Conference on Knowledge Capture</title>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <link href="styles.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="external.js">
  </script>
  
  <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAAbKgA8WRkXsbGJTH-ZyDClRTnfueeno_PwqCA2xNpzBR0RHLHuhRH_UGSPo_PCyv_NmwKvJ1-ynIM_g"
      type="text/javascript"></script>
    <script type="text/javascript">

    //<![CDATA[
	var map = null;
	var geocoder = null;
	var address = "<a href="http://www.csd.abdn.ac.uk/kcap07/%5C%22http://www.fairmont.com/whistler/%5C%22" rel=\"external\"><strong>The Fairmont Chateau Whistler</strong></a> <br />4599 Chateau Blvd, Whistler, BC V0N 1B4<br /> Canada<br />(604) 938-2040";
	
    function load() {
	  if (GBrowserIsCompatible()) {
        map = new GMap2(document.getElementById("map"));
		geocoder = new GClientGeocoder();
		
		map.addControl(new GSmallMapControl());
        map.addControl(new GMapTypeControl());
        map.setCenter(new GLatLng(50.117332, -122.946417), 13);
		
		showHotel();
			
      } 
    }
	
	function showHotel() {
      if (geocoder) {
        geocoder.getLatLng(
          address,
          function(point) {
            //if (!point) {
			point = new GLatLng(50.117332, -122.946417);
			  map.setCenter(point, 13);
			  var marker = new GMarker(point);
              map.addOverlay(marker);
              marker.openInfoWindowHtml(address);
            //} else {
            //  map.setCenter(point, 13);
			//  alert(point);
            //  var marker = new GMarker(point);
             // map.addOverlay(marker);
             // marker.openInfoWindowHtml(address);
           // }
          }
        );
      }
    }

    //]]>
    </script>
  
</head>

<body onload="load()" onunload="GUnload()">

<table class="maintable">
  <tbody>
    <tr>
      <td>
      <a name="top"></a>
      <table>
        <tbody>
          <tr>
            <td class="navcolumn" style="border-bottom: 1px solid #330066;vertical-align: middle;">
 
            	<img src="http://www.csd.abdn.ac.uk/kcap07/images/logo150_b.gif" alt="K-CAP 07 Logo" />
			</td>
 			<td class="maincolumn" style="border-bottom: 1px solid #330066;">
				<p>
					<span class="conftitle">K-CAP 2007 </span> <br />
					<span class="confsubtitle">The Fourth International Conference on Knowledge Capture </span>
				</p>
  				<p> <span class="confsubsubtitle">	28-31 October 2007<br/>
  					Whistler, BC</span>
  					<br />
  					<br />
  					<strong>K-CAP 2007 is sponsored by <a href="http://sigart.acm.org/" rel="external">ACM SIGART</a> and held in cooperation with <a href="http://www.aaai.org" rel="external">AAAI</a></strong>
  				</p>
            </td>
          </tr>



    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Google Maps JavaScript API Example</title>

	
	
	         <tr>
            <td class="navcolumn">
              <a href="index.php">Home</a>
              <br />
              <a href="organisation.php">Organisation</a>
              <br />
			  <a href="dates.php">Important Dates</a>
              <br />
              <a href="venue.php">Conference Venue</a>
              <br />
              <a href="invitedSpeakers.php">Invited Speakers</a>
              <br />
			  <a href="schedule.php">Schedule</a>
			  <br />
			  <a href="presenters.php">Presenters</a>
              <br />
			  <a href="social.php">Social</a>
              <br />
			  <br />
			  <a href="registration.php">Registration</a>
              <br />
			  <a href="students.php">Students</a>
              <br />
              <br />
              <a href="proceedings.php">Proceedings</a>
			  <br />
              <a href="techpapers.php">Accepted Papers</a>
			  <br />
              <a href="bestpapers.php">Best Papers</a>
			  <br />
              <a href="posters.php">Accepted Posters</a>
			  <br />
              <a href="workshops.php">Workshops</a>
			  <br />
              <br />
              <a href="cfposters.php">Call For Posters</a>
              <br /> 
              <a href="cfp.php">Call For Papers</a>
              <br />
              <a href="cfw.php">Call For Workshops</a>
              <br />
			  <br />
			  <a href="posterguide.php">Poster Submission Guidelines</a>
              <br />
			  <a href="postersubmit.php">Poster Submission Instructions</a>              
              <br />
              <a href="techpaperguide.php">Paper Submission Guidelines</a>
              <br />
			  <a href="techpapersubmit.php">Paper Submission Instructions</a>
              <br />
			  <a href="camerareadysubmit.php">Camera Ready Submission Instructions</a>
              <br />
			  <br />
			  <a href="flyers/K-CAP-07-Flyer.pdf">Poster</a> <span class="smalltext"><a href="http://www.adobe.com/products/acrobat/readstep2.html">(pdf viewer)</a></span>
              <br />
              <a href="poster.php">Request a Poster</a>
			  <br />
              <br />
              <a href="links.php">Links</a>
              <br />
              <br />
              <a href="aboutkcap.php">About K-CAP</a>
              <br />
              <a href="previousConferences.php">Previous Conferences</a>
              <br />
              <br />
              <a href="../cgi-bin/betsie.pl">Text Only Version</a>
            </td>
            <td class="maincolumn" rowspan="2"><h1>Conference Venue</h1>
<p>K-CAP 07 will be held at the held at <a href="http://www.fairmont.com/whistler/" rel="external">The Fairmont Chateau Whistler</a>, which is located in the beautiful mountain resort of Whistler, BC, one of the locations of the <a href="http://www.tourismwhistler.com/www/about_whistler/profile_2010/2010_winter_games.asp">2010 Olympic and Paralympic Winter Games</a>.
</p>
<p align="center">
	<img src="http://www.csd.abdn.ac.uk/kcap07/images/T27-281.jpg" style="border:0;width:550px;height:327px;" alt="Picture of The Fairmont Chateau Whistler" />
	<br /><span class="centered">The Fairmont Chateau Whistler.</span>
	<br /><span class="copyrighttext">Image copyright Fairmont Hotels and Resorts</span>

</p>

<h2>Location</h2>
<p>
<a href="http://www.fairmont.com/whistler/" rel="external">The Fairmont Chateau Whistler</a> is located at 4599 Chateau Blvd, Whistler, BC V0N 1B4, Canada, which should be shown on the map below.  <a onclick="showHotel()" style="color: #3300cc;">Click here to re-center the map</a>
</p>

<div id="map" style="width: 550px; height: 400px; margin-left: auto; margin-right: auto"></div>


<h2>Accommodation</h2>
<p>K-CAP has negotiated a discounted rate for rooms at the Fairmont Chateau Whistler (the conference hotel) for the duration of the conference.  The hotel is offering rooms for &#36;149 CDN per night for single and double rooms to K-CAP 2007 attendees.  Please contact the hotel to confirm prices for more than two people sharing a room, and for current levels of local and hotel taxes.
</p>

<p>
To benefit from this reduced rate attendees must book direct with the hotel, identifying themselves as being with the conference.  
Reservations can be made by phoning the Global Reservations Center on 1-800-441-1414 and identifying yourself as being part of the 'Association for Computing Machinery - KCAP 2007' conference.  You can also book online from the main <a href="http://www.fairmont.com/whistler/" rel="external">Fairmont Chateau Whistler webpage</a>.  In all cases you will be required to provide a promotional code unique to K-CAP 2007, which is GRACM1.
</p>

<p>
To benefit from this reduced rate, reservations must have been made before September 20th 2007; however if you try the code on the website, or contact the hotel directly, they may still be
able to provide you with the discounted rate.
</p>

<h2>Getting There</h2>
<p>
There are a variety of options for getting to Whistler from <a href="http://www.yvr.ca" rel="external">Vancouver International Airport</a>.  The <a href="http://www.tourismwhistler.com" rel="external">Tourism Whistler website</a> provides a <a href="http://www.tourismwhistler.com/www/plan_your_trip/airport.asp" rel="external">detailed guide of the options</a>.  These include a list of <a href="http://www.tourismwhistler.com/www/plan_your_trip/transportation_providers.asp" rel="external">transportation providers</a>, along with a guide for <a href="http://www.tourismwhistler.com/www/plan_your_trip/road_report.asp" rel="external">driving there</a>.  For those driving to the conference, please note that the Fairmont Chateau Whister will provide parking for registered hotel guests at the rate of &#36;23.00 CDN inclusive of taxes, per night, with a valet service also available at a rate of &#36;28.00 CDN inclusive of taxes, per night (these prices were correct as of December 2006; and are subject to change - please confirm current rates with hotel).  There may be other areas in Whistler Village for car parking: please <a href="http://www.tourismwhistler.com/www/tourism_whistler/contact_us.asp" rel="external">contact Tourism Whistler</a> for more details.
</p>

<p>
Please be aware that the Sea to Sky highway to Whistler is currently undergoing improvements for the 2010 Winter Olympic Games.  As a result, the the journey time is likely to be longer than the two hour estimated journey time provided by many of these sites.  We will endeavour to provide up-to-date information regarding the roadworks, delays, and road closures nearer the time of the conference.  The <a href="http://www.seatoskyimprovements.ca/">Sea to Sky Improvements website</a>, the official website of the improvements also provides relevant information, as does the Tourism Whistler <a href="http://www.tourismwhistler.com/www/plan_your_trip/road_report.asp" rel="external">Road Report</a> pages, which will hopefully be updated with details for October nearer the time.  
</p>

<p>
The easiest option is the <a href="http://www.perimeterbus.com/express.html" rel="external">Whistler Express Bus Service</a>, provided by <a href="http://www.perimeterbus.com/" rel="external">Perimeter Bus</a>, which runs directly between Vancouver International Airport and Whistler, and includes the Fairmont Chateau Whistler on its drop off and pick-up route.  There are seven daily departures each way during  the <a href="http://www.perimeterbus.com/ExpressDepartures.html" rel="external">summer timetable</a>, which is in operation during K-CAP 2007.     The journey costs &#36;67 CDN plus 6&#37; GST each way (see the <a href="http://www.perimeterbus.com/ExpressRates.html" rel="external">rates page</a>), and reservations are required.  Reservations can be <a href="https://www.securewebexchange.com/perimeterbus.com/reservation.asp" rel="external">made online</a> or over the phone on 1-877-317-7788.  (This information is correct as of July 11th 2007; prices are subject to change.)
</p>

<p>
Alternatively, <a href="http://www.greyhound.ca/" rel="external">Greyhound</a> offer 8 daily departures from their Vancouver location to Whistler Village and back.  The approximate travel time is 2 hours 45 minutes.  Taxi service is readily available at the Vancouver airport and the cost ranges from $25 to $30 depending on the time of day. Alternatively an Airporter shuttle bus will take you from the Vancouver Airport to the Greyhound station and leaves every 20 minutes. Please see <a href="http://www.greyhound.ca/" rel="external">www.greyhound.ca</a> for schedules and pricing.  (This information was taken from <a href=" http://www.tourismwhistler.com/www/plan_your_trip/transportation_providers.asp
" rel="external"> http://www.tourismwhistler.com/www/plan_your_trip/transportation_providers.asp</a> on July 11th 2007, and prices are subject to change)
</p>


<p>
<a href="http://www.snowbus.ca/" rel="external">Snowbus</a> also offer transportation from Vancouver to Whistler.  They have a variety of departure times and points from the Vancouver area. Also available are packages that include ski rentals, lift tickets, and food packages so if you are travelling early you can arrange to include breakfast!  For more details see <a href="http://www.snowbus.ca/" rel="external">www.snowbus.ca</a>.  (This information was taken from <a href=" http://www.tourismwhistler.com/www/plan_your_trip/transportation_providers.asp
" rel="external"> http://www.tourismwhistler.com/www/plan_your_trip/transportation_providers.asp</a> on  July 11th 2007, and prices are subject to change)

</p>


<h2>More information</h2>
<ul>
   <li> Whistler - <a href="http://www.whistler.ca/" rel="external">http://www.whistler.ca/</a>
   <li> Whistler.com - <a href="http://www.whistler.com/" rel="external">http://www.whistler.com/</a>
   <li> Aloha Whistler - <a href="http://www.alohawhistler.com/whistler.php" rel="external">http://www.alohawhistler.com/whistler.php</a>
   <li> The Fairmont Chateau Whistler - <a href="http://www.fairmont.com/whistler/" rel="external">http://www.fairmont.com/whistler/</a>
   <li> Vancouver airport - <a href="http://www.yvr.ca/" rel="external">http://www.yvr.ca/</a>
</ul>
         <p style="text-align: right"><a href="venue.php#top">top</a></p>   
	   </td>
          </tr>
		  <tr>
            <td class="navcolumnbottomaligned">
				<p>
				<div style='text-align: center;' >
								</div>
				</p>
			
			 <p>
              <span class="lastupdatetext"><strong>Last updated</strong><br />1 December 2007</span>
			 </p>
              <p>              
		  	  <a href="kcap07news.xml" rel="external"><img src="images/rss.gif" alt="RSS Feed" style="border:0;width:36px;height:17px" /></a>
              </p>
		  	  <p>
		  	      <a href="http://validator.w3.org/check?uri=referer" rel="external"><img
        src="http://www.w3.org/Icons/valid-xhtml10"
        alt="Valid XHTML 1.0 Strict" style="border:0;width:88px;height:31px"  /></a>
	
		        </p>
		      <p>
		 	     <a href="http://jigsaw.w3.org/css-validator/" rel="external">
		  		 <img style="border:0;width:88px;height:31px"
		       				src="http://jigsaw.w3.org/css-validator/images/vcss" 
		       				alt="Valid CSS!" />
		 		</a>
			  </p>
            </td>
			</tr>  
        </tbody>
      </table>
      </td>
    </tr>
  </tbody>
</table>
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-2059522-4";
urchinTracker();
</script></body>
</html>