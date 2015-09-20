 <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

<section id="new_broker_form">
	<div class="">
		<div class="row">

		<?php
        $alert_message = $this->session->userdata('message');
        if ($alert_message !== NULL) {
            ?>

            <div class="col-md-9 alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <strong><?php
                    echo $alert_message;
                    $this->session->unset_userdata('message');
                    ?>
            </div>
        <?php } ?>

			<div class="col-md-12">
				<h1>Add New Broker</h1>
			</div>
			<form action="<?php echo base_url()."admin_content_management/save_new_broker"; ?>" method="POST">
				<div class="row">
					<div class="col-md-3">
						<label for="Broker Name">Broker Name</label>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input type="text" name="broker_name" class="form-control" placeholder="Type Broker Name">
						</div>
					</div>
				</div>
				<div class="row">
				<div class="col-md-3">
					<label for="Broker Name">Broker Refferral Address</label>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<input type="text" name="broker_referral_address" class="form-control" placeholder="Type Broker Referral URL">
					</div>
				</div>

				
					<div class="col-md-9">
						<div class="add-new-brokker-button pull-right">
							<input type="submit" class="form-control btn btn-primary" value="Save New">
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>

</div>