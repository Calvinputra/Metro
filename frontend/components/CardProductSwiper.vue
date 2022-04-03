<template>
  <section style="font-size: 14px">
    <section id="cardswipe-webview">
      <section class="">
        <div class="row">
          <div class="col-sm-1"></div>
          <div
            class="col-sm-6"
            @click="redirectTo('/products/' + data.id)"
            style="
              text-decoration: none !important;
              color: black;
              margin: 0px 10px;
            "
          >
            <div
              class="card mb-5 bg-white rounded"
              style="
              width: 280px
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
                  <h6
                    class="col-sm-9 card-title namabarang"
                    style="font-family: 'Nunito Sans'"
                  >
                    {{ data.name }}
                  </h6>
                  <div class="col-sm-1 p-0 m-0"></div>
                  <a
                    class="col-sm-2 p-0 m-0"
                    href=""
                    onclick="return false;"
                    @click.stop="addToWishList(data.id)"
                    ><i
                      :class="
                        (data.wishlist_exist ? 'fas' : 'far') + ' fa-heart'
                      "
                      style="
                        font-size: 30px !important;
                        color: #c63442 !important;
                      "
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
                      background-color: #f3f3f3;
                      box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important;
                    "
                    onclick="return false;"
                    @click="addToCart(data)"
                    ><p style="font-size: 14px">+ Keranjang</p>
                  </a>
                  <a
                    @click.stop
                    class="col-sm-2 p-0"
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
                      class="img-fluid rounded"
                      style="height: 38px
                    width: 38px;
                      background-color: #f3f3f3;
                      box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important;
                    "
                      src="/img/whatsapp_new.png"
                      alt=""
                  /></a>
                  <a
                    @click.stop
                    class="col-sm-2 p-0"
                    :href="data.url_tokopedia"
                    target="_blank"
                    ><img
                      class="img-fluid"
                      style="height: 38px
                      background-color: #f3f3f3;
                      box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important;
                    "
                      src="/img/tokopedia.png"
                      alt=""
                  /></a>
                </div>
              </div>
            </div>
            <div class="col-sm-3"></div>
          </div>
        </div>
      </section>
    </section>
    <section class="" id="cardswipe-mobileview" style="font-size: 80%">
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
              width: 185px;
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
            <div class="card-body m-0 pb-2">
              <div class="row">
                <div class="col-11">
                  <h6 style="font-size: 12px" class="card-title namabarang">
                    {{ data.name }}
                  </h6>
                </div>
                <div class="row mb-2 p-0 m-0">
                  <div class="col-9">
                    <p
                      class="card-text font-weight-bold"
                      style="font-size: 14px"
                    >
                      Rp.{{
                        Number(data.display_price).toLocaleString("id-ID")
                      }}
                    </p>
                  </div>
                  <div class="col-3">
                    <a
                      href=""
                      class=""
                      onclick="return false;"
                      @click="addToWishList(data.id)"
                      ><i
                        :class="
                          (data.wishlist_exist ? 'fas' : 'far') + ' fa-heart'
                        "
                        style="
                          font-size: 20px !important;
                          color: #c63442 !important;
                        "
                      ></i
                    ></a>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-6 p-0 m-0 pt-1 pb-1" @click.stop>
                  <a
                    class="btn fw-bold text-danger btn-sm"
                    style="
                      background-color: #f3f3f3;
                      width: 100%;
                      box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important;
                    "
                    onclick="return false;"
                    @click="addToCart(data)"
                    ><p style="font-size: 10px">+ Keranjang</p>
                  </a>
                </div>
                <div class="col p-0 m-0"></div>
                <div class="col-2 p-0 m-0" @click.stop>
                  <a
                    class=""
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
                      class="img-fluid rounded"
                      style="
                        background-color: #f3f3f3;
                        width: 30px;
                        box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important;
                      "
                      src="/img/whatsapp_new.png"
                      alt=""
                  /></a>
                </div>
                <div class="col-1 p-0 m-0"></div>
                <div class="col-2 p-0 m-0 me-1" @click.stop>
                  <a :href="data.url_tokopedia"
                    ><img
                      class="img-fluid rounded"
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
      ASSET_URL: process.env.ASSET_URL,
    };
  },
  computed: {
    ...mapGetters({
      settings: "getSetting",
    }),
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
          this.$toast.success("Berhasil menambah produk ke keranjang", {
            theme: "bubble",
            position: "bottom-right",
            duration: 5000,
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
    redirectTo(url) {
      this.$router.push(url);
    },
  },
};
</script>

<style>
.swiper-slide:hover {
  cursor: pointer;
}
.namabarang {
  overflow: hidden;
  text-overflow: ellipsis;
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
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
