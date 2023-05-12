<?php
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/config.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/encrypt.inc.php';

  class Logs_patient_files extends Database {
    private $sqlCondition = 1;
    private $id;
    private $actionn;
    private $new_patient_id;
    private $new_doctor_id;
    private $new_file_name;
    private $new_file_type;
    private $new_file_path;
    private $new_created_at;
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
        $sql = "SELECT * FROM `logs_patient_files` WHERE `id`=$this->id";
        $result = $this->db()->query($sql);
        if($result->rowCount() > 0){
          $row = $result->fetch();
          $this->id = $row['id'];
          $this->actionn = $row['actionn'];
          $this->new_patient_id = $row['new_patient_id'];
          $this->new_doctor_id = $row['new_doctor_id'];
          $this->new_file_name = $row['new_file_name'];
          $this->new_file_type = $row['new_file_type'];
          $this->new_file_path = $row['new_file_path'];
          $this->new_created_at = $row['new_created_at'];
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
      $sql = "SELECT * FROM `logs_patient_files` WHERE $this->sqlCondition ORDER BY `id` LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function getAllReversed($limit = 1000000){
      if(!is_numeric($limit)){ return '[]'; }
      $sql = "SELECT * FROM `logs_patient_files` WHERE $this->sqlCondition ORDER BY `id` DESC LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function getNumberOfRows(){
      $sql = "SELECT COUNT(*) AS 'numberOfRows' FROM `logs_patient_files` WHERE $this->sqlCondition";
      $result = $this->db()->query($sql);
      $row = $result->fetch();
      return $row['numberOfRows'];
    }

    public function getById(){
      $sql = "SELECT * FROM `logs_patient_files` WHERE `id`='$this->id'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_doctor_id = $row['new_doctor_id'];
        $this->new_file_name = $row['new_file_name'];
        $this->new_file_type = $row['new_file_type'];
        $this->new_file_path = $row['new_file_path'];
        $this->new_created_at = $row['new_created_at'];
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
      $sql = "SELECT * FROM `logs_patient_files` WHERE `actionn`='$this->actionn'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_doctor_id = $row['new_doctor_id'];
        $this->new_file_name = $row['new_file_name'];
        $this->new_file_type = $row['new_file_type'];
        $this->new_file_path = $row['new_file_path'];
        $this->new_created_at = $row['new_created_at'];
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
      $sql = "SELECT * FROM `logs_patient_files` WHERE `new_patient_id`='$this->new_patient_id'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_doctor_id = $row['new_doctor_id'];
        $this->new_file_name = $row['new_file_name'];
        $this->new_file_type = $row['new_file_type'];
        $this->new_file_path = $row['new_file_path'];
        $this->new_created_at = $row['new_created_at'];
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
      $sql = "SELECT * FROM `logs_patient_files` WHERE `new_doctor_id`='$this->new_doctor_id'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_doctor_id = $row['new_doctor_id'];
        $this->new_file_name = $row['new_file_name'];
        $this->new_file_type = $row['new_file_type'];
        $this->new_file_path = $row['new_file_path'];
        $this->new_created_at = $row['new_created_at'];
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

    public function getByNew_file_name(){
      $sql = "SELECT * FROM `logs_patient_files` WHERE `new_file_name`='$this->new_file_name'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_doctor_id = $row['new_doctor_id'];
        $this->new_file_name = $row['new_file_name'];
        $this->new_file_type = $row['new_file_type'];
        $this->new_file_path = $row['new_file_path'];
        $this->new_created_at = $row['new_created_at'];
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

    public function getByNew_file_type(){
      $sql = "SELECT * FROM `logs_patient_files` WHERE `new_file_type`='$this->new_file_type'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_doctor_id = $row['new_doctor_id'];
        $this->new_file_name = $row['new_file_name'];
        $this->new_file_type = $row['new_file_type'];
        $this->new_file_path = $row['new_file_path'];
        $this->new_created_at = $row['new_created_at'];
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

    public function getByNew_file_path(){
      $sql = "SELECT * FROM `logs_patient_files` WHERE `new_file_path`='$this->new_file_path'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_doctor_id = $row['new_doctor_id'];
        $this->new_file_name = $row['new_file_name'];
        $this->new_file_type = $row['new_file_type'];
        $this->new_file_path = $row['new_file_path'];
        $this->new_created_at = $row['new_created_at'];
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

    public function getByNew_created_at(){
      $sql = "SELECT * FROM `logs_patient_files` WHERE `new_created_at`='$this->new_created_at'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_doctor_id = $row['new_doctor_id'];
        $this->new_file_name = $row['new_file_name'];
        $this->new_file_type = $row['new_file_type'];
        $this->new_file_path = $row['new_file_path'];
        $this->new_created_at = $row['new_created_at'];
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
      $sql = "SELECT * FROM `logs_patient_files` WHERE `logs_cdate`='$this->logs_cdate'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_doctor_id = $row['new_doctor_id'];
        $this->new_file_name = $row['new_file_name'];
        $this->new_file_type = $row['new_file_type'];
        $this->new_file_path = $row['new_file_path'];
        $this->new_created_at = $row['new_created_at'];
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
      $sql = "SELECT * FROM `logs_patient_files` WHERE `logs_ctime`='$this->logs_ctime'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_doctor_id = $row['new_doctor_id'];
        $this->new_file_name = $row['new_file_name'];
        $this->new_file_type = $row['new_file_type'];
        $this->new_file_path = $row['new_file_path'];
        $this->new_created_at = $row['new_created_at'];
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
      $sql = "SELECT * FROM `logs_patient_files` WHERE `log_ByUser`='$this->log_ByUser'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_doctor_id = $row['new_doctor_id'];
        $this->new_file_name = $row['new_file_name'];
        $this->new_file_type = $row['new_file_type'];
        $this->new_file_path = $row['new_file_path'];
        $this->new_created_at = $row['new_created_at'];
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
      $sql = "SELECT * FROM `logs_patient_files` WHERE `timee`='$this->timee'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_doctor_id = $row['new_doctor_id'];
        $this->new_file_name = $row['new_file_name'];
        $this->new_file_type = $row['new_file_type'];
        $this->new_file_path = $row['new_file_path'];
        $this->new_created_at = $row['new_created_at'];
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
      $sql = "SELECT * FROM `logs_patient_files` WHERE `time`='$this->time'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_doctor_id = $row['new_doctor_id'];
        $this->new_file_name = $row['new_file_name'];
        $this->new_file_type = $row['new_file_type'];
        $this->new_file_path = $row['new_file_path'];
        $this->new_created_at = $row['new_created_at'];
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
      $sql = "SELECT * FROM `logs_patient_files` WHERE $this->sqlCondition ORDER BY `id` DESC";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_doctor_id = $row['new_doctor_id'];
        $this->new_file_name = $row['new_file_name'];
        $this->new_file_type = $row['new_file_type'];
        $this->new_file_path = $row['new_file_path'];
        $this->new_created_at = $row['new_created_at'];
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
      $sql = "SELECT * FROM `logs_patient_files` WHERE $this->sqlCondition ORDER BY `id`";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_doctor_id = $row['new_doctor_id'];
        $this->new_file_name = $row['new_file_name'];
        $this->new_file_type = $row['new_file_type'];
        $this->new_file_path = $row['new_file_path'];
        $this->new_created_at = $row['new_created_at'];
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
      $sql = "SELECT * FROM `logs_patient_files` WHERE `id` LIKE '%$this->id%' AND `actionn` LIKE '%$this->actionn%' AND `new_patient_id` LIKE '%$this->new_patient_id%' AND `new_doctor_id` LIKE '%$this->new_doctor_id%' AND `new_file_name` LIKE '%$this->new_file_name%' AND `new_file_type` LIKE '%$this->new_file_type%' AND `new_file_path` LIKE '%$this->new_file_path%' AND `new_created_at` LIKE '%$this->new_created_at%' AND `logs_cdate` LIKE '%$this->logs_cdate%' AND `logs_ctime` LIKE '%$this->logs_ctime%' AND `log_ByUser` LIKE '%$this->log_ByUser%' AND `timee` LIKE '%$this->timee%' AND `time` LIKE '%$this->time%' LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function add(){
      $sql = "INSERT INTO `logs_patient_files` (`id`, `actionn`, `new_patient_id`, `new_doctor_id`, `new_file_name`, `new_file_type`, `new_file_path`, `new_created_at`, `logs_cdate`, `logs_ctime`, `log_ByUser`, `timee`, `time`) VALUES 
      ('$this->id', '$this->actionn', '$this->new_patient_id', '$this->new_doctor_id', '$this->new_file_name', '$this->new_file_type', '$this->new_file_path', '$this->new_created_at', '$this->logs_cdate', '$this->logs_ctime', '$this->log_ByUser', '$this->timee', '$this->time')";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function update(){
      $sql = "UPDATE `logs_patient_files` SET `id`='$this->id', `actionn`='$this->actionn', `new_patient_id`='$this->new_patient_id', `new_doctor_id`='$this->new_doctor_id', `new_file_name`='$this->new_file_name', `new_file_type`='$this->new_file_type', `new_file_path`='$this->new_file_path', `new_created_at`='$this->new_created_at', `logs_cdate`='$this->logs_cdate', `logs_ctime`='$this->logs_ctime', `log_ByUser`='$this->log_ByUser', `timee`='$this->timee', `time`='$this->time' WHERE `id`='$this->id'";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function delete() {
      $sql = "DELETE FROM `logs_patient_files` WHERE `id`='$this->id'";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function giveIdentity($days){
      setcookie('logs_patient_files', encode("$this->id"), time() + (86400 * $days), "/");
    }

    public function getIdentity($days){
      if(isset($_COOKIE['logs_patient_files'])){
        decode($_COOKIE['logs_patient_files']);
      }else{return false;}
    }

    public function deleteIdentity($days){
      setcookie("logs_patient_files", '', time() - 3600);
    }

    public function giveAuthority(){
      $_SESSION['logs_patient_files'] = encrypt($this->id);
      $_SESSION['logs_patient_files_id'] = $this->id;
    }

    public function getAuthority(){
      if(isset($_SESSION['logs_patient_files']) && isset($_SESSION['logs_patient_files_id'])){
        $tmp_id = filter($_SESSION['logs_patient_files_id']);
        $sql = "SELECT * from `logs_patient_files` WHERE `id`='$tmp_id'";
        $result = $this->db()->query($sql);
        $row = $result->fetch();
        if(encrypt($row['id']) == $_SESSION['logs_patient_files']){
          return $_SESSION['logs_patient_files_id'];
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

    public function setNew_patient_id($new_patient_id){
      if(is_numeric($new_patient_id)){
        $this->new_patient_id = filter($new_patient_id);
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

    public function setNew_file_name($new_file_name){
      if(is_string($new_file_name)){
        $this->new_file_name = filter($new_file_name);
        return true;
      }else{
        return false;
      }
    }

    public function setNew_file_type($new_file_type){
      if(is_string($new_file_type)){
        $this->new_file_type = filter($new_file_type);
        return true;
      }else{
        return false;
      }
    }

    public function setNew_file_path($new_file_path){
      if(is_string($new_file_path)){
        $this->new_file_path = filter($new_file_path);
        return true;
      }else{
        return false;
      }
    }

    public function setNew_created_at($new_created_at){
      if(is_string($new_created_at)){
        $this->new_created_at = filter($new_created_at);
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

    public function getNew_patient_id(){
      return $this->new_patient_id;
    }

    public function getNew_doctor_id(){
      return $this->new_doctor_id;
    }

    public function getNew_file_name(){
      return $this->new_file_name;
    }

    public function getNew_file_type(){
      return $this->new_file_type;
    }

    public function getNew_file_path(){
      return $this->new_file_path;
    }

    public function getNew_created_at(){
      return $this->new_created_at;
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