<!-- start subheader -->
<!-- <section class="subHeader page">
    <div class="container">
        <h1>Property Single</h1>
        <form class="searchForm" method="post" action="#">
            <input type="text" name="search" value="Search our site" />
        </form>
    </div>end subheader container
</section>end subheader section
 -->
<!-- start main content section -->
<section class="properties">
    <div class="container">
    	
        <div class="row">

            <!-- start content -->
            <div class="col-lg-9 col-md-9">
                <div class="gallery">
                    <ul class="bxslider2">
                      <li><img src="<?php echo base_url(); ?>asset/img/1600x670.gif" alt="" /></li>
                      <li><img src="<?php echo base_url(); ?>asset/img/1600x670.gif" alt="" /></li>
                      <li><img src="<?php echo base_url(); ?>asset/img/1600x670.gif" alt="" /></li>
                      <li><img src="<?php echo base_url(); ?>asset/img/1600x670.gif" alt="" /></li>
                    </ul>

                    <div id="bx-pager">
                      <a data-slide-index="0" href=""><img src="<?php echo base_url(); ?>asset/img/112x112.gif" alt="" /></a>
                      <a data-slide-index="1" href=""><img src="<?php echo base_url(); ?>asset/img/112x112.gif" alt=""/></a>
                      <a data-slide-index="2" href=""><img src="<?php echo base_url(); ?>asset/img/112x112.gif" alt=""/></a>
                      <a data-slide-index="3" href=""><img src="<?php echo base_url(); ?>asset/img/112x112.gif" alt=""/></a>
                    </div>
                    <div class="sliderControls">
                        <span class="slider-prev"></span>
                        <span class="slider-next"></span>
                    </div>
                </div>
                <?php
                // var_dump($q);die;
                ?>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="overview">
                        <h4>OVERVIEW</h4>
                        <ul class="overviewList">
                        <?php
                        foreach ($property_type as $key => $val)
                        {
                            if ($val['property_type'] == $q->property_type)
                            {
                                $_property_type = $val['name'];
                            }
                        }
                        ?>
                            <li>Property Type <span style="text-transform: uppercase;"><?=$_property_type?></span></li>
                            <li>Contract Type <span style="text-transform: uppercase;"><?=$q->contract_type?> SALE</span></li>
                            <li>Location <span style="text-transform: uppercase;"><?=$q->city?>, <?=$q->state?></span></li>
                            <li>Size <span><?=$q->size?></span></li>
                            <li>Bedrooms <span><?=$q->bedroom?></span></li>
                            <li>Bathrooms <span><?=$q->bathroom?></span></li>
                            <li>Garages <span><?=$q->garage?></span></li>
                        </ul>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <p class="price" style="float:right;">$<?=$q->price?></p>
                        <p class="forSale" style="text-transform: uppercase;float:right; margin-right:20px;">FOR <?=$q->contract_type?></p>
                        <h1><?=$q->address?></h1>
                        <p><?=$q->city?>, <?=$q->state?></p>
                        <p><?=$q->description?></p><br/>
                        
                    </div><!-- end col -->
                </div><!-- end row -->
                <h4>GOOGLE MAP</h4>
                <div class="divider thin"></div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="mera-map"><?=$q->google_map?></div>
                    </div><!-- end col -->
                </div><!-- end row -->
                <br><br>


                <!-- start related properties -->
                <h4>RELATED PROPERTIES</h4>
                <div class="divider thin"></div>
                <div class="row">
                    <?php
                    foreach ($wrp as $key => $val)
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
                                    <a class="propertyType" href="#" style="text-transform: uppercase;"><?=$_property_type?></a>
                                    <a href="<?php echo site_url('home/single/'.$val['property_id']); ?>" class="propertyImgLink"><img class="propertyImg" src="<?php echo base_url(); ?>asset/img/768x507.gif" alt="" /></a>
                                    <h4><a href="property_single.html"><?=$val['address']?></a></h4>
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
                </div><!-- end related properties row -->

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
.mera-map iframe{
    width: 100%;
    max-height: 100%;
}
</style>