<!DOCTYPE html>
<html style="font-size: 16px;">
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content=""><meta name="description" content="">
    <title></title>
    <link rel="stylesheet" href="css/nicepage.css" media="screen">

    <script class="u-script" type="text/javascript" src="np://app.desktop.nicepage.com/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="np://app.desktop.nicepage.com/nicepage.js" defer=""></script>
    <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>

    <script>
             function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <meta name="generator" content="Nicepage 4.13.4, nicepage.com"></head>
<body class="u-body u-xl-mode" style="bgcolor:#ffffff"    data-style="login-template-1" data-posts="" data-global-section-properties="{&quot;code&quot;:&quot;LOGIN&quot;,&quot;colorings&quot;:{&quot;light&quot;:[&quot;clean&quot;,&quot;clean&quot;],&quot;colored&quot;:[&quot;clean&quot;,&quot;clean&quot;,&quot;clean&quot;],&quot;dark&quot;:[&quot;clean&quot;,&quot;clean&quot;,&quot;clean&quot;]},&quot;isPreset&quot;:true}" data-source="fix" data-lang="en" data-page-sections-style="[{&quot;name&quot;:&quot;login-form-1&quot;,&quot;margin&quot;:&quot;both&quot;,&quot;repeat&quot;:false}]" data-page-coloring-types="{&quot;light&quot;:[&quot;clean&quot;,&quot;clean&quot;],&quot;colored&quot;:[&quot;clean&quot;,&quot;clean&quot;,&quot;clean&quot;],&quot;dark&quot;:[&quot;clean&quot;,&quot;clean&quot;,&quot;clean&quot;]}" data-page-category="&quot;Login&quot;"><section class="u-align-center u-clearfix u-grey-10 u-block-1d6b-1" custom-posts-hash="T" data-section-properties="{&quot;margin&quot;:&quot;none&quot;,&quot;stretch&quot;:true}" data-id="1d6b" data-posts-content="[{'images':[],'maps':[],'videos':[],'icons':[],'textWidth':584,'textHeight':514,'id':1,'headingProp':'h3','textProp':'text'}]" data-style="login-form-3" id="sec-d31c" data-source="Sketch">
    @include('layout.header')
    <div class="u-clearfix u-sheet u-valign-middle u-block-1d6b-2">
    <div class="u-align-center u-container-style u-group u-radius-50 u-shape-round u-white u-block-1d6b-3">
      <div class="u-container-layout u-valign-middle u-block-1d6b-4">
        <h3 class="u-text u-text-default u-block-1d6b-5">Add Post</h3>
        <div class="u-expanded-width u-form u-login-control u-block-1d6b-6">
          <form action="/add-post" method="POST" enctype="multipart/form-data" class="u-clearfix u-form-custom-backend u-form-spacing-35 u-form-vertical u-inner-form" source="custom" name="form-2" style="padding: 10px;">
            @csrf
            <div class="u-form-group u-form-name u-block-1d6b-7">
              <label for="username-708d" class="u-form-control-hidden u-label u-block-1d6b-8"></label>
              <input type="text" placeholder="Enter Post Title" id="username-708d" name="title" class="u-grey-5 u-input u-input-rectangle u-block-1d6b-9" required="">
            </div>
            <div class="u-form-group u-form-password u-block-1d6b-10">
              <label for="password-708d" class="u-form-control-hidden u-label u-block-1d6b-11"></label>
              <input type="text" rows=10 placeholder="Enter Post Content" id="password-708d" name="content" class="u-grey-5 u-input u-input-rectangle u-block-1d6b-12" required="">
            </div>
            <div class="u-align-center u-form-group u-form-submit u-block-1d6b-15">
                <input type="file"  name='image' onchange="readURL(this);">
                <img id="blah" src="#" alt="your image" />
              </div>
            <div class="u-align-center u-form-group u-form-submit u-block-1d6b-15">
              <input type="submit" class="u-btn u-btn-round u-btn-submit u-button-style u-radius-17 u-block-1d6b-16" value="Post" >
            </div>

            <input type="hidden" value="" name="recaptchaResponse">
          </form>
        </div>
        </div>
    </div>
  </div>
</section>
</body></html>
