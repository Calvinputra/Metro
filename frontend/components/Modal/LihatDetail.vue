<template>
  <div class="d-flex">
    <b-modal id="lihat-detail-modal" size="sm" title="Rating">
      <div class="d-flex my-2">
        <img
          class="img-thumbnail max-width:100% height:auto"
          src="/img/emojione_star.png"
          style="border: 0"
          alt=""
        />
        <h3 class="my-auto mx-2">
          5
          <span class="ulasan">{{ review_5 }} Ulasan</span>
        </h3>
      </div>
      <div class="d-flex my-2">
        <img
          class="img-thumbnail max-width:100% height:auto"
          src="/img/emojione_star.png"
          style="border: 0"
          alt=""
        />
        <h3 class="my-auto mx-2">
          4
          <span class="ulasan">{{ review_4 }} Ulasan</span>
        </h3>
      </div>
      <div class="d-flex my-2">
        <img
          class="img-thumbnail max-width:100% height:auto"
          src="/img/emojione_star.png"
          style="border: 0"
          alt=""
        />
        <h3 class="my-auto mx-2">
          3
          <span class="ulasan">{{ review_3 }} Ulasan</span>
        </h3>
      </div>
      <div class="d-flex my-2">
        <img
          class="img-thumbnail max-width:100% height:auto"
          src="/img/emojione_star.png"
          style="border: 0"
          alt=""
        />
        <h3 class="my-auto mx-2">
          2
          <span class="ulasan">{{ review_2 }} Ulasan</span>
        </h3>
      </div>
      <div class="d-flex my-2">
        <img
          class="img-thumbnail max-width:100% height:auto"
          src="/img/emojione_star.png"
          style="border: 0"
          alt=""
        />
        <h3 class="my-auto mx-2">
          1
          <span class="ulasan">{{ review_1 }} Ulasan</span>
        </h3>
      </div>
    </b-modal>
  </div>
</template>

<style scoped>
.ulasan {
  font-size: 20px;
}
</style>

<script>
export default {
  props: ["reviews"],
  data() {
    return {
      review_1: 0,
      review_2: 0,
      review_3: 0,
      review_4: 0,
      review_5: 0,
    };
  },
  mounted() {
    if (this.reviews) {
      this.review_1 = this.reviews.filter((review) => {
        return review.rating == 1;
      }).length;
      this.review_2 = this.reviews.filter((review) => {
        return review.rating == 2;
      }).length;
      this.review_3 = this.reviews.filter((review) => {
        return review.rating == 3;
      }).length;
      this.review_4 = this.reviews.filter((review) => {
        return review.rating == 4;
      }).length;
      this.review_5 = this.reviews.filter((review) => {
        return review.rating == 5;
      }).length;
    }
  },
};
</script>
