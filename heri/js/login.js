$(document).ready(function () {

console.log("recreation")




 $(document).on('submit', '#frmlogin', function (event) {

  event.preventDefault();
  console.log("buton click")
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    console.log(username);
    console.log(password);
    var data = {};
    data.username = username;
    data.password=password; 
    data.action="login"; //input



    $.ajax({
      type: 'POST',
      data: JSON.stringify(data),
      url: 'logincheck.php',
      data:data,
      success: function (res) {
        console.log('success');
      console.log(JSON.parse(res));


      updateViews(JSON.parse(res));
        // if () {


        //    window.open("imageupload.html")
   
        // }
       

       
      }
    });

  });



});


function updateViews(dataAsJsonArry) {

  
 console.log(dataAsJsonArry);
  console.log(dataAsJsonArry.success);

  console.log(dataAsJsonArry.Message);
if (dataAsJsonArry.success=="true") {





     $("#reorderHelper").html(dataAsJsonArry.Message).addClass('notice notice_error');
window.location.href = "fileuploadmultipple";
           // window.open("http://localhost/heritageweb/fileuploadmultipple.html")
   
        }
        else{
alert(dataAsJsonArry.Message);
        }
}