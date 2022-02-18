<template>
  <!-- search -->
  <div
    id="search"
    class="nav-item col-sm-8 align-self-start mt-4"
    style="font-family: 'Nunito Sans'"
  >
    <div class="d-flex">
      <input
        class="form-control"
        style="border-radius: 10px 0px 0px 10px"
        type="search"
        placeholder="Cari Barang Di sini"
        aria-label="Search"
        name="s"
        v-model="query"
        v-on:keyup.enter="onSearch"
      />
      <button
        class="btn btn-outline-success mx-auto"
        style="
          background-color: #e5e5e5;
          border-radius: 0px 10px 10px 0px;
          width: 40px;
        "
        type="submit"
        @click="onSearch"
      >
        <i
          class="fas fa-search"
          style="font-size: 15px !important; color: black !important"
        ></i>
      </button>
    </div>
    <!-- kategory -->
    <div id="kategory" class="nav-item col-sm-12 align-self-end">
      <ul
        class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll"
        style="--bs-scroll-height: 100px"
      >
        <li
          class="nav-item col justify-content-center d-flex"
          v-for="menu_item in data.items"
          :key="menu_item.id"
        >
          <nuxt-link
            class="nav-link active text-danger"
            aria-current="page"
            :target="menu_item.target"
            :to="menu_item.url"
            >{{ menu_item.title }}</nuxt-link
          >
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  props: ["data"],
  data() {
    return {
      query: "",
    };
  },
  methods: {
    onSearch() {
      this.$router.push({ path: "/products", query: { s: this.query } });
    },
  },
};
</script>
