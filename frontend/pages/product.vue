<template>
  <section>
    <Header />

    <nav class="container my-4" aria-label="breadcrumb">
      <ol class="py-1 breadcrumb">
        <li class="my-2 ms-3 breadcrumb-item opacity-50">
          <a style="text-decoration: none; color: black" href="/">Beranda</a>
        </li>
        <li
          class="my-2 breadcrumb-item active opacity-50"
          style="color: black"
          aria-current="page"
        >
          Product
        </li>
      </ol>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col-sm-2">
          <Kategory />
        </div>
        <div class="col-sm-10">
          <div class="row justify-content-start">
            <Card-Product
              v-for="product in products"
              :key="product.id"
              :data="product"
            />
          </div>
        </div>
      </div>
    </div>
    <Footer />
  </section>
</template>

<script>
export default {
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