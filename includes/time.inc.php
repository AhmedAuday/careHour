<?php

  function showYear($time_ = 0){
    if($time_ == 0){ $time_ = time(); }
    return date("Y", $time_);
  }

  function showMonthName($time_ = 0){
    if($time_ == 0){ $time_ = time(); }
    return date("F", $time_);
  }

  function showShortenMonthName($time_ = 0){
    if($time_ == 0){ $time_ = time(); }
    return date("M", $time_);
  }

  function showMonth($time_ = 0){
    if($time_ == 0){ $time_ = time(); }
    return date("m", $time_);
  }

  function showDay($time_ = 0){
    if($time_ == 0){ $time_ = time(); }
    return date("j", $time_);
  }

  function showDayName($time_ = 0){
    if($time_ == 0){ $time_ = time(); }
    return date("l", $time_);
  }

  function showHour24($time_ = 0){
    if($time_ == 0){ $time_ = time(); }
    return date("H", $time_);
  }

  function showHour12($time_ = 0){
    if($time_ == 0){ $time_ = time(); }
    return date("h", $time_);
  }

  function showMin($time_ = 0){
    if($time_ == 0){ $time_ = time(); }
    return date("i", $time_);
  }

  function showSec($time_ = 0){
    if($time_ == 0){ $time_ = time(); }
    return date("s", $time_);
  }

  function backwardMonth($number, $time_ = 0){
    if($time_ == 0){ $time_ = time(); }
    return $time_ - (2419200 * $number);
  }

  function forwardMonth($number, $time_ = 0){
    if($time_ == 0){ $time_ = time(); }
    return $time_ + (2419200 * $number);
  }

  function backwardWeek($number, $time_ = 0){
    if($time_ == 0){ $time_ = time(); }
    return $time_ - (604800 * $number);
  }

  function forwardWeek($number, $time_ = 0){
    if($time_ == 0){ $time_ = time(); }
    return $time_ + (604800 * $number);
  }

  function backwardDay($number, $time_ = 0){
    if($time_ == 0){ $time_ = time(); }
    return $time_ - (86400 * $number);
  }

  function forwardDay($number, $time_ = 0){
    if($time_ == 0){ $time_ = time(); }
    return $time_ + (86400 * $number);
  }

  function backwardHour($number, $time_ = 0){
    if($time_ == 0){ $time_ = time(); }
    return $time_ - (3600 * $number);
  }

  function forwardHour($number, $time_ = 0){
    if($time_ == 0){ $time_ = time(); }
    return $time_ + (3600 * $number);
  }

  function backwardMin($number, $time_ = 0){
    if($time_ == 0){ $time_ = time(); }
    return $time_ - (60 * $number);
  }

  function forwardMin($number, $time_ = 0){
    if($time_ == 0){ $time_ = time(); }
    return $time_ + (60 * $number);
  }
  //echo "Today is: " . showDayName() . ", date is: " . showMonth() . "/" . showDay() . "/" . showYear() . " and the next month's name is: " . showMonthName(forwardMonth(1));
?>
