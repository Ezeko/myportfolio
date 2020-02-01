<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>@yield('title')</title>
  <meta name="description" content="Adejobi Ezekiel portfolio">
  <meta name="author" content="Adejobi Ezekiel">
  <link rel="shortcut icon" href="https://res.cloudinary.com/ezeko/image/upload/v1566502038/images/31517324_l4rbyl.jpg" 
        type="image/x-icon">

  <link rel="stylesheet" href="{{URL::asset('css/styles.css') }}" >

</head>

<body>
@yield('content')
  <script src="js/scripts.js"></script>
</body>
</html>