<template>
  <section style="font-family: 'Nunito Sans'">
    <section id="profile-webview" class="mt-3">
      <section>
        <div class="container">
          <div class="row">
            <div class="col-md-2">
              <AccountMenu :name="'register'" />
            </div>
            <div
              class="
                col-sm-9
                offset-md-1
                align-self-start
                mt-2
                row
                justify-content-between
              "
            >
              <div class="col-sm-12">
                <label class="mb-0"
                  ><h2 class="font-weight-bold">
                    Kebijakan Privasi
                  </h2></label
                >
              </div>
              <div class="mb-4">
                <hr
                  style="height: 10%; width: 100%; border-width: 0; color: red"
                  class="col-sm-12 mb-0 mt-0"
                />
                <p class="mb-">lorem ipsum</p>
              </div>
              <div>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras
                  sit amet dui non metus aliquet laoreet in mollis lorem.
                  Interdum et malesuada fames ac ante ipsum primis in faucibus.
                  Proin sollicitudin, dolor ut aliquet euismod, erat libero
                  congue dolor, ac tempus dolor erat vel quam. Nulla tincidunt
                  augue tincidunt, aliquet nisi eget, mattis velit. Mauris
                  tincidunt, justo ac eleifend faucibus, risus lacus porta odio,
                  eu iaculis enim orci a arcu. Ut mollis, lorem a finibus
                  convallis, nunc nisl congue orci, eu viverra elit libero vel
                  massa. Cras sit amet nibh et mauris luctus condimentum. Sed
                  quis eleifend lacus.
                </p>
                <p class="mt-3">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras
                  sit amet dui non metus aliquet laoreet in mollis lorem.
                  Interdum et malesuada fames ac ante ipsum primis in faucibus.
                  Proin sollicitudin, dolor ut aliquet euismod, erat libero
                  congue dolor, ac tempus dolor erat vel quam. Nulla tincidunt
                  augue tincidunt, aliquet nisi eget, mattis velit. Mauris
                  tincidunt, justo ac eleifend faucibus, risus lacus porta odio,
                  eu iaculis enim orci a arcu. Ut mollis, lorem a finibus
                  convallis, nunc nisl congue orci, eu viverra elit libero vel
                  massa. Cras sit amet nibh et mauris luctus condimentum. Sed
                  quis eleifend lacus:
                </p>
              </div>
              <div>
                <ul class="text-black mt-3 mb-3">
                  <li>1. asldkas</li>
                  <li>2. asdmaksmd</li>
                  <li>3. asdmaksmd</li>
                  <li>4. asdmaksmd</li>
                </ul>
              </div>
              <div>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras
                  sit amet dui non metus aliquet laoreet in mollis lorem.
                  Interdum et malesuada fames ac ante ipsum primis in faucibus.
                  Proin sollicitudin, dolor ut aliquet euismod, erat libero
                  congue dolor, ac tempus dolor erat vel quam. Nulla tincidunt
                  augue tincidunt,
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <client-only>
        <!-- include VueJS first -->
        <script src="https://unpkg.com/vue@latest"></script>

        <!-- use the latest vue-select release -->
        <script src="https://unpkg.com/vue-select@latest"></script>
        <link
          rel="stylesheet"
          href="https://unpkg.com/vue-select@latest/dist/vue-select.css"
        />

        <!-- or point to a specific vue-select release -->
        <script src="https://unpkg.com/vue-select@3.0.0"></script>
        <link
          rel="stylesheet"
          href="https://unpkg.com/vue-select@3.0.0/dist/vue-select.css"
        />
      </client-only>
    </section>
  </section>
</template>

<style lang="css" scoped>
#profile-mobileview {
  display: none;
}
/* 0 - 991 px */
@media screen and (max-width: 500px) {
  #profile_logo {
    display: none !important;
  }

  #profile-webview {
    display: none;
  }
  #profile-mobileview {
    display: grid;
  }
}
</style>
