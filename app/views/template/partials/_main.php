<div class="container mx-auto flex flex-wrap pt-4 pb-12 text-white">
      <!-- Aside -->
      <aside class="w-full md:w-1/4 p-3">
        <div class="bg-gray-700 rounded-lg shadow-lg p-4">
          <h2 class="font-bold text-lg mb-4">Categories</h2>
          <ul class="list-reset">
            <li>
              <a class="text-gray-300 hover:text-white" href="#">Action</a>
            </li>
            <li>
              <a class="text-gray-300 hover:text-white" href="#">Comédie</a>
            </li>
            <li>
              <a class="text-gray-300 hover:text-white" href="#">Drame</a>
            </li>
            <li>
              <a class="text-gray-300 hover:text-white" href="#"
                >Science-fiction</a
              >
            </li>
          </ul>
        </div>
        <div class="bg-gray-700 rounded-lg shadow-lg p-4 mt-4">
          <h2 class="font-bold text-lg mb-4">Tags</h2>
          <div class="tag-cloud">
            <a class="text-gray-300 hover:text-white text-sm" href="#"
              >Action</a
            >
            <a class="text-gray-300 hover:text-white text-md" href="#"
              >Comédie</a
            >
            <a class="text-gray-300 hover:text-white text-lg" href="#">Drame</a>
            <a class="text-gray-300 hover:text-white text-xl" href="#"
              >Science-fiction</a
            >
          </div>
        </div>
      </aside>

      <!-- Main content -->
      <main class="w-full md:w-3/4 p-3">
        <h2 class="text-2xl font-bold mb-4">liste des books</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <?php echo $content; ?>
        </div>
      </main>
    </div>