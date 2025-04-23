<?php
$price = isset($_GET['price']) ? htmlspecialchars($_GET['price']) : 'N/A';
$pack = isset($_GET['pack']) ? htmlspecialchars($_GET['pack']) : 'N/A';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Business Card Customization</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous" />
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
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
<div class="container mt-3">
    <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container">
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
                <button type="button" class="btn learn-more-btn">Get started</button>
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
        <div class="progress-line-active" style="width: 50%;"></div>

        <div class="step completed">
          <div class="step-circle"></div>
          <div class="step-title">Select Type</div>


        </div>

        <div class="step active completed">
          <div class="step-circle"></div>
          <div class="step-title">Select Style</div>
        </div>

        <div class="step">
          <div class="step-circle"></div>
          <div class="step-title">Package Details</div>
        </div>

        <div class="step">
          <div class="step-circle"></div>
          <div class="step-title">Processing Details</div>


        </div>
      </div>
    </div>
  </div>
  <!-- Content Section -->
  <div class="d-flex">
    <div class="container my-4 col-md-9 pb-5" data-bs-theme="dark">
      <div class="d-flex gap-3 flex-wrap justify-content-center">
        <div class="col-md-5">
          <p class="mb-2">Front Side</p>
          <img src="./asset/img/front .png" class="w-100 card-image" id="cardFront" alt="Business Card Front" />
        </div>
        <div class="col-md-5">
          <p class="mb-2">Back Side</p>
          <img src="./asset/img/back.png" class="w-100 card-image" id="cardBack" alt="Business Card Back" />
        </div>
      </div>

      <form class="row g-3 mb-5">
        <div class="col-md-6">
          <label for="name" class="form-label">Name</label>
          <input
            type="text"
            class="form-control bg-dark text-light"
            id="name"
            required
            placeholder="Ex: Jehan Fernando" />
        </div>
        <div class="col-md-6">
          <label for="title" class="form-label">Title</label>
          <input
            type="text"
            class="form-control"
            id="title"
            required
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
            required
            placeholder="Ex: 0712345678"
            id="mobile" />
        </div>
        <div class="col-md-6 mb-4">
          <label for="email" class="form-label">Email</label>
          <input
            type="email"
            class="form-control"
            required
            id="email"
            placeholder="Ex: sample@gmail.com" />
        </div>
        <div class="col-md-6 mb-4">
          <label for="address" class="form-label">Address</label>
          <input
            type="text"
            class="form-control"
            required
            id="address"
            placeholder="Ex: 123, Galle Road, Colombo 03" />
        </div>
        <?php if ($pack === 'rare' || $pack === 'delux'): ?>
          <div class="col-md-6" style="height: 100px;">
            <label for="colorScheme" class="form-label">Color Scheme</label>
            <select class="form-select" id="colorScheme" required onchange="changeCardImages(this.value)">
              <option value="" selected disabled>Choose a color scheme...</option>
              <option value="regal-crest">Regal Crest (Navy & Gold)</option>
              <option value="urban-mint">Urban Mint (Charcoal & Mint)</option>
              <option value="forest-purity">Forest Purity (White & Forest Green)</option>
              <option value="twilight-coral">Twilight Coral (Midnight Blue & Coral)</option>
              <option value="neon-noir">Neon Noir (Black & Electric Lime)</option>
              <option value="coastal-sunset">Coastal Sunset (Dark Teal & Peach)</option>
              <option value="sunlit-stone">Sunlit Stone (Slate Gray & Sunflower Yellow)</option>
              <option value="vintage-elegance">Vintage Elegance (Burgundy & Ivory)</option>
              <option value="royal-lavender">Royal Lavender (Deep Purple & Lavender)</option>
              <option value="scarlet-mist">Scarlet Mist (Crimson & Light Gray)</option>
            </select>
          </div>
        <?php endif; ?>
        <?php if ($pack === 'delux'): ?>
          <div class="col-md-6">

            <div class="mb-3">
              <label for="frontImage" class="form-label">Upload Front Image</label>
              <input type="file" class="form-control" name="frontImage" id="frontImage" accept="image/*" required>
            </div>
  
            <div class="mb-3">
              <label for="backImage" class="form-label">Upload Back Image</label>
              <input type="file" class="form-control" name="backImage" id="backImage" accept="image/*" required>
            </div>
          </div>
        <?php endif; ?>

        <!-- <div class="col-12 mt-3">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div> -->
      </form>
    </div>
  </div>

  <!-- Footer Section -->
  <div class="bg-black border-secondary border-top">
    <div class="container d-flex justify-content-between align-items-center footer-buttons py-3">
      <div class="col-md-6 mt-3">
        <label class="text-secondary"><sup>Total</sup></label>
        <div>
          <strong class="fs-2 fw-bold">
            <span class="fs-6">RS</span> <?php echo $price; ?>.00
          </strong>
        </div>
      </div>

      <div>
        <a href="Frame8.php?price=<?php echo urlencode($price); ?>" class="btn btn-secondary me-3 px-4">Back</a>
        <a href="Frame10.php?price=<?php echo urlencode($price); ?>" class="btn learn-more-btn px-4">Next</a>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const formFields = ["name", "title", "website", "mobile", "email", "address"];

      // Load saved data (if any) when page loads
      const savedData = sessionStorage.getItem("formData");
      if (savedData) {
        const formData = JSON.parse(savedData);
        formFields.forEach(field => {
          const input = document.getElementById(field);
          if (input && formData[field]) {
            input.value = formData[field];
          }
        });
      }

      // Auto-save when any input changes
      formFields.forEach(field => {
        const input = document.getElementById(field);
        if (input) {
          input.addEventListener("input", function() {
            saveFormData();
          });
        }
      });

      function saveFormData() {
        const formData = {};
        formFields.forEach(field => {
          const input = document.getElementById(field);
          if (input) {
            formData[field] = input.value;
          }
        });
        sessionStorage.setItem("formData", JSON.stringify(formData));
        // Use localStorage.setItem() for persistent storage
      }
    });

    function changeCardImages(colorScheme) {
      // Define image paths for each color scheme
      const imagePaths = {
        'regal-crest': {
          front: './asset/img/Deluxe front 1.png',
          back: './asset/img/Deluxe back 1.png'
        },
        'urban-mint': {
          front: './asset/img/Deluxe front 2.png',
          back: './asset/img/Deluxe back 2.png'
        },
        'forest-purity': {
          front: './asset/img/Deluxe front 3.png',
          back: './asset/img/Deluxe back 3.png'
        },
        'twilight-coral': {
          front: './asset/img/Deluxe front 4.png',
          back: './asset/img/Deluxe back 4.png'
        },
        'neon-noir': {
          front: './asset/img/Deluxe front 5.png',
          back: './asset/img/Deluxe back 5.png'
        },
        'coastal-sunset': {
          front: './asset/img/Deluxe front 6.png',
          back: './asset/img/Deluxe back 6.png'
        },
        'sunlit-stone': {
          front: './asset/img/Deluxe front 7.png',
          back: './asset/img/Deluxe back 7.png'
        },
        'vintage-elegance': {
          front: './asset/img/Deluxe front 8.png',
          back: './asset/img/Deluxe back 8.png'
        },
        'royal-lavender': {
          front: './asset/img/Deluxe front 9.png',
          back: './asset/img/Deluxe back 9.png'
        },
        'scarlet-mist': {
          front: './asset/img/Deluxe front 10.png',
          back: './asset/img/Deluxe back 10.png'
        }
      };

      // Get the image elements
      const frontImage = document.getElementById('cardFront');
      const backImage = document.getElementById('cardBack');

      // Update image sources if the color scheme exists in our mapping
      if (imagePaths[colorScheme]) {
        frontImage.src = imagePaths[colorScheme].front;
        backImage.src = imagePaths[colorScheme].back;
      }
    }
  </script>
</body>

</html>