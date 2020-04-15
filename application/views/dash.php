

<!-- start main content section -->
<section class="properties">
    <div class="container">
    	
        <div class="row">

            <!-- start content -->
            <div class="col-lg-9 col-md-9">
                <div class="row">
                    <div class="col-lg-4">
                        <a href="<?php echo site_url('home/EditProfileImage/'); ?>"><div class="edit-img-link"><img class="icon" src="<?php echo base_url(); ?>asset/img/icon-pencil.png" alt=""></div></a>
                        <img class="agentImg" src="<?php echo base_url(); ?>asset/img/768x507.gif" alt="" />
                        <div class="overview">
                        <h4><?=$user_meta['fname']?>' INFO</h4>
                        <ul class="overviewList">
                            <li>Email <span><?=$user_meta['email']?></span></li>
                            <li>Mobile Phone <span><?=$user_meta['mobile']?></span></li>
                            <li>Office Phone <span><?=$user_meta['phone']?></span></li>
                            <li>City <span><?=$user_meta['city']?></span></li>
                            <li><a href="<?php echo site_url('home/EditProfile/'.$user_meta['id']); ?>">Edit Profile</a></li>
                        </ul>
                        <div class="divider thin" style="margin-top:0px;"></div>
                        <ul class="socialIcons agent">
                            <li><a href="<?=$user_meta['facebook']?>"><img src="<?php echo base_url(); ?>asset/img/icon-fb.png" alt="" /></a></li>
                            <li><a href="<?=$user_meta['twitter']?>"><img src="<?php echo base_url(); ?>asset/img/icon-twitter.png" alt="" /></a></li>
                            <li><a href="<?=$user_meta['google']?>"><img src="<?php echo base_url(); ?>asset/img/icon-google.png" alt="" /></a></li>
                            <li><a href="<?=$user_meta['rss']?>"><img src="<?php echo base_url(); ?>asset/img/icon-rss.png" alt="" /></a></li>
                        </ul>
                        </div>
                        <div class="formBlock">
                            <a href="<?php echo site_url('home/add_property/'); ?>" class="buttonColor">+ADD PROPERTIES</a><br><br>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <h1><?=$user_meta['name']?></h1>
                        <p><?=$user_meta['about']?></p>
                        <br>
                    </div><!-- end col -->
                </div><!-- end row -->

                <!-- start related properties -->
                <h4>CURRENTLY LISTED PROPERTIES</h4>
                <div class="divider thin"></div>
                <div class="row">
                <?php
                if (isset($properties) && count($properties) > 0)
                {
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
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="propertyItem">
                            <div class="propertyContent">
                                <a class="propertyType" href="#"><?=$_property_type?></a>
                                <a href="<?php echo site_url('home/property_single/'.$val['property_id']); ?>" class="propertyImgLink"><img class="propertyImg" src="<?php echo base_url(); ?>asset/img/768x507.gif" alt="" /></a>
                                <h4><a href="property_single.html"><?=$val['address']?></a></h4>
                                <p><?=$val['city']?>, <?=$val['state']?></p>
                                <div class="divider thin"></div>
                                <p class="forSale">FOR <?=$val['contract_type']?></p>
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
                }
                else
                {
                    echo "No Property Yet.";
                }
                ?>
                </div><!-- end related properties row -->

                <br/>

                <!-- start contact form -->
                <!-- <h4>CONTACT AGENT</h4> -->
                <div class="divider thin"></div>
                <!-- <form method="post" action="#">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="formBlock">
                                <label for="name">Your Name</label><br/>
                                <input type="text" name="name" id="name" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="formBlock">
                                <label for="email">Your Email</label><br/>
                                <input type="text" name="email" id="email" />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="formBlock">
                                <label for="message">Your Message</label><br/>
                                <textarea name="message" id="message" class="formDropdown" style="width:100%;"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-3 col-lg-offset-9 col-md-4 col-md-offset-8 col-sm-4 col-sm-offset-8">
                            <div class="formBlock">
                                <input class="buttonColor" type="submit" value="CONTACT AGENT" />
                            </div>
                        </div>
                    </div>end row
                </form> --><!-- end form -->
                <!-- end contact form -->
                <br/>
            </div><!-- end content -->

            <!-- start sidebar -->
            <div class="col-lg-3 col-md-3">
                <!-- start property types widget -->
                <h3>PROPERTY TYPES</h3>
                <div class="divider"></div>
                <div class="propertyTypesWidget sidebarWidget">
                    <ul>
                    <?php
                    foreach ($property_type as $key => $value)
                    {
                    ?>
                        <li><h4><a href="<?php echo site_url('home/properties/all/'.$value['property_type'].''); ?>" style="text-transform: uppercase;"><?=$value['name']?></a></h4></li>
                    <?php
                    }
                    ?>
                    </ul>
                </div>
                <!-- end property types widget -->

            </div><!-- end col -->
        </div><!-- end row -->

    </div><!-- end container -->
</section>
<!-- end main content -->

<style>
.edit-img-link{
    padding: 7px 0px 7px 7px;
    position: absolute;
    border-radius: 5px;
    border: 1px solid #cfcfcf;
    background-color: #f6f6f6;
    background: -webkit-linear-gradient(#f8f8f8, #f2f2f2);
    background: -o-linear-gradient(#f8f8f8, #f2f2f2);
    background: -moz-linear-gradient(#f8f8f8, #f2f2f2);
    background: linear-gradient(#ffffff, #f2f2f2);
    -webkit-transition: color 0.2s linear;
    -moz-transition: color 0.2s linear;
    -ms-transition: color 0.2s linear;
    -o-transition: color 0.2s linear;
    transition: color 0.2s linear;
    display: none;
}
.col-lg-4:hover > a .edit-img-link{
    display: block;
}
p.forSale{
    text-transform: uppercase;
}
</style>