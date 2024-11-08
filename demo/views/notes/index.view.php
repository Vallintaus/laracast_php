<?php require base_path('views/partials/header.php'); ?>

<?php require base_path('views/partials/nav.php'); ?>

<?php require base_path('views/partials/banner.php'); ?>

<?php
use Core\App;
use Core\Database;

$db = App::container()->resolve(Database::class);


$notes = $db->query('SELECT * FROM notes where user_id = 3')->fetchAll();
?>

  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <ul>
       <?php
       foreach ($notes as $note) : ?>
       <li>
          <a href="./note?id=<?= $note['id'] ?>" class="text-blue hover:underline">
            <?= htmlspecialchars($note['body']) ?>
          </a>  
      </li>
       <?php
      endforeach;
       ?>
       </ul>
       <p class="mt-6">
        <a href="notes/create" class="text-blue hover:underline">Create a new note</a>
       </p>
    </div>
  </main>
  
  <?php require base_path('views/partials/footer.php'); ?>