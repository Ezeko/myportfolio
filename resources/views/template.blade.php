<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>@yield('title')</title>
  <meta name="description" content="Adejobi Ezekiel portfolio">
  <meta name="author" content="Adejobi Ezekiel">
  <link rel="shortcut icon" href="https://res.cloudinary.com/ezeko/image/upload/v1566502038/images/31517324_l4rbyl.jpg" 
        type="image/x-icon">
        <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <!--Font awesome 5 link-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
        crossorigin="anonymous">

  <link rel="stylesheet" href="{{URL::asset('css/styles.css') }}" >

</head>

<body>
@yield('content')
  <script src="js/scripts.js"></script>
</body>
</html>