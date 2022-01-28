<template>
  <section>
    <section id="home-webview">
      <Header />
      <Carousel1 />
      <SwiperCardProduct :products="products" />
      <!-- produk unggulan -->
      <div class="d-flex container mb-3 mt-5">
        <h5 class="text-danger fw-bold">Produk Unggulan</h5>
        <button
          type="submit"
          class="
              btn
              text-danger
              btn-light btn-sm
              rounded
              p-2
              ms-3 
              "
          style="box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important;"
        >
          Lebih lanjut
        </button>
      </div>
      <SwiperCardProduct :products="products" />

      <!-- Paling banyak dibeli -->
      <div class="d-flex container mb-3 mt-5">
        <h5 class="text-danger fw-bold">Paling Banyak Dibeli</h5>
        <button
          type="submit"
          class="
              btn
              text-danger
              btn-light btn-sm
              rounded
              p-2
              ms-3 
              "
          style="box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important;"
        >
          Lebih lanjut
        </button>
      </div>
      <SwiperCardProduct :products="products" />

      <!-- Produk Terbaru -->
      <div class="d-flex container mb-3 mt-5">
        <h5 class="text-danger fw-bold">Produk Terbaru</h5>
        <button
          type="submit"
          class="
              btn
              text-danger
              btn-light btn-sm
              rounded
              p-2
              ms-3 
              "
          style="box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important;"
        >
          Lebih lanjut
        </button>
      </div>
      <SwiperCardProduct :products="products" />

      <Footer />
    </section>

    <section id="home-mobileview">
      <Header />
      <Carousel1 />
      <SwiperCardProduct :products="products" />
      <!-- produk unggulan -->
      <div class="d-flex container">
        <h5 class="text-danger fw-bold">Produk Unggulan</h5>
        <button
          type="submit"
          class="
              btn
              text-danger
              btn-light btn-sm
              rounded
              p-2
              ms-3 
              "
          style="box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important;"
        >
          Lebih lanjut
        </button>
      </div>
      <SwiperCardProduct :products="products" />

      <!-- Paling banyak dibeli -->
      <div class="d-flex container">
        <h5 class="text-danger fw-bold">Paling Banyak Dibeli</h5>
        <button
          type="submit"
          class="
              btn
              text-danger
              btn-light btn-sm
              rounded
              p-2
              ms-3 
              "
          style="box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important;"
        >
          Lebih lanjut
        </button>
      </div>
      <SwiperCardProduct :products="products" />

      <!-- Produk Terbaru -->
      <div class="d-flex container">
        <h5 class="text-danger fw-bold">Produk Terbaru</h5>
        <button
          type="submit"
          class="
              btn
              text-danger
              btn-light btn-sm
              rounded
              p-2
              ms-3 
              "
          style="box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important;"
        >
          Lebih lanjut
        </button>
      </div>
      <SwiperCardProduct :products="products" />
      <Footer2mobile />
      <div style="position: inherit;">
        <Footer />
      </div>
    </section>
  </section>
</template>
<script>
export default {
  async asyncData({ $axios }) {
    try {
      let products = await $axios.$get(process.env.API_URL + "/api/products");
      console.log(products);
      return {
        products: products.data
      };
    } catch (error) {
      console.log(error);
    }
  }
};
</script>
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
