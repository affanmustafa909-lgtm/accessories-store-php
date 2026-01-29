<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Nitec – Music Store</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./index.css">
</head>

<body>

  <div class="app-container">
    <!-- HEADER -->
    <div class="top-bar d-flex align-items-center justify-content-between">
      <div class="d-flex align-items-center gap-3">
        <h5 class="logo">N nitec.</h5>
        <div class="search-box">
          <input type="text" placeholder="Search products...">
          <i class="fa fa-search"></i>
        </div>
      </div>

      <div class="d-flex align-items-center gap-3">
        <i class="fa fa-lock icon-btn"></i>
        <i class="fa fa-heart icon-btn"></i>
        <div class="profile">
          <!-- <span>Ahmad</span> -->
          <img src="https://i.pravatar.cc/40" />
        </div>
      </div>
    </div>

    <!-- MAIN -->
    <div class="row g-4 mt-3">
      <!-- HERO -->
      <div class="col-lg-8">
        <div class="hero-card">
          <div class="row">
            <div class="col-md-6">
              <span class="tag" id="musicTag">🎧 Music is Classic</span>
              <h1>Sequoia Inspiring<br>Musico.</h1>
              <p class="text-muted">Clear Sounds<br>Making your dream music come true</p>
              <a href="./shopdetail.php" target="_blank">
                <button class="btn btn-lime" id="viewProductsBtn">
                  View All Products <i class="fa fa-arrow-up-right-from-square"></i>
                </button>
              </a>
              <div class="follow-box mt-4">
                <span class="follow-text">Follow us on:</span>

                <div class="social-icons">
                  <a href="#" class="social-item">
                    <i class="fab fa-twitter"></i>
                  </a>
                  <a href="#" class="social-item">
                    <i class="fab fa-tiktok"></i>
                  </a>
                  <a href="#" class="social-item">
                    <i class="fab fa-instagram"></i>
                  </a>
                  <a href="#" class="social-item">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </div>
              </div>

            </div>
            <div class="col-md-6 text-center">
              <img class="hero-img" src="./images/headphones.jfif" alt="Headphone">
            </div>
          </div>
        </div>
      </div>


      <!-- RIGHT SIDEBAR -->
      <div class="col-lg-4">
        <div class="side-card">
          <h6>Popular Colors</h6>
          <div class="colors">
            <span class="c blue"></span>
            <span class="c orange"></span>
            <span class="c green"></span>
            <span class="c red"></span>
            <span class="c cyan"></span>
          </div>

        </div>

        <div class="side-card product-card mt-3">
          <span class="product-title">New Gen<br>X-Bud</span>

          <img src="./images/airbird2.jfif" class="product-img" alt="X-Bud">

          <button class="arrow-btn" id="arrowBtn1">
            <i class="fa fa-arrow-up-right-from-square"></i>
          </button>
        </div>


        <div class="side-card product-card-2 mt-3">
          <img src="./images/second glasses.jfif" class="product2-img" alt="Headphone">

          <button class="arrows-btn top" id="arrowBtn2">
            <i class="fa fa-arrow-up-right-from-square"></i>
          </button>

          <div class="product2-text">
            <h4>Light Grey Surface Headphone</h4>
            <p>Boosted with bass</p>
          </div>
        </div>


      </div>
    </div>




    <!-- BOTTOM PRODUCTS -->
    <div class="row g-4 mt-4">

      <!-- More Products -->
      <div class="col-md-4">
        <div class="bottom-card">
          <div class="d-flex justify-content-between align-items-start">
            <div>
              <h6>More Products</h6>
              <p>460 plus items.</p>
            </div>
            <div class="heart-icon">❤️</div>
          </div>

          <div class="product-thumbs">
            <img src="./images/block bottom.jfif">
            <img src="./images/bottom 2.jfif">
            <img src="./images/bottom3.jfif">
          </div>
        </div>
      </div>

      <!-- Downloads -->
      <div class="col-md-4">
        <div class="bottom-card center">
          <div class="avatars">
            <img src="./images/bottom1a.jfif">
            <img src="./images/bottom2a.jfif">
            <img src="./images/bottom3a.jfif">
          </div>

          <h3>Trusted by 5M+ users</h3>
          <p>Downloads</p>

          <div class="rating">
            4.6 ★ rated worldwide
          </div>
        </div>
      </div>

      <!-- Listening Released -->
      <div class="col-md-4">
        <div class="bottom-card wide">
          <div class="d-flex justify-content-between">
            <span class="badge-popular" id="popularBadge">🔥 Popular</span>

            <button class="arrow-btn" id="arrowBtn3">
  <i class="fa fa-arrow-up-right-from-square"></i>
</button>

          </div>

          <h6 class="mt-2">Listening Has<br>Been Released</h6>

          <div class="d-flex align-items-center justify-content-between mt-3">
            <img src="./images/bottom1c.jfif" class="mini-img">
            <span class="rating">⭐ 4.7</span>
          </div>
        </div>
      </div>

    </div>


  </div>

  <script src="./script.js"></script>

</body>

</html>