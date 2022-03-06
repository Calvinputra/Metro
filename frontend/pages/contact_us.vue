<template>
  <section style="font-family: 'Nunito Sans'">
    <section id="contact-webview">
      <Breadcrumb :links="breadcrumb" />
      <section>
        <div class="d-flex" style="justify-content: space-evenly">
          <div style="col-sm">
            <img src="/img/metro.png" alt="" />
          </div>
          <div class="mr-5 col-sm-5">
            <form method="post" class="mr-5">
              <div class="col-sm-12">
                <label class="mb-0 mt-5"
                  ><h2
                    class="font-weight-bold "
                    style="font-family: 'Nunito Sans'"
                  >
                    Formulir umpan balik
                  </h2></label
                >
                <hr
                  style="height: 3px; border-width: 0; color: red"
                  class="col-sm-12"
                />
              </div>
              <div class="form-group mt-2">
                <label for="first_name"
                  >Nama Depan<span style="color: red">*</span></label
                >
                <input
                  type="text"
                  class="form-control col-sm-12"
                  id="first_name"
                  name="first_name"
                  v-model="first_name"
                  placeholder="Nama Depan"
                />
              </div>
              <div class="form-group">
                <label for="last_name"
                  >Nama Belakang<span style="color: red">*</span></label
                >
                <input
                  type="text"
                  class="form-control"
                  id="last_name"
                  name="last_name"
                  v-model="last_name"
                  placeholder="Nama Belakang"
                />
              </div>
              <div class="form-group">
                <label for="email"
                  >Email<span style="color: red">*</span></label
                >
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  name="email"
                  v-model="email"
                  placeholder="Email"
                />
              </div>
              <div class="form-group">
                <label for="last_name"
                  >Nomor Telepon<span style="color: red">*</span></label
                >
                <input
                  type="text"
                  class="form-control"
                  id="phone"
                  name="phone"
                  v-model="phone"
                  placeholder="Nomor Telepon"
                />
              </div>
              <div class="form-group">
                <label for="address"
                  >Tuliskan Pesan<span style="color: red">*</span></label
                >
                <textarea
                  class="form-control"
                  id="message"
                  name="message"
                  v-model="message"
                  rows="3"
                ></textarea>
                <p style="color: red">
                  <span style="color: red">*</span>Wajib diisi
                </p>
                <div class="text-center">
                  <button
                    type="submit"
                    :disabled="disabled"
                    @click.prevent="delay"
                    class="
                      btn
                      text-danger text-center
                      btn-light btn-sm
                      shadow
                      rounded
                      col-sm-2
                      ms-5
                      mr-5
                    "
                  >
                    Kirim
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </section>
    </section>
    <section id="contact-mobileview">
      <Breadcrumb :links="breadcrumb" />
      <div class="col-sm-12">
        <label class="mb-0"
          ><h2 class="font-weight-bold">Formulir umpan balik</h2></label
        >
        <hr
          style="height: 2px; border-width: 0; color: red"
          class="col-sm-12 me-2"
        />
      </div>
      <section class="container">
        <div>
          <div style="col-sm">
            <img style="width: 100%" src="/img/metro.png" alt="" />
          </div>
          <div>
            <form method="post" class="mr-5">
              <div class="form-group mt-2">
                <label for="first_name"
                  >Nama Depan<span style="color: red">*</span></label
                >
                <input
                  type="text"
                  class="form-control col-sm-12"
                  id="first_name"
                  name="first_name"
                  v-model="first_name"
                  placeholder="Nama Depan"
                />
              </div>
              <div class="form-group">
                <label for="last_name"
                  >Nama Belakang<span style="color: red">*</span></label
                >
                <input
                  type="text"
                  class="form-control"
                  id="last_name"
                  name="last_name"
                  v-model="last_name"
                  placeholder="Nama Belakang"
                />
              </div>
              <div class="form-group">
                <label for="email"
                  >Email<span style="color: red">*</span></label
                >
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  name="email"
                  v-model="email"
                  placeholder="Email"
                />
              </div>
              <div class="form-group">
                <label for="last_name"
                  >Nomor Telepon<span style="color: red">*</span></label
                >
                <input
                  type="text"
                  class="form-control"
                  id="phone"
                  name="phone"
                  v-model="phone"
                  placeholder="Nomor Telepon"
                />
              </div>
              <div class="form-group">
                <label for="address"
                  >Tuliskan Pesan<span style="color: red">*</span></label
                >
                <textarea
                  class="form-control"
                  id="message"
                  name="message"
                  v-model="message"
                  rows="3"
                ></textarea>
                <p style="color: red">
                  <span style="color: red">*</span>Wajib diisi
                </p>
                <div class="text-center ms-2">
                  <button
                    type="submit"
                    class="
                      btn
                      text-danger text-center
                      btn-light btn-sm
                      shadow
                      rounded
                      p-2
                    "
                    :disabled="disabled"
                    @click.prevent="delay"
                  >
                    Kirim
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </section>
    </section>
  </section>
</template>

<style lang="css" scoped>
#contact-mobile {
  display: none;
}
#contact-mobileview {
  display: none;
}
/* 0 - 991 px */
@media screen and (max-width: 500px) {
  #footer_logo {
    display: none !important;
  }

  #contact-webview {
    display: none;
  }

  #contact-mobile {
    display: contents;
  }

  #contact-mobileview {
    display: grid;
  }
}
</style>

<script>
export default {
  data() {
    return {
      first_name: "",
      last_name: "",
      email: "",
      phone: "",
      message: "",
      disabled: false,
      breadcrumb: [
        {
          url: "/",
          name: "Beranda",
          class: "my-2 ms-3 breadcrumb-item opacity-50"
        },
        {
          url: "/contact_us",
          name: "Hubungi Kami",
          class: "my-2 breadcrumb-item active opacity-50"
        }
      ]
    };
  },
  methods: {
    delay() {
      this.disabled = true;

      // Re-enable after 5 seconds
      this.timeout = setTimeout(() => {
        this.disabled = false;
      }, 5000);

      this.doSendFeedback();
    },
    async doSendFeedback() {
      let data = {
        first_name: this.first_name,
        last_name: this.last_name,
        email: this.email,
        phone: this.phone,
        message: this.message
      };
      let response = await this.$axios.$post(
        process.env.API_URL + "/api/feedbacks",
        data
      );
      if (response.success) {
        //success registration
        this.showDismissibleAlert = false;
        this.$toast.success("Thank you for your feedback", {
          theme: "bubble",
          position: "bottom-right",
          duration: 5000
        });
        this.$router.push("/");
      } else {
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
        this.disabled = false;
      }
    }
  }
};
</script>
