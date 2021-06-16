<?php
$page_title = 'Home';
 include('header.php'); ?>
      <div class="jumbotron">
        <header class="page-header container-fluid">
          <div>
            <h1>Welcome to our Grocery Store!</h1>
          </div>
        </header>
      </div>
      <div >
        <p class="store-description" style="text-align: center;">Welcome to our store. We have a lot of products available right now. 3 stores currently open. Scroll down to see our available hours.
        </p>
      </div>
      <br>
      
      <div id="productsCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <img class="rounded w-100" src="images/Steak.jpg" alt="Steak">
            <div class="carousel-caption">
              <h3>Steak</h3>
            </div>
          </div>
          <div class="carousel-item">
            <img class=" rounded w-100" src="images/Bacon.jpg" alt="bacon">
            <div class="carousel-caption">
              <h3>Bacon</h3>
            </div>
          </div>
          <div class="carousel-item">
            <img class="rounded w-100" src="images/Bok_Choy.jpg" alt="bok choy">
            <div class="carousel-caption">
              <h3>Bok Choy</h3>
            </div>
          </div>
        </div>
      </div>
      <br>
      <div>
        <table class="maintable table-striped">
          <tr>
            <th colspan="2" class="tb-header">Open Hours</th>
          </tr>
          <tr>
            <td>Monday</td>
            <td>9:00 am - 4:00 pm</td>
          </tr>
          <tr>
            <td>Tuesday</td>
            <td>9:00 am - 5:00 pm</td>
          </tr>
          <tr>
            <td>Wednesday</td>
            <td>9:00 am - 5:00 pm</td>
          </tr>
          <tr>
            <td>Thursday</td>
            <td>9:00 am - 5:00 pm</td>
          </tr>
          <tr>
            <td>Friday</td>
            <td>9:00 am - 9:00 pm</td>
          </tr>
          <tr>
            <td>Saturday</td>
            <td>9:00 am - 7:00 pm</td>
          </tr>
          <tr>
            <td>Sunday</td>
            <td>Closed</td>
          </tr>
        </table>
        <br>
      <div style="overflow-x: auto;" class="container">
        <table style="overflow-x: auto;"  class="product-table table-striped">
          <tr>
            <th colspan="6" class="tb-header">Weekly Deals</th>
          </tr>
          <?php include('weekly_deals.php');?>
          <!-- <tr>
            <td><img src="images/applesm.jpg">
            <td><a href="apple.html">Apple</a></td>
            <td style="color: red;"><br><del style="color: black;">$0.86 ea.</del> $0.60 ea.</td>
            <td><img src="images/tomatosm.jpg"></td>
            <td>Tomato</td>
            <td style="color: red;"><br><del style="color:black">$1.32 ea.</del> $1.00 ea.</td>
          </tr>
          <tr>
            <td><img src="images/porksm.jpg"></td>
            <td><a href="pork.html">Pork Tenderloin</a></td>
            <td style="color:red"><del style="color:black">$15.41 avg ea.</del> $10.00 avg ea.</td>
            <td><img src="images/winesm.jpg"></td>
            <td><a href="wine.html">Wine</a></td>
            <td style="color:red"><del style="color:black">$30.99 ea.</del> $20.99 ea.</td>
          </tr>
          <tr>
            <td><img src="images/eggsm.jpg"></td>
            <td><a href="egg.html">Eggs</a></td>
            <td style="color: red;"><del style="color:black">$3.00 for 6</del> $1.50 for 6</td>
            <td><img src="images/lobstersm.jpg"></td>
            <td><a href="lobster.html">Lobster</a></td>
            <td style="color: red;"><del style="color:black">$12.63 avg ea.</del> $6.00 avg ea.</td>

          </tr> -->
        </table>
      </div>
      
    </div>
    <?php include('footer.php');