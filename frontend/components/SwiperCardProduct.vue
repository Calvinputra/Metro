<template>
  <section>
    <template v-if="products.length > 0">
      <section id="swipercard-webview">
        <div
          class="swiper-container pt-4"
          style="background-image: url('/img/bg-home.png'); background-repeat: no-repeat; background-size: 100% 250px; background-position: center; "
        >
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper mt-2">
            <!-- Slides -->

            <div
              class="swiper-slide"
              v-for="product in this.products"
              :key="product.id"
            >
              <CardProductSwiper
                :data="product"
                :url="'/products/' + product.id"
              />
            </div>
          </div>
          <!-- If we need navigation buttons -->
          <div>
            <div class="swiper-button-prev" style="color:white; "></div>
          </div>
          <div>
            <div class="swiper-button-next" style="color:white"></div>
          </div>
        </div>
      </section>
      <section id="swipercard-mobileview" style="">
        <div class="swiper-container" style="width: 100%">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div
              class="swiper-slide me-3 ms-3"
              v-for="product in this.products"
              :key="'mobile' + product.id"
            >
              <CardProductSwiper
                :data="product"
                :url="'/products/' + product.id"
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
        1200: {
          slidesPerView: 3
        },
        768: {
          slidesPerView: 2
        },
        250: {
          slidesPerView: 2
        }
      },
      pagination: {
        el: ".swiper-pagination"
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
      }
    });
  },
  props: ["products"]
};
</script>

<style lang="css" scoped>
#swipercard-mobile {
  display: none;
}
#swipercard-mobileview {
  display: none;
}
.swiper-button-prev:after {
  font-size: 15px !important;
}
.swiper-button-next:after {
  font-size: 15px !important;
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
