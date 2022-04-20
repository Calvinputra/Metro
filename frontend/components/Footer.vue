<template>
  <!-- Footer -->
  <footer class="text-center text-lg-start bg-light text-muted">
    <!-- Section: Social media -->
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <!-- Website -->
    <section class="" id="footer-webview">
      <div class="container text-center text-md-start mt-5 pt-4">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div
            class="col-sm-4 mb-4 text-black"
            style="font-family: 'Nunito Sans'"
          >
            <!-- Content -->
            <nuxt-link to="/"
              ><img style="width: 50%" src="img/logo.png" class="mb-3" alt=""
            /></nuxt-link>
            <p>
              {{ settings.company_address }}
            </p>
            <div>
              <a
                :href="settings.company_tokopedia_link"
                target="_blank"
                class="text-reset"
              >
                <img
                  style="width: 40px; margin-top: -5px"
                  class=""
                  src="/img/tokopedia.png"
                  alt=""
                />
              </a>
              <a
                :href="'https://wa.me/' + settings.company_wa_phone"
                target="_blank"
              >
                <img
                  style="width: 40px; margin-top: -5px"
                  class="me-2"
                  src="/img/whatsapp_new.png"
                  alt=""
                />
              </a>
              <a
                :href="'mailto:' + settings.company_email"
                class="text-reset"
                style="font-size: 20px"
              >
                <i class="fab fa-google mt-1"></i>
              </a>
            </div>
          </div>

          <!-- Grid column -->

          <!-- Grid column -->
          <div
            class="col-sm-2 mb-4 text-black"
            style="font-family: 'Nunito Sans'"
          >
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Menu</h6>
            <p
              v-for="menu_item in footer_1.items"
              :key="menu_item.id"
              class="mb-1"
            >
              <nuxt-link
                :to="menu_item.url"
                :target="menu_item.target"
                class="text-reset my-0 text-decoration-none"
                >{{ menu_item.title }}
              </nuxt-link>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div
            class="col-sm-2 mb-4 text-black"
            style="font-family: 'Nunito Sans'"
          >
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Metro Jaya</h6>
            <p
              class="mb-1"
              v-for="menu_item in footer_2.items"
              :key="menu_item.id"
            >
              <nuxt-link
                :to="menu_item.url"
                :target="menu_item.target"
                class="text-reset text-decoration-none"
                >{{ menu_item.title }}
              </nuxt-link>
            </p>
            <p
              class="mb-1"
              v-for="menu_item in footer_3.items"
              :key="menu_item.id"
            >
              <nuxt-link
                :to="menu_item.url"
                :target="menu_item.target"
                class="text-reset text-decoration-none"
                >{{ menu_item.title }}
              </nuxt-link>
            </p>
          </div>
          <!-- Grid column -->
          <!-- Grid column -->
          <!-- Grid column -->
          <!-- Grid column -->
          <div
            class="col-sm-4 mb-4 text-black"
            style="font-family: 'Nunito Sans'"
          >
            <!-- Links -->
            <div class="ms-4">
              <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
              <p>
                <i class="fas fa-envelope me-3"></i>
                {{ settings.company_email }}
              </p>
              <p>
                <i class="fas fa-phone me-3"></i> {{ settings.company_phone }}
              </p>
              <p>
                <i class="fas fa-print me-3"></i> {{ settings.company_fax }}
              </p>
            </div>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <!-- mobile -->
    <section class="mt-2" id="footer-mobile">
      <div
        class="d-flex justify-content-around"
        id="footer-mobileview"
        style="z-index: 1"
      >
        <i
          @click="redirectTo('/')"
          class="fas fa-home"
          style="font-size: 30px !important; color: #1c2826 !important"
        ></i>
        <i
          @click="redirectTo('/wishlist')"
          class="fas fa-heart"
          style="font-size: 30px !important; color: #1c2826 !important"
        ></i>
        <nuxt-link style="text-decoration: none" to="/cart">
          <div
            class="d-flex justify-content-end"
            style="
              width: 32px;
              height: 32px;
              background-size: cover;
              background-repeat: no-repeat;
              background-image: url('/img/cart.png');
            "
          >
            <template>
              <i
                style="font-size: 12px !important; color: red !important"
                class="fa fa-solid fa-circle"
              ></i>
            </template>
          </div>
        </nuxt-link>
        <i
          @click="redirectTo('/profile')"
          class="fas fa-user"
          style="font-size: 30px !important; color: #1c2826 !important"
        ></i>
      </div>
    </section>
    <!-- Copyright -->
  </footer>
  <!-- Akhir Footer -->
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
  methods: {
    redirectTo(url) {
      this.$router.push(url);
    },
  },
};
</script>

<style lang="css" scoped>
#footer-mobile {
  display: none;
}
#footer-mobileview {
  display: none;
}
/* 0 - 991 px */
@media screen and (max-width: 500px) {
  #footer_logo {
    display: none !important;
  }

  #footer-webview {
    display: none;
  }

  #footer-mobile {
    display: contents;
  }

  #footer-mobileview {
    display: flex;
    background-color: #f8f9fa;
    box-shadow: 0px 0px 30px -10px rgba(0, 0, 0, 0.25) !important;
    position: fixed;
    padding: 2%;
    bottom: 0;
    width: 100%;
  }
}
</style>
