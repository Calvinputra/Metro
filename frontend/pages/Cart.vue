<template>
  <section style="font-family: 'Nunito Sans'">
    <LoadingSpinner v-if="!isLoaded" />

    <div id="cart-webview" v-if="isLoaded">
      <div class="container padding-bottom-3x mb-1">
        <!-- Alert-->
        <nav class="container my-4" aria-label="breadcrumb ">
          <ol class="py-1 breadcrumb">
            <li class="my-2 ms-3 breadcrumb-item opacity-50">
              <nuxt-link style="text-decoration: none; color: red" to="/"
                >Beranda</nuxt-link
              >
            </li>
            <li
              class="my-2 breadcrumb-item active opacity-50"
              style="color: red"
              aria-current="page"
            >
              Keranjang Saya
            </li>
          </ol>
        </nav>
        <h2 class="ml-2">Keranjang Belanja</h2>
        <!-- Shopping Cart-->
        <div class="table-responsive shopping-cart">
          <table class="table">
            <thead>
              <tr>
                <th class="py-2 align-middle">
                  <div class="form-check mt-auto mb-auto">
                    <input
                      class="form-check-input p-2 me-3"
                      type="checkbox"
                      id="flexCheckChecked"
                      v-model="checkAll"
                    />
                    Produk
                  </div>
                </th>
                <th class="text-center py-2 align-middle">Jumlah</th>
                <th class="text-center py-2 align-middle">Harga</th>
                <th class="text-center py-2 align-middle">Sub total</th>
                <th class="text-center py-2 align-middle">
                  <a
                    @click="confirmationDestroyAll"
                    class="btn btn-danger"
                    to="#"
                    >Hapus Keranjang
                  </a>
                </th>
              </tr>
            </thead>
            <tbody></tbody>
            <template v-if="!this.$auth.loggedIn">
              <Cart
                v-for="cart in tempCart"
                :key="cart.id"
                :product="cart.product"
                :qty="cart.qty"
                :id="cart.id"
                :process="cart.process"
                :checkAllProp="checkAll"
              />
            </template>

            <template v-if="this.$auth.loggedIn">
              <Cart
                v-for="(cart, index) in carts"
                @updateCart="updateCart"
                @deleteCartHandler="deleteCart"
                :index="index"
                :key="cart.id"
                :product="cart.product"
                :qty="cart.qty"
                :id="cart.id"
                :process="cart.process"
                :checkAllProp="checkAll"
              />
            </template>
          </table>

          <!-- Jika data kosong -->
          <!-- <div class="text-center mt-5">
            <i class="fas fa-exclamation-triangle"></i>
            Tidak ada produk yang anda tambah, Silahkan tambah ke eranjang
            terlebih dahulu.
          </div> -->
        </div>
        <div class="text-right text-right col-11">
          <span class="text-center mr-5 pl-5">Total Harga</span>
          <span class="pl-5"
            >Rp. {{ Number(grandTotal).toLocaleString("id-ID") }}</span
          >
        </div>
        <br />
        <br />
        <div class="shopping-cart-footer">
          <div class="column"></div>
        </div>
        <div class="shopping-cart-footer">
          <div class="column text-center">
            <nuxt-link
              class="btn btn-light mx-2 btn-shadow"
              style="color: red"
              to="/"
              data-toast=""
              data-toast-type="success"
              data-toast-position="topRight"
              data-toast-icon="icon-circle-check"
              data-toast-title="Your cart"
              data-toast-message="is updated successfully!"
              >Lanjut Belanja</nuxt-link
            >
            <button
              @click="doCheckout"
              class="btn btn-danger btn-shadow"
              to="/checkout"
            >
              Periksa
            </button>
          </div>
        </div>
      </div>
    </div>

    <div id="cart-mobileview" v-if="isLoaded">
      <div class="container mb-5 mt-4">
        <!-- Alert-->

        <h2>Keranjang Belanja</h2>
        <pre></pre>
        <!-- Shopping Cart-->
        <div class="table-responsive shopping-cart">
          <table class="table">
            <tbody></tbody>
            <template v-if="!this.$auth.loggedIn">
              <CartMobile
                v-for="cart in tempCart"
                :key="cart.id"
                :product="cart.product"
                :qty="cart.qty"
                :id="cart.id"
                :process="cart.process"
                :checkAllProp="checkAll"
              />
            </template>

            <template v-if="this.$auth.loggedIn">
              <CartMobile
                v-for="(cart, index) in carts"
                @updateCart="updateCart"
                @deleteCartHandler="deleteCart"
                :index="index"
                :key="cart.id"
                :product="cart.product"
                :qty="cart.qty"
                :id="cart.id"
                :process="cart.process"
                :checkAllProp="checkAll"
              />
            </template>
          </table>
        </div>
        <div class="text-right text-right col-sm-11 mb-5">
          <span class="text-center" style="font-size: 12px">Total Harga</span>
          <span class="pl-5" style="font-size: 12px"
            ><b>Rp. {{ Number(grandTotal).toLocaleString("id-ID") }}</b></span
          >
        </div>
        <div class="shopping-cart-footer mb-5">
          <div class="column text-center">
            <nuxt-link
              style="color: red"
              class="btn btn-light mx-2 py-1 px-3 btn-shadow"
              to="#"
              data-toast=""
              data-toast-type="success"
              data-toast-position="topRight"
              data-toast-icon="icon-circle-check"
              data-toast-title="Your cart"
              data-toast-message="is updated successfully!"
              >Lanjut Belanja</nuxt-link
            >
            <button
              class="btn btn-danger py-1 px-3 btn-shadow"
              @click="doCheckout"
            >
              Periksa
            </button>
          </div>
        </div>
      </div>
      <Footer2mobile />
    </div>

    <div id="cart-tabview" v-if="isLoaded">
      <div class="container padding-bottom-3x mb-1">
        <!-- Alert-->
        <nav class="container my-4" aria-label="breadcrumb">
          <ol class="py-1 breadcrumb">
            <li class="my-2 ms-3 breadcrumb-item opacity-50">
              <nuxt-link style="text-decoration: none; color: black" to="/"
                >Beranda</nuxt-link
              >
            </li>
            <li
              class="my-2 breadcrumb-item active opacity-50"
              style="color: black"
              aria-current="page"
            >
              Keranjang Saya
            </li>
          </ol>
        </nav>
        <h2 class="ml-2">Keranjang Belanja</h2>
        <!-- Shopping Cart-->
        <div class="table-responsive shopping-cart">
          <table class="table">
            <thead>
              <tr>
                <th class="py-2 align-middle">Produk</th>
                <th class="text-center py-2 align-middle">Jumlah</th>
                <th class="text-center py-2 align-middle">Harga</th>
                <th class="text-center py-2 align-middle">Sub total</th>
                <th class="text-center py-2 align-middle">
                  <a
                    @click="confirmationDestroyAll"
                    class="btn btn-danger"
                    to="#"
                    >Hapus Keranjang
                  </a>
                </th>
              </tr>
            </thead>
            <tbody></tbody>
            <template v-if="!this.$auth.loggedIn">
              <Carttab
                v-for="cart in tempCart"
                :key="cart.id"
                :product="cart.product"
                :qty="cart.qty"
                :id="cart.id"
                :process="cart.process"
                :checkAllProp="checkAll"
              />
            </template>

            <template v-if="this.$auth.loggedIn">
              <Carttab
                v-for="(cart, index) in carts"
                @updateCart="updateCart"
                @deleteCartHandler="deleteCart"
                :index="index"
                :key="cart.id"
                :product="cart.product"
                :qty="cart.qty"
                :id="cart.id"
                :process="cart.process"
                :checkAllProp="checkAll"
              />
            </template>
          </table>

          <!-- Jika data kosong -->
          <!-- <div class="text-center mt-5">
            <i class="fas fa-exclamation-triangle"></i>
            Tidak ada produk yang anda tambah, Silahkan tambah ke eranjang
            terlebih dahulu.
          </div> -->
        </div>
        <div class="text-right text-right col-11">
          <span class="text-center mr-5 pl-5">Total Harga</span>
          <span class="pl-5"
            >Rp. {{ Number(grandTotal).toLocaleString("id-ID") }}</span
          >
        </div>
        <br />
        <br />
        <div class="shopping-cart-footer">
          <div class="column"></div>
        </div>
        <div class="shopping-cart-footer">
          <div class="column text-center">
            <nuxt-link
              class="btn btn-light mx-2 btn-shadow p-2"
              style="color: red"
              to="#"
              data-toast=""
              data-toast-type="success"
              data-toast-position="topRight"
              data-toast-icon="icon-circle-check"
              data-toast-title="Your cart"
              data-toast-message="is updated successfully!"
              >Lanjut Belanja</nuxt-link
            >
            <button
              @click="doCheckout"
              class="btn btn-danger btn-shadow p-2"
              to="/checkout"
            >
              Periksa
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import { mapGetters } from "vuex";
export default {
  data() {
    return {
      carts: {},
      grandTotal: 0,
      boxTwo: "",
      isLoaded: false,
      checkAll: false,
      breadcrumb: [
        {
          url: "/",
          name: "Beranda",
          class: "my-2 ms-3 breadcrumb-item opacity-50",
        },

        {
          url: "/cart",
          name: "Keranjang Saya",
          class: "my-2 breadcrumb-item active opacity-50",
        },
      ],
    };
  },
  async mounted() {
    if (this.$auth.loggedIn) {
      this.$store.dispatch("setCartChange", true);
      try {
        let carts = await this.$axios.$get(process.env.API_URL + "/api/carts");
        this.carts = carts.data;
        this.$store.dispatch("setCartChange", false);
        this.isLoaded = true;
      } catch (error) {
        console.log(error);
      }
    } else {
      this.isLoaded = true;
    }
  },
  computed: {
    ...mapGetters({
      tempCart: "getCart",
      cartChanged: "getCartChanged",
    }),
  },
  watch: {
    carts: {
      handler: async function (changed) {
        if (this.$auth.loggedIn && changed) {
          this.grandTotal = 0;
          // let carts = await this.$axios.$get(
          //   process.env.API_URL + "/api/carts"
          // );
          // let data = carts.data;
          if (this.carts.length > 0) {
            this.carts.forEach((cart) => {
              if (cart.process == 1) {
                this.grandTotal += cart.qty * cart.product.price;
              }
            });
          }
          //console.log(carts);

          // this.$store.dispatch("setCartChange", false);
        }
      },
      deep: true,
      immediate: true,
    },
    tempCart: {
      handler: function (carts) {
        if (!this.$auth.loggedIn && this.tempCart) {
          this.grandTotal = 0;

          this.tempCart.forEach((cart) => {
            if (cart.product.process == 1) {
              this.grandTotal += cart.product.qty * cart.product.price;
            }
          });
        }
      },
      deep: true,
      immediate: true,
    },
  },
  methods: {
    checkAllHandler() {},
    updateCart({ qty, index, process }) {
      const cart = this.carts[index];
      cart.qty = qty;
      cart.process = process;
      this.carts.splice(index, 1, cart);
    },
    deleteCart(index) {
      this.carts.splice(index, 1);
    },
    confirmationDestroyAll() {
      this.boxTwo = "";
      this.$bvModal
        .msgBoxConfirm(
          "Konfirmasi untuk membatalkan semua pembelian produk ini ",
          {
            title: "Konfirmasi Pembatalan",
            size: "sm",
            buttonSize: "sm",
            okVariant: "danger",
            okTitle: "Ya",
            cancelTitle: "Tidak",
            footerClass: "p-2",
            hideHeaderClose: false,
            centered: true,
          }
        )
        .then((value) => {
          this.boxTwo = value;
          if (value) {
            //console.log("Yes Clicked"+value);

            this.destroyAll();
            this.$toast.success("Berhasil membatalkan semua pembelian produk", {
              theme: "bubble",
              position: "bottom-right",
              duration: 5000,
            });
          }
        })
        .catch((err) => {
          // An error occurred
        });
    },
    destroyAll() {
      if (this.$auth.loggedIn) {
        this.carts.forEach(async (cart, index) => {
          let response = await this.$axios
            .$delete(process.env.API_URL + "/api/carts/" + cart.id)
            .then(() => {
              this.$nuxt.refresh();
            });
          this.carts = [];
        });
      } else {
        this.$store.dispatch("deleteAllCart");
      }
    },
    setIsLoaded(value) {
      this.isLoaded = value;
    },
    doCheckout() {
      if (this.grandTotal > 0) {
        this.$router.push("/checkout");
      } else {
        this.$toast.error("Silahkan memilih product untuk checkout", {
          theme: "bubble",
          position: "bottom-right",
          duration: 5000,
        });
      }
    },
  },
};
function increment() {
  document.getElementById("demoInput").stepUp();
}
function decrement() {
  document.getElementById("demoInput").stepDown();
}
</script>

<style lang="css" scoped>
.btn-shadow {
  box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important;
}
#cart-mobileview {
  display: none;
}
#cart-tabview {
  display: none;
}
/* 0 - 991 px */
@media screen and (max-width: 499px) {
  #cart_logo {
    display: none !important;
  }

  #cart-webview {
    display: none;
  }
  #cart-mobileview {
    display: grid;
  }
  #cart-tabview {
    display: none;
  }
}

@media screen and (min-width: 500px) and (max-width: 1024px) {
  #cart_logo {
    display: none !important;
  }

  #cart-webview {
    display: none;
  }
  #cart-mobileview {
    display: none;
  }
  #cart-tabview {
    display: grid;
  }
}
</style>
