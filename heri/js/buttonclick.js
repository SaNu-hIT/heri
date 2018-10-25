$(document).ready(function () {



 $(document).on('submit', '#frmDataEdit', function (e) {
var formData = new FormData($('#frmDataEdit'));

      console.log('updatebutton');
e.preventDefault();
  $.ajax({
    type: 'POST',
    data: new FormData(this),
    contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
    processData: false, 
    //input data to be sent to the server
    url: 'uploadedit.php',
    success: function (res) {
      console.log('success');
      console.log(res);
          LoadDataDromDb();
     $('#myModal').modal('hide');
      // $("#demo").html(res);  //summation displayed in the HTML page   
    }
  });



    // var descriptiontxt = $('#descriptiontxt').val();
    // var Categoryid = $('#Categoryid').val();
    // var imageurl = "imageurl"


    // var data = {};
    // data.id = id;
    // data.action="updatedata";
    // data.descriptiontxt = descriptiontxt;
    // data.Categoryid=Categoryid;
    // data.imageurl=imageurl;


 });


  $(document).on('click', '.btnEdit', function () {
     

    $('#myModal').modal('show');
    var id = $(this).attr('data_id');
    console.log(id);
    var data = {};
    data.code = id;
    data.action="selectbyid";

      console.log(id); //input
    $.ajax({
      type: 'POST',
      data: data,
      url: 'getimagedetailsbyid.php',
      success: function (res) {
    console.log()

updateModel(JSON.parse(res));


      


      }
    });



  });




var mytable;
mytable=null;
LoadDataDromDb();




$(document).on('click', '.btnDelete', function () {
 
  var id = $(this).attr('data_id');
  var data_title = $(this).attr('data_title');
   
   console.log(id);
   var data = {};
   data.id = id;
   data.action="delete" //input


   swal({
     title: "Are you sure to delete "+data_title+" ? ",
     text: "Delete Confirmation?",
     type: "warning",
     showCancelButton: true,
     confirmButtonColor: "#DD6B55",
     confirmButtonText: "Delete",
     closeOnConfirm: true
 },
     function () {
      $('#loading').show();
         $.ajax({
           type: 'POST',
           data: JSON.stringify(data),
           url: 'imagedelete.php',
           data:data,
           success: function (res) {
             console.log('success');
             console.log(res);
              $('#loading').hide();
              swal("Deleted",'Image deleted successfully', "success");
     
             LoadDataDromDb();
            
           },
                   error: function () {
                       ;
                       swal("Error", "Script Error! Contact service provider", "error");
                   }
         });

         //    var retrunval = Delete_PurchasedItem_Data(P_OrderItemId);

     }
 );

 });


 
console.log("recreation")

$("#extrabutton").hide();

var extraObj = $("#fileuploader").uploadFile({
url:"upload.php",
fileName:"myfile",
showProgress:true,
showPreview:true,
 previewHeight: "100px",
 previewWidth: "100px",
 customProgressBar: function(obj,s)
		{
			this.statusbar = $("<div class='ajax-file-upload-statusbar col-md-6'></div>");
            this.preview = $("<img class='ajax-file-upload-preview' />").width(s.previewWidth).height(s.previewHeight).appendTo(this.statusbar).hide();
            this.filename = $("<div class='ajax-file-upload-filename'></div>").appendTo(this.statusbar);
            this.progressDiv = $("<div class='ajax-file-upload-progress col-md-12'>").appendTo(this.statusbar).hide();
            this.progressbar = $("<div class='ajax-file-upload-bar'></div>").appendTo(this.progressDiv);
            this.abort = $("<div>" + s.abortStr + "</div>").appendTo(this.statusbar).hide();
            this.cancel = $("<div>" + s.cancelStr + "</div>").appendTo(this.statusbar).hide();
            this.done = $("<div>" + s.doneStr + "</div>").appendTo(this.statusbar).hide();
            this.download = $("<div>" + s.downloadStr + "</div>").appendTo(this.statusbar).hide();
            this.del = $("<div>" + s.deleteStr + "</div>").appendTo(this.statusbar).hide();
            
            this.abort.addClass("custom-red");
            this.done.addClass("custom-green");
			this.download.addClass("custom-green");            
            this.cancel.addClass("ajax-file-upload-red ajax-file-upload-cancel");
            this.del.addClass("custom-red");
          //   if(count++ %2 ==0)
	        //     this.statusbar.addClass("even");
          //   else
    			// this.statusbar.addClass("odd"); 
			return this;
			
    },
    
extraHTML:function()
{
    	var html = "<div class='row'><div class='form-group container'><label class='col-md-12'>Description :</label><input type='text' class='form-group col-md-8' name='tags' value='' /> </div>";
      html += "<div class='form-group container'><label class='col-md-12'>Category :</label><select class='form-group col-md-8' name='category'><option value='1'>Winterkasten, Hessen-Germany</option><option value='2'>Kalaparambil Ayurveda & Homestay</option></select> </div>";
 
		html += "</div>";
		return html;    		
},
onSuccess:function(files,data,xhr,pd)
{
extraObj.reset(true);
	console.log(data)


  LoadDataDromDb();
  $("#extrabutton").hide();
    //files: list of files
    //data: response from server
    //xhr : jquer xhr object
},
onSelect:function(files)
{
   $("#extrabutton").show();
    console.log(files);
    files[0].name;
    files[0].size;
    return true; //to allow file submission.
},

autoSubmit:false
});

$("#extrabutton").click(function()
{

	extraObj.startUpload();
}); 


function LoadDataDromDb() {
 $('#loading').show();
	
var data = "action="+ "selectall"
  $.ajax({
    type: 'POST',
    //input data to be sent to the server
    url: 'listimage.php',
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
 
  console.log(dataAsJsonArry);
if (dataAsJsonArry.successmessage.success) {


 
  console.log(dataAsJsonArry);

 $('#loading').hide();
  if(mytable)
  mytable.destroy();
  
  mytable = $('#imageDatatable').DataTable({
    destory: true,
    bRetrieve: true,
    searching: true,
    data: dataAsJsonArry.data,
    pageLength:25,
    columns: [
      { data: 'slno' },
       {
        "render": function (data, type, JsonResultRow, meta) {
          var image = JsonResultRow.imagrUrl;
          console.log("IMAGE"+image);
          return '<img src="' + image + '" alt="" class="img-thumbnail img-table img-responsive">';
        }
      },
      {data:'imageName'},
       { data: 'imageDescription' },
      
      { data:'imageposition'},
            { data:'lastdate'},
      { data:'category_field'},
      {
        data: null, render: function (data, row, type) {
          var html = '<div role="group" aria-label="Basic example" class="btn-group btn-group-sm  alignclass  ">';
          html += '<button type="button" data_id=' + data.imageId + ' class="btnEdit btn btn-outline btn-success"><i class="fa fa-pencil"></i></button>';
          html += '<button type="button" data_title=' + data.imageName + ' data_id=' + data.imageId + '  class="btnDelete btn btn-outline btn-danger"><i class="fa fa-trash"></i></button>';
          html += '</div>';
          return html;
        }
      }
    ]

  });


  console.log("Reload table");


   mytable.draw();
 
}

else
{
    console.log("Plz login");
$('#loading').hide();
    window.location.href = "login";
}
}
});

function updateModel(dataAsJsonArry) {

  console.log(dataAsJsonArry);
$('#Categoryid').val(dataAsJsonArry.category_field).change();

  $('#tags').val(dataAsJsonArry.imageDescription);
  $('#id').val(dataAsJsonArry.imageId);
    $('#imageurl').val(dataAsJsonArry.imagrUrl);

  $("#imageid").attr("src", dataAsJsonArry.imagrUrl);

  
}
function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#imageid')
                    .attr('src', e.target.result)
                    .width(400)
                    .height(300);

                      $('#imageurl').val("");
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    function uploadImage()
    {


      return imageurl;

    }