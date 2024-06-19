<?php 

class Student {

}

$clasess = get_declared_classes();
echo "Classes: ". implode(", ", $clasess) . "<br />";

$classes_name = ["Student", "Proffesor","Product", "student"];
foreach($classes_name as $name) {
    if(class_exists($name)) {
        echo "{$name} is a declared class. <br />";
    } else {
        echo "{$name} is not a declared class. <br />";

    }
}


?>