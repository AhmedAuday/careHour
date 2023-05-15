<?php
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/config.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/encrypt.inc.php';

  class Prescriptions extends Database {
    private $sqlCondition = 1;
    private $id;
    private $patient_id;
    private $doctor_id;
    private $prescription_date;
    private $dosage;
    private $timee;
    private $time;

    public function __construct($id = null){
      $this->time = time();
      if($id != null){
        $this->setId($id);
        if($id != $this->id){
          exit('');
        }
        $sql = "SELECT * FROM `prescriptions` WHERE `id`=$this->id";
        $result = $this->db()->query($sql);
        if($result->rowCount() > 0){
          $row = $result->fetch();
          $this->id = $row['id'];
          $this->patient_id = $row['patient_id'];
          $this->doctor_id = $row['doctor_id'];
          $this->prescription_date = $row['prescription_date'];
          $this->dosage = $row['dosage'];
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
      $sql = "SELECT * FROM `prescriptions` WHERE $this->sqlCondition ORDER BY `id` LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function getAllReversed($limit = 1000000){
      if(!is_numeric($limit)){ return '[]'; }
      $sql = "SELECT * FROM `prescriptions` WHERE $this->sqlCondition ORDER BY `id` DESC LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function getNumberOfRows(){
      $sql = "SELECT COUNT(*) AS 'numberOfRows' FROM `prescriptions` WHERE $this->sqlCondition";
      $result = $this->db()->query($sql);
      $row = $result->fetch();
      return $row['numberOfRows'];
    }

    public function getById(){
      $sql = "SELECT * FROM `prescriptions` WHERE `id`='$this->id'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->patient_id = $row['patient_id'];
        $this->doctor_id = $row['doctor_id'];
        $this->prescription_date = $row['prescription_date'];
        $this->dosage = $row['dosage'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByPatient_id(){
      $sql = "SELECT * FROM `prescriptions` WHERE `patient_id`='$this->patient_id'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->patient_id = $row['patient_id'];
        $this->doctor_id = $row['doctor_id'];
        $this->prescription_date = $row['prescription_date'];
        $this->dosage = $row['dosage'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByDoctor_id(){
      $sql = "SELECT * FROM `prescriptions` WHERE `doctor_id`='$this->doctor_id'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->patient_id = $row['patient_id'];
        $this->doctor_id = $row['doctor_id'];
        $this->prescription_date = $row['prescription_date'];
        $this->dosage = $row['dosage'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByPrescription_date(){
      $sql = "SELECT * FROM `prescriptions` WHERE `prescription_date`='$this->prescription_date'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->patient_id = $row['patient_id'];
        $this->doctor_id = $row['doctor_id'];
        $this->prescription_date = $row['prescription_date'];
        $this->dosage = $row['dosage'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByDosage(){
      $sql = "SELECT * FROM `prescriptions` WHERE `dosage`='$this->dosage'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->patient_id = $row['patient_id'];
        $this->doctor_id = $row['doctor_id'];
        $this->prescription_date = $row['prescription_date'];
        $this->dosage = $row['dosage'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByTimee(){
      $sql = "SELECT * FROM `prescriptions` WHERE `timee`='$this->timee'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->patient_id = $row['patient_id'];
        $this->doctor_id = $row['doctor_id'];
        $this->prescription_date = $row['prescription_date'];
        $this->dosage = $row['dosage'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByTime(){
      $sql = "SELECT * FROM `prescriptions` WHERE `time`='$this->time'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->patient_id = $row['patient_id'];
        $this->doctor_id = $row['doctor_id'];
        $this->prescription_date = $row['prescription_date'];
        $this->dosage = $row['dosage'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getLastRow(){
      $sql = "SELECT * FROM `prescriptions` WHERE $this->sqlCondition ORDER BY `id` DESC";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->patient_id = $row['patient_id'];
        $this->doctor_id = $row['doctor_id'];
        $this->prescription_date = $row['prescription_date'];
        $this->dosage = $row['dosage'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getFirstRow(){
      $sql = "SELECT * FROM `prescriptions` WHERE $this->sqlCondition ORDER BY `id`";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->patient_id = $row['patient_id'];
        $this->doctor_id = $row['doctor_id'];
        $this->prescription_date = $row['prescription_date'];
        $this->dosage = $row['dosage'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getBySet($limit){
      if(!is_numeric($limit)){ return '[]'; }
      $sql = "SELECT * FROM `prescriptions` WHERE `id` LIKE '%$this->id%' AND `patient_id` LIKE '%$this->patient_id%' AND `doctor_id` LIKE '%$this->doctor_id%' AND `prescription_date` LIKE '%$this->prescription_date%' AND `dosage` LIKE '%$this->dosage%' AND `timee` LIKE '%$this->timee%' AND `time` LIKE '%$this->time%' LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function add(){
      $sql = "INSERT INTO `prescriptions` (`patient_id`, `doctor_id`, `prescription_date`, `dosage`, `timee`, `time`) VALUES
      ('$this->patient_id', '$this->doctor_id', '$this->prescription_date', '$this->dosage', '$this->timee', '$this->time')";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function update(){
      $sql = "UPDATE `prescriptions` SET `id`='$this->id', `patient_id`='$this->patient_id', `doctor_id`='$this->doctor_id', `prescription_date`='$this->prescription_date', `dosage`='$this->dosage', `timee`='$this->timee', `time`='$this->time' WHERE `id`='$this->id'";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function delete() {
      $sql = "DELETE FROM `prescriptions` WHERE `id`='$this->id'";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function giveIdentity($days){
      setcookie('prescriptions', encode("$this->id"), time() + (86400 * $days), "/");
    }

    public function getIdentity($days){
      if(isset($_COOKIE['prescriptions'])){
        decode($_COOKIE['prescriptions']);
      }else{return false;}
    }

    public function deleteIdentity($days){
      setcookie("prescriptions", '', time() - 3600);
    }

    public function giveAuthority(){
      $_SESSION['prescriptions'] = encrypt($this->id);
      $_SESSION['prescriptions_id'] = $this->id;
    }

    public function getAuthority(){
      if(isset($_SESSION['prescriptions']) && isset($_SESSION['prescriptions_id'])){
        $tmp_id = filter($_SESSION['prescriptions_id']);
        $sql = "SELECT * from `prescriptions` WHERE `id`='$tmp_id'";
        $result = $this->db()->query($sql);
        $row = $result->fetch();
        if(encrypt($row['id']) == $_SESSION['prescriptions']){
          return $_SESSION['prescriptions_id'];
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

    public function setPrescription_date($prescription_date){
      if(is_string($prescription_date)){
        $this->prescription_date = filter($prescription_date);
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

    public function getPrescription_date(){
      return $this->prescription_date;
    }

    public function getDosage(){
      return $this->dosage;
    }

    public function getTimee(){
      return $this->timee;
    }

    public function getTime(){
      return $this->time;
    }

  }
?>
