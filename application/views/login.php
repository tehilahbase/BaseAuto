<div class="content content-boxed overflow-hidden pulldown">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
            <div class="push-30-t push-50 animated fadeIn">
                <div class="text-center"> <img alt="<?php echo app_name; ?>" src="<?php echo base_url('assets/images/logo-small.png'); ?>" /> 
                    <p class="text-muted push-15-t"><?php if(!empty($err_msg)){echo $err_msg;} else {echo app_meta_desc;} ?></p>
                </div>
                <?php echo form_open_multipart('login', array('id'=>'bb_ajax_form', 'clear'=>false, 'class'=>'js-validation-login form-horizontal push-30-t')); ?>
                    <div id="bb_ajax_msg"></div>
                    
                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="form-material form-material-danger floating">
                                <input class="form-control" type="text" id="username" name="username">
                                <label for="username">Username/Email</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="form-material form-material-danger floating">
                                <input class="form-control" type="password" id="-password" name="password">
                                <label for="password">Password</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-6">
                            <label class="css-input switch switch-sm switch-danger">
                                <input type="checkbox" id="remember-me" name="remember-me">
                                <span></span> Remember Me? </label>
                        </div>
                        <div class="col-xs-6">
                            <div class="font-s13 text-right push-5-t small"> <a href="<?php echo base_url('forgot'); ?>">Forgot Password?</a> </div>
                        </div>
                    </div>
                    <div class="form-group push-30-t">
                        <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                            <button class="btn btn-sm btn-block btn-danger bb_form_btn" type="submit"><i class="fa fa-key"></i> Log in</button>
                        </div>
                    </div>
                <?php echo form_close(); ?>
            </div>
        </div>
        
    </div>
</div>
