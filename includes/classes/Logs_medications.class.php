<?php
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/config.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/encrypt.inc.php';

  class Logs_medications extends Database {
    private $sqlCondition = 1;
    private $id;
    private $actionn;
    private $new_doctor_id;
    private $new_patient_id;
    private $new_medication_name;
    private $new_dosage;
    private $new_frequency;
    private $new_start_date;
    private $new_end_date;
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
        $sql = "SELECT * FROM `logs_medications` WHERE `id`=$this->id";
        $result = $this->db()->query($sql);
        if($result->rowCount() > 0){
          $row = $result->fetch();
          $this->id = $row['id'];
          $this->actionn = $row['actionn'];
          $this->new_doctor_id = $row['new_doctor_id'];
          $this->new_patient_id = $row['new_patient_id'];
          $this->new_medication_name = $row['new_medication_name'];
          $this->new_dosage = $row['new_dosage'];
          $this->new_frequency = $row['new_frequency'];
          $this->new_start_date = $row['new_start_date'];
          $this->new_end_date = $row['new_end_date'];
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
      $sql = "SELECT * FROM `logs_medications` WHERE $this->sqlCondition ORDER BY `id` LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function getAllReversed($limit = 1000000){
      if(!is_numeric($limit)){ return '[]'; }
      $sql = "SELECT * FROM `logs_medications` WHERE $this->sqlCondition ORDER BY `id` DESC LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function getNumberOfRows(){
      $sql = "SELECT COUNT(*) AS 'numberOfRows' FROM `logs_medications` WHERE $this->sqlCondition";
      $result = $this->db()->query($sql);
      $row = $result->fetch();
      return $row['numberOfRows'];
    }

    public function getById(){
      $sql = "SELECT * FROM `logs_medications` WHERE `id`='$this->id'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_doctor_id = $row['new_doctor_id'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_medication_name = $row['new_medication_name'];
        $this->new_dosage = $row['new_dosage'];
        $this->new_frequency = $row['new_frequency'];
        $this->new_start_date = $row['new_start_date'];
        $this->new_end_date = $row['new_end_date'];
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
      $sql = "SELECT * FROM `logs_medications` WHERE `actionn`='$this->actionn'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_doctor_id = $row['new_doctor_id'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_medication_name = $row['new_medication_name'];
        $this->new_dosage = $row['new_dosage'];
        $this->new_frequency = $row['new_frequency'];
        $this->new_start_date = $row['new_start_date'];
        $this->new_end_date = $row['new_end_date'];
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

    public function getByNew_doctor_id(){
      $sql = "SELECT * FROM `logs_medications` WHERE `new_doctor_id`='$this->new_doctor_id'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_doctor_id = $row['new_doctor_id'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_medication_name = $row['new_medication_name'];
        $this->new_dosage = $row['new_dosage'];
        $this->new_frequency = $row['new_frequency'];
        $this->new_start_date = $row['new_start_date'];
        $this->new_end_date = $row['new_end_date'];
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

    public function getByNew_patient_id(){
      $sql = "SELECT * FROM `logs_medications` WHERE `new_patient_id`='$this->new_patient_id'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_doctor_id = $row['new_doctor_id'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_medication_name = $row['new_medication_name'];
        $this->new_dosage = $row['new_dosage'];
        $this->new_frequency = $row['new_frequency'];
        $this->new_start_date = $row['new_start_date'];
        $this->new_end_date = $row['new_end_date'];
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

    public function getByNew_medication_name(){
      $sql = "SELECT * FROM `logs_medications` WHERE `new_medication_name`='$this->new_medication_name'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_doctor_id = $row['new_doctor_id'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_medication_name = $row['new_medication_name'];
        $this->new_dosage = $row['new_dosage'];
        $this->new_frequency = $row['new_frequency'];
        $this->new_start_date = $row['new_start_date'];
        $this->new_end_date = $row['new_end_date'];
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

    public function getByNew_dosage(){
      $sql = "SELECT * FROM `logs_medications` WHERE `new_dosage`='$this->new_dosage'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_doctor_id = $row['new_doctor_id'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_medication_name = $row['new_medication_name'];
        $this->new_dosage = $row['new_dosage'];
        $this->new_frequency = $row['new_frequency'];
        $this->new_start_date = $row['new_start_date'];
        $this->new_end_date = $row['new_end_date'];
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

    public function getByNew_frequency(){
      $sql = "SELECT * FROM `logs_medications` WHERE `new_frequency`='$this->new_frequency'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_doctor_id = $row['new_doctor_id'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_medication_name = $row['new_medication_name'];
        $this->new_dosage = $row['new_dosage'];
        $this->new_frequency = $row['new_frequency'];
        $this->new_start_date = $row['new_start_date'];
        $this->new_end_date = $row['new_end_date'];
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

    public function getByNew_start_date(){
      $sql = "SELECT * FROM `logs_medications` WHERE `new_start_date`='$this->new_start_date'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_doctor_id = $row['new_doctor_id'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_medication_name = $row['new_medication_name'];
        $this->new_dosage = $row['new_dosage'];
        $this->new_frequency = $row['new_frequency'];
        $this->new_start_date = $row['new_start_date'];
        $this->new_end_date = $row['new_end_date'];
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

    public function getByNew_end_date(){
      $sql = "SELECT * FROM `logs_medications` WHERE `new_end_date`='$this->new_end_date'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_doctor_id = $row['new_doctor_id'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_medication_name = $row['new_medication_name'];
        $this->new_dosage = $row['new_dosage'];
        $this->new_frequency = $row['new_frequency'];
        $this->new_start_date = $row['new_start_date'];
        $this->new_end_date = $row['new_end_date'];
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
      $sql = "SELECT * FROM `logs_medications` WHERE `logs_cdate`='$this->logs_cdate'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_doctor_id = $row['new_doctor_id'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_medication_name = $row['new_medication_name'];
        $this->new_dosage = $row['new_dosage'];
        $this->new_frequency = $row['new_frequency'];
        $this->new_start_date = $row['new_start_date'];
        $this->new_end_date = $row['new_end_date'];
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
      $sql = "SELECT * FROM `logs_medications` WHERE `logs_ctime`='$this->logs_ctime'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_doctor_id = $row['new_doctor_id'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_medication_name = $row['new_medication_name'];
        $this->new_dosage = $row['new_dosage'];
        $this->new_frequency = $row['new_frequency'];
        $this->new_start_date = $row['new_start_date'];
        $this->new_end_date = $row['new_end_date'];
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
      $sql = "SELECT * FROM `logs_medications` WHERE `log_ByUser`='$this->log_ByUser'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_doctor_id = $row['new_doctor_id'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_medication_name = $row['new_medication_name'];
        $this->new_dosage = $row['new_dosage'];
        $this->new_frequency = $row['new_frequency'];
        $this->new_start_date = $row['new_start_date'];
        $this->new_end_date = $row['new_end_date'];
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
      $sql = "SELECT * FROM `logs_medications` WHERE `timee`='$this->timee'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_doctor_id = $row['new_doctor_id'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_medication_name = $row['new_medication_name'];
        $this->new_dosage = $row['new_dosage'];
        $this->new_frequency = $row['new_frequency'];
        $this->new_start_date = $row['new_start_date'];
        $this->new_end_date = $row['new_end_date'];
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
      $sql = "SELECT * FROM `logs_medications` WHERE `time`='$this->time'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_doctor_id = $row['new_doctor_id'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_medication_name = $row['new_medication_name'];
        $this->new_dosage = $row['new_dosage'];
        $this->new_frequency = $row['new_frequency'];
        $this->new_start_date = $row['new_start_date'];
        $this->new_end_date = $row['new_end_date'];
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
      $sql = "SELECT * FROM `logs_medications` WHERE $this->sqlCondition ORDER BY `id` DESC";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_doctor_id = $row['new_doctor_id'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_medication_name = $row['new_medication_name'];
        $this->new_dosage = $row['new_dosage'];
        $this->new_frequency = $row['new_frequency'];
        $this->new_start_date = $row['new_start_date'];
        $this->new_end_date = $row['new_end_date'];
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
      $sql = "SELECT * FROM `logs_medications` WHERE $this->sqlCondition ORDER BY `id`";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_doctor_id = $row['new_doctor_id'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_medication_name = $row['new_medication_name'];
        $this->new_dosage = $row['new_dosage'];
        $this->new_frequency = $row['new_frequency'];
        $this->new_start_date = $row['new_start_date'];
        $this->new_end_date = $row['new_end_date'];
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
      $sql = "SELECT * FROM `logs_medications` WHERE `id` LIKE '%$this->id%' AND `actionn` LIKE '%$this->actionn%' AND `new_doctor_id` LIKE '%$this->new_doctor_id%' AND `new_patient_id` LIKE '%$this->new_patient_id%' AND `new_medication_name` LIKE '%$this->new_medication_name%' AND `new_dosage` LIKE '%$this->new_dosage%' AND `new_frequency` LIKE '%$this->new_frequency%' AND `new_start_date` LIKE '%$this->new_start_date%' AND `new_end_date` LIKE '%$this->new_end_date%' AND `logs_cdate` LIKE '%$this->logs_cdate%' AND `logs_ctime` LIKE '%$this->logs_ctime%' AND `log_ByUser` LIKE '%$this->log_ByUser%' AND `timee` LIKE '%$this->timee%' AND `time` LIKE '%$this->time%' LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function add(){
      $sql = "INSERT INTO `logs_medications` (`id`, `actionn`, `new_doctor_id`, `new_patient_id`, `new_medication_name`, `new_dosage`, `new_frequency`, `new_start_date`, `new_end_date`, `logs_cdate`, `logs_ctime`, `log_ByUser`, `timee`, `time`) VALUES 
      ('$this->id', '$this->actionn', '$this->new_doctor_id', '$this->new_patient_id', '$this->new_medication_name', '$this->new_dosage', '$this->new_frequency', '$this->new_start_date', '$this->new_end_date', '$this->logs_cdate', '$this->logs_ctime', '$this->log_ByUser', '$this->timee', '$this->time')";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function update(){
      $sql = "UPDATE `logs_medications` SET `id`='$this->id', `actionn`='$this->actionn', `new_doctor_id`='$this->new_doctor_id', `new_patient_id`='$this->new_patient_id', `new_medication_name`='$this->new_medication_name', `new_dosage`='$this->new_dosage', `new_frequency`='$this->new_frequency', `new_start_date`='$this->new_start_date', `new_end_date`='$this->new_end_date', `logs_cdate`='$this->logs_cdate', `logs_ctime`='$this->logs_ctime', `log_ByUser`='$this->log_ByUser', `timee`='$this->timee', `time`='$this->time' WHERE `id`='$this->id'";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function delete() {
      $sql = "DELETE FROM `logs_medications` WHERE `id`='$this->id'";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function giveIdentity($days){
      setcookie('logs_medications', encode("$this->id"), time() + (86400 * $days), "/");
    }

    public function getIdentity($days){
      if(isset($_COOKIE['logs_medications'])){
        decode($_COOKIE['logs_medications']);
      }else{return false;}
    }

    public function deleteIdentity($days){
      setcookie("logs_medications", '', time() - 3600);
    }

    public function giveAuthority(){
      $_SESSION['logs_medications'] = encrypt($this->id);
      $_SESSION['logs_medications_id'] = $this->id;
    }

    public function getAuthority(){
      if(isset($_SESSION['logs_medications']) && isset($_SESSION['logs_medications_id'])){
        $tmp_id = filter($_SESSION['logs_medications_id']);
        $sql = "SELECT * from `logs_medications` WHERE `id`='$tmp_id'";
        $result = $this->db()->query($sql);
        $row = $result->fetch();
        if(encrypt($row['id']) == $_SESSION['logs_medications']){
          return $_SESSION['logs_medications_id'];
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

    public function setNew_doctor_id($new_doctor_id){
      if(is_numeric($new_doctor_id)){
        $this->new_doctor_id = filter($new_doctor_id);
        return true;
      }else{
        return false;
      }
    }

    public function setNew_patient_id($new_patient_id){
      if(is_numeric($new_patient_id)){
        $this->new_patient_id = filter($new_patient_id);
        return true;
      }else{
        return false;
      }
    }

    public function setNew_medication_name($new_medication_name){
      if(is_string($new_medication_name)){
        $this->new_medication_name = filter($new_medication_name);
        return true;
      }else{
        return false;
      }
    }

    public function setNew_dosage($new_dosage){
      if(is_string($new_dosage)){
        $this->new_dosage = filter($new_dosage);
        return true;
      }else{
        return false;
      }
    }

    public function setNew_frequency($new_frequency){
      if(is_string($new_frequency)){
        $this->new_frequency = filter($new_frequency);
        return true;
      }else{
        return false;
      }
    }

    public function setNew_start_date($new_start_date){
      if(is_string($new_start_date)){
        $this->new_start_date = filter($new_start_date);
        return true;
      }else{
        return false;
      }
    }

    public function setNew_end_date($new_end_date){
      if(is_string($new_end_date)){
        $this->new_end_date = filter($new_end_date);
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

    public function getNew_doctor_id(){
      return $this->new_doctor_id;
    }

    public function getNew_patient_id(){
      return $this->new_patient_id;
    }

    public function getNew_medication_name(){
      return $this->new_medication_name;
    }

    public function getNew_dosage(){
      return $this->new_dosage;
    }

    public function getNew_frequency(){
      return $this->new_frequency;
    }

    public function getNew_start_date(){
      return $this->new_start_date;
    }

    public function getNew_end_date(){
      return $this->new_end_date;
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