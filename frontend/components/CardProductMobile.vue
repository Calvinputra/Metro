<template>
  <section class="col-6 pe-1 ps-3">
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
            height: 150px;
            border-radius: 10px 10px 0px 0px;
          "
          class="card-img-top d-flex align-items-end"
          alt="..."
          id="product-image-mobile"
        ></div>
        <div class="card-body">
          <div class="row justify-content-between">
            <div class="col">
              <h5 class="card-title mb-0" style="font-size: 100%">
                {{ data.name }}
              </h5>
            </div>
            <div class="col-4 justify-content-end d-flex pe-2">
              <a
                href=""
                onclick="return false;"
                @click.stop="addToWishList(data.id)"
              >
                <i
                  :class="(data.wishlist_exist ? 'fas' : 'far') + ' fa-heart'"
                  style="font-size: 25px !important; color: #c63442 !important"
                ></i>
              </a>
            </div>

            <p class="card-text mb-2 font-weight-bold">
              Rp.{{ Number(data.display_price).toLocaleString("id-ID") }}
            </p>
          </div>

          <div class="d-flex mt-3">
            <div class="col ps-0 pe-0" @click.stop>
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
                    background-color: #f3f3f3;
                    box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important;
                  "
                  src="/img/Whatsapp_new.png"
                  alt=""
              /></a>
            </div>
            <div class="col ps-0 pe-0" @click.stop>
              <a
                class="d-flex justify-content-center"
                target="_blank"
                :href="data.url_tokopedia"
                ><img
                  id="logo"
                  class="img-fluid rounded"
                  style="
                    background-color: #f3f3f3;
                    box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important;
                  "
                  src="/img/tokopedia.png"
                  alt=""
              /></a>
            </div>
          </div>

          <div class="d-flex mt-3">
            <a
              class="btn text-danger btn-sm py-1"
              style="
                background-color: #f3f3f3;
                width: 100%;
                box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important;
              "
              onclick="return false;"
              @click="addToCart(data)"
              >+ Keranjang</a
            >
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
          console.log(response);
        } else {
          //this.$router.push("/login");
          this.addProductToCart({product:product,notification:true});
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
</style>
