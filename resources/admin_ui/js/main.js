// // Imports
import $ from 'jquery';
window.$ = $;
window.jQuery = $;

import * as bootstrap from './../vendors/bootstrap';
window.bootstrap = bootstrap;
import "moment";
import "metismenu/dist/metisMenu";
import "jquery-circle-progress";
import "perfect-scrollbar"
import PerfectScrollbar from 'perfect-scrollbar';
window.PerfectScrollbar = PerfectScrollbar;
import "toastr";
import "jquery.fancytree";
import ApexCharts from 'apexcharts';
window.ApexCharts = ApexCharts;
import "bootstrap-table";
import 'datatables.net';
import "datatables.net-bs4";
import "datatables.net-responsive";
import "datatables.net-responsive-bs4";
import "slick-carousel";
import  CountUp  from  "./../vendors/countup.js/dist/countUp";
window.CountUp = CountUp

require('./customs/custom');
require('./customs/loader');
require('./charts/apex-charts');
require('./circle-progress')
require('./demo');
require('./scrollbar');
require('./toastr');
require('./treeview');
require('./form-components/toggle-switch');
require('./customs/tables');
require('./carousel-slider');
require('./customs/count-up')
require('./customs/ckeditor')
window.Vue = require('vue');

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
//
const app = new Vue({
    el: '#app',
});



// // Stylesheets
