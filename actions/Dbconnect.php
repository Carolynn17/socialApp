<?php
class Dbconnect
{
    private $con;

    function Connect()
    {
        include_once dirname(__FILE__) . '/constants.php';

        $this->con = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

        if (!$this->con) {
            #false
            echo 'connection failed ' . mysqli_connect_error();
            return null;
        } else {
            # true
            return $this->con;
            // echo 'connected successfully';
        }
    }

    // public function sanitizeData($data)
    // {
    //     return htmlspecialchars(strip_tags($data));
    // }
}
?>
