import api from "@/services/api";

export const OfferService = {
    async add(data, files) {
        data.images = files;
        const resp = await api.post('/offers', data);
        return resp;
    },
    async update(id, data, files) {
        data.images = files;
        const resp = await api.put(`/offers/${id}`, data);
        return resp;
    },
    async all() {
        const resp = await api.get('/offers');
        return resp;
    },
    async allUserOffers() {
        const resp = await api.get('/users/offers');
        return resp;
    },
    async getById(id) {
        const resp = await api.get(`/offers/${id}`);
        return resp;
    },
    async uploadImage(file) {
        const resp = await api.postForm('/offers/images', {
            'image': file,
        });
        return resp;
    },
    async deleteImage(id) {
        const resp = await api.delete(`/offers/images/${id}`);
        return resp;
    }
};

export default OfferService;
