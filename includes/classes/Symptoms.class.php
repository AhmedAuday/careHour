<?php
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/config.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/encrypt.inc.php';

  class Symptoms extends Database {
    private $sqlCondition = 1;
    private $id;
    private $patient_id;
    private $symptom_name;
    private $start_date;
    private $end_date;
    private $notes;
    private $time;

    public function __construct($id = null){
      $this->time = time();
      if($id != null){
        $this->setId($id);
        if($id != $this->id){
          exit('');
        }
        $sql = "SELECT * FROM `symptoms` WHERE `id`=$this->id";
        $result = $this->db()->query($sql);
        if($result->rowCount() > 0){
          $row = $result->fetch();
          $this->id = $row['id'];
          $this->patient_id = $row['patient_id'];
          $this->symptom_name = $row['symptom_name'];
          $this->start_date = $row['start_date'];
          $this->end_date = $row['end_date'];
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
      $sql = "SELECT * FROM `symptoms` WHERE $this->sqlCondition ORDER BY `id` LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function getAllReversed($limit = 1000000){
      if(!is_numeric($limit)){ return '[]'; }
      $sql = "SELECT * FROM `symptoms` WHERE $this->sqlCondition ORDER BY `id` DESC LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function getNumberOfRows(){
      $sql = "SELECT COUNT(*) AS 'numberOfRows' FROM `symptoms` WHERE $this->sqlCondition";
      $result = $this->db()->query($sql);
      $row = $result->fetch();
      return $row['numberOfRows'];
    }

    public function getById(){
      $sql = "SELECT * FROM `symptoms` WHERE `id`='$this->id'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->patient_id = $row['patient_id'];
        $this->symptom_name = $row['symptom_name'];
        $this->start_date = $row['start_date'];
        $this->end_date = $row['end_date'];
        $this->notes = $row['notes'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByPatient_id(){
      $sql = "SELECT * FROM `symptoms` WHERE `patient_id`='$this->patient_id'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->patient_id = $row['patient_id'];
        $this->symptom_name = $row['symptom_name'];
        $this->start_date = $row['start_date'];
        $this->end_date = $row['end_date'];
        $this->notes = $row['notes'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getBySymptom_name(){
      $sql = "SELECT * FROM `symptoms` WHERE `symptom_name`='$this->symptom_name'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->patient_id = $row['patient_id'];
        $this->symptom_name = $row['symptom_name'];
        $this->start_date = $row['start_date'];
        $this->end_date = $row['end_date'];
        $this->notes = $row['notes'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByStart_date(){
      $sql = "SELECT * FROM `symptoms` WHERE `start_date`='$this->start_date'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->patient_id = $row['patient_id'];
        $this->symptom_name = $row['symptom_name'];
        $this->start_date = $row['start_date'];
        $this->end_date = $row['end_date'];
        $this->notes = $row['notes'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByEnd_date(){
      $sql = "SELECT * FROM `symptoms` WHERE `end_date`='$this->end_date'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->patient_id = $row['patient_id'];
        $this->symptom_name = $row['symptom_name'];
        $this->start_date = $row['start_date'];
        $this->end_date = $row['end_date'];
        $this->notes = $row['notes'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByNotes(){
      $sql = "SELECT * FROM `symptoms` WHERE `notes`='$this->notes'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->patient_id = $row['patient_id'];
        $this->symptom_name = $row['symptom_name'];
        $this->start_date = $row['start_date'];
        $this->end_date = $row['end_date'];
        $this->notes = $row['notes'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByTime(){
      $sql = "SELECT * FROM `symptoms` WHERE `time`='$this->time'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->patient_id = $row['patient_id'];
        $this->symptom_name = $row['symptom_name'];
        $this->start_date = $row['start_date'];
        $this->end_date = $row['end_date'];
        $this->notes = $row['notes'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getLastRow(){
      $sql = "SELECT * FROM `symptoms` WHERE $this->sqlCondition ORDER BY `id` DESC";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->patient_id = $row['patient_id'];
        $this->symptom_name = $row['symptom_name'];
        $this->start_date = $row['start_date'];
        $this->end_date = $row['end_date'];
        $this->notes = $row['notes'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getFirstRow(){
      $sql = "SELECT * FROM `symptoms` WHERE $this->sqlCondition ORDER BY `id`";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->patient_id = $row['patient_id'];
        $this->symptom_name = $row['symptom_name'];
        $this->start_date = $row['start_date'];
        $this->end_date = $row['end_date'];
        $this->notes = $row['notes'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getBySet($limit){
      if(!is_numeric($limit)){ return '[]'; }
      $sql = "SELECT * FROM `symptoms` WHERE `id` LIKE '%$this->id%' AND `patient_id` LIKE '%$this->patient_id%' AND `symptom_name` LIKE '%$this->symptom_name%' AND `start_date` LIKE '%$this->start_date%' AND `end_date` LIKE '%$this->end_date%' AND `notes` LIKE '%$this->notes%' AND `time` LIKE '%$this->time%' LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function add(){
      $sql = "INSERT INTO `symptoms` (`id`, `patient_id`, `symptom_name`, `start_date`, `end_date`, `notes`, `time`) VALUES 
      ('$this->id', '$this->patient_id', '$this->symptom_name', '$this->start_date', '$this->end_date', '$this->notes', '$this->time')";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function update(){
      $sql = "UPDATE `symptoms` SET `id`='$this->id', `patient_id`='$this->patient_id', `symptom_name`='$this->symptom_name', `start_date`='$this->start_date', `end_date`='$this->end_date', `notes`='$this->notes', `time`='$this->time' WHERE `id`='$this->id'";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function delete() {
      $sql = "DELETE FROM `symptoms` WHERE `id`='$this->id'";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function giveIdentity($days){
      setcookie('symptoms', encode("$this->id"), time() + (86400 * $days), "/");
    }

    public function getIdentity($days){
      if(isset($_COOKIE['symptoms'])){
        decode($_COOKIE['symptoms']);
      }else{return false;}
    }

    public function deleteIdentity($days){
      setcookie("symptoms", '', time() - 3600);
    }

    public function giveAuthority(){
      $_SESSION['symptoms'] = encrypt($this->id);
      $_SESSION['symptoms_id'] = $this->id;
    }

    public function getAuthority(){
      if(isset($_SESSION['symptoms']) && isset($_SESSION['symptoms_id'])){
        $tmp_id = filter($_SESSION['symptoms_id']);
        $sql = "SELECT * from `symptoms` WHERE `id`='$tmp_id'";
        $result = $this->db()->query($sql);
        $row = $result->fetch();
        if(encrypt($row['id']) == $_SESSION['symptoms']){
          return $_SESSION['symptoms_id'];
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

    public function setSymptom_name($symptom_name){
      if(is_string($symptom_name)){
        $this->symptom_name = filter($symptom_name);
        return true;
      }else{
        return false;
      }
    }

    public function setStart_date($start_date){
      if(is_numeric($start_date)){
        $this->start_date = filter($start_date);
        return true;
      }else{
        return false;
      }
    }

    public function setEnd_date($end_date){
      if(is_numeric($end_date)){
        $this->end_date = filter($end_date);
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

    public function getPatient_id(){
      return $this->patient_id;
    }

    public function getSymptom_name(){
      return $this->symptom_name;
    }

    public function getStart_date(){
      return $this->start_date;
    }

    public function getEnd_date(){
      return $this->end_date;
    }

    public function getNotes(){
      return $this->notes;
    }

    public function getTime(){
      return $this->time;
    }

  }
?>