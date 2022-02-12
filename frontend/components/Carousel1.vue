<template>
  <section>
    <section id="carousel1-webview">
      <div>
        <b-carousel
          id="carousel-1"
          style="text-shadow: 0px 0px 2px #000"
          fade
          controls
          indicators
        >
          <b-carousel-slide
            v-for="slide in data"
            :key="slide.id"
            :caption="slide.id"
            :img-src="slide.src"
            style="width: 100%; height: 300px"
          >
          </b-carousel-slide>
        </b-carousel>
      </div>
      <div
        class="bg-image container pt-4"
        style=" background-image: url('/img/promo.png'); height: 100px"
      >
        <h3 class="text-white text-center">Kejar DISKON!!!</h3>
        <p id="demo"></p>
      </div>
      <br />
    </section>
    <section id="carousel1-mobileview">
      <div>
        <b-carousel
          id="carousel-1"
          style="text-shadow: 0px 0px 0px #000"
          fade
          controls
        >
          <b-carousel-slide
            v-for="slide in data"
            :key="slide.id"
            :caption="slide.id"
            :img-src="slide.src"
            style="width: 100%; height: 230px"
          >
          </b-carousel-slide>
        </b-carousel>
      </div>
      <div
        class="bg-image container"
        style="background-color: #841c26; height: 30px"
      >
        <h3 class="text-white text-center">Kejar DISKON!!!</h3>
      </div>
      <br />
    </section>
  </section>
</template>

<style lang="css" scoped>
#carousel1-mobile {
  display: none;
}
#carousel1-mobileview {
  display: none;
}
/* 0 - 991 px */
@media screen and (max-width: 500px) {
  #carousel1_logo {
    display: none !important;
  }

  #carousel1-webview {
    display: none;
  }

  #carousel1-mobile {
    display: contents;
  }

  #carousel1-mobileview {
    display: grid;
  }
}
</style>

<script>
export default {
  props: ["data"]
};
</script>
