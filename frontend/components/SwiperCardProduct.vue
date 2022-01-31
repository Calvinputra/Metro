<template>
  <section>
    <template v-if="products.length > 0">
      <section id="swipercard-webview">
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
          </div>
          <!-- If we need navigation buttons -->
          <div>
            <div class="swiper-button-prev pr-5 me-5"></div>
          </div>
          <div>
            <div class="swiper-button-next ps-5 ml-5"></div>
          </div>
        </div>
      </section>
      <section id="swipercard-mobileview" style="">
        <div class="swiper-container" style="width: 100%">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide me-3 ms-3">
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
          </div>
          <!-- If we need navigation buttons -->
          <div>
            <div class="swiper-button-prev pe-5"></div>
          </div>
          <div>
            <div class="swiper-button-next ps-5"></div>
          </div>
        </div>
      </section>
    </template>
    <template v-else>
      <!-- TODO tampilan kalo data blm connect -->
      Data gagal di load, silahkan coba lagi
    </template>
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
      spaceBetween: 20,
      breakpoints: {
        768: {
          slidesPerView: 3,
        },
        250: {
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

<style lang="css" scoped>
#swipercard-mobile {
  display: none;
}
#swipercard-mobileview {
  display: none;
}
/* 0 - 991 px */
@media screen and (max-width: 500px) {
  #swipercard_logo {
    display: none !important;
  }

  #swipercard-webview {
    display: none;
  }

  #swipercard-mobile {
    display: contents;
  }

  #swipercard-mobileview {
    display: grid;
  }
}
.swiper-container {
  width: 80%;
  height: 400px;
}
</style>
