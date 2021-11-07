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
          href="/forgotpassword"
          style="text-decoration: none"
          :class="
            'text-black nav-custom ' +
            (name == 'forgot' ? 'nav-custom-active' : '')
          "
        >
          <p :class="name == 'forgot' ? 'py-2 ps-2' : 'ms-2'">Lupa Password</p>
        </a>
        <a href="" style="text-decoration: none" class="text-black nav-custom">
          <p class="ms-2">Akun Saya</p>
        </a>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  props: ["name"],
};
</script>