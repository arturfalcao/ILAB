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
        eventClick: function(calEvent, jsEvent, view) {

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

            $("#cal_new_event").css( {position:"absolute", top:jsEvent.pageY, left: jsEvent.pageX,display:"block","z-index":"999"});

        },
        eventDrop: function(event, delta, revertFunc) {

            alert(event.title + " was dropped on " + event.start.format());

            if (!confirm("Are you sure about this change?")) {
                revertFunc();
            }

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


