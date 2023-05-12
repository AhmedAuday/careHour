<?php
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/config.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/encrypt.inc.php';

  class Medications extends Database {
    private $sqlCondition = 1;
    private $id;
    private $doctor_id;
    private $patient_id;
    private $medication_name;
    private $dosage;
    private $frequency;
    private $start_date;
    private $end_date;
    private $timee;
    private $time;

    public function __construct($id = null){
      $this->time = time();
      if($id != null){
        $this->setId($id);
        if($id != $this->id){
          exit('');
        }
        $sql = "SELECT * FROM `medications` WHERE `id`=$this->id";
        $result = $this->db()->query($sql);
        if($result->rowCount() > 0){
          $row = $result->fetch();
          $this->id = $row['id'];
          $this->doctor_id = $row['doctor_id'];
          $this->patient_id = $row['patient_id'];
          $this->medication_name = $row['medication_name'];
          $this->dosage = $row['dosage'];
          $this->frequency = $row['frequency'];
          $this->start_date = $row['start_date'];
          $this->end_date = $row['end_date'];
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
      $sql = "SELECT * FROM `medications` WHERE $this->sqlCondition ORDER BY `id` LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function getAllReversed($limit = 1000000){
      if(!is_numeric($limit)){ return '[]'; }
      $sql = "SELECT * FROM `medications` WHERE $this->sqlCondition ORDER BY `id` DESC LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function getNumberOfRows(){
      $sql = "SELECT COUNT(*) AS 'numberOfRows' FROM `medications` WHERE $this->sqlCondition";
      $result = $this->db()->query($sql);
      $row = $result->fetch();
      return $row['numberOfRows'];
    }

    public function getById(){
      $sql = "SELECT * FROM `medications` WHERE `id`='$this->id'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->doctor_id = $row['doctor_id'];
        $this->patient_id = $row['patient_id'];
        $this->medication_name = $row['medication_name'];
        $this->dosage = $row['dosage'];
        $this->frequency = $row['frequency'];
        $this->start_date = $row['start_date'];
        $this->end_date = $row['end_date'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByDoctor_id(){
      $sql = "SELECT * FROM `medications` WHERE `doctor_id`='$this->doctor_id'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->doctor_id = $row['doctor_id'];
        $this->patient_id = $row['patient_id'];
        $this->medication_name = $row['medication_name'];
        $this->dosage = $row['dosage'];
        $this->frequency = $row['frequency'];
        $this->start_date = $row['start_date'];
        $this->end_date = $row['end_date'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByPatient_id(){
      $sql = "SELECT * FROM `medications` WHERE `patient_id`='$this->patient_id'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->doctor_id = $row['doctor_id'];
        $this->patient_id = $row['patient_id'];
        $this->medication_name = $row['medication_name'];
        $this->dosage = $row['dosage'];
        $this->frequency = $row['frequency'];
        $this->start_date = $row['start_date'];
        $this->end_date = $row['end_date'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByMedication_name(){
      $sql = "SELECT * FROM `medications` WHERE `medication_name`='$this->medication_name'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->doctor_id = $row['doctor_id'];
        $this->patient_id = $row['patient_id'];
        $this->medication_name = $row['medication_name'];
        $this->dosage = $row['dosage'];
        $this->frequency = $row['frequency'];
        $this->start_date = $row['start_date'];
        $this->end_date = $row['end_date'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByDosage(){
      $sql = "SELECT * FROM `medications` WHERE `dosage`='$this->dosage'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->doctor_id = $row['doctor_id'];
        $this->patient_id = $row['patient_id'];
        $this->medication_name = $row['medication_name'];
        $this->dosage = $row['dosage'];
        $this->frequency = $row['frequency'];
        $this->start_date = $row['start_date'];
        $this->end_date = $row['end_date'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByFrequency(){
      $sql = "SELECT * FROM `medications` WHERE `frequency`='$this->frequency'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->doctor_id = $row['doctor_id'];
        $this->patient_id = $row['patient_id'];
        $this->medication_name = $row['medication_name'];
        $this->dosage = $row['dosage'];
        $this->frequency = $row['frequency'];
        $this->start_date = $row['start_date'];
        $this->end_date = $row['end_date'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByStart_date(){
      $sql = "SELECT * FROM `medications` WHERE `start_date`='$this->start_date'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->doctor_id = $row['doctor_id'];
        $this->patient_id = $row['patient_id'];
        $this->medication_name = $row['medication_name'];
        $this->dosage = $row['dosage'];
        $this->frequency = $row['frequency'];
        $this->start_date = $row['start_date'];
        $this->end_date = $row['end_date'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByEnd_date(){
      $sql = "SELECT * FROM `medications` WHERE `end_date`='$this->end_date'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->doctor_id = $row['doctor_id'];
        $this->patient_id = $row['patient_id'];
        $this->medication_name = $row['medication_name'];
        $this->dosage = $row['dosage'];
        $this->frequency = $row['frequency'];
        $this->start_date = $row['start_date'];
        $this->end_date = $row['end_date'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByTimee(){
      $sql = "SELECT * FROM `medications` WHERE `timee`='$this->timee'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->doctor_id = $row['doctor_id'];
        $this->patient_id = $row['patient_id'];
        $this->medication_name = $row['medication_name'];
        $this->dosage = $row['dosage'];
        $this->frequency = $row['frequency'];
        $this->start_date = $row['start_date'];
        $this->end_date = $row['end_date'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByTime(){
      $sql = "SELECT * FROM `medications` WHERE `time`='$this->time'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->doctor_id = $row['doctor_id'];
        $this->patient_id = $row['patient_id'];
        $this->medication_name = $row['medication_name'];
        $this->dosage = $row['dosage'];
        $this->frequency = $row['frequency'];
        $this->start_date = $row['start_date'];
        $this->end_date = $row['end_date'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getLastRow(){
      $sql = "SELECT * FROM `medications` WHERE $this->sqlCondition ORDER BY `id` DESC";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->doctor_id = $row['doctor_id'];
        $this->patient_id = $row['patient_id'];
        $this->medication_name = $row['medication_name'];
        $this->dosage = $row['dosage'];
        $this->frequency = $row['frequency'];
        $this->start_date = $row['start_date'];
        $this->end_date = $row['end_date'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getFirstRow(){
      $sql = "SELECT * FROM `medications` WHERE $this->sqlCondition ORDER BY `id`";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->doctor_id = $row['doctor_id'];
        $this->patient_id = $row['patient_id'];
        $this->medication_name = $row['medication_name'];
        $this->dosage = $row['dosage'];
        $this->frequency = $row['frequency'];
        $this->start_date = $row['start_date'];
        $this->end_date = $row['end_date'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getBySet($limit){
      if(!is_numeric($limit)){ return '[]'; }
      $sql = "SELECT * FROM `medications` WHERE `id` LIKE '%$this->id%' AND `doctor_id` LIKE '%$this->doctor_id%' AND `patient_id` LIKE '%$this->patient_id%' AND `medication_name` LIKE '%$this->medication_name%' AND `dosage` LIKE '%$this->dosage%' AND `frequency` LIKE '%$this->frequency%' AND `start_date` LIKE '%$this->start_date%' AND `end_date` LIKE '%$this->end_date%' AND `timee` LIKE '%$this->timee%' AND `time` LIKE '%$this->time%' LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function add(){
      $sql = "INSERT INTO `medications` (`id`, `doctor_id`, `patient_id`, `medication_name`, `dosage`, `frequency`, `start_date`, `end_date`, `timee`, `time`) VALUES 
      ('$this->id', '$this->doctor_id', '$this->patient_id', '$this->medication_name', '$this->dosage', '$this->frequency', '$this->start_date', '$this->end_date', '$this->timee', '$this->time')";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function update(){
      $sql = "UPDATE `medications` SET `id`='$this->id', `doctor_id`='$this->doctor_id', `patient_id`='$this->patient_id', `medication_name`='$this->medication_name', `dosage`='$this->dosage', `frequency`='$this->frequency', `start_date`='$this->start_date', `end_date`='$this->end_date', `timee`='$this->timee', `time`='$this->time' WHERE `id`='$this->id'";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function delete() {
      $sql = "DELETE FROM `medications` WHERE `id`='$this->id'";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function giveIdentity($days){
      setcookie('medications', encode("$this->id"), time() + (86400 * $days), "/");
    }

    public function getIdentity($days){
      if(isset($_COOKIE['medications'])){
        decode($_COOKIE['medications']);
      }else{return false;}
    }

    public function deleteIdentity($days){
      setcookie("medications", '', time() - 3600);
    }

    public function giveAuthority(){
      $_SESSION['medications'] = encrypt($this->id);
      $_SESSION['medications_id'] = $this->id;
    }

    public function getAuthority(){
      if(isset($_SESSION['medications']) && isset($_SESSION['medications_id'])){
        $tmp_id = filter($_SESSION['medications_id']);
        $sql = "SELECT * from `medications` WHERE `id`='$tmp_id'";
        $result = $this->db()->query($sql);
        $row = $result->fetch();
        if(encrypt($row['id']) == $_SESSION['medications']){
          return $_SESSION['medications_id'];
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

    public function setMedication_name($medication_name){
      if(is_string($medication_name)){
        $this->medication_name = filter($medication_name);
        return true;
      }else{
        return false;
      }
    }

    public function setDosage($dosage){
      if(is_string($dosage)){
        $this->dosage = filter($dosage);
        return true;
      }else{
        return false;
      }
    }

    public function setFrequency($frequency){
      if(is_string($frequency)){
        $this->frequency = filter($frequency);
        return true;
      }else{
        return false;
      }
    }

    public function setStart_date($start_date){
      if(is_string($start_date)){
        $this->start_date = filter($start_date);
        return true;
      }else{
        return false;
      }
    }

    public function setEnd_date($end_date){
      if(is_string($end_date)){
        $this->end_date = filter($end_date);
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

    public function getDoctor_id(){
      return $this->doctor_id;
    }

    public function getPatient_id(){
      return $this->patient_id;
    }

    public function getMedication_name(){
      return $this->medication_name;
    }

    public function getDosage(){
      return $this->dosage;
    }

    public function getFrequency(){
      return $this->frequency;
    }

    public function getStart_date(){
      return $this->start_date;
    }

    public function getEnd_date(){
      return $this->end_date;
    }

    public function getTimee(){
      return $this->timee;
    }

    public function getTime(){
      return $this->time;
    }

  }
?>