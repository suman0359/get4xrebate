<?php $user_email = $this->session->userdata('user_email'); ?>

<section id="dashboard">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="dashboard-box">
                    <div class="dashboard-icon">
                        <i class="d-icon icon-profile"></i>
                    </div>
                    <div class="box-details">
                        <h1>Profile</h1>
                        <h3><?php echo $user_email; ?></h3>
                    </div>
                    
                    <div class="action">
                        <a href="<?php echo base_url()."myaccount/edit_profile"; ?>" class="btn btn-primary">Edit</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="dashboard-box">
                    <div class="dashboard-icon">
                        <i class="d-icon icon-profile"></i>
                    </div>
                    <div class="box-details">
                        <h1>Broker Accounts</h1>
                        <h3>tasfir_suman@yahoo.com</h3>
                    </div>
                    
                    <div class="action">
                    	<a href="<?php ?>" class="btn btn-primary">Add Broker Account</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="dashboard-box">
                    <div class="dashboard-icon">
                        <i class="d-icon icon-profile"></i>
                    </div>
                    <div class="box-details">
                        <h1>History</h1>
                        <h3>tasfir_suman@yahoo.com</h3>
                    </div>
                    
                    <div class="action">
                    	<a href="<?php ?>" class="btn btn-primary">Go To History</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="dashboard-box">
                    <div class="dashboard-icon">
                        <i class="d-icon icon-profile"></i>
                    </div>
                    <div class="box-details">
                        <h1>Withdrawal</h1>
                        <h3>tasfir_suman@yahoo.com</h3>
                    </div>
                    
                    <div class="action">
                    	<a href="<?php ?>" class="btn btn-primary">View All Withdrawal</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="dashboard-box">
                    <div class="dashboard-icon">
                        <i class="d-icon icon-profile"></i>
                    </div>
                    <div class="box-details">
                        <h1>Referrals</h1>
                        <h3>tasfir_suman@yahoo.com</h3>
                    </div>
                    
                    <div class="action">
                    	<a href="<?php ?>" class="btn btn-primary">Go To Referrals</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>