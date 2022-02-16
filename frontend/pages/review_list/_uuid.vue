<template>
  <section>
    <Breadcrumb :links="breadcrumb" />
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
                style="height: 10%; width: 100%; border-width: 0; color: red"
                class="col-sm-12 mb-0 mt-0"
              />
              <p class="mb-">Beri Rating untuk transaksi ini.</p>
            </div>
            <div class="row">
              <hr
                style="height: 3px; width: 100%; border-width: 0; color: red"
                class="col-sm-12 mb-2 mt-0"
              />
              <div class="col-sm-3">
                <img
                  style="width: 150px; height:100px; "
                  src="/img/logo.png"
                  alt=""
                />
              </div>
              <div class="col-sm-8">
                <h5>Nama Barang</h5>
                <p style="margin-top: -5px;">Tanggal Pembelian: 20 feb 2022</p>
                <div class="text-right">
                  <button
                    type="submit"
                    class="btn text-danger btn-light btn-sm rounded col-sm-3 ms-5"
                    style="box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important"
                  >
                    Beri Ulasan
                  </button>
                </div>
              </div>
              <hr
                style="height: 3px; width: 100%; border-width: 0; color: red"
                class="col-sm-12 mb-0 mt-2"
              />
            </div>
          </div>
          <!-- end row -->
        </div>
      </div>
    </section>
    <section id="riwayat-mobileview"></section>
  </section>
</template>

<script>
export default {
  middleware: "auth",
  methods: {},
  async asyncData({ $axios, params }) {
    try {
      let response = await $axios.$get(
        process.env.API_URL + `/api/transactions/${params.uuid}?action=get`
      );
      let response_data = response.data;
      //console.log(response_data);
      return {
        data: response_data
      };
    } catch (error) {
      console.log(error);
    }
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
