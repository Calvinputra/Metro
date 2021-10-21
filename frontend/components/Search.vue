<template>
  <!-- search -->
  <div id="search" class="nav-item col-sm-8 align-self-start mt-4">
    <form class="d-flex" action="/products" method="get">
      <input
        class="form-control"
        type="search"
        placeholder="Cari Barang Di sini"
        aria-label="Search"
        name="s"
      />
      <button
        class="btn btn-outline-success mx-auto"
        style="background-color: #e5e5e5"
        type="submit"
      >
        <img src="/img/search.png" alt="" />
      </button>
    </form>
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
          <a
            class="nav-link active text-danger"
            aria-current="page"
            :target="menu_item.target"
            :href="menu_item.url"
            >{{ menu_item.title }}</a
          >
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
    props: ["data"],
}
</script>