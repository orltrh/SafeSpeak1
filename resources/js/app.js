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
    
});
