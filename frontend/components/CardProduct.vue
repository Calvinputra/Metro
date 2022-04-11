<template>
  <section class="col-4 pe-1 ps-3" style="font-size: 14px">
    <section
      @click="redirectTo('/products/' + data.id)"
      style="text-decoration: none !important; color: black font-size:14px;"
    >
      <div
        class="card mb-5 bg-white rounded"
        style="
          width: 280px;
          height: auto;
          box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.25) !important;
          border-radius: 10px;
        "
      >
        <img
          style="width: 100%; height: 180px"
          :src="ASSET_URL + '/' + JSON.parse(data.images)[0]"
          class="card-img-top height:auto"
          alt="..."
        />
        <div class="card-body">
          <div class="row">
            <h6 class="col-sm-8 card-title" style="font-family: 'Nunito Sans'">
              {{ data.name }}
            </h6>
            <div class="col-sm-1 p-0 m-0"></div>
            <div class="col-sm-1 p-0 m-0"></div>
            <a
              class="col-sm-2 p-0 m-0"
              href=""
              onclick="return false;"
              @click.stop="addToWishList(data.id)"
              ><i
                :class="(data.wishlist_exist ? 'fas' : 'far') + ' fa-heart'"
                style="font-size: 30px !important; color: #c63442 !important"
              ></i
            ></a>
          </div>
          <p
            class="card-text mb-4 font-weight-bold"
            style="font-family: 'Nunito Sans'; font-size: 18px"
          >
            Rp.{{ Number(data.display_price).toLocaleString("id-ID") }}
          </p>
          <div class="row" @click.stop>
            <a
              class="btn text-danger fw-bold btn-sm rounded col-sm-7 pt-2"
              style="
                height: 38px;
                margin-left: 10px;
                margin-right: 12px;
                background-color: white;
                box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important;
              "
              onclick="return false;"
              @click="addToCart(data)"
              >+ Keranjang</a
            >
            <a
              @click.stop
              class="col-sm-2 p-0 m-0"
              :href="
                'https://wa.me/' +
                settings.company_wa_phone +
                '?text=Halo Metro Jaya, Saya ingin bertanya tentang product ' +
                data.code +
                ' - ' +
                data.name
              "
              target="_blank"
              ><img
                class="img-fluid"
                style="
                  height: 38px;
                  width: 38px;
                  background-color: white;
                  box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important;
                "
                src="/img/whatsapp_new.png"
                alt=""
            /></a>
            <a
              @click.stop
              class="col-sm-2 p-0 m-0"
              :href="data.url_tokopedia"
              target="_blank"
              ><img
                class="img-fluid"
                style="
                  height: 38px;
                  background-color: white;
                  box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important;
                "
                src="/img/tokopedia.png"
                alt=""
            /></a>
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

<style>
h6 {
  overflow: hidden;
  text-overflow: ellipsis;
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
}

.card {
  cursor: pointer;
}
</style>
