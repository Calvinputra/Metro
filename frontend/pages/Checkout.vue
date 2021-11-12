<template>
  <section>
    <Header />
    <Breadcrumb :links="breadcrumb" />
    <section>
      <div class="ml-5 pr-5 mb-0">
        <h1>Periksa</h1>
        <div>
          <hr
            style="height: 3px; border-width: 10; color: red"
            class="col-sm-12"
          />
        </div>
        <div class="bg-light text-black col-sm-11">
          <label for="step1">
            <h5>Step 1: Periksa Akun</h5>
          </label>
        </div>
      </div>
      <div class="d-flex" style="justify-content: space-evenly">
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
          <P>Lupa kata sandi? <span class="text-danger"> klik disini.</span></P>
          <div class="text-center">
            <button
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
            Belum mempunyai akun?<span class="text-danger">Buat Akun.</span>
          </p>
        </div>
      </div>
      <div class="ml-5">
        <div class="bg-light text-black col-sm-11">
          <label for="step1">
            <h5>Step 2: Data Personal</h5>
          </label>
        </div>
      </div>
      <div class="d-flex justify-content-around mt-3" style="">
        <div>
          <p>Nama :Jason Renata</p>
          <p>Nomor Telepon :08123172819</p>
          <p>Email :jasonAren@gmail.com</p>
        </div>
        <div class="d-flex justify-content-around">
          <div>
            <p>Alamat:</p>
          </div>
          <div>
            <p class="ml-5" style="max-width: 30%">
              Araya Mansion No. 8 - 22, Genitri, Tirtomoyo, Kec. Pakis,
              Malang,Jawa Timur 65154 Indonesia
            </p>
          </div>
        </div>
      </div>
      <div class="ml-5 mt-5">
        <div class="bg-light text-black col-sm-11 mb-5">
          <label for="step1">
            <h5>Step 3: Pilih Metode Pengiriman</h5>
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
              value="option1"
              checked
            />
            <label class="form-check-label" for="exampleRadios1">
              <p>Dakota - Rp9.000</p>
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
                  value="option2"
                />
                <label class="form-check-label" for="exampleRadios2">
                  <p>J&T - Rp12.000</p>
                </label>
              </div>
              <div>
                <button
                  type="submit"
                  class="
                    btn
                    text-danger
                    btn-light btn-sm
                    shadow
                    rounded
                    col-sm-12
                    ml-5
                    ps-0
                    py-2
                    px-2
                  "
                >
                  JNE
                </button>
              </div>
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
              <ProductCheckout
                v-for="cart in carts"
                :key="cart.id"
                :product="cart.product"
                :qty="cart.qty"
                :id="cart.id"
                :process="cart.process"
              />
            </tbody>
          </table>
        </div>
      </div>
      <Footer />
    </section>
  </section>
</template>

<script>
export default {
  middleware: "auth",
  async asyncData({ $axios }) {
    try {
      let response = await $axios.$get(process.env.API_URL + "/api/carts");
      let carts = response.data;
      carts = carts.filter(i=>i.process==true);
      console.log(carts);
      return {
        carts: carts,
      };
    } catch (error) {
      console.log(error);
    }
  },
};
</script>
