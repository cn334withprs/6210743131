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
        <bodyh>

            <div class="w3-top">
                <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
                    <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">☰</div>
                    <div class="w3-right w3-padding-16">sajah</div>
                    <div class="w3-center w3-padding-16">My Portfolio</div>
                </div>
            </div>
            <!-- !PAGE CONTENT! -->
            <div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

                <!-- First Photo Grid-->
                <div class="w3-row-padding w3-padding-16 w3-center" id="food">
                <div class="w3-quarter">
                    <img src="/picture/sajah.jpg" alt="Sandwich" style="width:100%">
                    <h3>About me sajah!</h3>
                    <p>Hello! My name is Thitiporn but you can called me "sajah".</p>
                </div>
                <div class="w3-quarter">
                    <img src="/picture/.jpg" alt="Steak" style="width:100%">
                    <h3>Education</h3>
                    <p>Currently , I'm a University student at Thammasat (Year3). </p>
                </div>
                <div class="w3-quarter">
                    <img src="/picture/se.jpg" alt="Cherries" style="width:100%">
                    <h3>Skills</h3>
                    <p>Skill in software Engineering?</p>
                    <p>Coding , FrontEnd</p>
                </div>
                <div class="w3-quarter">
                    <img src="/picture/san.jpg" alt="Pasta and Wine" style="width:100%">
                    <h3>Actitvity</h3>
                    <p>Lifestyle , University Activity , Enjoy </p>
                </div>
                </div>
            </div>

            <div class="w3-panel w3-sand w3-center ">
                <span style="font-size:150px;line-height:0.6em;opacity:0.2">❝</span>
                <p class="w3-xlarge" style="margin-top:-40px"><i>La patience vient à bout de tout. - Harry Bernrd</i></p>
            </div>

            

        </bodyh>



        <div class="w3-center">
            <h1><em>More Details<em></h1>

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