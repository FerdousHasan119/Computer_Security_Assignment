<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Secure Login Page</title>
            <style>
                body{
                background-image:url(img/img2.jpg);
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
                background: #7f090959;
                border-radius: 20px;
            }
            h2{
                text-align: center;
                margin-bottom: 40px;
            }
            input{
                display: block;
                border: 2px solid #ccc;
                width: 90%;
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
                background: #2e3a38f2;
                padding: 10px 22px;
                color: #fff;
                border-radius: 8px;
                margin-right: 17px;
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
            <form action="loginprocess2.php" method="POST">
                <h2 style="color:white;">This page is Secure to SQL injection</h2>
                <br> 
                <h3 style="color:white;">Enter your information: </h3>
                <label for="email">Email: </label>
                <input type="textfield" name="email" id="email" placeholder="Enter your email">
                <label for="pass">Password: </label>
                <input type="password" name="pass" id="pass" placeholder="Enter your password">

                <button type='submit'>Enter</button>

            </form>
        </body>
</html>
