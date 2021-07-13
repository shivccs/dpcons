<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
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
		   $cla=$this->router->fetch_class();
		   $role=$this->admin->get_x('role_id','role_name',$cla,'roles');
		   $login=$this->session->userdata('login');
	       $uid=$this->admin->get_x('user_id','email',$login,'users');
		   $counta=$this->admin->count_role("SELECT * FROM `roles`,user_roles WHERE user_roles.role_id=roles.role_id AND user_roles.user_id='5' AND user_roles.role_id='2'");
		    if($counta>=1)
			{
		   $a=1;
		  $data=$this->admin->get_specific_data('status',$a,'users');
		
		$this->load->view('user',compact('data'));
		extract($_POST);
		if(isset($submit))
		{
			if(empty($_POST['flag']))
              {
                $flag = 0;
               }
    else 
    {
      $flag = 1;
    }
	$login=$this->session->userdata('login');
	 $uid=$this->admin->get_x('user_id','email',$login,'users');
	
			$data=array(
			'user_type'=>$type,
			 'first_name'=>$first,
			 'last_name'=>$last,
			 'email'=>$email,
			 'mobile'=>$mobile,
			 'password'=>$password,
			 'is_email_verified'=>0,
			 'is_mobile_verified'=>0,
			 'created_by'=>$uid,
			 'created_on'=>NULL,
			 'updated_on'=>NULL,
			 'status'=>$flag
			);
			$get1=$this->admin->insert_data('users',$data);
          
              if($get1)
              {
               redirect('User');
              }
              else
              {
                echo "<script>alert('eror in insert');</script>";
              }
		}
		
			}
			else{
				$this->load->view('res');
			}
      }
	  
	    public function edit()
	   {
		$id=$_GET['id'];
		$data=$this->admin->get_specific_data('user_id',$id,'users');
		$this->load->view('useredit',compact('data'));
		extract($_POST);
		if(isset($submit))
		{
			if(empty($_POST['flag']))
              {
                $flag = 0;
               }
               else 
           {
            $flag = 1;
            }
			if(empty($_POST['everify']))
              {
                $everify = 0;
               }
               else 
           {
            $everify = 1;
            }
			if(empty($_POST['mverify']))
              {
                $mverify = 0;
               }
               else 
           {
            $everify = 1;
            }
	$login=$this->session->userdata('login');
	 $uid=$this->admin->get_x('user_id','email',$login,'users');
	  date_default_timezone_set("Asia/Kolkata");
		     $create=$this->created_at = Date('Y-m-d H:i:s', time());
			$data=array(
			'user_type'=>$type,
			 'first_name'=>$first,
			 'last_name'=>$last,
			 'email'=>$email,
			 'mobile'=>$mobile,
			 'password'=>$password,
			 'is_email_verified'=>$everify,
			 'is_mobile_verified'=>$mverify,
			 'created_by'=>$uid,
			 'created_on'=>NULL,
			 'updated_on'=>$create,
			 'status'=>$flag
			);
			
			$get1=$this->admin->edit_data('user_id',$id,$data,'users');
          
              if($get1)
              {
               redirect('User');
              }
              else
              {
               echo "<script>alert('eror in update');</script>";
              }
		}
		
      }
	  
	
	  
	  function delete()
	  {
		  $id=$_GET['id'];
		  $user=$this->admin->delete_data('user_id',$id,'users');
		  echo "<script>alert('deleted');</script>";
		  redirect('User/');
	       
        
		  
	  }

}
