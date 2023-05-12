<?php
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/config.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/encrypt.inc.php';

  class Logs_patient_history extends Database {
    private $sqlCondition = 1;
    private $id;
    private $actionn;
    private $new_files_id;
    private $new_diagnosis;
    private $new_treatment;
    private $new_notes;
    private $new_created_at;
    private $new_updated_at;
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
        $sql = "SELECT * FROM `logs_patient_history` WHERE `id`=$this->id";
        $result = $this->db()->query($sql);
        if($result->rowCount() > 0){
          $row = $result->fetch();
          $this->id = $row['id'];
          $this->actionn = $row['actionn'];
          $this->new_files_id = $row['new_files_id'];
          $this->new_diagnosis = $row['new_diagnosis'];
          $this->new_treatment = $row['new_treatment'];
          $this->new_notes = $row['new_notes'];
          $this->new_created_at = $row['new_created_at'];
          $this->new_updated_at = $row['new_updated_at'];
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
      $sql = "SELECT * FROM `logs_patient_history` WHERE $this->sqlCondition ORDER BY `id` LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function getAllReversed($limit = 1000000){
      if(!is_numeric($limit)){ return '[]'; }
      $sql = "SELECT * FROM `logs_patient_history` WHERE $this->sqlCondition ORDER BY `id` DESC LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function getNumberOfRows(){
      $sql = "SELECT COUNT(*) AS 'numberOfRows' FROM `logs_patient_history` WHERE $this->sqlCondition";
      $result = $this->db()->query($sql);
      $row = $result->fetch();
      return $row['numberOfRows'];
    }

    public function getById(){
      $sql = "SELECT * FROM `logs_patient_history` WHERE `id`='$this->id'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_files_id = $row['new_files_id'];
        $this->new_diagnosis = $row['new_diagnosis'];
        $this->new_treatment = $row['new_treatment'];
        $this->new_notes = $row['new_notes'];
        $this->new_created_at = $row['new_created_at'];
        $this->new_updated_at = $row['new_updated_at'];
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
      $sql = "SELECT * FROM `logs_patient_history` WHERE `actionn`='$this->actionn'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_files_id = $row['new_files_id'];
        $this->new_diagnosis = $row['new_diagnosis'];
        $this->new_treatment = $row['new_treatment'];
        $this->new_notes = $row['new_notes'];
        $this->new_created_at = $row['new_created_at'];
        $this->new_updated_at = $row['new_updated_at'];
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

    public function getByNew_files_id(){
      $sql = "SELECT * FROM `logs_patient_history` WHERE `new_files_id`='$this->new_files_id'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_files_id = $row['new_files_id'];
        $this->new_diagnosis = $row['new_diagnosis'];
        $this->new_treatment = $row['new_treatment'];
        $this->new_notes = $row['new_notes'];
        $this->new_created_at = $row['new_created_at'];
        $this->new_updated_at = $row['new_updated_at'];
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

    public function getByNew_diagnosis(){
      $sql = "SELECT * FROM `logs_patient_history` WHERE `new_diagnosis`='$this->new_diagnosis'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_files_id = $row['new_files_id'];
        $this->new_diagnosis = $row['new_diagnosis'];
        $this->new_treatment = $row['new_treatment'];
        $this->new_notes = $row['new_notes'];
        $this->new_created_at = $row['new_created_at'];
        $this->new_updated_at = $row['new_updated_at'];
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

    public function getByNew_treatment(){
      $sql = "SELECT * FROM `logs_patient_history` WHERE `new_treatment`='$this->new_treatment'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_files_id = $row['new_files_id'];
        $this->new_diagnosis = $row['new_diagnosis'];
        $this->new_treatment = $row['new_treatment'];
        $this->new_notes = $row['new_notes'];
        $this->new_created_at = $row['new_created_at'];
        $this->new_updated_at = $row['new_updated_at'];
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

    public function getByNew_notes(){
      $sql = "SELECT * FROM `logs_patient_history` WHERE `new_notes`='$this->new_notes'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_files_id = $row['new_files_id'];
        $this->new_diagnosis = $row['new_diagnosis'];
        $this->new_treatment = $row['new_treatment'];
        $this->new_notes = $row['new_notes'];
        $this->new_created_at = $row['new_created_at'];
        $this->new_updated_at = $row['new_updated_at'];
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
      $sql = "SELECT * FROM `logs_patient_history` WHERE `new_created_at`='$this->new_created_at'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_files_id = $row['new_files_id'];
        $this->new_diagnosis = $row['new_diagnosis'];
        $this->new_treatment = $row['new_treatment'];
        $this->new_notes = $row['new_notes'];
        $this->new_created_at = $row['new_created_at'];
        $this->new_updated_at = $row['new_updated_at'];
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

    public function getByNew_updated_at(){
      $sql = "SELECT * FROM `logs_patient_history` WHERE `new_updated_at`='$this->new_updated_at'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_files_id = $row['new_files_id'];
        $this->new_diagnosis = $row['new_diagnosis'];
        $this->new_treatment = $row['new_treatment'];
        $this->new_notes = $row['new_notes'];
        $this->new_created_at = $row['new_created_at'];
        $this->new_updated_at = $row['new_updated_at'];
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
      $sql = "SELECT * FROM `logs_patient_history` WHERE `logs_cdate`='$this->logs_cdate'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_files_id = $row['new_files_id'];
        $this->new_diagnosis = $row['new_diagnosis'];
        $this->new_treatment = $row['new_treatment'];
        $this->new_notes = $row['new_notes'];
        $this->new_created_at = $row['new_created_at'];
        $this->new_updated_at = $row['new_updated_at'];
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
      $sql = "SELECT * FROM `logs_patient_history` WHERE `logs_ctime`='$this->logs_ctime'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_files_id = $row['new_files_id'];
        $this->new_diagnosis = $row['new_diagnosis'];
        $this->new_treatment = $row['new_treatment'];
        $this->new_notes = $row['new_notes'];
        $this->new_created_at = $row['new_created_at'];
        $this->new_updated_at = $row['new_updated_at'];
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
      $sql = "SELECT * FROM `logs_patient_history` WHERE `log_ByUser`='$this->log_ByUser'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_files_id = $row['new_files_id'];
        $this->new_diagnosis = $row['new_diagnosis'];
        $this->new_treatment = $row['new_treatment'];
        $this->new_notes = $row['new_notes'];
        $this->new_created_at = $row['new_created_at'];
        $this->new_updated_at = $row['new_updated_at'];
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
      $sql = "SELECT * FROM `logs_patient_history` WHERE `timee`='$this->timee'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_files_id = $row['new_files_id'];
        $this->new_diagnosis = $row['new_diagnosis'];
        $this->new_treatment = $row['new_treatment'];
        $this->new_notes = $row['new_notes'];
        $this->new_created_at = $row['new_created_at'];
        $this->new_updated_at = $row['new_updated_at'];
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
      $sql = "SELECT * FROM `logs_patient_history` WHERE `time`='$this->time'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_files_id = $row['new_files_id'];
        $this->new_diagnosis = $row['new_diagnosis'];
        $this->new_treatment = $row['new_treatment'];
        $this->new_notes = $row['new_notes'];
        $this->new_created_at = $row['new_created_at'];
        $this->new_updated_at = $row['new_updated_at'];
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
      $sql = "SELECT * FROM `logs_patient_history` WHERE $this->sqlCondition ORDER BY `id` DESC";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_files_id = $row['new_files_id'];
        $this->new_diagnosis = $row['new_diagnosis'];
        $this->new_treatment = $row['new_treatment'];
        $this->new_notes = $row['new_notes'];
        $this->new_created_at = $row['new_created_at'];
        $this->new_updated_at = $row['new_updated_at'];
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
      $sql = "SELECT * FROM `logs_patient_history` WHERE $this->sqlCondition ORDER BY `id`";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_files_id = $row['new_files_id'];
        $this->new_diagnosis = $row['new_diagnosis'];
        $this->new_treatment = $row['new_treatment'];
        $this->new_notes = $row['new_notes'];
        $this->new_created_at = $row['new_created_at'];
        $this->new_updated_at = $row['new_updated_at'];
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
      $sql = "SELECT * FROM `logs_patient_history` WHERE `id` LIKE '%$this->id%' AND `actionn` LIKE '%$this->actionn%' AND `new_files_id` LIKE '%$this->new_files_id%' AND `new_diagnosis` LIKE '%$this->new_diagnosis%' AND `new_treatment` LIKE '%$this->new_treatment%' AND `new_notes` LIKE '%$this->new_notes%' AND `new_created_at` LIKE '%$this->new_created_at%' AND `new_updated_at` LIKE '%$this->new_updated_at%' AND `logs_cdate` LIKE '%$this->logs_cdate%' AND `logs_ctime` LIKE '%$this->logs_ctime%' AND `log_ByUser` LIKE '%$this->log_ByUser%' AND `timee` LIKE '%$this->timee%' AND `time` LIKE '%$this->time%' LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function add(){
      $sql = "INSERT INTO `logs_patient_history` (`id`, `actionn`, `new_files_id`, `new_diagnosis`, `new_treatment`, `new_notes`, `new_created_at`, `new_updated_at`, `logs_cdate`, `logs_ctime`, `log_ByUser`, `timee`, `time`) VALUES 
      ('$this->id', '$this->actionn', '$this->new_files_id', '$this->new_diagnosis', '$this->new_treatment', '$this->new_notes', '$this->new_created_at', '$this->new_updated_at', '$this->logs_cdate', '$this->logs_ctime', '$this->log_ByUser', '$this->timee', '$this->time')";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function update(){
      $sql = "UPDATE `logs_patient_history` SET `id`='$this->id', `actionn`='$this->actionn', `new_files_id`='$this->new_files_id', `new_diagnosis`='$this->new_diagnosis', `new_treatment`='$this->new_treatment', `new_notes`='$this->new_notes', `new_created_at`='$this->new_created_at', `new_updated_at`='$this->new_updated_at', `logs_cdate`='$this->logs_cdate', `logs_ctime`='$this->logs_ctime', `log_ByUser`='$this->log_ByUser', `timee`='$this->timee', `time`='$this->time' WHERE `id`='$this->id'";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function delete() {
      $sql = "DELETE FROM `logs_patient_history` WHERE `id`='$this->id'";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function giveIdentity($days){
      setcookie('logs_patient_history', encode("$this->id"), time() + (86400 * $days), "/");
    }

    public function getIdentity($days){
      if(isset($_COOKIE['logs_patient_history'])){
        decode($_COOKIE['logs_patient_history']);
      }else{return false;}
    }

    public function deleteIdentity($days){
      setcookie("logs_patient_history", '', time() - 3600);
    }

    public function giveAuthority(){
      $_SESSION['logs_patient_history'] = encrypt($this->id);
      $_SESSION['logs_patient_history_id'] = $this->id;
    }

    public function getAuthority(){
      if(isset($_SESSION['logs_patient_history']) && isset($_SESSION['logs_patient_history_id'])){
        $tmp_id = filter($_SESSION['logs_patient_history_id']);
        $sql = "SELECT * from `logs_patient_history` WHERE `id`='$tmp_id'";
        $result = $this->db()->query($sql);
        $row = $result->fetch();
        if(encrypt($row['id']) == $_SESSION['logs_patient_history']){
          return $_SESSION['logs_patient_history_id'];
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

    public function setNew_files_id($new_files_id){
      if(is_numeric($new_files_id)){
        $this->new_files_id = filter($new_files_id);
        return true;
      }else{
        return false;
      }
    }

    public function setNew_diagnosis($new_diagnosis){
      if(is_string($new_diagnosis)){
        $this->new_diagnosis = filter($new_diagnosis);
        return true;
      }else{
        return false;
      }
    }

    public function setNew_treatment($new_treatment){
      if(is_string($new_treatment)){
        $this->new_treatment = filter($new_treatment);
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

    public function setNew_created_at($new_created_at){
      if(is_string($new_created_at)){
        $this->new_created_at = filter($new_created_at);
        return true;
      }else{
        return false;
      }
    }

    public function setNew_updated_at($new_updated_at){
      if(is_string($new_updated_at)){
        $this->new_updated_at = filter($new_updated_at);
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

    public function getNew_files_id(){
      return $this->new_files_id;
    }

    public function getNew_diagnosis(){
      return $this->new_diagnosis;
    }

    public function getNew_treatment(){
      return $this->new_treatment;
    }

    public function getNew_notes(){
      return $this->new_notes;
    }

    public function getNew_created_at(){
      return $this->new_created_at;
    }

    public function getNew_updated_at(){
      return $this->new_updated_at;
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