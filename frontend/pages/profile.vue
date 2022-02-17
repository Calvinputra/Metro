<template>
  <section style="font-family: 'Nunito Sans'">
    <section id="profile-webview">
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
                <p class="mb-">Halaman ini berisi informasi Detail Akun</p>
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
                        <p>Nama Depan</p>
                        <p>Nama Belakang</p>
                        <p>Nomor Telepon</p>
                        <p>Alamat</p>
                        <p>Kode Pos</p>
                        <p>Negara</p>
                        <p>Provinsi</p>
                        <p>Kota</p>
                        <p>Email</p>
                      </div>
                      <div class="">
                        <p>: {{ this.$auth.user.first_name }}</p>
                        <p>: {{ this.$auth.user.last_name }}</p>
                        <p>: {{ this.$auth.user.phone }}</p>
                        <p>: {{ this.$auth.user.addresses[0].address }}</p>
                        <p>: {{ this.$auth.user.addresses[0].postal_code }}</p>
                        <p>: {{ this.$auth.user.addresses[0].country.name }}</p>
                        <p>
                          : {{ this.$auth.user.addresses[0].province.name }}
                        </p>
                        <p>
                          :
                          {{ this.$auth.user.addresses[0].city.name }}
                        </p>
                        <p>
                          : {{ this.$auth.user.email }}
                          <template
                            v-if="this.$auth.user.email_verified_at === null"
                            >-
                            <button
                              @click.prevent="doEmailVerification"
                              class="btn"
                              style="color: red; weight: 700"
                            >
                              Verifikasi sekarang
                            </button>
                          </template>
                        </p>
                      </div>
                    </div>
                  </form>
                  <div class="text-center">
                    <br />
                    <Nuxt-link
                      to="/editprofile"
                      type="button"
                      class="btn btn-light text-danger col-sm-3"
                      style="
                        box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important;
                      "
                    >
                      Ubah Informasi Akun
                    </Nuxt-link>
                  </div>
                </div>
              </div>
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
    <section id="profile-mobileview" style="font-size: 80%">
      <Breadcrumb :links="breadcrumb" />
      <section class="container">
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
                <label class="mt-3"
                  ><h2 class="font-weight-bold">Akun Saya</h2></label
                >
              </div>
              <div class="mb-4">
                <hr
                  style="height: 10%; width: 100%; border-width: 0; color: red"
                  class="col-sm-12 mb-0 mt-0"
                />
                <p class="mb-">Halaman ini berisi informasi Detail Akun</p>
              </div>

              <div>
                <div class="row justify-content-start">
                  <form>
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
                      <div class="me-4">
                        <span class="me-5 pe-5">
                          <p>Nama Depan</p>
                          <p class="mt-4">Nama Belakang</p>
                          <p class="mt-4">Nomor Telepon</p>
                          <p class="mt-4">Alamat</p>
                          <p class="mt-4">Kode Pos</p>
                          <p class="mt-4">Negara</p>
                          <p class="mt-4">Provinsi</p>
                          <p class="mt-4">Kota</p>
                          <p class="mt-4">Email</p>
                        </span>
                      </div>
                      <div class="">
                        <p>: {{ this.$auth.user.first_name }}</p>
                        <p class="mt-4">: {{ this.$auth.user.last_name }}</p>
                        <p class="mt-4">: {{ this.$auth.user.phone }}</p>
                        <p class="mt-4">
                          : {{ this.$auth.user.addresses[0].address }}
                        </p>
                        <p class="mt-4">
                          : {{ this.$auth.user.addresses[0].postal_code }}
                        </p>
                        <p class="mt-4">
                          : {{ this.$auth.user.addresses[0].country.name }}
                        </p>
                        <p class="mt-4">
                          : {{ this.$auth.user.addresses[0].province.name }}
                        </p>
                        <p class="mt-4">
                          :
                          {{ this.$auth.user.addresses[0].city.name }}
                        </p>
                        <p class="mt-4">: {{ this.$auth.user.email }}</p>
                      </div>
                    </div>
                  </form>
                  <div class="text-center">
                    <br />
                    <button
                      type="button"
                      class="btn btn-light text-danger p-2"
                      style="
                        box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important;
                      "
                    >
                      Ubah Informasi Akun
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <Footer2mobile />
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
  </section>
</template>

<style lang="css" scoped>
#profile-mobileview {
  display: none;
}
/* 0 - 991 px */
@media screen and (max-width: 500px) {
  #profile_logo {
    display: none !important;
  }

  #profile-webview {
    display: none;
  }
  #profile-mobileview {
    display: grid;
  }
}
</style>

<script>
export default {
  middleware: "auth",
  data() {
    return {
      breadcrumb: [
        {
          url: "/",
          name: "Beranda",
          class: "my-2 ms-3 breadcrumb-item opacity-50"
        },
        {
          url: "/profile",
          name: "Akun Saya",
          class: "my-2 breadcrumb-item active opacity-50"
        }
      ]
    };
  },
  methods: {
    async doEmailVerification() {
      try {
        let response = await this.$axios.$post(
          process.env.API_URL + "/api/email_verification_request"
        );
        console.log(response);
        if (response.success) {
          this.$toast.success(response.data, {
            theme: "bubble",
            position: "bottom-right",
            duration: 5000
          });
        } else {
          this.$toast.error(response.data, {
            theme: "bubble",
            position: "bottom-right",
            duration: 5000
          });
        }
      } catch (error) {
        console.log(error);
      }
    }
  }
};
</script>
