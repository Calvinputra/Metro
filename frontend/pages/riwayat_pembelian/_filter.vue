<template>
  <section style="font-family: 'Nunito Sans'">
    <!-- Modal INIT -->
    <ModalDetailTransaksi :transaction="selectedTransaction" />
    <!-- END -->
    <section id="riwayat-webview">
      <Breadcrumb :links="breadcrumb" />
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <AccountMenu :name="'register'" />
          </div>
          <div
            class="col-sm-9 offset-md-1 align-self-start mt-2 row justify-content-between"
          >
            <div class="col-sm-12">
              <label class="mb-0"
                ><h2 class="font-weight-bold">
                  Riwayat Pembelian <span style="color: red">*</span>
                </h2></label
              >
            </div>
            <div class="mb-4">
              <hr
                style="height: 3px; width: 100%; border-width: 0; color: red"
                class="col-sm-12 mb-0 mt-0"
              />
              <p class="mb-">Lacak Pembelian Kamu di halaman ini.</p>
            </div>

            <div>
              <span class="mr-5">Status: </span>
              <template
                v-if="
                  this.$route.params.filter == '' ||
                  this.$route.params.filter == undefined
                "
              >
                <nuxt-link
                  to="/riwayat_pembelian"
                  type="submit"
                  class="btn text-white btn-danger btn-sm rounded col-sm-1 mx-1 my-1 py-1 px-2"
                  style="box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important"
                >
                  Semua
                </nuxt-link>
              </template>
              <template v-else>
                <nuxt-link
                  to="/riwayat_pembelian"
                  type="submit"
                  class="btn text-black btn-sm col-sm-1 mx-1 my-1 py-1 px-2"
                >
                  Semua
                </nuxt-link>
              </template>
              <!-- menunggu pembayaran -->
              <template
                v-if="this.$route.params.filter == 'menunggu_pembayaran'"
              >
                <nuxt-link
                  to="/riwayat_pembelian/menunggu_pembayaran"
                  type="submit"
                  class="btn text-white btn-danger btn-sm rounded col-sm-3 mx-1 my-1 py-1 px-2"
                  style="box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important"
                >
                  Menunggu Pembayaran
                </nuxt-link>
              </template>
              <template v-else>
                <nuxt-link
                  to="/riwayat_pembelian/menunggu_pembayaran"
                  type="submit"
                  class="btn text-black btn-sm col-sm-3 mx-1 my-1 py-1 px-2"
                >
                  Menunggu Pembayaran
                </nuxt-link>
              </template>
              <!-- berlangsung -->
              <template v-if="this.$route.params.filter == 'berlangsung'">
                <nuxt-link
                  to="/riwayat_pembelian/berlangsung"
                  type="submit"
                  class="btn text-white btn-danger btn-sm rounded col-sm-2 mx-1 my-1 py-1 px-2"
                  style="box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important"
                >
                  Berlangsung
                </nuxt-link>
              </template>
              <template v-else>
                <nuxt-link
                  to="/riwayat_pembelian/berlangsung"
                  type="submit"
                  class="btn text-black btn-sm col-sm-2 mx-1 my-1 py-1 px-2"
                >
                  Berlangsung
                </nuxt-link>
              </template>
              <!-- selesai -->
              <template v-if="this.$route.params.filter == 'selesai'">
                <nuxt-link
                  to="/riwayat_pembelian/selesai"
                  type="submit"
                  class="btn text-white btn-danger btn-sm rounded col-sm-1 mx-1 my-1 py-1 px-2"
                  style="box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important"
                >
                  Selesai
                </nuxt-link>
              </template>
              <template v-else>
                <nuxt-link
                  to="/riwayat_pembelian/selesai"
                  type="submit"
                  class="btn text-black btn-sm col-sm-1 mx-1 my-1 py-1 px-2"
                >
                  Selesai
                </nuxt-link>
              </template>
              <!-- tidak Berhasil -->
              <template v-if="this.$route.params.filter == 'tidak_berhasil'">
                <nuxt-link
                  to="/riwayat_pembelian/tidak_berhasil"
                  type="submit"
                  class="btn text-white btn-danger btn-sm rounded col-sm-2 mx-1 my-1 py-1 px-2"
                  style="box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important"
                >
                  Tidak Berhasil
                </nuxt-link>
              </template>
              <template v-else>
                <nuxt-link
                  to="/riwayat_pembelian/tidak_berhasil"
                  type="submit"
                  class="btn text-black btn-sm col-sm-2 mx-1 my-1 py-1 px-2"
                >
                  Tidak Berhasil
                </nuxt-link>
              </template>
            </div>
            <section v-for="transaction in transactions" :key="transaction.id">
              <HistoryTransactionItem :data="transaction" />
            </section>
            <!-- TODO tulisan belum ada transaksi -->
            <template v-if="Object.keys(transactions).length === 0">
              <div class="text-center mb-5">
                <h5 class="fw-bold mt-4">Tidak ada Produk yang masuk</h5>
                <h6>Anda belum pernah melakukan transaksi disini sebelumnya</h6>
                <i class="fas fa-exclamation-triangle text-black"></i>
              </div>
            </template>
            <div class="overflow-auto" style="margin-top: 20px">
              <b-pagination-nav
                :link-gen="linkGen"
                :number-of-pages="this.totalPage"
                first-text="First"
                prev-text="Prev"
                next-text="Next"
                last-text="Last"
              ></b-pagination-nav>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="riwayat-mobileview">
      <div class="container" style="font-size: 80%">
        <Breadcrumb :links="breadcrumb" />

        <div class="row">
          <div
            class="col-sm-9 offset-md-1 align-self-start mb-5 row justify-content-between"
          >
            <div class="col-sm-12">
              <label class="mb-0"
                ><h2 class="font-weight-bold">
                  Riwayat Pembelian <span style="color: red">*</span>
                </h2></label
              >
            </div>
            <div class="mb-4">
              <hr
                style="height: 10%; width: 100%; border-width: 0; color: red"
                class="col-sm-12 mb-0 mt-0"
              />
              <h6 class="mt-2">Lacak Pembelian Kamu di halaman ini.</h6>
            </div>

            <div class="mb-3 ms-3">
              <h6 class="text-center">Status:</h6>
              <div
                class="col d-flex justify-content-center"
                style="flex-wrap: wrap"
              >
                <template
                  v-if="
                    this.$route.params.filter == '' ||
                    this.$route.params.filter == undefined
                  "
                >
                  <nuxt-link
                    to="/riwayat_pembelian"
                    type="submit"
                    class="btn text-white btn-danger btn-sm rounded mx-1 my-1 py-1 px-2"
                    style="
                      box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important;
                    "
                  >
                    Semua
                  </nuxt-link>
                </template>
                <template v-else>
                  <nuxt-link
                    to="/riwayat_pembelian"
                    type="submit"
                    class="btn text-black btn-sm mx-1 my-1 py-1 px-2"
                  >
                    Semua
                  </nuxt-link>
                </template>

                <template
                  v-if="this.$route.params.filter == 'menunggu_pembayaran'"
                >
                  <nuxt-link
                    to="/riwayat_pembelian/menunggu_pembayaran"
                    type="submit"
                    class="btn text-white btn-danger btn-sm rounded mx-1 my-1 py-1 px-2"
                    style="
                      box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important;
                    "
                  >
                    Menunggu Pembayaran
                  </nuxt-link>
                </template>
                <template v-else>
                  <nuxt-link
                    to="/riwayat_pembelian/menunggu_pembayaran"
                    type="submit"
                    class="btn text-black btn-sm mx-1 my-1 py-1 px-2"
                  >
                    Menunggu Pembayaran
                  </nuxt-link>
                </template>
                <template v-if="this.$route.params.filter == 'selesai'">
                  <nuxt-link
                    to="/riwayat_pembelian/selesai"
                    type="submit"
                    class="btn text-white btn-danger btn-sm rounded mx-1 my-1 py-1 px-2"
                    style="
                      box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important;
                    "
                  >
                    Selesai
                  </nuxt-link>
                </template>
                <template v-else>
                  <nuxt-link
                    to="/riwayat_pembelian/selesai"
                    type="submit"
                    class="btn text-black btn-sm mx-1 my-1 py-1 px-2"
                  >
                    Selesai
                  </nuxt-link>
                </template>

                <template v-if="this.$route.params.filter == 'tidak_berhasil'">
                  <nuxt-link
                    to="/riwayat_pembelian/tidak_berhasil"
                    type="submit"
                    class="btn text-white btn-danger btn-sm rounded mx-1 my-1 py-1 px-2"
                    style="
                      box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important;
                    "
                  >
                    Tidak Berhasil
                  </nuxt-link>
                </template>
                <template v-else>
                  <nuxt-link
                    to="/riwayat_pembelian/tidak_berhasil"
                    type="submit"
                    class="btn text-black btn-sm mx-1 my-1 py-1 px-2"
                  >
                    Tidak Berhasil
                  </nuxt-link>
                </template>

                <template v-if="this.$route.params.filter == 'berlangsung'">
                  <nuxt-link
                    to="/riwayat_pembelian/berlangsung"
                    type="submit"
                    class="btn text-white btn-danger btn-sm rounded mx-1 my-1 py-1 px-2"
                    style="
                      box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important;
                    "
                  >
                    Berlangsung
                  </nuxt-link>
                </template>
                <template v-else>
                  <nuxt-link
                    to="/riwayat_pembelian/berlangsung"
                    type="submit"
                    class="btn text-black btn-sm mx-1 my-1 py-1 px-2"
                  >
                    Berlangsung
                  </nuxt-link>
                </template>
              </div>
            </div>
            <section
              v-for="transaction in transactions"
              :key="transaction.id"
              class="pe-0"
            >
              <HistoryTransactionItem :data="transaction" />
            </section>
            <!-- TODO tulisan belum ada transaksi -->
            <template v-if="Object.keys(transactions).length === 0">
              <h6
                class="text-center pt-5 ms-2"
                style="border-top: 1px solid #c63442 !important"
              >
                Belum ada transaksi
              </h6>
            </template>
          </div>
        </div>
      </div>
      <Footer2mobile />
    </section>

    <client-only>
      <!-- include VueJS first -->
      <script src="https://unpkg.com/vue@latest"></script>

      <!-- use the latest vue-select release -->
      <script src="https://unpkg.com/vue-select@latest"></script>
      <link
        rel="stylesheet"
        href="https://unpkg.com/vue-select@latest/dist/vue-select.css"
      />

      <!-- or point to a specific vue-select release -->
      <script src="https://unpkg.com/vue-select@3.0.0"></script>
      <link
        rel="stylesheet"
        href="https://unpkg.com/vue-select@3.0.0/dist/vue-select.css"
      />
    </client-only>
  </section>
