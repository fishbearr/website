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
					<li class="current"><a href="calender.php">Calendar</a></li>
					<li><a href="media.php">Photos</a></li>
				</ul>
			</nav>

		</header>
	</div>

	<body>
		<div class="container">
			<center><h1 style="font-size: 200%; padding-bottom: 2%">Events Calendar</h1></center>
			<div class="responsive-iframe-container">
				<center>
					<iframe src="https://www.google.com/calendar/embed?title=Events%20Calendar%20&amp;showTitle=0&amp;showCalendars=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;src=uw.edu_8vdah55toi8pccammo0655dbeg%40group.calendar.google.com&amp;color=%2342104A&amp;ctz=America%2FLos_Angeles" style=" border-width:0 " width="800" height="600" frameborder="0" scrolling="no"></iframe>
				</center>
			</div>
		</div>
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