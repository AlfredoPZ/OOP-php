<?php 

class Student {
    public $first_name;
    public $last_name;
    public $country = "None";

    protected $registration_id;
    private $tuition = 0.00;

    public function say_hello() {
        return "Hello world";
    }

    public function full_name() {
        return $this->first_name . " " . $this->last_name;
    }

    public function hello_world(){
        return "Hello World";
    }
    protected function hello_family(){
        return "Hello family";
    }
    private function hello_me(){
        return "Hello me";
    }
    

}

class ParTimeStudent extends Student {
    public function hello_parent() {
        return $this->hello_family();
    }
}

// $student1 = new Student;
$student1 = new ParTimeStudent;
$student1->first_name = "Alfredo";
$student1->last_name = "Paz";

echo $student1->full_name() . "<br>";

echo $student1->hello_world() . "<br>";
echo $student1->hello_parent() . "<br>";
// echo $student1->hello_me() . "<br>";

$class_methods = get_class_methods("Student");
echo "Class methods: " . implode(",", $class_methods) . "<br>";


if(method_exists("Student", "say_hello")) {
    echo "Method say_hello exists in student class";
} else{ 
    echo "Method say_hello not exists in student class";
}

?>