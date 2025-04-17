<?php

try {

  $conn = new PDO("pgsql:host=postgres;port=5432;dbname=users", "user", "password");
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $stmt = $conn->query("SELECT * FROM public.student");
  $res = $stmt->fetchAll(PDO::FETCH_ASSOC);

  foreach($res as $user){
    echo  $user['name'] . "<br>";
  }

} catch(PDOException $e){
  echo "Connection failed: " . $e->getMessage();
}

?>

