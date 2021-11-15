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
          <div class="col-sm-4" style="padding: 0">
            <b-dropdown
              id="dropdown-1"
              variant="transparent"
              text=""
              class="ms-12"
            >
              <template slot="button-content">
                <i
                  class="py-0 fa fa-user"
                  style="font-size: 30px !important"
                ></i>
                <em></em>
              </template>
              <b-dropdown-item>First Action</b-dropdown-item>
              <b-dropdown-item>Second Action</b-dropdown-item>
              <b-dropdown-item>Third Action</b-dropdown-item>
              <b-dropdown-divider></b-dropdown-divider>
              <b-dropdown-item @click="logout" active>Logout</b-dropdown-item>
              <b-dropdown-item disabled>Disabled action</b-dropdown-item>
            </b-dropdown>
          </div>
          <div class="col-sm-4">
            <a href="/wishlist"
              ><i
                class="fas fa-heart"
                style="font-size: 30px !important; color: #c63442 !important"
              ></i
            ></a>
          </div>
          <div class="col-sm-4">
            <a href="/cart"><img src="/img/cart.png" alt="" /></a>
          </div>
          <!-- Kosong -->
        </div>
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
  methods: {
    async logout() {
      await this.$auth.logout();

      this.$router.push("/login");
    },
  },
};
</script>