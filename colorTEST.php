<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin:0;
            background: #ffffff;
        }
    </style>
</head>
<body>
    <?php 
        $months = [32,31,30,30,31,30,30,31,30,30,31,29];
        echo array_sum($months);
        ?>
    
</body>
</html>