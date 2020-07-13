<?php
// +------------------------------------------------------------------------+
// | @author Deen Doughouz (DoughouzForest)
// | @author_url 1: http://www.quickdate.com
// | @author_url 2: http://codecanyon.net/user/doughouzforest
// | @author_email: wowondersocial@gmail.com
// +------------------------------------------------------------------------+
// | Quickdate - The Ultimate PHP Dating Platform
// | Copyright (c) 2018 Quickdate. All rights reserved.
// +------------------------------------------------------------------------+
// MySQL Hostname
$servername = "localhost";
// MySQL Database User
$dbusername = "root";
// MySQL Database Password
$dbpassword = "";
// MySQL Database Name
$dbname = "strangerhub";

// Site URL
$site_url = "http://localhost/Script"; // e.g (http://example.com)

$app = "QuickDating";
$endpoint_v = "v1";
$serverkey = "87a76c9739a232f19eebfd2db323a518";

// Purchase code
$purchase_code = "03b5c7f9-9403-4a26-a055-63d297033d15"; // Your purchase code, don't give it to anyone.

// Create connection insert video
$con = mysqli_connect($servername, $dbusername, $dbpassword,$dbname);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}



?>