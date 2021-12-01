<template>
  <section>
    <Header />
    <Breadcrumb :links="breadcrumb" />
    <section>
      <template>
        <div class="container">
          <b-carousel
            id="carousel-1"
            v-model="slide"
            :interval="4000"
            controls
            indicators
            background="#ababab"
            img-width="840"
            img-height="240"
          >
            <!-- Text slides with image -->
            <b-carousel-slide img-src="/img/logo.png"></b-carousel-slide>
            <b-carousel-slide img-src="/img/logo.png"></b-carousel-slide>
            <b-carousel-slide img-src="/img/logo.png"></b-carousel-slide>
          </b-carousel>
        </div>
      </template>
      <div class="bg-danger">
        <h3 class="text-white text-center mt-5">
          Kejar DISKON!!!
        </h3>
      </div>
    </section>

    <Footer />
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
  }
};
</script>
