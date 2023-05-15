<?php

  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/autoloader.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/secuerity.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/time.inc.php';

  // CSRF TOKEN SECURITY
  if(empty($_GET['token']) || empty($_SESSION['doctor_users_token'])){
    $_SESSION['doctor_users_token'] = bin2hex(random_bytes(32));
    $_SESSION['doctor_users_token_time'] = time() + 3600;
    exit($_SESSION['doctor_users_token']);
  }

  if($_GET['token'] != $_SESSION['doctor_users_token'] || $_SESSION['doctor_users_token_time'] <= time()){
    exit("this.msg='error_token_invaild'");
  }

  $_SESSION['doctor_users_token'] = '';

  // DELETE THE LINES THAT IS USING FOR AUTHENTICATIONS LIKE PASSWORD OR SOMETHING THAT PUT YOUR WORK IN DANGER IF IT WILL BE GETTED BY JAVASCRIPT
  $doctor_users = new Doctor_users();
  if(!empty($_GET['id'])){$doctor_users->setId($_GET['id']);}
  if(!empty($_GET['username'])){$doctor_users->setUsername($_GET['username']);}
  if(!empty($_GET['email'])){$doctor_users->setEmail($_GET['email']);}
  if(!empty($_GET['passwordd'])){$doctor_users->setPasswordd($_GET['passwordd']);}
  if(!empty($_GET['created_at'])){$doctor_users->setCreated_at($_GET['created_at']);}
  if(!empty($_GET['timee'])){$doctor_users->setTimee($_GET['timee']);}
  if(!empty($_GET['time'])){$doctor_users->setTime($_GET['time']);}
  // SET FUNCTIONS MUST BE ABOVE OF THE FOLLOWING LINES
  if(!empty($_GET['add'])){if(!$doctor_users->add()){exit("this.error=1; this.msg='add'");}}
  if(!empty($_GET['update'])){if(!$doctor_users->update()){exit("this.error=1; this.msg='update'");}}
  if(!empty($_GET['delete'])){if(!$doctor_users->delete()){exit("this.error=1; this.msg='delete'");}}
  if(!empty($_GET['getBySet'])){echo json_encode($doctor_users->getBySet($_GET['getBySet']));}
  if(!empty($_GET['getAll'])){echo json_encode($doctor_users->getAll($_GET['getAll']));}
  if(!empty($_GET['getLastRow'])){if($doctor_users->getLastRow()){exit("this.id='{$doctor_users->getId()}', this.username='{$doctor_users->getUsername()}', this.email='{$doctor_users->getEmail()}', this.passwordd='{$doctor_users->getPasswordd()}', this.created_at='{$doctor_users->getCreated_at()}', this.timee='{$doctor_users->getTimee()}', this.time='{$doctor_users->getTime()}'");}}
  if(!empty($_GET['getFirstRow'])){if($doctor_users->getFirstRow()){exit("this.id='{$doctor_users->getId()}', this.username='{$doctor_users->getUsername()}', this.email='{$doctor_users->getEmail()}', this.passwordd='{$doctor_users->getPasswordd()}', this.created_at='{$doctor_users->getCreated_at()}', this.timee='{$doctor_users->getTimee()}', this.time='{$doctor_users->getTime()}'");}}
  if(!empty($_GET['getAllReversed'])){echo json_encode($doctor_users->getAllReversed($_GET['getAllReversed']));}
  if(!empty($_GET['getNumberOfRows'])){exit(''.$doctor_users->getNumberOfRows());}
  if(!empty($_GET['getById'])){$doctor_users->setId($_GET['getById']); if($doctor_users->getById()){exit("this.id='{$doctor_users->getId()}', this.username='{$doctor_users->getUsername()}', this.email='{$doctor_users->getEmail()}', this.passwordd='{$doctor_users->getPasswordd()}', this.created_at='{$doctor_users->getCreated_at()}', this.timee='{$doctor_users->getTimee()}', this.time='{$doctor_users->getTime()}'");}}
  if(!empty($_GET['getByUsername'])){$doctor_users->setUsername($_GET['getByUsername']); if($doctor_users->getByUsername()){exit("this.id='{$doctor_users->getId()}', this.username='{$doctor_users->getUsername()}', this.email='{$doctor_users->getEmail()}', this.passwordd='{$doctor_users->getPasswordd()}', this.created_at='{$doctor_users->getCreated_at()}', this.timee='{$doctor_users->getTimee()}', this.time='{$doctor_users->getTime()}'");}}
  if(!empty($_GET['getByEmail'])){$doctor_users->setEmail($_GET['getByEmail']); if($doctor_users->getByEmail()){exit("this.id='{$doctor_users->getId()}', this.username='{$doctor_users->getUsername()}', this.email='{$doctor_users->getEmail()}', this.passwordd='{$doctor_users->getPasswordd()}', this.created_at='{$doctor_users->getCreated_at()}', this.timee='{$doctor_users->getTimee()}', this.time='{$doctor_users->getTime()}'");}}
  if(!empty($_GET['getByPasswordd'])){$doctor_users->setPasswordd($_GET['getByPasswordd']); if($doctor_users->getByPasswordd()){exit("this.id='{$doctor_users->getId()}', this.username='{$doctor_users->getUsername()}', this.email='{$doctor_users->getEmail()}', this.passwordd='{$doctor_users->getPasswordd()}', this.created_at='{$doctor_users->getCreated_at()}', this.timee='{$doctor_users->getTimee()}', this.time='{$doctor_users->getTime()}'");}}
  if(!empty($_GET['getByCreated_at'])){$doctor_users->setCreated_at($_GET['getByCreated_at']); if($doctor_users->getByCreated_at()){exit("this.id='{$doctor_users->getId()}', this.username='{$doctor_users->getUsername()}', this.email='{$doctor_users->getEmail()}', this.passwordd='{$doctor_users->getPasswordd()}', this.created_at='{$doctor_users->getCreated_at()}', this.timee='{$doctor_users->getTimee()}', this.time='{$doctor_users->getTime()}'");}}
  if(!empty($_GET['getByTimee'])){$doctor_users->setTimee($_GET['getByTimee']); if($doctor_users->getByTimee()){exit("this.id='{$doctor_users->getId()}', this.username='{$doctor_users->getUsername()}', this.email='{$doctor_users->getEmail()}', this.passwordd='{$doctor_users->getPasswordd()}', this.created_at='{$doctor_users->getCreated_at()}', this.timee='{$doctor_users->getTimee()}', this.time='{$doctor_users->getTime()}'");}}
  if(!empty($_GET['getByTime'])){$doctor_users->setTime($_GET['getByTime']); if($doctor_users->getByTime()){exit("this.id='{$doctor_users->getId()}', this.username='{$doctor_users->getUsername()}', this.email='{$doctor_users->getEmail()}', this.passwordd='{$doctor_users->getPasswordd()}', this.created_at='{$doctor_users->getCreated_at()}', this.timee='{$doctor_users->getTimee()}', this.time='{$doctor_users->getTime()}'");}}

?>