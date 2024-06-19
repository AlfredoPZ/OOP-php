<?php 

class User {
    var $first_name;
    var $las_name;
    var $username;
    var $is_admin = false;

    function full_name() {
        return $this->first_name . " " . $this->las_name;
    }
}

class Customer extends User {
    var $city;
    var $state;
    var $country;

    function location() {
        return $this->city . " " . $this->state . " " . $this->country;
    }
}

class Admin extends User {
    var $is_admin= true;

    function full_name() {
        return $this->first_name . " " . $this->las_name . " (ADMIN)";
    }
}

$u = new User;
$u->first_name = "Alfredo";
$u->las_name = "Paz";
$u->username = "alfredopaz";

$c = new Customer;
$c->first_name = "John";
$c->las_name = "Doe";
$c->username = "jjdoe";
$c->city = "NYC";
$c->state = "NYC";
$c->country = "USA";

echo $u->full_name() . "<br>";
echo $c->full_name() . "<br>";
echo $c->location() . "<br>";

echo get_parent_class($u) . "<br>";
echo get_parent_class($c) . "<br>";

if(is_subclass_of($c, "User")) {
    echo "Instance is a subclass of User. <br>";
}

$parents = class_parents($c);
echo implode(", ", $parents) . "<br>";





?>