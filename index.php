<?php
  if(isset($_REQUEST["file"])) {
    $file = $_REQUEST["file"];  
    $filepath = "assets/images/" . $file;
    if(file_exists($filepath)) {
      header('Content-Disposition: attachment; filename='.$filepath.'');
      header('Content-Type: application/octet-stream');
      header('Content-Length: '.filesize($filepath));
      readfile($filepath);
    } else {
      http_response_code(404);
      die();
    }     
  }
?>

<!doctype html>
<!-- If multi-language site, reconsider usage of html lang declaration here. -->
<html lang="en"> 
<head> 
  <meta charset="utf-8">
  <title>Download Image</title>
  <!-- Place favicon.ico in the root directory: mathiasbynens.be/notes/touch-icons -->
  <link rel="shortcut icon" href="favicon.ico">
  <!--font-awesome link for icons-->
  <link rel="stylesheet" media="screen" href="assets/vendor/fontawesome-free-5.13.0-web/css/all.min.css">
  <!-- Default style-sheet is for 'media' type screen (color computer display).  -->
  <link rel="stylesheet" media="screen" href="assets/css/style.css">
</head>

<body>
  <!--container start-->
  <div class="container">
    <!--header section start-->
    <header>
      <div class="wrapper">
        <h1>download images</h1>
      </div>     
    </header>
    <!--header section end-->
    <!--main section start-->
    <main>
      <div class="wrapper">
        <ul>
        <?php
          $images = array("jon rome" => "pic1.png", "krish lee" => "pic10.png", "nara simha" => "pic5.png", 
            "jeanette roast" => "pic6.png", "jone mac" => "pic7.png", "jeanette penddreth" => "pic9.png", "devid lee" => "pic2.png", 
            "noell bea" => "pic19.png", "logan keller" => "pic25.png", "giavani bea" => "pic28.png");
          foreach($images as $title => $image) {
            echo '
              <li>
                <a href="index.php?file=' . $image . '">
                  <figure>
                    <img src="assets/images/' . $image . '">
                  </figure>
                  <figcaption>'.$title.'</figcaption>
                </a>
              </li>
            ';
          }
        ?>
        </ul>
      </div>
    </main>
    <!--main section end-->
  </div>
  <!--container end-->
</body>
</html>