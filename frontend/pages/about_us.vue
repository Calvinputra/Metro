<template>
  <section>
    <section id="about-webview" style="font-family: 'Nunito Sans'">
      <Breadcrumb :links="breadcrumb" />
      <section>
        <div class="row">
          <div class="text-center">
            <h4 class="mt-4">Metro Jaya</h4>
            <br />
          </div>
          <div class="col-sm-2"></div>
          <div
            class="text-center col-sm-8"
            style="text-align: justify !important; font-size: 16px"
          >
            <p style="font-size: 16px">
              Berdiri sejak tahun 2005, METRO JAYA adalah importir dan
              distributor sanitari terbaik di Indonesia. METRO JAYA memiliki
              visi untuk menyediakan produk sanitari terbaik dengan harga
              terendah ke seluruh mancanegara. Dengan pengalaman selama
              bertahun-tahun dan kemitraan dengan brand sanitari ternama seperti
              Toto, Solid, Wasser, Onda, Ariston dan 10 brand lainnya, METRO
              JAYA yakin bisa menyediakan produk terbaik untuk keperluan
              sanitari Anda.
            </p>
          </div>
          <div class="col-sm-2"></div>
        </div>
        <br />
        <br />
        <br />
        <div class="row">
          <div class="col-sm-3"></div>
          <div class="text-center col-sm-6">
            <h4 class="text-center">Kelebihan Metro Jaya</h4>
          </div>
        </div>
        <br />
        <div class="row mt-3 mb-3">
          <div class="col-sm-1"></div>
          <div class="col-sm-2 p-0 m-0">
            <img style="width: 240px" src="/img/harga_metro.png" alt="" />
          </div>
          <div class="col-sm-2">
            <img
              style="width: 240px; margin-left: 50px"
              src="/img/garansi_metro.png"
              alt=""
            />
          </div>
          <div class="col-sm-1"></div>
          <div class="col-sm-2">
            <img style="width: 240px" src="/img/pengalaman_metro.png" alt="" />
          </div>
          <div class="col-sm-2">
            <img
              style="width: 240px; margin-left: 50px"
              src="/img/kurir_metro.png"
              alt=""
            />
          </div>
          <div class="col-sm-1"></div>
        </div>
        <br />
        <br />
        <div class="text-center">
          <h4>Lokasi Kami</h4>
          <br />
          <img style="width: 500px" src="/img/image_metro.png" alt="" />

          <h6 class="mt-4">Jalan Kenari Lama Blok AK5 No. 13 Salemba Raya</h6>
        </div>
      </section>
    </section>
    <section
      id="about-mobileview"
      style="font-size: 80%; font-family: 'Nunito Sans'"
    >
      <Breadcrumb :links="breadcrumb" />
      <section>
        <h4 class="text-center">Metro Jaya</h4>
        <br />
        <div class="row">
          <div class="col-2"></div>
          <div class="text-center col-8" style="text-align: justify !important">
            <p>
              Berdiri sejak tahun 2005, METRO JAYA adalah importir dan
              distributor sanitari terbaik di Indonesia. METRO JAYA memiliki
              visi untuk menyediakan produk sanitari terbaik dengan harga
              terendah ke seluruh mancanegara. Dengan pengalaman selama
              bertahun-tahun dan kemitraan dengan brand sanitari ternama seperti
              Toto, Solid, Wasser, Onda, Ariston dan 10 brand lainnya, METRO
              JAYA yakin bisa menyediakan produk terbaik untuk keperluan
              sanitari Anda.
            </p>
          </div>
          <div class="col-2"></div>
        </div>
        <br />
        <br />
        <h4 class="text-center">Kelebihan Metro Jaya</h4>
        <br />
        <div class="row ms-3">
          <div class="col-6">
            <img style="width: 150px" src="/img/harga_metro.png" alt="" />
          </div>
          <div class="col-6">
            <img style="width: 150px" src="/img/garansi_metro.png" alt="" />
          </div>
          <div class="col-6 mt-3">
            <img style="width: 150px" src="/img/pengalaman_metro.png" alt="" />
          </div>
          <div class="col-6 mt-3">
            <img style="width: 150px" src="/img/kurir_metro.png" alt="" />
          </div>
        </div>

        <br />
        <div class="text-center">
          <h4>Lokasi Kami</h4>
          <br />
          <img style="width: 300px" src="/img/image_metro.png" alt="" />
          <br />
          <h6 class="mt-4">Jalan Kenari Lama Blok AK5 No. 13 Salemba Raya</h6>
        </div>
      </section>
      <Footer2mobile />
    </section>
  </section>
</template>

<script>
export default {
  data() {
    return {
      breadcrumb: [
        {
          url: "/",
          name: "Beranda",
          class: "my-2 ms-3 breadcrumb-item opacity-50",
        },

        {
          url: "/about_us",
          name: "Tentang Kami",
          class: "my-2 breadcrumb-item active opacity-50",
        },
      ],
    };
  },
};
</script>

<style lang="css" scoped>
#about-mobile {
  display: none;
}
#about-mobileview {
  display: none;
}
/* 0 - 991 px */
@media screen and (max-width: 500px) {
  #about_logo {
    display: none !important;
  }

  #about-webview {
    display: none;
  }

  #about-mobile {
    display: contents;
  }

  #about-mobileview {
    display: grid;
  }
}
</style>
