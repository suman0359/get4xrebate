<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

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
		<h1>View All Broker</h1>
	</div>

	<div class="col-md-12">

		<table class="table table-bordered view-all-broker-table">
			<thead>
				<tr>
					<th>#</th>
					<th>Brokers Name</th>
					<th>Brokers Refarrel Address</th>
					<th colspan="3">Action</th>
					
				</tr>
			</thead>
			<tbody>
			<?php $n=1; foreach ($view_all_broker as $value) {  ?>
				
				
			
				<tr>
					<td><?php echo $n; ?></td>
					<td><?php echo $value->broker_name; ?></td>
					<td><?php echo $value->broker_referral_address; ?></td>
					<td class="text-center"><a href="<?php echo base_url(); ?>admin_dashboard/update_selected_broker/<?php echo $value->broker_id;?>" class="btn btn-primary">Update</a></td>
					<td class="text-center"><a href="<?php echo base_url(); ?>admin_content_management/delete_broker/<?php echo $value->broker_id;?>" class="btn btn-primary">Delete</a></td>
					<td class="text-center"><a href="<?php echo base_url(); ?>admin_content_management/<?php if($value->status==0){echo "unpublish_broker_status";}if($value->status==1){echo "publish_broker_status";} ?>/<?php echo $value->broker_id;?>" class="btn btn-primary"><?php if($value->status==0){echo "Unpublished";}if($value->status==1){echo "Published";} ?></a></td>
				</tr>

				<?php $n++; } ?>
			</tbody>
		</table>
	</div>


</div>