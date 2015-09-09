<div class="" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myLoginLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <h3 class="modal-title" id="login-title">Sign In</h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-11">
                        <div class="gorm-group">
                            <div class="row login-content">
                                <form action="<?php echo base_url() . "user/check_user_login" ?>" method="POST" >
                                    <div class="col-md-5">
                                        <label for="Email">Email Address <span class="pull-right text-right">:</span> </label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="email" name="user_email_address" class="form-control">
                                    </div>

                                    <div class="col-md-5">
                                        <label for="Email">Password <span class="pull-right text-right">:</span> </label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="password" name="user_password" class="form-control">
                                    </div>

                                    <div class="col-md-5"></div>

                                    <div class="col-md-7">
                                        <button type="submit" class="btn btn-super" name="login-button">Sign In <span class="glyphicon glyphicon-arrow-right pull-right"></span></button>

                                        <div class="forget-password">
                                            <a href="<?php echo base_url()."user/register" ?>" class="pull-left">Sign Up</a>
                                            <a href="<?php echo base_url()."user/change_password" ?>" class="pull-right">Forget Password</a>
                                        </div>

                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
        </div>
    </div>
</div> <!-- /Modal -->