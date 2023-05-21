<?php
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/config.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/encrypt.inc.php';

  class Surgeries extends Database {
    private $sqlCondition = 1;
    private $id;
    private $doctor_id;
    private $patient_id;
    private $surgery_name;
    private $surgery_date;
    private $notes;
    private $time;

    public function __construct($id = null){
      $this->time = time();
      if($id != null){
        $this->setId($id);
        if($id != $this->id){
          exit('');
        }
        $sql = "SELECT * FROM `surgeries` WHERE `id`=$this->id";
        $result = $this->db()->query($sql);
        if($result->rowCount() > 0){
          $row = $result->fetch();
          $this->id = $row['id'];
          $this->doctor_id = $row['doctor_id'];
          $this->patient_id = $row['patient_id'];
          $this->surgery_name = $row['surgery_name'];
          $this->surgery_date = $row['surgery_date'];
          $this->notes = $row['notes'];
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
      $sql = "SELECT * FROM `surgeries` WHERE $this->sqlCondition ORDER BY `id` LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function getAllReversed($limit = 1000000){
      if(!is_numeric($limit)){ return '[]'; }
      $sql = "SELECT * FROM `surgeries` WHERE $this->sqlCondition ORDER BY `id` DESC LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function getNumberOfRows(){
      $sql = "SELECT COUNT(*) AS 'numberOfRows' FROM `surgeries` WHERE $this->sqlCondition";
      $result = $this->db()->query($sql);
      $row = $result->fetch();
      return $row['numberOfRows'];
    }

    public function getById(){
      $sql = "SELECT * FROM `surgeries` WHERE `id`='$this->id'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->doctor_id = $row['doctor_id'];
        $this->patient_id = $row['patient_id'];
        $this->surgery_name = $row['surgery_name'];
        $this->surgery_date = $row['surgery_date'];
        $this->notes = $row['notes'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByDoctor_id(){
      $sql = "SELECT * FROM `surgeries` WHERE `doctor_id`='$this->doctor_id'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->doctor_id = $row['doctor_id'];
        $this->patient_id = $row['patient_id'];
        $this->surgery_name = $row['surgery_name'];
        $this->surgery_date = $row['surgery_date'];
        $this->notes = $row['notes'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByPatient_id(){
      $sql = "SELECT * FROM `surgeries` WHERE `patient_id`='$this->patient_id'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->doctor_id = $row['doctor_id'];
        $this->patient_id = $row['patient_id'];
        $this->surgery_name = $row['surgery_name'];
        $this->surgery_date = $row['surgery_date'];
        $this->notes = $row['notes'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getBySurgery_name(){
      $sql = "SELECT * FROM `surgeries` WHERE `surgery_name`='$this->surgery_name'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->doctor_id = $row['doctor_id'];
        $this->patient_id = $row['patient_id'];
        $this->surgery_name = $row['surgery_name'];
        $this->surgery_date = $row['surgery_date'];
        $this->notes = $row['notes'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getBySurgery_date(){
      $sql = "SELECT * FROM `surgeries` WHERE `surgery_date`='$this->surgery_date'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->doctor_id = $row['doctor_id'];
        $this->patient_id = $row['patient_id'];
        $this->surgery_name = $row['surgery_name'];
        $this->surgery_date = $row['surgery_date'];
        $this->notes = $row['notes'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByNotes(){
      $sql = "SELECT * FROM `surgeries` WHERE `notes`='$this->notes'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->doctor_id = $row['doctor_id'];
        $this->patient_id = $row['patient_id'];
        $this->surgery_name = $row['surgery_name'];
        $this->surgery_date = $row['surgery_date'];
        $this->notes = $row['notes'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByTime(){
      $sql = "SELECT * FROM `surgeries` WHERE `time`='$this->time'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->doctor_id = $row['doctor_id'];
        $this->patient_id = $row['patient_id'];
        $this->surgery_name = $row['surgery_name'];
        $this->surgery_date = $row['surgery_date'];
        $this->notes = $row['notes'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getLastRow(){
      $sql = "SELECT * FROM `surgeries` WHERE $this->sqlCondition ORDER BY `id` DESC";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->doctor_id = $row['doctor_id'];
        $this->patient_id = $row['patient_id'];
        $this->surgery_name = $row['surgery_name'];
        $this->surgery_date = $row['surgery_date'];
        $this->notes = $row['notes'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getFirstRow(){
      $sql = "SELECT * FROM `surgeries` WHERE $this->sqlCondition ORDER BY `id`";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->doctor_id = $row['doctor_id'];
        $this->patient_id = $row['patient_id'];
        $this->surgery_name = $row['surgery_name'];
        $this->surgery_date = $row['surgery_date'];
        $this->notes = $row['notes'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getBySet($limit){
      if(!is_numeric($limit)){ return '[]'; }
      $sql = "SELECT * FROM `surgeries` WHERE `id` LIKE '%$this->id%' AND `doctor_id` LIKE '%$this->doctor_id%' AND `patient_id` LIKE '%$this->patient_id%' AND `surgery_name` LIKE '%$this->surgery_name%' AND `surgery_date` LIKE '%$this->surgery_date%' AND `notes` LIKE '%$this->notes%' AND `time` LIKE '%$this->time%' LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function add(){
      $sql = "INSERT INTO `surgeries` (`id`, `doctor_id`, `patient_id`, `surgery_name`, `surgery_date`, `notes`, `time`) VALUES 
      ('$this->id', '$this->doctor_id', '$this->patient_id', '$this->surgery_name', '$this->surgery_date', '$this->notes', '$this->time')";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function update(){
      $sql = "UPDATE `surgeries` SET `id`='$this->id', `doctor_id`='$this->doctor_id', `patient_id`='$this->patient_id', `surgery_name`='$this->surgery_name', `surgery_date`='$this->surgery_date', `notes`='$this->notes', `time`='$this->time' WHERE `id`='$this->id'";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function delete() {
      $sql = "DELETE FROM `surgeries` WHERE `id`='$this->id'";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function giveIdentity($days){
      setcookie('surgeries', encode("$this->id"), time() + (86400 * $days), "/");
    }

    public function getIdentity($days){
      if(isset($_COOKIE['surgeries'])){
        decode($_COOKIE['surgeries']);
      }else{return false;}
    }

    public function deleteIdentity($days){
      setcookie("surgeries", '', time() - 3600);
    }

    public function giveAuthority(){
      $_SESSION['surgeries'] = encrypt($this->id);
      $_SESSION['surgeries_id'] = $this->id;
    }

    public function getAuthority(){
      if(isset($_SESSION['surgeries']) && isset($_SESSION['surgeries_id'])){
        $tmp_id = filter($_SESSION['surgeries_id']);
        $sql = "SELECT * from `surgeries` WHERE `id`='$tmp_id'";
        $result = $this->db()->query($sql);
        $row = $result->fetch();
        if(encrypt($row['id']) == $_SESSION['surgeries']){
          return $_SESSION['surgeries_id'];
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

    public function setDoctor_id($doctor_id){
      if(is_numeric($doctor_id)){
        $this->doctor_id = filter($doctor_id);
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

    public function setSurgery_name($surgery_name){
      if(is_string($surgery_name)){
        $this->surgery_name = filter($surgery_name);
        return true;
      }else{
        return false;
      }
    }

    public function setSurgery_date($surgery_date){
      if(is_numeric($surgery_date)){
        $this->surgery_date = filter($surgery_date);
        return true;
      }else{
        return false;
      }
    }

    public function setNotes($notes){
      if(is_string($notes)){
        $this->notes = filter($notes);
        return true;
      }else{
        return false;
      }
    }

    public function setTime($time){
      if(is_numeric($time)){
        $this->time = filter($time);
        return true;
      }else{
        return false;
      }
    }

    public function getId(){
      return $this->id;
    }

    public function getDoctor_id(){
      return $this->doctor_id;
    }

    public function getPatient_id(){
      return $this->patient_id;
    }

    public function getSurgery_name(){
      return $this->surgery_name;
    }

    public function getSurgery_date(){
      return $this->surgery_date;
    }

    public function getNotes(){
      return $this->notes;
    }

    public function getTime(){
      return $this->time;
    }

  }
?>