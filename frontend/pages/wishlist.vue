<template>
  <section>
    <Header />
    <Breadcrumb :links="breadcrumb" />
    <div class="container">
      <section>
        <h3 class="ml-5">Daftar Keinginan</h3>

        <hr
          style="height: 2px; border-width: 0; color: red"
          class="col-sm-11 mb-0 mt-0 ml-5"
        />
        <br />
        <div class="d-flex flex-row-reverse mr-5 pr-5">
          <div class="input-group md-form form-sm form-2 pl-0 col-sm-2">
            <input
              class="form-control my-0 py-1 lime-border"
              type="text"
              placeholder="Search"
              aria-label="Search"
            />
            <div class="input-group-append">
              <span class="input-group-text lime lighten-2" id="basic-text1">
                <mdbIcon icon="search" />
              </span>
            </div>
          </div>
        </div>
        <div class="container my-4" style="width:80%;">
          <div class="row">
            <Card-Product
              v-for="wishlist in wishlists"
              :key="wishlist.id"
              :data="wishlist.product"
              :url="'/products/' + wishlist.id"
            />
          </div>
        </div>
      </section>
    </div>
  </section>
</template>
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
          url: "/wishlist",
          name: "Daftar Keinginan",
          class: "my-2 breadcrumb-item active opacity-50",
        },
      ],
    };
  },
  async asyncData({ $axios }) {
    try {
      let wishlists = await $axios.$get(process.env.API_URL + "/api/wishlists");
      console.log(wishlists);
      return {
        wishlists: wishlists.data,
      };
    } catch (error) {
      console.log(error);
    }
  },
};
</script>
