	<?php include_once("adminheader - Copy.php");
	include('notification.php');

?>
<script>
	$(document).ready(function() {
		//Plant notification
		function load_unseen_notification(view = '') {
			$.ajax({
				url: "PlantFetch.php",
				method: "POST",
				data: {
					view: view
				},
				dataType: "json",
				success: function(data) {
					$('.dropdown-menu').html(data.notification);
					if (data.unseen_notification > 0) {
						$('.count').html(data.unseen_notification);
					}
				}
			});
		}

		load_unseen_notification();

		$(document).on('click', '.dropdown-toggle', function() {
			$('.count').html('');
			load_unseen_notification('yes');
		});

		setInterval(function() {
			load_unseen_notification();;
		}, 5000);

	});



	// insert amount
	$("#tbl").on('click', '#insert', function() {
		var rid = ($(this).closest('td').parent()[0].sectionRowIndex);
		alert(rid);


		var val = $(this).closest('tr').find('#pay').val();
		alert(val);
		if (val != '' && id != '') {

			var tr = $(this).closest('tr');
			var id = tr.find('.ids').text();
			var tester = tr.find('.tester').text();
			alert('id: ' + id);

			$.ajax({
				url: "amountadd.php",
				type: "POST",
				data: {
					id: id,
					val: val
				},
				success: function(dataResult) {
					alert("Amount Inserted");
					$('#pay').val('');
				}

			});
		} else {
			alert("Plese enter amount");
			$('#pay').val('');
		}
	});

	// delete plant record
	$("#tbl").on('click', '#del', function() {
		var rid = ($(this).closest('td').parent()[0].sectionRowIndex);
		alert(rid);


		var tr = $(this).closest('tr');
		var id = tr.find('.ids').text();
		var tester = tr.find('.tester').text();
		alert('id: ' + id);

		$.ajax({
			url: "deletePlant.php",
			type: "POST",
			data: {
				id: id
			},
			success: function(dataResult) {
				alert("deleted");

			}

		});

	});

	//Plant Payment status
	$("#tbl").on('click', '#status', function() {
		var rid = ($(this).closest('td').parent()[0].sectionRowIndex);
		alert(rid);

		var tr = $(this).closest('tr');
		var id = tr.find('.ids').text();
		var tester = tr.find('.tester').text();
		alert('id: ' + id);
		$.ajax({
			url: "updatePlant.php",
			type: "POST",
			data: {
				id: id
			},
			success: function(dataResult) {
				alert("Updated");

			}

		});

	});

	// attachment js

	// $("#tbl").on('click', '#btn', function () {
	// var rid=($(this).closest('td').parent()[0].sectionRowIndex);
	// alert(rid);

	// var tr = $(this).closest('tr');
	// var id = tr.find('.ids').text();
	// var tester = tr.find('.tester').text();
	// alert('id: '+id);
	// $.ajax({
	// url: "ajaxupload.php",
	// type: "POST",
	// data:  new FormData(this), //here want to pass id
	// contentType: false,
	// cache: false,
	// processData:false,
	// beforeSend : function()
	// {
	// //$("#preview").fadeOut();
	// $("#err").fadeOut();
	// },
	// success: function(data)
	// {
	// if(data=='invalid')
	// {
	// // invalid file format.
	// $("#err").html("Invalid File !").fadeIn();
	// }
	// else
	// {
	// // view uploaded file.
	// $("#preview").html(data).fadeIn();
	// $("#form")[0].reset(); 
	// }
	// },
	// error: function(e) 
	// {
	// $("#err").html(e).fadeIn();
	// }          
	// });

	/* Side bar Js*/

	function openNav() {
		document.getElementById("mySidenav").style.width = "250px";
		document.getElementById("main").style.marginLeft = "250px";
	}

	function closeNav() {
		document.getElementById("mySidenav").style.width = "0";
		document.getElementById("main").style.marginLeft = "0";
	}
</script>