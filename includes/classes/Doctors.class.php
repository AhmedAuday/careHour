<?php
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/config.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/encrypt.inc.php';

  class Doctors extends Database {
    private $sqlCondition = 1;
    private $id;
    private $user_id;
    private $first_name;
    private $middle_name;
    private $last_name;
    private $email;
    private $phone;
    private $gender;
    private $dob;
    private $specialty;
    private $education;
    private $experience_years;
    private $start_office_hour;
    private $end_office_hour;
    private $bio;
    private $timee;
    private $time;

    public function __construct($id = null){
      $this->time = time();
      if($id != null){
        $this->setId($id);
        if($id != $this->id){
          exit('');
        }
        $sql = "SELECT * FROM `doctors` WHERE `id`=$this->id";
        $result = $this->db()->query($sql);
        if($result->rowCount() > 0){
          $row = $result->fetch();
          $this->id = $row['id'];
          $this->user_id = $row['user_id'];
          $this->first_name = $row['first_name'];
          $this->middle_name = $row['middle_name'];
          $this->last_name = $row['last_name'];
          $this->email = $row['email'];
          $this->phone = $row['phone'];
          $this->gender = $row['gender'];
          $this->dob = $row['dob'];
          $this->specialty = $row['specialty'];
          $this->education = $row['education'];
          $this->experience_years = $row['experience_years'];
          $this->start_office_hour = $row['start_office_hour'];
          $this->end_office_hour = $row['end_office_hour'];
          $this->bio = $row['bio'];
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
      $sql = "SELECT * FROM `doctors` WHERE $this->sqlCondition ORDER BY `id` LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function getAllReversed($limit = 1000000){
      if(!is_numeric($limit)){ return '[]'; }
      $sql = "SELECT * FROM `doctors` WHERE $this->sqlCondition ORDER BY `id` DESC LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function getNumberOfRows(){
      $sql = "SELECT COUNT(*) AS 'numberOfRows' FROM `doctors` WHERE $this->sqlCondition";
      $result = $this->db()->query($sql);
      $row = $result->fetch();
      return $row['numberOfRows'];
    }

    public function getById(){
      $sql = "SELECT * FROM `doctors` WHERE `id`='$this->id'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->user_id = $row['user_id'];
        $this->first_name = $row['first_name'];
        $this->middle_name = $row['middle_name'];
        $this->last_name = $row['last_name'];
        $this->email = $row['email'];
        $this->phone = $row['phone'];
        $this->gender = $row['gender'];
        $this->dob = $row['dob'];
        $this->specialty = $row['specialty'];
        $this->education = $row['education'];
        $this->experience_years = $row['experience_years'];
        $this->start_office_hour = $row['start_office_hour'];
        $this->end_office_hour = $row['end_office_hour'];
        $this->bio = $row['bio'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByUser_id(){
      $sql = "SELECT * FROM `doctors` WHERE `user_id`='$this->user_id'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->user_id = $row['user_id'];
        $this->first_name = $row['first_name'];
        $this->middle_name = $row['middle_name'];
        $this->last_name = $row['last_name'];
        $this->email = $row['email'];
        $this->phone = $row['phone'];
        $this->gender = $row['gender'];
        $this->dob = $row['dob'];
        $this->specialty = $row['specialty'];
        $this->education = $row['education'];
        $this->experience_years = $row['experience_years'];
        $this->start_office_hour = $row['start_office_hour'];
        $this->end_office_hour = $row['end_office_hour'];
        $this->bio = $row['bio'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByFirst_name(){
      $sql = "SELECT * FROM `doctors` WHERE `first_name`='$this->first_name'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->user_id = $row['user_id'];
        $this->first_name = $row['first_name'];
        $this->middle_name = $row['middle_name'];
        $this->last_name = $row['last_name'];
        $this->email = $row['email'];
        $this->phone = $row['phone'];
        $this->gender = $row['gender'];
        $this->dob = $row['dob'];
        $this->specialty = $row['specialty'];
        $this->education = $row['education'];
        $this->experience_years = $row['experience_years'];
        $this->start_office_hour = $row['start_office_hour'];
        $this->end_office_hour = $row['end_office_hour'];
        $this->bio = $row['bio'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByMiddle_name(){
      $sql = "SELECT * FROM `doctors` WHERE `middle_name`='$this->middle_name'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->user_id = $row['user_id'];
        $this->first_name = $row['first_name'];
        $this->middle_name = $row['middle_name'];
        $this->last_name = $row['last_name'];
        $this->email = $row['email'];
        $this->phone = $row['phone'];
        $this->gender = $row['gender'];
        $this->dob = $row['dob'];
        $this->specialty = $row['specialty'];
        $this->education = $row['education'];
        $this->experience_years = $row['experience_years'];
        $this->start_office_hour = $row['start_office_hour'];
        $this->end_office_hour = $row['end_office_hour'];
        $this->bio = $row['bio'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByLast_name(){
      $sql = "SELECT * FROM `doctors` WHERE `last_name`='$this->last_name'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->user_id = $row['user_id'];
        $this->first_name = $row['first_name'];
        $this->middle_name = $row['middle_name'];
        $this->last_name = $row['last_name'];
        $this->email = $row['email'];
        $this->phone = $row['phone'];
        $this->gender = $row['gender'];
        $this->dob = $row['dob'];
        $this->specialty = $row['specialty'];
        $this->education = $row['education'];
        $this->experience_years = $row['experience_years'];
        $this->start_office_hour = $row['start_office_hour'];
        $this->end_office_hour = $row['end_office_hour'];
        $this->bio = $row['bio'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByEmail(){
      $sql = "SELECT * FROM `doctors` WHERE `email`='$this->email'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->user_id = $row['user_id'];
        $this->first_name = $row['first_name'];
        $this->middle_name = $row['middle_name'];
        $this->last_name = $row['last_name'];
        $this->email = $row['email'];
        $this->phone = $row['phone'];
        $this->gender = $row['gender'];
        $this->dob = $row['dob'];
        $this->specialty = $row['specialty'];
        $this->education = $row['education'];
        $this->experience_years = $row['experience_years'];
        $this->start_office_hour = $row['start_office_hour'];
        $this->end_office_hour = $row['end_office_hour'];
        $this->bio = $row['bio'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByPhone(){
      $sql = "SELECT * FROM `doctors` WHERE `phone`='$this->phone'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->user_id = $row['user_id'];
        $this->first_name = $row['first_name'];
        $this->middle_name = $row['middle_name'];
        $this->last_name = $row['last_name'];
        $this->email = $row['email'];
        $this->phone = $row['phone'];
        $this->gender = $row['gender'];
        $this->dob = $row['dob'];
        $this->specialty = $row['specialty'];
        $this->education = $row['education'];
        $this->experience_years = $row['experience_years'];
        $this->start_office_hour = $row['start_office_hour'];
        $this->end_office_hour = $row['end_office_hour'];
        $this->bio = $row['bio'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByGender(){
      $sql = "SELECT * FROM `doctors` WHERE `gender`='$this->gender'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->user_id = $row['user_id'];
        $this->first_name = $row['first_name'];
        $this->middle_name = $row['middle_name'];
        $this->last_name = $row['last_name'];
        $this->email = $row['email'];
        $this->phone = $row['phone'];
        $this->gender = $row['gender'];
        $this->dob = $row['dob'];
        $this->specialty = $row['specialty'];
        $this->education = $row['education'];
        $this->experience_years = $row['experience_years'];
        $this->start_office_hour = $row['start_office_hour'];
        $this->end_office_hour = $row['end_office_hour'];
        $this->bio = $row['bio'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByDob(){
      $sql = "SELECT * FROM `doctors` WHERE `dob`='$this->dob'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->user_id = $row['user_id'];
        $this->first_name = $row['first_name'];
        $this->middle_name = $row['middle_name'];
        $this->last_name = $row['last_name'];
        $this->email = $row['email'];
        $this->phone = $row['phone'];
        $this->gender = $row['gender'];
        $this->dob = $row['dob'];
        $this->specialty = $row['specialty'];
        $this->education = $row['education'];
        $this->experience_years = $row['experience_years'];
        $this->start_office_hour = $row['start_office_hour'];
        $this->end_office_hour = $row['end_office_hour'];
        $this->bio = $row['bio'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getBySpecialty(){
      $sql = "SELECT * FROM `doctors` WHERE `specialty`='$this->specialty'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->user_id = $row['user_id'];
        $this->first_name = $row['first_name'];
        $this->middle_name = $row['middle_name'];
        $this->last_name = $row['last_name'];
        $this->email = $row['email'];
        $this->phone = $row['phone'];
        $this->gender = $row['gender'];
        $this->dob = $row['dob'];
        $this->specialty = $row['specialty'];
        $this->education = $row['education'];
        $this->experience_years = $row['experience_years'];
        $this->start_office_hour = $row['start_office_hour'];
        $this->end_office_hour = $row['end_office_hour'];
        $this->bio = $row['bio'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByEducation(){
      $sql = "SELECT * FROM `doctors` WHERE `education`='$this->education'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->user_id = $row['user_id'];
        $this->first_name = $row['first_name'];
        $this->middle_name = $row['middle_name'];
        $this->last_name = $row['last_name'];
        $this->email = $row['email'];
        $this->phone = $row['phone'];
        $this->gender = $row['gender'];
        $this->dob = $row['dob'];
        $this->specialty = $row['specialty'];
        $this->education = $row['education'];
        $this->experience_years = $row['experience_years'];
        $this->start_office_hour = $row['start_office_hour'];
        $this->end_office_hour = $row['end_office_hour'];
        $this->bio = $row['bio'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByExperience_years(){
      $sql = "SELECT * FROM `doctors` WHERE `experience_years`='$this->experience_years'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->user_id = $row['user_id'];
        $this->first_name = $row['first_name'];
        $this->middle_name = $row['middle_name'];
        $this->last_name = $row['last_name'];
        $this->email = $row['email'];
        $this->phone = $row['phone'];
        $this->gender = $row['gender'];
        $this->dob = $row['dob'];
        $this->specialty = $row['specialty'];
        $this->education = $row['education'];
        $this->experience_years = $row['experience_years'];
        $this->start_office_hour = $row['start_office_hour'];
        $this->end_office_hour = $row['end_office_hour'];
        $this->bio = $row['bio'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByStart_office_hour(){
      $sql = "SELECT * FROM `doctors` WHERE `start_office_hour`='$this->start_office_hour'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->user_id = $row['user_id'];
        $this->first_name = $row['first_name'];
        $this->middle_name = $row['middle_name'];
        $this->last_name = $row['last_name'];
        $this->email = $row['email'];
        $this->phone = $row['phone'];
        $this->gender = $row['gender'];
        $this->dob = $row['dob'];
        $this->specialty = $row['specialty'];
        $this->education = $row['education'];
        $this->experience_years = $row['experience_years'];
        $this->start_office_hour = $row['start_office_hour'];
        $this->end_office_hour = $row['end_office_hour'];
        $this->bio = $row['bio'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByEnd_office_hour(){
      $sql = "SELECT * FROM `doctors` WHERE `end_office_hour`='$this->end_office_hour'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->user_id = $row['user_id'];
        $this->first_name = $row['first_name'];
        $this->middle_name = $row['middle_name'];
        $this->last_name = $row['last_name'];
        $this->email = $row['email'];
        $this->phone = $row['phone'];
        $this->gender = $row['gender'];
        $this->dob = $row['dob'];
        $this->specialty = $row['specialty'];
        $this->education = $row['education'];
        $this->experience_years = $row['experience_years'];
        $this->start_office_hour = $row['start_office_hour'];
        $this->end_office_hour = $row['end_office_hour'];
        $this->bio = $row['bio'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByBio(){
      $sql = "SELECT * FROM `doctors` WHERE `bio`='$this->bio'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->user_id = $row['user_id'];
        $this->first_name = $row['first_name'];
        $this->middle_name = $row['middle_name'];
        $this->last_name = $row['last_name'];
        $this->email = $row['email'];
        $this->phone = $row['phone'];
        $this->gender = $row['gender'];
        $this->dob = $row['dob'];
        $this->specialty = $row['specialty'];
        $this->education = $row['education'];
        $this->experience_years = $row['experience_years'];
        $this->start_office_hour = $row['start_office_hour'];
        $this->end_office_hour = $row['end_office_hour'];
        $this->bio = $row['bio'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByTimee(){
      $sql = "SELECT * FROM `doctors` WHERE `timee`='$this->timee'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->user_id = $row['user_id'];
        $this->first_name = $row['first_name'];
        $this->middle_name = $row['middle_name'];
        $this->last_name = $row['last_name'];
        $this->email = $row['email'];
        $this->phone = $row['phone'];
        $this->gender = $row['gender'];
        $this->dob = $row['dob'];
        $this->specialty = $row['specialty'];
        $this->education = $row['education'];
        $this->experience_years = $row['experience_years'];
        $this->start_office_hour = $row['start_office_hour'];
        $this->end_office_hour = $row['end_office_hour'];
        $this->bio = $row['bio'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByTime(){
      $sql = "SELECT * FROM `doctors` WHERE `time`='$this->time'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->user_id = $row['user_id'];
        $this->first_name = $row['first_name'];
        $this->middle_name = $row['middle_name'];
        $this->last_name = $row['last_name'];
        $this->email = $row['email'];
        $this->phone = $row['phone'];
        $this->gender = $row['gender'];
        $this->dob = $row['dob'];
        $this->specialty = $row['specialty'];
        $this->education = $row['education'];
        $this->experience_years = $row['experience_years'];
        $this->start_office_hour = $row['start_office_hour'];
        $this->end_office_hour = $row['end_office_hour'];
        $this->bio = $row['bio'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getLastRow(){
      $sql = "SELECT * FROM `doctors` WHERE $this->sqlCondition ORDER BY `id` DESC";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->user_id = $row['user_id'];
        $this->first_name = $row['first_name'];
        $this->middle_name = $row['middle_name'];
        $this->last_name = $row['last_name'];
        $this->email = $row['email'];
        $this->phone = $row['phone'];
        $this->gender = $row['gender'];
        $this->dob = $row['dob'];
        $this->specialty = $row['specialty'];
        $this->education = $row['education'];
        $this->experience_years = $row['experience_years'];
        $this->start_office_hour = $row['start_office_hour'];
        $this->end_office_hour = $row['end_office_hour'];
        $this->bio = $row['bio'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getFirstRow(){
      $sql = "SELECT * FROM `doctors` WHERE $this->sqlCondition ORDER BY `id`";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->user_id = $row['user_id'];
        $this->first_name = $row['first_name'];
        $this->middle_name = $row['middle_name'];
        $this->last_name = $row['last_name'];
        $this->email = $row['email'];
        $this->phone = $row['phone'];
        $this->gender = $row['gender'];
        $this->dob = $row['dob'];
        $this->specialty = $row['specialty'];
        $this->education = $row['education'];
        $this->experience_years = $row['experience_years'];
        $this->start_office_hour = $row['start_office_hour'];
        $this->end_office_hour = $row['end_office_hour'];
        $this->bio = $row['bio'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getBySet($limit){
      if(!is_numeric($limit)){ return '[]'; }
      $sql = "SELECT * FROM `doctors` WHERE `id` LIKE '%$this->id%' AND `user_id` LIKE '%$this->user_id%' AND `first_name` LIKE '%$this->first_name%' AND `middle_name` LIKE '%$this->middle_name%' AND `last_name` LIKE '%$this->last_name%' AND `email` LIKE '%$this->email%' AND `phone` LIKE '%$this->phone%' AND `gender` LIKE '%$this->gender%' AND `dob` LIKE '%$this->dob%' AND `specialty` LIKE '%$this->specialty%' AND `education` LIKE '%$this->education%' AND `experience_years` LIKE '%$this->experience_years%' AND `start_office_hour` LIKE '%$this->start_office_hour%' AND `end_office_hour` LIKE '%$this->end_office_hour%' AND `bio` LIKE '%$this->bio%' AND `timee` LIKE '%$this->timee%' AND `time` LIKE '%$this->time%' LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function add(){
      $sql = "INSERT INTO `doctors` (`id`, `user_id`, `first_name`, `middle_name`, `last_name`, `email`, `phone`, `gender`, `dob`, `specialty`, `education`, `experience_years`, `start_office_hour`, `end_office_hour`, `bio`, `timee`, `time`) VALUES 
      ('$this->id', '$this->user_id', '$this->first_name', '$this->middle_name', '$this->last_name', '$this->email', '$this->phone', '$this->gender', '$this->dob', '$this->specialty', '$this->education', '$this->experience_years', '$this->start_office_hour', '$this->end_office_hour', '$this->bio', '$this->timee', '$this->time')";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function update(){
      $sql = "UPDATE `doctors` SET `id`='$this->id', `user_id`='$this->user_id', `first_name`='$this->first_name', `middle_name`='$this->middle_name', `last_name`='$this->last_name', `email`='$this->email', `phone`='$this->phone', `gender`='$this->gender', `dob`='$this->dob', `specialty`='$this->specialty', `education`='$this->education', `experience_years`='$this->experience_years', `start_office_hour`='$this->start_office_hour', `end_office_hour`='$this->end_office_hour', `bio`='$this->bio', `timee`='$this->timee', `time`='$this->time' WHERE `id`='$this->id'";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function delete() {
      $sql = "DELETE FROM `doctors` WHERE `id`='$this->id'";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function giveIdentity($days){
      setcookie('doctors', encode("$this->id"), time() + (86400 * $days), "/");
    }

    public function getIdentity($days){
      if(isset($_COOKIE['doctors'])){
        decode($_COOKIE['doctors']);
      }else{return false;}
    }

    public function deleteIdentity($days){
      setcookie("doctors", '', time() - 3600);
    }

    public function giveAuthority(){
      $_SESSION['doctors'] = encrypt($this->id);
      $_SESSION['doctors_id'] = $this->id;
    }

    public function getAuthority(){
      if(isset($_SESSION['doctors']) && isset($_SESSION['doctors_id'])){
        $tmp_id = filter($_SESSION['doctors_id']);
        $sql = "SELECT * from `doctors` WHERE `id`='$tmp_id'";
        $result = $this->db()->query($sql);
        $row = $result->fetch();
        if(encrypt($row['id']) == $_SESSION['doctors']){
          return $_SESSION['doctors_id'];
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

    public function setUser_id($user_id){
      if(is_numeric($user_id)){
        $this->user_id = filter($user_id);
        return true;
      }else{
        return false;
      }
    }

    public function setFirst_name($first_name){
      if(is_string($first_name)){
        $this->first_name = filter($first_name);
        return true;
      }else{
        return false;
      }
    }

    public function setMiddle_name($middle_name){
      if(is_string($middle_name)){
        $this->middle_name = filter($middle_name);
        return true;
      }else{
        return false;
      }
    }

    public function setLast_name($last_name){
      if(is_string($last_name)){
        $this->last_name = filter($last_name);
        return true;
      }else{
        return false;
      }
    }

    public function setEmail($email){
      if(is_string($email)){
        $this->email = filter($email);
        return true;
      }else{
        return false;
      }
    }

    public function setPhone($phone){
      if(is_string($phone)){
        $this->phone = filter($phone);
        return true;
      }else{
        return false;
      }
    }

    public function setGender($gender){
      if(is_string($gender)){
        $this->gender = filter($gender);
        return true;
      }else{
        return false;
      }
    }

    public function setDob($dob){
      if(is_string($dob)){
        $this->dob = filter($dob);
        return true;
      }else{
        return false;
      }
    }

    public function setSpecialty($specialty){
      if(is_string($specialty)){
        $this->specialty = filter($specialty);
        return true;
      }else{
        return false;
      }
    }

    public function setEducation($education){
      if(is_string($education)){
        $this->education = filter($education);
        return true;
      }else{
        return false;
      }
    }

    public function setExperience_years($experience_years){
      if(is_numeric($experience_years)){
        $this->experience_years = filter($experience_years);
        return true;
      }else{
        return false;
      }
    }

    public function setStart_office_hour($start_office_hour){
      if(is_string($start_office_hour)){
        $this->start_office_hour = filter($start_office_hour);
        return true;
      }else{
        return false;
      }
    }

    public function setEnd_office_hour($end_office_hour){
      if(is_string($end_office_hour)){
        $this->end_office_hour = filter($end_office_hour);
        return true;
      }else{
        return false;
      }
    }

    public function setBio($bio){
      if(is_string($bio)){
        $this->bio = filter($bio);
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

    public function getUser_id(){
      return $this->user_id;
    }

    public function getFirst_name(){
      return $this->first_name;
    }

    public function getMiddle_name(){
      return $this->middle_name;
    }

    public function getLast_name(){
      return $this->last_name;
    }

    public function getEmail(){
      return $this->email;
    }

    public function getPhone(){
      return $this->phone;
    }

    public function getGender(){
      return $this->gender;
    }

    public function getDob(){
      return $this->dob;
    }

    public function getSpecialty(){
      return $this->specialty;
    }

    public function getEducation(){
      return $this->education;
    }

    public function getExperience_years(){
      return $this->experience_years;
    }

    public function getStart_office_hour(){
      return $this->start_office_hour;
    }

    public function getEnd_office_hour(){
      return $this->end_office_hour;
    }

    public function getBio(){
      return $this->bio;
    }

    public function getTimee(){
      return $this->timee;
    }

    public function getTime(){
      return $this->time;
    }

  }
?>