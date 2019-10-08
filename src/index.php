<?php

    $servername = "localhost";

    $dbname = "Hotel";

    $user = "choi";

    $password = "3844";

 

    try

    {

        $connect = new PDO('mysql:host=$servername;dbname=$dbname', $user, $password);

        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo "서버와의 연결 성공!";

    }

  catch(PDOException $ex)

    {

        echo "서버와의 연결 실패! : ".$ex->getMessage()."<br>";

    }

?>