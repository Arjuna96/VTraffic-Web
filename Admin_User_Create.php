<?php
session_start();
require 'headtag.php';
$activeuser3 = "active";
require 'menu.php';
include_once 'function/New_user_mail_notification.php';
?>

<div class="content-wrapper">
    <section class="content">
        <form class="form-horizontal" role="form" action="Admin_user_Create.php" method="post" enctype="multipart/form-data" >

            <div class="col-md-8">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">User Registration</h3>
                    </div>

                    <div class="box-body">

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" class="form-control" name="fName" placeholder="First name" required>
                            </div>

                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" class="form-control" name="lName" placeholder="Last name" required>
                            </div>

                            <div class="form-group">
                                <label>Mobile</label>
                                <input type="text" class="form-control" name="mobile" placeholder="Mobile Number" required>
                            </div>

                            <div class="form-group">
                                <label>User Role</label>
                                <select class="form-control" name="role">
                                    <option>Function</option>
                                    <option>Admin</option>                                    
                                </select>
                            </div>

                        </div>

                    </div>

                </div>
            </div>

            <div class="col-md-4">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">User Registration</h3>
                    </div>

                    <div class="box-body">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>User Name</label>
                                <input type="text" class="form-control" name="usr" placeholder="User name" required>
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="pass" placeholder="Password" required>
                            </div>

                            <div class="box-footer">
                                <button type="submit" name="btn-submit" class="btn btn-info pull-right">Create User &nbsp;<i class="fa fa-user-plus" aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                if (isset($_POST['btn-submit'])) {
                    date_default_timezone_set("Asia/Colombo");
                    include_once './dbconnect.php';
                    $fname = mysqli_real_escape_string($con, $_POST['fName']); // filtter out SQL injections 
                    $lname = mysqli_real_escape_string($con, $_POST['lName']); // filtter out SQL injections 
                    $mobile = mysqli_real_escape_string($con, $_POST['mobile']); // filtter out SQL injections 
                    $role = $_POST['role'];
                    $createdate = date("d-m-Y h:i:s a");
                    $active = 1;
                    $uname = mysqli_real_escape_string($con, $_POST['usr']); // filtter out SQL injections 
                    $pass = mysqli_real_escape_string($con, $_POST['pass']); // filtter out SQL injections 
                    
                    $url = 'http://18.191.39.15:2000/api/register';

                    $params = "email=$uname&password=$pass&firstName=$fname&lastName=$lname&mobile=$mobile&userRole=$role";

                    $ch = curl_init($url);

                    curl_setopt($ch, CURLOPT_POST, 1);
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    $result = curl_exec($ch);

                    curl_close($ch);

                    echo $result . "<br>";
                    
                    $response = json_decode($result);

                    $finalResult = $response->Status;

                    if ($finalResult == "Success") {
                        echo "<div class='alert alert-success'>
                                 <a class='close' data-dismiss='alert'>×</a>
                                 <strong>User Created !</strong>
                                 </div> ";
                    } else {
                        die("<div class='alert alert-warning'>
                                 <a class='close' data-dismiss='alert'>×</a>
                                 <strong>Something Error ! </strong>" . mysqli_error()) . "
                                 </div> ";
                    }
                }
                ?>
            </div>
        </form>
    </section>
</div>
<?php
require 'footer.php';
?>
