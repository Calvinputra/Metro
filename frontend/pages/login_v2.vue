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
                ><h2 class="font-weight-bold">Masuk ke Akun Saya</h2></label
              >
            </div>
            <div class="mb-4">
              <hr
                style="height:10%; width:100%; border-width:0; color:red"
                class="col-sm-12 mb-0 mt-0"
              />
              <p class="mb-">
                Jika belum mempunyai akun dapat mendaftar pada halaman buat Buat
                Akun.
              </p>
            </div>

            <div class="mr-5 pr-5">
              <h2 class="text-center mr-5 pr-5">Masuk Ke Akun</h2>
            </div>
            <div>
              <div class="row justify-content-start">
                <form>
                  <div class="form-group col-sm-10">
                    <label for="email"
                      >Email<span style="color: red">*</span>:</label
                    >
                    <input
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
                    type="submit"
                    class="  btn
                  text-danger
                  btn-light
                  btn-sm
                  shadow
                  rounded
                  col-sm-2
                  ms-0
                  ps-0
                  py-2
                  px-2"
                  >
                    Masuk Akun
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
  data() {
    return {
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
      ]
    };
  }
};
</script>
