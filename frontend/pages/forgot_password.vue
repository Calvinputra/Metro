<template>
  <section>
    <section id="forgot-webview">
      <Breadcrumb :links="breadcrumb" />
      <section>
        <div class="container">
          <div class="row">
            <div class="col-md-2">
              <AccountMenu :name="'forgot'" />
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
                  ><h2 class="font-weight-bold">Lupa Kata Sandi?</h2></label
                >
              </div>
              <div class="mb-4">
                <hr
                  style="height: 10%; width: 100%; border-width: 0; color: red"
                  class="col-sm-12 mb-0 mt-0"
                />
                <p class="mb-">
                  Pemulihan kata sandi akan dikirim melalui email.
                </p>
              </div>

              <div class="mb-0">
                <h3 class="text-center">Masukkan email anda</h3>
                <b-alert
                  v-model="showDismissibleAlert"
                  variant="success"
                  dismissible
                >
                  {{ message }}
                </b-alert>
              </div>
              <div>
                <form class="ms-5 ps-5">
                  <div class="form-group mb-0">
                    <label for="email"
                      >Email<span style="color: red">*</span>:</label
                    >
                    <input
                      v-model="email"
                      type="email"
                      class="form-control mb-2 col-sm-10"
                      id="email"
                      name="email"
                      placeholder="Email"
                    />
                    <p class="mb-0" style="color: red">*Wajib diisi</p>
                    <br />
                  </div>
                </form>
                <div class="text-center">
                  <button
                    type="submit"
                    @click.prevent="delay"
                    class="
                      btn
                      text-danger
                      btn-light btn-sm
                      rounded
                      col-sm-3
                      py-2
                      px-2
                    "
                    style="
                      box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important;
                    "
                  >
                    Perbarui kata sandi
                  </button>
                </div>
                <div class="mt-5 ms-5 ps-5">
                  Belum mempunyai akun?
                  <a href="/register" style="color: red">Buat Akun</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

    </section>

    <section id="forgot-mobileview">
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
                  ><h2 class="font-weight-bold">Lupa Kata Sandi?</h2></label
                >
              </div>
              <div class="mb-4">
                <hr
                  style="height: 10%; width: 100%; border-width: 0; color: red"
                  class="col-sm-12 mb-0 mt-0"
                />
                <p class="mb-">
                  Pemulihan kata sandi akan dikirim melalui email.
                </p>
              </div>

              <div class="mb-0">
                <h3 class="text-center">Masukkan email anda</h3>
                <b-alert
                  v-model="showDismissibleAlert"
                  variant="success"
                  dismissible
                >
                  {{ message }}
                </b-alert>
              </div>
              <div>
                <form>
                  <div class="form-group mb-0">
                    <label for="email"
                      >Email<span style="color: red">*</span>:</label
                    >
                    <input
                      v-model="email"
                      type="email"
                      class="form-control mb-2 col-sm-10"
                      id="email"
                      name="email"
                      placeholder="Email"
                    />
                    <p>
                      Lupa kata sandi?
                      <span class="text-danger"
                        ><a href=""> Klik disini.</a></span
                      >
                    </p>
                    <br />
                  </div>
                </form>
                <div class="text-center">
                  <button
                    @click.prevent="delay"
                    type="submit"
                    class="btn text-danger btn-light btn-sm rounded p-2"
                    style="
                      box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important;
                    "
                  >
                    Perbarui kata sandi
                  </button>
                </div>
                <div class="mt-5 ms-5">
                  Belum mempunyai akun?
                  <a href="/register" style="color: red">Buat Akun</a>
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
export default {
  data() {
    return {
      breadcrumb: [
        {
          url: "/",
          name: "Beranda",
          class: "my-2 ms-3 breadcrumb-item opacity-50",
        },
        {
          url: "/forgot_password",
          name: "Lupa Password",
          class: "my-2 breadcrumb-item active opacity-50",
        },
      ],
      email: "",
      disabled: false,

      message: null,
      dismissSecs: 10,
      dismissCountDown: 0,
      showDismissibleAlert: false,
    };
  },
  methods: {
    delay() {
      this.disabled = true;

      // Re-enable after 5 seconds
      this.timeout = setTimeout(() => {
        this.disabled = false;
      }, 5000);

      this.doSendForgotPassword();
    },
    async doSendForgotPassword() {
      let data = {
        email: this.email,
      };
      let response = await this.$axios.$post(
        process.env.API_URL + "/api/forgot_password",
        data
      );
      if (response.success) {
        this.message =
          "Email request untuk reset password telah dikirim, silahkan cek email Anda untuk melanjutkan";
        this.showDismissibleAlert = true;
          this.$toast.success(this.message, {
            theme: "bubble",
            position: "bottom-right",
            duration: 5000
          });
      } else {
        const err = response.message;
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
    },
  },
};
</script>

<style lang="css" scoped>
#forgot-mobile {
  display: none;
}
#forgot-mobileview {
  display: none;
}
/* 0 - 991 px */
@media screen and (max-width: 500px) {
  #forgot_logo {
    display: none !important;
  }

  #forgot-webview {
    display: none;
  }

  #forgot-mobile {
    display: contents;
  }

  #forgot-mobileview {
    display: grid;
  }
}
</style>
