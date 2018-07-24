(function (){
	var btnShow = document.querySelector('button');
	var btnClose = document.querySelectorAll('a')[1];

	btnShow.addEventListener('click', showMenu);
	btnClose.addEventListener('click', showMenu);
	
	function showMenu(){
		var menuList = document.querySelector('nav');
		if(menuList.classList.contains('active')){
			menuList.classList.remove('active');
		}else{
			menuList.classList.add('active');	
		}
	}
	//Clique botão registrar leva ao form
	var btnRegistrar = document.querySelector('.btn-registar');
	btnRegistrar.addEventListener('click', function(){
		document.location.href = "loginForm.php";
	});

	//clique botão sobre
	var btnSobre = document.querySelector('.btn-sobre');
	btnSobre.addEventListener('click', sobre);
	function sobre(){
		document.location.href = "sobre.php";
	}
	
})()