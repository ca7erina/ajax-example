<!DOCTYPE html>
<html>
<head>

	<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
	<script type="text/javascript" >
		$(document).ready(getdata);
		function getdata(){
		var tablehead = "<table><tr id = 'tablehead'><td>Store Name</td><td>Number of Peope Entering</td><td>Number of Peope Leaving</td></tr>";
		var data = "";		
		  $.ajax({
		    type: "GET",
		    url: "lab9_serverApp_xml.php",
		    dataType: "xml",
		    success: function(xml){
			    $(xml).find('entry').each(function(){
			      var storename = $(this).find('storename').text();
			      var numberOfPeopleEntering = $(this).find('numberOfPeopleEntering').text();
			      var numberOfPeopleLeaving = $(this).find('numberOfPeopleLeaving').text();
			      data += "<tr><td>"+storename+"</td><td>"+numberOfPeopleEntering+"</td><td>"+numberOfPeopleLeaving+"</td></tr>";
			    });
  		     },
	
		     complete:	function() {
			     $("#display").html(tablehead+data+"</table>");	
			      // Schedule the next request when the current one's complete
			      setTimeout(getdata, 30000);
				
		     },
		     error: function() {
			    alert("An error occurred while processing XML file.");
		     }
		  });
		}
	
	</script>
	<style>
		table {
		    border: 1px solid white;
		    background-color:#e6b3e6;
		    color:white;
		    font-family:sans-serif;
		    font-size:11pt;
		    border-collapse: collapse;
		    margin: 2em auto; 
		    table-layout: fixed; width: 90%
		}
		td{
		   padding: 5px;
		   border: 1px solid white;
			text-align: center;
		   word-wrap: break-word;
		}
		#tablehead {
		   background-color: #cc66cc;
		   font-family:sans-serif;
		   font-size:15pt;
		   color:white;
		   text-align: center;
		   height: 44px;
		   font-weight: bold;
		}
	</style>

	<title>Stores</title>
</head>
<body>


<div id = "display">
	
	 <table class = "tabledisplay">
	  <tr id = "tablehead">
	    <td>Store Name</td>
	    <td>Number of Peope Entering</td>
	    <td>Number of Peope Leaving</td>
	  </tr>
	
	</table> 
	</div>

</body>
	
</html>
