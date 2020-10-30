<?php
/**
 * Author: Matthew McGee
 * Date: 10/30/2020
 * File: user_model.class.php
 *Description:
 */

class UserModel
{

    private $db; //database object
    private $dbConnection; // database connection object

    public function __construct(){
        $this->db = Database::getInstance();
        $this->dbConnection = $this->db->getConnection();
    }


    public function add_user(){
        // REGISTER USER
        if (isset($_POST['reg_user'])) {
            // receive all input values from the form
            $username = $_POST['username'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $email = $_POST['email'];
            $first_name = ['first_name'];
            $last_name = ['last_name'];
        }
        if (empty($username)) { array_push($errors, "Username is required"); }
        if (empty($password)) { array_push($errors, "Password is required"); }
        if (empty($email)) { array_push($errors, "Email is required"); }
        if (empty($first_name)) { array_push($errors, "First name is required");
        if (empty($last_name)) { array_push($errors, "Last name is required");
        }

        if (count($errors) == 0) {

            $sql = "INSERT INTO users SET username=?, password=?, email=?, first_name=?, last_name=? "
            $result = modifyRecord($sql, "");
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
        }
    }


    }






}