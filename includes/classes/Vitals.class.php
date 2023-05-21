<?php
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/config.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/encrypt.inc.php';

  class Vitals extends Database {
    private $sqlCondition = 1;
    private $id;
    private $patient_id;
    private $date_time;
    private $temperature;
    private $blood_pressure;
    private $heart_rate;
    private $respiratory_rate;
    private $time;

    public function __construct($id = null){
      $this->time = time();
      if($id != null){
        $this->setId($id);
        if($id != $this->id){
          exit('');
        }
        $sql = "SELECT * FROM `vitals` WHERE `id`=$this->id";
        $result = $this->db()->query($sql);
        if($result->rowCount() > 0){
          $row = $result->fetch();
          $this->id = $row['id'];
          $this->patient_id = $row['patient_id'];
          $this->date_time = $row['date_time'];
          $this->temperature = $row['temperature'];
          $this->blood_pressure = $row['blood_pressure'];
          $this->heart_rate = $row['heart_rate'];
          $this->respiratory_rate = $row['respiratory_rate'];
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
      $sql = "SELECT * FROM `vitals` WHERE $this->sqlCondition ORDER BY `id` LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function getAllReversed($limit = 1000000){
      if(!is_numeric($limit)){ return '[]'; }
      $sql = "SELECT * FROM `vitals` WHERE $this->sqlCondition ORDER BY `id` DESC LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function getNumberOfRows(){
      $sql = "SELECT COUNT(*) AS 'numberOfRows' FROM `vitals` WHERE $this->sqlCondition";
      $result = $this->db()->query($sql);
      $row = $result->fetch();
      return $row['numberOfRows'];
    }

    public function getById(){
      $sql = "SELECT * FROM `vitals` WHERE `id`='$this->id'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->patient_id = $row['patient_id'];
        $this->date_time = $row['date_time'];
        $this->temperature = $row['temperature'];
        $this->blood_pressure = $row['blood_pressure'];
        $this->heart_rate = $row['heart_rate'];
        $this->respiratory_rate = $row['respiratory_rate'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByPatient_id(){
      $sql = "SELECT * FROM `vitals` WHERE `patient_id`='$this->patient_id'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->patient_id = $row['patient_id'];
        $this->date_time = $row['date_time'];
        $this->temperature = $row['temperature'];
        $this->blood_pressure = $row['blood_pressure'];
        $this->heart_rate = $row['heart_rate'];
        $this->respiratory_rate = $row['respiratory_rate'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByDate_time(){
      $sql = "SELECT * FROM `vitals` WHERE `date_time`='$this->date_time'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->patient_id = $row['patient_id'];
        $this->date_time = $row['date_time'];
        $this->temperature = $row['temperature'];
        $this->blood_pressure = $row['blood_pressure'];
        $this->heart_rate = $row['heart_rate'];
        $this->respiratory_rate = $row['respiratory_rate'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByTemperature(){
      $sql = "SELECT * FROM `vitals` WHERE `temperature`='$this->temperature'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->patient_id = $row['patient_id'];
        $this->date_time = $row['date_time'];
        $this->temperature = $row['temperature'];
        $this->blood_pressure = $row['blood_pressure'];
        $this->heart_rate = $row['heart_rate'];
        $this->respiratory_rate = $row['respiratory_rate'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByBlood_pressure(){
      $sql = "SELECT * FROM `vitals` WHERE `blood_pressure`='$this->blood_pressure'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->patient_id = $row['patient_id'];
        $this->date_time = $row['date_time'];
        $this->temperature = $row['temperature'];
        $this->blood_pressure = $row['blood_pressure'];
        $this->heart_rate = $row['heart_rate'];
        $this->respiratory_rate = $row['respiratory_rate'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByHeart_rate(){
      $sql = "SELECT * FROM `vitals` WHERE `heart_rate`='$this->heart_rate'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->patient_id = $row['patient_id'];
        $this->date_time = $row['date_time'];
        $this->temperature = $row['temperature'];
        $this->blood_pressure = $row['blood_pressure'];
        $this->heart_rate = $row['heart_rate'];
        $this->respiratory_rate = $row['respiratory_rate'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByRespiratory_rate(){
      $sql = "SELECT * FROM `vitals` WHERE `respiratory_rate`='$this->respiratory_rate'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->patient_id = $row['patient_id'];
        $this->date_time = $row['date_time'];
        $this->temperature = $row['temperature'];
        $this->blood_pressure = $row['blood_pressure'];
        $this->heart_rate = $row['heart_rate'];
        $this->respiratory_rate = $row['respiratory_rate'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByTime(){
      $sql = "SELECT * FROM `vitals` WHERE `time`='$this->time'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->patient_id = $row['patient_id'];
        $this->date_time = $row['date_time'];
        $this->temperature = $row['temperature'];
        $this->blood_pressure = $row['blood_pressure'];
        $this->heart_rate = $row['heart_rate'];
        $this->respiratory_rate = $row['respiratory_rate'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getLastRow(){
      $sql = "SELECT * FROM `vitals` WHERE $this->sqlCondition ORDER BY `id` DESC";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->patient_id = $row['patient_id'];
        $this->date_time = $row['date_time'];
        $this->temperature = $row['temperature'];
        $this->blood_pressure = $row['blood_pressure'];
        $this->heart_rate = $row['heart_rate'];
        $this->respiratory_rate = $row['respiratory_rate'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getFirstRow(){
      $sql = "SELECT * FROM `vitals` WHERE $this->sqlCondition ORDER BY `id`";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->patient_id = $row['patient_id'];
        $this->date_time = $row['date_time'];
        $this->temperature = $row['temperature'];
        $this->blood_pressure = $row['blood_pressure'];
        $this->heart_rate = $row['heart_rate'];
        $this->respiratory_rate = $row['respiratory_rate'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getBySet($limit){
      if(!is_numeric($limit)){ return '[]'; }
      $sql = "SELECT * FROM `vitals` WHERE `id` LIKE '%$this->id%' AND `patient_id` LIKE '%$this->patient_id%' AND `date_time` LIKE '%$this->date_time%' AND `temperature` LIKE '%$this->temperature%' AND `blood_pressure` LIKE '%$this->blood_pressure%' AND `heart_rate` LIKE '%$this->heart_rate%' AND `respiratory_rate` LIKE '%$this->respiratory_rate%' AND `time` LIKE '%$this->time%' LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function add(){
      $sql = "INSERT INTO `vitals` (`id`, `patient_id`, `date_time`, `temperature`, `blood_pressure`, `heart_rate`, `respiratory_rate`, `time`) VALUES 
      ('$this->id', '$this->patient_id', '$this->date_time', '$this->temperature', '$this->blood_pressure', '$this->heart_rate', '$this->respiratory_rate', '$this->time')";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function update(){
      $sql = "UPDATE `vitals` SET `id`='$this->id', `patient_id`='$this->patient_id', `date_time`='$this->date_time', `temperature`='$this->temperature', `blood_pressure`='$this->blood_pressure', `heart_rate`='$this->heart_rate', `respiratory_rate`='$this->respiratory_rate', `time`='$this->time' WHERE `id`='$this->id'";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function delete() {
      $sql = "DELETE FROM `vitals` WHERE `id`='$this->id'";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function giveIdentity($days){
      setcookie('vitals', encode("$this->id"), time() + (86400 * $days), "/");
    }

    public function getIdentity($days){
      if(isset($_COOKIE['vitals'])){
        decode($_COOKIE['vitals']);
      }else{return false;}
    }

    public function deleteIdentity($days){
      setcookie("vitals", '', time() - 3600);
    }

    public function giveAuthority(){
      $_SESSION['vitals'] = encrypt($this->id);
      $_SESSION['vitals_id'] = $this->id;
    }

    public function getAuthority(){
      if(isset($_SESSION['vitals']) && isset($_SESSION['vitals_id'])){
        $tmp_id = filter($_SESSION['vitals_id']);
        $sql = "SELECT * from `vitals` WHERE `id`='$tmp_id'";
        $result = $this->db()->query($sql);
        $row = $result->fetch();
        if(encrypt($row['id']) == $_SESSION['vitals']){
          return $_SESSION['vitals_id'];
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

    public function setDate_time($date_time){
      if(is_numeric($date_time)){
        $this->date_time = filter($date_time);
        return true;
      }else{
        return false;
      }
    }

    public function setTemperature($temperature){
      if(is_numeric($temperature)){
        $this->temperature = filter($temperature);
        return true;
      }else{
        return false;
      }
    }

    public function setBlood_pressure($blood_pressure){
      if(is_string($blood_pressure)){
        $this->blood_pressure = filter($blood_pressure);
        return true;
      }else{
        return false;
      }
    }

    public function setHeart_rate($heart_rate){
      if(is_numeric($heart_rate)){
        $this->heart_rate = filter($heart_rate);
        return true;
      }else{
        return false;
      }
    }

    public function setRespiratory_rate($respiratory_rate){
      if(is_numeric($respiratory_rate)){
        $this->respiratory_rate = filter($respiratory_rate);
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

    public function getDate_time(){
      return $this->date_time;
    }

    public function getTemperature(){
      return $this->temperature;
    }

    public function getBlood_pressure(){
      return $this->blood_pressure;
    }

    public function getHeart_rate(){
      return $this->heart_rate;
    }

    public function getRespiratory_rate(){
      return $this->respiratory_rate;
    }

    public function getTime(){
      return $this->time;
    }

  }
?>