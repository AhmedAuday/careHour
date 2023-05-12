<?php
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/config.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/encrypt.inc.php';

  class Logs_patients extends Database {
    private $sqlCondition = 1;
    private $id;
    private $actionn;
    private $new_user_id;
    private $new_first_name;
    private $new_middle_name;
    private $new_last_name;
    private $new_date_of_birth;
    private $new_gender;
    private $new_address;
    private $new_city;
    private $new_state;
    private $new_zip_code;
    private $new_phone_number;
    private $new_email;
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
        $sql = "SELECT * FROM `logs_patients` WHERE `id`=$this->id";
        $result = $this->db()->query($sql);
        if($result->rowCount() > 0){
          $row = $result->fetch();
          $this->id = $row['id'];
          $this->actionn = $row['actionn'];
          $this->new_user_id = $row['new_user_id'];
          $this->new_first_name = $row['new_first_name'];
          $this->new_middle_name = $row['new_middle_name'];
          $this->new_last_name = $row['new_last_name'];
          $this->new_date_of_birth = $row['new_date_of_birth'];
          $this->new_gender = $row['new_gender'];
          $this->new_address = $row['new_address'];
          $this->new_city = $row['new_city'];
          $this->new_state = $row['new_state'];
          $this->new_zip_code = $row['new_zip_code'];
          $this->new_phone_number = $row['new_phone_number'];
          $this->new_email = $row['new_email'];
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
      $sql = "SELECT * FROM `logs_patients` WHERE $this->sqlCondition ORDER BY `id` LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function getAllReversed($limit = 1000000){
      if(!is_numeric($limit)){ return '[]'; }
      $sql = "SELECT * FROM `logs_patients` WHERE $this->sqlCondition ORDER BY `id` DESC LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function getNumberOfRows(){
      $sql = "SELECT COUNT(*) AS 'numberOfRows' FROM `logs_patients` WHERE $this->sqlCondition";
      $result = $this->db()->query($sql);
      $row = $result->fetch();
      return $row['numberOfRows'];
    }

    public function getById(){
      $sql = "SELECT * FROM `logs_patients` WHERE `id`='$this->id'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_user_id = $row['new_user_id'];
        $this->new_first_name = $row['new_first_name'];
        $this->new_middle_name = $row['new_middle_name'];
        $this->new_last_name = $row['new_last_name'];
        $this->new_date_of_birth = $row['new_date_of_birth'];
        $this->new_gender = $row['new_gender'];
        $this->new_address = $row['new_address'];
        $this->new_city = $row['new_city'];
        $this->new_state = $row['new_state'];
        $this->new_zip_code = $row['new_zip_code'];
        $this->new_phone_number = $row['new_phone_number'];
        $this->new_email = $row['new_email'];
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
      $sql = "SELECT * FROM `logs_patients` WHERE `actionn`='$this->actionn'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_user_id = $row['new_user_id'];
        $this->new_first_name = $row['new_first_name'];
        $this->new_middle_name = $row['new_middle_name'];
        $this->new_last_name = $row['new_last_name'];
        $this->new_date_of_birth = $row['new_date_of_birth'];
        $this->new_gender = $row['new_gender'];
        $this->new_address = $row['new_address'];
        $this->new_city = $row['new_city'];
        $this->new_state = $row['new_state'];
        $this->new_zip_code = $row['new_zip_code'];
        $this->new_phone_number = $row['new_phone_number'];
        $this->new_email = $row['new_email'];
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
      $sql = "SELECT * FROM `logs_patients` WHERE `new_user_id`='$this->new_user_id'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_user_id = $row['new_user_id'];
        $this->new_first_name = $row['new_first_name'];
        $this->new_middle_name = $row['new_middle_name'];
        $this->new_last_name = $row['new_last_name'];
        $this->new_date_of_birth = $row['new_date_of_birth'];
        $this->new_gender = $row['new_gender'];
        $this->new_address = $row['new_address'];
        $this->new_city = $row['new_city'];
        $this->new_state = $row['new_state'];
        $this->new_zip_code = $row['new_zip_code'];
        $this->new_phone_number = $row['new_phone_number'];
        $this->new_email = $row['new_email'];
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
      $sql = "SELECT * FROM `logs_patients` WHERE `new_first_name`='$this->new_first_name'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_user_id = $row['new_user_id'];
        $this->new_first_name = $row['new_first_name'];
        $this->new_middle_name = $row['new_middle_name'];
        $this->new_last_name = $row['new_last_name'];
        $this->new_date_of_birth = $row['new_date_of_birth'];
        $this->new_gender = $row['new_gender'];
        $this->new_address = $row['new_address'];
        $this->new_city = $row['new_city'];
        $this->new_state = $row['new_state'];
        $this->new_zip_code = $row['new_zip_code'];
        $this->new_phone_number = $row['new_phone_number'];
        $this->new_email = $row['new_email'];
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
      $sql = "SELECT * FROM `logs_patients` WHERE `new_middle_name`='$this->new_middle_name'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_user_id = $row['new_user_id'];
        $this->new_first_name = $row['new_first_name'];
        $this->new_middle_name = $row['new_middle_name'];
        $this->new_last_name = $row['new_last_name'];
        $this->new_date_of_birth = $row['new_date_of_birth'];
        $this->new_gender = $row['new_gender'];
        $this->new_address = $row['new_address'];
        $this->new_city = $row['new_city'];
        $this->new_state = $row['new_state'];
        $this->new_zip_code = $row['new_zip_code'];
        $this->new_phone_number = $row['new_phone_number'];
        $this->new_email = $row['new_email'];
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
      $sql = "SELECT * FROM `logs_patients` WHERE `new_last_name`='$this->new_last_name'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_user_id = $row['new_user_id'];
        $this->new_first_name = $row['new_first_name'];
        $this->new_middle_name = $row['new_middle_name'];
        $this->new_last_name = $row['new_last_name'];
        $this->new_date_of_birth = $row['new_date_of_birth'];
        $this->new_gender = $row['new_gender'];
        $this->new_address = $row['new_address'];
        $this->new_city = $row['new_city'];
        $this->new_state = $row['new_state'];
        $this->new_zip_code = $row['new_zip_code'];
        $this->new_phone_number = $row['new_phone_number'];
        $this->new_email = $row['new_email'];
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

    public function getByNew_date_of_birth(){
      $sql = "SELECT * FROM `logs_patients` WHERE `new_date_of_birth`='$this->new_date_of_birth'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_user_id = $row['new_user_id'];
        $this->new_first_name = $row['new_first_name'];
        $this->new_middle_name = $row['new_middle_name'];
        $this->new_last_name = $row['new_last_name'];
        $this->new_date_of_birth = $row['new_date_of_birth'];
        $this->new_gender = $row['new_gender'];
        $this->new_address = $row['new_address'];
        $this->new_city = $row['new_city'];
        $this->new_state = $row['new_state'];
        $this->new_zip_code = $row['new_zip_code'];
        $this->new_phone_number = $row['new_phone_number'];
        $this->new_email = $row['new_email'];
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
      $sql = "SELECT * FROM `logs_patients` WHERE `new_gender`='$this->new_gender'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_user_id = $row['new_user_id'];
        $this->new_first_name = $row['new_first_name'];
        $this->new_middle_name = $row['new_middle_name'];
        $this->new_last_name = $row['new_last_name'];
        $this->new_date_of_birth = $row['new_date_of_birth'];
        $this->new_gender = $row['new_gender'];
        $this->new_address = $row['new_address'];
        $this->new_city = $row['new_city'];
        $this->new_state = $row['new_state'];
        $this->new_zip_code = $row['new_zip_code'];
        $this->new_phone_number = $row['new_phone_number'];
        $this->new_email = $row['new_email'];
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

    public function getByNew_address(){
      $sql = "SELECT * FROM `logs_patients` WHERE `new_address`='$this->new_address'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_user_id = $row['new_user_id'];
        $this->new_first_name = $row['new_first_name'];
        $this->new_middle_name = $row['new_middle_name'];
        $this->new_last_name = $row['new_last_name'];
        $this->new_date_of_birth = $row['new_date_of_birth'];
        $this->new_gender = $row['new_gender'];
        $this->new_address = $row['new_address'];
        $this->new_city = $row['new_city'];
        $this->new_state = $row['new_state'];
        $this->new_zip_code = $row['new_zip_code'];
        $this->new_phone_number = $row['new_phone_number'];
        $this->new_email = $row['new_email'];
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

    public function getByNew_city(){
      $sql = "SELECT * FROM `logs_patients` WHERE `new_city`='$this->new_city'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_user_id = $row['new_user_id'];
        $this->new_first_name = $row['new_first_name'];
        $this->new_middle_name = $row['new_middle_name'];
        $this->new_last_name = $row['new_last_name'];
        $this->new_date_of_birth = $row['new_date_of_birth'];
        $this->new_gender = $row['new_gender'];
        $this->new_address = $row['new_address'];
        $this->new_city = $row['new_city'];
        $this->new_state = $row['new_state'];
        $this->new_zip_code = $row['new_zip_code'];
        $this->new_phone_number = $row['new_phone_number'];
        $this->new_email = $row['new_email'];
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

    public function getByNew_state(){
      $sql = "SELECT * FROM `logs_patients` WHERE `new_state`='$this->new_state'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_user_id = $row['new_user_id'];
        $this->new_first_name = $row['new_first_name'];
        $this->new_middle_name = $row['new_middle_name'];
        $this->new_last_name = $row['new_last_name'];
        $this->new_date_of_birth = $row['new_date_of_birth'];
        $this->new_gender = $row['new_gender'];
        $this->new_address = $row['new_address'];
        $this->new_city = $row['new_city'];
        $this->new_state = $row['new_state'];
        $this->new_zip_code = $row['new_zip_code'];
        $this->new_phone_number = $row['new_phone_number'];
        $this->new_email = $row['new_email'];
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

    public function getByNew_zip_code(){
      $sql = "SELECT * FROM `logs_patients` WHERE `new_zip_code`='$this->new_zip_code'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_user_id = $row['new_user_id'];
        $this->new_first_name = $row['new_first_name'];
        $this->new_middle_name = $row['new_middle_name'];
        $this->new_last_name = $row['new_last_name'];
        $this->new_date_of_birth = $row['new_date_of_birth'];
        $this->new_gender = $row['new_gender'];
        $this->new_address = $row['new_address'];
        $this->new_city = $row['new_city'];
        $this->new_state = $row['new_state'];
        $this->new_zip_code = $row['new_zip_code'];
        $this->new_phone_number = $row['new_phone_number'];
        $this->new_email = $row['new_email'];
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

    public function getByNew_phone_number(){
      $sql = "SELECT * FROM `logs_patients` WHERE `new_phone_number`='$this->new_phone_number'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_user_id = $row['new_user_id'];
        $this->new_first_name = $row['new_first_name'];
        $this->new_middle_name = $row['new_middle_name'];
        $this->new_last_name = $row['new_last_name'];
        $this->new_date_of_birth = $row['new_date_of_birth'];
        $this->new_gender = $row['new_gender'];
        $this->new_address = $row['new_address'];
        $this->new_city = $row['new_city'];
        $this->new_state = $row['new_state'];
        $this->new_zip_code = $row['new_zip_code'];
        $this->new_phone_number = $row['new_phone_number'];
        $this->new_email = $row['new_email'];
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
      $sql = "SELECT * FROM `logs_patients` WHERE `new_email`='$this->new_email'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_user_id = $row['new_user_id'];
        $this->new_first_name = $row['new_first_name'];
        $this->new_middle_name = $row['new_middle_name'];
        $this->new_last_name = $row['new_last_name'];
        $this->new_date_of_birth = $row['new_date_of_birth'];
        $this->new_gender = $row['new_gender'];
        $this->new_address = $row['new_address'];
        $this->new_city = $row['new_city'];
        $this->new_state = $row['new_state'];
        $this->new_zip_code = $row['new_zip_code'];
        $this->new_phone_number = $row['new_phone_number'];
        $this->new_email = $row['new_email'];
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
      $sql = "SELECT * FROM `logs_patients` WHERE `logs_cdate`='$this->logs_cdate'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_user_id = $row['new_user_id'];
        $this->new_first_name = $row['new_first_name'];
        $this->new_middle_name = $row['new_middle_name'];
        $this->new_last_name = $row['new_last_name'];
        $this->new_date_of_birth = $row['new_date_of_birth'];
        $this->new_gender = $row['new_gender'];
        $this->new_address = $row['new_address'];
        $this->new_city = $row['new_city'];
        $this->new_state = $row['new_state'];
        $this->new_zip_code = $row['new_zip_code'];
        $this->new_phone_number = $row['new_phone_number'];
        $this->new_email = $row['new_email'];
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
      $sql = "SELECT * FROM `logs_patients` WHERE `logs_ctime`='$this->logs_ctime'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_user_id = $row['new_user_id'];
        $this->new_first_name = $row['new_first_name'];
        $this->new_middle_name = $row['new_middle_name'];
        $this->new_last_name = $row['new_last_name'];
        $this->new_date_of_birth = $row['new_date_of_birth'];
        $this->new_gender = $row['new_gender'];
        $this->new_address = $row['new_address'];
        $this->new_city = $row['new_city'];
        $this->new_state = $row['new_state'];
        $this->new_zip_code = $row['new_zip_code'];
        $this->new_phone_number = $row['new_phone_number'];
        $this->new_email = $row['new_email'];
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
      $sql = "SELECT * FROM `logs_patients` WHERE `log_ByUser`='$this->log_ByUser'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_user_id = $row['new_user_id'];
        $this->new_first_name = $row['new_first_name'];
        $this->new_middle_name = $row['new_middle_name'];
        $this->new_last_name = $row['new_last_name'];
        $this->new_date_of_birth = $row['new_date_of_birth'];
        $this->new_gender = $row['new_gender'];
        $this->new_address = $row['new_address'];
        $this->new_city = $row['new_city'];
        $this->new_state = $row['new_state'];
        $this->new_zip_code = $row['new_zip_code'];
        $this->new_phone_number = $row['new_phone_number'];
        $this->new_email = $row['new_email'];
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
      $sql = "SELECT * FROM `logs_patients` WHERE `timee`='$this->timee'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_user_id = $row['new_user_id'];
        $this->new_first_name = $row['new_first_name'];
        $this->new_middle_name = $row['new_middle_name'];
        $this->new_last_name = $row['new_last_name'];
        $this->new_date_of_birth = $row['new_date_of_birth'];
        $this->new_gender = $row['new_gender'];
        $this->new_address = $row['new_address'];
        $this->new_city = $row['new_city'];
        $this->new_state = $row['new_state'];
        $this->new_zip_code = $row['new_zip_code'];
        $this->new_phone_number = $row['new_phone_number'];
        $this->new_email = $row['new_email'];
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
      $sql = "SELECT * FROM `logs_patients` WHERE `time`='$this->time'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_user_id = $row['new_user_id'];
        $this->new_first_name = $row['new_first_name'];
        $this->new_middle_name = $row['new_middle_name'];
        $this->new_last_name = $row['new_last_name'];
        $this->new_date_of_birth = $row['new_date_of_birth'];
        $this->new_gender = $row['new_gender'];
        $this->new_address = $row['new_address'];
        $this->new_city = $row['new_city'];
        $this->new_state = $row['new_state'];
        $this->new_zip_code = $row['new_zip_code'];
        $this->new_phone_number = $row['new_phone_number'];
        $this->new_email = $row['new_email'];
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
      $sql = "SELECT * FROM `logs_patients` WHERE $this->sqlCondition ORDER BY `id` DESC";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_user_id = $row['new_user_id'];
        $this->new_first_name = $row['new_first_name'];
        $this->new_middle_name = $row['new_middle_name'];
        $this->new_last_name = $row['new_last_name'];
        $this->new_date_of_birth = $row['new_date_of_birth'];
        $this->new_gender = $row['new_gender'];
        $this->new_address = $row['new_address'];
        $this->new_city = $row['new_city'];
        $this->new_state = $row['new_state'];
        $this->new_zip_code = $row['new_zip_code'];
        $this->new_phone_number = $row['new_phone_number'];
        $this->new_email = $row['new_email'];
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
      $sql = "SELECT * FROM `logs_patients` WHERE $this->sqlCondition ORDER BY `id`";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_user_id = $row['new_user_id'];
        $this->new_first_name = $row['new_first_name'];
        $this->new_middle_name = $row['new_middle_name'];
        $this->new_last_name = $row['new_last_name'];
        $this->new_date_of_birth = $row['new_date_of_birth'];
        $this->new_gender = $row['new_gender'];
        $this->new_address = $row['new_address'];
        $this->new_city = $row['new_city'];
        $this->new_state = $row['new_state'];
        $this->new_zip_code = $row['new_zip_code'];
        $this->new_phone_number = $row['new_phone_number'];
        $this->new_email = $row['new_email'];
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
      $sql = "SELECT * FROM `logs_patients` WHERE `id` LIKE '%$this->id%' AND `actionn` LIKE '%$this->actionn%' AND `new_user_id` LIKE '%$this->new_user_id%' AND `new_first_name` LIKE '%$this->new_first_name%' AND `new_middle_name` LIKE '%$this->new_middle_name%' AND `new_last_name` LIKE '%$this->new_last_name%' AND `new_date_of_birth` LIKE '%$this->new_date_of_birth%' AND `new_gender` LIKE '%$this->new_gender%' AND `new_address` LIKE '%$this->new_address%' AND `new_city` LIKE '%$this->new_city%' AND `new_state` LIKE '%$this->new_state%' AND `new_zip_code` LIKE '%$this->new_zip_code%' AND `new_phone_number` LIKE '%$this->new_phone_number%' AND `new_email` LIKE '%$this->new_email%' AND `logs_cdate` LIKE '%$this->logs_cdate%' AND `logs_ctime` LIKE '%$this->logs_ctime%' AND `log_ByUser` LIKE '%$this->log_ByUser%' AND `timee` LIKE '%$this->timee%' AND `time` LIKE '%$this->time%' LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function add(){
      $sql = "INSERT INTO `logs_patients` (`id`, `actionn`, `new_user_id`, `new_first_name`, `new_middle_name`, `new_last_name`, `new_date_of_birth`, `new_gender`, `new_address`, `new_city`, `new_state`, `new_zip_code`, `new_phone_number`, `new_email`, `logs_cdate`, `logs_ctime`, `log_ByUser`, `timee`, `time`) VALUES 
      ('$this->id', '$this->actionn', '$this->new_user_id', '$this->new_first_name', '$this->new_middle_name', '$this->new_last_name', '$this->new_date_of_birth', '$this->new_gender', '$this->new_address', '$this->new_city', '$this->new_state', '$this->new_zip_code', '$this->new_phone_number', '$this->new_email', '$this->logs_cdate', '$this->logs_ctime', '$this->log_ByUser', '$this->timee', '$this->time')";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function update(){
      $sql = "UPDATE `logs_patients` SET `id`='$this->id', `actionn`='$this->actionn', `new_user_id`='$this->new_user_id', `new_first_name`='$this->new_first_name', `new_middle_name`='$this->new_middle_name', `new_last_name`='$this->new_last_name', `new_date_of_birth`='$this->new_date_of_birth', `new_gender`='$this->new_gender', `new_address`='$this->new_address', `new_city`='$this->new_city', `new_state`='$this->new_state', `new_zip_code`='$this->new_zip_code', `new_phone_number`='$this->new_phone_number', `new_email`='$this->new_email', `logs_cdate`='$this->logs_cdate', `logs_ctime`='$this->logs_ctime', `log_ByUser`='$this->log_ByUser', `timee`='$this->timee', `time`='$this->time' WHERE `id`='$this->id'";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function delete() {
      $sql = "DELETE FROM `logs_patients` WHERE `id`='$this->id'";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function giveIdentity($days){
      setcookie('logs_patients', encode("$this->id"), time() + (86400 * $days), "/");
    }

    public function getIdentity($days){
      if(isset($_COOKIE['logs_patients'])){
        decode($_COOKIE['logs_patients']);
      }else{return false;}
    }

    public function deleteIdentity($days){
      setcookie("logs_patients", '', time() - 3600);
    }

    public function giveAuthority(){
      $_SESSION['logs_patients'] = encrypt($this->id);
      $_SESSION['logs_patients_id'] = $this->id;
    }

    public function getAuthority(){
      if(isset($_SESSION['logs_patients']) && isset($_SESSION['logs_patients_id'])){
        $tmp_id = filter($_SESSION['logs_patients_id']);
        $sql = "SELECT * from `logs_patients` WHERE `id`='$tmp_id'";
        $result = $this->db()->query($sql);
        $row = $result->fetch();
        if(encrypt($row['id']) == $_SESSION['logs_patients']){
          return $_SESSION['logs_patients_id'];
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

    public function setNew_date_of_birth($new_date_of_birth){
      if(is_string($new_date_of_birth)){
        $this->new_date_of_birth = filter($new_date_of_birth);
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

    public function setNew_address($new_address){
      if(is_string($new_address)){
        $this->new_address = filter($new_address);
        return true;
      }else{
        return false;
      }
    }

    public function setNew_city($new_city){
      if(is_string($new_city)){
        $this->new_city = filter($new_city);
        return true;
      }else{
        return false;
      }
    }

    public function setNew_state($new_state){
      if(is_string($new_state)){
        $this->new_state = filter($new_state);
        return true;
      }else{
        return false;
      }
    }

    public function setNew_zip_code($new_zip_code){
      if(is_string($new_zip_code)){
        $this->new_zip_code = filter($new_zip_code);
        return true;
      }else{
        return false;
      }
    }

    public function setNew_phone_number($new_phone_number){
      if(is_string($new_phone_number)){
        $this->new_phone_number = filter($new_phone_number);
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

    public function getNew_date_of_birth(){
      return $this->new_date_of_birth;
    }

    public function getNew_gender(){
      return $this->new_gender;
    }

    public function getNew_address(){
      return $this->new_address;
    }

    public function getNew_city(){
      return $this->new_city;
    }

    public function getNew_state(){
      return $this->new_state;
    }

    public function getNew_zip_code(){
      return $this->new_zip_code;
    }

    public function getNew_phone_number(){
      return $this->new_phone_number;
    }

    public function getNew_email(){
      return $this->new_email;
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