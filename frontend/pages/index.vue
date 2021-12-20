<template>
  <section>
    <Header />
    <SwiperCardProduct :products="products" />
    <Footer />>
  </section>
</template>
<script>
export default {
  async asyncData({ $axios }) {
    try {
      let products = await $axios.$get(process.env.API_URL + "/api/products");
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
<style scoped>
</style>
