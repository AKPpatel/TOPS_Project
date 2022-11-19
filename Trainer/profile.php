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
    <form method="post" align="center">
        <h2> Update Profile </h2><br>
        <table border="1" align="center" style="width:100%" class="table">
            <tr>
                <td style="width:250px">Trainer ID: </td>
                <td><input type="text" name="id" class="form-control" placeholder="Enter your Name"  value="<?php echo $alldata->t_id;?>"/></td>
            </tr>
            <tr>
                <td style="width:250px">First Name: </td>
                <td><input type="text" name="fname" class="form-control" placeholder="Enter your Name"  value="<?php echo $alldata->t_fname;?>"/></td>
            </tr>
            <tr>
                <td style="width:250px">Last Name: </td>
                <td><input type="text" name="lname" class="form-control" placeholder="Enter your Name"  value="<?php echo $alldata->t_lname;?>"/></td>
            </tr>
            <tr>
                <td>Email: </td>
                <td><input type="email" name="email" placeholder="Enter your mail" class="form-control" value="<?php echo $alldata->t_email;?>"/></td>
            </tr>
            <tr>
                <td>Password: </td>
                <td><input type="password" name="password" class="form-control" placeholder="Enter your Password" value="<?php echo $alldata->t_password;?>"/></td>
            </tr>
            <tr>
                <td style="width:250px">Phone Number: </td>
                <td><input type="text" name="number" class="form-control" placeholder="Enter your Name"  value="<?php echo $alldata->t_phone;?>"/></td>
            </tr>
            <tr>
                <td>Gender: </td>
                <td style="padding-left:10px;"><input type="radio" name="gender" value="Male"
                <?php 
                $g = $alldata->t_gender;
                if($g=="Male")
                {
                  echo "checked='checked'";
                }
                ?>
                />Male
                    <input type="radio" name="gender" value="Female"
                    <?php 
                $g = $alldata->t_gender;
                if($g=="Female")
                {
                  echo "checked='checked'";
                }
                ?>
                    />Female
                    <input type="radio" name="gender" value="Other"
                    <?php 
                $g = $alldata->t_gender;
                if($g=="Other")
                {
                  echo "checked='checked'";
                }
                ?>
                    />Other
                </td>
            </tr>
            
            <tr>
                <td colspan="2" align="center"><!--<a href="profile.php">-->
                <!--<a href="edit_user?eid=<?php //echo $alldata->t_id;?>">--><input type="submit" name="update" value="Update" class="btn btn-primary"/>
                
                    <!--<input type="submit" name="update" value="Update" class="btn btn-primary"/></a>-->
                <input type="Reset" name="reset" value="Reset" align="center" class="btn btn-warning"/></td>
            </tr>
        </table>
    </form>
</div>
</div>
</div>
</body>
</html>