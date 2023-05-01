@extends('layout.master')
@section('title', 'Forum')
@section('menuForum', 'active')

@section('content')
@parent

<section style="height:100vh; padding-top: 100px">
  @vite('resources/css//app.css') 
    <div class="container d-flex justify-content-center">
      <div class="cardforum">
        <div class="chat-headerforum">Forum</div>
          <div class="chat-windowforum">
            <ul class="message-list"></ul>
          </div>
          <div class="chat-inputforum">
            <input type="text" class="message-input" placeholder="Type your message here">
            <button class="send-button">Send</button>
          </div>
        </div>
    </div>
    @vite('resources/js/app.js')

    <script>
      // Mengambil elemen yang dibutuhkan dari halaman
      const messageInput = document.querySelector('.message-input');
      const messageList = document.querySelector('.message-list');
      const sendButton = document.querySelector('.send-button');
    
      // Fungsi untuk menambahkan pesan ke chat window
      function addMessageToList(message, isSentByCurrentUser) {
        if (message) {
          const li = document.createElement('li');
          li.innerHTML = '<div class="message' + (isSentByCurrentUser ? ' sent' : '') + '"><span class="name">' + (isSentByCurrentUser ? 'You' : 'Anonymous') + ':</span> ' + message + '</div>';
          messageList.appendChild(li);
        }
      }
    
      // Event listener untuk saat tombol "Send" ditekan
      sendButton.addEventListener('click', () => {
        const message = messageInput.value;
        // Memastikan input pesan tidak kosong
        if (message.trim() !== '') {
          // Mengirim pesan ke server melalui endpoint "send-event"
          fetch('/send-event?message=' + encodeURIComponent(message), {
            method: 'GET',
          })
          .then(response => {
            if (response.ok) {
              // Jika request berhasil, tambahkan pesan ke chat window
              addMessageToList(message, true);
              // Kosongkan input pesan
              messageInput.value = '';
            }
          })
          .catch(error => {
            console.log(error);
          });
    
        }
      });
    
      document.addEventListener("DOMContentLoaded", function(event) { 
        Echo.channel(`forum`)
            .listen('HelloEvent', (message) => {
              // Ketika pesan diterima dari server, tambahkan ke chat window
              addMessageToList(message.Messages, false);
            });
      });
    </script>
    
</section>

@endsection
