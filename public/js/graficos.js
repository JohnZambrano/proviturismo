 /*Distribución Mundial de Visitas*/

 const ctx = document.getElementById('myChart').getContext('2d');
 const myChart = new Chart(ctx, {
     type: 'bar', // Puedes cambiar esto a 'line', 'pie', etc.
     data: {
         labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
         datasets: [{
             label: 'Visitas',
             data: [12, 19, 30, 50, 0, 0, 0, 0, 0, 0, 0, 0],
             backgroundColor: [
                 'rgba(75, 192, 192, 0.2)',
                 'rgba(153, 102, 255, 0.2)',
                 'rgba(255, 159, 64, 0.2)',
                 'rgba(54, 162, 235, 0.2)',
                 'rgba(255, 99, 132, 0.2)',
                 'rgba(255, 205, 86, 0.2)'
             ],
             borderColor: [
                 'rgba(75, 192, 192, 1)',
                 'rgba(153, 102, 255, 1)',
                 'rgba(255, 159, 64, 1)',
                 'rgba(54, 162, 235, 1)',
                 'rgba(255, 99, 132, 1)',
                 'rgba(255, 205, 86, 1)'
             ],
             borderWidth: 1
         }]
     },
     options: {
         responsive: true,
         maintainAspectRatio: false,
         plugins: {
             legend: {
                 position: 'top',
             },
             tooltip: {
                 callbacks: {
                     label: function(context) {
                         return ` $${context.raw.toLocaleString()}`;
                     }
                 }
             }
         },
         scales: {
             y: {
                 beginAtZero: true
             }
         }
     }
 });

 /*Distribución Mundial de Visitas*/

 /*Distribución Mundial de servicios*/

 const donutCtx = document.getElementById('donutChart').getContext('2d');
 const donutChart = new Chart(donutCtx, {
     type: 'doughnut', // Gráfico de dona
     data: {
         labels: ['Hoteles', 'Restaurantes', 'Transporte'],
         datasets: [{
             label: 'Distribución de Servicios',
             data: [25, 35, 40], // Porcentajes de ejemplo
             backgroundColor: [
                 'rgba(75, 192, 192, 0.8)',
                 'rgba(255, 99, 132, 0.8)',
                 'rgba(54, 162, 235, 0.8)'
             ],
             borderColor: [
                 'rgba(75, 192, 192, 1)',
                 'rgba(255, 99, 132, 1)',
                 'rgba(54, 162, 235, 1)'
             ],
             borderWidth: 1
         }]
     },
     options: {
         responsive: true,
         maintainAspectRatio: false,
         plugins: {
             legend: {
                 position: 'bottom',
             },
             tooltip: {
                 callbacks: {
                     label: function(context) {
                         const label = context.label || '';
                         const value = context.raw || 0;
                         return `${label}: ${value}%`;
                     }
                 }
             }
         }
     }
 });

 /*Distribución Mundial de servicios*/

 /*Estadisticas mensuales*/

 const barCtx = document.getElementById('barChart').getContext('2d');
 const barChart = new Chart(barCtx, {
     type: 'bar', // Gráfico de barras
     data: {
         labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
         datasets: [{
             label: 'Usuarios Registrados',
             data: [6, 8, 9, 15, 0, 0, 0, 0, 0, 0, 0, 0], // Datos de ejemplo
             backgroundColor: [
                 'rgba(255, 99, 132, 0.8)',
                 'rgba(54, 162, 235, 0.8)',
                 'rgba(255, 206, 86, 0.8)',
                 'rgba(75, 192, 192, 0.8)',
                 'rgba(153, 102, 255, 0.8)',
                 'rgba(255, 159, 64, 0.8)'
             ],
             borderColor: [
                 'rgba(255, 99, 132, 1)',
                 'rgba(54, 162, 235, 1)',
                 'rgba(255, 206, 86, 1)',
                 'rgba(75, 192, 192, 1)',
                 'rgba(153, 102, 255, 1)',
                 'rgba(255, 159, 64, 1)'
             ],
             borderWidth: 1
         }]
     },
     options: {
         responsive: true,
         maintainAspectRatio: false,
         plugins: {
             legend: {
                 position: 'top',
             },
             tooltip: {
                 callbacks: {
                     label: function(context) {
                         return `${context.raw} usuarios`;
                     }
                 }
             }
         },
         scales: {
             x: {
                 title: {
                     display: true,
                     text: 'Meses'
                 }
             },
             y: {
                 beginAtZero: true,
                 title: {
                     display: true,
                     text: 'Cantidad de Usuarios'
                 }
             }
         }
     }
 });

 /*Estadisticas mensuales*/

  /*Calendario*/

 document.addEventListener('DOMContentLoaded', function() {
     const calendarEl = document.getElementById('calendar');
     const calendar = new FullCalendar.Calendar(calendarEl, {
         initialView: 'dayGridMonth',
         headerToolbar: {
             left: 'prev,next today',
             center: 'title',
             right: 'dayGridMonth,timeGridWeek,timeGridDay'
         },
         events: [
             {
                 title: 'Evento de prueba',
                 start: '2025-01-10',
                 end: '2025-01-12',
                 color: '#007bff' // Color personalizado
             },
             {
                 title: 'Reunión',
                 start: '2025-01-15T10:00:00',
                 end: '2025-01-15T12:00:00',
                 color: '#28a745'
             }
         ]
     });
     calendar.render();
 });

 /*Calendario*/