<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Blogpost</title>
</head>

<body>
  <header>
    <span id="logo">logo</span>
    <div>
      <span>Page 2</span>
      <span>Page 3</span>
      <span>Page 5</span>
      <span id="active">Page 1</span>
      <span>Page 7</span>
      <span>Page 8</span>
      <span>Page 9</span>
      <span>Page 10</span>
    </div>
  </header>



  <h1>Blog Posts</h1>
  <span id="sous-titre">Images from <a href="https://www.freepik.com" id="source">Freepik</a></span>
  <form method="POST" onsubmit="changeH1(event,change_h1.value)">
    <h2>Un peu de fantaisie?</h2>
    <input type="text" name="change_h1" id="change_h1" placeholder="Changez le titre !">
    <input type="submit" id="submit" value="Changer">
  </form>
  <?php
  $repo = new ArticleRepo($data);
  $articles = array();
  for ($i = 0; $i < count($row); $i++) {
    $article = new Article($row[$i]);
    array_push($articles, $article);
  }
  echo '<div class="table_wrapper">';
  foreach ($articles as $key => $value) {
  ?>

    <div>
      <img src="photo<?= ($key + 1) ?>.png">
      <span class="titre">
        <?= $value->titre(); ?>
      </span>
      <span class="contenu">
        <?= $value->contenu(); ?>
      </span>
      <span>READ MORE</span>
    </div>
  <?php } ?>
  </div>
  <button>Learn more</button>
  <footer>
    <div id="f1">
      <span class="titre">Headline</span>
      <span class="contenu">Lorem ipsum</span>
    </div>
    <div id="f2">
      <span class="titre">Headline</span>
      <span class="contenu">Lorem ipsum</span>
    </div>
    <div id="f3">
      <span class="titre">Headline</span>
      <span class="contenu">Lorem ipsum</span>
    </div>
  </footer>
  <div id="foot2">
    <div id="sep"></div>
    Lorem ipsum
  </div>
  <script src="script.js"></script>
</body>

</html>