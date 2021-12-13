<template>
  <section>
    <Header />
    <div>{{ message }}</div>
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
        success: response.success,
      };
    } catch (error) {
      console.log(error);
    }
  },
};
</script>
