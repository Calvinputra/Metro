<template>
  <section>
    <Header />
    <Breadcrumb :links="breadcrumb" />
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <section class="">
              <div class="row">
                <div>
                  <h1>Akun</h1>
                  <a
                    href="/register"
                    class="text-black nav-custom nav-custom-active"
                    style="text-decoration: none"
                  >
                    <p class="py-2 ps-2">Buat Akun</p>
                  </a>
                  <a
                    href="/login"
                    style="text-decoration: none"
                    class="text-black nav-custom"
                  >
                    <p class="ms-2">Masuk Akun</p>
                  </a>
                  <a
                    href=""
                    style="text-decoration: none"
                    class="text-black nav-custom"
                  >
                    <p class="ms-2">Lupa Password</p>
                  </a>
                  <a
                    href=""
                    style="text-decoration: none"
                    class="text-black nav-custom"
                  >
                    <p class="ms-2">Akun Saya</p>
                  </a>
                </div>
              </div>
            </section>
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
                  Registrasi Akun di Metro Jaya<span style="color: red">*</span>
                </h2></label
              >
            </div>
            <div class="mb-4">
              <hr
                style="height: 10%; width: 100%; border-width: 0; color: red"
                class="col-sm-12 mb-0 mt-0"
              />
              <p class="mb-">
                Jika sudah memiliki akun, dapat pergi ke halaman Masuk Akun.
              </p>
            </div>

            <div>
              <div class="row justify-content-start">
                <form>
                  <div class="register-form-title">Pengisian Data Diri</div>
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
                  <div class="form-group">
                    <label for="first_name"
                      >Nama Depan<span style="color: red">*</span>:</label
                    >
                    <input
                      type="text"
                      class="form-control"
                      id="first_name"
                      name="first_name"
                      placeholder="Nama Depan"
                      v-model="first_name"
                    />
                  </div>
                  <div class="form-group">
                    <label for="last_name"
                      >Nama Belakang<span style="color: red">*</span>:</label
                    >
                    <input
                      type="text"
                      class="form-control"
                      id="last_name"
                      name="last_name"
                      placeholder="Nama Belakang"
                      v-model="last_name"
                    />
                  </div>
                  <div class="form-group">
                    <label for="phone]"
                      >Nomor Telepon<span style="color: red">*</span>:</label
                    >
                    <input
                      type="text"
                      class="form-control"
                      id="phone"
                      name="phone"
                      placeholder="Nomor Telepon"
                      v-model="phone"
                    />
                  </div>
                  <div class="form-group">
                    <label for="email"
                      >Email<span style="color: red">*</span>:</label
                    >
                    <input
                      type="email"
                      class="form-control"
                      id="email"
                      name="email"
                      placeholder="Email"
                      v-model="email"
                    />
                  </div>
                  <div class="form-group">
                    <label for="password"
                      >Kata Sandi<span style="color: red">*</span>:</label
                    >
                    <input
                      type="password"
                      class="form-control"
                      id="password"
                      name="password"
                      placeholder="Password"
                      v-model="password"
                    />
                  </div>
                  <div class="form-group">
                    <label for="password_confirmation"
                      >Konfirmasi Kata Sandi<span style="color: red">*</span
                      >:</label
                    >
                    <input
                      type="password"
                      class="form-control"
                      id="password_confirmation"
                      name="password_confirmation"
                      placeholder="Password"
                      v-model="password_confirmation"
                    />
                  </div>

                  <div class="register-form-title">Alamat Pengiriman</div>
                  <div class="form-group">
                    <label for="address"
                      >Alamat Lengkap<span style="color: red">*</span>:</label
                    >
                    <textarea
                      class="form-control"
                      id="address"
                      name="address"
                      rows="3"
                      v-model="address"
                    ></textarea>
                  </div>
                  <div class="form-group">
                    <label for="country"
                      >Negara<span style="color: red">*</span>:</label
                    >
                    <v-select
                      v-model="country_id"
                      :reduce="(countries) => countries.code"
                      @input="getProvince"
                      :options="countries"
                    ></v-select>
                  </div>
                  <div class="form-group">
                    <label for="province"
                      >Provinsi<span style="color: red">*</span>:</label
                    >
                    <v-select
                      v-model="province_id"
                      :reduce="(provinces) => provinces.code"
                      @input="getCity"
                      :options="provinces"
                    ></v-select>
                  </div>
                  <div class="form-group">
                    <label for="city"
                      >Kota<span style="color: red">*</span>:</label
                    >
                    <v-select
                      v-model="city_id"
                      :reduce="(cities) => cities.code"
                      :options="cities"
                    ></v-select>
                  </div>
                  <div class="form-group">
                    <label for="postal_code"
                      >Kode Pos<span style="color: red">*</span>:</label
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
                  <label style="color: red"
                    ><span style="color: red">*</span>Wajib diisi</label
                  >
                  <div class="form-check">
                    <input
                      type="checkbox"
                      class="form-check-input"
                      id="exampleCheck1"
                      v-model="agreement_1"
                    />
                    <label class="form-check-label" for="exampleCheck1"
                      >Saya telah membaca dan menyetujui Kebijakan
                      Privasi</label
                    >
                  </div>
                  <div class="form-check">
                    <input
                      type="checkbox"
                      class="form-check-input"
                      id="exampleCheck2"
                      v-model="agreement_2"
                    />

                    <label class="form-check-label" for="exampleCheck2"
                      >Perbarui Saya dengan berita dan promo terbaru</label
                    >
                  </div>
                  <br />
                  <button
                    @click.prevent="doRegister"
                    type="submit"
                    class="btn btn-primary"
                  >
                    Buat Akun
                  </button>
                </form>
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

<script>
import Vue from "vue";
import vSelect from "vue-select";
import "vue-select/dist/vue-select.css";
Vue.component("v-select", vSelect);

export default {
  data() {
    return {
      first_name: null,
      last_name: null,
      phone:null,
      email: null,
      password: null,
      password_confirmation: null,
      address: null,
      country_id: 0,
      city_id: 0,
      province_id: 0,
      postal_code: null,
      agreement_1: false,
      agreement_2: false,
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
          name: "Register",
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
        console.log(this.countries);
      } catch (error) {
        console.log(error);
      }
    },
    async getProvince() {
      try {
        let response = await this.$axios.$get(
          process.env.API_URL + "/api/provinces?country_id=" + this.country_id
        );
        console.log(response);
        response.data.forEach((value, index) => {
          this.provinces.push({
            label: value.name,
            code: value.id,
          });
        });
      } catch (error) {
        console.log(error);
      }
    },
    async getCity() {
      try {
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
    async doRegister() {
      try {
        let data = {
          first_name: this.first_name,
          last_name: this.last_name,
          phone: this.phone,
          email: this.email,
          password: this.password,
          password_confirmation: this.password_confirmation,
          address: this.address,
          country: this.country_id,
          province: this.province_id,
          city: this.city_id,
          postal_code: this.postal_code,
          agreement_1: this.agreement_1,
          agreement_2: this.agreement_2,
        };
        console.log(data);
        let response = await this.$axios.$post(
          process.env.API_URL + "/api/register",
          data
        );
        if (response.success) {
          //success registration
          this.showDismissibleAlert = false;
          //this.$router.push("/welcome");
        } else {
          this.errors = response.message;
          this.showDismissibleAlert = true;
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
    this.getCountry();
  },
};
</script>
