<html>
    <head>
        <title>@yield('title','Insert Title')</title>
        <link rel="stylesheet" media="all" href="<?= asset('css/app.css')?>" type="text/css" />
    </head>
    <body>
      <nav>
        <a href="<?= route('welcome.index') ?>">Home</a>
        <a href="<?= route('welcome.index') ?>">Add/Edit</a>
        <a href="<?= route('welcome.index') ?>">List</a>
      </nav>
      <h1>@yield('header', 'Insert Header')<h1>
      @yield('content')
    </body>
</html>