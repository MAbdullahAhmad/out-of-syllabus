import axios from 'axios';

const Auth = {
    login: async (email, password) => {
        try {
            const response = await axios.post('/api/login', {
                email: email,
                password: password,
            });

            return response.data;
        } catch (error) {
            throw new Error('Login failed: ' + error.message);
        }
    },

    // logout
    // is_logged_in
    // is_admin

    // More auth related functions (logout, verify_email, etc.)
};

export default Auth;
