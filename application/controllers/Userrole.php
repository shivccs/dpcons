<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userrole extends CI_Controller {
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
		  $data=$this->admin->get_all_data('user_roles');
		
		$this->load->view('userrole',compact('data'));
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
			'role_id'=>$role,
			 'user_id'=>$user,
			 'sign_date'=>$date,
			 'assigned_by'=>$uid
			);
			$get1=$this->admin->insert_data('user_roles',$data);
          
              if($get1)
              {
               redirect('Userrole');
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
		$data=$this->admin->get_specific_data('id',$id,'user_roles');
		$this->load->view('userrole_edit',compact('data'));
		extract($_POST);
		if(isset($submit))
		{
	$login=$this->session->userdata('login');
	 $uid=$this->admin->get_x('user_id','email',$login,'users');
	
			$data=array(
			'role_id'=>$role,
			 'user_id'=>$user,
			 'sign_date'=>$date,
			);
			
			$get1=$this->admin->edit_data('id',$id,$data,'user_roles');
          
              if($get1)
              {
               redirect('Userrole');
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
		  $user=$this->admin->delete_data('id',$id,'user_roles');
		  echo "<script>alert('deleted');</script>";
		  redirect('Userrole/');
	       
        
		  
	  }

}
