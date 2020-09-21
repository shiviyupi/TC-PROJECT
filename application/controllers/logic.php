<?php
class logic extends CI_CONTROLLER 
{
  public function adminlogin()
  {
    $this->load->view('admin.php');
    if($this->input->post('submit'))
    {

  $this->form_validation->set_rules('email', 'email', 'required|matches[email]');
   $this->form_validation->set_rules('password', 'password', 'required|alpha_numeric');
    if ($this->form_validation->run() == FALSE)
  {   echo " <script> alert('Please fill all the required fields ! '); </script>";
    
      }
  else
  { 
      $data['email']=$this->input->post('email');
      $data['password']=$this->input->post('password');
      $this->load->model('Student');
      $s=$this->Student->adminlogin($data);
      if(!$s)
      {
        return redirect('logic/admin_dashboard');
      }
      else 
      {
        echo "not done" ;
      }
    }
  }
}
  public function admin_dashboard()
  {
    $this->load->view('admin_dashboard');
  }
  public function studentdata()
  {
    //$this->load->view('admin_dashboard');
    $this->input->post('Save');
    $studentid=     $this->input->post('studentid');  
    $name= $this->input->post('name');
    $class=  $this->input->post('class');  
    $section=      $this->input->post('section') ;
    $guardian =     $this->input->post('guardian') ;
    $file =   $this->input->post('userfile');
    $this->load->model('Student');
    $s=$this->Student->savestudata($studentid,$name,$class,$section,$guardian,$file); 
    if($s)
    {
             echo "data not saved";
    }
    else
    {
      return redirect ('logic/afterdashboard');
    }
  }
  public function afterdashboard(){
       $this->load->view('afterdashboard.php'); 
  }
  public function frontend()
  {
    $this->load->view('frontpart.php');
  }
  public function frontdata()
  {
    $this->input->post('submit');
    $data=$this->input->post('studentid');
    $this->load->model('Student');
    $q=$this->Student->frontenddata($data); 
    $c= $this ->db->where('studentid',$data)->count_all_results('studentlist') ;
    if($c==0)
    {
      echo "<script>alert('Sorry No Data found') </script>";
    }
    else
    {
      $dataarray=array(
            'sid'=> $q->studentid,
            'sname'=>$q->name,
            'sclass'=>$q->class,
            'ssection'=>$q->section,
            'sg'=>$q->Guardian,
            'fo'=>$q->file
        );
      $this->session->set_userdata('a',$dataarray);
      $this->load ->view('test');
    }
  }
  public function displaydata()
  {
    $this->load->database();  
    //load the model  
    $this->load->model('Student');  
    $obj = new Student;
    $data['d']= $obj->select();
    $this->load->view('displaydata',$data);
  }
  public function dataintable()  
  {  
    //load the database  
    $this->load->database();  
    //load the model  
    $this->load->model('Student');  
    $obj = new Student;
    $data['d']= $obj->select();
    $data["msg"]="xyz";
    $this->load->view('displaydata',$data);
    //load the method of model  
    // $data['h']=$this->Student->select();  
    //return the data in view  
    // $this->load->view('displaydata',$data);  
  }  
  public function test()
  {
    $this->load->view('test');
  }
  public function edit()
  {
    $config['upload_path']          = './uploads/';
    $config['allowed_types']        = 'pdf|doc|docx';
    $config['max_size']             = 1000;
    $config['max_width']            = 1024;
    $config['max_height']           = 768;
    $this->load->library('upload', $config);
    $this->load->view('edit');
 
    if ($this->upload->do_upload('userfile'))
    {
      $upload_data = $this->upload->data();
      $fn="uploads/";
      $fn.=$upload_data['file_name'];
      $data= array(
        'studentid'=>$this->input->post('sid'),
        'name'=>$this->input->post('sn'),
        'class'=>$this->input->post('sc'),
        'section'=>$this->input->post('ss'),
        'Guardian'=>$this->input->post('sg'),
        'file'=>$fn
      );
      $adata= $this->session->userdata('a');
      $this->db->where('studentid',$adata['sid']);
    
      $p= $this->db->update('studentlist',$data);
   if($p) {echo "<script> alert('yes your details are saved'); </script>";
    }
    else{
    echo "<script> alert('Sorry ! Something missing .. Please try again'); </script>";
    }  
    }
  }
}
?>