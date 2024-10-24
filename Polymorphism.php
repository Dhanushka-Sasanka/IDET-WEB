<?php

class Person
{

    function __construct()
    {
        echo "<br><hr>";
    }

    function behave()
    {
        echo "behave like a normal person.";
    }
}

class Employee extends Person
{

    function behave()
    {
        echo "behave like an employee in office.";
    }
}

class Student extends Person
{

    function behave()
    {
        echo "behave like a student in school.";
    }

}


function showbehavior(Person $person)
{
    $person->behave();
}

$person = new Person();
showbehavior($person);

$person2 = new Employee();
showbehavior($person2);

$person3 = new Student();
showbehavior($person3);

