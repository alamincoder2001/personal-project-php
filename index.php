<?php
require_once 'vendor/autoload.php';

$employee = Employee::create();
$setting = Student::read();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $setting; ?></title>
</head>

<body>
    <div>
        <?php echo $employee; ?>
    </div>
</body>

</html>