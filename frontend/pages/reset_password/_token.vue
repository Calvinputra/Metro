<template>
  <section class="mb-5">
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
                  Reset Password<span style="color: red">*</span>
                </h2></label
              >
            </div>
            <div class="mb-4">
              <hr
                style="height: 10%; width: 100%; border-width: 0; color: red"
                class="col-sm-12 mb-0 mt-0"
              />
              <p class="mb-">
                Pastikan Kata Sandi Lama dan Kata Sandi Baru berbeda.
              </p>
            </div>

            <div>
              <div class="row justify-content-start" v-if="success">
                <form>
                  <div class="register-form-title mr-5 pr-5">
                    Masukan Kata Sandi
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
                  <div class="form-group col-sm-11">
                    <label for="password"
                      >Kata Sandi Baru<span style="color: red">*</span>:</label
                    >
                    <input
                      type="password"
                      class="form-control"
                      id="password"
                      name="password"
                      placeholder="New Password"
                      v-model="password"
                    />
                  </div>

                  <div class="form-group col-sm-11">
                    <label for="password_confirmation"
                      >Konfirmasi Kata Sandi Baru<span style="color: red"
                        >*</span
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

                  <br />
                  <div class="text-center">
                    <button
                      @click.prevent="doResetPassword"
                      type="submit"
                      class="btn text-danger btn-light btn-sm rounded p-2"
                      style="
                        box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important;
                      "
                    >
                      Perbarui Kata Sandi
                    </button>
                  </div>
                </form>
              </div>
              <div v-else>
                <div class="container border border-2 mt-3 rounded col-sm-8">
                  <span>
                    <p class="text-center">
                      {{ message }}
                    </p>
                  </span>
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
</template>

<script>
export default {
  async asyncData({ $axios, params }) {
    try {
      let data = { token: params.token };
      let response = await $axios.$post(
        process.env.API_URL + "/api/check_forget_password_token",
        data
      );
      let message = "";
      Object.keys(response.message).forEach((key, error) => {
        Object.keys(response.message[key]).forEach((key2, e) => {
          message = response.message[key][key2];
        });
      });
      return {
        success: response.success,
        message: message,
      };
    } catch (error) {
      console.log(error);
    }
  },
  data() {
    return {
      password: "",
      password_confirmation: "",

      //alert
      errors: null,
      dismissSecs: 10,
      dismissCountDown: 0,
      showDismissibleAlert: false,
    };
  },
  methods: {
    async doResetPassword() {
      try {
        let data = {
          password: this.password,
          password_confirmation: this.password_confirmation,
          token: this.$route.params.token,
        };
        let response = await this.$axios.$post(
          process.env.API_URL + "/api/reset_password",
          data
        );
        if (response.success) {
          //success registration
          this.showDismissibleAlert = false;
          this.$toast.success("Successfully Change your password", {
            theme: "bubble",
            position: "bottom-right",
            duration: 5000,
          });
          await this.$auth.loginWith("laravelSanctum", {
            data: {
              email: response.data.email,
              password: this.password,
            },
          });
          this.$router.push("/");
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
      } catch (error) {
        console.log(error);
      }
    },
  },
};
</script>
