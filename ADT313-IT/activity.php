<h1> hands-on activity 2 </h1>

<?php

$table = array(
    "header" =>array(
        "Firstname", 
        "Middlename", 
        "Lastname", 
        "Section", 
        "Course", 
        "Yearlevel"
    ),
    "body" =>array(
        "firstname" => "Firstname1",
        "middlename"=> "Middlename1", 
        "lastname"=> "Lastname1", 
        "section"=> "Section1", 
        "course"=> "Course1", 
        "yearlevel"=> "Yearlevel1"
    ),
    array(
        "firstname" => "Firstname2",
        "middlename"=> "Middlename2", 
        "lastname"=> "Lastname2", 
        "section"=> "Section2", 
        "course"=> "Course2", 
        "yearlevel"=> "Yearlevel2"       
    ),
    array(
        "firstname" => "Firstname3",
        "middlename"=> "Middlename3", 
        "lastname"=> "Lastname3", 
        "section"=> "Section3", 
        "course"=> "Course3", 
        "yearlevel"=> "Yearlevel3"       
    ),
    array(
        "firstname" => "Firstname4",
        "middlename"=> "Middlename4", 
        "lastname"=> "Lastname4", 
        "section"=> "Section4", 
        "course"=> "Course4", 
        "yearlevel"=> "Yearlevel4"       
    ),
    array(
        "firstname" => "Firstname5",
        "middlename"=> "Middlename5", 
        "lastname"=> "Lastname5", 
        "section"=> "Section5", 
        "course"=> "Course5", 
        "yearlevel"=> "Yearlevel5"       
    ),
    array(
        "firstname" => "Firstname6",
        "middlename"=> "Middlename6", 
        "lastname"=> "Lastname6", 
        "section"=> "Section6", 
        "course"=> "Course6", 
        "yearlevel"=> "Yearlevel6"       
    ),
    array(
        "firstname" => "Firstname7",
        "middlename"=> "Middlename7", 
        "lastname"=> "Lastname7", 
        "section"=> "Section7", 
        "course"=> "Course7", 
        "yearlevel"=> "Yearlevel7"       
    ),
    array(
        "firstname" => "Firstname8",
        "middlename"=> "Middlename8", 
        "lastname"=> "Lastname8", 
        "section"=> "Section8", 
        "course"=> "Course8", 
        "yearlevel"=> "Yearlevel8"       
    ),
    array(
        "firstname" => "Firstname9",
        "middlename"=> "Middlename9", 
        "lastname"=> "Lastname9", 
        "section"=> "Section9", 
        "course"=> "Course9", 
        "yearlevel"=> "Yearlevel9"       
    ),
    array(
        "firstname" => "Firstname10",
        "middlename"=> "Middlename10", 
        "lastname"=> "Lastname10", 
        "section"=> "Section10", 
        "course"=> "Course10", 
        "yearlevel"=> "Yearlevel10"       
    ),

)

?>

<html>
<body>
<table  align = "left" border = "1" cellpadding = "3" cellspacing = "0">
    <thead>
        <td>Student ID</td>
        <td>Firstname</td>
        <td>Middlename</td>
        <td>Lastname</td>
        <td>Section</td>
        <td>Course</td>
        <td>Yearlevel</td>
    </thead>
        <?php   
        $x = 1;  
            while($x <= 10) {  
                echo "<thead>";
                echo "<td> $x </td>";  
                echo "<td> Firstname$x </td>";  
                echo "<td> Middlename$x</td>";
                echo "<td> Lastname$x</td>";  
                echo "<td> Section$x</td>";
                echo "<td> Course$x</td>";
                echo "<td> Yearlevel$x</td>";
                echo "</thead>";  
        $x++;  
            }  
?>

</table>
</body>  
</html>