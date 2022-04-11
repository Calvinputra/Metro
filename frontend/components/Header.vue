<template>
  <!-- Awal Navbar -->
  <nav
    id="navbar"
    class="navbar sticky-top navbar-expand-lg navbar-light bg-light justify-content-center"
    style="font-family: 'Nunito Sans'"
  >
    <!-- WEB -->
    <div
      id="header-webview"
      class="container ms-1 me-2 p-0 row"
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
      <div class="col-sm-7">
        <Search :data="menu" />
      </div>

      <!-- hamburger button -->
      <!-- icon -->
      <div class="collapse navbar-collapse col-sm-3 p-0" id="navbarScroll">
        <div id="icon navbar" class="container-fluid p-0 row">
          <div v-if="!this.$auth.loggedIn" class="col-sm-1"></div>
          <div v-if="this.$auth.loggedIn" class="col-sm-1 m-0 p-0"></div>
          <div class="col-sm-1 text-center p-0 m-0">
            <nuxt-link to="/wishlist"
              ><i
                class="fas fa-heart p-0 m-0"
                style="font-size: 30px !important; color: #c63442 !important"
              ></i
            ></nuxt-link>
          </div>
          <div class="col-sm-1 p-0 m-0">
            <nuxt-link style="text-decoration: none" to="/cart">
              <div
                class="ms-4 d-flex justify-content-end"
                style="
                  width: 30px;
                  height: 30px;
                  background-size: cover;
                  background-repeat: no-repeat;
                  background-image: url('/img/cart.png');
                "
              >
                <template v-if="this.isLoaded">
                  <i
                    v-if="
                      (!this.$auth.loggedIn && tempCart.length > 0) ||
                      (this.$auth.loggedIn && this.carts.length > 0)
                    "
                    style="font-size: 12px !important; color: red !important"
                    class="fa fa-solid fa-circle"
                  ></i>
                </template>
              </div>
            </nuxt-link>
          </div>
          <div class="col-sm-2"></div>
          <div v-if="!this.$auth.loggedIn" class="col-sm-3 m-0 p-0">
            <div class="text-center">
              <nuxt-link to="/register">
                <button
                  type="submit"
                  class="btn text-danger btn-light btn-sm rounded col-sm-12 me-2"
                  style=""
                >
                  Daftar
                </button>
              </nuxt-link>
            </div>
          </div>
          <div v-if="!this.$auth.loggedIn" class="col-sm-3 m-0 p-0">
            <div class="text-center">
              <nuxt-link to="/login">
                <button
                  type="submit"
                  class="btn text-white btn-danger btn-sm rounded col-sm-12"
                  style="box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important"
                >
                  Masuk
                </button>
              </nuxt-link>
            </div>
          </div>
          <div v-if="!this.$auth.loggedIn" class="col-sm-1"></div>
          <div v-if="this.$auth.loggedIn" class="col-sm-3 m-0 p-0">
            <b-dropdown
              id="dropdown-1"
              variant="transparent"
              text=""
              class="ms-12 p-0 m-0"
            >
              <template class="" slot="button-content">
                <i
                  class="py-0 fa fa-user me-2"
                  style="font-size: 25px !important"
                ></i>
                {{ this.$auth.user.first_name }}
                <em></em>
              </template>
              <b-dropdown-item
                class="p-0 m-0"
                v-if="this.$auth.loggedIn"
                to="/profile"
                >Akun Saya</b-dropdown-item
              >
              <b-dropdown-item
                v-if="this.$auth.loggedIn"
                to="/riwayat_pembelian"
                >Riwayat Pembelian</b-dropdown-item
              >
              <b-dropdown-item v-if="this.$auth.loggedIn" to="/change_password"
                >Ubah sandi</b-dropdown-item
              >
              <b-dropdown-item v-if="this.$auth.loggedIn" @click="logout"
                >Keluar</b-dropdown-item
              >
            </b-dropdown>
          </div>
          <div v-if="this.$auth.loggedIn" class="col-sm-3 m-0 p-0"></div>
          <!-- Kosong -->
        </div>
        <div class="col-sm-2"></div>
      </div>
    </div>

    <!-- MOBILE -->
    <div id="header-mobileview" class="container row" style="height: auto">
      <!-- Navbar brand -->
      <div id="header_logo" class="col-3 m-0">
        <nuxt-link to="/"
          ><img
            class="img-fluid rounded mx-auto"
            src="/img/metro.png"
            alt=""
            width="100%"
        /></nuxt-link>
      </div>
      <!-- Search -->
      <div class="col-8">
        <search-mobile />
      </div>
      <!-- Logo -->

      <div class="col-1 p-0 dropdown-toggle-split">
        <b-nav-item-dropdown
          text="☰"
          style="font-size: 25px; list-style-type: none; color: red"
          no-caret
          class="dropdown-toggle-split"
        >
          <b-dropdown-item v-if="!this.$auth.loggedIn" to="/login"
            >Masuk</b-dropdown-item
          >
          <b-dropdown-item v-if="!this.$auth.loggedIn" to="/register"
            >Daftar</b-dropdown-item
          >
          <b-dropdown-item to="/products">Produk</b-dropdown-item>
          <b-dropdown-item v-if="this.$auth.loggedIn" to="/riwayat_pembelian"
            >Riwayat Pembelian</b-dropdown-item
          >
          <b-dropdown-item v-if="this.$auth.loggedIn" to="/change_password"
            >Ubah sandi</b-dropdown-item
          >
          <b-dropdown-item v-if="this.$auth.loggedIn" to="/profile"
            >Akun Saya</b-dropdown-item
          >
          <b-dropdown-item v-if="this.$auth.loggedIn" @click="logout"
            >Keluar</b-dropdown-item
          >
        </b-nav-item-dropdown>
      </div>
    </div>

    <!-- TAB -->
    <div id="header-tabview" class="" style="height: auto">
      <!-- Logo -->
      <div class="row">
        <div id="header_logo" class="col-sm-2 ms-3">
          <nuxt-link to="/"
            ><img
              style="width: 80%"
              class="img-fluid rounded d-block"
              src="/img/logo.png"
              alt=""
          /></nuxt-link>
        </div>
        <div class="col-sm-4">
          <Searchtab :data="menu" />
        </div>

        <!-- hamburger button -->
        <div class="col-sm-4 text-right">
          <div>
            <b-nav-item-dropdown
              text="☰"
              style="font-size: 40px; list-style-type: none"
              right
              no-caret
            >
              <b-dropdown-item v-if="!this.$auth.loggedIn" to="/login"
                >Masuk</b-dropdown-item
              >
              <b-dropdown-item v-if="!this.$auth.loggedIn" to="/register"
                >Daftar</b-dropdown-item
              >
              <b-dropdown-item
                v-if="this.$auth.loggedIn"
                to="/riwayat_pembelian"
                >Riwayat Pembelian</b-dropdown-item
              >
              <b-dropdown-item v-if="this.$auth.loggedIn"
                >Akun Saya</b-dropdown-item
              >
              <b-dropdown-item v-if="this.$auth.loggedIn" @click="logout"
                >Keluar</b-dropdown-item
              >
            </b-nav-item-dropdown>
          </div>
        </div>
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
                <b-dropdown-item v-if="this.$auth.loggedIn" to="/profile"
                  >Akun Saya</b-dropdown-item
                >
                <b-dropdown-item
                  v-if="this.$auth.loggedIn"
                  to="/riwayat_pembelian"
                  >Riwayat Pembelian</b-dropdown-item
                >
                <b-dropdown-item
                  v-if="this.$auth.loggedIn"
                  to="/change_password"
                  >Ubah sandi</b-dropdown-item
                >
                <b-dropdown-item v-if="!this.$auth.loggedIn" to="/login"
                  >Masuk</b-dropdown-item
                >
                <b-dropdown-item v-if="!this.$auth.loggedIn" to="/register"
                  >Daftar</b-dropdown-item
                >

                <b-dropdown-item v-if="this.$auth.loggedIn" @click="logout"
                  >Keluar</b-dropdown-item
                >
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
              <nuxt-link to="/cart"
                ><img src="/img/cart.png" alt=""
              /></nuxt-link>
            </div>
            <!-- Kosong -->
          </div>
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

  computed: {
    ...mapGetters({
      menu: "getHeader",
      tempCart: "getCart",
    }),
  },
  methods: {
    async logout() {
      await this.$auth.logout();
      this.$toast.success("Berhasil Keluar", {
        theme: "bubble",
        position: "bottom-right",
        duration: 5000,
        // setTimeout(() => {
        //   window.location.reload(true);
        // }, 1000);
      });
    },
    async refetch() {
      if (this.$auth.loggedIn) {
        try {
          let carts = await this.$axios.$get(
            process.env.API_URL + "/api/carts"
          );
          this.carts = carts.data;
          this.isLoaded = true;
        } catch (error) {
          console.log(error);
        }
      } else {
        this.isLoaded = true;
      }
    },
  },
  data() {
    return {
      carts: {},
      isLoaded: false,
    };
  },

  async mounted() {
    if (this.$auth.loggedIn) {
      try {
        let carts = await this.$axios.$get(process.env.API_URL + "/api/carts");
        this.carts = carts.data;
        this.isLoaded = true;
      } catch (error) {
        console.log(error);
      }
    } else {
      this.isLoaded = true;
    }
  },
  watch: {
    "$store.state.cartChanged": function () {
      this.refetch();
    },
  },
};
</script>

<style lang="css">
#header-mobileview {
  display: none;
}
#header-tabview {
  display: none;
}

/* 0 - 991 px */
@media screen and (max-width: 579px) {
  .nav-link {
    padding: 0;
    color: red !important;
  }
  #header_logo {
    /* width: 30%; */
    padding: 0;
    margin-right: auto;
  }

  #header-webview {
    display: none;
  }
  #header-mobileview {
    display: flex;
  }
  #header-tabview {
    display: none;
  }
  .nav-link:focus,
  .nav-link:hover {
    color: red;
  }
}

.dropdown-menu {
  transform: translate3d(-140px, 40px, 0px);
}
@media screen and (min-width: 580px) and (max-width: 1024px) {
  #header_logo {
    width: 30%;
    padding: 0;
    margin-right: auto;
  }

  #header-webview {
    display: none;
  }
  #header-mobileview {
    display: none;
  }
  #header-tabview {
    display: flex;
  }
}
</style>
