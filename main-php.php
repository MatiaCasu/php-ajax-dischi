<!-- Stampa dischi tramite Php -->
<?php include __DIR__ . '/database.php'; ?>

<ul class="album-list">
  <?php foreach ($dischiDb as $disco): ?>
    <li>
      <img class="cover-img" src="<?php echo $disco["poster"]; ?>" alt="<?php echo $disco["title"]; ?>">
      <h2><?php echo $disco["title"]; ?></h2>
      <h4><?php echo $disco["author"]; ?></h4>
      <h4><?php echo $disco["year"]; ?></h4>
    </li>
  <?php endforeach ?>
</ul>
