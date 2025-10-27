<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des employés</title>
    <!-- CDN TailwindCSS (à mettre juste pour tester rapidement) -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen flex flex-col items-center p-8">
    
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Liste des employés</h1>
    
<a href="{{route('add')}}"><button type="submit">ajouter</button></a>
    <div class="overflow-x-auto w-full max-w-4xl bg-white shadow-sm rounded-lg">
        <table class="min-w-full border border-gray-200 text-sm text-left text-gray-700">
            <thead class="bg-blue-600 text-white">
                <tr>
                    <th class="py-3 px-4">ID</th>
                    <th class="py-3 px-4">Titre</th>
                    <th class="py-3 px-4">Contenu</th>
                    <th class="py-3 px-4">Statut</th>
                    <th class="py-3 px-4">Auteur</th>
                    <th class="py-3 px-4">action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($post as $e)
                
                <tr class="border-b hover:bg-gray-50">
                    <td class="py-2 px-4">{{ $e->id }}</td>
                    <td class="py-2 px-4">{{ $e->title }}</td>
                    <td class="py-2 px-4">{{ $e->content }}</td>
                    <td class="py-2 px-4">{{ $e->status }}</td>
                    <td class="py-2 px-4">{{ $e->author }}</td>
                    <td class="py-2 px-4">supprimer</td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>
