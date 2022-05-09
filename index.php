
<!DOCTYPE html>
<html lang="en">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  padding: 25px;
  background-color: white;
  color: black;
  font-size: 25px;
}

.dark-mode {
  background-color: black;
  color: white;
}

</style>






    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mode</title>

    <link rel="stylesheet" href="assets/css/custom/style2.css">
    <link rel="stylesheet" href="assets/css/responsive/responsive.css">
    <!-- favicon -->
    <link rel="icon" type="image/png" href="img1/favicon.png">
    

</head>

<body>


     
<button onclick="myFunction()">change mode</button>

<script>
function myFunction() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}
</script>

     

    <!-- ======= 1.01 Header Area ====== -->
    <?php
     
    
//    if(empty($_SESSION['e']))
//     {
//     ?>
//     <a href="connexion.php">Connexion</a>
//     <?php
    
//     }
    
//     else{
//         $x=$_SESSION['e'];

//     $db = config::getConnexion();
//     $sql ="SELECT id_client from client
//     WHERE email ='$x'";
     
//     $id1=$db->query($sql);
//  $id1->execute();
//  $id0=$id1->fetch(PDO::FETCH_ASSOC); 
    //      $id=$id0["id_client"];?> <a href="connexion.php">deconnexion </a> <a href="updateClient.php?id=<?PHP echo $id; ?>"> <button type="submit" class="mu-readmore-btn">Profile</button>   </a>
    // <?php
