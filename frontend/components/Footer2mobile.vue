<template>
  <section class="bg-light mt-4 text-center">
    <img style="width: 300px" src="/img/metro.png" alt="" />
    <div class="text-center ms-4 me-4" style="">
      <p style="" class="">
        {{ settings.company_address }}
      </p>
    </div>
    <div class="d-flex justify-content-center mt-3" style="flex-wrap: wrap">
      <template v-for="(menu_item, index) in footer_1.items">
        <nuxt-link
          :key="menu_item.id"
          :to="menu_item.url"
          class="text-danger p-2"
          href=""
          >{{ menu_item.title }}</nuxt-link
        >
        <template v-if="index != footer_1.items.length - 1">
          <p class="text-danger p-2" :key="'p2' + index">|</p>
        </template>
      </template>
    </div>
    <div></div>
    <div class="d-flex p-2 justify-content-center">
      <div class="pe-3 ps-3">
        <img
          style="width: 40px;background-color: #f3f3f3;box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important;
          "
          src="/img/tokopedia.png"
          alt=""
        />
      </div>
      <div class="pe-3">
        <img
          style="width: 40px;background-color: #f3f3f3;box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important;
          "
          src="/img/tokopedia.png"
          alt=""
        />
      </div>
      <div class="pe-3">
        <img
          style="width: 40px;background-color: #f3f3f3;box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important;
          "
          src="/img/tokopedia.png"
          alt=""
        />
      </div>
      <div class="pe-3">
        <img
          style="width: 40px;background-color: #f3f3f3;box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important;
          "
          src="/img/tokopedia.png"
          alt=""
        />
      </div>
    </div>
    <p class="text-center pe-3 ps-3">
      Dapatkan diskon <span class="text-danger">10%</span> dengan mengirim email
      kalian dibawah!
    </p>
    <div id="search" class="nav-item col-sm-8 align-self-start mt-4">
      <div class="d-flex">
        <input
          class="form-control pe-2 me-1"
          style="border-radius: 10px 10px 10px 10px"
          type="search"
          placeholder="Email"
          aria-label="Search"
          name="s"
        />
        <button
          class="rounded"
          style="box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important"
        >
          <p class="text-danger">Kirim</p>
        </button>
      </div>
    </div>
    <div class="d-flex justify-content-center mb-5" style="flex-wrap: wrap">
      <template v-for="(menu_item, index) in footer_3.items">
        <nuxt-link
          :key="menu_item.id"
          :to="menu_item.url"
          class="text-black p-2"
          href=""
          >{{ menu_item.title }}</nuxt-link
        >
        <template v-if="index != footer_3.items.length - 1">
          <p class="p-2" :key="'p2' + index">|</p>
        </template>
      </template>
    </div>
  </section>
</template>
<script>
import { mapGetters } from "vuex";
export default {
  computed: {
    ...mapGetters({
      footer_1: "getFooter1",
      footer_2: "getFooter2",
      footer_3: "getFooter3",
      settings: "getSetting"
    })
  }
};
</script>
