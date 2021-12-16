<template>
  <section>
    <section id="wishlist-webview">
      <Header />
      <Breadcrumb :links="breadcrumb" />
      <div class="container">
        <section>
          <h3 class="ml-5">Daftar Keinginan</h3>

          <hr
            style="height: 2px; border-width: 0; color: red"
            class="col-sm-11 mb-0 mt-0 ml-5"
          />
          <br />
          <div class="d-flex flex-row-reverse mr-5">
            <div class="input-group md-form form-sm form-2 pl-0 col-sm-3">
              <input
                class="form-control my-0 py-1 line-border pl-4"
                type="text"
                placeholder="cari barang disini"
                aria-label="Search"
              />
              <div class="input-group-append">
                <button
                  class="btn btn-outline-success mx-auto"
                  style="background-color: #e5e5e5"
                  type="submit"
                  @click="onSearch"
                >
                  <img src="/img/search.png" alt="" />
                </button>
              </div>
            </div>
          </div>
          <div class="container my-4" style="width:80%;">
            <div class="row">
              <Card-Product
                v-for="wishlist in wishlists"
                :key="wishlist.id"
                :data="wishlist.product"
                :url="'/products/' + wishlist.id"
              />
            </div>
          </div>
        </section>
      </div>
    </section>
    <section id="wishlist-mobileview">
      <Header />
      <Breadcrumb :links="breadcrumb" />
      <div class="container">
        <section>
          <h3 class="ml-5">Daftar Keinginan</h3>

          <hr
            style="height: 2px; border-width: 0; color: red"
            class="col-sm-11 mb-0 mt-0 ml-5"
          />
          <br />
          <div class="d-flex flex-row-reverse col-sm-2 pr-5 pl-5 ">
            <div class="input-group md-form form-sm form-2 pl-0 col-sm-3">
              <input
                class="form-control my-0 py-1 line-border pl-4"
                type="text"
                placeholder="cari barang disini"
                aria-label="Search"
              />
              <div class="input-group-append">
                <button
                  class="btn btn-outline-success mx-auto"
                  style="background-color: #e5e5e5"
                  type="submit"
                >
                  <img src="/img/search.png" alt="" />
                </button>
              </div>
            </div>
          </div>
          <div class="container my-4" style="width:80%;">
            <div class="row">
              <Card-Product
                v-for="wishlist in wishlists"
                :key="wishlist.id"
                :data="wishlist.product"
                :url="'/products/' + wishlist.id"
              />
            </div>
          </div>
        </section>
      </div>
      <Footer />
    </section>
  </section>
</template>

<script>
export default {
  middleware: "auth",
  data() {
    return {
      breadcrumb: [
        {
          url: "/",
          name: "Beranda",
          class: "my-2 ms-3 breadcrumb-item opacity-50"
        },

        {
          url: "/wishlist",
          name: "Daftar Keinginan",
          class: "my-2 breadcrumb-item active opacity-50"
        }
      ]
    };
  },
  async asyncData({ $axios }) {
    try {
      let wishlists = await $axios.$get(process.env.API_URL + "/api/wishlists");
      return {
        wishlists: wishlists.data
      };
    } catch (error) {
      console.log(error);
    }
  }
};
</script>

<style lang="css" scoped>
#wishlist-mobileview {
  display: none;
}
/* 0 - 991 px */
@media screen and (max-width: 500px) {
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
