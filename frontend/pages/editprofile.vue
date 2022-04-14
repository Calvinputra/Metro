<template>
  <section style="font-family: 'Nunito Sans'">
    <section id="edit-webview">
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
                  ><h2 class="font-weight-bold">Ubah profile</h2></label
                >
              </div>
              <div class="mb-4">
                <hr
                  style="height: 10%; width: 100%; border-width: 0; color: red"
                  class="col-sm-12 mb-1 mt-0"
                />
                <p class="mb-">
                  Ubah profile anda sesuai letak keberadaan anda
                </p>
              </div>

              <div>
                <div class="row justify-content-start">
                  <form>
                    <div class="register-form-title mr-5 pr-5">
                      Ubah Data Diri
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
                    <div class="d-flex">
                      <div class="form-group col-sm-5 center">
                        <label for="first_name">Nama Depan:</label>
                        <input
                          type="text"
                          class="form-control"
                          id="first_name"
                          name="first_name"
                          placeholder="Nama Depan"
                          v-model="first_name"
                        />
                      </div>
                      <div class="form-group form-group col-sm-5">
                        <label for="last_name">Nama Belakang:</label>
                        <input
                          type="text"
                          class="form-control"
                          id="last_name"
                          name="last_name"
                          placeholder="Nama Belakang"
                          v-model="last_name"
                        />
                      </div>
                    </div>

                    <div class="form-group form-group col-sm-10">
                      <label for="phone]">Nomor Telepon:</label>
                      <input
                        type="text"
                        class="form-control"
                        id="phone"
                        name="phone"
                        placeholder="Nomor Telepon"
                        v-model="phone"
                      />
                    </div>

                    <div class="register-form-title pe-5 me-5">
                      Alamat Pengiriman
                    </div>
                    <div class="form-group col-sm-10">
                      <label for="address">Alamat Lengkap:</label>
                      <textarea
                        class="form-control"
                        id="address"
                        name="address"
                        rows="3"
                        v-model="address"
                      ></textarea>
                    </div>
                    <div class="form-group ms-3 pe-3">
                      <label for="exampleFormControlSelect1">Provinsi</label>
                      <v-select
                        v-model="province_id"
                        :reduce="(provinces) => provinces.code"
                        @input="getCity"
                        :options="provinces"
                      ></v-select>
                    </div>
                    <div class="form-group ms-3 pe-3">
                      <label for="exampleFormControlSelect1">Kota</label>
                      <v-select
                        v-model="city_id"
                        :reduce="(cities) => cities.code"
                        :options="cities"
                      ></v-select>
                    </div>
                    <div class="form-group ms-3 pe-3">
                      <label for="postal_code"
                        >Kode Pos<span style="color: red">*</span></label
                      >
                      <input
                        type="text"
                        class="form-control"
                        id="postal_code"
                        name="postal_code"
                        placeholder="Kode Pos"
                        v-model="postal_code"
                      />
                    </div>
                    <br />

                    <div class="text-center me-5 pe-5">
                      <button
                        @click.prevent="doEditProfile"
                        type="submit"
                        class="btn text-danger btn-light btn-sm rounded col-sm-2 ms-0 p-2"
                        style="
                          box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important;
                        "
                      >
                        Ubah profile
                      </button>
                    </div>
                  </form>
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
    <section id="edit-mobileview" class="mb-5">
      <Breadcrumb :links="breadcrumb" />
      <section>
        <div class="container">
          <div class="row">
            <div
              style="margin-left: 0px"
              class="col-sm-9 offset-md-1 align-self-start mt-2 row justify-content-between"
            >
              <div class="col-sm-12">
                <label class="mb-0"
                  ><h2 class="font-weight-bold">Ubah profile</h2></label
                >
              </div>
              <div class="mb-4">
                <hr
                  style="height: 10%; width: 100%; border-width: 0; color: red"
                  class="col-sm-12 mb-1 mt-0"
                />
                <p class="mb-">
                  Ubah profile anda sesuai letak keberadaan anda
                </p>
              </div>

              <div>
                <div class="row justify-content-start">
                  <form>
                    <div class="register-form-title">Ubah Data Diri</div>
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
                    <div class="d-flex">
                      <div class="form-group col-sm-5 center">
                        <label for="first_name">Nama Depan:</label>
                        <input
                          type="text"
                          class="form-control"
                          id="first_name"
                          name="first_name"
                          placeholder="Nama Depan"
                          v-model="first_name"
                        />
                      </div>
                      <div class="form-group form-group col-sm-5">
                        <label for="last_name">Nama Belakang:</label>
                        <input
                          type="text"
                          class="form-control"
                          id="last_name"
                          name="last_name"
                          placeholder="Nama Belakang"
                          v-model="last_name"
                        />
                      </div>
                    </div>

                    <div class="form-group form-group col-sm-10">
                      <label for="phone">Nomor Telepon:</label>
                      <input
                        type="text"
                        class="form-control"
                        id="phone"
                        name="phone"
                        placeholder="Nomor Telepon"
                        v-model="phone"
                      />
                    </div>

                    <div class="register-form-title">Alamat Pengiriman</div>
                    <div class="form-group col-sm-10">
                      <label for="address">Alamat Lengkap:</label>
                      <textarea
                        class="form-control"
                        id="address"
                        name="address"
                        rows="3"
                        v-model="address"
                      >
                      </textarea>
                    </div>
                    <div class="form-group ms-3 pe-3">
                      <label for="provinces">Provinsi</label>
                      <v-select
                        id="provinces"
                        v-model="province_id"
                        :reduce="(provinces) => provinces.code"
                        @input="getCity"
                        :options="provinces"
                      ></v-select>
                    </div>
                    <div class="form-group ms-3 pe-3">
                      <label for="cities">Kota</label>
                      <v-select
                        id="cities"
                        v-model="city_id"
                        :reduce="(cities) => cities.code"
                        :options="cities"
                      ></v-select>
                    </div>
                    <br />
                    <div class="form-group ms-3 pe-3">
                      <label for="postal_code"
                        >Kode Pos<span style="color: red">*</span></label
                      >
                      <input
                        type="text"
                        class="form-control"
                        id="postal_code"
                        name="postal_code"
                        placeholder="Kode Pos"
                        v-model="postal_code"
                      />
                    </div>

                    <div class="text-center">
                      <button
                        @click.prevent="doEditProfile"
                        type="submit"
                        class="btn text-danger btn-light btn-sm rounded ms-0 mb-3 p-2"
                        style="
                          box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important;
                        "
                      >
                        Ubah profile
                      </button>
                    </div>
                  </form>
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

