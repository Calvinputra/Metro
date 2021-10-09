export const state = () => ({
  header: []
});

export const actions = {
  async fetchHeader({ commit }) {
    try {
      let response = await this.$axios.$get("http://localhost:8080/api/menu/1"
      );
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
  getHeader(state){
    return state.header;
  }
}
