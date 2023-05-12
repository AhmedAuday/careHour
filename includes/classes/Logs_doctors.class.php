<?php
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/config.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/encrypt.inc.php';

  class Logs_doctors extends Database {
    private $sqlCondition = 1;
    private $id;
    private $actionn;
    private $new_user_id;
    private $new_first_name;
    private $new_middle_name;
    private $new_last_name;
    private $new_email;
    private $new_phone;
    private $new_gender;
    private $new_dob;
    private $new_specialty;
    private $new_education;
    private $new_experience_years;
    private $new_start_office_hour;
    private $new_end_office_hour;
    private $new_bio;
    private $logs_cdate;
    private $logs_ctime;
    private $log_ByUser;
    private $timee;
    private $time;

    public function __construct($id = null){
      $this->time = time();
      if($id != null){
        $this->setId($id);
        if($id != $this->id){
          exit('');
        }
        $sql = "SELECT * FROM `logs_doctors` WHERE `id`=$this->id";
        $result = $this->db()->query($sql);
        if($result->rowCount() > 0){
          $row = $result->fetch();
          $this->id = $row['id'];
          $this->actionn = $row['actionn'];
          $this->new_user_id = $row['new_user_id'];
          $this->new_first_name = $row['new_first_name'];
          $this->new_middle_name = $row['new_middle_name'];
          $this->new_last_name = $row['new_last_name'];
          $this->new_email = $row['new_email'];
          $this->new_phone = $row['new_phone'];
          $this->new_gender = $row['new_gender'];
          $this->new_dob = $row['new_dob'];
          $this->new_specialty = $row['new_specialty'];
          $this->new_education = $row['new_education'];
          $this->new_experience_years = $row['new_experience_years'];
          $this->new_start_office_hour = $row['new_start_office_hour'];
          $this->new_end_office_hour = $row['new_end_office_hour'];
          $this->new_bio = $row['new_bio'];
          $this->logs_cdate = $row['logs_cdate'];
          $this->logs_ctime = $row['logs_ctime'];
          $this->log_ByUser = $row['log_ByUser'];
          $this->timee = $row['timee'];
          $this->time = $row['time'];
        }
      }
    }

    public function exeQuery($q){
      $sql = "$q";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    } 

    public function getAll($limit = 1000000){
      if(!is_numeric($limit)){ return '[]'; }
      $sql = "SELECT * FROM `logs_doctors` WHERE $this->sqlCondition ORDER BY `id` LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function getAllReversed($limit = 1000000){
      if(!is_numeric($limit)){ return '[]'; }
      $sql = "SELECT * FROM `logs_doctors` WHERE $this->sqlCondition ORDER BY `id` DESC LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function getNumberOfRows(){
      $sql = "SELECT COUNT(*) AS 'numberOfRows' FROM `logs_doctors` WHERE $this->sqlCondition";
      $result = $this->db()->query($sql);
      $row = $result->fetch();
      return $row['numberOfRows'];
    }

    public function getById(){
      $sql = "SELECT * FROM `logs_doctors` WHERE `id`='$this->id'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_user_id = $row['new_user_id'];
        $this->new_first_name = $row['new_first_name'];
        $this->new_middle_name = $row['new_middle_name'];
        $this->new_last_name = $row['new_last_name'];
        $this->new_email = $row['new_email'];
        $this->new_phone = $row['new_phone'];
        $this->new_gender = $row['new_gender'];
        $this->new_dob = $row['new_dob'];
        $this->new_specialty = $row['new_specialty'];
        $this->new_education = $row['new_education'];
        $this->new_experience_years = $row['new_experience_years'];
        $this->new_start_office_hour = $row['new_start_office_hour'];
        $this->new_end_office_hour = $row['new_end_office_hour'];
        $this->new_bio = $row['new_bio'];
        $this->logs_cdate = $row['logs_cdate'];
        $this->logs_ctime = $row['logs_ctime'];
        $this->log_ByUser = $row['log_ByUser'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByActionn(){
      $sql = "SELECT * FROM `logs_doctors` WHERE `actionn`='$this->actionn'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_user_id = $row['new_user_id'];
        $this->new_first_name = $row['new_first_name'];
        $this->new_middle_name = $row['new_middle_name'];
        $this->new_last_name = $row['new_last_name'];
        $this->new_email = $row['new_email'];
        $this->new_phone = $row['new_phone'];
        $this->new_gender = $row['new_gender'];
        $this->new_dob = $row['new_dob'];
        $this->new_specialty = $row['new_specialty'];
        $this->new_education = $row['new_education'];
        $this->new_experience_years = $row['new_experience_years'];
        $this->new_start_office_hour = $row['new_start_office_hour'];
        $this->new_end_office_hour = $row['new_end_office_hour'];
        $this->new_bio = $row['new_bio'];
        $this->logs_cdate = $row['logs_cdate'];
        $this->logs_ctime = $row['logs_ctime'];
        $this->log_ByUser = $row['log_ByUser'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByNew_user_id(){
      $sql = "SELECT * FROM `logs_doctors` WHERE `new_user_id`='$this->new_user_id'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_user_id = $row['new_user_id'];
        $this->new_first_name = $row['new_first_name'];
        $this->new_middle_name = $row['new_middle_name'];
        $this->new_last_name = $row['new_last_name'];
        $this->new_email = $row['new_email'];
        $this->new_phone = $row['new_phone'];
        $this->new_gender = $row['new_gender'];
        $this->new_dob = $row['new_dob'];
        $this->new_specialty = $row['new_specialty'];
        $this->new_education = $row['new_education'];
        $this->new_experience_years = $row['new_experience_years'];
        $this->new_start_office_hour = $row['new_start_office_hour'];
        $this->new_end_office_hour = $row['new_end_office_hour'];
        $this->new_bio = $row['new_bio'];
        $this->logs_cdate = $row['logs_cdate'];
        $this->logs_ctime = $row['logs_ctime'];
        $this->log_ByUser = $row['log_ByUser'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByNew_first_name(){
      $sql = "SELECT * FROM `logs_doctors` WHERE `new_first_name`='$this->new_first_name'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_user_id = $row['new_user_id'];
        $this->new_first_name = $row['new_first_name'];
        $this->new_middle_name = $row['new_middle_name'];
        $this->new_last_name = $row['new_last_name'];
        $this->new_email = $row['new_email'];
        $this->new_phone = $row['new_phone'];
        $this->new_gender = $row['new_gender'];
        $this->new_dob = $row['new_dob'];
        $this->new_specialty = $row['new_specialty'];
        $this->new_education = $row['new_education'];
        $this->new_experience_years = $row['new_experience_years'];
        $this->new_start_office_hour = $row['new_start_office_hour'];
        $this->new_end_office_hour = $row['new_end_office_hour'];
        $this->new_bio = $row['new_bio'];
        $this->logs_cdate = $row['logs_cdate'];
        $this->logs_ctime = $row['logs_ctime'];
        $this->log_ByUser = $row['log_ByUser'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByNew_middle_name(){
      $sql = "SELECT * FROM `logs_doctors` WHERE `new_middle_name`='$this->new_middle_name'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_user_id = $row['new_user_id'];
        $this->new_first_name = $row['new_first_name'];
        $this->new_middle_name = $row['new_middle_name'];
        $this->new_last_name = $row['new_last_name'];
        $this->new_email = $row['new_email'];
        $this->new_phone = $row['new_phone'];
        $this->new_gender = $row['new_gender'];
        $this->new_dob = $row['new_dob'];
        $this->new_specialty = $row['new_specialty'];
        $this->new_education = $row['new_education'];
        $this->new_experience_years = $row['new_experience_years'];
        $this->new_start_office_hour = $row['new_start_office_hour'];
        $this->new_end_office_hour = $row['new_end_office_hour'];
        $this->new_bio = $row['new_bio'];
        $this->logs_cdate = $row['logs_cdate'];
        $this->logs_ctime = $row['logs_ctime'];
        $this->log_ByUser = $row['log_ByUser'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByNew_last_name(){
      $sql = "SELECT * FROM `logs_doctors` WHERE `new_last_name`='$this->new_last_name'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_user_id = $row['new_user_id'];
        $this->new_first_name = $row['new_first_name'];
        $this->new_middle_name = $row['new_middle_name'];
        $this->new_last_name = $row['new_last_name'];
        $this->new_email = $row['new_email'];
        $this->new_phone = $row['new_phone'];
        $this->new_gender = $row['new_gender'];
        $this->new_dob = $row['new_dob'];
        $this->new_specialty = $row['new_specialty'];
        $this->new_education = $row['new_education'];
        $this->new_experience_years = $row['new_experience_years'];
        $this->new_start_office_hour = $row['new_start_office_hour'];
        $this->new_end_office_hour = $row['new_end_office_hour'];
        $this->new_bio = $row['new_bio'];
        $this->logs_cdate = $row['logs_cdate'];
        $this->logs_ctime = $row['logs_ctime'];
        $this->log_ByUser = $row['log_ByUser'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByNew_email(){
      $sql = "SELECT * FROM `logs_doctors` WHERE `new_email`='$this->new_email'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_user_id = $row['new_user_id'];
        $this->new_first_name = $row['new_first_name'];
        $this->new_middle_name = $row['new_middle_name'];
        $this->new_last_name = $row['new_last_name'];
        $this->new_email = $row['new_email'];
        $this->new_phone = $row['new_phone'];
        $this->new_gender = $row['new_gender'];
        $this->new_dob = $row['new_dob'];
        $this->new_specialty = $row['new_specialty'];
        $this->new_education = $row['new_education'];
        $this->new_experience_years = $row['new_experience_years'];
        $this->new_start_office_hour = $row['new_start_office_hour'];
        $this->new_end_office_hour = $row['new_end_office_hour'];
        $this->new_bio = $row['new_bio'];
        $this->logs_cdate = $row['logs_cdate'];
        $this->logs_ctime = $row['logs_ctime'];
        $this->log_ByUser = $row['log_ByUser'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByNew_phone(){
      $sql = "SELECT * FROM `logs_doctors` WHERE `new_phone`='$this->new_phone'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_user_id = $row['new_user_id'];
        $this->new_first_name = $row['new_first_name'];
        $this->new_middle_name = $row['new_middle_name'];
        $this->new_last_name = $row['new_last_name'];
        $this->new_email = $row['new_email'];
        $this->new_phone = $row['new_phone'];
        $this->new_gender = $row['new_gender'];
        $this->new_dob = $row['new_dob'];
        $this->new_specialty = $row['new_specialty'];
        $this->new_education = $row['new_education'];
        $this->new_experience_years = $row['new_experience_years'];
        $this->new_start_office_hour = $row['new_start_office_hour'];
        $this->new_end_office_hour = $row['new_end_office_hour'];
        $this->new_bio = $row['new_bio'];
        $this->logs_cdate = $row['logs_cdate'];
        $this->logs_ctime = $row['logs_ctime'];
        $this->log_ByUser = $row['log_ByUser'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByNew_gender(){
      $sql = "SELECT * FROM `logs_doctors` WHERE `new_gender`='$this->new_gender'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_user_id = $row['new_user_id'];
        $this->new_first_name = $row['new_first_name'];
        $this->new_middle_name = $row['new_middle_name'];
        $this->new_last_name = $row['new_last_name'];
        $this->new_email = $row['new_email'];
        $this->new_phone = $row['new_phone'];
        $this->new_gender = $row['new_gender'];
        $this->new_dob = $row['new_dob'];
        $this->new_specialty = $row['new_specialty'];
        $this->new_education = $row['new_education'];
        $this->new_experience_years = $row['new_experience_years'];
        $this->new_start_office_hour = $row['new_start_office_hour'];
        $this->new_end_office_hour = $row['new_end_office_hour'];
        $this->new_bio = $row['new_bio'];
        $this->logs_cdate = $row['logs_cdate'];
        $this->logs_ctime = $row['logs_ctime'];
        $this->log_ByUser = $row['log_ByUser'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByNew_dob(){
      $sql = "SELECT * FROM `logs_doctors` WHERE `new_dob`='$this->new_dob'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_user_id = $row['new_user_id'];
        $this->new_first_name = $row['new_first_name'];
        $this->new_middle_name = $row['new_middle_name'];
        $this->new_last_name = $row['new_last_name'];
        $this->new_email = $row['new_email'];
        $this->new_phone = $row['new_phone'];
        $this->new_gender = $row['new_gender'];
        $this->new_dob = $row['new_dob'];
        $this->new_specialty = $row['new_specialty'];
        $this->new_education = $row['new_education'];
        $this->new_experience_years = $row['new_experience_years'];
        $this->new_start_office_hour = $row['new_start_office_hour'];
        $this->new_end_office_hour = $row['new_end_office_hour'];
        $this->new_bio = $row['new_bio'];
        $this->logs_cdate = $row['logs_cdate'];
        $this->logs_ctime = $row['logs_ctime'];
        $this->log_ByUser = $row['log_ByUser'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByNew_specialty(){
      $sql = "SELECT * FROM `logs_doctors` WHERE `new_specialty`='$this->new_specialty'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_user_id = $row['new_user_id'];
        $this->new_first_name = $row['new_first_name'];
        $this->new_middle_name = $row['new_middle_name'];
        $this->new_last_name = $row['new_last_name'];
        $this->new_email = $row['new_email'];
        $this->new_phone = $row['new_phone'];
        $this->new_gender = $row['new_gender'];
        $this->new_dob = $row['new_dob'];
        $this->new_specialty = $row['new_specialty'];
        $this->new_education = $row['new_education'];
        $this->new_experience_years = $row['new_experience_years'];
        $this->new_start_office_hour = $row['new_start_office_hour'];
        $this->new_end_office_hour = $row['new_end_office_hour'];
        $this->new_bio = $row['new_bio'];
        $this->logs_cdate = $row['logs_cdate'];
        $this->logs_ctime = $row['logs_ctime'];
        $this->log_ByUser = $row['log_ByUser'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByNew_education(){
      $sql = "SELECT * FROM `logs_doctors` WHERE `new_education`='$this->new_education'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_user_id = $row['new_user_id'];
        $this->new_first_name = $row['new_first_name'];
        $this->new_middle_name = $row['new_middle_name'];
        $this->new_last_name = $row['new_last_name'];
        $this->new_email = $row['new_email'];
        $this->new_phone = $row['new_phone'];
        $this->new_gender = $row['new_gender'];
        $this->new_dob = $row['new_dob'];
        $this->new_specialty = $row['new_specialty'];
        $this->new_education = $row['new_education'];
        $this->new_experience_years = $row['new_experience_years'];
        $this->new_start_office_hour = $row['new_start_office_hour'];
        $this->new_end_office_hour = $row['new_end_office_hour'];
        $this->new_bio = $row['new_bio'];
        $this->logs_cdate = $row['logs_cdate'];
        $this->logs_ctime = $row['logs_ctime'];
        $this->log_ByUser = $row['log_ByUser'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByNew_experience_years(){
      $sql = "SELECT * FROM `logs_doctors` WHERE `new_experience_years`='$this->new_experience_years'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_user_id = $row['new_user_id'];
        $this->new_first_name = $row['new_first_name'];
        $this->new_middle_name = $row['new_middle_name'];
        $this->new_last_name = $row['new_last_name'];
        $this->new_email = $row['new_email'];
        $this->new_phone = $row['new_phone'];
        $this->new_gender = $row['new_gender'];
        $this->new_dob = $row['new_dob'];
        $this->new_specialty = $row['new_specialty'];
        $this->new_education = $row['new_education'];
        $this->new_experience_years = $row['new_experience_years'];
        $this->new_start_office_hour = $row['new_start_office_hour'];
        $this->new_end_office_hour = $row['new_end_office_hour'];
        $this->new_bio = $row['new_bio'];
        $this->logs_cdate = $row['logs_cdate'];
        $this->logs_ctime = $row['logs_ctime'];
        $this->log_ByUser = $row['log_ByUser'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByNew_start_office_hour(){
      $sql = "SELECT * FROM `logs_doctors` WHERE `new_start_office_hour`='$this->new_start_office_hour'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_user_id = $row['new_user_id'];
        $this->new_first_name = $row['new_first_name'];
        $this->new_middle_name = $row['new_middle_name'];
        $this->new_last_name = $row['new_last_name'];
        $this->new_email = $row['new_email'];
        $this->new_phone = $row['new_phone'];
        $this->new_gender = $row['new_gender'];
        $this->new_dob = $row['new_dob'];
        $this->new_specialty = $row['new_specialty'];
        $this->new_education = $row['new_education'];
        $this->new_experience_years = $row['new_experience_years'];
        $this->new_start_office_hour = $row['new_start_office_hour'];
        $this->new_end_office_hour = $row['new_end_office_hour'];
        $this->new_bio = $row['new_bio'];
        $this->logs_cdate = $row['logs_cdate'];
        $this->logs_ctime = $row['logs_ctime'];
        $this->log_ByUser = $row['log_ByUser'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByNew_end_office_hour(){
      $sql = "SELECT * FROM `logs_doctors` WHERE `new_end_office_hour`='$this->new_end_office_hour'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_user_id = $row['new_user_id'];
        $this->new_first_name = $row['new_first_name'];
        $this->new_middle_name = $row['new_middle_name'];
        $this->new_last_name = $row['new_last_name'];
        $this->new_email = $row['new_email'];
        $this->new_phone = $row['new_phone'];
        $this->new_gender = $row['new_gender'];
        $this->new_dob = $row['new_dob'];
        $this->new_specialty = $row['new_specialty'];
        $this->new_education = $row['new_education'];
        $this->new_experience_years = $row['new_experience_years'];
        $this->new_start_office_hour = $row['new_start_office_hour'];
        $this->new_end_office_hour = $row['new_end_office_hour'];
        $this->new_bio = $row['new_bio'];
        $this->logs_cdate = $row['logs_cdate'];
        $this->logs_ctime = $row['logs_ctime'];
        $this->log_ByUser = $row['log_ByUser'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByNew_bio(){
      $sql = "SELECT * FROM `logs_doctors` WHERE `new_bio`='$this->new_bio'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_user_id = $row['new_user_id'];
        $this->new_first_name = $row['new_first_name'];
        $this->new_middle_name = $row['new_middle_name'];
        $this->new_last_name = $row['new_last_name'];
        $this->new_email = $row['new_email'];
        $this->new_phone = $row['new_phone'];
        $this->new_gender = $row['new_gender'];
        $this->new_dob = $row['new_dob'];
        $this->new_specialty = $row['new_specialty'];
        $this->new_education = $row['new_education'];
        $this->new_experience_years = $row['new_experience_years'];
        $this->new_start_office_hour = $row['new_start_office_hour'];
        $this->new_end_office_hour = $row['new_end_office_hour'];
        $this->new_bio = $row['new_bio'];
        $this->logs_cdate = $row['logs_cdate'];
        $this->logs_ctime = $row['logs_ctime'];
        $this->log_ByUser = $row['log_ByUser'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByLogs_cdate(){
      $sql = "SELECT * FROM `logs_doctors` WHERE `logs_cdate`='$this->logs_cdate'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_user_id = $row['new_user_id'];
        $this->new_first_name = $row['new_first_name'];
        $this->new_middle_name = $row['new_middle_name'];
        $this->new_last_name = $row['new_last_name'];
        $this->new_email = $row['new_email'];
        $this->new_phone = $row['new_phone'];
        $this->new_gender = $row['new_gender'];
        $this->new_dob = $row['new_dob'];
        $this->new_specialty = $row['new_specialty'];
        $this->new_education = $row['new_education'];
        $this->new_experience_years = $row['new_experience_years'];
        $this->new_start_office_hour = $row['new_start_office_hour'];
        $this->new_end_office_hour = $row['new_end_office_hour'];
        $this->new_bio = $row['new_bio'];
        $this->logs_cdate = $row['logs_cdate'];
        $this->logs_ctime = $row['logs_ctime'];
        $this->log_ByUser = $row['log_ByUser'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByLogs_ctime(){
      $sql = "SELECT * FROM `logs_doctors` WHERE `logs_ctime`='$this->logs_ctime'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_user_id = $row['new_user_id'];
        $this->new_first_name = $row['new_first_name'];
        $this->new_middle_name = $row['new_middle_name'];
        $this->new_last_name = $row['new_last_name'];
        $this->new_email = $row['new_email'];
        $this->new_phone = $row['new_phone'];
        $this->new_gender = $row['new_gender'];
        $this->new_dob = $row['new_dob'];
        $this->new_specialty = $row['new_specialty'];
        $this->new_education = $row['new_education'];
        $this->new_experience_years = $row['new_experience_years'];
        $this->new_start_office_hour = $row['new_start_office_hour'];
        $this->new_end_office_hour = $row['new_end_office_hour'];
        $this->new_bio = $row['new_bio'];
        $this->logs_cdate = $row['logs_cdate'];
        $this->logs_ctime = $row['logs_ctime'];
        $this->log_ByUser = $row['log_ByUser'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByLog_ByUser(){
      $sql = "SELECT * FROM `logs_doctors` WHERE `log_ByUser`='$this->log_ByUser'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_user_id = $row['new_user_id'];
        $this->new_first_name = $row['new_first_name'];
        $this->new_middle_name = $row['new_middle_name'];
        $this->new_last_name = $row['new_last_name'];
        $this->new_email = $row['new_email'];
        $this->new_phone = $row['new_phone'];
        $this->new_gender = $row['new_gender'];
        $this->new_dob = $row['new_dob'];
        $this->new_specialty = $row['new_specialty'];
        $this->new_education = $row['new_education'];
        $this->new_experience_years = $row['new_experience_years'];
        $this->new_start_office_hour = $row['new_start_office_hour'];
        $this->new_end_office_hour = $row['new_end_office_hour'];
        $this->new_bio = $row['new_bio'];
        $this->logs_cdate = $row['logs_cdate'];
        $this->logs_ctime = $row['logs_ctime'];
        $this->log_ByUser = $row['log_ByUser'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByTimee(){
      $sql = "SELECT * FROM `logs_doctors` WHERE `timee`='$this->timee'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_user_id = $row['new_user_id'];
        $this->new_first_name = $row['new_first_name'];
        $this->new_middle_name = $row['new_middle_name'];
        $this->new_last_name = $row['new_last_name'];
        $this->new_email = $row['new_email'];
        $this->new_phone = $row['new_phone'];
        $this->new_gender = $row['new_gender'];
        $this->new_dob = $row['new_dob'];
        $this->new_specialty = $row['new_specialty'];
        $this->new_education = $row['new_education'];
        $this->new_experience_years = $row['new_experience_years'];
        $this->new_start_office_hour = $row['new_start_office_hour'];
        $this->new_end_office_hour = $row['new_end_office_hour'];
        $this->new_bio = $row['new_bio'];
        $this->logs_cdate = $row['logs_cdate'];
        $this->logs_ctime = $row['logs_ctime'];
        $this->log_ByUser = $row['log_ByUser'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByTime(){
      $sql = "SELECT * FROM `logs_doctors` WHERE `time`='$this->time'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_user_id = $row['new_user_id'];
        $this->new_first_name = $row['new_first_name'];
        $this->new_middle_name = $row['new_middle_name'];
        $this->new_last_name = $row['new_last_name'];
        $this->new_email = $row['new_email'];
        $this->new_phone = $row['new_phone'];
        $this->new_gender = $row['new_gender'];
        $this->new_dob = $row['new_dob'];
        $this->new_specialty = $row['new_specialty'];
        $this->new_education = $row['new_education'];
        $this->new_experience_years = $row['new_experience_years'];
        $this->new_start_office_hour = $row['new_start_office_hour'];
        $this->new_end_office_hour = $row['new_end_office_hour'];
        $this->new_bio = $row['new_bio'];
        $this->logs_cdate = $row['logs_cdate'];
        $this->logs_ctime = $row['logs_ctime'];
        $this->log_ByUser = $row['log_ByUser'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getLastRow(){
      $sql = "SELECT * FROM `logs_doctors` WHERE $this->sqlCondition ORDER BY `id` DESC";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_user_id = $row['new_user_id'];
        $this->new_first_name = $row['new_first_name'];
        $this->new_middle_name = $row['new_middle_name'];
        $this->new_last_name = $row['new_last_name'];
        $this->new_email = $row['new_email'];
        $this->new_phone = $row['new_phone'];
        $this->new_gender = $row['new_gender'];
        $this->new_dob = $row['new_dob'];
        $this->new_specialty = $row['new_specialty'];
        $this->new_education = $row['new_education'];
        $this->new_experience_years = $row['new_experience_years'];
        $this->new_start_office_hour = $row['new_start_office_hour'];
        $this->new_end_office_hour = $row['new_end_office_hour'];
        $this->new_bio = $row['new_bio'];
        $this->logs_cdate = $row['logs_cdate'];
        $this->logs_ctime = $row['logs_ctime'];
        $this->log_ByUser = $row['log_ByUser'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getFirstRow(){
      $sql = "SELECT * FROM `logs_doctors` WHERE $this->sqlCondition ORDER BY `id`";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_user_id = $row['new_user_id'];
        $this->new_first_name = $row['new_first_name'];
        $this->new_middle_name = $row['new_middle_name'];
        $this->new_last_name = $row['new_last_name'];
        $this->new_email = $row['new_email'];
        $this->new_phone = $row['new_phone'];
        $this->new_gender = $row['new_gender'];
        $this->new_dob = $row['new_dob'];
        $this->new_specialty = $row['new_specialty'];
        $this->new_education = $row['new_education'];
        $this->new_experience_years = $row['new_experience_years'];
        $this->new_start_office_hour = $row['new_start_office_hour'];
        $this->new_end_office_hour = $row['new_end_office_hour'];
        $this->new_bio = $row['new_bio'];
        $this->logs_cdate = $row['logs_cdate'];
        $this->logs_ctime = $row['logs_ctime'];
        $this->log_ByUser = $row['log_ByUser'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getBySet($limit){
      if(!is_numeric($limit)){ return '[]'; }
      $sql = "SELECT * FROM `logs_doctors` WHERE `id` LIKE '%$this->id%' AND `actionn` LIKE '%$this->actionn%' AND `new_user_id` LIKE '%$this->new_user_id%' AND `new_first_name` LIKE '%$this->new_first_name%' AND `new_middle_name` LIKE '%$this->new_middle_name%' AND `new_last_name` LIKE '%$this->new_last_name%' AND `new_email` LIKE '%$this->new_email%' AND `new_phone` LIKE '%$this->new_phone%' AND `new_gender` LIKE '%$this->new_gender%' AND `new_dob` LIKE '%$this->new_dob%' AND `new_specialty` LIKE '%$this->new_specialty%' AND `new_education` LIKE '%$this->new_education%' AND `new_experience_years` LIKE '%$this->new_experience_years%' AND `new_start_office_hour` LIKE '%$this->new_start_office_hour%' AND `new_end_office_hour` LIKE '%$this->new_end_office_hour%' AND `new_bio` LIKE '%$this->new_bio%' AND `logs_cdate` LIKE '%$this->logs_cdate%' AND `logs_ctime` LIKE '%$this->logs_ctime%' AND `log_ByUser` LIKE '%$this->log_ByUser%' AND `timee` LIKE '%$this->timee%' AND `time` LIKE '%$this->time%' LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function add(){
      $sql = "INSERT INTO `logs_doctors` (`id`, `actionn`, `new_user_id`, `new_first_name`, `new_middle_name`, `new_last_name`, `new_email`, `new_phone`, `new_gender`, `new_dob`, `new_specialty`, `new_education`, `new_experience_years`, `new_start_office_hour`, `new_end_office_hour`, `new_bio`, `logs_cdate`, `logs_ctime`, `log_ByUser`, `timee`, `time`) VALUES 
      ('$this->id', '$this->actionn', '$this->new_user_id', '$this->new_first_name', '$this->new_middle_name', '$this->new_last_name', '$this->new_email', '$this->new_phone', '$this->new_gender', '$this->new_dob', '$this->new_specialty', '$this->new_education', '$this->new_experience_years', '$this->new_start_office_hour', '$this->new_end_office_hour', '$this->new_bio', '$this->logs_cdate', '$this->logs_ctime', '$this->log_ByUser', '$this->timee', '$this->time')";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function update(){
      $sql = "UPDATE `logs_doctors` SET `id`='$this->id', `actionn`='$this->actionn', `new_user_id`='$this->new_user_id', `new_first_name`='$this->new_first_name', `new_middle_name`='$this->new_middle_name', `new_last_name`='$this->new_last_name', `new_email`='$this->new_email', `new_phone`='$this->new_phone', `new_gender`='$this->new_gender', `new_dob`='$this->new_dob', `new_specialty`='$this->new_specialty', `new_education`='$this->new_education', `new_experience_years`='$this->new_experience_years', `new_start_office_hour`='$this->new_start_office_hour', `new_end_office_hour`='$this->new_end_office_hour', `new_bio`='$this->new_bio', `logs_cdate`='$this->logs_cdate', `logs_ctime`='$this->logs_ctime', `log_ByUser`='$this->log_ByUser', `timee`='$this->timee', `time`='$this->time' WHERE `id`='$this->id'";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function delete() {
      $sql = "DELETE FROM `logs_doctors` WHERE `id`='$this->id'";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function giveIdentity($days){
      setcookie('logs_doctors', encode("$this->id"), time() + (86400 * $days), "/");
    }

    public function getIdentity($days){
      if(isset($_COOKIE['logs_doctors'])){
        decode($_COOKIE['logs_doctors']);
      }else{return false;}
    }

    public function deleteIdentity($days){
      setcookie("logs_doctors", '', time() - 3600);
    }

    public function giveAuthority(){
      $_SESSION['logs_doctors'] = encrypt($this->id);
      $_SESSION['logs_doctors_id'] = $this->id;
    }

    public function getAuthority(){
      if(isset($_SESSION['logs_doctors']) && isset($_SESSION['logs_doctors_id'])){
        $tmp_id = filter($_SESSION['logs_doctors_id']);
        $sql = "SELECT * from `logs_doctors` WHERE `id`='$tmp_id'";
        $result = $this->db()->query($sql);
        $row = $result->fetch();
        if(encrypt($row['id']) == $_SESSION['logs_doctors']){
          return $_SESSION['logs_doctors_id'];
        }else{return -2;}
      }else{return -1;}
    }

    public function deleteAuthority(){
      session_unset();
      session_destroy();
    }
    public function setSqlCondition($sqlCondition){
	    $this->sqlCondition = $sqlCondition;
	    return true;
    }

    public function setId($id){
      if(is_numeric($id)){
        $this->id = filter($id);
        return true;
      }else{
        return false;
      }
    }

    public function setActionn($actionn){
      if(is_string($actionn)){
        $this->actionn = filter($actionn);
        return true;
      }else{
        return false;
      }
    }

    public function setNew_user_id($new_user_id){
      if(is_numeric($new_user_id)){
        $this->new_user_id = filter($new_user_id);
        return true;
      }else{
        return false;
      }
    }

    public function setNew_first_name($new_first_name){
      if(is_string($new_first_name)){
        $this->new_first_name = filter($new_first_name);
        return true;
      }else{
        return false;
      }
    }

    public function setNew_middle_name($new_middle_name){
      if(is_string($new_middle_name)){
        $this->new_middle_name = filter($new_middle_name);
        return true;
      }else{
        return false;
      }
    }

    public function setNew_last_name($new_last_name){
      if(is_string($new_last_name)){
        $this->new_last_name = filter($new_last_name);
        return true;
      }else{
        return false;
      }
    }

    public function setNew_email($new_email){
      if(is_string($new_email)){
        $this->new_email = filter($new_email);
        return true;
      }else{
        return false;
      }
    }

    public function setNew_phone($new_phone){
      if(is_string($new_phone)){
        $this->new_phone = filter($new_phone);
        return true;
      }else{
        return false;
      }
    }

    public function setNew_gender($new_gender){
      if(is_string($new_gender)){
        $this->new_gender = filter($new_gender);
        return true;
      }else{
        return false;
      }
    }

    public function setNew_dob($new_dob){
      if(is_string($new_dob)){
        $this->new_dob = filter($new_dob);
        return true;
      }else{
        return false;
      }
    }

    public function setNew_specialty($new_specialty){
      if(is_string($new_specialty)){
        $this->new_specialty = filter($new_specialty);
        return true;
      }else{
        return false;
      }
    }

    public function setNew_education($new_education){
      if(is_string($new_education)){
        $this->new_education = filter($new_education);
        return true;
      }else{
        return false;
      }
    }

    public function setNew_experience_years($new_experience_years){
      if(is_numeric($new_experience_years)){
        $this->new_experience_years = filter($new_experience_years);
        return true;
      }else{
        return false;
      }
    }

    public function setNew_start_office_hour($new_start_office_hour){
      if(is_string($new_start_office_hour)){
        $this->new_start_office_hour = filter($new_start_office_hour);
        return true;
      }else{
        return false;
      }
    }

    public function setNew_end_office_hour($new_end_office_hour){
      if(is_string($new_end_office_hour)){
        $this->new_end_office_hour = filter($new_end_office_hour);
        return true;
      }else{
        return false;
      }
    }

    public function setNew_bio($new_bio){
      if(is_string($new_bio)){
        $this->new_bio = filter($new_bio);
        return true;
      }else{
        return false;
      }
    }

    public function setLogs_cdate($logs_cdate){
      if(is_string($logs_cdate)){
        $this->logs_cdate = filter($logs_cdate);
        return true;
      }else{
        return false;
      }
    }

    public function setLogs_ctime($logs_ctime){
      if(is_string($logs_ctime)){
        $this->logs_ctime = filter($logs_ctime);
        return true;
      }else{
        return false;
      }
    }

    public function setLog_ByUser($log_ByUser){
      if(is_string($log_ByUser)){
        $this->log_ByUser = filter($log_ByUser);
        return true;
      }else{
        return false;
      }
    }

    public function setTimee($timee){
      if(is_numeric($timee)){
        $this->timee = filter($timee);
        return true;
      }else{
        return false;
      }
    }

    public function setTime($time){
      if(is_string($time)){
        $this->time = filter($time);
        return true;
      }else{
        return false;
      }
    }

    public function getId(){
      return $this->id;
    }

    public function getActionn(){
      return $this->actionn;
    }

    public function getNew_user_id(){
      return $this->new_user_id;
    }

    public function getNew_first_name(){
      return $this->new_first_name;
    }

    public function getNew_middle_name(){
      return $this->new_middle_name;
    }

    public function getNew_last_name(){
      return $this->new_last_name;
    }

    public function getNew_email(){
      return $this->new_email;
    }

    public function getNew_phone(){
      return $this->new_phone;
    }

    public function getNew_gender(){
      return $this->new_gender;
    }

    public function getNew_dob(){
      return $this->new_dob;
    }

    public function getNew_specialty(){
      return $this->new_specialty;
    }

    public function getNew_education(){
      return $this->new_education;
    }

    public function getNew_experience_years(){
      return $this->new_experience_years;
    }

    public function getNew_start_office_hour(){
      return $this->new_start_office_hour;
    }

    public function getNew_end_office_hour(){
      return $this->new_end_office_hour;
    }

    public function getNew_bio(){
      return $this->new_bio;
    }

    public function getLogs_cdate(){
      return $this->logs_cdate;
    }

    public function getLogs_ctime(){
      return $this->logs_ctime;
    }

    public function getLog_ByUser(){
      return $this->log_ByUser;
    }

    public function getTimee(){
      return $this->timee;
    }

    public function getTime(){
      return $this->time;
    }

  }
?>