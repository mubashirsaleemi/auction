    
    <div class="home-page-form white" id="contact-detail">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h1>Get In Touch</h1>
                    <form>
                        <div class="input-groupss">
                            <input type="text" placeholder="Username" required="required">
                        </div>
                        <div class="input-groupss">
                            <input type="text" placeholder="Email" required="required">
                        </div>
                        <div class="input-groupss">
                            <textarea class="form-control" placeholder="Your Message"></textarea>
                        </div>
                        <br>
                        <input type="submit" value="Send Message">
                    </form>
                </div><!-- /4 -->
                <div class="col-md-6 col-md-offset-2">
                    <h1>Contact Information</h1>
                    <!-- <p>TBD</p> -->
                    <table>
                        <tr>
                            <td class="img"><i class="fas fa-map-marker-alt"></i></td>
                            <td class="text">
                                <span>Location</span>
                                <br>
                                <small>24275 Katy Freeway, Suite 400, Katy, Texas 77494</small>
                            </td>
                        </tr>
                        <tr>
                            <td class="img"><i class="fas fa-phone"></i></td>
                            <td class="text">
                                <span>Call Us</span>
                                <br>
                                <small>281.402.0987</small>
                            </td>
                        </tr>
                        <tr>
                            <td class="img"><i class="fas fa-fax"></i></td>
                            <td class="text">
                                <span>Fax Us</span>
                                <br>
                                <small>281.402.0988</small>
                            </td>
                        </tr>
                        <tr>
                            <td class="img"><i class="fas fa-envelope"></i></td>
                            <td class="text">
                                <span>Email Us</span>
                                <br>
                                <small>info@listcapitaladvisors.com</small>
                            </td>
                        </tr>
                    </table>
                </div><!-- /6 -->
            </div><!-- /row -->
        </div><!-- /container -->
    </div><!-- /home-page-form -->


    <div class="home-news-letter" style="padding: 0;">
        <form>
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="news-letter-heading"><h1>Subscribe to Newsletter</h1></div><!-- /news-letter-heading -->
                </div><!-- /2 -->

                <div class="col-md-4">
                    <div class="news-letter-form" style="padding-top: 13px;">
                        
                            <div class="clear"></div>
                            <div class="form-group">             
                                <input type="email" class="form-control" style="width: 100%" placeholder="Your Email Address" required="required">
                            </div>
                            <div class="clear"></div>
                        
                    </div><!-- /news-letter-form -->
                </div><!-- /4 -->

                <div class="col-md-4">
                    <div class="news-letter-form" style="padding-top: 13px;">
                        
                            <div class="clear"></div>
                            <div class="form-group mx-sm-3 mb-2">             
                                <input type="text" class="form-control" placeholder="Your Phone Number" required="required">
                            </div>
                            <div class="clear"></div>
                        
                    </div><!-- /news-letter-form -->
                </div><!-- /4 -->

                <div class="col-md-2">
                    <div class="news-letter-form" style="padding-top: 13px;">
                        
                            <div class="clear"></div>
                            <div class="form-group mx-sm-3 mb-2">             
                                <button type="submit" class="btn btn-default mb-2">Subscribe</button>
                            </div>
                            <div class="clear"></div>
                        
                    </div><!-- /news-letter-form -->
                </div><!-- /2 -->


            </div><!-- /row -->
        </div><!-- /container -->
        </form>
    </div><!-- /home-news-letter -->

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul>
                        <li><a href="javascript://"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="javascript://"><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href="javascript://"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="javascript://"><i class="fas fa-rss"></i></a></li>
                    </ul>
                </div><!-- /12 -->
                <div class="col-md-12">
                    <p><?=date('Y')?> &copy; by the INFINITI Capital Advisors.</p>
                </div><!-- /12 -->
            </div><!-- /row -->
        </div><!-- /container -->
    </div><!-- /footer -->

