<!DOCTYPE html>
<html>
  <head>
    <title>Admin Wisata</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" type="javascript" href="script.js" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;1,400;1,500;1,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  </head>
  <body>
    <div class="topbar transition">
      <div class="bars">
        <button type="button" class="btn transition" id="sidebar-toggle">
          <i class="las la-bars"></i>
        </button>
      </div>
      <!-- Navbar -->
      <div class="menu">
        <ul>
          <li>
            <div class="dropdown">
              <div class="dropdown-toggle" id="dropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">HI, Admin</div>
              <div class="dropdown-menu" aria-labelledby="dropdownProfile">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../index.php">Sign Out</a>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>

    <div class="sidebar transition">
      <div class="logo">
        <a href="#">
          <p style="font-size: 20px; font-weight: bold; margin-bottom: 0">KULINERIKUY YA X G KUY</p>
        </a>
      </div>

      <!-- Sidebar Menu -->
      <div class="sidebar-items">
        <ul>
          <p class="menu">Navigation</p>
          <li>
            <a href="admin.php" class="transition">
              <i class="las la-home"></i>
              <span>Dashoard</span>
            </a>
          </li>
          <p class="menu">Data</p>
          <li>
            <a href="data.php" class="transition active">
              <i class="las la-table"></i>
              <span>Data Table</span>
            </a>
          </li>
          <p class="menu">Cetak PDF</p>
          <li>
            <a href="../kulinerpdf.php" class="transition active">
              <i class="las la-table"></i>
              <span>Cetak PDF</span>
              </a>
            </li>

            <p class="menu">Data XML</p>
          <li>
            <a href="../xml/data_xml.php" class="transition active">
              <i class="las la-table"></i>
              <span>Data XML</span>
              </a>

              <p class="menu">Data Jason</p>
          <li>
            <a href="../xml/data_json.php" class="transition active">
              <i class="las la-table"></i>
              <span>Data Jason</span>
              </a>

        </ul>
      </div>
    </div>

    <div class="sidebar-overlay"></div>

    <!-- Content -->
    <div class="content transition">
      <div class="container-fluid dashboard">
        <h3>Data Wisata</h3>
        <form action="" method="get">
        <div class="input-group">
            <!-- Buat sebuah textbox dengan name cari -->
            <input type="text" class="form-control" placeholder="Pencarian..." id="keyword" name="cari" autofocus autocomplete="off" required> &nbsp;
            <span class="input-group-btn">
            <!-- Buat sebuah tombol search dengan type submit -->
            <button class="btn btn-primary" type="submit" id="btn-search">SEARCH</button>
            </span>
        </div>
        <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <!-- <th scope="col">ID</th> -->
      <th scope="col">nama</th>
      <th scope="col">lokasi</th>
      <th scope="col">deskripsi</th>
    </tr>
  </thead>
  
  <tbody>
  <?php
            include "../login&regis/config.php";
            if(isset($_GET['cari'])){
                $cari = $_GET['cari'];
                $data = mysqli_query($conn, "SELECT * FROM datakuliner WHERE nama LIKE '%".$cari."%'");
            }else{
                $data = mysqli_query($conn, "SELECT * FROM datakuliner");		
            }
            $no = 1;
            while($d = mysqli_fetch_array($data)) { 
        ?>
    <tr>
      <th scope="row"><?php echo $no++; ?></th>
      <td><?php echo $d['nama'];?></td>
      <td><?php echo $d['lokasi'];?></td>
      <td><?php echo $d['deskripsi'];?></td>
      <td>
      <a class="btn btn-warning"><i class="bi bi-pencil"></i>&nbsp;Edit</a>
      <a href="hapus.php?id=<?=$d['id'];?>" class="btn btn-danger" ><i class="bi bi-trash"></i>&nbsp;Hapus</a>
      </td>
    </tr>
  </tbody>
  <?php
            }
  ?>
</table>
        </form>


    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>
