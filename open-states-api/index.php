<!DOCTYPE html>
  <!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
  <!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>OpenStates API Demo</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimal-ui">
    <base href="/open-states-api/" target="" />

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootswatch/3.2.0/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="styles/sweet-alert.css">
    <link rel="stylesheet" href="styles/app.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/async/0.9.0/async.js"></script>
    <script src="scripts/sweet-alert.min.js"></script>
    <script src="scripts/app.js"></script>
  </head>
  <body>
    <div id="main" role="main" class="row">
      <section class="col-md-12">
        <h1>OpenStates API Demo</h1>
        <h4>Find Your State Legislators by Zip Code</h4>
        <form class="petition" action="" method="get" accept-charset="utf-8">
          <div class="form-group">
            <label for="name">Name:</label>
            <input class="form-control" type="text" name="name" placeholder="Name" id="name" value="" />
          </div>
          <div class="form-group">
            <label for="zip">Zip Code:</label>
            <input class="form-control" type="text" name="zip" placeholder="Zip Code" id="zip" value="" />
          </div>
          <input class="btn btn-info" type="submit" name="" id="" value="Submit" />
        </form>
        <h4>Your State Legislators:</h4>
        <div class="tweet-legislators">
        </div>
      </section>
    </div>
    <?php include '../analytics.php'; ?>
  </body>
</html>

