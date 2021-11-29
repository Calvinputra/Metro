<template>
  <tr>
    <td>
      <div class="product-item text-middle" style="display: flex">
        <div class="form-check mt-auto mb-auto">
          <input
            class="form-check-input"
            type="checkbox"
            id="flexCheckChecked"
            v-model="process_model"
            @change="updateSubTotal"
          />
        </div>
        <a class="product-thumb" href="#"
          ><img
            class="mt-4"
            style="border-radius: 5%; width: 280px; height: 180px"
            :src="ASSET_URL + '/' + JSON.parse(product.images)[0]"
            alt="Product"
        /></a>
        <p class="row gx-0 align-items-center ml-5">
          {{ product.code }} - {{ product.name }}
        </p>
      </div>
      <pre></pre>
    </td>
    <td class="text-center align-middle">
      <div class="count-input">
        <input
          @change="updateSubTotal()"
          class="col-sm-4"
          id="demoInput"
          type="number"
          min="0"
          v-model="qty_model"
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
        data-toggle="tooltip"
        title=""
        @click="deleteCart"
        data-original-title="Remove item"
        ><i class="fa fa-trash"></i
      ></a>
    </td>
  </tr>
</template>
<script>


export default {
  props: ["product", "qty", "id", "process"],
  data() {
    return {
      sub_total: 0,
      ASSET_URL: process.env.ASSET_URL,
      qty_model: 0,
      process_model: false,
    };
  },
  methods: {
    async updateSubTotal() {
      if (this.$auth.loggedIn) {
        console.log("checked : " + this.process_model);
        this.sub_total = this.qty_model * this.product.price;
        //update database
        try {
          let data = {
            qty: this.qty_model,
            process: this.process_model,
          };

          let response = await this.$axios
            .$put(process.env.API_URL + "/api/carts/" + this.id, data)
            .then(() => {
              //this.$nuxt.refresh();
            });

          console.log(response);
        } catch (error) {
          console.log(error);
        }
      } else {
        this.sub_total = this.qty_model * this.product.price;
      }
    },

    async deleteCart() {
      if (this.$auth.loggedIn) {
        try {
          let response = await this.$axios
            .$delete(process.env.API_URL + "/api/carts/" + this.id)
            .then(() => {
              this.$toast.success("Successfully delete a product from cart", {
                theme: "bubble",
                position: "bottom-right",
                duration: 5000,
              });
              this.$nuxt.refresh();
            });
          console.log(response);
        } catch (error) {
          console.log(error);
        }
      } else {

      }
    },
  },
 
  created() {
    this.sub_total = this.qty * this.product.price;
    this.qty_model = this.qty;
    this.process_model = this.process;
  },
};
</script>
