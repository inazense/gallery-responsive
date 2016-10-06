/*jslint browser: true*/
/*global $*/
$(document).ready(function () {
    'use strict';
    $('.popup-gallery').magnificPopup({
        delegate: 'a',
        type: 'image',
        tLoading: 'Cargando imagen #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0, 1]
        },
        image: {
            tError: '<a href="%url%">La imagen #%curr%</a> no se ha podido cargar.',
            titleSrc: function (item) {
                return item.el.attr('title') + '<small>MP Reformas</small>';
            }
        }
    });
});