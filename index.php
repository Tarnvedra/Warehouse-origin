<!DOCTYPE html>
<!--
Author        : Paul Colley
Last Modified : 14/06/2019
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Winfix Layout</title>
        <!-- load in libraries and style sheets -->
        <link rel="stylesheet" type="text/css" href="winfix.css">
        <script src="jquery.min.js" type="text/javascript"></script>
        <script src="winfix.js" type="text/javascript"></script>
        
        
    </head>
    <body>
        <form method="post" action="index.php">
            <div class="box">
                <h1>Winfix Layout Dashboard</h1>
                <!--  logon box for user and password -->
                <input type="text" name="user" placeholder="user"/>
                <input type="password" name="password" placeholder="password"/>
                <!-- links to pages depending in input from user -->
                <a href="dashboard.php">
                <div class="btn">Log In</div></a> <!-- End Btn -->
                <a href="index.php">
                <div id="btn2">Reset</div></a> <!-- End Btn2 -->
            </div> <!-- End Box -->
        </form>
        <div class="contact">
             <!-- display problem message to user to seek assistance -->  
             <p style="color:white;">Problem logging in? - Contact I.T. Department </p>
        </div>
    </body>
    <?php
    require_once 'login.php';
    $connection = new mysqli($hostname, $username, $password, $database);
    if ($connection->connect_error) die('Fatal error');
    
    // Open file to read in products 
    // $file = fopen("winfixskus.csv", "r");
    // print file to the screen 
    // print_r(fgetcsv($file));
    // fclose($file);
    ?> 
</html>
