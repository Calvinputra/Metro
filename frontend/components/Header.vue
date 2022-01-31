<template>
  <!-- Awal Navbar -->
  <nav
    id="navbar"
    class="navbar sticky-top navbar-expand-lg navbar-light bg-light"
  >
    <!-- WEB -->
    <div
      id="header-webview"
      class="container space-between"
      style="height: auto"
    >
      <!-- Logo -->
      <div id="header_logo" class="col-sm-2">
        <nuxt-link to="/"
          ><img
            style="width: 80%"
            class="img-fluid rounded d-block"
            src="/img/logo.png"
            alt=""
        /></nuxt-link>
      </div>

      <Search :data="menu" />

      <!-- hamburger button -->
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarScroll"
        aria-controls="navbarScroll"
        aria-expanded="true"
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
              no-caret
              class="ms-12"
            >
              <template slot="button-content">
                <i
                  class="py-0 fa fa-user"
                  style="font-size: 30px !important"
                ></i>
                <em></em>
              </template>
              <b-dropdown-item v-if="this.$auth.loggedIn" href="/profile"
                >Akun Saya</b-dropdown-item
              >
              <b-dropdown-item
                v-if="this.$auth.loggedIn"
                href="/riwayat_pembelian"
                >Riwayat Pembelian</b-dropdown-item
              >
              <b-dropdown-item v-if="!this.$auth.loggedIn" href="/login"
                >Login</b-dropdown-item
              >
              <b-dropdown-item v-if="!this.$auth.loggedIn" href="/register"
                >Register</b-dropdown-item
              >

              <b-dropdown-divider></b-dropdown-divider>

              <b-dropdown-item v-if="this.$auth.loggedIn" @click="logout" active
                >Logout</b-dropdown-item
              >
              <b-dropdown-item disabled>Disabled action</b-dropdown-item>
            </b-dropdown>
          </div>
          <div class="col-sm-4">
            <nuxt-link to="/wishlist"
              ><i
                class="fas fa-heart"
                style="font-size: 30px !important; color: #c63442 !important"
              ></i
            ></nuxt-link>
          </div>
          <div class="col-sm-4">
            <nuxt-link to="/cart"><img src="/img/cart.png" alt="" /></nuxt-link>
          </div>
          <!-- Kosong -->
        </div>
      </div>
    </div>

    <!-- MOBILE -->
    <div
      id="header-mobileview"
      class="container space-between"
      style="height: auto"
    >
      <!-- Navbar brand -->
      <div>
        <b-nav-item-dropdown
          text="☰"
          style="font-size: 15px; list-style-type: none"
          right
          no-caret
        >
          <b-dropdown-item v-if="!this.$auth.loggedIn" href="/login"
            >Login</b-dropdown-item
          >
          <b-dropdown-item v-if="!this.$auth.loggedIn" href="/register"
            >Register</b-dropdown-item
          >
          <b-dropdown-item v-if="this.$auth.loggedIn" href="/riwayat_pembelian"
            >Riwayat Pembelian</b-dropdown-item
          >
          <b-dropdown-item v-if="this.$auth.loggedIn"
            >Akun Saya</b-dropdown-item
          >
          <b-dropdown-item v-if="this.$auth.loggedIn" @click="logout" active
            >Logout</b-dropdown-item
          >
        </b-nav-item-dropdown>
      </div>
      <!-- Logo -->
      <div id="header_logo" class="col-sm-2">
        <nuxt-link to="/"
          ><img
            class="img-fluid rounded mx-auto d-block"
            src="/img/metro.png"
            alt=""
        /></nuxt-link>
      </div>
      <img style="width: 15%" src="/img/logo.png" alt="" />

      <search-mobile />

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
              <b-dropdown-item v-if="this.$auth.loggedIn"
                >Akun Saya</b-dropdown-item
              >
              <b-dropdown-item
                v-if="this.$auth.loggedIn"
                href="/riwayat_pembelian"
                >Riwayat Pembelian</b-dropdown-item
              >
              <b-dropdown-item v-if="!this.$auth.loggedIn" href="/login"
                >Login</b-dropdown-item
              >
              <b-dropdown-item v-if="!this.$auth.loggedIn" href="/register"
                >Register</b-dropdown-item
              >

              <b-dropdown-divider></b-dropdown-divider>

              <b-dropdown-item v-if="this.$auth.loggedIn" @click="logout" active
                >Logout</b-dropdown-item
              >
            </b-dropdown>
          </div>
          <div class="col-sm-4 mb-2 mt-2">
            <a
              href="/wishlist"
              class="text-black"
              style="text-decoration: none"
            >
              Wishlist
            </a>
          </div>
          <div class="col-sm-4">
            <nuxt-link
              to="/cart"
              class="text-black"
              style="text-decoration: none"
            >
              Cart</nuxt-link
            >
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
import SearchMobile from "./SearchMobile.vue";
export default {
  components: { SearchMobile },
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
      await this.$auth.logout().then(() => {
        this.$toast.success("Successfully logout", {
          theme: "bubble",
          position: "bottom-right",
          duration: 5000,
        });
        // setTimeout(() => {
        //   window.location.reload(true);
        // }, 1000);
      });
    },
  },
};
</script>

<style lang="css" scoped>
#header-mobileview {
  display: none;
}
/* 0 - 991 px */
@media screen and (max-width: 500px) {
  #header_logo {
    display: none !important;
  }

  #header-webview {
    display: none;
  }
  #header-mobileview {
    display: flex;
  }
}
</style>
