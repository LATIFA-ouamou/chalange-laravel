<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détail du Post</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen flex flex-col items-center p-8">

    <div class="w-full max-w-2xl bg-white shadow-md rounded-lg p-6">
        <h1 class="text-3xl font-bold text-blue-700 mb-6 text-center">Détail du Post</h1>

        <div class="space-y-4">
            <div>
                <h2 class="text-gray-500 text-sm uppercase">ID</h2>
                <p class="text-gray-800 text-lg font-semibold">{{ $post->id }}</p>
            </div>

            <div>
                <h2 class="text-gray-500 text-sm uppercase">Titre</h2>
                <p class="text-gray-800 text-lg font-semibold">{{ $post->title }}</p>
            </div>

            <div>
                <h2 class="text-gray-500 text-sm uppercase">Contenu</h2>
                <p class="text-gray-700 leading-relaxed">{{ $post->content }}</p>
            </div>

            <div>
                <h2 class="text-gray-500 text-sm uppercase">Statut</h2>
                <span class="px-3 py-1 rounded-full text-sm 
                    {{ $post->status == 'actif' ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">
                    {{ $post->status }}
                </span>
            </div>

            <div>
                <h2 class="text-gray-500 text-sm uppercase">Auteur</h2>
                <p class="text-gray-800 text-lg font-semibold">{{ $post->author }}</p>
            </div>
        </div>

        <div class="mt-8 flex justify-between">
            <a href="{{ route('home') }}" 
               class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold px-4 py-2 rounded-lg">
               ← Retour
            </a>

            <a href="{{ route('edit', $post->post ) }}" 
               class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded-lg">
               ✏️ Modifier
            </a>
        </div>
    </div>

</body>
</html>
