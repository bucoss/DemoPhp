<?php require "views/partials/head.php"?>
<?php require "views/partials/nav.php"?>

<?php require "views/partials/banner.php"?>

<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <!-- Your content -->
    <p class="mb-4 text-blue-500">
      <a href="/websites/demo/notes">Go back ...</a>
    </p>
    <p><?= htmlspecialchars($note['body']) ?></p>
  </div>
</main>
<?php require "views/partials/footer.php" ?>