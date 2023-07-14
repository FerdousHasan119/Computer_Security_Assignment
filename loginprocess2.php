<?php
   if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(
            isset($_POST['email']) &&
            isset($_POST['pass'])  &&
            
            !empty($_POST['email']) &&
            !empty($_POST['pass'])
        )
        {
            include '_dbconnect.php';
            $email = $_POST['email'];
            $email=mysqli_real_escape_string($con,$email);
            $pass =  $_POST['pass'];
            $pass=mysqli_real_escape_string($con,$pass);

            $type="0";
            $block="no";

            $sql = "SELECT * FROM `user` WHERE email = '$email' and password='$pass'";
            $result = mysqli_query($con,$sql);
            $num = mysqli_num_rows($result);

            if($num == 1){
                while ($row = $result->fetch_assoc()) {
                    $type=$row["user_type"];
                    $block=$row["block"];         
                }
                if($type==1){
                    if($block=="no")
                    {
                        session_start();
                        $_SESSION['email']=$email;
                        $sql3 = "INSERT INTO log VALUES ('','$email','Logs In',NOW())";
                        $result3 = mysqli_query($con,$sql3);
                        header("Location:/CSA/mail.php");
                        exit();
                    }
                    else{
                        header("Location:/CSA/block2.php");
                        exit();
                    }
                }
                elseif($type==2){
                    session_start();
                    $_SESSION['email']=$email;
                    header("Location:/CSA/adminhome.php");
                    exit();
                }
            }
            else{
                $sql4 = "INSERT INTO log VALUES ('','$email','Wrong Email or Password',NOW())";
                $result4 = mysqli_query($con,$sql4);
                header("Location:/CSA/login2.php");
                exit();
            }    
        
        }
        else{
            header("Location:/CSA/login2.php");
        }
    }
    else{
    header("Location:/CSA/login2.php");
    }
?>