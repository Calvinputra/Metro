<template>
  <section style="font-family: 'Nunito Sans'">
    <!-- not use -->
    <section id="rating-webview">
      <div style="color: red" class="mt-3">
        <hr
          style="height: 3px; border-width: 0; color: red"
          class="col-sm-12 mb-0 mt-0"
        />
      </div>
      <div class="d-flex" style="justify-content: space-between">
        <div class="d-flex ml-2 mt-4">
          <div>
            <img class="mr-2" src="/img/audiblelogo.png" alt="" />
          </div>
          <div>
            <span
              class="border border-danger border-2 text-danger rounded-3 px-2 py-1"
              style="font-size: 12px !important"
            >
              {{ data.status.name }}</span
            >
            <span
              class="border border-success border-2 text-success rounded-3 px-2 py-1"
              style="font-size: 12px !important"
            >
              {{ data.status.name }}</span
            >
            <span
              class="border border-warning border-2 text-warning rounded-3 px-2 py-1"
              style="font-size: 12px !important"
            >
              {{ data.status.name }}</span
            >

            #{{ data.uuid }}
            <br />
            <span class="mt-4">{{ data.transaction_details[0].name }}</span>
            <p>
              {{ data.transaction_details[0].qty }} x Rp
              {{
                Number(data.transaction_details[0].price).toLocaleString(
                  "id-ID"
                )
              }}
              <span style="color: red">dan Lainnya</span>
            </p>
          </div>
        </div>
        <div>
          <p class="text-right mt-3">
            Rp. {{ Number(data.grand_total).toLocaleString("id-ID") }}
          </p>
          <span class="d-flex justify-content-end">
            <b-button
              v-b-modal.modal-detailtransaksi
              type="submit"
              class="mr-3 btn text-danger btn-light btn-sm col-sm-9 ms-0 p-2"
              style="box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important"
            >
              <b> Lihat Detail Transaksi</b>
            </b-button>
            <nuxt-link
              :to="'/pembayaran/' + data.uuid"
              type="submit"
              class="btn text-danger btn-light btn-sm rounded col-sm-4 ms-0 py-2 px-2"
              style="box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important"
            >
              <b> Bayar</b>
            </nuxt-link>
            <nuxt-link
              :to="'/review_list/' + data.uuid"
              class="btn text-danger btn-light btn-sm rounded col-sm-5 ms-0 py-2 px-2"
              style="box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important"
            >
              <b> Beri Ulasan</b>
            </nuxt-link>
            <button
              type="submit"
              class="btn text-danger btn-light btn-sm rounded col-sm-4 ms-0 py-2 px-2"
              style="box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important"
            >
              <b> Lainnya</b>
            </button>
          </span>
        </div>
      </div>
    </section>

    <!-- Mobile -->
    <section id="rating-mobileview" class="border-top"></section>
  </section>
</template>

<style lang="css" scoped>
#rating-mobileview {
  display: none;
}
/* 0 - 991 px */
@media screen and (max-width: 500px) {
  #rating-webview {
    display: none;
  }
  #rating-mobileview {
    display: block;
    font-size: 80%;
  }
}
</style>

<script>
export default {
  props: ["data"],
  methods: {},
};
</script>
