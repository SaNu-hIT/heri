$(document).ready(function () {


LoadDataDromDb();
// loadCategoryOne();

$('#horizontalTab').easyResponsiveTabs({
        type: 'default', //Types: default, vertical, accordion           
        width: 'auto', //auto or any width like 600px
        fit: true // 100% fit in a container
      });
 
console.log("Recreation")


$("#all").click(function()
{
LoadDataDromDb();
}); 
$("#one").click(function()
{
loadCategoryOne();
}); 
$("#two").click(function()
{
loadCategoryTwo();

}); 




});

function LoadDataDromDb() {

   $('#loading').show();
var data = "action="+ "selectall"
  $.ajax({
    type: 'POST',
    //input data to be sent to the server
    url: 'getListOfImages.php',
    data: data,
    success: function (res) {
      console.log('success');
      console.log(res);

      // var message = res.message
      // var status = res.status
      // console.log("Message" + message);
      // console.log("status" + status);

      // var dataarray = res.data
      // if (status) {
  updateDataTable(JSON.parse(res));
 





      // }
      // else {


      // }


      $("#demo").html(res);  //summation displayed in the HTML page   
    }
  });

}
function loadCategoryOne() {

  
var data = "action="+ "one"
  $.ajax({
    type: 'POST',
    //input data to be sent to the server
    url: 'getListOfImages.php',
    data: data,
    success: function (res) {
      console.log('success');
      console.log(res);

      // var message = res.message
      // var status = res.status
      // console.log("Message" + message);
      // console.log("status" + status);

      // var dataarray = res.data
      // if (status) {
  updateDataTable(JSON.parse(res));
 





      // }
      // else {


      // }


      $("#demo").html(res);  //summation displayed in the HTML page   
    }
  });

}

function loadCategoryTwo() {

  
var data = "action="+ "two"
  $.ajax({
    type: 'POST',
    //input data to be sent to the server
    url: 'getListOfImages.php',
    data: data,
    success: function (res) {
      console.log('success');
      console.log(res);

      // var message = res.message
      // var status = res.status
      // console.log("Message" + message);
      // console.log("status" + status);

      // var dataarray = res.data
      // if (status) {
  updateDataTable(JSON.parse(res));
 





      // }
      // else {


      // }


      $("#demo").html(res);  //summation displayed in the HTML page   
    }
  });

}

function updateDataTable(dataAsJsonArry) {
   $('#loading').hide();
  console.log(dataAsJsonArry);
  let html='';
for (var i = dataAsJsonArry.length - 1; i >= 0; i--) {
var item = dataAsJsonArry[i]
  console.log(item)

  // html+='<div class="col-md-3 col-sm-3 col-xs-6 portfolio-grids">';
  // html+='                        <div class="gallery-grid">';
  // html+='                               <img src="'+item.imagrUrl+'" data-big-src="'+item.imagrUrl+'" class="img-responsive" title="'+item.imageDescription+'" alt="'+item.imageDescription+'">';
  // html+='                          </div>';
  // html+='                   </div>';


// html+='<a href="'+item.imagrUrl+'" class="big"><img width="250" height="200" src="'+item.imagrUrl+'" alt="" title="'+item.imageDescription+'"></a>';
 html+='<a href="'+item.imagrUrl+'" class="big"><img width="250" height="200" src="'+item.imagrUrl+'" alt="" title="'+item.imageDescription+'"></a>';

}
$("#galleryData").html(html);

var $gallery = $('.gallery a').simpleLightbox();
$gallery.on('show.simplelightbox', function(){
      console.log('Requested for showing');
    })
    .on('shown.simplelightbox', function(){
      console.log('Shown');
    })
    .on('close.simplelightbox', function(){
      console.log('Requested for closing');
    })
    .on('closed.simplelightbox', function(){
      console.log('Closed');
    })
    .on('change.simplelightbox', function(){
      console.log('Requested for change');
    })
    .on('next.simplelightbox', function(){
      console.log('Requested for next');
    })
    .on('prev.simplelightbox', function(){
      console.log('Requested for prev');
    })
    .on('nextImageLoaded.simplelightbox', function(){
      console.log('Next image loaded');
    })
    .on('prevImageLoaded.simplelightbox', function(){
      console.log('Prev image loaded');
    })
    .on('changed.simplelightbox', function(){
      console.log('Image changed');
    })
    .on('nextDone.simplelightbox', function(){
      console.log('Image changed to next');
    })
    .on('prevDone.simplelightbox', function(){
      console.log('Image changed to prev');
    })
    .on('error.simplelightbox', function(e){
      console.log('No image found, go to the next/prev');
      console.log(e);
    });

}