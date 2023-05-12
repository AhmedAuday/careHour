<?php
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/config.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/encrypt.inc.php';

  class Medical_records extends Database {
    private $sqlCondition = 1;
    private $id;
    private $doctor_id;
    private $patient_id;
    private $record_date;
    private $medical_condition;
    private $height;
    private $weight;
    private $blood_pressure;
    private $blood_sugar;
    private $treatment;
    private $description;
    private $diagnosis_date;
    private $timee;
    private $time;

    public function __construct($id = null){
      $this->time = time();
      if($id != null){
        $this->setId($id);
        if($id != $this->id){
          exit('');
        }
        $sql = "SELECT * FROM `medical_records` WHERE `id`=$this->id";
        $result = $this->db()->query($sql);
        if($result->rowCount() > 0){
          $row = $result->fetch();
          $this->id = $row['id'];
          $this->doctor_id = $row['doctor_id'];
          $this->patient_id = $row['patient_id'];
          $this->record_date = $row['record_date'];
          $this->medical_condition = $row['medical_condition'];
          $this->height = $row['height'];
          $this->weight = $row['weight'];
          $this->blood_pressure = $row['blood_pressure'];
          $this->blood_sugar = $row['blood_sugar'];
          $this->treatment = $row['treatment'];
          $this->description = $row['description'];
          $this->diagnosis_date = $row['diagnosis_date'];
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
      $sql = "SELECT * FROM `medical_records` WHERE $this->sqlCondition ORDER BY `id` LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function getAllReversed($limit = 1000000){
      if(!is_numeric($limit)){ return '[]'; }
      $sql = "SELECT * FROM `medical_records` WHERE $this->sqlCondition ORDER BY `id` DESC LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function getNumberOfRows(){
      $sql = "SELECT COUNT(*) AS 'numberOfRows' FROM `medical_records` WHERE $this->sqlCondition";
      $result = $this->db()->query($sql);
      $row = $result->fetch();
      return $row['numberOfRows'];
    }

    public function getById(){
      $sql = "SELECT * FROM `medical_records` WHERE `id`='$this->id'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->doctor_id = $row['doctor_id'];
        $this->patient_id = $row['patient_id'];
        $this->record_date = $row['record_date'];
        $this->medical_condition = $row['medical_condition'];
        $this->height = $row['height'];
        $this->weight = $row['weight'];
        $this->blood_pressure = $row['blood_pressure'];
        $this->blood_sugar = $row['blood_sugar'];
        $this->treatment = $row['treatment'];
        $this->description = $row['description'];
        $this->diagnosis_date = $row['diagnosis_date'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByDoctor_id(){
      $sql = "SELECT * FROM `medical_records` WHERE `doctor_id`='$this->doctor_id'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->doctor_id = $row['doctor_id'];
        $this->patient_id = $row['patient_id'];
        $this->record_date = $row['record_date'];
        $this->medical_condition = $row['medical_condition'];
        $this->height = $row['height'];
        $this->weight = $row['weight'];
        $this->blood_pressure = $row['blood_pressure'];
        $this->blood_sugar = $row['blood_sugar'];
        $this->treatment = $row['treatment'];
        $this->description = $row['description'];
        $this->diagnosis_date = $row['diagnosis_date'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByPatient_id(){
      $sql = "SELECT * FROM `medical_records` WHERE `patient_id`='$this->patient_id'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->doctor_id = $row['doctor_id'];
        $this->patient_id = $row['patient_id'];
        $this->record_date = $row['record_date'];
        $this->medical_condition = $row['medical_condition'];
        $this->height = $row['height'];
        $this->weight = $row['weight'];
        $this->blood_pressure = $row['blood_pressure'];
        $this->blood_sugar = $row['blood_sugar'];
        $this->treatment = $row['treatment'];
        $this->description = $row['description'];
        $this->diagnosis_date = $row['diagnosis_date'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByRecord_date(){
      $sql = "SELECT * FROM `medical_records` WHERE `record_date`='$this->record_date'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->doctor_id = $row['doctor_id'];
        $this->patient_id = $row['patient_id'];
        $this->record_date = $row['record_date'];
        $this->medical_condition = $row['medical_condition'];
        $this->height = $row['height'];
        $this->weight = $row['weight'];
        $this->blood_pressure = $row['blood_pressure'];
        $this->blood_sugar = $row['blood_sugar'];
        $this->treatment = $row['treatment'];
        $this->description = $row['description'];
        $this->diagnosis_date = $row['diagnosis_date'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByMedical_condition(){
      $sql = "SELECT * FROM `medical_records` WHERE `medical_condition`='$this->medical_condition'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->doctor_id = $row['doctor_id'];
        $this->patient_id = $row['patient_id'];
        $this->record_date = $row['record_date'];
        $this->medical_condition = $row['medical_condition'];
        $this->height = $row['height'];
        $this->weight = $row['weight'];
        $this->blood_pressure = $row['blood_pressure'];
        $this->blood_sugar = $row['blood_sugar'];
        $this->treatment = $row['treatment'];
        $this->description = $row['description'];
        $this->diagnosis_date = $row['diagnosis_date'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByHeight(){
      $sql = "SELECT * FROM `medical_records` WHERE `height`='$this->height'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->doctor_id = $row['doctor_id'];
        $this->patient_id = $row['patient_id'];
        $this->record_date = $row['record_date'];
        $this->medical_condition = $row['medical_condition'];
        $this->height = $row['height'];
        $this->weight = $row['weight'];
        $this->blood_pressure = $row['blood_pressure'];
        $this->blood_sugar = $row['blood_sugar'];
        $this->treatment = $row['treatment'];
        $this->description = $row['description'];
        $this->diagnosis_date = $row['diagnosis_date'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByWeight(){
      $sql = "SELECT * FROM `medical_records` WHERE `weight`='$this->weight'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->doctor_id = $row['doctor_id'];
        $this->patient_id = $row['patient_id'];
        $this->record_date = $row['record_date'];
        $this->medical_condition = $row['medical_condition'];
        $this->height = $row['height'];
        $this->weight = $row['weight'];
        $this->blood_pressure = $row['blood_pressure'];
        $this->blood_sugar = $row['blood_sugar'];
        $this->treatment = $row['treatment'];
        $this->description = $row['description'];
        $this->diagnosis_date = $row['diagnosis_date'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByBlood_pressure(){
      $sql = "SELECT * FROM `medical_records` WHERE `blood_pressure`='$this->blood_pressure'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->doctor_id = $row['doctor_id'];
        $this->patient_id = $row['patient_id'];
        $this->record_date = $row['record_date'];
        $this->medical_condition = $row['medical_condition'];
        $this->height = $row['height'];
        $this->weight = $row['weight'];
        $this->blood_pressure = $row['blood_pressure'];
        $this->blood_sugar = $row['blood_sugar'];
        $this->treatment = $row['treatment'];
        $this->description = $row['description'];
        $this->diagnosis_date = $row['diagnosis_date'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByBlood_sugar(){
      $sql = "SELECT * FROM `medical_records` WHERE `blood_sugar`='$this->blood_sugar'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->doctor_id = $row['doctor_id'];
        $this->patient_id = $row['patient_id'];
        $this->record_date = $row['record_date'];
        $this->medical_condition = $row['medical_condition'];
        $this->height = $row['height'];
        $this->weight = $row['weight'];
        $this->blood_pressure = $row['blood_pressure'];
        $this->blood_sugar = $row['blood_sugar'];
        $this->treatment = $row['treatment'];
        $this->description = $row['description'];
        $this->diagnosis_date = $row['diagnosis_date'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByTreatment(){
      $sql = "SELECT * FROM `medical_records` WHERE `treatment`='$this->treatment'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->doctor_id = $row['doctor_id'];
        $this->patient_id = $row['patient_id'];
        $this->record_date = $row['record_date'];
        $this->medical_condition = $row['medical_condition'];
        $this->height = $row['height'];
        $this->weight = $row['weight'];
        $this->blood_pressure = $row['blood_pressure'];
        $this->blood_sugar = $row['blood_sugar'];
        $this->treatment = $row['treatment'];
        $this->description = $row['description'];
        $this->diagnosis_date = $row['diagnosis_date'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByDescription(){
      $sql = "SELECT * FROM `medical_records` WHERE `description`='$this->description'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->doctor_id = $row['doctor_id'];
        $this->patient_id = $row['patient_id'];
        $this->record_date = $row['record_date'];
        $this->medical_condition = $row['medical_condition'];
        $this->height = $row['height'];
        $this->weight = $row['weight'];
        $this->blood_pressure = $row['blood_pressure'];
        $this->blood_sugar = $row['blood_sugar'];
        $this->treatment = $row['treatment'];
        $this->description = $row['description'];
        $this->diagnosis_date = $row['diagnosis_date'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByDiagnosis_date(){
      $sql = "SELECT * FROM `medical_records` WHERE `diagnosis_date`='$this->diagnosis_date'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->doctor_id = $row['doctor_id'];
        $this->patient_id = $row['patient_id'];
        $this->record_date = $row['record_date'];
        $this->medical_condition = $row['medical_condition'];
        $this->height = $row['height'];
        $this->weight = $row['weight'];
        $this->blood_pressure = $row['blood_pressure'];
        $this->blood_sugar = $row['blood_sugar'];
        $this->treatment = $row['treatment'];
        $this->description = $row['description'];
        $this->diagnosis_date = $row['diagnosis_date'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByTimee(){
      $sql = "SELECT * FROM `medical_records` WHERE `timee`='$this->timee'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->doctor_id = $row['doctor_id'];
        $this->patient_id = $row['patient_id'];
        $this->record_date = $row['record_date'];
        $this->medical_condition = $row['medical_condition'];
        $this->height = $row['height'];
        $this->weight = $row['weight'];
        $this->blood_pressure = $row['blood_pressure'];
        $this->blood_sugar = $row['blood_sugar'];
        $this->treatment = $row['treatment'];
        $this->description = $row['description'];
        $this->diagnosis_date = $row['diagnosis_date'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByTime(){
      $sql = "SELECT * FROM `medical_records` WHERE `time`='$this->time'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->doctor_id = $row['doctor_id'];
        $this->patient_id = $row['patient_id'];
        $this->record_date = $row['record_date'];
        $this->medical_condition = $row['medical_condition'];
        $this->height = $row['height'];
        $this->weight = $row['weight'];
        $this->blood_pressure = $row['blood_pressure'];
        $this->blood_sugar = $row['blood_sugar'];
        $this->treatment = $row['treatment'];
        $this->description = $row['description'];
        $this->diagnosis_date = $row['diagnosis_date'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getLastRow(){
      $sql = "SELECT * FROM `medical_records` WHERE $this->sqlCondition ORDER BY `id` DESC";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->doctor_id = $row['doctor_id'];
        $this->patient_id = $row['patient_id'];
        $this->record_date = $row['record_date'];
        $this->medical_condition = $row['medical_condition'];
        $this->height = $row['height'];
        $this->weight = $row['weight'];
        $this->blood_pressure = $row['blood_pressure'];
        $this->blood_sugar = $row['blood_sugar'];
        $this->treatment = $row['treatment'];
        $this->description = $row['description'];
        $this->diagnosis_date = $row['diagnosis_date'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getFirstRow(){
      $sql = "SELECT * FROM `medical_records` WHERE $this->sqlCondition ORDER BY `id`";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->doctor_id = $row['doctor_id'];
        $this->patient_id = $row['patient_id'];
        $this->record_date = $row['record_date'];
        $this->medical_condition = $row['medical_condition'];
        $this->height = $row['height'];
        $this->weight = $row['weight'];
        $this->blood_pressure = $row['blood_pressure'];
        $this->blood_sugar = $row['blood_sugar'];
        $this->treatment = $row['treatment'];
        $this->description = $row['description'];
        $this->diagnosis_date = $row['diagnosis_date'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getBySet($limit){
      if(!is_numeric($limit)){ return '[]'; }
      $sql = "SELECT * FROM `medical_records` WHERE `id` LIKE '%$this->id%' AND `doctor_id` LIKE '%$this->doctor_id%' AND `patient_id` LIKE '%$this->patient_id%' AND `record_date` LIKE '%$this->record_date%' AND `medical_condition` LIKE '%$this->medical_condition%' AND `height` LIKE '%$this->height%' AND `weight` LIKE '%$this->weight%' AND `blood_pressure` LIKE '%$this->blood_pressure%' AND `blood_sugar` LIKE '%$this->blood_sugar%' AND `treatment` LIKE '%$this->treatment%' AND `description` LIKE '%$this->description%' AND `diagnosis_date` LIKE '%$this->diagnosis_date%' AND `timee` LIKE '%$this->timee%' AND `time` LIKE '%$this->time%' LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function add(){
      $sql = "INSERT INTO `medical_records` (`id`, `doctor_id`, `patient_id`, `record_date`, `medical_condition`, `height`, `weight`, `blood_pressure`, `blood_sugar`, `treatment`, `description`, `diagnosis_date`, `timee`, `time`) VALUES 
      ('$this->id', '$this->doctor_id', '$this->patient_id', '$this->record_date', '$this->medical_condition', '$this->height', '$this->weight', '$this->blood_pressure', '$this->blood_sugar', '$this->treatment', '$this->description', '$this->diagnosis_date', '$this->timee', '$this->time')";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function update(){
      $sql = "UPDATE `medical_records` SET `id`='$this->id', `doctor_id`='$this->doctor_id', `patient_id`='$this->patient_id', `record_date`='$this->record_date', `medical_condition`='$this->medical_condition', `height`='$this->height', `weight`='$this->weight', `blood_pressure`='$this->blood_pressure', `blood_sugar`='$this->blood_sugar', `treatment`='$this->treatment', `description`='$this->description', `diagnosis_date`='$this->diagnosis_date', `timee`='$this->timee', `time`='$this->time' WHERE `id`='$this->id'";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function delete() {
      $sql = "DELETE FROM `medical_records` WHERE `id`='$this->id'";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function giveIdentity($days){
      setcookie('medical_records', encode("$this->id"), time() + (86400 * $days), "/");
    }

    public function getIdentity($days){
      if(isset($_COOKIE['medical_records'])){
        decode($_COOKIE['medical_records']);
      }else{return false;}
    }

    public function deleteIdentity($days){
      setcookie("medical_records", '', time() - 3600);
    }

    public function giveAuthority(){
      $_SESSION['medical_records'] = encrypt($this->id);
      $_SESSION['medical_records_id'] = $this->id;
    }

    public function getAuthority(){
      if(isset($_SESSION['medical_records']) && isset($_SESSION['medical_records_id'])){
        $tmp_id = filter($_SESSION['medical_records_id']);
        $sql = "SELECT * from `medical_records` WHERE `id`='$tmp_id'";
        $result = $this->db()->query($sql);
        $row = $result->fetch();
        if(encrypt($row['id']) == $_SESSION['medical_records']){
          return $_SESSION['medical_records_id'];
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

    public function setRecord_date($record_date){
      if(is_string($record_date)){
        $this->record_date = filter($record_date);
        return true;
      }else{
        return false;
      }
    }

    public function setMedical_condition($medical_condition){
      if(is_string($medical_condition)){
        $this->medical_condition = filter($medical_condition);
        return true;
      }else{
        return false;
      }
    }

    public function setHeight($height){
      if(is_string($height)){
        $this->height = filter($height);
        return true;
      }else{
        return false;
      }
    }

    public function setWeight($weight){
      if(is_string($weight)){
        $this->weight = filter($weight);
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

    public function setBlood_sugar($blood_sugar){
      if(is_string($blood_sugar)){
        $this->blood_sugar = filter($blood_sugar);
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

    public function setDescription($description){
      if(is_string($description)){
        $this->description = filter($description);
        return true;
      }else{
        return false;
      }
    }

    public function setDiagnosis_date($diagnosis_date){
      if(is_string($diagnosis_date)){
        $this->diagnosis_date = filter($diagnosis_date);
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

    public function getRecord_date(){
      return $this->record_date;
    }

    public function getMedical_condition(){
      return $this->medical_condition;
    }

    public function getHeight(){
      return $this->height;
    }

    public function getWeight(){
      return $this->weight;
    }

    public function getBlood_pressure(){
      return $this->blood_pressure;
    }

    public function getBlood_sugar(){
      return $this->blood_sugar;
    }

    public function getTreatment(){
      return $this->treatment;
    }

    public function getDescription(){
      return $this->description;
    }

    public function getDiagnosis_date(){
      return $this->diagnosis_date;
    }

    public function getTimee(){
      return $this->timee;
    }

    public function getTime(){
      return $this->time;
    }

  }
?>