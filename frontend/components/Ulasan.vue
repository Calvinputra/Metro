<template>
  <div style="background-color: white !important; font-family: 'Nunito Sans'">
    <div class="container" id="ulasan-webview">
      <div class="row">
        <div class="col-sm-1 text-center">
          <i class="fa fa-user-circle" style="font-size: 40px !important"></i>
        </div>
        <div class="col-sm-5 d-flex mb-3 p-0">
          <div>
            <h5>{{ review.transaction.customer_name }}</h5>
            <div>
              <i
                v-for="index in 5"
                :key="`rating-icon-${index}`"
                :class="
                  `${index <= review.rating ? 'fas' : 'far'} fa-star me-1`
                "
                style="font-size: 25px !important"
                aria-hidden="true"
              ></i>
            </div>
            <div>
              <h5>
                {{ review.review ? review.review : "Review tidak diisi" }}
              </h5>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container" id="ulasan-mobileview">
      <div class="row">
        <div class="col-sm-5 d-flex mb-3">
          <img
            class="img-fluid max-width:100% height:auto rounded"
            src="/img/spcBody.jpg"
            alt=""
          />
          <div>
            <h5 class="mb-0">{{ review.transaction.customer_name }}</h5>
            <div class="mb-1">
              <i
                v-for="index in 5"
                :key="`rating-icon-${index}`"
                :class="`${index <= review.rating ? 'fas' : 'far'} fa-star`"
                style="font-size: 30px !important"
                aria-hidden="true"
              ></i>
            </div>
            <div>
              <h6>
                {{ review.review ? review.review : "Review tidak diisi" }}
              </h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<style lang="css" scoped>
#ulasan-mobileview {
  display: none;
}

/* 0 - 991 px */
@media screen and (max-width: 500px) {
  #ulasan-webview {
    display: none;
  }

  #ulasan-mobileview {
    display: contents;
  }
}
</style>

<script>
export default {
  props: ["review"],
  data() {
    return {
      ASSET_URL: process.env.ASSET_URL
    };
  }
};
</script>
