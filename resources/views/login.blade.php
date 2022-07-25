<!DOCTYPE html>
<html style="font-size: 16px;"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content=""><meta name="description" content="">
    <title></title>
    <link rel="stylesheet" href="css/nicepage.css" media="screen">
    <script class="u-script" type="text/javascript" src="np://app.desktop.nicepage.com/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="np://app.desktop.nicepage.com/nicepage.js" defer=""></script>
<meta name="generator" content="Nicepage 4.13.4, nicepage.com"></head>
<body class="u-body u-xl-mode" style="bgcolor:#ffffff"    data-style="login-template-1" data-posts="" data-global-section-properties="{&quot;code&quot;:&quot;LOGIN&quot;,&quot;colorings&quot;:{&quot;light&quot;:[&quot;clean&quot;,&quot;clean&quot;],&quot;colored&quot;:[&quot;clean&quot;,&quot;clean&quot;,&quot;clean&quot;],&quot;dark&quot;:[&quot;clean&quot;,&quot;clean&quot;,&quot;clean&quot;]},&quot;isPreset&quot;:true}" data-source="fix" data-lang="en" data-page-sections-style="[{&quot;name&quot;:&quot;login-form-1&quot;,&quot;margin&quot;:&quot;both&quot;,&quot;repeat&quot;:false}]" data-page-coloring-types="{&quot;light&quot;:[&quot;clean&quot;,&quot;clean&quot;],&quot;colored&quot;:[&quot;clean&quot;,&quot;clean&quot;,&quot;clean&quot;],&quot;dark&quot;:[&quot;clean&quot;,&quot;clean&quot;,&quot;clean&quot;]}" data-page-category="&quot;Login&quot;"><section class="u-align-center u-clearfix u-grey-10 u-block-1d6b-1" custom-posts-hash="T" data-section-properties="{&quot;margin&quot;:&quot;none&quot;,&quot;stretch&quot;:true}" data-id="1d6b" data-posts-content="[{'images':[],'maps':[],'videos':[],'icons':[],'textWidth':584,'textHeight':514,'id':1,'headingProp':'h3','textProp':'text'}]" data-style="login-form-3" id="sec-d31c" data-source="Sketch">
    @include('layout.header')
    <div class="u-clearfix u-sheet u-valign-middle u-block-1d6b-2">
    <div class="u-align-center u-container-style u-group u-radius-50 u-shape-round u-white u-block-1d6b-3">
      <div class="u-container-layout u-valign-middle u-block-1d6b-4">
        <h3 class="u-text u-text-default u-block-1d6b-5">Sign In</h3>
        <div class="u-expanded-width u-form u-login-control u-block-1d6b-6">
          <form action="/login" method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-35 u-form-vertical u-inner-form" source="custom" name="form-2" style="padding: 10px;">
            @csrf
            <div class="u-form-group u-form-name u-block-1d6b-7">
              <label for="username-708d" class="u-form-control-hidden u-label u-block-1d6b-8"></label>
              <input type="text" placeholder="Enter your Username" id="username-708d" name="email" class="u-grey-5 u-input u-input-rectangle u-block-1d6b-9" required="">
            </div>
            <div class="u-form-group u-form-password u-block-1d6b-10">
              <label for="password-708d" class="u-form-control-hidden u-label u-block-1d6b-11"></label>
              <input type="password" placeholder="Enter your Password" id="password-708d" name="password" class="u-grey-5 u-input u-input-rectangle u-block-1d6b-12" required="">
            </div>
            <div class="u-form-checkbox u-form-group u-block-1d6b-13">
              <input type="checkbox" id="checkbox-708d" name="remember" value="On">
              <label for="checkbox-708d" class="u-label u-block-1d6b-14">Remember me</label>
            </div>
            <div class="u-align-center u-form-group u-form-submit u-block-1d6b-15">
              <input type="submit" class="u-btn u-btn-round u-btn-submit u-button-style u-radius-17 u-block-1d6b-16" value="Login" >
            </div>


            <input type="hidden" value="" name="recaptchaResponse">
          </form>
        </div>
        <a href="" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-login-control u-login-forgot-password u-none u-text-palette-1-base u-block-1d6b-17">Forgot password?</a>
      </div>
    </div>
  </div>
</section>
</body></html>
