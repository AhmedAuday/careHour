<?php
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/config.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/encrypt.inc.php';

  class Logs_symptoms extends Database {
    private $sqlCondition = 1;
    private $id;
    private $actionn;
    private $new_patient_id;
    private $new_symptom_name;
    private $new_start_date;
    private $new_end_date;
    private $new_notes;
    private $logs_cdate;
    private $logs_ctime;
    private $log_ByUser;
    private $new_timee;
    private $time;

    public function __construct($id = null){
      $this->time = time();
      if($id != null){
        $this->setId($id);
        if($id != $this->id){
          exit('');
        }
        $sql = "SELECT * FROM `logs_symptoms` WHERE `id`=$this->id";
        $result = $this->db()->query($sql);
        if($result->rowCount() > 0){
          $row = $result->fetch();
          $this->id = $row['id'];
          $this->actionn = $row['actionn'];
          $this->new_patient_id = $row['new_patient_id'];
          $this->new_symptom_name = $row['new_symptom_name'];
          $this->new_start_date = $row['new_start_date'];
          $this->new_end_date = $row['new_end_date'];
          $this->new_notes = $row['new_notes'];
          $this->logs_cdate = $row['logs_cdate'];
          $this->logs_ctime = $row['logs_ctime'];
          $this->log_ByUser = $row['log_ByUser'];
          $this->new_timee = $row['new_timee'];
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
      $sql = "SELECT * FROM `logs_symptoms` WHERE $this->sqlCondition ORDER BY `id` LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function getAllReversed($limit = 1000000){
      if(!is_numeric($limit)){ return '[]'; }
      $sql = "SELECT * FROM `logs_symptoms` WHERE $this->sqlCondition ORDER BY `id` DESC LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function getNumberOfRows(){
      $sql = "SELECT COUNT(*) AS 'numberOfRows' FROM `logs_symptoms` WHERE $this->sqlCondition";
      $result = $this->db()->query($sql);
      $row = $result->fetch();
      return $row['numberOfRows'];
    }

    public function getById(){
      $sql = "SELECT * FROM `logs_symptoms` WHERE `id`='$this->id'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_symptom_name = $row['new_symptom_name'];
        $this->new_start_date = $row['new_start_date'];
        $this->new_end_date = $row['new_end_date'];
        $this->new_notes = $row['new_notes'];
        $this->logs_cdate = $row['logs_cdate'];
        $this->logs_ctime = $row['logs_ctime'];
        $this->log_ByUser = $row['log_ByUser'];
        $this->new_timee = $row['new_timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByActionn(){
      $sql = "SELECT * FROM `logs_symptoms` WHERE `actionn`='$this->actionn'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_symptom_name = $row['new_symptom_name'];
        $this->new_start_date = $row['new_start_date'];
        $this->new_end_date = $row['new_end_date'];
        $this->new_notes = $row['new_notes'];
        $this->logs_cdate = $row['logs_cdate'];
        $this->logs_ctime = $row['logs_ctime'];
        $this->log_ByUser = $row['log_ByUser'];
        $this->new_timee = $row['new_timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByNew_patient_id(){
      $sql = "SELECT * FROM `logs_symptoms` WHERE `new_patient_id`='$this->new_patient_id'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_symptom_name = $row['new_symptom_name'];
        $this->new_start_date = $row['new_start_date'];
        $this->new_end_date = $row['new_end_date'];
        $this->new_notes = $row['new_notes'];
        $this->logs_cdate = $row['logs_cdate'];
        $this->logs_ctime = $row['logs_ctime'];
        $this->log_ByUser = $row['log_ByUser'];
        $this->new_timee = $row['new_timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByNew_symptom_name(){
      $sql = "SELECT * FROM `logs_symptoms` WHERE `new_symptom_name`='$this->new_symptom_name'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_symptom_name = $row['new_symptom_name'];
        $this->new_start_date = $row['new_start_date'];
        $this->new_end_date = $row['new_end_date'];
        $this->new_notes = $row['new_notes'];
        $this->logs_cdate = $row['logs_cdate'];
        $this->logs_ctime = $row['logs_ctime'];
        $this->log_ByUser = $row['log_ByUser'];
        $this->new_timee = $row['new_timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByNew_start_date(){
      $sql = "SELECT * FROM `logs_symptoms` WHERE `new_start_date`='$this->new_start_date'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_symptom_name = $row['new_symptom_name'];
        $this->new_start_date = $row['new_start_date'];
        $this->new_end_date = $row['new_end_date'];
        $this->new_notes = $row['new_notes'];
        $this->logs_cdate = $row['logs_cdate'];
        $this->logs_ctime = $row['logs_ctime'];
        $this->log_ByUser = $row['log_ByUser'];
        $this->new_timee = $row['new_timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByNew_end_date(){
      $sql = "SELECT * FROM `logs_symptoms` WHERE `new_end_date`='$this->new_end_date'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_symptom_name = $row['new_symptom_name'];
        $this->new_start_date = $row['new_start_date'];
        $this->new_end_date = $row['new_end_date'];
        $this->new_notes = $row['new_notes'];
        $this->logs_cdate = $row['logs_cdate'];
        $this->logs_ctime = $row['logs_ctime'];
        $this->log_ByUser = $row['log_ByUser'];
        $this->new_timee = $row['new_timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByNew_notes(){
      $sql = "SELECT * FROM `logs_symptoms` WHERE `new_notes`='$this->new_notes'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_symptom_name = $row['new_symptom_name'];
        $this->new_start_date = $row['new_start_date'];
        $this->new_end_date = $row['new_end_date'];
        $this->new_notes = $row['new_notes'];
        $this->logs_cdate = $row['logs_cdate'];
        $this->logs_ctime = $row['logs_ctime'];
        $this->log_ByUser = $row['log_ByUser'];
        $this->new_timee = $row['new_timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByLogs_cdate(){
      $sql = "SELECT * FROM `logs_symptoms` WHERE `logs_cdate`='$this->logs_cdate'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_symptom_name = $row['new_symptom_name'];
        $this->new_start_date = $row['new_start_date'];
        $this->new_end_date = $row['new_end_date'];
        $this->new_notes = $row['new_notes'];
        $this->logs_cdate = $row['logs_cdate'];
        $this->logs_ctime = $row['logs_ctime'];
        $this->log_ByUser = $row['log_ByUser'];
        $this->new_timee = $row['new_timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByLogs_ctime(){
      $sql = "SELECT * FROM `logs_symptoms` WHERE `logs_ctime`='$this->logs_ctime'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_symptom_name = $row['new_symptom_name'];
        $this->new_start_date = $row['new_start_date'];
        $this->new_end_date = $row['new_end_date'];
        $this->new_notes = $row['new_notes'];
        $this->logs_cdate = $row['logs_cdate'];
        $this->logs_ctime = $row['logs_ctime'];
        $this->log_ByUser = $row['log_ByUser'];
        $this->new_timee = $row['new_timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByLog_ByUser(){
      $sql = "SELECT * FROM `logs_symptoms` WHERE `log_ByUser`='$this->log_ByUser'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_symptom_name = $row['new_symptom_name'];
        $this->new_start_date = $row['new_start_date'];
        $this->new_end_date = $row['new_end_date'];
        $this->new_notes = $row['new_notes'];
        $this->logs_cdate = $row['logs_cdate'];
        $this->logs_ctime = $row['logs_ctime'];
        $this->log_ByUser = $row['log_ByUser'];
        $this->new_timee = $row['new_timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByNew_timee(){
      $sql = "SELECT * FROM `logs_symptoms` WHERE `new_timee`='$this->new_timee'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_symptom_name = $row['new_symptom_name'];
        $this->new_start_date = $row['new_start_date'];
        $this->new_end_date = $row['new_end_date'];
        $this->new_notes = $row['new_notes'];
        $this->logs_cdate = $row['logs_cdate'];
        $this->logs_ctime = $row['logs_ctime'];
        $this->log_ByUser = $row['log_ByUser'];
        $this->new_timee = $row['new_timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByTime(){
      $sql = "SELECT * FROM `logs_symptoms` WHERE `time`='$this->time'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_symptom_name = $row['new_symptom_name'];
        $this->new_start_date = $row['new_start_date'];
        $this->new_end_date = $row['new_end_date'];
        $this->new_notes = $row['new_notes'];
        $this->logs_cdate = $row['logs_cdate'];
        $this->logs_ctime = $row['logs_ctime'];
        $this->log_ByUser = $row['log_ByUser'];
        $this->new_timee = $row['new_timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getLastRow(){
      $sql = "SELECT * FROM `logs_symptoms` WHERE $this->sqlCondition ORDER BY `id` DESC";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_symptom_name = $row['new_symptom_name'];
        $this->new_start_date = $row['new_start_date'];
        $this->new_end_date = $row['new_end_date'];
        $this->new_notes = $row['new_notes'];
        $this->logs_cdate = $row['logs_cdate'];
        $this->logs_ctime = $row['logs_ctime'];
        $this->log_ByUser = $row['log_ByUser'];
        $this->new_timee = $row['new_timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getFirstRow(){
      $sql = "SELECT * FROM `logs_symptoms` WHERE $this->sqlCondition ORDER BY `id`";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_symptom_name = $row['new_symptom_name'];
        $this->new_start_date = $row['new_start_date'];
        $this->new_end_date = $row['new_end_date'];
        $this->new_notes = $row['new_notes'];
        $this->logs_cdate = $row['logs_cdate'];
        $this->logs_ctime = $row['logs_ctime'];
        $this->log_ByUser = $row['log_ByUser'];
        $this->new_timee = $row['new_timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getBySet($limit){
      if(!is_numeric($limit)){ return '[]'; }
      $sql = "SELECT * FROM `logs_symptoms` WHERE `id` LIKE '%$this->id%' AND `actionn` LIKE '%$this->actionn%' AND `new_patient_id` LIKE '%$this->new_patient_id%' AND `new_symptom_name` LIKE '%$this->new_symptom_name%' AND `new_start_date` LIKE '%$this->new_start_date%' AND `new_end_date` LIKE '%$this->new_end_date%' AND `new_notes` LIKE '%$this->new_notes%' AND `logs_cdate` LIKE '%$this->logs_cdate%' AND `logs_ctime` LIKE '%$this->logs_ctime%' AND `log_ByUser` LIKE '%$this->log_ByUser%' AND `new_timee` LIKE '%$this->new_timee%' AND `time` LIKE '%$this->time%' LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function add(){
      $sql = "INSERT INTO `logs_symptoms` (`id`, `actionn`, `new_patient_id`, `new_symptom_name`, `new_start_date`, `new_end_date`, `new_notes`, `logs_cdate`, `logs_ctime`, `log_ByUser`, `new_timee`, `time`) VALUES 
      ('$this->id', '$this->actionn', '$this->new_patient_id', '$this->new_symptom_name', '$this->new_start_date', '$this->new_end_date', '$this->new_notes', '$this->logs_cdate', '$this->logs_ctime', '$this->log_ByUser', '$this->new_timee', '$this->time')";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function update(){
      $sql = "UPDATE `logs_symptoms` SET `id`='$this->id', `actionn`='$this->actionn', `new_patient_id`='$this->new_patient_id', `new_symptom_name`='$this->new_symptom_name', `new_start_date`='$this->new_start_date', `new_end_date`='$this->new_end_date', `new_notes`='$this->new_notes', `logs_cdate`='$this->logs_cdate', `logs_ctime`='$this->logs_ctime', `log_ByUser`='$this->log_ByUser', `new_timee`='$this->new_timee', `time`='$this->time' WHERE `id`='$this->id'";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function delete() {
      $sql = "DELETE FROM `logs_symptoms` WHERE `id`='$this->id'";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function giveIdentity($days){
      setcookie('logs_symptoms', encode("$this->id"), time() + (86400 * $days), "/");
    }

    public function getIdentity($days){
      if(isset($_COOKIE['logs_symptoms'])){
        decode($_COOKIE['logs_symptoms']);
      }else{return false;}
    }

    public function deleteIdentity($days){
      setcookie("logs_symptoms", '', time() - 3600);
    }

    public function giveAuthority(){
      $_SESSION['logs_symptoms'] = encrypt($this->id);
      $_SESSION['logs_symptoms_id'] = $this->id;
    }

    public function getAuthority(){
      if(isset($_SESSION['logs_symptoms']) && isset($_SESSION['logs_symptoms_id'])){
        $tmp_id = filter($_SESSION['logs_symptoms_id']);
        $sql = "SELECT * from `logs_symptoms` WHERE `id`='$tmp_id'";
        $result = $this->db()->query($sql);
        $row = $result->fetch();
        if(encrypt($row['id']) == $_SESSION['logs_symptoms']){
          return $_SESSION['logs_symptoms_id'];
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

    public function setNew_symptom_name($new_symptom_name){
      if(is_string($new_symptom_name)){
        $this->new_symptom_name = filter($new_symptom_name);
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

    public function setNew_notes($new_notes){
      if(is_string($new_notes)){
        $this->new_notes = filter($new_notes);
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

    public function setNew_timee($new_timee){
      if(is_numeric($new_timee)){
        $this->new_timee = filter($new_timee);
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

    public function getNew_symptom_name(){
      return $this->new_symptom_name;
    }

    public function getNew_start_date(){
      return $this->new_start_date;
    }

    public function getNew_end_date(){
      return $this->new_end_date;
    }

    public function getNew_notes(){
      return $this->new_notes;
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

    public function getNew_timee(){
      return $this->new_timee;
    }

    public function getTime(){
      return $this->time;
    }

  }
?>