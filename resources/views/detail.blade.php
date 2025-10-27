<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détail du post</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen flex flex-col items-center p-8">

    <div class="w-full max-w-2xl bg-white rounded-lg shadow p-6">
        <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">Détails du Post</h1>

        <div class="space-y-4">
            <div>
                <h2 class="text-gray-600 text-sm">ID :</h2>
                <p class="text-gray-900 font-semibold">{{ $post->id }}</p>
            </div>

            <div>
                
                <h2 class="text-gray-600 text-sm">Titre :</h2>
                <p class="text-gray-900 font-semibold">{{ $post->title }}</p>
            </div>

            <div>
                <h2 class="text-gray-600 text-sm">Contenu :</h2>
                <p class="text-gray-900">{{ $post->content }}</p>
            </div>

            <div>
                <h2 class="text-gray-600 text-sm">Statut :</h2>
                <p class="text-gray-900">{{ $post->status }}</p>
            </div>

            <div>
                <h2 class="text-gray-600 text-sm">Auteur :</h2>
                <p class="text-gray-900">{{ $post->author }}</p>
            </div>
        </div>

        <div class="mt-8 flex justify-between">
            <a href="{{ route('home') }}" 
               class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-4 py-2 rounded">
               ⬅ Retour à la liste
            </a>

           <a {{--  href="{{ route('edit', $post->id) }}"  --}}
               class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
               ✏ Modifier
            </a>
        </div>
    </div>

</body>
</html>
