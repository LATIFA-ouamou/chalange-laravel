<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un employé</title>
    <!-- TailwindCSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

  <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
    <h1 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Ajouter un Employé</h1>

    <form action="/addForm" method="POST" class="space-y-4">
      @csrf

      <!-- Nom -->
      <div>
        <label for="title" class="block text-sm font-medium text-gray-700">title</label>
        <input type="text" id="title" name="title" required
               class="mt-1 w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
      </div>

      <!-- Contenu -->
      <div>
        <label for="content" class="block text-sm font-medium text-gray-700">Contenu</label>
        <input type="text" id="content" name="content" required
               class="mt-1 w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
      </div>

      <!-- Statut -->
      <div>
        <label for="status" class="block text-sm font-medium text-gray-700">Statut</label>
        <input type="text" id="status" name="status" required
               class="mt-1 w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
      </div>

      <!-- Auteur -->
      <div>
        <label for="author" class="block text-sm font-medium text-gray-700">Auteur</label>
        <input type="text" id="author" name="author" required
               class="mt-1 w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
      </div>

      <!-- Bouton -->
      <button type="submit"
              class="w-full bg-blue-600 text-white font-medium py-2 rounded-md hover:bg-blue-700 transition duration-150">
        Ajouter
      </button>
    </form>
  </div>

</body>
</html>
