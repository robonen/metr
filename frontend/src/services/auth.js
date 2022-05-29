import api from "@/services/api";

export const AuthService = {
    async registration(email, password) {
        const resp = await api.post('/auth/registration', {
            email,
            password,
        });
        localStorage.setItem('auth', JSON.stringify(resp));
        return resp;
    },
    async login(email, password) {
        const resp = await api.post('/auth/login', {
            email,
            password,
        });
        localStorage.setItem('auth', JSON.stringify(resp));
        return resp;
    },
    async logout() {
        await api.post('/auth/logout');
        localStorage.removeItem('auth');
        return true;
    },
};

export default AuthService;
