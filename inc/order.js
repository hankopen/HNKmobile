function goCheckout() {

	var validator = $( "#order" ).validate({	
		submitHandler: function(form) {	
		}, 
		errorClass: "form-invalid",
		validClass: "form-success",
		debug: true,
		rules: {
			datepicker: {
				required: true,
				minlength: 3,
				maxlength: 30,
			},
			timepicker: {
				required: true,
				minlength: 4,
				maxlength: 6,
			},		
			name: {
				required: true,
				minlength: 2,
				maxlength: 30
			},
			email: {
				required: true,
				email: true,
				minlength: 3,
				maxlength: 50
			},
			phone: {
				required: true,
				minlength: 5,
				maxlength: 30
			}
		},
		messages: {
			name: $.i18n._('Please specify your name.'),
			email: {
				required: $.i18n._('We need your email address to contact you.'),
				email: $.i18n._('Your email address must be in the format of name@domain.com.')
			},
			phone: $.i18n._('We need your phone number to contact you.'),
			datepicker: {
				required: $.i18n._('Please select a date.')
			},
			timepicker: $.i18n._('Please select a time.')
		}
	});

	validator.form();
	var errors = validator.numberOfInvalids();
	if(errors > 0) {
	} else {
		var tnxid = getTnxId();
	}
}

function checkEmptyCart() {
	cart=JSON.parse(localStorage["simpleCart_items"]);
	count = Object.keys(cart).length;
	if(count > 0) {
		window.location.href = "#pickup";
	} else {
		alert($.i18n._('You might want to order something before considering checkout.'))
	}
}

function getPdtName(id) {
	return products[id].name;
}

function getTnxId() {

	var url=params.payment_init_url;
	var cart=JSON.parse(localStorage["simpleCart_items"]);
	url = url + 'format/json/?callback=?';

	//send payment info to remote server
	var info={"email":$( "#email" ).val(), 
	"name": $( "#name" ).val(), 
	"phone": $( "#phone" ).val(),
	"date": $( "#datepicker" ).val(),
	"amount": simpleCart.grandTotal(),
	"time": $( "#timepicker" ).val()};
	var topost = {cart : cart, info : info};

	$.ajax({
		url : url,
		type: "POST",
		data: JSON.stringify(topost),
		success: function(response, textStatus, jqXHR)
		{	
			if(response.tnxid.substr(0,4) == 'TNX-') {	
				simpleCart.bind( 'beforeCheckout' , function( data ){
					//send tnxid to payment platform 
					data.custom			= response.tnxid;
					//for paypal autofill
					data.email			= $( "#email" ).val();
					data.first_name		= $( "#name" ).val();
					data.night_phone_a	= $( "#phone" ).val();
				});
				//if timestamp from server now and get data exeed x hours, get error and resdirect to home
				ts = localStorage["ts"];
				var tstest = response.ts - ts;
				if(tstest > 10800) {
					alert($.i18n._('Your basket is too old, please go back to home and make a new one.'));
					window.location.replace("index.html");
				} else {
					simpleCart.checkout();
				}				
			} else {
				alert($.i18n._('Communication server fail, are you connected to the Internet?'));
			}
		},
		error: function(jqXHR, textStatus, errorThrown)
		{
			alert($.i18n._('Communication server fail, are you connected to the Internet?'));
		}
	});
}

