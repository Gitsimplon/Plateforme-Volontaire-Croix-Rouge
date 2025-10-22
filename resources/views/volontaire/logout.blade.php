<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Déconnexion | Volontaires Croix-Rouge</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body class="font-sans antialiased bg-gray-50">
    <div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full bg-white p-8 rounded-lg shadow-md text-center">
            <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-red-100">
                <i data-feather="log-out" class="h-6 w-6 text-red-600"></i>
            </div>
            <h2 class="mt-3 text-2xl font-bold text-gray-900">
                Déconnexion réussie
            </h2>
            <div class="mt-2">
                <p class="text-sm text-gray-600">
                    Vous avez été déconnecté avec succès. Merci pour votre engagement !
                </p>
            </div>
            <div class="mt-6">
                <a href="/login" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition duration-300">
                    Se reconnecter
                </a>
            </div>
            <div class="mt-4">
                <a href="/" class="text-sm font-medium text-red-600 hover:text-red-500">
                    <i data-feather="home" class="w-4 h-4 inline mr-1"></i> Retour à l'accueil
                </a>
            </div>
        </div>
    </div>

    <script>
        // Initialize feather icons
        document.addEventListener('DOMContentLoaded', function() {
            feather.replace();
            
            // Redirect to home after 5 seconds
            setTimeout(function() {
                window.location.href = '/';
            }, 5000);
        });
    </script>
</body>
</html>