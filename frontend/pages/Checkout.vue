<template>
  <section>
    <Header />
    <Breadcrumb :links="breadcrumb" />
    <section class="container-md" style="min-width: 95%">
      <div class="ml-5 pr-5 mb-0">
        <h1>Periksa</h1>
        <div>
          <hr
            style="height: 3px; border-width: 10; color: red"
            class="col-sm-12"
          />
        </div>
        <div class="bg-light text-black col-sm-11" v-if="!$auth.loggedIn">
          <label for="step1">
            <h5>Step 1: Periksa Akun</h5>
          </label>
        </div>
      </div>
      <div
        class="d-flex"
        style="justify-content: space-evenly"
        v-if="!$auth.loggedIn"
      >
        <div style="col-sm">
          <img src="/img/metro.png" alt="" />
        </div>
        <div class="mr-5 col-sm-5 mb-0">
          <form class="mr-5">
            <div class="col-sm-12">
              <label class="mb-0 mt-5"
                ><h2 class="font-weight-bold">
                  Masuk ke Akun
                  <hr
                    style="
                      height: 10%;
                      width: 100%;
                      border-width: 0;
                      color: red;
                    "
                    class="col-sm-12 mb-0 mt-0"
                  /></h2
              ></label>
            </div>

            <div class="form-group">
              <label for="email">Email<span style="color: red">*</span>:</label>
              <input
                v-model="email"
                type="email"
                class="form-control col-sm-12"
                id="email"
                name="email"
                placeholder="Email"
              />
            </div>
            <div class="form-group">
              <label for="password"
                >Kata Sandi<span style="color: red">*</span>:</label
              >
              <input
                v-model="password"
                type="password"
                class="form-control"
                id="password"
                name="password"
                placeholder="Password"
              />
            </div>
          </form>
          <p style="color: red"><span style="color: red">*</span>Wajib diisi</p>
          <br />
          <P
            >Lupa kata sandi?
            <nuxt-link :to="{ path: '/forgot_password' }" class="text-danger">
              klik disini.</nuxt-link
            ></P
          >
          <div class="text-center">
            <button
              @click="doLogin"
              type="submit"
              class="
                btn
                text-danger
                btn-light btn-sm
                shadow
                rounded
                col-sm-3
                ms-5
              "
            >
              Masuk Akun
            </button>
          </div>
          <p class="mt-5">
            Belum mempunyai akun?<nuxt-link
              :to="{ path: '/register' }"
              class="text-danger"
              >Buat Akun.</nuxt-link
            >
          </p>
        </div>
      </div>
      <div class="ml-5" v-if="$auth.loggedIn">
        <div class="bg-light text-black col-sm-11">
          <label for="step1">
            <h5>Step 1: Periksa Akun</h5>
          </label>
        </div>
      </div>
      <div
        class="d-flex justify-content-around mt-3"
        style=""
        v-if="$auth.loggedIn"
      >
        <div>
          <p>Nama : {{ $auth.user.first_name + " " + $auth.user.last_name }}</p>
          <p>Nomor Telepon : {{ $auth.user.phone }}</p>
          <p>Email : {{ $auth.user.email }}</p>
        </div>
        <div class="d-flex justify-content-around">
          <div>
            <p>Alamat:</p>
          </div>
          <div>
            <p class="ml-5" style="max-width: 30%">
              {{ $auth.user.addresses[0].address }}
              {{ $auth.user.addresses[0].city.name }}
              {{ $auth.user.addresses[0].country.name }}
            </p>
          </div>
        </div>
      </div>
      <div class="ml-5 mt-5" v-if="$auth.loggedIn">
        <div class="bg-light text-black col-sm-11 mb-5">
          <label for="step1">
            <h5>Step 2: Pilih Metode Pengiriman</h5>
          </label>
        </div>
        <div>
          <p class="fw-bold mt-4">Pilih Metode Lain:</p>
        </div>
        <div class="d-flex">
          <div class="form-check">
            <input
              class="form-check-input"
              type="radio"
              name="exampleRadios"
              id="exampleRadios1"
              value="dakota"
              @change="setCost($event)"
              v-model="shippingRadio"
            />
            <label class="form-check-label" for="exampleRadios1">
              <p>
                Dakota - Rp.
                {{ Number(dakotaShippingCost).toLocaleString("id-ID") }}
              </p>
            </label>
          </div>
          <div>
            <div class="d-flex ml-5">
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="exampleRadios"
                  id="exampleRadios2"
                  value="jne"
                  @change="setCost($event)"
                  v-model="shippingRadio"
                />
                <label class="form-check-label" for="exampleRadios2">
                  <p>
                    JNE - Rp.
                    {{ Number(jneShippngCost).toLocaleString("id-ID") }}
                  </p>
                </label>
              </div>
              <div></div>
            </div>
          </div>
        </div>
      </div>
      <div class="bg-light text-black col-sm-11 ml-5 mt-5">
        <label for="step1">
          <h5>Step 4: Konfirmasi Pembelian</h5>
        </label>
        <div class="table-responsive shopping-cart">
          <table class="table">
            <thead>
              <tr>
                <th>Produk</th>
                <th class="text-center">Jumlah</th>
                <th class="text-center">Harga</th>
                <th class="text-center">Sub total</th>
              </tr>
            </thead>
            <tbody>
              <template v-if="$auth.loggedIn">
                <ProductCheckout
                  v-for="cart in carts"
                  :key="cart.id"
                  :product="cart.product"
                  :qty="cart.qty"
                  :id="cart.id"
                  :process="cart.process"
                />
              </template>
              <template v-if="!$auth.loggedIn">
                <ProductCheckout
                  v-for="cart in tempCart"
                  :key="cart.id"
                  :product="cart.product"
                  :qty="cart.qty"
                  :id="cart.id"
                  :process="cart.process"
                />
              </template>
            </tbody>
          </table>
        </div>
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
            v-if="$auth.loggedIn"
            @click="doCreateTransaction"
            class="btn btn-danger"
            >Bayar</a
          >
          <p v-if="!$auth.loggedIn" style="color: red">
            Silahkan Login untuk melanjutkan transaksi
          </p>
        </div>
      </div>
      <Footer />
    </section>
  </section>
