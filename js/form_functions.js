/* Hide Show button for field assessment forms */


	function hide_show_visit_form(){
			var flag = document.getElementById('hide_show_btn').value;
			console.log(flag);
			if (flag =='Hide'){ 
			 document.getElementById('first_visit').style.display='none';
			 document.getElementById('hide_show_btn').value='Show';
			}else{
 			 document.getElementById('first_visit').style.display='block';			
			 document.getElementById('hide_show_btn').value='Hide';
			}	
	}




