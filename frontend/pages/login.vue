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
                  ><h2 class="font-weight-bold">Masuk ke Akun Saya</h2></label
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
                <h2 class="text-center">Masuk Ke Akun</h2>
              </div>
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
                        >Email<span style="color: red">*</span>:</label
                      >
                      <input
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
                        >Kata Sandi<span style="color: red">*</span>:</label
                      >
                      <input
                        v-model="password"
                        type="password"
                        class="form-control"
                        id="password"
                        name="password"
                        placeholder="Password"
                      />
                    </div>

                    <p style="color: red" class="ms-3">*Wajib diisi</p>
                    <br />
                    <p class="ms-3">
                      Lupa kata sandi?
                      <a href="/forgot_password" style="color: red"
                        >Klik disini</a
                      >
                    </p>
                    <br />
                  </form>
                  <div class="text-center">
                    <button
                      @click.prevent="doLogin"
                      type="submit"
                      class="
                        btn
                        text-danger
                        btn-light btn-sm
                        rounded
                        col-sm-2
                        py-2
                        px-2
                        mb-4
                      "
                      style="
                        box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important;
                      "
                    >
                      Masuk Akun
                    </button>
                  </div>
                  <div class="ms-5" style="padding-left: 4rem !important">
                    Belum mempunyai akun?
                    <a href="/register" style="color: red">Buat Akun</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </section>

    <section id="login-mobileview">
      <section>
        <div class="container">
          <div class="row">
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
                  ><h2 class="font-weight-bold">Masuk ke Akun Saya</h2></label
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
                <h2 class="text-center">Masuk Ke Akun</h2>
              </div>
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
                        >Email<span style="color: red">*</span>:</label
                      >
                      <input
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
                        >Kata Sandi<span style="color: red">*</span>:</label
                      >
                      <input
                        v-model="password"
                        type="password"
                        class="form-control"
                        id="password"
                        name="password"
                        placeholder="Password"
                      />
                    </div>

                    <p style="color: red" class="ms-3">*Wajib diisi</p>
                    <p class="ms-3">
                      Lupa kata sandi?
                      <a href="/forgot_password" style="color: red"
                        >Klik disini</a
                      >
                    </p>
                    <br />
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
                  <div class="ms-5">
                    Belum mempunyai akun?
                    <a href="/register" style="color: red">Buat Akun</a>
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
          class: "my-2 ms-3 breadcrumb-item opacity-50"
        },
        {
          url: "/register",
          name: "Register",
          class: "my-2 breadcrumb-item active opacity-50"
        }
      ],
      //data
      email: "",
      password: "",
      //alert
      errors: null,
      dismissSecs: 10,
      dismissCountDown: 0,
      showDismissibleAlert: false
    };
  },
  computed: {
    ...mapGetters({
      tempCart: "getCheckout"
    })
  },
  methods: {
    async doLogin() {
      try {
        let data = {
          email: this.email,
          password: this.password
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
                password: this.password
              }
            })
            .then(async () => {
              this.showDismissibleAlert = false;
              let d = {
                carts: this.tempCart
              };
              //update current cart database
              let r = await this.$axios.$post(
                process.env.API_URL + "/api/carts/multiple",
                d
              );
              //deleteAllCart on state
              this.$store.dispatch("deleteAllCart").then(() => {
                //refetch data from database
                r.data.map(product => {
                  this.addProductToCart(product);
                });
              });

              this.$toast.success("Successfully authenticated", {
                theme: "bubble",
                position: "bottom-right",
                duration: 5000
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
                duration: 5000
              });
            });
          });
        }
        console.log(response);
      } catch (error) {
        this.$toasted.error(error, {
          theme: "bubble",
          position: "bottom-right",
          duration: 5000
        });
        console.log(error);
      }
    },
    ...mapActions(["addProductToCart"])
  }
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
