"use strict";

function formSubmitAjax(ev, that) {
    ev.preventDefault();

    var formUrl = $(that).attr('action');
    var fields = $(that).serialize();

    // console.log(formUrl);
    // console.log(fields);

    $.ajax({
        type: 'POST',
        url: formUrl,
        data: fields
    })
        .done(function (data) {

            // log data to the console so we can see
            console.log(data);

            // here we will handle errors and validation messages
        });
}
