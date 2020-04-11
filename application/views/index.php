<div class="slider-black">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="slider-content" style="margin-top: -36px">
                    <h1>GLOBAL BUSINESS & REAL ESTATE</h1>
                    <h1>INVESTMENT PLATFORM</h1>
                    <br>
                    <p>
                        <a href="<?=BASEURL?>home/properties" class="main-cat-btn">COMMERCIAL</a>
                        <a href="<?=BASEURL?>home/properties" class="main-cat-btn">RESIDENTIAL</a>
                    </p>
                    <!--<br>-->
                    <!--<p>You’ve Never Seen Anything Like This,</p>-->
                    <!--<p>Get The World’s Most Powerful Investment Platform.</p>-->
                    <!--<br>-->
                    <!-- <h3>OVER $5,000,000,000 IN TRANSACTIONAL EXPERIENCE</h3> -->
                    <!--<br>-->
                    <!--<br>-->
                    <!-- <p>
                        <a href="javascript://" class="mobile-btn">App Store</a>
                        <a href="javascript://" class="mobile-btn">Google Play</a>
                    </p> -->
                </div><!-- /slider-content -->
            </div><!-- /12 -->
        </div><!-- /row -->
    </div><!-- /container -->
</div><!-- /slider-black -->


<!-- <section class="filter">
    <div class="container">
        <div class="filterHeader">
            <p style="margin-top: -20px;">
                <a href="<?=BASEURL?>home/properties" class="main-cat-btn">VIEW ALL PROPERTIES</a>
                <a href="<?=BASEURL?>home/properties" class="main-cat-btn">VIEW ALL BUSINESSES</a>
            </p>
            <form action="<?=BASEURL?>home/search" method="get" class="main-search-form">
                <div class="clear"></div>
                <input type="text" name="query" placeholder="State, Country, City, Zip, Address" required="required"><button><i class="fas fa-search"></i></button>
                <input type="submit" value="PROPERTIES" class="search-btn"><input type="submit" value="BUSINESSES" class="search-btn">
                <div class="clear"></div>
            </form>
        </div>/filterHeader
    </div>/container
</section>/filter -->

<!-- <section class="sliderControls">
    <div>
        <span class="slider-prev"></span>
        <span class="slider-next"></span>
    </div>
</section>

<section class="subHeader home bxslider">
    <div id="slide1">
        <div class="container">
            <div class="col-lg-6">
                <h1><span>580</span> Main St</h1>
                <div class="sliderTextBox">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam 
                eu nisl et lectus tempor pretium pellentesque rhoncus nisl. Sed 
                cursus ante eget orci lorem ipsum sodales.</p>
                <a class="buttonGrey large" href="#"><span class="icon-button-arrow"></span><span class="buttonText">VIEW DETAILS</span></a>
                <span class="or">OR</span>
                <a class="buttonColor" href="#"><span class="icon-button-user"></span><span class="buttonText">CONTACT AGENT</span></a>
                </div>
            </div>
            <div class="col-lg-3 col-lg-offset-3"><h1 class="sliderPrice">$525,000</h1></div>
        </div>
    </div>
    <div id="slide2">
        <div class="container">
            <div class="col-lg-6">
                <h1><span>134</span> Smith Avenue</h1>
                <div class="sliderTextBox">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam 
                eu nisl et lectus tempor pretium pellentesque rhoncus nisl. Sed 
                cursus ante eget orci lorem ipsum sodales.</p>
                <a class="buttonGrey large" href="#"><span class="icon-button-arrow"></span><span class="buttonText">VIEW DETAILS</span></a>
                <span class="or">OR</span>
                <a class="buttonColor" href="#"><span class="icon-button-user"></span><span class="buttonText">CONTACT AGENT</span></a>
                </div>
            </div>
            <div class="col-lg-3 col-lg-offset-3"><h1 class="sliderPrice">$85,000</h1></div>
        </div>
    </div>
    <div id="slide3">
        <div class="container">
            <div class="col-lg-6">
                <h1><span>834</span> Pratt Sreet</h1>
                <div class="sliderTextBox">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam 
                eu nisl et lectus tempor pretium pellentesque rhoncus nisl. Sed 
                cursus ante eget orci lorem ipsum sodales.</p>
                <a class="buttonGrey large" href="#"><span class="icon-button-arrow"></span><span class="buttonText">VIEW DETAILS</span></a>
                <span class="or">OR</span>
                <a class="buttonColor" href="#"><span class="icon-button-user"></span><span class="buttonText">CONTACT AGENT</span></a>
                </div>
            </div>
            <div class="col-lg-3 col-lg-offset-3"><h1 class="sliderPrice">$498,000</h1></div>
        </div>
    </div>
