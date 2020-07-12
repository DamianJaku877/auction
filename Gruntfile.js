module.exports = function (grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        concat: {
            options: {
                stripBanners: true
            },
            css_vendor: {
                src: [
                    'node_modules/font-awesome/css/font-awesome.min.css',
                    'app/Resources/assets/vendor/bootstrap/css/bootstrap.min.css',
                    'app/Resources/assets/vendor/bootstrap/css/bootstrap-grid.min.css',
                    'app/Resources/assets/vendor/bootstrap/css/bootstrap-reboot.min.css',
                    'app/Resources/assets/vendor/mdbootstrap/css/mdb.min.css'
                ],
                dest: 'web/css/vendor.min.css'
            },
            js_vendor: {
                src: [
                    'node_modules/jquery/dist/jquery.js',
                    'node_modules/jquery-onmutate/src/jquery.onmutate.min.js',
                    'node_modules/mdbootstrap/js/popper.min.js',
                    'app/Resources/assets/vendor/bootstrap/js/bootstrap.min.js',
                    'app/Resources/assets/vendor/bootstrap/js/bootstrap-bundle.min.js',
                    'app/Resources/assets/vendor/mdbootstrap/js/mdb.min.js',
                    'app/Resources/assets/vendor/moment/moment-with-locales.min.js'
                ],
                dest: 'web/js/vendor.min.js'
            },
            css_bootstrap_map: {
                src: [
                    'app/Resources/assets/vendor/bootstrap/css/bootstrap.min.css.map',
                ],
                dest: 'web/css/bootstrap.min.css.map'
            },
            css_bootstrap_grid_map: {
                src: [
                    'app/Resources/assets/vendor/bootstrap/css/bootstrap-grid.min.css.map',
                ],
                dest: 'web/css/bootstrap-grid.min.css.map'
            },
            css_bootstrap_reboot_map: {
                src: [
                    'app/Resources/assets/vendor/bootstrap/css/bootstrap-reboot.min.css.map',
                ],
                dest: 'web/css/bootstrap-reboot.min.css.map'
            },
            js_bootstrap_map: {
                src: [
                    'app/Resources/assets/vendor/bootstrap/js/bootstrap.min.js.map',
                ],
                dest: 'web/js/bootstrap.min.js.map'
            },
            js_bootstrap_bundle_map: {
                src: [
                    'app/Resources/assets/vendor/bootstrap/js/bootstrap-bundle.min.js.map',
                ],
                dest: 'web/js/bootstrap-bundle.min.js.map'
            },
            js_dashboard: {
                src: [
                    'app/Resources/assets/dashboard/js/dashboard.js'
                ],
                dest: 'web/js/dashboard.js'
            },
            js_chartjs_plugin_style: {
                src: [
                    'app/Resources/assets/dashboard/js/chartjs-plugin-style.min.js'
                ],
                dest: 'web/js/chartjs-plugin-style.min.js'
            },
            css_dashboard: {
                src: [
                    'app/Resources/assets/dashboard/css/dashboard.css'
                ],
                dest: 'web/css/dashboard.css'
            },
            js_registerForm: {
                src: [
                    'app/Resources/assets/registerForm/js/registerForm.js'
                ],
                dest: 'web/js/registerForm.js'
            },
            css_registerForm: {
                src: [
                    'app/Resources/assets/registerForm/css/registerForm.css'
                ],
                dest: 'web/css/registerForm.css'
            },
            js_fullcalendar: {
                src: [
                    'app/Resources/assets/registerForm/js/fullcalendar.min.js',
                ],
                dest: 'web/js/fullcalendar.min.js'
            },
            js_calendar: {
                src: [
                    'app/Resources/assets/registerForm/js/calendar.js'
                ],
                dest: 'web/js/calendar.js'
            },
            css_calendar: {
                src: [
                    'app/Resources/assets/registerForm/css/calendar.css'
                ],
                dest: 'web/css/calendar.css'
            },
            js_calendar_locale: {
                src: [
                    'app/Resources/assets/registerForm/js/locale-all.js'
                ],
                dest: 'web/js/locale-all.js'
            },
            js_stepper: {
                src: [
                    'app/Resources/assets/registerForm/js/stepper.js'
                ],
                dest: 'web/js/stepper.js'
            },
            js_cookie: {
                src: [
                    'app/Resources/assets/base/js/js.cookie.js'
                ],
                dest: 'web/js/js.cookie.js'
            },
            js_modal_cookie: {
                src: [
                    'app/Resources/assets/base/js/modal_cookie.js'
                ],
                dest: 'web/js/modal_cookie.js'
            },
            // css_stepper: {
            //     src: [
            //         'app/Resources/assets/registerForm/css/stepper.css'
            //     ],
            //     dest: 'web/css/stepper.css'
            // },
            css_footer: {
                src: [
                    'app/Resources/assets/base/css/footer.css'
                ],
                dest: 'web/css/footer.css'
            },
            css_header_booking: {
                src: [
                    'app/Resources/assets/base/css/header-booking.css'
                ],
                dest: 'web/css/header-booking.css'
            },
            css_main: {
                src: [
                    'app/Resources/assets/base/css/main.css'
                ],
                dest: 'web/css/main.css'
            },
            css_ex_style: {
                src: [
                    'app/Resources/assets/base/css/ex-style.css'
                ],
                dest: 'web/css/ex-style.css'
            },
            css_ex_plugins: {
                src: [
                    'app/Resources/assets/base/css/ex-plugins.css'
                ],
                dest: 'web/css/ex-plugins.css'
            },
            css_ex_responsive: {
                src: [
                    'app/Resources/assets/base/css/ex-responsive.css'
                ],
                dest: 'web/css/ex-responsive.css'
            },
            css_iconfont: {
                src: [
                    'app/Resources/assets/base/css/iconfont.css'
                ],
                dest: 'web/css/iconfont.css'
            },
            css_cart: {
                src: [
                    'app/Resources/assets/base/css/cart.css'
                ],
                dest: 'web/css/cart.css'
            },
            css_stepper: {
                src: [
                    'app/Resources/assets/base/css/stepper.css'
                ],
                dest: 'web/css/stepper.css'
            },
            css_lang_switcher: {
                src: [
                    'app/Resources/assets/base/css/lang-switcher.css'
                ],
                dest: 'web/css/lang-switcher.css'
            },
            css_magnific_popup: {
                src: [
                    'app/Resources/assets/base/css/magnific-popup.css'
                ],
                dest: 'web/css/magnific-popup.css'
            },
            js_magnific_popup: {
                src: [
                    'app/Resources/assets/base/js/jquery.magnific-popup.min.js'
                ],
                dest: 'web/js/jquery.magnific-popup.min.js'
            },
            js_ex_main_dist: {
                src: [
                    'app/Resources/assets/base/js/ex-main-dist.js'
                ],
                dest: 'web/js/ex-main-dist.js'
            },
            js_ex_main: {
                src: [
                    'app/Resources/assets/base/js/ex-main.js'
                ],
                dest: 'web/js/ex-main.js'
            },
            js_ex_main2: {
                src: [
                    'app/Resources/assets/base/js/ex-main2.js'
                ],
                dest: 'web/js/ex-main2.js'
            },
            js_ex_plugins: {
                src: [
                    'app/Resources/assets/base/js/ex-plugins.js'
                ],
                dest: 'web/js/ex-plugins.js'
            },
            css_booking_service: {
                src: [
                    'app/Resources/assets/base/css/booking-service.css'
                ],
                dest: 'web/css/booking-service.css'
            },
            css_fos: {
                src: [
                    'app/Resources/assets/base/css/fos.css'
                ],
                dest: 'web/css/fos.css'
            },
            css_fonts: {
                src: [
                    'app/Resources/assets/base/css/fonts.css'
                ],
                dest: 'web/css/fonts.css'
            },
            css_privacy_policy: {
                src: [
                    'app/Resources/assets/base/css/privacy-policy.css'
                ],
                dest: 'web/css/privacy-policy.css'
            },
            css_landing_page: {
                src: [
                    'app/Resources/assets/base/css/landing.css'
                ],
                dest: 'web/css/landing.css'
            },
            css_landing_footer: {
                src: [
                    'app/Resources/assets/base/css/footer-landing.css'
                ],
                dest: 'web/css/footer-landing.css'
            },
            css_landing_lang_switcher_landing: {
                src: [
                    'app/Resources/assets/base/css/lang-switcher-landing.css'
                ],
                dest: 'web/css/lang-switcher-landing.css'
            },
            js_company_verification: {
                src: [
                    'app/Resources/assets/base/js/companyVerification.js'
                ],
                dest: 'web/js/companyVerification.js'
            },
            js_calculate_course_form_currency: {
                src: [
                    'app/Resources/assets/base/js/calculateCourseFormCurrency.js'
                ],
                dest: 'web/js/calculateCourseFormCurrency.js'
            }
        },
        copy: {
            fonts: {
                files: [
                    {expand: true, cwd: 'node_modules/font-awesome/fonts/', src: ['**'], dest: 'web/fonts'},
                    {expand: true, cwd: 'node_modules/mdbootstrap/font/', src: ['**'], dest: 'web/font'},
                    {expand: true, cwd: 'app/Resources/assets/base/fonts/', src: ['**'], dest: 'web/fonts'},
                ]
            },
            images: {
                files: [
                    {expand: true, cwd: 'node_modules/mdbootstrap/img/', src: ['**'], dest: 'web/img'},
                    {expand: true, cwd: 'app/Resources/assets/dashboard/img/', src: ['**'], dest: 'web/img'},
                    {expand: true, cwd: 'app/Resources/assets/base/img/', src: ['**'], dest: 'web/img'},
                    {expand: true, cwd: 'app/Resources/assets/registerForm/img/', src: ['**'], dest: 'web/img'}
                ]
            },
            tinymce: {
                files: [
                    {expand: true, cwd: 'node_modules/tinymce/', src: ['**'], dest: 'web/assets/src/tinymce'},
                ]
            },
            presentations: {
                files: [
                    {expand: true, cwd: 'app/Resources/assets/presentations', src: ['**'], dest: 'web/assets/presentations'},
                ]
            }

        }
    });


    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-copy');

    grunt.registerTask('default', ['concat', 'copy']);
};
