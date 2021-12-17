<template>
  <section>
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
                  <div class="bg-danger rounded">
                    <a href="" class="text-black" style="text-decoration: none"
                      ><p class="py-2 ps-2">Kategory1</p></a
                    >
                  </div>
                  <a href="" style="text-decoration: none" class="text-black"
                    ><p class="ms-2">Kategory2</p></a
                  >
                  <a href="" style="text-decoration: none" class="text-black"
                    ><p class="ms-2">Kategory3</p></a
                  >
                  <a href="" style="text-decoration: none" class="text-black"
                    ><p class="ms-2">Kategory4</p></a
                  >
                  <a href="" style="text-decoration: none" class="text-black"
                    ><p class="ms-2">Kategory5</p></a
                  >
                  <a href="" style="text-decoration: none" class="text-black"
                    ><p class="ms-2">Kategory6</p></a
                  >
                  <a href="" style="text-decoration: none" class="text-black"
                    ><p class="ms-2">Kategory7</p></a
                  >
                  <a href="" style="text-decoration: none" class="text-black"
                    ><p class="ms-2">Kategory8</p></a
                  >
                  <a href="" style="text-decoration: none" class="text-black"
                    ><p class="ms-2">Kategory9</p></a
                  >
                  <a href="" style="text-decoration: none" class="text-black"
                    ><p class="ms-2">Kategory10</p></a
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
                <div class="col">
                  <a href=""><img src="img/grid.png" alt="" height="20px" /></a>
                </div>
                <div class="col">
                  <a href=""><img src="img/list.png" alt="" height="20px" /></a>
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
              </div>
            </div>
          </div>
        </div>
      </div>
      <Footer />
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
                <div class="col justify-content-end d-flex me-2">
                  <a href="">
                    <i
                      class="fas fa-th-large"
                      style="
                        font-size: 25px !important;
                        color: #c63442 !important;
                      "
                    ></i>
                  </a>
                </div>
                <div class="col-1 justify-content-end d-flex">
                  <a href="">
                    <i
                      class="fas fa-list-ul"
                      style="
                        font-size: 25px !important;
                        color: lightgrey !important;
                      "
                    ></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="mt-4">
              <div class="row justify-content-start">
                <!-- palingan ini kasih if else ganjil genap -->
                <div class="col pe-0 ps-0">
                  <Card-Product
                    v-for="product in products"
                    :key="product.id"
                    :data="product"
                    :url="'/products/' + product.id"
                  />
                </div>

                <div class="col pe-0 ps-0">
                  <Card-Product
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
          class: "my-2 ms-3 breadcrumb-item opacity-50",
        },
        {
          url: "/",
          name: "Product",
          class: "my-2 breadcrumb-item active opacity-50",
        },
      ],
    };
  },
  async asyncData({ $axios, query }) {
    try {
      let data = {
        s: query.s,
      };
      let products = await $axios.$get(process.env.API_URL + "/api/products", {
        params: data,
      });
      return {
        products: products.data,
      };
    } catch (error) {
      console.log(error);
    }
  },
  watchQuery: ["s"],
};
</script>