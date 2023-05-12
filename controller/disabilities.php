<?php

  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/autoloader.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/secuerity.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/time.inc.php';

  // CSRF TOKEN SECURITY
  if(empty($_GET['token']) || empty($_SESSION['disabilities_token'])){
    $_SESSION['disabilities_token'] = bin2hex(random_bytes(32));
    $_SESSION['disabilities_token_time'] = time() + 3600;
    exit($_SESSION['disabilities_token']);
  }

  if($_GET['token'] != $_SESSION['disabilities_token'] || $_SESSION['disabilities_token_time'] <= time()){
    exit("this.msg='error_token_invaild'");
  }

  $_SESSION['disabilities_token'] = '';

  // DELETE THE LINES THAT IS USING FOR AUTHENTICATIONS LIKE PASSWORD OR SOMETHING THAT PUT YOUR WORK IN DANGER IF IT WILL BE GETTED BY JAVASCRIPT
  $disabilities = new Disabilities();
  if(!empty($_GET['id'])){$disabilities->setId($_GET['id']);}
  if(!empty($_GET['patient_id'])){$disabilities->setPatient_id($_GET['patient_id']);}
  if(!empty($_GET['disability_name'])){$disabilities->setDisability_name($_GET['disability_name']);}
  if(!empty($_GET['onset_date'])){$disabilities->setOnset_date($_GET['onset_date']);}
  if(!empty($_GET['notes'])){$disabilities->setNotes($_GET['notes']);}
  if(!empty($_GET['timee'])){$disabilities->setTimee($_GET['timee']);}
  if(!empty($_GET['time'])){$disabilities->setTime($_GET['time']);}
  // SET FUNCTIONS MUST BE ABOVE OF THE FOLLOWING LINES
  if(!empty($_GET['add'])){if(!$disabilities->add()){exit("this.error=1; this.msg='add'");}}
  if(!empty($_GET['update'])){if(!$disabilities->update()){exit("this.error=1; this.msg='update'");}}
  if(!empty($_GET['delete'])){if(!$disabilities->delete()){exit("this.error=1; this.msg='delete'");}}
  if(!empty($_GET['getBySet'])){echo json_encode($disabilities->getBySet($_GET['getBySet']));}
  if(!empty($_GET['getAll'])){echo json_encode($disabilities->getAll($_GET['getAll']));}
  if(!empty($_GET['getLastRow'])){if($disabilities->getLastRow()){exit("this.id='{$disabilities->getId()}', this.patient_id='{$disabilities->getPatient_id()}', this.disability_name='{$disabilities->getDisability_name()}', this.onset_date='{$disabilities->getOnset_date()}', this.notes='{$disabilities->getNotes()}', this.timee='{$disabilities->getTimee()}', this.time='{$disabilities->getTime()}'");}}
  if(!empty($_GET['getFirstRow'])){if($disabilities->getFirstRow()){exit("this.id='{$disabilities->getId()}', this.patient_id='{$disabilities->getPatient_id()}', this.disability_name='{$disabilities->getDisability_name()}', this.onset_date='{$disabilities->getOnset_date()}', this.notes='{$disabilities->getNotes()}', this.timee='{$disabilities->getTimee()}', this.time='{$disabilities->getTime()}'");}}
  if(!empty($_GET['getAllReversed'])){echo json_encode($disabilities->getAllReversed($_GET['getAllReversed']));}
  if(!empty($_GET['getNumberOfRows'])){exit(''.$disabilities->getNumberOfRows());}
  if(!empty($_GET['getById'])){$disabilities->setId($_GET['getById']); if($disabilities->getById()){exit("this.id='{$disabilities->getId()}', this.patient_id='{$disabilities->getPatient_id()}', this.disability_name='{$disabilities->getDisability_name()}', this.onset_date='{$disabilities->getOnset_date()}', this.notes='{$disabilities->getNotes()}', this.timee='{$disabilities->getTimee()}', this.time='{$disabilities->getTime()}'");}}
  if(!empty($_GET['getByPatient_id'])){$disabilities->setPatient_id($_GET['getByPatient_id']); if($disabilities->getByPatient_id()){exit("this.id='{$disabilities->getId()}', this.patient_id='{$disabilities->getPatient_id()}', this.disability_name='{$disabilities->getDisability_name()}', this.onset_date='{$disabilities->getOnset_date()}', this.notes='{$disabilities->getNotes()}', this.timee='{$disabilities->getTimee()}', this.time='{$disabilities->getTime()}'");}}
  if(!empty($_GET['getByDisability_name'])){$disabilities->setDisability_name($_GET['getByDisability_name']); if($disabilities->getByDisability_name()){exit("this.id='{$disabilities->getId()}', this.patient_id='{$disabilities->getPatient_id()}', this.disability_name='{$disabilities->getDisability_name()}', this.onset_date='{$disabilities->getOnset_date()}', this.notes='{$disabilities->getNotes()}', this.timee='{$disabilities->getTimee()}', this.time='{$disabilities->getTime()}'");}}
  if(!empty($_GET['getByOnset_date'])){$disabilities->setOnset_date($_GET['getByOnset_date']); if($disabilities->getByOnset_date()){exit("this.id='{$disabilities->getId()}', this.patient_id='{$disabilities->getPatient_id()}', this.disability_name='{$disabilities->getDisability_name()}', this.onset_date='{$disabilities->getOnset_date()}', this.notes='{$disabilities->getNotes()}', this.timee='{$disabilities->getTimee()}', this.time='{$disabilities->getTime()}'");}}
  if(!empty($_GET['getByNotes'])){$disabilities->setNotes($_GET['getByNotes']); if($disabilities->getByNotes()){exit("this.id='{$disabilities->getId()}', this.patient_id='{$disabilities->getPatient_id()}', this.disability_name='{$disabilities->getDisability_name()}', this.onset_date='{$disabilities->getOnset_date()}', this.notes='{$disabilities->getNotes()}', this.timee='{$disabilities->getTimee()}', this.time='{$disabilities->getTime()}'");}}
  if(!empty($_GET['getByTimee'])){$disabilities->setTimee($_GET['getByTimee']); if($disabilities->getByTimee()){exit("this.id='{$disabilities->getId()}', this.patient_id='{$disabilities->getPatient_id()}', this.disability_name='{$disabilities->getDisability_name()}', this.onset_date='{$disabilities->getOnset_date()}', this.notes='{$disabilities->getNotes()}', this.timee='{$disabilities->getTimee()}', this.time='{$disabilities->getTime()}'");}}
  if(!empty($_GET['getByTime'])){$disabilities->setTime($_GET['getByTime']); if($disabilities->getByTime()){exit("this.id='{$disabilities->getId()}', this.patient_id='{$disabilities->getPatient_id()}', this.disability_name='{$disabilities->getDisability_name()}', this.onset_date='{$disabilities->getOnset_date()}', this.notes='{$disabilities->getNotes()}', this.timee='{$disabilities->getTimee()}', this.time='{$disabilities->getTime()}'");}}

?>