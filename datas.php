<?php
  include_once "connect.php";
  function readDataForwards($dbh) {
    $sql = 'SELECT * FROM musique';
    try {
      $stmt = $dbh->prepare($sql, array(PDO::ATTR_CURSOR, PDO::CURSOR_SCROLL));
      $stmt->execute();
      $datas = $stmt->fetch(PDO::FETCH_ASSOC);
      //var_dump($datas);
        echo json_encode($datas);
      $stmt = null;
    }
    catch (PDOException $e) {
      print $e->getMessage();
    }
  }
  readDataForwards($dbh);



/*
  echo"<p>";
  echo ("============= mock ==========================");
  $arr = array('id' => 1, 'titre' => 'aaa', 'url' =>'bbb');
  var_dump($arr);
  echo json_encode($arr);
  echo"</p>";
  */
?>