<script>
import Vue from "vue";
import vSelect from "vue-select";
import "vue-select/dist/vue-select.css";
Vue.component("v-select", vSelect);

export default {
  // middleware: "auth",
  // auth: "guest",
  data() {
    return {
      first_name: this.$auth.user.first_name,
      last_name: this.$auth.user.last_name,
      phone: this.$auth.user.phone,
      address: this.$auth.user.addresses[0].address,
      province_id: this.$auth.user.addresses[0].province_id,
      city_id: this.$auth.user.addresses[0].city_id,
      country_id: 1,
      postal_code: this.$auth.user.addresses[0].postal_code,
      //data v select
      cities: [],
      countries: [],
      provinces: [],
      //breadcrumb
      breadcrumb: [
        {
          url: "/",
          name: "Beranda",
          class: "my-2 ms-3 breadcrumb-item opacity-50",
        },
        {
          url: "/register",
          name: "Daftar",
          class: "my-2 breadcrumb-item active opacity-50",
        },
      ],
      //alert
      errors: null,
      dismissSecs: 10,
      dismissCountDown: 0,
      showDismissibleAlert: false,
    };
  },
  methods: {
    async getCountry() {
      try {
        let response = await this.$axios.$get(
          process.env.API_URL + "/api/countries"
        );
        response.data.forEach((value, index) => {
          this.countries.push({
            label: value.name,
            code: value.id,
          });
        });
        //console.log(this.countries);
      } catch (error) {
        console.log(error);
      }
    },
    async getProvince(reset = true) {
      try {
        let response = await this.$axios.$get(
          process.env.API_URL + "/api/provinces?country_id=" + this.country_id
        );
        //console.log(response);
        response.data.forEach((value, index) => {
          this.provinces.push({
            label: value.name,
            code: value.id,
          });
        });
        if (response) {
          this.getCity(reset);
        }
      } catch (error) {
        console.log(error);
      }
    },
    async getCity(reset) {
      try {
        if (reset || !this.province_id) {
          this.city_id = "";
        }
        this.cities = [];
        let response = await this.$axios.$get(
          process.env.API_URL + "/api/cities?province_id=" + this.province_id
        );
        console.log(response);
        response.data.forEach((value, index) => {
          this.cities.push({
            label: value.name,
            code: value.id,
          });
        });
      } catch (error) {
        console.log(error);
      }
    },
    async doEditProfile() {
      try {
        let data = {
          first_name: this.first_name,
          last_name: this.last_name,
          phone: this.phone,
          address: this.address,
          country: this.country_id,
          province: this.province_id,
          city: this.city_id,
          postal_code: this.postal_code,
        };
        let response = await this.$axios.$post(
          process.env.API_URL + "/api/edit_profile",
          data
        );
        if (response.success) {
          //success registration
          this.$auth.fetchUser(); //refresh user data
          this.showDismissibleAlert = false;
          this.$toast.success("Successfully Edit profile", {
            theme: "bubble",
            position: "bottom-right",
            duration: 5000,
          });
          this.$router.push("/profile");
        } else {
          this.errors = response.message;
          this.showDismissibleAlert = true;
          let err = response.message;
          Object.keys(err).forEach((key, error) => {
            Object.keys(err[key]).forEach((key2, e) => {
              this.$toast.error(err[key][key2], {
                theme: "bubble",
                position: "bottom-right",
                duration: 5000,
              });
            });
          });
        }
        console.log(response);
      } catch (error) {
        console.log(error);
      }
    },
  },
  head() {
    return {
      script: [
        {
          src: "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js",
        },
        {
          src: "https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js",
        },
      ],
      link: [
        {
          rel: "stylesheet",
          href: "https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css",
        },
      ],
    };
  },
  created() {
    this.getProvince(false);
  },
};
</script>

<style lang="css" scoped>
#edit-mobile {
  display: none;
}
#edit-mobileview {
  display: none;
}
/* 0 - 991 px */
@media screen and (max-width: 500px) {
  #edit_logo {
    display: none !important;
  }

  #edit-webview {
    display: none;
  }

  #edit-mobile {
    display: contents;
  }

  #edit-mobileview {
    display: grid;
  }
}
</style>

<style>
.vs__selected-options .vs__search {
  border: none;
  box-shadow: 0;
}
</style>
