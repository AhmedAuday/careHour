<?php
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/config.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/encrypt.inc.php';

  class Appointments extends Database {
    private $sqlCondition = 1;
    private $id;
    private $doctor_id;
    private $patient_id;
    private $appointment_date;
    private $appointment_type;
    private $notes;
    private $timee;
    private $time;

    public function __construct($id = null){
      $this->time = time();
      if($id != null){
        $this->setId($id);
        if($id != $this->id){
          exit('');
        }
        $sql = "SELECT * FROM `appointments` WHERE `id`=$this->id";
        $result = $this->db()->query($sql);
        if($result->rowCount() > 0){
          $row = $result->fetch();
          $this->id = $row['id'];
          $this->doctor_id = $row['doctor_id'];
          $this->patient_id = $row['patient_id'];
          $this->appointment_date = $row['appointment_date'];
          $this->appointment_type = $row['appointment_type'];
          $this->notes = $row['notes'];
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
      $sql = "SELECT * FROM `appointments` WHERE $this->sqlCondition ORDER BY `id` LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function getAllReversed($limit = 1000000){
      if(!is_numeric($limit)){ return '[]'; }
      $sql = "SELECT * FROM `appointments` WHERE $this->sqlCondition ORDER BY `id` DESC LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function getNumberOfRows(){
      $sql = "SELECT COUNT(*) AS 'numberOfRows' FROM `appointments` WHERE $this->sqlCondition";
      $result = $this->db()->query($sql);
      $row = $result->fetch();
      return $row['numberOfRows'];
    }

    public function getById(){
      $sql = "SELECT * FROM `appointments` WHERE `id`='$this->id'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->doctor_id = $row['doctor_id'];
        $this->patient_id = $row['patient_id'];
        $this->appointment_date = $row['appointment_date'];
        $this->appointment_type = $row['appointment_type'];
        $this->notes = $row['notes'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByDoctor_id(){
      $sql = "SELECT * FROM `appointments` WHERE `doctor_id`='$this->doctor_id'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->doctor_id = $row['doctor_id'];
        $this->patient_id = $row['patient_id'];
        $this->appointment_date = $row['appointment_date'];
        $this->appointment_type = $row['appointment_type'];
        $this->notes = $row['notes'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByPatient_id(){
      $sql = "SELECT * FROM `appointments` WHERE `patient_id`='$this->patient_id'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->doctor_id = $row['doctor_id'];
        $this->patient_id = $row['patient_id'];
        $this->appointment_date = $row['appointment_date'];
        $this->appointment_type = $row['appointment_type'];
        $this->notes = $row['notes'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByAppointment_date(){
      $sql = "SELECT * FROM `appointments` WHERE `appointment_date`='$this->appointment_date'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->doctor_id = $row['doctor_id'];
        $this->patient_id = $row['patient_id'];
        $this->appointment_date = $row['appointment_date'];
        $this->appointment_type = $row['appointment_type'];
        $this->notes = $row['notes'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByAppointment_type(){
      $sql = "SELECT * FROM `appointments` WHERE `appointment_type`='$this->appointment_type'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->doctor_id = $row['doctor_id'];
        $this->patient_id = $row['patient_id'];
        $this->appointment_date = $row['appointment_date'];
        $this->appointment_type = $row['appointment_type'];
        $this->notes = $row['notes'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByNotes(){
      $sql = "SELECT * FROM `appointments` WHERE `notes`='$this->notes'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->doctor_id = $row['doctor_id'];
        $this->patient_id = $row['patient_id'];
        $this->appointment_date = $row['appointment_date'];
        $this->appointment_type = $row['appointment_type'];
        $this->notes = $row['notes'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByTimee(){
      $sql = "SELECT * FROM `appointments` WHERE `timee`='$this->timee'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->doctor_id = $row['doctor_id'];
        $this->patient_id = $row['patient_id'];
        $this->appointment_date = $row['appointment_date'];
        $this->appointment_type = $row['appointment_type'];
        $this->notes = $row['notes'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByTime(){
      $sql = "SELECT * FROM `appointments` WHERE `time`='$this->time'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->doctor_id = $row['doctor_id'];
        $this->patient_id = $row['patient_id'];
        $this->appointment_date = $row['appointment_date'];
        $this->appointment_type = $row['appointment_type'];
        $this->notes = $row['notes'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getLastRow(){
      $sql = "SELECT * FROM `appointments` WHERE $this->sqlCondition ORDER BY `id` DESC";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->doctor_id = $row['doctor_id'];
        $this->patient_id = $row['patient_id'];
        $this->appointment_date = $row['appointment_date'];
        $this->appointment_type = $row['appointment_type'];
        $this->notes = $row['notes'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getFirstRow(){
      $sql = "SELECT * FROM `appointments` WHERE $this->sqlCondition ORDER BY `id`";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->doctor_id = $row['doctor_id'];
        $this->patient_id = $row['patient_id'];
        $this->appointment_date = $row['appointment_date'];
        $this->appointment_type = $row['appointment_type'];
        $this->notes = $row['notes'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getBySet($limit){
      if(!is_numeric($limit)){ return '[]'; }
      $sql = "SELECT * FROM `appointments` WHERE `id` LIKE '%$this->id%' AND `doctor_id` LIKE '%$this->doctor_id%' AND `patient_id` LIKE '%$this->patient_id%' AND `appointment_date` LIKE '%$this->appointment_date%' AND `appointment_type` LIKE '%$this->appointment_type%' AND `notes` LIKE '%$this->notes%' AND `timee` LIKE '%$this->timee%' AND `time` LIKE '%$this->time%' LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function add(){
      $sql = "INSERT INTO `appointments` (`doctor_id`, `patient_id`, `appointment_date`, `appointment_type`, `notes`, `timee`, `time`) VALUES
      ('$this->doctor_id', '$this->patient_id', '$this->appointment_date', '$this->appointment_type', '$this->notes', '$this->timee', '$this->time')";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function update(){
      $sql = "UPDATE `appointments` SET `id`='$this->id', `doctor_id`='$this->doctor_id', `patient_id`='$this->patient_id', `appointment_date`='$this->appointment_date', `appointment_type`='$this->appointment_type', `notes`='$this->notes', `timee`='$this->timee', `time`='$this->time' WHERE `id`='$this->id'";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function delete() {
      $sql = "DELETE FROM `appointments` WHERE `id`='$this->id'";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function giveIdentity($days){
      setcookie('appointments', encode("$this->id"), time() + (86400 * $days), "/");
    }

    public function getIdentity($days){
      if(isset($_COOKIE['appointments'])){
        decode($_COOKIE['appointments']);
      }else{return false;}
    }

    public function deleteIdentity($days){
      setcookie("appointments", '', time() - 3600);
    }

    public function giveAuthority(){
      $_SESSION['appointments'] = encrypt($this->id);
      $_SESSION['appointments_id'] = $this->id;
    }

    public function getAuthority(){
      if(isset($_SESSION['appointments']) && isset($_SESSION['appointments_id'])){
        $tmp_id = filter($_SESSION['appointments_id']);
        $sql = "SELECT * from `appointments` WHERE `id`='$tmp_id'";
        $result = $this->db()->query($sql);
        $row = $result->fetch();
        if(encrypt($row['id']) == $_SESSION['appointments']){
          return $_SESSION['appointments_id'];
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

    public function setAppointment_date($appointment_date){
      if(is_string($appointment_date)){
        $this->appointment_date = filter($appointment_date);
        return true;
      }else{
        return false;
      }
    }

    public function setAppointment_type($appointment_type){
      if(is_string($appointment_type)){
        $this->appointment_type = filter($appointment_type);
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

    public function getAppointment_date(){
      return $this->appointment_date;
    }

    public function getAppointment_type(){
      return $this->appointment_type;
    }

    public function getNotes(){
      return $this->notes;
    }

    public function getTimee(){
      return $this->timee;
    }

    public function getTime(){
      return $this->time;
    }

  }
?>
