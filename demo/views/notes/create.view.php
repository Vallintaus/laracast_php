<?php 
use Core\Database; 
use Core\Validator;
?>


<?php require base_path('views/partials/header.php'); ?>

<?php require base_path('views/partials/nav.php'); ?>

<?php require base_path('views/partials/banner.php'); ?>

  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <form method="POST" action="/notes">
  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">

        <div class="col-span-full">
          <label for="note" class="block text-sm/6 font-medium text-gray-900">Note</label>
          <div class="mt-2">
            <textarea 
            id="note" 
            name="note" 
            rows="3" 
            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" 
            placeholder="Write a note here"
            
            ><?= $_POST['note'] ?? '' ?></textarea>
            <?php
            if(isset($errors['note'])) : ?>
             <p class="text-red-500 text-xs mt-2"><?= $errors['note'] ?></p>
             <?php endif; ?>
          </div>
        </div> 

  <div class="mt-6 flex items-center justify-end gap-x-6">
    <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
  </div>
</form>
    </div>
  </main>
  
  <?php require base_path('views/partials/footer.php'); ?>