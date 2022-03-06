<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        
        <style>
            body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
            .w3-bar-block .w3-bar-item {padding:20px}
           
        </style>

        <title>Edit Profile</title>
    </head>
    <bodyh>
        <!-- Header -->
        <header class="w3-container w3-center w3-padding-48 w3-white">
            <h1 class="w3-xxxlarge"><b>SA ZONE;</b></h1>
            <h6>Welcome to the blog of <span class="w3-tag">Sa's world</span></h6>
        </header>

  <!-- Image header -->
        <header class="w3-display-container w3-wide" id="home">
            <img class="w3-image w3-center" src="/picture/images.jfif" alt="Fashion Blog" width="1600" height="1060">
            <div class="w3-display-left w3-padding-large">
            <h1 class="w3-text-white">Editing-More-Detail-about-me</h1>
            <h1 class="w3-jumbo w3-text-white w3-hide-small"><b>EDIT ZONE</b></h1>
            <h6><button class="w3-button w3-white w3-padding-large w3-large w3-opacity w3-hover-opacity-off" onclick="document.getElementById('subscribe').style.display='block'">♡♡♡</button></h6>
            </div>
        </header>
    </bodyh>
    <body>
        <div style="width: 900px;" class="container max-w-full mx-auto pt-4">

            
            <form method="POST" action="/posts/{{ $post->id }}">
                @method('PUT')
                @csrf

                <div class="mb-4">
                    <label class="font-bold text-gray-900" for="title">Title :</label>
                    <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="title" name="title" value="{{ $post->title }}"></input>
                </div>

                <div class="mb-4">
                    <label class="font-bold text-gray-900" for="content">Content :</label>
                    <textarea class="h-16 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="content" name="content">{{ $post->content }}</textarea>
                </div>


                <Button class="w3-button w3-purple w3-round-xxlarge">update</Button>
                <a href="/posts" class="w3-button w3-red w3-round-xxlarge">Cancel</a>
                <a href="/posts" class="w3-button w3-green w3-round-xxlarge">Go back</a>
                
                

            <form method="POST" action="/posts/{{ $post->id}}">
                    @csrf
                    @method('DELETE')

                    <Button class="w3-button w3-blue w3-round-xxlarge">Delete</Button>
            </form>
        </div>
        
    </body>
</html>