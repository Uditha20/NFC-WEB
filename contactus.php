<?php
include "./include/header.php"
?>

  
    <div class="container-fluid mt-3">
      <div class="row hero-section align-items-center">
        <div class="col-md-6" style="padding-left: 20px">
          <div>
            <h2>Get in Touch</h2>
            <p>
              We're here to help. Contact us for any inquiries, support, or
              feedback.
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid mt-5">
      <div class="row d-flex justify-content-center">
        <div class="col-md-6 d-flex flex-column align-items-center">
          <div class="text-center">
            <small>Connect</small>
            <h2 class="mt-3">Get in Touch</h2>
            <p class="mt-3">
              Have a question or need assistance? We're here to help!
            </p>
          </div>
          <div class="mb-3" style="margin-top: 40px">
            <label for="">Name</label>
            <input
              type="email"
              class="form-control"
              id="exampleFormControlInput1"
              placeholder="Email Address"
              style="
                max-width: 100%;
                width: 400px;
                border-radius: 0;
                background-color: #000315;
                color: white;
              "
            />
          </div>
          <div class="mb-3">
            <label for="">Name</label>
            <input
              type="email"
              class="form-control"
              id="exampleFormControlInput1"
              placeholder="Email Address"
              style="
                max-width: 100%;
                width: 400px;
                border-radius: 0;
                background-color: #000315;
                color: white;
              "
            />
          </div>
          <div class="form-floating">
            <textarea
              class="form-control mb-3"
              placeholder="Leave a comment here"
              id="floatingTextarea2"
              style="
                height: 100px;
                width: 400px;
                background-color: #000315;
                color: white;
              "
            ></textarea>
            <label for="floatingTextarea2">Comments</label>
          </div>
          <div class="form-check">
            <input
              class="form-check-input"
              type="checkbox"
              value=""
              id="flexCheckDefault"
            />
            <label class="form-check-label" for="flexCheckDefault">
              I agree to the Terms
            </label>
          </div>
          <button
            type="button"
            class="px-4 py-2 me-2 mb-2 mb-sm-0 mt-3"
            style="background-color: #e7af41; color: white"
          >
            Send
          </button>
        </div>
      </div>
    </div>
    <div class="container-fluid mt-5">
      <div class="row align-items-center px-4 py-3">
        <div class="col-12 col-md-4 mb-4 mb-md-0">
          <div>
            <small style="color: #e7af41">Connect</small>
            <h2>Contact Information</h2>
            <p>Find our physical office locations and contact details below.</p>
          </div>
          <div class="contact-details mb-4 mt-5">
            <i class="bi bi-envelope-at-fill"></i>
            <p class="mt-2">Email</p>
            <p>Send us an email</p>
            <p>hello@manjithaaza.com</p>
          </div>
          <div class="contact-details mb-4">
            <i class="bi bi-telephone"></i>
            <p class="mt-2">Phone</p>
            <p>Call us for assistance</p>
            <p>+1 (555) 123-4567</p>
          </div>
          <div class="contact-details">
            <i class="bi bi-geo-alt"></i>
            <p class="mt-2">Office</p>
            <p>123 Main St, New York, NY 10001</p>
            <p>
              Get Directions
              <i class="bi bi-caret-right"></i>
            </p>
          </div>
        </div>
        <div
          class="col-12 col-md-8 d-flex justify-content-center justify-content-md-end"
        >
          <img
            src="./asset/img/about_pic1.png"
            class="img-fluid"
            alt="login Image"
            style="max-width: 100%; height: auto; max-height: 450px; width: 90%"
          />
        </div>
      </div>
    </div>

    <div class="carousel-inner">
      <!-- First item -->
      <div class="carousel-item active">
        <div class="container">
          <div class="row">
            <p class="text-center mt-5">Webflow</p>
            <p class="text-center">
              Manjithaaza's smart NFC cards have revolutionized the way I share
              my contact information. It's convenient, efficient, and
              eco-friendly.
            </p>
            <div class="text-center">
              <i class="bi bi-person-circle" style="font-size: 2.5rem"></i>
              <p class="mt-2" style="color:#e7af41;">John Doe</p>
              <p>CEO, XYZ Company</p>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php
include "./include/footer.php"

?>