function show(type, menu_type) {
	var contain = '';

	var cheese_select = '<label for="item_extracheese" class="select">' + $.i18n._('Vegan cheese:') + ' (+' + params.extracheese_price + '€)</label> \
	<select name="item_extracheese" class="item_extracheese" id="item_extracheese" data-role="slider"> \
	<option value="0">' + $.i18n._('without') + '</option> \
	<option value="1">' + $.i18n._('with') + '</option> \
	</select>';
	var gf_select = '<label for="item_extragf" class="select">' + $.i18n._('Gluten free option:') + ' (+' + params.extragf_price + '€)</label> \
	<select id="item_extragf" name="item_extragf" class="item_extragf" data-role="slider"> \
	<option value="0">' + $.i18n._('without') + '</option> \
	<option value="1">' + $.i18n._('with') + '</option> \
	</select>';
	var sauce_select = '<label for="item_friessauce" class="select">' + $.i18n._('Sauce:') + '</label><select id="item_friessauce" name="item_friessauce" class="item_friessauce"><option value="' + 0 + '">' + $.i18n._('none') + '</option>';
	$.each(products, function(key, val) { 
		if(val.type == 100) sauce_select = sauce_select + '<option value="' + val.id + '">' + translateText(val.name) + '</option>';
	});
	sauce_select = sauce_select + '</select>';

	if(type == 'menu_choose') {
		contain = '<a onclick="show(\'menu_create\',1);" href="#"><img class="item_thumb" src="' + params.img_path + params.menu_1_img + '"></a> <br /> <a onclick="show(\'menu_create\',1);" href="#">' + $.i18n._('burger + side + drink') + ' ' + params.menu_1_price + '€</a>  <br /> <hr align="left" width="285" /> \
		<a onclick="show(\'menu_create\',2);" href="#"><img class="item_thumb" src="' + params.img_path + params.menu_2_img + '"></a> <br /> <a onclick="show(\'menu_create\',2);" href="#">' + $.i18n._('burger + side + drink + dessert') + ' ' + params.menu_2_price + '€</a> <br />';
	}
	if(type == 'menu_create') {
		var menu_name	= params.menu_1_name;
		var menu_price	= params.menu_1_price;
		var menu_img 	= params.img_path + params.menu_1_img;
		var stype		= 1000;

		if(menu_type == 2) {
			menu_name	= params.menu_2_name;
			menu_price	= params.menu_2_price;
			menu_img 	=  params.img_path + params.menu_2_img;
			var stype	= 1001;
		}

		contain = contain + '<div class="simpleCart_shelfItem"> \
		<img class="item_thumb" src="' + menu_img + '"> \
		<h2 class="item_name">' + menu_name + ' ' + $.i18n._('Menu') + '</h2><span class="item_price">' + menu_price + '</span>€';
		contain = contain + '<span style="display: none;" class="item_stype">' + stype + '</span>';

		contain = contain  + '<div data-role="fieldcontain"><label for="item_burger" class="select">' + $.i18n._('Burger:') + '</label><select name="item_burger" id="item_burger" class="item_burger">';
		$.each(products, function(key, val) {
			var extra = '';
			if(val.att) {
				var extra_price = getExtraPrice(val.att); 
				var extra = '+' + extra_price + '€';
			}
			if(val.type == 1) contain = contain + '<option value="' + val.id + '">' + translateText(val.name) + ': ' +  translateText(val.detail) + ' ' + extra + '</option>';	
		});
		contain = contain + '</select></div>';

		contain = contain + cheese_select;
		contain = contain + gf_select;

		contain = contain + '<label for="item_side" class="select">' + $.i18n._('Side:') +'</label><select id="item_side" name="item_side" class="item_side">';
		$.each(products, function(key, val) { 
			if(val.type == 2) contain = contain + '<option value="' + val.id + '">' + translateText(val.name) + '</option>';
		});

		contain = contain + '</select>' + sauce_select;

		contain = contain + '<label for="item_drink" class="select">' + $.i18n._('Drink:') + '</label><select id="item_drink" name="item_drink" class="item_drink">';
		$.each(products, function(key, val) {
			var extra = '';
			if(val.att) {
				var extra_price = val.att.split("_"); 
				var extra = '+' + extra_price[1] + '€';
			}
			if(val.type == 3) contain = contain + '<option value="' + val.id + '">' + translateText(val.name) + ' ' + extra + '</option>';	
		});
		contain = contain + '</select>';

		if(menu_type == 2) {
			contain = contain + '<label for="item_dessert" class="select">' + $.i18n._('Dessert:') +'</label><select id="item_dessert" name="item_dessert" class="item_dessert">';
			$.each(products, function(key, val) {
				if(val.type == 4) contain = contain + '<option value="' + val.id + '">' + val.name + '</option>';
			});
			contain = contain + '</select>';
		}	

		contain = contain + '<br /><input type="submit" id="submit" class="item_add" value="' +$.i18n._('Add to Cart') + '" /></div>';

	} else {

		$.each(products, function(key, val) {
			if(val.type == type) {

				var trans_img = '';
				var detail = translateText(val.detail);

				contain = contain + '<div class="simpleCart_shelfItem"> \
				<table border="0"><tr><td><h2 class="item_name">' + translateText(val.name) + '</h2><span class="item_price">' + val.price + '</span>€</h2></td></tr>';

				//Avoid missing image in cart if product has not
				if(val.image) {
					var product_img			= params.img_path + val.image;
				} else {
					var product_img = params.img_path + 'pix.png';
				}
				
				contain = contain + '<tr><td><img class="item_thumb" src="' + product_img + '"></td></tr>';

				if(detail) {
					contain = contain + '<tr><td> ' + detail + ' <br /><br /></td></tr>';
				}

				contain = contain + '<input type="hidden" class="item_stype" name="item_stype" value="' + val.type + '" > \
				<input type="hidden" class="item_mid" name="item_mid" value="' + val.id + '" >';

				if(val.type == 1) {
					contain = contain + '<tr><td>' + cheese_select + '</tr></td>';
					contain = contain + '<tr><td>' + gf_select + '</tr></td>';
				}
				if(val.type == 2) {
					contain = contain + '<tr><td>' + sauce_select  + '</tr></td>';
				}
				contain = contain + '<tr><td><input type="submit" id="submit" class="item_add" value="' +$.i18n._('Add to Cart') + '" /><br /><hr align="left" width="100%" /></td></tr></table></div>';
			}
		});
	}

	document.getElementById("main").innerHTML = contain;
	//Apply missing style
	$('#item_extracheese, #item_extragf').slider();
	$('#item_burger, #item_side, #item_sauce, #item_drink, #item_friessauce, #item_dessert').selectmenu();
	$('#item_burger, #item_side, #item_sauce, #item_drink, #item_friessauce, #item_dessert').selectmenu("option", "defaults", true);
	$( "[type='submit']" ).button();
};

