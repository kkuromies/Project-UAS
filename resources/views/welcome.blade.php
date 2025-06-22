<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ruang Baca</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        scroll-behavior: smooth;
        font-family: "Jost", sans-serif;
        list-style: none;
        text-decoration: none;
    }

    header {
        position: fixed;
        width: 100%;
        top: 0;
        right: 0;
        z-index: 1000;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 20px 10%;
    }

    .logo img {
        max-width: 120px;
        height: auto;
    }

    .navmenu {
        display: flex;
    }

    .navmenu a {
        color: #2c2c2c;
        font-size: 16px;
        padding: 10px 20px;
        font-weight: 400;
        transition: all 0.42s ease;
    }

    .navmenu a:hover {
        color: #ee1c47;
    }

    .nav-icon {
        display: flex;
        align-items: center;
    }

    .nav-icon i {
        margin-right: 20px;
        color: #2c2c2c;
        font-size: 25px;
        font-weight: 400;
        transition: all 0.42s ease;
    }

    .nav-icon i:hover {
        transform: scale(1, 1);
        color: #ee1c47;
    }

    #menu-icon {
        font-size: 35px;
        color: #2c2c2c;
        z-index: 10001;
        cursor: pointer;
    }

    section {
        padding: 5px 10%;
    }

    .main-home {
        width: 100%;
        height: 100vh;
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        align-items: center;
    }

    .main-text h5 {
        color: #ee1c47;
        font-size: 16px;
        text-transform: capitalize;
        font-weight: 500;
    }

    .main-text h1 {
        color: #000;
        font-size: 65px;
        text-transform: capitalize;
        line-height: 1.1;
        font-weight: 600;
        margin: 6px 0 10px;
    }

    .main-text p {
        color: #333c56;
        font-size: 20px;
        font-style: italic;
        margin-bottom: 20px;
    }

    .main-btn {
        display: inline-block;
        color: #111;
        font-size: 16px;
        font-weight: 500;
        text-transform: capitalize;
        border: 2px solid #111;
        padding: 12px 25px;
        transition: all 0.42s ease;
    }

    .main-btn:hover {
        background-color: #000;
        color: #fff;
    }

    .main-btn i {
        vertical-align: middle;
    }

    .down-arrow {
        position: absolute;
        top: 85%;
        right: 11%;
    }

    .down i {
        font-size: 30px;
        color: #2c2c2c;
        border: 2px solid #2c2c2c;
        border-radius: 50px;
        padding: 12px 12px;
    }

    .down i:hover {
        background-color: #2c2c2c;
        color: #fff;
        transition: all 0.42s ease;
    }

    header.sticky {
        background: #fff;
        padding: 20px 10%;
        box-shadow: 0px 0px 10px rgb(0 0 0 / 10%);
    }

    /* trending-section-css */
    .center-text h2 {
        color: #111;
        font-size: 28px;
        text-transform: capitalize;
        text-align: center;
        margin-bottom: 30px;
    }

    .center-text span {
        color: #ee1c47;
    }

    .products {
        display: grid;
        grid-template-columns: auto auto auto auto;
        gap: 2rem;
        padding: 20px 0;
        margin: 0 auto;
        max-width: 500px;
    }

    /* mobile view */
    @media only screen and (max-width: 600px) {
        .products {
            display: grid;
            grid-template-columns: auto auto;
            gap: 2rem;
        }
    }

    .row {
        position: relative;
        transition: all 0.4s;
    }

    .row img {
        width: 100%;
        height: auto;
        transition: all 0.4s;
    }

    .row img:hover {
        transform: scale(0.9);
    }

    .product-text h5 {
        position: absolute;
        top: 13px;
        left: 13px;
        color: #fff;
        font-size: 12px;
        font-weight: 500;
        text-transform: uppercase;
        background-color: #27b737;
        padding: 3px 10px;
        border-radius: 2px;
    }

    .heart-icon {
        position: absolute;
        right: 0;
        font-size: 20px;
    }

    .heart-icon:hover {
        color: #ee1c47;
    }

    .rating i {
        color: #ff8c00;
        font-size: 18px;
    }

    .price h4 {
        color: #111;
        font-size: 16px;
        text-transform: capitalize;
        font-weight: 400;
    }

    .price p {
        color: #151515;
        font-size: 14px;
        font-weight: 600;
    }

    /* updare-section-css */
    .up-center-text h2 {
        text-align: center;
        color: #111;
        font-size: 25px;
        text-transform: capitalize;
        font-weight: 700;
        margin-bottom: 30px;
    }

    .cart img {
        width: 380px;
        height: auto;
        border-radius: 5px;
    }

    .update-cart {
        display: grid;
        grid-template-columns: auto auto auto;
        gap: 2rem;
        padding: 15px auto;
    }

    .cart h5 {
        color: #636872;
        font-size: 15px;
        text-transform: capitalize;
        font-weight: 500;
    }

    .cart h4 {
        color: #111;
        font-size: 17px;
        font-weight: 600;
    }

    .cart p {
        color: #111;
        font-size: 15px;
        max-width: 380px;
        line-height: 25px;
        margin-bottom: 12px;
    }

    .cart h6 {
        color: #151515;
        font-size: 13px;
        font-weight: 500;
    }

    /* contact-section */
    .contact {
        background-color: #f3f4f6;
    }

    .contact-info {
        margin: 30px auto;
        display: grid;
        grid-template-columns: auto auto auto auto auto;
        gap: 3rem;
    }

    .first-info img {
        width: 140px;
        height: auto;
    }

    .contact-info h4 {
        color: #212529;
        font-size: 13px;
        text-transform: uppercase;
        margin-bottom: 10px;
    }

    .contact-info p {
        color: #565656;
        font-size: 14px;
        font-weight: 400;
        line-height: 1.5;
        margin-bottom: 10px;
        cursor: pointer;
        transition: all 0.42s;
    }

    .contact-info p:hover {
        color: #ee1c47;
    }

    .social-icon i {
        color: #565656;
        margin-right: 10px;
        font-size: 20px;
        transition: all 0.42s;
    }

    .social-icon i:hover {
        transform: scale(1.3);
    }

    .end-text {
        background-color: #edfff1;
        text-align: center;
        padding: 20px;
    }

    .end-text p {
        color: #111;
        text-transform: capitalize;
    }

    /* Responsive-css */
    @media (max-width: 890px) {
        header {
            padding: 20px 3%;
            transition: 0.4s;
        }
    }

    @media (max-width: 630px) {
        .main-text h1 {
            font-size: 50px;
            transition: 0.4s;
        }
        .main-text p {
            font-size: 18px;
            transition: 0.4s;
        }
        .main-btn {
            padding: 10px 20px;
            transition: 0.4s;
        }
    }

    @media (max-width: 750px) {
        .navmenu {
            position: absolute;
            top: 100%;
            right: -100%;
            width: 300px;
            height: 130vh;
            background: #edfff1;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 120px 30px;
            transition: all 0.42s;
        }
        .navmenu a {
            display: block;
            margin: 18px 0;
        }
        .navmenu.open {
            right: 0;
        }
    }

    </style>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <link
      rel="stylesheet"
      href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"
    />
  </head>
  <body>
    <header>
      <a href="#" class="logo"><img src="/storage/products/logo.png" alt="" /></a>
      <ul class="navmenu">
        <li><a href="#">Home</a></li>
        <li><a href="#trending">Products</a></li>
      </ul>

      <div class="nav-icon">
        <a href="{{ route('login') }}"><i class="bx bx-user"></i></a>
        <a href="{{ route('keranjang_checkout') }}"><i class="bx bx-cart"></i></a>
      </div>
    </header>

    <section class="main-home">
      <div class="main-text">
        <h5>Ruang Baca</h5>
        <h1>Book <br />Collection</h1>
        <p>There's Nothing like Trend</p>

        <a href="#trending" class="main-btn"
          >Shop Now<i class="bx bx-right-arrow-alt"></i
        ></a>
      </div>
      <div class="down-arrow">
        <a href="#trending" class="down"
          ><i class="bx bx-down-arrow-alt"></i
        ></a>
      </div>
    </section>

    <!-- Section katalog -->
    <section class="trending-product" id="trending">
      <div class="center-text">
        <h2>Our Trending <span>Products</span></h2>
      </div>
      <div class="products">
        <div class="row">
            <a href="{{ route('products.show', 4) }}">
              <img src="{{ asset('/storage/products/jL9iEA5OiX4e5ztdnPGr4zOMpB5inJNAZNBfavAn.png')}}" alt="" class="rounded" style="width: 100%">
            </a>
          <div class="product-text">
            <h5>Sale</h5>
          </div>
          <div class="heart-icon">
            <i class="bx bx-heart"></i>
          </div>
          <div class="rating">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star-half"></i>
          </div>

          <div class="price">
            <h4>Psychology of Emotion</h4>
            <p>Rp. 85.000</p>
          </div>
        </div>

        <div class="row">
          <a href="{{ route('products.show', 6) }}">
              <img src="{{ asset('/storage/products/TE0iJOOYlAPSiNEj1uiG5CJI5eloHFKcpoSTbuW8.png') }}" alt="" class="rounded" style="width: 100%">
            </a>
          <div class="heart-icon">
            <i class="bx bx-heart"></i>
          </div>
          <div class="rating">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bx-star"></i>
          </div>

          <div class="price">
            <h4>Psychology of Money</h4>
            <p>Rp. 85.000</p>
          </div>
        </div>
    </section>
    <!--contact-section-->

    <section class="contact">
      <div class="contact-info">
        <div class="first-info">
          <img src="./images/logo.png" alt="">

          <p>Kelompok 1 <br>Pemograman Web-Karyawan</p>
          <p>Adinda Puspita Nurkomala Sari</p>
          <p>Michael Paul CHoyonggi Cho</p>
          <p>Muhamad Rafli Mustaqim</p>
          <div class="social-icon">
            <a href="#"><i class='bx bxl-facebook'></i></a>
            <a href="#"><i class='bx bxl-twitter' ></i></a>
            <a href="#"><i class='bx bxl-instagram'></i></a>
            <a href="#"><i class='bx bxl-youtube'></i></a>
            <a href="#"><i class='bx bxl-linkedin' ></i></a>
          </div>
        </div>

       </div> 
      
    </section>

    <div class="end-text">
    <p>Copyright © @2025.</p>
    
    </div>

    
    <script>
        const menuIcon = document.getElementById("menu-icon");
        const navMenu = document.querySelector(".navmenu");
    
        menuIcon.addEventListener("click", () => {
            navMenu.classList.toggle("open");
        });
    
        window.addEventListener("scroll", () => {
            const header = document.querySelector("header");
            header.classList.toggle("sticky", window.scrollY > 0);
        });
    </script>
  </body>
</html>
