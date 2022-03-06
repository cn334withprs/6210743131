<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=divice-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Life of SA</title>
    </head>
    <body>
        <div class="container max-w-full mx-auto pt-4">

            <a href="/posts" class="bg-blue-500">Go back</a>
            <form method="POST" action="/posts/{{ $post->id }}">
                @method('PUT')
                @csrf

                <div class="mb-4">
                    <label for="title">Title:</label>
                    <input id="title" name="title" value="{{ $post->title }}"></input>
                </div>

                <div class="mb-4">
                    <label for="content">Content:</label>
                    <textarea id="content" name="content">{{ $post->content }}</textarea>
                </div>


                <Button class="bg-blue-500">update</Button>
                <a href="/posts" class="bg-blue-500">Cancel</a>

                <form action="/posts/{{ $post->id}}">
                    @csrf
                    @method('DELETE')

                    <Button class="bg-blue-500">Delete</Button>
                </form>

            </form>
        </div>
        
    </body>
</html>