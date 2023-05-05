const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');

allSideMenu.forEach(item => {
     const li = item.parentElement;

     item.addEventListener('click', function () {
          allSideMenu.forEach(i => {
               i.parentElement.classList.remove('active');
          })
          li.classList.add('active');
     })
});
const menuBar = document.querySelector('#content nav .bx.bx-menu');
const sidebar = document.getElementById('sidebar');

menuBar.addEventListener('click', function () {
     sidebar.classList.toggle('hide');
})
const searchButton = document.querySelector('#content nav form .form-input button');
const searchButtonIcon = document.querySelector('#content nav form .form-input button .bx');
const searchForm = document.querySelector('#content nav form');

searchButton.addEventListener('click', function (e) {
     if (window.innerWidth < 576) {
          e.preventDefault();
          searchForm.classList.toggle('show');
          if (searchForm.classList.contains('show')) {
               searchButtonIcon.classList.replace('bx-search', 'bx-x');
          } else {
               searchButtonIcon.classList.replace('bx-x', 'bx-search');
          }
     }
})
// // Verilerimizi tanımlayalım
// const data = {
//      labels: ['Ürünler', 'Kullanıcılar', 'Bakiye', 'Son Satışlar'],
//      datasets: [{
//        label: 'Verilerimiz',
//        data: [100, 50, 75, 30],
//        backgroundColor: [
//          'rgba(255, 99, 132, 0.2)',
//          'rgba(54, 162, 235, 0.2)',
//          'rgba(255, 206, 86, 0.2)',
//          'rgba(75, 192, 192, 0.2)'
//        ],
//        borderColor: [
//          'rgba(255, 99, 132, 1)',
//          'rgba(54, 162, 235, 1)',
//          'rgba(255, 206, 86, 1)',
//          'rgba(75, 192, 192, 1)'
//        ],
//        borderWidth: 1
//      }]
//    };
   
//    // Grafik ayarlarımızı tanımlayalım
//    const options = {
//      scales: {
//        y: {
//          beginAtZero: true
//        }
//      }
//    };
   
//    // Grafik nesnesini oluşturalım
//    const ctx = document.getElementById('myChart').getContext('2d');
//    const myChart = new Chart(ctx, {
//      type: 'bar',
//      data: data,
//      options: options
//    });
   
// canvas elementini seçiyoruz
const ctx = document.querySelector('#myChart').getContext('2d');

// verileri tanımlıyoruz
const data = {
  labels: ['Ocak', 'Şubat', 'Mart', 'Nisan', 'Mayıs', 'Haziran'],
  datasets: [{
    label: 'Satışlar',
    data: [12, 19, 3, 5, 2, 3],
    borderColor: '#3e95cd',
    fill: false
  }]
};

// grafik seçeneklerini tanımlıyoruz
const options = {
  responsive: true,
  maintainAspectRatio: false,
  title: {
    display: true,
    text: 'Aylık Satış Grafiği'
  },
  scales: {
    yAxes: [{
      ticks: {
        beginAtZero: true
      }
    }]
  }
};

// grafiği oluşturuyoruz
const myChart = new Chart(ctx, {
  type: 'line',
  data: data,
  options: options
});

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
