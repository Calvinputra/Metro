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
              <h2>Masuk ke Akun Saya*</h2>
            </div>

            <div>
              <div class="row justify-content-start">
                <form>
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

                  <label style="color: red">*Wajib diisi</label>
                  <br />
                  <label
                    >Lupa kata sandi?
                    <a href="/forgot_password" style="color: red"
                      >Klik disini</a
                    ></label
                  >
                  <br />
                  <button type="submit" class="btn btn-primary">Masuk</button>
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

