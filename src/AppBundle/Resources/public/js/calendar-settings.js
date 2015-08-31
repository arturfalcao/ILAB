$(function () {
    var date = new Date();
    var d = date.getDate();
    var m = date.getMonth();
    var y = date.getFullYear();
    var start;
    var end;
    $.datepicker.regional['pt'] = {
      	                closeText: 'Fechar',
      	                prevText: '&#x3c;Anterior',
       	                nextText: 'Seguinte',
      	                currentText: 'Hoje',
       	                monthNames: ['Janeiro','Fevereiro','Mar&ccedil;o','Abril','Maio','Junho',
        	                'Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
       	                monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun',
        	                'Jul','Ago','Set','Out','Nov','Dez'],
        	                dayNames: ['Domingo','Segunda-feira','Ter&ccedil;a-feira','Quarta-feira','Quinta-feira','Sexta-feira','S&aacute;bado'],
        	                dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','S&aacute;b'],
        	                dayNamesMin: ['Dom','Seg','Ter','Qua','Qui','Sex','S&aacute;b'],
       	                weekHeader: 'Sem',
       	                dateFormat: 'dd/mm/yy',
        	                firstDay: 0,
        	                isRTL: false,
        	                showMonthAfterYear: false,
        	                yearSuffix: ''};
    $.datepicker.setDefaults($.datepicker.regional['pt']);


    $('#calendar-holder').fullCalendar({
        lang: 'pt',
        droppable: true,
        editable:true,
        allDayDefault: true,
        defaultView: 'agendaWeek',
        views: {
            month: {
                timeFormat: 'HH:mm { - HH:mm}'
            },
            basic: {
                // options apply to basicWeek and basicDay views
            },
            agenda: {
                timeFormat: 'HH:mm'
            },
            week: {
                // options apply to basicWeek and agendaWeek views
            },
            day: {
                // options apply to basicDay and agendaDay views
            }
        },
        header: {
            left: 'prev, next',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
        },

        timeFormat: 'H(:mm)',
        eventClick:  function(event, jsEvent, view) {
            //set the values and open the modal
            $("#eventInfo").html(event.description);
            $("#eventLink").attr('href', event.url);
        },
        dayClick: function(date, jsEvent, view) {
            var d = date._d;
            var month = $.datepicker.formatDate('DD, dd MM', d);
            $('.start_date').html(month);

            $('#form_startdatetime_date_month option[value="'+ (d.getMonth() + 1) +'"]').prop('selected', true);
            $('#form_startdatetime_date_day option[value="'+ d.getDate()  +'"]').prop('selected', true);
            $('#form_startdatetime_date_year option[value="'+ d.getFullYear()  +'"]').prop('selected', true);
            $('#form_startdatetime_time_hour option[value="'+ d.getHours()  +'"]').prop('selected', true);
            $('#form_startdatetime_time_minute option[value="'+ d.getMinutes() +'"]').prop('selected', true);

            $('#form_enddatetime_date_month option[value="'+ (d.getMonth() + 1) +'"]').prop('selected', true);
            $('#form_enddatetime_date_day option[value="'+ d.getDate()  +'"]').prop('selected', true);
            $('#form_enddatetime_date_year option[value="'+ d.getFullYear()  +'"]').prop('selected', true);
            $('#form_enddatetime_time_hour option[value="'+ d.getHours()  +'"]').prop('selected', true);
            $('#form_enddatetime_time_minute option[value="'+ d.getMinutes() +'"]').prop('selected', true);
            $("#cal_new_event").css( {position:"absolute", top:jsEvent.pageY, left: jsEvent.pageX - 230 ,display:"block","z-index":"999"});
        },
        eventResize: function(event, delta, revertFunc) {

            UpdateAgenda(event, delta , function( response ){
                var data = JSON.parse(response);
            });

        },

        eventDragStop: function(event, delta, revertFunc) {

            UpdateAgenda(event, delta , function( response ){
                var data = JSON.parse(response);
            });
        },
        eventSources: [
            {
                url: Routing.generate('fullcalendar_loader'),
                type: 'POST',
                // A way to add custom filters to your event listeners
                data:{

                },
                error: function(e) {
                    alert(e);
                   //alert('There was an error while fetching Google Calendar!');
                }
            }
        ]
    });
});

function UpdateAgenda(event,delta, callback) {
    // Get all form values
    // Post form
    if(event._start != null){
        var start = new Date(event._start._d - 1*60*60*1000);
    } else{
        var start = "";
    }
    if(event._end != null){
        var end = new Date(event._end._d - 1*60*60*1000);
    } else{
        var end = "";
    }
    $.ajax({
        type        : 'PUT',
        url         : '/app_dev.php/agenda/calendar/newshort/'+ event.id,
        data        : {"start" : start , "end" : end},
        success     : function(result) { callback( result ); }
    });
}


