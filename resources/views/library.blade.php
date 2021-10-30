<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <style>
        body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
    </style>
</head>
<body>
<!-- w3-content defines a container for fixed size centered content,
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1400px">

    <!-- Header -->
    <header class="w3-container w3-center w3-padding-32">
        <h1><b>MY Library</b></h1>
        <p>Welcome</p>
    </header>

    <!-- Grid -->
    <div class="w3-row">

        <!-- Blog entries -->
        <div class="w3-col l8 s12">
            <!-- Blog entry -->
            @foreach($books as $book)
            <div class="w3-card-4 w3-margin w3-white">
                <img src="https://images.unsplash.com/photo-1589998059171-988d887df646?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MTJ8fHxlbnwwfHx8fA%3D%3D&w=1000&q=80" alt="Nature" style="width:50%">
                <div class="w3-container">
                    <h4><b>Book ID: {{ $book->bookid }}</b></h4>
                    <h4><b>Author ID: {{ $book->authorid }}</b></h4>
                    <h5>Book title: {{ $book->title }}</h5>
                </div>

                <div class="w3-container">
                    <p>ISBN: {{ $book->ISBN }}</p>
                    <p>Pub_year: {{ $book->pub_year }}</p>
                    <p>Available: {{ $book->available }}</p>
                    <div class="w3-row">
                        <div class="w3-col m8 s12">
                            <p><button class="w3-button w3-padding-large w3-white w3-border"><b>READ MORE »</b></button></p>
                        </div>
                        <div class="w3-col m4 w3-hide-small">
                            <p><span class="w3-padding-large w3-right"><b>Comments  </b> <span class="w3-tag">0</span></span></p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <hr>
        </div>
    </div><br>

</div>
</body>
</html>
