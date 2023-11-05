<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>LaraChat.Vue</title>
    <link rel="stylesheet" href="css/app.css">
    
    <style>
        .list-group{
            overflow-y: scroll;
            height: 700px;
        }
    </style>
</head>
<body>
    <div class="container" style="margin-top: 50px">
        <div class="row" id="app">
            <div class="col-md-12">
                <li class="list-group-item active">Chat Room
                    <span class="badge badge-pill badge-danger float-right">@{{numberOfUsers}}</span>
                </li>
                <ul class="list-group" v-chat-scroll>
                    <message v-for="value,index in chat.message" :key=value.index :color= chat.color[index] :user=chat.user[index]>
                        @{{value}}
                    </message>
                </ul>
                <div class="badge badge-pill badge-primary">@{{typing}}</div>
                <input type="text" class="form-control" name="new_message" id="new_message" placeholder="Type you new message here ..." v-model="message" @keyup.enter='send'>
            </div>
        </div>
    </div>
    <script src="js/app.js"></script>
</body>
</html>