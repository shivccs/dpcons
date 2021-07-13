<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
public function __construct(){
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
		$this->load->database();
        $this->load->model('MainModel', 'admin');  
	    $this->load->library('session');
    }

	public function index()
	{
		$login='';
		$this->load->view('index',compact('login'));
		 extract($_POST);
		 
        if(isset($submit))
        {
          
       $email=$username;
	  
    $count=$this->admin->count_row_multiple('email',$username,'password',$password,'users');
    

    if($count >=1)
    {
        
		 
		 $this->session->set_userdata('login', $username);
		 
		 $uid=$this->admin->get_x('user_id','email',$username,'users');
		 
		 //echo $uid;
		
          $type=$this->admin->get_x('user_type','email',$username,'users');
	   
	   $count1=$this->admin->count_row('user_id',$uid,'login');
	  
	   $last_login=date("d-m-Y h:i:s");

          $otp=rand(100000,999999);



          if($count1>=1)
          {

                $uid=$this->admin->get_x('user_id','email',$username,'users');
			 
			   $lcount=$this->admin->get_x('login_count','user_id',$uid,'login');
		       $lcount1=$lcount+1;
			   //echo $lcount1;

       
           //$get="update login set user_type=$type,last_login='now()',login_count=$lcount1,otp_key='$otp' where user_id='$uid'";
              //echo $get;
			  date_default_timezone_set("Asia/Kolkata");
		     $create=$this->created_at = Date('Y-m-d H:i:s', time());
			  
			  $data=array(
			   'user_type'=>$type,
			   'last_login'=>$create,
			    'login_count'=>$lcount1,
				'otp_key'=>$otp
				
			  
			  );
              $get1=$this->admin->edit_data('user_id',$uid,$data,'login');
              if($get1)
              {
                redirect('Dashboard/');
              }
              else
              {
				  
				  
                   $login="eror in insert";
				   $this->load->view('index',compact('login'));
				   $this->session->set_flashdata('rec', 'Eror In Login');
				  // redirect('Home/');
				  redirect('Home/');
              }
          }
            else
            {
             date_default_timezone_set("Asia/Kolkata");
		     $create=$this->created_at = Date('Y-m-d H:i:s', time());
			 
			  $uid=$this->admin->get_x('user_id','email',$username,'users');
			  //echo $uid;
			   $lcount2=$this->admin->get_x('login_count','user_id',$uid,'login');
			   //echo $lcount2;
		       $lcount3=$lcount2+1;
			 
			 
			   $data=array(
			   'user_id'=>$uid,
			   'user_type'=>$type,
			    'password'=>$password,
			   'last_login'=>$create,
			    'login_count'=>$lcount3,
				'otp_key'=>$otp
	
				 
				
			  
			  );
              $get1=$this->admin->insert_data('login',$data);
          
              if($get1)
              {
               redirect('Dashboard');
              }
              else
              {
                $login="eror in insert";
				 $this->load->view('index',compact('login'));
				// redirect('Home/');
				$this->session->set_flashdata('rec', 'Eror In Login');
				redirect('Home/');
              }

            }






       // header('location:main.php');
    }
    if($count==0)
    {
      
      $login="Invaild Username And Password";
	   $this->load->view('index',compact('login'));
	 //  redirect('Home/');
	     $this->session->set_flashdata('rec', 'Invaild Username And Password');
		 redirect('Home/');
      
    }

        }
	}
	function logout(){
        $this->session->unset_userdata('login');
        redirect('Home/');
    }
}
