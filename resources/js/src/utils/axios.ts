import axios, { AxiosInstance } from 'axios';

declare global {
    interface Window { axios: AxiosInstance; }
}

const intance = axios.create({
    baseURL: ``
});

intance.interceptors.request.use(
    (request) => request,
    (error) => Promise.reject(error)
);

intance.interceptors.response.use(
    (response) => response,
    (error) => Promise.reject(error)
);

window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

export default intance;
