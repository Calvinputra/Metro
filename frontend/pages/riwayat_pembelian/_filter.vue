<template>
  <section>
    <Header />
    <Breadcrumb :links="breadcrumb" />
    <section>
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
                    shadow
                    rounded
                    col-sm-2
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
                  class="btn text-black btn-sm col-sm-3 ms-0 ps-0 py-2 px-2"
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
                    col-sm-2
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
                    col-sm-2
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

            <historySelesai />
            <historyBerlangsung />
            <historyTidakBerhasil />
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
  // middleware: "auth",
  async asyncData({ $axios }) {
    try {
      let transactions = await $axios.$get(
        process.env.API_URL + "/api/transactions"
      );
      console.log(transactions);
      return {
        transactions: transactions.data,
      };
    } catch (error) {
      console.log(error);
    }
  },
};
</script>
