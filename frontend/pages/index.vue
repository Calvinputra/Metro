<template>
  <section>
    <LoadingSpinner v-if="!isLoaded" />
    <section id="home-webview" v-if="isLoaded">
      <Carousel1 :data="sliderData" />

      <template v-for="content in contents">
        <template v-if="content.title">
          <div
            :key="'webview' + content.id"
            class="d-flex container mb-3 mt-5"
            style="font-family: 'Nunito Sans';"
          >
            <h5 class="text-danger fw-bold">{{ content.title }}</h5>
            <button
              type="button"
              class="btn text-danger btn-light btn-sm rounded p-2 ms-3"
              style="box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important;font-family: 'Nunito Sans';"
            >
              Lebih lanjut
            </button>
          </div>
        </template>
        <section :key="content.id">
          <SwiperCardProduct :products="content.products" />
        </section>
      </template>
    </section>

    <section id="home-mobileview" v-if="isLoaded">
      <Carousel1 :data="sliderData" />

      <template v-for="content in contents">
        <template v-if="content.title">
          <div :key="'mobile' + content.id" class="d-flex container">
            <h5 class="text-danger fw-bold">{{ content.title }}</h5>
            <button
              type="submit"
              class="btn text-danger btn-light btn-sm rounded p-2 ms-3"
              style="box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important"
            >
              Lebih lanjut
            </button>
          </div>
        </template>
        <section :key="content.id">
          <SwiperCardProduct :products="content.products" />
        </section>
      </template>

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
        { src: "https://picsum.photos/1024/480/?image=22", key: 3 }
      ],
      contents: []
    };
  },
  async asyncData({ $axios }) {
    try {
      let sliders = await $axios.$get(process.env.API_URL + "/api/sliders");
      let contents = await $axios.get(
        process.env.API_URL + "/api/homepage_contents?take=10:"
      );
      let sliderData = sliders.data.map(slide => {
        return {
          src: process.env.ASSET_URL + "/" + slide.image,
          key: slide.id
        };
      });

      return {
        sliderData: sliderData,
        contents: contents.data.data
      };
    } catch (error) {
      console.log(error);
    }
  },
  mounted() {
    this.isLoaded = true;
  }
};
</script>
