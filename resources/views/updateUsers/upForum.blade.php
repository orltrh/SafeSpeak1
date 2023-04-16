@extends('layout.updateUSers')
@section('title', 'Forum')
@section('menuForum', 'active')

@section('content')
@parent
<section style="height:100vh; padding-top: 100px">
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
</section>
@endsection

