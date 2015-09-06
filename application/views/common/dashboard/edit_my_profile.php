<section id="profile">
    <div class="container">
        <table class="table-gg table-responsive table-striped table-condensed table">
            <tbody>
                <tr>
                    <th>
                        <label for="">First Name</label>
                    </th>
                    <td><input type="text" value="<?php echo "Tasfir Hossain"; ?>" class="form-control"></td>
                </tr>
                <tr>
                    <th><label for="">Last Name</label></th>
                    <td><input type="text" value="<?php echo "Suman"; ?>" class="form-control"></td>
                </tr>
                <tr>
                    <th>
                        <label>Email</label>
                    </th>
                    <td>
                        <div class="row edit-profile">
                            <div class="col-md-4">
                                <input type="mail" name="user_email" class="form-control" value="<?php echo"tasfir_suman@yahoo.com"; ?>" />
                            </div>
                        </div>
                    </td>
                </tr>
                <tr><th>Gender</th>
                    <td>
                        <div class="col-md-7">
                            <input type="radio" name="gender"> Male
                            <input type="radio" name="gender"> Female <br/>
                        </div>
                    </td>
                </tr>
                <tr><th>Birthday</th><td><input type="date" name="date_of_birth" class="form-control" /></td></tr>
                <tr><th>Country</th><td>Bangladesh</td></tr>
                <tr><th>Phone</th><td>8801911198784</td></tr>
                <tr><th>Language</th><td>English</td></tr>
                <tr><th>Time Zone</th><td></td></tr>
                <tr><th>Password</th><td>******<a class="pull-right text-orange" href="/myglobe/profile/password/edit">Change password</a></td></tr>
            </tbody>
        </table>
    </div>
</section>