require("dotenv").config();
export default {
  // Global page headers: https://go.nuxtjs.dev/config-head
  head: {
    title: "admin",
    meta: [
      { charset: "utf-8" },
      {
        name: "viewport",
        content: "width=device-width, initial-scale=1, shrink-to-fit=no",
      },
      { hid: "description", name: "description", content: "" },
      { name: "format-detection", content: "telephone=no" },
    ],
    link: [
      { rel: "icon", href: "/favicon.ico" },
      { rel: "stylesheet", href: "/css/font-awesome/webfonts/all.css" },
      { rel: "stylesheet", href: "/css/default.css" },
    ],
  },

  // Global CSS: https://go.nuxtjs.dev/config-css
  css: ["@/assets/css/bootstrap.min.css", "vue-select/dist/vue-select.css"],
  js: ["@/assets/js/bootstrap.min.js"],

  // Plugins to run before rendering page: https://go.nuxtjs.dev/config-plugins
  plugins: [{ src: "~/plugins/localStorage.js",ssr:false }],

  // Auto import components: https://go.nuxtjs.dev/config-components
  components: true,

  // Modules for dev and build (recommended): https://go.nuxtjs.dev/config-modules
  buildModules: [],

  // Modules: https://go.nuxtjs.dev/config-modules
  modules: [
    // https://go.nuxtjs.dev/bootstrap
    "bootstrap-vue/nuxt",
    // https://go.nuxtjs.dev/axios
    "@nuxtjs/axios",
    // https://go.nuxtjs.dev/pwa
    "@nuxtjs/pwa",
    "@nuxtjs/dotenv",
    "@nuxtjs/auth-next",
    "@nuxtjs/toast",
    "nuxt-clipboard2",
  ],
  auth: {
    // Options
    strategies: {
      laravelSanctum: {
        provider: "laravel/sanctum",
        url: process.env.API_URL + "/api",
        user:{
          property:"data"
        },
        endpoints: {
          login: { url: "/login", method: "post" },
          logout: { url: "/logout", method: "post" },
          user: { url: "/user", method: "get", propertyName: false },
        },
        autoLogout: true,
        token: {
          property: "token",
          global: true,
          required: true,
          type: "Bearer",
        },
      },
    },
    localStorage: false,
  },
  // Axios module configuration: https://go.nuxtjs.dev/config-axios
  axios: {
    baseURL: process.env.API_URL,
    proxy: true,
    credentials: true,
  },

  // PWA module configuration: https://go.nuxtjs.dev/pwa
  pwa: {
    manifest: {
      lang: "en",
    },
  },

  // Build Configuration: https://go.nuxtjs.dev/config-build
  build: {},
  server: {
    port: process.env.PORT,
  },
};
