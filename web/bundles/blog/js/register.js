$(document).ready(function(){
	$("input[name='username']").on('blur', '.selector', function(event) {
		event.preventDefault();
        var userName = $("input[name='username]").val();
        console.log(userName);
	});
});