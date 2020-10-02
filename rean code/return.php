<?php
    $servername = "sql206.epizy.com";
    $username = "epiz_26630228";
    $password = "wyOOLfJ8PQG8iDE";
    $db = "epiz_26630228_reancode";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $db);
    $conn->set_charset('utf8');

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    // if ($result->num_rows > 0) {
    // // output data of each row
    //     while($row = $result->fetch_assoc()) {
    //         echo "id: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
    //     }
    //     } else {
    //     echo "0 results";
    // }

    // exit;
if(isset($_POST)){
    // id
    $first_name=$_POST["first-name"];
    $first_name=str_replace("'","''",$first_name);

    $last_name=$_POST["last-name"];
    $last_name=str_replace("'","''",$last_name);

    $sex=$_POST["sex"];
    $age=$_POST["age"];
    $phone_num=$_POST["phone-num"];

    $school=$_POST["school"];
    $school=str_replace("'","''",$school);

    $year=$_POST["year"];
    $year=str_replace("'","''",$year);

    $address=$_POST["address"];
    $address=str_replace("'","''",$address);

    $k_info=$_POST["k-info"];
    $k_info=str_replace("'","''",$k_info);

    $why_study=$_POST["why-study"];
    $why_study=str_replace("'","''",$why_study);

    $abouse_course=$_POST["abouse-course"];
    $abouse_course=str_replace("'","''",$abouse_course);

    $program_language=$_POST["pro-lang"];
    $program_language=str_replace("'","''",$program_language);

    $next_year=$_POST["5year"];
    $next_year=str_replace("'","''",$next_year);
    // allow/disable

    // chenrate pin
    $pin=$phone_num/10000;
    $pin=strval($pin);
    $pin=explode(".",$pin);
    $pin=strval($pin[1]);


    //Check username and password from database
    $sql="SELECT * FROM register WHERE first_name='$first_name' and last_name='$last_name'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);

    //If username and password exist in our database then create a session.
    //Otherwise echo error.

    if(mysqli_num_rows($result) == 1)
    {
    // print("មាន");
    header("location: /index.html"); // Redirecting To Other Page
    }else
    {
        $sql = "INSERT INTO register VALUES(null,'".$pin."','".$first_name."','".$last_name."','".$sex."','".$age."','".$phone_num."','".$school."','".$year."','".$address."','".$k_info."','".$why_study."','".$abouse_course."','".$program_language."','".$next_year."','disable')";
        $result = $conn->query($sql);
    }
    ?>
        <!DOCTYPE html>
        <html>
        <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Khmer&display=swap" rel="stylesheet">
        <style>
        body, html {
        height: 100%;
        margin: 0;
        font-family: 'Khmer', cursive;
        }

        * {
        box-sizing: border-box;
        }

        .bg-image {
        /* The image used */
        background-image: url("background1.jpg");
        
        /* Add the blur effect */
        filter: blur(8px);
        -webkit-filter: blur(8px);
        
        /* Full height */
        height: 100%; 
        
        /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        }

        /* Position text in the middle of the page/image */
        .bg-text {
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
        color: white;
        font-weight: bold;
        border: 3px solid #f1f1f1;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 2;
        width: 80%;
        padding: 20px;
        text-align: center;
        }
        </style>
        </head>
        <body>

        <div class="bg-image"></div>

        <div class="bg-text">
        <h1 >សួស្ដី<?php print($last_name); ?></h1>
        <h2 style="font-size:50px">ការចុះឈ្មោះបានជោគជ័យ</h2>
        <p>ខាងក្រោយលេខទូរស័ព្ទរបស់អ្នក៤ខ្ទង់ គឺជាPIN</p>
        <h1><?php print("PIN:".$pin) ?></h1>
        </div>

        </body>
        </html>
    <?php
}
else{
    header("location: /index.html");
}
?>