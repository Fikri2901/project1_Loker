<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <!--Akses Menu Untuk Admin-->
        <li class="active"><a href="<?php echo base_url() . 'index.php/page' ?>">Dashboard</a></li>
        <li><a href="<?php echo base_url() . 'index.php/page/data_pelamar' ?>">Data Pelamar</a></li>
        <li><a href="<?php echo base_url() . 'index.php/page/data_perusahaan' ?>">Data Perusahaan</a></li>
        <li><a href="<?php echo base_url() . 'index.php/page/data_loker' ?>">LOKER</a></li>
        <li><a href="<?php echo base_url() . 'index.php/page/data_pelamaran' ?>">Dara Pelamaran</a></li>

      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo base_url() . 'index.php/login/logout' ?>">Sign Out</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>