<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <?php require_once 'mvc/views/requirements/baseTag.php'; ?>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="public/css/base.css">
    <link rel="stylesheet" href="public/css/headerFooter.css">
    <link rel="stylesheet" href="public/css/tailwindCommon.css">
    <title>Thanh toán - FoodSto</title>

</head>

<body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="public/js/homeView.js"></script>

    <?php require_once 'mvc/views/blocks/header.php'; ?>
    <?php if (isset($data['page'])) {
        require_once "mvc/views/pages/".$data['page'].".php";
    } else {
        require_once "mvc/views/pages/checkout.php";

    }     
    
    ?>


    <?php require_once 'mvc/views/blocks/footer.php'; ?>

</body>

</html>