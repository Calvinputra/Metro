<template>
  <section style="font-family: 'Nunito Sans'">
    <section id="login-webview">
      <Breadcrumb :links="breadcrumb" />
      <section>
        <div class="container">
          <div class="row">
            <div class="col-md-2">
              <AccountMenu :name="'login'" />
            </div>
            <div
              class="col-sm-9 offset-md-1 align-self-start mt-2 row justify-content-between"
            >
              <div class="col-sm-12">
                <label class="mb-0"
                  ><h2
                    class="font-weight-bold"
                    style="font-family: 'Nunito Sans'"
                  >
                    Masuk ke Akun Saya
                  </h2></label
                >
              </div>
              <div class="mb-4">
                <hr
                  style="height: 10%; width: 100%; border-width: 0; color: red"
                  class="col-sm-12 mb-0 mt-0"
                />
                <p class="mb-">
                  Jika belum mempunyai akun dapat mendaftar pada halaman buat
                  Buat Akun.
                </p>
              </div>

              <div>
                <h2 class="text-center" style="font-family: 'Nunito Sans'">
                  Masuk Ke Akun
                </h2>
              </div>

              <br />
              <div>
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
                <div class="row">
                  <form class="ps-5 ms-5">
                    <div class="form-group col-sm-10">
                      <label for="email" style="font-family: 'Nunito Sans'"
                        >Email<span style="color: red">*</span></label
                      >
                      <input
                        v-on:keyup.enter="doLogin"
                        v-model="email"
                        type="email"
                        class="form-control"
                        id="email"
                        name="email"
                        placeholder="Email"
                      />
                    </div>
                    <div class="form-group col-sm-10">
                      <label for="password" style="font-family: 'Nunito Sans'"
                        >Kata Sandi<span style="color: red">*</span></label
                      >
                      <input
                        v-on:keyup.enter="doLogin"
                        v-model="password"
                        type="password"
                        class="form-control"
                        id="password"
                        name="password"
                        placeholder="Password"
                      />
                      <p style="color: red" class="mt-2">*Wajib diisi</p>
                    </div>
                  </form>
                  <div class="text-center">
                    <button
                      @click.prevent="doLogin"
                      type="submit"
                      class="btn text-white btn-danger btn-sm rounded col-sm-3 py-2"
                      style="
                        box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important;
                      "
                    >
                      Masuk Akun
                    </button>
                  </div>
                  <center class="mt-3 mb-3">
                    <p>Atau</p>
                  </center>
                  <center class="mb-3">
                    <Googlebutton />
                  </center>
                  <p class="ms-5" style="padding-left: 4rem !important">
                    Lupa kata sandi?
                    <nuxt-link to="/forgot_password" style="color: red"
                      >Klik disini</nuxt-link
                    >
                  </p>
                  <br />
                  <div class="ms-5" style="padding-left: 4rem !important">
                    Belum mempunyai akun?
                    <nuxt-link to="/register" style="color: red"
                      >Buat Akun</nuxt-link
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </section>

    <section id="login-mobileview">
      <section style="font-size: 12px">
        <div class="container">
          <div class="row">
            <div
              class="col-sm-9 offset-md-1 align-self-start mt-2 row justify-content-between"
            >
              <div class="col-sm-12">
                <label class="mb-0"
                  ><h2 class="font-weight-bold">Masuk ke Akun Saya</h2></label
                >
              </div>
              <div class="mb-4">
                <hr
                  style="height: 3px; width: 100%; border-width: 0; color: red"
                  class="col-sm-12 mb-0 mt-0"
                />
                <p class="mb-">
                  Jika belum mempunyai akun dapat mendaftar pada halaman buat
                  Buat Akun.
                </p>
              </div>

              <div>
                <h2 class="text-center" style="font-family: 'Nunito Sans'">
                  Masuk Ke Akun
                </h2>
              </div>
              <p style="color: red" class="ms-3">*Wajib diisi</p>

              <div>
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
                <div class="row">
                  <form>
                    <div class="form-group col-sm-10">
                      <label for="email"
                        >Email<span style="color: red">*</span></label
                      >
                      <input
                        v-on:keyup.enter="doLogin"
                        v-model="email"
                        type="email"
                        class="form-control"
                        id="email"
                        name="email"
                        placeholder="Email"
                      />
                    </div>
                    <div class="form-group col-sm-10">
                      <label for="password"
                        >Kata Sandi<span style="color: red">*</span></label
                      >
                      <input
                        v-on:keyup.enter="doLogin"
                        v-model="password"
                        type="password"
                        class="form-control"
                        id="password"
                        name="password"
                        placeholder="Password"
                      />
                    </div>
                  </form>
                  <div class="text-center">
                    <button
                      @click.prevent="doLogin"
                      type="submit"
                      class="btn text-danger btn-light btn-sm rounded mb-4 p-2"
                      style="
                        box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important;
                      "
                    >
                      Masuk Akun
                    </button>
                  </div>
                  <p class="ms-2">
                    Lupa kata sandi?
                    <nuxt-link to="/forgot_password" style="color: red"
                      >Klik disini</nuxt-link
                    >
                  </p>
                  <br />
                  <div class="ms-2">
                    Belum mempunyai akun?
                    <nuxt-link to="/register" style="color: red"
                      >Buat Akun</nuxt-link
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <Footer2mobile />
      </section>
    </section>
  </section>
