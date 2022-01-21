<template>
  <!-- search -->
  <div id="search" class="nav-item  align-self-start mt-2">
    <div class="d-flex">
      <input
        class="form-control-sm"
        style="border-radius: 10px 0px 0px 10px;"
        type="search"
        placeholder="Cari Barang Di sini"
        aria-label="Search"
        name="s"
        v-model="query"
      />
      <button
        class="btn btn-outline-success mx-auto"
        style="background-color: #e5e5e5; width: 40px; border-radius: 0px 10px 10px 0px;"
        type="submit"
        @click="onSearch"
      >
        <i
          class="fas fa-search"
          style="font-size: 15px !important; color: black !important;"
        ></i>
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
