<template>
  <section>
    <!-- Modal INIT -->
    <ModalUlasan :detail="{ selectedDetail }" />
    <Breadcrumb :links="breadcrumb" />
    <template v-if="success">
      <section id="riwayat-webview">
        <div class="container">
          <!-- row -->
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
                  ><h2 class="font-weight-bold">
                    Rating Product <span style="color: red">*</span>
                  </h2></label
                >
              </div>
              <div class="mb-4">
                <hr
                  style="height: 3px; width: 100%; border-width: 0; color: red;"
                  class="col-sm-12 mb-0 mt-0 "
                />
                <p class="mb-">Beri Rating untuk transaksi ini.</p>
              </div>
              <div class="rating-list">
                <RatingItem
                  v-for="detail in data.transaction_details"
                  :key="detail.id"
                  :detail="detail"
                  :date="data.date_view"
                  :rating="
                    data.rating
                      ? data.rating.find(
                          r => r.product_id === detail.product_id
                        )
                      : null
                  "
                />
              </div>
             
            </div>
            <!-- end row -->
          </div>
        </div>
      </section>
      <section id="riwayat-mobileview"></section>
    </template>
  </section>
</template>

<script>
export default {
  middleware: "auth",
  methods: {
    showModalUlasan(detail) {
      this.selectedDetail = detail;
      console.log(this.selectedDetail);
    }
  },
  async asyncData({ $axios, params }) {
    try {
      let response = await $axios.$get(
        process.env.API_URL + `/api/transactions/${params.uuid}?action=get`
      );
      let response_data = response.data;
      return {
        data: response_data,
        success: response.success
      };
    } catch (error) {
      console.log(error);
    }
  },
  data() {
    return {
      selectedDetail: {},
      breadcrumb: [
        {
          url: "/",
          name: "Beranda",
          class: "my-2 ms-3 breadcrumb-item opacity-50"
        },
        {
          url: "/riwayat_pembelian",
          name: "Riwayat Pembelian",
          class: "my-2 ms-3 breadcrumb-item opacity-50"
        },

        {
          url: "/review_list/" + this.$route.params.uuid,
          name: "Review Barang",
          class: "my-2 breadcrumb-item active opacity-50"
        }
      ]
    };
  }
};
</script>

<style lang="css" scoped>
#riwayat-mobileview {
  display: none;
}
/* 0 - 991 px */
@media screen and (max-width: 500px) {
  #riwayat_logo {
    display: none !important;
  }

  #riwayat-webview {
    display: none;
  }
  #riwayat-mobileview {
    display: grid;
    font-size: 80%;
  }
}
</style>
