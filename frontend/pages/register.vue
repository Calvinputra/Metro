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
              <h2>Registrasi Akun di Metro Jaya*</h2>
            </div>

            <div>
              <div class="row justify-content-start">
                <form>
                  <div class="register-form-title">Pengisian Data Diri</div>
                  <div class="form-group">
                    <label for="first_name">Nama Depan*:</label>
                    <input
                      type="text"
                      class="form-control"
                      id="first_name"
                      name="first_name"
                      placeholder="Nama Depan"
                    />
                  </div>
                  <div class="form-group">
                    <label for="last_name">Nama Belakang*:</label>
                    <input
                      type="text"
                      class="form-control"
                      id="last_name"
                      name="last_name"
                      placeholder="Nama Belakang"
                    />
                  </div>
                  <div class="form-group">
                    <label for="email">Email*:</label>
                    <input
                      type="email"
                      class="form-control"
                      id="email"
                      name="email"
                      placeholder="Email"
                    />
                  </div>
                  <div class="form-group">
                    <label for="password">Kata Sandi*:</label>
                    <input
                      type="password"
                      class="form-control"
                      id="password"
                      name="password"
                      placeholder="Password"
                    />
                  </div>
                  <div class="form-group">
                    <label for="password_confirmation"
                      >Konfirmasi Kata Sandi*:</label
                    >
                    <input
                      type="password"
                      class="form-control"
                      id="password_confirmation"
                      name="password_confirmation"
                      placeholder="Password"
                    />
                  </div>

                  <div class="register-form-title">Alamat Pengiriman</div>
                  <div class="form-group">
                    <label for="address">Alamat Lengkap*:</label>
                    <textarea
                      class="form-control"
                      id="address"
                      name="address"
                      rows="3"
                    ></textarea>
                  </div>
                  <div class="form-group">
                    <label for="country">Negara*:</label>
                    <input
                      type="text"
                      class="form-control"
                      id="country"
                      name="country"
                      placeholder="Negara"
                    />
                  </div>
                  <div class="form-group">
                    <label for="province">Provinsi*:</label>
                    <input
                      type="text"
                      class="form-control"
                      id="province"
                      name="province"
                      placeholder="Provinsi"
                    />
                  </div>
                  <div class="form-group">
                    <label for="city">Kota*:</label>
                    <input
                      type="text"
                      class="form-control"
                      id="city"
                      name="city"
                      placeholder="Kota"
                    />
                  </div>
                  <div class="form-group">
                    <label for="postal_code">Kode Pos*:</label>
                    <input
                      type="text"
                      class="form-control"
                      id="postal_code"
                      name="postal_code"
                      placeholder="Kode Pos"
                    />
                  </div>

                  <br />
                  <label style="color: red">*Wajib diisi</label>
                  <div class="form-check">
                    <input
                      type="checkbox"
                      class="form-check-input"
                      id="exampleCheck1"
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
                      id="exampleCheck1"
                    />

                    <label class="form-check-label" for="exampleCheck1"
                      >Perbarui Saya dengan berita dan promo terbaru</label
                    >
                  </div>
                  <br />
                  <button type="submit" class="btn btn-primary">
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

