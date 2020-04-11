

<!-- start recent properties -->
<section class="properties">
    
        <!-- <ul class="propertyCat_list option-set">
            <?php
            switch ($menu) {
                case 'all':
                    ?>
                    <li><a href="<?php echo site_url('home/properties/all'); ?>" data-filter="*" class="current triangle">ALL</a></li>
                    <li><a href="<?php echo site_url('home/properties/sale'); ?>" data-filter=".sale">FOR SALE</a></li>
                    <li><a href="<?php echo site_url('home/properties/rent'); ?>" data-filter=".rent">FOR RENT</a></li>
                    <?php
                    break;
                case 'sale':
                    ?>
                    <li><a href="<?php echo site_url('home/properties/all'); ?>" data-filter="*">ALL</a></li>
                    <li><a href="<?php echo site_url('home/properties/sale'); ?>" data-filter=".sale" class="current triangle">FOR SALE</a></li>
                    <li><a href="<?php echo site_url('home/properties/rent'); ?>" data-filter=".rent">FOR RENT</a></li>
                    <?php
                    break;
                case 'rent':
                    ?>
                    <li><a href="<?php echo site_url('home/properties/all'); ?>" data-filter="*">ALL</a></li>
                    <li><a href="<?php echo site_url('home/properties/sale'); ?>" data-filter=".sale">FOR SALE</a></li>
                    <li><a href="<?php echo site_url('home/properties/rent'); ?>" data-filter=".rent" class="current triangle">FOR RENT</a></li>
                    <?php
                    break;
                default:
                    ?>
                    <li><a href="<?php echo site_url('home/properties/all'); ?>" data-filter="*" class="current triangle">ALL</a></li>
                    <li><a href="<?php echo site_url('home/properties/sale'); ?>" data-filter=".sale">FOR SALE</a></li>
                    <li><a href="<?php echo site_url('home/properties/rent'); ?>" data-filter=".rent">FOR RENT</a></li>
                    <?php
                    break;
            }
            ?>
            <li><a href="javascript://">AUCTION</a></li>
            <li><a href="javascript://">BIDDING</a></li>
            <?php if ($login == true): ?>
                <li><a href="<?=BASEURL.'home/dash'?>">DASHBOARD</a></li>
                <li><a href="<?=BASEURL.'home/logout'?>">LOGOUT</a></li>
            <?php else: ?>
                <li><a href="<?=BASEURL.'home/login'?>">LOGIN</a></li>
                <li><a href="<?=BASEURL.'home/register'?>">REGISTER</a></li>
            <?php endif ?>
        </ul> -->
    <div class="container-fluid">
        <div class="divider"></div>
        <div class="row">
        <div class="filters">
            <div class="col-sm-12 col-md-2 text-center">
                <strong style="font-size: 24px;">
                    <?php if (isset($properties) && count($properties) > 0){echo count($properties);}else{echo 0;}?> Results</strong>
                <p>Comercial Properties For Sale</p>
            </div>
            <form>
                <div class="col-xs-6 col-sm-4 col-md-2">
                    <label>Search By Keyword</label>
                    <input type="text" name="search" class="form-control">
                </div>
                <div class="col-xs-6 col-sm-4 col-md-2">
                    <label>Property Type</label>
                    <div class="formBlock select">
                        <select name="property type" id="_propertytype_" class="formDropdown" style="padding:6px;">
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
                <div class="col-xs-6 col-sm-4 col-md-2">
                    <label>State/Region</label>
                    <select name="property type" id="_propertytype_" class="formDropdown" style="padding:6px;">
                        <option value="">Any</option>
                        <option value="1">Family House</option>
                        <option value="2">Apartment</option>
                        <option value="3">Condo</option>
                        <option value="4">Villa</option>
                        <option value="5">Office</option>
                    </select>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-2">
                    <label>Listing type</label>
                    <select name="property type" id="_propertytype_" class="formDropdown" style="padding:6px;">
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
                <div class="col-sm-3 col-md-1">
                    <button class="btn btn-primary">Filter</button>
                </div>
            </form>
            <div class="col-sm-12 col-md-1 text-center">
                <a href="javascript://" class="map-show-hide-btn"><i class="fas fa-expand"></i></a>
            </div>
        </div><!-- /filters -->
        <!-- <?php
        if (isset($properties) && count($properties) > 0)
        {
        ?>
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
        
        <?php
        }
        else
        {
            echo "Nothing to show right now :(";
        }
        ?> -->
        </div><!-- end row -->
        <!-- <ul class="pageList">
            <li><a href="#">&lt;</a></li>
            <li><a href="#" class="current">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">&gt;</a></li>
        </ul> -->
    </div><!-- end container -->

    <div id="map">

    </div><!-- /map -->
    <div class="container">
        <div class="row">
        <?php
            if (isset($properties) && count($properties) > 0)
            {
            ?>
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
                <div class="col-sm-6 col-md-4">
                    <div class="list">
                        <div class="clear"></div>
                        <div class="top-avail">available</div><!-- /top-avail -->
                        <div class="main-img">
                            <a href="<?php echo site_url('home/single/'.$val['property_id']); ?>">
                                <img src="<?php echo base_url(); ?>asset/img/768x507.gif" class="img-resp">
                            </a>
                        </div><!-- /main-img -->
                        <div class="top-avail" style="text-transform: capitalize;"><?=$val['address']?></div><!-- /top-avail -->
                        <div class="detials">
                            <div class="pro-type">
                                <div class="type text-center">
                                    <p>Property Type</p> 
                                    <div><i class="fas fa-gas-pump"></i></div>
                                    <p class="nechye-wala-p"><?=$_property_type?></p> 
                                </div><!-- /type -->
                                <div class="values">
                                    <div class="val_">
                                        <div class="clear"></div>
                                        <p class="left">Asset Type</p>
                                        <p class="right"><?=$val['contract_type']?></p>
                                        <div class="clear"></div>
                                    </div><!-- /val_ -->
                                    <div class="val_">
                                        <div class="clear"></div>
                                        <p class="left">City</p>
                                        <p class="right"><?=$val['city']?></p>
                                        <div class="clear"></div>
                                    </div><!-- /val_ -->
                                    <div class="val_">
                                        <div class="clear"></div>
                                        <p class="left">State</p>
                                        <p class="right"><?=$val['state']?></p>
                                        <div class="clear"></div>
                                    </div><!-- /val_ -->
                                    <div class="val_">
                                        <div class="clear"></div>
                                        <p class="left">Zipcode</p>
                                        <p class="right"><?=$val['zip_code']?></p>
                                        <div class="clear"></div>
                                    </div><!-- /val_ -->
                                </div><!-- /values -->
                            </div><!-- /pro-type --> 
                            <div class="pro-type">
                                <div class="type text-center">
                                    <p><br>Property Value</p>
                                    <strong><p class="nechye-wala-p">$<?=$val['price']?></p></strong>
                                    <p style="visibility: hidden;margin: 0;">Estimated</p>
                                </div><!-- /type -->
                                <div class="values">
                                    <div class="val_">
                                        <div class="clear"></div>
                                        <p class="left">Land Area</p>
                                        <p class="right"><!-- <img src="<?php echo base_url(); ?>asset/img/icon-area.png" alt="" style="margin-right:7px;" /> --><?=$val['size']?> Area</p>
                                        <div class="clear"></div>
                                    </div><!-- /val_ -->
                                    <div class="val_">
                                        <div class="clear"></div>
                                        <p class="left">Beds</p>
                                        <p class="right"><!-- <img src="<?php echo base_url(); ?>asset/img/icon-bed.png" alt="" style="margin-right:7px;" /> --><?=$val['bedroom']?> Beds</p>
                                        <div class="clear"></div>
                                    </div><!-- /val_ -->
                                    <div class="val_">
                                        <div class="clear"></div>
                                        <p class="left">Baths</p>
                                        <p class="right"><!-- <img src="<?php echo base_url(); ?>asset/img/icon-drop.png" alt="" style="margin-right:7px;" /> --><?=$val['bathroom']?> Baths</p>
                                        <div class="clear"></div>
                                    </div><!-- /val_ -->
                                    <div class="val_">
                                        <div class="clear"></div>
                                        <p class="left">Garage</p>
                                        <p class="right"><!-- <img src="<?php echo base_url(); ?>asset/img/icon-drop.png" alt="" style="margin-right:7px;" /> --><?=$val['garage']?> garage</p>
                                        <div class="clear"></div>
                                    </div><!-- /val_ -->
                                </div><!-- /values -->
                            </div><!-- /pro-type -->
                        </div><!-- /details -->
                        <div class="top-avail" style="text-transform: capitalize;">Asking Price: $<?=$val['price']?></div><!-- /top-avail -->
                        <div class="last-button">
                            <a href="javascript://">make an Offer</a>
                            <a href="<?php echo site_url('home/single/'.$val['property_id']); ?>" style="margin: 0">view Listing</a>
                        </div><!-- /last-button -->
                        <div class="clear"></div>
                    </div><!-- /list -->
                </div><!-- /4 -->
            <?php
                }
            ?>
        <?php
        }
        else
        {
            echo "Nothing to show right now :(";
        }
        ?>
        </div><!-- /row -->
    </div><!-- /container -->


</section>
<!-- end recent properties -->






