<!-- JavaScript file links -->
<script src="<?php echo base_url(); ?>asset/js/jquery.js"></script>			<!-- Jquery -->
<script src="<?php echo base_url(); ?>asset/js/bootstrap.min.js"></script>  <!-- bootstrap 3.0 -->
<script src="<?php echo base_url(); ?>asset/js/respond.js"></script>
<script src="<?php echo base_url(); ?>asset/js/jquery.bxslider.min.js"></script>           <!-- bxslider -->
<script src="<?php echo base_url(); ?>asset/js/tabs.js"></script>       <!-- tabs -->
<script src="<?php echo base_url(); ?>asset/js/jquery.nouislider.min.js"></script>  <!-- price slider -->

<script src="<?php echo base_url(); ?>asset/js/jquery.bxslider.min.js"></script>           <!-- bxslider -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqb3fT3SbMSDMggMEK7fJOIkvamccLrjA&sensor=false"></script><!-- google maps -->
<script type="text/javascript" src="<?php echo base_url(); ?>asset/js/map-one-pin.js"></script> <!-- map script -->
<script>
//call bxslider for sub header section
$(document).ready(function(){
    
     //
    $('.js-contact-btn').on('click',function(e){
        e.preventDefault();
        console.log('clicked');
        $("html, body").animate({ scrollTop: $('#contact-detail').offset().top }, 1000);
    });
    $('.bxslider').bxSlider({
        auto: true,
        pager: false,
        nextSelector: '.slider-next',
        prevSelector: '.slider-prev',
        nextText: '<img src="<?php echo base_url(); ?>asset/img/slider-next.png" alt="slider next" />',
        prevText: '<img src="<?php echo base_url(); ?>asset/img/slider-prev.png" alt="slider prev" />'
    });
});
</script>

<script>
//Setup price slider 
var Link = $.noUiSlider.Link;

$(".priceSlider").noUiSlider({
     range: {
      'min': 0,
      'max': 800000
    }
    ,start: [150000, 550000]
    ,step: 1000
    ,margin: 100000
    ,connect: true
    ,direction: 'ltr'
    ,orientation: 'horizontal'
    ,behaviour: 'tap-drag'
    ,serialization: {
        lower: [
            new Link({
                target: $("#price-min")
            })
        ],

        upper: [
            new Link({
                target: $("#price-max")
            })
        ],

        format: {
        // Set formatting
            decimals: 0,
            // thousand: ',',
            prefix: '$',
            encoder: function( value ){
                return value;
            }
        }
    }
});
</script>

<script>
// $.extend($.validator.messages, {
// required: "",
// minlength: "",
// maxlength: ""
// });
</script>

<script>
    $('.bxslider2').bxSlider({
      pagerCustom: '#bx-pager',
      nextSelector: '.slider-next',
      prevSelector: '.slider-prev',
      nextText: '<img src="<?php echo base_url(); ?>asset/img/slider-next2.png" alt="Next" />',
      prevText: '<img src="<?php echo base_url(); ?>asset/img/slider-prev2.png" alt="Previous" />'
    });
</script>
<script>
$(function(){
   $height = $(window).height();

    $(".slider-black").css('height', $height+'px');
    $(".slider-content").css('padding-top', $height/2+'px');
    
    $("#_propertytype_").change(function(){
        $id = $(this).find(':selected').val();
        $menu = '<?=$menu?>';
        var aho = "<?php echo site_url('home/properties/"+$menu+"/"+$id+"'); ?>";
        window.location = aho;
    })

    $(".sidebar-listing-menu-btn").on('click', function(event) {
        event.preventDefault();
        $("body").css('overflow', 'hidden');
        $(".sidebar-listing-meun-cover").show(0);
        $(".sidebar-listing-meun").animate({'right': '0px'}, 200);
    });
    $(".close-sidebar-listing-menu,.sidebar-listing-meun-cover").on('click', function(event) {
        event.preventDefault();
        $("body").css('overflow-y', 'auto');
        $(".sidebar-listing-meun-cover").hide(0);
        $(".sidebar-listing-meun").animate({'right': '-300px'}, 200);
    });


})// onload
</script>

</body>
</html>