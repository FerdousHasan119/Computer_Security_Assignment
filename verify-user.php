<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>OTP Verification</title>
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
            h2{
                text-align: center;
                margin-bottom: 40px;
            }
            input{
                display: block;
                border: 2px solid #ccc;
                width: 100%;
                padding: 10px;
                margin: 10px auto;
                border-radius: 5px;
            }
            label{
                color: rgb(233, 230, 230);
                font-size: 18px;
                padding: 10px;
            }
            button {
                float: right;
                background: #rgb(233 230 230);
                padding: 10px 22px;
                color: #000;
                border-radius: 8px;
                margin-right: 50px;
                border: none;
            }
            button:hover{
                opacity: .7;
            }
            input:hover{
                opacity: .7;
            }
            </style>
        </head>
        <body>
            <form action="verify.php" method="POST">
                <h2 style="color:white;">2-Step OTP Verification</h2>
                <br> 
                <h3 style="color:white;">Enter 6-digit code: </h3>
                <input type="textfield" name="Code" id="Code" placeholder="Enter 6-digit verification code">

                <button type='submit'>Submit</button>

            </form>
        </body>
</html>
