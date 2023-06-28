<!DOCTYPE html>
<html lang="en">
  <head>
  <script>
    function showSuccessMessage() {
      alert("Pesan Telah Dikirim.");
    }
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      $("form").submit(function(event) {
        event.preventDefault(); // Mencegah pengiriman form secara default

        var formData = $(this).serialize(); // Mengambil data form

        $.ajax({
          type: "POST",
          url: "process_contact.php",
          data: formData,
          success: function(response) {
            if (response.success) {
              alert(response.message); // Menampilkan pesan sukses
              // Reset form
              $("form")[0].reset();
            } else {
              alert(response.message); // Menampilkan pesan kesalahan
            }
          }
        });
      });
    });
  </script>
  <script type="text/javascript">
    function redirectToEmail() {
      window.location.href = "mailto:ilhamsyarief21092002@gmail.com";
    }
  </script>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio Website</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="./css/style.css" />
  </head>
  <style>
        .footer-newstletter {
            display: none;
        }
    </style>
  <body>
    <main>
      <header id="header">
        <div class="overlay overlay-lg">
          <img src="./img/shapes/square.png" class="shape square" alt="" />
          <img src="./img/shapes/circle.png" class="shape circle" alt="" />
          <img
            src="./img/shapes/half-circle.png"
            class="shape half-circle1"
            alt=""
          />
          <img
            src="./img/shapes/half-circle.png"
            class="shape half-circle2"
            alt=""
          />
          <img src="./img/shapes/x.png" class="shape xshape" alt="" />
          <img src="./img/shapes/wave.png" class="shape wave wave1" alt="" />
          <img src="./img/shapes/wave.png" class="shape wave wave2" alt="" />
          <img src="./img/shapes/triangle.png" class="shape triangle" alt="" />
          <img src="./img/shapes/letters.png" class="letters" alt="" />
          <img src="./img/shapes/points1.png" class="points points1" alt="" />
        </div>

        <nav>
          <div class="container">
            <div class="logo">
              <img src="" alt="" />
            </div>

            <div class="links">
              <ul>
                <li>
                  <a href="#header">Beranda</a>
                </li>
                <li>
                  <a href="#services">Minat</a>
                </li>
                <li>
                  <a href="#portfolio">Portfolio</a>
                </li>
                <li>
                  <a href="#about">Tentang Saya</a>
                </li>
                <li>
                  <a href="#contact">Kontak</a>
                </li>
                <li>
                <li>
                  <a href="https://github.com/ilhamsyarief21">My Github</a>
                </li>
                <<li>
                  <a href="#" class="active" onclick="redirectToEmail()">Rekrut Saya!</a>
                </li>
              </ul>
            </div>

            <div class="hamburger-menu">
              <div class="bar"></div>
            </div>
          </div>
        </nav>

        <div class="header-content">
          <div class="container grid-2">
            <div class="column-1">
              <h1 class="header-title">Ilham Syarief
              </h1>
              <p class="text">
                Halo, nama saya Ilham Syarief Roem Mohamad. Saya seorang FrontEnd Developer dan UI/UX Designer yang memiliki ketertarikan dalam mengembangkan antarmuka pengguna yang menarik dan responsif menggunakan HTML, CSS, PHP dan JavaScript.
              </p>
              <a href="https://drive.google.com/file/d/1g89fdg4cGh5EihUwmmdOpXjyk46VJqx4/view?usp=sharing" class="btn">Download CV</a>
            </div>

            <div class="column-2 image">
              <img
                src="./img/shapes/points2.png"
                class="points points2"
                alt=""
              />
              <img src="./img/ilham.png" class="img-element z-index" alt="" />
            </div>
          </div>
        </div>
      </header>

      <section class="services section" id="services">
        <div class="container">
          <div class="section-header">
            <h3 class="title" data-title="Yang Saya">Minati</h3>
            <p class="text">
              Ini beberapa hal yang saya minati!
            </p>
          </div>

          <div class="cards">
            <div class="card-wrap">
              <img
                src="./img/shapes/points3.png"
                class="points points1 points-sq"
                alt=""
              />
              <div class="card" data-card="UI/UX">
                <div class="card-content z-index">
                  <img src="./img/design-icon.png" class="icon" alt="" />
                  <h3 class="title-sm">Web Design</h3>
                  <p class="text">
                    Mengapa saya minat dengan Web Design? Karena Web design memberikan kebebasan untuk mengekspresikan kreativitas secara visual. Dalam mengembangkan tata letak, pemilihan warna, penggunaan tipografi, dan elemen desain lainnya, Anda dapat menghasilkan desain yang unik dan menarik.

                  </p>
            
                </div>
              </div>
            </div>

            <div class="card-wrap">
              <div class="card" data-card="Code">
                <div class="card-content z-index">
                  <img src="./img/code-icon.png" class="icon" alt="" />
                  <h3 class="title-sm">Web Development</h3>
                  <p class="text">
                    Mengapa saya minat dengan Web Development? Karena Hampir setiap perusahaan atau organisasi membutuhkan kehadiran online yang kuat dan menginginkan situs web yang responsif dan fungsional. Dengan keterampilan web development, Saya memiliki peluang karir yang luas dan peluang untuk mencari pekerjaan yang menarik.
                  </p>
            
                </div>
              </div>
            </div>

            <div class="card-wrap">
              <img
                src="./img/shapes/points3.png"
                class="points points2 points-sq"
                alt=""
              />
              <div class="card" data-card="App">
                <div class="card-content z-index">
                  <img src="./img/0.png" class="icon" alt="" />
                  <h3 class="title-sm">Graphic Design</h3>
                  <p class="text">
                    Mengapa saya suka dengan Graphic Design? Saya suka dengan graphic designer karena mereka mampu menggabungkan imajinasi dan keterampilan desain untuk menciptakan karya yang memukau, menginspirasi, dan mempengaruhi orang lain secara visual.
                  </p>
            
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="portfolio section" id="portfolio">
        <div class="background-bg">
          <div class="overlay overlay-sm">
            <img
              src="./img/shapes/half-circle.png"
              class="shape half-circle1"
              alt=""
            />
            <img
              src="./img/shapes/half-circle.png"
              class="shape half-circle2"
              alt=""
            />
            <img src="./img/shapes/square.png" class="shape square" alt="" />
            <img src="./img/shapes/wave.png" class="shape wave" alt="" />
            <img src="./img/shapes/circle.png" class="shape circle" alt="" />
            <img
              src="./img/shapes/triangle.png"
              class="shape triangle"
              alt=""
            />
            <img src="./img/shapes/x.png" class="shape xshape" alt="" />
          </div>
        </div>

        <div class="container">
          <div class="section-header">
            <h3 class="title" data-title="My works">Portfolio</h3>
          </div>

          <div class="section-body">
            <div class="filter">
              <button class="filter-btn active" data-filter="*">All</button>
            </div>

            <div class="grid">
              <div class="grid-item logo-design">
                <div class="gallery-image">
                  <img src="./img/portfolio/port1.png" alt="" />
                  <div class="img-overlay">
                    <div class="plus"></div>
                    <div class="img-description">
                      <h3>Web Development</h3>
                      <h5>Dashboard Penyaluran Beras Dari Pos Indonesia</h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="grid-item webdev">
                <div class="gallery-image">
                  <img src="./img/portfolio/port8.png" alt="" />
                  <div class="img-overlay">
                    <div class="plus"></div>
                    <div class="img-description">
                      <h3>UI/UX Design</h3>
                      <h5>UI/UX Website Pencari Olahraga</h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="grid-item ui webdev">
                <div class="gallery-image">
                  <img src="./img/portfolio/port3.png" alt="" />
                  <div class="img-overlay">
                    <div class="plus"></div>
                    <div class="img-description">
                      <h3>UI/UX Design</h3>
                      <h5>Easy Travel App</h5>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="grid-item ui">
                <div class="gallery-image">
                  <img src="./img/portfolio/port4.png" alt="" />
                  <div class="img-overlay">
                    <div class="plus"></div>
                    <div class="img-description">
                      <h3>UI / UX Design</h3>
                      <h5>CMC Express App</h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="grid-item ui">
                <div class="gallery-image">
                  <img src="./img/portfolio/port10.png" alt="" />
                  <div class="img-overlay">
                    <div class="plus"></div>
                    <div class="img-description">
                      <h3>Web Development</h3>
                      <h5>Soon!</h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="grid-item ui">
                <div class="gallery-image">
                  <img src="./img/portfolio/port10.png" alt="" />
                  <div class="img-overlay">
                    <div class="plus"></div>
                    <div class="img-description">
                      <h3>UI / UX Design</h3>
                      <h5>Soon!</h5>
                    </div>
                  </div>
                </div>
              </div>
            <div class="more-folio">
              <a href="#" class="btn">More Folio</a>
            </div>
          </div>
        </div>
      </section>

      <section class="about section" id="about">
        <div class="container">
          <div class="section-header">
            <h3 class="title" data-title="Siapa Saya">Tentang Saya</h3>
          </div>

          <div class="section-body grid-2">
            <div class="column-1">
              <h3 class="title-sm">Halo, Saya</h3>
              <p class="text">
                Saya adalah seseorang yang penasaran dan antusias tentang desain dan web development. Saya selalu bersemangat untuk belajar hal-hal baru dalam bidang ini dan terus mengikuti perkembangan terbaru. Saya senang menjelajahi konsep desain yang kreatif dan mengimplementasikannya dalam pembuatan situs web yang menarik dan fungsional. Selain itu, saya juga sangat tertarik dengan inovasi-inovasi terbaru dalam industri teknologi. Kombinasi antara keinginan saya untuk terus berkembang dan rasa keterbukaan terhadap hal-hal baru membuat saya senang dalam menjelajahi dunia desain dan web development
              </p>
              <div class="skills">
                <div class="skill html">
                  <h3 class="skill-title">PHP</h3>
                  <div class="skill-bar">
                    <div class="skill-progress" data-progress="85%"></div>
                  </div>
                </div>
                <div class="skill css">
                  <h3 class="skill-title">CSS</h3>
                  <div class="skill-bar">
                    <div class="skill-progress" data-progress="70%"></div>
                  </div>
                </div>
                <div class="skill js">
                  <h3 class="skill-title">JavaScript</h3>
                  <div class="skill-bar">
                    <div class="skill-progress" data-progress="60%"></div>
                  </div>
                </div>
              </div>
           
            </div>

            <div class="column-2 image">
              <img src="./img/shapes/points4.png" class="points" alt="" />
              <img src="./img/ilham.png" class="z-index" alt="" />
            </div>
          </div>
        </div>
      </section>

      <section class="records">
        <div class="overlay overlay-sm">
          <img src="./img/shapes/square.png" alt="" class="shape square1" />
          <img src="./img/shapes/square.png" alt="" class="shape square2" />
          <img src="./img/shapes/circle.png" alt="" class="shape circle" />
          <img
            src="./img/shapes/half-circle.png"
            alt=""
            class="shape half-circle"
          />
          <img src="./img/shapes/wave.png" alt="" class="shape wave wave1" />
          <img src="./img/shapes/wave.png" alt="" class="shape wave wave2" />
          <img src="./img/shapes/x.png" alt="" class="shape xshape" />
          <img src="./img/shapes/triangle.png" alt="" class="shape triangle" />
        </div>

        <div class="container">
          <div class="wrap">
            <div class="record-circle">
              <h2 class="number" data-num="4">0</h2>
              <h4 class="sub-title">Projects</h4>
            </div>
          </div>

          <div class="wrap">
            <div class="record-circle active">
              <h2 class="number" data-num="8">0</h2>
              <h4 class="sub-title">Repositories</h4>
            </div>
          </div>

          <div class="wrap">
            <div class="record-circle">
              <h2 class="number" data-num="7">0</h2>
              <h4 class="sub-title">College Student ssemester</h4>
            </div>
          </div>

          <div class="wrap">
            <div class="record-circle">
              <h2 class="number" data-num="106">0</h2>
              <h4 class="sub-title">TAK</h4>
            </div>
          </div>
        </div>
      </section>

      <!-- <section class="blog section">
        <div class="container">
          <div class="section-header">
            <h3 class="title" data-title="Last News">My Gallery</h3>
            <p class="text">
            Karya desain aplikasi yang saya ciptakan adalah sebuah antarmuka yang intuitif, menarik, dan responsif, yang dirancang untuk meningkatkan pengalaman pengguna.
            </p>
          </div>

          <div class="blog-wrapper">
            <div class="blog-wrap">
              <img
                src="./img/shapes/points3.png"
                alt=""
                class="points points-sq"
              />

              <div class="blog-card">
                <div class="blog-image">
                  <img src="./img/blog1.png" alt="" />
                </div>

                <div class="blog-content">
                  <div class="blog-info">
                    <h5 class="blog-date">March, 19 2020</h5>
                    <h5 class="blog-user"><i class="fas fa-user"></i>Admin</h5>
                  </div>
                  <h3 class="title-sm">This is a short title</h3>
                  <p class="blog-text">
                    Lorem ipsum, dolor sit amet elit. rem poimus? Tempora
                    expedita eos autem! Lorem ipsum, dolor sit met.
                  </p>
             
                </div>
              </div>
            </div>

            <div class="blog-wrap">
              <div class="blog-card">
                <div class="blog-image">
                  <img src="./img/blog2.png" alt="" />
                </div>

                <div class="blog-content">
                  <div class="blog-info">
                    <h5 class="blog-date">August, 02 2020</h5>
                    <h5 class="blog-user"><i class="fas fa-user"></i>Admin</h5>
                  </div>
                  <h3 class="title-sm">This is a short title</h3>
                  <p class="blog-text">
                    Lorem ipsum, dolor sit amet elit. Sint atque culpa repellat
                    sunt sit amet nobis! Lorem ipsum dolor sit amet.
                  </p>
            
                </div>
              </div>
            </div>

            <div class="blog-wrap">
              <div class="blog-card">
                <div class="blog-image">
                  <img src="./img/blog3.png" alt="" />
                </div>

                <div class="blog-content">
                  <div class="blog-info">
                    <h5 class="blog-date">December, 12 2020</h5>
                    <h5 class="blog-user"><i class="fas fa-user"></i>Admin</h5>
                  </div>
                  <h3 class="title-sm">This is a short title</h3>
                  <p class="blog-text">
                    Lorem ipsum dolor sit, amet elit. enim numquam, laborum
                    earum? Lorem ipsum dolor sit amet.
                  </p>
            
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> -->

      <section class="contact" id="contact">
        <div class="container">
          <div class="contact-box">
            <div class="contact-info">
              <h3 class="title">Get in touch</h3>
              <p class="text">
              Apabila Anda membutuhkan saluran komunikasi yang dapat Anda gunakan untuk menghubungi saya. Anda dapat mengirim pesan kepada saya melalui email di alamat yang telah saya berikan atau dapat mengirim kontak di form yang telah saya sediakan.
              </p>
              <div class="information-wrap">
                <div class="information">
                  <div class="contact-icon">
                    <i class="fas fa-map-marker-alt"></i>
                  </div>
                  <p class="info-text">Bandung, Indonesia</p>
                </div>

                <div class="information">
                  <div class="contact-icon">
                    <i class="fas fa-paper-plane"></i>
                  </div>
                  <p class="info-text">ilhamsyarief21092002@gmail.com</p>
                </div>

              </div>
            </div>

            <div class="contact-form">
              <h3 class="title">Contact me</h3>
              <form method="POST" action="process_contact.php" onsubmit="showSuccessMessage()">
                <div class="row">
                  <input type="text" class="contact-input" name="firstName" placeholder="First Name" required />
                  <input type="text" class="contact-input" name="lastName" placeholder="Last Name" required />
                </div>

                <div class="row">
                  <input type="text" class="contact-input" name="phone" placeholder="Phone" required />
                  <input type="email" class="contact-input" name="email" placeholder="Email" required />
                </div>

                <div class="row">
                  <textarea name="message" class="contact-input textarea" placeholder="Message" required></textarea>
                </div>
                <button type="submit" class="btn">Send</button>
              </form>
          </div>
          </div>
        </div>
      </section>

      <section class="hireme" id="hireme">
        <div class="container">
          <h3 class="title">Ayo ngobrol tentang project!</h3>
          <p class="text">
          "Dalam dunia digital yang berkembang pesat, pengalaman pengguna dan tampilan yang menarik sangatlah penting. Sebagai seorang ahli UI/UX dan pengembangan web, saya memiliki pengetahuan yang mendalam dalam menciptakan produk yang memikat pengguna. Ayo kita berbicara tentang proyek ini dan menciptakan sesuatu yang luar biasa bersama."
          </p>
          <a href="#" class="btn" onclick="redirectToEmail()" >Rekrut Saya!</a>
        </div>
      </section>
    </main>

    <footer class="footer">
      <div class="container">
        <div class="grid-4">
          <div class="grid-4-col footer-about">
            <h3 class="title-sm">About</h3>
            <p class="text">
            Halo, saya Ilham Syarief Roem Mohamad. yang memiliki ketertarikan dalam mengembangkan antarmuka pengguna yang menarik dan responsif.
            </p>
          </div>

          <div class="grid-4-col footer-links">
            <h3 class="title-sm">Links</h3>
            <ul>
              <li>
                <a href="#services">Minat</a>
              </li>
              <li>
                <a href="#portfolio">Portfolio</a>
              </li>
              <li>
                <a href="#about">Tentang Saya</a>
              </li>
              
              <li>
                <a href="#contact">Kontak</a>
              </li>
            </ul>
          </div>

          <div class="grid-4-col footer-links">
            <h3 class="title-sm">Minat</h3>
            <ul>
              <li>
                <a href="#">Web Design</a>
              </li>
              <li>
                <a href="#">Web Dev</a>
              </li>
              <li>
                <a href="#">UI/UX Design</a>
              </li>
            </ul>
          </div>

          <div class="grid-4-col footer-newstletter">
            <h3 class="title-sm">Update Terbaru</h3>
            <p class="text">
              Kirim Email Dibawah Ini 
            </p>
            <div class="footer-input-wrap">
              <input type="email" class="footer-input" placeholder="Email" />
              <a href="#" class="input-arrow">
                <i class="fas fa-angle-right"></i>
              </a>
            </div>
          </div>
        </div>
   


        <div class="bottom-footer">
          <div class="copyright">
            <p class="text">
              Copyright&copy;2023 All rights reserved | Made by
              <span class="split-text" data-text="FORUM"><a
                href="https://github.com/ilhamsyarief21" > Ilham Syarief Roem Mohamad </a></span>
             
            </p>
          </div>

          <div class="followme-wrap">
            <div class="followme">
              <h3>Follow me</h3>
              <span class="footer-line"></span>
              <div class="social-media">
                <a href="https://www.instagram.com/ilhamsyarief21/">
                  <i class="fab fa-instagram"></i>
                </a>
                <a href="linkedin.com/in/ilham-syarief-roem-mohamad-4a5250208/">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </div>
            </div>

            <div class="back-btn-wrap">
              <a href="#" class="back-btn">
                <i class="fas fa-chevron-up"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./js/isotope.pkgd.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="./js/app.js"></script>
  </body>
</html>
