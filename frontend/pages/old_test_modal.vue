<template>
  <section>
    <ModalUlasan />

    <b-button v-b-modal.modal-ulasan>Detail Modal</b-button>
    <br />
  </section>
</template>

<script>
export default {
  data() {
    return { selectedTransaction: {} };
  },
  async asyncData({ $axios }) {
    try {
      let response = await $axios.$get(
        process.env.API_URL + "/api/transactions"
      );
      //console.log(response.data);
      return {
        transactions: response.data
      };
    } catch (error) {
      console.log(error);
    }
  },
  methods: {
    onShowModal(transaction) {
      this.selectedTransaction = transaction;
      this.$bvModal.show("modal-detailtransaksi");

      console.log(transaction);
    }
  }
};
</script>
