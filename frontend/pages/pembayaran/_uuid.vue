<template>
  <section>
    <ModalDetailTransaksi :transaction="data" />

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
              <button
                class="text-success"
                @click="copyText(app_url + $nuxt.$route.fullPath)"
              >
                Salin
              </button>
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
              <b
                v-b-modal.modal-detailtransaksi
                class="text-success"
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
    <div class="text-center">
      <h5 class="col-sm-9 ms-4">Cara Pembayaran</h5>
      <p class="col-sm-12 ms-5 ps-5">
        Pembayaran dapat dilakukan melalui retail lain dengan biaya layanan
        berikut:
      </p>
    </div>
    <Footer />
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
          name: "Check Out",
          class: "my-2 breadcrumb-item opacity-50",
        },
        {
          url: "/pembayaran/" + this.$route.params.uuid,
          name: "Pembayaran",
          class: "my-2 breadcrumb-item active opacity-50",
        },
      ],
      app_url: process.env.APP_URL + ":" + process.env.PORT,
    };
  },
  async asyncData({ $axios, params }) {
    try {
      let response = await $axios(
        process.env.API_URL + `/api/transactions/${params.uuid}`
      );
      let response_data = response.data.data;

      return {
        data: response_data,
        snapToken: "b16f2eec-e7fd-40bb-b4c9-895f82fb8a6b",
      };
    } catch (error) {
      console.log(error);
    }
  },
  head() {
    return {
      script: [
        {
          src: "https://app.sandbox.midtrans.com/snap/snap.js",
          "data-client-key": "SET_YOUR_CLIENT_KEY_HERE",
        },
      ],
    };
  },
  methods: {
    async copyText(text) {
      try {
        await this.$copyText(text);
      } catch (e) {
        console.error(e);
      }
    },
  },
};
</script>
