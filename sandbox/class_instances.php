<?php 

class Student {

}

$student1 = new Student;
$student2 = new Student;
$student3 = new Student;

echo get_class($student1) . "<br>";
$classes_name = ["Student", "Proffesor","Product", "student"];
foreach($classes_name as $name) {
    if(is_a($student1, $name)) {
        echo "student1 is a {$name} class. <br />";
    } else {
        echo "student1 is not a {$name} class. <br />";

    }
}


?>