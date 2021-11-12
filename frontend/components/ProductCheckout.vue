<template>
  <tr>
    <td>
      <div class="product-item text-middle" style="display: flex">
        <a class="product-thumb" href="#"
          ><img
            class="mt-4"
            style="border-radius: 5%; width: 280px; height: 180px"
            :src="ASSET_URL + '/' + JSON.parse(product.images)[0]"
            alt="Product"
        /></a>
        <p class="row gx-0 align-items-center">
          {{ product.code }} - {{ product.name }}
        </p>
      </div>
      <pre></pre>
    </td>
    <td class="text-center text-lg text-medium align-middle">
      {{ Number(qty).toLocaleString("id-ID") }}
    </td>

    <td class="text-center text-lg text-medium align-middle">
      Rp.{{ Number(product.price).toLocaleString("id-ID") }}
    </td>
    <td class="text-center text-lg text-medium align-middle">
      Rp.{{ Number(sub_total).toLocaleString("id-ID") }}
    </td>
  </tr>
</template>
<script>
export default {
  props: ["product", "qty", "id"],
  middleware: "auth",
   data() {
    return {
      sub_total: 0,
      ASSET_URL: process.env.ASSET_URL,
    };
  },
  async asyncData({ $axios }) {
    try {
      let carts = await $axios.$get(process.env.API_URL + "/api/carts");
      console.log(carts);
      return {
        carts: carts.data,
      };
    } catch (error) {
      console.log(error);
    }
  },
  created(){
      this.sub_total = this.qty*this.product.price
  }
};
</script>
