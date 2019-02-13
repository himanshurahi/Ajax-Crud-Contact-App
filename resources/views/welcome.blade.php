<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Ajax Crud Contact App</title>
  </head>
  <body>
      

      <div class="row">
        
        <div class="col-lg-8 offset-lg-2 col-sm-12">
            <div class="card text-center">
              <div class="card-header bg-primary text-white">
                <span class="float-left mt-2">Contact Book</span> <span class="float-right"><button type="submit" class="btn btn-success" id="AddContact"><i class="fa fa-plus"></i></button></span>
              </div>
              <div class="card-body" id="data">
               
              </div>
              <div class="card-footer bg-primary text-white">
                <span class="float-lg-left">Developed By Himanshu Rahi</span>
              </div>
            </div>
        </div>

      </div>
      <div id="modal">
        
      </div>
      



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <script type="text/javascript">
    
     
        $(document).ready(function(){

          $.ajax({

            type:'get',
            url:'{{ URL('contacts') }}',
            success:function(data){
              $("#data").append(data);

            }

          })


        })




      $("#AddContact").click(function(){

        $.ajax({

          type:'get',
          url:'{{ URL('contacts/create') }}',
          success:function(data){
            $("#modal").append(data);
            $("#addContact").modal('show');
          }


        });


      })


      $("#modal").on('submit','#frmAdd',function(e){
        e.preventDefault();
        

        var frmData = $(this).serialize();
        // console.log(frmData);

        $.ajax({

          type:'POST',
          url:'contacts',
          data:frmData,
          success:function(data){
            $("#data").empty().append(data);
          },
          error: function(data) {
          // $.each(xhr.responseJSON.errors, function(key,value) {
          //  console.log(key+":"+value);
          //   }); 
          $.each(data.responseJSON.errors, function (i, error) {
                alert(errors);
            });

    }


        })


      })



      $('#data').on('click',"#editButton",function(){
        var id = $(this).data('contact');
        // alert(id);
        
        $.ajax({

          type:'get',
          url:"{{ URL("contacts/edit/")}}/"+id,
          success:function(data){
            $("#modal").empty().append(data);
            $("#editContact").modal('show');
          }

        })


      })


      $("#modal").on('submit','#frmUpdate',function(e){
        e.preventDefault();
        

        var frmData = $(this).serialize();
        var id = $('#id').val();
        

      $.ajax({

          type:'post',
          url:"{{ URL("contacts/")}}/"+id,
          data:frmData,
          success:function(data){
            $("#data").empty().append(data);
            $("#editContact").modal('hide');
            
          }

        })

       


      })


            $("#modal").on('click','#DeleteContactBtn',function(e){
            e.preventDefault();
          var frmData = $("#deleteForm").serialize();


          
          var id = $('#id').val();

           // 
           $.ajax({
            

            type:'post',
          url:"{{ URL("contacts/")}}/"+id,
          data:frmData,
          success:function(data){
            $("#data").empty().append(data);
            $("#editContact").modal('hide');
            
          }


           })
        
        
      

       


      })






    </script>

  </body>
</html>