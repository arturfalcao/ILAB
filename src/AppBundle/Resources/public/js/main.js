/**
 * Created by Celso on 05/10/2015.
 */



$( document ).ready(function() {

    $('#box-title').html($('.box-title').html());
    $('.box-title').html('');


    $('.amostas_list').on('submit', function(e){
        if($('#select2-chosen-2').html() == 'Apagar'){

        }else{
            var arr = [];
            $('.sonata-ba-list-field-batch  input[type="checkbox"]').each(function() {
                if($(this).is(':checked')){
                    arr.push($(this).val());
                }

            });
            e.preventDefault();
            var win = window.open('/generateworklist/'+ arr.toString()  +'', '_blank');
        }
        // validation code here


    });


});