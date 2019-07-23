<script>

    var APP_URL = {!! json_encode(url('/')) !!}

    // var themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) :
    // {};
    // var themeName = themeSettings.themeName || '';
    // if (themeName)
    // {
    //     document.write('<link rel="stylesheet" id="theme-style" href="{{theme_path()}}/css/app-' + themeName + '.css">');
    // }
    // else
    // {
    //     document.write('<link rel="stylesheet" id="theme-style" href="{{theme_path()}}/css/app.css">');
    // }
</script>

<!-- Reference block for JS -->
<div class="ref" id="ref">
    <div class="color-primary"></div>
    <div class="chart">
        <div class="color-primary"></div>
        <div class="color-secondary"></div>
    </div>
</div>

<script src="{{theme_path()}}/js/vendor.js"></script>
<script src="{{theme_path()}}/js/app.js"></script>

<script src="{{theme_path()}}/plugins/bootstrap-material-datetimepicker/js/material.min.js"></script>
<script src="{{theme_path()}}/plugins/bootstrap-material-datetimepicker/js/moment-with-locales.min.js"></script>
<script src="{{theme_path()}}/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>