</template>

<script>
import { mapGetters } from "vuex";
export default {
  data() {
    return {
      breadcrumb: [
        {
          url: "/",
          name: "Beranda",
          class: "my-2 ms-3 breadcrumb-item opacity-50",
        },
        {
          url: "/cart",
          name: "Keranjang Saya",
          class: "my-2 breadcrumb-item opacity-50",
        },
        {
          url: "/checkout",
          name: "Check Out",
          class: "my-2 breadcrumb-item active opacity-50",
        },
      ],
      carts: {},
      grandTotal: 0,
      weightTotal: 0,
      email: "",
      password: "",
      shippingCost: 0,
      jneShippngCost: 0,
      dakotaShippingCost: 0,

      //radio
      shippingRadio: "",
    };
  },
  methods: {
    async doLogin() {
      try {
        let data = {
          email: this.email,
          password: this.password,
        };
        let response = await this.$axios.$post(
          process.env.API_URL + "/api/login",
          data
        );
        if (response.success) {
          await this.$auth
            .loginWith("laravelSanctum", {
              data: {
                email: this.email,
                password: this.password,
              },
            })
            .then(async () => {
              this.$toast.success("Successfully authenticated", {
                theme: "bubble",
                position: "bottom-right",
                duration: 5000,
              });
              let d = {
                carts: this.tempCart,
              };
              let r = await this.$axios.$post(
                process.env.API_URL + "/api/carts/multiple",
                d
              );

              this.$router.push("/checkout");
              setTimeout(() => {
                window.location.reload(true);
              }, 2000);
            });
        } else {
          let err = response.message;
          Object.keys(err).forEach((key, error) => {
            Object.keys(err[key]).forEach((key2, e) => {
              this.$toast.error(err[key][key2], {
                theme: "bubble",
                position: "bottom-right",
                duration: 5000,
              });
            });
          });
        }
      } catch (error) {
        this.$toasted.error(error, {
          theme: "bubble",
          position: "bottom-right",
          duration: 5000,
        });
        console.log(error);
      }
    },
    setCost(event) {
      if (event.target.value == "jne") {
        this.grandTotal -= this.shippingCost;
        this.shippingCost = this.jneShippngCost;
        this.grandTotal += this.shippingCost;
      } else {
        this.grandTotal -= this.shippingCost;
        this.shippingCost = 0;
        this.grandTotal += this.shippingCost;
      }
    },
    async doCreateTransaction() {
      try {
        let data = {
          courier: this.shippingRadio,
          address_id: this.$auth.user.addresses[0].id, //nnti set selected
        };
        let response = await this.$axios.$post(
          process.env.API_URL + "/api/transactions", //todo ganti link
          data
        );
        if (response.success == true) {
          //hapus cart local


          //router push ke pembayaran (ganti url)
          this.$router.push("/pembayaran/"+response.data.uuid);
          
          this.$toast.success("Transaksi berhasil dibuat, silahkan lakukan pembayaran", {
                theme: "bubble",
                position: "bottom-right",
                duration: 5000,
              });
        }else{
          let err = response.message;
          Object.keys(err).forEach((key, error) => {
            Object.keys(err[key]).forEach((key2, e) => {
              this.$toast.error(err[key][key2], {
                theme: "bubble",
                position: "bottom-right",
                duration: 5000,
              });
            });
          });
        }
      } catch (err) {
        console.log(err);
      }
    },
  },
  async mounted() {
    if (this.$auth.loggedIn) {
      try {
        let carts = await this.$axios.$get(
          process.env.API_URL + "/api/carts?checkout=true"
        );
        this.carts = carts.data;
        this.grandTotal = 0 + this.shippingCost;
        this.carts.forEach((cart) => {
          this.grandTotal += cart.qty * cart.product.price;
          this.weightTotal += cart.qty * cart.product.weight;
        });
      } catch (error) {
        console.log(error);
      }

      try {
        let cost = await this.$axios.$post(
          process.env.API_URL + "/api/checkout/get_jne_cost"
        );
        this.jneShippngCost = cost.data[0].cost[0].value;
      } catch (error) {
        console.log(error);
      }
    } else {
    }
  },
  computed: {
    ...mapGetters({
      tempCart: "getCheckout",
      cartChanged: "getCartChanged",
    }),
  },
  watch: {
    tempCart: {
      handler: function (carts) {
        if (!this.$auth.loggedIn && carts) {
          this.grandTotal = 0 + this.shippingCost;

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
};
</script>
