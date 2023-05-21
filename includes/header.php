<!--session link-->
<?php include '../mysql/session.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../sass/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../icons/node_modules/bootstrap-icons/font/bootstrap-icons.css?v=<?php echo time(); ?>">
    <link rel="icon" href="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Sales Monitoring System</title>
</head>
<body>
    <header>
        <div class="title">
            <h2><i class="bi bi-receipt"></i> Sales Monitoring System</h2>
        </div>
        <div class="navigation">
            <nav>
                <ul>
                    <li><a href=""><i class="bi bi-person-circle"></i> Profile</a></li>
                    <li><a href="../mysql/logout.php"><i class="bi bi-box-arrow-left"></i> Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>