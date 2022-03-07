<template>
  <section>
    <section id="about-webview">
      <Breadcrumb :links="breadcrumb" />
      <section>
        <div class="row">
          <div class="col-sm-3"></div>
          <div class="text-center col-sm-6">
            <h4>Metro Jaya</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sit
              amet dui non metus aliquet laoreet in mollis lorem. Interdum et
              malesuada fames ac ante ipsum primis in faucibus. Proin
              sollicitudin, dolor ut aliquet euismod, erat libero congue dolor,
              ac tempus dolor erat vel quam. Nulla tincidunt augue tincidunt,
              aliquet nisi eget, mattis velit. Mauris tincidunt, justo ac
              eleifend faucibus, risus lacus porta odio, eu iaculis enim orci a
              arcu. Ut mollis, lorem a finibus convallis, nunc nisl congue orci,
              eu viverra elit libero vel massa. Cras sit amet nibh et mauris
              luctus condimentum. Sed quis eleifend lacus.
            </p>
          </div>
          <div class="col-sm-3"></div>
        </div>
        <br />
        <div class="text-center">
          <h4 class="text-center">Road Map</h4>
          <img style="width: 300px" src="/img/metro.png" alt="" />
          <br />

          <h4 class="text-center">Kelebihan Metro Jaya</h4>
        </div>
        <div class="row">
          <div class="col-sm-3">
            <img style="width: 250px" src="/img/metro.png" alt="" />
          </div>
          <div class="col-sm-3">
            <img style="width: 250px" src="/img/metro.png" alt="" />
          </div>
          <div class="col-sm-3">
            <img style="width: 250px" src="/img/metro.png" alt="" />
          </div>
          <div class="col-sm-3">
            <img style="width: 250px" src="/img/metro.png" alt="" />
          </div>
        </div>
        <div class="row">
          <div class="col-sm-3"></div>

          <div class="text-center col-sm-6">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sit
              amet dui non metus aliquet laoreet in mollis lorem. Interdum et
              malesuada fames ac ante ipsum primis in faucibus. Proin
              sollicitudin, dolor ut aliquet euismod, erat libero congue dolor,
              ac tempus dolor erat vel quam. Nulla tincidunt augue tincidunt,
              aliquet nisi eget, mattis velit. Mauris tincidunt, justo ac
              eleifend faucibus, risus lacus porta odio, eu iaculis enim orci a
              arcu. Ut mollis, lorem a finibus convallis, nunc nisl congue orci,
              eu viverra elit libero vel massa. Cras sit amet nibh et mauris
              luctus condimentum. Sed quis eleifend lacus.
            </p>
          </div>
          <div class="col-sm-3"></div>
        </div>
        <br />
        <div class="text-center">
          <h4>Lokasi Kami</h4>
          <img style="width: 300px" src="/img/metro.png" alt="" />
        </div>
      </section>
    </section>
    <section id="about-mobileview" style="font-size: 80%">
      <Breadcrumb :links="breadcrumb" />
      <section>
        <div class="row">
          <div class="col-2"></div>
          <div class="text-center col-8">
            <h4>Metro Jaya</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sit
              amet dui non metus aliquet laoreet in mollis lorem. Interdum et
              malesuada fames ac ante ipsum primis in faucibus. Proin
              sollicitudin, dolor ut aliquet euismod, erat libero congue dolor,
              ac tempus dolor erat vel quam. Nulla tincidunt augue tincidunt,
              aliquet nisi eget, mattis velit. Mauris tincidunt, justo ac
              eleifend faucibus, risus lacus porta odio, eu iaculis enim orci a
              arcu. Ut mollis, lorem a finibus convallis, nunc nisl congue orci,
              eu viverra elit libero vel massa. Cras sit amet nibh et mauris
              luctus condimentum. Sed quis eleifend lacus.
            </p>
          </div>
          <div class="col-2"></div>
        </div>
        <br />
        <div class="text-center">
          <h4 class="text-center">Road Map</h4>
          <img style="width: 300px" src="/img/metro.png" alt="" />
          <br />

          <h4 class="text-center">Kelebihan Metro Jaya</h4>
        </div>
        <div class="row">
          <div class="col-3">
            <img style="width: 80px" src="/img/metro.png" alt="" />
          </div>
          <div class="col-3">
            <img style="width: 80px" src="/img/metro.png" alt="" />
          </div>
          <div class="col-3">
            <img style="width: 80px" src="/img/metro.png" alt="" />
          </div>
          <div class="col-3">
            <img style="width: 80px" src="/img/metro.png" alt="" />
          </div>
        </div>
        <div class="row">
          <div class="col-2"></div>

          <div class="text-center col-8">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sit
              amet dui non metus aliquet laoreet in mollis lorem. Interdum et
              malesuada fames ac ante ipsum primis in faucibus. Proin
              sollicitudin, dolor ut aliquet euismod, erat libero congue dolor,
              ac tempus dolor erat vel quam. Nulla tincidunt augue tincidunt,
              aliquet nisi eget, mattis velit. Mauris tincidunt, justo ac
              eleifend faucibus, risus lacus porta odio, eu iaculis enim orci a
              arcu. Ut mollis, lorem a finibus convallis, nunc nisl congue orci,
              eu viverra elit libero vel massa. Cras sit amet nibh et mauris
              luctus condimentum. Sed quis eleifend lacus.
            </p>
          </div>
          <div class="col-3"></div>
        </div>
        <br />
        <div class="text-center">
          <h4>Lokasi Kami</h4>
          <img style="width: 200px" src="/img/metro.png" alt="" />
        </div>
      </section>
      <Footer2mobile />
    </section>
  </section>
</template>

<style lang="css" scoped>
#about-mobile {
  display: none;
}
#about-mobileview {
  display: none;
}
/* 0 - 991 px */
@media screen and (max-width: 500px) {
  #about_logo {
    display: none !important;
  }

  #about-webview {
    display: none;
  }

  #about-mobile {
    display: contents;
  }

  #about-mobileview {
    display: grid;
  }
}
</style>
