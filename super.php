<?php


class super {

    public function __construct($no)
    {

        $this->no = $no;
    }
    public function go()
{
    $mysqli = new mysqli("127.0.0.1", "root", "", "testdb");
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

    if (!$mysqli->query("INSERT INTO test(id) VALUES (1)")) {
        echo "Table creation failed: (" . $mysqli->errno . ") " . $mysqli->error;
    }
}
} 