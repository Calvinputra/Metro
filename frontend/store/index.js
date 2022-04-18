export const state = () => ({
    //initialize data
    menu: [],

    //cart
    cart: [],
    checkout: [],
    cartLength: 0,
    cartTotal: 0,
    cartChanged: false,

    //company profile
    setting: [],
});

export const actions = {
    async nuxtServerInit({ commit }) {
        try {
            let response = await this.$axios.$get(process.env.API_URL + "/api/menus");
            commit("FETCH_MENU", response.data);
            response = await this.$axios.$get(process.env.API_URL + "/api/settings");
            commit("FETCH_SETTING", response.data);
        } catch (error) {
            console.log(error);
        }
    },

    addProductToCart({ state, commit }, { product, notification = false }) {
        const cartProduct = state.cart.find((prod) => prod.id === product.id);
        if (!cartProduct) {
            commit("pushProductToCart", { product, notification });
        } else {
            commit("incrementProductQty", { product: cartProduct, notification });
        }

        commit("incrementCartLength");
    },

    updateCart({ state, commit }, { product, qty, process, notification = false }) {
        const cartProduct = state.cart.find((prod) => prod.id === product.id);
        if (cartProduct) {
            commit("updateProductCart", { product, qty, process, notification });
        } else {
            if (notification) {
                this.$toast.error("Product tidak ditemukan", {
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
        } else {
            if (notification) {
                this.$toast.error("Produk tidak ditemukan", {
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
                this.$toast.error("Keranjang masih kosong", {
                    theme: "bubble",
                    position: "bottom-right",
                    duration: 5000,
                });
            }
        } else {
            commit("clearCart", notification);
        }
    },
    setCartChange({ commit }, value) {
        commit("setCartChangeValue", value);
    },
};

export const mutations = {
    FETCH_MENU(state, data) {
        state.menu = data;
    },
    FETCH_SETTING(state, data) {
        state.setting = data;
    },

    pushProductToCart(state, { product, notification }) {
        if (notification) {
            this.$toast.success("Berhasil menambah produk ke keranjang", {
                theme: "bubble",
                position: "bottom-right",
                duration: 5000,
            });
        }
        product.qty = product.qty ? product.qty : 1;
        product.process = 1;

        state.cart.push(product);
    },

    incrementProductQty(state, { product, notification }) {
        if (notification) {
            this.$toast.success("Berhasil menambah jumlah produk", {
                theme: "bubble",
                position: "bottom-right",
                duration: 5000,
            });
        }
        //console.log(product);
        if (product.qty) {
            product.qty++;
        } else {
            product.qty = 1;
        }
        let indexOfProduct = state.cart.indexOf(product);
        state.cart.splice(indexOfProduct, 1, product);
    },

    deleteProductCart(state, data) {
        //console.log(data);
        const product = data.product;
        let indexOfProduct = state.cart.indexOf(product);
        state.cart.splice(indexOfProduct, 1);

        if (data.notification) {
            this.$toast.success("Berhasil menghapus produk dari keranjang", {
                theme: "bubble",
                position: "bottom-right",
                duration: 5000,
            });
        }
    },
    clearCart(state, notification) {
        state.cart = [];
        if (notification) {
            this.$toast.success("Berhasil menghapus keranjang", {
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
        state.cartChanged = !state.cartChanged;
    },
};

export const getters = {
    getHeader(state) {
        return state.menu.find((menu) => menu.name === "header");
    },
    getFooter1(state) {
        return state.menu.find((menu) => menu.name === "footer_1");
    },
    getFooter2(state) {
        return state.menu.find((menu) => menu.name === "footer_2");
    },
    getFooter3(state) {
        return state.menu.find((menu) => menu.name === "footer_3");
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
    getSetting(state) {
        if (state.setting.length > 0) {
            //console.log(state.setting)
            return {
                company_email: state.setting.find(
                    (setting) => setting.key === "site.company_email"
                ).value,
                company_phone: state.setting.find(
                    (setting) => setting.key === "site.company_phone"
                ).value,
                company_fax: state.setting.find(
                    (setting) => setting.key === "site.company_fax"
                ).value,
                company_address: state.setting.find(
                    (setting) => setting.key === "site.company_address"
                ).value,
                company_city: state.setting.find(
                    (setting) => setting.key === "site.company_city"
                ).value,
                company_wa_phone: state.setting.find(
                    (setting) => setting.key === "site.company_wa_phone"
                ).value,
                company_tokopedia_link: state.setting.find(
                    (setting) => setting.key === "site.company_tokopedia_link"
                  ).value,


            };
        } else {
            return {};
        }
    },
};
