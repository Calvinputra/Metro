<template>
  <section>
    <Header />
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
            </div>
            <div>
              <form class="ms-5 ps-5">
                <div class="form-group mb-0">
                  <label for="email"
                    >Email<span style="color: red">*</span>:</label
                  >
                  <input
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
                  class="
                    btn
                    text-danger
                    btn-light btn-sm
                    rounded
                    col-sm-3
                    py-2
                    px-2
                  "
                  style="box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important"
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
          class: "my-2 ms-3 breadcrumb-item opacity-50",
        },
        {
          url: "/register",
          name: "Register",
          class: "my-2 breadcrumb-item active opacity-50",
        },
      ],
    };
  },
};
</script>
