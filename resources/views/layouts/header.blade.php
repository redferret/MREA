<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="{{asset("css/globalStyles.css")}}">
  <title>{{ config('app.name', 'MREA System') }}</title>
  <!-- Global JavaScript files -->
  <script data-require="angular.js@1.4.0" data-semver="1.4.0" 
  src="https://code.angularjs.org/1.4.0/angular.js"></script>
  <script src="{{asset("js/PackageBuilder.js")}}" type="text/javascript"></script>
  <script src="{{asset("js/app.js")}}" type="text/javascript"></script>
  <script src="{{asset("js/persist-min.js")}}" type="text/javascript"></script>
  <script src="{{asset("js/Logger.js")}}" type="text/javascript"></script>
  <script src="{{asset("js/Definitions.js")}}" type="text/javascript"></script>
  <script src="{{asset("js/ng.js")}}" type="text/javascript"></script>
  <script src="{{asset("js/MREA.js")}}" type="text/javascript"></script>
  <script src="{{asset("js/SystemReck.js")}}" type="text/javascript"></script>
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script>
window.Laravel = <?php
echo json_encode([
    'csrfToken' => csrf_token(),
]);
?>
  </script>
</head>
