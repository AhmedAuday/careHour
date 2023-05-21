<?php

  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/autoloader.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/secuerity.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/time.inc.php';

  // CSRF TOKEN SECURITY
  if(empty($_GET['token']) || empty($_SESSION['surgeries_token'])){
    $_SESSION['surgeries_token'] = bin2hex(random_bytes(32));
    $_SESSION['surgeries_token_time'] = time() + 3600;
    exit($_SESSION['surgeries_token']);
  }

  if($_GET['token'] != $_SESSION['surgeries_token'] || $_SESSION['surgeries_token_time'] <= time()){
    exit("this.msg='error_token_invaild'");
  }

  $_SESSION['surgeries_token'] = '';

  // DELETE THE LINES THAT IS USING FOR AUTHENTICATIONS LIKE PASSWORD OR SOMETHING THAT PUT YOUR WORK IN DANGER IF IT WILL BE GETTED BY JAVASCRIPT
  $surgeries = new Surgeries();
  if(!empty($_GET['id'])){$surgeries->setId($_GET['id']);}
  if(!empty($_GET['doctor_id'])){$surgeries->setDoctor_id($_GET['doctor_id']);}
  if(!empty($_GET['patient_id'])){$surgeries->setPatient_id($_GET['patient_id']);}
  if(!empty($_GET['surgery_name'])){$surgeries->setSurgery_name($_GET['surgery_name']);}
  if(!empty($_GET['surgery_date'])){$surgeries->setSurgery_date($_GET['surgery_date']);}
  if(!empty($_GET['notes'])){$surgeries->setNotes($_GET['notes']);}
  if(!empty($_GET['time'])){$surgeries->setTime($_GET['time']);}
  // SET FUNCTIONS MUST BE ABOVE OF THE FOLLOWING LINES
  if(!empty($_GET['add'])){if(!$surgeries->add()){exit("this.error=1; this.msg='add'");}}
  if(!empty($_GET['update'])){if(!$surgeries->update()){exit("this.error=1; this.msg='update'");}}
  if(!empty($_GET['delete'])){if(!$surgeries->delete()){exit("this.error=1; this.msg='delete'");}}
  if(!empty($_GET['getBySet'])){echo json_encode($surgeries->getBySet($_GET['getBySet']));}
  if(!empty($_GET['getAll'])){echo json_encode($surgeries->getAll($_GET['getAll']));}
  if(!empty($_GET['getLastRow'])){if($surgeries->getLastRow()){exit("this.id='{$surgeries->getId()}', this.doctor_id='{$surgeries->getDoctor_id()}', this.patient_id='{$surgeries->getPatient_id()}', this.surgery_name='{$surgeries->getSurgery_name()}', this.surgery_date='{$surgeries->getSurgery_date()}', this.notes='{$surgeries->getNotes()}', this.time='{$surgeries->getTime()}'");}}
  if(!empty($_GET['getFirstRow'])){if($surgeries->getFirstRow()){exit("this.id='{$surgeries->getId()}', this.doctor_id='{$surgeries->getDoctor_id()}', this.patient_id='{$surgeries->getPatient_id()}', this.surgery_name='{$surgeries->getSurgery_name()}', this.surgery_date='{$surgeries->getSurgery_date()}', this.notes='{$surgeries->getNotes()}', this.time='{$surgeries->getTime()}'");}}
  if(!empty($_GET['getAllReversed'])){echo json_encode($surgeries->getAllReversed($_GET['getAllReversed']));}
  if(!empty($_GET['getNumberOfRows'])){exit(''.$surgeries->getNumberOfRows());}
  if(!empty($_GET['getById'])){$surgeries->setId($_GET['getById']); if($surgeries->getById()){exit("this.id='{$surgeries->getId()}', this.doctor_id='{$surgeries->getDoctor_id()}', this.patient_id='{$surgeries->getPatient_id()}', this.surgery_name='{$surgeries->getSurgery_name()}', this.surgery_date='{$surgeries->getSurgery_date()}', this.notes='{$surgeries->getNotes()}', this.time='{$surgeries->getTime()}'");}}
  if(!empty($_GET['getByDoctor_id'])){$surgeries->setDoctor_id($_GET['getByDoctor_id']); if($surgeries->getByDoctor_id()){exit("this.id='{$surgeries->getId()}', this.doctor_id='{$surgeries->getDoctor_id()}', this.patient_id='{$surgeries->getPatient_id()}', this.surgery_name='{$surgeries->getSurgery_name()}', this.surgery_date='{$surgeries->getSurgery_date()}', this.notes='{$surgeries->getNotes()}', this.time='{$surgeries->getTime()}'");}}
  if(!empty($_GET['getByPatient_id'])){$surgeries->setPatient_id($_GET['getByPatient_id']); if($surgeries->getByPatient_id()){exit("this.id='{$surgeries->getId()}', this.doctor_id='{$surgeries->getDoctor_id()}', this.patient_id='{$surgeries->getPatient_id()}', this.surgery_name='{$surgeries->getSurgery_name()}', this.surgery_date='{$surgeries->getSurgery_date()}', this.notes='{$surgeries->getNotes()}', this.time='{$surgeries->getTime()}'");}}
  if(!empty($_GET['getBySurgery_name'])){$surgeries->setSurgery_name($_GET['getBySurgery_name']); if($surgeries->getBySurgery_name()){exit("this.id='{$surgeries->getId()}', this.doctor_id='{$surgeries->getDoctor_id()}', this.patient_id='{$surgeries->getPatient_id()}', this.surgery_name='{$surgeries->getSurgery_name()}', this.surgery_date='{$surgeries->getSurgery_date()}', this.notes='{$surgeries->getNotes()}', this.time='{$surgeries->getTime()}'");}}
  if(!empty($_GET['getBySurgery_date'])){$surgeries->setSurgery_date($_GET['getBySurgery_date']); if($surgeries->getBySurgery_date()){exit("this.id='{$surgeries->getId()}', this.doctor_id='{$surgeries->getDoctor_id()}', this.patient_id='{$surgeries->getPatient_id()}', this.surgery_name='{$surgeries->getSurgery_name()}', this.surgery_date='{$surgeries->getSurgery_date()}', this.notes='{$surgeries->getNotes()}', this.time='{$surgeries->getTime()}'");}}
  if(!empty($_GET['getByNotes'])){$surgeries->setNotes($_GET['getByNotes']); if($surgeries->getByNotes()){exit("this.id='{$surgeries->getId()}', this.doctor_id='{$surgeries->getDoctor_id()}', this.patient_id='{$surgeries->getPatient_id()}', this.surgery_name='{$surgeries->getSurgery_name()}', this.surgery_date='{$surgeries->getSurgery_date()}', this.notes='{$surgeries->getNotes()}', this.time='{$surgeries->getTime()}'");}}
  if(!empty($_GET['getByTime'])){$surgeries->setTime($_GET['getByTime']); if($surgeries->getByTime()){exit("this.id='{$surgeries->getId()}', this.doctor_id='{$surgeries->getDoctor_id()}', this.patient_id='{$surgeries->getPatient_id()}', this.surgery_name='{$surgeries->getSurgery_name()}', this.surgery_date='{$surgeries->getSurgery_date()}', this.notes='{$surgeries->getNotes()}', this.time='{$surgeries->getTime()}'");}}

?>