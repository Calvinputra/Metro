<template>
  <!-- Footer -->
  <footer class="text-center text-lg-start bg-light text-muted">
    <!-- Section: Social media -->
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
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
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05)">
      © 2021 Copyright:
      <a class="text-reset fw-bold" href="https://mdbootstrap.com/"
        >MDBootstrap.com</a
      >
    </div>
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
  }
};
</script>
