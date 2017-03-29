<!doctype html> <html lang="en"> <head> <meta charset="UTF-8"> <title>Laravel and Angular Event System</title>

    <!-- CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css"> <!-- load bootstrap via cdn -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"> <!-- load fontawesome -->
    
    <!-- JS -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script> <!-- load angular -->
    
    <!-- ANGULAR -->
    <!-- all angular resources will be loaded from the /public folder -->
        <script src="controllers/mainCtrl.js"></script> <!-- load our controller -->
        <script src="services/eventService.js"></script> <!-- load our service -->
        <script src="js/app.js"></script> <!-- load our application -->
    

</head> 
<!-- declare our angular app and controller --> 
<body class="container" ng-app="eventApp" ng-controller="mainController">

<div class="row">
    <div class="col-md-6">
        <h3>Upcoming Events</h3>
        <a href="" class="btn btn-primary">New Event</a>
        <a href="" class="btn btn-primary">Past Events</a>
    </div>
    <div class="col-md-6">
            <ul class="nav nav-tabs nav-justified">
                <li><a href="">Dashboard</a></li>
                <li><a href="">Events</a></li>
                <li><a href="">Address Book</a></li>
            </ul>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <br />
    </div>
</div>
<div class="row">
    <div class="col-md-12">
    <table class="table table-bordered">
        <tr>
            <th>Title</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>I</th>
            <th>C</th>
            <th>D</th>
            <th>A</th>
        </tr>
  <tr ng-repeat="event in events">
    <td>{{ event.title }}</td>
    <td>{{ event.start_date }}</td>
    <td>{{ event.end_date }}</td>
    <td>{{ }}</td>
    <td>{{ }}</td>
    <td>{{ }}</td>
    <td>{{ }}</td>
  </tr>
</table>
</div>
</div>

</body> 
</html>