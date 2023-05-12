<?php
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/config.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/encrypt.inc.php';

  class Imaging_tests extends Database {
    private $sqlCondition = 1;
    private $id;
    private $patient_id;
    private $doctor_id;
    private $test_name;
    private $test_date;
    private $test_results;
    private $timee;
    private $time;

    public function __construct($id = null){
      $this->time = time();
      if($id != null){
        $this->setId($id);
        if($id != $this->id){
          exit('');
        }
        $sql = "SELECT * FROM `imaging_tests` WHERE `id`=$this->id";
        $result = $this->db()->query($sql);
        if($result->rowCount() > 0){
          $row = $result->fetch();
          $this->id = $row['id'];
          $this->patient_id = $row['patient_id'];
          $this->doctor_id = $row['doctor_id'];
          $this->test_name = $row['test_name'];
          $this->test_date = $row['test_date'];
          $this->test_results = $row['test_results'];
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
      $sql = "SELECT * FROM `imaging_tests` WHERE $this->sqlCondition ORDER BY `id` LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function getAllReversed($limit = 1000000){
      if(!is_numeric($limit)){ return '[]'; }
      $sql = "SELECT * FROM `imaging_tests` WHERE $this->sqlCondition ORDER BY `id` DESC LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function getNumberOfRows(){
      $sql = "SELECT COUNT(*) AS 'numberOfRows' FROM `imaging_tests` WHERE $this->sqlCondition";
      $result = $this->db()->query($sql);
      $row = $result->fetch();
      return $row['numberOfRows'];
    }

    public function getById(){
      $sql = "SELECT * FROM `imaging_tests` WHERE `id`='$this->id'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->patient_id = $row['patient_id'];
        $this->doctor_id = $row['doctor_id'];
        $this->test_name = $row['test_name'];
        $this->test_date = $row['test_date'];
        $this->test_results = $row['test_results'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByPatient_id(){
      $sql = "SELECT * FROM `imaging_tests` WHERE `patient_id`='$this->patient_id'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->patient_id = $row['patient_id'];
        $this->doctor_id = $row['doctor_id'];
        $this->test_name = $row['test_name'];
        $this->test_date = $row['test_date'];
        $this->test_results = $row['test_results'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByDoctor_id(){
      $sql = "SELECT * FROM `imaging_tests` WHERE `doctor_id`='$this->doctor_id'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->patient_id = $row['patient_id'];
        $this->doctor_id = $row['doctor_id'];
        $this->test_name = $row['test_name'];
        $this->test_date = $row['test_date'];
        $this->test_results = $row['test_results'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByTest_name(){
      $sql = "SELECT * FROM `imaging_tests` WHERE `test_name`='$this->test_name'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->patient_id = $row['patient_id'];
        $this->doctor_id = $row['doctor_id'];
        $this->test_name = $row['test_name'];
        $this->test_date = $row['test_date'];
        $this->test_results = $row['test_results'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByTest_date(){
      $sql = "SELECT * FROM `imaging_tests` WHERE `test_date`='$this->test_date'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->patient_id = $row['patient_id'];
        $this->doctor_id = $row['doctor_id'];
        $this->test_name = $row['test_name'];
        $this->test_date = $row['test_date'];
        $this->test_results = $row['test_results'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByTest_results(){
      $sql = "SELECT * FROM `imaging_tests` WHERE `test_results`='$this->test_results'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->patient_id = $row['patient_id'];
        $this->doctor_id = $row['doctor_id'];
        $this->test_name = $row['test_name'];
        $this->test_date = $row['test_date'];
        $this->test_results = $row['test_results'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByTimee(){
      $sql = "SELECT * FROM `imaging_tests` WHERE `timee`='$this->timee'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->patient_id = $row['patient_id'];
        $this->doctor_id = $row['doctor_id'];
        $this->test_name = $row['test_name'];
        $this->test_date = $row['test_date'];
        $this->test_results = $row['test_results'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByTime(){
      $sql = "SELECT * FROM `imaging_tests` WHERE `time`='$this->time'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->patient_id = $row['patient_id'];
        $this->doctor_id = $row['doctor_id'];
        $this->test_name = $row['test_name'];
        $this->test_date = $row['test_date'];
        $this->test_results = $row['test_results'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getLastRow(){
      $sql = "SELECT * FROM `imaging_tests` WHERE $this->sqlCondition ORDER BY `id` DESC";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->patient_id = $row['patient_id'];
        $this->doctor_id = $row['doctor_id'];
        $this->test_name = $row['test_name'];
        $this->test_date = $row['test_date'];
        $this->test_results = $row['test_results'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getFirstRow(){
      $sql = "SELECT * FROM `imaging_tests` WHERE $this->sqlCondition ORDER BY `id`";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->patient_id = $row['patient_id'];
        $this->doctor_id = $row['doctor_id'];
        $this->test_name = $row['test_name'];
        $this->test_date = $row['test_date'];
        $this->test_results = $row['test_results'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getBySet($limit){
      if(!is_numeric($limit)){ return '[]'; }
      $sql = "SELECT * FROM `imaging_tests` WHERE `id` LIKE '%$this->id%' AND `patient_id` LIKE '%$this->patient_id%' AND `doctor_id` LIKE '%$this->doctor_id%' AND `test_name` LIKE '%$this->test_name%' AND `test_date` LIKE '%$this->test_date%' AND `test_results` LIKE '%$this->test_results%' AND `timee` LIKE '%$this->timee%' AND `time` LIKE '%$this->time%' LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function add(){
      $sql = "INSERT INTO `imaging_tests` (`id`, `patient_id`, `doctor_id`, `test_name`, `test_date`, `test_results`, `timee`, `time`) VALUES 
      ('$this->id', '$this->patient_id', '$this->doctor_id', '$this->test_name', '$this->test_date', '$this->test_results', '$this->timee', '$this->time')";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function update(){
      $sql = "UPDATE `imaging_tests` SET `id`='$this->id', `patient_id`='$this->patient_id', `doctor_id`='$this->doctor_id', `test_name`='$this->test_name', `test_date`='$this->test_date', `test_results`='$this->test_results', `timee`='$this->timee', `time`='$this->time' WHERE `id`='$this->id'";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function delete() {
      $sql = "DELETE FROM `imaging_tests` WHERE `id`='$this->id'";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function giveIdentity($days){
      setcookie('imaging_tests', encode("$this->id"), time() + (86400 * $days), "/");
    }

    public function getIdentity($days){
      if(isset($_COOKIE['imaging_tests'])){
        decode($_COOKIE['imaging_tests']);
      }else{return false;}
    }

    public function deleteIdentity($days){
      setcookie("imaging_tests", '', time() - 3600);
    }

    public function giveAuthority(){
      $_SESSION['imaging_tests'] = encrypt($this->id);
      $_SESSION['imaging_tests_id'] = $this->id;
    }

    public function getAuthority(){
      if(isset($_SESSION['imaging_tests']) && isset($_SESSION['imaging_tests_id'])){
        $tmp_id = filter($_SESSION['imaging_tests_id']);
        $sql = "SELECT * from `imaging_tests` WHERE `id`='$tmp_id'";
        $result = $this->db()->query($sql);
        $row = $result->fetch();
        if(encrypt($row['id']) == $_SESSION['imaging_tests']){
          return $_SESSION['imaging_tests_id'];
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

    public function setTest_name($test_name){
      if(is_string($test_name)){
        $this->test_name = filter($test_name);
        return true;
      }else{
        return false;
      }
    }

    public function setTest_date($test_date){
      if(is_string($test_date)){
        $this->test_date = filter($test_date);
        return true;
      }else{
        return false;
      }
    }

    public function setTest_results($test_results){
      if(is_string($test_results)){
        $this->test_results = filter($test_results);
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

    public function getTest_name(){
      return $this->test_name;
    }

    public function getTest_date(){
      return $this->test_date;
    }

    public function getTest_results(){
      return $this->test_results;
    }

    public function getTimee(){
      return $this->timee;
    }

    public function getTime(){
      return $this->time;
    }

  }
?>