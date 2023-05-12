<?php

  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/autoloader.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/secuerity.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/time.inc.php';

  // CSRF TOKEN SECURITY
  if(empty($_GET['token']) || empty($_SESSION['logs_patient_notes_token'])){
    $_SESSION['logs_patient_notes_token'] = bin2hex(random_bytes(32));
    $_SESSION['logs_patient_notes_token_time'] = time() + 3600;
    exit($_SESSION['logs_patient_notes_token']);
  }

  if($_GET['token'] != $_SESSION['logs_patient_notes_token'] || $_SESSION['logs_patient_notes_token_time'] <= time()){
    exit("this.msg='error_token_invaild'");
  }

  $_SESSION['logs_patient_notes_token'] = '';

  // DELETE THE LINES THAT IS USING FOR AUTHENTICATIONS LIKE PASSWORD OR SOMETHING THAT PUT YOUR WORK IN DANGER IF IT WILL BE GETTED BY JAVASCRIPT
  $logs_patient_notes = new Logs_patient_notes();
  if(!empty($_GET['id'])){$logs_patient_notes->setId($_GET['id']);}
  if(!empty($_GET['actionn'])){$logs_patient_notes->setActionn($_GET['actionn']);}
  if(!empty($_GET['new_patient_id'])){$logs_patient_notes->setNew_patient_id($_GET['new_patient_id']);}
  if(!empty($_GET['new_notes'])){$logs_patient_notes->setNew_notes($_GET['new_notes']);}
  if(!empty($_GET['new_created_at'])){$logs_patient_notes->setNew_created_at($_GET['new_created_at']);}
  if(!empty($_GET['logs_cdate'])){$logs_patient_notes->setLogs_cdate($_GET['logs_cdate']);}
  if(!empty($_GET['logs_ctime'])){$logs_patient_notes->setLogs_ctime($_GET['logs_ctime']);}
  if(!empty($_GET['log_ByUser'])){$logs_patient_notes->setLog_ByUser($_GET['log_ByUser']);}
  if(!empty($_GET['timee'])){$logs_patient_notes->setTimee($_GET['timee']);}
  if(!empty($_GET['time'])){$logs_patient_notes->setTime($_GET['time']);}
  // SET FUNCTIONS MUST BE ABOVE OF THE FOLLOWING LINES
  if(!empty($_GET['add'])){if(!$logs_patient_notes->add()){exit("this.error=1; this.msg='add'");}}
  if(!empty($_GET['update'])){if(!$logs_patient_notes->update()){exit("this.error=1; this.msg='update'");}}
  if(!empty($_GET['delete'])){if(!$logs_patient_notes->delete()){exit("this.error=1; this.msg='delete'");}}
  if(!empty($_GET['getBySet'])){echo json_encode($logs_patient_notes->getBySet($_GET['getBySet']));}
  if(!empty($_GET['getAll'])){echo json_encode($logs_patient_notes->getAll($_GET['getAll']));}
  if(!empty($_GET['getLastRow'])){if($logs_patient_notes->getLastRow()){exit("this.id='{$logs_patient_notes->getId()}', this.actionn='{$logs_patient_notes->getActionn()}', this.new_patient_id='{$logs_patient_notes->getNew_patient_id()}', this.new_notes='{$logs_patient_notes->getNew_notes()}', this.new_created_at='{$logs_patient_notes->getNew_created_at()}', this.logs_cdate='{$logs_patient_notes->getLogs_cdate()}', this.logs_ctime='{$logs_patient_notes->getLogs_ctime()}', this.log_ByUser='{$logs_patient_notes->getLog_ByUser()}', this.timee='{$logs_patient_notes->getTimee()}', this.time='{$logs_patient_notes->getTime()}'");}}
  if(!empty($_GET['getFirstRow'])){if($logs_patient_notes->getFirstRow()){exit("this.id='{$logs_patient_notes->getId()}', this.actionn='{$logs_patient_notes->getActionn()}', this.new_patient_id='{$logs_patient_notes->getNew_patient_id()}', this.new_notes='{$logs_patient_notes->getNew_notes()}', this.new_created_at='{$logs_patient_notes->getNew_created_at()}', this.logs_cdate='{$logs_patient_notes->getLogs_cdate()}', this.logs_ctime='{$logs_patient_notes->getLogs_ctime()}', this.log_ByUser='{$logs_patient_notes->getLog_ByUser()}', this.timee='{$logs_patient_notes->getTimee()}', this.time='{$logs_patient_notes->getTime()}'");}}
  if(!empty($_GET['getAllReversed'])){echo json_encode($logs_patient_notes->getAllReversed($_GET['getAllReversed']));}
  if(!empty($_GET['getNumberOfRows'])){exit(''.$logs_patient_notes->getNumberOfRows());}
  if(!empty($_GET['getById'])){$logs_patient_notes->setId($_GET['getById']); if($logs_patient_notes->getById()){exit("this.id='{$logs_patient_notes->getId()}', this.actionn='{$logs_patient_notes->getActionn()}', this.new_patient_id='{$logs_patient_notes->getNew_patient_id()}', this.new_notes='{$logs_patient_notes->getNew_notes()}', this.new_created_at='{$logs_patient_notes->getNew_created_at()}', this.logs_cdate='{$logs_patient_notes->getLogs_cdate()}', this.logs_ctime='{$logs_patient_notes->getLogs_ctime()}', this.log_ByUser='{$logs_patient_notes->getLog_ByUser()}', this.timee='{$logs_patient_notes->getTimee()}', this.time='{$logs_patient_notes->getTime()}'");}}
  if(!empty($_GET['getByActionn'])){$logs_patient_notes->setActionn($_GET['getByActionn']); if($logs_patient_notes->getByActionn()){exit("this.id='{$logs_patient_notes->getId()}', this.actionn='{$logs_patient_notes->getActionn()}', this.new_patient_id='{$logs_patient_notes->getNew_patient_id()}', this.new_notes='{$logs_patient_notes->getNew_notes()}', this.new_created_at='{$logs_patient_notes->getNew_created_at()}', this.logs_cdate='{$logs_patient_notes->getLogs_cdate()}', this.logs_ctime='{$logs_patient_notes->getLogs_ctime()}', this.log_ByUser='{$logs_patient_notes->getLog_ByUser()}', this.timee='{$logs_patient_notes->getTimee()}', this.time='{$logs_patient_notes->getTime()}'");}}
  if(!empty($_GET['getByNew_patient_id'])){$logs_patient_notes->setNew_patient_id($_GET['getByNew_patient_id']); if($logs_patient_notes->getByNew_patient_id()){exit("this.id='{$logs_patient_notes->getId()}', this.actionn='{$logs_patient_notes->getActionn()}', this.new_patient_id='{$logs_patient_notes->getNew_patient_id()}', this.new_notes='{$logs_patient_notes->getNew_notes()}', this.new_created_at='{$logs_patient_notes->getNew_created_at()}', this.logs_cdate='{$logs_patient_notes->getLogs_cdate()}', this.logs_ctime='{$logs_patient_notes->getLogs_ctime()}', this.log_ByUser='{$logs_patient_notes->getLog_ByUser()}', this.timee='{$logs_patient_notes->getTimee()}', this.time='{$logs_patient_notes->getTime()}'");}}
  if(!empty($_GET['getByNew_notes'])){$logs_patient_notes->setNew_notes($_GET['getByNew_notes']); if($logs_patient_notes->getByNew_notes()){exit("this.id='{$logs_patient_notes->getId()}', this.actionn='{$logs_patient_notes->getActionn()}', this.new_patient_id='{$logs_patient_notes->getNew_patient_id()}', this.new_notes='{$logs_patient_notes->getNew_notes()}', this.new_created_at='{$logs_patient_notes->getNew_created_at()}', this.logs_cdate='{$logs_patient_notes->getLogs_cdate()}', this.logs_ctime='{$logs_patient_notes->getLogs_ctime()}', this.log_ByUser='{$logs_patient_notes->getLog_ByUser()}', this.timee='{$logs_patient_notes->getTimee()}', this.time='{$logs_patient_notes->getTime()}'");}}
  if(!empty($_GET['getByNew_created_at'])){$logs_patient_notes->setNew_created_at($_GET['getByNew_created_at']); if($logs_patient_notes->getByNew_created_at()){exit("this.id='{$logs_patient_notes->getId()}', this.actionn='{$logs_patient_notes->getActionn()}', this.new_patient_id='{$logs_patient_notes->getNew_patient_id()}', this.new_notes='{$logs_patient_notes->getNew_notes()}', this.new_created_at='{$logs_patient_notes->getNew_created_at()}', this.logs_cdate='{$logs_patient_notes->getLogs_cdate()}', this.logs_ctime='{$logs_patient_notes->getLogs_ctime()}', this.log_ByUser='{$logs_patient_notes->getLog_ByUser()}', this.timee='{$logs_patient_notes->getTimee()}', this.time='{$logs_patient_notes->getTime()}'");}}
  if(!empty($_GET['getByLogs_cdate'])){$logs_patient_notes->setLogs_cdate($_GET['getByLogs_cdate']); if($logs_patient_notes->getByLogs_cdate()){exit("this.id='{$logs_patient_notes->getId()}', this.actionn='{$logs_patient_notes->getActionn()}', this.new_patient_id='{$logs_patient_notes->getNew_patient_id()}', this.new_notes='{$logs_patient_notes->getNew_notes()}', this.new_created_at='{$logs_patient_notes->getNew_created_at()}', this.logs_cdate='{$logs_patient_notes->getLogs_cdate()}', this.logs_ctime='{$logs_patient_notes->getLogs_ctime()}', this.log_ByUser='{$logs_patient_notes->getLog_ByUser()}', this.timee='{$logs_patient_notes->getTimee()}', this.time='{$logs_patient_notes->getTime()}'");}}
  if(!empty($_GET['getByLogs_ctime'])){$logs_patient_notes->setLogs_ctime($_GET['getByLogs_ctime']); if($logs_patient_notes->getByLogs_ctime()){exit("this.id='{$logs_patient_notes->getId()}', this.actionn='{$logs_patient_notes->getActionn()}', this.new_patient_id='{$logs_patient_notes->getNew_patient_id()}', this.new_notes='{$logs_patient_notes->getNew_notes()}', this.new_created_at='{$logs_patient_notes->getNew_created_at()}', this.logs_cdate='{$logs_patient_notes->getLogs_cdate()}', this.logs_ctime='{$logs_patient_notes->getLogs_ctime()}', this.log_ByUser='{$logs_patient_notes->getLog_ByUser()}', this.timee='{$logs_patient_notes->getTimee()}', this.time='{$logs_patient_notes->getTime()}'");}}
  if(!empty($_GET['getByLog_ByUser'])){$logs_patient_notes->setLog_ByUser($_GET['getByLog_ByUser']); if($logs_patient_notes->getByLog_ByUser()){exit("this.id='{$logs_patient_notes->getId()}', this.actionn='{$logs_patient_notes->getActionn()}', this.new_patient_id='{$logs_patient_notes->getNew_patient_id()}', this.new_notes='{$logs_patient_notes->getNew_notes()}', this.new_created_at='{$logs_patient_notes->getNew_created_at()}', this.logs_cdate='{$logs_patient_notes->getLogs_cdate()}', this.logs_ctime='{$logs_patient_notes->getLogs_ctime()}', this.log_ByUser='{$logs_patient_notes->getLog_ByUser()}', this.timee='{$logs_patient_notes->getTimee()}', this.time='{$logs_patient_notes->getTime()}'");}}
  if(!empty($_GET['getByTimee'])){$logs_patient_notes->setTimee($_GET['getByTimee']); if($logs_patient_notes->getByTimee()){exit("this.id='{$logs_patient_notes->getId()}', this.actionn='{$logs_patient_notes->getActionn()}', this.new_patient_id='{$logs_patient_notes->getNew_patient_id()}', this.new_notes='{$logs_patient_notes->getNew_notes()}', this.new_created_at='{$logs_patient_notes->getNew_created_at()}', this.logs_cdate='{$logs_patient_notes->getLogs_cdate()}', this.logs_ctime='{$logs_patient_notes->getLogs_ctime()}', this.log_ByUser='{$logs_patient_notes->getLog_ByUser()}', this.timee='{$logs_patient_notes->getTimee()}', this.time='{$logs_patient_notes->getTime()}'");}}
  if(!empty($_GET['getByTime'])){$logs_patient_notes->setTime($_GET['getByTime']); if($logs_patient_notes->getByTime()){exit("this.id='{$logs_patient_notes->getId()}', this.actionn='{$logs_patient_notes->getActionn()}', this.new_patient_id='{$logs_patient_notes->getNew_patient_id()}', this.new_notes='{$logs_patient_notes->getNew_notes()}', this.new_created_at='{$logs_patient_notes->getNew_created_at()}', this.logs_cdate='{$logs_patient_notes->getLogs_cdate()}', this.logs_ctime='{$logs_patient_notes->getLogs_ctime()}', this.log_ByUser='{$logs_patient_notes->getLog_ByUser()}', this.timee='{$logs_patient_notes->getTimee()}', this.time='{$logs_patient_notes->getTime()}'");}}

?>