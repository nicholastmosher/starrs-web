function setViewUser(inputUser) {
	var user;
	if(!inputUser) {
		user = document.getElementById("viewuser").value;
	}
	else {
		user = inputUser
	}

	setViewUserCookie(user);
	//window.location.href = '/systems/view/' + user;
	location.reload(true);
}

function setViewUserCookie(value) {
	var c_value=escape(value);
	document.cookie='impulse_viewUser' + "=" + c_value + "; path=/";
}

function getViewUserFromCookie() {
    var nameEQ = "impulse_viewUser=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}

function setViewUserSelect() {
	var i;
	var options = document.getElementById("viewuser").options;
	var viewUser = getViewUserFromCookie();
	if(viewUser == '') {
		return;
	}
	for(i=0; i<options.length; i++) {
		if(options[i].value == viewUser) {
			document.getElementById("viewuser").selectedIndex = i;
		}
	}
}

$(document).ready(function() {
	$('.controls input').blur(function() {
		if($(this).parent().parent().attr('class').match(/warning/g)) { return; };
		if($(this).attr('value') != "") {
			$(this).parent().parent().removeClass("error");
		}
		else {
			$(this).parent().parent().addClass("error");
		}
	});

	$('.controls select').change(function() {
		if($(this,'option:selected').attr('value') != "") {
			$(this).parent().parent().removeClass("error");
		}
		else {
			$(this).parent().parent().addClass("error");
		}
	});

	setViewUserSelect();
});

$('#create-form').submit(function() {
	$.post(undefined,$('#create-form').serialize(),function(data) { 
		handlePost(data);
	});
	return false;
});

$('#modify-form').submit(function() {
	$.post(undefined,$('#modify-form').serialize(),function(data) { 
		handlePost(data);
	});
	return false;
});

function handlePost(data) {
	if(!data.match(/^\<script\>/g)) {
		$('#modal-error-body').html(data);
		$('#modal-error').modal('show');
	}
	else {
		refresh();
		//$('head').html($('head').html() + data);
	}
}

function refresh() {
	location.reload(true);
}
