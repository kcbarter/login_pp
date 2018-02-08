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
}