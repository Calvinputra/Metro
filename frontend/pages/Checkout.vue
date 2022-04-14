<template>
  <section style="font-family: 'Nunito Sans'">
    <LoadingSpinner v-if="!isLoaded" />

    <section id="checkout-webview" v-if="isLoaded">
      <Breadcrumb :links="breadcrumb" />
      <!-- belum log in -->
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
            <label for="step1" class="mt-2">
              <h5 class="mt-2">Step 1: Periksa Akun</h5>
            </label>
          </div>
        </div>
        <div class="row" v-if="!$auth.loggedIn">
          <div class="col-sm-1"></div>
          <div class="col-sm-5">
            <img src="/img/checkout_login.png" alt="" />
          </div>
          <div class="col-sm-5 mb-0">
            <form class="">
              <div class="col-sm-12">
                <label class="mb-0"
                  ><h2 class="font-weight-bold">
                    Masuk ke Akun
                    <hr
                      style="
                        height: 10%;
                        width: 100%;
                        border-width: 0;
                        color: red;
                      "
                      class="col-sm-12 mb-1 mt-0"
                    /></h2
                ></label>
              </div>

              <div class="form-group">
                <label for="email"
                  >Email<span style="color: red">*</span>:</label
                >
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
            <p style="color: red">
              <span style="color: red">*</span>Wajib diisi
            </p>

            <div class="text-center">
              <button
                @click="doLogin"
                type="submit"
                class="btn text-danger btn-light btn-sm rounded col-sm-5 ms-2 mb-3"
                style="box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important"
              >
                Masuk Akun
              </button>
              <p class="mb-3">Atau</p>
              <Googlebutton />
            </div>
            <p class="mt-3">
              Lupa kata sandi?
              <nuxt-link
                :to="{ path: '/forgot_passw`ord' }"
                class="text-danger"
              >
                klik disini.</nuxt-link
              >
            </p>
            <p class="mt-2">
              Belum mempunyai akun?<nuxt-link
                :to="{ path: '/register' }"
                class="text-danger"
                >Buat Akun.</nuxt-link
              >
            </p>
          </div>
        </div>

        <!-- Log in -->
        <div class="ml-5" v-if="$auth.loggedIn">
          <div class="bg-light text-black col-sm-11">
            <label for="step1" class="mt-2">
              <h5 class="mt-2">Step 1: Periksa Akun</h5>
            </label>
          </div>
        </div>
        <div class="row mt-3" style="" v-if="$auth.loggedIn">
          <div class="col-sm-1"></div>
          <div class="col-sm-3">
            <p>
              Nama : {{ $auth.user.first_name + " " + $auth.user.last_name }}
            </p>
            <p>Nomor Telepon : {{ $auth.user.phone }}</p>
            <p>Email : {{ $auth.user.email }}</p>
          </div>
          <div class="col-sm-2"></div>
          <div class="col-sm-6">
            <div class="col-sm-3">
              <p>Alamat:</p>
            </div>
            <div class="col-sm-8">
              <p class="">
                {{ $auth.user.addresses[0].address }}
                <br />

                {{ $auth.user.addresses[0].city.name }}
                <br />
                {{ $auth.user.addresses[0].province.name }}
                <br />
                {{ $auth.user.addresses[0].country.name }}
              </p>
            </div>
          </div>
        </div>
        <!-- <div class="ml-5 mt-5" v-if="$auth.loggedIn"> -->
        <div class="ml-5 mt-5" v-if="$auth.loggedIn">
          <div class="bg-light text-black col-sm-11 mb-5">
            <label for="step1" class="mt-2">
              <h5 class="mt-2">Step 2: Pilih Metode Pengiriman</h5>
            </label>
          </div>
          <div class="ms-3">
            <p class="fw-bold mt-3">Pilih Metode Lain:</p>
          </div>
          <div class="d-flex ms-3 pt-2">
            <div class="form-check" v-if="!hideDakota">
              >
              <input
                class="form-check-input"
                type="radio"
                name="radioShippingDakota_wv"
                id="radioShippingDakota_wv"
                value="dakota"
                @change="setCostDakota($event)"
                v-model="shippingRadio"
              />
              <label class="form-check-label" for="radioShippingDakota_wv">
                <p>
                  Dakota - Rp.
                  {{ Number(0).toLocaleString("id-ID") }}
                </p>
              </label>
            </div>
            <div>
              <div class="d-flex ml-5">
                <p class="fw-bold mr-3">JNE</p>
                <div>
                  <div
                    class="form-check"
                    v-for="(cost, index) in this.costs"
                    :key="index"
                  >
                    <input
                      class="form-check-input"
                      type="radio"
                      name="radioShippingJne_wv"
                      :id="'radioShippingJne_wv' + index"
                      :value="cost.service"
                      @change="setCostJne($event, cost.cost[0].value)"
                      v-model="shippingRadio"
                    />

                    <label
                      class="form-check-label"
                      :for="'radioShippingJne_wv' + index"
                    >
                      <p>
                        {{ cost.service }} ({{ cost.cost[0].etd }} hari) - Rp.
                        {{ Number(cost.cost[0].value).toLocaleString("id-ID") }}
                      </p>
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="bg-light text-black col-sm-11 ml-5 mt-5">
          <label for="step1" class="mt-2">
            <h5 class="mt-2" v-if="!$auth.loggedIn">
              Step 2: Konfirmasi Pembelian
            </h5>
            <h5 class="mt-2" v-if="$auth.loggedIn">
              Step 3: Konfirmasi Pembelian
            </h5>
          </label>
          <div class="table-responsive shopping-cart">
            <table class="table">
              <thead>
                <tr>
                  <th class="py-2">Produk</th>
                  <th class="text-center py-2">Berat</th>
                  <th class="text-center py-2">Jumlah</th>
                  <th class="text-center py-2">Harga</th>
                  <th class="text-center py-2">Sub total</th>
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
        <div class="text-right col-11">
          <table class="table" style="border-bottom-width: 0px !important">
            <tbody>
              <tr>
                <td
                  style="
                    border-bottom-width: 0px !important;
                    border-top: 0px !important;
                  "
                >
                  Total Berat
                </td>
                <td
                  style="
                    border-bottom-width: 0px !important;
                    border-top: 0px !important;
                  "
                  class="col-sm-2"
                >
                  {{ (weightTotal / 1000).toFixed(2) }} Kg
                </td>
              </tr>
              <tr>
                <td
                  style="
                    border-bottom-width: 0px !important;
                    border-top: 0px !important;
                  "
                >
                  Total Harga
                </td>
                <td
                  style="
                    border-bottom-width: 0px !important;
                    border-top: 0px !important;
                  "
                >
                  Rp. {{ Number(grandTotal).toLocaleString("id-ID") }}
                </td>
              </tr>
            </tbody>
          </table>
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
              style="box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important"
              >Bayar</a
            >
            <p v-if="!$auth.loggedIn" style="color: red">
              Silahkan Login untuk melanjutkan transaksi
            </p>
          </div>
        </div>
      </section>
    </section>

    <section id="checkout-mobileview" v-if="isLoaded">
      <!-- belum log in -->
      <Breadcrumb :links="breadcrumb" />
      <section class="container-md" style="min-width: 95%">
        <div class="pr-5 mb-0">
          <h1>Periksa</h1>
          <div>
            <hr
              style="height: 3px; border-width: 10; color: red"
              class="col-sm-12"
            />
          </div>
          <div class="bg-light text-black col-sm-11" v-if="!$auth.loggedIn">
            <label for="step1" class="mt-2">
              <h5 class="mt-2">Step 1: Periksa Akun</h5>
            </label>
          </div>
        </div>
        <div v-if="!$auth.loggedIn">
          <div class="col-sm-5 mb-3">
            <form class="mr-5">
              <div class="col-sm-12 text-center">
                <label class="mb-0 mt-2 mb-2"
                  ><h2 class="">
                    Masuk ke Akun
                    <hr
                      style="
                        height: 10%;
                        width: 100%;
                        border-width: 0;
                        color: red;
                      "
                      class="col-sm-12 mb-1 mt-0"
                    /></h2
                ></label>
              </div>

              <div class="form-group">
                <label for="email"
                  >Email<span style="color: red">*</span>:</label
                >
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

            <p style="color: red">
              <span style="color: red">*</span>Wajib diisi
            </p>
            <p>
              Lupa kata sandi?
              <nuxt-link :to="{ path: '/forgot_password' }" class="text-danger">
                klik disini.</nuxt-link
              >
            </p>
            <div class="text-center">
              <button
                @click="doLogin"
                type="submit"
                class="btn text-danger btn-light rounded"
                style="
                  box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important;
                  padding: 5px 60px !important;
                "
              >
                Masuk Akun
              </button>
              <p class="mt-3 mb-3">Atau</p>
              <Googlebutton />
            </div>
            <p class="mt-3">
              Belum mempunyai akun?<nuxt-link
                :to="{ path: '/register' }"
                class="text-danger"
                >Buat Akun.</nuxt-link
              >
            </p>
          </div>
        </div>

        <!-- Log in -->
        <div v-if="$auth.loggedIn">
          <div class="bg-light text-black col-sm-11">
            <label for="step1" class="mt-2">
              <h5 class="mt-2">Step 1: Periksa Akun</h5>
            </label>
          </div>
        </div>
        <div class="" style="" v-if="$auth.loggedIn">
          <div class="row">
            <div class="col-5 pt-3">
              <p>Nama</p>
              <p>Nomor Telepon</p>
              <p>Email</p>
              <p>Alamat</p>
            </div>
            <div class="col-7">
              <div>
                <p style="max-width: 80%"></p>
                <p>:{{ $auth.user.first_name + " " + $auth.user.last_name }}</p>
                <p>:{{ $auth.user.phone }}</p>
                <p>:{{ $auth.user.email }}</p>
                <p>
                  :{{ $auth.user.addresses[0].address }}

                  {{ $auth.user.addresses[0].city.name }}
                  {{ $auth.user.addresses[0].province.name }}
                  {{ $auth.user.addresses[0].country.name }}
                </p>
              </div>
            </div>
          </div>
          <div class=""></div>
        </div>
        <div class="mt-5" v-if="$auth.loggedIn">
          <div class="mt-2 mb-3">
            <div class="bg-light text-black col-sm-11 mb-2">
              <label for="step1" class="mt-2">
                <h5 class="mt-2">Step 2: Pilih Metode Pengiriman</h5>
              </label>
            </div>
            <div class="ms-3">
              <p class="fw-bold mt-3">Pilih Metode Lain:</p>
            </div>
            <div class="d-flex ms-3 pt-2">
              <div class="form-check" v-if="!hideDakota">
                <input
                  class="form-check-input"
                  type="radio"
                  name="radioShippingDakota_mv"
                  id="radioShippingDakota_mv"
                  value="dakota"
                  @change="setCostDakota($event)"
                  v-model="shippingRadio"
                />
                <label class="form-check-label" for="radioShippingDakota_mv">
                  <p>
                    Dakota - Rp.
                    {{ Number(0).toLocaleString("id-ID") }}
                  </p>
                </label>
              </div>
              <div>
                <div class="d-flex ml-5">
                  <p class="fw-bold mr-3">JNE</p>
                  <div>
                    <div
                      class="form-check"
                      v-for="(cost, index) in this.costs"
                      :key="index"
                    >
                      <input
                        class="form-check-input"
                        type="radio"
                        name="radioShippingJne_mv"
                        :id="'radioShippingJne_mv' + index"
                        :value="cost.service"
                        @change="setCostJne($event, cost.cost[0].value)"
                        v-model="shippingRadio"
                      />

                      <label
                        class="form-check-label"
                        :for="'radioShippingJne_mv' + index"
                      >
                        <p>
                          {{ cost.service }} ({{ cost.cost[0].etd }} hari) - Rp.
                          {{
                            Number(cost.cost[0].value).toLocaleString("id-ID")
                          }}
                        </p>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="bg-light text-black col-sm-11">
          <label for="step1" class="mt-2">
            <h5 class="mt-2" v-if="!$auth.loggedIn">
              Step 2: Konfirmasi Pembelian
            </h5>
            <h5 class="mt-2" v-if="$auth.loggedIn">
              Step 3: Konfirmasi Pembelian
            </h5>
          </label>
          <div class="table-responsive shopping-cart">
            <table class="table">
              <thead>
                <tr>
                  <th class="py-2">Produk</th>
                  <th class="text-center py-2">Jumlah</th>
                  <th class="text-center py-2">Harga</th>
                  <th class="text-center py-2">Sub total</th>
                </tr>
              </thead>
              <tbody>
                <template v-if="$auth.loggedIn">
                  <ProductCheckoutMobile
                    v-for="cart in carts"
                    :key="cart.id"
                    :product="cart.product"
                    :qty="cart.qty"
                    :id="cart.id"
                    :process="cart.process"
                  />
                </template>
                <template v-if="!$auth.loggedIn">
                  <ProductCheckoutMobile
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
        <div class="text-right col-11 mb-4">
          <table class="table" style="border-bottom-width: 0px !important">
            <tbody>
              <tr>
                <td
                  style="
                    border-bottom-width: 0px !important;
                    border-top: 0px !important;
                  "
                >
                  Total Berat
                </td>
                <td
                  style="
                    border-bottom-width: 0px !important;
                    border-top: 0px !important;
                  "
                  class="col-5"
                >
                  {{ (weightTotal / 1000).toFixed(2) }} Kg
                </td>
              </tr>
              <tr>
                <td
                  style="
                    border-bottom-width: 0px !important;
                    border-top: 0px !important;
                  "
                >
                  Total Harga
                </td>
                <td
                  style="
                    border-bottom-width: 0px !important;
                    border-top: 0px !important;
                  "
                >
                  Rp. {{ Number(grandTotal).toLocaleString("id-ID") }}
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <br />
        <br />
        <div class="shopping-cart-footer">
          <div class="column"></div>
        </div>
        <div class="shopping-cart-footer">
          <div class="column text-center mb-5 pb-3">
            <a
              v-if="$auth.loggedIn"
              @click="doCreateTransaction"
              class="btn btn-danger px-3 py-1"
              style="box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important"
              >Bayar</a
            >
            <p v-if="!$auth.loggedIn" style="color: red">
              Silahkan Login untuk melanjutkan transaksi
            </p>
          </div>
        </div>
      </section>
      <Footer2mobile />
    </section>
  </section>
