import './bootstrap';
let messageInput = document.querySelector('.message-input');
console.log(messageInput); // Cek apakah messageInput terdefinisi

let sendButton = document.querySelector('.send-button');

sendButton.addEventListener('click', function() {
    let message = messageInput.value;
    messageInput.value = '';
    axios.get('/forum', { message: message }).then(response => {
        console.log(response.data);
    });
    const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ])
    .sass('resources/sass/custom.scss', 'public/css'); // Tambahkan baris ini jika Anda ingin menggunakan file Sass

// Jika Anda menggunakan versi Laravel sebelumnya (sebelum Laravel 8)
// mix.js('resources/js/app.js', 'public/js')
//    .postCss('resources/css/app.css', 'public/css');

if (mix.inProduction()) {
    mix.version();
}

    
});
