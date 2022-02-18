<template>
  <section>
    <section id="cardswipe-webview">
      <section class="ps-5 pe-5" id="cardswipe-webview">
        <section
          @click="redirectTo('/products/' + data.id)"
          style="text-decoration: none !important; color: black"
        >
          <div
            class="card bg-white rounded"
            style="
              width: 250px;
              height: auto;
              box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.25) !important;
              border-radius: 10px;
            "
          >
            <img
              style="width: 100%; height: 183px"
              :src="ASSET_URL + '/' + JSON.parse(data.images)[0]"
              class="card-img-top height:auto"
              alt="..."
            />
            <div class="card-body">
              <div class="row">
                <div class="col-sm-9">
                  <p class="card-title" style="font-family: 'Nunito Sans';">
                    {{ data.name }}
                  </p>
                  <p
                    class="card-text mb-4 font-weight-bold"
                    style="font-family: 'Nunito Sans'"
                  >
                    Rp.{{ Number(data.display_price).toLocaleString("id-ID") }}
                  </p>
                </div>
                <a
                  class="col-sm-3  text-left"
                  href=""
                  onclick="return false;"
                  @click="addToWishList(data.id)"
                  ><i
                    :class="(data.wishlist_exist ? 'fas' : 'far') + ' fa-heart'"
                    style="
                      font-size: 30px !important;
                      color: #c63442 !important;
                    "
                  ></i>
                </a>
              </div>
              <div class="row" @click.stop>
                <button
                  class="btn text-danger btn-sm rounded col-sm-5 ms-2 pt-2 "
                  style="
                    background-color: #f3f3f3;
                    box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important;
                   
                  "
                  onclick="return false;"
                  @click="addToCart(data)"
                >
                  <p style="font-family: 'Nunito Sans'">
                    + Keranjang
                  </p>
                </button>
                <a
                  class="col-sm-3"
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
                    class="img-fluid max-width:100% height:auto rounded"
                    style="
                      background-color: #f3f3f3;
                      box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important;
                    "
                    src="/img/Whatsapp_new.png"
                    alt=""
                /></a>
                <a class="col-sm-3" :href="data.url_tokopedia" target="_blank"
                  ><img
                    class="img-fluid max-width:100% height:auto rounded"
                    style="
                      background-color: #f3f3f3;
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
    </section>
    <section class="" id="cardswipe-mobileview" style="font-size: 60%">
      <!-- TODO harus pake div / section karena nested a href -->
      <!-- NOTE : Kalo a dibawah ini di ganti icon toped di mobilenya berantakan -->
      <section
        @click="redirectTo('/products/' + data.id)"
        style="text-decoration: none !important; color: black"
        class=""
      >
        <div class="mt-5">
          <div
            class="card bg-white rounded"
            style="
              width: 100%;
              box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.25) !important;
              border-radius: 10px;
            "
          >
            <img
              style="width: 100%; height: 100px"
              :src="ASSET_URL + '/' + JSON.parse(data.images)[0]"
              class="card-img-top height:auto"
              alt="..."
            />
            <div class="card-body">
              <div class="row" style="font-size: 60%">
                <h5 style="font-size: 200%" class="card-title">
                  {{ data.name }}
                </h5>
                <a
                  href=""
                  class="me-5 pe-3"
                  onclick="return false;"
                  @click="addToWishList(data.id)"
                  ><i
                    :class="(data.wishlist_exist ? 'fas' : 'far') + ' fa-heart'"
                    style="
                      font-size: 20px !important;
                      color: #c63442 !important;
                    "
                  ></i
                ></a>
              </div>
              <p class="card-text font-weight-bold">
                Rp.{{ Number(data.display_price).toLocaleString("id-ID") }}
              </p>
              <div class="d-flex" @click.stop>
                <a
                  class="btn text-danger btn-sm rounded p-1"
                  style="
                    background-color: #f3f3f3;
                    width: 30%;
                    box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important;
                  "
                  onclick="return false;"
                  @click="addToCart(data)"
                  >+</a
                >
                <a
                  class="ps-2"
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
                    class="img-fluid height:auto rounded"
                    style="
                      background-color: #f3f3f3;
                      width: 30px;
                      box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important;
                    "
                    src="/img/Whatsapp_new.png"
                    alt=""
                /></a>
                <a class="ps-2" :href="data.url_tokopedia"
                  ><img
                    class="img-fluid height:auto rounded"
                    style="
                      background-color: #f3f3f3;
                      width: 30px;
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
  </section>
</template>

<script>
import { mapActions, mapGetters } from "vuex";
export default {
  props: ["data", "url"],
  data() {
    return {
      ASSET_URL: process.env.ASSET_URL
    };
  },
  computed: {
    ...mapGetters({
      settings: "getSetting"
    })
  },

  methods: {
    async addToCart(product) {
      try {
        if (this.$auth.loggedIn) {
          let data = {
            product_id: product.id
          };
          let response = await this.$axios.$post(
            process.env.API_URL + "/api/carts",
            data
          );
          this.$toast.success("Successfully add a product to cart", {
            theme: "bubble",
            position: "bottom-right",
            duration: 5000
          });
          console.log(response);
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
            product_id: id
          };
          let response = await this.$axios.$post(
            process.env.API_URL + "/api/wishlists",
            data
          );
          if (this.data.wishlist_exist) {
            this.$toast.success("Successfully delete a product from wishlist", {
              theme: "bubble",
              position: "bottom-right",
              duration: 5000
            });
          } else {
            this.$toast.success("Successfully add a product to wishlist", {
              theme: "bubble",
              position: "bottom-right",
              duration: 5000
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
    redirectTo(url) {
      this.$router.push(url);
    }
  }
};
</script>

<style>
.swiper-slide:hover {
  cursor: pointer;
}
</style>
<style lang="css" scoped>
#cardswipe-mobile {
  display: none;
}
#cardswipe-mobileview {
  display: none;
}

/* 0 - 991 px */
@media screen and (max-width: 500px) {
  #cardswipe_logo {
    display: none !important;
  }

  #cardswipe-webview {
    display: none;
  }

  #cardswipe-mobile {
    display: contents;
  }

  #cardswipe-mobileview {
    display: grid;
  }
}
</style>
