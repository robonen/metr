import api from "@/services/api";

export const OfferService = {
    async add(data) {
        const resp = await api.post('/offers', data);
        return resp;
    },
    async update(id, data) {
        const resp = await api.put(`/offers/${id}`, data);
        return resp;
    },
    async allUserOffers() {
        const resp = await api.get('/users/offers');
        return resp;
    },
    async getById(id) {
        const resp = await api.get(`/offers/${id}`);
        return resp;
    }
};

export default OfferService;
