<template>
  <section>
    <LoadingSpinner v-if="!isLoaded" />
    <ModalDetailTransaksi :transaction="data" />
    <section id="pembayaran-webview" v-if="isLoaded">
      <Breadcrumb :links="breadcrumb" />
      <section>
        <div class="container"></div>
      </section>

      <div class="container col-sm-6 mt-5">
        <div class="card bg-light">
          <div class="card-header">
            <div class="d-flex justify-content-between">
              <template v-if="isPaymentCreated">
                <p class="mb-0">Virtual Account {{ va_numbers[0].bank }}</p>
              </template>
              <template v-else
                ><p>Anda Belum memilih metode pembayaran</p></template
              >
              <img style="width: 200px" src="/img/midtrans.png" alt="" />
            </div>
          </div>
          <div class="card-body">
            <div class="d-flex justify-content-between mb-4">
              <div>
                <span>
                  <h7> Kode Pembayaran </h7>
                </span>
                <span>
                  <template v-if="isPaymentCreated">
                    <h5>
                      {{ va_numbers[0].bank }} - {{ va_numbers[0].va_number }}
                    </h5>
                  </template>
                  <template v-else><h5>-</h5></template>
                </span>
              </div>
              <div class="mt-3">
                <template v-if="isPaymentCreated">
                  <b
                    class="text-success rounded bu"
                    @click="copyText(va_numbers[0].va_number)"
                  >
                    Salin
                  </b>
                </template>
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
                <b v-b-modal.modal-detailtransaksi class="text-success"
                  >Lihat Detail</b
                >
              </div>
            </div>
          </div>
        </div>
      </div>
      <br />
      <div class="text-center">
        <nuxt-link
          to="/products"
          type="button"
          class="border border-success btn col-sm-2 text-success"
        >
          Belanja Lagi
        </nuxt-link>
        <button type="button" class="btn btn-success col-sm-2" id="pay-button">
          Lanjutkan Pembayaran
        </button>
      </div>
      <br />
      <client-only>
        <script type="text/javascript">
          var payButton = document.getElementById("pay-button");

          /* For example trigger on button clicked, or any time you need */
          payButton.addEventListener("click", function () {
            /* in this case, the snap token is retrieved from the Input Field */
            var snapToken = "{{snapToken}}";
            snap.pay(snapToken);
          });
        </script>
      </client-only>
    </section>

    <section id="pembayaran-mobileview" v-if="isLoaded">
      <section class="mt-3">
        <div class="container"></div>
      </section>

      <div class="container col-sm-6 mt-5">
        <div class="card bg-light">
          <div class="card-header">
            <div class="d-flex justify-content-between">
              <template v-if="isPaymentCreated">
                <p class="mb-0">Virtual Account {{ va_numbers[0].bank }}</p>
              </template>
              <template v-else>
                <div class="align-items-center d-flex">
                  <p>Anda Belum memilih metode pembayaran</p>
                </div>
              </template>
              <div class="align-items-center d-flex">
                <img style="height: 20px" src="/img/midtrans.png" alt="" />
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="d-flex justify-content-between mb-4">
              <div>
                <span>
                  <h7> Kode Pembayaran </h7>
                </span>
                <span>
                  <template v-if="isPaymentCreated">
                    <h5>
                      {{ va_numbers[0].bank }} - {{ va_numbers[0].va_number }}
                    </h5>
                  </template>
                  <template v-else><h5>-</h5></template>
                </span>
              </div>
              <div class="mt-3">
                <template v-if="isPaymentCreated">
                  <b
                    class="text-success rounded bu"
                    @click="copyText(va_numbers[0].va_number)"
                  >
                    Salin
                  </b>
                </template>
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
                <b v-b-modal.modal-detailtransaksi class="text-success"
                  >Lihat Detail</b
                >
              </div>
            </div>
          </div>
        </div>
      </div>

      <br />
      <div class="text-center mt-3 mb-5">
        <nuxt-link
          to="/products"
          type="button"
          style="font-size: 12px"
          class="border border-success p-2 btn text-success"
        >
          Belanja Lagi
        </nuxt-link>
        <button
          type="button"
          class="btn btn-success p-2"
          style="font-size: 12px"
          id="pay-button-mobile"
        >
          Lanjutkan Pembayaran
        </button>
      </div>
      <br />

      <client-only>
        <script type="text/javascript">
          var payButton = document.getElementById("pay-button");
          var payButtonMobile = document.getElementById("pay-button-mobile");

          /* For example trigger on button clicked, or any time you need */
          payButton.addEventListener("click", function () {
            /* in this case, the snap token is retrieved from the Input Field */
            var snapToken = "{{snapToken}}";
            snap.pay(snapToken);
          });
          payButtonMobile.addEventListener("click", function () {
            /* in this case, the snap token is retrieved from the Input Field */
            var snapToken = "{{snapToken}}";
            snap.pay(snapToken);
          });
        </script>
      </client-only>
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
          url: "/cart",
          name: "Keranjang Saya",
          class: "my-2 breadcrumb-item opacity-50",
        },
        {
          url: "/checkout",
          name: "Checkout",
          class: "my-2 breadcrumb-item opacity-50",
        },
        {
          url: "/pembayaran/" + this.$route.params.uuid,
          name: "Pembayaran",
          class: "my-2 breadcrumb-item active opacity-50",
        },
      ],
      app_url: process.env.APP_URL + ":" + process.env.PORT,
      isLoaded: false,
      isPaymentCreated: false,
    };
  },
  async asyncData({ $axios, params, redirect }) {
    try {
      let response = await $axios.$get(
        process.env.API_URL + `/api/transactions/${params.uuid}`
      );
      let response_data = response.data;
      let isPaymentCreated = false;
      let va_numbers = null;
      if (response_data.midtrans_data) {
        isPaymentCreated = true;
        const temp_data = JSON.parse(response_data.midtrans_data);
        va_numbers = temp_data.data.va_numbers;
      }
      return {
        data: response_data,
        snapToken: response_data.snap_token,
        isPaymentCreated: isPaymentCreated,
        va_numbers: va_numbers,
      };
    } catch (error) {
      console.log(error);
    }
  },
  mounted() {
    this.isLoaded = false;
    if (this.data.status.id == 2) {
      this.$toast.success("Terima kasih atas pembayaran Anda", {
        theme: "bubble",
        position: "bottom-right",
        duration: 5000,
      });
      this.$router.push("/riwayat_pembelian");
    } else if (this.data.status.id == 5) {
      this.$toast.error(
        "Transaksi Anda telah expired silahkan ulangi transaksi Anda",
        {
          theme: "bubble",
          position: "bottom-right",
          duration: 5000,
        }
      );
      this.$router.push("/riwayat_pembelian");
    } else {
      this.isLoaded = true;
    }
  },
  head() {
    return {
      script: [
        {
          src: "https://app.sandbox.midtrans.com/snap/snap.js",
          "data-client-key": process.env.MIDTRANS_CLIENT_KEY,
        },
      ],
    };
  },
  methods: {
    async copyText(text) {
      try {
        await this.$copyText(text);
        this.$toast.success("Berhasil menyalin kode pembayaran", {
          theme: "bubble",
          position: "bottom-right",
          duration: 5000,
        });
      } catch (e) {
        console.error(e);
      }
    },
  },
};
</script>

<style lang="css" scoped>
#pembayaran-mobile {
  display: none;
}
#pembayaran-mobileview {
  display: none;
}
/* 0 - 991 px */
@media screen and (max-width: 500px) {
  #pembayaran_logo {
    display: none !important;
  }

  #pembayaran-webview {
    display: none;
  }

  #pembayaran-mobile {
    display: contents;
  }

  #pembayaran-mobileview {
    display: grid;
    position: sticky;
  }
}
</style>
