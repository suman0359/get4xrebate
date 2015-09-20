



            <nav class="navbar navbar-default">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?php echo base_url()."myaccount"; ?>"> <i class="icon icon-home"></i> Dashboard </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="<?php echo base_url()."myaccount/profile"; ?>"> Profile </a></li>
                            <li><a href="<?php echo base_url()."brokers"; ?>">Broker Account</a></li>
                            <li><a href="<?php echo base_url()."history"; ?>">History</a></li>
                            <li><a href="<?php echo base_url()."withdrawal"; ?>">Withdrawal</a></li>
                            <li><a href="<?php echo base_url()."referrals"; ?>">Referrals</a></li>                    
                        </ul>

                       
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>

        </header>

        



        <div style="width: 100%; height: 155px;"></div>

        <?php
        $alert_message = $this->session->userdata('message');
        if ($alert_message !== NULL) {
            ?>

            <div class="container alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <strong><?php
                    echo $alert_message;
                    $this->session->unset_userdata('message');
                    ?>
            </div>
        <?php } ?>