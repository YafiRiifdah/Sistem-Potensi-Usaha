<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include("lib_func.php"); ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Informasi Geografis Potensi Usaha</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<!-- AWAL CONTENT  -- hapus dari sini kebawah (sampai AKHIR CONTENT) -->

<table width="100%" align="center" border=0 bordercolor="#FFFFFF"> 
  <tr>
    <td align="center" colspan=2>
      <?php header_web();?>
    </td>
  </tr>
  <tr>
    <td align="center" width="20%">
      <?php menu();?>
    </td>
    <td align="center" width="80%">
      <div class="container">
        <div class="jumbotron">
          <h1>Selamat Datang...</h1>
          <p>Hanya admin yang dapat mengakses halaman ini.</p>
          <p><a class="btn btn-primary btn-lg" href="#" role="button">Login</a></p>
        </div>
      </div>
    </td>
  </tr>
  <tr>
    <td colspan=2 align="center">
      <?php footer_web();?>
    </td>
  </tr>
</table>

<!-- AKHIR CONTENT - dari sini kebawah jgn dihapus -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
