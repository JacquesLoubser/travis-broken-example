<?php


class super {

    public function __construct($no)
    {

        $this->no = $no;
    }
    public function go()
{
    $link = mysql_connect('127.0.0.1', 'root', '')
    or die('Could not connect: ' . mysql_error());
    return 'Connected successfully';
}
} 