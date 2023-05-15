<?php
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/config.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/encrypt.inc.php';

  class Patient_files extends Database {
    private $sqlCondition = 1;
    private $id;
    private $patient_id;
    private $doctor_id;
    private $file_name;
    private $file_type;
    private $created_at;
    private $timee;
    private $time;

    public function __construct($id = null){
      $this->time = time();
      if($id != null){
        $this->setId($id);
        if($id != $this->id){
          exit('');
        }
        $sql = "SELECT * FROM `patient_files` WHERE `id`=$this->id";
        $result = $this->db()->query($sql);
        if($result->rowCount() > 0){
          $row = $result->fetch();
          $this->id = $row['id'];
          $this->patient_id = $row['patient_id'];
          $this->doctor_id = $row['doctor_id'];
          $this->file_name = $row['file_name'];
          $this->file_type = $row['file_type'];
          $this->created_at = $row['created_at'];
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
      $sql = "SELECT * FROM `patient_files` WHERE $this->sqlCondition ORDER BY `id` LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function getAllReversed($limit = 1000000){
      if(!is_numeric($limit)){ return '[]'; }
      $sql = "SELECT * FROM `patient_files` WHERE $this->sqlCondition ORDER BY `id` DESC LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function getNumberOfRows(){
      $sql = "SELECT COUNT(*) AS 'numberOfRows' FROM `patient_files` WHERE $this->sqlCondition";
      $result = $this->db()->query($sql);
      $row = $result->fetch();
      return $row['numberOfRows'];
    }

    public function getById(){
      $sql = "SELECT * FROM `patient_files` WHERE `id`='$this->id'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->patient_id = $row['patient_id'];
        $this->doctor_id = $row['doctor_id'];
        $this->file_name = $row['file_name'];
        $this->file_type = $row['file_type'];
        $this->created_at = $row['created_at'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByPatient_id(){
      $sql = "SELECT * FROM `patient_files` WHERE `patient_id`='$this->patient_id'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->patient_id = $row['patient_id'];
        $this->doctor_id = $row['doctor_id'];
        $this->file_name = $row['file_name'];
        $this->file_type = $row['file_type'];
        $this->created_at = $row['created_at'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByDoctor_id(){
      $sql = "SELECT * FROM `patient_files` WHERE `doctor_id`='$this->doctor_id'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->patient_id = $row['patient_id'];
        $this->doctor_id = $row['doctor_id'];
        $this->file_name = $row['file_name'];
        $this->file_type = $row['file_type'];
        $this->created_at = $row['created_at'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByFile_name(){
      $sql = "SELECT * FROM `patient_files` WHERE `file_name`='$this->file_name'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->patient_id = $row['patient_id'];
        $this->doctor_id = $row['doctor_id'];
        $this->file_name = $row['file_name'];
        $this->file_type = $row['file_type'];
        $this->created_at = $row['created_at'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByFile_type(){
      $sql = "SELECT * FROM `patient_files` WHERE `file_type`='$this->file_type'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->patient_id = $row['patient_id'];
        $this->doctor_id = $row['doctor_id'];
        $this->file_name = $row['file_name'];
        $this->file_type = $row['file_type'];
        $this->created_at = $row['created_at'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByCreated_at(){
      $sql = "SELECT * FROM `patient_files` WHERE `created_at`='$this->created_at'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->patient_id = $row['patient_id'];
        $this->doctor_id = $row['doctor_id'];
        $this->file_name = $row['file_name'];
        $this->file_type = $row['file_type'];
        $this->created_at = $row['created_at'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByTimee(){
      $sql = "SELECT * FROM `patient_files` WHERE `timee`='$this->timee'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->patient_id = $row['patient_id'];
        $this->doctor_id = $row['doctor_id'];
        $this->file_name = $row['file_name'];
        $this->file_type = $row['file_type'];
        $this->created_at = $row['created_at'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByTime(){
      $sql = "SELECT * FROM `patient_files` WHERE `time`='$this->time'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->patient_id = $row['patient_id'];
        $this->doctor_id = $row['doctor_id'];
        $this->file_name = $row['file_name'];
        $this->file_type = $row['file_type'];
        $this->created_at = $row['created_at'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getLastRow(){
      $sql = "SELECT * FROM `patient_files` WHERE $this->sqlCondition ORDER BY `id` DESC";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->patient_id = $row['patient_id'];
        $this->doctor_id = $row['doctor_id'];
        $this->file_name = $row['file_name'];
        $this->file_type = $row['file_type'];
        $this->created_at = $row['created_at'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getFirstRow(){
      $sql = "SELECT * FROM `patient_files` WHERE $this->sqlCondition ORDER BY `id`";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->patient_id = $row['patient_id'];
        $this->doctor_id = $row['doctor_id'];
        $this->file_name = $row['file_name'];
        $this->file_type = $row['file_type'];
        $this->created_at = $row['created_at'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getBySet($limit){
      if(!is_numeric($limit)){ return '[]'; }
      $sql = "SELECT * FROM `patient_files` WHERE `id` LIKE '%$this->id%' AND `patient_id` LIKE '%$this->patient_id%' AND `doctor_id` LIKE '%$this->doctor_id%' AND `file_name` LIKE '%$this->file_name%' AND `file_type` LIKE '%$this->file_type%' AND `created_at` LIKE '%$this->created_at%' AND `timee` LIKE '%$this->timee%' AND `time` LIKE '%$this->time%' LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function add(){
      $sql = "INSERT INTO `patient_files` (`patient_id`, `doctor_id`, `file_name`, `file_type`, `created_at`, `timee`, `time`) VALUES
      ('$this->patient_id', '$this->doctor_id', '$this->file_name', '$this->file_type', '$this->created_at', '$this->timee', '$this->time')";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function update(){
      $sql = "UPDATE `patient_files` SET `id`='$this->id', `patient_id`='$this->patient_id', `doctor_id`='$this->doctor_id', `file_name`='$this->file_name', `file_type`='$this->file_type', `created_at`='$this->created_at', `timee`='$this->timee', `time`='$this->time' WHERE `id`='$this->id'";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function delete() {
      $sql = "DELETE FROM `patient_files` WHERE `id`='$this->id'";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function giveIdentity($days){
      setcookie('patient_files', encode("$this->id"), time() + (86400 * $days), "/");
    }

    public function getIdentity($days){
      if(isset($_COOKIE['patient_files'])){
        decode($_COOKIE['patient_files']);
      }else{return false;}
    }

    public function deleteIdentity($days){
      setcookie("patient_files", '', time() - 3600);
    }

    public function giveAuthority(){
      $_SESSION['patient_files'] = encrypt($this->id);
      $_SESSION['patient_files_id'] = $this->id;
    }

    public function getAuthority(){
      if(isset($_SESSION['patient_files']) && isset($_SESSION['patient_files_id'])){
        $tmp_id = filter($_SESSION['patient_files_id']);
        $sql = "SELECT * from `patient_files` WHERE `id`='$tmp_id'";
        $result = $this->db()->query($sql);
        $row = $result->fetch();
        if(encrypt($row['id']) == $_SESSION['patient_files']){
          return $_SESSION['patient_files_id'];
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

    public function setPatient_id($patient_id){
      if(is_numeric($patient_id)){
        $this->patient_id = filter($patient_id);
        return true;
      }else{
        return false;
      }
    }

    public function setDoctor_id($doctor_id){
      if(is_numeric($doctor_id)){
        $this->doctor_id = filter($doctor_id);
        return true;
      }else{
        return false;
      }
    }

    public function setFile_name($file_name){
      if(is_string($file_name)){
        $this->file_name = filter($file_name);
        return true;
      }else{
        return false;
      }
    }

    public function setFile_type($file_type){
      if(is_string($file_type)){
        $this->file_type = filter($file_type);
        return true;
      }else{
        return false;
      }
    }

    public function setCreated_at($created_at){
      if(is_string($created_at)){
        $this->created_at = filter($created_at);
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

    public function getPatient_id(){
      return $this->patient_id;
    }

    public function getDoctor_id(){
      return $this->doctor_id;
    }

    public function getFile_name(){
      return $this->file_name;
    }

    public function getFile_type(){
      return $this->file_type;
    }

    public function getCreated_at(){
      return $this->created_at;
    }

    public function getTimee(){
      return $this->timee;
    }

    public function getTime(){
      return $this->time;
    }

  }
?>
