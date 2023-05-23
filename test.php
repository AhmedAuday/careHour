<?php 
 if(isset($_POST['submit'])){
        
        $allergies_data = new Allergies();
            $allergies_data->setName($_POST['name_allergie']);
            $allergies_data->setSeverity($_POST['mname']);
            $allergies_data->set($_POST['lname']);
            $allergies_data->setUsername($_POST['uname']);


            $allergies_data->add();
            $allergies_data->getLastRow();
            $allergies_data->giveAuthority();
            
}



?>
