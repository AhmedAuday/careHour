<?php
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/config.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/encrypt.inc.php';

  class Patients extends Database {
    private $sqlCondition = 1;
    private $id;
    private $user_id;
    private $first_name;
    private $middle_name;
    private $last_name;
    private $date_of_birth;
    private $gender;
    private $address;
    private $city;
    private $zip_code;
    private $phone_number;
    private $email;
    private $timee;
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
          $this->user_id = $row['user_id'];
          $this->first_name = $row['first_name'];
          $this->middle_name = $row['middle_name'];
          $this->last_name = $row['last_name'];
          $this->date_of_birth = $row['date_of_birth'];
          $this->gender = $row['gender'];
          $this->address = $row['address'];
          $this->city = $row['city'];
          $this->zip_code = $row['zip_code'];
          $this->phone_number = $row['phone_number'];
          $this->email = $row['email'];
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
        $this->user_id = $row['user_id'];
        $this->first_name = $row['first_name'];
        $this->middle_name = $row['middle_name'];
        $this->last_name = $row['last_name'];
        $this->date_of_birth = $row['date_of_birth'];
        $this->gender = $row['gender'];
        $this->address = $row['address'];
        $this->city = $row['city'];
        $this->zip_code = $row['zip_code'];
        $this->phone_number = $row['phone_number'];
        $this->email = $row['email'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByUser_id(){
      $sql = "SELECT * FROM `patients` WHERE `user_id`='$this->user_id'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->user_id = $row['user_id'];
        $this->first_name = $row['first_name'];
        $this->middle_name = $row['middle_name'];
        $this->last_name = $row['last_name'];
        $this->date_of_birth = $row['date_of_birth'];
        $this->gender = $row['gender'];
        $this->address = $row['address'];
        $this->city = $row['city'];
        $this->zip_code = $row['zip_code'];
        $this->phone_number = $row['phone_number'];
        $this->email = $row['email'];
        $this->timee = $row['timee'];
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
        $this->user_id = $row['user_id'];
        $this->first_name = $row['first_name'];
        $this->middle_name = $row['middle_name'];
        $this->last_name = $row['last_name'];
        $this->date_of_birth = $row['date_of_birth'];
        $this->gender = $row['gender'];
        $this->address = $row['address'];
        $this->city = $row['city'];
        $this->zip_code = $row['zip_code'];
        $this->phone_number = $row['phone_number'];
        $this->email = $row['email'];
        $this->timee = $row['timee'];
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
        $this->user_id = $row['user_id'];
        $this->first_name = $row['first_name'];
        $this->middle_name = $row['middle_name'];
        $this->last_name = $row['last_name'];
        $this->date_of_birth = $row['date_of_birth'];
        $this->gender = $row['gender'];
        $this->address = $row['address'];
        $this->city = $row['city'];
        $this->zip_code = $row['zip_code'];
        $this->phone_number = $row['phone_number'];
        $this->email = $row['email'];
        $this->timee = $row['timee'];
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
        $this->user_id = $row['user_id'];
        $this->first_name = $row['first_name'];
        $this->middle_name = $row['middle_name'];
        $this->last_name = $row['last_name'];
        $this->date_of_birth = $row['date_of_birth'];
        $this->gender = $row['gender'];
        $this->address = $row['address'];
        $this->city = $row['city'];
        $this->zip_code = $row['zip_code'];
        $this->phone_number = $row['phone_number'];
        $this->email = $row['email'];
        $this->timee = $row['timee'];
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
        $this->user_id = $row['user_id'];
        $this->first_name = $row['first_name'];
        $this->middle_name = $row['middle_name'];
        $this->last_name = $row['last_name'];
        $this->date_of_birth = $row['date_of_birth'];
        $this->gender = $row['gender'];
        $this->address = $row['address'];
        $this->city = $row['city'];
        $this->zip_code = $row['zip_code'];
        $this->phone_number = $row['phone_number'];
        $this->email = $row['email'];
        $this->timee = $row['timee'];
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
        $this->user_id = $row['user_id'];
        $this->first_name = $row['first_name'];
        $this->middle_name = $row['middle_name'];
        $this->last_name = $row['last_name'];
        $this->date_of_birth = $row['date_of_birth'];
        $this->gender = $row['gender'];
        $this->address = $row['address'];
        $this->city = $row['city'];
        $this->zip_code = $row['zip_code'];
        $this->phone_number = $row['phone_number'];
        $this->email = $row['email'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByAddress(){
      $sql = "SELECT * FROM `patients` WHERE `address`='$this->address'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->user_id = $row['user_id'];
        $this->first_name = $row['first_name'];
        $this->middle_name = $row['middle_name'];
        $this->last_name = $row['last_name'];
        $this->date_of_birth = $row['date_of_birth'];
        $this->gender = $row['gender'];
        $this->address = $row['address'];
        $this->city = $row['city'];
        $this->zip_code = $row['zip_code'];
        $this->phone_number = $row['phone_number'];
        $this->email = $row['email'];
        $this->timee = $row['timee'];
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
        $this->user_id = $row['user_id'];
        $this->first_name = $row['first_name'];
        $this->middle_name = $row['middle_name'];
        $this->last_name = $row['last_name'];
        $this->date_of_birth = $row['date_of_birth'];
        $this->gender = $row['gender'];
        $this->address = $row['address'];
        $this->city = $row['city'];
        $this->zip_code = $row['zip_code'];
        $this->phone_number = $row['phone_number'];
        $this->email = $row['email'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByZip_code(){
      $sql = "SELECT * FROM `patients` WHERE `zip_code`='$this->zip_code'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->user_id = $row['user_id'];
        $this->first_name = $row['first_name'];
        $this->middle_name = $row['middle_name'];
        $this->last_name = $row['last_name'];
        $this->date_of_birth = $row['date_of_birth'];
        $this->gender = $row['gender'];
        $this->address = $row['address'];
        $this->city = $row['city'];
        $this->zip_code = $row['zip_code'];
        $this->phone_number = $row['phone_number'];
        $this->email = $row['email'];
        $this->timee = $row['timee'];
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
        $this->user_id = $row['user_id'];
        $this->first_name = $row['first_name'];
        $this->middle_name = $row['middle_name'];
        $this->last_name = $row['last_name'];
        $this->date_of_birth = $row['date_of_birth'];
        $this->gender = $row['gender'];
        $this->address = $row['address'];
        $this->city = $row['city'];
        $this->zip_code = $row['zip_code'];
        $this->phone_number = $row['phone_number'];
        $this->email = $row['email'];
        $this->timee = $row['timee'];
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
        $this->user_id = $row['user_id'];
        $this->first_name = $row['first_name'];
        $this->middle_name = $row['middle_name'];
        $this->last_name = $row['last_name'];
        $this->date_of_birth = $row['date_of_birth'];
        $this->gender = $row['gender'];
        $this->address = $row['address'];
        $this->city = $row['city'];
        $this->zip_code = $row['zip_code'];
        $this->phone_number = $row['phone_number'];
        $this->email = $row['email'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByTimee(){
      $sql = "SELECT * FROM `patients` WHERE `timee`='$this->timee'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->user_id = $row['user_id'];
        $this->first_name = $row['first_name'];
        $this->middle_name = $row['middle_name'];
        $this->last_name = $row['last_name'];
        $this->date_of_birth = $row['date_of_birth'];
        $this->gender = $row['gender'];
        $this->address = $row['address'];
        $this->city = $row['city'];
        $this->zip_code = $row['zip_code'];
        $this->phone_number = $row['phone_number'];
        $this->email = $row['email'];
        $this->timee = $row['timee'];
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
        $this->user_id = $row['user_id'];
        $this->first_name = $row['first_name'];
        $this->middle_name = $row['middle_name'];
        $this->last_name = $row['last_name'];
        $this->date_of_birth = $row['date_of_birth'];
        $this->gender = $row['gender'];
        $this->address = $row['address'];
        $this->city = $row['city'];
        $this->zip_code = $row['zip_code'];
        $this->phone_number = $row['phone_number'];
        $this->email = $row['email'];
        $this->timee = $row['timee'];
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
        $this->user_id = $row['user_id'];
        $this->first_name = $row['first_name'];
        $this->middle_name = $row['middle_name'];
        $this->last_name = $row['last_name'];
        $this->date_of_birth = $row['date_of_birth'];
        $this->gender = $row['gender'];
        $this->address = $row['address'];
        $this->city = $row['city'];
        $this->zip_code = $row['zip_code'];
        $this->phone_number = $row['phone_number'];
        $this->email = $row['email'];
        $this->timee = $row['timee'];
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
        $this->user_id = $row['user_id'];
        $this->first_name = $row['first_name'];
        $this->middle_name = $row['middle_name'];
        $this->last_name = $row['last_name'];
        $this->date_of_birth = $row['date_of_birth'];
        $this->gender = $row['gender'];
        $this->address = $row['address'];
        $this->city = $row['city'];
        $this->zip_code = $row['zip_code'];
        $this->phone_number = $row['phone_number'];
        $this->email = $row['email'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getBySet($limit){
      if(!is_numeric($limit)){ return '[]'; }
      $sql = "SELECT * FROM `patients` WHERE `id` LIKE '%$this->id%' AND `user_id` LIKE '%$this->user_id%' AND `first_name` LIKE '%$this->first_name%' AND `middle_name` LIKE '%$this->middle_name%' AND `last_name` LIKE '%$this->last_name%' AND `date_of_birth` LIKE '%$this->date_of_birth%' AND `gender` LIKE '%$this->gender%' AND `address` LIKE '%$this->address%' AND `city` LIKE '%$this->city%' AND `zip_code` LIKE '%$this->zip_code%' AND `phone_number` LIKE '%$this->phone_number%' AND `email` LIKE '%$this->email%' AND `timee` LIKE '%$this->timee%' AND `time` LIKE '%$this->time%' LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function add(){
      $sql = "INSERT INTO `patients` (`id`, `user_id`, `first_name`, `middle_name`, `last_name`, `date_of_birth`, `gender`, `address`, `city`, `zip_code`, `phone_number`, `email`, `timee`, `time`) VALUES 
      ('$this->id', '$this->user_id', '$this->first_name', '$this->middle_name', '$this->last_name', '$this->date_of_birth', '$this->gender', '$this->address', '$this->city', '$this->zip_code', '$this->phone_number', '$this->email', '$this->timee', '$this->time')";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function update(){
      $sql = "UPDATE `patients` SET `id`='$this->id', `user_id`='$this->user_id', `first_name`='$this->first_name', `middle_name`='$this->middle_name', `last_name`='$this->last_name', `date_of_birth`='$this->date_of_birth', `gender`='$this->gender', `address`='$this->address', `city`='$this->city', `zip_code`='$this->zip_code', `phone_number`='$this->phone_number', `email`='$this->email', `timee`='$this->timee', `time`='$this->time' WHERE `id`='$this->id'";
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

    public function setDate_of_birth($date_of_birth){
      if(is_string($date_of_birth)){
        $this->date_of_birth = filter($date_of_birth);
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

    public function setAddress($address){
      if(is_string($address)){
        $this->address = filter($address);
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

    public function setZip_code($zip_code){
      if(is_string($zip_code)){
        $this->zip_code = filter($zip_code);
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

    public function setEmail($email){
      if(is_string($email)){
        $this->email = filter($email);
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

    public function getDate_of_birth(){
      return $this->date_of_birth;
    }

    public function getGender(){
      return $this->gender;
    }

    public function getAddress(){
      return $this->address;
    }

    public function getCity(){
      return $this->city;
    }

    public function getZip_code(){
      return $this->zip_code;
    }

    public function getPhone_number(){
      return $this->phone_number;
    }

    public function getEmail(){
      return $this->email;
    }

    public function getTimee(){
      return $this->timee;
    }

    public function getTime(){
      return $this->time;
    }

  }
?>