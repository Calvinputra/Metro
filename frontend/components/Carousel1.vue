<template>
  <section>
    <link
      href="https://fonts.googleapis.com/css?family=Nunito Sans"
      rel="stylesheet"
    />
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
        class="bg-image container d-flex align-items-center justify-content-center pt-3"
        style="
          background-image: url('/img/promo.png');
          height: 70px;
          background-size: cover;
        "
      >
        <h3
          class="fw-bold text-white text-center m-0"
          style="font-family: 'Nunito Sans'; font-size: 24px"
        >
          Kejar DISKON!!!
        </h3>
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
        class="bg-image container justify-content-center d-flex align-items-center"
        style="
          background-image: url('/img/promo.png');
          height: 50px;
          background-size: cover;
        "
      >
        <h3
          class="fw-bold text-white m-0"
          style="font-family: 'Nunito Sans'; font-size: 14px"
        >
          Kejar DISKON!!!
        </h3>
        <p id="demo"></p>
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
  props: ["data"],
};
</script>
