
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="css/blog.css" rel="stylesheet">
  </head>

<body>

  <div class="container">
  
    @include ('layouts.nav')

    <div class="blog-header">
      <div class="container">
        <h1 class="blog-title"> The Bootstral Blog</h1>
        <p class = "lead blog-description"> An Example blog template built with Bootstreap.</p>
      </div>
    </div>

    <!-- @include ('layouts.optional') -->

    <main role="main" class="container">
      <div class="row">


        @yield ('content')
        <!-- could yield the posts in a class fro the col -->

        

        @include ('layouts.sidebar')

      </div><!-- /.row -->
    </main><!-- /.container -->

  @include ('layouts.footer')

  </div>

</body>
</html>

