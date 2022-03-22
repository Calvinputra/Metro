<template>
  <!-- search -->
  <div id="search" class="nav-item align-self-start text-fluid">
    <div class="d-flex">
      <input
        class="form-control"
        style="border-radius: 10px 0px 0px 10px; width: 100%"
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
          width: 50px;
          border-radius: 0px 10px 10px 0px;
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
    <div class=""></div>
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
      this.$router.push({
        path: "/products",
        query: {
          s: this.query,
          page: 1,
          paginate: this.$route.query.paginate,
          category: this.$route.query.category,
          order: this.$route.query.order,
          type: this.$route.query.type,
        },
      });
    },
  },
};
</script>
