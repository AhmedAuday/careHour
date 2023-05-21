<?php

  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/autoloader.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/secuerity.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/time.inc.php';

  // CSRF TOKEN SECURITY
  if(empty($_GET['token']) || empty($_SESSION['vitals_token'])){
    $_SESSION['vitals_token'] = bin2hex(random_bytes(32));
    $_SESSION['vitals_token_time'] = time() + 3600;
    exit($_SESSION['vitals_token']);
  }

  if($_GET['token'] != $_SESSION['vitals_token'] || $_SESSION['vitals_token_time'] <= time()){
    exit("this.msg='error_token_invaild'");
  }

  $_SESSION['vitals_token'] = '';

  // DELETE THE LINES THAT IS USING FOR AUTHENTICATIONS LIKE PASSWORD OR SOMETHING THAT PUT YOUR WORK IN DANGER IF IT WILL BE GETTED BY JAVASCRIPT
  $vitals = new Vitals();
  if(!empty($_GET['id'])){$vitals->setId($_GET['id']);}
  if(!empty($_GET['patient_id'])){$vitals->setPatient_id($_GET['patient_id']);}
  if(!empty($_GET['date_time'])){$vitals->setDate_time($_GET['date_time']);}
  if(!empty($_GET['temperature'])){$vitals->setTemperature($_GET['temperature']);}
  if(!empty($_GET['blood_pressure'])){$vitals->setBlood_pressure($_GET['blood_pressure']);}
  if(!empty($_GET['heart_rate'])){$vitals->setHeart_rate($_GET['heart_rate']);}
  if(!empty($_GET['respiratory_rate'])){$vitals->setRespiratory_rate($_GET['respiratory_rate']);}
  if(!empty($_GET['time'])){$vitals->setTime($_GET['time']);}
  // SET FUNCTIONS MUST BE ABOVE OF THE FOLLOWING LINES
  if(!empty($_GET['add'])){if(!$vitals->add()){exit("this.error=1; this.msg='add'");}}
  if(!empty($_GET['update'])){if(!$vitals->update()){exit("this.error=1; this.msg='update'");}}
  if(!empty($_GET['delete'])){if(!$vitals->delete()){exit("this.error=1; this.msg='delete'");}}
  if(!empty($_GET['getBySet'])){echo json_encode($vitals->getBySet($_GET['getBySet']));}
  if(!empty($_GET['getAll'])){echo json_encode($vitals->getAll($_GET['getAll']));}
  if(!empty($_GET['getLastRow'])){if($vitals->getLastRow()){exit("this.id='{$vitals->getId()}', this.patient_id='{$vitals->getPatient_id()}', this.date_time='{$vitals->getDate_time()}', this.temperature='{$vitals->getTemperature()}', this.blood_pressure='{$vitals->getBlood_pressure()}', this.heart_rate='{$vitals->getHeart_rate()}', this.respiratory_rate='{$vitals->getRespiratory_rate()}', this.time='{$vitals->getTime()}'");}}
  if(!empty($_GET['getFirstRow'])){if($vitals->getFirstRow()){exit("this.id='{$vitals->getId()}', this.patient_id='{$vitals->getPatient_id()}', this.date_time='{$vitals->getDate_time()}', this.temperature='{$vitals->getTemperature()}', this.blood_pressure='{$vitals->getBlood_pressure()}', this.heart_rate='{$vitals->getHeart_rate()}', this.respiratory_rate='{$vitals->getRespiratory_rate()}', this.time='{$vitals->getTime()}'");}}
  if(!empty($_GET['getAllReversed'])){echo json_encode($vitals->getAllReversed($_GET['getAllReversed']));}
  if(!empty($_GET['getNumberOfRows'])){exit(''.$vitals->getNumberOfRows());}
  if(!empty($_GET['getById'])){$vitals->setId($_GET['getById']); if($vitals->getById()){exit("this.id='{$vitals->getId()}', this.patient_id='{$vitals->getPatient_id()}', this.date_time='{$vitals->getDate_time()}', this.temperature='{$vitals->getTemperature()}', this.blood_pressure='{$vitals->getBlood_pressure()}', this.heart_rate='{$vitals->getHeart_rate()}', this.respiratory_rate='{$vitals->getRespiratory_rate()}', this.time='{$vitals->getTime()}'");}}
  if(!empty($_GET['getByPatient_id'])){$vitals->setPatient_id($_GET['getByPatient_id']); if($vitals->getByPatient_id()){exit("this.id='{$vitals->getId()}', this.patient_id='{$vitals->getPatient_id()}', this.date_time='{$vitals->getDate_time()}', this.temperature='{$vitals->getTemperature()}', this.blood_pressure='{$vitals->getBlood_pressure()}', this.heart_rate='{$vitals->getHeart_rate()}', this.respiratory_rate='{$vitals->getRespiratory_rate()}', this.time='{$vitals->getTime()}'");}}
  if(!empty($_GET['getByDate_time'])){$vitals->setDate_time($_GET['getByDate_time']); if($vitals->getByDate_time()){exit("this.id='{$vitals->getId()}', this.patient_id='{$vitals->getPatient_id()}', this.date_time='{$vitals->getDate_time()}', this.temperature='{$vitals->getTemperature()}', this.blood_pressure='{$vitals->getBlood_pressure()}', this.heart_rate='{$vitals->getHeart_rate()}', this.respiratory_rate='{$vitals->getRespiratory_rate()}', this.time='{$vitals->getTime()}'");}}
  if(!empty($_GET['getByTemperature'])){$vitals->setTemperature($_GET['getByTemperature']); if($vitals->getByTemperature()){exit("this.id='{$vitals->getId()}', this.patient_id='{$vitals->getPatient_id()}', this.date_time='{$vitals->getDate_time()}', this.temperature='{$vitals->getTemperature()}', this.blood_pressure='{$vitals->getBlood_pressure()}', this.heart_rate='{$vitals->getHeart_rate()}', this.respiratory_rate='{$vitals->getRespiratory_rate()}', this.time='{$vitals->getTime()}'");}}
  if(!empty($_GET['getByBlood_pressure'])){$vitals->setBlood_pressure($_GET['getByBlood_pressure']); if($vitals->getByBlood_pressure()){exit("this.id='{$vitals->getId()}', this.patient_id='{$vitals->getPatient_id()}', this.date_time='{$vitals->getDate_time()}', this.temperature='{$vitals->getTemperature()}', this.blood_pressure='{$vitals->getBlood_pressure()}', this.heart_rate='{$vitals->getHeart_rate()}', this.respiratory_rate='{$vitals->getRespiratory_rate()}', this.time='{$vitals->getTime()}'");}}
  if(!empty($_GET['getByHeart_rate'])){$vitals->setHeart_rate($_GET['getByHeart_rate']); if($vitals->getByHeart_rate()){exit("this.id='{$vitals->getId()}', this.patient_id='{$vitals->getPatient_id()}', this.date_time='{$vitals->getDate_time()}', this.temperature='{$vitals->getTemperature()}', this.blood_pressure='{$vitals->getBlood_pressure()}', this.heart_rate='{$vitals->getHeart_rate()}', this.respiratory_rate='{$vitals->getRespiratory_rate()}', this.time='{$vitals->getTime()}'");}}
  if(!empty($_GET['getByRespiratory_rate'])){$vitals->setRespiratory_rate($_GET['getByRespiratory_rate']); if($vitals->getByRespiratory_rate()){exit("this.id='{$vitals->getId()}', this.patient_id='{$vitals->getPatient_id()}', this.date_time='{$vitals->getDate_time()}', this.temperature='{$vitals->getTemperature()}', this.blood_pressure='{$vitals->getBlood_pressure()}', this.heart_rate='{$vitals->getHeart_rate()}', this.respiratory_rate='{$vitals->getRespiratory_rate()}', this.time='{$vitals->getTime()}'");}}
  if(!empty($_GET['getByTime'])){$vitals->setTime($_GET['getByTime']); if($vitals->getByTime()){exit("this.id='{$vitals->getId()}', this.patient_id='{$vitals->getPatient_id()}', this.date_time='{$vitals->getDate_time()}', this.temperature='{$vitals->getTemperature()}', this.blood_pressure='{$vitals->getBlood_pressure()}', this.heart_rate='{$vitals->getHeart_rate()}', this.respiratory_rate='{$vitals->getRespiratory_rate()}', this.time='{$vitals->getTime()}'");}}

?>