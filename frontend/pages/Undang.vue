<!-- <section style="font-family: 'Nunito Sans'">
    <section id="undang-webview">
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
                  ><h2 class="font-weight-bold">
                    Undang Teman ke Metro Jaya
                  </h2></label
                >
              </div>
              <div class="mb-4">
                <hr
                  style="height: 10%; width: 100%; border-width: 0; color: red"
                  class="col-sm-12 mb-0 mt-0"
                />
                <p>
                  Undang Teman kamu dan dapatkan promo khusus dari Metro Jaya
                </p>
              </div>

              <div class="mr-5 pr-5">
                <h2 class="text-center mr-5 pr-5">Undang Teman dengan Email</h2>
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
                  <form>
                    <div class="form-group col-sm-10">
                      <label for="email">Email:</label>
                      <input
                        v-model="email"
                        type="email"
                        class="form-control"
                        id="email"
                        name="email"
                        placeholder="Email"
                      />
                    </div>
                  </form>
                  <div class="text-center mt-3">
                    <button
                      @click.prevent="doLogin"
                      type="submit"
                      class="
                      btn
                      text-danger
                      btn-light btn-sm
                      rounded
                      col-sm-2
                      ms-0
                      ps-0
                      py-2
                      px-2
                    "
                      style="box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important;"
                    >
                      Kirim
                    </button>
                  </div>
                  <div class="text-center mt-3">
                    <button
                      @click.prevent="doLogin"
                      type="submit"
                      class="
                      btn
                      text-danger
                      btn-light btn-sm
                      rounded
                      col-sm-3
                      ms-0
                      ps-0
                      py-2
                      px-2
                    "
                      style="box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important"
                    >
                      Salin Tautan Undangan
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </section>

    <section id="undang-mobileview">
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
                  ><h2 class="font-weight-bold">
                    Undang Teman ke Metro Jaya
                  </h2></label
                >
              </div>
              <div class="mb-4">
                <hr
                  style="height: 2%; width: 100%; border-width: 0; color: red"
                  class="col-sm-12 mb-0 mt-0"
                />
                <h6 class="mt-2">
                  Undang Teman kamu dan dapatkan promo khusus dari Metro Jaya
                </h6>
              </div>

              <div class="ps-5 ms-4">
                <h5 class="text-center mr-5 pr-5">Undang Teman dengan Email</h5>
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
                  <form>
                    <div class="form-group col-sm-10">
                      <label for="email">Email:</label>
                      <input
                        v-model="email"
                        type="email"
                        class="form-control"
                        id="email"
                        name="email"
                        placeholder="Email"
                      />
                    </div>
                  </form>
                  <div class="text-center mt-3">
                    <button
                      style="box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important"
                      @click.prevent="doLogin"
                      type="submit"
                      class="
                      btn
                      text-danger
                      btn-light btn-sm
                      rounded
                      p-2
                    "
                    >
                      Kirim
                    </button>
                  </div>
                  <div class="text-center mt-3">
                    <button
                      @click.prevent="doLogin"
                      type="submit"
                      class="
                      btn
                      text-danger
                      btn-light btn-sm
                      rounded
                      p-2
                    "
                      style="box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important"
                    >
                      Salin Tautan Undangan
                    </button>
                  </div>
                  <div class="text-center mt-3">
                    Belum mempunyai akun?
                    <a href="/forgot_password" style="color: red">Buat Akun</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <Footer2mobile />
      </section>
    </section>
  </section> -->

<style lang="css" scoped>
/*
#undang-mobile {
  display: none;
}
#undang-mobileview {
  display: none;
}
@media screen and (max-width: 500px) {
  #undang_logo {
    display: none !important;
  }

  #undang-webview {
    display: none;
  }

  #undang-mobile {
    display: contents;
  }

  #undang-mobileview {
    display: grid;
  }
}*/
</style>
