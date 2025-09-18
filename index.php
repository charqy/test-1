
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstName = trim($_POST['firstName'] ?? '');
    $lastName = trim($_POST['lastName'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');



    
    if (empty($firstName) || empty($lastName) || empty($email) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "please fill all the inputs";
        exit;
    }

    $mail = new PHPMailer(true);

    try {
        
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';       
        $mail->SMTPAuth = true;
        $mail->Username = 'achrafchari40@gmail.com';  
        $mail->Password = 'cldc swhj pxnv otyz';  
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        
        $mail->setFrom('achrafchari40@gmail.com', 'achraf');
        $mail->addAddress("achrafchari40@gmail.com"); 

        
        $mail->isHTML(true);
        $mail->Subject = 'new message ';
        $mail->Body = "
            <h2>sender :$firstName $lastName</h2>
            <p><b>email :</b> $email</p>
            <p><b>message :</b><br>" . nl2br(htmlspecialchars($message)) . "</p>
        ";

        $mail->send();
        echo "message sent";
    } catch (Exception $e) {
        echo "something went wrong" . $mail->ErrorInfo;
    }
} else {
    echo "erreur";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Portfolio - Achraf Ech-Charqy</title>
  <link rel="stylesheet" href="style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body style="font-family: 'Poppins', sans-serif;">

<!-- ✅ Navbar -->
<nav class="navbar navbar-expand-md py-3">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="img/fawziuiux.png" alt="Logo" class="img-fluid" style="max-height:50px;">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mainNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#about">About Me</a></li>
        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
        <li class="nav-item"><a class="nav-link" href="#Projects">Projects</a></li>
        <li class="nav-item"><a class="nav-link" href="#Testimonials">Testimonials</a></li>
        <li class="nav-item"><a class="nav-link" href="#Contact">Contact</a></li>
      </ul>
      <a href="CV professionnel noir simple (2).pdf" class="btn text-white px-3" style="background-color: rgba(253, 111, 0, 1); border-radius: 8px;">Download CV</a>
    </div>
  </div>
</nav>

<!-- ✅ Hero Section -->
<section class="py-5">
  <div class="container" id="home">
    <div class="row align-items-center">
      <div class="col-12 col-md-6">
        <h5>Hi, I am</h5>
        <h1 class="fw-bold" style="color: rgba(253, 111, 0, 1);">Achraf Ech-Charqy</h1>
        <h2>FULLSTACK</h2>
        <h2 class="ps-md-5">DEVELOPER</h2>
        <p class="mt-4">
          I am a passionate and versatile full-st ack web developer and designer with a deep love for creating intuitive, visually engaging, and high-performing websites and applications...
        </p>
        <a href="CV professionnel noir simple (2).pdf" class="btn text-white mt-3" style="background-color: rgba(253, 111, 0, 1); border-radius: 8px;">Hire Me</a>
      </div>
      <div class="col-12 col-md-6 text-center">
        <img src="img/dddddd.jpg" alt="" class="img-fluid">
      </div>
    </div>
  </div>
</section>

<!-- ✅ About Section -->
<section class="py-5">
  <div class="container" id="about">
    <div class="row align-items-center">
      <div class="col-12 col-md-6 order-md-1 order-sm-2">
        <img src="img/dddddd.jpg" alt="" class="img-fluid">
      </div>
      <div class="col-12 col-md-6 order-md-2 order-sm-1">
        <h2 style="color: rgba(253, 111, 0, 1);">About Me</h2>
        <p>
          I am a full-stack web developer and designer with experience in HTML, CSS, JavaScript, and PHP...
        </p>
        <div class="mb-3">
          <label class="fw-bold" style="color: rgba(253, 111, 0, 1);">HTML</label>
          <input type="range" class="form-range" value="100" disabled>
        </div>
        <div class="mb-3">
          <label class="fw-bold" style="color: rgba(253, 111, 0, 1);">JavaScript</label>
          <input type="range" class="form-range" value="75" disabled>
        </div>
        <div class="mb-3">
          <label class="fw-bold" style="color: rgba(253, 111, 0, 1);">CSS</label>
          <input type="range" class="form-range" value="100" disabled>
        </div>
        <div class="mb-3">
          <label class="fw-bold" style="color: rgba(253, 111, 0, 1);">PHP</label>
          <input type="range" class="form-range" value="50" disabled>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ✅ Services -->
<section class="py-5 text-center">
  <div class="container" id="services">
    <h1 style="color: rgba(253, 111, 0, 1);">Services</h1>
    <p>A web developer builds, maintains, and optimizes websites...</p>
    <div class="row g-4 mt-4">
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="card p-3 h-100">
          <img src="img/Untitled.png" class="card-img-top mx-auto" style="max-width:100px;" alt="">
          <div class="card-body">
            <h5 class="card-title">Maintenance</h5>
            <p class="card-text">Maintenance keeps a website secure, fast, and reliable...</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="card p-3 h-100">
          <img src="img/puzzle-icon-trendy-flat-style-60.png" class="card-img-top mx-auto" style="max-width:100px;" alt="">
          <div class="card-body">
            <h5 class="card-title">Compatibility Checks</h5>
            <p class="card-text">Ensure smooth performance across all devices and browsers.</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="card p-3 h-100">
          <img src="img/cloud-service-recovery-icon-vect.png" class="card-img-top mx-auto" style="max-width:100px;" alt="">
          <div class="card-body">
            <h5 class="card-title">Backup & Recovery</h5>
            <p class="card-text">Keep data safe with backups and quick recovery solutions.</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="card p-3 h-100">
          <img src="img/art-illustration-374289738 (1).png" class="card-img-top mx-auto" style="max-width:100px;" alt="">
          <div class="card-body">
            <h5 class="card-title">Web Design</h5>
            <p class="card-text">Create visually appealing, responsive, and user-friendly designs.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ✅ Projects -->
<section class="py-5 text-center">
  <div class="container" id="Projects">
    <h1 style="color: rgba(253, 111, 0, 1);">My Projects</h1>
    <p>Some of the websites, apps, and designs I’ve created...</p>
    <div class="btn-group mb-4 " style="gap: 20px;">
      <button class="btn btn-outline-dark" style="border-radius: 10px;">All</button>
      <button class="btn btn-outline-dark"style="border-radius: 10px;">HTML</button>
      <button class="btn btn-outline-dark"style="border-radius: 10px;">CSS</button>
      <button class="btn btn-outline-dark"style="border-radius: 10px;">JavaScript</button>
      <button class="btn btn-outline-dark"style="border-radius: 10px;">PHP</button>
    </div>
    <div class="row g-4">
      <div class="col-12 col-md-4">
        <div class="card h-100">
          <img src="img/Group 25.png" class="card-img-top" alt="">
          <div class="card-body">
            <h5>Project One</h5>
            <p>Lorem ipsum dolor sit amet consectetur.</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="card h-100">
          <img src="img/Group 26.png" class="card-img-top" alt="">
          <div class="card-body">
            <h5>Project Two</h5>
            <p>Lorem ipsum dolor sit amet consectetur.</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="card h-100">
          <img src="img/Group 27.png" class="card-img-top" alt="">
          <div class="card-body">
            <h5>Project Three</h5>
            <p>Lorem ipsum dolor sit amet consectetur.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ✅ Testimonials -->
<section class="py-5 text-center">
  <div class="container" id="Testimonials">
    <h1 style="color: rgba(253, 111, 0, 1);">Testimonials</h1>
    <p>See what satisfied customers say about their experience</p>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="d-flex flex-column flex-md-row align-items-center bg-light rounded p-4">
            <img src="img/1.png" class="img-fluid me-md-3 mb-3 mb-md-0" style="max-width:80px;">
            <p>"I had a fantastic experience with Achraf Charqy..."</p>
          </div>
        </div>
        <div class="carousel-item">
          <div class="d-flex flex-column flex-md-row align-items-center bg-light rounded p-4">
            <img src="img/2.png" class="img-fluid me-md-3 mb-3 mb-md-0" style="max-width:80px;">
            <p>"Thank you so much for your excellent service and support..."</p>
          </div>
        </div>
        <div class="carousel-item">
          <div class="d-flex flex-column flex-md-row align-items-center bg-light rounded p-4">
            <img src="img/3.png" class="img-fluid me-md-3 mb-3 mb-md-0" style="max-width:80px;">
            <p>"I am very impressed with Achraf Ech Charqy..."</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
  </div>
</section>

<!-- ✅ Contact -->
<section class="contact-section" id="contact">
  <div class="container" id="Contact">
    <h1 style="color: rgba(253, 111, 0, 1);">Let's Design Together</h1>
    <p>If you need my help, feel free to send me a message anytime.</p>
    
    <div class="row justify-content-center">
      <div class="col-12 col-lg-8">
        <div class="contact-form-container">
          <form id="contactForm" method="POST" >
            <div class="row">
              <div class="col-12 col-md-6">
                <div class="form-group">
                  <label for="firstName" class="form-label">First Name</label>
                  <input type="text" class="form-control" id="firstName" placeholder="Enter your first name" required name="firstName">
                </div>
              </div>
              <div class="col-12 col-md-6">
                <div class="form-group">
                  <label for="lastName" class="form-label">Last Name</label>
                  <input type="text" class="form-control" id="lastName" placeholder="Enter your last name" required name="lastName">
                </div>
              </div>
            </div>
            
            <div class="form-group">
              <label for="email" class="form-label">Email Address</label>
              <input type="email" class="form-control" id="email" placeholder="Enter your email address" required name="email">
            </div>
            
            <div class="form-group">
              <label for="message" class="form-label">Your Message</label>
              <textarea class="form-control" id="message" rows="5" placeholder="Type your message here..." required name="message"></textarea>
            </div>
            
            <button type="submit" class="submit-btn">Send Message</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ✅ Footer -->
<footer class="py-4 bg-light">
  <div class="container text-center">
    <ul class="nav justify-content-center">
      <li class="nav-item"><a class="nav-link" href="#Home">Home</a></li>
      <li class="nav-item"><a class="nav-link" href="#About">About Me</a></li>
      <li class="nav-item"><a class="nav-link" href="#Services">Services</a></li>
      <li class="nav-item"><a class="nav-link" href="#Projects">Projects</a></li>
      <li class="nav-item"><a class="nav-link" href="#Testimonials">Testimonials</a></li>
      <li class="nav-item"><a class="nav-link" href="#Contact">Contact</a></li>
    </ul>
    <p class="mt-3 mb-0">&copy; 2025 Achraf Ech-Charqy. All rights reserved.</p>
  </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
<!--
<script>
  // Form validation and submission
  document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Basic validation
    const firstName = document.getElementById('firstName');
    const lastName = document.getElementById('lastName');
    const email = document.getElementById('email');
    const message = document.getElementById('message');
    
    let isValid = true;
    
    if (!firstName.value.trim()) {
      isValid = false;
      highlightError(firstName);
    } else {
      removeHighlight(firstName);
    }
    
    if (!lastName.value.trim()) {
      isValid = false;
      highlightError(lastName);
    } else {
      removeHighlight(lastName);
    }
    
    if (!email.value.trim() || !isValidEmail(email.value)) {
      isValid = false;
      highlightError(email);
    } else {
      removeHighlight(email);
    }
    
    if (!message.value.trim()) {
      isValid = false;
      highlightError(message);
    } else {
      removeHighlight(message);
    }
    
    if (isValid) {
      // Here you would normally send the form data to a server
      alert('Thank you for your message! I will get back to you soon.');
      this.reset();
    }
  });
  
  function isValidEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
  }
  
  function highlightError(element) {
    element.style.borderColor = 'red';
  }
  
  function removeHighlight(element) {
    element.style.borderColor = '#ddd';
  }
</script>

-->

</body>
</html>
