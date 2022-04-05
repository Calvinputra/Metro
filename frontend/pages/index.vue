<template>
  <section>
    <LoadingSpinner v-if="!isLoaded" />
    <section id="home-webview" v-if="isLoaded">
      <Carousel1 :data="sliderData" />
      <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-2 d-flex align-items-center justify-content-center">
          <img style="width: 130px" src="/img/toto1.png" alt="" />
        </div>
        <div class="col-sm-2 d-flex align-items-center justify-content-center">
          <img style="width: 150px" class="mt-3" src="/img/onda.jpg" alt="" />
        </div>
        <div class="col-sm-2 d-flex align-items-center justify-content-center">
          <img style="width: 170px" src="/img/san-ei.jpg" alt="" />
        </div>
        <div class="col-sm-2 d-flex align-items-center justify-content-center">
          <img style="width: 150px" src="/img/master_lock.png" alt="" />
        </div>
        <div class="col-sm-2 d-flex align-items-center justify-content-center">
          <img style="width: 130px" src="/img/dorma.png" alt="" />
        </div>

        <div class="col-sm-1"></div>
      </div>
      <template v-for="content in contents">
        <template v-if="content.title">
          <div
            :key="'webview' + content.id"
            class="d-flex container mb-3 mt-5"
            style="font-family: 'Nunito Sans'"
          >
            <h5 class="text-danger fw-bold">{{ content.title }}</h5>
          </div>
        </template>
        <section :key="content.id">
          <SwiperCardProduct :products="content.products" />
        </section>
      </template>
      <div class="row mt-5">
        <div class="col-sm-1"></div>
        <div class="col-sm-3">
          <center>
            <h5 class="fw-bold">Metode Pembayaran</h5>
            <hr style="opacity: 1; color: black; height: 2px" />
          </center>
          <div class="row">
            <div class="col-sm-4">
              <img style="width: 80px" src="/img/mastercard.png" alt="" />
              <img style="width: 80px" src="/img/amex.png" alt="" />
              <img style="width: 80px" src="/img/jcb.png" alt="" />
              <img style="width: 80px" src="/img/visa.png" alt="" />
            </div>
            <div class="col-sm-4">
              <img class="mt-3" style="width: 80px" src="/img/bca.png" alt="" />
              <img
                style="margin-top: 35px; width: 80px"
                src="/img/bri.png"
                alt=""
              />
              <img
                class="mt-4 pt-2"
                style="width: 80px"
                src="/img/bni.png"
                alt=""
              />
              <img
                class="mt-2"
                style="width: 90px"
                src="/img/mandiri.png"
                alt=""
              />
            </div>
            <div class="col-sm-4">
              <img
                class="mt-4"
                style="margin-left: 10px; width: 100px"
                src="/img/cimb.png"
                alt=""
              />
              <img
                style="margin-top: 30px; margin-left: 30px; width: 60px"
                src="/img/mega.png"
                alt=""
              />
              <img
                style="width: 100px; margin-top: -10px; margin-left: 10px"
                src="/img/ocbc.png"
                alt=""
              />
              <img
                style="width: 100px; margin-top: -25px; margin-left: 10px"
                src="/img/permata.png"
                alt=""
              />
            </div>
          </div>
        </div>
        <div class="col-sm-4"></div>
        <div class="col-sm-4"></div>
      </div>
    </section>

    <section id="home-mobileview" v-if="isLoaded" style="font-size: 80%">
      <Carousel1 :data="sliderData" />

      <template v-for="content in contents">
        <template v-if="content.title">
          <div :key="'mobile' + content.id" class="d-flex container">
            <h5 class="text-danger fw-bold">{{ content.title }}</h5>
          </div>
        </template>
        <section :key="content.id">
          <SwiperCardProduct :products="content.products" />
        </section>
      </template>
      <div class="row">
        <div class="col-sm-1"></div>
      </div>
      <Footer2mobile />
      <div style="position: inherit"></div>
    </section>
  </section>
</template>

<style scoped></style>

<style lang="css" scoped>
#home-mobile {
  display: none;
}
#home-mobileview {
  display: none;
}
/* 0 - 991 px */
@media screen and (max-width: 500px) {
  #home_logo {
    display: none !important;
  }

  #home-webview {
    display: none;
  }

  #home-mobile {
    display: contents;
  }

  #home-mobileview {
    display: grid;
  }
}
</style>

<script>
export default {
  data() {
    return {
      isLoaded: false,
      products: [],
      sliderData: [
        { src: "https://picsum.photos/1024/480/?image=10", key: 1 },
        { src: "https://picsum.photos/1024/480/?image=12", key: 2 },
        { src: "https://picsum.photos/1024/480/?image=22", key: 3 },
      ],
      contents: [],
    };
  },
  async asyncData({ $axios }) {
    try {
      let sliders = await $axios.$get(process.env.API_URL + "/api/sliders");
      let contents = await $axios.get(
        process.env.API_URL + "/api/homepage_contents?take=10"
      );
      let sliderData = sliders.data.map((slide) => {
        return {
          src: process.env.ASSET_URL + "/" + slide.image,
          key: slide.id,
        };
      });

      return {
        sliderData: sliderData,
        contents: contents.data.data,
      };
    } catch (error) {
      console.log(error);
    }
  },
  mounted() {
    this.isLoaded = true;
  },
};
</script>
