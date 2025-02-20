import './bootstrap.js';
/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.scss';
import $ from 'jquery';

// app.js

//const $ = require('jquery');

global.$ = global.jQuery = $;
// this "modifies" the jquery module: adding behavior to it
// the bootstrap module doesn't export/return anything
require('bootstrap');

// or you can include specific pieces
// require('bootstrap/js/dist/tooltip');
// require('bootstrap/js/dist/popover');

$(document).ready(function() {
    $('[data-toggle="popover"]').popover();
});

// assets/app.js

// Importation de Select2
import 'select2';
import 'select2/dist/css/select2.css';

// Initialisation de Select2 pour tous les éléments <select> avec la classe 'select2'
document.addEventListener('DOMContentLoaded', function() {
    $('select.select2').select2({
        placeholder: 'Sélectionnez une option',
        allowClear: true,
        width: '100%',
    });
});