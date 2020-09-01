<?php 
if(isset( $_POST)){
    // id
    $first_name=$_POST["first-name"];
    $last_name=$_POST["last-name"];
    $sex=$_POST["sex"];
    $age=$_POST["age"];
    $phone_num=$_POST["phone-num"];
    $school=$_POST["school"];
    $year=$_POST["year"];
    $address=$_POST["address"];
    $k_info=$_POST["k-info"];
    $why_study=$_POST["why-study"];
    $abouse_course=$_POST["abouse-course"];
    $program_language=$_POST["pro-lang"];
    $next_year=$_POST["5year"];
    // allow/disable
    $servername = "sql206.epizy.com";
    $username = "epiz_26630228";
    $password = "Sa0977575806";
    $db = "epiz_26630228_reancode";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $db);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
    }
?>