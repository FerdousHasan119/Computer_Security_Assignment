<?php
  session_start();
  $email = $_SESSION['email'];
  if($email==null){
    header('Location:login2.php'); 
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home</title>
    <style>
                body{
                background-image:url(img/img3.jpg);
                background-position:center;
                background-size:cover;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                
            }
            *{
                font-family:  sans-serif;
                box-sizing: border-box;
            }
            form{
                border: 2px solid #ccc;
                padding: 92px;
                background: #423b3b59;
                border-radius: 20px;
            }
            button {
                float: right;
                background: #rgb(233 230 230);
                padding: 10px 22px;
                color: #000;
                border-radius: 8px;
                margin-right: 85px;
                border: none;
            }
            .button{
                    width: 100px;
                    padding: 10px 0;
                    text-align: center;
                    text-shadow: black;
                    margin: 10px 10px;
                    border-radius: 25px;
                    font-weight: bold;
                    border: 4px solid #ccc;
                    background: transparent;
                    color: white;
                    cursor: pointer;
                    position: relative;
                    overflow: hidden;
            }
            button:hover{
                opacity: .7;
            }
            </style>
</head>
<body>
    <form action="logout.php">
    <center><h1 style="color:white;">WELCOME Admin</h1></center>
    <input type="button" class="button"  value="User Log" onclick="log();" >
        <script> function log(){
             location.assign('userlog.php');
        }</script>
        <br><br>
    <button type='submit'>Log Out</button>
    </form>
</body>
</html>