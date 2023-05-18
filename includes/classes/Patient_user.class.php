<?php
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/config.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/encrypt.inc.php';

  class Patient_user extends Database {
    private $sqlCondition = 1;
    private $id;
    private $username;
    private $email;
    private $passwordd;
    private $timee;
    private $time;

    public function __construct($id = null){
      $this->time = time();
      if($id != null){
        $this->setId($id);
        if($id != $this->id){
          exit('');
        }
        $sql = "SELECT * FROM `patient_user` WHERE `id`=$this->id";
        $result = $this->db()->query($sql);
        if($result->rowCount() > 0){
          $row = $result->fetch();
          $this->id = $row['id'];
          $this->username = $row['username'];
          $this->email = $row['email'];
          $this->passwordd = $row['passwordd'];
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
      $sql = "SELECT * FROM `patient_user` WHERE $this->sqlCondition ORDER BY `id` LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function getAllReversed($limit = 1000000){
      if(!is_numeric($limit)){ return '[]'; }
      $sql = "SELECT * FROM `patient_user` WHERE $this->sqlCondition ORDER BY `id` DESC LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function getNumberOfRows(){
      $sql = "SELECT COUNT(*) AS 'numberOfRows' FROM `patient_user` WHERE $this->sqlCondition";
      $result = $this->db()->query($sql);
      $row = $result->fetch();
      return $row['numberOfRows'];
    }

    public function getById(){
      $sql = "SELECT * FROM `patient_user` WHERE `id`='$this->id'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->username = $row['username'];
        $this->email = $row['email'];
        $this->passwordd = $row['passwordd'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByUsername(){
      $sql = "SELECT * FROM `patient_user` WHERE `username`='$this->username'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->username = $row['username'];
        $this->email = $row['email'];
        $this->passwordd = $row['passwordd'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByEmail(){
      $sql = "SELECT * FROM `patient_user` WHERE `email`='$this->email'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->username = $row['username'];
        $this->email = $row['email'];
        $this->passwordd = $row['passwordd'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByPasswordd(){
      $sql = "SELECT * FROM `patient_user` WHERE `passwordd`='$this->passwordd'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->username = $row['username'];
        $this->email = $row['email'];
        $this->passwordd = $row['passwordd'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByTimee(){
      $sql = "SELECT * FROM `patient_user` WHERE `timee`='$this->timee'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->username = $row['username'];
        $this->email = $row['email'];
        $this->passwordd = $row['passwordd'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getByTime(){
      $sql = "SELECT * FROM `patient_user` WHERE `time`='$this->time'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->username = $row['username'];
        $this->email = $row['email'];
        $this->passwordd = $row['passwordd'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getLastRow(){
      $sql = "SELECT * FROM `patient_user` WHERE $this->sqlCondition ORDER BY `id` DESC";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->username = $row['username'];
        $this->email = $row['email'];
        $this->passwordd = $row['passwordd'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getFirstRow(){
      $sql = "SELECT * FROM `patient_user` WHERE $this->sqlCondition ORDER BY `id`";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->username = $row['username'];
        $this->email = $row['email'];
        $this->passwordd = $row['passwordd'];
        $this->timee = $row['timee'];
        $this->time = $row['time'];
        return true;
      }else{
         return false;
      }
    }

    public function getBySet($limit){
      if(!is_numeric($limit)){ return '[]'; }
      $sql = "SELECT * FROM `patient_user` WHERE `id` LIKE '%$this->id%' AND `username` LIKE '%$this->username%' AND `email` LIKE '%$this->email%' AND `passwordd` LIKE '%$this->passwordd%' AND `timee` LIKE '%$this->timee%' AND `time` LIKE '%$this->time%' LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function add(){
      $sql = "INSERT INTO `patient_user` (`username`, `email`, `passwordd`, `timee`, `time`) VALUES
      ('$this->username', '$this->email', '$this->passwordd', '$this->timee', '$this->time')";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function update(){
      $sql = "UPDATE `patient_user` SET `id`='$this->id', `username`='$this->username', `email`='$this->email', `passwordd`='$this->passwordd', `timee`='$this->timee', `time`='$this->time' WHERE `id`='$this->id'";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function delete() {
      $sql = "DELETE FROM `patient_user` WHERE `id`='$this->id'";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function giveIdentity($days){
      setcookie('patient_user', encode("$this->id"), time() + (86400 * $days), "/");
    }

    public function getIdentity($days){
      if(isset($_COOKIE['patient_user'])){
        decode($_COOKIE['patient_user']);
      }else{return false;}
    }

    public function deleteIdentity($days){
      setcookie("patient_user", '', time() - 3600);
    }

    public function giveAuthority(){
      $_SESSION['patient_user'] = encrypt($this->id);
      $_SESSION['patient_user_id'] = $this->id;
    }

    public function getAuthority(){
      if(isset($_SESSION['patient_user']) && isset($_SESSION['patient_user_id'])){
        $tmp_id = filter($_SESSION['patient_user_id']);
        $sql = "SELECT * from `patient_user` WHERE `id`='$tmp_id'";
        $result = $this->db()->query($sql);
        $row = $result->fetch();
        if(encrypt($row['id']) == $_SESSION['patient_user']){
          return $_SESSION['patient_user_id'];
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

    public function getUsername(){
      return $this->username;
    }

    public function getEmail(){
      return $this->email;
    }

    public function getPasswordd(){
      return $this->passwordd;
    }

    public function getTimee(){
      return $this->timee;
    }

    public function getTime(){
      return $this->time;
    }

  }
?>
