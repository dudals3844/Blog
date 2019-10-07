<?php
    $servername = "localhost";

    $dbname = "Hotel";

    $user = "choi";

    $password = "3844";

 

    try

    {

        $connect = new PDO('mysql:host=$servername;dbname=$dbname', $user, $password);

        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

①      $sql = "CREATE TABLE Reservation

        (

            ID INT PRIMARY KEY,

            Name VARCHAR(30) NOT NULL,

            ReservDate DATE NOT NULL,

            RoomNum INT

        )";

        $connect->exec($sql);

        echo "테이블 생성 성공!";

    }

    catch(PDOException $ex)

    {

        echo "테이블 생성 실패! : ".$ex->getMessage()."<br>";

    }

    $connect = null;

?>
