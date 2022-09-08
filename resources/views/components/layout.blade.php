<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- google-fonts -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta
      name="description"
      content="Looking for best company to build a custom softwares? Look no further, Corestream Nigeria are a team of professional software developer&lt;&gt;Corestream is one of the most trusted names in the IT space delivering technology innovation in Africa"
    />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="keywords"
      content=" corestream, digital solutions, africa tech, nigeria, nigeria webdeveloper, system automation, artificial intelligence, robotics, nigeria robotics, artificial inteligence piooner, core creative, websites, softwares, nigeria solutions, home automation, african solutions "
    />
    <meta
      name="description"
      content="CorestreamNG - digital solutions, we are enterprise software development company providing digital solutions."
    />
    <meta name="author" content="corestream.ng" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"
    />
    <title>{{$title}}</title>
    <link
      href="Corestream%20-%20Nigeria%20-%20Home%20Robotics_files/css2"
      rel="stylesheet"
    />
    <!-- //google-fonts -->
    <!-- Favicon -->
    <link
      rel="shortcut icon"
      href="https://corestream.ng/assets/images/favicon.fw.png"
    />
    <link
      href="{{ asset('css/coreStream/css.css') }}"
      rel="stylesheet"
    />
    <link
      href="{{asset('css/coreStream/css_002.css')}}"
      rel="stylesheet"
    />
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('css/coreStream/style-starter.css') }}">
    <livewire:styles />
    <!-- Scripts -->
    <script defer  src="{{ asset('js/coreStream/bootstrap.js') }}"></script>
    <script defer src="{{ asset('js/coreStream/jquery-3.js')}}"></script>
    <script defer src="{{ asset('js/coreStream/jquery.js')}}"></script>
    <script defer src="{{ asset('js/coreStream/jquery_002.js')}}"></script>
    <script defer src="{{ asset('js/coreStream/lightbox-plus-jquery.js')}}"></script>
    <script defer src="{{ asset('js/coreStream/theme-change.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/js/tinymce/tinymce.min.js') }}"></script>
<script type="text/javascript">
  tinymce.init({
            selector: 'textarea',

            image_class_list: [
            {title: 'img-responsive', value: 'img-responsive'},
            ],
            height: 500,
            setup: function (editor) {
                editor.on('init change', function () {
                    editor.save();
                });
            },
            plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste imagetools "
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image pageembed",
            mediaembed_service_url: 'SERVICE_URL',
            mediaembed_max_width: 450,
            media_live_embeds: true,
            image_title: true,
            relative_urls:false,
            automatic_uploads: true,
            images_upload_url: '/upload',
            file_picker_types: 'image file media',
            file_picker_callback: function(cb, value, meta) {
                var input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');
                input.onchange = function() {
                    var file = this.files[0];

                    var reader = new FileReader();
                    reader.readAsDataURL(file);
                    reader.onload = function () {
                        var id = 'blobid' + (new Date()).getTime();
                        var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                        var base64 = reader.result.split(',')[1];
                        var blobInfo = blobCache.create(id, file, base64);
                        blobCache.add(blobInfo);
                        cb(blobInfo.blobUri(), { title: file.name });
                    };
                };
                input.click();
            }
        }); 
</script>
  </head>

<body>
<x-header/>

{{ $slot }}

<x-footer/>   
<livewire:scripts />
</body>
</html>