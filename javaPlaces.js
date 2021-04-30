var div =document.createElement('div');
const shopsContainer = document.querySelector('#shops-container');


function getInputValue(){
  var input = document.getElementById('input-field-favourite');
  console.log(input.value);
  fetch("https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=52.192001,-2.220000&radius=1500&keyword="+input.value+"&key=AIzaSyBr-cMsWYQHAG8DxMAl3aSD8SQ1I0AkEO8")
    .then(response => response.json())
    .then(function(data){
      for(var i=0 ; i<data.results.length;i++){

        //add the row here
        $('ul').before(data.results[i].name);
        $('ul').before('<div id="innerdiv" class="col-xl-12 col-lg-12">'+"Rated " +data.results[i].rating+"/5");
        $('ul').before("user ratings: "+data.results[i].rating+data.results[i].user_ratings_total+'<br>');
        $('ul').before('<image src='+data.results[i].icon+'></image>');
        $('ul').before(data.results[i].vicinity + '<br>');
        $('ul').before("---------------------------------------------------------"+"<br>");

      }

    })
}
