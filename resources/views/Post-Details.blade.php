<!DOCTYPE html>
<html style="font-size: 16px;"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Post 8">
    <meta name="description" content="">
    <title>Post Details</title>
    <link rel="stylesheet" href="{{ asset('css/nicepage.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('css/post.css') }}" media="screen">
    <script class="u-script" type="text/javascript" src="{{ asset('js/jquery.js') }}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ asset('js/nicepage.js') }}" defer=""></script>
    <meta name="generator" content="Nicepage 4.13.4, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700">


    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/572.png",
		"sameAs": []
}</script>
    <meta name="theme-color" content="#324f79">
    <meta property="og:title" content="About">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode"><header class="u-clearfix u-header u-header" id="sec-d669"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
    @include('layout.header')
    <section class="u-clearfix u-section-1" id="sec-bcc6">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1"><!--blog--><!--blog_options_json--><!--{"type":"Recent","source":"","tags":"","count":""}--><!--/blog_options_json-->
        <div class="u-blog u-expanded-width u-blog-1">
          <div class="u-repeater u-repeater-1"><!--blog_post-->
            <div class="u-blog-post u-container-style u-repeater-item u-shape-rectangle">
              <div class="u-container-layout u-similar-container u-valign-top-xl u-container-layout-1">

                  <img alt="" class="u-blog-control u-image u-image-default u-image-1" src={{ '/images/client/'.$post->image }} ><!--/blog_post_image-->
                <h2 class="u-align-left u-blog-control u-text u-text-1">
                  {{ $post->title }}
                </h2><!--/blog_post_header--><!--blog_post_metadata-->
                <div class="u-blog-control u-metadata u-text-grey-40 u-metadata-1"><!--blog_post_metadata_date-->
                  <span class="u-meta-date u-meta-icon"><!--blog_post_metadata_date_content-->{{ $post->created_at }}<!--/blog_post_metadata_date_content--></span><!--/blog_post_metadata_date--><!--blog_post_metadata_comments-->
                  <span class="u-meta-comments u-meta-icon"><!--blog_post_metadata_comments_content-->Comments ({{ count($post->comments) }})<!--/blog_post_metadata_comments_content--></span><!--/blog_post_metadata_comments-->
                  @foreach($post->comments as $comment)
                  <h3>
                        {{ '-' . $comment->content }}
                  </h3>
                  @endforeach
                </div><!--/blog_post_metadata--><!--blog_post_content-->
                <div class="u-align-left u-blog-control u-post-content u-text u-text-2"><!--blog_post_content_content-->{{ $post->content }}<!--/blog_post_content_content--></div><!--/blog_post_content--><!--blog_post_readmore-->
                <form action={{ url('add-comment/' . $post->id ) }} method="post">
                    @csrf
                    <div class="u-form-group u-form-name u-block-1d6b-7">
                        <label for="username-708d" class="u-form-control-hidden u-label u-block-1d6b-8"></label>
                        <input  type="text" placeholder="Enter Your Comment" id="username-708d" name="content" class="u-grey-5 u-input u-input-rectangle u-block-1d6b-9" required="">
                        <input type="submit" class="u-btn u-btn-round u-btn-submit u-button-style u-radius-17 u-block-1d6b-16" value="Comment" >
                      </div>
                </form>
              </div>
            </div><!--/blog_post-->
          </div>
        </div><!--/blog-->
      </div>
    </section>

</body></html>
