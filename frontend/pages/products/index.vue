<template>
  <section style="margin-bottom: 100px">
    <!-- Website -->
    <section id="product-webview">
      <Breadcrumb :links="breadcrumb" />

      <div class="container">
        <div class="row">
          <div class="col-sm-2" style="font-family: 'Nunito Sans'">
            <section class="">
              <div class="row">
                <div>
                  <h1 style="font-family: 'Nunito Sans'">Kategory</h1>
                  <template v-if="!$route.query.category">
                    <div class="rounded" style="background-color: #841c26">
                      <a
                        @click="onCategoryClickHandler('')"
                        class="text-white"
                        style="text-decoration: none"
                        ><p class="py-2 ps-2 mb-2">Semua Kategori</p>
                      </a>
                    </div>
                  </template>
                  <template v-else>
                    <a
                      @click="onCategoryClickHandler('')"
                      style="text-decoration: none"
                      class="text-black"
                      ><p class="ms-2 mb-3">Semua Kategori</p>
                    </a>
                  </template>

                  <template v-for="category in categories">
                    <template v-if="$route.query.category == category.id">
                      <div
                        :key="category.id"
                        class="rounded"
                        style="background-color: #841c26"
                      >
                        <a
                          @click="onCategoryClickHandler(category.id)"
                          class="text-white"
                          style="text-decoration: none"
                          ><p class="py-2 ps-2 mb-2">
                            {{ category.name }}
                          </p>
                        </a>
                      </div>
                    </template>
                    <template v-else>
                      <a
                        :key="category.id"
                        @click="onCategoryClickHandler(category.id)"
                        style="text-decoration: none"
                        class="text-black"
                        ><p class="ms-2 mb-3">{{ category.name }}</p>
                      </a>
                    </template>
                  </template>
                </div>
              </div>
            </section>
          </div>
          <div
            class="col-sm-10 align-self-start mt-2 row justify-content-between"
          >
            <div class="col-sm-4">
              <h2 style="font-family: 'Nunito Sans'">{{ title }}</h2>
            </div>
            <div class="col-sm-8 mx-auto my-auto mb-3">
              <div class="row" style="float: right">
                <h5 class="col align-self-center">Urutkan:</h5>
                <div class="col btn">
                  <b-dropdown id="dropdown-1" :text="sort" class="m-md-2">
                    <b-dropdown-item
                      @click="
                        onDropDownSelectHandler('product_terbaru', 'desc')
                      "
                      >Produk terbaru</b-dropdown-item
                    >
                    <b-dropdown-item
                      @click="onDropDownSelectHandler('harga_terbesar', 'desc')"
                      >Harga Tertinggi</b-dropdown-item
                    >
                    <b-dropdown-item
                      @click="onDropDownSelectHandler('harga_terkecil', 'asc')"
                      >Harga Terendah</b-dropdown-item
                    >
                  </b-dropdown>
                  <div class="dropdown-menu">...</div>
                </div>
              </div>
            </div>
            <div>
              <div class="row justify-content-start">
                <Card-Product
                  v-for="product in products"
                  :key="product.id"
                  :data="product"
                  :url="'/products/' + product.id"
                />
                <!-- jika data kosong -->
                <template v-if="products && products.length == 0">
                  <div class="ms-5 mt-5">
                    <i class="fas fa-exclamation-triangle"></i>
                    Tidak ada produk pada Kategori ini, Silahkan coba lagi
                    beberapa saat kemudian.
                  </div>
                </template>
                <template v-else>
                  <div class="overflow-auto">
                    <b-pagination-nav
                      :link-gen="linkGen"
                      :number-of-pages="this.totalPage"
                      first-text="First"
                      prev-text="Prev"
                      next-text="Next"
                      last-text="Last"
                    ></b-pagination-nav>
                  </div>
                </template>
              </div>
            </div>
          </div>
        </div>
      </div>
      <span style="position: absolute; width: 100%"> </span>
    </section>

    <!-- Mobile -->
    <section id="product-mobileview">
      <div class="container">
        <div class="row">
          <div
            class="col-sm-10 align-self-start mt-2 row justify-content-between pr-0"
          >
            <div class="col-sm-4 mb-2">
              <h2>Kategory 1</h2>
            </div>
            <div class="col-sm-8 mx-auto my-auto">
              <div class="row">
                <h4 class="col-3 align-self-center">Urutkan:</h4>
                <div class="col-2 btn-group ms-0 ps-2 me-5">
                  <div class="col btn ml-3">
                    <b-dropdown id="dropdown-1" :text="sort" class="m-md-2">
                      <b-dropdown-item
                        @click="
                          onDropDownSelectHandler('product_terbaru', 'desc')
                        "
                        >Produk terbaru</b-dropdown-item
                      >
                      <b-dropdown-item
                        @click="
                          onDropDownSelectHandler('harga_terbesar', 'desc')
                        "
                        >Harga Tertinggi</b-dropdown-item
                      >
                      <b-dropdown-item
                        @click="
                          onDropDownSelectHandler('harga_terkecil', 'asc')
                        "
                        >Harga Terendah</b-dropdown-item
                      >
                    </b-dropdown>
                    <div class="dropdown-menu">...</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="mt-4">
              <div class="row justify-content-start">
                <div class="row pe-0 ps-3">
                  <Card-Product-Mobile
                    v-for="product in products"
                    :key="product.id"
                    :data="product"
                    :url="'/products/' + product.id"
                  />
                  <!-- jika data kosong -->
                  <template v-if="products.length == 0">
                    <div class="ms-5 mt-5">
                      <i class="fas fa-exclamation-triangle"></i>
                      Tidak ada produk pada Kategori ini, Silahkan coba lagi
                      beberapa saat kemudian.
                    </div>
                  </template>
                  <template v-else>
                    <div class="overflow-auto">
                      <b-pagination-nav
                        :link-gen="linkGen"
                        :number-of-pages="this.totalPage"
                        first-text="First"
                        prev-text="Prev"
                        next-text="Next"
                        last-text="Last"
                      ></b-pagination-nav>
                    </div>
                  </template>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <Footer2mobile />
    </section>
  </section>
