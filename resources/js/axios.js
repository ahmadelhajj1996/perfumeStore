import axios from "axios";


const user = localStorage.getItem('token')

if (user) {
    axios.defaults.headers.common['Authorization'] = 'Bearer ' + user
}

const api = axios.create({
  baseURL: 'http://localhost:8000/api/'
});

export default api;
