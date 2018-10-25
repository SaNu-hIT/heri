$(document).ready(function(){

LoadDataDromDb();



    $('.reorder_link').on('click',function(){
        $("ul.reorder-photos-list").sortable({ tolerance: 'pointer' });
        $('.reorder_link').html('save reordering');
        $('.reorder_link').attr("id","saveReorder");
        $('#reorderHelper').slideDown('slow');
        $('.image_link').attr("href","javascript:void(0);");
        $('.image_link').css("cursor","move");
        $("#saveReorder").click(function( e ){
            if( !$("#saveReorder i").length ){
                $(this).html('').prepend('<img src="images/refresh-animated.gif"/>');
                $("ul.reorder-photos-list").sortable('destroy');
                $("#reorderHelper").html( "Reordering Photos - This could take a moment. Please don't navigate away from this page." ).removeClass('light_box').addClass('notice notice_error');
    
                var h = [];
                $("ul.reorder-photos-list li").each(function() {  h.push($(this).attr('id').substr(9));  });
                
                $.ajax({
                    type: "POST",
                    url: "orderUpdate.php",
                    data: {ids: " " + h + ""},
                    success: function(){
                        window.location.reload();
                    }
                }); 
                return false;
            }   
            e.preventDefault();     
        });
    });






});

function LoadDataDromDb() {

   $('#loading').show();
var data = "action="+ "selectall"
  $.ajax({
    type: 'POST',
    //input data to be sent to the server
    url: 'listimagefororderimage.php',
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