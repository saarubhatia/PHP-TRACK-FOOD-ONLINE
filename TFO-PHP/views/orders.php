<?php
include 'partials/header.php';
$sql="SELECT * FROM orders";
$result=mysqli_query($conn,$sql);
?>
  <div class="container">
    <div class="row">
      <h1 style="text-align:center" class="font2">Your Orders</h1>
      <?php
            if(mysqli_num_rows($result)>0)
            {
                $subtotal=0;
      ?>
      <table class="table table-striped table-bordered" style="height: 250px;">
      <thead>
          <tr>
            <th class="font1" scope="col">Token Id</th>
            <th class="font1" scope="col">Date</th>
            <th class="font1" scope="col">Delivery Type</th>
            <th class="font1" scope="col">Payment Method</th>
            <th class="font1" scope="col">Status</th>
          </tr>
        </thead>
        <tbody>
        <?php
          while($row=mysqli_fetch_assoc($result))
          {
          ?>
          <tr>
            <th class="font2" scope="row"><?php echo $row['token_id'];?></th>
            <td class="font2"><?php echo $row['date'];?></td>
            <td class="font2"><?php echo $row['del_type'];?></td>
            <td class="font2"><?php echo $row['pay_method'];?></td>
            <td class="font2"><?php echo $row['status'];?></td>
          </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
      <?php
        }
      ?>
    </div>
  </div>
<?php
include 'partials/footer.php';
?>