<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Manjithaaza</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous" />
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <!-- bootstrap icon -->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Owl Carousel JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- style sheet -->
  <link rel="stylesheet" href="./css/style.css" />
</head>
<script>
  $(document).ready(function() {
    $(".owl-carousel").owlCarousel({
      loop: true, // Infinite loop
      margin: 5, // Space between items
      // Show navigation dots
      autoplay: true, // Autoplay enabled
      autoplayTimeout: 3000, // Autoplay interval in milliseconds
      responsive: {
        0: {
          items: 1, // 1 item for small screens
        },
        600: {
          items: 2, // 2 items for medium screens
        },
        1000: {
          items: 4, // 3 items for large screens
        },
      },
    });
  });
</script>

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
  <!-- hero section -->
  <div class="container-fluid mt-3">
    <div class="row d-flex hero-section align-items-center">
      <div
        class="col-md-12 d-flex flex-column align-items-center"
        style="padding-left: 20px">
        <div class="d-flex">
          <div class="mx-2">
            <i class="bi bi-star-fill hero-icon"></i>
            <i class="bi bi-star-fill hero-icon"></i>
            <i class="bi bi-star-fill hero-icon"></i>
            <i class="bi bi-star-fill hero-icon"></i>
            <i class="bi bi-star-fill hero-icon"></i>
          </div>

          <p class="hero-small">1000+ Satisfied Customers</p>
        </div>
        <h2 class="text-center position-relative">
          Sri Lanka's Leading
          <span class="nfc-text position-relative">
            NFC
            <img
              src="./asset/img/Union.png"
              alt=""
              class="img-fluid nfc-icon position-absolute" />
          </span>
          <br />
          Technology Provider
        </h2>
        <p class="dark-text">
          Customize your NFC Business Card Now and Get it to your hands within
          72 hours
        </p>
        <button type="button" class="btn learn-more-btn me-2">
          Learn More
        </button>
      </div>
    </div>
  </div>

  <div class="container-fluid mt-5">
    <div class="row">
      <div class="col-md-12">
        <div class="owl-carousel">
          <div class="eco-hero">
            <img src="./asset/img/eco-img-2.png" class="img-fluid" />
            <button>Mband NFC Band</button>
          </div>
          <div class="eco-hero">
            <img src="./asset/img/eco-img-1.png" class="img-fluid" />
            <button>Mband NFC Band</button>
          </div>
          <div class="eco-hero">
            <img src="./asset/img/eco-img-2.png" class="img-fluid" />
            <button>Mband NFC Band</button>
          </div>
          <div class="eco-hero">
            <img src="./asset/img/eco-img-1.png" class="img-fluid" />
            <button>Mband NFC Band</button>
          </div>
          <div class="eco-hero">
            <img src="./asset/img/caro-img-3.png" class="img-fluid" />
            <button>Mband NFC Band</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid mt-4">
    <div class="row d-flex justify-content-center">
      <div class="col-md-8">
        <p style="text-align: center" class="small-text">MCard</p>
        <h1 style="text-align: center">
          Introducing <span class="small-text">MCard</span><br />
          Smart Solution to Share Your Contact
        </h1>
      </div>
    </div>
  </div>

  <div class="container-fluid bg-image" style="width: 1010px">
    <div class="row d-flex justify-content-between">
      <div class="col-md-4">
        <div class="mcard-box">
          <b>Instant Contact Sharing</b>
          <p class="mt-2">
            Just tap your card on a smartphone to instantly share your contact details. No apps or typing needed.
          </p>
        </div>
        <div class="mcard-box">
          <b>Eco-Friendly</b>
          <p class="mt-2">
            Say goodbye to paper business cards. Manjithaaza cards are made from recyclable plastic, helping to reduce paper waste.
          </p>
        </div>
        <div class="mcard-box">
          <b>Custom Designs at No Extra Cost</b>
          <p class="mt-2">
            Get a personalized design for your card for free. Make your card reflect your unique style.


          </p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="mcard-box">
          <b>Manage Contacts Easily</b>
          <p class="mt-2">
            With the Manjithaaza app, you can organize and manage your contacts effortlessly, enhancing your networking experience.
          </p>
        </div>
        <div class="mcard-box">
          <b>Multiple Profiles for Different Needs</b>
          <p class="mt-2">
            Premium users can create multiple profiles on one card, allowing you to share different information depending on the situation.
          </p>
        </div>
        <div class="mcard-box">
          <b>Stylish and Durable</b>
          <p class="mt-2">
            Not only functional, but Manjithaaza cards are also designed to be fashionable and long-lasting, making a great impression.
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid mt-4">
    <div class="row d-flex justify-content-center">
      <div class="col-md-5">
        <p style="text-align: center" class="small-text">MCard</p>
        <h1 style="text-align: center">Get Started today with <span class="small-text">MCard</span></h1>
        <p style="text-align: center; line-height: 28px">
          Choose your Manjithaaza smart card package today and start sharing your contact information with just a tap!
        </p>
      </div>
    </div>
  </div>

  <!-- new add price -->
  <div class="container">
    <div class="row d-flex justify-content-between" style="margin-top: 70px">
      <div class="col-md-4 d-flex flex-column align-items-center">
        <div class="card-price card">
          <!-- Half image box -->
          <div
            class="card-price-outer d-flex justify-content-center position-absolute">
            <img src="./asset/img/price.png" alt="" class="img-fluid" />
          </div>

          <!-- Card content -->
          <div
            class="card-body d-flex flex-column justify-content-center card-price-body">
            <h5 class="card-title text-center small-text">Prime Card</h5>
            <div class="text-center">

              <p class="">A minimalist smart card featuring a white background with black lettering. Ideal for professionals seeking a clean and straightforward design.</p>

              <div class="price mb-3">Rs.2499</div>

              <a href="Frame8.php?price=2499">

                <button class="btn-custom">Get Started</button>
              </a>

              <ul class="feature-list text-start">
                <li>Black and white design</li>
                <li>Your name and designation on the card</li>
                <li>NFC and QR code enabled</li>
                <li>Manjithaaza all premium profile features</li>
                <li>Personalized login</li>
              </ul>

              <div class="icons-row">
                <div class="">
                  <img src="./asset/img/price-card.png">
                </div>

              </div>
            </div>
            <!-- <a href="Frame8.php" class="btn learn-more-btn">Learn More</a> -->
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex flex-column align-items-center">
        <div class="card-price card">
          <!-- Half image box -->
          <div
            class="card-price-outer d-flex justify-content-center position-absolute">
            <img src="./asset/img/price.png" alt="" class="img-fluid" />
          </div>

          <!-- Card content -->
          <div
            class="card-body d-flex flex-column justify-content-center card-price-body">
            <h5 class="card-title text-center small-text">Deluxe Card</h5>
            <div class="text-center">

              <p class="">A two-color smart card offering a balance between simplicity and personalization. Perfect for those wanting a touch of color in their networking tools.</p>


              <div class="price mb-3">Rs.2799</div>
              <a href="Frame8.php?price=2799&pack=rare">


                <button class="btn-custom">Get Started</button>
              </a>

              <ul class="feature-list text-start">
                <li>Two-color design</li>
                <li>Your name, company, and position on the card</li>
                <li>NFC and QR code enabled</li>
                <li>Manjithaaza all premium profile features</li>
                <li>Personalized login</li>
              </ul>


              <div class="icons-row">
                <div class="">
                  <img src="./asset/img/price-card.png" class="img-fluid">
                </div>

              </div>
            </div>
            <!-- <a href="Frame8.html" class="btn learn-more-btn">Learn More</a> -->
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex flex-column align-items-center">
        <div class="card-price card">
          <!-- Half image box -->
          <div
            class="card-price-outer d-flex justify-content-center position-absolute">
            <img src="./asset/img/price.png" alt="" class="img-fluid" />
          </div>

          <!-- Card content -->
          <div
            class="card-body d-flex flex-column justify-content-center card-price-body">
            <h5 class="card-title text-center small-text mt-4">Elite Card</h5>
            <div class="text-center">

              <p class="">A fully customizable smart card that allows you to design every aspect to reflect your unique brand. Best suited for individuals desiring complete personalization and advanced features.</p>
              <div class="price mb-3">Rs.6499</div>
              <a href="Frame8.php?price=6499&pack=delux"">

                <button class=" btn-custom btn-custom-pre">Get Started</button>
              </a>



              <ul class="feature-list text-start">
                <li>Fully customizable, full-color design</li>
                <li>Upgradable company profile</li>
                <li>Personalized Manjithaaza web profile link</li>
                <li>NFC and QR code enabled</li>
                <li>Manjithaaza all premium profile features</li>
                <li>Personalized login</li>
              </ul>

              <div class="icons-row">
                <div class="">
                  <img src="./asset/img/price-card.png">
                </div>

              </div>
            </div>
            <!-- <a href="Frame8.html" class="btn learn-more-btn">Learn More</a> -->
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="testimonials-section" style="margin-top: 50px;">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h5 class="small-text">TESTOMONIALS</h5>
          <h2 class="mb-4">What our Customers think</h2>
          <p>
            Hear from our satisfied clients about their experiences with our services.
          </p>
        </div>
        <div class="col-md-6">
          <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <?php
              $testimonials = [
                [
                  'name' => 'Dhananjaya Pasan Wijesiri',
                  'position' => 'CEO, Pixel Design',
                  'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                  'image' => './asset/img/profile.png',
                  'active' => true
                ],
                [
                  'name' => 'Jane Doe',
                  'position' => 'Marketing Director',
                  'text' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                  'image' => './asset/img/profile.png',
                  'active' => false
                ],
                [
                  'name' => 'John Smith',
                  'position' => 'Product Manager',
                  'text' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
                  'image' => './asset/img/profile.png',
                  'active' => false
                ]
              ];

              foreach ($testimonials as $index => $testimonial) {
                $activeClass = $testimonial['active'] ? 'active' : '';
                echo "
                                <div class='carousel-item {$activeClass}'>
                                    <div class='testimonial-card'>
                                        <div class='testimonial-stars'>
                                            <i class='fas fa-star'></i>
                                            <i class='fas fa-star'></i>
                                            <i class='fas fa-star'></i>
                                            <i class='fas fa-star'></i>
                                            <i class='fas fa-star'></i>
                                        </div>
                                        <p class='testimonial-text'>{$testimonial['text']}</p>
                                        <div class='testimonial-author'>
                                            <img src='{$testimonial['image']}' alt='{$testimonial['name']}' class='author-img'>
                                            <div class='author-details'>
                                                <h5>{$testimonial['name']}</h5>
                                                <p>{$testimonial['position']}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>";
              }
              ?>
            </div>
            <div class="carousel-indicators">
              <?php
              foreach (array_keys($testimonials) as $index) {
                $activeClass = $index === 0 ? 'active' : '';
                echo "
                                <button type='button' data-bs-target='#testimonialCarousel' 
                                        data-bs-slide-to='{$index}' 
                                        class='{$activeClass}'
                                        aria-current='true'
                                        aria-label='Slide " . ($index + 1) . "'></button>";
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- special -->
  <div class="container mt-5">
    <div class="row d-flex justify-content-center">
      <div class="col-md-5">
        <p style="text-align: center" class="small-text">PRODUCTS</p>
        <h1 class="text-center">Why<span class="small-text"> Manjithaaza</span> is Special</h1>
        <p style="text-align: center; line-height: 28px">
          Our smart‐card solutions are engineered to elevate your brand, simplify connections, and turn every tap into actionable insight. </p>
      </div>
    </div>
  </div>

  <div class="container py-3">

    <div class="row d-flex justify-content-center">
      <!-- Left Column - NFC Card -->
      <div class="col-md-3 h-100">
        <div class="manjithaaza-card left-card-custom">
          <div class="card-body d-flex flex-column">
            <div class="union-pic mx-3">
              <img src="./asset/img/Union.png" class="img-fluid pt-3" alt="Profile">
            </div>
            <h5 class="manjithaaza-card-title mx-3 mt-3">NFC Technology</h5>
            <p class="manjithaaza-card-text flex-grow-1 mx-3">
              Instant, contactless sharing at the tap of a card.
              Embed powerful NFC chips in your cards so prospects, partners or clients can access your full profile, portfolio, menu or review page—with zero app installs and no awkward QR scanning.
            </p>
            <div class="nfc-card-img">
              <img src="./asset/img/credit_card_!.png" class="card-img-bottom" alt="NFC Card">
            </div>
          </div>
        </div>
      </div>

      <!-- Right Column -->
      <div class="col-md-9">
        <!-- Profile Section -->
        <div class="manjithaaza-card mb-4 h-50">
          <div class="card-body d-flex align-items-center">
            <div class="flex-grow-1 pe-3">
              <div class="union-pic mx-4">
                <img src="./asset/img/Union.png" class="img-fluid" alt="Profile">
              </div>
              <h5 class="manjithaaza-card-title mx-3">Manjithaaza Profile</h5>
              <p class="manjithaaza-card-text mx-3">
                Unify your digital identity in one place.
                Customize your Manjithaaza Profile with Manjithaaza mobile app . Or you can easily edit it with login to our website.

              </p>
              <div class="app-badges mt-3 mx-3">
                <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg" alt="Google Play">
              </div>
            </div>
            <div class="img-spcial">
              <img src="./asset/img/special.png" class="img-fluid" alt="Profile">
            </div>
          </div>
        </div>

        <!-- Two NFC Technology Cards -->
        <div class="row g-4" >
          <div class="col-md-6">
            <div class="manjithaaza-card" style="height: 240px;">
              <div class="card-body">
                <div class="union-pic mx-4">
                  <img src="./asset/img/Union.png" class="img-fluid pt-3" alt="Profile">
                </div>
                <h5 class="manjithaaza-card-title mt-2 mx-3">Premium card Customization</h5>
                <p class="manjithaaza-card-text mx-3">
                  Cards that look and feel as exceptional as your business.
                  Choose from a wide range of materials (metal, PVC, wood), premium finishes (matte, gloss, holographic foil) and built in features (NFC, QR, RFID) to perfectly match your brand.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="manjithaaza-card h-100">
              <div class="card-body">
                <div class="union-pic mx-4">
                  <img src="./asset/img/Union.png" class="img-fluid pt-3" alt="Profile">
                </div>
                <h5 class="manjithaaza-card-title mt-2 mx-3">Premium card Customization</h5>
                <p class="manjithaaza-card-text mx-3">
                  Cards that look and feel as exceptional as your business.
                  Choose from a wide range of materials (metal, PVC, wood), premium finishes (matte, gloss, holographic foil) and built in features (NFC, QR, RFID) to perfectly match your brand.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid mt-4">
    <div class="row d-flex justify-content-center">
      <div class="col-md-5">
        <p style="text-align: center">PRODUCTS</p>
        <h1 style="text-align: center"> <span class="small-text">Manjithaaza </span>Ecosystem</h1>
        <p style="text-align: center; line-height: 28px">

        Manjithaaza’s ecosystem pairs smart cards with review cards and stands to help brands increase visibility and cultivate a positive image with customers through seamless feedback.
        </p>
      </div>
    </div>
  </div>

  <!-- three card -->

  <div class="container mt-4">
    <div class="row g-4"> <!-- Added g-3 for spacing -->
      <div class="col-md-3">
        <div class="eco-col" style="background: url(./asset/img/eco-img-1.png);">
          <h5>MReview Card</h5>
          <p>Share your Review page with NFC</p>
        </div>
      </div>

      <div class="col-md-3">
        <div class="eco-col" style="background: url(./asset/img/eco-img-2.png);">
          <h5>MReview Card</h5>
          <p>Share your Review page with NFC</p>
        </div>
      </div>

      <div class="col-md-3">
        <div class="eco-col" style="background: url(./asset/img/eco-img-1.png);">
          <h5>MReview Card</h5>
          <p>Share your Review page with NFC</p>
        </div>
      </div>

      <div class="col-md-3">
        <div class="eco-col" style="background: url(./asset/img/eco-img-2.png);">
          <h5>MReview Card</h5>
          <p>Share your Review page with NFC</p>
        </div>
      </div>
    </div>
  </div>


  <!-- FAQ section -->
  <div class="container  mt-3 faq-section">
    <div class="row  d-flex align-items-center justify-content-between">
      <div class="col-md-5">
        <h5 class="small-text">FAQs</h5>
        <h1 class="faq-heading">Find answers to common questions about our smart NFC cards and services.</h1>
      </div>

      <div class="col-md-6">
        <div class="accordion accordion-flush" id="accordionFlushExample">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapsesix"
                aria-expanded="false"
                aria-controls="flush-collapsesix">
                How do NFC cards work?
              </button>
            </h2>
            <div
              id="flush-collapsesix"
              class="accordion-collapse collapse"
              data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                NFC cards use near field communication technology to securely transmit data between devices when they are in close proximity. They are equipped with a small chip that stores information and can be read by compatible devices, such as smartphones or card readers.
                Contac

              </div>
            </div>
          </div>
          <!-- <div class="accordion-item">
            <h2 class="accordion-header">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapsefive"
                aria-expanded="false"
                aria-controls="flush-collapsefive">
                Accordion Item #1
              </button>
            </h2>
            <div
              id="flush-collapsefive"
              class="accordion-collapse collapse"
              data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                Placeholder content for this accordion, which is intended to
                demonstrate the <code>.accordion-flush</code> class. This is
                the first item's accordion body.
              </div>
            </div>
          </div> -->
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseOne"
                aria-expanded="false"
                aria-controls="flush-collapseOne">
                Are NFC cards secure?
              </button>
            </h2>
            <div
              id="flush-collapseOne"
              class="accordion-collapse collapse"
              data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                Yes, NFC cards are secure. They use encryption and authentication protocols to ensure the privacy and integrity of the data being transmitted. Additionally, NFC technology requires physical proximity, reducing the risk of unauthorized access.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseOnee"
                aria-expanded="false"
                aria-controls="flush-collapseOnee">
                Can NFC cards be customized?
              </button>
            </h2>
            <div
              id="flush-collapseOnee"
              class="accordion-collapse collapse"
              data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                Yes, our NFC cards can be customized. We offer online card design tools that allow you to create your own unique design, incorporating your branding and contact information. You can choose from various templates and personalize the layout, colors, and content.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseTwo"
                aria-expanded="false"
                aria-controls="flush-collapseTwo">
                How can I order NFC cards?
              </button>
            </h2>
            <div
              id="flush-collapseTwo"
              class="accordion-collapse collapse"
              data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                To order NFC cards, simply visit our website and navigate to the Smart Card Packages section. Select the package that suits your needs, customize your card design, and proceed to checkout. We offer secure online payment options and fast shipping or contact us.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseThree"
                aria-expanded="false"
                aria-controls="flush-collapseThree">
                What are the benefits of NFC cards?
              </button>
            </h2>
            <div
              id="flush-collapseThree"
              class="accordion-collapse collapse"
              data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                NFC cards offer several benefits. They provide a convenient and efficient way to share contact information, eliminating the need for traditional business cards. They can also be used for access control, loyalty programs, and interactive marketing campaigns. Additionally, NFC cards are eco-friendly and cost-effective.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- working -->
  <div class="container yellow-box  d-flex justify-content-center align-items-center  mt-4">
    <div class="">

      <div class="">

        <h5>Ready to be smart? Click here to get in touch with us!</h5>
      </div>

    </div>
  </div>


  <div class="container mt-3">
    <div class="footer">
      <div
        class="row  py-3 border-top">
        <div class="col-md-3 text-center mb-3" style="padding-right: 50px;">
          <img src="./asset/img/footer.png" alt="Logo" class="img-fluid" />
        </div>

        <div class="col-md-6  ">
          <div
            class="footer-links d-flex flex-wrap justify-content-center gap-3">
            <a href="./aboutUs.php" class="footer-link-custom">About Us</a>
            <a href="./products.php" class="footer-link-custom">Products</a>
            <a href="./service.php" class="footer-link-custom">Services</a>
            <a href="./contactus.php" class="footer-link-custom">Contact</a>
            <a href="./faq.php" class="footer-link-custom">FAQ</a>
          </div>
        </div>

        <div class="col-md-3 text-center mb-3 mb-md-0  border-primary d-flex justify-content-end">
          <i class="bi bi-facebook fs-4 mx-2"></i>
          <i class="bi bi-twitter fs-4 mx-2"></i>
          <i class="bi bi-instagram fs-4 mx-2"></i>
        </div>
      </div>
    </div>
  </div>
</body>
<script>
  // Optional: Custom JavaScript for carousel
  document.addEventListener('DOMContentLoaded', function() {
    var testimonialCarousel = new bootstrap.Carousel(document.getElementById('testimonialCarousel'), {
      interval: 5000, // Change slide every 5 seconds
      ride: 'carousel'
    });
  });
</script>
<script src="./js/transition.js"></script>

</html>