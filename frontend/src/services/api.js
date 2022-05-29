import axios from 'axios';

export default axios.create({
    baseURL: 'http://tusur.tk:9080/api',
    withCredentials: true,
});
