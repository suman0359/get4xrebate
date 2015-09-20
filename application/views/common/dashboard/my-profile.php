

<section id="profile">
    <div class="container">

        <div class="user-profile-info pull-left">
            <h2>My Profile Info</h2>
        </div>
        <div class="edit-profile-button pull-right">
            <a href="<?php echo base_url()."myaccount/edit_profile"; ?>" class="btn btn-primary btn-lg">Edit Profile</a>
        </div>
        <table class="table-gg table-responsive table-striped table-condensed table">
            <tbody>
                <tr>
                    <th>First Name</th>
                    <td><?php echo $profile_info->user_first_name; ?></td>
                </tr>
                <tr>
                    <th>Last Name</th>
                    <td><?php echo $profile_info->user_last_name; ?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>
                        <div class="row">
                            <div class="col-md-4"><?php echo $profile_info->user_email; ?></div>
                            <div class="col-md-2"><span class="text-orange">Primary</span></div>
                            <div class="col-md-6 text-right">
                                <a class="text-orange" href="/myglobe/profile/emails">Edit</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr><th>Gender</th><td>Male</td></tr>
                <tr><th>Birthday</th><td><?php echo $profile_info->user_date_of_birth; ?></td></tr>
                <tr><th>Country</th><td><?php echo $profile_info->user_country; ?></td></tr>
                <tr><th>Phone</th><td><?php echo $profile_info->user_phone_no; ?></td></tr>
                <tr><th>Language</th><td>English</td></tr>
                <tr><th>Time Zone</th><td></td></tr>
                <tr><th>Password</th><td>******<a class="pull-right text-orange" href="<?php echo base_url()."change_password/change_my_password" ?>">Change password</a></td></tr>
            </tbody>
        </table>
    </div>
</section>