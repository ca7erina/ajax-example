<!DOCTYPE html>
<html>
<head>

	<script type="text/javascript" >
		var sum = [0,0,0,0,0,0,0,0,0];

		// js ajax
		getdata = function(){
			var xmlhttp = new XMLHttpRequest();
			var url = "http://localhost:1234/lab9/json/lab9_serverApp.php";

			xmlhttp.onreadystatechange=function() {
			    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				myFunction(xmlhttp.responseText);

			    }
			}
			xmlhttp.open("GET", url, true);
			xmlhttp.send();
		
		}
		

		myFunction = function(response) {
		    //js jSON parse data 
		    var obj = JSON.parse(response);
		    var i;
		    var out = "<table class = 'tabledisplay' id = 'datatable'><tr id = 'tablehead'><td>Store Name</td><td>Number of Peope Entering</td><td>Number of Peope Leaving</td><td>Sum</td></tr>";

		    for(i = 0; i < obj.entries.length; i++) {

			out += "<tr id = 'tabledata' ><td>" +
			obj.entries[i].storename +
			"</td><td>" +
			obj.entries[i].numberOfPeopleEntering +
			"</td><td>" +
			obj.entries[i].numberOfPeopleLeaving +
			"</td>";
			sum[i]+=obj.entries[i].numberOfPeopleEntering-obj.entries[i].numberOfPeopleLeaving;
			if(sum[i]>50){ // if sum >50 warning
				out += "<td>"+sum[i]+" Warning! over 50 people!"+"</td></tr>";	
			}else{
				out += "<td>"+sum[i]+"</td></tr>";
			}
			
		    }
		    out += "</table>";
		    document.getElementById("display").innerHTML = out;
		}
		getdata();
		setInterval(function(){
		   getdata() 
		}, 5000);
	
		
		 
		
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
		#warning{
		  background:white;
		  color:red;
		  font-family:sans-serif;
		}
	</style>

	<title>Stores</title>
</head>
<body>


<div id = "display">
	
	 <table class = "tabledisplay" id = "datatable">
	  <tr id = "tablehead">
	    <td>Store Name</td>
	    <td>Number of Peope Entering</td>
	    <td>Number of Peope Leaving</td>
	    <td>Sum</td>
	  </tr>
	
	</table> 
	</div>

</body>
	
</html>
