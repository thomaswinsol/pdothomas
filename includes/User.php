<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require_once ('Connection.php');
/**
 * Description of User
 *
 * @author webmaster
 */
class User {
    //put your code here
    
    private $_db;
    
    public function __Construct() 
    {
        $this->_db = new Connection;
        $this->_db = $this->_db->connect();
    }
    
    public function login ($login, $wachtwoord)
    {
        if (!empty($login) && !empty($wachtwoord)) {
            $st = $this->_db->prepare('select * from login where login = :login and wachtwoord  :wachtwoord');
            $st->execute(array('login'=>$login, 'wachtwoord'=> $wachtwoord));
            
            if ($st->rowCount() == 1) {
                echo ' U bent ingelogd';                
            }
            else {
                echo 'Uw login en wachtwoord zijn verkeerd';    
            }
        }
        else {
            echo "Gelieve alle velden correct in te vullen!";
        }
    }
}

?>
