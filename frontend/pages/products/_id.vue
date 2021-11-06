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
                      src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/14a.jpg"
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
                <h3>Kode Produk - NAMA PRODUK</h3>
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
            <h4>Rp.120.000</h4>
            <hr class="style1" style="background-color: red; height: 2px" />
            <div>
              <h5>Material : Besi</h5>
              <h5>Warna : Silver</h5>
              <h5>Pengukuran Produk : 12cm x 12cm x 12cm</h5>
              <h5>Berat Barang : 1Kg</h5>
              <br />
              <h5>Stok : 120</h5>
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
    </section>
    <Footer />
  </section>
</template>

<script>
export default {
  data(){
    return {
      breadcrumb:[
        {
          url:"/",
          name:"Beranda",
          class:"my-2 ms-3 breadcrumb-item opacity-50"
        },
        {
          url:"/",
          name:"Product",
          class:"my-2 breadcrumb-item active opacity-50"
        },
        {
          url:"/",
          name:"Nama Product",
          class:"my-2 breadcrumb-item active opacity-50"
        },


      ]
    }
  },
  async asyncData({ $axios, params }) {
    try {
      let response = await $axios(
        process.env.API_URL + "/api/products/${params.id}"
      );
      console.log(response);
    } catch (error) {
      console.log(error);
    }
  },
};
</script>

