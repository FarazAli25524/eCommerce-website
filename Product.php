<?php
    $firstname=$_POST['firstname']; 
    $lastname=$_POST['lastname']; 
    $email=$_POST['email']; 
    $address=$_POST['address']; 
    
    if(!empty($username) || !empty($lastname) || !empty($email) || !empty($address)){
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbname =  "sofahouse";

        //create connection
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

        if(mysqli_connect_error()){
            die('Connect Error(' . mysqli_connect_error().')'. mysqli_connect_error());
        }else{
            $SELECT = "SELECT email From sofahouse Where email = ? Limit 1";
            $INSERT = "INSERT Into sofahouse (firstname,lastname,email,addres) values(?,?,?,?)";

            $stmt = $conn->prepare($SLECT);
            $stmt->bind_param("s",$email);
            $stmt->execute();
            $stmt->bind_result($email);
            $stmt->store_result();
            $rnum = $stmt->num_rows;

            if($rnum==0){
                $stmt->close();

                $stmt = $conn->prepare($INSERT);
                $stmt->bind_param("sssii",        $firstname,$lastname,$email,$address);
                $stmt->execute();
                echo "New record inserted sucessfully";
            }else{
                echo "Someone already register using this email";
            }
            $stmt->close();
            $conn->close();

        }
    }else {
        echo "All field are required";
        die();
    }


?>