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
                ><h2 class="font-weight-bold">Lupa Kata Sandi?</h2></label
              >
            </div>
            <div class="mb-4">
              <hr
                style="height:10%; width:100%; border-width:0; color:red"
                class="col-sm-12 mb-0 mt-0"
              />
              <p class="mb-">
                Pemulihan kata sandi akan dikirim melalui email.
              </p>
            </div>

            <div class="pr-5 mr-5 mb-0">
              <h3 class="text-center mr-5 pr-5">Masukkan email anda</h3>
            </div>
            <div>
              <div class="row justify-content-start">
                <form>
                  <div class="form-group mb-0">
                    <label for="email"
                      >Email<span style="color: red">*</span>:</label
                    >
                    <input
                      type="email"
                      class="form-control mb-2 col-sm-9"
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
                    class="  btn
                  text-danger
                  btn-light
                  btn-sm
                  shadow
                  rounded
                  col-sm-2
                  py-2
                  px-2"
                  >
                    Perbarui kata sandi
                  </button>
                </div>
                <div class="mt-4">
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
