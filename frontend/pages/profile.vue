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
              class="col-sm-9 offset-md-1 align-self-start mt-2 row justify-content-between"
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
                  class="col-sm-12 mb-1 mt-0"
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
                    <div class="">
                      <table>
                        <tbody>
                          <tr>
                            <th scope="row" class="pe-3">
                              <p>Nama Depan</p>
                            </th>
                            <td>
                              <p><b class="ps-3">:</b></p>
                            </td>
                            <td>
                              <p class="ps-2">
                                {{ this.$auth.user.first_name }}
                              </p>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row" class="">
                              <p>Nama Belakang</p>
                            </th>
                            <td>
                              <p><b class="ps-3">:</b></p>
                            </td>
                            <td>
                              <p class="ps-2">
                                {{ this.$auth.user.last_name }}
                              </p>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row" class="pe-3">
                              <p>Nomor Telepon</p>
                            </th>
                            <td>
                              <p><b class="ps-3">:</b></p>
                            </td>
                            <td>
                              <p class="ps-2">{{ this.$auth.user.phone }}</p>
                            </td>
                          </tr>
                          <br />
                          <tr>
                            <th scope="row" class="pe-3"><p>Alamat</p></th>
                            <td>
                              <p><b class="ps-3">:</b></p>
                            </td>
                            <td>
                              <p class="ps-2">
                                <template
                                  v-if="this.$auth.user.addresses.length > 0"
                                >
                                  {{ this.$auth.user.addresses[0].address }}
                                </template>
                                <template v-else>
                                  Alamat belum di isi
                                </template>
                              </p>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row" class="pe-3"><p>Kode Pos</p></th>
                            <td>
                              <p><b class="ps-3">:</b></p>
                            </td>
                            <td>
                              <p class="ps-2">
                                <template
                                  v-if="this.$auth.user.addresses.length > 0"
                                >
                                  {{ this.$auth.user.addresses[0].postal_code }}
                                </template>
                                <template v-else>
                                  Kode Pos belum di isi
                                </template>
                              </p>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row" class="pe-3"><p>Negara</p></th>
                            <td>
                              <p><b class="ps-3">:</b></p>
                            </td>
                            <td>
                              <p class="ps-2">
                                <template
                                  v-if="this.$auth.user.addresses.length > 0"
                                >
                                  {{
                                    this.$auth.user.addresses[0].country.name
                                  }}
                                </template>
                                <template v-else>
                                  Negara belum di isi
                                </template>
                              </p>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row" class="pe-3"><p>Provinsi</p></th>
                            <td>
                              <p><b class="ps-3">:</b></p>
                            </td>
                            <td>
                              <p class="ps-2">
                                <template
                                  v-if="this.$auth.user.addresses.length > 0"
                                >
                                  {{
                                    this.$auth.user.addresses[0].province.name
                                  }}
                                </template>
                                <template v-else>
                                  Provinsi belum di isi
                                </template>
                              </p>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row" class="pe-3"><p>Kota</p></th>
                            <td>
                              <p><b class="ps-3">:</b></p>
                            </td>
                            <td>
                              <p class="ps-2">
                                <template
                                  v-if="this.$auth.user.addresses.length > 0"
                                >
                                  {{ this.$auth.user.addresses[0].city.name }}
                                </template>
                                <template v-else> Kota belum di isi </template>
                              </p>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row" class="pe-3"><p>Email</p></th>
                            <td>
                              <p><b class="ps-3">:</b></p>
                            </td>
                            <td>
                              <p class="ps-2">
                                {{ this.$auth.user.email }}
                                <template
                                  v-if="
                                    this.$auth.user.email_verified_at === null
                                  "
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
                            </td>
                          </tr>
                        </tbody>
                      </table>
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
      <section>
        <div class="container">
          <div class="row">
            <div
              class="col-sm-9 offset-md-1 align-self-start mt-2 row justify-content-between"
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
                  class="col-sm-12 mb-1 mt-0"
                />
                <p class="mb-">Halaman ini berisi informasi Detail Akun</p>
              </div>

              <div>
                <div class="row">
                  <form>
                    <div class="register-form-title">Informasi Akun</div>
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
                    <div class="">
                      <table>
                        <tbody>
                          <tr>
                            <th scope="row" class="pe-3">
                              <p>Nama Depan</p>
                            </th>
                            <td>
                              <p><b class="ps-3">:</b></p>
                            </td>
                            <td>
                              <p class="ps-2">
                                {{ this.$auth.user.first_name }}
                              </p>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row" class="">
                              <p>Nama Belakang</p>
                            </th>
                            <td>
                              <p><b class="ps-3">:</b></p>
                            </td>
                            <td>
                              <p class="ps-2">
                                {{ this.$auth.user.last_name }}
                              </p>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row" class="pe-3">
                              <p>Nomor Telepon</p>
                            </th>
                            <td>
                              <p><b class="ps-3">:</b></p>
                            </td>
                            <td>
                              <p class="ps-2">{{ this.$auth.user.phone }}</p>
                            </td>
                          </tr>
                          <br />
                          <tr>
                            <th scope="row" class="pe-3"><p>Alamat</p></th>
                            <td>
                              <p><b class="ps-3">:</b></p>
                            </td>
                            <td>
                              <div style="max-width: 80%">
                                <p class="ps-2">
                                  <template
                                    v-if="this.$auth.user.addresses.length > 0"
                                  >
                                    {{ this.$auth.user.addresses[0].address }}
                                  </template>
                                  <template v-else>
                                    Alamat belum di isi
                                  </template>
                                </p>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row" class="pe-3"><p>Kode Pos</p></th>
                            <td>
                              <p><b class="ps-3">:</b></p>
                            </td>
                            <td>
                              <p class="ps-2">
                                <template
                                  v-if="this.$auth.user.addresses.length > 0"
                                >
                                  {{ this.$auth.user.addresses[0].postal_code }}
                                </template>
                                <template v-else>
                                  Kode Pos belum di isi
                                </template>
                              </p>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row" class="pe-3"><p>Negara</p></th>
                            <td>
                              <p><b class="ps-3">:</b></p>
                            </td>
                            <td>
                              <p class="ps-2">
                                <template
                                  v-if="this.$auth.user.addresses.length > 0"
                                >
                                  {{
                                    this.$auth.user.addresses[0].country.name
                                  }}
                                </template>
                                <template v-else>
                                  Negara belum di isi
                                </template>
                              </p>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row" class="pe-3"><p>Provinsi</p></th>
                            <td>
                              <p><b class="ps-3">:</b></p>
                            </td>
                            <td>
                              <p class="ps-2">
                                <template
                                  v-if="this.$auth.user.addresses.length > 0"
                                >
                                  {{
                                    this.$auth.user.addresses[0].province.name
                                  }}
                                </template>
                                <template v-else>
                                  Provinsi belum di isi
                                </template>
                              </p>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row" class="pe-3"><p>Kota</p></th>
                            <td>
                              <p><b class="ps-3">:</b></p>
                            </td>
                            <td>
                              <p class="ps-2">
                                <template
                                  v-if="this.$auth.user.addresses.length > 0"
                                >
                                  {{ this.$auth.user.addresses[0].city.name }}
                                </template>
                                <template v-else> Kota belum di isi </template>
                              </p>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row" class="pe-3"><p>Email</p></th>
                            <td>
                              <p><b class="ps-3">:</b></p>
                            </td>
                            <td>
                              <p class="ps-2">
                                {{ this.$auth.user.email }}
                                <template
                                  v-if="
                                    this.$auth.user.email_verified_at === null
                                  "
                                  >-
                                </template>
                              </p>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <div class="mt-2 text-center">
                        <button
                          @click.prevent="doEmailVerification"
                          class="btn"
                          style="color: red; weight: 600; font-size: 14px"
                        >
                          Verifikasi sekarang
                        </button>
                      </div>
                    </div>
                  </form>
                  <div class="text-center mb-3">
                    <br />
                    <Nuxt-link
                      to="/editprofile"
                      type="button"
                      class="btn btn-light text-danger p-2"
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
          class: "my-2 ms-3 breadcrumb-item opacity-50",
        },
        {
          url: "/profile",
          name: "Akun Saya",
          class: "my-2 breadcrumb-item active opacity-50",
        },
      ],
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
            duration: 5000,
          });
        } else {
          this.$toast.error(response.data, {
            theme: "bubble",
            position: "bottom-right",
            duration: 5000,
          });
        }
      } catch (error) {
        console.log(error);
      }
    },
  },
};
</script>
