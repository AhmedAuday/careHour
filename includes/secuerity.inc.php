<?php
  function filter($data){
    $arr = array('`', '"', '--', '<', '>' ,"'" ,'#', '&', '|', '\\', ';', 'select', 'delete', 'update', 'union', '=', 'WHERE', 'HAVING', 'ORDER BY', 'GROUP BY', 'RLIKE', 'EXTRACTVALUE', 'BENCHMARK', 'CONCAT', 'drop', 'table', 'insert');
    foreach ($arr as $x) {
      $data = str_ireplace($x, "'$x'", $data);
    }
    return $data;
  }
?>
