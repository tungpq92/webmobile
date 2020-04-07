<script src="public/vendor/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="public/vendor/popper.js"></script>
        <script src="public/vendor/bootstrap.min.js"></script>
        <!-- Simplebar -->
        <!-- Used for adding a custom scrollbar to the drawer -->
        <script src="public/vendor/simplebar.js"></script>
        <!-- Vendor -->
        <script src="public/vendor/Chart.min.js"></script>
        <script src="public/vendor/moment.min.js"></script>
        <!-- APP -->
        <script src="public/js/color_variables.js"></script>
        <script src="public/js/app.js"></script>
        <script src="public/vendor/dom-factory.js"></script>
        <!-- DOM Factory -->
        <script src="public/vendor/material-design-kit.js"></script>
        <!-- MDK -->
        <script>
            (function() {
                'use strict';
                // Self Initialize DOM Factory Components
                domFactory.handler.autoInit()
            
            
                // Connect button(s) to drawer(s)
                var sidebarToggle = document.querySelectorAll('[data-toggle="sidebar"]')
            
                sidebarToggle.forEach(function(toggle) {
                    toggle.addEventListener('click', function(e) {
                        var selector = e.currentTarget.getAttribute('data-target') || '#default-drawer'
                        var drawer = document.querySelector(selector)
                        if (drawer) {
                            if (selector == '#default-drawer') {
                                $('.container-fluid').toggleClass('container--max');
                            }
                            drawer.mdkDrawer.toggle();
                        }
                    })
                })
            })()
        </script>
        <script src="public/vendor/morris.min.js"></script>
        <script src="public/vendor/raphael.min.js"></script>
        <script src="public/vendor/bootstrap-datepicker.min.js"></script>
        <script src="public/js/datepicker.js"></script>
        <script>
            $(function() {
                window.morrisDashboardChart = new Morris.Area({
                    element: 'morris-area-chart',
                    data: [{
                            year: '2017-01',
                            a: 6352.27
                        },
                        {
                            year: '2017-02',
                            a: 4309.98
                        },
                        {
                            year: '2017-03',
                            a: 1465.98
                        },
                        {
                            year: '2017-04',
                            a: 1298.25
                        },
                        {
                            year: '2017-05',
                            a: 3209
                        },
                        {
                            year: '2017-06',
                            a: 2083
                        },
                        {
                            year: '2017-07',
                            a: 1285.23
                        },
                        {
                            year: '2017-08',
                            a: 1289
                        },
                        {
                            year: '2017-09',
                            a: 4430
                        },
                        {
                            year: '2017-10',
                            a: 8921.19
                        }
                    ],
                    xkey: 'year',
                    ykeys: ['a'],
                    labels: ['Earnings'],
                    lineColors: ['#fff'],
                    fillOpacity: '0.2',
                    gridEnabled: true,
                    gridTextColor: '#ffffff',
                    resize: true
                });
            
            });
        </script>