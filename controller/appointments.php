<?php

  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/autoloader.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/secuerity.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/time.inc.php';

  // CSRF TOKEN SECURITY
  if(empty($_GET['token']) || empty($_SESSION['appointments_token'])){
    $_SESSION['appointments_token'] = bin2hex(random_bytes(32));
    $_SESSION['appointments_token_time'] = time() + 3600;
    exit($_SESSION['appointments_token']);
  }

  if($_GET['token'] != $_SESSION['appointments_token'] || $_SESSION['appointments_token_time'] <= time()){
    exit("this.msg='error_token_invaild'");
  }

  $_SESSION['appointments_token'] = '';

  // DELETE THE LINES THAT IS USING FOR AUTHENTICATIONS LIKE PASSWORD OR SOMETHING THAT PUT YOUR WORK IN DANGER IF IT WILL BE GETTED BY JAVASCRIPT
  $appointments = new Appointments();
  if(!empty($_GET['id'])){$appointments->setId($_GET['id']);}
  if(!empty($_GET['doctor_id'])){$appointments->setDoctor_id($_GET['doctor_id']);}
  if(!empty($_GET['patient_id'])){$appointments->setPatient_id($_GET['patient_id']);}
  if(!empty($_GET['appointment_date'])){$appointments->setAppointment_date($_GET['appointment_date']);}
  if(!empty($_GET['appointment_type'])){$appointments->setAppointment_type($_GET['appointment_type']);}
  if(!empty($_GET['notes'])){$appointments->setNotes($_GET['notes']);}
  if(!empty($_GET['timee'])){$appointments->setTimee($_GET['timee']);}
  if(!empty($_GET['time'])){$appointments->setTime($_GET['time']);}
  // SET FUNCTIONS MUST BE ABOVE OF THE FOLLOWING LINES
  if(!empty($_GET['add'])){if(!$appointments->add()){exit("this.error=1; this.msg='add'");}}
  if(!empty($_GET['update'])){if(!$appointments->update()){exit("this.error=1; this.msg='update'");}}
  if(!empty($_GET['delete'])){if(!$appointments->delete()){exit("this.error=1; this.msg='delete'");}}
  if(!empty($_GET['getBySet'])){echo json_encode($appointments->getBySet($_GET['getBySet']));}
  if(!empty($_GET['getAll'])){echo json_encode($appointments->getAll($_GET['getAll']));}
  if(!empty($_GET['getLastRow'])){if($appointments->getLastRow()){exit("this.id='{$appointments->getId()}', this.doctor_id='{$appointments->getDoctor_id()}', this.patient_id='{$appointments->getPatient_id()}', this.appointment_date='{$appointments->getAppointment_date()}', this.appointment_type='{$appointments->getAppointment_type()}', this.notes='{$appointments->getNotes()}', this.timee='{$appointments->getTimee()}', this.time='{$appointments->getTime()}'");}}
  if(!empty($_GET['getFirstRow'])){if($appointments->getFirstRow()){exit("this.id='{$appointments->getId()}', this.doctor_id='{$appointments->getDoctor_id()}', this.patient_id='{$appointments->getPatient_id()}', this.appointment_date='{$appointments->getAppointment_date()}', this.appointment_type='{$appointments->getAppointment_type()}', this.notes='{$appointments->getNotes()}', this.timee='{$appointments->getTimee()}', this.time='{$appointments->getTime()}'");}}
  if(!empty($_GET['getAllReversed'])){echo json_encode($appointments->getAllReversed($_GET['getAllReversed']));}
  if(!empty($_GET['getNumberOfRows'])){exit(''.$appointments->getNumberOfRows());}
  if(!empty($_GET['getById'])){$appointments->setId($_GET['getById']); if($appointments->getById()){exit("this.id='{$appointments->getId()}', this.doctor_id='{$appointments->getDoctor_id()}', this.patient_id='{$appointments->getPatient_id()}', this.appointment_date='{$appointments->getAppointment_date()}', this.appointment_type='{$appointments->getAppointment_type()}', this.notes='{$appointments->getNotes()}', this.timee='{$appointments->getTimee()}', this.time='{$appointments->getTime()}'");}}
  if(!empty($_GET['getByDoctor_id'])){$appointments->setDoctor_id($_GET['getByDoctor_id']); if($appointments->getByDoctor_id()){exit("this.id='{$appointments->getId()}', this.doctor_id='{$appointments->getDoctor_id()}', this.patient_id='{$appointments->getPatient_id()}', this.appointment_date='{$appointments->getAppointment_date()}', this.appointment_type='{$appointments->getAppointment_type()}', this.notes='{$appointments->getNotes()}', this.timee='{$appointments->getTimee()}', this.time='{$appointments->getTime()}'");}}
  if(!empty($_GET['getByPatient_id'])){$appointments->setPatient_id($_GET['getByPatient_id']); if($appointments->getByPatient_id()){exit("this.id='{$appointments->getId()}', this.doctor_id='{$appointments->getDoctor_id()}', this.patient_id='{$appointments->getPatient_id()}', this.appointment_date='{$appointments->getAppointment_date()}', this.appointment_type='{$appointments->getAppointment_type()}', this.notes='{$appointments->getNotes()}', this.timee='{$appointments->getTimee()}', this.time='{$appointments->getTime()}'");}}
  if(!empty($_GET['getByAppointment_date'])){$appointments->setAppointment_date($_GET['getByAppointment_date']); if($appointments->getByAppointment_date()){exit("this.id='{$appointments->getId()}', this.doctor_id='{$appointments->getDoctor_id()}', this.patient_id='{$appointments->getPatient_id()}', this.appointment_date='{$appointments->getAppointment_date()}', this.appointment_type='{$appointments->getAppointment_type()}', this.notes='{$appointments->getNotes()}', this.timee='{$appointments->getTimee()}', this.time='{$appointments->getTime()}'");}}
  if(!empty($_GET['getByAppointment_type'])){$appointments->setAppointment_type($_GET['getByAppointment_type']); if($appointments->getByAppointment_type()){exit("this.id='{$appointments->getId()}', this.doctor_id='{$appointments->getDoctor_id()}', this.patient_id='{$appointments->getPatient_id()}', this.appointment_date='{$appointments->getAppointment_date()}', this.appointment_type='{$appointments->getAppointment_type()}', this.notes='{$appointments->getNotes()}', this.timee='{$appointments->getTimee()}', this.time='{$appointments->getTime()}'");}}
  if(!empty($_GET['getByNotes'])){$appointments->setNotes($_GET['getByNotes']); if($appointments->getByNotes()){exit("this.id='{$appointments->getId()}', this.doctor_id='{$appointments->getDoctor_id()}', this.patient_id='{$appointments->getPatient_id()}', this.appointment_date='{$appointments->getAppointment_date()}', this.appointment_type='{$appointments->getAppointment_type()}', this.notes='{$appointments->getNotes()}', this.timee='{$appointments->getTimee()}', this.time='{$appointments->getTime()}'");}}
  if(!empty($_GET['getByTimee'])){$appointments->setTimee($_GET['getByTimee']); if($appointments->getByTimee()){exit("this.id='{$appointments->getId()}', this.doctor_id='{$appointments->getDoctor_id()}', this.patient_id='{$appointments->getPatient_id()}', this.appointment_date='{$appointments->getAppointment_date()}', this.appointment_type='{$appointments->getAppointment_type()}', this.notes='{$appointments->getNotes()}', this.timee='{$appointments->getTimee()}', this.time='{$appointments->getTime()}'");}}
  if(!empty($_GET['getByTime'])){$appointments->setTime($_GET['getByTime']); if($appointments->getByTime()){exit("this.id='{$appointments->getId()}', this.doctor_id='{$appointments->getDoctor_id()}', this.patient_id='{$appointments->getPatient_id()}', this.appointment_date='{$appointments->getAppointment_date()}', this.appointment_type='{$appointments->getAppointment_type()}', this.notes='{$appointments->getNotes()}', this.timee='{$appointments->getTimee()}', this.time='{$appointments->getTime()}'");}}

?>