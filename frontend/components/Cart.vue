<template>
  <tr>
    <td>
      <div class="product-item text-middle" style="display: flex">
        <div class="form-check mt-auto mb-auto">
          <input
            class="form-check-input p-2 me-3"
            type="checkbox"
            id="flexCheckChecked"
            v-model="process_model"
            @change="updateSubTotal"
          />
        </div>
        <nuxt-link class="product-thumb" :to="'/products/' + product.id"
          ><img
            class="mt-4"
            style="border-radius: 5%; width: 280px; height: 180px"
            :src="ASSET_URL + '/' + JSON.parse(product.images)[0]"
            alt="Product"
          />
        </nuxt-link>

        <p class="row gx-0 align-items-center ml-5 pt-3">
          <nuxt-link
            class="product-thumb"
            style="text-decoration: none"
            :to="'/products/' + product.id"
          >
            <p>{{ product.code }} - {{ product.name }}</p>
          </nuxt-link>
        </p>
      </div>
      <pre></pre>
    </td>
    <td class="text-center align-middle pt-0">
      <div class="count-input">
        <input
          @change="updateSubTotal()"
          class="col-sm-8 p-1"
          id="demoInput"
          type="number"
          min="0"
          v-model="qty_model"
        />
      </div>
    </td>
    <td class="text-center text-lg text-medium align-middle pt-0">
      {{ product.weight }}gr
    </td>
    <td class="text-center text-lg text-medium align-middle pt-0">
      Rp.{{ Number(product.price).toLocaleString("id-ID") }}
    </td>

    <td class="text-center text-lg text-medium align-middle pt-0">
      Rp.{{ Number(sub_total).toLocaleString("id-ID") }}
    </td>
    <td class="text-center align-middle pt-0">
      <a
        class="remove-from-cart"
        data-toggle="tooltip"
        title=""
        @click="confirmationDeleteCart"
        data-original-title="Remove item"
        ><i class="fa fa-trash"></i
      ></a>
    </td>
  </tr>
</template>
<style scoped>
.product-thumb {
  color: black;
}
</style>
<script>
export default {
  props: ["product", "qty", "id", "process", "index", "checkAllProp"],
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
        //console.log("checked : " + this.process_model);
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
              this.$toast.success("Berhasil menghapus produk ini", {
                theme: "bubble",
                position: "bottom-right",
                duration: 5000,
              });
              this.$emit("deleteCartHandler", this.index);
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
    async confirmationDeleteCart() {
      this.$bvModal
        .msgBoxConfirm("Konfirmasi untuk membatalkan pembelian produk ini", {
          title: "Konfirmasi Pembatalan",
          size: "sm",
          buttonSize: "sm",
          okVariant: "danger",
          okTitle: "Ya",
          cancelTitle: "Tidak",
          footerClass: "p-2",
          hideHeaderClose: false,
          centered: true,
        })
        .then((value) => {
          this.boxTwo = value;
          if (value) {
            //console.log("Yes Clicked"+value);

            this.deleteCart();
          }
        })
        .catch((err) => {
          // An error occurred
        });
    },
  },

  created() {
    this.sub_total = this.qty * this.product.price;
    this.qty_model = this.qty;
    this.process_model = this.process;
  },
  watch: {
    checkAllProp: function (newVal, oldVal) {
      this.process_model = this.checkAllProp;
      this.updateSubTotal();
    },
  },
};
</script>
