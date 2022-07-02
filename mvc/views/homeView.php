<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="node_modules/bulma/css/bulma.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
     <base href="http://localhost/foodsto/" target="_blank">
     <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
     <link rel="stylesheet" href="public/css/base.css">
     <link rel="stylesheet" href="public/css/headerFooter.css">
     <link rel="stylesheet" href="public/css/homeView.css">
     <title>FoodSto Store</title>

</head>

<body>
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     <script src="public/js/homeView.js"></script>

     <?php require_once 'mvc/views/blocks/header.php'; ?>

     <main>
          <div class="banner-main_home">
               <div style="padding: 200px 0">
                    <?php
                         $testData = isset($data['testData']) ? $data['testData'] : [];
                    ?>
                    <table class="table mx-auto is-bordered is-striped is-narrow is-hoverable">
                         <tr>
                              <th>ID</th>
                              <th>Họ và Tên</th>
                              <th>Vai trò</th>
                         </tr>
                         <?php
                              foreach ($testData as $dataRow) {
                                  echo '
                                        <tr>
                                             <td>'.$dataRow['id'].'</td>
                                             <td>'.$dataRow['full_name'].'</td>
                                             <td>'.$dataRow['role'].'</td>
                                        </tr> 
                                   ';
                              }
                         ?>
                    </table>
               </div>
          </div>
     </main>

     <?php require_once 'mvc/views/blocks/footer.php'; ?>

</body>

</html>