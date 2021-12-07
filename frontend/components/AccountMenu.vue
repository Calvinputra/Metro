<template>
  <section class="">
    <div class="row">
      <div>
        <h1>Akun</h1>
        <a
          v-if="this.$auth.loggedIn == false"
          href="/register"
          style="text-decoration: none"
          :class="
            'text-black nav-custom ' +
              (name == 'register' ? 'nav-custom-active' : '')
          "
        >
          <p :class="name == 'register' ? 'py-2 ps-2' : 'ms-2'">Buat Akun</p>
        </a>
        <a
          v-if="this.$auth.loggedIn == false"
          href="/login"
          style="text-decoration: none"
          :class="
            'text-black nav-custom ' +
              (name == 'login' ? 'nav-custom-active' : '')
          "
        >
          <p :class="name == 'login' ? 'py-2 ps-2' : 'ms-2'">Masuk Akun</p>
        </a>
        <a
          v-if="this.$auth.loggedIn == false"
          href="/forgot_password"
          style="text-decoration: none"
          :class="
            'text-black nav-custom ' +
              (name == 'forgot' ? 'nav-custom-active' : '')
          "
        >
          <p :class="name == 'forgot' ? 'py-2 ps-2' : 'ms-2'">Lupa Password</p>
        </a>
        <a href="" style="text-decoration: none" class="text-black bg-danger">
          <div>
            <b-dropdown
              id="dropdown-1"
              text="Akun Saya"
              variant="danger"
              class="m-md-2"
            >
              <b-dropdown-item href="/change_password"
                >Ubah Kata Sandi</b-dropdown-item
              >
              <b-dropdown-item href="/riwayat_pembelian"
                >Riwayat Pembelian</b-dropdown-item
              >
              <b-dropdown-item href="/undang">Undang Teman</b-dropdown-item>
              <b-dropdown-item>Keluar</b-dropdown-item>
            </b-dropdown>
          </div>
        </a>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  props: ["name"]
};
</script>
