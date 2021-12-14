<template>
  <section>
    <div style="color: red" class="mt-3">
      <hr
        style="height: 3px; border-width: 0; color: red"
        class="col-sm-12 mb-0 mt-0"
      />
    </div>
    <div class="d-flex" style="justify-content: space-between">
      <div class="d-flex ml-2 mt-4">
        <div>
          <img class="mr-2" src="/img/audiblelogo.png" alt="" />
        </div>
        <div>
          <span class="border border-warning border-2 text-warning rounded-3">
            Menunggu Pembayaran</span
          >
          #{{ data.uuid }}
          <br />
          <span>{{ data.transaction_details[0].name }}</span>
          <p>
            {{ data.transaction_details[0].qty }} x Rp
            {{
              Number(data.transaction_details[0].price).toLocaleString("id-ID")
            }}
            <template v-if="data.transaction_details.length > 1"
              ><span style="color: red">dan Lainnya</span></template
            >
          </p>
        </div>
      </div>
      <div>
        <p class="text-right mt-3">
          Rp. {{ Number(data.grand_total).toLocaleString("id-ID") }}
        </p>
        <span class="d-flex">
          <button
            type="submit"
            class="
              mr-3
              btn
              text-danger
              btn-light btn-sm
              shadow
              rounded
              col-sm-9
              ms-0
              ps-0
              py-2
              px-2
            "
          >
            <b v-b-modal.modal-detailtransaksi @click="showDetailTransaction">
              Lihat Detail Transaksi</b
            >
          </button>
          <button
            type="submit"
            class="
              btn
              text-danger
              btn-light btn-sm
              shadow
              rounded
              col-sm-4
              ms-0
              ps-0
              py-2
              px-2
            "
          >
            <b> Lainnya</b>
          </button>
        </span>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  props: ["data"],
  methods: {
    showDetailTransaction() {
      this.$parent.showDetailTransaction(this.data);
    },
  },
};
</script>
