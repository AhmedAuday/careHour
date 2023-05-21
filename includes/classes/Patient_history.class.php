<?php
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/config.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/encrypt.inc.php';

  class Patient_history extends Database {
    private $sqlCondition = 1;
    private $id;
    private $files_id;
    private $diagnosis;
    private $treatment;
    private $notes;
    private $created_at;
    private $updated_at;
    private $time;

    public function __construct($id = null){
      $this->time = time();
      if($id != null){
        $this->setId($id);
        if($id != $this->id){
          exit('');
        }
        $sql = "SELECT * FROM `patient_history` WHERE `id`=$this->id";
        $result = $this->db()->query($sql);
        if($result->rowCount() > 0){
          $row = $result->fetch();
          $this->id = $row['id'];
          $this->files_id = $row['files_id'];
          $this->diagnosis = $row['diagnosis'];
          $this->treatment = $row['treatment'];
          $this->notes = $row['notes'];
          $this->created_at = $row['created_at'];
          $this->updated_at = $row['updated_at'];
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
      $sql = "SELECT * FROM `patient_history` WHERE $this->sqlCondition ORDER BY `id` LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function getAllReversed($limit = 1000000){
      if(!is_numeric($limit)){ return '[]'; }
      $sql = "SELECT * FROM `patient_history` WHERE $this->sqlCondition ORDER BY `id` DESC LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function getNumberOfRows(){
      $sql = "SELECT COUNT(*) AS 'numberOfRows' FROM `patient_history` WHERE $this->sqlCondition";
      $result = $this->db()->query($sql);
      $row = $result->fetch();
      return $row['numberOfRows'];
    }

    public function getById(){
      $sql = "SELECT * FROM `patient_history` WHERE `id`='$this->id'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->files_id = $row['files_id'];
        $this->diagnosis = $row['diagnosis'];
        $this->treatment = $row['treatment'];
        $this->notes = $row['notes'];
        $this->created_at = $row['created_at'];
        $this->updated_at = $row['updated_at'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByFiles_id(){
      $sql = "SELECT * FROM `patient_history` WHERE `files_id`='$this->files_id'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->files_id = $row['files_id'];
        $this->diagnosis = $row['diagnosis'];
        $this->treatment = $row['treatment'];
        $this->notes = $row['notes'];
        $this->created_at = $row['created_at'];
        $this->updated_at = $row['updated_at'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByDiagnosis(){
      $sql = "SELECT * FROM `patient_history` WHERE `diagnosis`='$this->diagnosis'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->files_id = $row['files_id'];
        $this->diagnosis = $row['diagnosis'];
        $this->treatment = $row['treatment'];
        $this->notes = $row['notes'];
        $this->created_at = $row['created_at'];
        $this->updated_at = $row['updated_at'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByTreatment(){
      $sql = "SELECT * FROM `patient_history` WHERE `treatment`='$this->treatment'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->files_id = $row['files_id'];
        $this->diagnosis = $row['diagnosis'];
        $this->treatment = $row['treatment'];
        $this->notes = $row['notes'];
        $this->created_at = $row['created_at'];
        $this->updated_at = $row['updated_at'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByNotes(){
      $sql = "SELECT * FROM `patient_history` WHERE `notes`='$this->notes'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->files_id = $row['files_id'];
        $this->diagnosis = $row['diagnosis'];
        $this->treatment = $row['treatment'];
        $this->notes = $row['notes'];
        $this->created_at = $row['created_at'];
        $this->updated_at = $row['updated_at'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByCreated_at(){
      $sql = "SELECT * FROM `patient_history` WHERE `created_at`='$this->created_at'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->files_id = $row['files_id'];
        $this->diagnosis = $row['diagnosis'];
        $this->treatment = $row['treatment'];
        $this->notes = $row['notes'];
        $this->created_at = $row['created_at'];
        $this->updated_at = $row['updated_at'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByUpdated_at(){
      $sql = "SELECT * FROM `patient_history` WHERE `updated_at`='$this->updated_at'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->files_id = $row['files_id'];
        $this->diagnosis = $row['diagnosis'];
        $this->treatment = $row['treatment'];
        $this->notes = $row['notes'];
        $this->created_at = $row['created_at'];
        $this->updated_at = $row['updated_at'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByTime(){
      $sql = "SELECT * FROM `patient_history` WHERE `time`='$this->time'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->files_id = $row['files_id'];
        $this->diagnosis = $row['diagnosis'];
        $this->treatment = $row['treatment'];
        $this->notes = $row['notes'];
        $this->created_at = $row['created_at'];
        $this->updated_at = $row['updated_at'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getLastRow(){
      $sql = "SELECT * FROM `patient_history` WHERE $this->sqlCondition ORDER BY `id` DESC";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->files_id = $row['files_id'];
        $this->diagnosis = $row['diagnosis'];
        $this->treatment = $row['treatment'];
        $this->notes = $row['notes'];
        $this->created_at = $row['created_at'];
        $this->updated_at = $row['updated_at'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getFirstRow(){
      $sql = "SELECT * FROM `patient_history` WHERE $this->sqlCondition ORDER BY `id`";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->files_id = $row['files_id'];
        $this->diagnosis = $row['diagnosis'];
        $this->treatment = $row['treatment'];
        $this->notes = $row['notes'];
        $this->created_at = $row['created_at'];
        $this->updated_at = $row['updated_at'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getBySet($limit){
      if(!is_numeric($limit)){ return '[]'; }
      $sql = "SELECT * FROM `patient_history` WHERE `id` LIKE '%$this->id%' AND `files_id` LIKE '%$this->files_id%' AND `diagnosis` LIKE '%$this->diagnosis%' AND `treatment` LIKE '%$this->treatment%' AND `notes` LIKE '%$this->notes%' AND `created_at` LIKE '%$this->created_at%' AND `updated_at` LIKE '%$this->updated_at%' AND `time` LIKE '%$this->time%' LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function add(){
      $sql = "INSERT INTO `patient_history` (`id`, `files_id`, `diagnosis`, `treatment`, `notes`, `created_at`, `updated_at`, `time`) VALUES 
      ('$this->id', '$this->files_id', '$this->diagnosis', '$this->treatment', '$this->notes', '$this->created_at', '$this->updated_at', '$this->time')";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function update(){
      $sql = "UPDATE `patient_history` SET `id`='$this->id', `files_id`='$this->files_id', `diagnosis`='$this->diagnosis', `treatment`='$this->treatment', `notes`='$this->notes', `created_at`='$this->created_at', `updated_at`='$this->updated_at', `time`='$this->time' WHERE `id`='$this->id'";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function delete() {
      $sql = "DELETE FROM `patient_history` WHERE `id`='$this->id'";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function giveIdentity($days){
      setcookie('patient_history', encode("$this->id"), time() + (86400 * $days), "/");
    }

    public function getIdentity($days){
      if(isset($_COOKIE['patient_history'])){
        decode($_COOKIE['patient_history']);
      }else{return false;}
    }

    public function deleteIdentity($days){
      setcookie("patient_history", '', time() - 3600);
    }

    public function giveAuthority(){
      $_SESSION['patient_history'] = encrypt($this->id);
      $_SESSION['patient_history_id'] = $this->id;
    }

    public function getAuthority(){
      if(isset($_SESSION['patient_history']) && isset($_SESSION['patient_history_id'])){
        $tmp_id = filter($_SESSION['patient_history_id']);
        $sql = "SELECT * from `patient_history` WHERE `id`='$tmp_id'";
        $result = $this->db()->query($sql);
        $row = $result->fetch();
        if(encrypt($row['id']) == $_SESSION['patient_history']){
          return $_SESSION['patient_history_id'];
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

    public function setFiles_id($files_id){
      if(is_numeric($files_id)){
        $this->files_id = filter($files_id);
        return true;
      }else{
        return false;
      }
    }

    public function setDiagnosis($diagnosis){
      if(is_string($diagnosis)){
        $this->diagnosis = filter($diagnosis);
        return true;
      }else{
        return false;
      }
    }

    public function setTreatment($treatment){
      if(is_string($treatment)){
        $this->treatment = filter($treatment);
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

    public function setCreated_at($created_at){
      if(is_numeric($created_at)){
        $this->created_at = filter($created_at);
        return true;
      }else{
        return false;
      }
    }

    public function setUpdated_at($updated_at){
      if(is_numeric($updated_at)){
        $this->updated_at = filter($updated_at);
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

    public function getFiles_id(){
      return $this->files_id;
    }

    public function getDiagnosis(){
      return $this->diagnosis;
    }

    public function getTreatment(){
      return $this->treatment;
    }

    public function getNotes(){
      return $this->notes;
    }

    public function getCreated_at(){
      return $this->created_at;
    }

    public function getUpdated_at(){
      return $this->updated_at;
    }

    public function getTime(){
      return $this->time;
    }

  }
?>