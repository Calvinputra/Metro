<template>
  <section>
    <button
      @click="googleLoginHandler"
      class="btn btn-shadow p-2"
      style="
        background-color: white;
        box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important;
      "
    >
      <div class="d-flex">
        <div>
          <img style="width: 20px" src="\img\google.png" alt="" />
        </div>
        <div class="ps-2">
          <p>Masuk dengan google</p>
        </div>
      </div>
    </button>
  </section>
</template>

<script>
export default {
  methods: {
    googleLoginHandler() {
      window.location = process.env.API_URL + "/api/auth/google";
    },
  },
};
</script>
