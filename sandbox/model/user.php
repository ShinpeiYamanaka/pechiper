<?php 

namespace model\user;

class member {
    private $name;
    private $weight;
    private $hight;

    function __construct($name) {
        $this -> setName($name);
        print "constructor\n";
    }

    public function setName($str) {
        $this->name = $str;
    }
    public function getName() {
        return $this->name;
    }
}

?>