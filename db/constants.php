<?php
class db_constants{
    public $servername;
    public $username;
    public $password;
    function __construct($servername,$username,$password){
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;
    }
    function get_server(){
        return $this->servername;
    }
    function get_user(){
        return $this->username;
    }
    function get_pass(){
        return $this->password;
    }
}