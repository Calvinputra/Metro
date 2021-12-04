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

  addProductToCart({ state, commit }, product) {
    const cartProduct = state.cart.find((prod) => prod.id === product.id);
    if (!cartProduct) {
      commit("pushProductToCart", product);
    } else {
      commit("incrementProductQty", cartProduct);
    }

    commit("incrementCartLength");
  },

  updateCart({ state, commit }, { product, qty, process }) {
    const cartProduct = state.cart.find((prod) => prod.id === product.id);
    if (cartProduct) {
      commit("updateProductCart", { product, qty, process });
    } else {
      this.$toast.error("Product not found", {
        theme: "bubble",
        position: "bottom-right",
        duration: 5000,
      });
    }
  },

  deleteCart({ state, commit }, product) {
    const cartProduct = state.cart.find((prod) => prod.id === product.id);
    if (cartProduct) {
      commit("deleteProductCart", product);
    } else {
      this.$toast.error("Product not found", {
        theme: "bubble",
        position: "bottom-right",
        duration: 5000,
      });
    }
  },
  setCartChange({ commit }, value) {
    commit("setCartChangeValue", value);
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

  pushProductToCart(state, product) {
    this.$toast.success("Successfully add a product to cart", {
      theme: "bubble",
      position: "bottom-right",
      duration: 5000,
    });
    product.qty = 1;
    product.process = 1;
    state.cart.push(product);
  },

  incrementProductQty(state, product) {
    this.$toast.success("Successfully update product quantity", {
      theme: "bubble",
      position: "bottom-right",
      duration: 5000,
    });
    if (product.qty) {
      product.qty++;
    } else {
      product.qty = 1;
    }
    let indexOfProduct = state.cart.indexOf(product);
    state.cart.splice(indexOfProduct, 1, product);
  },

  deleteProductCart(state, product) {
    let indexOfProduct = state.cart.indexOf(product);
    state.cart.splice(indexOfProduct, 1);
    this.$toast.success("Successfully delete a product from cart", {
      theme: "bubble",
      position: "bottom-right",
      duration: 5000,
    });
  },
  updateProductCart(state, { product, qty, process }) {
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
    console.log("set cart to " + value);
    state.cartChanged = value;
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
};
