<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manufacture extends CI_Controller {
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
		  $data=$this->admin->get_specific_data('status',$a,'manufacturer');
		
		$this->load->view('manufacturer',compact('data'));
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
			'manufacture_name'=>$name,
			 'status'=>$flag,
			 'created_by'=>$uid
			);
			$get1=$this->admin->insert_data('manufacturer',$data);
          
              if($get1)
              {
               redirect('Manufacture');
              }
              else
              {
                echo "<script>alert('eror in data saved');</script>";
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
		$data=$this->admin->get_specific_data('manufacture_id',$id,'manufacturer');
		$this->load->view('manufactureedit',compact('data'));
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
			'manufacture_name'=>$name,
			'status'=>$flag
			);
			
			$get1=$this->admin->edit_data('manufacture_id',$id,$data,'manufacturer');
          
              if($get1)
              {
               redirect('Manufacture');
              }
              else
              {
                echo "<script>alert('eror in updation');</script>";
              }
		}
		
      }
	  
	
	  
	  function delete()
	  {
		  $id=$_GET['id'];
		  $user=$this->admin->delete_data('manufacture_id',$id,'manufacturer');
		  echo "<script>alert('deleted');</script>";
		  redirect('Manufacture/');
	       
        
		  
	  }

}
