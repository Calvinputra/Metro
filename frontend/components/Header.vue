<template>
  <!-- Awal Navbar -->
  <nav
    id="navbar"
    class="navbar sticky-top navbar-expand-lg navbar-light bg-light"
  >
    <div class="container space-between" style="height: auto">
      <!-- Logo -->
      <div class="col-sm-2">
        <a href="/"
          ><img
            class="img-fluid rounded mx-auto d-block"
            src="/img/audiblelogo.png"
            alt=""
        /></a>
      </div>
      <Search :data="menu" />
      
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
            <a aria-current="page" href="account"
              ><img src="/img/profile.png" alt=""
            /></a>
          </div>
          <div class="col-sm-4">
            <a href="/wishlist"
              ><img src="/img/wishlist.png" alt=""
            /></a>
          </div>
          <div class="col-sm-4">
            <a href="/cart"><img src="/img/cart.png" alt="" /></a>
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

<script>
import { mapGetters } from "vuex";
export default {
  created() {
    this.$store.dispatch("fetchHeader");
  },

  computed: {
    ...mapGetters({
      menu: "getHeader",
    }),
  },
};
</script>