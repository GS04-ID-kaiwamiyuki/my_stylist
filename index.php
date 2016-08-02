<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-style-Type" content="text/css">
    <meta http-equiv="Content-script-Type" content="text/javascript">
     <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <title>-My Stylist- ヘアスタイリストを見つけよう</title>
    <link rel="shortcut icon" href="img/.ico">
    <meta name="keywords" content="mystylist,マイスタイリスト,マイスタ,美容師,ポートフォリオ,リサーチ,おしゃれ,">
    <meta name="description" content="今の自分に一番あった美容師を見つけよう。スタイルの好み、趣味、関心、いろいろな感覚から出逢おう。">
    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css" media="all">
    <link rel="stylesheet" type="text/css" href="css/style.css" media="all">
    <link href="css/hover.css" rel="stylesheet" type="text/css" media="all">
</head>
<body>
<header>
<nav class="navbar navbar-default navbar-origin" role="navigation">
        <div class="container-fluid">
          <!-- スマートフォンサイズで表示されるメニューボタンとテキスト -->
          <div class="navbar-header">

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-menu-4">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar">STYLIST</span>
              <span class="icon-bar">GALLERY</span>
              <span class="icon-bar">#TAG</span>
              <span class="icon-bar">POST</span>
            </button>
            <a class="navbar-brand" href="#"><img src="img/logo.png" style="width:200px; height:auto;" class="left"></a>
          </div>

          <!-- グローバルナビの中身 -->
          <div class="collapse navbar-collapse" id="nav-menu-4">
            
            <!-- 各ナビゲーションメニュー -->
            <ul class="nav navbar-nav navbar-right ">

              <!-- 通常のリンク -->
              <li><a href="stylist.php">STYLIST</a></li>
              <li><a href="gallery.php">GALLERY</a></li>
              <li><a href="tag.php">#TAG</a></li>
              <li><a href="post.php">POST</a></li>
            <li class="hvr-trim left">LOGIN</li>
            <li class="hvr-trim left">SIGNIN</li>
            </ul>
          </div>
        </div>
      </nav>
</header>
   
    <section class="top_area clearfix raw">
        <div class="search_top left col-md-4 col-sm-6 col-xs-12">
        <h2>SEARCH</h2>
        <form action="cgi-bin/abc.cgi" method="post">
            <p><input type="search" name="search" size="30" maxlength="255">×
            <input type="search" name="search" size="30" maxlength="255"></p>
            <p><input type="submit" value="search!"></p>
            <hr/>
            <h3>エリア別</h3>
            <p>関東</p>
            <p>関西</p>
            <p>九州</p>
            <p>>>more</p>
            
            <h3>＃TAG</h3>
            <p>coffee</p>
            <p>トリートメント</p>
            <p>夏カラー</p>
            <p>>>more</p>
            
            <h3>スタイル</h3>
            <p>short</p>
            <p>bob</p>
            <p>mens</p>
            <p>>>more</p>
        </form>
        </div>
    </section>
<!--    //top_area-->
<section class="about">
    <h2><img src="img/about.png"></h2>
    <p>いま一番自分にあったスタイリストを見つけよう。<br>スタイリストの好み、趣味。感心etc...<br>様々な角度から見つけてください。</p>
</section>
<!--//about-->
<section class="top_stylist_area raw">
   <h2><img src="img/stylist_title.png"></h2>
    <ul class="clearfix inner">
        <li class="stylist_box col-md-4 col-sm-6 col-xs-12 hvr-trim">
        <a href="stylist_page.php">
        <div class="post_image_box clearfix">
        <img alt="post image" src="img/sample_01.png">
        </div>
        <div class="user_info_box clearfix ">
        <h2>氏名</h2>
        <span class="user_info user_info-salon">nanuk渋谷店(ナヌーク)</span>
        <p>自己紹介テキストが入ります。自己紹介テキストが入ります。自己紹介テキストが入ります。自己紹介テキストが入ります。</p>
        </div>
        </a>
        </li>
        
        <li class="stylist_box col-md-4 col-sm-6 col-xs-12 hvr-trim ">
        <a href="#">
        <div class="post_image_box clearfix">
        <img alt="post image" src="img/sample_02.png">
        </div>
        <div class="user_info_box clearfix">
        <h2>氏名</h2>
        <span class="user_info user_info-salon">nanuk渋谷店(ナヌーク)</span>
        <p>自己紹介テキストが入ります。自己紹介テキストが入ります。自己紹介テキストが入ります。自己紹介テキストが入ります。</p>
        </div>
        </a>
        </li>
        <li class="stylist_box col-md-4 col-sm-6 col-xs-12 hvr-trim ">
                <a href="#">
        <div class="post_image_box clearfix is-loaded">
        <img alt="post image" src="img/sample_03.png">
        </div>
        <div class="user_info_box clearfix">
        <h2>氏名</h2>
        <span class="user_info user_info-salon">nanuk渋谷店(ナヌーク)</span>
        <p>自己紹介テキストが入ります。自己紹介テキストが入ります。自己紹介テキストが入ります。自己紹介テキストが入ります。</p>
        </div>
        </a>
        </li>
        <a class="button">>> MORE STYLIST</a>
    </ul>
    
</section>
<!--//top_stylist_area-->

<section class="top_tag_area clearfix inner raw">
    <div class="left col-md-6 col-sm-6 col-xs-12"><img src="img/tag_topimg.png"></div>
    <div class="tag_top_text left　col-md-6 col-sm-6 col-xs-12">
           <h2><img src="img/tag_title.png"></h2>
         <p>きになるキーワードで検索しよう。<br>テキストが入ります。<br>テキストが入ります。</p>
         <br>
         <p>人気のタグ</p>
        　<a class="button">>> MORE　#TAG</a>
    </div>
<!--    //tag_top_text-->
</section>
<!--//top_tag_area-->
<section class="top_gallery_area col-md-12">
   <h2><img src="img/gallery_title.png"></h2>
      
       <ul class="clearfix inner">
        <li class="stylist_box col-md-4 col-sm-6 col-xs-12">
        <a href="#">
        <div class="post_image_box clearfix">
        <img alt="post image" src="img/long_img.jpg">
        </div>
        <div class="user_info_box clearfix">
        <h2><img src="img/long_sub_title.png"></h2>
        </div>
        </a>
        </li>
        
        <li class="stylist_box col-md-4 col-sm-6 col-xs-12">
                <a href="#">
        <div class="post_image_box clearfix">
        <img alt="post image" src="img/midium_img.jpg">
        </div>
        <div class="user_info_box clearfix">
        <h2><img src="img/midium_sub_title.png"></h2>
        </div>
        </a>
        </li>
        <li class="stylist_box col-md-4 col-sm-6 col-xs-12">
        <a href="#">
        <div class="post_image_box clearfix">
        <img alt="post image" src="img/short_img.jpg">
        </div>
        <div class="user_info_box clearfix">
        <h2><img src="img/short_sub_title.png"></h2>
        </div>
        </a>
        </li>
        <a class="button">>> MORE GALLERY</a>
    </ul>
    
</section>
<!--//top_gallery_area-->
<footer class="col-md-6">
    <address>Copyright © 2016 StyleStand Inc. All Rights Reserved.</address>
</footer>
</body>
</html>