$(document).ready(function(){
    alert("OK")
    $("#ma_nganh").change(function (e) { 
        e.preventDefault();
        var value = $(this).val();
        alert(value);
        $.ajax({
            type: "POST",
            url: "/bkacad/public/quan_ly/chon_nganh",
            data: "data",
            dataType: "dataType",
            success: function (data) {
            }
        });
        $.ajax({
            type: "method",
            url: "url",
            data: "data",
            dataType: "dataType",
            success: function (response) {
                
            }
        });
    });
  });