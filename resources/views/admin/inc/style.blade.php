
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>{{ $setting->namear }}</title>
    <meta
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
      name="viewport"
    />
    <link
      rel="icon"
      href="/uploads/setting/{{ $setting->logo }}"
      type="image/x-icon"
    />

    <!-- Fonts and icons -->
    <script src="/template/assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
      WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
          families: [
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
          ],
          urls: ["/template/assets/css/fonts.min.css"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="/template/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/template/assets/css/plugins.min.css" />
    <link rel="stylesheet" href="/template/assets/css/kaiadmin.min.css" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="/template/assets/css/demo.css" />




    <link href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
