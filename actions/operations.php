<?php

class DbOperations
{
    private $con;
    private $db;

    public $tbUser = 'users',
        $id,
        $username,
        $password,
        $email,
        $phone = '-2h--08943888888855';

    function __construct()
    {
        require_once dirname(__FILE__) . '/Dbconnect.php';

        $this->db = new Dbconnect();

        $this->con = $this->db->Connect();
    }
    // -------------------------------- CRUD OPERATIONS------------------------------------------------------------------------------
    //function to say hello
    public function greet()
    {
        echo 'How are you';
    }

    //Function to register user

    public function register()
    {
        $sql = "INSERT INTO $this->tbUser (username, password, email) VALUES ('$this->username', '$this->password', '$this->email')";
        $stmt = $this->con->prepare($sql);
        $stmt->execute();

        if ($stmt->execute()) {
            echo USER_CREATED_SUCCESSFULLY;
        } else {
            echo USER_NOT_CREATED;
        }

        return $stmt;
    }

    //function to get the users password
    public function getPassword()
    {
        $sql = 'SELECT password FROM  ' . $this->tbUser . '  WHERE id = ?';
        $stmt = $this->con->prepare($sql);
        $stmt = bind_param('i', $this->id);
        $stmt->execute();
        $stmt->bind_result($password);
        $stmt->fetch();

        return $password;
    }
    //function to login
    public function login()
    {
        //get user name
        $sql = "SELECT * FROM $this->tbUser WHERE username = '$this->username'  && password = '$this->password'";
        $stmt = $this->con->query($sql);
        // $stmt->execute();
        if ($stmt->num_rows > 0) {
            $row = $stmt->fetch_assoc();

            if ($this->password == $row['password']) {
                $_SESSION['username'] = $row['username'];
                // header('Location: ./Login_system/index.html');

                echo "$this->username";
                die();
            } else {
                echo 'wrong password';
                // return
            }
        } else {
            echo 'no user';
        }

        // return $_SESSION['id'];
    }

    //function to eliminate or delete user
    public function deleteUser()
    {
        $stmt = $this->con->prepare(
            'DELETE FROM ' . $this->tbUser . ' WHERE id = ?'
        );
        $stmt->bind_param('i', $this->id);

        if ($stmt->execute()) {
            echo USER_DELETED;
        } else {
            echo USER_DELETION_FAILED;
        }

        return $stmt;
    }

    function validate_phone_number()
    {
        // Allow +, - and . in phone number
        $filtered_phone_number = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
        // Remove "-" from number
        $phone_to_check = str_replace('-', '', $filtered_phone_number);

        // Check the lenght of number
        // This can be customized if you want phone number from a specific country
        if (strlen($phone_to_check) < 10 || strlen($phone_to_check) > 14) {
            // return false;
            echo 'Phone number is valid';
        } else {
            // return true;
            echo 'Invalid phone number';
        }

        // if (validate_phone_number($phone) == true) {
        //     echo 'Phone number is valid';
        // } else {
        //     echo 'Invalid phone number';
        // }
    }
}

$obj = new DbOperations();

$obj->username = 'Vivian ';
$obj->password = 'akot';
// $obj->email = 'vivian@gmail.com';
// $obj->id = 4;
// $obj->registerUser();
// $obj->register();
// $obj->greet();
// $obj->getPassword();
// $obj->deleteUser();
// $obj->createUser();
// var_dump($obj->getAllUsers());
$obj->validate_phone_number();
?>
