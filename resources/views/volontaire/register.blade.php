<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S'inscrire | RedHeart Volunteers</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
</head>
<body class="font-sans antialiased bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm">
        <div class="container mx-auto px-6 py-4">s
            <div class="flex items-center justify-between">
                <a href="/" class="flex items-center">
                    <i data-feather="heart" class="text-red-600 w-6 h-6 mr-2"></i>
                    <span class="font-semibold text-gray-800">RedHeart Volunteers</span>
                </a>
                <div>
                    <a href="/login" class="text-gray-600 hover:text-red-600 px-4 py-2">Se connecter</a>
                    <a href="/register" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-md ml-2">S'inscrire</a>
                    <a href="/dashboard" class="text-gray-600 hover:text-red-600 px-4 py-2 ml-2">Tableau de bord</a>
                    <a href="/messages" class="text-gray-600 hover:text-red-600 px-4 py-2">Messagerie</a>
                    <a href="/documents" class="text-gray-600 hover:text-red-600 px-4 py-2">Documents</a>
</div>
            </div>
        </div>
    </nav>

    <!-- Registration Form -->
    <div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full bg-white p-8 rounded-lg shadow-md">
            <div class="text-center mb-8">
                <h2 class="text-2xl font-bold text-gray-800">Créer un compte</h2>
                <p class="text-gray-600 mt-2">Rejoignez notre réseau de volontaires</p>
            </div>
            
            <form class="space-y-6">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="first-name" class="block text-sm font-medium text-gray-700">Prénom</label>
                        <input type="text" id="first-name" name="first-name" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-red-500 focus:border-red-500">
                    </div>
                    <div>
                        <label for="last-name" class="block text-sm font-medium text-gray-700">Nom</label>
                        <input type="text" id="last-name" name="last-name" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-red-500 focus:border-red-500">
                    </div>
                </div>
                
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-red-500 focus:border-red-500">
                </div>
                
                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-700">Téléphone</label>
                    <input type="tel" id="phone" name="phone" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-red-500 focus:border-red-500">
                </div>
                
                <div>
                    <label for="region" class="block text-sm font-medium text-gray-700">Région</label>
                    <select id="region" name="region" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-red-500 focus:border-red-500">
                        <option value="">Sélectionnez votre région</option>
                        <option value="Niamey">Niamey</option>
                        <option value="Agadez">Agadez</option>
                        <option value="Diffa">Diffa</option>
                        <option value="Dosso">Dosso</option>
                        <option value="Maradi">Maradi</option>
                        <option value="Tahoua">Tahoua</option>
                        <option value="Tillabéri">Tillabéri</option>
                        <option value="Zinder">Zinder</option>
                    </select>
                </div>
                
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
                    <input type="password" id="password" name="password" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-red-500 focus:border-red-500">
                </div>
                
                <div>
                    <label for="confirm-password" class="block text-sm font-medium text-gray-700">Confirmer le mot de passe</label>
                    <input type="password" id="confirm-password" name="confirm-password" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-red-500 focus:border-red-500">
                </div>
                
                <div class="flex items-center">
                    <input id="terms" name="terms" type="checkbox" required class="h-4 w-4 text-red-600 focus:ring-red-500 border-gray-300 rounded">
                    <label for="terms" class="ml-2 block text-sm text-gray-700">
                        J'accepte les <a href="/terms" class="text-red-600 hover:text-red-500">conditions d'utilisation</a> et la <a href="/privacy" class="text-red-600 hover:text-red-500">politique de confidentialité</a>
                    </label>
                </div>
                
                <div>
                    <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition duration-300">
                        S'inscrire
                    </button>
                </div>
            </form>
            
            <div class="mt-6 text-center">
                <p class="text-sm text-gray-600">
                    Déjà membre ? 
                    <a href="/login" class="font-medium text-red-600 hover:text-red-500">Se connecter</a>
                </p>
            </div>
        </div>
    </div>

    <script>
        // Initialize feather icons
        document.addEventListener('DOMContentLoaded', function() {
            feather.replace();
        });
    </script>
</body>
</html>
