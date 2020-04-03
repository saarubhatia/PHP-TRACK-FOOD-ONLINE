<?php
include 'partials/header.php';
$sql="SELECT * FROM restaurants";
$result=mysqli_query($conn,$sql);
$count=0;
if(mysqli_num_rows($result)>0)
{
    while($row=mysqli_fetch_assoc($result))
    {
        if($row['name']==$restaurant)
        {
            $current=$row;
            for($i=1;$i<=5;$i++)
            {
                if($row['star'.$i]=="checked")
                {
                    $count++;
                }
            }
        }
    }
}
$restaurant_lower=strtolower($restaurant);
$sql="SELECT * FROM `$restaurant_lower`";
$result=mysqli_query($conn,$sql);
?>
    <div class="jumbotron jumbotron-fluid">
        <div class= "row">
            <div class="col-lg-3">
                <img class="Jumb" src="<?php echo $current['image'] ?>">
            </div>
            <div class="col-lg-5">
                <h2 class="display"><?php echo $current['name'] ?></h2>
                <div>
                    <div class="lead"><?php echo $current['description'] ?></div>
                    <div class="read"><?php echo $current['address'] ?></div>
                    <br>
                    <div class="stars">
                        <div class="rating">
                            <div class="_4">
                                <span>
                                    <span class="far fa-star"></span>
                                    <?php echo $count ?>.0
                                </span>
                            </div>
                            <div class="_50">
                                <span>50+ Ratings</span>
                            </div>
                        </div>
                        <div class="rating">
                            <div class="_4">
                               <span> 35 mins</span> 
                            </div>
                            <div class="_50">
                                CaC Time
                            </div>
                        </div>
                        <div class="rating">
                            <div class="_4">
                               <span> 30 mins</span> 
                            </div>
                            <div class="_50">
                                Delivery Time
                            </div>
                        </div>
                        <div class="rating">
                            <div class="_4">
                                <span>₹ 250</span>
                            </div>
                            <div class="_50">
                                Cost for Two
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="col-lg-3">
                <img class="any" src="../public/images/Logo.jpg">
            </div>
        </div>  
    </div>
    <?php
        if(mysqli_num_rows($result)>0)
        {
    ?>
    <div class="container">
        <div class="row">
            
            <div class="col-md-10">
                <div class="row">
                    <?php
                    while($row=mysqli_fetch_assoc($result))
                    {
                    ?>
                    <div class="col-md-4 defi">
                        <div class="card">
                            <img class="boximage" src="<?php echo $row['image'] ?>">
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $row['name'] ?></h4>
                                <p class="card-text"><?php echo $row['description'] ?></p>
                                <p><span style="font-size:2em;"><strong>₹<?php echo $row['cost'] ?></span>/plate</strong></p>
                                <a href="/TFO-PHP/routes/cart.php?restaurant=<?php echo $restaurant ?>&food_item=<?php echo urlencode(serialize($row)) ?>" class="btn btn-primary atc">Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-2">
                    <?php
                        $sql="SELECT * FROM cart";
                        $result=mysqli_query($conn,$sql);
                        $subtotal=0;
                        if(mysqli_num_rows($result)==0)
                        {
                    ?>
                    <div class="right1">
                                <div class="write">Cart Empty</div>
                                <img src="../public/images/cute.png" class="cute">
                                <div class="quotes">
                                    Good Food, Good life!
                                </div>
                    </div>
                    <?php
                        }
                        else
                        {
                    ?>
                    <div class="right2" style="margin-top:-40px;">
                        <div class="cart1"> Cart 
                            <div class="cart2"> 1 Item </div>
                        </div>
                        <div class="upper">
                            <div class="pad">
                                <div class="maggie">
                                    <?php
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                    $subtotal+=$row['cost'];
                                    ?>
                                    <div class="pura">
                                        <div class="naam">
                                            <div class="chhotu" style="margin-top:-10px;">
                                               <img src="https://img.icons8.com/color/16/000000/vegetarian-food-symbol.png">
                                            </div>
                                            <div class="now" style="margin-top:-10px;">
                                                <?php echo $row['name'] ?>
                                            </div>
                                        </div>
                                            <div class="def-number-input number-input safari_only" style="width:50%; margin-top:70px">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                                    class="minus"></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                                    class="plus"></button>
                                            </div>
                                    </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="lower">
                            <div class="lower1">
                                <div class="subtotal">Subtotal</div>
                                <div class>
                                    <span class="rat">₹<?php echo $subtotal ?></span>
                                </div>
                            </div>
                            <div class="extra">
                                Extra Charges Apply
                            </div>
                            <a href="/TFO-PHP/routes/checkout.php?restaurant=<?php echo $restaurant ?>" class="btn _1gPB7">Checkout →</a>
                        </div>

                    </div>
                    <?php
                    }
                    ?>
            </div>
        </div>
    </div>
<?php
include 'partials/footer.php';
?>