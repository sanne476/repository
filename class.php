<?php
class Student
{
// eigenschappen
    $studentnumber
    $firstname
    $lastname
    $age
    $education
// functions
    function study()
    {
        echo "ik ben aan het studeren";
    }
    function eat()
    {
        echo "ik ben aan het eten";
    }
}

student $Student1 = new Student();
$Student1->$studentnumber = "97097033";
$Student1->study();
echo "<br>";

?>
