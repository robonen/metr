import axios from 'axios';

const instance = axios.create({
    baseURL: 'http://tusur.tk:9080/api',
    withCredentials: true,
});

instance.interceptors.request.use(function (config) {
    const savedUser = JSON.parse(localStorage.getItem('auth')) || null;
    if (savedUser === null)
        return config;

    const token = savedUser.data.token;
    config.headers.Authorization = `Bearer ${token}`;

    return config;
}, function (error) {
    return Promise.reject(error);
});

export default instance;
