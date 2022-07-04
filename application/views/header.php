<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" type="text/css" href="/css/result-light.css">


  <?php if ($this->uri->rsegment(2) === 'page' && $this->uri->rsegment(3) === '5') : ?>
    <meta http-equiv="x-pjax-version" content="v456">
  <?php else : ?>
    <meta http-equiv="x-pjax-version" content="v123">
  <?php endif; ?>

  <base href="<?= base_url(); ?>">

  <title><?= $title ?? 'CodeIgniter-PJAX example'; ?></title>
  <script type="text/javascript" src="//code.jquery.com/jquery-1.9.1.js"></script>
 
  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/welcome.css" rel="stylesheet">

</head>

<body>