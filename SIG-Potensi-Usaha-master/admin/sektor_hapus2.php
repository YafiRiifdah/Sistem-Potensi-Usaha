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
    <table width="100%" align="center" border=0 >
      <tr>
        <td colspan=2 align="center" >
          <?php header_web();?>
        </td>
      </tr>
      <tr> 
        <td width="250px" valign="top">
          <?php menu();?>
        </td> 
        <td valign="top">
          <table class="table table-striped" align="center">
            <tr>
              <td align="left" width="300px">
                <a href="sektor_form_tambah.php"><button type="button" class="btn btn-primary">Tambah</button></a>
                <a href="sektor_hapus.php"><button type="button" class="btn btn-primary">Hapus</button></a>
                <a href="sektor_edit.php"><button type="button" class="btn btn-primary">Edit</button></a>
              </td>
              <td align="center">
                <div class="row">
                  <div class="col-lg-8">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Pencarian...">
                      <span class="input-group-btn">
                        <button class="btn btn-primary" type="button">Cari</button>
                      </span>
                    </div>
                  </div>
                </div>
              </td>
            </tr>
          </table>
          <?php

            $link=koneksi_db();

            if (isset($_GET['id_sektor'])) 
                  {
                    $id_sektor = $_GET['id_sektor'];
                    $sql = "UPDATE sektor_usaha SET dihapus='Y' WHERE id_sektor='$id_sektor'";
                    $res=mysql_query($sql,$link);
                    if ($res) {
                      echo "Berhasil dihapus";
                    } 
                    else {
                      echo "Gagal Broh !!!";
                    }
                  }

            $sql="select * from sektor_usaha where dihapus='T' order by id_sektor";
            $result=mysql_query($sql,$link);
            $banyakrecord=mysql_num_rows($result);
            if($banyakrecord>0)
            {
              ?>
              <table class="table table-striped" align="center">
                <tr>
                  <td colspan=10 align="center" valign="middle"><font></font><h3>Hapus Data Sektor Usaha</h3></td>
                </tr>
                <tr>
                  <td>ID Sektor</td>
                  <td>Nama Sektor Usaha</td>
                  <td>Aksi</td>
                </tr>
              <?php
              $i=0;
              while($data=mysql_fetch_array($result))
              {
                $i++;
                ?>
                <tr>
                  <form method="get" action="<?php echo $_SERVER["PHP_SELF"];?>">
                  <td>
                    <?php echo $data['id_sektor'];?>
                    <input type="hidden" value="<?php echo $data['id_sektor'];?>" name="id_sektor">
                  </td>
                  <td>
                    <?php echo $data['nama_sektor'];?>
                  </td>
                  <td align="center">
                    <div class="form-group" align="center">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button class="btn btn-primary">Hapus</button>
                      </div>
                    </div>
                  </td>
                  </form>
                </tr>
                
                  <?php
              }
            }     
            else
            {
              echo "Data tidak ditemukan";
            }?> 
            </table>
        </td>
      </tr>
      <tr>
        <td colspan=2>
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
