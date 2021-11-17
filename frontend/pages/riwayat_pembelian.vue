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
              <p class="mb-">
                Lacak Pembelian Kamu di halaman ini.
              </p>
            </div>

            <div>
              <span class="mr-5">Status: </span>
              <button
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
              </button>
              <button
                type="submit"
                class="
                        
                        btn
                        text-black
                        btn-sm
                        col-sm-2
                        ms-0
                        ps-0
                        py-2
                        px-2
                      "
              >
                Selesai
              </button>
              <button
                type="submit"
                class="
                        btn
                        text-black
                        btn-sm
                        col-sm-2
                        ms-0
                        ps-0
                        py-2
                        px-2
                      "
              >
                Tidak Berhasil
              </button>
              <button
                type="submit"
                class="
                        btn
                        text-black
                        btn-sm
                        col-sm-2
                        ms-0
                        ps-0
                        py-2
                        px-2
                      "
              >
                Berlangsung
              </button>
              <div style="color: red" class="mt-3">
                <hr
                  style="height: 3px; border-width: 0; color: red"
                  class="col-sm-12 mb-0 mt-0"
                />
              </div>
            </div>
            <div class="d-flex" style="justify-content: space-between">
              <div class="d-flex ml-2 mt-4">
                <div>
                  <img class="mr-2" src="/img/audiblelogo.png" alt="" />
                </div>
                <div>
                  <span
                    class="border border-success border-2 text-success rounded-3"
                  >
                    Selesai</span
                  >
                  #ID
                  <br />
                  <span>KODE PRODUK</span>
                  - <span>NAMA PRODUK 1</span>
                  <p>
                    1xRp 120.000
                  </p>
                </div>
              </div>
              <div>
                <p class="text-right mt-3">Rp. 120.000</p>
                <span class="d-flex">
                  <button
                    type="submit"
                    class="
                        mr-3
                        btn
                        text-danger
                        btn-light btn-sm
                        shadow
                        rounded
                        col-sm-8
                        ms-0
                        ps-0
                        py-2
                        px-2
                      "
                  >
                    Lihat Detail Transaksi
                  </button>
                  <button
                    type="submit"
                    class="
                        btn
                        text-danger
                        btn-light btn-sm
                        shadow
                        rounded
                        col-sm-4
                        ms-0
                        ps-0
                        py-2
                        px-2
                      "
                  >
                    Lainnya
                  </button>
                </span>
              </div>
            </div>
            <div class="mt-4">
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
                  <span> Selesai</span> #ID
                  <br />
                  <span>KODE PRODUK</span>
                  - <span>NAMA PRODUK 1</span>
                  <p>
                    1xRp 120.000
                  </p>
                </div>
              </div>
              <div>
                <p class="text-right mt-3">Rp. 120.000</p>
                <span class="d-flex">
                  <button
                    type="submit"
                    class="
                        mr-3
                        btn
                        text-danger
                        btn-light btn-sm
                        shadow
                        rounded
                        col-sm-8
                        ms-0
                        ps-0
                        py-2
                        px-2
                      "
                  >
                    Lihat Detail Transaksi
                  </button>
                  <button
                    type="submit"
                    class="
                        btn
                        text-danger
                        btn-light btn-sm
                        shadow
                        rounded
                        col-sm-4
                        ms-0
                        ps-0
                        py-2
                        px-2
                      "
                  >
                    Lainnya
                  </button>
                </span>
              </div>
            </div>
            <historySelesai />
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
