export const state = () => ({
  //initialize data
  header: {
    id: 1,
    title: "Header Menu",
    createdAt: null,
    updatedAt: null,
    menu_items: [
      {
        id: 1,
        title: "Default Menu",
        url: "#",
        target: "_self",
        icon_class: null,
        color: null,
        order: 100,
        parent_id: null,
        menu_id: 1,
        createdAt: null,
        updatedAt: null,
      },
    ],
  },
  footer_1: {
    id: 2,
    title: "Footer Menu 1",
    createdAt: null,
    updatedAt: null,
    menu_items: [
      {
        id: 1,
        title: "Default Menu",
        url: "#",
        target: "_self",
        icon_class: null,
        color: null,
        order: 100,
        parent_id: null,
        menu_id: 1,
        createdAt: null,
        updatedAt: null,
      },
    ],
  },
  footer_2: {
    id: 3,
    title: "Footer Menu 1",
    createdAt: null,
    updatedAt: null,
    menu_items: [
      {
        id: 1,
        title: "Default Menu",
        url: "#",
        target: "_self",
        icon_class: null,
        color: null,
        order: 100,
        parent_id: null,
        menu_id: 1,
        createdAt: null,
        updatedAt: null,
      },
    ],
  },
  footer_3: {
    id: 4,
    title: "Footer Menu 1",
    createdAt: null,
    updatedAt: null,
    menu_items: [
      {
        id: 1,
        title: "Default Menu",
        url: "#",
        target: "_self",
        icon_class: null,
        color: null,
        order: 100,
        parent_id: null,
        menu_id: 1,
        createdAt: null,
        updatedAt: null,
      },
    ],
  },

  //cart
  cart: [],
  checkout: [],
  cartLength: 0,
  cartTotal: 0,
  cartChanged: false,

  //company profile footer
  company_email: "",
  company_phone: "",
  company_fax: "",
  company_address: "",
  company_city: "",
  company_wa_phone: "",
});

export const actions = {
  async fetchHeader({ commit }) {
    try {
      let response = await this.$axios.$get(
        process.env.API_URL + "/api/menus/2"
      );

      commit("FETCH_HEADER", response.data);
    } catch (error) {
      console.log(error);
    }
  },

  async fetchFooter1({ commit }) {
    try {
      let response = await this.$axios.$get(
        process.env.API_URL + "/api/menus/3"
      );

      commit("FETCH_FOOTER_1", response.data);
    } catch (error) {
      console.log(error);
    }
  },

  async fetchFooter2({ commit }) {
    try {
      let response = await this.$axios.$get(
        process.env.API_URL + "/api/menus/4"
      );

      commit("FETCH_FOOTER_2", response.data);
    } catch (error) {
      console.log(error);
    }
  },

  async fetchFooter3({ commit }) {
    try {
      let response = await this.$axios.$get(
        process.env.API_URL + "/api/menus/5"
      );

      commit("FETCH_FOOTER_3", response.data);
    } catch (error) {
      console.log(error);
    }
  },

  addProductToCart({ state, commit }, { product, notification = false }) {
    console.log(notification);
    const cartProduct = state.cart.find((prod) => prod.id === product.id);
    if (!cartProduct) {
      commit("pushProductToCart", { product, notification });
    } else {
      commit("incrementProductQty", { product: cartProduct, notification });
    }

    commit("incrementCartLength");
    commit("synchronizeCart");
  },

  updateCart(
    { state, commit },
    { product, qty, process, notification = false }
  ) {
    const cartProduct = state.cart.find((prod) => prod.id === product.id);
    if (cartProduct) {
      commit("updateProductCart", { product, qty, process, notification });
      commit("synchronizeCart");
    } else {
      if (notification) {
        this.$toast.error("Product not found", {
          theme: "bubble",
          position: "bottom-right",
          duration: 5000,
        });
      }
    }
  },

  deleteCart({ state, commit }, { product, notification = false }) {
    const cartProduct = state.cart.find((prod) => prod.id === product.id);
    if (cartProduct) {
      commit("deleteProductCart", { product, notification });
      commit("synchronizeCart");
    } else {
      if (notification) {
        this.$toast.error("Product not found", {
          theme: "bubble",
          position: "bottom-right",
          duration: 5000,
        });
      }
    }
  },
  deleteAllCart({ state, commit }, notification = false) {
    if (state.cart.length == 0) {
      if (notification) {
        this.$toast.error("Cart is empty", {
          theme: "bubble",
          position: "bottom-right",
          duration: 5000,
        });
      }
    } else {
      commit("clearCart", notification);
      commit("synchronizeCart");
    }
  },
  setCartChange({ commit }, value) {
    commit("setCartChangeValue", value);
  },
  async fetchCompanyEmail({ commit }) {
    try {
      let response = await this.$axios.$get(
        process.env.API_URL + "/api/settings/site.company_email"
      );

      commit("FETCH_SETTING", response.data);
    } catch (error) {
      console.log(error);
    }
  },
  async fetchCompanyPhone({ commit }) {
    try {
      let response = await this.$axios.$get(
        process.env.API_URL + "/api/settings/site.company_phone"
      );
      commit("FETCH_SETTING", response.data);
    } catch (error) {
      console.log(error);
    }
  },
  async fetchCompanyFax({ commit }) {
    try {
      let response = await this.$axios.$get(
        process.env.API_URL + "/api/settings/site.company_fax"
      );
      commit("FETCH_SETTING", response.data);
    } catch (error) {
      console.log(error);
    }
  },
  async fetchCompanyAddress({ commit }) {
    try {
      let response = await this.$axios.$get(
        process.env.API_URL + "/api/settings/site.company_address"
      );
      commit("FETCH_SETTING", response.data);
    } catch (error) {
      console.log(error);
    }
  },
  async fetchCompanyCity({ commit }) {
    try {
      let response = await this.$axios.$get(
        process.env.API_URL + "/api/settings/site.company_city"
      );
      commit("FETCH_SETTING", response.data);
    } catch (error) {
      console.log(error);
    }
  },
  async fetchCompanyWaPhone({ commit }) {
    try {
      let response = await this.$axios.$get(
        process.env.API_URL + "/api/settings/site.company_wa_phone"
      );
      commit("FETCH_SETTING", response.data);
    } catch (error) {
      console.log(error);
    }
  },
};

