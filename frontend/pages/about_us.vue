<template>
  <section>
    <section id="about-webview" style="font-family: 'Nunito Sans'">
      <Breadcrumb :links="breadcrumb" />
      <section>
        <div class="row">
          <div class="col-sm-3"></div>
          <div class="text-center col-sm-6">
            <h4>Metro Jaya</h4>
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
          <div class="col-sm-3"></div>
        </div>
        <br />
        <div class="text-center">
          <h4 class="text-center">Road Map</h4>
          <img style="width: 300px" src="/img/metro.png" alt="" />
          <br />
        </div>
        <div class="row">
          <div class="col-sm-3">
            <img style="width: 250px" src="/img/metro.png" alt="" />
          </div>
          <div class="col-sm-3">
            <img style="width: 250px" src="/img/metro.png" alt="" />
          </div>
          <div class="col-sm-3">
            <img style="width: 250px" src="/img/metro.png" alt="" />
          </div>
          <div class="col-sm-3">
            <img style="width: 250px" src="/img/metro.png" alt="" />
          </div>
        </div>
        <div class="row">
          <div class="col-sm-3"></div>

          <div class="text-center col-sm-6">
            <h4 class="text-center">Kelebihan Metro Jaya</h4>
            <p class="text-left">
              Harga <br />
              Kami bermitra langsung dengan brand penyedia produk sanitari
              sehingga harga yang akan Anda dapatkan lebih rendah dari agen
              sanitari lain.
              <br />
              <br />
              Garansi
              <br />Karena kami adalah distributor resmi, maka Anda pasti
              mendapatkan garansi resmi dari pabrik mitra kami dengan syarat dan
              ketentuan yang berlaku. <br />
              <br />
              Pengalaman
              <br />Dengan pengalaman selama bertahun-tahun, kami sudah bertemu
              dan memberikan solusi kepada kustomer dengan berbagai proyek dan
              rancangan yang mereka miliki. <br />
              <br />
              Kurir
              <br />Kami memiliki tujuan untuk bisa menmberikan produk sanitari
              termurah tapi berkualitas ke seluruh Indonesia dengan bantuan
              ekspedisi profesional seperti JNE, JNT, Dakota, Sicepat, Anteraja,
              Rex 10, dan Paket Kilat.
            </p>
          </div>
          <div class="col-sm-3"></div>
        </div>
        <br />
        <div class="text-center">
          <h4>Lokasi Kami</h4>
          <img style="width: 300px" src="/img/metro.png" alt="" />
        </div>
      </section>
    </section>
    <section
      id="about-mobileview"
      style="font-size: 80%; font-family: 'Nunito Sans'"
    >
      <Breadcrumb :links="breadcrumb" />
      <section>
        <div class="row">
          <div class="col-2"></div>
          <div class="text-center col-8">
            <h4>Metro Jaya</h4>

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
        <div class="text-center">
          <h4 class="text-center">Road Map</h4>
          <img style="width: 300px" src="/img/metro.png" alt="" />
          <br />
        </div>
        <div class="row">
          <div class="col-3">
            <img style="width: 80px" src="/img/metro.png" alt="" />
          </div>
          <div class="col-3">
            <img style="width: 80px" src="/img/metro.png" alt="" />
          </div>
          <div class="col-3">
            <img style="width: 80px" src="/img/metro.png" alt="" />
          </div>
          <div class="col-3">
            <img style="width: 80px" src="/img/metro.png" alt="" />
          </div>
        </div>
        <div class="row">
          <div class="col-1"></div>

          <h4 class="text-center">Kelebihan Metro Jaya</h4>
          <div class="text-center col-10">
            <p class="text-left ms-5">
              Harga <br />
              Kami bermitra langsung dengan brand penyedia produk sanitari
              sehingga harga yang akan Anda dapatkan lebih rendah dari agen
              sanitari lain.
              <br />
              <br />
              Garansi
              <br />Karena kami adalah distributor resmi, maka Anda pasti
              mendapatkan garansi resmi dari pabrik mitra kami dengan syarat dan
              ketentuan yang berlaku.
              <br />
              <br />
              Pengalaman
              <br />Dengan pengalaman selama bertahun-tahun, kami sudah bertemu
              dan memberikan solusi kepada kustomer dengan berbagai proyek dan
              rancangan yang mereka miliki.
              <br />
              <br />
              Kurir
              <br />Kami memiliki tujuan untuk bisa menmberikan produk sanitari
              termurah tapi berkualitas ke seluruh Indonesia dengan bantuan
              ekspedisi profesional seperti JNE, JNT, Dakota, Sicepat, Anteraja,
              Rex 10, dan Paket Kilat.
            </p>
          </div>
          <div class="col-1"></div>
        </div>
        <br />
        <div class="text-center">
          <h4>Lokasi Kami</h4>
          <img style="width: 200px" src="/img/metro.png" alt="" />
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
