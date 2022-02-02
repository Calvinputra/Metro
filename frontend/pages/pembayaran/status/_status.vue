<template>
  <section>
    <Header />
    {{ this.message }}
    <Footer />
  </section>
</template>

<script>
export default {
  //https://docs.midtrans.com/en/technical-reference/sandbox-test
  // https://metrojayaindonesia.com/pembayaran/finish?order_id=1bc83b7c-0a6a-469d-baa5-271e9056cf06&status_code=200&transaction_status=capture
  //http://metrojaya.ddns.net:8000/payment/finish?order_id=771e4521-e9f4-4be2-b59d-b21828bedb5e&status_code=201&transaction_status=pending
  async asyncData({ $axios, params }) {
    try {
      let response = await $axios.$get(
        process.env.API_URL + `/api/transactions/${params.uuid}?action=get`
      );
      let response_data = response.data;

      return {
        data: response_data,
      };
    } catch (error) {
      console.log(error);
    }
  },
  created() {
    if (this.$route.params.status == "unfinish") {
    } else if (this.$route.params.status == "finish") {
    } else if (this.$route.params.status == "error") {
    }
  },
  watchQuery: ["order_id", "status_code", "transaction_status"],
};
</script>