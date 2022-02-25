<template>
  <section>
    <Breadcrumb :links="breadcrumb" />

    <section id="pembayaran-webview">
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <AccountMenu :name="'register'" />
          </div>
          <div
            class="
              col-sm-9
              offset-md-1
              align-self-start
              mt-2
              row
              justify-content-between
            "
          >
            <div class="col-sm-12">
              <label class="mb-0"
                ><h2 class="font-weight-bold">Pembayaran</h2></label
              >
            </div>
            <div class="mb-4">
              <hr
                style="height: 10%; width: 100%; border-width: 0; color: red"
                class="col-sm-12 mb-0 mt-0"
              />
              <p class="mb-"></p>
            </div>

            <div class="text-center container mb-5">
              <div>
                <div class="col-sm-2"></div>
                <div class="container border border-2 mt-3 rounded col-sm-8">
                  <!-- finish -->
                  <div
                    v-if="$route.params.status == 'finish'"
                    class="text-center mt-4 mb-4"
                  >
                    <template
                      v-if="$route.query.transaction_status == 'pending'"
                    >
                      <h4 class="fw-bold text-center">
                        Pembayaran belum selesai
                      </h4>

                      <p>
                        Klik tombol ini untuk kembali ke halaman sebelumnya dan
                        selesaikan pembayaran terlebih dahulu
                      </p>
                    </template>
                    <template v-else>
                      <h4 class="fw-bold text-center">Pembayaran selesai</h4>

                      <p>
                        Pembayaran telah Berhasil Klik tombol ini untuk lanjut
                        belanja. Terima kasih!!!
                      </p>
                    </template>
                    <button
                      class="btn btn-shadow text-white"
                      style="background-color: #841c26"
                    >
                      Lanjut
                    </button>
                  </div>
                  <!-- unfinish -->
                  <div
                    v-if="$route.params.status == 'unfinish'"
                    class="text-center mt-4 mb-4"
                  >
                    <template
                      v-if="$route.query.transaction_status == 'pending'"
                    >
                      <h4 class="fw-bold text-center">
                        Pembayaran belum selesai
                      </h4>

                      <p>
                        Klik tombol ini untuk kembali ke halaman sebelumnya dan
                        selesaikan pembayaran terlebih dahulu
                      </p>
                    </template>
                    <template v-else>
                      <h4 class="fw-bold text-center">Pembayaran selesai</h4>

                      <p>
                        Pembayaran telah Berhasil Klik tombol ini untuk lanjut
                        belanja. Terima kasih!!!
                      </p>
                    </template>
                    <button
                      class="btn btn-shadow text-white"
                      style="background-color: #841c26"
                    >
                      Periksa
                    </button>
                  </div>
                  <!-- tidak berhasi -->
                  <div
                    v-if="$route.params.status == 'error'"
                    class="text-center mt-4 mb-4"
                  >
                    <h4 class="fw-bold text-center">Pembayaran Gagal</h4>
                    <i class="fas fa-exclamation-triangle text-black"></i>
                    <p>
                      Pembayaran terhenti, silahkan refresh halaman ini atau
                      kembali ke halaman sebelumnya
                    </p>
                    <button
                      class="btn btn-shadow text-white"
                      style="background-color: #841c26"
                    >
                      kembali
                    </button>
                  </div>
                </div>
                <div class="col-sm-2"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="pembayaran-mobileview">
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <AccountMenuMobile :name="'register'" />
          </div>
          <div
            class="
              col-sm-9
              offset-md-1
              align-self-start
              mt-2
              mb-5
              row
              justify-content-between
            "
          >
            <div class="col-sm-12">
              <label class="mb-0"
                ><h2 class="font-weight-bold">
                  Pembayaran <span style="color: red">*</span>
                </h2></label
              >
            </div>
            <div class="mb-4">
              <hr
                style="height: 10%; width: 100%; border-width: 0; color: red"
                class="col-sm-12 mb-0 mt-0"
              />
              <h6 class="mt-2"></h6>
            </div>

            <div class="text-center container mt-5 mb-5">
              <div>
                <div class="col-sm-2"></div>
                <div class="container border border-2 mt-3 rounded col-sm-8">
                  <h3 class="fw-bold mt-2 mb-3">{{ this.message }}</h3>
                  <span>
                    <p class="text-center"></p>
                  </span>

                  <p>Click this button to go back to transaction list</p>
                  <button
                    @click="doRedirectTransaction"
                    class="btn text-white mb-3 p-2"
                    style="background-color: #841c26"
                  >
                    Back
                  </button>
                </div>
                <div class="col-sm-2"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <Footer2mobile />
    </section>
  </section>
</template>
<style lang="css" scoped>
#pembayaran-mobileview {
  display: none;
}
/* 0 - 991 px */
@media screen and (max-width: 500px) {
  #pembayaran-webview {
    display: none;
  }
  #pembayaran-mobileview {
    display: grid;
    font-size: 80%;
  }
}
</style>
<script>
export default {
  //https://docs.midtrans.com/en/technical-reference/sandbox-test
  // https://metrojayaindonesia.com/pembayaran/finish?order_id=1bc83b7c-0a6a-469d-baa5-271e9056cf06&status_code=200&transaction_status=capture
  //http://metrojaya.ddns.net:8000/payment/finish?order_id=771e4521-e9f4-4be2-b59d-b21828bedb5e&status_code=201&transaction_status=pending

  data() {
    return {
      breadcrumb: [],
      message: "",
    };
  },
  mounted() {
    this.breadcrumb = [
      {
        url: "/",
        name: "Beranda",
        class: "my-2 ms-3 breadcrumb-item opacity-50",
      },
      {
        url: "/profile",
        name: "Akun Saya",
        class: "my-2 ms-3 breadcrumb-item opacity-50",
      },
      {
        url: "/riwayat_pembelian",
        name: "Riwayat Pembelian",
        class: "my-2 ms-3 breadcrumb-item opacity-50",
      },
      {
        url: this.$route.path,
        name: this.$route.query.order_id,
        class: "my-2 breadcrumb-item active opacity-50",
      },
    ];
  },
  created() {
    if (this.$route.params.status == "unfinish") {
      this.message = "Pembayaran Gagal";
    } else if (this.$route.params.status == "finish") {
      this.message = "Pembayaran Berhasil";
    } else if (this.$route.params.status == "pending") {
      this.message = "Silahkan Melakukan Pembayaran";
    } else {
      this.message = "Terjadi Error, Silahkan Coba lagi";
    }
  },
  methods: {
    doRedirectTransaction() {
      this.$router.push("/riwayat_pembelian");
    },
  },
  watchQuery: ["order_id", "status_code", "transaction_status"],
};
</script>
