import axios from 'axios'

export default {
    async request(method, url, params) {
        const BASE_URI = '/api';

        return axios({
            method: method,
            url: `${BASE_URI}${url}`,
            data: params,
        });
    }
}