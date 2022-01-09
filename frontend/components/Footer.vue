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
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <a href=""><img src="img/audiblelogo.png" class="mb-3" alt=""/></a>
            <p>
              Jl.Raya kb.Jeruk, No.27, RT 2/RW 9, Kb. Jeruk Kec Kb.Jeruk, Kota
              Jakarta Barat, Daerah Khusus Ibukota Jakarta 11520
            </p>
            <div>
              <a href="" class="me-4 text-reset">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="" class="me-4 text-reset">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="" class="me-4 text-reset">
                <i class="fab fa-google"></i>
              </a>
              <a href="" class="me-4 text-reset">
                <i class="fab fa-instagram"></i>
              </a>
            </div>
            <p class="mb-2" style="font-size: 90%">
              Dapatkan diskon sebesar
              <span style="color: red">10%</span> dengan mengirim email kalian
              dibawah!
            </p>
            <div id="search" class="nav-item align-self-start mt-1">
              <form class="d-flex">
                <input
                  class="form-control"
                  type="search"
                  placeholder="Email"
                  aria-label="Search"
                />
                <button
                  class="btn btn-outline-success mx-2"
                  style="background-color: #e5e5e5"
                  type="submit"
                >
                  <p style="color: red">Kirim</p>
                </button>
              </form>
            </div>
          </div>

          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Menu</h6>
            <p
              v-for="menu_item in footer_1.items"
              :key="menu_item.id"
              class="mb-0"
            >
              <a
                :href="menu_item.url"
                :target="menu_item.target"
                class="text-reset my-0"
                >{{ menu_item.title }}</a
              >
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Metro Jaya</h6>
            <p
              class="mb-0"
              v-for="menu_item in footer_2.items"
              :key="menu_item.id"
            >
              <a
                :href="menu_item.url"
                :target="menu_item.target"
                class="text-reset"
                >{{ menu_item.title }}</a
              >
            </p>
          </div>
          <!-- Grid column -->
          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Metro Jaya</h6>
            <p
              class="mb-0"
              v-for="menu_item in footer_3.items"
              :key="menu_item.id"
            >
              <a
                :href="menu_item.url"
                :target="menu_item.target"
                class="text-reset"
                >{{ menu_item.title }}</a
              >
            </p>
          </div>
          <!-- Grid column -->
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              info@example.com
            </p>
            <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
            <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
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
      <div class="d-flex justify-content-around" id="footer-mobileview">
        <i
          @click="redirectTo('/home')"
          class="fas fa-home"
          style="font-size: 30px !important; color: #c63442 !important"
        ></i>
        <i
          @click="redirectTo('/wishlist')"
          class="fas fa-heart"
          style="font-size: 30px !important; color: #c63442 !important"
        ></i>
        <i
          @click="redirectTo('/cart')"
          class="fas fa-shopping-cart"
          style="font-size: 30px !important; color: #c63442 !important"
        ></i>
        <i
          class="fas fa-user"
          style="font-size: 30px !important; color: #c63442 !important"
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
  created() {
    this.$store.dispatch("fetchFooter1");
    this.$store.dispatch("fetchFooter2");
    this.$store.dispatch("fetchFooter3");
  },
  computed: {
    ...mapGetters({
      footer_1: "getFooter1",
      footer_2: "getFooter2",
      footer_3: "getFooter3"
    })
  },
  methods: {
    redirectTo(url) {
      this.$router.push(url);
    }
  }
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
    background-color: lightgray;
    position: static;
    padding: 2%;
    bottom: 0;
    width: 100%;
  }
}
</style>
