<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>check-out</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap"
      rel="stylesheet"
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
            <a class="navbar-brand" href="./index.php"
              ><img src="./asset/img/navlogo.png" alt=""
            /></a>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="./index.php"
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
    <main class="container my-5">
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
      <div class="d-flex justify-content-center mb-4">
        <div class="card-container me-3" style="height: 300px;width: 800px;">
          <img
            src="./asset/img/frame_11.png"
            alt="Card front design"
            class="img-fluid rounded"
          />
        </div>
      </div>
    </main>
    <div class="footer-checkout d-flex justify-content-between align-items-center">
        <span class="h4 mb-0">Total Rs.2499</span>
        <div class="d-flex">
          <a href="Frame10.php" class="btn btn-secondary me-3 px-4">Back</a>
          <form action="process_payment.php" method="POST" class="d-inline">
            <input type="hidden" name="amount" value="2499"> <!-- Set the amount -->
            <input type="hidden" name="currency" value="LKR"> <!-- Set the currency -->
            <button type="submit" class="btn learn-more-btn">Proceed to Checkout</button>
        </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
