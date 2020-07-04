<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Slider</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">


  <script type="text/javascript">
    function validation() {
      var a = document.form.name.value;
      if (!isNaN(a)) {
        alert("Please Enter Only Characters");
        document.form.name.select();
        return false;
      }
    }
  </script>
</head>

<body>
  <?php include("header.php");
  include("Formdesign.php"); ?>
  <br />

  <?php include("footer.html"); ?>
  <script>
    $(document).ready(function() {

      function load_unseen_notification(view = '')
      {
      $.ajax({
      url:"fetch.php",
      method:"POST",
      data:{view:view},
      dataType:"json",
      success:function(data)
      {
      $('.dropdown-menu').html(data.notification);
      if(data.unseen_notification > 0)
      {
      $('.count').html(data.unseen_notification);
      }
      }
      });
      }

       load_unseen_notification();

      // $('#comment_form').on('submit', function(event) {
      //   debugger;
      //   event.preventDefault();
      //   if ($('#fname').val() != '' && $('#phn').val() != '' && $('#village').val() != '' && $('#survey').val() != '' && $('#taluka').val() != '' && $('#testing').val() != '' && $('#crop').val() != '' && $('#sample').val() != '') {
      //     var form_data = $(this).serialize();
      //     $.ajax({
      //       url: "insertplant.php",
      //       method: "POST",
      //       data: form_data,
      //       success: function(data) {
      //         $('#comment_form')[0].reset();
      //         alert("sucess");
      //         window.location.href = 'HomePage.php';
      //         //load_unseen_notification();
      //       }
      //     });
      //   } else {
      //     alert("please fill required details");
      //   }
      // });

        $(document).on('click', '.dropdown-toggle', function(){
        $('.count').html('');
        load_unseen_notification('yes');
        });

        setInterval(function(){ 
        load_unseen_notification();; 
        }, 5000);

    });
  </script>