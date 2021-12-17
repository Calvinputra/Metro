<template>
  <div>
    <div class="container" id="ulasan-webview">
      <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-5 d-flex mb-3">
          <img
            class="img-fluid max-width:100% height:auto rounded"
            src="/img/spcBody.jpg"
            alt=""
          />
          <div>
            <h5>Calvin</h5>
            <div>
              <img
                class="img max-width:100% height:auto"
                src="/img/emojione_star.png"
                alt=""
              />
              <img
                class="img max-width:100% height:auto"
                src="/img/emojione_star.png"
                alt=""
              />
              <img
                class="img max-width:100% height:auto"
                src="/img/emojione_star.png"
                alt=""
              />
              <img
                class="img max-width:100% height:auto"
                src="/img/emojione_star.png"
                alt=""
              />
              <img
                class="img max-width:100% height:auto"
                src="/img/emojione_star.png"
                alt=""
              />
            </div>
            <div>
              <h4>kPskafkasfkaspfkaspfkasp</h4>
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
            <h5 class="mb-0">Calvinnn</h5>
            <div class="mb-1">
              <img
                class="img max-width:100%"
                height="25px"
                src="/img/emojione_star.png"
                alt=""
              />
              <img
                class="img max-width:100%"
                height="25px"
                src="/img/emojione_star.png"
                alt=""
              />
              <img
                class="img max-width:100%"
                height="25px"
                src="/img/emojione_star.png"
                alt=""
              />
            </div>
            <div>
              <h6>kPskafkasfkaspfkaspfkasp</h6>
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