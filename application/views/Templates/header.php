<head>
    <title>MilkteaTEN - <?= $page_title?></title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="icon" href="<?php echo site_url();?>template/images/icon.png">

<?php if($page_child2){?>
    <!-- Meta tag Keywords -->
    <meta property="og:url" content="<?= base_url() ?>"/>
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
    <!-- //Meta tag Keywords -->
<?php } ?>

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