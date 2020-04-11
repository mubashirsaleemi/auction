<!-- start my properties list -->
<section class="properties">
    <div class="container">
        <div class="row">
        <?php
        if ($error == true)
        {
            if ($error_code == 1)
            {
            ?>
                <div class="success" style="padding:10px;">PROPERTY Added :)</div><br>
            <?php
            }
            else
            {
            ?>
                <div class="error" style="padding:10px;">Error: Sorry :( something wroung pleas try again</div><br>
            <?php
            }
        }
        else
        {
            echo "";
        }
        ?>
            <div class="col-lg-12 col-md-12">
                <h3>PROPERTY INFO</h3>
                <div class="divider"></div>
            </div><!-- /12 -->
            <!-- start property info -->
            <div class="col-lg-4 col-md-4">
                <div class="sidebarWidget submission">
                    <form method="post" action="<?=BASEURL.'home/post_property'?>" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="formBlock">
                                    <label for="address">Auction Type <span>*</span></label><br/>
                                    <input type="radio" required name="auction_type" value="in_person_auction" />In Person &nbsp;&nbsp;
                                    <input type="radio" required name="auction_type" value="online_auction" />Online
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="formBlock">
                                    <label for="address">Address <span>*</span></label><br/>
                                    <input type="text" required name="address" id="address" />
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="formBlock">
                                    <label for="city">City <span>*</span></label><br/>
                                    <input type="text" required name="city" id="city" />
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="formBlock select">
                                    <label for="state">State</label><br/>
                                    <select name="state" required id="state" class="formDropdown">
                                        <option value="Alaska">Alaska</option>
                                        <option value="Hawaii">Hawaii</option>
                                        <option value="California">California</option>
                                        <option value="New York">New York</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="formBlock">
                                    <label for="description">Description <span>*</span></label><br/>
                                    <textarea required name="description" id="description" class="formDropdown" style="width:100%;"></textarea><br/><br/>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                        </div><!-- end row -->
                </div>
            </div>
            <!-- end property info -->

            <!-- start property info -->
            <div class="col-lg-4 col-md-4">
                <div class="sidebarWidget submission">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-6">
                            <div class="formBlock">
                                <label for="price">Price ($) <span>*</span></label><br/>
                                <input type="text" required name="price" id="price" />
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-6">
                            <div class="formBlock">
                                <label for="address">Size <span>*</span></label><br/>
                                <input type="text" required name="size" id="address" />
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-6">
                            <div class="formBlock">
                                <label for="city">Bedrooms <span>*</span></label><br/>
                                <input type="number" required name="bedroom" id="city" />
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-6">
                            <div class="formBlock">
                                <label for="city">Bathrooms <span>*</span></label><br/>
                                <input type="number" required name="bathroom" id="city" />
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-6">
                            <div class="formBlock">
                                <label for="city">Garages <span>*</span></label><br/>
                                <input type="number" required value="0" name="garage" id="city" />
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-6">
                            <div class="formBlock">
                                <label for="description">Google Map</label><br/>
                                <textarea name="google_map" id="description" class="formDropdown" style="width:100%;"></textarea><br/><br/>
                            </div>
                        </div>
                        <div style="clear:both;"></div>
                    </div><!-- end row -->
                </div>
            </div>
            <!-- end property info -->

            <!-- start additional info -->
            <div class="col-lg-4 col-md-4">
                <div class="sidebarWidget submission">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-6">
                            <div class="formBlock select">
                                <label for="propertyType">Asset Type <span>*</span></label><br/>
                                <select name="asset_type" required id="assetType" class="formDropdown">
                                    <?php
                                    foreach ($asset_type as $key => $val)
                                    {
                                    ?>
                                        <option value="<?=$val['asset_type_id']?>"><?=$val['title']?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-6">
                            <div class="formBlock select">
                                <label for="propertyType">Property Type <span>*</span></label><br/>
                                <select name="property_type" required id="propertyType" class="formDropdown">
                                    <?php
                                    foreach ($property_type as $key => $val)
                                    {
                                    ?>
                                        <option value="<?=$val['property_type']?>"><?=$val['name']?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-6">
                            <div class="formBlock select">
                                <label for="contract_type">Contract Type <span>*</span></label><br/>
                                <select name="contract_type" required id="contractType" class="formDropdown">
                                    <option value="sale">For Sale</option>
                                    <option value="rent">For Rent</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-6">
                            <div class="formBlock">
                                <label for="image">Image</label><br/>
                                <input id="image" type="file" name="image1">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-6">
                            <div class="formBlock">
                                <label>Photos</label><br/>
                                <input type="file" name="image2">
                                <input type="file" name="image3">
                                <input type="file" name="image4">
                                <input type="file" name="image5">
                            </div>
                        </div>
                        <div style="clear:both;"></div>
                    </div><!-- end row -->
                </div>
            </div>
            <!-- end additional info -->

                <div class="col-lg-4 col-lg-offset-4 col-md-4">
                    <div class="formBlock">
                        <input class="buttonColor" type="submit" value="SUBMIT PROPERTY">
                    </div>
                </div>
            </form><!-- end form -->

        </div><!-- end row -->
    </div><!-- end container -->
</section>
<!-- end my properties list -->


<style>
.formBlock label span{
    color: red;
}
</style>