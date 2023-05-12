<?php
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/config.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/encrypt.inc.php';

  class Logs_vitals extends Database {
    private $sqlCondition = 1;
    private $id;
    private $actionn;
    private $new_patient_id;
    private $new_date_time;
    private $new_temperature;
    private $new_blood_pressure;
    private $new_heart_rate;
    private $new_respiratory_rate;
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
        $sql = "SELECT * FROM `logs_vitals` WHERE `id`=$this->id";
        $result = $this->db()->query($sql);
        if($result->rowCount() > 0){
          $row = $result->fetch();
          $this->id = $row['id'];
          $this->actionn = $row['actionn'];
          $this->new_patient_id = $row['new_patient_id'];
          $this->new_date_time = $row['new_date_time'];
          $this->new_temperature = $row['new_temperature'];
          $this->new_blood_pressure = $row['new_blood_pressure'];
          $this->new_heart_rate = $row['new_heart_rate'];
          $this->new_respiratory_rate = $row['new_respiratory_rate'];
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
      $sql = "SELECT * FROM `logs_vitals` WHERE $this->sqlCondition ORDER BY `id` LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function getAllReversed($limit = 1000000){
      if(!is_numeric($limit)){ return '[]'; }
      $sql = "SELECT * FROM `logs_vitals` WHERE $this->sqlCondition ORDER BY `id` DESC LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function getNumberOfRows(){
      $sql = "SELECT COUNT(*) AS 'numberOfRows' FROM `logs_vitals` WHERE $this->sqlCondition";
      $result = $this->db()->query($sql);
      $row = $result->fetch();
      return $row['numberOfRows'];
    }

    public function getById(){
      $sql = "SELECT * FROM `logs_vitals` WHERE `id`='$this->id'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_date_time = $row['new_date_time'];
        $this->new_temperature = $row['new_temperature'];
        $this->new_blood_pressure = $row['new_blood_pressure'];
        $this->new_heart_rate = $row['new_heart_rate'];
        $this->new_respiratory_rate = $row['new_respiratory_rate'];
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
      $sql = "SELECT * FROM `logs_vitals` WHERE `actionn`='$this->actionn'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_date_time = $row['new_date_time'];
        $this->new_temperature = $row['new_temperature'];
        $this->new_blood_pressure = $row['new_blood_pressure'];
        $this->new_heart_rate = $row['new_heart_rate'];
        $this->new_respiratory_rate = $row['new_respiratory_rate'];
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
      $sql = "SELECT * FROM `logs_vitals` WHERE `new_patient_id`='$this->new_patient_id'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_date_time = $row['new_date_time'];
        $this->new_temperature = $row['new_temperature'];
        $this->new_blood_pressure = $row['new_blood_pressure'];
        $this->new_heart_rate = $row['new_heart_rate'];
        $this->new_respiratory_rate = $row['new_respiratory_rate'];
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

    public function getByNew_date_time(){
      $sql = "SELECT * FROM `logs_vitals` WHERE `new_date_time`='$this->new_date_time'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_date_time = $row['new_date_time'];
        $this->new_temperature = $row['new_temperature'];
        $this->new_blood_pressure = $row['new_blood_pressure'];
        $this->new_heart_rate = $row['new_heart_rate'];
        $this->new_respiratory_rate = $row['new_respiratory_rate'];
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

    public function getByNew_temperature(){
      $sql = "SELECT * FROM `logs_vitals` WHERE `new_temperature`='$this->new_temperature'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_date_time = $row['new_date_time'];
        $this->new_temperature = $row['new_temperature'];
        $this->new_blood_pressure = $row['new_blood_pressure'];
        $this->new_heart_rate = $row['new_heart_rate'];
        $this->new_respiratory_rate = $row['new_respiratory_rate'];
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

    public function getByNew_blood_pressure(){
      $sql = "SELECT * FROM `logs_vitals` WHERE `new_blood_pressure`='$this->new_blood_pressure'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_date_time = $row['new_date_time'];
        $this->new_temperature = $row['new_temperature'];
        $this->new_blood_pressure = $row['new_blood_pressure'];
        $this->new_heart_rate = $row['new_heart_rate'];
        $this->new_respiratory_rate = $row['new_respiratory_rate'];
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

    public function getByNew_heart_rate(){
      $sql = "SELECT * FROM `logs_vitals` WHERE `new_heart_rate`='$this->new_heart_rate'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_date_time = $row['new_date_time'];
        $this->new_temperature = $row['new_temperature'];
        $this->new_blood_pressure = $row['new_blood_pressure'];
        $this->new_heart_rate = $row['new_heart_rate'];
        $this->new_respiratory_rate = $row['new_respiratory_rate'];
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

    public function getByNew_respiratory_rate(){
      $sql = "SELECT * FROM `logs_vitals` WHERE `new_respiratory_rate`='$this->new_respiratory_rate'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_date_time = $row['new_date_time'];
        $this->new_temperature = $row['new_temperature'];
        $this->new_blood_pressure = $row['new_blood_pressure'];
        $this->new_heart_rate = $row['new_heart_rate'];
        $this->new_respiratory_rate = $row['new_respiratory_rate'];
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
      $sql = "SELECT * FROM `logs_vitals` WHERE `logs_cdate`='$this->logs_cdate'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_date_time = $row['new_date_time'];
        $this->new_temperature = $row['new_temperature'];
        $this->new_blood_pressure = $row['new_blood_pressure'];
        $this->new_heart_rate = $row['new_heart_rate'];
        $this->new_respiratory_rate = $row['new_respiratory_rate'];
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
      $sql = "SELECT * FROM `logs_vitals` WHERE `logs_ctime`='$this->logs_ctime'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_date_time = $row['new_date_time'];
        $this->new_temperature = $row['new_temperature'];
        $this->new_blood_pressure = $row['new_blood_pressure'];
        $this->new_heart_rate = $row['new_heart_rate'];
        $this->new_respiratory_rate = $row['new_respiratory_rate'];
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
      $sql = "SELECT * FROM `logs_vitals` WHERE `log_ByUser`='$this->log_ByUser'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_date_time = $row['new_date_time'];
        $this->new_temperature = $row['new_temperature'];
        $this->new_blood_pressure = $row['new_blood_pressure'];
        $this->new_heart_rate = $row['new_heart_rate'];
        $this->new_respiratory_rate = $row['new_respiratory_rate'];
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
      $sql = "SELECT * FROM `logs_vitals` WHERE `timee`='$this->timee'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_date_time = $row['new_date_time'];
        $this->new_temperature = $row['new_temperature'];
        $this->new_blood_pressure = $row['new_blood_pressure'];
        $this->new_heart_rate = $row['new_heart_rate'];
        $this->new_respiratory_rate = $row['new_respiratory_rate'];
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
      $sql = "SELECT * FROM `logs_vitals` WHERE `time`='$this->time'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_date_time = $row['new_date_time'];
        $this->new_temperature = $row['new_temperature'];
        $this->new_blood_pressure = $row['new_blood_pressure'];
        $this->new_heart_rate = $row['new_heart_rate'];
        $this->new_respiratory_rate = $row['new_respiratory_rate'];
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
      $sql = "SELECT * FROM `logs_vitals` WHERE $this->sqlCondition ORDER BY `id` DESC";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_date_time = $row['new_date_time'];
        $this->new_temperature = $row['new_temperature'];
        $this->new_blood_pressure = $row['new_blood_pressure'];
        $this->new_heart_rate = $row['new_heart_rate'];
        $this->new_respiratory_rate = $row['new_respiratory_rate'];
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
      $sql = "SELECT * FROM `logs_vitals` WHERE $this->sqlCondition ORDER BY `id`";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_date_time = $row['new_date_time'];
        $this->new_temperature = $row['new_temperature'];
        $this->new_blood_pressure = $row['new_blood_pressure'];
        $this->new_heart_rate = $row['new_heart_rate'];
        $this->new_respiratory_rate = $row['new_respiratory_rate'];
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
      $sql = "SELECT * FROM `logs_vitals` WHERE `id` LIKE '%$this->id%' AND `actionn` LIKE '%$this->actionn%' AND `new_patient_id` LIKE '%$this->new_patient_id%' AND `new_date_time` LIKE '%$this->new_date_time%' AND `new_temperature` LIKE '%$this->new_temperature%' AND `new_blood_pressure` LIKE '%$this->new_blood_pressure%' AND `new_heart_rate` LIKE '%$this->new_heart_rate%' AND `new_respiratory_rate` LIKE '%$this->new_respiratory_rate%' AND `logs_cdate` LIKE '%$this->logs_cdate%' AND `logs_ctime` LIKE '%$this->logs_ctime%' AND `log_ByUser` LIKE '%$this->log_ByUser%' AND `timee` LIKE '%$this->timee%' AND `time` LIKE '%$this->time%' LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function add(){
      $sql = "INSERT INTO `logs_vitals` (`id`, `actionn`, `new_patient_id`, `new_date_time`, `new_temperature`, `new_blood_pressure`, `new_heart_rate`, `new_respiratory_rate`, `logs_cdate`, `logs_ctime`, `log_ByUser`, `timee`, `time`) VALUES 
      ('$this->id', '$this->actionn', '$this->new_patient_id', '$this->new_date_time', '$this->new_temperature', '$this->new_blood_pressure', '$this->new_heart_rate', '$this->new_respiratory_rate', '$this->logs_cdate', '$this->logs_ctime', '$this->log_ByUser', '$this->timee', '$this->time')";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function update(){
      $sql = "UPDATE `logs_vitals` SET `id`='$this->id', `actionn`='$this->actionn', `new_patient_id`='$this->new_patient_id', `new_date_time`='$this->new_date_time', `new_temperature`='$this->new_temperature', `new_blood_pressure`='$this->new_blood_pressure', `new_heart_rate`='$this->new_heart_rate', `new_respiratory_rate`='$this->new_respiratory_rate', `logs_cdate`='$this->logs_cdate', `logs_ctime`='$this->logs_ctime', `log_ByUser`='$this->log_ByUser', `timee`='$this->timee', `time`='$this->time' WHERE `id`='$this->id'";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function delete() {
      $sql = "DELETE FROM `logs_vitals` WHERE `id`='$this->id'";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function giveIdentity($days){
      setcookie('logs_vitals', encode("$this->id"), time() + (86400 * $days), "/");
    }

    public function getIdentity($days){
      if(isset($_COOKIE['logs_vitals'])){
        decode($_COOKIE['logs_vitals']);
      }else{return false;}
    }

    public function deleteIdentity($days){
      setcookie("logs_vitals", '', time() - 3600);
    }

    public function giveAuthority(){
      $_SESSION['logs_vitals'] = encrypt($this->id);
      $_SESSION['logs_vitals_id'] = $this->id;
    }

    public function getAuthority(){
      if(isset($_SESSION['logs_vitals']) && isset($_SESSION['logs_vitals_id'])){
        $tmp_id = filter($_SESSION['logs_vitals_id']);
        $sql = "SELECT * from `logs_vitals` WHERE `id`='$tmp_id'";
        $result = $this->db()->query($sql);
        $row = $result->fetch();
        if(encrypt($row['id']) == $_SESSION['logs_vitals']){
          return $_SESSION['logs_vitals_id'];
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

    public function setNew_date_time($new_date_time){
      if(is_string($new_date_time)){
        $this->new_date_time = filter($new_date_time);
        return true;
      }else{
        return false;
      }
    }

    public function setNew_temperature($new_temperature){
      if(is_string($new_temperature)){
        $this->new_temperature = filter($new_temperature);
        return true;
      }else{
        return false;
      }
    }

    public function setNew_blood_pressure($new_blood_pressure){
      if(is_string($new_blood_pressure)){
        $this->new_blood_pressure = filter($new_blood_pressure);
        return true;
      }else{
        return false;
      }
    }

    public function setNew_heart_rate($new_heart_rate){
      if(is_numeric($new_heart_rate)){
        $this->new_heart_rate = filter($new_heart_rate);
        return true;
      }else{
        return false;
      }
    }

    public function setNew_respiratory_rate($new_respiratory_rate){
      if(is_numeric($new_respiratory_rate)){
        $this->new_respiratory_rate = filter($new_respiratory_rate);
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

    public function getNew_date_time(){
      return $this->new_date_time;
    }

    public function getNew_temperature(){
      return $this->new_temperature;
    }

    public function getNew_blood_pressure(){
      return $this->new_blood_pressure;
    }

    public function getNew_heart_rate(){
      return $this->new_heart_rate;
    }

    public function getNew_respiratory_rate(){
      return $this->new_respiratory_rate;
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