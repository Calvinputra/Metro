<template>
  <tr class="border-bottom-top">
    <td class="d-flex px-0">
      <div class="product-item text-middle d-flex mb-2">
        <div class="form-check mt-auto mb-auto">
          <input
            class="form-check-input"
            type="checkbox"
            id="flexCheckChecked"
            v-model="process_model"
            @change="updateSubTotal"
          />
        </div>
        <nuxt-link class="product-thumb" :to="'/products/' + product.id"
          ><img
            style="border-radius: 5%; width: 60px; height: 60px"
            :src="ASSET_URL + '/' + JSON.parse(product.images)[0]"
            alt="Product"
          />
        </nuxt-link>
      </div>
      <span class="">
        <p class="mb-0" style="font-size: 10px">
          <nuxt-link class="product-thumb" :to="'/products/' + product.id">
            {{ product.code }}
          </nuxt-link>
        </p>
        <p class="mb-0" style="font-size: 10px">
          <nuxt-link class="product-thumb" :to="'/products/' + product.id">
            <b>{{ product.name }}</b>
          </nuxt-link>
        </p>
        <p class="text-lg text-medium align-middle" style="font-size: 10px">
          Rp.{{ Number(sub_total).toLocaleString("id-ID") }}
        </p>
      </span>
    </td>
    <td class="text-center align-middle py-0 border-bottom-top">
      <div>
        <div class="count-input">
          <input
            @change="updateSubTotal()"
            class="col-9"
            style="font-size: 12px"
            id="demoInput"
            type="number"
            min="0"
            v-model="qty_model"
          />
        </div>
      </div>
    </td>
    <td class="text-center align-middle p-0 border-bottom-top">
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

<style scoped>
.border-bottom-top {
  border-bottom: 1px solid #c63442 !important;
  border-top: 1px solid #c63442 !important;
}
.product-thumb {
  color: black;
}
</style>

<script>
export default {
  props: ["product", "qty", "id", "process", "index"],
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
              this.$emit("updateCart", {
                qty: this.qty_model,
                index: this.index,
                process: this.process_model,
              });
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
          process: this.process_model,
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
                duration: 5000,
              });
              this.$emit("deleteCartHandler", this.index);
              this.$nuxt.refresh();
            });
          console.log(response);
        } catch (error) {
          console.log(error);
        }
      } else {
        this.$store.dispatch("deleteCart", {
          product: this.product,
          notification: true,
        });
      }
    },
    async setChecked(value) {
      this.process_model = value;
      this.updateSubTotal();
    },
  },

  created() {
    this.sub_total = this.qty * this.product.price;
    this.qty_model = this.qty;
    this.process_model = this.process;
  },
};
</script>
