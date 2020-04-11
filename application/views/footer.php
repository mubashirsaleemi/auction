    <div class="home-signup-area">
        <div class="container">
            <form>
                <div class="row">
                    <div class="col-md-12">
                        <h1>sign up for the List Capital Advisors mailing list</h1>
                    </div><!-- /12 -->
                    <div class="col-md-2 offset-2"></div><!-- /2 -->
                    <div class="col-md-2"><input type="text" name="fname" placeholder="First Name" required="required"></div><!-- /2 -->
                    <div class="col-md-2"><input type="text" name="lname" placeholder="Last Name" required="required"></div><!-- /2 -->
                    <div class="col-md-2"><input type="email" name="email" placeholder="Email Address" required="required"></div><!-- /2 -->
                    <div class="col-md-2"><input type="submit" value="submit"></div><!-- /2 -->
                    <div class="col-md-2 offset-2"></div><!-- /2 -->
                </div><!-- /row -->
            </form>
        </div><!-- /container -->
    </div><!-- /home-signup-area -->


<!-- <div class="col-md-3">
    <a href="javascript://" class="footer-link">Become A Partner</a>
    <a href="javascript://" class="footer-link">Careers – View Jobs</a>
    <div class="footer-images">
        <ul>
            <li><a href="javascript://"><img src="<?=IMG?>apple.png" ></a></li>
            <li><a href="javascript://" ><img src="<?=IMG?>google.png" ></a></li>
        </ul>
    </div>/footer-images
</div>/3
 -->


    <div class="footer-final">
        <div class="container">
            <div class="footer-top-part">
                <div class="row">
                    <div class="col-md-12 footer-images text-center">
                        <!-- <a href="javascript://" class="footer-link">Become A Partner</a>
                            <a href="javascript://" class="footer-link">Careers – View Jobs</a>
                            <div class="footer-images">
                                <ul>
                                </ul>
                            </div> -->
                        <a href="javascript://"><img src="<?=IMG?>apple.png" style="width: 100px;"></a>
                        <ul class="social">
                            <li><a href="javascript://"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="javascript://"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="javascript://"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="javascript://"><i class="fas fa-rss"></i></a></li>
                        </ul>
                        <a href="javascript://"><img src="<?=IMG?>google.png" style="width: 100px;"></a>
                    </div> <!-- /6 -->
                </div><!-- /row -->
            </div>
            <div class="footer-top-part">
                <div class="row">
                    <div class="col-md-3">
                        <ul>
                            <li><a href="javascript://">Home</a></li>
                            <li><a href="javascript://">About Us</a></li>
                            <li><a href="javascript://">Commercial</a></li>
                            <li><a href="javascript://">Residential</a></li>
                        </ul>
                    </div><!-- /3 -->
                    <div class="col-md-3">
                        <ul>
                            <li><a href="javascript://">Partner</a></li>
                            <li><a href="javascript://">Careers</a></li>
                            <li><a href="javascript://">Real Estate Policy</a></li>
                            <li><a href="javascript://">Terms of Service</a></li>
                        </ul>
                    </div><!-- /3 -->
                    <div class="col-md-3">
                        <ul>
                            <li><a href="javascript://">Privacy Policy</a></li>
                            <li><a href="javascript://">Auction Policy</a></li>
                            <li><a href="javascript://">Cookie Policy</a></li>
                            <li><a href="javascript://">Accessibility</a></li>
                        </ul>
                    </div><!-- /3 -->
                    <div class="col-md-3">
                        <ul>
                            <li><a href="javascript://">Fair Housing</a></li>
                            <li><a href="javascript://">DMCA</a></li>
                            <li><a href="javascript://">Contact Us</a></li>
                            <li><a href="javascript://">Get Help</a></li>
                        </ul>
                    </div><!-- /3 -->
                </div><!-- /row -->
            </div><!-- /footer-top-part -->
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>&copy; Copyright <?=date('Y')?> List Capital Advisors, LLC</p>
                </div><!-- /6 -->
            </div><!-- /row -->
        </div><!-- /container -->
    </div><!-- /footer-final -->

<!-- JavaScript file links -->
<script src="<?php echo base_url(); ?>asset/js/jquery.js"></script>			<!-- Jquery -->
<script src="<?php echo base_url(); ?>asset/js/bootstrap.min.js"></script>  <!-- bootstrap 3.0 -->
<script src="<?php echo base_url(); ?>asset/js/respond.js"></script>
<script src="<?php echo base_url(); ?>asset/js/jquery.bxslider.min.js"></script>           <!-- bxslider -->
<script src="<?php echo base_url(); ?>asset/js/tabs.js"></script>       <!-- tabs -->
<script src="<?php echo base_url(); ?>asset/js/jquery.nouislider.min.js"></script>  <!-- price slider -->

<script src="<?php echo base_url(); ?>asset/js/jquery.bxslider.min.js"></script>           <!-- bxslider -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqb3fT3SbMSDMggMEK7fJOIkvamccLrjA&sensor=false"></script><!-- google maps -->
<script type="text/javascript" src="<?php echo base_url(); ?>asset/js/map-one-pin.js"></script>
 <!-- map script -->
<script type="text/javascript" src="http://jvectormap.com/js/jquery-jvectormap-2.0.3.min.js"></script>
<script type="text/javascript" src="http://jvectormap.com/js/jquery-jvectormap-us-aea.js"></script>

<script>
$(function(){
    new jvm.Map({
    map: 'us_aea',
    container: $('#map2'),
    regionStyle:{
        initial:{
            fill: '#eee'
        }
    },
    regionLabelStyle: {
      initial: {
        fill: '#0E2E47'
      },
      hover: {
        fill: '#000'
      }
    },
    labels: {
      regions: {
        render: function(code){
          var doNotShow = ['US-RI', 'US-DC', 'US-DE', 'US-MD'];

          if (doNotShow.indexOf(code) === -1) {
            return code.split('-')[1];
          }
        },
        offsets: function(code){
          return {
            'CA': [-10, 10],
            'ID': [0, 40],
            'OK': [25, 0],
            'LA': [-20, 0],
            'FL': [45, 0],
            'KY': [10, 5],
            'VA': [15, 5],
            'MI': [30, 30],
            'AK': [50, -25],
            'HI': [25, 50]
          }[code.split('-')[1]];
        }
      }
    }
    });
});
</script>



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




<div class="modal fade" id="Subscribe-form">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Subscribe</h4>
            </div>
            <div class="modal-body">

                <div class="filterContent defaultTab sidebarWidget">
                    <form>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="formBlock">
                                <label for="login">First Name</label><br/>
                                <input type="text" required name="fname" id="login" />
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="formBlock">
                                <label for="pass">Last Name</label><br/>
                                <input type="text" required name="password" id="pass" />
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="formBlock">
                                <label for="pass">Email</label><br/>
                                <input type="email" required name="email" id="pass" />
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="formBlock">
                                <label for="pass">Phone</label><br/>
                                <input type="text" required name="phone" id="pass" />
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="formBlock">
                                    <input class="buttonColor" type="submit" value="Submit" style="margin-top:24px;">
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                        </div><!-- end row -->
                    </form><!-- end form -->
                </div><!-- end login form -->

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>