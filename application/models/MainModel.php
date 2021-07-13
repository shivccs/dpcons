<?php
class MainModel extends CI_Model{
    
	
	function get_cat($id)
	{
		$query=$this->db->query("select * from category,subcategory where category.id=subcategory.parent_category");
	    return $query->result();
	}
	function get_top_product()
	{
		$query=$this->db->query("select * from product order by id desc limit 0,4");
	    return $query->result();
	}
     function insert_data($db_name,$data){
        return $q=$this->db->insert($db_name,$data);
    }
   public function get_specific_data($db_id,$id,$db_name){
		$q=$this->db->select('*')->where($db_id,$id)->get($db_name);
        return $q->result();
	}
	public function get_all_data($db_name){
		$q=$this->db->select('*')->get($db_name);
        return $q->result();
	}
     public function login($email,$password)
    {
       $q=$this->db->where('email',$email)
                    ->where("password",$password)
                     ->get('admin_login');
      if($q->num_rows()==1){
           return 1;
	    }
        else{
            return 0;
        }     

    }
   

   
    
    public function get_row_data($db_id,$id,$db_name){
        $q=$this->db->select('*')->where($db_id,$id)->get($db_name);
        return $q->row();
    }
    
    function edit_data($db_id,$id,$data,$db_name){
        return $q=$this->db->where($db_id,$id)->update($db_name,$data);
    }
    
    function edit_data_mul($db_id,$id,$db_id1,$id1,$db_id2,$id2,$data,$db_name){
        return $q=$this->db->where($db_id,$id)->where($db_id1,$id1)->where($db_id2,$id2)->update($db_name,$data);
    }
    
    function delete_data($db_id,$id,$db_name){
        $this -> db -> where($db_id, $id);
        $this -> db -> delete($db_name);
    }
    
    function delete_data_mul($db_id1,$id1,$db_id2,$id2,$db_name){
        $this -> db -> where($db_id1, $id1);
        $this -> db -> where($db_id2, $id2);
        $this -> db -> delete($db_name);
    }

    function count_row($db_id,$id,$db_name){
        $this->db->from($db_name)->where($db_id,$id);
        $query = $this->db->get();
        return $query->num_rows();
    }
	public function get_current_page_records($limit, $start,$dbname) 
    {
        $this->db->limit($limit, $start);
        $query = $this->db->get($dbname);
 
        if ($query->num_rows() > 0) 
        {
            foreach ($query->result() as $row) 
            {
                $data[] = $row;
            }
             
            return $data;
        }
 
        return false;
    }

    function count_row_multiple($db_id1,$id1,$db_id2,$id2,$db_name)
	{
        $this->db->from($db_name)->where($db_id1,$id1)->where($db_id2,$id2);
        $query = $this->db->get();
        return $query->num_rows();
    }
	function count_role($query)
	{
        $q = $this->db->query($query);
        return $q->num_rows();
    }
    function count_row1($db_name)
	{
        $this->db->from($db_name);
        $query = $this->db->get();
        return $query->num_rows();
    }
    function count_row_multiple_getUnique($db_id1,$id1,$db_id2,$id2,$db_name,$select){
        $this->db->from($db_name)->where($db_id1,$id1)->where($db_id2,$id2);
            
        $query = $this->db->distinct()->select($select)->get();
        return $query->num_rows();
    }
    
    function count_row_multiple_fourx($db_id1,$id1,$db_id2,$id2,$db_id3,$id3,$db_id4,$id4,$db_name){
        $this->db->from($db_name)->where($db_id1,$id1)->where($db_id2,$id2)->where($db_id3,$id3);
        $query = $this->db->get();
        return $query->num_rows();
    }

    function get_x($get_id,$db_id,$id,$db_name){
        $q=$this->db->select('*')->where($db_id,$id)->get($db_name);
        
            return $q->row()->$get_id;
        
    }
	
	
    function get_xx($get_id,$db_id,$id,$db_id1,$id1,$db_name){
        $q=$this->db->select('*')->where($db_id,$id)->where($db_id1,$id1)->get($db_name);
        
            return $q->row()->$get_id;
        
    }
    
    function get_unique($db_id,$id,$db_name){
        $this->db->from($db_name)->where($db_id,$id);
        $query = $this->db->get();
        return $query->num_rows();
    }
    
    function getLatest($fieldneeded,$db,$orderbyid,$wherefield){
       $q = $this->db->query("SELECT ".$fieldneeded." FROM ".$db." WHERE ".$wherefield." ORDER BY ".$orderbyid." DESC LIMIT 1");
       if($q->num_rows()){
           return $q->row();
        }
        else{
            return false;
        }
    }

    function getRawRow($query){
        $q = $this->db->query($query);
        if($q->num_rows()){
            return $q->row();
         }
         else{
             return false;
         }
     }

     function getRawResult($query){
        $q = $this->db->query($query);
        if($q->num_rows()){
            return $q->result();
         }
         else{
             return false;
         }
     }
     
     public function insert_product_image($data = array()){
        $insert = $this->db->insert_batch('bv_product_image',$data);
        return $insert?true:false;
    }
    public function insert_batch($table,$data = array()){
        $insert = $this->db->insert_batch($table,$data);
        return $insert?true:false;
    }
    
}
?>