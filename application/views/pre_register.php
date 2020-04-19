<div class="login-section pre_register">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6 top-space">
                <?php if (isset($_GET['msg'])): ?>
                    <div class="alert alert-danger"><?=$_GET['msg']?></div>
                <?php endif ?>
                <h2>Get Started by joining Realtymogul Now.</h2>
                <p>Set up your account to unlock investment opportunities</p>
                <!-- start login form -->
                <div class="defaultTab">
                    <form action="<?php echo site_url('Home/register'); ?>" id="pre_register_form" method="get">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <h4>Your Primary Reason For Joining <abbr title="help">?</abbr></h4>
                                <label class="checkbox-block">Personal Investing
                                    <input type="checkbox" name="reason[]" value="personal investment">
                                    <span class="checkmark"></span>
                                </label><br>
                                <label class="checkbox-block no-need">Raising Capital As a Real Estate Company
                                    <input type="checkbox" name="reason[]" value="Raising Capital As a Real Estate Company">
                                    <span class="checkmark"></span>
                                </label><br>
                                <label class="checkbox-block">Personal Investing
                                    <input type="checkbox" name="reason[]" value="personal investment">
                                    <span class="checkmark"></span>
                                </label><br>
                                <label class="checkbox-block no-need">Raising Capital As a Real Estate Company
                                    <input type="checkbox" name="reason[]" value="Raising Capital As a Real Estate Company">
                                    <span class="checkmark"></span>
                                </label><br>
                                <div class="col-sm-6">
                                    <div class="formBlock">
                                        <input class="buttonColor" type="submit" value="CONTINUE" style="margin-top:24px;">
                                    </div>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                        </div><!-- end row -->
                    </form><!-- end form -->
                </div><!-- end login form -->
            </div>
            <div class="col-lg-3 col-md-2 right-bar"></div>
            <div class="col-lg-4 col-md-4 right-align-member">
                <h5>membership Benifits</h5>
                <p><i class="fas fa-check"></i> 24/7 Access to fully vetted investment opportunities. </p>
                <p><i class="fas fa-check"></i> A team of licensed investment professionals available to talk by phone or email.</p>
                <p><i class="fas fa-check"></i> Access to exclusive, thoroughly vetted opportunities in institutional-quality properties. </p>
            </div>
        </div>
    </div><!-- /container --> 
</div><!-- login-section -->