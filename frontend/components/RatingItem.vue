<template>
  <div class="row">
    <hr
      style="height: 3px; width: 100%; border-width: 0; color: red"
      class="col-sm-12 mb-2 mt-0"
    />
    <div class="col-sm-3">
      <nuxt-link :to="`/products/${detail.product.id}`">
        <img
          style="width: 150px; height: 100px"
          :src="ASSET_URL + '/' + JSON.parse(detail.product.images)[0]"
          alt=""
        />
      </nuxt-link>
    </div>
    <div class="col-sm-8">
      <h5>{{ detail.name }}</h5>
      <p style="margin-top: -5px">Tanggal Pembelian: {{ date }}</p>
      <div class="text-right">
        <template v-if="!rating">
          <b-button
            v-b-modal.modal-ulasan
            @click="showModalUlasan"
            type="submit"
            class="btn text-danger btn-light btn-sm rounded col-sm-3 ms-5"
            style="box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important"
          >
            Beri Ulasan
          </b-button>
        </template>
        <template v-else>
          <i
            v-for="index in 5"
            :key="`${detail.product.id}-rating-icon-${index}`"
            :class="`${index <= rating.rating ? 'fas' : 'far'} fa-star`"
            style="font-size: 30px !important"
            aria-hidden="true"
          ></i>
        </template>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["detail", "date", "rating"],
  data() {
    return {
      ASSET_URL: process.env.ASSET_URL,
      rating_exists: false
    };
  },
  methods: {
    showModalUlasan() {
      this.$parent.showModalUlasan(this.detail);
    }
  },
  mounted() {
    console.log(this.rating);
  }
};
</script>
