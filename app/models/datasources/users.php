<?php

//- Data is passed to Cake Through Model
//
//- Model is a class
//
//- This class has 2 variables named

class Users extends AppModel {

//----------------------------------User Table--------------------------------//

//CREATE TABLE IF NOT EXISTS `site_users`
//    (
//        site_users_id int(11) unsigned NOT NULL auto_increment,
//        username VARCHAR(255),
//        timestamp int(11),
//        session_id VARCHAR(225),
//        password VARCHAR(255),
//        email VARCHAR(225),
//        locked enum('true','false'),
//        facebook_accout VARCHAR(225)
//    )
//        
//INSERT INTO `` VALUES ()

//----------------------------------------------------------------------------//

    $name = 'Users';
    
    $useTable = 'site_users';
    
    $validate = array('username'
                            => array(
                                'alphaNumeric' => array(
                                                    'rule' => 'alphaNumeric',
                                                    'required' => true,
                                                    'message' => 'Enter the region.')
                                )
                            );
    
    //where to create table & insert data?
    
    function saveMessage($data) {
        
        if ($this->save($data)) {
            return true;
        } else {
            return false;
        }
    
    }

    function getUser($iUserId=null) {
        
        return $this->find('all', array('conditions' => array('site_users_id' => $iUserId)));
        
    }
    
    //data validation
    
    function string($check) {           //custom validation
        
        return isstring($check);
        
    }
    
}

?>