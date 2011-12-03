<!DOCTYPE html><html><head>
<?php

  if (!isset($_REQUEST['path'])) {
    $path = "README.md";
  } else {
    $path = $_REQUEST['path'];

    # If the path doesn't start with http, add http://
    # Let's not worry about ftp:// urls, etc.
    if (strtolower(substr($path, 0, 4)) != "http") {
      $path = "http://$path";
    }
  }

?>
<title><?php echo $path ?></title>
<style><?php echo file_get_contents('style.css'); ?></style>
<?php

  # Include any custom scripts or styles you want to create here.
  @include "custom/head.php";

?>
</head><body>
<div class="container">
<?php

  # Include any custom headers you want to create here.
  @include "custom/header.php";

  require('markdown.php');

  # TODO: handle https:// URLs
  $content = @file_get_contents($path);

  if ($content == FALSE) {
    echo "<h1>Error</h1><p>Could not fetch $path</p>";
  } else {
    echo Markdown($content);
  }

  # Include any custom scripts or styles you want to create here.
  @include "custom/footer.php";

?>
</div>
</body>
</html>
