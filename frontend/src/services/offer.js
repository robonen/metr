import api from "@/services/api";

export const OfferService = {
    async add(data) {
        const resp = await api.post('/offers', data);
        return resp;
    },
};

export default OfferService;
