<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bulma/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <?php require_once 'mvc/views/requirements/baseTag.php'; ?>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="public/css/base.css">
    <link rel="stylesheet" href="public/css/headerFooter.css">
    <link rel="stylesheet" href="public/css/homeView.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>FoodSto Store</title>

</head>

<body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="public/js/homeView.js"></script>

    <?php require_once "./mvc/views/blocks/header.php";    ?>

    <section class="mb-10 mt-20">
        <div class="px-2 text-gray-800 ">
            <div class="flex xl:justify-center lg:justify-between justify-center items-center flex-wrap h-full g-6 ">
                <div class="xl:ml-20 xl:w-9/12 lg:w-10/12 md:w-10/12 mb-12 md:mb-0 shadow-xl p-10">
                    <?php
                    require_once "./mvc/views/blocks/loginForms/" . $data["page"] . ".php";
                    ?>
                </div>
            </div>
        </div>
    </section>

    <?php require_once 'mvc/views/blocks/footer.php'; ?>

</body>

</html>