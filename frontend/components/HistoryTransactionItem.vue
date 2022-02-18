<template>
  <section>
    <section id="history-webview">
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
            <template v-if="data.status_id == 1">
              <span
                class="
                  border border-danger border-2
                  text-danger
                  rounded-3
                  px-2
                  py-1
                "
                style="font-size: 12px !important"
              >
                {{ data.status.name }}</span
              >
            </template>
            <template v-else-if="data.status_id == 4">
              <span
                class="
                  border border-success border-2
                  text-success
                  rounded-3
                  px-2
                  py-1
                "
                style="font-size: 12px !important"
              >
                {{ data.status.name }}</span
              >
            </template>
            <template v-else>
              <span
                class="
                  border border-warning border-2
                  text-warning
                  rounded-3
                  px-2
                  py-1
                "
                style="font-size: 12px !important"
              >
                {{ data.status.name }}</span
              >
            </template>

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
              <template v-if="data.transaction_details.length > 1"
                ><span style="color: red">dan Lainnya</span></template
              >
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
              @click="showDetailTransaction"
              type="submit"
              class="
                mr-3
                btn
                text-danger
                btn-light btn-sm
                col-sm-9
                ms-0
                py-2
                px-2
              "
              style="box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important"
            >
              <b> Lihat Detail Transaksi</b>
            </b-button>
            <template v-if="data.status_id == 1">
              <nuxt-link
                :to="'/pembayaran/' + data.uuid"
                type="submit"
                class="
                  btn
                  text-danger
                  btn-light btn-sm
                  rounded
                  col-sm-4
                  ms-0
                  py-2
                  px-2
                "
                style="box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important"
              >
                <b> Bayar</b>
              </nuxt-link>
            </template>
            <template v-else-if="data.status_id == 4">
              <nuxt-link
                :to="'/review_list/' + data.uuid"
                class="
                  btn
                  text-danger
                  btn-light btn-sm
                  rounded
                  col-sm-5
                  ms-0
                  py-2
                  px-2
                "
                style="box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important"
              >
                <template
                  v-if="
                    data.rating &&
                    data.rating.length === data.transaction_details.length
                  "
                >
                  <b> Lihat Ulasan</b>
                </template>
                <template v-else>
                  <b> Beri Ulasan</b>
                </template>
              </nuxt-link>
            </template>
            <template v-else>
              <button
                type="submit"
                class="
                  btn
                  text-danger
                  btn-light btn-sm
                  rounded
                  col-sm-4
                  ms-0
                  py-2
                  px-2
                "
                style="box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important"
              >
                <b> Lainnya</b>
              </button>
            </template>
          </span>
        </div>
      </div>
    </section>

    <!-- Mobile -->
    <section id="history-mobileview" class="border-top">
      <div class="my-3 mx-1 row">
        <div class="row pe-0 ps-2">
          <div class="d-flex col-2 align-self-center justify-content-center">
            <img src="/img/audiblelogo.png" alt="" />
          </div>

          <div class="col pe-0">
            <p class="mb-1">#{{ data.uuid }}</p>
            <template v-if="data.status_id == 1">
              <div
                class="
                  border border-danger
                  col-sm-
                  text-danger
                  rounded-3
                  text-center
                  p-0
                "
              >
                {{ data.status.name }}
              </div>
            </template>
            <template v-else-if="data.status_id == 4">
              <div
                class="
                  border border-success
                  col-5
                  border-2
                  text-success
                  rounded-3
                  text-center
                  p-0
                "
                style=""
              >
                {{ data.status.name }}
              </div>
            </template>
            <template v-else>
              <div
                class="
                  border border-warning
                  col-11
                  border-2
                  text-warning
                  rounded-3
                  text-center
                  p-0
                "
              >
                {{ data.status.name }}
              </div>
            </template>
            <p class="my-1">{{ data.transaction_details[0].name }}</p>
            <p class="font-weight-bold">
              {{ data.transaction_details[0].qty }} x Rp
              {{
                Number(data.transaction_details[0].price).toLocaleString(
                  "id-ID"
                )
              }}
            </p>
          </div>

          <div class="col-3 p-0">
            <p class="text-right">
              Rp. {{ Number(data.grand_total).toLocaleString("id-ID") }}
            </p>
          </div>
        </div>

        <div class="row p-0">
          <div class="col-2 p-0"></div>
          <div class="col-2 p-0"></div>
          <span class="d-flex mt-2 col p-0 justify-content-end">
            <b-button
              v-b-modal.modal-detailtransaksi
              @click="showDetailTransaction"
              type="submit"
              class="mr-3 btn text-danger btn-light btn-sm rounded col-8"
              style="box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important"
            >
              <b> Lihat Detail Transaksi</b>
            </b-button>
            <template v-if="data.status_id == 1">
              <nuxt-link
                :to="'/pembayaran/' + data.uuid"
                type="submit"
                class="btn text-danger btn-light btn-sm rounded py-1 px-3"
                style="box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important"
              >
                <b> Bayar</b>
              </nuxt-link>
            </template>
            <template v-else-if="data.status_id == 4">
              <button
                type="submit"
                class="btn text-danger btn-light btn-sm rounded py-1 px-3"
                style="box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important"
              >
                <template
                  v-if="
                    data.rating &&
                    data.rating.length === data.transaction_details.length
                  "
                >
                  <b> Lihat Ulasan</b>
                </template>
                <template v-else>
                  <b> Beri Ulasan</b>
                </template>
              </button>
            </template>
            <template v-else>
              <button
                type="submit"
                class="btn text-danger btn-light btn-sm rounded py-1 px-3"
                style="box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important"
              >
                <b> Lainnya</b>
              </button>
            </template>
          </span>
        </div>
      </div>
    </section>
  </section>
</template>

<script>
export default {
  props: ["data"],
  methods: {
    showDetailTransaction() {
      this.$parent.showDetailTransaction(this.data);
    },
  },
};
</script>

<style lang="css" scoped>
#history-mobileview {
  display: none;
}
/* 0 - 991 px */
@media screen and (max-width: 500px) {
  .border-top {
    border-top: 1px solid #c63442 !important;
  }

  #history_logo {
    display: none !important;
  }

  #history-webview {
    display: none;
  }
  #history-mobileview {
    display: flex;
  }
}
</style>
