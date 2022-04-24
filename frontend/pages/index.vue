<template>
  <section>
    <link
      rel="stylesheet"
      href="https://unpkg.com/flickity@2/dist/flickity.min.css"
    />
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <link
      rel="icon"
      href="https://cdn.discordapp.com/attachments/722800563489865779/965986999486017557/Frame_1.png"
      type="image/x-icon"
    />
    <LoadingSpinner v-if="!isLoaded" />
    <Carousel1 :data="sliderData" />
    <section class="container" id="home-webview" v-if="isLoaded">
      <!-- <div class="row p-0 m-0">
        <div class="col-sm-1"></div>
        <div class="col-sm-2 d-flex align-items-center justify-content-center">
          <img style="width: 130px" src="/img/toto1.png" alt="" />
        </div>
        <div class="col-sm-2 d-flex align-items-center justify-content-center">
          <img style="width: 150px" src="/img/onda.png" alt="" />
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
      </div> -->
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
      <div class="row mt-5 p-0 m-0">
        <center>
          <h3 class="fw-bold mt-4">Metoder Pembayaran</h3>
          <div
            class="main-carousel"
            data-flickity='{ "cellAlign": "left", "contain": true , "autoPlay": true , "wrapAround": true }'
          >
            <div
              class="carousel-cell d-flex align-items-center"
              style="padding: 0rem 5.5rem"
            >
              <img class="mx-3" style="width: 33%" src="img/gopay.png" alt="" />
              <img class="mx-3" style="width: 33%" src="img/qris.png" alt="" />
              <img
                class="mx-3"
                style="width: 33%"
                src="img/shoppee.png"
                alt=""
              />
            </div>
            <div
              class="carousel-cell d-flex align-items-center"
              style="padding: 0rem 5.5rem"
            >
              <img class="mx-3" style="width: 33%" src="img/bri.png" alt="" />
              <img class="mx-3" style="width: 33%" src="img/bca.png" alt="" />
              <img
                class="mx-3"
                style="width: 33%"
                src="img/mandiri.png"
                alt=""
              />
            </div>
            <div
              class="carousel-cell d-flex align-items-center"
              style="padding: 0rem 5.5rem"
            >
              <img
                class="mx-3"
                style="width: 33%"
                src="img/alfamart.png"
                alt=""
              />
              <img
                class="mx-3"
                style="width: 33%"
                src="img/indomaret.png"
                alt=""
              />
              <img
                class="mx-3"
                style="width: 33%"
                src="img/alfamidi.jpg"
                alt=""
              />
            </div>
          </div>
        </center>
      </div>
    </section>

    <section id="home-mobileview" v-if="isLoaded">
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
      <div class="row"></div>
      <center>
        <h5 class="fw-bold">Metode Pembayaran</h5>
        <div
          class="main-carousel"
          data-flickity='{ "cellAlign": "left", "contain": true , "autoPlay": true , "wrapAround": true }'
        >
          <div
            class="carousel-cell d-flex align-items-center"
            style="padding: 0rem 5.5rem"
          >
            <img class="mx-2" style="width: 60%" src="img/gopay.png" alt="" />
            <img class="mx-2" style="width: 60%" src="img/qris.png" alt="" />
            <img class="mx-2" style="width: 60%" src="img/shoppee.png" alt="" />
          </div>
          <div
            class="carousel-cell d-flex align-items-center"
            style="padding: 0rem 5.5rem"
          >
            <img class="mx-2" style="width: 60%" src="img/bri.png" alt="" />
            <img class="mx-2" style="width: 60%" src="img/bca.png" alt="" />
            <img class="mx-2" style="width: 60%" src="img/mandiri.png" alt="" />
          </div>
          <div
            class="carousel-cell d-flex align-items-center"
            style="padding: 0rem 5.5rem"
          >
            <img
              class="mx-2"
              style="width: 60%"
              src="img/alfamart.png"
              alt=""
            />
            <img
              class="mx-2"
              style="width: 60%"
              src="img/indomaret.png"
              alt=""
            />
            <img
              class="mx-2"
              style="width: 60%"
              src="img/alfamidi.jpg"
              alt=""
            />
          </div>
        </div>
      </center>
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

  .flickity-button-icon {
    position: absolute;
    left: 20%;
    top: 20%;
    width: 40%;
    height: 60%;
  }
  .flickity-page-dots {
    display: none;
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
