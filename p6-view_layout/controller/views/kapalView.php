<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title>Constra - Construction Html5 Template</title>

  <!-- Mobile Specific Metas
================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

  <!-- Favicon
================================================== -->
  <link rel="icon" type="image/png" href="assets/images/Kapal.png">

  <!-- CSS
================================================== -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="<?=base_url('assets/plugins/bootstrap/bootstrap.min.css')?>"/>
  <!-- FontAwesome -->
  <link rel="stylesheet" href="<?=base_url('assets/plugins/fontawesome/css/all.min.css')?>"/>
  <!-- Animation -->
  <link rel="stylesheet" href="<?=base_url('assets/plugins/animate-css/animate.css')?>"/>
  <!-- slick Carousel -->
  <link rel="stylesheet" href="<?=base_url('assets/plugins/slick/slick.css')?>"/>
  <link rel="stylesheet" href="<?=base_url('assets/plugins/slick/slick-theme.css')?>"/>
  <!-- Colorbox -->
  <link rel="stylesheet" href="<?=base_url('assets/plugins/colorbox/colorbox.css')?>"/>
  <!-- Template styles-->
  <link rel="stylesheet" href="<?=base_url('assets/css/style.css')?>"/>
  <link rel="stylesheet" href="<?=base_url('assets/css/css.css')?>"/>

</head>
<body>
<section class="content">
<section id="news" class="news">
  <div class="container">
	<h1>Data Kapal</h1>
	<table border="1">
		<tr>
			<td>Nama Kapal</td>
			<td>GT</td>
			<td>Nama Pemilik</td>
			<td>Kondisi</td>
		</tr>
		<?php foreach ($kapal as $row):?>
		<tr>
			<td><?php echo $row['nama_kapal']?></td>
			<td><?php echo $row['GT']?></td>
			<td><?php echo $row['nama_pemilik']?></td>
			<td><?php echo $row['kondisi']?></td>
		</tr>
		<?php endforeach;?>
	</table>
        </div>
    </div>
    <!--/ Title row end -->
  <!--/ Container end -->
</section>
<!--/ News end -->
  <!-- Javascript Files
  ================================================== -->

  <!-- initialize jQuery Library -->
  <script src="<?= base_url ('assets/plugins/jQuery/jquery.min.js')?>"></script>
  <!-- Bootstrap jQuery -->
  <script src="<?= base_url ('assets/plugins/bootstrap/bootstrap.min.js" defer')?>"></script>
  <!-- Slick Carousel -->
  <script src="<?= base_url ('assets/plugins/slick/slick.min.js')?>"></script>
  <script src="<?= base_url ('assets/plugins/slick/slick-animation.min.js')?>"></script>
  <!-- Color box -->
  <script src="<?= base_url ('assets/plugins/colorbox/jquery.colorbox.js')?>"></script>
  <!-- shuffle -->
  <script src="<?= base_url ('assets/plugins/shuffle/shuffle.min.js" defer')?>"></script>


  <!-- Template custom -->
  <script src="<?= base_url ('assets/js/script.js')?>"></script>

  </div><!-- Body inner end -->
  </body>
</html>