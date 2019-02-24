<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravue</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">      
  </head>
  <body>
    <div class="container" style="margin-top:40px;">
      <div class="row">
        <div class="col-md-7">
          <div class="panel panel-default">
            <div class="panel-heading">User</div>
            <div class="panel-body">
              <div id="user">
                <router-view name="userIndex"></router-view>
                <router-view></router-view>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-md-5">
          <div class="panel panel-default">
            <div class="panel-heading">Level</div>
            <div class="panel-body">
              <div id="level">
                <router-view name="levelIndex"></router-view>
                <router-view></router-view>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>  
    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>
