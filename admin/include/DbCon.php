
<?php

class DbCon
{
    private $con;
    function Connect()
    {    
        require dirname(__FILE__) . '/Constants.php';
        $this->con = new mysqli("localhost","root","","blog");
        if(mysqli_connect_error())
        {
            echo "Failed to connect database server";
            return false;
        }
        return $this->con;
    }

}