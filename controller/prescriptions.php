<?php

  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/autoloader.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/secuerity.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/time.inc.php';

  // CSRF TOKEN SECURITY
  if(empty($_GET['token']) || empty($_SESSION['prescriptions_token'])){
    $_SESSION['prescriptions_token'] = bin2hex(random_bytes(32));
    $_SESSION['prescriptions_token_time'] = time() + 3600;
    exit($_SESSION['prescriptions_token']);
  }

  if($_GET['token'] != $_SESSION['prescriptions_token'] || $_SESSION['prescriptions_token_time'] <= time()){
    exit("this.msg='error_token_invaild'");
  }

  $_SESSION['prescriptions_token'] = '';

  // DELETE THE LINES THAT IS USING FOR AUTHENTICATIONS LIKE PASSWORD OR SOMETHING THAT PUT YOUR WORK IN DANGER IF IT WILL BE GETTED BY JAVASCRIPT
  $prescriptions = new Prescriptions();
  if(!empty($_GET['id'])){$prescriptions->setId($_GET['id']);}
  if(!empty($_GET['patient_id'])){$prescriptions->setPatient_id($_GET['patient_id']);}
  if(!empty($_GET['doctor_id'])){$prescriptions->setDoctor_id($_GET['doctor_id']);}
  if(!empty($_GET['prescription_date'])){$prescriptions->setPrescription_date($_GET['prescription_date']);}
  if(!empty($_GET['dosage'])){$prescriptions->setDosage($_GET['dosage']);}
  if(!empty($_GET['timee'])){$prescriptions->setTimee($_GET['timee']);}
  if(!empty($_GET['time'])){$prescriptions->setTime($_GET['time']);}
  // SET FUNCTIONS MUST BE ABOVE OF THE FOLLOWING LINES
  if(!empty($_GET['add'])){if(!$prescriptions->add()){exit("this.error=1; this.msg='add'");}}
  if(!empty($_GET['update'])){if(!$prescriptions->update()){exit("this.error=1; this.msg='update'");}}
  if(!empty($_GET['delete'])){if(!$prescriptions->delete()){exit("this.error=1; this.msg='delete'");}}
  if(!empty($_GET['getBySet'])){echo json_encode($prescriptions->getBySet($_GET['getBySet']));}
  if(!empty($_GET['getAll'])){echo json_encode($prescriptions->getAll($_GET['getAll']));}
  if(!empty($_GET['getLastRow'])){if($prescriptions->getLastRow()){exit("this.id='{$prescriptions->getId()}', this.patient_id='{$prescriptions->getPatient_id()}', this.doctor_id='{$prescriptions->getDoctor_id()}', this.prescription_date='{$prescriptions->getPrescription_date()}', this.dosage='{$prescriptions->getDosage()}', this.timee='{$prescriptions->getTimee()}', this.time='{$prescriptions->getTime()}'");}}
  if(!empty($_GET['getFirstRow'])){if($prescriptions->getFirstRow()){exit("this.id='{$prescriptions->getId()}', this.patient_id='{$prescriptions->getPatient_id()}', this.doctor_id='{$prescriptions->getDoctor_id()}', this.prescription_date='{$prescriptions->getPrescription_date()}', this.dosage='{$prescriptions->getDosage()}', this.timee='{$prescriptions->getTimee()}', this.time='{$prescriptions->getTime()}'");}}
  if(!empty($_GET['getAllReversed'])){echo json_encode($prescriptions->getAllReversed($_GET['getAllReversed']));}
  if(!empty($_GET['getNumberOfRows'])){exit(''.$prescriptions->getNumberOfRows());}
  if(!empty($_GET['getById'])){$prescriptions->setId($_GET['getById']); if($prescriptions->getById()){exit("this.id='{$prescriptions->getId()}', this.patient_id='{$prescriptions->getPatient_id()}', this.doctor_id='{$prescriptions->getDoctor_id()}', this.prescription_date='{$prescriptions->getPrescription_date()}', this.dosage='{$prescriptions->getDosage()}', this.timee='{$prescriptions->getTimee()}', this.time='{$prescriptions->getTime()}'");}}
  if(!empty($_GET['getByPatient_id'])){$prescriptions->setPatient_id($_GET['getByPatient_id']); if($prescriptions->getByPatient_id()){exit("this.id='{$prescriptions->getId()}', this.patient_id='{$prescriptions->getPatient_id()}', this.doctor_id='{$prescriptions->getDoctor_id()}', this.prescription_date='{$prescriptions->getPrescription_date()}', this.dosage='{$prescriptions->getDosage()}', this.timee='{$prescriptions->getTimee()}', this.time='{$prescriptions->getTime()}'");}}
  if(!empty($_GET['getByDoctor_id'])){$prescriptions->setDoctor_id($_GET['getByDoctor_id']); if($prescriptions->getByDoctor_id()){exit("this.id='{$prescriptions->getId()}', this.patient_id='{$prescriptions->getPatient_id()}', this.doctor_id='{$prescriptions->getDoctor_id()}', this.prescription_date='{$prescriptions->getPrescription_date()}', this.dosage='{$prescriptions->getDosage()}', this.timee='{$prescriptions->getTimee()}', this.time='{$prescriptions->getTime()}'");}}
  if(!empty($_GET['getByPrescription_date'])){$prescriptions->setPrescription_date($_GET['getByPrescription_date']); if($prescriptions->getByPrescription_date()){exit("this.id='{$prescriptions->getId()}', this.patient_id='{$prescriptions->getPatient_id()}', this.doctor_id='{$prescriptions->getDoctor_id()}', this.prescription_date='{$prescriptions->getPrescription_date()}', this.dosage='{$prescriptions->getDosage()}', this.timee='{$prescriptions->getTimee()}', this.time='{$prescriptions->getTime()}'");}}
  if(!empty($_GET['getByDosage'])){$prescriptions->setDosage($_GET['getByDosage']); if($prescriptions->getByDosage()){exit("this.id='{$prescriptions->getId()}', this.patient_id='{$prescriptions->getPatient_id()}', this.doctor_id='{$prescriptions->getDoctor_id()}', this.prescription_date='{$prescriptions->getPrescription_date()}', this.dosage='{$prescriptions->getDosage()}', this.timee='{$prescriptions->getTimee()}', this.time='{$prescriptions->getTime()}'");}}
  if(!empty($_GET['getByTimee'])){$prescriptions->setTimee($_GET['getByTimee']); if($prescriptions->getByTimee()){exit("this.id='{$prescriptions->getId()}', this.patient_id='{$prescriptions->getPatient_id()}', this.doctor_id='{$prescriptions->getDoctor_id()}', this.prescription_date='{$prescriptions->getPrescription_date()}', this.dosage='{$prescriptions->getDosage()}', this.timee='{$prescriptions->getTimee()}', this.time='{$prescriptions->getTime()}'");}}
  if(!empty($_GET['getByTime'])){$prescriptions->setTime($_GET['getByTime']); if($prescriptions->getByTime()){exit("this.id='{$prescriptions->getId()}', this.patient_id='{$prescriptions->getPatient_id()}', this.doctor_id='{$prescriptions->getDoctor_id()}', this.prescription_date='{$prescriptions->getPrescription_date()}', this.dosage='{$prescriptions->getDosage()}', this.timee='{$prescriptions->getTimee()}', this.time='{$prescriptions->getTime()}'");}}

?>