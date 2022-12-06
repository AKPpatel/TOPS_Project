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
    <form method="post" align="center">
        <h1> Registration Detail </h1>
        <table border="1" align="center" style="width:100%" class="table">
            <tr>
                <td style="width:250px">Name: </td>
                <td><input type="text" name="name" value=""  class="form-control" placeholder="Enter your Name"/></td>
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
                <td>Biodata: </td>
                <td><textarea name="biodata" value="" class="form-control" placeholder="Enter your Biodatas"></textarea></td>
            </tr>
            <!-- <tr>
                <td>Image: </td>
                <td><input type="file" name="image" value="" class="form-control" class="form-control" placeholder="Enter your Image"/></td>
            </tr> -->
            <tr>
                <td>Gender: </td>
                <td style="padding-left:10px;"><input type="radio" name="gender" value="Male"/>Male
                    <input type="radio" name="gender" value="Female"/>Female
                    <input type="radio" name="gender" value="Other"/>Other
                </td>
            </tr>
            <tr>
                <td>Hobbies: </td>
                <td><input type="checkbox" name="hobbie[]" value="Cricket"/>Cricket
                    <input type="checkbox" name="hobbie[]" value="Swiming"/>Swiming
                    <input type="checkbox" name="hobbie[]" value="Singing"/>Singing
                </td>
            </tr>
            <tr>
                <td>Country:</td>
                <td><select name="country" class="form-control">
                    <?php
                    foreach($data as $c)
                    {
                        ?>
                    <option value="<?php echo @$c->c_id;?>"><?php echo @$c->c_name;?></option>
                    <?php
                    }
                    ?> 
                    
                </select>
                </td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="submit" value="submit" class="btn btn-primary"/>
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
