{{-- <!DOCTYPE html>
<html>
<head>
  <title>Ajax search</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
  .box{
    width:600px;
    margin:0 auto;
  }
</style>
</head>
<body>
  <br />
  <div class="container box">
   <h3 align="center">tìm kiếm </h3><br />   
   <div class="form-group">
    <input type="text" name="ten_snh_vien" id="ten_sinh_vien" class="form-control input-lg" placeholder="Enter Country Name" />
    <div id="countryList"><br>
    </div>
  </div>
  {{ csrf_field() }}
</div>
</body>
</html>
<script>
    $(document).ready(function(){
  
     $('#ten_sinh_vien').keyup(function(){ //bắt sự kiện keyup khi người dùng gõ từ khóa tim kiếm
      var query = $(this).val(); //lấy gía trị ng dùng gõ
      if(query != '') //kiểm tra khác rỗng thì thực hiện đoạn lệnh bên dưới
      {
       var _token = $('input[name="_token"]').val(); // token để mã hóa dữ liệu
       $.ajax({
        url:"{{ route('search') }}", // đường dẫn khi gửi dữ liệu đi 'search' là tên route mình đặt bạn mở route lên xem là hiểu nó là cái j.
        method:"POST", // phương thức gửi dữ liệu.
        data:{query:query, _token:_token},
        success:function(data){ //dữ liệu nhận về
         $('#countryList').fadeIn();  
         $('#countryList').html(data); //nhận dữ liệu dạng html và gán vào cặp thẻ có id là countryList
       }
     });
     }
   });
  
     $(document).on('click', 'li', function(){  
      $('#ten_sinh_vien').val($(this).text());  
      $('#countryList').fadeOut();  
    });  
  
   }); 
  </script> --}}
  <table>
    <div>
    <form action="{{ route('quan_ly.timkiem') }}" method="post">
        {{ csrf_field() }}
          <label class='' for="">Tìm kiếm  :</label>
          <input style="border: 1px solid black" type="search" id="tim_kiem" name="tim_kiem" placeholder="  Tìm kiếm sinh viên ">
      </form>
    </div>
  </table>