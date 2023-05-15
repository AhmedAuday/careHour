<?php

  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/autoloader.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/secuerity.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/time.inc.php';

  // CSRF TOKEN SECURITY
  if(empty($_GET['token']) || empty($_SESSION['patient_history_token'])){
    $_SESSION['patient_history_token'] = bin2hex(random_bytes(32));
    $_SESSION['patient_history_token_time'] = time() + 3600;
    exit($_SESSION['patient_history_token']);
  }

  if($_GET['token'] != $_SESSION['patient_history_token'] || $_SESSION['patient_history_token_time'] <= time()){
    exit("this.msg='error_token_invaild'");
  }

  $_SESSION['patient_history_token'] = '';

  // DELETE THE LINES THAT IS USING FOR AUTHENTICATIONS LIKE PASSWORD OR SOMETHING THAT PUT YOUR WORK IN DANGER IF IT WILL BE GETTED BY JAVASCRIPT
  $patient_history = new Patient_history();
  if(!empty($_GET['id'])){$patient_history->setId($_GET['id']);}
  if(!empty($_GET['files_id'])){$patient_history->setFiles_id($_GET['files_id']);}
  if(!empty($_GET['diagnosis'])){$patient_history->setDiagnosis($_GET['diagnosis']);}
  if(!empty($_GET['treatment'])){$patient_history->setTreatment($_GET['treatment']);}
  if(!empty($_GET['notes'])){$patient_history->setNotes($_GET['notes']);}
  if(!empty($_GET['created_at'])){$patient_history->setCreated_at($_GET['created_at']);}
  if(!empty($_GET['updated_at'])){$patient_history->setUpdated_at($_GET['updated_at']);}
  if(!empty($_GET['timee'])){$patient_history->setTimee($_GET['timee']);}
  if(!empty($_GET['time'])){$patient_history->setTime($_GET['time']);}
  // SET FUNCTIONS MUST BE ABOVE OF THE FOLLOWING LINES
  if(!empty($_GET['add'])){if(!$patient_history->add()){exit("this.error=1; this.msg='add'");}}
  if(!empty($_GET['update'])){if(!$patient_history->update()){exit("this.error=1; this.msg='update'");}}
  if(!empty($_GET['delete'])){if(!$patient_history->delete()){exit("this.error=1; this.msg='delete'");}}
  if(!empty($_GET['getBySet'])){echo json_encode($patient_history->getBySet($_GET['getBySet']));}
  if(!empty($_GET['getAll'])){echo json_encode($patient_history->getAll($_GET['getAll']));}
  if(!empty($_GET['getLastRow'])){if($patient_history->getLastRow()){exit("this.id='{$patient_history->getId()}', this.files_id='{$patient_history->getFiles_id()}', this.diagnosis='{$patient_history->getDiagnosis()}', this.treatment='{$patient_history->getTreatment()}', this.notes='{$patient_history->getNotes()}', this.created_at='{$patient_history->getCreated_at()}', this.updated_at='{$patient_history->getUpdated_at()}', this.timee='{$patient_history->getTimee()}', this.time='{$patient_history->getTime()}'");}}
  if(!empty($_GET['getFirstRow'])){if($patient_history->getFirstRow()){exit("this.id='{$patient_history->getId()}', this.files_id='{$patient_history->getFiles_id()}', this.diagnosis='{$patient_history->getDiagnosis()}', this.treatment='{$patient_history->getTreatment()}', this.notes='{$patient_history->getNotes()}', this.created_at='{$patient_history->getCreated_at()}', this.updated_at='{$patient_history->getUpdated_at()}', this.timee='{$patient_history->getTimee()}', this.time='{$patient_history->getTime()}'");}}
  if(!empty($_GET['getAllReversed'])){echo json_encode($patient_history->getAllReversed($_GET['getAllReversed']));}
  if(!empty($_GET['getNumberOfRows'])){exit(''.$patient_history->getNumberOfRows());}
  if(!empty($_GET['getById'])){$patient_history->setId($_GET['getById']); if($patient_history->getById()){exit("this.id='{$patient_history->getId()}', this.files_id='{$patient_history->getFiles_id()}', this.diagnosis='{$patient_history->getDiagnosis()}', this.treatment='{$patient_history->getTreatment()}', this.notes='{$patient_history->getNotes()}', this.created_at='{$patient_history->getCreated_at()}', this.updated_at='{$patient_history->getUpdated_at()}', this.timee='{$patient_history->getTimee()}', this.time='{$patient_history->getTime()}'");}}
  if(!empty($_GET['getByFiles_id'])){$patient_history->setFiles_id($_GET['getByFiles_id']); if($patient_history->getByFiles_id()){exit("this.id='{$patient_history->getId()}', this.files_id='{$patient_history->getFiles_id()}', this.diagnosis='{$patient_history->getDiagnosis()}', this.treatment='{$patient_history->getTreatment()}', this.notes='{$patient_history->getNotes()}', this.created_at='{$patient_history->getCreated_at()}', this.updated_at='{$patient_history->getUpdated_at()}', this.timee='{$patient_history->getTimee()}', this.time='{$patient_history->getTime()}'");}}
  if(!empty($_GET['getByDiagnosis'])){$patient_history->setDiagnosis($_GET['getByDiagnosis']); if($patient_history->getByDiagnosis()){exit("this.id='{$patient_history->getId()}', this.files_id='{$patient_history->getFiles_id()}', this.diagnosis='{$patient_history->getDiagnosis()}', this.treatment='{$patient_history->getTreatment()}', this.notes='{$patient_history->getNotes()}', this.created_at='{$patient_history->getCreated_at()}', this.updated_at='{$patient_history->getUpdated_at()}', this.timee='{$patient_history->getTimee()}', this.time='{$patient_history->getTime()}'");}}
  if(!empty($_GET['getByTreatment'])){$patient_history->setTreatment($_GET['getByTreatment']); if($patient_history->getByTreatment()){exit("this.id='{$patient_history->getId()}', this.files_id='{$patient_history->getFiles_id()}', this.diagnosis='{$patient_history->getDiagnosis()}', this.treatment='{$patient_history->getTreatment()}', this.notes='{$patient_history->getNotes()}', this.created_at='{$patient_history->getCreated_at()}', this.updated_at='{$patient_history->getUpdated_at()}', this.timee='{$patient_history->getTimee()}', this.time='{$patient_history->getTime()}'");}}
  if(!empty($_GET['getByNotes'])){$patient_history->setNotes($_GET['getByNotes']); if($patient_history->getByNotes()){exit("this.id='{$patient_history->getId()}', this.files_id='{$patient_history->getFiles_id()}', this.diagnosis='{$patient_history->getDiagnosis()}', this.treatment='{$patient_history->getTreatment()}', this.notes='{$patient_history->getNotes()}', this.created_at='{$patient_history->getCreated_at()}', this.updated_at='{$patient_history->getUpdated_at()}', this.timee='{$patient_history->getTimee()}', this.time='{$patient_history->getTime()}'");}}
  if(!empty($_GET['getByCreated_at'])){$patient_history->setCreated_at($_GET['getByCreated_at']); if($patient_history->getByCreated_at()){exit("this.id='{$patient_history->getId()}', this.files_id='{$patient_history->getFiles_id()}', this.diagnosis='{$patient_history->getDiagnosis()}', this.treatment='{$patient_history->getTreatment()}', this.notes='{$patient_history->getNotes()}', this.created_at='{$patient_history->getCreated_at()}', this.updated_at='{$patient_history->getUpdated_at()}', this.timee='{$patient_history->getTimee()}', this.time='{$patient_history->getTime()}'");}}
  if(!empty($_GET['getByUpdated_at'])){$patient_history->setUpdated_at($_GET['getByUpdated_at']); if($patient_history->getByUpdated_at()){exit("this.id='{$patient_history->getId()}', this.files_id='{$patient_history->getFiles_id()}', this.diagnosis='{$patient_history->getDiagnosis()}', this.treatment='{$patient_history->getTreatment()}', this.notes='{$patient_history->getNotes()}', this.created_at='{$patient_history->getCreated_at()}', this.updated_at='{$patient_history->getUpdated_at()}', this.timee='{$patient_history->getTimee()}', this.time='{$patient_history->getTime()}'");}}
  if(!empty($_GET['getByTimee'])){$patient_history->setTimee($_GET['getByTimee']); if($patient_history->getByTimee()){exit("this.id='{$patient_history->getId()}', this.files_id='{$patient_history->getFiles_id()}', this.diagnosis='{$patient_history->getDiagnosis()}', this.treatment='{$patient_history->getTreatment()}', this.notes='{$patient_history->getNotes()}', this.created_at='{$patient_history->getCreated_at()}', this.updated_at='{$patient_history->getUpdated_at()}', this.timee='{$patient_history->getTimee()}', this.time='{$patient_history->getTime()}'");}}
  if(!empty($_GET['getByTime'])){$patient_history->setTime($_GET['getByTime']); if($patient_history->getByTime()){exit("this.id='{$patient_history->getId()}', this.files_id='{$patient_history->getFiles_id()}', this.diagnosis='{$patient_history->getDiagnosis()}', this.treatment='{$patient_history->getTreatment()}', this.notes='{$patient_history->getNotes()}', this.created_at='{$patient_history->getCreated_at()}', this.updated_at='{$patient_history->getUpdated_at()}', this.timee='{$patient_history->getTimee()}', this.time='{$patient_history->getTime()}'");}}

?>