<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inwara</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400&display=swap" rel="stylesheet">
    <!-- Semantic-ui cdn -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
  </head>
  <body>
    <header>
      <div class="row">
        <h1>Tron</h1>
      </div>
    </header>
    <section class="ui raised segment" id="management">
      <table class="ui large table">
        <tbody>
        <th>Management-1 Designation</th><td id="Designation"></td>
      </tbody>
      </table>
    </section>
    <footer>

    </footer>
    <input type="hidden" name="_token" value="{{csrf_token()}}" id="csrf">
  <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous">
  </script>
  <script src="js/tron.js" type="text/javascript"></script>
  </body>
</html>
