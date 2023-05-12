<?php

  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/autoloader.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/secuerity.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/time.inc.php';

  // CSRF TOKEN SECURITY
  if(empty($_GET['token']) || empty($_SESSION['symptoms_token'])){
    $_SESSION['symptoms_token'] = bin2hex(random_bytes(32));
    $_SESSION['symptoms_token_time'] = time() + 3600;
    exit($_SESSION['symptoms_token']);
  }

  if($_GET['token'] != $_SESSION['symptoms_token'] || $_SESSION['symptoms_token_time'] <= time()){
    exit("this.msg='error_token_invaild'");
  }

  $_SESSION['symptoms_token'] = '';

  // DELETE THE LINES THAT IS USING FOR AUTHENTICATIONS LIKE PASSWORD OR SOMETHING THAT PUT YOUR WORK IN DANGER IF IT WILL BE GETTED BY JAVASCRIPT
  $symptoms = new Symptoms();
  if(!empty($_GET['id'])){$symptoms->setId($_GET['id']);}
  if(!empty($_GET['patient_id'])){$symptoms->setPatient_id($_GET['patient_id']);}
  if(!empty($_GET['symptom_name'])){$symptoms->setSymptom_name($_GET['symptom_name']);}
  if(!empty($_GET['start_date'])){$symptoms->setStart_date($_GET['start_date']);}
  if(!empty($_GET['end_date'])){$symptoms->setEnd_date($_GET['end_date']);}
  if(!empty($_GET['notes'])){$symptoms->setNotes($_GET['notes']);}
  if(!empty($_GET['timee'])){$symptoms->setTimee($_GET['timee']);}
  if(!empty($_GET['time'])){$symptoms->setTime($_GET['time']);}
  // SET FUNCTIONS MUST BE ABOVE OF THE FOLLOWING LINES
  if(!empty($_GET['add'])){if(!$symptoms->add()){exit("this.error=1; this.msg='add'");}}
  if(!empty($_GET['update'])){if(!$symptoms->update()){exit("this.error=1; this.msg='update'");}}
  if(!empty($_GET['delete'])){if(!$symptoms->delete()){exit("this.error=1; this.msg='delete'");}}
  if(!empty($_GET['getBySet'])){echo json_encode($symptoms->getBySet($_GET['getBySet']));}
  if(!empty($_GET['getAll'])){echo json_encode($symptoms->getAll($_GET['getAll']));}
  if(!empty($_GET['getLastRow'])){if($symptoms->getLastRow()){exit("this.id='{$symptoms->getId()}', this.patient_id='{$symptoms->getPatient_id()}', this.symptom_name='{$symptoms->getSymptom_name()}', this.start_date='{$symptoms->getStart_date()}', this.end_date='{$symptoms->getEnd_date()}', this.notes='{$symptoms->getNotes()}', this.timee='{$symptoms->getTimee()}', this.time='{$symptoms->getTime()}'");}}
  if(!empty($_GET['getFirstRow'])){if($symptoms->getFirstRow()){exit("this.id='{$symptoms->getId()}', this.patient_id='{$symptoms->getPatient_id()}', this.symptom_name='{$symptoms->getSymptom_name()}', this.start_date='{$symptoms->getStart_date()}', this.end_date='{$symptoms->getEnd_date()}', this.notes='{$symptoms->getNotes()}', this.timee='{$symptoms->getTimee()}', this.time='{$symptoms->getTime()}'");}}
  if(!empty($_GET['getAllReversed'])){echo json_encode($symptoms->getAllReversed($_GET['getAllReversed']));}
  if(!empty($_GET['getNumberOfRows'])){exit(''.$symptoms->getNumberOfRows());}
  if(!empty($_GET['getById'])){$symptoms->setId($_GET['getById']); if($symptoms->getById()){exit("this.id='{$symptoms->getId()}', this.patient_id='{$symptoms->getPatient_id()}', this.symptom_name='{$symptoms->getSymptom_name()}', this.start_date='{$symptoms->getStart_date()}', this.end_date='{$symptoms->getEnd_date()}', this.notes='{$symptoms->getNotes()}', this.timee='{$symptoms->getTimee()}', this.time='{$symptoms->getTime()}'");}}
  if(!empty($_GET['getByPatient_id'])){$symptoms->setPatient_id($_GET['getByPatient_id']); if($symptoms->getByPatient_id()){exit("this.id='{$symptoms->getId()}', this.patient_id='{$symptoms->getPatient_id()}', this.symptom_name='{$symptoms->getSymptom_name()}', this.start_date='{$symptoms->getStart_date()}', this.end_date='{$symptoms->getEnd_date()}', this.notes='{$symptoms->getNotes()}', this.timee='{$symptoms->getTimee()}', this.time='{$symptoms->getTime()}'");}}
  if(!empty($_GET['getBySymptom_name'])){$symptoms->setSymptom_name($_GET['getBySymptom_name']); if($symptoms->getBySymptom_name()){exit("this.id='{$symptoms->getId()}', this.patient_id='{$symptoms->getPatient_id()}', this.symptom_name='{$symptoms->getSymptom_name()}', this.start_date='{$symptoms->getStart_date()}', this.end_date='{$symptoms->getEnd_date()}', this.notes='{$symptoms->getNotes()}', this.timee='{$symptoms->getTimee()}', this.time='{$symptoms->getTime()}'");}}
  if(!empty($_GET['getByStart_date'])){$symptoms->setStart_date($_GET['getByStart_date']); if($symptoms->getByStart_date()){exit("this.id='{$symptoms->getId()}', this.patient_id='{$symptoms->getPatient_id()}', this.symptom_name='{$symptoms->getSymptom_name()}', this.start_date='{$symptoms->getStart_date()}', this.end_date='{$symptoms->getEnd_date()}', this.notes='{$symptoms->getNotes()}', this.timee='{$symptoms->getTimee()}', this.time='{$symptoms->getTime()}'");}}
  if(!empty($_GET['getByEnd_date'])){$symptoms->setEnd_date($_GET['getByEnd_date']); if($symptoms->getByEnd_date()){exit("this.id='{$symptoms->getId()}', this.patient_id='{$symptoms->getPatient_id()}', this.symptom_name='{$symptoms->getSymptom_name()}', this.start_date='{$symptoms->getStart_date()}', this.end_date='{$symptoms->getEnd_date()}', this.notes='{$symptoms->getNotes()}', this.timee='{$symptoms->getTimee()}', this.time='{$symptoms->getTime()}'");}}
  if(!empty($_GET['getByNotes'])){$symptoms->setNotes($_GET['getByNotes']); if($symptoms->getByNotes()){exit("this.id='{$symptoms->getId()}', this.patient_id='{$symptoms->getPatient_id()}', this.symptom_name='{$symptoms->getSymptom_name()}', this.start_date='{$symptoms->getStart_date()}', this.end_date='{$symptoms->getEnd_date()}', this.notes='{$symptoms->getNotes()}', this.timee='{$symptoms->getTimee()}', this.time='{$symptoms->getTime()}'");}}
  if(!empty($_GET['getByTimee'])){$symptoms->setTimee($_GET['getByTimee']); if($symptoms->getByTimee()){exit("this.id='{$symptoms->getId()}', this.patient_id='{$symptoms->getPatient_id()}', this.symptom_name='{$symptoms->getSymptom_name()}', this.start_date='{$symptoms->getStart_date()}', this.end_date='{$symptoms->getEnd_date()}', this.notes='{$symptoms->getNotes()}', this.timee='{$symptoms->getTimee()}', this.time='{$symptoms->getTime()}'");}}
  if(!empty($_GET['getByTime'])){$symptoms->setTime($_GET['getByTime']); if($symptoms->getByTime()){exit("this.id='{$symptoms->getId()}', this.patient_id='{$symptoms->getPatient_id()}', this.symptom_name='{$symptoms->getSymptom_name()}', this.start_date='{$symptoms->getStart_date()}', this.end_date='{$symptoms->getEnd_date()}', this.notes='{$symptoms->getNotes()}', this.timee='{$symptoms->getTimee()}', this.time='{$symptoms->getTime()}'");}}

?>