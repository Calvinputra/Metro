<template>
  <section>
    <div class="text-center container mt-5 mb-5">
      <div>
        <div class="col-sm-2"></div>
        <div class="container border border-2 mt-3 rounded col-sm-8">
          <h3 class="fw-bold mt-2 mb-3">Verifikasi Email</h3>
          <span>
            <p class="text-center">
              {{ message }}
            </p>
          </span>
          <template v-if="success">
            <p>
              Klik tombol ini untuk melanjutkan aktivitas anda di Metro Jaya
            </p>
            <button
              @click="doRedirectLogin"
              class="btn text-white mb-3 p-2"
              style="background-color: #841c26"
            >
              Lanjut
            </button>
          </template>
          <template v-else>
            <p style="color: red">Verifikasi Gagal</p>
          </template>
        </div>
        <div class="col-sm-2"></div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  async asyncData({ $axios, params }) {
    try {
      let data = { token: params.token };
      let response = await $axios.$post(
        process.env.API_URL + "/api/verify_email",
        data
      );
      console.log(response);
      let message = "";
      Object.keys(response.message).forEach((key, error) => {
        Object.keys(response.message[key]).forEach((key2, e) => {
          message = response.message[key][key2];
        });
      });

      if (response.success) {
        message =
          " Email Anda telah diverifikasi, Terima kasih telah mendaftar di Metro Jaya Indonesia.";
        this.$auth.fetchUser(); //refresh user data
      } else if (message == "token expired") {
        message = "Token verifikasi sudah terpakai!";
      }
      return {
        message: message,
        success: response.success,
      };
    } catch (error) {
      console.log(error);
    }
  },
  methods: {
    doRedirectLogin() {
      this.$router.push("/login");
    },
  },
};
</script>
