<link rel="apple-touch-icon" href="apple-touch-icon.png">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<!-- Place favicon.ico in the root directory -->
<link rel="stylesheet" href="{{theme_path()}}/css/vendor.css">
<!-- Theme initialization -->
<link rel="stylesheet" id="theme-style" href="{{theme_path()}}/css/app-red.css">

<script>

    var APP_URL = {!! json_encode(url('/')) !!};
    
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