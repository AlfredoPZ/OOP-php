<?php 

class Student {
    var $first_name;
    var $last_name;
    var $country = "None";
}

$student1 = new Student;
$student1->first_name = "Alfredo";
$student1->last_name = "Paz";

$student2 = new Student;
$student2->first_name = "John";
$student2->last_name = "Doe";

echo $student1->first_name . " " . $student1->last_name . "<br>";
echo $student2->first_name . " " . $student2->last_name . "<br>";

$class_vars = get_class_vars("Student");
echo "Class vars: <br>";
echo "<pre>";
print_r($class_vars);
echo "</pre>";

$obj_vars = get_object_vars($student1);
echo "Object vars: <br>";
echo "<pre>";
print_r($obj_vars);
echo "</pre>";

if(property_exists("Student", "first_name")) {
    echo "Propersty first name exists in student class";
} else{ 
    echo "Propersty first name not exists in student class";
}

?>