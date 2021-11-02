<template>
  <section>
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
                <a href=""><img src="img/grid.png" alt="" /></a>
              </div>
              <div class="col">
                <a href=""><img src="img/list.png" alt="" /></a>
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
</template>

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
  async asyncData({ $axios }) {
    try {
      let products = await $axios.$get(process.env.API_URL + "/products");
      console.log(products);
      return {
        products: products.data,
      };
    } catch (error) {
      console.log(error);
    }
  },
};
</script>