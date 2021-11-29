<template>
  <section>
    <Header />
    <div class="container padding-bottom-3x mb-1">
      <!-- Alert-->
      <nav class="container my-4" aria-label="breadcrumb">
        <ol class="py-1 breadcrumb">
          <li class="my-2 ms-3 breadcrumb-item opacity-50">
            <a style="text-decoration: none; color: black" href="/">Beranda</a>
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
          <tbody>
            <Cart
              v-for="cart in tempCart"
              :key="cart.id"
              :product="cart.product"
              :qty="cart.qty"
              :id="cart.id"
              :process="cart.process"
            />
          </tbody>
        </table>
      </div>
      <div class="text-right text-right col-sm-11">
        <span class="text-center mr-5 pl-5">Total Harga</span>
        <span class="pl-5">Rp 50.000</span>
      </div>
      <br />
      <br />
      <div class="shopping-cart-footer">
        <div class="column"></div>
      </div>
      <div class="shopping-cart-footer">
        <div class="column text-center">
          <a
            style="color: red"
            class="btn btn-light"
            href="#"
            data-toast=""
            data-toast-type="success"
            data-toast-position="topRight"
            data-toast-icon="icon-circle-check"
            data-toast-title="Your cart"
            data-toast-message="is updated successfully!"
            >Lanjut Belanja</a
          ><a class="btn btn-danger" href="/checkout">Periksa</a>
        </div>
      </div>
    </div>
    <Footer />
  </section>
</template>

<script>
import { mapGetters } from "vuex";
export default {
  data() {
    return {
      carts: {},
    };
  },

  async mounted() {
    if (this.$auth.loggedIn) {
      try {
        let carts = await this.$axios.$get(process.env.API_URL + "/api/carts");
        console.log(carts);
        this.carts = carts.data;
      } catch (error) {
        console.log(error);
      }
    } 
  },
  computed: {
    ...mapGetters({
      tempCart: "getCart",
    }),
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
