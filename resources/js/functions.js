const body = document.querySelector('body');
const hamburger = document.querySelector('.hamburger');
const topnavigation = document.querySelector('.topnav ul');


// Mobile Nav

hamburger.addEventListener('click', function(){
    hamburger.classList.toggle('open');
    topnavigation.classList.toggle('show-flex');
    body.classList.toggle('noscroll-y');
});

// Datepicker

$(document).ready(function(){
    $(function () {
        $("#date").datepicker({
            firstDay: 0,
            beforeShowDay: function (date) {
                //var sunday = new Date("June 2, 2013 00:00:00");
                var sunday = new Date();
                sunday.setHours(0,0,0,0);
                //alert(sunday.getDay() + ' : ' + sunday.getDate() + ' : ' + (sunday.getDay() || 0) + ' : ' + sunday.getTime());
                sunday.setDate(sunday.getDate() - (sunday.getDay() || 0));
                var saturday = new Date(sunday.getTime());
                saturday.setDate(sunday.getDate() + 6);
                return [(date >= sunday && date <= saturday), ''];
            },
            onSelect: function() {
                this.focus();
            }
        });
        $("#date").datepicker("option", "dateFormat", "dd/mm/yy");
       /* $("#date").datepicker({
            onSelect: function(){
                this.focus();
            }
        });
        if( $( "#date" ).datepicker( "show" )) {
            this.focus;
        }*/
    });
  });

