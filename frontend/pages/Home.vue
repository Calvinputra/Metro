<template>
  <section>
    <Header />
    <Carousel1 />
    <section class="container">
      <Carousel2 :products="products" />
      <div class="d-flex">
        <h5 class="text-danger fw-bold">Produk Unggulan</h5>
        <button
          type="submit"
          class="
              btn
              text-danger
              btn-light btn-sm
              rounded
              p-2
              ms-3 
              "
          style="box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important;"
        >
          Lebih lanjut
        </button>
      </div>
      <Carousel2 :products="products" />
      <div class="d-flex">
        <h5 class="text-danger fw-bold">Produk Terbaru</h5>
        <button
          type="submit"
          class="
              btn
              text-danger
              btn-light btn-sm
              rounded
              p-2
              ms-3 
              "
          style="box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important;"
        >
          Lebih lanjut
        </button>
      </div>
      <Carousel2 :products="products" />
      <div class="d-flex">
        <h5 class="text-danger fw-bold">Paling Banyak Dibeli</h5>
        <button
          type="submit"
          class="
              btn
              text-danger
              btn-light btn-sm
              rounded
              p-2
              ms-3 
              "
          style="box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important;"
        >
          Lebih lanjut
        </button>
      </div>
      <Carousel2 :products="products" />
      <Carousel3 />
      <Footer />

      <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </section>
    <SwiperCardProduct :products="products" />
  </section>
</template>

<script>
import CardProduct from "../components/CardProduct.vue";
import Cart from "../components/Cart.vue";
export default {
  components: { CardProduct, Cart },
  data() {
    return {
      slide: 0,
      sliding: null
    };
  },
  methods: {
    onSlideStart(slide) {
      this.sliding = true;
    },
    onSlideEnd(slide) {
      this.sliding = false;
    }
  },
  async asyncData({ $axios }) {
    try {
      let products = await $axios.$get(process.env.API_URL + "/api/products");
      console.log(products);
      return {
        products: products.data
      };
    } catch (error) {
      console.log(error);
    }
  }
};
</script>
