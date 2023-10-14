<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="/galleries">
        @csrf
            <div class="">

                <label class="label" for="name">Naam Schilderij:</label><br>
                <input id="name" type="text" name="name" placeholder="Vul de naam van het schilderij in" value=""><br>

                <label class="label" for="artist">Artiest:</label><br>
                <input id="artist" type="text" name="artist" placeholder="Vul de naam van de artiest in" value=""><br>

                <label class="label" for="genre"></label>

                <select name="genre">
                    @foreach($genres as $genre)
                        <option value="{{$genre->id}}">{{$genre->name}}</option>

                    @endforeach
                </select>
            </div>

                <div class="">
                    <button class="" type="submit">submit</button>
                </div>
    </form>
</body>
</html>
