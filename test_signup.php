<?php
include_once $_SERVER["DOCUMENT_ROOT"].'/includes/autoloader.inc.php';
include_once $_SERVER["DOCUMENT_ROOT"].'/includes/secuerity.inc.php';
include_once $_SERVER["DOCUMENT_ROOT"].'/includes/time.inc.php';

$patient_data = new Patients();
        // $patient_data->setPatient_id($patient->getId());
        $patient_data->setFirst_name("Fname");
        $patient_data->setMiddle_name("Mname");
        $patient_data->setLast_name("kaka");
        $patient_data->setUsername("hi");
        $patient_data->setEmail("Holan2@gmail.com");
        $patient_data->setPasswordd(encrypt("12345678"));
        $patient_data->setImage_of_id("test1");
        $patient_data->setProfile_image("test2");
        // $patient_data->setCreated_at(time());
        $patient_data->setDate_of_birth("2002-04-16");
        $patient_data->setBlood_type("+O");
        $patient_data->setGender("male");
        $patient_data->setAddresses("Erbil");
        $patient_data->setCity("Erbil");
        $patient_data->setPhone_number("987654321");
        // $patient_data->setTimee(time());
        $patient_data->setTime(time());
        $patient_data->add();
        $patient_data->getLastRow();
        $patient_data->giveAuthority();
        // echo " hi kaka";
        header("Location: ../patient.php");
        exit();
        ?>