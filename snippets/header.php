<!DOCTYPE html>
<html lang="en">
<head>
  <!-- meta tags -->
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $page; ?></title>
  <meta name="description" content="">

  <!-- og tags -->
  <meta property="og:title" content="">
  <meta property="og:description" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <!-- styles -->
  <!-- load critical inline styles -->
  <style type="text/css">
    <?php
      $file = 'assets/stylesheets/build/critical/'.$page_type.'.css';
      file_exists($file) AND include $file;
    ?>
  </style>

  <!-- defer loading of non-critical styles -->
  <noscript id="deferred-styles">
    <link href="assets/stylesheets/build/style.css" rel="stylesheet" type="text/css">
  </noscript>

  <!-- load non-critical styles -->
  <script>
    var loadDeferredStyles = function() {
      var addStylesNode = document.getElementById('deferred-styles');
      var replacement = document.createElement('div');
      replacement.innerHTML = addStylesNode.textContent;
      document.body.appendChild(replacement);
      addStylesNode.parentElement.removeChild(addStylesNode);
    };
    var raf = requestAnimationFrame || mozRequestAnimationFrame ||
        webkitRequestAnimationFrame || msRequestAnimationFrame;
    if (raf) raf(function() { window.setTimeout(loadDeferredStyles, 0); });
    else window.addEventListener('load', loadDeferredStyles);
  </script>

  <!-- load critical scripts -->
  <script>
    // javascript hook
    if (document.documentElement.classList.length) {
      document.documentElement.className += ' js';
    } else {
      document.documentElement.className = ' js';
    }
    // picture element HTML5 shiv
    document.createElement('picture');
  </script>

  <!-- favicons -->
  <?php include 'assets/favicons/build/favicons.html'; ?>
</head>
<body class="js-pos-relative js-of-hidden">