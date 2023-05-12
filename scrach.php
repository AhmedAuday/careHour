<?php

$doctor = new Doctors();
$doctors = $doctor->getAll();

foreach ($doctors as $d){
$exp = new Exp();
$exp->setDoctor_id($s->id);
$exp->getByDoctor_id();
echo $exp->getText();
$exp->setText("hello");
$exp->add();
$exp->setText("hello2");
$exp->add();

  echo "
            <div class='col-sm-6 col-md-3'>
             <div class='iq-card'>
               <div class='iq-card-body text-center'>
                 <div class='doc-profile'>
                   <img
                     class='rounded-circle img-fluid avatar-80'
                     src='../../images/user/12.jpg'
                     alt='profile'
                   />
                 </div>
                 <div class='iq-doc-info mt-3'>
                   <h4>Dr. ".$d->first_name.' '.$d->last_name."</h4>
                   <p class='mb-0'>".$d->specialty."</p>
                   
                 </div>
                 <div class='iq-doc-description mt-2'>
                   <p class='mb-0'>
                     ".$d->bio."
                   </p>
                 </div>
                 <div class='iq-doc-social-info mt-3 mb-3'>
                   <ul class='m-0 p-0 list-inline'>
                     <li>
                       <a href='#'><i class='ri-facebook-fill'></i></a>
                     </li>
                     <li>
                       <a href='#'><i class='ri-twitter-fill'></i></a>
                     </li>
                     <li>
                       <a href='#'><i class='ri-google-fill'></i></a>
                     </li>
                   </ul>
                 </div>
                 <a href='profile.html' class='btn btn-primary'
                   >View Profile</a
                 >
               </div>
             </div>
           </div>
         ";

}


?>
