
function queryAlert(){
var query = document.querySelectorAll('#query');
var all = document.querySelector('#alertQ');
	if(query.length > 0){
			all.innerHTML = '<b style="color:red;">You have some Queries</b>'
		}
}
queryAlert();
var mails = document.querySelectorAll('#mails');
var al = document.querySelector('#alert');
function mailsAlert(){
	if(mails.length > 0){
			al.innerHTML = '<b style="color:red;">You have some Mails</b>'
		}
}
mailsAlert();
function clickBtn(modal){
  document.getElementById(modal).click();
}
function openContact(x, y, z) {
  document.getElementById(x).style.display = 'block';
  document.getElementById(y).style.display = 'none';
  document.getElementById(z).style.display = 'none';
}
function openModal(modal) {
  document.getElementById(modal).style.display = 'block';
}
function closeModal(modal) {
  document.getElementById(modal).style.display = 'none';
}
var bars = document.getElementById('bars');
var navModal = document.getElementById('nav-modal');
var fullNav = document.getElementById('full-nav');
var icon = document.getElementById('icon');
var x = 0;
function navify(){
	bars.addEventListener('click', function(){ 
		if(x == 0){
			 navModal.style.display = 'block';
	     fullNav.className += ' nav-open';
	     icon.className = 'fas fa-times';
	     x = 1
		}
		else if (x == 1){
	    fullNav.className = 'mobile-nav-open'
	    navModal.style.display = 'none';
	    icon.className = 'fas fa-bars';
	    x = 0 ;
		}
	})
}
navify();
function forMail(x, y, B) {
	content = document.getElementById(x)
	N = document.getElementById(y)
	Y = document.getElementById(B)
  if(content.className == 'mother down-3 xs-down-3 md-down-5 hide-content') {
  	content.className = 'mother down-3 xs-down-3 md-down-5';
  	N.innerHTML = 'Close'
  }
  else {
  	content.className = 'mother down-3 xs-down-3 md-down-5 hide-content'
  	N.innerHTML = 'View'
  	Y.click();
  }
} 
function naved() {
	var nav = document.querySelector('#nav')
	if(window.pageYOffset > 100){
		nav.className = 'nav-on-scroll';
	}
	else{
		nav.className = "hidden-xs"
	}
}