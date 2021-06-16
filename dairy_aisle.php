<?php
$page_title = 'Dairy & Eggs Aisle';
 include('header.php'); ?>
      <div class="container" >
        <div class="jumbotron">
          <h4>Weekly Deals</h4>
        </div>
        <div class="table-small">
          <table class="weekly-deals table-bordered">
            <?php include('weekly_deals.php');?>
          </table>
        </div>
        <br><br>
        <table class="product-table table-bordered">
          <tr>
            <th class="tb-header" colspan="4">Products</th>
          </tr>
          <?php $givenaisle = "Dairy"; include('product_table.php');?>
        </table>
      </div>
<?php include('footer.php')?>