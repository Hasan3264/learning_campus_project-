<title>Learning Campus</title>
<!-- Meta -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="keywords" content="Bootstrap Theme, Freebies, Dashboard, MIT license">
<meta name="description" content="Learning Campus">
<meta name="author" content="Learningcampus.com">

<!-- Favicon -->
<link rel="shortcut icon" href="Logo _ Icon/preload2.png" sizes="96x96" type="image/x-icon">
<!-- Web Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
<!-- Components Vendor Styles -->
<link rel="stylesheet" href="{{asset('AdminAssets/vendor/font-awesome/css/all.min.css')}}">
<link rel="stylesheet" href="{{asset('AdminAssets/fontawesome-free-6.0.0-web/css/all.min.css')}}">
<link rel="stylesheet" href="{{asset('AdminAssets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css')}}">
<link rel="stylesheet" href="{{asset('AdminAssets/css/nice-select.css')}}">
<link rel="stylesheet" href="{{asset('AdminAssets/css/jquery-ui.min.css')}}">
<!-- Theme Styles -->
<link rel="stylesheet" href="{{asset('AdminAssets/css/theme.css')}}">
<link rel="stylesheet" href="{{asset('AdminAssets/css/style.css')}}">

<!-- Toster -->
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
<<<<<<< HEAD
<!-- Toster -->
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
=======
 <link rel="stylesheet" href="{{ asset('AdminAssets/css/main.css') }}">
 <script src="{{ asset('AdminAssets/js/main2.js') }}"></script>
 <script>
    document.addEventListener('DOMContentLoaded', function() {
      var calendarEl = document.getElementById('calendar');
  
      var calendar = new FullCalendar.Calendar(calendarEl, {
        headerToolbar: {
          left: 'prev,next today',
          center: 'title',
          right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
        },
        initialDate: new Date().toISOString().slice(0, 10), 
        navLinks: true, // can click day/week names to navigate views
        businessHours: true, // display business hours
        editable: true,
        selectable: true,
        events: [
          {
            title: '30% Off',
            start: '2022-02-04',
            constraint: 'businessHours'
          },
          {
            title: '15% Off',
            start: '2022-02-13',
            constraint: 'availableForMeeting', // defined below
            color: '#257e4a'
          },
          {
            title: 'Conference',
            start: '2020-09-18',
            end: '2020-09-20'
          },
          {
            title: 'Party',
            start: '2020-09-29T20:00:00'
          },
  
          // areas where "Meeting" must be dropped
          {
            groupId: 'availableForMeeting',
            start: '2020-09-11T10:00:00',
            end: '2020-09-11T16:00:00',
            display: 'background'
          },
          {
            groupId: 'availableForMeeting',
            start: '2020-09-13T10:00:00',
            end: '2020-09-13T16:00:00',
            display: 'background'
          },
  
          // red areas where no events can be dropped
          {
            start: '2020-09-24',
            end: '2020-09-28',
            overlap: false,
            display: 'background',
            color: '#ff9f89'
          },
          {
            start: '2020-09-06',
            end: '2020-09-08',
            overlap: false,
            display: 'background',
            color: '#ff9f89'
          }
        ]
      });
  
      calendar.render();
    });
  
  </script>
>>>>>>> 794520b6a031158521ea0bf582bf9423919c8260
