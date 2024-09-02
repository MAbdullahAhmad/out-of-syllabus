import axios from 'axios';

const APIRequest = {
    get: async (url, params = {}) => {
        try {
            const response = await axios.get(url, { params });
            return response.data;
        } catch (error) {
            throw new Error('API GET request failed: ' + error.message);
        }
    },

    post: async (url, data) => {
        try {
            const response = await axios.post(url, data);
            return response.data;
        } catch (error) {
            throw new Error('API POST request failed: ' + error.message);
        }
    },

    // More methods (put, delete, etc.)
};

export default APIRequest;
