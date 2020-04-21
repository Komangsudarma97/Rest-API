<!DOCTYPE html>
<html>
<head>
<title><?=(isset($title)) ? $title :"Sudarma";?></title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?=(isset($meta)) ?$meta :'';?>">
<meta name="author" content="I Komang Sudarma Puja Yasa">
<link href="<?=base_url('assets/css/latihan.css')?>" rel="stylesheet" type="text/css"/>
<![endif]-->
</head>
<body>
  <div class="wrapper">
   <header>
    <h1>WARUNG TEKNIK </h1>
    <nav>
     <ul>
       <li><a href=http://localhost>Beranda</a></li>
       <li><a href=http://localhost>Kabar Berita</a></li>
       <li><a href=http://localhost>Kontak</a></li>
     </ul>
    </nav>
   </header>
    <section class="courses">
      <?php $this->load->view($content);?>
   </section>
   <aside>
      <?php $this->load->view($sidebar);?>
  </aside>
    <footer>
    ©2019 AnakTeknik
    </footer>
   </div><!--.wrapper -->
  
</body>
</html>
