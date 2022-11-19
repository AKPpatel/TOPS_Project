<?php
include_once 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Structure</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
    <form method="post">
        <h2 align="center"> Trainer Registration</h2><br>
        <table border="1" align="center" style="width:100%" class="table">
            <tr>
                <td style="width:250px">ID Number: </td>
                <td><input type="text" name="id" value=""  class="form-control" placeholder="Traineer ID Number"/></td>
            </tr>
            <tr>
                <td style="width:250px">First Name: </td>
                <td><input type="text" name="fname" value=""  class="form-control" placeholder="Enter your First Name"/></td>
            </tr>
            <tr>
                <td style="width:250px">Last Name: </td>
                <td><input type="text" name="lname" value=""  class="form-control" placeholder="Enter your Last Name"/></td>
            </tr>
            
            <tr>
                <td>Email: </td>
                <td><input type="email" name="email" placeholder="Enter your mail" value="" class="form-control"/></td>
            </tr>
            <tr>
                <td>Password: </td>
                <td><input type="password" name="password" value="" class="form-control" placeholder="Enter your Password"/></td>
            </tr>
            <tr>
                <td style="width:250px">Phone: </td>
                <td><input type="text" name="phone" value=""  class="form-control" placeholder="Enter your Phone Number"/></td>
            </tr>
            <tr>
                <td>Gender: </td>
                <td><input type="radio" name="gender" value="Male"/>Male
                    <input type="radio" name="gender" value="Female"/>Female
                    <input type="radio" name="gender" value="Other"/>Other
                </td>
            </tr>
            
            <!--<tr>
                <td>Country:</td>
                <td><select name="country" class="form-control">
                    <?php
                    // foreach($data as $c)
                    // {
                    //     ?>
                    <option value="<?php //echo @$c->c_id;?>"><?php //echo @$c->c_name;?></option>
                    <?php
                   // }
                    ?> 
                    
                </select>
                </td>
            </tr> -->
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" value="submit" class="btn btn-primary"/>
                <input type="Reset" name="reset" value="Reset" align="center" class="btn btn-warning"/></td>
            </tr>
        </table>
    </form>
</div>
</div>
</div>
</body>
</html>
<?php
include_once 'footer.php';
?>