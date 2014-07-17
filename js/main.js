$(document).ready(function(){
		loadItems();
		
		$("#first-level").on("click","li",function(){
			$(this).parent().find(".active").removeClass("active");
			$(this).addClass("active");
			var flevel = $(this).find("a").attr("data-path"); 
			$(".list-group").hide();
			$("#"+flevel.toLowerCase()+"-last-level").show();
			$("#"+flevel.toLowerCase()+"-last-level li.active").removeClass("active");
			
			$("#"+flevel.toLowerCase()+"-last-level li:first").addClass("active");
			loadItems();
			return false;
		})
		
		$(".list-group").on("click","a",function(){
			$(this).parent().find(".active").removeClass("active");
			$(this).addClass("active");  
			loadItems();
			return false;
		})
		$("#new").on("click",function(){
			var flevel = $("#first-level li.active a").attr("data-path");
			if( flevel == "Users"){ 
				$('#newUser').modal('show');
			}else{
				$('#newComputer').modal('show');
			
			}
			return false;
		})
		
		$("#save_user").on("click",function(){
			
				$('#newUser').modal('hide');
				$.ajax({
					url:"php/ajax.php", 
					data:{action:"add_user",first_name:$("#first_name").val(),last_name:$("#last_name").val(),description:$("#description").val()},
					success:function(r){
						loadItems();
						$("#first_name").val('');
						$("#last_name").val('');
						$("#description").val(''); 
				}});
			return false;
		})
		$("#save_computer").on("click",function(){ 
				$('#newComputer').modal('hide');
				$.ajax({
					url:"php/ajax.php", 
					data:{action:"add_computer",name:$("#name").val(),description:$("#description_computer").val()},
					success:function(r){
						loadItems();
						$("#name").val(''); 
						$("#description_computer").val(''); 
				}});
			return false;
		});
		
		$("#items").on("click","a",function(){
		
			
			var btn = $(this);
			var sam = btn.parent().parent().attr("data-sam");
				btn.button('loading')
			var action = "";
			if(btn.hasClass("disable-user-active")){
					action = "disable_user";
			}
			if(btn.hasClass("delete-user-active")){
					action = "delete_user_active";
			}
			if(btn.hasClass("unlock-user")){
					action = "unlock_user";
			}
			if(btn.hasClass("reset-user")){
					action = "reset_user";
			}
			if(btn.hasClass("enable-disabled-user")){
					action = "enable_disabled_user";
			}
			if(btn.hasClass("delete-disabled-user")){
					action = "delete_disabled_user";
			}
			if(btn.hasClass("enable-pending-user")){
					action = "enable_pending_user";
			}
			if(btn.hasClass("move-user")){
					action = "move_user";
			}
			if(btn.hasClass("disable-computer")){
					action = "disable_computer";
			}
			if(btn.hasClass("delete-computer")){
					action = "delete_computer";
			}
			if(btn.hasClass("enable-computer")){
					action = "enable_computer";
			}
				$.ajax({
					url:"php/ajax.php", 
					data:{action:action,name:sam},
					success:function(r){
						
						btn.button('reset');
						loadItems(); 
				}});
		
			return false;
		}) 

})

function loadItems(){
	var flevel = $("#first-level li.active a").attr("data-path");
	var slevel = $("#"+flevel.toLowerCase()+"-last-level a.active ").attr("data-path");
	$("#table").hide();
	$("#loader").fadeIn(100,function(){
		var action = "";
		var path = "";
		if(flevel == "Users") 
			action = "get_users";
		else 
			action = "get_computers";
		path = slevel;
		$.ajax({
			url:"php/ajax.php",
			dataType:"JSON",
			data:{action:action,path:path},
			success:function(r){
				$("#items").html('');
				
				
				var actions = '';
				if(flevel == "Computers"){
					if(slevel == "Active" ) {
						actions = '<td> <a href="#" class="btn btn-danger disable-computer" data-loading-text="Disabling computer ...">Disable</a>&nbsp;    <a href="#" class="btn btn-warning delete-computer" data-loading-text="Deleting computer ...">Delete</a>&nbsp;  </td>';
				
					}
					if(slevel =="Disabled"){
						actions = '<td> <a href="#" class="btn btn-success enable-computer" data-loading-text="Enabling computer ..." >Enable</a>&nbsp;    <a href="#" class="btn btn-warning delete-computer" data-loading-text="Deleting computer ...">Delete</a>&nbsp;  </td>';
					}
				}
				if(flevel == "Users"){
				
					if(slevel == "Active" ) {
						actions = '<td> <a href="#" class="btn btn-danger disable-user-active" data-loading-text="Disabling user...">Disable</a>&nbsp;<a href="#" class="btn btn-primary move-user" data-loading-text="Moving account ...">Move</a>&nbsp;  <a href="#" data-loading-text="Deleting user ... " class="btn btn-warning delete-user-active">Delete</a>&nbsp;<a href="#" class="btn btn-success unlock-user" data-loading-text="Unlocking account ...">Unlock</a>&nbsp;<a href="#" class="btn btn-default reset-user" data-loading-text="Reseting ....">Reset</a>&nbsp; </td>';
					}
					if(slevel == "Disabled"){
						
						actions = '<td> <a href="#" class="btn btn-success enable-disabled-user" data-loading-text="Enabling user ...">Enable</a>&nbsp;    <a href="#" class="btn btn-warning delete-disabled-user" data-loading-text="Deleting user ... ">Delete</a>&nbsp;  </td>';
					}
					if(slevel == "Pending"){
						actions = '<td><a href="#" class="btn btn-success enable-pending-user" data-loading-text="Enabling user ....">Enable</a>&nbsp;  <a href="#" class="btn btn-danger disable-user-active " data-loading-text="Disabling user...">Disable</a>&nbsp;<a href="#" class="btn btn-primary">Move</a>&nbsp;  <a href="#" class="btn btn-warning delete-disabled-user" data-loading-text="Deleting user ... ">Delete</a>&nbsp;  <a href="#" class="btn btn-default unlock-user" data-loading-text="Unlocking account ...">Unlock</a>&nbsp;</td>';
					
					}
				
				}
				$.each(r,function(k,v){
					$("#items").append('\
                <tr data-sam="'+v+'">\
                  <td >'+v+'</td>'+ actions+'</tr> ');
				}) ;
				if(r.length == 0 )
						$("#items").append('\
							<tr>\
							  <td>No items</td>\
							</tr> ');
				$("#loader").fadeOut(100,function(){
					$("#table").show();
				})
			}
		
		
		})	
		
	
	
	}) 

}
