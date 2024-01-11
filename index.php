<?php
    session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);
    
    include 'header.php';

  session_start();

    $_SESSION;
?>





    <div class="row">
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
    <div class="carousel-item active">
      <a class="nav-link" href="colums.html">
      <img src="Colums.jpg" class="d-block w-100 h-50" alt="Colums">
      </a>
    </div>
    <div class="carousel-item">
      <a class="nav-link" href="banners.html">
      <img src="banner.jpg" class="d-block w-100 h-50" alt="Banners">
      </a>
    </div>
    <div class="carousel-item">
      <a class="nav-link" href="arch.html">
      <img src="Arch_mains.jpg" class="d-block w-100 h-50" alt="Arches">
      </a>
    </div>
    <div class="carousel-item">
      <a class="nav-link" href="garland.html">
      <img src="Gar.jpg" class="d-block w-100 h-50" alt="Garlands">
      </a>
    </div>
    <div class="carousel-item">
      <a class="nav-link" href="ornaments.html">
      <img src="Ornament.jpg" class="d-block w-100 h-50" alt="Ornaments">
      </a>
    </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>

</body>

<?php
    include 'footer.php';
?>