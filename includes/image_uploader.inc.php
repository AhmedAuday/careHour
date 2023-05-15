<?php
  function uploadImage($file){
    $errors = array();
    $file_name = $file['name'];
    $file_size = $file['size'];
    $file_tmp = $file['tmp_name'];
    $file_type = $file['type'];
    $file_ext_arr = explode('.', $file['name']);
    $file_ext = strtolower(end($file_ext_arr));

    $extensions = array("jpeg","jpg","png");

    if(in_array($file_ext, $extensions) === false){
       $errors[] = "Extension not allowed, please choose a JPEG or PNG file.";
    }

    if($file_size > 2097152){
       $errors[] = 'File size must be less than 2 MB';
    }

    if(empty($errors) == true){
      $new_loc = "images/img_".time()."_".$file_name;
      move_uploaded_file($file_tmp, $new_loc);
      return $new_loc;
    } else {
       return $errors;
    }
  }

?>
