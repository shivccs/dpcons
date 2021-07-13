<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
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
		  $data=$this->admin->get_specific_data('status',$a,'medicine_category');
		
		$this->load->view('category',compact('data'));
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
			'category_name'=>$category,
			 'status'=>$flag,
			 'created_by'=>$uid
			);
			$get1=$this->admin->insert_data('medicine_category',$data);
          
              if($get1)
              {
               redirect('Category');
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
		$data=$this->admin->get_specific_data('med_cat_id',$id,'medicine_category');
		$this->load->view('categoryedit',compact('data'));
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
			'category_name'=>$category,
			 'status'=>$flag
			);
			
			$get1=$this->admin->edit_data('med_cat_id',$id,$data,'medicine_category');
          
              if($get1)
              {
               redirect('Category');
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
		  $user=$this->admin->delete_data('med_cat_id',$id,'medicine_category');
		  echo "<script>alert('deleted');</script>";
		  redirect('Category/');
	       
        
		  
	  }

}
