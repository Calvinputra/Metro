<template>
  <section class="col-12 pe-1 ps-3">
      <NuxtLink :to="'/products/' + data.id" style="text-decoration: none !important; color: black;">
        <div
          class="card mb-5 bg-white rounded"
          style="width: 100%; box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.25) !important; border-radius: 10px;"
        >
          <img
            style="width: 100%; height: 183px"
            :src="ASSET_URL + '/' + JSON.parse(data.images)[0]"
            class="card-img-top height:auto"
            alt="..."
          />
          <div class="card-body">
            <div class="row">
              <h5 class="col-sm-9 card-title">{{ data.name }}</h5>
              <a
                class="col-sm-3"
                href=""
                onclick="return false;"
                @click="addToWishList(data.id)"
                ><i
                  :class="(data.wishlist_exist ? 'fas' : 'far') + ' fa-heart'"
                  style="font-size: 30px !important; color: #c63442 !important"
                ></i
              ></a>
            </div>
            <p class="card-text mb-4 font-weight-bold">
              Rp.{{ Number(data.display_price).toLocaleString("id-ID") }}
            </p>
            <div class="row">
              <a
                class="btn text-danger btn-sm rounded col-sm-5 ms-2 pt-2"
                style="background-color: #f3f3f3; box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important"
                onclick="return false;"
                @click="addToCart(data)"
                >+ Keranjang</a
              >
              <a class="col-sm-3" href="" onclick="return false;"
                ><img
                  class="img-fluid max-width:100% height:auto rounded"
                  style="background-color: #f3f3f3; box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important"
                  src="/img/Whatsapp_new.png"
                  alt=""
              /></a>
              <a class="col-sm-3" href="" onclick="return false;"
                ><img
                  class="img-fluid max-width:100% height:auto rounded"
                  style="background-color: #f3f3f3; box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important"
                  src="/img/tokopedia.png"
                  alt=""
              /></a>
            </div>
          </div>
        </div>
      </NuxtLink>
  </section>
</template>

<script>
import { mapActions } from "vuex";
export default {
  props: ["data", "url"],
  data() {
    return {
      ASSET_URL: process.env.ASSET_URL,
    };
  },
  created() {
    console.log(this.data);
  },
  methods: {
    async addToCart(product) {
      try {
        if (this.$auth.loggedIn) {
          let data = {
            product_id: product.id,
          };
          let response = await this.$axios.$post(
            process.env.API_URL + "/api/carts",
            data
          );
          this.$toast.success("Successfully add a product to cart", {
            theme: "bubble",
            position: "bottom-right",
            duration: 5000,
          });
          console.log(response);
        } else {
          //this.$router.push("/login");
          this.addProductToCart(product);
        }
      } catch (error) {
        console.log(error);
      }
    },
    async addToWishList(id) {
      try {
        if (this.$auth.loggedIn) {
          let data = {
            product_id: id,
          };
          let response = await this.$axios.$post(
            process.env.API_URL + "/api/wishlists",
            data
          );
          if (this.data.wishlist_exist) {
            this.$toast.success("Successfully delete a product from wishlist", {
              theme: "bubble",
              position: "bottom-right",
              duration: 5000,
            });
          } else {
            this.$toast.success("Successfully add a product to wishlist", {
              theme: "bubble",
              position: "bottom-right",
              duration: 5000,
            });
          }

          this.$nuxt.refresh();
          console.log(response);
        } else {
          this.$router.push("/login");
        }
      } catch (error) {
        console.log(error);
      }
    },
    ...mapActions(["addProductToCart"]),
  },
};
</script>