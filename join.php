<?php
  include("common.php");
  top();
?>

<!-- Nav -->
      <nav id="nav">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li class="current"><a href="join.php">Join</a></li>
          <li><a href="officers.php">Officers</a></li>
          <li><a href="events.php">Events</a></li>
          <li><a href="media.php">Photos</a></li>
        </ul>
      </nav>

    </header>
  </div>

  <body>
    <div class="container" style="padding: -2%">
      <center><h1 style="font-size: 200%; padding-bottom: 2%" id="joinMailingList">Join Our Mailing List</h1></center>
      <table id="mailingTable" style="width: 100%">
        <tr>
          <td id="joinForm" class="mailingList">
            <form class="form-horizontal" role="form" action="https://mailman11.u.washington.edu/mailman/subscribe/sase-uw" method="post">
              <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                  <input name="fullname" type="name" class="form-control" id="name" placeholder="Name">
                </div>
              </div>

              <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                  <input name="email" type="email" class="form-control" id="email" placeholder="Email">
                </div>
              </div>

              <div class="form-group">
                <label for="year" class="col-sm-2 control-label">Year</label>
                <div class="col-sm-10">
                  <select class="form-control">
                    <option>Freshman</option>
                    <option>Sophomore</option>
                    <option>Junior</option>
                    <option>Senior</option>
                    <option>Graduate/PhD</option>
                  </select>
                </div>
              </div>

              <div class="form-group" style="margin-bottom: 2%">
                <label for="major" class="col-sm-2 control-label">Major</label>
                <div class="col-sm-10">
                  <input type="major" class="form-control" id="major" placeholder="Major">
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-default">Submit</button>
                </div>
              </div>
            </form>
          </td>

          <td id="updatesInfo" class="mailingList">
            <div style="margin-left: 4%">
              <h3>Dont miss our updates!</h3>
              <p>Please fill in this form if you would like to receive our newsletters so we can send you information for future events.  You can remove yourself from the mailing list at any time through the sase-uw mailing list page.  Our club events and newsletter are available to everyone interested in our club.  Thank you for visiting!</p>
              <p>If you wanted to unsubscribe, you can do so <a href="https://mailman11.u.washington.edu/mailman/listinfo/sase-uw">here</a></p>
              <p><b>Facebook Page:</b> <a href="https://www.facebook.com/saseuw">Here</a> <br />
              <b>Facebook Group:</b> <a href="www.facebook.com/groups/saseuw/">Here</a> <br />
              <b>Facebook Account (Event Invites):</b> <a href="https://www.facebook.com/profile.php?id=100008793494519&fref=ts">Here</a></p>
            </div>
          </td>
        </tr>
      </table>
    </div>
    <div class="container">
      <div id="becomeOfficer" >
        <center><h3 style="font-size: 200%; padding-bottom: 2%">Become an Officer!</h3></center>
        <table id="becomeOfficerTable">
          <tr>
            <td id="becomeOfficerLeft">
              <center><h3 style="font-size: 200%; padding-bottom: 2%">Why Become an Officer?</h3></center>
              <p>Our community of officers are noted for being successful in our academics and careers. We strive to bring in and meet with professionals in the industry in order to help us stand out from everyone else. We can be your number one source of advice, help, or referrals.</p>
              <p>We will be recruiting new officers to help us for the rest of the school year! It is a great chance to connect with upperclassmen and professional engineers in the workplace.</p>
              <p>As a general officer, you will be intimately involved with our officer group and automatically become candidates for next year’s core officer election. You will attend weekly meetings, contribute in discussions, reach out to professionals or student clubs, and complete assigned tasks. It will be a great opportunity for you to connect with fellow schoolmates who share similar fields of interest, make new friends and network with professionals. Also, you will develop and enhance lifelong beneficial skills such as leadership, teamwork, communication, public speaking, and networking skills.</p>
              <br />
              <center><h3 style="font-size: 200%; padding-bottom: 2%">FAQ</h3></center>
              <br />
              <p><b>Q:</b> How many hours a week are general officers expected to commit? <br /> <b>A:</b> We expect around 4-6 hours a week (including meetings)</p>

              <p><b>Q:</b> Can I be an officer of SASE and another club at the same time? <br />  <b>A:</b> SASE officers are not restricted from holding positions in other clubs. (However please do check their policy on this because it may be different!)</p>

              <p><b>Q:</b> How big is SASE?<br />   <b>A:</b> We have around 900 people subscribed to our mailing list, and usually have around 30-40 people at each event</p>

              <p><b>Q:</b> What are some of the events held by SASE? <br />  <b>A:</b> Visit the event archive for our previous events at: <a href="events.php">http://students.washington.edu/sase/events.php</a></p>
            </td>

            <td id="becomeOfficerRight">
              <center><h3 style="font-size: 200%; padding-bottom: 2%">How to Apply</h3></center>
              <p>We encourage everyone interested to apply, even if you are a freshman or new to UW. Here are some of the benefits:</p>
              <ul style="list-style-type:disc; margin-left 4%">
                <li>Meeting your peers early</li>
                <li>Guidance on choosing a major</li>
                <li>Making connections with upperclassmen</li>
                <li>Interaction with professionals/recruiters</li>
                <li>Leadership skills</li>
              </ul>
              <p>To see a list of the events we have hosted, visit the event archive!</p>
              <br/>
              <p><b>Applications are currently open, click <a href="https://catalyst.uw.edu/webq/survey/sase/313546
">here</a> to apply.  They will close on October 11, 12:00am</b></p>
              <br />
              <p>Based on your responses from the survey, we will select from the pool and schedule two interview rounds with you to see if you are a good fit for our team. The dates for the interviews are to be determined.</p>
            </td>
          </tr>
        </table>
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