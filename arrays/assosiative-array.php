<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
<link rel="stylesheet" href="style.css">
<title>Title</title>
</head>
<body>
    <div class="container">
        <?php
            $student = [
                'sname'=>'Satyam',
                'marks'=>[98,99,96,74,86],
                'fee'=>10000
            ];
            $student['fee']=12000;
            echo "<h1>",$student['sname'],"</h1>";
            echo "<h1>",$student['fee'],"</h1>";

            foreach($student as $value=>$key){
                echo "<p>",var_dump($key)." : ".var_dump($value),"</p>";
            }

    ?>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>