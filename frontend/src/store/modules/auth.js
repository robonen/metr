import authService from '@/services/auth';

const savedUser = JSON.parse(localStorage.getItem('auth'));

export const state = {
    user: savedUser?.data?.data ?? null,
    token: savedUser?.data?.token ?? null,
};

export const actions = {
    async login({ commit }, { email, password }) {
        const { data: user } = await authService.login(email, password);
        commit('SET_USER', user.data);
        commit('SET_TOKEN', user.token);
    },
    async logout({ commit }) {
        await authService.logout();
        commit('SET_USER', null);
        commit('SET_TOKEN', null);
    },
};

export const mutations = {
    SET_USER(state, user) {
        state.user = user;
    },
    SET_TOKEN(state, token) {
        state.token = token;
    },
};

export const getters = {
    user(state) {
        return state.user;
    },
    username(state) {
        return state.user && state.user.last_name && state.user.first_name
            ? `${state.user.last_name} ${state.user.first_name}`
            : null;
    },
    userAuthenticated(state) {
        return state.user !== null && state.token !== null;
    },
};

export default {
    state,
    actions,
    mutations,
    getters,
};
