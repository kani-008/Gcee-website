<?php include 'include/header.php'; ?>

<!-- Page Hero -->
<div class="page-hero">
    <div class="container">
        <div style="font-size:3rem; margin-bottom:16px; opacity:0.9;"><i class="fas fa-envelope"></i></div>
        <h1>Contact Us</h1>
    </div>
</div>

<!-- Breadcrumb -->
<div class="breadcrumb-bar">
    <div class="container">
        <a href="index.php"><i class="fas fa-home"></i> Home</a>
        <span>&rsaquo;</span>
        <a href="#">Home</a>
        <span>&rsaquo;</span>
        <span style="color: var(--text-dark); font-weight:600;">Contact Us</span>
    </div>
</div>

<!-- Main Content -->
<section class="page-content">
    <div class="container">
			<div class="row margin-bottom-30">
				<div class="col-md-8 mb-margin-bottom-30">
					<div class="headline"><h2 style="color:#006600;">Contact Form</h2></div>
					<p>We are ready to answer your Questions about GCEE(IRTT). Use the form to tell about your goals and needs.</p>
					<br>
					<form action="https://docs.google.com/forms/d/e/1FAIpQLSdu50csCAAhXVFnoG8KIsugazgadSrZ5i9s0SIz0SxNbgYqRQ/viewform?usp=sf_link" target="_blank">
						<button type="submit" class="btn-u">Click here to send your message</button>
					</form>
					
				</div><!--/col-md-9-->
					<!-- Contacts -->
					<div class="headline"><h2 style="color:#006600;">Contact Us</h2></div>
					<ul class="list-unstyled who margin-bottom-30">
						<li><i class="fa fa-home"></i>Government College of Engineering (IRTT)<br/>
								 <span style="padding-left:20px;"> Vasavi College Post, Erode</span><br/>
								 <span style="padding-left:20px;">Tamilnadu - 638 316, India.</span></li>
						<li><a href="contactus.php#"><i class="fa fa-envelope"></i> gceeprincipal@gmail.com</a></li>
						<li><i class="fa fa-phone"></i>Principal   		: 9280091825 
						<li><i class="fa fa-phone"></i>Help Desk 		: 9280091826, 0424 2533579 
						<li><i class="fa fa-phone"></i>Office 			: 9280091827
						<li><i class="fa fa-phone"></i>Hostel Office 	: 9280091828
						<li><i class="fa fa-phone"></i>Exam Cell		: 9280091829
						<li><i class="fa fa-phone"></i>Placement Cell	: 9280091830
							
						</li>
						
						<!-- <li><i class="icon-custom icon-sm rounded-x icon-color-u icon-line icon-printer"></i>+91 0424 2533590</li> -->
					</ul>
					</div><!--/col-md-3-->
			</div><!--/row-->
		</div><!--/container-->
		

		<!-- Google Map -->
        
		<div id="map" class="map" style="padding-left:50px; height:50%;">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3910.8955767169036!2d77.6633815141564!3d11.415124891890024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba9699755561a47%3A0xb8c3c353be0ad19b!2sInstitute%20of%20Road%20and%20Transport%20Technology!5e0!3m2!1sen!2sin!4v1587896031747!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		</div>
		<script>

      // This example displays a marker at the center of Australia.
      // When the user clicks the marker, an info window opens.

      function initMap() {
        var uluru = {lat: 11.3934135, lng: 77.65933940000002};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12,
          center: uluru
        });

        var contentString = '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h3 id="firstHeading" class="firstHeading">Institute of Road and Transport  Technology,</h3>'+
            '<div id="bodyContent" style="margin-top:-5px;">'+
            '<p><b>Institute of Road and Transport  Technology,</b>, ' +
            'Vasavi College Post, Chithode, '+
            '<br/>Erode-638 316, Tamil Nadu, India.'+
            ''+
            ''+
            ''+
            ''+
            ''+
            ''+
            '</p>'+
            '<p>Institute of Road and Transport  Technology, &nbsp; <a href="contactus.php#">'+
            '</a> '+
            ''+
            '</div>'+
            '</div>';

        var infowindow = new google.maps.InfoWindow({
          content: contentString
        });

        var marker = new google.maps.Marker({
          position: uluru,
          map: map,
          title: 'Institute of Road and Transport  Technology'
        });
        marker.addListener('click', function() {
          infowindow.open(map, marker);
        });
      }
    </script>
 <!--   <script async defer
   src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQ1o47vI9rRQnSfP8VCulTv3dY3qbWJDk&callback=initMap">
    </script> -->
		<!---/map-->
		<!-- End Google Map -->

        </div><!-- /.container -->
    </section><!-- /.page-content -->

<!-- ===== MODERN GCEE FOOTER ===== -->
    </div>
</section>

<?php include 'include/footer.php'; ?>
