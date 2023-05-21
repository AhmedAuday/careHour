<?php
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/config.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/encrypt.inc.php';

  class Disabilities extends Database {
    private $sqlCondition = 1;
    private $id;
    private $patient_id;
    private $disability_name;
    private $onset_date;
    private $notes;
    private $time;

    public function __construct($id = null){
      $this->time = time();
      if($id != null){
        $this->setId($id);
        if($id != $this->id){
          exit('');
        }
        $sql = "SELECT * FROM `disabilities` WHERE `id`=$this->id";
        $result = $this->db()->query($sql);
        if($result->rowCount() > 0){
          $row = $result->fetch();
          $this->id = $row['id'];
          $this->patient_id = $row['patient_id'];
          $this->disability_name = $row['disability_name'];
          $this->onset_date = $row['onset_date'];
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
      $sql = "SELECT * FROM `disabilities` WHERE $this->sqlCondition ORDER BY `id` LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function getAllReversed($limit = 1000000){
      if(!is_numeric($limit)){ return '[]'; }
      $sql = "SELECT * FROM `disabilities` WHERE $this->sqlCondition ORDER BY `id` DESC LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function getNumberOfRows(){
      $sql = "SELECT COUNT(*) AS 'numberOfRows' FROM `disabilities` WHERE $this->sqlCondition";
      $result = $this->db()->query($sql);
      $row = $result->fetch();
      return $row['numberOfRows'];
    }

    public function getById(){
      $sql = "SELECT * FROM `disabilities` WHERE `id`='$this->id'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->patient_id = $row['patient_id'];
        $this->disability_name = $row['disability_name'];
        $this->onset_date = $row['onset_date'];
        $this->notes = $row['notes'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByPatient_id(){
      $sql = "SELECT * FROM `disabilities` WHERE `patient_id`='$this->patient_id'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->patient_id = $row['patient_id'];
        $this->disability_name = $row['disability_name'];
        $this->onset_date = $row['onset_date'];
        $this->notes = $row['notes'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByDisability_name(){
      $sql = "SELECT * FROM `disabilities` WHERE `disability_name`='$this->disability_name'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->patient_id = $row['patient_id'];
        $this->disability_name = $row['disability_name'];
        $this->onset_date = $row['onset_date'];
        $this->notes = $row['notes'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByOnset_date(){
      $sql = "SELECT * FROM `disabilities` WHERE `onset_date`='$this->onset_date'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->patient_id = $row['patient_id'];
        $this->disability_name = $row['disability_name'];
        $this->onset_date = $row['onset_date'];
        $this->notes = $row['notes'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByNotes(){
      $sql = "SELECT * FROM `disabilities` WHERE `notes`='$this->notes'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->patient_id = $row['patient_id'];
        $this->disability_name = $row['disability_name'];
        $this->onset_date = $row['onset_date'];
        $this->notes = $row['notes'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByTime(){
      $sql = "SELECT * FROM `disabilities` WHERE `time`='$this->time'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->patient_id = $row['patient_id'];
        $this->disability_name = $row['disability_name'];
        $this->onset_date = $row['onset_date'];
        $this->notes = $row['notes'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getLastRow(){
      $sql = "SELECT * FROM `disabilities` WHERE $this->sqlCondition ORDER BY `id` DESC";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->patient_id = $row['patient_id'];
        $this->disability_name = $row['disability_name'];
        $this->onset_date = $row['onset_date'];
        $this->notes = $row['notes'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getFirstRow(){
      $sql = "SELECT * FROM `disabilities` WHERE $this->sqlCondition ORDER BY `id`";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->patient_id = $row['patient_id'];
        $this->disability_name = $row['disability_name'];
        $this->onset_date = $row['onset_date'];
        $this->notes = $row['notes'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getBySet($limit){
      if(!is_numeric($limit)){ return '[]'; }
      $sql = "SELECT * FROM `disabilities` WHERE `id` LIKE '%$this->id%' AND `patient_id` LIKE '%$this->patient_id%' AND `disability_name` LIKE '%$this->disability_name%' AND `onset_date` LIKE '%$this->onset_date%' AND `notes` LIKE '%$this->notes%' AND `time` LIKE '%$this->time%' LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function add(){
      $sql = "INSERT INTO `disabilities` (`id`, `patient_id`, `disability_name`, `onset_date`, `notes`, `time`) VALUES 
      ('$this->id', '$this->patient_id', '$this->disability_name', '$this->onset_date', '$this->notes', '$this->time')";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function update(){
      $sql = "UPDATE `disabilities` SET `id`='$this->id', `patient_id`='$this->patient_id', `disability_name`='$this->disability_name', `onset_date`='$this->onset_date', `notes`='$this->notes', `time`='$this->time' WHERE `id`='$this->id'";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function delete() {
      $sql = "DELETE FROM `disabilities` WHERE `id`='$this->id'";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function giveIdentity($days){
      setcookie('disabilities', encode("$this->id"), time() + (86400 * $days), "/");
    }

    public function getIdentity($days){
      if(isset($_COOKIE['disabilities'])){
        decode($_COOKIE['disabilities']);
      }else{return false;}
    }

    public function deleteIdentity($days){
      setcookie("disabilities", '', time() - 3600);
    }

    public function giveAuthority(){
      $_SESSION['disabilities'] = encrypt($this->id);
      $_SESSION['disabilities_id'] = $this->id;
    }

    public function getAuthority(){
      if(isset($_SESSION['disabilities']) && isset($_SESSION['disabilities_id'])){
        $tmp_id = filter($_SESSION['disabilities_id']);
        $sql = "SELECT * from `disabilities` WHERE `id`='$tmp_id'";
        $result = $this->db()->query($sql);
        $row = $result->fetch();
        if(encrypt($row['id']) == $_SESSION['disabilities']){
          return $_SESSION['disabilities_id'];
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

    public function setDisability_name($disability_name){
      if(is_string($disability_name)){
        $this->disability_name = filter($disability_name);
        return true;
      }else{
        return false;
      }
    }

    public function setOnset_date($onset_date){
      if(is_numeric($onset_date)){
        $this->onset_date = filter($onset_date);
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

    public function getDisability_name(){
      return $this->disability_name;
    }

    public function getOnset_date(){
      return $this->onset_date;
    }

    public function getNotes(){
      return $this->notes;
    }

    public function getTime(){
      return $this->time;
    }

  }
?>