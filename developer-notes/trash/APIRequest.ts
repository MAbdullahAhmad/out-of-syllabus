import axios from 'axios';

export const APIRequest = {
    get: async (url : string, params = {}) => {
        try {
            const response = await axios.get(url, { params });
            return response.data;
        } catch (error : any) {
            throw new Error('API GET request failed: ' + error.message);
        }
    },

    post: async (url : string , data : Object ) => {
        try {
            const response = await axios.post(url, data);
            return response.data;
        } catch (error : any) {
            throw new Error('API POST request failed: ' + error.message);
        }
    },

    // More methods (put, delete, etc.)
};

export default APIRequest;
