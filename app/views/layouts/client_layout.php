<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/css/alertify.css" integrity="sha512-MpdEaY2YQ3EokN6lCD6bnWMl5Gwk7RjBbpKLovlrH6X+DRokrPRAF3zQJl1hZUiLXfo2e9MrOt+udOnHCAmi5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/alertify.min.js" integrity="sha512-JnjG+Wt53GspUQXQhc+c4j8SBERsgJAoHeehagKHlxQN+MtCCmFDghX9/AcbkkNRZptyZU4zC8utK59M5L45Iw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- <title></title>
    <link rel="stylesheet" href="<?php echo _WEB_ROOT ?>/public/assets/clients/css/style.css"> -->
</head>

<body>
    <?php
    if (!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];
    extract($data);
    $data = [];

    if (isset($dsdm)) {
        $data['dsdm'] = $dsdm;
    }
    $data['page_title'] = $page_title;

    $this->render('blocks/header', $data);
    ?>
    <?php
    $this->render($content, $sub_content);
    ?>
    <?php
    $this->render('blocks/footer');
    ?>
    <script src="<?php echo _WEB_ROOT ?>/public/assets/clients/js/script.js"></script>
</body>

</html>