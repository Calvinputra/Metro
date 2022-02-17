<template>
  <div class="row">
    <hr
      style="height: 3px; width: 100%; border-width: 0; color: red"
      class="col-sm-12 mb-2 mt-0"
    />
    <div class="col-sm-3">
      <img
        style="width: 150px; height: 100px"
        :src="ASSET_URL + '/' + JSON.parse(detail.product.images)[0]"
        alt=""
      />
    </div>
    <div class="col-sm-8">
      <h5>{{ detail.name }}</h5>
      <p style="margin-top: -5px">Tanggal Pembelian: {{ date }}</p>
      <div class="text-right">
        <b-button
          v-b-modal.modal-ulasan
          @click="showModalUlasan"
          type="submit"
          class="btn text-danger btn-light btn-sm rounded col-sm-3 ms-5"
          style="box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important"
        >
          Beri Ulasan
        </b-button>
      </div>
    </div>
    <hr
      style="height: 3px; width: 100%; border-width: 0; color: red"
      class="col-sm-12 mb-0 mt-2"
    />
  </div>
</template>

<script>
export default {
  props: ["detail", "date"],
  data() {
    return {
      ASSET_URL: process.env.ASSET_URL,
    };
  },
  methods: {
    showModalUlasan() {
      this.$parent.showModalUlasan(this.detail);
    },
  },
};
</script>