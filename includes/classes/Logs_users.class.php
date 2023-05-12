<?php
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/config.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/encrypt.inc.php';

  class Logs_users extends Database {
    private $sqlCondition = 1;
    private $id;
    private $actionn;
    private $new_username;
    private $new_email;
    private $new_password;
    private $new_role;
    private $new_created_at;
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
        $sql = "SELECT * FROM `logs_users` WHERE `id`=$this->id";
        $result = $this->db()->query($sql);
        if($result->rowCount() > 0){
          $row = $result->fetch();
          $this->id = $row['id'];
          $this->actionn = $row['actionn'];
          $this->new_username = $row['new_username'];
          $this->new_email = $row['new_email'];
          $this->new_password = $row['new_password'];
          $this->new_role = $row['new_role'];
          $this->new_created_at = $row['new_created_at'];
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
      $sql = "SELECT * FROM `logs_users` WHERE $this->sqlCondition ORDER BY `id` LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function getAllReversed($limit = 1000000){
      if(!is_numeric($limit)){ return '[]'; }
      $sql = "SELECT * FROM `logs_users` WHERE $this->sqlCondition ORDER BY `id` DESC LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function getNumberOfRows(){
      $sql = "SELECT COUNT(*) AS 'numberOfRows' FROM `logs_users` WHERE $this->sqlCondition";
      $result = $this->db()->query($sql);
      $row = $result->fetch();
      return $row['numberOfRows'];
    }

    public function getById(){
      $sql = "SELECT * FROM `logs_users` WHERE `id`='$this->id'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_username = $row['new_username'];
        $this->new_email = $row['new_email'];
        $this->new_password = $row['new_password'];
        $this->new_role = $row['new_role'];
        $this->new_created_at = $row['new_created_at'];
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
      $sql = "SELECT * FROM `logs_users` WHERE `actionn`='$this->actionn'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_username = $row['new_username'];
        $this->new_email = $row['new_email'];
        $this->new_password = $row['new_password'];
        $this->new_role = $row['new_role'];
        $this->new_created_at = $row['new_created_at'];
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

    public function getByNew_username(){
      $sql = "SELECT * FROM `logs_users` WHERE `new_username`='$this->new_username'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_username = $row['new_username'];
        $this->new_email = $row['new_email'];
        $this->new_password = $row['new_password'];
        $this->new_role = $row['new_role'];
        $this->new_created_at = $row['new_created_at'];
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

    public function getByNew_email(){
      $sql = "SELECT * FROM `logs_users` WHERE `new_email`='$this->new_email'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_username = $row['new_username'];
        $this->new_email = $row['new_email'];
        $this->new_password = $row['new_password'];
        $this->new_role = $row['new_role'];
        $this->new_created_at = $row['new_created_at'];
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

    public function getByNew_password(){
      $sql = "SELECT * FROM `logs_users` WHERE `new_password`='$this->new_password'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_username = $row['new_username'];
        $this->new_email = $row['new_email'];
        $this->new_password = $row['new_password'];
        $this->new_role = $row['new_role'];
        $this->new_created_at = $row['new_created_at'];
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

    public function getByNew_role(){
      $sql = "SELECT * FROM `logs_users` WHERE `new_role`='$this->new_role'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_username = $row['new_username'];
        $this->new_email = $row['new_email'];
        $this->new_password = $row['new_password'];
        $this->new_role = $row['new_role'];
        $this->new_created_at = $row['new_created_at'];
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

    public function getByNew_created_at(){
      $sql = "SELECT * FROM `logs_users` WHERE `new_created_at`='$this->new_created_at'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_username = $row['new_username'];
        $this->new_email = $row['new_email'];
        $this->new_password = $row['new_password'];
        $this->new_role = $row['new_role'];
        $this->new_created_at = $row['new_created_at'];
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
      $sql = "SELECT * FROM `logs_users` WHERE `logs_cdate`='$this->logs_cdate'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_username = $row['new_username'];
        $this->new_email = $row['new_email'];
        $this->new_password = $row['new_password'];
        $this->new_role = $row['new_role'];
        $this->new_created_at = $row['new_created_at'];
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
      $sql = "SELECT * FROM `logs_users` WHERE `logs_ctime`='$this->logs_ctime'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_username = $row['new_username'];
        $this->new_email = $row['new_email'];
        $this->new_password = $row['new_password'];
        $this->new_role = $row['new_role'];
        $this->new_created_at = $row['new_created_at'];
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
      $sql = "SELECT * FROM `logs_users` WHERE `log_ByUser`='$this->log_ByUser'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_username = $row['new_username'];
        $this->new_email = $row['new_email'];
        $this->new_password = $row['new_password'];
        $this->new_role = $row['new_role'];
        $this->new_created_at = $row['new_created_at'];
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
      $sql = "SELECT * FROM `logs_users` WHERE `timee`='$this->timee'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_username = $row['new_username'];
        $this->new_email = $row['new_email'];
        $this->new_password = $row['new_password'];
        $this->new_role = $row['new_role'];
        $this->new_created_at = $row['new_created_at'];
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
      $sql = "SELECT * FROM `logs_users` WHERE `time`='$this->time'";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_username = $row['new_username'];
        $this->new_email = $row['new_email'];
        $this->new_password = $row['new_password'];
        $this->new_role = $row['new_role'];
        $this->new_created_at = $row['new_created_at'];
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
      $sql = "SELECT * FROM `logs_users` WHERE $this->sqlCondition ORDER BY `id` DESC";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_username = $row['new_username'];
        $this->new_email = $row['new_email'];
        $this->new_password = $row['new_password'];
        $this->new_role = $row['new_role'];
        $this->new_created_at = $row['new_created_at'];
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
      $sql = "SELECT * FROM `logs_users` WHERE $this->sqlCondition ORDER BY `id`";
      $result = $this->db()->query($sql);
      if($result->rowCount() > 0){
        $row = $result->fetch();
        $this->id = $row['id'];
        $this->actionn = $row['actionn'];
        $this->new_username = $row['new_username'];
        $this->new_email = $row['new_email'];
        $this->new_password = $row['new_password'];
        $this->new_role = $row['new_role'];
        $this->new_created_at = $row['new_created_at'];
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
      $sql = "SELECT * FROM `logs_users` WHERE `id` LIKE '%$this->id%' AND `actionn` LIKE '%$this->actionn%' AND `new_username` LIKE '%$this->new_username%' AND `new_email` LIKE '%$this->new_email%' AND `new_password` LIKE '%$this->new_password%' AND `new_role` LIKE '%$this->new_role%' AND `new_created_at` LIKE '%$this->new_created_at%' AND `logs_cdate` LIKE '%$this->logs_cdate%' AND `logs_ctime` LIKE '%$this->logs_ctime%' AND `log_ByUser` LIKE '%$this->log_ByUser%' AND `timee` LIKE '%$this->timee%' AND `time` LIKE '%$this->time%' LIMIT $limit";
      $result = $this->db()->query($sql);
      $data = $result->fetchAll();
      $json_data = json_encode($data);
      $json_data = json_decode($json_data);
      return $json_data;
    }

    public function add(){
      $sql = "INSERT INTO `logs_users` (`id`, `actionn`, `new_username`, `new_email`, `new_password`, `new_role`, `new_created_at`, `logs_cdate`, `logs_ctime`, `log_ByUser`, `timee`, `time`) VALUES 
      ('$this->id', '$this->actionn', '$this->new_username', '$this->new_email', '$this->new_password', '$this->new_role', '$this->new_created_at', '$this->logs_cdate', '$this->logs_ctime', '$this->log_ByUser', '$this->timee', '$this->time')";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function update(){
      $sql = "UPDATE `logs_users` SET `id`='$this->id', `actionn`='$this->actionn', `new_username`='$this->new_username', `new_email`='$this->new_email', `new_password`='$this->new_password', `new_role`='$this->new_role', `new_created_at`='$this->new_created_at', `logs_cdate`='$this->logs_cdate', `logs_ctime`='$this->logs_ctime', `log_ByUser`='$this->log_ByUser', `timee`='$this->timee', `time`='$this->time' WHERE `id`='$this->id'";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function delete() {
      $sql = "DELETE FROM `logs_users` WHERE `id`='$this->id'";
      if($this->db()->query($sql)){
        return true;
      }else{
        return false;
      }
    }

    public function giveIdentity($days){
      setcookie('logs_users', encode("$this->id"), time() + (86400 * $days), "/");
    }

    public function getIdentity($days){
      if(isset($_COOKIE['logs_users'])){
        decode($_COOKIE['logs_users']);
      }else{return false;}
    }

    public function deleteIdentity($days){
      setcookie("logs_users", '', time() - 3600);
    }

    public function giveAuthority(){
      $_SESSION['logs_users'] = encrypt($this->id);
      $_SESSION['logs_users_id'] = $this->id;
    }

    public function getAuthority(){
      if(isset($_SESSION['logs_users']) && isset($_SESSION['logs_users_id'])){
        $tmp_id = filter($_SESSION['logs_users_id']);
        $sql = "SELECT * from `logs_users` WHERE `id`='$tmp_id'";
        $result = $this->db()->query($sql);
        $row = $result->fetch();
        if(encrypt($row['id']) == $_SESSION['logs_users']){
          return $_SESSION['logs_users_id'];
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

    public function setNew_username($new_username){
      if(is_string($new_username)){
        $this->new_username = filter($new_username);
        return true;
      }else{
        return false;
      }
    }

    public function setNew_email($new_email){
      if(is_string($new_email)){
        $this->new_email = filter($new_email);
        return true;
      }else{
        return false;
      }
    }

    public function setNew_password($new_password){
      if(is_string($new_password)){
        $this->new_password = filter($new_password);
        return true;
      }else{
        return false;
      }
    }

    public function setNew_role($new_role){
      if(is_string($new_role)){
        $this->new_role = filter($new_role);
        return true;
      }else{
        return false;
      }
    }

    public function setNew_created_at($new_created_at){
      if(is_string($new_created_at)){
        $this->new_created_at = filter($new_created_at);
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

    public function getNew_username(){
      return $this->new_username;
    }

    public function getNew_email(){
      return $this->new_email;
    }

    public function getNew_password(){
      return $this->new_password;
    }

    public function getNew_role(){
      return $this->new_role;
    }

    public function getNew_created_at(){
      return $this->new_created_at;
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