<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    @if (file_exists(public_path("/theme/{{$theme}}/favicon.ico")))
        <link rel="icon" href="/theme/{{$theme}}/favicon.ico">
    @endif
    <title><?php echo $title; ?></title>
    <script type="module" crossorigin src="/theme/{{$theme}}/js/chunk-vendors.js"></script>
    <script defer src="/theme/{{$theme}}/js/app.js"></script>
</head>
<body>
{!! $theme_config['custom_html'] !!}
<div id="app"></div>
</body>
<script>
    window.setting = {
        ios: '{{$theme_config['theme_ios']}}',
        android: '{{$theme_config['theme_android']}}',
        mac: '{{$theme_config['theme_mac']}}',
        windows: '{{$theme_config['theme_windows']}}',
        logo: '<?php echo $logo; ?>',
        title: '<?php echo $title; ?>'
    };
</script>

<script src="/theme/{{$theme}}/i18n/i18n.js"></script>
<script src="/theme/{{$theme}}/i18n/zh_CN.js"></script>
<script src="/theme/{{$theme}}/i18n/en.js"></script>
</html>
