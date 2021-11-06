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
                    ></textarea>
                  </div>
                  <div class="form-group">
                    <label for="country"
                      >Negara<span style="color: red">*</span>:</label
                    >

                    <select
                      class="form-control select2"
                      name="country"
                      id="country"
                    >
                      <option>Pilih Negara</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="province"
                      >Provinsi<span style="color: red">*</span>:</label
                    >
                    <select
                      class="form-control select2"
                      name="province"
                      id="province"
                    >
                      <option>Pilih Provinsi</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="city"
                      >Kota<span style="color: red">*</span>:</label
                    >
                    <select class="form-control select2" name="city" id="city">
                      <option>Pilih Kota</option>
                    </select>
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
                    />

                    <label class="form-check-label" for="exampleCheck2"
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
    <client-only>
      <script>
        $(document).ready(function () {
          $(".select2").select2();
        });
      </script>
    </client-only>
  </section>
</template>

<script>
export default {
  data() {
    return {
      country_options: [],
      country_selected: ["Indonesia"],
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
};
</script>
