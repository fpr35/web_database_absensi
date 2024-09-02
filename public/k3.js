$(document).ready(function(){
  $("#cari").on("keyup", function(){
    var search = $(this).val().toLowerCase();
    $(".tbl427").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(search) > -1)
    });
  });
});

// $(document).ready(function(){
//     $("#tk").click(function(){
//       $("#contentk3").load("tentangkami.php");
//     });
//   });

// $(document).ready(function(){
//     $("#sp").click(function(){
//       $("#contentk3").load("spinning.php");
//     });
//   });

// $(document).ready(function(){
//     $("#wv").click(function(){
//       $("#contentk3").load("Weaving.php");
//     });
//   });

// $(document).ready(function(){
//     $("#dfp").click(function(){
//       $("#contentk3").load("DFV.php");
//     });
//   });

// $(document).ready(function(){
//     $("#gr").click(function(){
//       $("#contentk3").load("garmen.php");
//     });
//   });