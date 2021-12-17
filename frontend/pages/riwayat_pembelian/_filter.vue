<template>
  <section>
    <!-- Modal INIT -->
    <ModalDetailTransaksi :transaction="selectedTransaction" />
    <!-- END -->
    <Header />
    <Breadcrumb :links="breadcrumb" />
    <section id="riwayat-webview">
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
                <a
                  href="/riwayat_pembelian"
                  type="submit"
                  class="
                    btn
                    text-white
                    btn-danger btn-sm
                    rounded
                    col-sm-1
                    ms-0
                    py-2
                    px-2
                  "
                  style="box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important;"
                >
                  Semua
                </a>
              </template>
              <template v-else>
                <a
                  href="/riwayat_pembelian"
                  type="submit"
                  class="btn text-black btn-sm col-sm-1 ms-0 ps-0 py-2 px-2"
                >
                  Semua
                </a>
              </template>

              <template
                v-if="this.$route.params.filter == 'menunggu_pembayaran'"
              >
                <a
                  href="/riwayat_pembelian/menunggu_pembayaran"
                  type="submit"
                  class="
                    btn
                    text-white
                    btn-danger btn-sm
                    shadow
                    rounded
                    col-sm-3
                    ms-0
                    ps-0
                    py-2
                    px-2
                  "
                >
                  Menunggu Pembayaran
                </a>
              </template>
              <template v-else>
                <a
                  href="/riwayat_pembelian/menunggu_pembayaran"
                  type="submit"
                  class="btn text-black btn-sm col-sm-3 ms-0 ps-0 py-2 px-2"
                >
                  Menunggu Pembayaran
                </a>
              </template>
              <template v-if="this.$route.params.filter == 'selesai'">
                <a
                  href="/riwayat_pembelian/selesai"
                  type="submit"
                  class="
                    btn
                    text-white
                    btn-danger btn-sm
                    shadow
                    rounded
                    col-sm-1
                    ms-0
                    ps-0
                    py-2
                    px-2
                  "
                >
                  Selesai
                </a>
              </template>
              <template v-else>
                <a
                  href="/riwayat_pembelian/selesai"
                  type="submit"
                  class="btn text-black btn-sm col-sm-1 ms-0 ps-0 py-2 px-2"
                >
                  Selesai
                </a>
              </template>

              <template v-if="this.$route.params.filter == 'tidak_berhasil'">
                <a
                  href="/riwayat_pembelian/tidak_berhasil"
                  type="submit"
                  class="
                    btn
                    text-white
                    btn-danger btn-sm
                    shadow
                    rounded
                    col-sm-2
                    ms-0
                    ps-0
                    py-2
                    px-2
                  "
                >
                  Tidak Berhasil
                </a>
              </template>
              <template v-else>
                <a
                  href="/riwayat_pembelian/tidak_berhasil"
                  type="submit"
                  class="btn text-black btn-sm col-sm-2 ms-0 ps-0 py-2 px-2"
                >
                  Tidak Berhasil
                </a>
              </template>

              <template v-if="this.$route.params.filter == 'berlangsung'">
                <a
                  href="/riwayat_pembelian/berlangsung"
                  type="submit"
                  class="
                    btn
                    text-white
                    btn-danger btn-sm
                    shadow
                    rounded
                    col-sm-2
                    ms-0
                    ps-0
                    py-2
                    px-2
                  "
                >
                  Berlangsung
                </a>
              </template>
              <template v-else>
                <a
                  href="/riwayat_pembelian/berlangsung"
                  type="submit"
                  class="btn text-black btn-sm col-sm-2 ms-0 ps-0 py-2 px-2"
                >
                  Berlangsung
                </a>
              </template>
            </div>
            <section v-for="transaction in transactions" :key="transaction.id">
              <HistoryTransactionItem :data="transaction" />
            </section>
            <!-- TODO tulisan belum ada transaksi -->
            <template v-if="Object.keys(transactions).length === 0">
              Belum ada transaksi
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
              <p class="mb-">Lacak Pembelian Kamu di halaman ini.</p>
            </div>

            <div>
              <div class="mr-5">Status:</div>
              <template
                v-if="
                  this.$route.params.filter == '' ||
                  this.$route.params.filter == undefined
                "
              >
                <a
                  href="/riwayat_pembelian"
                  type="submit"
                  class="
                    btn
                    text-white
                    btn-danger btn-sm
                    shadow
                    rounded
                    ms-0
                    ps-0
                    py-2
                    px-2
                  "
                >
                  Semua
                </a>
              </template>
              <template v-else>
                <a
                  href="/riwayat_pembelian"
                  type="submit"
                  class="btn text-black btn-sm ms-0 ps-0 py-2 px-2"
                >
                  Semua
                </a>
              </template>

              <template
                v-if="this.$route.params.filter == 'menunggu_pembayaran'"
              >
                <a
                  href="/riwayat_pembelian/menunggu_pembayaran"
                  type="submit"
                  class="
                    btn
                    text-white
                    btn-danger btn-sm
                    shadow
                    rounded
                    ms-0
                    ps-0
                    py-2
                    px-2
                  "
                >
                  Menunggu Pembayaran
                </a>
              </template>
              <template v-else>
                <a
                  href="/riwayat_pembelian/menunggu_pembayaran"
                  type="submit"
                  class="btn text-black btn-sm ms-0 ps-0 py-2 px-2"
                >
                  Menunggu Pembayaran
                </a>
              </template>
              <template v-if="this.$route.params.filter == 'selesai'">
                <a
                  href="/riwayat_pembelian/selesai"
                  type="submit"
                  class="
                    btn
                    text-white
                    btn-danger btn-sm
                    shadow
                    rounded
                    ms-0
                    ps-0
                    py-2
                    px-2
                  "
                >
                  Selesai
                </a>
              </template>
              <template v-else>
                <a
                  href="/riwayat_pembelian/selesai"
                  type="submit"
                  class="btn text-black btn-sm ms-0 ps-0 py-2 px-2"
                >
                  Selesai
                </a>
              </template>

              <template v-if="this.$route.params.filter == 'tidak_berhasil'">
                <a
                  href="/riwayat_pembelian/tidak_berhasil"
                  type="submit"
                  class="
                    btn
                    text-white
                    btn-danger btn-sm
                    shadow
                    rounded
                    ms-0
                    ps-0
                    py-2
                    px-2
                  "
                >
                  Tidak Berhasil
                </a>
              </template>
              <template v-else>
                <a
                  href="/riwayat_pembelian/tidak_berhasil"
                  type="submit"
                  class="btn text-black btn-sm ms-0 ps-0 py-2 px-2"
                >
                  Tidak Berhasil
                </a>
              </template>

              <template v-if="this.$route.params.filter == 'berlangsung'">
                <a
                  href="/riwayat_pembelian/berlangsung"
                  type="submit"
                  class="
                    btn
                    text-white
                    btn-danger btn-sm
                    shadow
                    rounded
                    ms-0
                    ps-0
                    py-2
                    px-2
                  "
                >
                  Berlangsung
                </a>
              </template>
              <template v-else>
                <a
                  href="/riwayat_pembelian/berlangsung"
                  type="submit"
                  class="btn text-black btn-sm ms-0 ps-0 py-2 px-2"
                >
                  Berlangsung
                </a>
              </template>
            </div>
            <section v-for="transaction in transactions" :key="transaction.id">
              <HistoryTransactionItem :data="transaction" />
            </section>
            <!-- TODO tulisan belum ada transaksi -->
            <template v-if="Object.keys(transactions).length === 0">
              Belum ada transaksi
            </template>
          </div>
        </div>
      </div>
    </section>

    <Footer />
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
        path: "/"+url+"?",
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
    };
  },
  watchQuery: ["page", "paginate"],
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
    display: flex;
    font-size: 80%;
  }
}
</style>
