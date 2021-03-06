import createPersistedState from "vuex-persistedstate";

export default ({ store }) => {
  window.onNuxtReady(() => {
    createPersistedState({
      paths:["cart","cartChanged","cartLength","cartTotal","checkout"],
    })(store);
  });
};
