<?php

  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/autoloader.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/secuerity.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/time.inc.php';

  // CSRF TOKEN SECURITY
  if(empty($_GET['token']) || empty($_SESSION['allergies_token'])){
    $_SESSION['allergies_token'] = bin2hex(random_bytes(32));
    $_SESSION['allergies_token_time'] = time() + 3600;
    exit($_SESSION['allergies_token']);
  }

  if($_GET['token'] != $_SESSION['allergies_token'] || $_SESSION['allergies_token_time'] <= time()){
    exit("this.msg='error_token_invaild'");
  }

  $_SESSION['allergies_token'] = '';

  // DELETE THE LINES THAT IS USING FOR AUTHENTICATIONS LIKE PASSWORD OR SOMETHING THAT PUT YOUR WORK IN DANGER IF IT WILL BE GETTED BY JAVASCRIPT
  $allergies = new Allergies();
  if(!empty($_GET['id'])){$allergies->setId($_GET['id']);}
  if(!empty($_GET['patient_id'])){$allergies->setPatient_id($_GET['patient_id']);}
  if(!empty($_GET['Medication_allergies'])){$allergies->setMedication_allergies($_GET['Medication_allergies']);}
  if(!empty($_GET['name'])){$allergies->setName($_GET['name']);}
  if(!empty($_GET['severity'])){$allergies->setSeverity($_GET['severity']);}
  if(!empty($_GET['timee'])){$allergies->setTimee($_GET['timee']);}
  if(!empty($_GET['time'])){$allergies->setTime($_GET['time']);}
  // SET FUNCTIONS MUST BE ABOVE OF THE FOLLOWING LINES
  if(!empty($_GET['add'])){if(!$allergies->add()){exit("this.error=1; this.msg='add'");}}
  if(!empty($_GET['update'])){if(!$allergies->update()){exit("this.error=1; this.msg='update'");}}
  if(!empty($_GET['delete'])){if(!$allergies->delete()){exit("this.error=1; this.msg='delete'");}}
  if(!empty($_GET['getBySet'])){echo json_encode($allergies->getBySet($_GET['getBySet']));}
  if(!empty($_GET['getAll'])){echo json_encode($allergies->getAll($_GET['getAll']));}
  if(!empty($_GET['getLastRow'])){if($allergies->getLastRow()){exit("this.id='{$allergies->getId()}', this.patient_id='{$allergies->getPatient_id()}', this.Medication_allergies='{$allergies->getMedication_allergies()}', this.name='{$allergies->getName()}', this.severity='{$allergies->getSeverity()}', this.timee='{$allergies->getTimee()}', this.time='{$allergies->getTime()}'");}}
  if(!empty($_GET['getFirstRow'])){if($allergies->getFirstRow()){exit("this.id='{$allergies->getId()}', this.patient_id='{$allergies->getPatient_id()}', this.Medication_allergies='{$allergies->getMedication_allergies()}', this.name='{$allergies->getName()}', this.severity='{$allergies->getSeverity()}', this.timee='{$allergies->getTimee()}', this.time='{$allergies->getTime()}'");}}
  if(!empty($_GET['getAllReversed'])){echo json_encode($allergies->getAllReversed($_GET['getAllReversed']));}
  if(!empty($_GET['getNumberOfRows'])){exit(''.$allergies->getNumberOfRows());}
  if(!empty($_GET['getById'])){$allergies->setId($_GET['getById']); if($allergies->getById()){exit("this.id='{$allergies->getId()}', this.patient_id='{$allergies->getPatient_id()}', this.Medication_allergies='{$allergies->getMedication_allergies()}', this.name='{$allergies->getName()}', this.severity='{$allergies->getSeverity()}', this.timee='{$allergies->getTimee()}', this.time='{$allergies->getTime()}'");}}
  if(!empty($_GET['getByPatient_id'])){$allergies->setPatient_id($_GET['getByPatient_id']); if($allergies->getByPatient_id()){exit("this.id='{$allergies->getId()}', this.patient_id='{$allergies->getPatient_id()}', this.Medication_allergies='{$allergies->getMedication_allergies()}', this.name='{$allergies->getName()}', this.severity='{$allergies->getSeverity()}', this.timee='{$allergies->getTimee()}', this.time='{$allergies->getTime()}'");}}
  if(!empty($_GET['getByMedication_allergies'])){$allergies->setMedication_allergies($_GET['getByMedication_allergies']); if($allergies->getByMedication_allergies()){exit("this.id='{$allergies->getId()}', this.patient_id='{$allergies->getPatient_id()}', this.Medication_allergies='{$allergies->getMedication_allergies()}', this.name='{$allergies->getName()}', this.severity='{$allergies->getSeverity()}', this.timee='{$allergies->getTimee()}', this.time='{$allergies->getTime()}'");}}
  if(!empty($_GET['getByName'])){$allergies->setName($_GET['getByName']); if($allergies->getByName()){exit("this.id='{$allergies->getId()}', this.patient_id='{$allergies->getPatient_id()}', this.Medication_allergies='{$allergies->getMedication_allergies()}', this.name='{$allergies->getName()}', this.severity='{$allergies->getSeverity()}', this.timee='{$allergies->getTimee()}', this.time='{$allergies->getTime()}'");}}
  if(!empty($_GET['getBySeverity'])){$allergies->setSeverity($_GET['getBySeverity']); if($allergies->getBySeverity()){exit("this.id='{$allergies->getId()}', this.patient_id='{$allergies->getPatient_id()}', this.Medication_allergies='{$allergies->getMedication_allergies()}', this.name='{$allergies->getName()}', this.severity='{$allergies->getSeverity()}', this.timee='{$allergies->getTimee()}', this.time='{$allergies->getTime()}'");}}
  if(!empty($_GET['getByTimee'])){$allergies->setTimee($_GET['getByTimee']); if($allergies->getByTimee()){exit("this.id='{$allergies->getId()}', this.patient_id='{$allergies->getPatient_id()}', this.Medication_allergies='{$allergies->getMedication_allergies()}', this.name='{$allergies->getName()}', this.severity='{$allergies->getSeverity()}', this.timee='{$allergies->getTimee()}', this.time='{$allergies->getTime()}'");}}
  if(!empty($_GET['getByTime'])){$allergies->setTime($_GET['getByTime']); if($allergies->getByTime()){exit("this.id='{$allergies->getId()}', this.patient_id='{$allergies->getPatient_id()}', this.Medication_allergies='{$allergies->getMedication_allergies()}', this.name='{$allergies->getName()}', this.severity='{$allergies->getSeverity()}', this.timee='{$allergies->getTimee()}', this.time='{$allergies->getTime()}'");}}

?>