<?php
    //require('config.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $zip = $_POST["zip"];
        $looking_for = $_POST["looking-for"];
        $gender = $_POST["radio-gender"];
        $birthdate_month = $_POST["birthdate-month"];
        $birthdate_day = $_POST["birthdate-day"];
        $birthdate_year = $_POST["birthdate-year"];
        $height_feet = $_POST["height-feet"];
        $height_inches = $_POST["height-inches"];
        $weight = $_POST["weight"];
        $numberPeople = $_POST["numberPeople"];
        $income = $_POST["income"];
        $first_name = $_POST["firstname"];
        $last_name = $_POST["lastname"];
        $email = $_POST["email"];
        $address = $_POST["address"];
        $city = $_POST["city"];
        $state = $_POST["state"];
        $phone = $_POST["phone"];
        $ipaddr = $_SERVER['REMOTE_ADDR'];

        $servername = "localhost";
        $username = "thehealthscout_user";
        $password = "usBHjk9LTNsj";
        $database = "thehealthscout_dbHealth";

        // Create connection
        $conn = new mysqli($servername, $username, $password);
        // Check connection
        if ($conn->connect_error) {
//            echo "connection failed";
            die("Connection failed: " . $conn->connect_error);
        }

        // Create database
        $sql = "CREATE DATABASE " . $database;
        if ($conn->query($sql) === TRUE) {
            //echo "Database created successfully";
        } else {
            //echo "Error creating database: " . $conn->error;
        }

        $conn->select_db($database);

        $query = "SELECT ID FROM USERS";
        $result = $conn->query($query);

        if(empty($result)) {
            $query = "CREATE TABLE USERS (
                            ID int(11) AUTO_INCREMENT,
                            FIRSTNAME varchar(255) NOT NULL,
                            LASTNAME varchar(255) NOT NULL,
                            EMAIL varchar(255) NOT NULL,
                            ADDRESS varchar(255) NOT NULL,
                            CITY varchar(255) NOT NULL,
                            STATE varchar(3) NOT NULL,
                            PHONE varchar(30) NOT NULL,
                            ZIP int,
                            LOOKING_FOR varchar(255) NOT NULL,
                            GENDER varchar(255) NOT NULL,
                            BIRTHDATE date,
                            HEIGHT_FEET int,
                            HEIGHT_INCHES int,
                            WEIGHTKG int,
                            NUMBERPEOPLE int,
                            INCOME int,
                            TIMESTAMP datetime,
                            IPADDR varchar(50) NOT NULL,
                            PRIMARY KEY  (ID)
                    )";
            $result = $conn->query($query);
            if($result == TRUE) {
                //echo 'created';
            }
            else{
                //echo "creating table error" . $conn->error;
            }
        }

        $timestamp = date("Y-m-d H:i:s");

        $query = "INSERT INTO USERS (FIRSTNAME, LASTNAME, EMAIL, ADDRESS, CITY, STATE, PHONE, ZIP, LOOKING_FOR, GENDER, BIRTHDATE, HEIGHT_FEET, HEIGHT_INCHES, WEIGHTKG, NUMBERPEOPLE, 
                    INCOME, TIMESTAMP, IPADDR) VALUES (\"{$first_name}\",\"{$last_name}\",\"{$email}\",\"{$address}\",\"{$city}\",\"{$state}\",\"{$phone}\",{$zip},\"{$looking_for}\",\"{$gender}\",
                    \"{$birthdate_year}/{$birthdate_month}/{$birthdate_day}\",{$height_feet},{$height_inches},{$weight},{$numberPeople},{$income},\"{$timestamp}\",\"{$ipaddr}\")"; 

        $conn->query($query);

        //$query = "INSERT INTO USERS (EMAIL, PASSWORD, PERMISSION_LEVEL, APPLICATION_COMPLETED, APPLICATION_IN_PROGRESS) VALUES ('foobar@foobar.com', 'fjsdfbsjkbgs', 0, 0, 0)";
        $conn->close();
      }
?><!--
<html>
<body>

Welcome Zip <?php echo $zip; ?><br>
You are looking for: <?php echo $looking_for; ?><br>
You are <?php echo $gender; ?><br>
Your birthdate is: <?php echo $birthdate_month . '/' . $birthdate_day . '/' . $birthdate_year; ?><br>
height and weight: <?php echo $height_feet . ' ' . $height_inches . ' ' . $weight; ?><br>
number of Household: <?php echo $numberPeople; ?><br>
Your name:<?php echo $first_name . ' ' . $last_name; ?><br>
Your email, address, city, state, phone: <?php echo $email . '/' . $address . '/' .$city . '/' . $state . '/' . $phone; ?>

</body>
</html>
-->