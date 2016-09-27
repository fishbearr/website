<?php
	include("common.php");
	top();
?>

<!-- Nav -->
			<nav id="nav">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About</a></li>
			        <li><a href="join.php">Join</a></li>
					<li><a href="officers.php">Officers</a></li>
					<li><a href="events.php">Events</a></li>
					<li><a href="calender.php">Calendar</a></li>
					<li class="current"><a href="media.php">Photos</a></li>
				</ul>
			</nav>

		</header>
	</div>

	<body>
		<div class="container">
			<center><h1 style="font-size: 200%; padding-bottom: 2%">Photos</h1></center>
			<div id="nanoGallery1"></div>
		</div>

		<script>
			$(document).ready(function () {
            $("#nanoGallery1").nanoGallery({
            	thumbnailWidth: 'auto',
  				thumbnailHeight: 250,
	            kind: 'picasa',
	            userID: '111876342083170376265',
	            thumbnailGutterWidth : 0,
      			thumbnailGutterHeight : 0,
      			colorScheme: 'light',
      			i18n: { thumbnailImageDescription: 'View Photo', thumbnailAlbumDescription: 'Open Album' },
                thumbnailLabel: { display: true, position: 'overImageOnMiddle', align: 'center' },
                thumbnailHoverEffect: [{ name: 'labelAppear75', duration: 300 }],
                viewerToolbar: {
                	standard: 'minimizeButton, previousButton, pageCounter, nextButton, playPauseButton, fullscreenButton, closeButton, label',
                }
	        });
		    });
	    </script>

	</body>

	<div id="footer-wrapper">
			<footer id="footer" class="container">
				<div class="row">
					<div class="3u 6u$(medium) 12u$(small) smallsponsor contactSponsor" >

						<!-- Contact -->
							<section class="widget contact last">
								<h3>Contact Us</h3>
								<ul>
									<li>
										<a href="https://www.facebook.com/saseuw" class="icon fa-facebook">
											<span class="label">Facebook</span>
										</a>
									</li>

									<li>
										<a href="https://www.instagram.com/saseuw" class="icon fa-instagram">
											<span class="label">Instagram</span>
										</a>
									</li>

									<li>
										<a href="https://www.linkedin.com/company/society-of-asian-scientists-and-engineers-sase-" class="icon fa-linkedin">
											<span class="label">LinkedIn</span>
										</a>
									</li>
								</ul>
								<p>University of Washington<br />
								Seattle, WA 94582<br />
								sase@uw.edu</p>
							</section>

					</div>
<?php 
	bottom();
?>