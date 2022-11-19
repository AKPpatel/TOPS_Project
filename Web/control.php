<?php
ob_start();

include_once 'Model.php';

class Mycontrol extends Model
{
    public function __construct()
    {
        parent::__construct();
        $url = $_SERVER['PATH_INFO'];
        $data = $this->SelectAll("country_tb");
        //echo $url;
        
        switch($url)
        {
            case '/index';
                include_once 'header.php';
                
                // insert data
                if(isset($_POST['submit']))
                {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $biodata = $_POST['biodata'];
                    //$image = $_POST['image'];
                    $gender = $_POST['gender'];
                    $hobbie = $_POST['hobbie'];
                    $l = implode(",",$hobbie); //convert array to string
                    $country = $_POST['country'];

                    $data = array('reg_name'=>$name,'reg_email'=>$email,'reg_password'=>$password,'reg_biodata'=>$biodata,'reg_image'=>$image,'reg_gender'=>$gender,'reg_hobbies'=>$l,'reg_country'=>$country); //pachi model ma javu
                    //print_r($data);exit;
                    $this->InsertData("register_tb",$data);
                }
                include_once 'form.php';
                include_once 'footer.php';
                break;

            case '/login':
                include_once 'header.php';
                if(isset($_POST['login']))
                {
                    $email = $_POST['email'];
                    $password = $_POST['password'];

                    $where = array('reg_email'=>$email,'reg_password'=>$password);
                    $fdata = $this->Select_Where('register_tb',$where);
                    $g = $fdata->num_rows;
                    if($g>0)
                    {   
                        $e = $fdata->fetch_Object();
                        $em = $e->reg_email;
                        //echo $em;exit;
                        header('location:profile?reg_email='.$em);                   
                    }
                    else{
                        echo "<script>alert('Invalid Data');</script>";
                    }
                }
                include_once 'login.php';
                include_once 'footer.php';
                break;

                case '/profile':
                    include_once 'header.php';
                    if(isset($_GET['reg_email']))
                    {
                        $ema = $_GET['reg_email'];
                        $where = array('reg_email'=>$ema);
                        $odata = $this->Select_Where('register_tb',$where);
                        $alldata = $odata->fetch_object();
                    }
                    include_once 'profile.php';
                    include_once 'footer.php';
                    break;
                    
                // case '/forgot':
                //     include_once 'header.php';
                //     if(isset($_GET['reg_email']))
                //     {
                //         $email = $_GET['reg_email']; 
                //         $where = array('reg_email'=>$email);
                //         $odata = $this->Select_Unique('register_tb',$where);
                //         $alldata = $odata->fetch_object();
                //     }
                //     include_once 'forgot_password.php';
                //     include_once 'footer.php';
                //     break;
            }    
    }
}
$obj = new Mycontrol;
ob_flush();