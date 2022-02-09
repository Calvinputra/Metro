<template>
  <section>
    <ModalDetailTransaksi :transaction="selectedTransaction" />
    <ModalUlasan />
    <ModalKonfirmasiBelanja />
    <b-button v-b-modal.modal-1>Launch demo modal</b-button>
    <br />
    <b-button  @click="onShowModal(transactions[0])"
      >Detail Transaksi</b-button
    >
    <br />
    <b-button v-b-modal.modal-2>Detail Modal</b-button>
    <br />
    <b-button v-b-modal.modal-konfirmasi>Konfirmasi Belanja Modal</b-button>
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
      let response = await $axios.$get(process.env.API_URL + "/api/transactions");
      //console.log(response.data);
      return {
        transactions: response.data,
      };
    } catch (error) {
      console.log(error);
    }
  },
  methods: {
    onShowModal(transaction) {
      this.selectedTransaction = transaction;
      this.$bvModal.show('modal-detailtransaksi');
     
      console.log(transaction);
    },
  },
};
</script>
