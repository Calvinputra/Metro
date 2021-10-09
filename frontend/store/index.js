export const state = () => ({
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
  }
});

export const actions = {
  async fetchHeader({ commit }) {
    try {
      let response = await this.$axios.$get("http://localhost:8080/api/menu/1");
      console.log(response.menu);

      commit("FETCH_HEADER", response.menu);
    } catch (error) {
      console.log(error);
    }
  }
};

export const mutations = {
  FETCH_HEADER(state, header) {
    state.header = header;
  }
};

export const getters = {
  getHeader(state) {
    return state.header;
  }
};
