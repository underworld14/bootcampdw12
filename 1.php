<?php 

function biodata () {

    $name = "Muhamad Yusril Izza Aulia";
    $address = "Blitar, Jawa Timur";
    $hobbies = ['berenang', 'programming', 'designing'];
    $is_married = false;
    $school = ["highschool" => "Gontor", "university" => "Peternakan Ikan Lele", ];
    $skills = ['php', 'html', 'css', 'javascript'];

    echo $name . "<br>";
    echo $address . "<br>";
    print_r($hobbies)  . "<br>" ;
    echo $is_married . "<br>" ;
    print_r($school)  . "<br>" ;
    print_r($skills)  . "<br>" ;


}

biodata();











?>