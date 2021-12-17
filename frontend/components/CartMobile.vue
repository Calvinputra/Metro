<template>
  <tr>
    <td class="d-flex">
      <div class="product-item text-middle d-flex">
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
            style="border-radius: 5%; width: 80px; height: 80px"
            :src="ASSET_URL + '/' + JSON.parse(product.images)[0]"
            alt="Product"
        /></a>
      </div>
      <pre></pre>
      <span class="pr-5">
        <p class="">{{ product.code }} - {{ product.name }}</p>
        <p class="text-center text-lg text-medium align-middle">
          Rp.{{ Number(sub_total).toLocaleString("id-ID") }}
        </p>
      </span>
    </td>
    <td class="text-center align-middle">
      <div>
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
      </div>
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
      process_model: false
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
            process: this.process_model
          };

          let response = await this.$axios
            .$put(process.env.API_URL + "/api/carts/" + this.id, data)
            .then(() => {
              //this.$nuxt.refresh();
              this.$store.dispatch("setCartChange", true);
            });

          console.log(response);
        } catch (error) {
          console.log(error);
        }
      } else {
        this.sub_total = this.qty_model * this.product.price;
        this.$store.dispatch("updateCart", {
          product: this.product,
          qty: this.qty_model,
          process: this.process_model
        });
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
                duration: 5000
              });
              this.$store.dispatch("setCartChange", true);
              this.$nuxt.refresh();
            });
          console.log(response);
        } catch (error) {
          console.log(error);
        }
      } else {
        this.$store.dispatch("deleteCart", this.product);
      }
    }
  },

  created() {
    this.sub_total = this.qty * this.product.price;
    this.qty_model = this.qty;
    this.process_model = this.process;
  }
};
</script>