</section>
 -->




<!-- start horizontal filter -->
<!-- <section class="filter">
    <div class="container">
        <div class="filterHeader">
            <ul class="filterNav tabs">
                <li><a class="current triangle" href="#tab1">ALL PROPERTIES</a></li>
                <li><a href="#tab2">FOR SALE</a></li>
                <li><a href="#tab3">FOR RENT</a></li>
            </ul>
            <div class="filterHeadButton"><a class="buttonGrey" href="<?php echo site_url('home/properties'); ?>">VIEW ALL LISTINGS</a></div>
        </div>
        <div class="filterContent defaultTab" id="tab1">
            <form method="post" action="<?php echo site_url('home/search'); ?>">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="formBlock select">
                        <label for="propertyType">Property Type</label><br/>
                            <select name="property_type" required id="propertyType" class="formDropdown">
                                <option value="">Any</option>
                                <?php
                                foreach ($property_type as $key => $v)
                                {
                                ?>
                                    <option value="<?=$v['property_type']?>"><?=$v['name']?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="formBlock select">
                        <label for="location">Location</label><br/>
                        <select name="location" required id="location" class="formDropdown">
                            <option value="">Any</option>
                            <?php
                            foreach ($city as $key => $val)
                            {
                            ?>
                                <option value="<?=$val['city']?>"><?=$val['city']?></option>
                            <?php
                            }
                            ?>
                        </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="formBlock">
                            <label for="price-min">Price Range</label><br/>
                            <div style="float:right; margin-top:-25px;">
                                <div class="priceInput"><input type="text" required name="price_min" id="price-min" class="priceInput" /></div>
                                <span style="float:left; margin-right:10px; margin-left:10px;">-</span>
                                <div class="priceInput"><input type="text" required name="price_max" id="price-max" class="priceInput" /></div>
                            </div><br/>
                            <div class="priceSlider"></div>
                            <div class="priceSliderLabel"><span>0</span><span style="float:right;">800,000</span></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="formBlock select">
                        <label for="beds">Beds</label><br/>
                        <select name="beds" id="beds" class="formDropdown">
                            <option value="">Any</option>
                            <?php
                            foreach ($bedroom as $key => $val)
                            {
                            ?>
                                <option value="<?=$val['bedroom']?>"><?=$val['bedroom']?></option>
                            <?php
                            }
                            ?>
                        </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="formBlock select">
                        <label for="baths">Baths</label><br/>
                        <select name="baths" id="baths" class="formDropdown">
                            <option value="">Any</option>
                            <?php
                            foreach ($bathroom as $key => $val)
                            {
                            ?>
                                <option value="<?=$val['bathroom']?>"><?=$val['bathroom']?></option>
                            <?php
                            }
                            ?>
                        </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="formBlock select">
                        <label for="area">Area (Sq Ft)</label><br/>
                        <select name="area" required id="area" class="formDropdown">
                            <option value="">Any</option>
                            <?php
                            foreach ($size as $key => $val)
                            {
                            ?>
                                <option value="<?=$val['size']?>"><?=$val['size']?></option>
                            <?php
                            }
                            ?>
                        </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="formBlock">
                            <input class="buttonColor" type="submit" value="FIND PROPERTIES" style="margin-top:24px;">
                        </div>
                    </div>
                    <div style="clear:both;"></div>
                </div>
            </form>
        </div>END TAB1
        <div class="filterContent" id="tab2">
            <p>Filter for SALE</p>
             <form method="post" action="<?php echo site_url('home/search/sale'); ?>">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="formBlock select">
                        <label for="propertyType2">Property Type</label><br/>
                            <select name="property_type" required id="propertyType" class="formDropdown">
                                <option value="">Any</option>
                                <?php
                                foreach ($property_type as $key => $v)
                                {
                                ?>
                                    <option value="<?=$v['property_type']?>"><?=$v['name']?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="formBlock select">
                        <label for="location2">Location</label><br/>
                        <select name="location" required id="location" class="formDropdown">
                            <option value="">Any</option>
                            <?php
                            foreach ($city as $key => $val)
                            {
                            ?>
                                <option value="<?=$val['city']?>"><?=$val['city']?></option>
                            <?php
                            }
                            ?>
                        </select>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-3">
                        <div class="formBlock select">
                            <label for="priceMinDropDown">Min Price ($)</label><br/>
                            <div class="formBlock"><input type="number" required name="price_min" /></div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-3">
                        <div class="formBlock select">
                            <label for="priceMinDropDown">Max Price ($)</label><br/>
                            <div class="formBlock"><input type="number" required name="price_max" /></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="formBlock select">
                        <label for="beds">Beds</label><br/>
                        <select name="beds" id="beds" class="formDropdown">
                            <option value="">Any</option>
                            <?php
                            foreach ($bedroom as $key => $val)
                            {
                            ?>
                                <option value="<?=$val['bedroom']?>"><?=$val['bedroom']?></option>
                            <?php
                            }
                            ?>
                        </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="formBlock select">
                        <label for="baths">Baths</label><br/>
                        <select name="baths" id="baths" class="formDropdown">
                            <option value="">Any</option>
                            <?php
                            foreach ($bathroom as $key => $val)
                            {
                            ?>
                                <option value="<?=$val['bathroom']?>"><?=$val['bathroom']?></option>
                            <?php
                            }
                            ?>
                        </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="formBlock select">
                        <label for="area">Area (Sq Ft)</label><br/>
                        <select name="area" required id="area" class="formDropdown">
                            <option value="">Any</option>
                            <?php
                            foreach ($size as $key => $val)
                            {
                            ?>
                                <option value="<?=$val['size']?>"><?=$val['size']?></option>
                            <?php
                            }
                            ?>
                        </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="formBlock">
                            <input class="buttonColor" type="submit" value="FIND PROPERTIES" style="margin-top:24px;">
                        </div>
                    </div>
                    <div style="clear:both;"></div>
                </div>
            </form>
        </div>END TAB 2
        <div class="filterContent" id="tab3">
            <p>Filter for RENT</p>
             <form method="post" action="<?php echo site_url('home/search/rent'); ?>">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="formBlock select">
                        <label for="propertyType2">Property Type</label><br/>
                            <select name="property_type" required id="propertyType" class="formDropdown">
                                <option value="">Any</option>
                                <?php
                                foreach ($property_type as $key => $v)
                                {
                                ?>
                                    <option value="<?=$v['property_type']?>"><?=$v['name']?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="formBlock select">
                        <label for="location2">Location</label><br/>
                        <select name="location" required id="location" class="formDropdown">
                            <option value="">Any</option>
                            <?php
                            foreach ($city as $key => $val)
                            {
                            ?>
                                <option value="<?=$val['city']?>"><?=$val['city']?></option>
                            <?php
                            }
                            ?>
                        </select>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-3">
                        <div class="formBlock select">
                            <label for="priceMinDropDown">Min Price ($)</label><br/>
                            <div class="formBlock"><input type="number" required name="price_min" /></div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-3">
                        <div class="formBlock select">
                            <label for="priceMinDropDown">Max Price ($)</label><br/>
                            <div class="formBlock"><input type="number" required name="price_max" /></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="formBlock select">
                        <label for="beds">Beds</label><br/>
                        <select name="beds" id="beds" class="formDropdown">
                            <option value="">Any</option>
                            <?php
                            foreach ($bedroom as $key => $val)
                            {
                            ?>
                                <option value="<?=$val['bedroom']?>"><?=$val['bedroom']?></option>
                            <?php
                            }
                            ?>
                        </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="formBlock select">
                        <label for="baths">Baths</label><br/>
                        <select name="baths" id="baths" class="formDropdown">
                            <option value="">Any</option>
                            <?php
                            foreach ($bathroom as $key => $val)
                            {
                            ?>
                                <option value="<?=$val['bathroom']?>"><?=$val['bathroom']?></option>
                            <?php
                            }
                            ?>
                        </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="formBlock select">
                        <label for="area">Area (Sq Ft)</label><br/>
                        <select name="area" required id="area" class="formDropdown">
                            <option value="">Any</option>
                            <?php
                            foreach ($size as $key => $val)
                            {
                            ?>
                                <option value="<?=$val['size']?>"><?=$val['size']?></option>
                            <?php
                            }
                            ?>
                        </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="formBlock">
                            <input class="buttonColor" type="submit" value="FIND PROPERTIES" style="margin-top:24px;">
                        </div>
                    </div>
                    <div style="clear:both;"></div>
                </div>
            </form>
        </div>END TAB 3
    </div>END CONTAINER
</section> -->
<!-- end horizontal filter -->


<!-- start services section -->
<section class="services">
    <div class="container">
        <h1><span>How It Works</span></h1><br/><br/>
        <div class="row">
            <div class="col-md-3">
                <div class="img"><img src="<?=IMG?>s1.png" alt="" /></div>
                <h4 style="color: #0d2d47;">step 1</h4>
                <h2>Find a Property or Business</h2>
                <p>Browse our worldwide real estate and business auction platform with exclusive inventory and find the property or business you’ve been looking for.</p>
            </div><!-- /3 -->
            <div class="col-md-3">
                <div class="img"><img src="<?=IMG?>s2.png" alt="" /></div>
                <h4 style="color: #0d2d47;">step 2</h4>
                <h2>Make an Offer or But It Now</h2>
                <p>Our technology allows you to securely submit offers and receive status updates in real-time.</p>
            </div><!-- /3 -->
            <div class="col-md-3">
                <div class="img"><img src="<?=IMG?>s3.png" alt="" /></div>
                <h4 style="color: #0d2d47;">step 3</h4>
                <h2>Win the<br>Auction</h2>
                <p>You’ve just won, now what? Don’t worry Our skilled staff members will contact you and explain the next process and time frame.</p>
            </div><!-- /3 -->
            <div class="col-md-3">
                <div class="img"><img src="<?=IMG?>s4.png" alt="" /></div>
                <h4 style="color: #0d2d47;">step 4</h4>
                <h2>Close the Transaction</h2>
                <p>Our staff will guide you through the auction closing process every step of the way.</p>
            </div><!-- /3 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<!-- end services section -->



<!-- start big message -->
<!-- <section class="bigMessage">
    <div class="container">
        <h1>Easy, fast & <span>affordable</span> real estate.</h1><br/>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sit amet sagittis erat. Maecenas suscipit ut quam id condimentum. 
        Pellentesque cursus lacinia sapien et laoreet. Ut mattis ultricies sem id elementum. Vestibulum blandit consectetur nibh.</p>
    </div>
</section> -->
<!-- end big message -->
<?php
if (!(count($properties) > 0) && 3===2)
{
?>
    <!-- start recent properties -->
    <section class="properties">
        <div class="container">
            <h3>RECENT PROPERTIES</h3>
            <div class="divider"></div>
            <div class="row">
                <?php
                foreach ($properties as $key => $val)
                {
                    foreach ($property_type as $key => $value)
                    {
                        if ($val['property_type'] == $value['property_type'])
                        {
                            $_property_type = $value['name'];
                        }
                    }
                ?>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="propertyItem">
                            <div class="propertyContent">
                                <a class="propertyType" href="<?php echo site_url('home/properties/all/'.$_property_type); ?>" style="text-transform: uppercase;"><?=$_property_type?></a>
                                <a href="<?php echo site_url('home/single/'.$val['property_id']); ?>" class="propertyImgLink"><img class="propertyImg" src="<?php echo base_url(); ?>asset/img/768x507.gif" alt="" /></a>
                                <h4><a href="<?php echo site_url('home/single/'.$val['property_id']); ?>"><?=$val['address']?></a></h4>
                                <p><?=$val['city']?>, <?=$val['state']?></p>
                                <div class="divider thin"></div>
                                <p class="forSale" style="text-transform: uppercase;">FOR <?=$val['contract_type']?></p>
                                <p class="price">$<?=$val['price']?></p>
                            </div>
                            <table border="1" class="propertyDetails">
                                <tr>
                                <td><img src="<?php echo base_url(); ?>asset/img/icon-area.png" alt="" style="margin-right:7px;" /><?=$val['size']?> Area</td>
                                <td><img src="<?php echo base_url(); ?>asset/img/icon-bed.png" alt="" style="margin-right:7px;" /><?=$val['bedroom']?> Beds</td>
                                <td><img src="<?php echo base_url(); ?>asset/img/icon-drop.png" alt="" style="margin-right:7px;" /><?=$val['bathroom']?> Baths</td>
                                </tr>
                            </table> 
                        </div>
                    </div>
                <?php
                }
                ?>
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
    <!-- end recent properties -->
<?php
}
else
{
    echo "<br>";
}
?>




<div class="mobile-buttons">
    <ul>
        <li><a href="javascript://"><img src="<?=IMG?>apple.png" ></a></li>
        <li><a href="javascript://" ><img src="<?=IMG?>google.png" ></a></li>
    </ul>
    <!-- <p>
        <a href="javascript://" class="mobile-btn">App Store</a>
        <a href="javascript://" class="mobile-btn">Google Play</a>
    </p> -->
</div><!-- /mobile-buttons -->

<div class="home-calendar gery">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="home-calendar-box">
                    <div class="title"><h1>Live Auctions</h1></div><!-- /title -->
                    <div class="data">
                        <table>
                            <tr>
                                <td>
                                    <small>Date</small>
                                    <br>
                                    <span><?=date('m/d/Y')?></span>
                                </td>
                                <td>
                                    <small>Auction Type</small>
                                    <br>
                                    <span>Residential Auction</span>
                                </td>
                                <td>
                                    <small>Time Until Next Auction</small>
                                    <br>
                                    <ul>
                                        <a href="javascript://"><li>14</li></a>
                                        <a href="javascript://"><li>2</li></a>
                                        <a href="javascript://"><li>20</li></a>
                                        <a href="javascript://"><li>60</li></a>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <small>Date</small>
                                    <br>
                                    <span><?=date('m/d/Y')?></span>
                                </td>
                                <td>
                                    <small>Auction Type</small>
                                    <br>
                                    <span>Commercial Auction</span>
                                </td>
                                <td>
                                    <small>Time Until Next Auction</small>
                                    <br>
                                    <ul>
                                        <a href="javascript://"><li>14</li></a>
                                        <a href="javascript://"><li>2</li></a>
                                        <a href="javascript://"><li>20</li></a>
                                        <a href="javascript://"><li>60</li></a>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <small>Date</small>
                                    <br>
                                    <span><?=date('m/d/Y')?></span>
                                </td>
                                <td>
                                    <small>Auction Type</small>
                                    <br>
                                    <span>Commercial Auction</span>
                                </td>
                                <td>
                                    <small>Time Until Next Auction</small>
                                    <br>
                                    <ul>
                                        <a href="javascript://"><li>14</li></a>
                                        <a href="javascript://"><li>2</li></a>
                                        <a href="javascript://"><li>20</li></a>
                                        <a href="javascript://"><li>60</li></a>
                                    </ul>
                                </td>
                            </tr>
                        </table>
                    </div><!-- /data -->
                </div><!-- /home-calendar-box -->
            </div><!-- /6 -->
            <div class="col-md-6">
                <div class="home-calendar-box">
                    <div class="title"><h1>Current Live Auctions</h1></div><!-- /title -->
                    <div class="video-box">
                        <iframe src="https://www.youtube.com/embed/KTZHWwcq-NU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div><!-- /video-box -->
                </div><!-- /home-calendar-box -->
            </div><!-- /6 -->
        </div><!-- /row -->
    </div><!-- /container -->
</div><!-- /home-calendar -->





<div class="home-page-background-sections">
    <div class="clear"></div>
    <div class="background-box background-box-left">
        <div class="inner">
            <h1>partner</h1>
            <p>Grow your business with List Capital Advisors.</p>
            <a href="javascript://">submit a deal</a>
        </div><!-- /inner -->
    </div><!-- /background-box -->
    <div class="background-box background-box-right">
        <div class="inner">
            <h1>careers</h1>
            <p>Start your next chapter.</p>
            <a href="javascript://">view jobs</a>
        </div><!-- /inner -->
    </div><!-- /background-box -->
    <div class="clear"></div>
</div><!-- /home-page-background-sections -->
    
    <div class="container">
        <div class="home-page-map">
            <div class="row">
                <div class="col-md-12"><h1>Serviced Areas</h1></div><!-- /12 -->
                <div class="col-md-12">
                <div id="map2"></div>
                </div><!-- /12 -->
            </div>
        </div><!-- /home-page-map -->
    </div>




