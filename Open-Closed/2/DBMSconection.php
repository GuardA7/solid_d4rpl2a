<?php
include ("DBMS.php");

class DBMSConnection {
    public function connect(DBMS $dbms): void {
        $dbms->createConnection();
    }
}
?>