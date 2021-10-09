const API_URL = "http://localhost:8080/api";
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
        updatedAt: null
      }
    ]
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
        updatedAt: null
      }
    ]
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
        updatedAt: null
      }
    ]
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
        updatedAt: null
      }
    ]
  }
});

export const actions = {
  async fetchHeader({ commit }) {
    try {
      let response = await this.$axios.$get(API_URL + "/menu/1");
      console.log(response.menu);

      commit("FETCH_HEADER", response.menu);
    } catch (error) {
      console.log(error);
    }
  },

  async fetchFooter1({ commit }) {
    try {
      let response = await this.$axios.$get(API_URL + "/menu/2");
      console.log(response.menu);

      commit("FETCH_FOOTER_1", response.menu);
    } catch (error) {
      console.log(error);
    }
  },

  async fetchFooter2({ commit }) {
    try {
      let response = await this.$axios.$get(API_URL + "/menu/3");
      console.log(response.menu);

      commit("FETCH_FOOTER_2", response.menu);
    } catch (error) {
      console.log(error);
    }
  },

  async fetchFooter3({ commit }) {
    try {
      let response = await this.$axios.$get(API_URL + "/menu/4");
      console.log(response.menu);

      commit("FETCH_FOOTER_3", response.menu);
    } catch (error) {
      console.log(error);
    }
  }
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
  }
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
  }
};
