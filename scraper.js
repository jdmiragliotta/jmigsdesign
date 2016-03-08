var request = require('request');
var cheerio = require('cheerio');


request("https://news.ycombinator.com/", function (error, response, html) {
  var $ = cheerio.load(html);
  var result = [];
  $("td.title").each(function(i, element){
    var title = $(".title a").text();
    var link = $(element).attr("href");

    result.(title, link);

    //scrape some stuff, put it in an object and add it to the result array

    });
  console.log(result);
});
