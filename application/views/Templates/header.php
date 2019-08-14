<?php
function getCurURL()
{
    if (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on") {
        $pageURL = "https://";
    } else {
      $pageURL = 'http://';
    }
    if (isset($_SERVER["SERVER_PORT"]) && $_SERVER["SERVER_PORT"] != "80") {
        $pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
    } else {
        $pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
    }
    return $pageURL;
}
?>
<head>
    <title>MilkteaTEN - <?= $page_title?></title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="icon" href="<?php echo site_url();?>template/images/icon.png">

<?php if($page_child2){ ?>
    <!-- Meta tag Facebook -->
    <meta property="og:url" content="<?= getCurURL() ?>"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="MilkteaTEN - <?php $type = $this->uri->segment(2);

                    foreach ($menu as $value) { 
                      $active = "";
                      if ($value->slug == $type) echo $value->name_type;
                  }
                      echo " ".strtoupper($data->name_prod) ?>"/>
    <meta property="og:description"
          content="<?= $data->content ?>"/>
    <meta property="og:image" content="<?= site_url() . $data->image ?>"/>
    <!-- //Meta tag Facebook -->
<?php }else{ ?>
    <!-- Meta tag Facebook -->
    <meta property="og:url" content="<?= site_url() ?>"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="MilkteaTEN - Trà sữa"/>
    <meta property="og:description"
          content="Với sứ mệnh mang tới niềm vui và hạnh phúc, MilkteaTEN hy vọng sẽ tạo nên một nét văn hóa giải trí bên cạnh ly trà sữa Ngon – sạch – tươi."/>
    <meta property="og:image" content="<?= site_url('template/images/banner1.jpg') ?>"/>
    <!-- //Meta tag Facebook -->
<?php } ?>

    <!-- Meta tag Keywords -->
    <meta name="keywords" content="MilkteaTEN"/>
    <meta name="description" content="Với sứ mệnh mang tới niềm vui và hạnh phúc, MilkteaTEN hy vọng sẽ tạo nên một nét văn hóa giải trí bên cạnh ly trà sữa Ngon – sạch – tươi."/>
    <!-- //Meta tag Keywords -->

    <script src="https://code.jquery.com/jquery-1.11.0.min.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.min.js" type="text/javascript"></script>
    
    <!-- Custom-Files -->
    <link rel="stylesheet" href="<?php echo site_url();?>template/css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="<?php echo site_url();?>template/css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link href="<?php echo site_url();?>template/css/font-awesome.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,600,600i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Baloo&subset=vietnamese" rel="stylesheet">
    <!-- //font-awesome-icons -->

</head>