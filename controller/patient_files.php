<?php

  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/autoloader.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/secuerity.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/time.inc.php';

  // CSRF TOKEN SECURITY
  if(empty($_GET['token']) || empty($_SESSION['patient_files_token'])){
    $_SESSION['patient_files_token'] = bin2hex(random_bytes(32));
    $_SESSION['patient_files_token_time'] = time() + 3600;
    exit($_SESSION['patient_files_token']);
  }

  if($_GET['token'] != $_SESSION['patient_files_token'] || $_SESSION['patient_files_token_time'] <= time()){
    exit("this.msg='error_token_invaild'");
  }

  $_SESSION['patient_files_token'] = '';

  // DELETE THE LINES THAT IS USING FOR AUTHENTICATIONS LIKE PASSWORD OR SOMETHING THAT PUT YOUR WORK IN DANGER IF IT WILL BE GETTED BY JAVASCRIPT
  $patient_files = new Patient_files();
  if(!empty($_GET['id'])){$patient_files->setId($_GET['id']);}
  if(!empty($_GET['patient_id'])){$patient_files->setPatient_id($_GET['patient_id']);}
  if(!empty($_GET['doctor_id'])){$patient_files->setDoctor_id($_GET['doctor_id']);}
  if(!empty($_GET['file_name'])){$patient_files->setFile_name($_GET['file_name']);}
  if(!empty($_GET['file_type'])){$patient_files->setFile_type($_GET['file_type']);}
  if(!empty($_GET['created_at'])){$patient_files->setCreated_at($_GET['created_at']);}
  if(!empty($_GET['timee'])){$patient_files->setTimee($_GET['timee']);}
  if(!empty($_GET['time'])){$patient_files->setTime($_GET['time']);}
  // SET FUNCTIONS MUST BE ABOVE OF THE FOLLOWING LINES
  if(!empty($_GET['add'])){if(!$patient_files->add()){exit("this.error=1; this.msg='add'");}}
  if(!empty($_GET['update'])){if(!$patient_files->update()){exit("this.error=1; this.msg='update'");}}
  if(!empty($_GET['delete'])){if(!$patient_files->delete()){exit("this.error=1; this.msg='delete'");}}
  if(!empty($_GET['getBySet'])){echo json_encode($patient_files->getBySet($_GET['getBySet']));}
  if(!empty($_GET['getAll'])){echo json_encode($patient_files->getAll($_GET['getAll']));}
  if(!empty($_GET['getLastRow'])){if($patient_files->getLastRow()){exit("this.id='{$patient_files->getId()}', this.patient_id='{$patient_files->getPatient_id()}', this.doctor_id='{$patient_files->getDoctor_id()}', this.file_name='{$patient_files->getFile_name()}', this.file_type='{$patient_files->getFile_type()}', this.created_at='{$patient_files->getCreated_at()}', this.timee='{$patient_files->getTimee()}', this.time='{$patient_files->getTime()}'");}}
  if(!empty($_GET['getFirstRow'])){if($patient_files->getFirstRow()){exit("this.id='{$patient_files->getId()}', this.patient_id='{$patient_files->getPatient_id()}', this.doctor_id='{$patient_files->getDoctor_id()}', this.file_name='{$patient_files->getFile_name()}', this.file_type='{$patient_files->getFile_type()}', this.created_at='{$patient_files->getCreated_at()}', this.timee='{$patient_files->getTimee()}', this.time='{$patient_files->getTime()}'");}}
  if(!empty($_GET['getAllReversed'])){echo json_encode($patient_files->getAllReversed($_GET['getAllReversed']));}
  if(!empty($_GET['getNumberOfRows'])){exit(''.$patient_files->getNumberOfRows());}
  if(!empty($_GET['getById'])){$patient_files->setId($_GET['getById']); if($patient_files->getById()){exit("this.id='{$patient_files->getId()}', this.patient_id='{$patient_files->getPatient_id()}', this.doctor_id='{$patient_files->getDoctor_id()}', this.file_name='{$patient_files->getFile_name()}', this.file_type='{$patient_files->getFile_type()}', this.created_at='{$patient_files->getCreated_at()}', this.timee='{$patient_files->getTimee()}', this.time='{$patient_files->getTime()}'");}}
  if(!empty($_GET['getByPatient_id'])){$patient_files->setPatient_id($_GET['getByPatient_id']); if($patient_files->getByPatient_id()){exit("this.id='{$patient_files->getId()}', this.patient_id='{$patient_files->getPatient_id()}', this.doctor_id='{$patient_files->getDoctor_id()}', this.file_name='{$patient_files->getFile_name()}', this.file_type='{$patient_files->getFile_type()}', this.created_at='{$patient_files->getCreated_at()}', this.timee='{$patient_files->getTimee()}', this.time='{$patient_files->getTime()}'");}}
  if(!empty($_GET['getByDoctor_id'])){$patient_files->setDoctor_id($_GET['getByDoctor_id']); if($patient_files->getByDoctor_id()){exit("this.id='{$patient_files->getId()}', this.patient_id='{$patient_files->getPatient_id()}', this.doctor_id='{$patient_files->getDoctor_id()}', this.file_name='{$patient_files->getFile_name()}', this.file_type='{$patient_files->getFile_type()}', this.created_at='{$patient_files->getCreated_at()}', this.timee='{$patient_files->getTimee()}', this.time='{$patient_files->getTime()}'");}}
  if(!empty($_GET['getByFile_name'])){$patient_files->setFile_name($_GET['getByFile_name']); if($patient_files->getByFile_name()){exit("this.id='{$patient_files->getId()}', this.patient_id='{$patient_files->getPatient_id()}', this.doctor_id='{$patient_files->getDoctor_id()}', this.file_name='{$patient_files->getFile_name()}', this.file_type='{$patient_files->getFile_type()}', this.created_at='{$patient_files->getCreated_at()}', this.timee='{$patient_files->getTimee()}', this.time='{$patient_files->getTime()}'");}}
  if(!empty($_GET['getByFile_type'])){$patient_files->setFile_type($_GET['getByFile_type']); if($patient_files->getByFile_type()){exit("this.id='{$patient_files->getId()}', this.patient_id='{$patient_files->getPatient_id()}', this.doctor_id='{$patient_files->getDoctor_id()}', this.file_name='{$patient_files->getFile_name()}', this.file_type='{$patient_files->getFile_type()}', this.created_at='{$patient_files->getCreated_at()}', this.timee='{$patient_files->getTimee()}', this.time='{$patient_files->getTime()}'");}}
  if(!empty($_GET['getByCreated_at'])){$patient_files->setCreated_at($_GET['getByCreated_at']); if($patient_files->getByCreated_at()){exit("this.id='{$patient_files->getId()}', this.patient_id='{$patient_files->getPatient_id()}', this.doctor_id='{$patient_files->getDoctor_id()}', this.file_name='{$patient_files->getFile_name()}', this.file_type='{$patient_files->getFile_type()}', this.created_at='{$patient_files->getCreated_at()}', this.timee='{$patient_files->getTimee()}', this.time='{$patient_files->getTime()}'");}}
  if(!empty($_GET['getByTimee'])){$patient_files->setTimee($_GET['getByTimee']); if($patient_files->getByTimee()){exit("this.id='{$patient_files->getId()}', this.patient_id='{$patient_files->getPatient_id()}', this.doctor_id='{$patient_files->getDoctor_id()}', this.file_name='{$patient_files->getFile_name()}', this.file_type='{$patient_files->getFile_type()}', this.created_at='{$patient_files->getCreated_at()}', this.timee='{$patient_files->getTimee()}', this.time='{$patient_files->getTime()}'");}}
  if(!empty($_GET['getByTime'])){$patient_files->setTime($_GET['getByTime']); if($patient_files->getByTime()){exit("this.id='{$patient_files->getId()}', this.patient_id='{$patient_files->getPatient_id()}', this.doctor_id='{$patient_files->getDoctor_id()}', this.file_name='{$patient_files->getFile_name()}', this.file_type='{$patient_files->getFile_type()}', this.created_at='{$patient_files->getCreated_at()}', this.timee='{$patient_files->getTimee()}', this.time='{$patient_files->getTime()}'");}}

?>