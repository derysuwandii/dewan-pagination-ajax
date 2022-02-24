<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <link rel="icon" href="dk.png">
  <title>Dewan Pagination Ajax</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-dark bg-danger">
    <a class="navbar-brand text-white" href="index.php">
      Dewan Komputer
    </a>
  </nav>
  <div class="container">
    <h3 align="center" class="mt-3">Dewan Demo Pagination Dengan Ajax</h3>

    <div class="table-responsive" id="data"></div>  
  </div>
  <script>
   $(document).ready(function(){
        load_data();
        function load_data(page){
             $.ajax({
                  url:"data.php",
                  method:"POST",
                  data:{page:page},
                  success:function(data){
                       $('#data').html(data);
                  }
             })
        }
        $(document).on('click', '.halaman', function(){
             var page = $(this).attr("id");
             load_data(page);
        });
   });
   </script>
</body>
</html>
