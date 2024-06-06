<style>
    body{
        padding:10px;
        max-width: 700px;
        margin:auto;
    }
    *{
        margin:0;
        padding:0;
    }
    #results{
        display:grid;
        grid-template-columns:repeat(3,1fr);
        gap:10px;
    }
    #student-card{
        margin-top:10px;
        border:1px solid #ccc;
        height:100%;
        border-radius:10px;
        box-shadow: rgba(67, 71, 85, 0.27) 0px 0px 0.25em, rgba(90, 125, 188, 0.05) 0px 0.25em 1em;
    }
    #student-card .data{
        padding:10px;
    }
    .flex{
        display: flex;
        justify-content:space-between;
    }
    
</style>
<?php

     $servername='localhost';
     $username = 'root';
     $password = '';
     //connecting server with mysql using mysqli class
     $connection1 =new mysqli('localhost',$username,$password,'bca');
     if($connection1 ->connect_error){
         die('Connection Failed!!!');
     }
     $sql = "SELECT id,fName,lName,gender,email,phone,addr FROM students";
     $result = $connection1 ->query($sql);
?>
<div class="flex">
    <h2>Students</h2>
    <button onclick="window.location.href='/registrationForm.php'">ADD NEW</button>
</div>
<div id="results">
        <?php
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<div id='student-card'>
                        <div class='data'>
                            <span class='name__text'>
                            " ."Name: ". $row['fName'] . " " . $row['lName'] . "
                            </span><br/>
                            <span class='name__text'>
                            " ."address: ". $row['addr'] . "<br/>" ."Phone:  ". $row['phone']."<br/>" . "
                            </span>
                        </div>
                     </div>";
            }
        } else {
            echo "0 results";
        }
        try{
            // connecting server with mysql using mysql class
            // handling exception $servername
            $connection1 = new mysqli( $servername ,$username, $password, 'bca');
        }
        catch(e){
         
        }
        ?>
    </div>