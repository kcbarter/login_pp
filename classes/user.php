<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

/**
 * Class User
 * The class represents a valid user as they attempt to login.
 * @author Kevan Barter, Tyler Roemer
 */
class User {
    private $_username;
    private $_password;
    private $_loggedIn;

    /**
     * This is a default constructor that takes no parameters.
     */
    function __construct(){
        $this->_username = "";
        $this->_password = "";
        $this->_loggedIn = false;
    }

    /**
     * This is a getter for username
     * @return String username
     */
    function getUsername()
    {
        return $this->_username;
    }

    /**
     * This is a setter for username
     * @param $_username
     */
    public function setUsername($_username)
    {
        $this->_username = $_username;
    }

    /**
     * This is a setter for password
     * @param $_password
     * @return bool
     */
    public function setPassword($_password)
    {
        if(strlen($_password) >= 6)
        {
            $this->_password = $_password;
        }
        else
        {
            echo '<h1>Password needs at least 6 characters</h1>';
            return false;
        }
    }

    /**
     * The login function looks through the
     * include file array to determine if the
     * login attempt was successful or not.
     */
    function login()
    {
        //include ("users.php");
        $users = array('bob' => 'chocolateCake');
        foreach ($users as $name => $pass)
        {
            if($this->_username == $name AND $this->_password == $pass)
            {
                echo "<p>$this->_username is logged in.</p>";
                $this->_loggedIn = true;
                return;
            }
        }
        echo '<p>Login Error.</p>';
    }

    /**
     * The logout function resets the username
     * password and loggedIn function.
     */
    function logout()
    {
        $this->_username = "";
        $this->_password = "";
        $this->_loggedIn = false;
    }
}

?>