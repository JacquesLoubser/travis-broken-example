<?php


class super {

    public function __construct($no)
    {

        $this->no = $no;
    }
    public function go()
{
    $link = mysqli_connect('127.0.0.1', 'root', '');
    if(!$link)
    {
        return false;
    }
    return 'Connected successfully';
}
} 