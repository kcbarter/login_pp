<?php

class User {
    private $_username;
    private $_password;
    private $_loggedIn;

    function __contruct(){
        $this->_username = "";
        $this->_password = "";
        $this->_loggedIn = false;
    }

    function getUsername()
    {
        return $this->_username;
    }

    function setUsername($_username)
    {
        $this->username = $_username;
    }

    function setPassword($_password)
    {
        if(strlen($_password) >= 6)
        {
            $this->password = $_password;
        }
        else
        {
            echo '<h1>Password needs at least 6 characters</h1>';
            return false;
        }
    }
}