<template>
  <section style="font-family: 'Nunito Sans'">
    <!-- web -->
    <section id="wishlist-webview">
      <Breadcrumb :links="breadcrumb" />
      <div class="container">
        <section>
          <h3 style="font-family: 'Nunito Sans'" class="ml-5">
            Daftar Keinginan
          </h3>

          <hr
            style="height: 2px; border-width: 0; color: red"
            class="col-sm-11 mb-0 mt-0 ml-5"
          />
          <br />
          <div class="d-flex flex-row-reverse mr-5">
            <div class="input-group md-form form-sm form-2 pl-0 col-sm-3">
              <input
                v-model="search"
                class="form-control my-0 py-1 line-border pl-4"
                style="border-radius: 10px 0px 0px 10px"
                type="text"
                placeholder="cari barang disini"
                aria-label="Search"
              />
              <div class="input-group-append">
                <button
                  class="btn btn-outline-success mx-auto"
                  style="
                    background-color: #e5e5e5;
                    border-radius: 0px 10px 10px 0px;
                    width: 40px;
                  "
                  type="submit"
                >
                  <i
                    class="fas fa-search"
                    style="font-size: 15px !important; color: black !important"
                  ></i>
                </button>
              </div>
            </div>
          </div>
          <div class="container my-4" style="width: 80%">
            <div class="row">
              <Card-Product
                v-for="wishlist in wishlists"
                :key="wishlist.id"
                :data="wishlist.product"
                :url="'/products/' + wishlist.id"
              />
            </div>
          </div>

          <!-- Jika data kosong -->
          <!-- <div class="text-center mt-5">
            <i class="fas fa-exclamation-triangle"></i>
            Tidak ada produk yang di pilih pada wishlist ini, Tekan tanda
            <i class="fas fa-heart" style=" color: #c63442 !important"></i>
            untuk menambahkan produk pada halaman ini.
          </div> -->
        </section>
      </div>
    </section>

    <!-- mobile -->
    <section id="wishlist-mobileview">
      <Breadcrumb :links="breadcrumb" />
      <div class="container pe-4 mb-5">
        <section>
          <h3 class="mb-3 ms-1">Daftar Keinginan</h3>
          <div class="d-flex flex-row-reverse col-sm-2 p-0 ms-1">
            <div class="input-group md-form form-sm form-2 p-0 col-sm-3">
              <input
                v-model="search"
                class="form-control my-0 py-1 line-border pl-4"
                type="text"
                style="border-radius: 10px 0px 0px 10px"
                placeholder="cari barang disini"
                aria-label="Search"
              />
              <div class="input-group-append">
                <button
                  class="btn btn-outline-success mx-auto search-button"
                  type="submit"
                >
                  <i
                    class="fas fa-search"
                    style="font-size: 15px !important; color: black !important"
                  ></i>
                </button>
              </div>
            </div>
          </div>
          <div class="mt-4">
            <div class="row justify-content-start">
              <div class="row pe-0 ps-3">
                <Card-Product-Mobile
                  v-for="wishlist in wishlists"
                  :key="wishlist.id"
                  :data="wishlist.product"
                  :url="'/products/' + wishlist.id"
                />
              </div>
            </div>
          </div>
        </section>
      </div>
      <Footer2mobile />
    </section>
  </section>
</template>

<script>
import CardProductMobile from "../components/CardProductMobile.vue";
export default {
  components: { CardProductMobile },
  middleware: "auth",
  data() {
    return {
      breadcrumb: [
        {
          url: "/",
          name: "Beranda",
          class: "my-2 ms-3 breadcrumb-item opacity-50",
        },

        {
          url: "/wishlist",
          name: "Daftar Keinginan",
          class: "my-2 breadcrumb-item active opacity-50",
        },
      ],
      search: "",
      wishlists: [],
    };
  },
  mounted() {
    this.getWishlist();
  },

  methods: {
    onSearchHandler() {
      this.$router.push({
        path: "/wishlist",
        query: {
          s: this.search,
        },
      });
    },
    async getWishlist() {
      try {
        let data = {
          s: this.search,
        };
        let wishlists = await this.$axios.$get(
          process.env.API_URL + "/api/wishlists",
          {
            params: data,
          }
        );

        this.wishlists = wishlists.data;
      } catch (error) {
        console.log(error);
      }
    },
  },
  watch: {
    search: async function (newVal, oldVal) {
      await this.getWishlist();
      // await this.$nuxt.refresh();
    },
  },
};
</script>

<style lang="css" scoped>
#wishlist-mobileview {
  display: none;
}
/* 0 - 991 px */
@media screen and (max-width: 500px) {
  .search-button {
    background-color: #e5e5e5 !important;
    border-radius: 0px 10px 10px 0px !important;
    width: 40px !important;
  }
  #wishlist_logo {
    display: none !important;
  }

  #wishlist-webview {
    display: none;
  }
  #wishlist-mobileview {
    display: grid;
  }
}
</style>
