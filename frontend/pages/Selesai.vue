<template>
  <section>
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
              <button
                type="submit"
                class="
                  btn
                  btn-sm
                  rounded
                  col-sm-2
                  ms-0
                  ps-0
                  py-2
                  px-2
                "
              >
                <nuxt-link to="/riwayat_pembelian">
                  Semua
                </nuxt-link>
              </button>
              <button
                type="submit"
                class="btn text-black btn-sm col-sm-3 ms-0 ps-0 py-2 px-2"
              >
                <nuxt-link to="/menungguPembayaran">
                  Menunggu Pembayaran
                </nuxt-link>
              </button>
              <button
                type="submit"
                class="btn btn-danger btn-sm col-sm-1 ms-0 ps-0 py-2 px-2"
              >
                Selesai
              </button>
              <button
                type="submit"
                class="btn text-black btn-sm col-sm-2 ms-0 ps-0 py-2 px-2"
              >
                <nuxt-link to="/tidakberhasil">
                  Tidak Berhasil
                </nuxt-link>
              </button>
              <button
                type="submit"
                class="btn text-black btn-sm col-sm-2 ms-0 ps-0 py-2 px-2"
              >
                <nuxt-link to="/berlangsung">
                  Berlangsung
                </nuxt-link>
              </button>
            </div>

            <historySelesai />
          </div>
        </div>
      </div>
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
