<?php

$table = array(
    "header" => array(
        "Firstname", 
        "Middlename", 
        "Lastname", 
        "Section", 
        "Course", 
        "Yearlevel"
    ),
    "body" => array(
        array(
            "firstname" => "Firstname1",
            "middlename" => "Middlename1", 
            "lastname" => "Lastname1", 
            "section" => "Section1", 
            "course" => "Course1", 
            "yearlevel" => "Yearlevel1"
        ),
        array(
            "firstname" => "Firstname2",
            "middlename" => "Middlename2", 
            "lastname" => "Lastname2", 
            "section" => "Section2", 
            "course" => "Course2", 
            "yearlevel" => "Yearlevel2"
        ),

    )
);

?>

<table>
    <thead>
        <tr>
            <?php foreach ($table["header"] as $header): ?>
                <th><?php echo htmlspecialchars($header); ?></th>
            <?php endforeach; ?>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($table["body"] as $row): ?>
            <tr>
                <?php foreach ($table["header"] as $header): ?>
                    <td><?php echo htmlspecialchars($row[strtolower($header)]); ?></td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>