<?php
include_once 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login Page</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
    <form method="post" align="center">
        <h2>Trainer Login</h2><br>
        <table border="1" align="center" style="width:100%" class="table">
            
            <tr>
                <td>Email: </td>
                <td><input type="email" name="email" placeholder="Enter your mail" value="" class="form-control"/></td>
            </tr>
            <tr>
                <td>Password: </td>
                <td><input type="password" name="password" value="" class="form-control" placeholder="Enter your Password"/></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="login" value="Login" class="btn btn-primary"/></td>
            </tr>
            
        </table>
                    <br>
                   <a href="forgot_password.php"> Forgot Password? </a>
                   <br>
                   
                   Don't have a account? <a href="form.php"> SIGN UP </a>
                   <br>
                   <br>
        
    </form>
</div>
</div>
</div>
</body>
</html>
<?php
include_once 'footer.php';
?>