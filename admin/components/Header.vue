<template>
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
</template>