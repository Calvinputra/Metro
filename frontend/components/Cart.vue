<template>
  <tr>
    <td>
      <div class="product-item text-middle" style="display: flex">
        <div class="form-check mt-auto mb-auto">
          <input
            class="form-check-input"
            type="checkbox"
            id="flexCheckChecked"
            checked
          />
        </div>
        <a class="product-thumb" href="#"
          ><img
            class="mt-4"
            style="border-radius: 5%;width:280px;height:180px;"
             :src="ASSET_URL + '/' + JSON.parse(product.images)[0]"
            alt="Product"
        /></a>
        <p class="row gx-0 align-items-center">
          {{ product.code }} - {{ product.name }}
        </p>
      </div>
      <pre></pre>
    </td>
    <td class="text-center align-middle">
      <div class="count-input">
        <input
          @change="updateSubTotal"
          class="col-sm-4"
          id="demoInput"
          type="number"
          min="0"
          v-model="qty"
        />
      </div>
    </td>
    <td class="text-center text-lg text-medium align-middle">
      Rp.{{ Number(product.price).toLocaleString("id-ID") }}
    </td>
    <td class="text-center text-lg text-medium align-middle">
      Rp.{{ Number(sub_total).toLocaleString("id-ID") }}
    </td>
    <td class="text-center align-middle">
      <a
        class="remove-from-cart"
        href=""
        data-toggle="tooltip"
        title=""
        data-original-title="Remove item"
        ><i class="fa fa-trash"></i
      ></a>
    </td>
  </tr>
</template>
<script>
export default {
  props: ["product", "qty", "id"],
  data() {
    return {
      sub_total: 0,
      ASSET_URL: process.env.ASSET_URL,
    };
  },
  methods: {
    updateSubTotal() {
      this.sub_total = this.qty * this.product.price;
      //update database

    },
  },
  created() {
    this.sub_total = this.qty * this.product.price;
  },
};
</script>