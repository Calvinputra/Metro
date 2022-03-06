<template>
  <section class="">
    <div class="row">
      <div>
        <h1>Akun</h1>
        <nuxt-link
          v-if="this.$auth.loggedIn == false"
          to="/register"
          style="text-decoration: none"
          :class="
            'text-black nav-custom ' +
            (name == 'register' ? 'nav-custom-active' : '')
          "
        >
          <p
            :class="name == 'register' ? 'py-2 ps-2' : 'ms-2'"
            style="border-radius: 5px !important"
          >
            Buat Akun
          </p>
        </nuxt-link>
        <nuxt-link
          v-if="this.$auth.loggedIn == false"
          to="/login"
          style="text-decoration: none"
          :class="
            'text-black nav-custom ' +
            (name == 'login' ? 'nav-custom-active' : '')
          "
        >
          <p
            :class="name == 'login' ? 'py-2 ps-2' : 'ms-2'"
            style="border-radius: 5px !important"
          >
            Masuk Akun
          </p>
        </nuxt-link>
        <nuxt-link
          v-if="this.$auth.loggedIn == false"
          to="/forgot_password"
          style="text-decoration: none"
          :class="
            'text-black nav-custom ' +
            (name == 'forgot' ? 'nav-custom-active' : '')
          "
        >
          <p
            :class="name == 'forgot' ? 'py-2 ps-2' : 'ms-2'"
            style="border-radius: 5px !important"
          >
            Lupa Password
          </p>
        </nuxt-link>
        <a style="text-decoration: none" class="text-black bg-danger">
          <div v-if="this.$auth.loggedIn == true">
            <b-dropdown
              id="dropdown-1"
              text="Akun Saya"
              variant="danger"
              class="m-md-2"
            >
              <b-dropdown-item to="/profile"
                >Akun Saya</b-dropdown-item
              >
              <b-dropdown-item to="/change_password"
                >Ubah Kata Sandi</b-dropdown-item
              >
              <b-dropdown-item to="/riwayat_pembelian"
                >Riwayat Pembelian</b-dropdown-item
              >
              <b-dropdown-item @click="logout">Keluar</b-dropdown-item>
            </b-dropdown>
          </div>
        </a>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  props: ["name"],
  methods: {
    async logout() {
      await this.$auth.logout();
      this.$toast.success("Berhasil Keluar", {
        theme: "bubble",
        position: "bottom-right",
        duration: 5000,
        // setTimeout(() => {
        //   window.location.reload(true);
        // }, 1000);
      });
    },
  },
};
</script>
