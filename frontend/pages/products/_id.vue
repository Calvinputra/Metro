<template>
  <section>
    <Header />
    <section>
      <Breadcrumb :links="breadcrumb" />
      <div class="container">
        <div class="row">
          <div class="col-sm-1"></div>
          <div class="col-sm-4">
            <div
              class="ecommerce-gallery"
              data-mdb-zoom-effect="true"
              data-mdb-auto-height="true"
            >
              <div class="row py-3 shadow-5">
                <div class="col-12 mb-1">
                  <div class="lightbox">
                    <img
                      :src="ASSET_URL + '/' + JSON.parse(data.images)[0]"
                      alt="Gallery image 1"
                      class="ecommerce-gallery-main-img active w-100"
                    />
                  </div>
                </div>
                <div class="col-3 mt-1">
                  <img
                    src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/14a.jpg"
                    data-mdb-img="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/14a.jpg"
                    alt="Gallery image 1"
                    class="active w-100"
                  />
                </div>
                <div class="col-3 mt-1">
                  <img
                    src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg"
                    data-mdb-img="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg"
                    alt="Gallery image 2"
                    class="w-100"
                  />
                </div>
                <div class="col-3 mt-1">
                  <img
                    src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13a.jpg"
                    data-mdb-img="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13a.jpg"
                    alt="Gallery image 3"
                    class="w-100"
                  />
                </div>
                <div class="col-3 mt-1">
                  <img
                    src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/15a.jpg"
                    data-mdb-img="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/15a.jpg"
                    alt="Gallery image 4"
                    class="w-100"
                  />
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 mt-5 container">
            <h5>Nama Merek</h5>
            <div class="row">
              <div class="col-sm-8">
                <h3>{{ data.code }} - {{ data.name }}</h3>
              </div>
              <!-- <div class="row"> -->
              <a class="col-sm-1 me-0 pe-1" href=""
                ><img
                  class="img-fluid max-width:100% height:auto rounded"
                  src="/img/Whatsapp_new.png"
                  style="background-color: #f3f3f3"
                  alt=""
              /></a>
              <a class="col-sm-1 ms-0 ps-1" href=""
                ><img
                  class="img-fluid max-width:100% height:auto rounded"
                  src="/img/tokopedia.png"
                  style="background-color: #f3f3f3"
                  alt=""
              /></a>
              <!-- </div> -->
            </div>
            <h4>Rp.{{ Number(data.price).toLocaleString("id-ID") }}</h4>
            <hr class="style1" style="background-color: red; height: 2px" />
            <div>
              <h5 v-for="attribute in data.attributes" :key="attribute.id">
                {{ attribute.attribute.name }} : {{ attribute.value }}
              </h5>
              <h5>
                Pengukuran Produk :
                {{ parseFloat(data.dimension_width / 10).toFixed(2) }}cm x
                {{ parseFloat(data.dimension_height / 10).toFixed(2) }}cm x
                {{ parseFloat(data.dimension_depth / 10).toFixed(2) }}cm
              </h5>
              <h5>
                Berat Barang :
                {{
                  parseFloat(
                    (data.weight &lt; 10 ? 10 : data.weight) / 1000
                  ).toFixed(2)
                }}
                Kg
              </h5>
              <br />
              <h5>Stok : {{ Number(data.stock).toLocaleString("id-ID") }}</h5>
              <br />
              <a
                href="#"
                class="
                  btn
                  text-danger
                  btn-sm
                  shadow
                  rounded
                  col-sm-2
                  ms-0
                  ps-0
                  py-2
                  px-2
                "
                style="background-color: #f3f3f3"
                >+ Keranjang</a
              >
              <a class="col-sm-3" href=""
                ><img src="/img/audiblelogo.png" alt=""
              /></a>
            </div>
          </div>
          <!-- <div class="col-sm-1"></div> -->
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-1"></div>
          <div class="pt-2 col-sm 3 d-flex align-items-center">
            <h1>Ulasan</h1>
            <h5 class="pt-1">(2)</h5>
            <div class="col-sm-8"></div>
            <div class="">
              <div class="d-flex">
                <img
                  class="img-thumbnail max-width:100% height:auto"
                  src="/img/emojione_star.png"
                  alt=""
                />
                <h2 class="">5/5</h2>
              </div>
              <h5 class="text-danger">Lihat Detail</h5>
            </div>
          </div>
          <div>
            <div class="col-sm-1"></div>
            <hr class="style1" style="background-color: red; height: 2px" />
          </div>
        </div>
      </div>
      <Ulasan />
      <Ulasan />
      <Ulasan />
      <Ulasan />
    </section>
    <Footer />
  </section>
</template>

<script>
export default {
  data() {
    return {
      ASSET_URL: process.env.ASSET_URL,
    };
  },
  async asyncData({ $axios, params }) {
    try {
      let response = await $axios(
        process.env.API_URL + `/api/products/${params.id}`
      );
      let response_data = response.data.data;
      console.log(response_data);

      return {
        data: response_data,
        breadcrumb: [
          {
            url: "/",
            name: "Beranda",
            class: "my-2 ms-3 breadcrumb-item opacity-50",
          },
          {
            url: "/",
            name: "Product",
            class: "my-2 breadcrumb-item active opacity-50",
          },
          {
            url: "/",
            name: response_data.name,
            class: "my-2 breadcrumb-item active opacity-50",
          },
        ],
      };
    } catch (error) {
      console.log(error);
    }
  },
};
</script>

