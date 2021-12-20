<template>
  <section>
    <section id="product-detail-web">
      <Header />
      <section>
        <Breadcrumb :links="breadcrumb" />
        <div class="container">
          <div class="row">
            <div class="preview col-md-6">
              <div class="preview-pic tab-content">
                <template v-for="(img, itemObjKey) in JSON.parse(data.images)">
                  <div
                    class="tab-pane"
                    :id="'pic-' + itemObjKey"
                    :key="'pic-' + itemObjKey"
                  >
                    <img
                      :src="ASSET_URL + '/' + img"
                      alt="Gallery image 1"
                      class="ecommerce-gallery-main-img active w-100"
                    />
                  </div>
                </template>

                <div class="tab-pane" id="pic-2">
                  <img :src="ASSET_URL + '/' + JSON.parse(data.images)[1]" />
                </div>
              </div>
              <ul class="preview-thumbnail nav nav-tabs">
                <template v-for="(img, itemObjKey) in JSON.parse(data.images)">
                  <li class="" :key="'pic' + itemObjKey">
                    <a :data-target="'#pic-' + itemObjKey" data-toggle="tab"
                      ><img :src="ASSET_URL + '/' + img"
                    /></a>
                  </li>
                </template>
                <li>
                  <a data-target="#pic-2" data-toggle="tab"
                    ><img :src="ASSET_URL + '/' + JSON.parse(data.images)[1]"
                  /></a>
                </li>
              </ul>
            </div>
            <div class="col-sm-6 mt-5 container">
              <h5>Nama Merek</h5>
              <div class="row">
                <div class="col-sm-8">
                  <h3>
                    <b>{{ data.code }} - {{ data.name }}</b>
                  </h3>
                </div>
                <a class="col-sm-1 me-0 pe-1" href=""
                  ><img
                    class="img-fluid max-width:100% height:auto rounded"
                    src="/img/Whatsapp_new.png"
                    style="
                      background-color: #f3f3f3;
                      box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important;
                    "
                    alt=""
                /></a>
                <a class="col-sm-1 ms-0 ps-1" href=""
                  ><img
                    class="img-fluid max-width:100% height:auto rounded"
                    src="/img/tokopedia.png"
                    style="
                      background-color: #f3f3f3;
                      box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important;
                    "
                    alt=""
                /></a>
              </div>
              <h4>Rp.{{ Number(data.price).toLocaleString("id-ID") }}</h4>
              <hr class="style1" style="background-color: red; height: 2px" />
              <div>
                <table>
                  <tbody>
                    <tr
                      v-for="attribute in data.attributes"
                      :key="attribute.id"
                    >
                      <th scope="row" class="pe-3">
                        <h5>{{ attribute.attribute.name }}</h5>
                      </th>
                      <td>
                        <h5><b class="pe-1">:</b></h5>
                      </td>
                      <td>
                        <h5>{{ attribute.value }}</h5>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row" class="pe-3">
                        <h5>Pengukuran Produk</h5>
                      </th>
                      <td>
                        <h5><b class="pe-1">:</b></h5>
                      </td>
                      <td>
                        <h5>
                          {{
                            parseFloat(data.dimension_width / 10).toFixed(2)
                          }}cm x
                          {{
                            parseFloat(data.dimension_height / 10).toFixed(2)
                          }}cm x
                          {{
                            parseFloat(data.dimension_depth / 10).toFixed(2)
                          }}cm
                        </h5>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row" class="pe-3"><h5>Berat Barang</h5></th>
                      <td>
                        <h5><b class="pe-1">:</b></h5>
                      </td>
                      <td>
                        <h5>
                          {{
                            parseFloat(
                              (data.weight &lt; 10 ? 10 : data.weight) / 1000
                            ).toFixed(2)
                          }}
                          Kg
                        </h5>
                      </td>
                    </tr>
                    <br />
                    <tr>
                      <th scope="row" class="pe-3"><h5>Stok</h5></th>
                      <td>
                        <h5><b class="pe-1">:</b></h5>
                      </td>
                      <td>
                        <h5>
                          {{ Number(data.stock).toLocaleString("id-ID") }}
                        </h5>
                      </td>
                    </tr>
                  </tbody>
                </table>

                <br />
                <a
                  href="#"
                  class="
                    btn
                    text-danger
                    btn-sm
                    rounded
                    col-sm-3
                    ms-0
                    mb-3
                    py-2
                    px-2
                  "
                  @click="addToCart(data)"
                  style="
                    background-color: #f3f3f3;
                    box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important;
                  "
                  >+ Keranjang</a
                >
                <a
                  class="col-sm-3"
                  href=""
                  onclick="return false;"
                  @click="addToWishList(data.id)"
                  ><i
                    :class="(data.wishlist_exist ? 'fas' : 'far') + ' fa-heart'"
                    style="
                      font-size: 30px !important;
                      color: #c63442 !important;
                    "
                  ></i
                ></a>
              </div>
            </div>
          </div>
        </div>
        <div class="container mt-5">
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
                    style="border: 0"
                    src="/img/emojione_star.png"
                    alt=""
                  />
                  <h2 class="my-auto">5/5</h2>
                </div>
                <!-- test -->
                <div>
                  <b-button
                    class="text-danger bg-white btn-outline-light"
                    v-b-modal.modal-sm
                    variant=""
                    >Lihat Detail</b-button
                  >
                  <div class="container">
                    <div class="d-flex">
                      <b-modal id="modal-sm" size="sm" title="Rating">
                        <div class="d-flex my-2">
                          <img
                            class="img-thumbnail max-width:100% height:auto"
                            src="/img/emojione_star.png"
                            style="border: 0"
                            alt=""
                          />
                          <h3 class="my-auto mx-2">5</h3>
                        </div>
                        <div class="d-flex my-2">
                          <img
                            class="img-thumbnail max-width:100% height:auto"
                            src="/img/emojione_star.png"
                            style="border: 0"
                            alt=""
                          />
                          <h3 class="my-auto mx-2">4</h3>
                        </div>
                        <div class="d-flex my-2">
                          <img
                            class="img-thumbnail max-width:100% height:auto"
                            src="/img/emojione_star.png"
                            style="border: 0"
                            alt=""
                          />
                          <h3 class="my-auto mx-2">3</h3>
                        </div>
                        <div class="d-flex my-2">
                          <img
                            class="img-thumbnail max-width:100% height:auto"
                            src="/img/emojione_star.png"
                            style="border: 0"
                            alt=""
                          />
                          <h3 class="my-auto mx-2">2</h3>
                        </div>
                        <div class="d-flex my-2">
                          <img
                            class="img-thumbnail max-width:100% height:auto"
                            src="/img/emojione_star.png"
                            style="border: 0"
                            alt=""
                          />
                          <h3 class="my-auto mx-2">1</h3>
                        </div>
                      </b-modal>
                    </div>
                  </div>
                </div>
                <!-- test -->
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

    <!-- mobile -->
    <section id="product-detail-mobile">
      <Header />
      <section class="mb-5">
        <Breadcrumb :links="breadcrumb" />
        <div class="container">
          <div class="row">
            <div>
              <b-carousel
                id="carousel-1"
                v-model="slide"
                :interval="4000"
                controls
                indicators
                img-width="100%"
                img-height="480"
                style="text-shadow: 1px 1px 2px #333"
                @sliding-start="onSlideStart"
                @sliding-end="onSlideEnd"
              >
                <b-carousel-slide
                  v-for="(img, itemObjKey) in JSON.parse(data.images)"
                  :key="itemObjKey"
                  :img-src="ASSET_URL + '/' + img"
                >
                </b-carousel-slide>
              </b-carousel>
            </div>
            <div class="col-sm-6 mt-5 container">
              <h5>Nama Merek</h5>
              <div class="row">
                <div class="col-10">
                  <h3>{{ data.code }} - {{ data.name }}</h3>
                </div>
                <div class="col-2">
                  <a
                    href=""
                    onclick="return false;"
                    @click="addToWishList(data.id)"
                  >
                    <i
                      :class="
                        (data.wishlist_exist ? 'fas' : 'far') + ' fa-heart'
                      "
                      style="
                        font-size: 25px !important;
                        color: #c63442 !important;
                      "
                    ></i>
                  </a>
                </div>
              </div>
              <h4>
                <b>Rp.{{ Number(data.price).toLocaleString("id-ID") }}</b>
              </h4>
              <hr class="style1" style="background-color: red; height: 2px" />
              <div>
                <table>
                  <tbody>
                    <tr
                      v-for="attribute in data.attributes"
                      :key="attribute.id"
                    >
                      <th scope="row" class="pe-3">
                        {{ attribute.attribute.name }}
                      </th>
                      <td><b class="pe-1">:</b></td>
                      <td>{{ attribute.value }}</td>
                    </tr>
                    <tr>
                      <th scope="row" class="pe-3">Pengukuran Produk</th>
                      <td><b class="pe-1">:</b></td>
                      <td>
                        {{ parseFloat(data.dimension_width / 10).toFixed(2) }}cm
                        x
                        {{
                          parseFloat(data.dimension_height / 10).toFixed(2)
                        }}cm x
                        {{ parseFloat(data.dimension_depth / 10).toFixed(2) }}cm
                      </td>
                    </tr>
                    <tr>
                      <th scope="row" class="pe-3">Berat Barang</th>
                      <td><b class="pe-1">:</b></td>
                      <td>
                        {{
                            parseFloat(
                              (data.weight &lt; 10 ? 10 : data.weight) / 1000
                            ).toFixed(2)
                        }}
                        Kg
                      </td>
                    </tr>
                    <br />
                    <tr>
                      <th scope="row" class="pe-3">Stok</th>
                      <td><b class="pe-1">:</b></td>
                      <td>{{ Number(data.stock).toLocaleString("id-ID") }}</td>
                    </tr>
                  </tbody>
                </table>
                <hr class="style1" style="background-color: red; height: 2px" />
              </div>
              <div class="row">
                <div class="col-2 ps-0 pe-0">
                  <a
                    class="d-flex justify-content-start ms-3"
                    href=""
                    onclick="return false;"
                    ><img
                      id="logo"
                      class="img-fluid rounded"
                      style="
                        background-color: #f3f3f3;
                        box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important;
                      "
                      src="/img/Whatsapp_new.png"
                      alt=""
                  /></a>
                </div>
                <div class="col ps-0 pe-0">
                  <a
                    class="d-flex justify-content-start"
                    href=""
                    onclick="return false;"
                    ><img
                      id="logo"
                      class="img-fluid rounded"
                      style="
                        background-color: #f3f3f3;
                        box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important;
                      "
                      src="/img/tokopedia.png"
                      alt=""
                  /></a>
                </div>
                <a
                  href="#"
                  class="col btn text-danger btn-sm rounded me-3 py-2 px-2"
                  @click="addToCart(data)"
                  style="
                    background-color: #f3f3f3;
                    box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important;
                  "
                  >+ Keranjang</a
                >
              </div>
              <hr class="style1" style="background-color: red; height: 2px" />
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="pt-0 d-flex align-items-center">
              <h4 class="col-2 me-2 ps-0">Ulasan</h4>
              <h6 class="col ps-0 pb-2">(2)</h6>
              <div class="">
                <div class="d-flex">
                  <img
                    class="img-thumbnail max-width:100% height:auto"
                    style="border: 0"
                    src="/img/emojione_star.png"
                    alt=""
                  />
                  <h3 class="my-auto me-3">5/5</h3>
                </div>
                <!-- test -->
                <div>
                  <b-button
                    class="text-danger bg-white btn-outline-light"
                    v-b-modal.modal-sm
                    variant=""
                    >Lihat Detail</b-button
                  >
                  <div class="container">
                    <div class="d-flex">
                      <b-modal id="modal-sm" size="sm" title="Rating">
                        <div class="d-flex my-2">
                          <img
                            class="img-thumbnail max-width:100% height:auto"
                            src="/img/emojione_star.png"
                            style="border: 0"
                            alt=""
                          />
                          <h3 class="my-auto mx-2">5</h3>
                        </div>
                        <div class="d-flex my-2">
                          <img
                            class="img-thumbnail max-width:100% height:auto"
                            src="/img/emojione_star.png"
                            style="border: 0"
                            alt=""
                          />
                          <h3 class="my-auto mx-2">4</h3>
                        </div>
                        <div class="d-flex my-2">
                          <img
                            class="img-thumbnail max-width:100% height:auto"
                            src="/img/emojione_star.png"
                            style="border: 0"
                            alt=""
                          />
                          <h3 class="my-auto mx-2">3</h3>
                        </div>
                        <div class="d-flex my-2">
                          <img
                            class="img-thumbnail max-width:100% height:auto"
                            src="/img/emojione_star.png"
                            style="border: 0"
                            alt=""
                          />
                          <h3 class="my-auto mx-2">2</h3>
                        </div>
                        <div class="d-flex my-2">
                          <img
                            class="img-thumbnail max-width:100% height:auto"
                            src="/img/emojione_star.png"
                            style="border: 0"
                            alt=""
                          />
                          <h3 class="my-auto mx-2">1</h3>
                        </div>
                      </b-modal>
                    </div>
                  </div>
                </div>
                <!-- test -->
              </div>
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

    <!-- JQuery -->
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
    ></script>
    <!-- Bootstrap tooltips -->
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"
    ></script>
    <!-- Bootstrap core JavaScript -->
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"
    ></script>
    <!-- MDB core JavaScript -->
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </section>
</template>

