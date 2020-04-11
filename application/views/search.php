<!-- start recent properties -->
<section class="properties">
    <div class="container">
        <h3><?=strtoupper($page_title_)?></h3>
        <div class="divider"></div>
        <div class="row">
        <?php
        if (isset($q) && count($q) > 0)
        {
        ?>
            <?php
                foreach ($q as $key => $val)
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
                                <a href="<?php echo site_url('home/single/'.$val['property_id']); ?>" class="propertyImgLink"><img class="propertyImg" src="<?=IMG?>768x507.gif" alt="" /></a>
                                <?php if (strlen($val['address']) > 30): ?>
                                    <h4><a href="property_single.html"><?=substr($val['address'],0,30)?>...</a></h4>
                                <?php else: ?>
                                    <h4><a href="property_single.html"><?=$val['address']?></a></h4>
                                <?php endif ?>
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
            echo "Nothing to show :(";
        }
        ?>
        </div><!-- end row -->
        <!-- <ul class="pageList">
            <li><a href="#">&lt;</a></li>
            <li><a href="#" class="current">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">&gt;</a></li>
        </ul> -->
    </div><!-- end container -->
</section>
<!-- end recent properties -->