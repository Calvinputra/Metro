<template>
  <section>
    <Header />
    <Breadcrumb :links="breadcrumb" />
    <section>
      <template>
        <div>
          <b-carousel
            id="carousel-1"
            controls
            indicators
            img-width="100%"
            img-height="20%"
          >
            <!-- Text slides with image -->
            <b-carousel-slide img-src="/img/bg_laut.jpg"></b-carousel-slide>
            <b-carousel-slide img-src="/img/bg_laut.jpg"></b-carousel-slide>
            <b-carousel-slide img-src="/img/bg_laut.jpg"></b-carousel-slide>
          </b-carousel>
        </div>
      </template>
      <div class="bg-danger container">
        <h3 class="text-white text-center mt-5">
          Kejar DISKON!!!
        </h3>
      </div>
      <br />
      <div class="container">
        <div class="row">
          <div class="row">
            <div class="col-md-3">
              <!-- Controls -->
              <div class="controls pull-right hidden-xs">
                <a
                  class="left fa fa-chevron-left btn btn"
                  href="#carousel-example"
                  data-slide="prev"
                ></a
                ><a
                  class="right fa fa-chevron-right btn"
                  href="#carousel-example"
                  data-slide="next"
                ></a>
              </div>
            </div>
          </div>
          <div
            id="carousel-example"
            class="carousel slide hidden-xs"
            data-ride="carousel"
          >
            <!-- Wrapper for slides -->
            <div class="inner-carousel">
              <div class="item active">
                <div class="row">
                  <div class="col-sm-4">
                    <div class="col-item">
                      <div class="info">
                        <div class="row">
                          <div class="price col-md-6">
                            <h5>Product B</h5>
                            <h5 class="price-text-color">$9.99</h5>
                          </div>
                          <div class="rating hidden-sm col-md-6">
                            <i class="price-text-color fa fa-star"></i>
                            <i class="price-text-color fa fa-star"></i>
                            <i class="price-text-color fa fa-star"></i>
                          </div>
                        </div>
                      </div>

                      <div class="photo">
                        <img
                          src="http://www.prepbootstrap.com/Content/images/template/productslider/product_002.jpg"
                          class="img-responsive"
                          alt="a"
                        />
                      </div>
                      <div class="info">
                        <div class="separator clear-left">
                          <p class="btn-add">
                            <i class="fa fa-shopping-cart"></i
                            ><a href="#" class="hidden-sm">Add to cart</a>
                          </p>
                          <p class="btn-details">
                            <i class="fa fa-list"></i
                            ><a href="#" class="hidden-sm">More details</a>
                          </p>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="col-item">
                      <div class="info">
                        <div class="row">
                          <div class="price col-md-6">
                            <h5>Product C</h5>
                            <h5 class="price-text-color">$7.58</h5>
                          </div>
                          <div class="rating hidden-sm col-md-6">
                            <i class="price-text-color fa fa-star"></i>
                            <i class="price-text-color fa fa-star"></i>
                          </div>
                        </div>
                      </div>

                      <div class="photo">
                        <img
                          src="http://www.prepbootstrap.com/Content/images/template/productslider/product_003.jpg"
                          class="img-responsive"
                          alt="a"
                        />
                      </div>
                      <div class="info">
                        <div class="separator clear-left">
                          <p class="btn-add">
                            <i class="fa fa-shopping-cart"></i
                            ><a href="#" class="hidden-sm">Add to cart</a>
                          </p>
                          <p class="btn-details">
                            <i class="fa fa-list"></i
                            ><a href="#" class="hidden-sm">More details</a>
                          </p>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="col-item">
                      <div class="info">
                        <div class="row">
                          <div class="price col-md-6">
                            <h5>Another product</h5>
                            <h5 class="price-text-color">$3.75</h5>
                          </div>
                          <div class="rating hidden-sm col-md-6">
                            <i class="price-text-color fa fa-star"></i>
                            <i class="price-text-color fa fa-star"></i>
                            <i class="price-text-color fa fa-star"></i>
                            <i class="price-text-color fa fa-star"></i>
                          </div>
                        </div>
                      </div>

                      <div class="photo">
                        <img
                          src="http://www.prepbootstrap.com/Content/images/template/productslider/product_001.jpg"
                          class="img-responsive"
                          alt="a"
                        />
                      </div>
                      <div class="info">
                        <div class="separator clear-left">
                          <p class="btn-add">
                            <i class="fa fa-shopping-cart"></i
                            ><a href="#" class="hidden-sm">Add to cart</a>
                          </p>
                          <p class="btn-details">
                            <i class="fa fa-list"></i
                            ><a href="#" class="hidden-sm">More details</a>
                          </p>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="row"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br />
      <div class="d-flex container mt-5">
        <h5 class="text-danger me-3">
          Produk Unggulan
        </h5>
        <button type="button" class="btn btn-light text-danger shadow ">
          Lebih Lanjut
        </button>
      </div>
      <div class="container">
        <div class="row">
          <div class="row">
            <div class="col-md-3">
              <!-- Controls -->
              <div class="controls pull-right hidden-xs">
                <a
                  class="left fa fa-chevron-left btn btn"
                  href="#carousel-example"
                  data-slide="prev"
                ></a
                ><a
                  class="right fa fa-chevron-right btn"
                  href="#carousel-example"
                  data-slide="next"
                ></a>
              </div>
            </div>
          </div>
          <div
            id="carousel-example"
            class="carousel slide hidden-xs"
            data-ride="carousel"
          >
            <!-- Wrapper for slides -->
            <div class="inner-carousel">
              <div class="item active">
                <div class="row">
                  <div class="col-sm-4">
                    <div class="col-item">
                      <div class="info">
                        <div class="row">
                          <div class="price col-md-6">
                            <h5>Product B</h5>
                            <h5 class="price-text-color">$9.99</h5>
                          </div>
                          <div class="rating hidden-sm col-md-6">
                            <i class="price-text-color fa fa-star"></i>
                            <i class="price-text-color fa fa-star"></i>
                            <i class="price-text-color fa fa-star"></i>
                          </div>
                        </div>
                      </div>

                      <div class="photo">
                        <img
                          src="http://www.prepbootstrap.com/Content/images/template/productslider/product_002.jpg"
                          class="img-responsive"
                          alt="a"
                        />
                      </div>
                      <div class="info">
                        <div class="separator clear-left">
                          <p class="btn-add">
                            <i class="fa fa-shopping-cart"></i
                            ><a href="#" class="hidden-sm">Add to cart</a>
                          </p>
                          <p class="btn-details">
                            <i class="fa fa-list"></i
                            ><a href="#" class="hidden-sm">More details</a>
                          </p>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="col-item">
                      <div class="info">
                        <div class="row">
                          <div class="price col-md-6">
                            <h5>Product C</h5>
                            <h5 class="price-text-color">$7.58</h5>
                          </div>
                          <div class="rating hidden-sm col-md-6">
                            <i class="price-text-color fa fa-star"></i>
                            <i class="price-text-color fa fa-star"></i>
                          </div>
                        </div>
                      </div>

                      <div class="photo">
                        <img
                          src="http://www.prepbootstrap.com/Content/images/template/productslider/product_003.jpg"
                          class="img-responsive"
                          alt="a"
                        />
                      </div>
                      <div class="info">
                        <div class="separator clear-left">
                          <p class="btn-add">
                            <i class="fa fa-shopping-cart"></i
                            ><a href="#" class="hidden-sm">Add to cart</a>
                          </p>
                          <p class="btn-details">
                            <i class="fa fa-list"></i
                            ><a href="#" class="hidden-sm">More details</a>
                          </p>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="col-item">
                      <div class="info">
                        <div class="row">
                          <div class="price col-md-6">
                            <h5>Another product</h5>
                            <h5 class="price-text-color">$3.75</h5>
                          </div>
                          <div class="rating hidden-sm col-md-6">
                            <i class="price-text-color fa fa-star"></i>
                            <i class="price-text-color fa fa-star"></i>
                            <i class="price-text-color fa fa-star"></i>
                            <i class="price-text-color fa fa-star"></i>
                          </div>
                        </div>
                      </div>

                      <div class="photo">
                        <img
                          src="http://www.prepbootstrap.com/Content/images/template/productslider/product_001.jpg"
                          class="img-responsive"
                          alt="a"
                        />
                      </div>
                      <div class="info">
                        <div class="separator clear-left">
                          <p class="btn-add">
                            <i class="fa fa-shopping-cart"></i
                            ><a href="#" class="hidden-sm">Add to cart</a>
                          </p>
                          <p class="btn-details">
                            <i class="fa fa-list"></i
                            ><a href="#" class="hidden-sm">More details</a>
                          </p>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="row"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
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
    </section>

    <Footer />
  </section>
</template>

<script>
import CardProduct from "../components/CardProduct.vue";
import Cart from "../components/Cart.vue";
export default {
  components: { CardProduct, Cart },
  data() {
    return {
      slide: 0,
      sliding: null
    };
  },
  methods: {
    onSlideStart(slide) {
      this.sliding = true;
    },
    onSlideEnd(slide) {
      this.sliding = false;
    }
  }
};
</script>
