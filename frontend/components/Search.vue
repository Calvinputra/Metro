<template>
  <!-- search -->
  <div id="search" class="nav-item col-sm-8 align-self-start mt-4">
    <div class="d-flex">
      <input
        class="form-control"
        type="search"
        placeholder="Cari Barang Di sini"
        aria-label="Search"
        name="s"
        v-model="query"
      />
      <button
        class="btn btn-outline-success mx-auto"
        style="background-color: #e5e5e5"
        type="submit"
        @click="onSearch"
      >
        <img src="/img/search.png" alt="" />
      </button>
    </div>
    <!-- kategory -->
    <div id="kategory" class="nav-item col-sm-12 align-self-end">
      <ul
        class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll"
        style="--bs-scroll-height: 100px"
      >
        <li
          class="nav-item col-2"
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