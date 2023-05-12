<?php

  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/autoloader.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/secuerity.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/time.inc.php';

  // CSRF TOKEN SECURITY
  if(empty($_GET['token']) || empty($_SESSION['medications_token'])){
    $_SESSION['medications_token'] = bin2hex(random_bytes(32));
    $_SESSION['medications_token_time'] = time() + 3600;
    exit($_SESSION['medications_token']);
  }

  if($_GET['token'] != $_SESSION['medications_token'] || $_SESSION['medications_token_time'] <= time()){
    exit("this.msg='error_token_invaild'");
  }

  $_SESSION['medications_token'] = '';

  // DELETE THE LINES THAT IS USING FOR AUTHENTICATIONS LIKE PASSWORD OR SOMETHING THAT PUT YOUR WORK IN DANGER IF IT WILL BE GETTED BY JAVASCRIPT
  $medications = new Medications();
  if(!empty($_GET['id'])){$medications->setId($_GET['id']);}
  if(!empty($_GET['doctor_id'])){$medications->setDoctor_id($_GET['doctor_id']);}
  if(!empty($_GET['patient_id'])){$medications->setPatient_id($_GET['patient_id']);}
  if(!empty($_GET['medication_name'])){$medications->setMedication_name($_GET['medication_name']);}
  if(!empty($_GET['dosage'])){$medications->setDosage($_GET['dosage']);}
  if(!empty($_GET['frequency'])){$medications->setFrequency($_GET['frequency']);}
  if(!empty($_GET['start_date'])){$medications->setStart_date($_GET['start_date']);}
  if(!empty($_GET['end_date'])){$medications->setEnd_date($_GET['end_date']);}
  if(!empty($_GET['timee'])){$medications->setTimee($_GET['timee']);}
  if(!empty($_GET['time'])){$medications->setTime($_GET['time']);}
  // SET FUNCTIONS MUST BE ABOVE OF THE FOLLOWING LINES
  if(!empty($_GET['add'])){if(!$medications->add()){exit("this.error=1; this.msg='add'");}}
  if(!empty($_GET['update'])){if(!$medications->update()){exit("this.error=1; this.msg='update'");}}
  if(!empty($_GET['delete'])){if(!$medications->delete()){exit("this.error=1; this.msg='delete'");}}
  if(!empty($_GET['getBySet'])){echo json_encode($medications->getBySet($_GET['getBySet']));}
  if(!empty($_GET['getAll'])){echo json_encode($medications->getAll($_GET['getAll']));}
  if(!empty($_GET['getLastRow'])){if($medications->getLastRow()){exit("this.id='{$medications->getId()}', this.doctor_id='{$medications->getDoctor_id()}', this.patient_id='{$medications->getPatient_id()}', this.medication_name='{$medications->getMedication_name()}', this.dosage='{$medications->getDosage()}', this.frequency='{$medications->getFrequency()}', this.start_date='{$medications->getStart_date()}', this.end_date='{$medications->getEnd_date()}', this.timee='{$medications->getTimee()}', this.time='{$medications->getTime()}'");}}
  if(!empty($_GET['getFirstRow'])){if($medications->getFirstRow()){exit("this.id='{$medications->getId()}', this.doctor_id='{$medications->getDoctor_id()}', this.patient_id='{$medications->getPatient_id()}', this.medication_name='{$medications->getMedication_name()}', this.dosage='{$medications->getDosage()}', this.frequency='{$medications->getFrequency()}', this.start_date='{$medications->getStart_date()}', this.end_date='{$medications->getEnd_date()}', this.timee='{$medications->getTimee()}', this.time='{$medications->getTime()}'");}}
  if(!empty($_GET['getAllReversed'])){echo json_encode($medications->getAllReversed($_GET['getAllReversed']));}
  if(!empty($_GET['getNumberOfRows'])){exit(''.$medications->getNumberOfRows());}
  if(!empty($_GET['getById'])){$medications->setId($_GET['getById']); if($medications->getById()){exit("this.id='{$medications->getId()}', this.doctor_id='{$medications->getDoctor_id()}', this.patient_id='{$medications->getPatient_id()}', this.medication_name='{$medications->getMedication_name()}', this.dosage='{$medications->getDosage()}', this.frequency='{$medications->getFrequency()}', this.start_date='{$medications->getStart_date()}', this.end_date='{$medications->getEnd_date()}', this.timee='{$medications->getTimee()}', this.time='{$medications->getTime()}'");}}
  if(!empty($_GET['getByDoctor_id'])){$medications->setDoctor_id($_GET['getByDoctor_id']); if($medications->getByDoctor_id()){exit("this.id='{$medications->getId()}', this.doctor_id='{$medications->getDoctor_id()}', this.patient_id='{$medications->getPatient_id()}', this.medication_name='{$medications->getMedication_name()}', this.dosage='{$medications->getDosage()}', this.frequency='{$medications->getFrequency()}', this.start_date='{$medications->getStart_date()}', this.end_date='{$medications->getEnd_date()}', this.timee='{$medications->getTimee()}', this.time='{$medications->getTime()}'");}}
  if(!empty($_GET['getByPatient_id'])){$medications->setPatient_id($_GET['getByPatient_id']); if($medications->getByPatient_id()){exit("this.id='{$medications->getId()}', this.doctor_id='{$medications->getDoctor_id()}', this.patient_id='{$medications->getPatient_id()}', this.medication_name='{$medications->getMedication_name()}', this.dosage='{$medications->getDosage()}', this.frequency='{$medications->getFrequency()}', this.start_date='{$medications->getStart_date()}', this.end_date='{$medications->getEnd_date()}', this.timee='{$medications->getTimee()}', this.time='{$medications->getTime()}'");}}
  if(!empty($_GET['getByMedication_name'])){$medications->setMedication_name($_GET['getByMedication_name']); if($medications->getByMedication_name()){exit("this.id='{$medications->getId()}', this.doctor_id='{$medications->getDoctor_id()}', this.patient_id='{$medications->getPatient_id()}', this.medication_name='{$medications->getMedication_name()}', this.dosage='{$medications->getDosage()}', this.frequency='{$medications->getFrequency()}', this.start_date='{$medications->getStart_date()}', this.end_date='{$medications->getEnd_date()}', this.timee='{$medications->getTimee()}', this.time='{$medications->getTime()}'");}}
  if(!empty($_GET['getByDosage'])){$medications->setDosage($_GET['getByDosage']); if($medications->getByDosage()){exit("this.id='{$medications->getId()}', this.doctor_id='{$medications->getDoctor_id()}', this.patient_id='{$medications->getPatient_id()}', this.medication_name='{$medications->getMedication_name()}', this.dosage='{$medications->getDosage()}', this.frequency='{$medications->getFrequency()}', this.start_date='{$medications->getStart_date()}', this.end_date='{$medications->getEnd_date()}', this.timee='{$medications->getTimee()}', this.time='{$medications->getTime()}'");}}
  if(!empty($_GET['getByFrequency'])){$medications->setFrequency($_GET['getByFrequency']); if($medications->getByFrequency()){exit("this.id='{$medications->getId()}', this.doctor_id='{$medications->getDoctor_id()}', this.patient_id='{$medications->getPatient_id()}', this.medication_name='{$medications->getMedication_name()}', this.dosage='{$medications->getDosage()}', this.frequency='{$medications->getFrequency()}', this.start_date='{$medications->getStart_date()}', this.end_date='{$medications->getEnd_date()}', this.timee='{$medications->getTimee()}', this.time='{$medications->getTime()}'");}}
  if(!empty($_GET['getByStart_date'])){$medications->setStart_date($_GET['getByStart_date']); if($medications->getByStart_date()){exit("this.id='{$medications->getId()}', this.doctor_id='{$medications->getDoctor_id()}', this.patient_id='{$medications->getPatient_id()}', this.medication_name='{$medications->getMedication_name()}', this.dosage='{$medications->getDosage()}', this.frequency='{$medications->getFrequency()}', this.start_date='{$medications->getStart_date()}', this.end_date='{$medications->getEnd_date()}', this.timee='{$medications->getTimee()}', this.time='{$medications->getTime()}'");}}
  if(!empty($_GET['getByEnd_date'])){$medications->setEnd_date($_GET['getByEnd_date']); if($medications->getByEnd_date()){exit("this.id='{$medications->getId()}', this.doctor_id='{$medications->getDoctor_id()}', this.patient_id='{$medications->getPatient_id()}', this.medication_name='{$medications->getMedication_name()}', this.dosage='{$medications->getDosage()}', this.frequency='{$medications->getFrequency()}', this.start_date='{$medications->getStart_date()}', this.end_date='{$medications->getEnd_date()}', this.timee='{$medications->getTimee()}', this.time='{$medications->getTime()}'");}}
  if(!empty($_GET['getByTimee'])){$medications->setTimee($_GET['getByTimee']); if($medications->getByTimee()){exit("this.id='{$medications->getId()}', this.doctor_id='{$medications->getDoctor_id()}', this.patient_id='{$medications->getPatient_id()}', this.medication_name='{$medications->getMedication_name()}', this.dosage='{$medications->getDosage()}', this.frequency='{$medications->getFrequency()}', this.start_date='{$medications->getStart_date()}', this.end_date='{$medications->getEnd_date()}', this.timee='{$medications->getTimee()}', this.time='{$medications->getTime()}'");}}
  if(!empty($_GET['getByTime'])){$medications->setTime($_GET['getByTime']); if($medications->getByTime()){exit("this.id='{$medications->getId()}', this.doctor_id='{$medications->getDoctor_id()}', this.patient_id='{$medications->getPatient_id()}', this.medication_name='{$medications->getMedication_name()}', this.dosage='{$medications->getDosage()}', this.frequency='{$medications->getFrequency()}', this.start_date='{$medications->getStart_date()}', this.end_date='{$medications->getEnd_date()}', this.timee='{$medications->getTimee()}', this.time='{$medications->getTime()}'");}}

?>