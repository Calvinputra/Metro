<template>
  <div class="col-md-4">
    <div class="card rounded shadow mb-5 bg-white rounded" style="width: 100%">
      <img
        style="width: 100%; height: 183px"
        :src="ASSET_URL + '/' + JSON.parse(data.images)[0]"
        class="card-img-top height:auto"
        alt="..."
      />
      <div class="card-body">
        <div class="row">
          <h5 class="col-sm-9 card-title">{{ data.name }}</h5>
          <a class="col-sm-3" href=""
            ><img src="/img/audiblelogo.png" alt=""
          /></a>
        </div>
        <p class="card-text mb-4 font-weight-bold">
          Rp.{{ Number(data.display_price).toLocaleString("id-ID") }}
        </p>
        <div class="row">
          <a
            href="#"
            class="btn text-danger btn-sm shadow rounded col-sm-5 ms-2 pt-2"
            style="background-color: #f3f3f3"
            @click="addToCart(data.id)"
            >+ Keranjang</a
          >
          <a class="col-sm-3" href=""
            ><img
              class="img-fluid max-width:100% height:auto rounded"
              style="background-color: #f3f3f3"
              src="/img/Whatsapp_new.png"
              alt=""
          /></a>
          <a class="col-sm-3" href=""
            ><img
              class="img-fluid max-width:100% height:auto rounded"
              style="background-color: #f3f3f3"
              src="/img/tokopedia.png"
              alt=""
          /></a>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["data", "url"],
  data() {
    return {
      ASSET_URL: process.env.ASSET_URL,
    };
  },
  methods: {
    async addToCart(id) {
      try {
        if (this.$auth.loggedIn) {
          let data = {
            product_id: id,
          };
          let response = await this.$axios.$post(
            process.env.API_URL + "/api/carts",
            data
          );
          console.log(response);
        } else {
          this.$router.push("/login");
        }
      } catch (error) {
        console.log(error);
      }
    },
  },
};
</script>

