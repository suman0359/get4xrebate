


    

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Reports</a></li>
            <li><a href="#">Analytics</a></li>
            <li><a href="#">Export</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="<?php echo base_url()."admin_dashboard/add_new_broker"; ?>">Add New Broker</a></li>
            <li><a href="<?php echo base_url()."admin_dashboard/view_all_broker"; ?>">View All Broker</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
            <li><a href="">More navigation</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="<?php echo base_url()."admin_dashboard/logout"; ?>">Log Out</a></li>
          </ul>
        </div>
        <?php echo $body_content; ?>
      </div>
    </div>

    