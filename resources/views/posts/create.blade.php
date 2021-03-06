<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>

<body>

    <h1>Posts: Create Post</h1>

    <nav>
        <ul>
            <li><a href={{$url=route("posts.index")}}>Posts</a></li>
        </ul>
    </nav>

    <form action="/posts" method="POST">
        @csrf
        Topic
        <select name="topic" id="topic" value="{{ old('topic')}}">
            @foreach($topics as $topic)
            <option value="{{ $topic->topic }}">{{ $topic->topic }}</option>
            @endforeach
        </select>
        @if ($errors->has('topic'))
        <div class="error">{{ $errors->first('topic') }}</div>
        @endif
        <br>
        title
        <input type="text" name="title" value="{{ old('title')}}">
        @if ($errors->has('title'))
        <div class="error">{{ $errors->first('title') }}</div>
        @endif
        <br>
        Content
        <textarea name="content" rows="10" cols="30" name="content" value="{{ old('content')}}">Please type here..</textarea>
        @if ($errors->has('content'))
        <div class="error">{{ $errors->first('content') }}</div>
        @endif
        <div id=inputButton>
            <button type="submit">button</button>
        </div>
    </form>


</body>

</html>