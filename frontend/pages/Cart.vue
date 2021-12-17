<template>
  <section>
    <div id="cart-webview">
      <Header />
      <div class="container padding-bottom-3x mb-1">
        <!-- Alert-->
        <nav class="container my-4" aria-label="breadcrumb">
          <ol class="py-1 breadcrumb">
            <li class="my-2 ms-3 breadcrumb-item opacity-50">
              <a style="text-decoration: none; color: black" href="/"
                >Beranda</a
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
        <h2>Keranjang Belanja</h2>
        <!-- Shopping Cart-->
        <div class="table-responsive shopping-cart">
          <table class="table">
            <thead>
              <tr>
                <th>Produk</th>
                <th class="text-center">Jumlah</th>
                <th class="text-center">Harga</th>
                <th class="text-center">Sub total</th>
                <th class="text-center">
                  <a
                    @click="destroyAll"
                    class="btn btn-sm btn-outline-danger"
                    href="#"
                    >Clear Cart</a
                  >
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
              />
            </template>

            <template v-if="this.$auth.loggedIn">
              <Cart
                v-for="cart in carts"
                :key="cart.id"
                :product="cart.product"
                :qty="cart.qty"
                :id="cart.id"
                :process="cart.process"
              />
            </template>
          </table>
        </div>
        <div class="text-right text-right col-sm-11">
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
            <a
              style="
                color: red;
                box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important;
              "
              class="btn btn-light mx-2"
              href="#"
              data-toast=""
              data-toast-type="success"
              data-toast-position="topRight"
              data-toast-icon="icon-circle-check"
              data-toast-title="Your cart"
              data-toast-message="is updated successfully!"
              >Lanjut Belanja</a
            >
            <nuxt-link
              class="btn btn-danger"
              to="/checkout"
              style="box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important"
            >
              Periksa
            </nuxt-link>
          </div>
        </div>
      </div>
      <Footer />
    </div>

    <div id="cart-mobileview">
      <Header />
      <div class="container padding-bottom-3x mb-1">
        <!-- Alert-->
        <nav class="container my-4" aria-label="breadcrumb">
          <ol class="py-1 breadcrumb">
            <li class="my-2 ms-3 breadcrumb-item opacity-50">
              <a style="text-decoration: none; color: black" href="/"
                >Beranda</a
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
              />
            </template>

            <template v-if="this.$auth.loggedIn">
              <CartMobile
                v-for="cart in carts"
                :key="cart.id"
                :product="cart.product"
                :qty="cart.qty"
                :id="cart.id"
                :process="cart.process"
              />
            </template>
          </table>
        </div>
        <div class="text-right text-right col-sm-11">
          <span class="text-center">Total Harga</span>
          <span class="pl-5"
            ><b>Rp. {{ Number(grandTotal).toLocaleString("id-ID") }}</b></span
          >
        </div>
        <br />
        <br />
        <div class="shopping-cart-footer">
          <div class="column"></div>
        </div>
        <div class="shopping-cart-footer">
          <div class="column text-center">
            <a
              style="
                color: red;
                box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important;
              "
              class="btn btn-light mx-2 py-1 px-2"
              href="#"
              data-toast=""
              data-toast-type="success"
              data-toast-position="topRight"
              data-toast-icon="icon-circle-check"
              data-toast-title="Your cart"
              data-toast-message="is updated successfully!"
              >Lanjut Belanja</a
            >
            <nuxt-link
              class="btn btn-danger py-1 px-2"
              to="/checkout"
              style="box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important"
            >
              Periksa
            </nuxt-link>
          </div>
        </div>
      </div>
      <Footer />
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
    };
  },

  async mounted() {
    if (this.$auth.loggedIn) {
      this.$store.dispatch("setCartChange", true);
      try {
        let carts = await this.$axios.$get(process.env.API_URL + "/api/carts");
        console.log(carts);
        this.carts = carts.data;
        this.$store.dispatch("setCartChange", false);
      } catch (error) {
        console.log(error);
      }
    } else {
    }
  },
  computed: {
    ...mapGetters({
      tempCart: "getCart",
      cartChanged: "getCartChanged",
    }),
  },
  watch: {
    cartChanged: {
      handler: async function (changed) {
        if (this.$auth.loggedIn && changed) {
          this.grandTotal = 0;
          try {
            let carts = await this.$axios.$get(
              process.env.API_URL + "/api/carts"
            );
            let data = carts.data;
            data.forEach((cart) => {
              if (cart.process == 1) {
                this.grandTotal += cart.qty * cart.product.price;
              }
            });
            console.log(carts);
            this.carts = carts.data;
          } catch (error) {
            console.log(error);
          }

          this.$store.dispatch("setCartChange", false);
        }
      },
      deep: true,
    },
    tempCart: {
      handler: function (carts) {
        if (!this.$auth.loggedIn && carts) {
          this.grandTotal = 0;

          carts.forEach((cart) => {
            if (cart.product.process == 1) {
              this.grandTotal += cart.product.qty * cart.product.price;
            }
          });
        }
      },
      deep: true,
    },
  },
  methods: {
    destroyAll() {
      if (this.$auth.loggedIn) {
        this.carts.forEach(async (cart, index) => {
          let response = await this.$axios
            .$delete(process.env.API_URL + "/api/carts/" + cart.id)
            .then(() => {
              this.$toast.success("Successfully clear all cart", {
                theme: "bubble",
                position: "bottom-right",
                duration: 5000,
              });
              this.$nuxt.refresh();
            });
          console.log(response);
        });
      } else {
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
#cart-mobileview {
  display: none;
}
/* 0 - 991 px */
@media screen and (max-width: 500px) {
  #cart_logo {
    display: none !important;
  }

  #cart-webview {
    display: none;
  }
  #cart-mobileview {
    display: grid;
  }
}
</style>
