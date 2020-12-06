$(document).ready(function(){
		showcount();
      	getData();
      function showcount(){
        var menu=localStorage.getItem('menu');
        if(menu){
          var menuobj=JSON.parse(menu);
          var total=0;
          $.each(menuobj.menulist,function(i,v){
            total+=parseInt(v.qty);
          });
          $("#showcount").html(total);
        }else if(!menu){
        	total=0;
        	$("#showcount").html(total);
        }
      }

			$('.add').on('click',function(){
				var id=$(this).data('id');
				var name=$(this).data('name');
				var price=$(this).data('price');
				var photo=$(this).data('photo');
				var menu=localStorage.getItem('menu');
				if(!menu){
					var menu='{"menulist":[]}';
				}
				menu=JSON.parse(menu);
				var menuobj={id:id,name:name,price:price,photo:photo,qty:1};
				var menuarr=menu.menulist;
				var arrlength=menuarr.length;
				var q=0;
				for(var i=0;i<arrlength;i++){
					if(id==menuarr[i].id){
						var add=1;
						menuarr[i].qty += 1;
					}
					q += menuarr[i].qty;
				}
				if(!add){
					menuarr.push(menuobj);
				}
				menu=JSON.stringify(menu);
				localStorage.setItem('menu', menu);
				showcount();
				getData();
			})
			$('#showcount').click(function(){
				getData();
			})

			function getData(){
				showcount();
				var menu=localStorage.getItem('menu');
				if(menu){
					var menu=JSON.parse(menu);
					var menuarr=menu.menulist;
					var html='';
					var total=0;
					var j=1;
					$.each(menuarr,function(i,v){
						if(v){
							var id=v.id;
							var name=v.name;
							var price=v.price;
							var photo=v.photo;
							var qty=v.qty;
							//alert(name+','+price+','+photo);
							html += '<tr>'+
							

							//'<td>'+j+'</td>'+
							'<td>'+name+'</td>'+
							'<td>'+price+'</td>'+
							'<td>'+'<img class="w-50" src=backend/'+photo+'></td>'+
							'<td>'+'<input type="number" data-id="'+i+'" class="qty" min="0" value="'+qty+'">'+'</td>'+
							'<td>'+(price*qty)+'</td>'+
							'</tr>';
							total += (price*qty);
							j++;
						}
					})
	html += '<tr>'+
				'<td colspan="3">Total Amount:</td>'+
				'<td colspan="3">'+'$'+total+'</td>'+
				'</tr>';
	html +='<tr><td colspan="3"><a href="home.php" class="btn btn-info" style="float: left;">Continue Shopping</a></td><td colspan="5"><button class="btn btn-info order" style="float: right;">Order</button></td></tr>';
	
					$('#tbody').html(html);
				}
				// }
				else{
				 	$('#tbody').html('<tr><td colspan="5">Empty Cart!</td></tr>');
				 }
			}

			$('#tbody').on('change','.qty',function () {
					var quan=parseInt($(this).val());
					//alert(quan);
					var id=$(this).data('id');
					//alert(id);
					var menu=localStorage.getItem('menu');
					if(menu){
						var menu=JSON.parse(menu);
						var menuarr=menu.menulist;
						menuarr[id].qty = quan;
						if(menuarr[id].qty=='0'){
							menuarr.splice(id,1);
						}
						menu=JSON.stringify(menu);
							localStorage.setItem('menu',menu);
							getData();
					}	
				})

		//Checkout
		$('#tbody').on('click','.order',function () {
				//alert('ok');
		var id=$('#user_id').val();
		if(id>0){
			var menu=localStorage.getItem('menu');
				if(menu){
						var menu=JSON.parse(menu);
						var menuarr=menu.menulist;
						$.post('order.php',{user_id:id,items:menuarr},
						function(response){
							alert(JSON.parse(response).message);
							localStorage.clear();
							getData();
							showcount();
						});
					}
				}else{
					 	alert('Please Login First!');
						window.location.href="login.php";
				
				}

			})
		})