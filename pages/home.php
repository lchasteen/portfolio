<!-- Example row of columns -->
<div class="row" ng-app="myApp" ng-controller="customersCtrl">
<div class="col-md-4" ng-repeat="x in names">
  <h2>{{x.title}}</h2>
  <p>{{x.description}}</p>          
</div>
</div>