<template>
  <div style="background-color: white !important; font-family: 'Nunito Sans'">
    <b-modal ref="modal-ulasan" id="modal-ulasan" title="Beri Ulasan">
      <h5 class="text-center fw-bold">Beri Rating Ulasan</h5>
      <div class="col-sm-12 mb-3 mt-3 text-center">
        <img
          class="img-fluid max-width:100% height:auto rounded"
          src="/img/spcBody.jpg"
          alt=""
        />
        <div>
          <div class="mt-2 mb-2">
            <p>
              <!-- {{
                typeof detail.selectedDetail !== "undefined"
                  ? detail.selectedDetail.product.code
                  : ""
              }} -->
              -
            </p>
            <!-- <p>{{ detail.selectedDetail.name }}</p> -->
          </div>
          <div class="">
            <template v-for="index in 5">
              <i
                class="me-2"
                :key="`rating-icon-${index}`"
                :class="`${rating >= index ? 'fas' : 'far'} fa-star`"
                @click="changeRatingHandler(index)"
                style="font-size: 40px !important"
                aria-hidden="true"
              ></i>
            </template>
          </div>
        </div>
      </div>
      <div class="">
        <p class="text-center">
          Hai {{ $auth.user.first_name }}, puas dengan barang yang kamu beli?
          Beri ulasan dan rekomendasikan ke pembeli lain ya!
        </p>
      </div>
      <div class="mt-4">
        <label for="review"
          >Beri Komentar<span style="color: red">*</span>:</label
        >
        <textarea
          class="form-control col-sm-12"
          id="review"
          name="review"
          v-model="review"
          rows="3"
          placeholder="Tulis ulasan di sini..."
        ></textarea>
      </div>
      <br />

      <div class="text-center">
        <button
          @click="onSubmitHandler"
          type="submit"
          class="
            btn
            text-danger
            btn-light btn-sm
            shadow
            rounded
            col-sm-4
            py-2
            px-2
          "
        >
          Kirim
        </button>
      </div>
    </b-modal>
  </div>
</template>

<script>
export default {
  props: ["detail"],
  data() {
    return {
      ASSET_URL: process.env.ASSET_URL,
      review: "",
      rating: 0
    };
  },
  methods: {
    async onSubmitHandler() {
      let data = {
        rating: this.rating,
        c_review: this.review,
        transaction_id: this.detail.selectedDetail.transaction_id,
        product_id: this.detail.selectedDetail.product_id
      };
      //console.log(data);
      let response = await this.$axios.$post(
        process.env.API_URL + "/api/reviews",
        data
      );
      if (response.success) {
        this.$toast.success("Successfully give a rating", {
          theme: "bubble",
          position: "bottom-right",
          duration: 5000
        });
        await this.$nuxt.refresh();
        this.$refs["modal-ulasan"].hide();
      } else {
        let err = response.message;
        Object.keys(err).forEach((key, error) => {
          Object.keys(err[key]).forEach((key2, e) => {
            this.$toast.error(err[key][key2], {
              theme: "bubble",
              position: "bottom-right",
              duration: 5000
            });
          });
        });
      }
    },
    changeRatingHandler(value) {
      this.rating = value;
      console.log(this.rating);
    }
  }
};
</script>
