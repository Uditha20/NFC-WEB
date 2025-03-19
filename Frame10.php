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
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./css/Framestyle.css" />
    <style>
      /* body {
            font-family: 'Roboto', sans-serif;
            background-color: #1a202c;
            color: white;
        } */
      /* .header {
            background-color: #2d3748;
            padding: 1rem;
        } */
/* 
      .step-indicator {
        display: flex;
        justify-content: center;
        margin-bottom: 2rem;
      }
      .step-indicator .step {
        display: flex;
        align-items: center;
        margin-right: 1rem;
      }
      .step-indicator .step .circle {
        width: 1rem;
        height: 1rem;
        background-color: #ecc94b;
        border-radius: 50%;
        margin-right: 0.5rem;
      }
      .step-indicator .step .line {
        width: 2rem;
        height: 0.25rem;
        background-color: #ecc94b;
        margin-right: 0.5rem;
      }
      .step-indicator .step.inactive .circle,
      .step-indicator .step.inactive .line {
        background-color: #4a5568;
      } */
 
    </style>
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
    <main class="container mt-5">
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
      <div class="row justify-content-center">
        <div class="col-md-5 mb-4">
          <div class="card-option selected p-3 d-flex">
            <div class="d-flex align-items-center mb-3">
              <input type="radio" name="card" class="mr-2" />
              <div>
                <h5 class="font-weight-bold">Glossy PVC</h5>
                <p>Durable PVC Card with Glossy Print</p>
                <span class="text-warning">Default</span>
              </div>
            </div>
            <img src="./asset/img/frame10.png" alt="Glossy PVC Card" />
          </div>
        </div>
        <div class="col-md-5 mb-4">
          <div class="card-option p-3 d-flex">
            <div class="d-flex align-items-center mb-3">
              <input type="radio" name="card" class="mr-2" />
              <div>
                <h5 class="font-weight-bold">Matt PVC</h5>
                <p>Durable PVC Card with Glossy Print</p>
                <span >+1,200 LKR</span>
              </div>
            </div>
            <img src="./asset/img/frame10.png" alt="Glossy PVC Card" />
          </div>
        </div>
        <div class="col-md-5 mb-4">
          <div class="card-option p-3 d-flex">
            <div class="d-flex align-items-center mb-3">
              <input type="radio" name="card" class="mr-2" />
              <div>
                <h5 class="font-weight-bold">Matt PVC</h5>
                <p>Durable PVC Card with Glossy Print</p>
                <span>+1,200 LKR</span>
              </div>
            </div>
            <img src="./asset/img/frame10.png" alt="Glossy PVC Card" />
          </div>
        </div>
        <div class="col-md-5 mb-4">
          <div class="card-option p-3 d-flex">
            <div class="d-flex align-items-center mb-3">
              <input type="radio" name="card" class="mr-2" />
              <div>
                <h5 class="font-weight-bold">Matt PVC</h5>
                <p>Durable PVC Card with Glossy Print</p>
                <span>+1,200 LKR</span>
              </div>
            </div>
            <img src="./asset/img/frame10.png" alt="Glossy PVC Card" />
          </div>
        </div>
      </div>
      <div class="bg-black border-secondary border-top">
        <div
          class="container d-flex justify-content-between align-items-center footer-buttons py-3"
        >
          <div class="col-md-6">
            <label class="text-secondary"><sup>Total</sup></label>
            <div>
              <strong class="fs-2 fw-bold"
                ><span class="fs-6">RS</span> 2499</strong
              >
            </div>
          </div>
  
          <div>
            <a href="Frame9.php" class="btn btn-secondary me-3 px-4">Back</a>
            <a href="Frame11.php" class="btn learn-more-btn px-4">Next</a>
          </div>
        </div>
      </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