function translateText(text) {
	var lang = localStorage["lang"];
	var t = text.split('[:]', 2);
	if(lang == 'fr') { return t[1];
	} else {  
		return t[0];
	}
}

function getExtraPrice(extra) {
	var extra_price = extra.split("_"); 
	return parseFloat(extra_price[1]);
}

function returnObj(str) {
	return eval('{' + str + '}');
}

function setTimepicker(hours) {
	picker_time.render(true);
	//mandatory to empty the object 
	picker_time.set('disable', true);
	picker_time.set('enable', true);
	//and then set the disable time again

	//reset min time to default
	picker_time.set('min', returnObj(params.min_time));

	//disable lost time if current day
	var now_date = getDateTime('date');
	var picked_date = $('.datepicker').val();
	if(now_date == picked_date) {
		var now_time = getDateTime('time');
		picker_time.set('min', now_time);
	}
	//console.log('f1: '+hours.f1 + ' t1: '+hours.t1+' f2: '+hours.f2+' t2: '+hours.t2+' f3: '+hours.f3+' t3: '+hours.t3);
	 
	picker_time.set({
		disable: [
		{ from: hours.f1 , to: hours.t1 }, 
		{ from: hours.f2 , to: hours.t2 },
		{ from: hours.f3 , to: hours.t3 }
		]
	})
}

function getHours(day) {
	var hours;		
	switch (day) {
		case 'Monday':
		hours = {f1:returnObj(params.opening_mon_f1), t1:returnObj(params.opening_mon_t1), f2:returnObj(params.opening_mon_f2), t2:returnObj(params.opening_mon_t2), f3:returnObj(params.opening_mon_f3), t3:returnObj(params.opening_mon_t3)};
		break;
		case 'Tuesday':
		hours = {f1:returnObj(params.opening_tue_f1), t1:returnObj(params.opening_tue_t1), f2:returnObj(params.opening_tue_f2), t2:returnObj(params.opening_tue_t2), f3:returnObj(params.opening_tue_f3), t3:returnObj(params.opening_tue_t3)};
		break;
		case 'Wednesday':
		hours = {f1:returnObj(params.opening_wed_f1), t1:returnObj(params.opening_wed_t1), f2:returnObj(params.opening_wed_f2), t2:returnObj(params.opening_wed_t2), f3:returnObj(params.opening_wed_f3), t3:returnObj(params.opening_wed_t3)};
		break;
		case 'Thursday':
		hours = {f1:returnObj(params.opening_thu_f1), t1:returnObj(params.opening_thu_t1), f2:returnObj(params.opening_thu_f2), t2:returnObj(params.opening_thu_t2), f3:returnObj(params.opening_thu_f3), t3:returnObj(params.opening_thu_t3)};
		break;
		case 'Friday':
		hours = {f1:returnObj(params.opening_fri_f1), t1:returnObj(params.opening_fri_t1), f2:returnObj(params.opening_fri_f2), t2:returnObj(params.opening_fri_t2), f3:returnObj(params.opening_fri_f3), t3:returnObj(params.opening_fri_t3)};
		break;
		case 'Saturday':
		hours = {f1:returnObj(params.opening_sat_f1), t1:returnObj(params.opening_sat_t1), f2:returnObj(params.opening_sat_f2), t2:returnObj(params.opening_sat_t2), f3:returnObj(params.opening_sat_f3), t3:returnObj(params.opening_sat_t3)};
		break;
		case 'Sunday':
		hours = {f1:returnObj(params.opening_sun_f1), t1:returnObj(params.opening_sun_t1), f2:returnObj(params.opening_sun_f2), t2:returnObj(params.opening_sun_t2), f3:returnObj(params.opening_sun_f3), t3:returnObj(params.opening_sun_t3)};
		break;
	}
	return hours;
}

function getDateTime(ret) {
	var now     = new Date(); 
	var year    = now.getFullYear();
	var month   = now.getMonth()+1; 
	var day     = now.getDate();
	var hour    = now.getHours();
	var minute  = now.getMinutes()+10;
	var second  = now.getSeconds(); 
	if(month.toString().length == 1) {
		var month = '0'+month;
	}
	if(day.toString().length == 1) {
		var day = '0'+day;
	}   
	if(hour.toString().length == 1) {
		var hour = '0'+hour;
	}
	if(minute.toString().length == 1) {
		var minute = '0'+minute;
	}
	if(second.toString().length == 1) {
		var second = '0'+second;
	}   
	if(ret == 'date') var dateTime = year+'-'+month+'-'+day; 
	if(ret == 'time') var dateTime = hour+':'+minute;   
	
	return dateTime;
}