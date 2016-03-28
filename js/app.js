angular.module('portfolioApp', [])
.controller('clientController', function($scope){
  $scope.clientsReviews = [
    {
      quote: "Jeremy was a true professional to work with. He helped to create my logo and business cards for my blog. He understood my design concept, was timely, and the end result was exactly what I had hoped for. I would highly recommend his graphic and web services!",
      client: "Missy Somers || ",
      linkText:"Behind The Plates",
      url: "http://www.behindtheplates.com/"
    },
    {
      quote: "Jeremy has worked with us on numerous fronts from logo creation to promotional/marketing items for our tournaments and events. He was a pleasure to work with and the final products were just what we wanted. His flexibility, understanding of our goals, and ability to make our vision a reality made the experience stress free. We would recommend Jeremy to anyone for any and all of the services he offers. Thanks for the great work!!",
      client: "Darren D'Alconozo || ",
      linkText:"No Idea Sports",
      url: "http://www.noideasports.com/"
    },
    {
      quote: "Jeremy helped us to create our own logo for Nugent's Prime Meat Market. Jeremy hand drew our 'Beef' logo. Even though we changed our minds and direction a few times Jeremy happily applied the changes we suggested. He delivered our final logo on time, and below budget. I would highly recommend Jeremy for all of your design needs!",
      client: "Tim Nugent || ",
      linkText:"Nugent's Prime Market",
      url: "http://www.nugentsprime.com/"
    }
  ]
})
