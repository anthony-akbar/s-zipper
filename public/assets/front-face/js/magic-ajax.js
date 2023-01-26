/**
 * @Author: 					Serkan KAYABASI <devartist.net/>
 * @Created Time:   			2016-10-10 16:51:05
 * @Last Changed Author:		Serkan KAYABASI <devartist.net/>
 * @Last Changed Time: 		2016-12-06 12:23:43
 */

$(function() {

    $('.ajax-form').submit(function(event) {

        var submit_button = $(this).find('#submitButton');
        submit_button.prop('disabled',true);
        var submit_button_name = submit_button.html();
        submit_button.html('LГјtfen Bekleyiniz..');

        var ajax_form_data = $(this).serializeArray();

        $.ajax({
            type 		: $(this).attr('method'), // formun method unu alД±yoruz
            url			: $(this).attr('action'), // formun action parametresini alД±yoruz
            data 		: ajax_form_data, // formun tГјm datasД±nД± serialize edip diziye dГ¶ktГјk
            dataType 	: 'json', // herzaman json :)
            encode		: true
        }).done(function(response) {
            // EДџer bu fonksiyon tanД±mlanmД±Еџsa post yapД±ldД±ktan sonra Г§alД±ЕџtД±r.
            if (typeof ajaxFormFinish == 'function') {
                ajaxFormFinish(ajax_form_data,response);
            }
            if (response instanceof Array) {
                $.each(response, function (key, value) {
                    notifications(response[key].title,response[key].message,response[key].type);
                });
            } else {
                notifications(response.title,response.message,response.type);

                //  Form sД±fД±rlama ve #slideContent kapatma
                if (response.type == 'success') {
                    $('.modal').modal('hide');
                    $('form')[0].reset();

                    if (typeof formReset == 'function') {
                        formReset();
                    }

                    /*$('form.ajax-form').find('select').each(function(index, el) {
                        $(this).select2('destroy');
                        $(this).select2();
                    });*/
                }
            }

            submit_button.prop('disabled',false);
            submit_button.html(submit_button_name);
        });

        event.preventDefault();
    });

    // datasД±nД± bizim verdiДџimiz yerden alan ajax-form
    $('.ajax-form-compile-data').submit(function(event) {

        var submit_button = $(this).find('#submitButton');
        submit_button.prop('disabled',true);
        var submit_button_name = submit_button.html();
        submit_button.html('LГјtfen Bekleyiniz..');

        var ajax_form_data = ajaxFormDataCompile(this.id);

        $.ajax({
            type 		: $(this).attr('method'), // formun method unu alД±yoruz
            url			: $(this).attr('action'), // formun action parametresini alД±yoruz
            data 		: ajax_form_data, // formun tГјm datasД±nД± serialize edip diziye dГ¶ktГјk
            dataType 	: 'json', // herzaman json :)
        }).done(function(response) {
            // EДџer bu fonksiyon tanД±mlanmД±Еџsa post yapД±ldД±ktan sonra Г§alД±ЕџtД±r.
            if (typeof ajaxFormFinish == 'function') {
                ajaxFormFinish(ajax_form_data,response);
            }
            if (response instanceof Array) {
                $.each(response, function (key, value) {
                    notifications(response[key].title,response[key].message,response[key].type);
                });
            } else {
                notifications(response.title,response.message,response.type);

                //  Form sД±fД±rlama ve #slideContent kapatma
                if (response.type == 'success') {
                    $('.modal').modal('hide');
                    $('form')[0].reset();
                }
            }

            submit_button.prop('disabled',false);
            submit_button.html(submit_button_name);
        });

        event.preventDefault();
    });
});
