<template>
  <section class="bg-light mt-4 text-center">
    <img
      style="width: 200px"
      src="/img/logo.png"
      alt=""
      class="m-5 px-3 py-2"
    />
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
    <div class="row py-2 justify-content-center mb-3 mt-3 m-0">
      <div class="col-3">
        <a
          :href="settings.company_tokopedia_link"
          target="_blank"
          class="text-reset"
        >
          <img
            style="
              width: 40px;
              background-color: white;
              box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important;
            "
            src="/img/tokopedia.png"
            alt=""
          />
        </a>
      </div>
      <div class="col-3">
        <a :href="'https://wa.me/' + settings.company_wa_phone" target="_blank">
          <img
            style="
              width: 40px;
              background-color: white;
              box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important;
            "
            src="/img/whatsapp_new.png"
            alt=""
          />
        </a>
      </div>
      <div class="col-3 d-flex justify-content-center">
        <div
          class="d-flex align-items-center justify-content-center"
          style="
            width: 42px;
            height: 42px;
            background-color: white;
            box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important;
          "
        >
          <a :href="'mailto:' + settings.company_email" class="text-reset">
            <i
              class="fab fa-google"
              style="font-size: 18px; margin-left: 0px"
            ></i>
          </a>
        </div>
      </div>
    </div>

    <div class="d-flex justify-content-center" style="flex-wrap: wrap">
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
      settings: "getSetting",
    }),
  },
};
</script>
