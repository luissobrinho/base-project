'use strict';


/*--------------------------------------
     Notifications & Dialogs
 ---------------------------------------*/
/*
 * Notifications
 */
function notify(title, message, url, from, align, icon, type, animIn, animOut){
    $(document).ready(function() {
        $.growl({
            icon: icon,
            title: title,
            message: message,
            url: url
        },{
            element: 'body',
            type: type,
            allow_dismiss: true,
            placement: {
                from: from,
                align: align
            },
            offset: {
                x: 30,
                y: 30
            },
            spacing: 10,
            z_index: 999999,
            delay: 2500,
            timer: 1000,
            url_target: '_blank',
            mouse_over: true,
            animate: {
                enter: animIn,
                exit: animOut
            },
            icon_type: 'class',
            template: '<div data-growl="container" class="alert" role="alert">' +
                '<button type="button" class="close" data-growl="dismiss">' +
                '<span aria-hidden="true">&times;</span>' +
                '<span class="sr-only">Close</span>' +
                '</button>' +
                '<span data-growl="icon"></span>' +
                '<h3 data-growl="title"></h3>' +
                '<span data-growl="message"></span>' +
                '<a href="#" data-growl="url"></a>' +
                '</div>'
        });
    });
}

