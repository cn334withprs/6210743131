<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">

        <style>
            body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
            .w3-bar-block .w3-bar-item {padding:20px}
        </style>

        <title>Life of SA</title>
    </head>
    <body>
        <bodyh class="w3-container ">

            <div class="w3-top">
                <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
                    <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">☰</div>
                    <div class="w3-right w3-padding-16">sajah</div>
                    <div class="w3-center w3-padding-16">My Portfolio</div>
                </div>
            </div>
            <!-- About Section -->
            <div class="w3-row w3-padding-64" id="about">
                <div class="w3-col m6 w3-padding-large w3-hide-small">
                <img src="/picture/sajah.jpg" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600" height="750">
                </div>

                <div class="w3-col m6 w3-padding-large">
                <h1 class="w3-center">About Thitiporn</h1><br>
                <h5 class="w3-center">___since 2001___</h5>
                <p class="w3-large">My name is thitiporn tangkantitham. I'm a  software engineering student at Thammasat University (year3), who enjoy and open mind to learn new thing.I have many experance in software projects such as be a Front-end Developer, Make a Document etc.</p>
                <p class="w3-large w3-text-grey w3-hide-medium"></p>
                </div>
            </div>
            

            <div class="w3-panel w3-sand w3-center ">
                <span style="font-size:150px;line-height:0.6em;opacity:0.2">❝</span>
                <p class="w3-xlarge" style="margin-top:-40px"><i>La patience vient à bout de tout. - Harry Bernr</i></p>
            </div>

            

        </bodyh>



        <div class="w3-center">
            <h1 ><em>More Details<em></h1>

            <a href="/posts/create" class="bg-blue-500">Add Post</a>
            @foreach ($posts as $post)
            <article class="mb-4">

                <a href="/posts/{{ $post->id }}/edit" class="text-xl font-bold text-gray-900">{{ $post->title}}</a>
                <p>{{ $post->content}}</p>


                <hr class="mt-2">

            </article>
            @endforeach
        </div>
        
    </body>
</html>