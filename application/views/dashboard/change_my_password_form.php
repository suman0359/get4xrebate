<section id="profile" class="edit-my-profile">
    <div class="container">
        <form action="<?php echo base_url()."change_password/update_password"; ?>" method="POST">
        <table class="table-gg table-responsive table-striped table-condensed table">
            <tbody>
                <tr>
                    <th>
                        <label for="">Old Password</label>
                    </th>
                    <td>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="old_password" class="form-control">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="">New Password</label>
                    </th>
                    <td>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="user_password" class="form-control">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th><label for="">Confirm Password</label></th>
                    <td>
                    <div class="row">
                            <div class="col-md-6">
                    <input type="text" name="user_confirm_password"  class="form-control">
 </div>
                        </div>
                    </td>
                </tr>
                </tbody>
                </table>
                <div class="update-submit-button pull-right">
            <button type="submit" class="btn btn-primary btn-lg">
                Save New Password
            </button>
            
        </div>
                </form>
                </div>
                </section>