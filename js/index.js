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
})()