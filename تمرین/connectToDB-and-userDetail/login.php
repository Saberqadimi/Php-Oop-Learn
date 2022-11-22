<?php include('index.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style>
        .sLabelStyle {
            color: lightblue;

        }

        .sTableStyle {
            font-size: 14px;
            background-color: #ffffff;
        }

        .sHeaderStyle {
            color: pink;

        }

        .sInputStyle {
            color: red;
        }

        .sCantainerStyle {}
    </style>
</head>

<body>
    <!------ Include the above in your HEAD tag ---------->
    <div class="container sCantainerStyle">
        <div class="row">

            <form action="/index.php" method="post">
                <table class="sTableStyle">
                    <tr>
                        <th class="sHeaderStyle">Login Page in Table</th>
                    </tr>
                    <tr>
                        <td><label class="sLabelStyle">User name:</label></td>
                        <td><input name="username" type="test" id="sUserName" class="sInputStyle"
                                placeholder="User name..." required>
                        </td>
                    </tr>
               
                    <tr>
                        <td><label class="sLabelStyle">Password:</label></td>
                        <td><input name="password" type="password" id="sPwd" class="sInputStyle"
                                placeholder="Password...." required />
                        </td>
                    </tr>
                 
                    <tr>
                    <td>
                       <?php include('errors.php'); ?>
                       </td>
                        <td>
                            <button type="submit" name="login_user" class="btn btn-primary" >Sign In</button>
                        </td>
                    </tr>

                </table>
            </form>
        </div>
    </div>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>

</html>