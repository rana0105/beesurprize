export const state = {
  wproducts: window.localStorage.getItem("wproducts")
    ? JSON.parse(window.localStorage.getItem("wproducts"))
    : [],
};

export const getters = {
  wproducts: (state) => state.wproducts,
};

export const actions = {
  addProductWishlist({ commit, state }, item) {
    let pro = state.wproducts;
    for (var i = 0; i < pro.length; i++) {
      if (pro[i].id == item.id) {
        commit("UPDATE_COUNT", { count: pro[i].count + 1, index: i });
        saveProduct(state.wproducts);
        return;
      }
    }
    let p = {
      wid: item.id,
      wprice: item.price,
      wname: item.item,
      wimage: item.f_image,
      wcount: 1,
    };

    commit("ADD_PRODUCT", p);
    saveProduct(state.wproducts);
  },

  removeWishlist({ commit, state }, item) {
    let pro = state.wproducts;
    for (var i = 0; i < pro.length; i++) {
      if (pro[i].wid == item.id) {
        if (pro[i].count <= 1) {
          commit("REMOVE_ITEM", i);
          saveProduct(state.wproducts);
          return;
        }
        commit("UPDATE_COUNT", { count: pro[i].count - 1, index: i });
        saveProduct(state.wproducts);
        return;
      }
    }
  },

  allWishlistRemove({ commit, state }, id) {
    let pro = state.wproducts;
    for (var i = 0; i < pro.length; i++) {
      if (pro[i].wid == id) {
        commit("REMOVE_ITEM", i);
        saveProduct(state.wproducts);
        return;
      }
    }
  },
};

export const mutations = {
  ADD_PRODUCT(state, item) {
    state.wproducts.push(item);
  },

  UPDATE_COUNT(state, { count, index }) {
    state.wproducts[index].count = count;
  },

  REMOVE_ITEM(state, index) {
    state.wproducts.splice(index, 1);
  },
};

function saveProduct(wproducts) {
  window.localStorage.setItem("wproducts", JSON.stringify(wproducts));
} 