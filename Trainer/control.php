<?php
ob_start();

include_once 'Model.php';

class Mycontrol extends Model
{
    public function __construct()
    {
        parent::__construct();
        $url = $_SERVER['PATH_INFO'];
        //$data = $this->SelectAll("country_tb");
        //echo $url;
        
        switch($url)
        {
            case '/index';
                include_once 'header.php';
                
                // insert data
                if(isset($_POST['submit']))
                {
                    $fname = $_POST['fname'];
                    $lname = $_POST['lname'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $phone = $_POST['phone'];
                    //$image = $_POST['image'];
                    $gender = $_POST['gender'];
                    // $hobbie = $_POST['hobbie'];
                    // $l = implode(",",$hobbie); //convert array to string
                    // $country = $_POST['country'];

                    $data = array('t_fname'=>$fname,'t_lname'=>$lname,'t_email'=>$email,'t_password'=>$password,'t_phone'=>$phone,'t_gender'=>$gender); //pachi model ma javu
                    //print_r($data);exit;
                    $this->InsertData("trainer_tb",$data);
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

                    $where = array('t_email'=>$email,'t_password'=>$password);
                    $fdata = $this->Select_Where('trainer_tb',$where);
                    $g = $fdata->num_rows;
                    if($g>0)
                    {   
                        $e = $fdata->fetch_Object();
                        $em = $e->t_email;
                        //echo $em;exit;
                        //header('location:all.php');
                        header('location:profile?t_email='.$em);                   
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
                    if(isset($_GET['t_email']))
                    {
                        $ema = $_GET['t_email'];
                        $where = array('t_email'=>$ema);
                        $odata = $this->Select_Where('trainer_tb',$where);
                        $alldata = $odata->fetch_object();
                    }
                    include_once 'profile.php';
                    include_once 'footer.php';
                    break;

                //     case '/edit_user':
                //     include_once 'header.php';
                //     if(isset($_GET['eid']))
                //     {
                //         $eid = $_GET['eid'];
                //         $where = array('t_id'=>$eid);
                //         $user_data = $this->Select_Where('trainer_tb',$where);
                //         $user_fetch = $user_data->fetch_object(); 

                //         // Update 
                    
                //     if(isset($_POST['update']))
                //  {
                //     $fname = $_POST['fname'];
                //     $lname = $_POST['lname'];
                //     $email = $_POST['email'];
                //     $password = $_POST['password'];
                //     $phone = $_POST['phone'];
                //     //$image = $_POST['image'];
                //     $gender = $_POST['gender'];
                    
                //     $data = array('t_fname'=>$fname,'t_lname'=>$lname,'t_email'=>$email,'t_password'=>$password,'t_phone'=>$phone,'t_gender'=>$gender); //pachi model ma javu
                //     $this->UpdateData('trainer_tb',$data,$where);
                //     header('location:profile');
                //     //print_r($data);exit;

                //  }
                    
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