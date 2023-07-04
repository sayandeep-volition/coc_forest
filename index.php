<?php
echo isset($_SESSION['value']);
  session_start();
  if (isset($_SESSION['value'])) {
    $showComponent = $_SESSION['value'];
    echo $showComponent; 
    if ($showComponent) {
      echo "<script type=\"text/javascript\">
                                  window.onload = function() {
                                    document.getElementById('success-msg').style.display = 'block';
                                    document.getElementById('error-msg').style.display = 'none';
                                  };
                                </script>";
    } else {
      echo "<script type=\"text/javascript\">
                                  window.onload = function() {
                                    document.getElementById('success-msg').style.display = 'none';
                                    document.getElementById('error-msg').style.display = 'block';
                                  };
                                </script>";
    }
  }
  echo "<script>console.log(\"Show: $showComponent\");</script>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Forest Eco Certification</title>
    <meta name="description"
        content="Get FSC Coc Certification for your company with one of the world's most trusted Certification Bodies in India. Contact us today.">
    <meta name="keywords"
        content="fsc certification, fsc certification in india, fsc coc certification, fsc chain of custody, fsc standards, fsc consultants, fsc certification bodies in india">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: eNno
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/enno-free-simple-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">

            <a href="https://coc.forestecocertification.com/" aria-label="forest-eco-cert-logo" class="logo"><img
                    src="assets/img/forest-eco-cert-logo.png" alt="forest-eco-cert-logo" class="img-fluid">

                <nav id="navbar" class="navbar">

                </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div
                    class="col-lg-12 col-md-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1>Open Doors to International Markets with FSC CoC Certification for your Company</h1>
                    <h2>Ensure Compliance and Gain Trust with FSC Certification from us.</h2>
                    <div class="d-flex">
                        <a href="tel:+919051555685" class="btn-get-started scrollto">SPEAK TO US</a>
                    </div>
                </div>

            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">


        <!-- ======= About Section ======= -->
        <section id="aboutcon" class="contacts">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6 pt-4 pt-lg-0  content">
                        <h3>Why choose us for FSC Certification?</h3>
                        <p></p>
                        <ul>
                            <li><span style="color:green; font-weight:900;">&check;</span> Accredited certification body
                            </li>
                            <li><span style="color:green; font-weight:900;">&check;</span> Global presence</li>
                            <li><span style="color:green; font-weight:900;">&check;</span> Quick response</li>
                            <li><span style="color:green; font-weight:900;">&check;</span> Expedited certification
                                process</li>
                            <li><span style="color:green; font-weight:900;">&check;</span> Unparalleled auditing skills
                            </li>
                            <li><span style="color:green; font-weight:900;">&check;</span> Process oriented</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 content">
                        <center>
                            <h3>Get in touch today</h3>
                        </center>
                        <form action="contact.php" method="post" role="form" class="php-email-form">
                            <div class="form-group mt-3">
                                <label for="name">Name*</label>
                                <input type="text" name="name" class="form-control" id="name" required>
                            </div>
                            <div class="form-group mt-3">
                                <label for="company_name">Company Name*</label>
                                <input type="text" class="form-control" name="company_name" id="company_name" required>
                            </div>
                            <div class="form-group mt-3">
                                <label for="phone_number">Phone Number*</label>
                                <input type="number" class="form-control" name="phone_number" id="phone_number"
                                    required>
                            </div>
                            <div class="form-group mt-3">
                                <label for="email">Email*</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                            <div class="form-group mt-3">
                                <label for="message">Message*</label>
                                <textarea class="form-control" name="message" rows="3" required></textarea>
                            </div>
                            <!-- To Dynamically show or hide the below component | Edited by Imon -->

                            <div class="my-3">
                                <div id="success-msg" class="sent-message">We've received your query. We will contact
                                    you soon.</div>


                                <div class="my-3">
                                    <div id="error-msg" class="sent-message">Unexpected error occoured</div>
                                </div>
                                <!-- Edited by Imon (End) -->
                                <p>I confirm that I have read and agree to the <a
                                        href="https://forestecocertification.com/terms-of-service/">terms of service</a>
                                    and <a href="https://forestecocertification.com/privacy-policy/">privacy policy</a>.
                                </p>
                                <div class="text-center"><button type="submit">SEND MESSAGE</button></div>
                        </form>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->



        <!-- ======= About Section ======= -->
        <section id="custabout" class="about">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12 col-sm-6 col-md-6 pt-4 pt-lg-0 content">
                        <h3>Discover the Benefits of Choosing us for FSC Certification</h3>
                        <h4><strong>FSC Certification Audits</strong></h4>

                        <p>
                            We are one of the leading certification bodies offering FSC Certification in India. A
                            company with global presence, and
                            impeccable record of delivering FSC certification India. We have carried more than a
                            thousand FSC CoC audits in India.
                        </p>
                        <h4><strong>FSC Pre Assessment</strong></h4>
                        <p>
                            We offer FSC pre-assessments, which includes training on FSC Chain of Custody & Trademark
                            standards. The FSC CoC
                            training conducted by us, will ensure, you get trained by the most competent FSC lead
                            auditors.

                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->




        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>FAQ</h2>

                </div>

                <div class="accordion" id="accordionExample">


                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed cusacc" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="background: #0a704b;
                        color: #fff;">
                                About FSC
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Forest Stewardship Council (FSC) is a globally recognised certification system with
                                    million hectares of
                                    forestland
                                    certified under its forest conservation standards. FSC uses a voluntary,
                                    <b>market-based system</b> in which
                                    forests, companies
                                    anyway associated to timber related products are audited against principles and
                                    criteria of FSC. The
                                    performance-based
                                    standards encompass environmental, social and economic values, and are framed to
                                    ensure that the forests are
                                    managed
                                    sustainably.</p>


                                <p>FSC ensures <b>traceability of products</b> from the forests to the point of sale.
                                    Products that are
                                    manufactured from
                                    responsibly harvested forests are identified with the FSC logo, which is considered
                                    the “gold standard” of
                                    forest
                                    certification by major environmental groups.
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed cusacc" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive" style="background: #0a704b;
                        color: #fff;">
                                What are the different types of FSC Certifications available?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>The business owners depending on their operations and product can avail
                                    certifications to establish
                                    stewardship.</p>

                                <p>The FSC offers three types of certificates:</p>
                                <ul>
                                    <li> FSC Forest Management (FM)</li>
                                    <li>FSC Chain of Custody (CoC)</li>
                                    <li>Control Wood (CW)</li>
                                </ul>


                            </div>
                        </div>
                    </div>



                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="background: #0a704b;
                        color: #fff;">
                                How to get FSC Certification in India?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Contact us. We are one of the leading FSC Certification Bodies in India, offering
                                    wide range of sustainable wood
                                    certification audits including:</p>

                                <ul>
                                    <li>FSC Chain of Custody Certification</li>
                                    <li>FSC Forest Management Certification</li>
                                    <li>Controlled Wood Certification</li>
                                </ul>

                            </div>
                        </div>
                    </div>


                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed cusacc" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix" style="background: #0a704b;
                        color: #fff;">
                                Cost of getting FSC CoC certificate
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Cost of getting an FSC certificate varies from company to company, depending on their
                                    operations, turnover,
                                    number of
                                    locations a company is present in. Request an application form to get the fee
                                    estimate for your company.</p>


                            </div>
                        </div>
                    </div>



                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed cusacc" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="background: #0a704b;
                        color: #fff;">
                                My supplier is FSC certified, do I still need FSC Certification?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Yes, in most cases. Reach out to us, to understand the applicability and FSC
                                    certification requirements for your
                                    company.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed cusacc" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"
                                style="background: #0a704b;
                        color: #fff;">
                                Do I need to engage FSC certification consultants?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Certification Bodies offering FSC certifications assess whether a company meets the
                                    requirements laid down in the FSC
                                    standards. Some basic requirements are having a CoC manual which lays down the
                                    procedure a company plans to follow to
                                    meet the requirements of the FSC standards.</p>
                            </div>
                        </div>
                    </div>




                </div>



            </div>
        </section><!-- End Services Section -->

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container">
                <div class="text-center">
                    <h3>Achieve Traceability and Sustainability with FSC CoC Certification</h3>
                    <p> FSC CoC (Chain of Custody) Certification is available to a wide range of organizations involved
                        in the processing,
                        manufacturing, trading, and distribution of forest products. Get FSC CoC Certified Today and
                        Demonstrate Your Commitment
                        to Sustainable Practices.</p>
                    <a class="cta-btn" href="#aboutcon">Contact us</a>
                </div>

            </div>
        </section><!-- End Cta Section -->



    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">

            <div class="container">


                <div class="row ">

                    <div class="col-lg-4 col-sm-4 d-flex align-items-stretch justify-content-center">

                        <label>

                            <strong>Email:</strong> &nbsp; <a
                                href="mailto:info@forestecocertification.com">info@forestecocertification.com</a>
                        </label>




                    </div>

                    <div class="col-lg-4 col-sm-4 d-flex align-items-stretch justify-content-center">




                        <label>

                            &nbsp;
                        </label>





                    </div>
                    <div class="col-lg-4 col-sm-4 d-flex align-items-stretch justify-content-center">



                        <label>

                            <strong>Phone:</strong> &nbsp; <a href="tel:+919051555685">+91-9051-555-685</a></label>



                    </div>
                </div>

            </div>
        </div>

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                <center>&copy; 2023 Copyright <strong><span>Forest Eco Certification</span></strong>. All Rights
                    Reserved |

                    <a href="https://forestecocertification.com/privacy-policy/">Privacy Policy</a> |
                    <a href="https://forestecocertification.com/terms-of-service/">Terms of Service</a>

                </center>

            </div>
            <div class="credits">


            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i>&uarr;</i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>