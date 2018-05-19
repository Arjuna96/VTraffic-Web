<?php

function sendMail($email,$fname,$username,$password) {
    
    $to = $email;
    $subject = "VTraffic Dashboard App";

    // Prepare the body of messsage

    $message = '<html><body>';
    $message .= "<h2><span style='color:#23046F'>Login Credentials</span></h2></br>";
    $message .= "<font color='#2970df'>Dear $fname , <br> Please find your Log-in Details below. <br><br>  </font>";
    $message .= "<table border='1' style='border-color: #666;' cellpadding='10' width='100%'>";
    $message .= "<tr>";
    $message .= "<td><b>VTraffic</b></td><td><h4>Login Credentials for AMW Web App</h4></td>";
    $message .= "</tr>";
    $message .= "<tr>";
    $message .= "<th>User Name</th><td>".$username."</td>";
    $message .= "</tr>";
    $message .= "<tr>";
    $message .= "<th>Password</th><td>".$password."</td>";
    $message .= "</tr>";
    $message .= "<tr>";
    $message .= "<th>Website</th><td>Access URL : https://vtrafic.000webhostapp.com/ </td>";
    $message .= "</tr>";
    $message .= "</table>";
    $message .= "<font color='#a2a8b0'><p align='center'>Copyright 2018 VTraffic, All Rights Reserved.</P></font>";
    $message .= "</body></html>";



    $header = "From:donotreply@vtraffic.com \r\n";
    $header .= "Cc:dilshanrox.rajans@gmail.com\r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";

    $retval2 = mail ($to,$subject,$message,$header);

    if ($retval2 == true) {
        echo "<div class='alert alert-success'>
        <a class='close' data-dismiss='alert'>×</a>
        <strong>Email send Successfully !</strong>
        </div> ";
    } else {
        echo "0";
        echo (error_get_last());
    }
    
}
?>
