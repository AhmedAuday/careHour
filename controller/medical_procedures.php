<?php

  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/autoloader.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/secuerity.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/time.inc.php';

  // CSRF TOKEN SECURITY
  if(empty($_GET['token']) || empty($_SESSION['medical_procedures_token'])){
    $_SESSION['medical_procedures_token'] = bin2hex(random_bytes(32));
    $_SESSION['medical_procedures_token_time'] = time() + 3600;
    exit($_SESSION['medical_procedures_token']);
  }

  if($_GET['token'] != $_SESSION['medical_procedures_token'] || $_SESSION['medical_procedures_token_time'] <= time()){
    exit("this.msg='error_token_invaild'");
  }

  $_SESSION['medical_procedures_token'] = '';

  // DELETE THE LINES THAT IS USING FOR AUTHENTICATIONS LIKE PASSWORD OR SOMETHING THAT PUT YOUR WORK IN DANGER IF IT WILL BE GETTED BY JAVASCRIPT
  $medical_procedures = new Medical_procedures();
  if(!empty($_GET['id'])){$medical_procedures->setId($_GET['id']);}
  if(!empty($_GET['patient_id'])){$medical_procedures->setPatient_id($_GET['patient_id']);}
  if(!empty($_GET['doctor_id'])){$medical_procedures->setDoctor_id($_GET['doctor_id']);}
  if(!empty($_GET['procedure_date'])){$medical_procedures->setProcedure_date($_GET['procedure_date']);}
  if(!empty($_GET['procedure_type'])){$medical_procedures->setProcedure_type($_GET['procedure_type']);}
  if(!empty($_GET['procedure_notes'])){$medical_procedures->setProcedure_notes($_GET['procedure_notes']);}
  if(!empty($_GET['time'])){$medical_procedures->setTime($_GET['time']);}
  // SET FUNCTIONS MUST BE ABOVE OF THE FOLLOWING LINES
  if(!empty($_GET['add'])){if(!$medical_procedures->add()){exit("this.error=1; this.msg='add'");}}
  if(!empty($_GET['update'])){if(!$medical_procedures->update()){exit("this.error=1; this.msg='update'");}}
  if(!empty($_GET['delete'])){if(!$medical_procedures->delete()){exit("this.error=1; this.msg='delete'");}}
  if(!empty($_GET['getBySet'])){echo json_encode($medical_procedures->getBySet($_GET['getBySet']));}
  if(!empty($_GET['getAll'])){echo json_encode($medical_procedures->getAll($_GET['getAll']));}
  if(!empty($_GET['getLastRow'])){if($medical_procedures->getLastRow()){exit("this.id='{$medical_procedures->getId()}', this.patient_id='{$medical_procedures->getPatient_id()}', this.doctor_id='{$medical_procedures->getDoctor_id()}', this.procedure_date='{$medical_procedures->getProcedure_date()}', this.procedure_type='{$medical_procedures->getProcedure_type()}', this.procedure_notes='{$medical_procedures->getProcedure_notes()}', this.time='{$medical_procedures->getTime()}'");}}
  if(!empty($_GET['getFirstRow'])){if($medical_procedures->getFirstRow()){exit("this.id='{$medical_procedures->getId()}', this.patient_id='{$medical_procedures->getPatient_id()}', this.doctor_id='{$medical_procedures->getDoctor_id()}', this.procedure_date='{$medical_procedures->getProcedure_date()}', this.procedure_type='{$medical_procedures->getProcedure_type()}', this.procedure_notes='{$medical_procedures->getProcedure_notes()}', this.time='{$medical_procedures->getTime()}'");}}
  if(!empty($_GET['getAllReversed'])){echo json_encode($medical_procedures->getAllReversed($_GET['getAllReversed']));}
  if(!empty($_GET['getNumberOfRows'])){exit(''.$medical_procedures->getNumberOfRows());}
  if(!empty($_GET['getById'])){$medical_procedures->setId($_GET['getById']); if($medical_procedures->getById()){exit("this.id='{$medical_procedures->getId()}', this.patient_id='{$medical_procedures->getPatient_id()}', this.doctor_id='{$medical_procedures->getDoctor_id()}', this.procedure_date='{$medical_procedures->getProcedure_date()}', this.procedure_type='{$medical_procedures->getProcedure_type()}', this.procedure_notes='{$medical_procedures->getProcedure_notes()}', this.time='{$medical_procedures->getTime()}'");}}
  if(!empty($_GET['getByPatient_id'])){$medical_procedures->setPatient_id($_GET['getByPatient_id']); if($medical_procedures->getByPatient_id()){exit("this.id='{$medical_procedures->getId()}', this.patient_id='{$medical_procedures->getPatient_id()}', this.doctor_id='{$medical_procedures->getDoctor_id()}', this.procedure_date='{$medical_procedures->getProcedure_date()}', this.procedure_type='{$medical_procedures->getProcedure_type()}', this.procedure_notes='{$medical_procedures->getProcedure_notes()}', this.time='{$medical_procedures->getTime()}'");}}
  if(!empty($_GET['getByDoctor_id'])){$medical_procedures->setDoctor_id($_GET['getByDoctor_id']); if($medical_procedures->getByDoctor_id()){exit("this.id='{$medical_procedures->getId()}', this.patient_id='{$medical_procedures->getPatient_id()}', this.doctor_id='{$medical_procedures->getDoctor_id()}', this.procedure_date='{$medical_procedures->getProcedure_date()}', this.procedure_type='{$medical_procedures->getProcedure_type()}', this.procedure_notes='{$medical_procedures->getProcedure_notes()}', this.time='{$medical_procedures->getTime()}'");}}
  if(!empty($_GET['getByProcedure_date'])){$medical_procedures->setProcedure_date($_GET['getByProcedure_date']); if($medical_procedures->getByProcedure_date()){exit("this.id='{$medical_procedures->getId()}', this.patient_id='{$medical_procedures->getPatient_id()}', this.doctor_id='{$medical_procedures->getDoctor_id()}', this.procedure_date='{$medical_procedures->getProcedure_date()}', this.procedure_type='{$medical_procedures->getProcedure_type()}', this.procedure_notes='{$medical_procedures->getProcedure_notes()}', this.time='{$medical_procedures->getTime()}'");}}
  if(!empty($_GET['getByProcedure_type'])){$medical_procedures->setProcedure_type($_GET['getByProcedure_type']); if($medical_procedures->getByProcedure_type()){exit("this.id='{$medical_procedures->getId()}', this.patient_id='{$medical_procedures->getPatient_id()}', this.doctor_id='{$medical_procedures->getDoctor_id()}', this.procedure_date='{$medical_procedures->getProcedure_date()}', this.procedure_type='{$medical_procedures->getProcedure_type()}', this.procedure_notes='{$medical_procedures->getProcedure_notes()}', this.time='{$medical_procedures->getTime()}'");}}
  if(!empty($_GET['getByProcedure_notes'])){$medical_procedures->setProcedure_notes($_GET['getByProcedure_notes']); if($medical_procedures->getByProcedure_notes()){exit("this.id='{$medical_procedures->getId()}', this.patient_id='{$medical_procedures->getPatient_id()}', this.doctor_id='{$medical_procedures->getDoctor_id()}', this.procedure_date='{$medical_procedures->getProcedure_date()}', this.procedure_type='{$medical_procedures->getProcedure_type()}', this.procedure_notes='{$medical_procedures->getProcedure_notes()}', this.time='{$medical_procedures->getTime()}'");}}
  if(!empty($_GET['getByTime'])){$medical_procedures->setTime($_GET['getByTime']); if($medical_procedures->getByTime()){exit("this.id='{$medical_procedures->getId()}', this.patient_id='{$medical_procedures->getPatient_id()}', this.doctor_id='{$medical_procedures->getDoctor_id()}', this.procedure_date='{$medical_procedures->getProcedure_date()}', this.procedure_type='{$medical_procedures->getProcedure_type()}', this.procedure_notes='{$medical_procedures->getProcedure_notes()}', this.time='{$medical_procedures->getTime()}'");}}

?>