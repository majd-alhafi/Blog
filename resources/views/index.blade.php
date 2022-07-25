<!DOCTYPE html>
<html style="font-size: 16px;"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="​Successful Consultants, ​Coaching and Training, Get Great Work for Your Budget, ​Do you need professionals for your next construction project?, ​Leading consulting firms in the United States, ​Growth Strategy">
    <meta name="description" content="">
    <title>Home</title>
    <link rel="stylesheet" href="css/nicepage.css" media="screen">
    <link rel="stylesheet" href="css/Home.css" media="screen">
    <script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script>
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
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
  </head>
  <body data-home-page="Home.html" data-home-page-title="Home" class="u-body u-xl-mode">
    @include('layout.header')
    <section class="u-clearfix u-section-1" id="sec-d56a">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1"><!--blog--><!--blog_options_json--><!--{"type":"Recent","source":"","tags":"","count":""}--><!--/blog_options_json-->
        <div class="u-blog u-expanded-width u-blog-1">
          <div class="u-repeater u-repeater-1"><!--blog_post-->
            <div class="u-align-center u-blog-post u-container-style u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                <a class="u-post-header-link" href={{ url('post/' . $posts[0]->id ) }}><!--blog_post_image-->
                  <img alt="" src="/images/{{ 'client/'.$posts[0]->image }}"><!--/blog_post_image-->
                </a><!--blog_post_header-->
                <h2 class="u-blog-control u-text u-text-1">
                  <a class="u-post-header-link" href={{ url('post/' . $posts[0]->id ) }}><!--blog_post_header_content-->{{ $posts[0]->title }}<!--/blog_post_header_content--></a>
                </h2><!--/blog_post_header--><!--blog_post_content-->
                <div class="u-blog-control u-post-content u-text u-text-2"><!--blog_post_content_content-->{{ $posts[0]->content }}<!--/blog_post_content_content--></div><!--/blog_post_content--><!--blog_post_metadata-->
                <div class="u-blog-control u-metadata u-metadata-1"><!--blog_post_metadata_date-->
                  <span class="u-meta-date u-meta-icon"><!--blog_post_metadata_date_content-->{{ $posts[0]->created_at }}<!--/blog_post_metadata_date_content--></span><!--/blog_post_metadata_date-->
                </div><!--/blog_post_metadata--><!--blog_post_readmore-->
                <a href={{ url('post/' . $posts[0]->id ) }} class="u-blog-control u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-1"><!--blog_post_readmore_content--><!--options_json--><!--{"content":"","defaultValue":"Read More"}--><!--/options_json-->Read More<!--/blog_post_readmore_content--></a><!--/blog_post_readmore-->
              </div>
            </div><!--/blog_post-->
          </div>
        </div><!--/blog-->
      </div>
    </section>
    <section class="u-clearfix u-section-2" id="sec-d93a">
      <div class="u-clearfix u-sheet u-sheet-1"><!--blog--><!--blog_options_json--><!--{"type":"Recent","source":"","tags":"","count":""}--><!--/blog_options_json-->
        <div class="u-blog u-expanded-width u-blog-1">
          <div class="u-repeater u-repeater-1"><!--blog_post-->
            @for ( $i=1; $i<count($posts); $i++)

            <div class="u-blog-post u-container-style u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-2"><!--blog_post_header-->
                <h2 class="u-blog-control u-text">
                  <a class="u-post-header-link"href={{ url('post/' . $posts[$i]->id ) }}><!--blog_post_header_content-->{{ $posts[$i]->title }}<!--/blog_post_header_content--></a>
                </h2><!--/blog_post_header-->
                <a class="u-post-header-link"href={{ url('post/' . $posts[$i]->id ) }}><!--blog_post_image-->
                  <img alt="" class="u-blog-control u-expanded-width u-image u-image-default u-image-2" src="/images/client/{{ $posts[$i]->image }}"><!--/blog_post_image-->
                </a><!--blog_post_content-->
                <div class="u-blog-control u-post-content u-text u-text-4"><!--blog_post_content_content-->{{ $posts[$i]->content }}<!--/blog_post_content_content--></div><!--/blog_post_content--><!--blog_post_metadata-->
                <div class="u-blog-control u-metadata u-metadata-2"><!--blog_post_metadata_date-->
                  <span class="u-meta-date u-meta-icon"><!--blog_post_metadata_date_content-->{{ $posts[$i]->created_at }}<!--/blog_post_metadata_date_content--></span><!--/blog_post_metadata_date-->
                </div><!--/blog_post_metadata--><!--blog_post_readmore-->
                <a href={{ url('post/' . $posts[$i]->id ) }} class="u-active-none u-blog-control u-border-2 u-border-palette-1-base u-btn u-btn-rectangle u-button-style u-hover-none u-none u-btn-2"><!--blog_post_readmore_content--><!--options_json--><!--{"content":"","defaultValue":"Read More"}--><!--/options_json-->Read More<!--/blog_post_readmore_content--></a><!--/blog_post_readmore-->
              </div>
            </div><!--/blog_post-->
            @endfor
          </div>
        </div><!--/blog-->
      </div>
    </section>




</body></html>
