<?php

// Assignments

// (01-07-2024)

// $Niit = array(
//     "Faculty" => array("Adekunle", "Tobi", "Ola", "Segun", "Gbolahun" ),
//     "Cousellors" => array("Victoria", "Jenifer"),
//     "Skills" => array("Web Development", "Advanced Excel", "Cybersecurity", "Multimedia", "Content Writing" ),
// );

// echo $Niit["Faculty"][0]. "<br>";
// echo $Niit["Faculty"][1]. "<br>";
// echo $Niit["Faculty"][2]. "<br>";
// echo $Niit["Faculty"][3]. "<br>";
// echo $Niit["Faculty"][4]. "<br>";
// echo $Niit["Cousellors"][0]. "<br>";
// echo $Niit["Cousellors"][1]. "<br>";
// echo $Niit["Skills"][0]. "<br>";
// echo $Niit["Skills"][1]. "<br>";
// echo $Niit["Skills"][2]. "<br>";
// echo $Niit["Skills"][3]. "<br>";
// echo $Niit["Skills"][4]. "<br>";
// echo print_r($Niit);



// (03-08-2024)

$skills = array("HTML", "CSS", "JAVASCRIPT", "PHP", "MYSQLI", "LARAVEL");
if ($skills =   array("HTML", "CSS", "JAVASCRIPT")) 
{
    echo "you are a Frontend Developer";
} elseif ($skills ==   array("PHP", "MYSQLI", "LARAVEL")){
echo "you are a Frontend Developer";
} else {
    echo "You are a Computer Literate";
}

?>