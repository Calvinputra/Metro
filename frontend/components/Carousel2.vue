<template>
  <section class="pb-5">
    <link
      href="https://fonts.googleapis.com/css?family=Nunito Sans"
      rel="stylesheet"
    />
    <div class="container">
      <div class="row">
        <div class="col-6"></div>
        <div class="col-6 text-right">
          <a
            class="btn btn-primary mb-3 mr-1"
            href="#carouselExampleIndicators2"
            role="button"
            data-slide="prev"
          >
            <i class="fa fa-arrow-left"></i>
          </a>
          <a
            class="btn btn-primary mb-3"
            href="#carouselExampleIndicators2"
            role="button"
            data-slide="next"
          >
            <i class="fa fa-arrow-right"></i>
          </a>
        </div>
        <div class="col-12">
          <div
            id="carouselExampleIndicators2"
            class="carousel slide"
            data-ride="carousel"
          >
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">
                  <Card-Product
                    :data="this.products[0]"
                    :url="'/products/' + this.products[0].id"
                  />
                  <Card-Product
                    :data="this.products[1]"
                    :url="'/products/' + this.products[1].id"
                  />
                  <Card-Product
                    :data="this.products[2]"
                    :url="'/products/' + this.products[2].id"
                  />
                </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                  <Card-Product
                    :data="this.products[0]"
                    :url="'/products/' + this.products[0].id"
                  />
                  <Card-Product
                    :data="this.products[1]"
                    :url="'/products/' + this.products[1].id"
                  />
                  <Card-Product
                    :data="this.products[2]"
                    :url="'/products/' + this.products[2].id"
                  />
                </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                  <Card-Product
                    :data="this.products[0]"
                    :url="'/products/' + this.products[0].id"
                  />
                  <Card-Product
                    :data="this.products[1]"
                    :url="'/products/' + this.products[1].id"
                  />
                  <Card-Product
                    :data="this.products[2]"
                    :url="'/products/' + this.products[2].id"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
<script>
export default {
  props: ["products"],
  created() {
    console.log(this.products);
  }
};
</script>
