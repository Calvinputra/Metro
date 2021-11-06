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
                    class="text-black nav-custom"
                    style="text-decoration: none"
                  >
                    <p class="ms-2">Buat Akun</p>
                  </a>
                  <a
                    href="/login"
                    style="text-decoration: none"
                    class="text-black nav-custom nav-custom-active"
                  >
                    <p class="py-2 ps-2">Masuk Akun</p>
                  </a>
                  <a
                    href=""
                    style="text-decoration: none"
                    class="text-black nav-custom"
                  >
                    <p class="ms-2">Lupa Password</p>
                  </a>
                  <div class="dropdown mt-3">
                    <button
                      class="btn btn-light dropdown-toggle"
                      type="button"
                      id="dropdown1"
                      data-bs-toggle="dropdown"
                    >
                      Akun Saya
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdown1">
                      <li>
                        <a href="#" class="dropdown-item">Ubah Kata Sandi</a>
                      </li>
                      <li>
                        <a href="#" class="dropdown-item">Riwayat Pembelian</a>
                      </li>
                      <li>
                        <a href="#" class="dropdown-item">Undang Teman</a>
                      </li>
                      <li>
                        <a href="#" class="dropdown-item">Undang Teman</a>
                      </li>
                    </ul>
                  </div>
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
                ><h2 class="font-weight-bold">Masuk ke Akun Saya</h2></label
              >
            </div>
            <div class="mb-4">
              <hr
                style="height: 10%; width: 100%; border-width: 0; color: red"
                class="col-sm-12 mb-0 mt-0"
              />
              <p class="mb-">
                Jika belum mempunyai akun dapat mendaftar pada halaman buat Buat
                Akun.
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
              <div class="row justify-content-start">
                <form method="post">
                  <div class="form-group">
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
                  <div class="form-group">
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

                  <p style="color: red">*Wajib diisi</p>
                  <br />
                  Lupa kata sandi?
                  <a href="/forgot_password" style="color: red">Klik disini</a>
                  <br />
                </form>
                <div class="text-center">
                  <button
                    @click.prevent="login"
                    type="submit"
                    class="
                      btn
                      text-danger
                      btn-light btn-sm
                      shadow
                      rounded
                      col-sm-2
                      ms-0
                      ps-0
                      py-2
                      px-2
                    "
                  >
                    Masuk
                  </button>
                </div>
                <p></p>
                <div>
                  Belum mempunyai akun?
                  <a href="/forgot_password" style="color: red">Buat Akun</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <Footer />
  </section>
</template>

<script>
export default {
  middleware: "auth",
  auth: "guest",
  data() {
    return {
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
      email: "",
      password: "",
      errors: null,
      dismissSecs: 10,
      dismissCountDown: 0,
      showDismissibleAlert: false,
    };
  },
  methods: {
    async login() {
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
          await this.$auth.loginWith("laravelSanctum", {
            data: {
              email: this.email,
              password: this.password,
            },
          });
          this.showDismissibleAlert = false;
          this.$router.push("/welcome");
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
};
</script>
