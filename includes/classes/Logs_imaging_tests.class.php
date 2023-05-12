<?php
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/config.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/encrypt.inc.php';

  class Logs_imaging_tests extends Database {
    private $sqlCondition = 1;
    private $id;
    private $actionn;
    private $new_patient_id;
    private $new_doctor_id;
    private $new_test_name;
    private $new_test_date;
    private $new_test_results;
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
        $sql = "SELECT * FROM `logs_imaging_tests` WHERE `id`=$this->id";
        $result = $this->db()->query($sql);
        if($result->rowCount() > 0){
          $row = $result->fetch();
          $this->id = $row['id'];
          $this->actionn = $row['actionn'];
          $this->new_patient_id = $row['new_patient_id'];
          $this->new_doctor_id = $row['new_doctor_id'];
          $this->new_test_name = $row['new_test_name'];
          $this->new_test_date = $row['new_test_date'];
          $this->new_test_results = $row['new_test_results'];
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
      $sql = "SELECT * FROM `logs_imaging_tests` WHERE $this->sqlCondition ORDER BY `id` LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function getAllReversed($limit = 1000000){
      if(!is_numeric($limit)){ return '[]'; }
      $sql = "SELECT * FROM `logs_imaging_tests` WHERE $this->sqlCondition ORDER BY `id` DESC LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function getNumberOfRows(){
      $sql = "SELECT COUNT(*) AS 'numberOfRows' FROM `logs_imaging_tests` WHERE $this->sqlCondition";
      $result = $this->db()->query($sql);
      $row = $result->fetch();
      return $row['numberOfRows'];
    }

    public function getById(){
      $sql = "SELECT * FROM `logs_imaging_tests` WHERE `id`='$this->id'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_doctor_id = $row['new_doctor_id'];
        $this->new_test_name = $row['new_test_name'];
        $this->new_test_date = $row['new_test_date'];
        $this->new_test_results = $row['new_test_results'];
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
      $sql = "SELECT * FROM `logs_imaging_tests` WHERE `actionn`='$this->actionn'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_doctor_id = $row['new_doctor_id'];
        $this->new_test_name = $row['new_test_name'];
        $this->new_test_date = $row['new_test_date'];
        $this->new_test_results = $row['new_test_results'];
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
      $sql = "SELECT * FROM `logs_imaging_tests` WHERE `new_patient_id`='$this->new_patient_id'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_doctor_id = $row['new_doctor_id'];
        $this->new_test_name = $row['new_test_name'];
        $this->new_test_date = $row['new_test_date'];
        $this->new_test_results = $row['new_test_results'];
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
      $sql = "SELECT * FROM `logs_imaging_tests` WHERE `new_doctor_id`='$this->new_doctor_id'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_doctor_id = $row['new_doctor_id'];
        $this->new_test_name = $row['new_test_name'];
        $this->new_test_date = $row['new_test_date'];
        $this->new_test_results = $row['new_test_results'];
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

    public function getByNew_test_name(){
      $sql = "SELECT * FROM `logs_imaging_tests` WHERE `new_test_name`='$this->new_test_name'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_doctor_id = $row['new_doctor_id'];
        $this->new_test_name = $row['new_test_name'];
        $this->new_test_date = $row['new_test_date'];
        $this->new_test_results = $row['new_test_results'];
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

    public function getByNew_test_date(){
      $sql = "SELECT * FROM `logs_imaging_tests` WHERE `new_test_date`='$this->new_test_date'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_doctor_id = $row['new_doctor_id'];
        $this->new_test_name = $row['new_test_name'];
        $this->new_test_date = $row['new_test_date'];
        $this->new_test_results = $row['new_test_results'];
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

    public function getByNew_test_results(){
      $sql = "SELECT * FROM `logs_imaging_tests` WHERE `new_test_results`='$this->new_test_results'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_doctor_id = $row['new_doctor_id'];
        $this->new_test_name = $row['new_test_name'];
        $this->new_test_date = $row['new_test_date'];
        $this->new_test_results = $row['new_test_results'];
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
      $sql = "SELECT * FROM `logs_imaging_tests` WHERE `logs_cdate`='$this->logs_cdate'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_doctor_id = $row['new_doctor_id'];
        $this->new_test_name = $row['new_test_name'];
        $this->new_test_date = $row['new_test_date'];
        $this->new_test_results = $row['new_test_results'];
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
      $sql = "SELECT * FROM `logs_imaging_tests` WHERE `logs_ctime`='$this->logs_ctime'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_doctor_id = $row['new_doctor_id'];
        $this->new_test_name = $row['new_test_name'];
        $this->new_test_date = $row['new_test_date'];
        $this->new_test_results = $row['new_test_results'];
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
      $sql = "SELECT * FROM `logs_imaging_tests` WHERE `log_ByUser`='$this->log_ByUser'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_doctor_id = $row['new_doctor_id'];
        $this->new_test_name = $row['new_test_name'];
        $this->new_test_date = $row['new_test_date'];
        $this->new_test_results = $row['new_test_results'];
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
      $sql = "SELECT * FROM `logs_imaging_tests` WHERE `timee`='$this->timee'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_doctor_id = $row['new_doctor_id'];
        $this->new_test_name = $row['new_test_name'];
        $this->new_test_date = $row['new_test_date'];
        $this->new_test_results = $row['new_test_results'];
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
      $sql = "SELECT * FROM `logs_imaging_tests` WHERE `time`='$this->time'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_doctor_id = $row['new_doctor_id'];
        $this->new_test_name = $row['new_test_name'];
        $this->new_test_date = $row['new_test_date'];
        $this->new_test_results = $row['new_test_results'];
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
      $sql = "SELECT * FROM `logs_imaging_tests` WHERE $this->sqlCondition ORDER BY `id` DESC";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_doctor_id = $row['new_doctor_id'];
        $this->new_test_name = $row['new_test_name'];
        $this->new_test_date = $row['new_test_date'];
        $this->new_test_results = $row['new_test_results'];
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
      $sql = "SELECT * FROM `logs_imaging_tests` WHERE $this->sqlCondition ORDER BY `id`";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_doctor_id = $row['new_doctor_id'];
        $this->new_test_name = $row['new_test_name'];
        $this->new_test_date = $row['new_test_date'];
        $this->new_test_results = $row['new_test_results'];
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
      $sql = "SELECT * FROM `logs_imaging_tests` WHERE `id` LIKE '%$this->id%' AND `actionn` LIKE '%$this->actionn%' AND `new_patient_id` LIKE '%$this->new_patient_id%' AND `new_doctor_id` LIKE '%$this->new_doctor_id%' AND `new_test_name` LIKE '%$this->new_test_name%' AND `new_test_date` LIKE '%$this->new_test_date%' AND `new_test_results` LIKE '%$this->new_test_results%' AND `logs_cdate` LIKE '%$this->logs_cdate%' AND `logs_ctime` LIKE '%$this->logs_ctime%' AND `log_ByUser` LIKE '%$this->log_ByUser%' AND `timee` LIKE '%$this->timee%' AND `time` LIKE '%$this->time%' LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function add(){
      $sql = "INSERT INTO `logs_imaging_tests` (`id`, `actionn`, `new_patient_id`, `new_doctor_id`, `new_test_name`, `new_test_date`, `new_test_results`, `logs_cdate`, `logs_ctime`, `log_ByUser`, `timee`, `time`) VALUES 
      ('$this->id', '$this->actionn', '$this->new_patient_id', '$this->new_doctor_id', '$this->new_test_name', '$this->new_test_date', '$this->new_test_results', '$this->logs_cdate', '$this->logs_ctime', '$this->log_ByUser', '$this->timee', '$this->time')";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function update(){
      $sql = "UPDATE `logs_imaging_tests` SET `id`='$this->id', `actionn`='$this->actionn', `new_patient_id`='$this->new_patient_id', `new_doctor_id`='$this->new_doctor_id', `new_test_name`='$this->new_test_name', `new_test_date`='$this->new_test_date', `new_test_results`='$this->new_test_results', `logs_cdate`='$this->logs_cdate', `logs_ctime`='$this->logs_ctime', `log_ByUser`='$this->log_ByUser', `timee`='$this->timee', `time`='$this->time' WHERE `id`='$this->id'";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function delete() {
      $sql = "DELETE FROM `logs_imaging_tests` WHERE `id`='$this->id'";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function giveIdentity($days){
      setcookie('logs_imaging_tests', encode("$this->id"), time() + (86400 * $days), "/");
    }

    public function getIdentity($days){
      if(isset($_COOKIE['logs_imaging_tests'])){
        decode($_COOKIE['logs_imaging_tests']);
      }else{return false;}
    }

    public function deleteIdentity($days){
      setcookie("logs_imaging_tests", '', time() - 3600);
    }

    public function giveAuthority(){
      $_SESSION['logs_imaging_tests'] = encrypt($this->id);
      $_SESSION['logs_imaging_tests_id'] = $this->id;
    }

    public function getAuthority(){
      if(isset($_SESSION['logs_imaging_tests']) && isset($_SESSION['logs_imaging_tests_id'])){
        $tmp_id = filter($_SESSION['logs_imaging_tests_id']);
        $sql = "SELECT * from `logs_imaging_tests` WHERE `id`='$tmp_id'";
        $result = $this->db()->query($sql);
        $row = $result->fetch();
        if(encrypt($row['id']) == $_SESSION['logs_imaging_tests']){
          return $_SESSION['logs_imaging_tests_id'];
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

    public function setNew_test_name($new_test_name){
      if(is_string($new_test_name)){
        $this->new_test_name = filter($new_test_name);
        return true;
      }else{
        return false;
      }
    }

    public function setNew_test_date($new_test_date){
      if(is_string($new_test_date)){
        $this->new_test_date = filter($new_test_date);
        return true;
      }else{
        return false;
      }
    }

    public function setNew_test_results($new_test_results){
      if(is_string($new_test_results)){
        $this->new_test_results = filter($new_test_results);
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

    public function getNew_test_name(){
      return $this->new_test_name;
    }

    public function getNew_test_date(){
      return $this->new_test_date;
    }

    public function getNew_test_results(){
      return $this->new_test_results;
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