</template>

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

<script>
export default {
  middleware: "auth",
  async asyncData({ $axios, params, query }) {
    try {
      let data = {};
      if (params.filter == "menunggu_pembayaran") {
        data = {
          page_filter: "menunggu_pembayaran",
          page: query.page,
          paginate: query.paginate,
        };
      } else if (params.filter == "selesai") {
        data = {
          page_filter: "selesai",
          page: query.page,
          paginate: query.paginate,
        };
      } else if (params.filter == "tidak_berhasil") {
        data = {
          page_filter: "tidak_berhasil",
          page: query.page,
          paginate: query.paginate,
        };
      } else if (params.filter == "berlangsung") {
        data = {
          page_filter: "berlangsung",
          page: query.page,
          paginate: query.paginate,
        };
      } else {
        data = {
          page: query.page,
          paginate: query.paginate,
        };
      }
      let transactions = await $axios.$get(
        process.env.API_URL + "/api/transactions",
        { params: data }
      );
      console.log(transactions);
      let links = [];
      for (let i = 1; i <= transactions.meta.last_page; i++) {
        links.push(i);
      }
      return {
        transactions: transactions.data,
        links: links,
        totalPage: transactions.meta.last_page,
      };
    } catch (error) {
      console.log(error);
    }
  },
  methods: {
    showDetailTransaction(transaction) {
      this.selectedTransaction = transaction;
    },
    linkGen(pageNum) {
      //console.log("PARAMS:"+this.$route.params.filter);
      let url = "riwayat_pembelian";
      if (typeof this.$route.params.filter !== "undefined") {
        url += "/" + this.$route.params.filter;
      }
      return {
        path: "/" + url + "?",
        query: {
          page: pageNum,
          paginate: this.$route.query.paginate,
        },
      };
    },
    pageGen(pageNum) {
      return this.links[pageNum - 1].slice(1);
    },
  },
  data() {
    return {
      selectedTransaction: {},
      breadcrumb: [
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
          class: "my-2 breadcrumb-item active opacity-50",
        },
      ],
    };
  },
  watchQuery: ["page", "paginate"],
};
</script>
