Show-image-before-upload
========================

This java script function show image before upload and after chooser our image file.


Setp First:-

Create html form with file type input and image tag (img) and define a attribute id 
like this 
//<input type="file" multiple="multiple" name="file_upload" id="exampleInputFile1" class="btn btn-default" style="width:100%;" onchange="readURL(this);">
//<img id="blah" src="upload/defultproduct.jpg" width="200px" height="200px"/>

and call javascript function on onchange event as define here.

Step second:-
Now define a javascript function readURL(); like this,

//    function readURL(input) {
 //       if (input.files && input.files[0]) {
//            var reader = new FileReader();
//            reader.onload = function (e) {
//                $('#blah').attr('src', e.target.result);
//            }
//            reader.readAsDataURL(input.files[0]);
//        }
//    }

