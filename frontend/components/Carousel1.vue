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
          indicators
        >
          <b-carousel-slide
            v-for="slide in data"
            :key="slide.id"
            :caption="slide.id"
            :img-src="slide.src"
            style="width: 100%"
          >
          </b-carousel-slide>
        </b-carousel>
      </div>
      <br />
    </section>
    <section id="carousel1-mobileview">
      <div>
        <b-carousel
          id="carousel-1"
          style="text-shadow: 0px 0px 0px #000"
          fade
          indicators
        >
          <b-carousel-slide
            v-for="slide in data"
            :key="slide.id"
            :caption="slide.id"
            :img-src="slide.src"
            style="width: 100%; height: 100px"
          >
          </b-carousel-slide>
        </b-carousel>
      </div>

      <br />
    </section>
  </section>
</template>

<style>
.carousel-indicators li {
  background-color: red !important;
}
.carousel-indicators {
  margin-bottom: 0px;
}
</style>

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
