<template>
  <section>
    <Header />
    {{ this.message }}
    <Footer />
  </section>
</template>

<script>
export default {
    //http://metrojaya.ddns.net:8000/payment/finish?order_id=771e4521-e9f4-4be2-b59d-b21828bedb5e&status_code=201&transaction_status=pending
  async asyncData({ $axios, query }) {
    let data = {
      uuid: query.order_id,
      status_code: query.status_code,
      transaction_status: query.transaction_status,
    };
    let response = await $axios.$post(process.env.API_URL + "/api/transactions/payment/success", data);
    console.log(response);
    if (response.success) {
      return {
        message: "Success melakukan Pembayaran",
      };
    } else {
      return {
        message: "gagal melakukan pembayaran",
      };
    }
  },
  watchQuery: ["order_id", "status_code", "transaction_status"],
};
</script>