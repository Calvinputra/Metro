<template>
  <section style="margin-bottom:100px;">
    <!-- Website -->
    <section id="product-webview">
      <Header />
      <Breadcrumb :links="breadcrumb" />

      <div class="container">
        <div class="row">
          <div class="col-sm-2">
            <section class="">
              <div class="row">
                <div>
                  <h1>Kategory</h1>
                  <div class="rounded" style="background-color: #841C26">
                    <a href="" class="text-white" style="text-decoration: none"
                      ><p class="py-2 ps-2 mb-2">Kategory1</p></a
                    >
                  </div>
                  <a href="" style="text-decoration: none" class="text-black"
                    ><p class="ms-2 mb-3">Kategory2</p></a
                  >
                  <a href="" style="text-decoration: none" class="text-black"
                    ><p class="ms-2 mb-3">Kategory3</p></a
                  >
                  <a href="" style="text-decoration: none" class="text-black"
                    ><p class="ms-2 mb-3">Kategory4</p></a
                  >
                  <a href="" style="text-decoration: none" class="text-black"
                    ><p class="ms-2 mb-3">Kategory5</p></a
                  >
                  <a href="" style="text-decoration: none" class="text-black"
                    ><p class="ms-2 mb-3">Kategory6</p></a
                  >
                  <a href="" style="text-decoration: none" class="text-black"
                    ><p class="ms-2 mb-3">Kategory7</p></a
                  >
                  <a href="" style="text-decoration: none" class="text-black"
                    ><p class="ms-2 mb-3">Kategory8</p></a
                  >
                  <a href="" style="text-decoration: none" class="text-black"
                    ><p class="ms-2 mb-3">Kategory9</p></a
                  >
                  <a href="" style="text-decoration: none" class="text-black"
                    ><p class="ms-2 mb-3">Kategory10</p></a
                  >
                </div>
              </div>
            </section>
          </div>
          <div
            class="col-sm-10 align-self-start mt-2 row justify-content-between"
          >
            <div class="col-sm-4">
              <h2>Kategory 1</h2>
            </div>
            <div class="col-sm-8 mx-auto my-auto">
              <div class="row" style="float: right">
                <h5 class="col align-self-center">Urutkan:</h5>
                <div class="col btn-group ms-0 ps-0">
                  <button
                    class="btn btn-light btn-sm dropdown-toggle text-danger"
                    type="button"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    Small button
                  </button>
                  <div class="dropdown-menu">...</div>
                </div>
              </div>
            </div>
            <div>
              <div class="row justify-content-start">
                <Card-Product
                  v-for="product in products"
                  :key="product.id"
                  :data="product"
                  :url="'/products/' + product.id"
                />
                <!-- jika data kosong -->
                <!-- <div class="ms-5 mt-5">
                  <i class="fas fa-exclamation-triangle"></i>
                  Tidak ada produk pada Kategori ini, Silahkan coba lagi
                  beberapa saat kemudian.
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <span style="position: absolute; width: 100%">
        <Footer />
      </span>
    </section>

    <!-- Mobile -->
    <section id="product-mobileview">
      <Header />
      <div class="container">
        <div class="row">
          <div
            class="
              col-sm-10
              align-self-start
              mt-2
              row
              justify-content-between
              pr-0
            "
          >
            <div class="col-sm-4 mb-2">
              <h2>Kategory 1</h2>
            </div>
            <div class="col-sm-8 mx-auto my-auto">
              <div class="row">
                <h5 class="col-3 align-self-center">Urutkan:</h5>
                <div class="col-2 btn-group ms-0 ps-2 me-5">
                  <button
                    class="btn btn-light btn-sm dropdown-toggle text-danger"
                    type="button"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    Small button
                  </button>
                  <div class="dropdown-menu">...</div>
                </div>
              </div>
            </div>
            <div class="mt-4">
              <div class="row justify-content-start">
                <div class="row pe-0 ps-3">
                  <Card-Product-Mobile
                    v-for="product in products"
                    :key="product.id"
                    :data="product"
                    :url="'/products/' + product.id"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="overflow-auto">
        <b-pagination-nav
          :link-gen="linkGen"
          :number-of-pages="this.totalPage"
          first-text="First"
          prev-text="Prev"
          next-text="Next"
          last-text="Last"
        ></b-pagination-nav>
      </div>
      <Footer2mobile />
      <Footer />
    </section>
  </section>
</template>

<style lang="css" scoped>
#product-mobileview {
  display: none;
}
/* 0 - 991 px */
@media screen and (max-width: 500px) {
  #product-webview {
    display: none;
  }

  #product-mobileview {
    display: contents;
  }
}
</style>

<script>
export default {
  data() {
    return {
      breadcrumb: [
        {
          url: "/",
          name: "Beranda",
          class: "my-2 ms-3 breadcrumb-item opacity-50"
        },
        {
          url: "/",
          name: "Product",
          class: "my-2 breadcrumb-item active opacity-50"
        }
      ]
    };
  },
  async asyncData({ $axios, query }) {
    try {
      let data = {
        s: query.s,
        page: query.page,
        paginate: query.paginate
      };
      let products = await $axios.$get(process.env.API_URL + "/api/products", {
        params: data
      });
      let links = [];
      for (let i = 1; i <= products.meta.last_page; i++) {
        links.push(i);
      }
      return {
        products: products.data,
        links: links,
        totalPage: products.meta.last_page
      };
    } catch (error) {
      console.log(error);
    }
  },
  methods: {
    linkGen(pageNum) {
      return {
        path: "/products?",
        query: {
          page: pageNum,
          s: this.$route.query.s,
          paginate: this.$route.query.paginate
        }
      };
    },
    pageGen(pageNum) {
      return this.links[pageNum - 1].slice(1);
    }
  },
  watchQuery: ["s", "page", "paginate"]
};
</script>