</template>

<script>
import { mapGetters, mapActions } from "vuex";
export default {
  middleware: "auth",
  auth: "guest",
  data() {
    return {
      //breadcrumb
      breadcrumb: [
        {
          url: "/",
          name: "Beranda",
          class: "my-2 ms-3 breadcrumb-item opacity-50",
        },
        {
          url: "/Login",
          name: "Masuk Akun",
          class: "my-2 breadcrumb-item active opacity-50",
        },
      ],
      //data
      email: "",
      password: "",
      //alert
      errors: null,
      dismissSecs: 10,
      dismissCountDown: 0,
      showDismissibleAlert: false,
    };
  },
  computed: {
    ...mapGetters({
      tempCart: "getCheckout",
    }),
  },
  methods: {
    async doLogin() {
      try {
        let data = {
          email: this.email,
          password: this.password,
        };
        let response = await this.$axios.$post(
          process.env.API_URL + "/api/login",
          data
        );
        if (response.success) {
          await this.$auth
            .loginWith("laravelSanctum", {
              data: {
                email: this.email,
                password: this.password,
              },
            })
            .then(async () => {
              this.showDismissibleAlert = false;
              let d = {
                carts: this.tempCart,
              };
              //update current cart database
              let r = await this.$axios.$post(
                process.env.API_URL + "/api/carts/multiple",
                d
              );
              //deleteAllCart on state
              this.$store.dispatch("deleteAllCart").then(() => {
                //refetch data from database
                r.data.map((product) => {
                  this.addProductToCart(product);
                });
              });

              this.$toast.success("Berhasil masuk", {
                theme: "bubble",
                position: "bottom-right",
                duration: 5000,
              });
              // setTimeout(() => {
              //   window.location.reload(true);
              // }, 1000);
            });
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
        this.$toast.error(error, {
          theme: "bubble",
          position: "bottom-right",
          duration: 5000,
        });
        console.log(error);
      }
    },
    ...mapActions(["addProductToCart"]),
  },
  mounted() {
    if (this.$route.params.social_callback == "social-callback") {
      if (this.$route.query.error) {
        this.$toast.error(this.$route.query.error, {
          theme: "bubble",
          position: "bottom-right",
          duration: 5000,
        });
      } else if (this.$route.query.token) {
        this.$auth
          .loginWith("laravelSanctum", {
            data: {
              token: this.$route.query.token,
            },
          })
          .then(async () => {
            this.showDismissibleAlert = false;
            let d = {
              carts: this.tempCart,
            };
            //update current cart database
            let r = await this.$axios.$post(
              process.env.API_URL + "/api/carts/multiple",
              d
            );
            //deleteAllCart on state
            this.$store.dispatch("deleteAllCart").then(() => {
              //refetch data from database
              r.data.map((product) => {
                this.addProductToCart(product);
              });
            });
            this.$router.replace({ query: null });
            this.$nuxt.refresh();

            this.$toast.success("Berhasil masuk", {
              theme: "bubble",
              position: "bottom-right",
              duration: 5000,
            });
            // setTimeout(() => {
            //   window.location.reload(true);
            // }, 1000);
          });
      }
    } else if (this.$route.params.social_callback) {
      this.$toast.error("URL Error, Silahkan Coba Lagi", {
        theme: "bubble",
        position: "bottom-right",
        duration: 5000,
      });
    }
  },
  watchQuery: ["error", "token"],
};
</script>

<style lang="css" scoped>
#login-mobile {
  display: none;
}
#login-mobileview {
  display: none;
}
/* 0 - 991 px */
@media screen and (max-width: 500px) {
  #login_logo {
    display: none !important;
  }

  #login-webview {
    display: none;
  }

  #login-mobileview {
    display: contents;
  }
}
</style>
