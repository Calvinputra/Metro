<template>
  <div class="d-flex">
    <b-modal id="lihat-detail-modal" size="sm" title="Rating">
      <div class="row my-2">
        <div class="col-sm-2 p-0 ms-3">
          <div class="d-flex">
            <img
              class="img-thumbnail"
              src="/img/emojione_star.png"
              style="border: 0; width: 25px; height: 25px"
              alt=""
            />
            <h6 class="pt-1">5</h6>
          </div>
        </div>
        <div class="col-sm-5 p-0 m-0">
          <ProgressBar :progress="this.review_5*100/this.total" />
        </div>
        <div class="col-sm-3 p-0 text-end">
          <span style="font-size: 14px" class="ulasan"
            >{{ review_5 }} Ulasan</span
          >
        </div>
      </div>
      <div class="row my-2">
        <div class="col-sm-2 p-0 ms-3">
          <div class="d-flex">
            <img
              class="img-thumbnail"
              src="/img/emojione_star.png"
              style="border: 0; width: 25px; height: 25px"
              alt=""
            />
            <h6 class="pt-1">4</h6>
          </div>
        </div>
        <div class="col-sm-5 p-0 m-0">
          <ProgressBar  :progress="this.review_4*100/this.total" />
        </div>
        <div class="col-sm-3 p-0 text-end">
          <span style="font-size: 14px" class="ulasan"
            >{{ review_4 }} Ulasan</span
          >
        </div>
      </div>
      <div class="row my-2">
        <div class="col-sm-2 p-0 ms-3">
          <div class="d-flex">
            <img
              class="img-thumbnail"
              src="/img/emojione_star.png"
              style="border: 0; width: 25px; height: 25px"
              alt=""
            />
            <h6 class="pt-1">3</h6>
          </div>
        </div>
        <div class="col-sm-5 p-0 m-0">
          <ProgressBar  :progress="this.review_3*100/this.total" />
        </div>
        <div class="col-sm-3 p-0 text-end">
          <span style="font-size: 14px" class="ulasan"
            >{{ review_3 }} Ulasan</span
          >
        </div>
      </div>
      <div class="row my-2">
        <div class="col-sm-2 p-0 ms-3">
          <div class="d-flex">
            <img
              class="img-thumbnail"
              src="/img/emojione_star.png"
              style="border: 0; width: 25px; height: 25px"
              alt=""
            />
            <h6 class="pt-1">2</h6>
          </div>
        </div>
        <div class="col-sm-5 p-0 m-0">
          <ProgressBar  :progress="this.review_2*100/this.total" />
        </div>
        <div class="col-sm-3 p-0 text-end">
          <span style="font-size: 14px" class="ulasan"
            >{{ review_2 }} Ulasan</span
          >
        </div>
      </div>
      <div class="row my-2">
        <div class="col-sm-2 p-0 ms-3">
          <div class="d-flex">
            <img
              class="img-thumbnail"
              src="/img/emojione_star.png"
              style="border: 0; width: 25px; height: 25px"
              alt=""
            />
            <h6 class="pt-1">1</h6>
          </div>
        </div>
        <div class="col-sm-5 p-0 m-0">
          <ProgressBar :progress="this.review_1*100/this.total" />
        </div>
        <div class="col-sm-3 p-0 text-end">
          <span style="font-size: 14px" class="ulasan"
            >{{ review_1 }} Ulasan</span
          >
        </div>
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
      total:0,
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

      this.total = this.review_1+this.review_2+this.review_3+this.review_4+this.review_5;
      if(this.total==0){
        this.total=1;
      }
    }
  },
};
</script>