// echo 'Bienvenue Utilisateur ', $x; 
//         }




    
    //  include "header.php" ?>
    
    <!-- ======= /1.01 Header Area ====== -->

    <!-- ======= 1.02 Home Area ====== -->
    <div class="homeArea animated">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="homeassets/img1Table">
                        <div class="homeassets/img1">
                            <assets/img1 src="assets/img1/home-dsk-1.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-7">
                    <div class="homeContent">
                        <span class="topTxt">Simple &nbsp; - &nbsp; Easy to use &nbsp; - &nbsp; 10x Better!</span>
                        <span class="h2 homeTitle">MODE <br>Best shopping service for everyone.</span>
                        <p>Get the best service. buy <br>Any product you want!.</p>
                        <div class="homeBtn">
                            <a href="#" class="btnOne Btn"><i class="icofont icofont-rocket-alt-2"></i>special offers</a>
                            <a href="#" class="btnTwo Btn">See other product</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clouds">
                <assets/img1 src="assets/img1/clouds/cloud-1.png" alt="" class="cloud1">
                <assets/img1 src="assets/img1/clouds/cloud-2.png" alt="" class="cloud2">
                <assets/img1 src="assets/img1/clouds/cloud-3.png" alt="" class="cloud3">
                <assets/img1 src="assets/img1/clouds/cloud-4.png" alt="" class="cloud4">
                <assets/img1 src="assets/img1/clouds/cloud-5.png" alt="" class="cloud5">
            </div>
        </div>
    </div>
    <!-- ======= /1.02 Home Area ====== -->

    <!-- ======= 1.03 Domain Area ====== -->
    <div class="domainArea">
        <div class="container animated">
            <div class="row">
                <div class="col-md-12 clearfix">
                    <div class="domainTxt">
                        <p>Search your item, <br>purchase one.</p>
                    </div>
                    <form action="domainSearch.php" class="domainForm" method="get">
                        <!-- replace domainSearch.html with your php file -->
                        <div class="domainTop">
                            <input type="search" name="search" placeholder="Enter your domain name here">
                            <input type="submit" name="submit" value="Search Domain">
                        </div>
                        <div class="domainCheck">
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ======= /1.03 Domain Area ====== -->

    <!-- ======= 1.04 Service Area ====== -->
    <div class="serviceArea secPdng animated">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="sectionTitle">
                        <div class="h2">Lots of products  <br>Why you should <span>choose us?</span></div>
                    </div>
                </div>
            </div>
            <div class="row service">
                <div class="col-md-4">
                    <div class="singleService">
                        <div class="serviceIcon">
                            <assets/img1 src="assets/img1/icon/gear.png" alt="">
                        </div>
                        <div class="serviceContent">
                            <span class="h3">Easy to use</span>
                            <p>Just pick your game <br></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="singleService">
                        <div class="serviceIcon">
                            <assets/img1 src="assets/img1/icon/up.jpg" alt="">
                        </div>
                        <div class="serviceContent">
                            <span class="h3">Acces to product </span>
                            <p>You will be able to get your item to your house in  5 days  </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="singleService">
                        <div class="serviceIcon">
                            <assets/img1 src="assets/img1/icon/247.png" alt="">
                        </div>
                        <div class="serviceContent">
                            <span class="h3">24/7 customer support</span>
                            <p>We are pleased that our team is working 24/7 <br></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="singleService">
                        <div class="serviceIcon">
                            <assets/img1 src="assets/img1/icon/Best.png" alt="">
                        </div>
                        <div class="serviceContent">
                            <span class="h3">Best product</span>
                            <p>Every single product you want. <br></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="singleService">
                        <div class="serviceIcon">
                            <assets/img1 src="assets/img1/icon/Update.jpg" alt="">
                        </div>
                        <div class="serviceContent">
                            <span class="h3">UPDATES AND OFFERS</span>
                            <p>We are working to make sure you have the  best product  <br>Available & more.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="singleService">
                        <div class="serviceIcon">
                            <assets/img1 src="assets/img1/icon/chat.jpg" alt="">
                        </div>
                        <div class="serviceContent">
                            <span class="h3">Live Chat Support</span>
                            <p>Best community you will ever join.<br></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ======= /1.04 Service Area ====== -->

    <div class="sectionBar"></div>

    <!-- ======= 1.05 Pricing Area ====== -->
    <div class="pricingArea secPdng animated">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="sectionTitle">
                        <div class="h2">Pay for what you <span>actually</span> use. No hidden charge!</div>
                    </div>
                </div>
            </div>
            <div class="row price clearfix">
                <div class="col-lg-3 offset-lg-0 priceCol col-md-5 offset-md-1">
                    <div class="singlePrice">
                        <div class="priceHead">
                            <span class="priceTitle">1 Day acces</span>
                            <div class="priceassets/img1">
                                <assets/img1 src="assets/img1/icon/user.png" alt="">
                            </div>
                            <div class="currency">$2<span>/Day</span></div>
                            <p>best for you</p>
                        </div>
                        <!-- <ul class="priceBody">
                            <li><i class="icofont icofont-ui-check"></i>1 Free Day for first time</li>
                            <li><i class="icofont icofont-ui-check"></i>fresh start</li>
                            <li><i class="icofont icofont-ui-close"></i>Special Offers</li>
                            <li><i class="icofont icofont-ui-check"></i>Unlimited Support</li>
                        </ul> -->
                        <a href="" class="priceBtn Btn">Get Started now</a>
                    </div>
                </div>
                <!-- <div class="col-lg-3 priceCol col-md-5">
                    <div class="singlePrice active">
                        <div class="priceHead">
                            <span class="priceTitle">2 Day acces</span>
                            <div class="priceassets/img1">
                                <assets/img1 src="assets/img1/icon/users.png" alt="">
                            </div>
                            <div class="currency">$2<span>/day</span></div>
                            <p>best for personal use</p>
                        </div> -->
                        <!-- <ul class="priceBody">
                            <li><i class="icofont icofont-ui-check"></i>acces to your game for limited time</li>
                            <li><i class="icofont icofont-ui-check"></i>1 Free Day for first time</li>
                            <li><i class="icofont icofont-ui-check"></i>fresh start</li>
                            <li><i class="icofont icofont-ui-close"></i>Special Offers</li>
                            <li><i class="icofont icofont-ui-check"></i>Unlimited Support</li>
                        </ul>
                        <a href="" class="priceBtn Btn">Get Started now</a>
                    </div> -->
                </div>
                <!-- <div class="col-lg-3 offset-lg-0 priceCol col-md-5 offset-md-1">
                    <div class="singlePrice">
                        <div class="priceHead">
                            <span class="priceTitle">4 Day acces</span>
                            <div class="priceassets/img1">
                                <assets/img1 src="assets/img1/icon/users.png" alt="">
                            </div>
                            <div class="currency">$2<span>/day</span></div>
                            <p>best for personal use</p>
                        </div>
                        <ul class="priceBody">
                            <li><i class="icofont icofont-ui-check"></i>acces to your game for limited time</li>
                            <li><i class="icofont icofont-ui-check"></i>2 Free Day for first time</li>
                            <li><i class="icofont icofont-ui-check"></i>fresh start</li>
                            <li><i class="icofont icofont-ui-close"></i>Special Offers</li>
                            <li><i class="icofont icofont-ui-check"></i>Unlimited Support</li>
                        </ul>
                        <a href="" class="priceBtn Btn">Get Started now</a>
                    </div> -->
                <!-- </div>
                <div class="col-lg-3 priceCol col-md-5">
                    <div class="singlePrice">
                        <div class="priceHead">
                            <span class="priceTitle">7 Day acces</span>
                            <div class="priceassets/img1">
                                <assets/img1 src="assets/img1/icon/users.png" alt="">
                            </div>
                            <div class="currency">$2<span>/day</span></div>
                            <p>best for personal use</p>
                        </div>
                        <ul class="priceBody">
                            <li><i class="icofont icofont-ui-check"></i>acces to your game for limited time</li>
                            <li><i class="icofont icofont-ui-check"></i>3 Free Day for first time</li>
                            <li><i class="icofont icofont-ui-check"></i>fresh start</li>
                            <li><i class="icofont icofont-ui-close"></i>Special Offers</li>
                            <li><i class="icofont icofont-ui-check"></i>Unlimited Support</li>
                        </ul>
                        <a href="" class="priceBtn Btn">Get Started now</a>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- ======= /1.05 Pricing Area ====== -->

    <!-- ======= 1.06 Cta Area ====== -->
    <div class="ctaArea secPdngB animated">
        <div class="container">
            <div class="row ctaRow">
                <div class="col-md-6">
                    <div class="ctaassets/img1One">
                        <assets/img1 src="assets/img1/server.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-6 ctaCol">
                    <div class="ctaRight ctaTxt">
                        <div class="ctaCell">
                            <div class="h2">Buy any product of you choice</div>
                            <!-- <p>If you test the product you like  <br>you can as well buy it .</p> -->
                            <a href="#" class="ctaBtn Btn"><i class="icofont icofont-rocket-alt-2"></i>Get Started Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 ctaCol">
                    <div class="ctaLeft ctaTxt">
                        <div class="ctaCell">
                            <div class="h2">Buy any product of you choice</div>
                            <!-- <p>If you test the product you like  <br>you can as well buy it .</p> -->
                            <div class="ctaBtn">
                                <a href="#" class="btnOne Btn">read more</a>
                                <a href="#" class="btnTwo Btn">Get Started Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-md-offset-1 ctaColBtm">
                    <div class="ctaassets/img1Two">
                        <assets/img1 src="assets/img1/home-dsk-2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ======= /1.06 Cta Area ====== -->

    <!-- ======= 1.07 client Area ====== -->
    <div class="clientArea secPdng animated">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="sectionTitle">
                        <div class="h2">We give <span>awesome service,</span><br>Some of our trusted clients.</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="singleClient"><a href="#"><assets/img1 src="assets/img1/client-1.jpg" alt=""></a></div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="singleClient"><a href="#"><assets/img1 src="assets/img1/client-2.jpg" alt=""></a></div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="singleClient"><a href="#"><assets/img1 src="assets/img1/client-3.jpg" alt=""></a></div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="singleClient"><a href="#"><assets/img1 src="assets/img1/client-4.jpg" alt=""></a></div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="singleClient"><a href="#"><assets/img1 src="assets/img1/client-5.jpg" alt=""></a></div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="singleClient"><a href="#"><assets/img1 src="assets/img1/client-6.jpg" alt=""></a></div>
                </div>
            </div>
        </div>
    </div>
    <!-- ======= /1.07 client Area ====== -->

    <!-- ======= 1.08 ctaTwo Area ====== -->
    <div class="ctaTwo">
        <div class="container">
            <div class="row">
                <div class="col-md-12 animated">
                    <span class="ctaTxtTwo">20,000+ People trust Sparks! Be one of them today.</span>
                    <div class="ctaBtn"><a href="#" class="btnOne Btn">Get Started now</a></div>
                </div>
            </div>
        </div>
    </div>
    <!-- ======= /1.08 ctaTwo Area ====== -->

    <!-- ======= 1.09 footer Area ====== -->
    <?php include "footer.php" ?>
    <!-- ======= 1.09 footer Area ====== -->
   
    <!-- ======= /1.09 footer Area ====== -->


    <script src="js/jquery.1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/active.js"></script>
    <script src="js/chatScript.js" type="text/javascript"></script>


</body>

</html>