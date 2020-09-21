<?php
class Student extends CI_MODEL
{
   public function adminlogin($data)
   {
    $q=  $this->db->insert('admin_login',$data);
   }
   public function savestudata($studentid,$name,$class,$section,$guardian,$file)
   {
      $picture = $_FILES['userfile'];
      $pictureName=$picture['name'];
      $pictureType=$picture['type'];
      $pictureTmpName=$picture['tmp_name'];
      $pictureError=$picture['error'];
      $pictureSize=$picture['size'];
      $pictureExt=explode('.',$pictureName);
      $pictureActualExt=strtolower(end($pictureExt));
      $allowed=array('jpg','pdf','jpeg','png');
      if(in_array($pictureActualExt,$allowed))
      {
        if($pictureError===0)
        {
          if($pictureSize<5000000)
          {
            $pictureNameNew=uniqid('',true).".".$pictureActualExt;
            $pictureDestination='uploads/'.$pictureNameNew;
            move_uploaded_file($pictureTmpName,$pictureDestination);
            $query="INSERT INTO `studentlist` (`studentid`, `name`, `class`, `section`, `Guardian`, `file`, `Timestamp`) VALUES ('$studentid', '$name', '$class', '$section', '$guardian', '$pictureDestination', current_timestamp()) ";
            $this->db->query($query);
          }
          else
          {
            echo "File size is too large";
          }
        }
        else
        {
          echo "Their is an error uploading your file";
        }
      }
      else
      {
        echo "You can't upload file of this type";
      }
    }
    public function frontenddata($data)
    {
      //$q=  $this->db->insert('frontdata',$data);
      $this ->db->select('studentid,name,class,section,Guardian,file');
      $this ->db->where('studentid',$data);
      $q=$this ->db->get('studentlist');
      return $q->row();
    }
    public function select()  
    {  
      $query = $this->db->get('studentlist');  
      return $query->result();
    }  
  }
?>