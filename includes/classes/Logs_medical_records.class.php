<?php
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/config.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/encrypt.inc.php';

  class Logs_medical_records extends Database {
    private $sqlCondition = 1;
    private $id;
    private $actionn;
    private $new_doctor_id;
    private $new_patient_id;
    private $new_record_date;
    private $new_medical_condition;
    private $new_height;
    private $new_weight;
    private $new_blood_pressure;
    private $new_blood_sugar;
    private $new_treatment;
    private $new_description;
    private $new_diagnosis_date;
    private $logs_cdate;
    private $logs_ctime;
    private $log_ByUser;
    private $timee;
    private $time;

    public function __construct($id = null){
      $this->time = time();
      if($id != null){
        $this->setId($id);
        if($id != $this->id){
          exit('');
        }
        $sql = "SELECT * FROM `logs_medical_records` WHERE `id`=$this->id";
        $result = $this->db()->query($sql);
        if($result->rowCount() > 0){
          $row = $result->fetch();
          $this->id = $row['id'];
          $this->actionn = $row['actionn'];
          $this->new_doctor_id = $row['new_doctor_id'];
          $this->new_patient_id = $row['new_patient_id'];
          $this->new_record_date = $row['new_record_date'];
          $this->new_medical_condition = $row['new_medical_condition'];
          $this->new_height = $row['new_height'];
          $this->new_weight = $row['new_weight'];
          $this->new_blood_pressure = $row['new_blood_pressure'];
          $this->new_blood_sugar = $row['new_blood_sugar'];
          $this->new_treatment = $row['new_treatment'];
          $this->new_description = $row['new_description'];
          $this->new_diagnosis_date = $row['new_diagnosis_date'];
          $this->logs_cdate = $row['logs_cdate'];
          $this->logs_ctime = $row['logs_ctime'];
          $this->log_ByUser = $row['log_ByUser'];
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
      $sql = "SELECT * FROM `logs_medical_records` WHERE $this->sqlCondition ORDER BY `id` LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function getAllReversed($limit = 1000000){
      if(!is_numeric($limit)){ return '[]'; }
      $sql = "SELECT * FROM `logs_medical_records` WHERE $this->sqlCondition ORDER BY `id` DESC LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function getNumberOfRows(){
      $sql = "SELECT COUNT(*) AS 'numberOfRows' FROM `logs_medical_records` WHERE $this->sqlCondition";
      $result = $this->db()->query($sql);
      $row = $result->fetch();
      return $row['numberOfRows'];
    }

    public function getById(){
      $sql = "SELECT * FROM `logs_medical_records` WHERE `id`='$this->id'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_doctor_id = $row['new_doctor_id'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_record_date = $row['new_record_date'];
        $this->new_medical_condition = $row['new_medical_condition'];
        $this->new_height = $row['new_height'];
        $this->new_weight = $row['new_weight'];
        $this->new_blood_pressure = $row['new_blood_pressure'];
        $this->new_blood_sugar = $row['new_blood_sugar'];
        $this->new_treatment = $row['new_treatment'];
        $this->new_description = $row['new_description'];
        $this->new_diagnosis_date = $row['new_diagnosis_date'];
        $this->logs_cdate = $row['logs_cdate'];
        $this->logs_ctime = $row['logs_ctime'];
        $this->log_ByUser = $row['log_ByUser'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByActionn(){
      $sql = "SELECT * FROM `logs_medical_records` WHERE `actionn`='$this->actionn'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_doctor_id = $row['new_doctor_id'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_record_date = $row['new_record_date'];
        $this->new_medical_condition = $row['new_medical_condition'];
        $this->new_height = $row['new_height'];
        $this->new_weight = $row['new_weight'];
        $this->new_blood_pressure = $row['new_blood_pressure'];
        $this->new_blood_sugar = $row['new_blood_sugar'];
        $this->new_treatment = $row['new_treatment'];
        $this->new_description = $row['new_description'];
        $this->new_diagnosis_date = $row['new_diagnosis_date'];
        $this->logs_cdate = $row['logs_cdate'];
        $this->logs_ctime = $row['logs_ctime'];
        $this->log_ByUser = $row['log_ByUser'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByNew_doctor_id(){
      $sql = "SELECT * FROM `logs_medical_records` WHERE `new_doctor_id`='$this->new_doctor_id'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_doctor_id = $row['new_doctor_id'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_record_date = $row['new_record_date'];
        $this->new_medical_condition = $row['new_medical_condition'];
        $this->new_height = $row['new_height'];
        $this->new_weight = $row['new_weight'];
        $this->new_blood_pressure = $row['new_blood_pressure'];
        $this->new_blood_sugar = $row['new_blood_sugar'];
        $this->new_treatment = $row['new_treatment'];
        $this->new_description = $row['new_description'];
        $this->new_diagnosis_date = $row['new_diagnosis_date'];
        $this->logs_cdate = $row['logs_cdate'];
        $this->logs_ctime = $row['logs_ctime'];
        $this->log_ByUser = $row['log_ByUser'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByNew_patient_id(){
      $sql = "SELECT * FROM `logs_medical_records` WHERE `new_patient_id`='$this->new_patient_id'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_doctor_id = $row['new_doctor_id'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_record_date = $row['new_record_date'];
        $this->new_medical_condition = $row['new_medical_condition'];
        $this->new_height = $row['new_height'];
        $this->new_weight = $row['new_weight'];
        $this->new_blood_pressure = $row['new_blood_pressure'];
        $this->new_blood_sugar = $row['new_blood_sugar'];
        $this->new_treatment = $row['new_treatment'];
        $this->new_description = $row['new_description'];
        $this->new_diagnosis_date = $row['new_diagnosis_date'];
        $this->logs_cdate = $row['logs_cdate'];
        $this->logs_ctime = $row['logs_ctime'];
        $this->log_ByUser = $row['log_ByUser'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByNew_record_date(){
      $sql = "SELECT * FROM `logs_medical_records` WHERE `new_record_date`='$this->new_record_date'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_doctor_id = $row['new_doctor_id'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_record_date = $row['new_record_date'];
        $this->new_medical_condition = $row['new_medical_condition'];
        $this->new_height = $row['new_height'];
        $this->new_weight = $row['new_weight'];
        $this->new_blood_pressure = $row['new_blood_pressure'];
        $this->new_blood_sugar = $row['new_blood_sugar'];
        $this->new_treatment = $row['new_treatment'];
        $this->new_description = $row['new_description'];
        $this->new_diagnosis_date = $row['new_diagnosis_date'];
        $this->logs_cdate = $row['logs_cdate'];
        $this->logs_ctime = $row['logs_ctime'];
        $this->log_ByUser = $row['log_ByUser'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByNew_medical_condition(){
      $sql = "SELECT * FROM `logs_medical_records` WHERE `new_medical_condition`='$this->new_medical_condition'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_doctor_id = $row['new_doctor_id'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_record_date = $row['new_record_date'];
        $this->new_medical_condition = $row['new_medical_condition'];
        $this->new_height = $row['new_height'];
        $this->new_weight = $row['new_weight'];
        $this->new_blood_pressure = $row['new_blood_pressure'];
        $this->new_blood_sugar = $row['new_blood_sugar'];
        $this->new_treatment = $row['new_treatment'];
        $this->new_description = $row['new_description'];
        $this->new_diagnosis_date = $row['new_diagnosis_date'];
        $this->logs_cdate = $row['logs_cdate'];
        $this->logs_ctime = $row['logs_ctime'];
        $this->log_ByUser = $row['log_ByUser'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByNew_height(){
      $sql = "SELECT * FROM `logs_medical_records` WHERE `new_height`='$this->new_height'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_doctor_id = $row['new_doctor_id'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_record_date = $row['new_record_date'];
        $this->new_medical_condition = $row['new_medical_condition'];
        $this->new_height = $row['new_height'];
        $this->new_weight = $row['new_weight'];
        $this->new_blood_pressure = $row['new_blood_pressure'];
        $this->new_blood_sugar = $row['new_blood_sugar'];
        $this->new_treatment = $row['new_treatment'];
        $this->new_description = $row['new_description'];
        $this->new_diagnosis_date = $row['new_diagnosis_date'];
        $this->logs_cdate = $row['logs_cdate'];
        $this->logs_ctime = $row['logs_ctime'];
        $this->log_ByUser = $row['log_ByUser'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByNew_weight(){
      $sql = "SELECT * FROM `logs_medical_records` WHERE `new_weight`='$this->new_weight'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_doctor_id = $row['new_doctor_id'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_record_date = $row['new_record_date'];
        $this->new_medical_condition = $row['new_medical_condition'];
        $this->new_height = $row['new_height'];
        $this->new_weight = $row['new_weight'];
        $this->new_blood_pressure = $row['new_blood_pressure'];
        $this->new_blood_sugar = $row['new_blood_sugar'];
        $this->new_treatment = $row['new_treatment'];
        $this->new_description = $row['new_description'];
        $this->new_diagnosis_date = $row['new_diagnosis_date'];
        $this->logs_cdate = $row['logs_cdate'];
        $this->logs_ctime = $row['logs_ctime'];
        $this->log_ByUser = $row['log_ByUser'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByNew_blood_pressure(){
      $sql = "SELECT * FROM `logs_medical_records` WHERE `new_blood_pressure`='$this->new_blood_pressure'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_doctor_id = $row['new_doctor_id'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_record_date = $row['new_record_date'];
        $this->new_medical_condition = $row['new_medical_condition'];
        $this->new_height = $row['new_height'];
        $this->new_weight = $row['new_weight'];
        $this->new_blood_pressure = $row['new_blood_pressure'];
        $this->new_blood_sugar = $row['new_blood_sugar'];
        $this->new_treatment = $row['new_treatment'];
        $this->new_description = $row['new_description'];
        $this->new_diagnosis_date = $row['new_diagnosis_date'];
        $this->logs_cdate = $row['logs_cdate'];
        $this->logs_ctime = $row['logs_ctime'];
        $this->log_ByUser = $row['log_ByUser'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByNew_blood_sugar(){
      $sql = "SELECT * FROM `logs_medical_records` WHERE `new_blood_sugar`='$this->new_blood_sugar'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_doctor_id = $row['new_doctor_id'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_record_date = $row['new_record_date'];
        $this->new_medical_condition = $row['new_medical_condition'];
        $this->new_height = $row['new_height'];
        $this->new_weight = $row['new_weight'];
        $this->new_blood_pressure = $row['new_blood_pressure'];
        $this->new_blood_sugar = $row['new_blood_sugar'];
        $this->new_treatment = $row['new_treatment'];
        $this->new_description = $row['new_description'];
        $this->new_diagnosis_date = $row['new_diagnosis_date'];
        $this->logs_cdate = $row['logs_cdate'];
        $this->logs_ctime = $row['logs_ctime'];
        $this->log_ByUser = $row['log_ByUser'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByNew_treatment(){
      $sql = "SELECT * FROM `logs_medical_records` WHERE `new_treatment`='$this->new_treatment'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_doctor_id = $row['new_doctor_id'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_record_date = $row['new_record_date'];
        $this->new_medical_condition = $row['new_medical_condition'];
        $this->new_height = $row['new_height'];
        $this->new_weight = $row['new_weight'];
        $this->new_blood_pressure = $row['new_blood_pressure'];
        $this->new_blood_sugar = $row['new_blood_sugar'];
        $this->new_treatment = $row['new_treatment'];
        $this->new_description = $row['new_description'];
        $this->new_diagnosis_date = $row['new_diagnosis_date'];
        $this->logs_cdate = $row['logs_cdate'];
        $this->logs_ctime = $row['logs_ctime'];
        $this->log_ByUser = $row['log_ByUser'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByNew_description(){
      $sql = "SELECT * FROM `logs_medical_records` WHERE `new_description`='$this->new_description'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_doctor_id = $row['new_doctor_id'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_record_date = $row['new_record_date'];
        $this->new_medical_condition = $row['new_medical_condition'];
        $this->new_height = $row['new_height'];
        $this->new_weight = $row['new_weight'];
        $this->new_blood_pressure = $row['new_blood_pressure'];
        $this->new_blood_sugar = $row['new_blood_sugar'];
        $this->new_treatment = $row['new_treatment'];
        $this->new_description = $row['new_description'];
        $this->new_diagnosis_date = $row['new_diagnosis_date'];
        $this->logs_cdate = $row['logs_cdate'];
        $this->logs_ctime = $row['logs_ctime'];
        $this->log_ByUser = $row['log_ByUser'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByNew_diagnosis_date(){
      $sql = "SELECT * FROM `logs_medical_records` WHERE `new_diagnosis_date`='$this->new_diagnosis_date'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_doctor_id = $row['new_doctor_id'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_record_date = $row['new_record_date'];
        $this->new_medical_condition = $row['new_medical_condition'];
        $this->new_height = $row['new_height'];
        $this->new_weight = $row['new_weight'];
        $this->new_blood_pressure = $row['new_blood_pressure'];
        $this->new_blood_sugar = $row['new_blood_sugar'];
        $this->new_treatment = $row['new_treatment'];
        $this->new_description = $row['new_description'];
        $this->new_diagnosis_date = $row['new_diagnosis_date'];
        $this->logs_cdate = $row['logs_cdate'];
        $this->logs_ctime = $row['logs_ctime'];
        $this->log_ByUser = $row['log_ByUser'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByLogs_cdate(){
      $sql = "SELECT * FROM `logs_medical_records` WHERE `logs_cdate`='$this->logs_cdate'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_doctor_id = $row['new_doctor_id'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_record_date = $row['new_record_date'];
        $this->new_medical_condition = $row['new_medical_condition'];
        $this->new_height = $row['new_height'];
        $this->new_weight = $row['new_weight'];
        $this->new_blood_pressure = $row['new_blood_pressure'];
        $this->new_blood_sugar = $row['new_blood_sugar'];
        $this->new_treatment = $row['new_treatment'];
        $this->new_description = $row['new_description'];
        $this->new_diagnosis_date = $row['new_diagnosis_date'];
        $this->logs_cdate = $row['logs_cdate'];
        $this->logs_ctime = $row['logs_ctime'];
        $this->log_ByUser = $row['log_ByUser'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByLogs_ctime(){
      $sql = "SELECT * FROM `logs_medical_records` WHERE `logs_ctime`='$this->logs_ctime'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_doctor_id = $row['new_doctor_id'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_record_date = $row['new_record_date'];
        $this->new_medical_condition = $row['new_medical_condition'];
        $this->new_height = $row['new_height'];
        $this->new_weight = $row['new_weight'];
        $this->new_blood_pressure = $row['new_blood_pressure'];
        $this->new_blood_sugar = $row['new_blood_sugar'];
        $this->new_treatment = $row['new_treatment'];
        $this->new_description = $row['new_description'];
        $this->new_diagnosis_date = $row['new_diagnosis_date'];
        $this->logs_cdate = $row['logs_cdate'];
        $this->logs_ctime = $row['logs_ctime'];
        $this->log_ByUser = $row['log_ByUser'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByLog_ByUser(){
      $sql = "SELECT * FROM `logs_medical_records` WHERE `log_ByUser`='$this->log_ByUser'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_doctor_id = $row['new_doctor_id'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_record_date = $row['new_record_date'];
        $this->new_medical_condition = $row['new_medical_condition'];
        $this->new_height = $row['new_height'];
        $this->new_weight = $row['new_weight'];
        $this->new_blood_pressure = $row['new_blood_pressure'];
        $this->new_blood_sugar = $row['new_blood_sugar'];
        $this->new_treatment = $row['new_treatment'];
        $this->new_description = $row['new_description'];
        $this->new_diagnosis_date = $row['new_diagnosis_date'];
        $this->logs_cdate = $row['logs_cdate'];
        $this->logs_ctime = $row['logs_ctime'];
        $this->log_ByUser = $row['log_ByUser'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByTimee(){
      $sql = "SELECT * FROM `logs_medical_records` WHERE `timee`='$this->timee'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_doctor_id = $row['new_doctor_id'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_record_date = $row['new_record_date'];
        $this->new_medical_condition = $row['new_medical_condition'];
        $this->new_height = $row['new_height'];
        $this->new_weight = $row['new_weight'];
        $this->new_blood_pressure = $row['new_blood_pressure'];
        $this->new_blood_sugar = $row['new_blood_sugar'];
        $this->new_treatment = $row['new_treatment'];
        $this->new_description = $row['new_description'];
        $this->new_diagnosis_date = $row['new_diagnosis_date'];
        $this->logs_cdate = $row['logs_cdate'];
        $this->logs_ctime = $row['logs_ctime'];
        $this->log_ByUser = $row['log_ByUser'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByTime(){
      $sql = "SELECT * FROM `logs_medical_records` WHERE `time`='$this->time'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_doctor_id = $row['new_doctor_id'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_record_date = $row['new_record_date'];
        $this->new_medical_condition = $row['new_medical_condition'];
        $this->new_height = $row['new_height'];
        $this->new_weight = $row['new_weight'];
        $this->new_blood_pressure = $row['new_blood_pressure'];
        $this->new_blood_sugar = $row['new_blood_sugar'];
        $this->new_treatment = $row['new_treatment'];
        $this->new_description = $row['new_description'];
        $this->new_diagnosis_date = $row['new_diagnosis_date'];
        $this->logs_cdate = $row['logs_cdate'];
        $this->logs_ctime = $row['logs_ctime'];
        $this->log_ByUser = $row['log_ByUser'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getLastRow(){
      $sql = "SELECT * FROM `logs_medical_records` WHERE $this->sqlCondition ORDER BY `id` DESC";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_doctor_id = $row['new_doctor_id'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_record_date = $row['new_record_date'];
        $this->new_medical_condition = $row['new_medical_condition'];
        $this->new_height = $row['new_height'];
        $this->new_weight = $row['new_weight'];
        $this->new_blood_pressure = $row['new_blood_pressure'];
        $this->new_blood_sugar = $row['new_blood_sugar'];
        $this->new_treatment = $row['new_treatment'];
        $this->new_description = $row['new_description'];
        $this->new_diagnosis_date = $row['new_diagnosis_date'];
        $this->logs_cdate = $row['logs_cdate'];
        $this->logs_ctime = $row['logs_ctime'];
        $this->log_ByUser = $row['log_ByUser'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getFirstRow(){
      $sql = "SELECT * FROM `logs_medical_records` WHERE $this->sqlCondition ORDER BY `id`";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_doctor_id = $row['new_doctor_id'];
        $this->new_patient_id = $row['new_patient_id'];
        $this->new_record_date = $row['new_record_date'];
        $this->new_medical_condition = $row['new_medical_condition'];
        $this->new_height = $row['new_height'];
        $this->new_weight = $row['new_weight'];
        $this->new_blood_pressure = $row['new_blood_pressure'];
        $this->new_blood_sugar = $row['new_blood_sugar'];
        $this->new_treatment = $row['new_treatment'];
        $this->new_description = $row['new_description'];
        $this->new_diagnosis_date = $row['new_diagnosis_date'];
        $this->logs_cdate = $row['logs_cdate'];
        $this->logs_ctime = $row['logs_ctime'];
        $this->log_ByUser = $row['log_ByUser'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getBySet($limit){
      if(!is_numeric($limit)){ return '[]'; }
      $sql = "SELECT * FROM `logs_medical_records` WHERE `id` LIKE '%$this->id%' AND `actionn` LIKE '%$this->actionn%' AND `new_doctor_id` LIKE '%$this->new_doctor_id%' AND `new_patient_id` LIKE '%$this->new_patient_id%' AND `new_record_date` LIKE '%$this->new_record_date%' AND `new_medical_condition` LIKE '%$this->new_medical_condition%' AND `new_height` LIKE '%$this->new_height%' AND `new_weight` LIKE '%$this->new_weight%' AND `new_blood_pressure` LIKE '%$this->new_blood_pressure%' AND `new_blood_sugar` LIKE '%$this->new_blood_sugar%' AND `new_treatment` LIKE '%$this->new_treatment%' AND `new_description` LIKE '%$this->new_description%' AND `new_diagnosis_date` LIKE '%$this->new_diagnosis_date%' AND `logs_cdate` LIKE '%$this->logs_cdate%' AND `logs_ctime` LIKE '%$this->logs_ctime%' AND `log_ByUser` LIKE '%$this->log_ByUser%' AND `timee` LIKE '%$this->timee%' AND `time` LIKE '%$this->time%' LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function add(){
      $sql = "INSERT INTO `logs_medical_records` (`id`, `actionn`, `new_doctor_id`, `new_patient_id`, `new_record_date`, `new_medical_condition`, `new_height`, `new_weight`, `new_blood_pressure`, `new_blood_sugar`, `new_treatment`, `new_description`, `new_diagnosis_date`, `logs_cdate`, `logs_ctime`, `log_ByUser`, `timee`, `time`) VALUES 
      ('$this->id', '$this->actionn', '$this->new_doctor_id', '$this->new_patient_id', '$this->new_record_date', '$this->new_medical_condition', '$this->new_height', '$this->new_weight', '$this->new_blood_pressure', '$this->new_blood_sugar', '$this->new_treatment', '$this->new_description', '$this->new_diagnosis_date', '$this->logs_cdate', '$this->logs_ctime', '$this->log_ByUser', '$this->timee', '$this->time')";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function update(){
      $sql = "UPDATE `logs_medical_records` SET `id`='$this->id', `actionn`='$this->actionn', `new_doctor_id`='$this->new_doctor_id', `new_patient_id`='$this->new_patient_id', `new_record_date`='$this->new_record_date', `new_medical_condition`='$this->new_medical_condition', `new_height`='$this->new_height', `new_weight`='$this->new_weight', `new_blood_pressure`='$this->new_blood_pressure', `new_blood_sugar`='$this->new_blood_sugar', `new_treatment`='$this->new_treatment', `new_description`='$this->new_description', `new_diagnosis_date`='$this->new_diagnosis_date', `logs_cdate`='$this->logs_cdate', `logs_ctime`='$this->logs_ctime', `log_ByUser`='$this->log_ByUser', `timee`='$this->timee', `time`='$this->time' WHERE `id`='$this->id'";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function delete() {
      $sql = "DELETE FROM `logs_medical_records` WHERE `id`='$this->id'";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function giveIdentity($days){
      setcookie('logs_medical_records', encode("$this->id"), time() + (86400 * $days), "/");
    }

    public function getIdentity($days){
      if(isset($_COOKIE['logs_medical_records'])){
        decode($_COOKIE['logs_medical_records']);
      }else{return false;}
    }

    public function deleteIdentity($days){
      setcookie("logs_medical_records", '', time() - 3600);
    }

    public function giveAuthority(){
      $_SESSION['logs_medical_records'] = encrypt($this->id);
      $_SESSION['logs_medical_records_id'] = $this->id;
    }

    public function getAuthority(){
      if(isset($_SESSION['logs_medical_records']) && isset($_SESSION['logs_medical_records_id'])){
        $tmp_id = filter($_SESSION['logs_medical_records_id']);
        $sql = "SELECT * from `logs_medical_records` WHERE `id`='$tmp_id'";
        $result = $this->db()->query($sql);
        $row = $result->fetch();
        if(encrypt($row['id']) == $_SESSION['logs_medical_records']){
          return $_SESSION['logs_medical_records_id'];
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

    public function setActionn($actionn){
      if(is_string($actionn)){
        $this->actionn = filter($actionn);
        return true;
      }else{
        return false;
      }
    }

    public function setNew_doctor_id($new_doctor_id){
      if(is_numeric($new_doctor_id)){
        $this->new_doctor_id = filter($new_doctor_id);
        return true;
      }else{
        return false;
      }
    }

    public function setNew_patient_id($new_patient_id){
      if(is_numeric($new_patient_id)){
        $this->new_patient_id = filter($new_patient_id);
        return true;
      }else{
        return false;
      }
    }

    public function setNew_record_date($new_record_date){
      if(is_string($new_record_date)){
        $this->new_record_date = filter($new_record_date);
        return true;
      }else{
        return false;
      }
    }

    public function setNew_medical_condition($new_medical_condition){
      if(is_string($new_medical_condition)){
        $this->new_medical_condition = filter($new_medical_condition);
        return true;
      }else{
        return false;
      }
    }

    public function setNew_height($new_height){
      if(is_string($new_height)){
        $this->new_height = filter($new_height);
        return true;
      }else{
        return false;
      }
    }

    public function setNew_weight($new_weight){
      if(is_string($new_weight)){
        $this->new_weight = filter($new_weight);
        return true;
      }else{
        return false;
      }
    }

    public function setNew_blood_pressure($new_blood_pressure){
      if(is_string($new_blood_pressure)){
        $this->new_blood_pressure = filter($new_blood_pressure);
        return true;
      }else{
        return false;
      }
    }

    public function setNew_blood_sugar($new_blood_sugar){
      if(is_string($new_blood_sugar)){
        $this->new_blood_sugar = filter($new_blood_sugar);
        return true;
      }else{
        return false;
      }
    }

    public function setNew_treatment($new_treatment){
      if(is_string($new_treatment)){
        $this->new_treatment = filter($new_treatment);
        return true;
      }else{
        return false;
      }
    }

    public function setNew_description($new_description){
      if(is_string($new_description)){
        $this->new_description = filter($new_description);
        return true;
      }else{
        return false;
      }
    }

    public function setNew_diagnosis_date($new_diagnosis_date){
      if(is_string($new_diagnosis_date)){
        $this->new_diagnosis_date = filter($new_diagnosis_date);
        return true;
      }else{
        return false;
      }
    }

    public function setLogs_cdate($logs_cdate){
      if(is_string($logs_cdate)){
        $this->logs_cdate = filter($logs_cdate);
        return true;
      }else{
        return false;
      }
    }

    public function setLogs_ctime($logs_ctime){
      if(is_string($logs_ctime)){
        $this->logs_ctime = filter($logs_ctime);
        return true;
      }else{
        return false;
      }
    }

    public function setLog_ByUser($log_ByUser){
      if(is_string($log_ByUser)){
        $this->log_ByUser = filter($log_ByUser);
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

    public function getActionn(){
      return $this->actionn;
    }

    public function getNew_doctor_id(){
      return $this->new_doctor_id;
    }

    public function getNew_patient_id(){
      return $this->new_patient_id;
    }

    public function getNew_record_date(){
      return $this->new_record_date;
    }

    public function getNew_medical_condition(){
      return $this->new_medical_condition;
    }

    public function getNew_height(){
      return $this->new_height;
    }

    public function getNew_weight(){
      return $this->new_weight;
    }

    public function getNew_blood_pressure(){
      return $this->new_blood_pressure;
    }

    public function getNew_blood_sugar(){
      return $this->new_blood_sugar;
    }

    public function getNew_treatment(){
      return $this->new_treatment;
    }

    public function getNew_description(){
      return $this->new_description;
    }

    public function getNew_diagnosis_date(){
      return $this->new_diagnosis_date;
    }

    public function getLogs_cdate(){
      return $this->logs_cdate;
    }

    public function getLogs_ctime(){
      return $this->logs_ctime;
    }

    public function getLog_ByUser(){
      return $this->log_ByUser;
    }

    public function getTimee(){
      return $this->timee;
    }

    public function getTime(){
      return $this->time;
    }

  }
?>