import axios from 'axios';

export const Auth = {
    login: async (email : string , password : string ) => {
        try {
            const response = await axios.post('/api/login', {
                email: email,
                password: password,
            });

            return response.data;
        } catch (error : any ) {
            throw new Error('Login failed: ' + error.message);
        }
    },

    // logout
    // is_logged_in
    // is_admin

    // More auth related functions (logout, verify_email, etc.)
};

export default Auth;
