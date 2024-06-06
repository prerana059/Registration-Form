<?php 
    $fName=$_POST['fName'];
    $lName=$_POST['lName'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $addr=$_POST['addr']; 
    // my sql connectivity credentials
    $servername = 'localhost';
    $username = 'root';
    $password = '';

    //connecting server with mysql using mysqli class
    $connection=new mysqli('localhost',$username,$password,'bca');
    if($connection->connect_error){
        die('Connection Failed!!!');
    }
    // echo 'Connected successfully' . '<br/>';
    //query to create a new db 
    $sql = 'CREATE DATABASE IF NOT EXISTS bca';
    //actual connection starts here
    if($connection->query($sql) == true){
        // echo "DATABASE CREATED SUCCESSFULLY!!";
    }
    else{
        echo "FAILED TO CREATE DATABASE!!";
    }
    //mysql config to create table
    $connection1 = new mysqli($servername, $username, $password,'bca' );  //students is db 
    //creating new table inside a db
    $table_sql = 'CREATE TABLE IF NOT EXISTS students (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        fName VARCHAR(30) NOT NULL,
        lName VARCHAR(30) NOT NULL,
        gender VARCHAR(30) NOT NULL,
        email VARCHAR (30),
        phone INT (20),
        addr VARCHAR (20)
        )';
    echo $table_sql;
if($connection1->query($table_sql) == true){
            $addition_sql="INSERT INTO students(fName,lName,gender,email,phone,addr) VALUES('$fName','$lName','$gender','$email','$phone','$addr')";  
        if($connection1->query($addition_sql) == true){
            header("Location: /labreport/studentList.php");
        }
        else{
            echo "FAILED TO ADD VALUES TO  TABLE!!";
        }
    }
    else{
        echo "FAILED TO CREATE TABLE!!";
    }

   
?>