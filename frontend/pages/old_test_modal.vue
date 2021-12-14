<template>
  <section>
    <Header />
    <ModalDetailTransaksi :transaction="selectedTransaction" />
    <ModalUlasan />
    <ModalKonfirmasiBelanja />
    <b-button v-b-modal.modal-1>Launch demo modal</b-button>
    <br />
    <b-button v-b-modal.modal-detailtransaksi @click="onShowModal(transactions[0])"
      >Detail Transaksi</b-button
    >
    <br />
    <b-button v-b-modal.modal-2>Detail Modal</b-button>
    <br />
    <b-button v-b-modal.modal-konfirmasi>Konfirmasi Belanja Modal</b-button>
    <br />

    <Footer />
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
      console.log(transaction);
    },
  },
};
</script>
