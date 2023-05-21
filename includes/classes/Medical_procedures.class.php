<?php
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/config.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/encrypt.inc.php';

  class Medical_procedures extends Database {
    private $sqlCondition = 1;
    private $id;
    private $patient_id;
    private $doctor_id;
    private $procedure_date;
    private $procedure_type;
    private $procedure_notes;
    private $time;

    public function __construct($id = null){
      $this->time = time();
      if($id != null){
        $this->setId($id);
        if($id != $this->id){
          exit('');
        }
        $sql = "SELECT * FROM `medical_procedures` WHERE `id`=$this->id";
        $result = $this->db()->query($sql);
        if($result->rowCount() > 0){
          $row = $result->fetch();
          $this->id = $row['id'];
          $this->patient_id = $row['patient_id'];
          $this->doctor_id = $row['doctor_id'];
          $this->procedure_date = $row['procedure_date'];
          $this->procedure_type = $row['procedure_type'];
          $this->procedure_notes = $row['procedure_notes'];
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
      $sql = "SELECT * FROM `medical_procedures` WHERE $this->sqlCondition ORDER BY `id` LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function getAllReversed($limit = 1000000){
      if(!is_numeric($limit)){ return '[]'; }
      $sql = "SELECT * FROM `medical_procedures` WHERE $this->sqlCondition ORDER BY `id` DESC LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function getNumberOfRows(){
      $sql = "SELECT COUNT(*) AS 'numberOfRows' FROM `medical_procedures` WHERE $this->sqlCondition";
      $result = $this->db()->query($sql);
      $row = $result->fetch();
      return $row['numberOfRows'];
    }

    public function getById(){
      $sql = "SELECT * FROM `medical_procedures` WHERE `id`='$this->id'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->patient_id = $row['patient_id'];
        $this->doctor_id = $row['doctor_id'];
        $this->procedure_date = $row['procedure_date'];
        $this->procedure_type = $row['procedure_type'];
        $this->procedure_notes = $row['procedure_notes'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByPatient_id(){
      $sql = "SELECT * FROM `medical_procedures` WHERE `patient_id`='$this->patient_id'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->patient_id = $row['patient_id'];
        $this->doctor_id = $row['doctor_id'];
        $this->procedure_date = $row['procedure_date'];
        $this->procedure_type = $row['procedure_type'];
        $this->procedure_notes = $row['procedure_notes'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByDoctor_id(){
      $sql = "SELECT * FROM `medical_procedures` WHERE `doctor_id`='$this->doctor_id'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->patient_id = $row['patient_id'];
        $this->doctor_id = $row['doctor_id'];
        $this->procedure_date = $row['procedure_date'];
        $this->procedure_type = $row['procedure_type'];
        $this->procedure_notes = $row['procedure_notes'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByProcedure_date(){
      $sql = "SELECT * FROM `medical_procedures` WHERE `procedure_date`='$this->procedure_date'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->patient_id = $row['patient_id'];
        $this->doctor_id = $row['doctor_id'];
        $this->procedure_date = $row['procedure_date'];
        $this->procedure_type = $row['procedure_type'];
        $this->procedure_notes = $row['procedure_notes'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByProcedure_type(){
      $sql = "SELECT * FROM `medical_procedures` WHERE `procedure_type`='$this->procedure_type'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->patient_id = $row['patient_id'];
        $this->doctor_id = $row['doctor_id'];
        $this->procedure_date = $row['procedure_date'];
        $this->procedure_type = $row['procedure_type'];
        $this->procedure_notes = $row['procedure_notes'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByProcedure_notes(){
      $sql = "SELECT * FROM `medical_procedures` WHERE `procedure_notes`='$this->procedure_notes'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->patient_id = $row['patient_id'];
        $this->doctor_id = $row['doctor_id'];
        $this->procedure_date = $row['procedure_date'];
        $this->procedure_type = $row['procedure_type'];
        $this->procedure_notes = $row['procedure_notes'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByTime(){
      $sql = "SELECT * FROM `medical_procedures` WHERE `time`='$this->time'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->patient_id = $row['patient_id'];
        $this->doctor_id = $row['doctor_id'];
        $this->procedure_date = $row['procedure_date'];
        $this->procedure_type = $row['procedure_type'];
        $this->procedure_notes = $row['procedure_notes'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getLastRow(){
      $sql = "SELECT * FROM `medical_procedures` WHERE $this->sqlCondition ORDER BY `id` DESC";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->patient_id = $row['patient_id'];
        $this->doctor_id = $row['doctor_id'];
        $this->procedure_date = $row['procedure_date'];
        $this->procedure_type = $row['procedure_type'];
        $this->procedure_notes = $row['procedure_notes'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getFirstRow(){
      $sql = "SELECT * FROM `medical_procedures` WHERE $this->sqlCondition ORDER BY `id`";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->patient_id = $row['patient_id'];
        $this->doctor_id = $row['doctor_id'];
        $this->procedure_date = $row['procedure_date'];
        $this->procedure_type = $row['procedure_type'];
        $this->procedure_notes = $row['procedure_notes'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getBySet($limit){
      if(!is_numeric($limit)){ return '[]'; }
      $sql = "SELECT * FROM `medical_procedures` WHERE `id` LIKE '%$this->id%' AND `patient_id` LIKE '%$this->patient_id%' AND `doctor_id` LIKE '%$this->doctor_id%' AND `procedure_date` LIKE '%$this->procedure_date%' AND `procedure_type` LIKE '%$this->procedure_type%' AND `procedure_notes` LIKE '%$this->procedure_notes%' AND `time` LIKE '%$this->time%' LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function add(){
      $sql = "INSERT INTO `medical_procedures` (`id`, `patient_id`, `doctor_id`, `procedure_date`, `procedure_type`, `procedure_notes`, `time`) VALUES 
      ('$this->id', '$this->patient_id', '$this->doctor_id', '$this->procedure_date', '$this->procedure_type', '$this->procedure_notes', '$this->time')";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function update(){
      $sql = "UPDATE `medical_procedures` SET `id`='$this->id', `patient_id`='$this->patient_id', `doctor_id`='$this->doctor_id', `procedure_date`='$this->procedure_date', `procedure_type`='$this->procedure_type', `procedure_notes`='$this->procedure_notes', `time`='$this->time' WHERE `id`='$this->id'";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function delete() {
      $sql = "DELETE FROM `medical_procedures` WHERE `id`='$this->id'";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function giveIdentity($days){
      setcookie('medical_procedures', encode("$this->id"), time() + (86400 * $days), "/");
    }

    public function getIdentity($days){
      if(isset($_COOKIE['medical_procedures'])){
        decode($_COOKIE['medical_procedures']);
      }else{return false;}
    }

    public function deleteIdentity($days){
      setcookie("medical_procedures", '', time() - 3600);
    }

    public function giveAuthority(){
      $_SESSION['medical_procedures'] = encrypt($this->id);
      $_SESSION['medical_procedures_id'] = $this->id;
    }

    public function getAuthority(){
      if(isset($_SESSION['medical_procedures']) && isset($_SESSION['medical_procedures_id'])){
        $tmp_id = filter($_SESSION['medical_procedures_id']);
        $sql = "SELECT * from `medical_procedures` WHERE `id`='$tmp_id'";
        $result = $this->db()->query($sql);
        $row = $result->fetch();
        if(encrypt($row['id']) == $_SESSION['medical_procedures']){
          return $_SESSION['medical_procedures_id'];
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

    public function setProcedure_date($procedure_date){
      if(is_numeric($procedure_date)){
        $this->procedure_date = filter($procedure_date);
        return true;
      }else{
        return false;
      }
    }

    public function setProcedure_type($procedure_type){
      if(is_string($procedure_type)){
        $this->procedure_type = filter($procedure_type);
        return true;
      }else{
        return false;
      }
    }

    public function setProcedure_notes($procedure_notes){
      if(is_string($procedure_notes)){
        $this->procedure_notes = filter($procedure_notes);
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

    public function getDoctor_id(){
      return $this->doctor_id;
    }

    public function getProcedure_date(){
      return $this->procedure_date;
    }

    public function getProcedure_type(){
      return $this->procedure_type;
    }

    public function getProcedure_notes(){
      return $this->procedure_notes;
    }

    public function getTime(){
      return $this->time;
    }

  }
?>