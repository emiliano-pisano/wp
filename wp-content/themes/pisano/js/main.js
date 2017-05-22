$(function () {
    'use strict';

    $("li a[href^='#']").on('click', function(e) {

        // prevent default anchor click behavior
        e.preventDefault();

        // store hash
        var hash = this.hash;

        // animate
        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 1100, function(){

            // when done, add hash to url
            // (default click behaviour)
            window.location.hash = hash;
        });
    });

    $('form').bootstrapValidator({
        fields: {
            nome: {
                validators: {
                    stringLength: {
                        min: 3,
                        message: 'Per favore inserisci piu di 3 caratteri'
                        
                    },
                    notEmpty: {
                        message: 'Per favore inserisci il tuo nome'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Per favore inserisci il tuo indirizzo email'
                    },
                    emailAddress: {
                        message: 'Per favore inserisci un indirizzo email valido'
                    }
                }
            },
            telefono: {
                validators: {
                    notEmpty: {
                        message: 'Per favore inserisci il tuo numero di telefono'
                    },
                    phone: {
                        country: 'US',
                        message: 'Per favore inserisci il tuo numero di telefono con relativo prefisso'
                    }
                }
            }
        }
    });

});