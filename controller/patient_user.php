<?php

  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/autoloader.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/secuerity.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/time.inc.php';

  // CSRF TOKEN SECURITY
  if(empty($_GET['token']) || empty($_SESSION['patient_user_token'])){
    $_SESSION['patient_user_token'] = bin2hex(random_bytes(32));
    $_SESSION['patient_user_token_time'] = time() + 3600;
    exit($_SESSION['patient_user_token']);
  }

  if($_GET['token'] != $_SESSION['patient_user_token'] || $_SESSION['patient_user_token_time'] <= time()){
    exit("this.msg='error_token_invaild'");
  }

  $_SESSION['patient_user_token'] = '';

  // DELETE THE LINES THAT IS USING FOR AUTHENTICATIONS LIKE PASSWORD OR SOMETHING THAT PUT YOUR WORK IN DANGER IF IT WILL BE GETTED BY JAVASCRIPT
  $patient_user = new Patient_user();
  if(!empty($_GET['id'])){$patient_user->setId($_GET['id']);}
  if(!empty($_GET['username'])){$patient_user->setUsername($_GET['username']);}
  if(!empty($_GET['email'])){$patient_user->setEmail($_GET['email']);}
  if(!empty($_GET['passwordd'])){$patient_user->setPasswordd($_GET['passwordd']);}
  if(!empty($_GET['timee'])){$patient_user->setTimee($_GET['timee']);}
  if(!empty($_GET['time'])){$patient_user->setTime($_GET['time']);}
  // SET FUNCTIONS MUST BE ABOVE OF THE FOLLOWING LINES
  if(!empty($_GET['add'])){if(!$patient_user->add()){exit("this.error=1; this.msg='add'");}}
  if(!empty($_GET['update'])){if(!$patient_user->update()){exit("this.error=1; this.msg='update'");}}
  if(!empty($_GET['delete'])){if(!$patient_user->delete()){exit("this.error=1; this.msg='delete'");}}
  if(!empty($_GET['getBySet'])){echo json_encode($patient_user->getBySet($_GET['getBySet']));}
  if(!empty($_GET['getAll'])){echo json_encode($patient_user->getAll($_GET['getAll']));}
  if(!empty($_GET['getLastRow'])){if($patient_user->getLastRow()){exit("this.id='{$patient_user->getId()}', this.username='{$patient_user->getUsername()}', this.email='{$patient_user->getEmail()}', this.passwordd='{$patient_user->getPasswordd()}', this.timee='{$patient_user->getTimee()}', this.time='{$patient_user->getTime()}'");}}
  if(!empty($_GET['getFirstRow'])){if($patient_user->getFirstRow()){exit("this.id='{$patient_user->getId()}', this.username='{$patient_user->getUsername()}', this.email='{$patient_user->getEmail()}', this.passwordd='{$patient_user->getPasswordd()}', this.timee='{$patient_user->getTimee()}', this.time='{$patient_user->getTime()}'");}}
  if(!empty($_GET['getAllReversed'])){echo json_encode($patient_user->getAllReversed($_GET['getAllReversed']));}
  if(!empty($_GET['getNumberOfRows'])){exit(''.$patient_user->getNumberOfRows());}
  if(!empty($_GET['getById'])){$patient_user->setId($_GET['getById']); if($patient_user->getById()){exit("this.id='{$patient_user->getId()}', this.username='{$patient_user->getUsername()}', this.email='{$patient_user->getEmail()}', this.passwordd='{$patient_user->getPasswordd()}', this.timee='{$patient_user->getTimee()}', this.time='{$patient_user->getTime()}'");}}
  if(!empty($_GET['getByUsername'])){$patient_user->setUsername($_GET['getByUsername']); if($patient_user->getByUsername()){exit("this.id='{$patient_user->getId()}', this.username='{$patient_user->getUsername()}', this.email='{$patient_user->getEmail()}', this.passwordd='{$patient_user->getPasswordd()}', this.timee='{$patient_user->getTimee()}', this.time='{$patient_user->getTime()}'");}}
  if(!empty($_GET['getByEmail'])){$patient_user->setEmail($_GET['getByEmail']); if($patient_user->getByEmail()){exit("this.id='{$patient_user->getId()}', this.username='{$patient_user->getUsername()}', this.email='{$patient_user->getEmail()}', this.passwordd='{$patient_user->getPasswordd()}', this.timee='{$patient_user->getTimee()}', this.time='{$patient_user->getTime()}'");}}
  if(!empty($_GET['getByPasswordd'])){$patient_user->setPasswordd($_GET['getByPasswordd']); if($patient_user->getByPasswordd()){exit("this.id='{$patient_user->getId()}', this.username='{$patient_user->getUsername()}', this.email='{$patient_user->getEmail()}', this.passwordd='{$patient_user->getPasswordd()}', this.timee='{$patient_user->getTimee()}', this.time='{$patient_user->getTime()}'");}}
  if(!empty($_GET['getByTimee'])){$patient_user->setTimee($_GET['getByTimee']); if($patient_user->getByTimee()){exit("this.id='{$patient_user->getId()}', this.username='{$patient_user->getUsername()}', this.email='{$patient_user->getEmail()}', this.passwordd='{$patient_user->getPasswordd()}', this.timee='{$patient_user->getTimee()}', this.time='{$patient_user->getTime()}'");}}
  if(!empty($_GET['getByTime'])){$patient_user->setTime($_GET['getByTime']); if($patient_user->getByTime()){exit("this.id='{$patient_user->getId()}', this.username='{$patient_user->getUsername()}', this.email='{$patient_user->getEmail()}', this.passwordd='{$patient_user->getPasswordd()}', this.timee='{$patient_user->getTimee()}', this.time='{$patient_user->getTime()}'");}}

?>