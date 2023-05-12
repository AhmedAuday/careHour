<?php

  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/autoloader.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/secuerity.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/time.inc.php';

  // CSRF TOKEN SECURITY
  if(empty($_GET['token']) || empty($_SESSION['admins_token'])){
    $_SESSION['admins_token'] = bin2hex(random_bytes(32));
    $_SESSION['admins_token_time'] = time() + 3600;
    exit($_SESSION['admins_token']);
  }

  if($_GET['token'] != $_SESSION['admins_token'] || $_SESSION['admins_token_time'] <= time()){
    exit("this.msg='error_token_invaild'");
  }

  $_SESSION['admins_token'] = '';

  // DELETE THE LINES THAT IS USING FOR AUTHENTICATIONS LIKE PASSWORD OR SOMETHING THAT PUT YOUR WORK IN DANGER IF IT WILL BE GETTED BY JAVASCRIPT
  $admins = new Admins();
  if(!empty($_GET['id'])){$admins->setId($_GET['id']);}
  if(!empty($_GET['username'])){$admins->setUsername($_GET['username']);}
  if(!empty($_GET['email'])){$admins->setEmail($_GET['email']);}
  if(!empty($_GET['passwordd'])){$admins->setPasswordd($_GET['passwordd']);}
  if(!empty($_GET['timee'])){$admins->setTimee($_GET['timee']);}
  if(!empty($_GET['time'])){$admins->setTime($_GET['time']);}
  // SET FUNCTIONS MUST BE ABOVE OF THE FOLLOWING LINES
  if(!empty($_GET['add'])){if(!$admins->add()){exit("this.error=1; this.msg='add'");}}
  if(!empty($_GET['update'])){if(!$admins->update()){exit("this.error=1; this.msg='update'");}}
  if(!empty($_GET['delete'])){if(!$admins->delete()){exit("this.error=1; this.msg='delete'");}}
  if(!empty($_GET['getBySet'])){echo json_encode($admins->getBySet($_GET['getBySet']));}
  if(!empty($_GET['getAll'])){echo json_encode($admins->getAll($_GET['getAll']));}
  if(!empty($_GET['getLastRow'])){if($admins->getLastRow()){exit("this.id='{$admins->getId()}', this.username='{$admins->getUsername()}', this.email='{$admins->getEmail()}', this.passwordd='{$admins->getPasswordd()}', this.timee='{$admins->getTimee()}', this.time='{$admins->getTime()}'");}}
  if(!empty($_GET['getFirstRow'])){if($admins->getFirstRow()){exit("this.id='{$admins->getId()}', this.username='{$admins->getUsername()}', this.email='{$admins->getEmail()}', this.passwordd='{$admins->getPasswordd()}', this.timee='{$admins->getTimee()}', this.time='{$admins->getTime()}'");}}
  if(!empty($_GET['getAllReversed'])){echo json_encode($admins->getAllReversed($_GET['getAllReversed']));}
  if(!empty($_GET['getNumberOfRows'])){exit(''.$admins->getNumberOfRows());}
  if(!empty($_GET['getById'])){$admins->setId($_GET['getById']); if($admins->getById()){exit("this.id='{$admins->getId()}', this.username='{$admins->getUsername()}', this.email='{$admins->getEmail()}', this.passwordd='{$admins->getPasswordd()}', this.timee='{$admins->getTimee()}', this.time='{$admins->getTime()}'");}}
  if(!empty($_GET['getByUsername'])){$admins->setUsername($_GET['getByUsername']); if($admins->getByUsername()){exit("this.id='{$admins->getId()}', this.username='{$admins->getUsername()}', this.email='{$admins->getEmail()}', this.passwordd='{$admins->getPasswordd()}', this.timee='{$admins->getTimee()}', this.time='{$admins->getTime()}'");}}
  if(!empty($_GET['getByEmail'])){$admins->setEmail($_GET['getByEmail']); if($admins->getByEmail()){exit("this.id='{$admins->getId()}', this.username='{$admins->getUsername()}', this.email='{$admins->getEmail()}', this.passwordd='{$admins->getPasswordd()}', this.timee='{$admins->getTimee()}', this.time='{$admins->getTime()}'");}}
  if(!empty($_GET['getByPasswordd'])){$admins->setPasswordd($_GET['getByPasswordd']); if($admins->getByPasswordd()){exit("this.id='{$admins->getId()}', this.username='{$admins->getUsername()}', this.email='{$admins->getEmail()}', this.passwordd='{$admins->getPasswordd()}', this.timee='{$admins->getTimee()}', this.time='{$admins->getTime()}'");}}
  if(!empty($_GET['getByTimee'])){$admins->setTimee($_GET['getByTimee']); if($admins->getByTimee()){exit("this.id='{$admins->getId()}', this.username='{$admins->getUsername()}', this.email='{$admins->getEmail()}', this.passwordd='{$admins->getPasswordd()}', this.timee='{$admins->getTimee()}', this.time='{$admins->getTime()}'");}}
  if(!empty($_GET['getByTime'])){$admins->setTime($_GET['getByTime']); if($admins->getByTime()){exit("this.id='{$admins->getId()}', this.username='{$admins->getUsername()}', this.email='{$admins->getEmail()}', this.passwordd='{$admins->getPasswordd()}', this.timee='{$admins->getTimee()}', this.time='{$admins->getTime()}'");}}

?>