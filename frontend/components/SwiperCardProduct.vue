<template>
  <section>
    <div class="swiper-container">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
          <CardProductSwiper
            :data="this.products[0]"
            :url="'/products/' + this.products[0].id"
          />
        </div>
        <div class="swiper-slide">
          <CardProductSwiper
            :data="this.products[1]"
            :url="'/products/' + this.products[1].id"
          />
        </div>
        <div class="swiper-slide">
          <CardProductSwiper
            :data="this.products[2]"
            :url="'/products/' + this.products[2].id"
          />
        </div>
        <div class="swiper-slide">
          <CardProductSwiper
            :data="this.products[2]"
            :url="'/products/' + this.products[2].id"
          />
        </div>
        <div class="swiper-slide">
          <CardProductSwiper
            :data="this.products[2]"
            :url="'/products/' + this.products[2].id"
          />
        </div>
        <div class="swiper-slide">
          <CardProductSwiper
            :data="this.products[2]"
            :url="'/products/' + this.products[2].id"
          />
        </div>
        ...
      </div>
      <!-- If we need navigation buttons -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
  </section>
</template>

<script>
import Swiper, { Navigation, Pagination } from "swiper";
import "swiper/swiper-bundle.css";

Swiper.use([Navigation, Pagination]);

export default {
  mounted() {
    new Swiper(".swiper-container", {
      loop: true,
      slidesPerView: 3,
      spaceBetween: 30,
      breakpoints: {
        768: {
          slidesPerView: 3,
        },
        500: {
          slidesPerView: 2,
        },
      },
      pagination: {
        el: ".swiper-pagination",
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  },
  props: ["products"],
};
</script>

<style scoped>
.swiper-container {
  width: 80%;
  height: 400px;
}
</style>

