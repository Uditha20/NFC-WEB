<?php
$price = isset($_GET['price']) ? htmlspecialchars($_GET['price']) : 'N/A';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Business Card Customization</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
    rel="stylesheet" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
    integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="./css/Framestyle.css" />

  <style>
    /*      
      .border-secondary {
        border-color: #191b29 !important;
      }

      .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px;
      }

      .header .logo {
        font-size: 1.5rem;
        font-weight: bold;
        color: #e6c200;
      }

      .input-section input {
        background-color: #1f1f1f;
        border: 1px solid #e6c200;
        color: black;
      }

      .input-section input::placeholder {
        color: #ffffff;
      }

      .footer-buttons button {
        border-radius: 5px;
      }

      .btn-next {
        background-color: #e6c200;
        color: #000;
      }

      label sup {
        font-size: 1em;
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
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <a class="navbar-brand" href="./index.php"><img src="./asset/img/navlogo.png" alt="" /></a>
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="./index.php">Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="./products.php">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="./aboutUs.php">About us</a>
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
  <!-- Content Section -->
  <div class="d-flex overflow-y-auto flex-fill">
    <div class="container my-4 col-md-8" data-bs-theme="dark">
      <div class="d-flex justify-content-center">
        <div class="col">
          <img src="./asset/img/frame9.png" class="w-100" alt="" />
        </div>
      </div>

      <form class="row g-3">
        <div class="col-md-6">
          <label for="name" class="form-label">Name</label>
          <input
            type="text"
            class="form-control bg-dark"
            id="name"
            placeholder="Ex: Jehan Fernando" />
        </div>
        <div class="col-md-6">
          <label for="title" class="form-label">Title</label>
          <input
            type="text"
            class="form-control"
            id="title"
            placeholder="Ex: CEO" />
        </div>
        <div class="col-md-6">
          <label for="website" class="form-label">Website</label>
          <input
            type="text"
            class="form-control"
            id="website"
            placeholder="Ex: google.com" />
        </div>
        <div class="col-md-6">
          <label for="mobile" class="form-label">Mobile Number</label>
          <input
            type="text"
            class="form-control"
            id="mobile" />
        </div>

        <div>


        </div>
      </form>
    </div>
  </div>

  <!-- Footer Section -->
  <div class="bg-black border-secondary border-top">
    <div
      class="container d-flex justify-content-between align-items-center footer-buttons py-3">
      <div class="col-md-6">
        <label class="text-secondary"><sup>Total</sup></label>
        <div>
          <strong class="fs-2 fw-bold"> <span class="fs-6">RS</span> <?php echo $price; ?>
        </div>
      </div>

      <div>
        <a href="Frame8.php" class="btn btn-secondary me-3 px-4">Back</a>
        <a href="Frame10.php" class="btn learn-more-btn px-4">Next</a>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>