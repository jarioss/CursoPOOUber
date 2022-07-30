<?php
class Account {

    public $id;
    public $name;
    public $doc;
    public $email;
    public $password;

    public function __construct($name, $doc){
        $this->name = $name;
        $this->doc = $doc;
    }
    
        
}
