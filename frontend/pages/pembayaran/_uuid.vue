<template>
  <section>
    <Header />
    <Breadcrumb :links="breadcrumb" />
    <section>
      <div class="container"></div>
    </section>
    <div class="text-center">
      <h5>Selesaikan Pembayaran dalam</h5>
      <!-- bootstrap countdown nanti -->
      <p>Batas Akhir Pembayaran</p>
      <h5>Kamis, 18 November 2021 23:53</h5>
    </div>

    <div class="container col-sm-6 mt-5">
      <div class="card bg-light">
        <div class="card-header">
          <div class="d-flex justify-content-between">
            <p>Alfamaret/Alfamidi/Lawson/Dan+dan</p>
            <img src="/img/audiblelogo.png" alt="" />
          </div>
        </div>
        <div class="card-body">
          <div class="d-flex justify-content-between mb-4">
            <div>
              <span>
                <h7> Kode Pembayaran </h7>
              </span>
              <span>
                <h5>{{ data.uuid }}</h5>
              </span>
            </div>
            <div class="mt-3">
              <a class="text-success" href="">Salin</a>
            </div>
          </div>
          <div class="d-flex justify-content-between">
            <div>
              <span>
                <p>Total Pembayaran</p>
              </span>
              <span>
                <h5>
                  Rp {{ Number(data.grand_total).toLocaleString("id-ID") }}
                </h5>
              </span>
            </div>

            <div class="mt-3">
              <a class="text-success" href="">Lihat Detail</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br />
    <div class="text-center">
      <button
        type="button"
        class="border border-success btn col-sm-2 text-success"
      >
        Belanja Lagi
      </button>
      <button type="button" class="btn btn-success col-sm-2">
        Lanjutkan Pembayaran
      </button>
    </div>
    <br />
    <div class="text-center">
      <h5 class="col-sm-9 ms-4">Cara Pembayaran</h5>
      <p class="col-sm-12 ms-5 ps-5">
        Pembayaran dapat dilakukan melalui retail lain dengan biaya layanan
        berikut:
      </p>
    </div>
    <Footer />
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
          class: "my-2 ms-3 breadcrumb-item opacity-50"
        },
        {
          url: "/register",
          name: "Register",
          class: "my-2 breadcrumb-item active opacity-50"
        }
      ]
    };
  },
  async asyncData({ $axios, params }) {
    try {
      let response = await $axios(
        process.env.API_URL + `/api/transactions/${params.uuid}`
      );
      let response_data = response.data.data;

      return {
        data: response_data
      };
    } catch (error) {
      console.log(error);
    }
  }
};
</script>
