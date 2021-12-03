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
                  Akun Saya<span style="color: red">*</span>
                </h2></label
              >
            </div>
            <div class="mb-4">
              <hr
                style="height: 10%; width: 100%; border-width: 0; color: red"
                class="col-sm-12 mb-0 mt-0"
              />
              <p class="mb-">
                Halaman ini berisi informasi Detail Akun
              </p>
            </div>

            <div>
              <div class="row justify-content-start">
                <form>
                  <div class="register-form-title mr-5 pr-5">
                    Informasi Akun
                  </div>
                  <b-alert
                    v-model="showDismissibleAlert"
                    variant="danger"
                    dismissible
                  >
                    <ul
                      style="color: black; padding: 0"
                      v-for="(error, key) in errors"
                      :key="key"
                    >
                      <li v-for="(e, key) in error" :key="key">{{ e }}</li>
                    </ul>
                  </b-alert>
                  <div class="d-flex justify-content-around">
                    <div>
                      <p>
                        Nama Depan
                      </p>
                      <p>
                        Nama Belakang
                      </p>
                      <p>
                        Nomor Telepon
                      </p>
                      <p>
                        Alamat
                      </p>
                      <p>
                        Kode Pos
                      </p>
                      <p>
                        Negara
                      </p>
                      <p>
                        Provinsi
                      </p>
                      <p>
                        Kota
                      </p>
                      <p>
                        Email
                      </p>
                    </div>
                    <div class="">
                      <p>
                        :Calvin Hage
                      </p>
                      <p>
                        :Wijaya
                      </p>
                      <p>
                        :081788672567
                      </p>
                      <p>
                        :Araya Mansion No 8 - 22, Genitry Tirtomoyo, kec pakis,
                        Malang, Jawa Timur
                      </p>
                      <p>
                        :65154
                      </p>
                      <p>
                        :Indoneisa
                      </p>
                      <p>
                        :Jawa Timur
                      </p>
                      <p>
                        :Malang
                      </p>
                      <p>
                        :calvinhage@aye.com
                      </p>
                    </div>
                  </div>
                </form>
                <div class="text-center">
                  <br />
                  <button
                    type="button"
                    class="btn btn-light text-danger col-sm-2 shadow"
                  >
                    Light
                  </button>
                </div>
              </div>
            </div>
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
