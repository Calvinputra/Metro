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
            caption="First slide"
            img-src="https://picsum.photos/1024/480/?image=10"
            style="width: 100%; height: 300px"
          >
          </b-carousel-slide>
          <b-carousel-slide
            caption="Second Slide"
            img-src="https://picsum.photos/1024/480/?image=12"
            style="width: 100%; height: 300px"
          ></b-carousel-slide>
          <b-carousel-slide
            caption="Third Slide"
            img-src="https://picsum.photos/1024/480/?image=22"
            style="width: 100%; height: 300px"
          ></b-carousel-slide>
        </b-carousel>
      </div>
      <div
        class="bg-image container "
        style=" background-color: #841C26;
    height: 50px"
      >
        <h3 class="text-white text-center mt-5">Kejar DISKON!!!</h3>
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
            img-src="https://picsum.photos/1024/480/?image=10"
            style="width: 100%; height: 230px"
          >
          </b-carousel-slide>
          <b-carousel-slide
            img-src="https://picsum.photos/1024/480/?image=12"
            style="width: 100%; height: 230px"
          ></b-carousel-slide>
          <b-carousel-slide
            img-src="https://picsum.photos/1024/480/?image=22"
            style="width: 100%; height: 230px"
          ></b-carousel-slide>
        </b-carousel>
      </div>
      <div
        class="bg-image container "
        style=" background-color: #841C26;
    height: 30px"
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
