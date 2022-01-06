<template>
  <section>
    <Header />
    <div class="text-center container mt-5 mb-5">
      <div>
        <div class="col-sm-2"></div>
        <div class="container border border-2 mt-3 rounded col-sm-8">
          <h3 class="fw-bold mt-2 mb-3">Sign In</h3>
          <span>
            <p class="text-center">
              Your email has been verified! Thank you for your register on Metro
              Jaya.
            </p>
          </span>
          <p>
            Click this button to continue your activity on Metro Jaya
          </p>
          <a
            href="#"
            class="btn text-white mb-3 p-2"
            style="background-color: #841C26 "
            >Continue</a
          >
        </div>
        <div class="col-sm-2"></div>
      </div>
    </div>

    <Footer />
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
      let message = "";
      Object.keys(response.message).forEach((key, error) => {
        Object.keys(response.message[key]).forEach((key2, e) => {
          message = response.message[key][key2];
        });
      });
      return {
        message: message,
        success: response.success
      };
    } catch (error) {
      console.log(error);
    }
  }
};
</script>
