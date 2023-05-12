<?php

  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/autoloader.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/secuerity.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/time.inc.php';

  // CSRF TOKEN SECURITY
  if(empty($_GET['token']) || empty($_SESSION['lab_tests_token'])){
    $_SESSION['lab_tests_token'] = bin2hex(random_bytes(32));
    $_SESSION['lab_tests_token_time'] = time() + 3600;
    exit($_SESSION['lab_tests_token']);
  }

  if($_GET['token'] != $_SESSION['lab_tests_token'] || $_SESSION['lab_tests_token_time'] <= time()){
    exit("this.msg='error_token_invaild'");
  }

  $_SESSION['lab_tests_token'] = '';

  // DELETE THE LINES THAT IS USING FOR AUTHENTICATIONS LIKE PASSWORD OR SOMETHING THAT PUT YOUR WORK IN DANGER IF IT WILL BE GETTED BY JAVASCRIPT
  $lab_tests = new Lab_tests();
  if(!empty($_GET['id'])){$lab_tests->setId($_GET['id']);}
  if(!empty($_GET['doctor_id'])){$lab_tests->setDoctor_id($_GET['doctor_id']);}
  if(!empty($_GET['patient_id'])){$lab_tests->setPatient_id($_GET['patient_id']);}
  if(!empty($_GET['test_name'])){$lab_tests->setTest_name($_GET['test_name']);}
  if(!empty($_GET['test_results'])){$lab_tests->setTest_results($_GET['test_results']);}
  if(!empty($_GET['test_date'])){$lab_tests->setTest_date($_GET['test_date']);}
  if(!empty($_GET['timee'])){$lab_tests->setTimee($_GET['timee']);}
  if(!empty($_GET['time'])){$lab_tests->setTime($_GET['time']);}
  // SET FUNCTIONS MUST BE ABOVE OF THE FOLLOWING LINES
  if(!empty($_GET['add'])){if(!$lab_tests->add()){exit("this.error=1; this.msg='add'");}}
  if(!empty($_GET['update'])){if(!$lab_tests->update()){exit("this.error=1; this.msg='update'");}}
  if(!empty($_GET['delete'])){if(!$lab_tests->delete()){exit("this.error=1; this.msg='delete'");}}
  if(!empty($_GET['getBySet'])){echo json_encode($lab_tests->getBySet($_GET['getBySet']));}
  if(!empty($_GET['getAll'])){echo json_encode($lab_tests->getAll($_GET['getAll']));}
  if(!empty($_GET['getLastRow'])){if($lab_tests->getLastRow()){exit("this.id='{$lab_tests->getId()}', this.doctor_id='{$lab_tests->getDoctor_id()}', this.patient_id='{$lab_tests->getPatient_id()}', this.test_name='{$lab_tests->getTest_name()}', this.test_results='{$lab_tests->getTest_results()}', this.test_date='{$lab_tests->getTest_date()}', this.timee='{$lab_tests->getTimee()}', this.time='{$lab_tests->getTime()}'");}}
  if(!empty($_GET['getFirstRow'])){if($lab_tests->getFirstRow()){exit("this.id='{$lab_tests->getId()}', this.doctor_id='{$lab_tests->getDoctor_id()}', this.patient_id='{$lab_tests->getPatient_id()}', this.test_name='{$lab_tests->getTest_name()}', this.test_results='{$lab_tests->getTest_results()}', this.test_date='{$lab_tests->getTest_date()}', this.timee='{$lab_tests->getTimee()}', this.time='{$lab_tests->getTime()}'");}}
  if(!empty($_GET['getAllReversed'])){echo json_encode($lab_tests->getAllReversed($_GET['getAllReversed']));}
  if(!empty($_GET['getNumberOfRows'])){exit(''.$lab_tests->getNumberOfRows());}
  if(!empty($_GET['getById'])){$lab_tests->setId($_GET['getById']); if($lab_tests->getById()){exit("this.id='{$lab_tests->getId()}', this.doctor_id='{$lab_tests->getDoctor_id()}', this.patient_id='{$lab_tests->getPatient_id()}', this.test_name='{$lab_tests->getTest_name()}', this.test_results='{$lab_tests->getTest_results()}', this.test_date='{$lab_tests->getTest_date()}', this.timee='{$lab_tests->getTimee()}', this.time='{$lab_tests->getTime()}'");}}
  if(!empty($_GET['getByDoctor_id'])){$lab_tests->setDoctor_id($_GET['getByDoctor_id']); if($lab_tests->getByDoctor_id()){exit("this.id='{$lab_tests->getId()}', this.doctor_id='{$lab_tests->getDoctor_id()}', this.patient_id='{$lab_tests->getPatient_id()}', this.test_name='{$lab_tests->getTest_name()}', this.test_results='{$lab_tests->getTest_results()}', this.test_date='{$lab_tests->getTest_date()}', this.timee='{$lab_tests->getTimee()}', this.time='{$lab_tests->getTime()}'");}}
  if(!empty($_GET['getByPatient_id'])){$lab_tests->setPatient_id($_GET['getByPatient_id']); if($lab_tests->getByPatient_id()){exit("this.id='{$lab_tests->getId()}', this.doctor_id='{$lab_tests->getDoctor_id()}', this.patient_id='{$lab_tests->getPatient_id()}', this.test_name='{$lab_tests->getTest_name()}', this.test_results='{$lab_tests->getTest_results()}', this.test_date='{$lab_tests->getTest_date()}', this.timee='{$lab_tests->getTimee()}', this.time='{$lab_tests->getTime()}'");}}
  if(!empty($_GET['getByTest_name'])){$lab_tests->setTest_name($_GET['getByTest_name']); if($lab_tests->getByTest_name()){exit("this.id='{$lab_tests->getId()}', this.doctor_id='{$lab_tests->getDoctor_id()}', this.patient_id='{$lab_tests->getPatient_id()}', this.test_name='{$lab_tests->getTest_name()}', this.test_results='{$lab_tests->getTest_results()}', this.test_date='{$lab_tests->getTest_date()}', this.timee='{$lab_tests->getTimee()}', this.time='{$lab_tests->getTime()}'");}}
  if(!empty($_GET['getByTest_results'])){$lab_tests->setTest_results($_GET['getByTest_results']); if($lab_tests->getByTest_results()){exit("this.id='{$lab_tests->getId()}', this.doctor_id='{$lab_tests->getDoctor_id()}', this.patient_id='{$lab_tests->getPatient_id()}', this.test_name='{$lab_tests->getTest_name()}', this.test_results='{$lab_tests->getTest_results()}', this.test_date='{$lab_tests->getTest_date()}', this.timee='{$lab_tests->getTimee()}', this.time='{$lab_tests->getTime()}'");}}
  if(!empty($_GET['getByTest_date'])){$lab_tests->setTest_date($_GET['getByTest_date']); if($lab_tests->getByTest_date()){exit("this.id='{$lab_tests->getId()}', this.doctor_id='{$lab_tests->getDoctor_id()}', this.patient_id='{$lab_tests->getPatient_id()}', this.test_name='{$lab_tests->getTest_name()}', this.test_results='{$lab_tests->getTest_results()}', this.test_date='{$lab_tests->getTest_date()}', this.timee='{$lab_tests->getTimee()}', this.time='{$lab_tests->getTime()}'");}}
  if(!empty($_GET['getByTimee'])){$lab_tests->setTimee($_GET['getByTimee']); if($lab_tests->getByTimee()){exit("this.id='{$lab_tests->getId()}', this.doctor_id='{$lab_tests->getDoctor_id()}', this.patient_id='{$lab_tests->getPatient_id()}', this.test_name='{$lab_tests->getTest_name()}', this.test_results='{$lab_tests->getTest_results()}', this.test_date='{$lab_tests->getTest_date()}', this.timee='{$lab_tests->getTimee()}', this.time='{$lab_tests->getTime()}'");}}
  if(!empty($_GET['getByTime'])){$lab_tests->setTime($_GET['getByTime']); if($lab_tests->getByTime()){exit("this.id='{$lab_tests->getId()}', this.doctor_id='{$lab_tests->getDoctor_id()}', this.patient_id='{$lab_tests->getPatient_id()}', this.test_name='{$lab_tests->getTest_name()}', this.test_results='{$lab_tests->getTest_results()}', this.test_date='{$lab_tests->getTest_date()}', this.timee='{$lab_tests->getTimee()}', this.time='{$lab_tests->getTime()}'");}}

?>