<style lang="css" scoped>
#product-detail-mobile {
  display: none;
}

/* 0 - 991 px */
@media screen and (max-width: 500px) {
  #product-detail-web {
    display: none;
  }

  #product-detail-mobile {
    display: contents;
  }

  #logo {
    width: 40px;
  }
}
</style>


<script>
import { mapActions } from "vuex";
export default {
  data() {
    return {
      ASSET_URL: process.env.ASSET_URL,
      slide: 0,
      sliding: null,
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
  methods: {
    onSlideStart(slide) {
      this.sliding = true;
    },
    onSlideEnd(slide) {
      this.sliding = false;
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
            this.$toast.success("Successfully delete a product from wishlist", {
              theme: "bubble",
              position: "bottom-right",
              duration: 5000,
            });
          } else {
            this.$toast.success("Successfully add a product to wishlist", {
              theme: "bubble",
              position: "bottom-right",
              duration: 5000,
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
          this.$toast.success("Successfully add a product to cart", {
            theme: "bubble",
            position: "bottom-right",
            duration: 5000,
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
    ...mapActions(["addProductToCart"]),
  },
};
</script>

<style scoped lang="css">
body {
  font-family: "open sans";
  overflow-x: hidden;
}

img {
  max-width: 100%;
}

.preview {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
  -ms-flex-direction: column;
  flex-direction: column;
}
@media screen and (max-width: 996px) {
  .preview {
    margin-bottom: 20px;
  }
}

.preview-pic {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
  -ms-flex-positive: 1;
  flex-grow: 1;
}

.preview-thumbnail.nav-tabs {
  border: none;
  margin-top: 15px;
}
.preview-thumbnail.nav-tabs li {
  width: 18%;
  margin-right: 2.5%;
}
.preview-thumbnail.nav-tabs li img {
  max-width: 100%;
  display: block;
}
.preview-thumbnail.nav-tabs li a {
  padding: 0;
  margin: 0;
}
.preview-thumbnail.nav-tabs li:last-of-type {
  margin-right: 0;
}

.tab-content {
  overflow: hidden;
}
.tab-content img {
  width: 100%;
  -webkit-animation-name: opacity;
  animation-name: opacity;
  -webkit-animation-duration: 0.3s;
  animation-duration: 0.3s;
}

.card {
  margin-top: 50px;
  background: #eee;
  padding: 3em;
  line-height: 1.5em;
}

@media screen and (min-width: 997px) {
  .wrapper {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
  }
}

.details {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
  -ms-flex-direction: column;
  flex-direction: column;
}

.colors {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
  -ms-flex-positive: 1;
  flex-grow: 1;
}

.product-title,
.price,
.sizes,
.colors {
  text-transform: UPPERCASE;
  font-weight: bold;
}

.checked,
.price span {
  color: #ff9f1a;
}

.product-title,
.rating,
.product-description,
.price,
.vote,
.sizes {
  margin-bottom: 15px;
}

.product-title {
  margin-top: 0;
}

.size {
  margin-right: 10px;
}
.size:first-of-type {
  margin-left: 40px;
}

.color {
  display: inline-block;
  vertical-align: middle;
  margin-right: 10px;
  height: 2em;
  width: 2em;
  border-radius: 2px;
}
.color:first-of-type {
  margin-left: 20px;
}

.add-to-cart,
.like {
  background: #ff9f1a;
  padding: 1.2em 1.5em;
  border: none;
  text-transform: UPPERCASE;
  font-weight: bold;
  color: #fff;
  -webkit-transition: background 0.3s ease;
  transition: background 0.3s ease;
}
.add-to-cart:hover,
.like:hover {
  background: #b36800;
  color: #fff;
}

.not-available {
  text-align: center;
  line-height: 2em;
}
.not-available:before {
  font-family: fontawesome;
  content: "\f00d";
  color: #fff;
}

.orange {
  background: #ff9f1a;
}

.green {
  background: #85ad00;
}

.blue {
  background: #0076ad;
}

.tooltip-inner {
  padding: 1.3em;
}

@-webkit-keyframes opacity {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
    transform: scale(3);
  }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
    transform: scale(1);
  }
}

@keyframes opacity {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
    transform: scale(3);
  }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
    transform: scale(1);
  }
}

/*# sourceMappingURL=style.css.map */
</style>

