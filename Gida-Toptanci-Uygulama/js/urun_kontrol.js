if (window.innerWidth < 768) {
     sidebar.classList.add('hide');
} else if (window.innerWidth > 576) {
     searchButtonIcon.classList.replace('bx-x', 'bx-search');
     searchForm.classList.remove('show');
}


window.addEventListener('resize', function () {
     if (this.innerWidth > 576) {
          searchButtonIcon.classList.replace('bx-x', 'bx-search');
          searchForm.classList.remove('show');
     }
})
const switchMode = document.getElementById('switch-mode');

switchMode.addEventListener('change', function () {
	if(this.checked) {
		document.body.classList.add('dark');
	} else {
		document.body.classList.remove('dark');
	}
})


