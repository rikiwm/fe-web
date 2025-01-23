import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allow your team to quickly build robust real-time web applications.
 */

// import './echo';
// window.Echo.channel('user-login')
//     .listen('.user.login', (data) => {
//         console.log('User logged in:', data);
//         console.log('User logged in:', data.message);
//         var d1 = document.getElementById('login-list');
//         d1.insertAdjacentHTML('afterend', '<div class="alert alert-success alert-dismissible fade show"><span><i class="fa fa-circle-check"></i> ' + data.user_agent + '</span></div>');
//     })
//     .stopListening('.user.login',(data) => {
//         console.log('User logged out:', data);
//     });
//     window.Echo.channel('user-ntf').listen('.', (data) => {
//         console.log('User ntf in:', data);
//     })
// console.log(data.message);
