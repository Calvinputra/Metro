<template>
  <section class="col-6 pe-1">
    <section
      @click="redirectTo('/products/' + data.id)"
      style="text-decoration: none !important; color: black"
    >
      <div
        class="card mb-5 bg-white"
        style="
          width: 100%;
          border-radius: 10px;
          box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.25) !important;
        "
      >
        <div
          v-bind:style="{
            backgroundImage:
              'url(' + ASSET_URL + '/' + JSON.parse(data.images)[0] + ')',
          }"
          style="
            background-size: cover;
            background-repeat: no-repeat;
            height: 130px;
            border-radius: 10px 10px 0px 0px;
          "
          class="card-img-top d-flex align-items-end"
          alt="..."
          id="product-image-mobile"
        ></div>
        <div class="card-body">
          <h5 class="card-title" style="font-size: 13px; padding-bottom: 3px">
            {{ data.name }}
          </h5>
          <div class="row">
            <div class="col-9 mt-1 pe-1">
              <p class="card-text font-weight-bold" style="font-size: 11px">
                Rp.{{ Number(data.display_price).toLocaleString("id-ID") }}
              </p>
            </div>
            <div class="col-2">
              <a
                href=""
                onclick="return false;"
                @click.stop="addToWishList(data.id)"
              >
                <i
                  :class="(data.wishlist_exist ? 'fas' : 'far') + ' fa-heart'"
                  style="font-size: 15px !important; color: #c63442 !important"
                ></i>
              </a>
            </div>
          </div>

          <div class="row mt-2">
            <div class="col-7 p-0 m-0">
              <a
                class="btn text-danger btn-sm p-1 fw-bold"
                style="
                  font-size: 10px;
                  background-color: white;
                  width: 100%;
                  box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important;
                "
                onclick="return false;"
                @click="addToCart(data)"
                >+keranjang</a
              >
            </div>
            <div
              class="me-1 ms-1 col-2 ps-0 pe-0 d-flex align-items-center"
              @click.stop
            >
              <a
                class="d-flex justify-content-center"
                target="_blank"
                :href="
                  'https://wa.me/' +
                  settings.company_wa_phone +
                  '?text=Halo Metro Jaya, Saya ingin bertanya tentang product ' +
                  data.code +
                  ' - ' +
                  data.name
                "
                ><img
                  id="logo"
                  class="img-fluid rounded"
                  style="
                    width: 30px;
                    background-color: white;
                    box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important;
                  "
                  src="/img/whatsapp_new.png"
                  alt=""
              /></a>
            </div>
            <div class="col-2 ps-0 pe-0" @click.stop>
              <a target="_blank" :href="data.url_tokopedia"
                ><img
                  id="logo"
                  class="img-fluid rounded"
                  style="
                    width: 30px;
                    background-color: white;
                    box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important;
                  "
                  src="/img/tokopedia.png"
                  alt=""
              /></a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </section>
</template>

<script>
import { mapActions, mapGetters } from "vuex";
export default {
  props: ["data", "url"],
  data() {
    return {
      ASSET_URL: process.env.ASSET_URL,
    };
  },

  methods: {
    redirectTo(url) {
      this.$router.push(url);
    },
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
          this.$toast.success("Berhasil menambah produk ke keranjang", {
            theme: "bubble",
            position: "bottom-right",
            duration: 5000,
          });
          this.$store.dispatch("setCartChange", true);
        } else {
          //this.$router.push("/login");
          this.addProductToCart({ product: product, notification: true });
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
            this.$toast.success("Berhasil menghapus produk dari wishlist", {
              theme: "bubble",
              position: "bottom-right",
              duration: 5000,
            });
          } else {
            this.$toast.success("Berhasil menambah produk ke wishlist", {
              theme: "bubble",
              position: "bottom-right",
              duration: 5000,
            });
          }

          this.$nuxt.refresh();
          if (response.success) {
            await this.$emit("update-wishlist", id);
          }
          console.log(response);
        } else {
          this.$toast.error(
            "Anda perlu login terlebih dahulu untuk menambahkan item ke wishlist",
            {
              theme: "bubble",
              position: "bottom-right",
              duration: 5000,
            }
          );
          this.$router.push("/login");
        }
      } catch (error) {
        console.log(error);
      }
    },
    ...mapActions(["addProductToCart"]),
  },
  computed: {
    ...mapGetters({
      settings: "getSetting",
    }),
  },
};
</script>

<style lang="css" scoped>
@media screen and (max-width: 500px) {
  #card_logo {
    display: none !important;
  }

  #logo {
    width: 40px;
  }
}
h5 {
  overflow: hidden;
  text-overflow: ellipsis;
  display: -webkit-box;
  -webkit-line-clamp: 1;
  -webkit-box-orient: vertical;
}
</style>
