<?php
    require_once('config.inc.php');

?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Üdv az oldalon</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <?php foreach( $kezdolap as $key => $kezdolap_tétel ) { ?>
            <li class="nav-item">
                <a 
                    class="nav-link active" 
                    aria-current="page" 
                    href="<?php echo $kezdolap_tétel['link'] ?>"
                >
                    <?php echo $kezdolap_tétel['text'] ?>
                </a>
            </li>
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>