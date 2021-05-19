


<?php function cabecalho() { global $config; ?>
  <!doctype html>
  <html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title><?=$config['TITULO']?></title>
      <?php inc('bootstrap.min.css'); ?>
      <?php inc('starter-template.css'); ?>
    </head>
    <body>
    <?php navegacao(); ?>
    <main role="main" class="container" >
<?php } ?>
<style>
  h5{
  background-color: gray;
  border: 3px;
  color:black;
  }


</style>
<h5>
<?php function navegacao() { global $config; ?>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#"><?=$config['TITULO']?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <?php foreach($config['MENU'] as $title => $value) { ?>
            <?php if(is_array($value)) { ?>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?=$title?></a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                  <?php foreach($value as $t => $v) { ?>
                    <a class="dropdown-item" href="<?=$v?>"><?=$t?></a>
                  <?php } ?>
                </div>
              </li>
            <?php } else { ?>
              <li class="nav-item">
                <a class="nav-link" href="<?=$value?>"><?=$title?></a>
              </li>
            <?php } ?>
          <?php } ?>
        </ul>
      </div>
</nav>
<?php } ?>
<?php function rodape() { ?>
    </main>
    <?php inc('jquery-3.6.0.min.js'); ?>
    <?php inc('popper.min.js'); ?>
    <?php inc('bootstrap.min.js'); ?>
  </body>
  </h5>
</html>
<?php } ?>
