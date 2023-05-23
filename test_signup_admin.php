<?php
      include_once $_SERVER["DOCUMENT_ROOT"].'/includes/autoloader.inc.php';
      include_once $_SERVER["DOCUMENT_ROOT"].'/includes/secuerity.inc.php';
      include_once $_SERVER["DOCUMENT_ROOT"].'/includes/time.inc.php';

      $admin = new Admins();

      // if(!empty($_POST['email']) && !empty($_POST['uname'])){
        $admin->setEmail("holanomeed@carehour.com");
        $admin->setUsername("holan");
        $admin->setPasswordd(encrypt("12345678"));
        $admin->setImage_of_id("test1");
        $admin->add();
        $admin->getLastRow();
        
        $admin->giveAuthority();
      // }
?>
<!-- 

<form method="POST">
    email:<input type="text" name="email" placeholder="email"><br>
    username<input type="text" name="uname" placeholder="uname"><br>
    password<input type="text" name="password" placeholder="password"><br>
    <input type="submit" name="submit" value="submit">

</form> -->
