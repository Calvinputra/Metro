<template>
  <section>
    <!-- Awal Navbar -->
    <nav
      id="navbar"
      class="navbar sticky-top navbar-expand-lg navbar-light bg-light"
    >
      <div class="container space-between" style="height: auto">
        <!-- Logo -->
        <div class="col-sm-2">
          <a href="#"
            ><img
              class="img-fluid rounded mx-auto d-block"
              src="img/audiblelogo.png"
              alt=""
          /></a>
        </div>
        <!-- search -->
        <div id="search" class="nav-item col-sm-8 align-self-start mt-4">
          <form class="d-flex">
            <input
              class="form-control"
              type="search"
              placeholder="Cari Barang Di sini"
              aria-label="Search"
            />
            <button
              class="btn btn-outline-success mx-auto"
              style="background-color: #e5e5e5"
              type="submit"
            >
              <img src="img/search.png" alt="" />
            </button>
          </form>
          <!-- kategory -->
          <div id="kategory" class="nav-item col-sm-12 align-self-end">
            <ul
              class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll"
              style="--bs-scroll-height: 100px"
            >
              <li class="nav-item col-2">
                <a
                  class="nav-link active text-danger"
                  aria-current="page"
                  href="#"
                  >kategory 1</a
                >
              </li>
              <li class="nav-item col-2">
                <a
                  class="nav-link active text-danger"
                  aria-current="page"
                  href="#"
                  >kategory 2</a
                >
              </li>
              <li class="nav-item col-2">
                <a
                  class="nav-link active text-danger"
                  aria-current="page"
                  href="#"
                  >kategory 3</a
                >
              </li>
              <li class="nav-item col-2">
                <a
                  class="nav-link active text-danger"
                  aria-current="page"
                  href="#"
                  >kategory 4</a
                >
              </li>
              <li class="nav-item col-2">
                <a
                  class="nav-link active text-danger"
                  aria-current="page"
                  href="#"
                  >kategory 5</a
                >
              </li>
              <li class="nav-item col-2">
                <a
                  class="nav-link active text-danger"
                  aria-current="page"
                  href="#"
                  >lainnya</a
                >
              </li>
            </ul>
          </div>
        </div>
        <!-- hamburger button -->
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarScroll"
          aria-controls="navbarScroll"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- icon -->
        <div class="collapse navbar-collapse center" id="navbarScroll">
          <div id="icon navbar" class="container-fluid ms-4">
            <div class="col-sm-4">
              <a aria-current="page" href="#"
                ><img src="img/profile.png" alt=""
              /></a>
            </div>
            <div class="col-sm-4">
              <a href="https://facebook.com"
                ><img src="img/wishlist.png" alt=""
              /></a>
            </div>
            <div class="col-sm-4">
              <a href="#"><img src="img/cart.png" alt="" /></a>
            </div>
            <!-- Kosong -->
          </div>
          <!-- <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
            </ul> -->
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Body -->
    <main style="min-height: 500px"></main>
    <!-- Akhir Body -->

    <!-- Footer -->
    <footer class="text-center text-lg-start bg-light text-muted">
      <!-- Section: Social media -->
      <section
        class="
          d-flex
          justify-content-center justify-content-lg-between
          p-4
          border-bottom
        "
      >
        <!-- Left -->
        <div class="me-5 d-none d-lg-block">
          <span>Get connected with us on social networks:</span>
        </div>
        <!-- Left -->
        <!-- Right -->
      </section>
      <!-- Section: Social media -->

      <!-- Section: Links  -->
      <section class="">
        <div class="container text-center text-md-start mt-5">
          <!-- Grid row -->
          <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <!-- Content -->
              <a href=""
                ><img src="img/audiblelogo.png" class="mb-3" alt=""
              /></a>
              <p>
                Jl.Raya kb.Jeruk, No.27, RT 2/RW 9, Kb. Jeruk Kec Kb.Jeruk, Kota
                Jakarta Barat, Daerah Khusus Ibukota Jakarta 11520
              </p>
              <div>
                <a href="" class="me-4 text-reset">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 text-reset">
                  <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset">
                  <i class="fab fa-google"></i>
                </a>
                <a href="" class="me-4 text-reset">
                  <i class="fab fa-instagram"></i>
                </a>
              </div>
              <p class="mb-2" style="font-size: 90%">
                Dapatkan diskon sebesar
                <span style="color: red">10%</span> dengan mengirim email kalian
                dibawah!
              </p>
              <div id="search" class="nav-item align-self-start mt-1">
                <form class="d-flex">
                  <input
                    class="form-control"
                    type="search"
                    placeholder="Email"
                    aria-label="Search"
                  />
                  <button
                    class="btn btn-outline-success mx-2"
                    style="background-color: #e5e5e5"
                    type="submit"
                  >
                    <p style="color: red">Kirim</p>
                  </button>
                </form>
              </div>
            </div>

            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">Menu</h6>
              <p class="mb-0">
                <a href="#!" class="text-reset my-0">Beranda</a>
              </p>
              <p class="mb-0">
                <a href="#!" class="text-reset my-0">Kategori 1</a>
              </p>
              <p class="mb-0">
                <a href="#!" class="text-reset">Kategori 2</a>
              </p>
              <p class="mb-0">
                <a href="#!" class="text-reset">Kategori 3</a>
              </p>
              <p class="mb-0">
                <a href="#!" class="text-reset">Kategori 4</a>
              </p>
              <p class="mb-0">
                <a href="#!" class="text-reset">Kategori 5</a>
              </p>
              <p class="mb-0">
                <a href="#!" class="text-reset">Kategori 6</a>
              </p>
              <p class="mb-0">
                <a href="#!" class="text-reset">Kategori 7</a>
              </p>
              <p class="mb-0">
                <a href="#!" class="text-reset">Kategori 8</a>
              </p>
              <p class="mb-0">
                <a href="#!" class="text-reset">Kategori 9</a>
              </p>
              <p class="mb-0">
                <a href="#!" class="text-reset">Kategori 10</a>
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">Metro Jaya</h6>
              <p class="mb-0">
                <a href="#!" class="text-reset">Akun saya</a>
              </p>
              <p class="mb-0">
                <a href="#!" class="text-reset">Daftar Keinginan</a>
              </p>
              <p class="mb-0">
                <a href="#!" class="text-reset">Tentang Kami</a>
              </p>
              <p class="mb-0">
                <a href="#!" class="text-reset">Hubungi Kami</a>
              </p>
            </div>
            <!-- Grid column -->
            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">Metro Jaya</h6>
              <p class="mb-0">
                <a href="#!" class="text-reset">Akun saya</a>
              </p>
              <p class="mb-0">
                <a href="#!" class="text-reset">Daftar Keinginan</a>
              </p>
              <p class="mb-0">
                <a href="#!" class="text-reset">Tentang Kami</a>
              </p>
              <p class="mb-0">
                <a href="#!" class="text-reset">Hubungi Kami</a>
              </p>
            </div>
            <!-- Grid column -->
            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
              <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
              <p>
                <i class="fas fa-envelope me-3"></i>
                info@example.com
              </p>
              <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
              <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->
        </div>
      </section>
      <!-- Section: Links  -->

      <!-- Copyright -->
      <div
        class="text-center p-4"
        style="background-color: rgba(0, 0, 0, 0.05)"
      >
        © 2021 Copyright:
        <a class="text-reset fw-bold" href="https://mdbootstrap.com/"
          >MDBootstrap.com</a
        >
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Akhir Footer -->
  </section>
</template>

