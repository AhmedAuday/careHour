<?php

  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/autoloader.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/secuerity.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/time.inc.php';

  // CSRF TOKEN SECURITY
  if(empty($_GET['token']) || empty($_SESSION['imaging_tests_token'])){
    $_SESSION['imaging_tests_token'] = bin2hex(random_bytes(32));
    $_SESSION['imaging_tests_token_time'] = time() + 3600;
    exit($_SESSION['imaging_tests_token']);
  }

  if($_GET['token'] != $_SESSION['imaging_tests_token'] || $_SESSION['imaging_tests_token_time'] <= time()){
    exit("this.msg='error_token_invaild'");
  }

  $_SESSION['imaging_tests_token'] = '';

  // DELETE THE LINES THAT IS USING FOR AUTHENTICATIONS LIKE PASSWORD OR SOMETHING THAT PUT YOUR WORK IN DANGER IF IT WILL BE GETTED BY JAVASCRIPT
  $imaging_tests = new Imaging_tests();
  if(!empty($_GET['id'])){$imaging_tests->setId($_GET['id']);}
  if(!empty($_GET['patient_id'])){$imaging_tests->setPatient_id($_GET['patient_id']);}
  if(!empty($_GET['doctor_id'])){$imaging_tests->setDoctor_id($_GET['doctor_id']);}
  if(!empty($_GET['test_name'])){$imaging_tests->setTest_name($_GET['test_name']);}
  if(!empty($_GET['test_date'])){$imaging_tests->setTest_date($_GET['test_date']);}
  if(!empty($_GET['test_results'])){$imaging_tests->setTest_results($_GET['test_results']);}
  if(!empty($_GET['timee'])){$imaging_tests->setTimee($_GET['timee']);}
  if(!empty($_GET['time'])){$imaging_tests->setTime($_GET['time']);}
  // SET FUNCTIONS MUST BE ABOVE OF THE FOLLOWING LINES
  if(!empty($_GET['add'])){if(!$imaging_tests->add()){exit("this.error=1; this.msg='add'");}}
  if(!empty($_GET['update'])){if(!$imaging_tests->update()){exit("this.error=1; this.msg='update'");}}
  if(!empty($_GET['delete'])){if(!$imaging_tests->delete()){exit("this.error=1; this.msg='delete'");}}
  if(!empty($_GET['getBySet'])){echo json_encode($imaging_tests->getBySet($_GET['getBySet']));}
  if(!empty($_GET['getAll'])){echo json_encode($imaging_tests->getAll($_GET['getAll']));}
  if(!empty($_GET['getLastRow'])){if($imaging_tests->getLastRow()){exit("this.id='{$imaging_tests->getId()}', this.patient_id='{$imaging_tests->getPatient_id()}', this.doctor_id='{$imaging_tests->getDoctor_id()}', this.test_name='{$imaging_tests->getTest_name()}', this.test_date='{$imaging_tests->getTest_date()}', this.test_results='{$imaging_tests->getTest_results()}', this.timee='{$imaging_tests->getTimee()}', this.time='{$imaging_tests->getTime()}'");}}
  if(!empty($_GET['getFirstRow'])){if($imaging_tests->getFirstRow()){exit("this.id='{$imaging_tests->getId()}', this.patient_id='{$imaging_tests->getPatient_id()}', this.doctor_id='{$imaging_tests->getDoctor_id()}', this.test_name='{$imaging_tests->getTest_name()}', this.test_date='{$imaging_tests->getTest_date()}', this.test_results='{$imaging_tests->getTest_results()}', this.timee='{$imaging_tests->getTimee()}', this.time='{$imaging_tests->getTime()}'");}}
  if(!empty($_GET['getAllReversed'])){echo json_encode($imaging_tests->getAllReversed($_GET['getAllReversed']));}
  if(!empty($_GET['getNumberOfRows'])){exit(''.$imaging_tests->getNumberOfRows());}
  if(!empty($_GET['getById'])){$imaging_tests->setId($_GET['getById']); if($imaging_tests->getById()){exit("this.id='{$imaging_tests->getId()}', this.patient_id='{$imaging_tests->getPatient_id()}', this.doctor_id='{$imaging_tests->getDoctor_id()}', this.test_name='{$imaging_tests->getTest_name()}', this.test_date='{$imaging_tests->getTest_date()}', this.test_results='{$imaging_tests->getTest_results()}', this.timee='{$imaging_tests->getTimee()}', this.time='{$imaging_tests->getTime()}'");}}
  if(!empty($_GET['getByPatient_id'])){$imaging_tests->setPatient_id($_GET['getByPatient_id']); if($imaging_tests->getByPatient_id()){exit("this.id='{$imaging_tests->getId()}', this.patient_id='{$imaging_tests->getPatient_id()}', this.doctor_id='{$imaging_tests->getDoctor_id()}', this.test_name='{$imaging_tests->getTest_name()}', this.test_date='{$imaging_tests->getTest_date()}', this.test_results='{$imaging_tests->getTest_results()}', this.timee='{$imaging_tests->getTimee()}', this.time='{$imaging_tests->getTime()}'");}}
  if(!empty($_GET['getByDoctor_id'])){$imaging_tests->setDoctor_id($_GET['getByDoctor_id']); if($imaging_tests->getByDoctor_id()){exit("this.id='{$imaging_tests->getId()}', this.patient_id='{$imaging_tests->getPatient_id()}', this.doctor_id='{$imaging_tests->getDoctor_id()}', this.test_name='{$imaging_tests->getTest_name()}', this.test_date='{$imaging_tests->getTest_date()}', this.test_results='{$imaging_tests->getTest_results()}', this.timee='{$imaging_tests->getTimee()}', this.time='{$imaging_tests->getTime()}'");}}
  if(!empty($_GET['getByTest_name'])){$imaging_tests->setTest_name($_GET['getByTest_name']); if($imaging_tests->getByTest_name()){exit("this.id='{$imaging_tests->getId()}', this.patient_id='{$imaging_tests->getPatient_id()}', this.doctor_id='{$imaging_tests->getDoctor_id()}', this.test_name='{$imaging_tests->getTest_name()}', this.test_date='{$imaging_tests->getTest_date()}', this.test_results='{$imaging_tests->getTest_results()}', this.timee='{$imaging_tests->getTimee()}', this.time='{$imaging_tests->getTime()}'");}}
  if(!empty($_GET['getByTest_date'])){$imaging_tests->setTest_date($_GET['getByTest_date']); if($imaging_tests->getByTest_date()){exit("this.id='{$imaging_tests->getId()}', this.patient_id='{$imaging_tests->getPatient_id()}', this.doctor_id='{$imaging_tests->getDoctor_id()}', this.test_name='{$imaging_tests->getTest_name()}', this.test_date='{$imaging_tests->getTest_date()}', this.test_results='{$imaging_tests->getTest_results()}', this.timee='{$imaging_tests->getTimee()}', this.time='{$imaging_tests->getTime()}'");}}
  if(!empty($_GET['getByTest_results'])){$imaging_tests->setTest_results($_GET['getByTest_results']); if($imaging_tests->getByTest_results()){exit("this.id='{$imaging_tests->getId()}', this.patient_id='{$imaging_tests->getPatient_id()}', this.doctor_id='{$imaging_tests->getDoctor_id()}', this.test_name='{$imaging_tests->getTest_name()}', this.test_date='{$imaging_tests->getTest_date()}', this.test_results='{$imaging_tests->getTest_results()}', this.timee='{$imaging_tests->getTimee()}', this.time='{$imaging_tests->getTime()}'");}}
  if(!empty($_GET['getByTimee'])){$imaging_tests->setTimee($_GET['getByTimee']); if($imaging_tests->getByTimee()){exit("this.id='{$imaging_tests->getId()}', this.patient_id='{$imaging_tests->getPatient_id()}', this.doctor_id='{$imaging_tests->getDoctor_id()}', this.test_name='{$imaging_tests->getTest_name()}', this.test_date='{$imaging_tests->getTest_date()}', this.test_results='{$imaging_tests->getTest_results()}', this.timee='{$imaging_tests->getTimee()}', this.time='{$imaging_tests->getTime()}'");}}
  if(!empty($_GET['getByTime'])){$imaging_tests->setTime($_GET['getByTime']); if($imaging_tests->getByTime()){exit("this.id='{$imaging_tests->getId()}', this.patient_id='{$imaging_tests->getPatient_id()}', this.doctor_id='{$imaging_tests->getDoctor_id()}', this.test_name='{$imaging_tests->getTest_name()}', this.test_date='{$imaging_tests->getTest_date()}', this.test_results='{$imaging_tests->getTest_results()}', this.timee='{$imaging_tests->getTimee()}', this.time='{$imaging_tests->getTime()}'");}}

?>