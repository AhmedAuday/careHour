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
    private $username;
    private $email;
    private $passwordd;
    private $created_at;
    private $phone;
    private $image_of_id;
    private $profile_image;
    private $gender;
    private $dob;
    private $specialty;
    private $addresses;
    private $education;
    private $experience_years;
    private $start_office_hour;
    private $end_office_hour;
    private $bio;
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
          $this->username = $row['username'];
          $this->email = $row['email'];
          $this->passwordd = $row['passwordd'];
          $this->created_at = $row['created_at'];
          $this->phone = $row['phone'];
          $this->image_of_id = $row['image_of_id'];
          $this->profile_image = $row['profile_image'];
          $this->gender = $row['gender'];
          $this->dob = $row['dob'];
          $this->specialty = $row['specialty'];
          $this->addresses = $row['addresses'];
          $this->education = $row['education'];
          $this->experience_years = $row['experience_years'];
          $this->start_office_hour = $row['start_office_hour'];
          $this->end_office_hour = $row['end_office_hour'];
          $this->bio = $row['bio'];
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
        $this->username = $row['username'];
        $this->email = $row['email'];
        $this->passwordd = $row['passwordd'];
        $this->created_at = $row['created_at'];
        $this->phone = $row['phone'];
        $this->image_of_id = $row['image_of_id'];
        $this->profile_image = $row['profile_image'];
        $this->gender = $row['gender'];
        $this->dob = $row['dob'];
        $this->specialty = $row['specialty'];
        $this->addresses = $row['addresses'];
        $this->education = $row['education'];
        $this->experience_years = $row['experience_years'];
        $this->start_office_hour = $row['start_office_hour'];
        $this->end_office_hour = $row['end_office_hour'];
        $this->bio = $row['bio'];
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
        $this->username = $row['username'];
        $this->email = $row['email'];
        $this->passwordd = $row['passwordd'];
        $this->created_at = $row['created_at'];
        $this->phone = $row['phone'];
        $this->image_of_id = $row['image_of_id'];
        $this->profile_image = $row['profile_image'];
        $this->gender = $row['gender'];
        $this->dob = $row['dob'];
        $this->specialty = $row['specialty'];
        $this->addresses = $row['addresses'];
        $this->education = $row['education'];
        $this->experience_years = $row['experience_years'];
        $this->start_office_hour = $row['start_office_hour'];
        $this->end_office_hour = $row['end_office_hour'];
        $this->bio = $row['bio'];
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
        $this->username = $row['username'];
        $this->email = $row['email'];
        $this->passwordd = $row['passwordd'];
        $this->created_at = $row['created_at'];
        $this->phone = $row['phone'];
        $this->image_of_id = $row['image_of_id'];
        $this->profile_image = $row['profile_image'];
        $this->gender = $row['gender'];
        $this->dob = $row['dob'];
        $this->specialty = $row['specialty'];
        $this->addresses = $row['addresses'];
        $this->education = $row['education'];
        $this->experience_years = $row['experience_years'];
        $this->start_office_hour = $row['start_office_hour'];
        $this->end_office_hour = $row['end_office_hour'];
        $this->bio = $row['bio'];
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
        $this->username = $row['username'];
        $this->email = $row['email'];
        $this->passwordd = $row['passwordd'];
        $this->created_at = $row['created_at'];
        $this->phone = $row['phone'];
        $this->image_of_id = $row['image_of_id'];
        $this->profile_image = $row['profile_image'];
        $this->gender = $row['gender'];
        $this->dob = $row['dob'];
        $this->specialty = $row['specialty'];
        $this->addresses = $row['addresses'];
        $this->education = $row['education'];
        $this->experience_years = $row['experience_years'];
        $this->start_office_hour = $row['start_office_hour'];
        $this->end_office_hour = $row['end_office_hour'];
        $this->bio = $row['bio'];
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
        $this->username = $row['username'];
        $this->email = $row['email'];
        $this->passwordd = $row['passwordd'];
        $this->created_at = $row['created_at'];
        $this->phone = $row['phone'];
        $this->image_of_id = $row['image_of_id'];
        $this->profile_image = $row['profile_image'];
        $this->gender = $row['gender'];
        $this->dob = $row['dob'];
        $this->specialty = $row['specialty'];
        $this->addresses = $row['addresses'];
        $this->education = $row['education'];
        $this->experience_years = $row['experience_years'];
        $this->start_office_hour = $row['start_office_hour'];
        $this->end_office_hour = $row['end_office_hour'];
        $this->bio = $row['bio'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByUsername(){
      $sql = "SELECT * FROM `doctors` WHERE `username`='$this->username'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->user_id = $row['user_id'];
        $this->first_name = $row['first_name'];
        $this->middle_name = $row['middle_name'];
        $this->last_name = $row['last_name'];
        $this->username = $row['username'];
        $this->email = $row['email'];
        $this->passwordd = $row['passwordd'];
        $this->created_at = $row['created_at'];
        $this->phone = $row['phone'];
        $this->image_of_id = $row['image_of_id'];
        $this->profile_image = $row['profile_image'];
        $this->gender = $row['gender'];
        $this->dob = $row['dob'];
        $this->specialty = $row['specialty'];
        $this->addresses = $row['addresses'];
        $this->education = $row['education'];
        $this->experience_years = $row['experience_years'];
        $this->start_office_hour = $row['start_office_hour'];
        $this->end_office_hour = $row['end_office_hour'];
        $this->bio = $row['bio'];
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
        $this->username = $row['username'];
        $this->email = $row['email'];
        $this->passwordd = $row['passwordd'];
        $this->created_at = $row['created_at'];
        $this->phone = $row['phone'];
        $this->image_of_id = $row['image_of_id'];
        $this->profile_image = $row['profile_image'];
        $this->gender = $row['gender'];
        $this->dob = $row['dob'];
        $this->specialty = $row['specialty'];
        $this->addresses = $row['addresses'];
        $this->education = $row['education'];
        $this->experience_years = $row['experience_years'];
        $this->start_office_hour = $row['start_office_hour'];
        $this->end_office_hour = $row['end_office_hour'];
        $this->bio = $row['bio'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByPasswordd(){
      $sql = "SELECT * FROM `doctors` WHERE `passwordd`='$this->passwordd'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->user_id = $row['user_id'];
        $this->first_name = $row['first_name'];
        $this->middle_name = $row['middle_name'];
        $this->last_name = $row['last_name'];
        $this->username = $row['username'];
        $this->email = $row['email'];
        $this->passwordd = $row['passwordd'];
        $this->created_at = $row['created_at'];
        $this->phone = $row['phone'];
        $this->image_of_id = $row['image_of_id'];
        $this->profile_image = $row['profile_image'];
        $this->gender = $row['gender'];
        $this->dob = $row['dob'];
        $this->specialty = $row['specialty'];
        $this->addresses = $row['addresses'];
        $this->education = $row['education'];
        $this->experience_years = $row['experience_years'];
        $this->start_office_hour = $row['start_office_hour'];
        $this->end_office_hour = $row['end_office_hour'];
        $this->bio = $row['bio'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByCreated_at(){
      $sql = "SELECT * FROM `doctors` WHERE `created_at`='$this->created_at'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->user_id = $row['user_id'];
        $this->first_name = $row['first_name'];
        $this->middle_name = $row['middle_name'];
        $this->last_name = $row['last_name'];
        $this->username = $row['username'];
        $this->email = $row['email'];
        $this->passwordd = $row['passwordd'];
        $this->created_at = $row['created_at'];
        $this->phone = $row['phone'];
        $this->image_of_id = $row['image_of_id'];
        $this->profile_image = $row['profile_image'];
        $this->gender = $row['gender'];
        $this->dob = $row['dob'];
        $this->specialty = $row['specialty'];
        $this->addresses = $row['addresses'];
        $this->education = $row['education'];
        $this->experience_years = $row['experience_years'];
        $this->start_office_hour = $row['start_office_hour'];
        $this->end_office_hour = $row['end_office_hour'];
        $this->bio = $row['bio'];
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
        $this->username = $row['username'];
        $this->email = $row['email'];
        $this->passwordd = $row['passwordd'];
        $this->created_at = $row['created_at'];
        $this->phone = $row['phone'];
        $this->image_of_id = $row['image_of_id'];
        $this->profile_image = $row['profile_image'];
        $this->gender = $row['gender'];
        $this->dob = $row['dob'];
        $this->specialty = $row['specialty'];
        $this->addresses = $row['addresses'];
        $this->education = $row['education'];
        $this->experience_years = $row['experience_years'];
        $this->start_office_hour = $row['start_office_hour'];
        $this->end_office_hour = $row['end_office_hour'];
        $this->bio = $row['bio'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByImage_of_id(){
      $sql = "SELECT * FROM `doctors` WHERE `image_of_id`='$this->image_of_id'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->user_id = $row['user_id'];
        $this->first_name = $row['first_name'];
        $this->middle_name = $row['middle_name'];
        $this->last_name = $row['last_name'];
        $this->username = $row['username'];
        $this->email = $row['email'];
        $this->passwordd = $row['passwordd'];
        $this->created_at = $row['created_at'];
        $this->phone = $row['phone'];
        $this->image_of_id = $row['image_of_id'];
        $this->profile_image = $row['profile_image'];
        $this->gender = $row['gender'];
        $this->dob = $row['dob'];
        $this->specialty = $row['specialty'];
        $this->addresses = $row['addresses'];
        $this->education = $row['education'];
        $this->experience_years = $row['experience_years'];
        $this->start_office_hour = $row['start_office_hour'];
        $this->end_office_hour = $row['end_office_hour'];
        $this->bio = $row['bio'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByProfile_image(){
      $sql = "SELECT * FROM `doctors` WHERE `profile_image`='$this->profile_image'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->user_id = $row['user_id'];
        $this->first_name = $row['first_name'];
        $this->middle_name = $row['middle_name'];
        $this->last_name = $row['last_name'];
        $this->username = $row['username'];
        $this->email = $row['email'];
        $this->passwordd = $row['passwordd'];
        $this->created_at = $row['created_at'];
        $this->phone = $row['phone'];
        $this->image_of_id = $row['image_of_id'];
        $this->profile_image = $row['profile_image'];
        $this->gender = $row['gender'];
        $this->dob = $row['dob'];
        $this->specialty = $row['specialty'];
        $this->addresses = $row['addresses'];
        $this->education = $row['education'];
        $this->experience_years = $row['experience_years'];
        $this->start_office_hour = $row['start_office_hour'];
        $this->end_office_hour = $row['end_office_hour'];
        $this->bio = $row['bio'];
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
        $this->username = $row['username'];
        $this->email = $row['email'];
        $this->passwordd = $row['passwordd'];
        $this->created_at = $row['created_at'];
        $this->phone = $row['phone'];
        $this->image_of_id = $row['image_of_id'];
        $this->profile_image = $row['profile_image'];
        $this->gender = $row['gender'];
        $this->dob = $row['dob'];
        $this->specialty = $row['specialty'];
        $this->addresses = $row['addresses'];
        $this->education = $row['education'];
        $this->experience_years = $row['experience_years'];
        $this->start_office_hour = $row['start_office_hour'];
        $this->end_office_hour = $row['end_office_hour'];
        $this->bio = $row['bio'];
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
        $this->username = $row['username'];
        $this->email = $row['email'];
        $this->passwordd = $row['passwordd'];
        $this->created_at = $row['created_at'];
        $this->phone = $row['phone'];
        $this->image_of_id = $row['image_of_id'];
        $this->profile_image = $row['profile_image'];
        $this->gender = $row['gender'];
        $this->dob = $row['dob'];
        $this->specialty = $row['specialty'];
        $this->addresses = $row['addresses'];
        $this->education = $row['education'];
        $this->experience_years = $row['experience_years'];
        $this->start_office_hour = $row['start_office_hour'];
        $this->end_office_hour = $row['end_office_hour'];
        $this->bio = $row['bio'];
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
        $this->username = $row['username'];
        $this->email = $row['email'];
        $this->passwordd = $row['passwordd'];
        $this->created_at = $row['created_at'];
        $this->phone = $row['phone'];
        $this->image_of_id = $row['image_of_id'];
        $this->profile_image = $row['profile_image'];
        $this->gender = $row['gender'];
        $this->dob = $row['dob'];
        $this->specialty = $row['specialty'];
        $this->addresses = $row['addresses'];
        $this->education = $row['education'];
        $this->experience_years = $row['experience_years'];
        $this->start_office_hour = $row['start_office_hour'];
        $this->end_office_hour = $row['end_office_hour'];
        $this->bio = $row['bio'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByAddresses(){
      $sql = "SELECT * FROM `doctors` WHERE `addresses`='$this->addresses'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->user_id = $row['user_id'];
        $this->first_name = $row['first_name'];
        $this->middle_name = $row['middle_name'];
        $this->last_name = $row['last_name'];
        $this->username = $row['username'];
        $this->email = $row['email'];
        $this->passwordd = $row['passwordd'];
        $this->created_at = $row['created_at'];
        $this->phone = $row['phone'];
        $this->image_of_id = $row['image_of_id'];
        $this->profile_image = $row['profile_image'];
        $this->gender = $row['gender'];
        $this->dob = $row['dob'];
        $this->specialty = $row['specialty'];
        $this->addresses = $row['addresses'];
        $this->education = $row['education'];
        $this->experience_years = $row['experience_years'];
        $this->start_office_hour = $row['start_office_hour'];
        $this->end_office_hour = $row['end_office_hour'];
        $this->bio = $row['bio'];
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
        $this->username = $row['username'];
        $this->email = $row['email'];
        $this->passwordd = $row['passwordd'];
        $this->created_at = $row['created_at'];
        $this->phone = $row['phone'];
        $this->image_of_id = $row['image_of_id'];
        $this->profile_image = $row['profile_image'];
        $this->gender = $row['gender'];
        $this->dob = $row['dob'];
        $this->specialty = $row['specialty'];
        $this->addresses = $row['addresses'];
        $this->education = $row['education'];
        $this->experience_years = $row['experience_years'];
        $this->start_office_hour = $row['start_office_hour'];
        $this->end_office_hour = $row['end_office_hour'];
        $this->bio = $row['bio'];
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
        $this->username = $row['username'];
        $this->email = $row['email'];
        $this->passwordd = $row['passwordd'];
        $this->created_at = $row['created_at'];
        $this->phone = $row['phone'];
        $this->image_of_id = $row['image_of_id'];
        $this->profile_image = $row['profile_image'];
        $this->gender = $row['gender'];
        $this->dob = $row['dob'];
        $this->specialty = $row['specialty'];
        $this->addresses = $row['addresses'];
        $this->education = $row['education'];
        $this->experience_years = $row['experience_years'];
        $this->start_office_hour = $row['start_office_hour'];
        $this->end_office_hour = $row['end_office_hour'];
        $this->bio = $row['bio'];
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
        $this->username = $row['username'];
        $this->email = $row['email'];
        $this->passwordd = $row['passwordd'];
        $this->created_at = $row['created_at'];
        $this->phone = $row['phone'];
        $this->image_of_id = $row['image_of_id'];
        $this->profile_image = $row['profile_image'];
        $this->gender = $row['gender'];
        $this->dob = $row['dob'];
        $this->specialty = $row['specialty'];
        $this->addresses = $row['addresses'];
        $this->education = $row['education'];
        $this->experience_years = $row['experience_years'];
        $this->start_office_hour = $row['start_office_hour'];
        $this->end_office_hour = $row['end_office_hour'];
        $this->bio = $row['bio'];
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
        $this->username = $row['username'];
        $this->email = $row['email'];
        $this->passwordd = $row['passwordd'];
        $this->created_at = $row['created_at'];
        $this->phone = $row['phone'];
        $this->image_of_id = $row['image_of_id'];
        $this->profile_image = $row['profile_image'];
        $this->gender = $row['gender'];
        $this->dob = $row['dob'];
        $this->specialty = $row['specialty'];
        $this->addresses = $row['addresses'];
        $this->education = $row['education'];
        $this->experience_years = $row['experience_years'];
        $this->start_office_hour = $row['start_office_hour'];
        $this->end_office_hour = $row['end_office_hour'];
        $this->bio = $row['bio'];
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
        $this->username = $row['username'];
        $this->email = $row['email'];
        $this->passwordd = $row['passwordd'];
        $this->created_at = $row['created_at'];
        $this->phone = $row['phone'];
        $this->image_of_id = $row['image_of_id'];
        $this->profile_image = $row['profile_image'];
        $this->gender = $row['gender'];
        $this->dob = $row['dob'];
        $this->specialty = $row['specialty'];
        $this->addresses = $row['addresses'];
        $this->education = $row['education'];
        $this->experience_years = $row['experience_years'];
        $this->start_office_hour = $row['start_office_hour'];
        $this->end_office_hour = $row['end_office_hour'];
        $this->bio = $row['bio'];
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
        $this->username = $row['username'];
        $this->email = $row['email'];
        $this->passwordd = $row['passwordd'];
        $this->created_at = $row['created_at'];
        $this->phone = $row['phone'];
        $this->image_of_id = $row['image_of_id'];
        $this->profile_image = $row['profile_image'];
        $this->gender = $row['gender'];
        $this->dob = $row['dob'];
        $this->specialty = $row['specialty'];
        $this->addresses = $row['addresses'];
        $this->education = $row['education'];
        $this->experience_years = $row['experience_years'];
        $this->start_office_hour = $row['start_office_hour'];
        $this->end_office_hour = $row['end_office_hour'];
        $this->bio = $row['bio'];
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
        $this->username = $row['username'];
        $this->email = $row['email'];
        $this->passwordd = $row['passwordd'];
        $this->created_at = $row['created_at'];
        $this->phone = $row['phone'];
        $this->image_of_id = $row['image_of_id'];
        $this->profile_image = $row['profile_image'];
        $this->gender = $row['gender'];
        $this->dob = $row['dob'];
        $this->specialty = $row['specialty'];
        $this->addresses = $row['addresses'];
        $this->education = $row['education'];
        $this->experience_years = $row['experience_years'];
        $this->start_office_hour = $row['start_office_hour'];
        $this->end_office_hour = $row['end_office_hour'];
        $this->bio = $row['bio'];
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
        $this->username = $row['username'];
        $this->email = $row['email'];
        $this->passwordd = $row['passwordd'];
        $this->created_at = $row['created_at'];
        $this->phone = $row['phone'];
        $this->image_of_id = $row['image_of_id'];
        $this->profile_image = $row['profile_image'];
        $this->gender = $row['gender'];
        $this->dob = $row['dob'];
        $this->specialty = $row['specialty'];
        $this->addresses = $row['addresses'];
        $this->education = $row['education'];
        $this->experience_years = $row['experience_years'];
        $this->start_office_hour = $row['start_office_hour'];
        $this->end_office_hour = $row['end_office_hour'];
        $this->bio = $row['bio'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getBySet($limit){
      if(!is_numeric($limit)){ return '[]'; }
      $sql = "SELECT * FROM `doctors` WHERE `id` LIKE '%$this->id%' AND `user_id` LIKE '%$this->user_id%' AND `first_name` LIKE '%$this->first_name%' AND `middle_name` LIKE '%$this->middle_name%' AND `last_name` LIKE '%$this->last_name%' AND `username` LIKE '%$this->username%' AND `email` LIKE '%$this->email%' AND `passwordd` LIKE '%$this->passwordd%' AND `created_at` LIKE '%$this->created_at%' AND `phone` LIKE '%$this->phone%' AND `image_of_id` LIKE '%$this->image_of_id%' AND `profile_image` LIKE '%$this->profile_image%' AND `gender` LIKE '%$this->gender%' AND `dob` LIKE '%$this->dob%' AND `specialty` LIKE '%$this->specialty%' AND `addresses` LIKE '%$this->addresses%' AND `education` LIKE '%$this->education%' AND `experience_years` LIKE '%$this->experience_years%' AND `start_office_hour` LIKE '%$this->start_office_hour%' AND `end_office_hour` LIKE '%$this->end_office_hour%' AND `bio` LIKE '%$this->bio%' AND `time` LIKE '%$this->time%' LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function add(){
      $sql = "INSERT INTO `doctors` (`id`, `user_id`, `first_name`, `middle_name`, `last_name`, `username`, `email`, `passwordd`, `created_at`, `phone`, `image_of_id`, `profile_image`, `gender`, `dob`, `specialty`, `addresses`, `education`, `experience_years`, `start_office_hour`, `end_office_hour`, `bio`, `time`) VALUES 
      ('$this->id', '$this->user_id', '$this->first_name', '$this->middle_name', '$this->last_name', '$this->username', '$this->email', '$this->passwordd', '$this->created_at', '$this->phone', '$this->image_of_id', '$this->profile_image', '$this->gender', '$this->dob', '$this->specialty', '$this->addresses', '$this->education', '$this->experience_years', '$this->start_office_hour', '$this->end_office_hour', '$this->bio', '$this->time')";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function update(){
      $sql = "UPDATE `doctors` SET `id`='$this->id', `user_id`='$this->user_id', `first_name`='$this->first_name', `middle_name`='$this->middle_name', `last_name`='$this->last_name', `username`='$this->username', `email`='$this->email', `passwordd`='$this->passwordd', `created_at`='$this->created_at', `phone`='$this->phone', `image_of_id`='$this->image_of_id', `profile_image`='$this->profile_image', `gender`='$this->gender', `dob`='$this->dob', `specialty`='$this->specialty', `addresses`='$this->addresses', `education`='$this->education', `experience_years`='$this->experience_years', `start_office_hour`='$this->start_office_hour', `end_office_hour`='$this->end_office_hour', `bio`='$this->bio', `time`='$this->time' WHERE `id`='$this->id'";
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

    public function setUsername($username){
      if(is_string($username)){
        $this->username = filter($username);
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

    public function setPasswordd($passwordd){
      if(is_string($passwordd)){
        $this->passwordd = filter($passwordd);
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

    public function setPhone($phone){
      if(is_string($phone)){
        $this->phone = filter($phone);
        return true;
      }else{
        return false;
      }
    }

    public function setImage_of_id($image_of_id){
      if(is_string($image_of_id)){
        $this->image_of_id = filter($image_of_id);
        return true;
      }else{
        return false;
      }
    }

    public function setProfile_image($profile_image){
      if(is_string($profile_image)){
        $this->profile_image = filter($profile_image);
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
      if(is_numeric($dob)){
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

    public function setAddresses($addresses){
      if(is_string($addresses)){
        $this->addresses = filter($addresses);
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
      if(is_numeric($start_office_hour)){
        $this->start_office_hour = filter($start_office_hour);
        return true;
      }else{
        return false;
      }
    }

    public function setEnd_office_hour($end_office_hour){
      if(is_numeric($end_office_hour)){
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

    public function getUsername(){
      return $this->username;
    }

    public function getEmail(){
      return $this->email;
    }

    public function getPasswordd(){
      return $this->passwordd;
    }

    public function getCreated_at(){
      return $this->created_at;
    }

    public function getPhone(){
      return $this->phone;
    }

    public function getImage_of_id(){
      return $this->image_of_id;
    }

    public function getProfile_image(){
      return $this->profile_image;
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

    public function getAddresses(){
      return $this->addresses;
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

    public function getTime(){
      return $this->time;
    }

  }
?>
