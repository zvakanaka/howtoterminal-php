<?php include $_SERVER['DOCUMENT_ROOT'].'/php-class/dynamic/views/parts/head.php'; ?>

<main>
<?php foreach ($albums as $album) { ?>
    <a class="thumb-link" href="?action=album&amp;album=<?php echo $album;?>">
      <img class="thumb" src="<?php echo "$photo_dir/$album/.album/thumb.webp"; ?>" alt="Album thumb for <?php echo $album;?>"/>
    </a>
<?php } ?>
</main>

<?php if (isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == true) {
  if (filter_input(INPUT_GET, "hidden") == NULL) { ?>
    <div class="singularity">
      <a href="?action=home&hidden=true">Show Hidden Albums</a>
    </div>
<?php } else { ?>
  <div class="singularity">
    <a href="?action=home">Hide Hidden Albums</a>
  </div>
<?php }} ?>

<?php include $_SERVER['DOCUMENT_ROOT'].'/php-class/dynamic/views/parts/toes.php'; ?>
