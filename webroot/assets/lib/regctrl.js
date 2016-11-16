var app = angular.module('regApp',['notification']);
app.controller('newintake',function($scope,$notification,$http){
  $scope.formData = {};
  $scope.addUser = function(){

  var pass = $scope.formData.pass;
  var vpass = $scope.formData.vpass;

  if (pass != vpass) {
    $notification('Password', {
     body: 'Password combination not correct'
   });
 }else{
   $http({
 method  : 'POST',
 url     : 'processreg',
 data    : $.param($scope.formData),  // pass in data as strings
 headers : { 'Content-Type': 'application/x-www-form-urlencoded'}


})
 .success(function(data) {
   console.log(data);

   if (!data.success) {
   } else {
     // if successful, bind success message to message

   }
 });
 }


 }
});