</template>

<script>
import { mapGetters } from "vuex";
export default {
  data() {
    return {
      hideDakota: true,
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
          name: "Checkout",
          class: "my-2 breadcrumb-item active opacity-50",
        },
      ],
      carts: {},
      grandTotal: 0,
      weightTotal: 0,
      email: "",
      password: "",

      shippingCost: 0,
      shippingMethod: "",

      //costs
      costs: {},

      //radio
      shippingRadio: "",

      isLoaded: false,
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
              this.$toast.success("Berhasil masuk", {
                theme: "bubble",
                position: "bottom-right",
                duration: 5000,
              });
              let d = {
                carts: this.tempCart,
              };
              //update current cart database
              let r = await this.$axios.$post(
                process.env.API_URL + "/api/carts/multiple",
                d
              );

              this.$router.push("/checkout");
              // setTimeout(() => {
              //   window.location.reload(true);
              // }, 2000);
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
    setCostJne(event, cost) {
      this.shippingCost = cost;
      this.shippingMethod = "jne";
      this.recalculateTotal();
    },
    setCostDakota(event) {
      //dakota

      this.shippingCost = 0;
      this.shippingMethod = "dakota";
      this.recalculateTotal();
    },
    recalculateTotal() {
      this.grandTotal = 0 + this.shippingCost;
      this.weightTotal = 0;
      if (this.carts.length > 0) {
        this.carts.forEach((cart) => {
          this.grandTotal += cart.qty * cart.product.price;
          this.weightTotal += cart.qty * cart.product.weight;
        });
      } else {
        this.tempCart.forEach((cart) => {
          this.grandTotal += cart.qty * cart.product.price;
          this.weightTotal += cart.qty * cart.product.weight;
        });
      }
    },
    async doCreateTransaction() {
      try {
        let data = {
          courier: this.shippingMethod,
          type: this.shippingRadio,
          address_id: this.$auth.user.addresses[0].id, //nnti set selected
        };
        let response = await this.$axios.$post(
          process.env.API_URL + "/api/transactions", //todo ganti link
          data
        );
        if (response.success == true) {
          //hapus cart local

          //router push ke pembayaran (ganti url)
          this.$router.push("/pembayaran/" + response.data.uuid);

          this.$toast.success(
            "Transaksi berhasil dibuat, silahkan lakukan pembayaran",
            {
              theme: "bubble",
              position: "bottom-right",
              duration: 5000,
            }
          );
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
      } catch (err) {
        console.log(err);
      }
    },
  },

  async mounted() {
    if (this.$auth.loggedIn) {
      try {
        let carts = await this.$axios.$get(process.env.API_URL + "/api/carts", {
          params: {
            checkout: true,
          },
        });
        if (carts.success && carts.data.length > 0) {
          this.carts = carts.data;
          this.recalculateTotal();
          let costs = await this.$axios.$post(
            process.env.API_URL + "/api/checkout/get_jne_cost"
          );

          if (costs.status == 200) {
            this.costs = costs.data;
            this.$nuxt.refresh();
            this.isLoaded = true;
          }
        } else {
          this.$toast.error("Silahkan memilih product untuk checkout", {
            theme: "bubble",
            position: "bottom-right",
            duration: 5000,
          });
          this.$router.push("/cart");
        }
      } catch (error) {
        console.log(error);
      }
    } else {
      this.recalculateTotal();
      this.isLoaded = true;
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
        if (carts) {
          this.grandTotal = 0 + this.shippingCost;
          this.weightTotal = 0;

          carts.forEach((cart) => {
            if (cart.product.process == 1) {
              this.grandTotal += cart.product.qty * cart.product.price;
              this.weightTotal += cart.product.qty * cart.product.weight;
            }
          });
        }
      },
      deep: true,
      immediate: true,
    },
  },
};
</script>
<style lang="css" scoped>
#checkout-mobile {
  display: none;
}
#checkout-mobileview {
  display: none;
}
/* 0 - 991 px */
@media screen and (max-width: 500px) {
  #checkout_logo {
    display: none !important;
  }

  #checkout-webview {
    display: none;
  }

  #checkout-mobile {
    display: contents;
  }

  #checkout-mobileview {
    display: grid;
  }
}
</style>
