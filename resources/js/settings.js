import tokenStorage from './helpers/tokens';

export function configureAxios(axios) {
    axios.interceptors.request.use(
        (config) => {
            let token = tokenStorage.get('access_token');

            if (token) {
                config.headers['Authorization'] = `Bearer ${token}`
            }

            return config
        },

        (error) => {
            return Promise.reject(error);
        }
    );

    axios.interceptors.response.use(
        (response) => {
            return response;
        },

        (error) => {
            if (401 === error.response.status) {
                tokenStorage.remove('access_token');
                window.location.reload();
            }

            return Promise.reject(error);
        }
    )
}
