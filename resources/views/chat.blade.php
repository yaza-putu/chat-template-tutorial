<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chat App Template</title>
    <link rel="stylesheet" href="{{ asset("assets/css/chat.css") }}">
</head>
<body>
<div id="app" class="app">

    <!-- LEFT SECTION -->

    <section id="main-left" class="main-left">
        <!-- header -->
        <div id="header-left" class="header-left">
             Mini Chat
        </div>

        <!-- chat list -->
        <div id="chat-list" class="chat-list">
            <!-- user lists -->
            <div class="friends">
                <!-- photo -->
                <div class="profile friends-photo">
                    <img src="{{ asset("assets/images/ava2.jpg") }}" alt="">
                </div>

                <div class="friends-credent">
                    <!-- name -->
                    <span class="friends-name">Mario Gomez</span>
                    <!-- last message -->
                    <span class="friends-message">Online</span>
                </div>
            </div>
        </div>

        <!-- self-profile -->
        <div id="self-info" class="self-info">
            <!-- photo -->
            <div class="profile your-photo">
                <img src="{{ asset("assets/images/ava4.jpg") }}" alt="">
            </div>
            <!-- name -->
            <h4 class="name your-name">Iqbal Taufiq</h4>
        </div>
    </section>



    <!-- RIGHT SECTION -->
    <section id="main-empty" class="main-right">
        <p style="text-align: center; font-size: 35px">Welcome to mini chat</p>
    </section>
    <section id="main-right" class="main-right hidden">
        <!-- header -->
        <div id="header-right" class="header-right">
            <!-- profile pict -->
            <div id="header-img" class="profile header-img">
                <img src="{{ asset("assets/images/ava2.jpg") }}" alt="">
            </div>

            <!-- name -->
            <h4 class="name friend-name">Mario Gomez</h4>
        </div>

        <!-- chat area -->
        <div id="chat-area" class="chat-area">
            <!-- chat content -->

        </div>

        <!-- typing area -->
        <div id="typing-area" class="typing-area">
            <!-- input form -->
            <input id="type-area" class="type-area" placeholder="Type something...">
        </div>
    </section>
</div>
<script src="{{ asset("assets/js/chat.js") }}"></script>
</body>
</html>
