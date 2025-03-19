<?php
$price = isset($_GET['price']) ? htmlspecialchars($_GET['price']) : 'N/A';
?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Package Selection</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <link rel="stylesheet" href="./css/Framestyle.css" />
    
  </head>
  <body>
    <div class="container-fluid mt-3">
      <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="./index.html"
              ><img src="./asset/img/navlogo.png" alt=""
            /></a>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="./index.html"
                  >Home</a
                >
              </li>

              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="./products.php"
                  >Products</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="./aboutUs.php"
                  >About us</a
                >
              </li>

              <li class="nav-item">
                <a class="nav-link" href="./contactus.php">Contact</a>
              </li>
              <li class="nav-item">
                <button type="button" class="btn contact-us-btn">Login</button>
              </li>
              <li class="nav-item">
                <a href="./login.php">
                  <button type="button" class="btn learn-more-btn">
                    Get started
                  </button>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <main class="container my-2">
      <div class="row  d-flex justify-content-center">

        <div class="stepper-wrapper ">
          <div class="stepper">
              <div class="progress-line"></div>
              <div class="progress-line-active"></div>
              
              <div class="step completed">
                  <div class="step-circle"></div>
                  <div class="step-title">Package Details</div>
              </div>
              
              <div class="step active">
                  <div class="step-circle"></div>
                  <div class="step-title">Package Details</div>
              </div>
              
              <div class="step">
                  <div class="step-circle"></div>
                  <div class="step-title">Package Details</div>
              </div>
              
              <div class="step">
                  <div class="step-circle"></div>
                  <div class="step-title">Package Details</div>
              </div>
          </div>
      </div>
      </div>
      <div
        class="card mb-3 p-3 d-flex flex-row align-items-center justify-content-between"
      >
        <div class="d-flex align-items-center">
          <div
            class="circle border border-secondary rounded-circle me-3"
            style="width: 24px; height: 24px"
          ></div>
          <div>
            <h5 class="mb-0">Nature</h5>
            <p class="mb-0">Share your social profile in an instant</p>
          </div>
        </div>
        <img
          src="./asset/img/Frame_90.png"
          alt="Nature Card"
          width="450"
          height="150"
          class="rounded"
        />
      </div>
      <div
        class="card mb-3 p-3 d-flex flex-row align-items-center justify-content-between selected "
      >
        <div class="d-flex align-items-center">
          <div
            class="circle border border-warning rounded-circle me-3"
            style="width: 24px; height: 24px"
          ></div>
          <div>
            <h5 class="mb-0">Technology</h5>
            <p class="mb-0">Share your social profile in an instant</p>
          </div>
        </div>
        <img
          src="./asset/img/Frame_90.png"
          alt="Nature Card"
          width="450"
          height="150"
          class="rounded"
        />
      </div>
      <div
        class="card mb-3 p-3 d-flex flex-row align-items-center justify-content-between"
      >
        <div class="d-flex align-items-center">
          <div
            class="circle border border-secondary rounded-circle me-3"
            style="width: 24px; height: 24px"
          ></div>
          <div>
            <h5 class="mb-0">Music</h5>
            <p class="mb-0">Share your social profile in an instant</p>
          </div>
        </div>
        <img
          src="./asset/img/Frame_90.png"
          alt="Nature Card"
          width="450"
          height="150"
          class="rounded"
        />
      </div>
    </main>
    <div class="bg-black border-secondary border-top fixed-bottom">
        <div
          class="container d-flex justify-content-between align-items-center footer-buttons py-3"
        >
          <div class="col-md-6 mt-3">
            <label class="text-secondary"><sup>Total</sup></label>
            <div>
              <strong class="fs-2 fw-bold"
                >
                <span class="fs-6">RS</span> <?php echo $price; ?>
            </div>
          </div>
  
          <div>
            <button class="btn btn-secondary me-3 px-4">Back</button>
            <a href="frame9.php?price=<?php echo urlencode($price); ?>" class="btn learn-more-btn px-4">Next</a>

          </div>
        </div>
      </div>
  </body>
</html>
