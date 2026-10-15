<?php
$students = [
    [
        "name" => "Ali",
        "age" => 20
    ],
    [
        "name" => "Ahmed",
        "age" => 22
    ],
    [
        "name" => "Sara",
        "age" => 19
    ],
    [
        "name" => "Usman",
        "age" => 21
    ],
    [
        "name" => "Ayesha",
        "age" => 18
    ],
    [
        "name" => "Hamza",
        "age" => 23
    ],
    [
        "name" => "Fatima",
        "age" => 20
    ],
    [
        "name" => "Hassan",
        "age" => 22
    ],
    [
        "name" => "Zainab",
        "age" => 19
    ],
    [
        "name" => "Bilal",
        "age" => 24
    ],
    [
        "name" => "Maryam",
        "age" => 21
    ],
    [
        "name" => "Saad",
        "age" => 18
    ],
    [
        "name" => "Hira",
        "age" => 20
    ],
    [
        "name" => "Danish",
        "age" => 23
    ],
    [
        "name" => "Iqra",
        "age" => 19
    ]
];


?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        .students {
            display: flex;
            flex-wrap: wrap;
        }
        .student {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px;
            width: 200px;
            .name {
                font-weight: bold;
                color: #333;
            }
            .age {
                color: #666;
                height: 20px;
                
            }
        }
    </style>
</body>
</html>




<div class="students">
    <?php foreach ($students as $i => $istudent) { ?>
        <div class="student">
            <h1>Student <?php echo $i + 1; ?>: <?php echo $istudent['name']; ?></h1>
        
            <p>Age: <?php echo $istudent['age']; ?></p>
        </div>
    <?php } ?>
</div>