</template>

<style lang="css" scoped>
#product-mobileview {
  display: none;
}
a {
  cursor: pointer;
}
/* 0 - 991 px */
@media screen and (max-width: 500px) {
  #product-webview {
    display: none;
  }

  #product-mobileview {
    display: contents;
  }
}
</style>

<script>
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
          url: "/products",
          name: "Produk",
          class: "my-2 breadcrumb-item active opacity-50",
        },
      ],
      products: [],
      sort: "",
    };
  },
  async asyncData({ $axios, query }) {
    try {
      let data = {
        s: query.s,
        page: query.page,
        paginate: query.paginate,
        category: query.category,
        order: query.order,
        type: query.type,
      };
      let products = await $axios.$get(process.env.API_URL + "/api/products", {
        params: data,
      });
      let links = [];
      for (let i = 1; i <= products.meta.last_page; i++) {
        links.push(i);
      }
      let categories = await $axios.$get(
        process.env.API_URL + "/api/categories"
      );
      return {
        products: products.data,
        links: links,
        totalPage: products.meta.last_page,
        title: products.title,
        categories: categories.data,
      };
    } catch (error) {
      console.log(error);
    }
  },
  methods: {
    linkGen(pageNum) {
      return {
        path: "/products?",
        query: {
          page: pageNum,
          s: this.$route.query.s,
          paginate: this.$route.query.paginate,
          category: this.$route.query.category,
          order: this.$route.query.order,
          type: this.$route.query.type,
        },
      };
    },
    getSortItem() {
      if (this.$route.query.order == "harga_terbesar") {
        this.sort = "Harga Tertinggi";
      }
      if (this.$route.query.order == "product_terbaru") {
        this.sort = "Produk Terbaru";
      }
      if (this.$route.query.order == "harga_terkecil") {
        this.sort = "Harga Terendah";
      }
      //console.log(this.sort);
      this.$nuxt.refresh();
    },
    pageGen(pageNum) {
      return this.links[pageNum - 1].slice(1);
    },

    onCategoryClickHandler(id) {
      this.$router.push({
        path: "/products",
        query: {
          s: this.$route.query.s,
          page: 1,
          paginate: this.$route.query.paginate,
          category: id,
          order: this.$route.query.order,
          type: this.$route.query.type,
        },
      });
      this.$nuxt.refresh();
    },

    onDropDownSelectHandler(order, type = "asc") {
      this.$router.push({
        path: "/products",
        query: {
          s: this.$route.query.s,
          page: 1,
          paginate: this.$route.query.paginate,
          category: this.$route.query.category,
          order: order,
          type: type,
        },
      });
    },
  },
  mounted() {
    if (this.sort == "" || !this.$route.query.order) {
      this.sort = "Product Terbaru";
    }
    this.getSortItem();
  },
  watch: {
    "$route.query.order"() {
      this.getSortItem();
    },
    "$route.query.category"() {
      this.getSortItem();
    },
    "$route.query.page"() {
      this.getSortItem();
    },
    sort() {
      if (this.sort == "" || !this.$route.query.order) {
        this.sort = "Product Terbaru";
      }
      this.getSortItem();
    },
  },
  watchQuery: ["s", "page", "paginate", "category", "order", "type"],
};
</script>