export const mutations = {
  FETCH_HEADER(state, header) {
    state.header = header;
  },
  FETCH_FOOTER_1(state, footer_1) {
    state.footer_1 = footer_1;
  },
  FETCH_FOOTER_2(state, footer_2) {
    state.footer_2 = footer_2;
  },
  FETCH_FOOTER_3(state, footer_3) {
    state.footer_3 = footer_3;
  },
  async synchronizeCart(state) {
    if (state.auth.loggedIn) {
      let response = await this.$axios.$post(
        process.env.API_URL + "/api/carts/synchronize",
        {
          carts: state.cart,
        }
      );
    }
  },

  pushProductToCart(state, { product, notification }) {
    if (notification) {
      this.$toast.success("Successfully add a product to cart", {
        theme: "bubble",
        position: "bottom-right",
        duration: 5000,
      });
    }
    product.qty = product.qty ? product.qty : 1;
    product.process = product.process ? product.process : 0;

    state.cart.push(product);
  },

  incrementProductQty(state, { product, notification }) {
    if (notification) {
      this.$toast.success("Successfully update product quantity", {
        theme: "bubble",
        position: "bottom-right",
        duration: 5000,
      });
    }
    console.log(product);
    if (product.qty) {
      product.qty++;
    } else {
      product.qty = 1;
    }
    let indexOfProduct = state.cart.indexOf(product);
    state.cart.splice(indexOfProduct, 1, product);
  },

  deleteProductCart(state, data) {
    const product = data.product;
    let indexOfProduct = state.cart.indexOf(product);
    state.cart.splice(indexOfProduct, 1);

    if (data.notification) {
      this.$toast.success("Successfully delete a product from cart", {
        theme: "bubble",
        position: "bottom-right",
        duration: 5000,
      });
    }
  },
  clearCart(state, notification) {
    state.cart = [];
    if (notification) {
      this.$toast.success("Successfully clear cart", {
        theme: "bubble",
        position: "bottom-right",
        duration: 5000,
      });
    }
  },
  updateProductCart(state, { product, qty, process, notification }) {
    product.qty = qty;
    product.process = process;
    let indexOfProduct = state.cart.indexOf(product);
    state.cart.splice(indexOfProduct, 1, product);
  },

  incrementCartLength(state) {
    state.cartLength = 0;
    if (state.cart.length > 0) {
      state.cart.map((product) => {
        state.cartLength += product.qty;
      });
    }
  },

  setCartChangeValue(state, value) {
    state.cartChanged = value;
  },
  FETCH_SETTING(state, value) {
    if (value.key == "site.company_email") {
      state.company_email = value.value;
    } else if (value.key == "site.company_phone") {
      state.company_phone = value.value;
    } else if (value.key == "site.company_fax") {
      state.company_fax = value.value;
    } else if (value.key == "site.company_address") {
      state.company_address = value.value;
    } else if (value.key == "site.company_city") {
      state.company_city = value.value;
    } else if (value.key == "site.company_wa_phone") {
      state.company_wa_phone = value.value;
    }
  },
};

export const getters = {
  getHeader(state) {
    return state.header;
  },
  getFooter1(state) {
    return state.footer_1;
  },
  getFooter2(state) {
    return state.footer_2;
  },
  getFooter3(state) {
    return state.footer_3;
  },
  getCartLength(state) {
    return state.cartLength;
  },
  getCart(state) {
    let temp_cart = [];
    let id = 0;
    state.cart.forEach((product) => {
      let data = {
        qty: product.qty,
        product: product,
        process: product.process ?? 1,
        id: id,
      };
      id++;
      temp_cart.push(data);
    });
    return temp_cart;
  },
  getCheckout(state) {
    let temp_checkout = [];
    let id = 0;
    state.cart.forEach((product) => {
      if (product.process == 1) {
        let data = {
          qty: product.qty,
          product: product,
          process: product.process ?? 1,
          id: id,
        };
        id++;
        temp_checkout.push(data);
      }
    });
    return temp_checkout;
  },
  getCartTotal(state) {
    return state.cartTotal;
  },
  getCartChanged(state) {
    return state.cartChanged;
  },
  getSetting(state, key) {
    return {
      company_email: state.company_email,
      company_phone: state.company_phone,
      company_fax: state.company_fax,
      company_address: state.company_address,
      company_city: state.company_city,
      company_wa_phone: state.company_wa_phone,
    };
  },
};
