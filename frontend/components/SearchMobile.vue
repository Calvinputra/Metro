<template>
  <!-- search -->
  <div id="search" class="nav-item  align-self-start mt-2 mr-5">
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
    <div class=""></div>
  </div>
</template>

<script>
export default {
  props: ["data"],
  data() {
    return {
      query: ""
    };
  },
  methods: {
    onSearch() {
      this.$router.push({ path: "/products", query: { s: this.query } });
    }
  }
};
</script>
