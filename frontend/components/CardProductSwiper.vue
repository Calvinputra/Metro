<template>
  <section>
    <section id="cardswipe-webview">
      <section class=" ps-5 pe-5" id="cardswipe-webview">
        <NuxtLink
          :to="'/products/' + data.id"
          style="text-decoration: none !important; color: black;"
        >
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
                <p class="card-title">{{ data.name }}</p>
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
      <section class=" ps-5 " id="cardswipe-mobileview" style="font-size: 60%">
        <NuxtLink
          :to="'/products/' + data.id"
          style="text-decoration: none !important; color: black;"
        >
          <div
            class="card mb-5 bg-white rounded"
            style="width: 100%; box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.25) !important; border-radius: 10px;"
          >
            <img
              style="width: 100%; height: 100px"
              :src="ASSET_URL + '/' + JSON.parse(data.images)[0]"
              class="card-img-top height:auto"
              alt="..."
            />
            <div class="card-body">
              <div class="row">
                <h5 class="card-title">{{ data.name }}</h5>
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
    </section>
    <section id="cardswipe-mobileview">
      <section class="" id="cardswipe-webview">
        <NuxtLink
          :to="'/products/' + data.id"
          style="text-decoration: none !important; color: black;"
        >
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
              <div class="row d-flex">
                <p class="card-title">{{ data.name }}</p>
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
                <a
                  class="btn text-danger btn-sm rounded col-sm-5 ms-2 pt-2"
                  style="background-color: #f3f3f3; box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important"
                  onclick="return false;"
                  @click="addToCart(data)"
                  >+ Keranjang</a
                >
              </div>
              <p class="card-text mb-4 font-weight-bold">
                Rp.{{ Number(data.display_price).toLocaleString("id-ID") }}
              </p>
              <div class="row">
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
      <section class="" id="cardswipe-mobileview" style="font-size: 60%">
        <NuxtLink
          :to="'/products/' + data.id"
          style="text-decoration: none !important; color: black;"
          class=""
        >
          <div class="me-4 pe-2 ps-2 ms-4 mt-5">
            <div
              class="card bg-white rounded"
              style="width: 100%; box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.25) !important; border-radius: 10px;"
            >
              <img
                style="width: 100%; height: 100px"
                :src="ASSET_URL + '/' + JSON.parse(data.images)[0]"
                class="card-img-top height:auto"
                alt="..."
              />
              <div class="card-body">
                <div class="row" style="font-size: 60%">
                  <h5 class="card-title">{{ data.name }}</h5>
                  <a
                    href=""
                    class="me-5 pe-3"
                    onclick="return false;"
                    @click="addToWishList(data.id)"
                    ><i
                      :class="
                        (data.wishlist_exist ? 'fas' : 'far') + ' fa-heart'
                      "
                      style="font-size: 20px !important; color: #c63442 !important"
                    ></i
                  ></a>
                </div>
                <p class="card-text font-weight-bold">
                  Rp.{{ Number(data.display_price).toLocaleString("id-ID") }}
                </p>
                <div class="d-flex">
                  <a
                    class="btn text-danger btn-sm rounded p-1"
                    style="background-color: #f3f3f3; width: 30%; box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important"
                    onclick="return false;"
                    @click="addToCart(data)"
                    >+</a
                  >
                  <a class="ps-2" href="" onclick="return false;"
                    ><img
                      class="img-fluid height:auto rounded"
                      style="background-color: #f3f3f3;width: 30px; box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important"
                      src="/img/Whatsapp_new.png"
                      alt=""
                  /></a>
                  <a class="ps-2" href="" onclick="return false;"
                    ><img
                      class="img-fluid height:auto rounded"
                      style="background-color: #f3f3f3;width:30px; box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important"
                      src="/img/tokopedia.png"
                      alt=""
                  /></a>
                </div>
              </div>
            </div>
          </div>
        </NuxtLink>
      </section>
    </section>
  </section>
</template>

<script>
import { mapActions } from "vuex";
export default {
  props: ["data", "url"],
  data() {
    return {
      ASSET_URL: process.env.ASSET_URL
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
    ...mapActions(["addProductToCart"])
  }
};
</script>

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
