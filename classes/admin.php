<?php
include ('user.php');

class Admin extends User{
    private $_accessLevel;

    function __construct($name, $pass, $level)
    {
        parent::__construct();
        $this->setUsername($name);
        $this->setPassword($pass);
        $this->_accessLevel = $level;
    }

    function setAccessLevel($level)
    {
        $this->_accessLevel = $level;
    }
    function getAccessLevel()
    {
        return $this->_accessLevel;
    }

    function editUser(User $user)
    {
        echo 'Editing '.$user->getUsername();
    }
}