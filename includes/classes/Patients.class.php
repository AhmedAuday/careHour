<?php
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/config.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/encrypt.inc.php';

  class Patients extends Database {
    private $sqlCondition = 1;
    private $id;
    private $first_name;
    private $middle_name;
    private $last_name;
    private $username;
    private $email;
    private $passwordd;
    private $image_of_id;
    private $profile_image;
    private $date_of_birth;
    private $blood_type;
    private $gender;
    private $addresses;
    private $city;
    private $phone_number;
    private $time;

    public function __construct($id = null){
      $this->time = time();
      if($id != null){
        $this->setId($id);
        if($id != $this->id){
          exit('');
        }
        $sql = "SELECT * FROM `patients` WHERE `id`=$this->id";
        $result = $this->db()->query($sql);
        if($result->rowCount() > 0){
          $row = $result->fetch();
          $this->id = $row['id'];
          $this->first_name = $row['first_name'];
          $this->middle_name = $row['middle_name'];
          $this->last_name = $row['last_name'];
          $this->username = $row['username'];
          $this->email = $row['email'];
          $this->passwordd = $row['passwordd'];
          $this->image_of_id = $row['image_of_id'];
          $this->profile_image = $row['profile_image'];
          $this->date_of_birth = $row['date_of_birth'];
          $this->blood_type = $row['blood_type'];
          $this->gender = $row['gender'];
          $this->addresses = $row['addresses'];
          $this->city = $row['city'];
          $this->phone_number = $row['phone_number'];
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
      $sql = "SELECT * FROM `patients` WHERE $this->sqlCondition ORDER BY `id` LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function getAllReversed($limit = 1000000){
      if(!is_numeric($limit)){ return '[]'; }
      $sql = "SELECT * FROM `patients` WHERE $this->sqlCondition ORDER BY `id` DESC LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function getNumberOfRows(){
      $sql = "SELECT COUNT(*) AS 'numberOfRows' FROM `patients` WHERE $this->sqlCondition";
      $result = $this->db()->query($sql);
      $row = $result->fetch();
      return $row['numberOfRows'];
    }

    public function getById(){
      $sql = "SELECT * FROM `patients` WHERE `id`='$this->id'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->first_name = $row['first_name'];
        $this->middle_name = $row['middle_name'];
        $this->last_name = $row['last_name'];
        $this->username = $row['username'];
        $this->email = $row['email'];
        $this->passwordd = $row['passwordd'];
        $this->image_of_id = $row['image_of_id'];
        $this->profile_image = $row['profile_image'];
        $this->date_of_birth = $row['date_of_birth'];
        $this->blood_type = $row['blood_type'];
        $this->gender = $row['gender'];
        $this->addresses = $row['addresses'];
        $this->city = $row['city'];
        $this->phone_number = $row['phone_number'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByFirst_name(){
      $sql = "SELECT * FROM `patients` WHERE `first_name`='$this->first_name'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->first_name = $row['first_name'];
        $this->middle_name = $row['middle_name'];
        $this->last_name = $row['last_name'];
        $this->username = $row['username'];
        $this->email = $row['email'];
        $this->passwordd = $row['passwordd'];
        $this->image_of_id = $row['image_of_id'];
        $this->profile_image = $row['profile_image'];
        $this->date_of_birth = $row['date_of_birth'];
        $this->blood_type = $row['blood_type'];
        $this->gender = $row['gender'];
        $this->addresses = $row['addresses'];
        $this->city = $row['city'];
        $this->phone_number = $row['phone_number'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByMiddle_name(){
      $sql = "SELECT * FROM `patients` WHERE `middle_name`='$this->middle_name'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->first_name = $row['first_name'];
        $this->middle_name = $row['middle_name'];
        $this->last_name = $row['last_name'];
        $this->username = $row['username'];
        $this->email = $row['email'];
        $this->passwordd = $row['passwordd'];
        $this->image_of_id = $row['image_of_id'];
        $this->profile_image = $row['profile_image'];
        $this->date_of_birth = $row['date_of_birth'];
        $this->blood_type = $row['blood_type'];
        $this->gender = $row['gender'];
        $this->addresses = $row['addresses'];
        $this->city = $row['city'];
        $this->phone_number = $row['phone_number'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByLast_name(){
      $sql = "SELECT * FROM `patients` WHERE `last_name`='$this->last_name'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->first_name = $row['first_name'];
        $this->middle_name = $row['middle_name'];
        $this->last_name = $row['last_name'];
        $this->username = $row['username'];
        $this->email = $row['email'];
        $this->passwordd = $row['passwordd'];
        $this->image_of_id = $row['image_of_id'];
        $this->profile_image = $row['profile_image'];
        $this->date_of_birth = $row['date_of_birth'];
        $this->blood_type = $row['blood_type'];
        $this->gender = $row['gender'];
        $this->addresses = $row['addresses'];
        $this->city = $row['city'];
        $this->phone_number = $row['phone_number'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByUsername(){
      $sql = "SELECT * FROM `patients` WHERE `username`='$this->username'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->first_name = $row['first_name'];
        $this->middle_name = $row['middle_name'];
        $this->last_name = $row['last_name'];
        $this->username = $row['username'];
        $this->email = $row['email'];
        $this->passwordd = $row['passwordd'];
        $this->image_of_id = $row['image_of_id'];
        $this->profile_image = $row['profile_image'];
        $this->date_of_birth = $row['date_of_birth'];
        $this->blood_type = $row['blood_type'];
        $this->gender = $row['gender'];
        $this->addresses = $row['addresses'];
        $this->city = $row['city'];
        $this->phone_number = $row['phone_number'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByEmail(){
      $sql = "SELECT * FROM `patients` WHERE `email`='$this->email'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->first_name = $row['first_name'];
        $this->middle_name = $row['middle_name'];
        $this->last_name = $row['last_name'];
        $this->username = $row['username'];
        $this->email = $row['email'];
        $this->passwordd = $row['passwordd'];
        $this->image_of_id = $row['image_of_id'];
        $this->profile_image = $row['profile_image'];
        $this->date_of_birth = $row['date_of_birth'];
        $this->blood_type = $row['blood_type'];
        $this->gender = $row['gender'];
        $this->addresses = $row['addresses'];
        $this->city = $row['city'];
        $this->phone_number = $row['phone_number'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByPasswordd(){
      $sql = "SELECT * FROM `patients` WHERE `passwordd`='$this->passwordd'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->first_name = $row['first_name'];
        $this->middle_name = $row['middle_name'];
        $this->last_name = $row['last_name'];
        $this->username = $row['username'];
        $this->email = $row['email'];
        $this->passwordd = $row['passwordd'];
        $this->image_of_id = $row['image_of_id'];
        $this->profile_image = $row['profile_image'];
        $this->date_of_birth = $row['date_of_birth'];
        $this->blood_type = $row['blood_type'];
        $this->gender = $row['gender'];
        $this->addresses = $row['addresses'];
        $this->city = $row['city'];
        $this->phone_number = $row['phone_number'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByImage_of_id(){
      $sql = "SELECT * FROM `patients` WHERE `image_of_id`='$this->image_of_id'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->first_name = $row['first_name'];
        $this->middle_name = $row['middle_name'];
        $this->last_name = $row['last_name'];
        $this->username = $row['username'];
        $this->email = $row['email'];
        $this->passwordd = $row['passwordd'];
        $this->image_of_id = $row['image_of_id'];
        $this->profile_image = $row['profile_image'];
        $this->date_of_birth = $row['date_of_birth'];
        $this->blood_type = $row['blood_type'];
        $this->gender = $row['gender'];
        $this->addresses = $row['addresses'];
        $this->city = $row['city'];
        $this->phone_number = $row['phone_number'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByProfile_image(){
      $sql = "SELECT * FROM `patients` WHERE `profile_image`='$this->profile_image'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->first_name = $row['first_name'];
        $this->middle_name = $row['middle_name'];
        $this->last_name = $row['last_name'];
        $this->username = $row['username'];
        $this->email = $row['email'];
        $this->passwordd = $row['passwordd'];
        $this->image_of_id = $row['image_of_id'];
        $this->profile_image = $row['profile_image'];
        $this->date_of_birth = $row['date_of_birth'];
        $this->blood_type = $row['blood_type'];
        $this->gender = $row['gender'];
        $this->addresses = $row['addresses'];
        $this->city = $row['city'];
        $this->phone_number = $row['phone_number'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByDate_of_birth(){
      $sql = "SELECT * FROM `patients` WHERE `date_of_birth`='$this->date_of_birth'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->first_name = $row['first_name'];
        $this->middle_name = $row['middle_name'];
        $this->last_name = $row['last_name'];
        $this->username = $row['username'];
        $this->email = $row['email'];
        $this->passwordd = $row['passwordd'];
        $this->image_of_id = $row['image_of_id'];
        $this->profile_image = $row['profile_image'];
        $this->date_of_birth = $row['date_of_birth'];
        $this->blood_type = $row['blood_type'];
        $this->gender = $row['gender'];
        $this->addresses = $row['addresses'];
        $this->city = $row['city'];
        $this->phone_number = $row['phone_number'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByBlood_type(){
      $sql = "SELECT * FROM `patients` WHERE `blood_type`='$this->blood_type'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->first_name = $row['first_name'];
        $this->middle_name = $row['middle_name'];
        $this->last_name = $row['last_name'];
        $this->username = $row['username'];
        $this->email = $row['email'];
        $this->passwordd = $row['passwordd'];
        $this->image_of_id = $row['image_of_id'];
        $this->profile_image = $row['profile_image'];
        $this->date_of_birth = $row['date_of_birth'];
        $this->blood_type = $row['blood_type'];
        $this->gender = $row['gender'];
        $this->addresses = $row['addresses'];
        $this->city = $row['city'];
        $this->phone_number = $row['phone_number'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByGender(){
      $sql = "SELECT * FROM `patients` WHERE `gender`='$this->gender'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->first_name = $row['first_name'];
        $this->middle_name = $row['middle_name'];
        $this->last_name = $row['last_name'];
        $this->username = $row['username'];
        $this->email = $row['email'];
        $this->passwordd = $row['passwordd'];
        $this->image_of_id = $row['image_of_id'];
        $this->profile_image = $row['profile_image'];
        $this->date_of_birth = $row['date_of_birth'];
        $this->blood_type = $row['blood_type'];
        $this->gender = $row['gender'];
        $this->addresses = $row['addresses'];
        $this->city = $row['city'];
        $this->phone_number = $row['phone_number'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByAddresses(){
      $sql = "SELECT * FROM `patients` WHERE `addresses`='$this->addresses'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->first_name = $row['first_name'];
        $this->middle_name = $row['middle_name'];
        $this->last_name = $row['last_name'];
        $this->username = $row['username'];
        $this->email = $row['email'];
        $this->passwordd = $row['passwordd'];
        $this->image_of_id = $row['image_of_id'];
        $this->profile_image = $row['profile_image'];
        $this->date_of_birth = $row['date_of_birth'];
        $this->blood_type = $row['blood_type'];
        $this->gender = $row['gender'];
        $this->addresses = $row['addresses'];
        $this->city = $row['city'];
        $this->phone_number = $row['phone_number'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByCity(){
      $sql = "SELECT * FROM `patients` WHERE `city`='$this->city'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->first_name = $row['first_name'];
        $this->middle_name = $row['middle_name'];
        $this->last_name = $row['last_name'];
        $this->username = $row['username'];
        $this->email = $row['email'];
        $this->passwordd = $row['passwordd'];
        $this->image_of_id = $row['image_of_id'];
        $this->profile_image = $row['profile_image'];
        $this->date_of_birth = $row['date_of_birth'];
        $this->blood_type = $row['blood_type'];
        $this->gender = $row['gender'];
        $this->addresses = $row['addresses'];
        $this->city = $row['city'];
        $this->phone_number = $row['phone_number'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByPhone_number(){
      $sql = "SELECT * FROM `patients` WHERE `phone_number`='$this->phone_number'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->first_name = $row['first_name'];
        $this->middle_name = $row['middle_name'];
        $this->last_name = $row['last_name'];
        $this->username = $row['username'];
        $this->email = $row['email'];
        $this->passwordd = $row['passwordd'];
        $this->image_of_id = $row['image_of_id'];
        $this->profile_image = $row['profile_image'];
        $this->date_of_birth = $row['date_of_birth'];
        $this->blood_type = $row['blood_type'];
        $this->gender = $row['gender'];
        $this->addresses = $row['addresses'];
        $this->city = $row['city'];
        $this->phone_number = $row['phone_number'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByTime(){
      $sql = "SELECT * FROM `patients` WHERE `time`='$this->time'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->first_name = $row['first_name'];
        $this->middle_name = $row['middle_name'];
        $this->last_name = $row['last_name'];
        $this->username = $row['username'];
        $this->email = $row['email'];
        $this->passwordd = $row['passwordd'];
        $this->image_of_id = $row['image_of_id'];
        $this->profile_image = $row['profile_image'];
        $this->date_of_birth = $row['date_of_birth'];
        $this->blood_type = $row['blood_type'];
        $this->gender = $row['gender'];
        $this->addresses = $row['addresses'];
        $this->city = $row['city'];
        $this->phone_number = $row['phone_number'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getLastRow(){
      $sql = "SELECT * FROM `patients` WHERE $this->sqlCondition ORDER BY `id` DESC";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->first_name = $row['first_name'];
        $this->middle_name = $row['middle_name'];
        $this->last_name = $row['last_name'];
        $this->username = $row['username'];
        $this->email = $row['email'];
        $this->passwordd = $row['passwordd'];
        $this->image_of_id = $row['image_of_id'];
        $this->profile_image = $row['profile_image'];
        $this->date_of_birth = $row['date_of_birth'];
        $this->blood_type = $row['blood_type'];
        $this->gender = $row['gender'];
        $this->addresses = $row['addresses'];
        $this->city = $row['city'];
        $this->phone_number = $row['phone_number'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getFirstRow(){
      $sql = "SELECT * FROM `patients` WHERE $this->sqlCondition ORDER BY `id`";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->first_name = $row['first_name'];
        $this->middle_name = $row['middle_name'];
        $this->last_name = $row['last_name'];
        $this->username = $row['username'];
        $this->email = $row['email'];
        $this->passwordd = $row['passwordd'];
        $this->image_of_id = $row['image_of_id'];
        $this->profile_image = $row['profile_image'];
        $this->date_of_birth = $row['date_of_birth'];
        $this->blood_type = $row['blood_type'];
        $this->gender = $row['gender'];
        $this->addresses = $row['addresses'];
        $this->city = $row['city'];
        $this->phone_number = $row['phone_number'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getBySet($limit){
      if(!is_numeric($limit)){ return '[]'; }
      $sql = "SELECT * FROM `patients` WHERE `id` LIKE '%$this->id%' AND `first_name` LIKE '%$this->first_name%' AND `middle_name` LIKE '%$this->middle_name%' AND `last_name` LIKE '%$this->last_name%' AND `username` LIKE '%$this->username%' AND `email` LIKE '%$this->email%' AND `passwordd` LIKE '%$this->passwordd%' AND `image_of_id` LIKE '%$this->image_of_id%' AND `profile_image` LIKE '%$this->profile_image%' AND `date_of_birth` LIKE '%$this->date_of_birth%' AND `blood_type` LIKE '%$this->blood_type%' AND `gender` LIKE '%$this->gender%' AND `addresses` LIKE '%$this->addresses%' AND `city` LIKE '%$this->city%' AND `phone_number` LIKE '%$this->phone_number%' AND `time` LIKE '%$this->time%' LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function add(){
      $sql = "INSERT INTO `patients` ( `first_name`, `middle_name`, `last_name`, `username`, `email`, `passwordd`, `image_of_id`, `profile_image`, `date_of_birth`, `blood_type`, `gender`, `addresses`, `city`, `phone_number`, `time`) VALUES 
      ( '$this->first_name', '$this->middle_name', '$this->last_name', '$this->username', '$this->email', '$this->passwordd', '$this->image_of_id', '$this->profile_image', '$this->date_of_birth', '$this->blood_type', '$this->gender', '$this->addresses', '$this->city', '$this->phone_number', '$this->time')";
      // echo($sql);
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function update(){
      $sql = "UPDATE `patients` SET `id`='$this->id', `first_name`='$this->first_name', `middle_name`='$this->middle_name', `last_name`='$this->last_name', `username`='$this->username', `email`='$this->email', `passwordd`='$this->passwordd', `image_of_id`='$this->image_of_id', `profile_image`='$this->profile_image', `date_of_birth`='$this->date_of_birth', `blood_type`='$this->blood_type', `gender`='$this->gender', `addresses`='$this->addresses', `city`='$this->city', `phone_number`='$this->phone_number', `time`='$this->time' WHERE `id`='$this->id'";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function delete() {
      $sql = "DELETE FROM `patients` WHERE `id`='$this->id'";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function giveIdentity($days){
      setcookie('patients', encode("$this->id"), time() + (86400 * $days), "/");
    }

    public function getIdentity($days){
      if(isset($_COOKIE['patients'])){
        decode($_COOKIE['patients']);
      }else{return false;}
    }

    public function deleteIdentity($days){
      setcookie("patients", '', time() - 3600);
    }

    public function giveAuthority(){
      $_SESSION['patients'] = encrypt($this->id);
      $_SESSION['patients_id'] = $this->id;
    }

    public function getAuthority(){
      if(isset($_SESSION['patients']) && isset($_SESSION['patients_id'])){
        $tmp_id = filter($_SESSION['patients_id']);
        $sql = "SELECT * from `patients` WHERE `id`='$tmp_id'";
        $result = $this->db()->query($sql);
        $row = $result->fetch();
        if(encrypt($row['id']) == $_SESSION['patients']){
          return $_SESSION['patients_id'];
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

    public function setDate_of_birth($date_of_birth){
      if(is_numeric($date_of_birth)){
        $this->date_of_birth = filter($date_of_birth);
        return true;
      }else{
        return false;
      }
    }

    public function setBlood_type($blood_type){
      if(is_string($blood_type)){
        $this->blood_type = filter($blood_type);
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

    public function setAddresses($addresses){
      if(is_string($addresses)){
        $this->addresses = filter($addresses);
        return true;
      }else{
        return false;
      }
    }

    public function setCity($city){
      if(is_string($city)){
        $this->city = filter($city);
        return true;
      }else{
        return false;
      }
    }

    public function setPhone_number($phone_number){
      if(is_string($phone_number)){
        $this->phone_number = filter($phone_number);
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

    public function getImage_of_id(){
      return $this->image_of_id;
    }

    public function getProfile_image(){
      return $this->profile_image;
    }

    public function getDate_of_birth(){
      return $this->date_of_birth;
    }

    public function getBlood_type(){
      return $this->blood_type;
    }

    public function getGender(){
      return $this->gender;
    }

    public function getAddresses(){
      return $this->addresses;
    }

    public function getCity(){
      return $this->city;
    }

    public function getPhone_number(){
      return $this->phone_number;
    }

    public function getTime(){
      return $this->time;
    }

  }
?>
