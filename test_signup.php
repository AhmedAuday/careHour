<?php
    //      include_once $_SERVER["DOCUMENT_ROOT"].'/includes/autoloader.inc.php';
    //      include_once $_SERVER["DOCUMENT_ROOT"].'/includes/secuerity.inc.php';
    //      include_once $_SERVER["DOCUMENT_ROOT"].'/includes/time.inc.php';
   
    //    $patient = new Patient_user();
    //     $patient->setEmail("hikaka");
    //     $patient->setUsername("hikaka");
    //     $patient->setPasswordd(encrypt("hikaka"));
    //     $patient->setTimee(time());
    //     // $patient->setTime(time());
    //     $patient->add();
    //     $patient->getLastRow();
    //     $patient->giveAuthority();
        // $patient_data = new Patients();
        // $patient_data->setPatient_id("hikaka");
        // $patient_data->setFirst_name("hikaka");
        // $patient_data->setMiddle_name("hikaka");
        // $patient_data->setLast_name("hikaka");
        // $patient_data->setDate_of_birth("hikaka");
        // $patient_data->setBlood_type("hikaka");
        // $patient_data->setGender("hikaka");
        // $patient_data->setAddress("hikaka");
        // $patient_data->setCity("hikaka");
        // $patient_data->setPhone_number("hikaka");
        // $patient_data->setTimee(time());
        // // $patient_data->setTime(time());
        // $patient_data->add();
        // $patient->getLastRow();
        // $patient_data->giveAuthority();
        echo " hi kaka";
    
    ?> -->


<?php
      include_once $_SERVER["DOCUMENT_ROOT"].'/includes/autoloader.inc.php';
      include_once $_SERVER["DOCUMENT_ROOT"].'/includes/secuerity.inc.php';
      include_once $_SERVER["DOCUMENT_ROOT"].'/includes/time.inc.php';

      $admin = new Patient_user();

      if(!empty($_POST['email']) && !empty($_POST['uname'])){
        $admin->setEmail($_POST['email']);
        $admin->setUsername($_POST['uname']);
        $admin->setPasswordd(encrypt($_POST['password']));
        $admin->setTimee(time());
        $admin->add();
        $admin->getLastRow();
        
        $admin->giveAuthority();
      }
?>


<form method="POST">
email:<input type="text" name="email" placeholder="email"><br>
username<input type="text" name="uname" placeholder="uname"><br>
password<input type="text" name="password" placeholder="password"><br>
<input type="submit" name="submit" value="submit">

    </form>