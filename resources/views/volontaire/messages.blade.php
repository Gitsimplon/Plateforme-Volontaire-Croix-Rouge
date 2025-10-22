<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messagerie | Volontaires Croix-Rouge</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body class="bg-gray-100">
    <div class="flex">
        <!-- Sidebar Navigation -->
        <div class="w-64 bg-red-800 text-white min-h-screen fixed">
            <div class="p-4 mb-6">
                <a href="/" class="flex items-center text-xl font-bold">
                    <i data-feather="heart" class="mr-2"></i>
                    RedHeart
                </a>
            </div>
            <nav class="mt-8">
                <div class="px-4 mb-6">
                    <p class="text-xs uppercase text-red-300">Menu principal</p>
                </div>
                <a href="/dashboard" class="flex items-center px-4 py-3 text-red-100 hover:text-white">
                    <i data-feather="home" class="mr-3"></i> Tableau de bord
                </a>
                <a href="/profile" class="flex items-center px-4 py-3 text-red-100 hover:text-white">
                    <i data-feather="user" class="mr-3"></i> Mon profil
                </a>
                <a href="/missions" class="flex items-center px-4 py-3 text-red-100 hover:text-white">
                    <i data-feather="activity" class="mr-3"></i> Missions
                </a>
                <a href="/calendar" class="flex items-center px-4 py-3 text-red-100 hover:text-white">
                    <i data-feather="calendar" class="mr-3"></i> Calendrier
                </a>
                <a href="/messages" class="flex items-center px-4 py-3 text-white bg-red-900">
                    <i data-feather="mail" class="mr-3"></i> Messagerie
                </a>
                <a href="/documents" class="flex items-center px-4 py-3 text-red-100 hover:text-white">
                    <i data-feather="file-text" class="mr-3"></i> Documents
                </a>
                <a href="/logout" class="flex items-center px-4 py-3 text-red-100 hover:text-white mt-8">
                    <i data-feather="log-out" class="mr-3"></i> Déconnexion
                </a>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 ml-64">
            <!-- Top Navigation -->
            <header class="bg-white shadow-sm">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
                    <h1 class="text-xl font-semibold text-gray-800">Messagerie</h1>
                    <div class="flex items-center space-x-4">
                        <div class="relative">
                            <i data-feather="bell" class="text-gray-500 hover:text-red-600 cursor-pointer"></i>
                            <span class="absolute -top-1 -right-1 bg-red-600 text-white text-xs rounded-full h-4 w-4 flex items-center justify-center">3</span>
                        </div>
                        <div class="flex items-center">
                            <img src="http://static.photos/people/200x200/1" alt="Profile" class="w-8 h-8 rounded-full mr-2">
                            <span class="text-sm font-medium">Nom Utilisateur</span>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Messages Content -->
            <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <div class="flex">
                        <!-- Message List -->
                        <div class="w-1/3 border-r border-gray-200">
                            <div class="p-4 border-b border-gray-200">
                                <div class="relative">
                                    <i data-feather="search" class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                                    <input type="text" placeholder="Rechercher des messages" class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500">
                                </div>
                            </div>
                            <div class="divide-y divide-gray-200 max-h-screen overflow-y-auto">
                                <!-- Message Preview -->
                                <div class="p-4 hover:bg-gray-50 cursor-pointer border-l-4 border-red-600">
                                    <div class="flex items-center mb-2">
                                        <img src="http://static.photos/people/200x200/2" alt="User" class="w-10 h-10 rounded-full mr-3">
                                        <div>
                                            <h3 class="font-semibold">Équipe CRN</h3>
                                            <p class="text-xs text-gray-500">Formation premiers secours</p>
                                        </div>
                                        <div class="ml-auto text-xs text-gray-500">15:30</div>
                                    </div>
                                    <p class="text-sm text-gray-600 truncate">Bonjour, nous vous confirmons votre inscription à la formation de premiers secours du 3-4 décembre...</p>
                                </div>
                                <!-- Message Preview -->
                                <div class="p-4 hover:bg-gray-50 cursor-pointer">
                                    <div class="flex items-center mb-2">
                                        <img src="http://static.photos/people/200x200/3" alt="User" class="w-10 h-10 rounded-full mr-3">
                                        <div>
                                            <h3 class="font-semibold">Mohamed Abdou</h3>
                                            <p class="text-xs text-gray-500">Mission distribution</p>
                                        </div>
                                        <div class="ml-auto text-xs text-gray-500">Hier</div>
                                    </div>
                                    <p class="text-sm text-gray-600 truncate">Salut, est-ce que tu seras disponible pour nous aider avec la logistique samedi...</p>
                                </div>
                                <!-- Message Preview -->
                                <div class="p-4 hover:bg-gray-50 cursor-pointer">
                                    <div class="flex items-center mb-2">
                                        <img src="http://static.photos/people/200x200/4" alt="User" class="w-10 h-10 rounded-full mr-3">
                                        <div>
                                            <h3 class="font-semibold">Fatima Alassane</h3>
                                            <p class="text-xs text-gray-500">Réunion volontaires</p>
                                        </div>
                                        <div class="ml-auto text-xs text-gray-500">Lundi</div>
                                    </div>
                                    <p class="text-sm text-gray-600 truncate">Bonjour à tous, je vous envoie le compte-rendu de notre dernière réunion...</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Message Content -->
                        <div class="w-2/3">
                            <div class="p-4 border-b border-gray-200 flex justify-between items-center">
                                <div class="flex items-center">
                                    <img src="http://static.photos/people/200x200/2" alt="User" class="w-10 h-10 rounded-full mr-3">
                                    <div>
                                        <h3 class="font-semibold">Équipe CRN</h3>
                                        <p class="text-xs text-gray-500">À: Moi</p>
                                    </div>
                                </div>
                                <div class="flex space-x-2">
                                    <button class="text-gray-500 hover:text-red-600">
                                        <i data-feather="trash-2" class="w-4 h-4"></i>
                                    </button>
                                    <button class="text-gray-500 hover:text-red-600">
                                        <i data-feather="archive" class="w-4 h-4"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="mb-6">
                                    <h2 class="text-xl font-bold mb-2">Confirmation de formation</h2>
                                    <div class="text-sm text-gray-500 mb-4">
                                        <span>15 Nov 2023, 15:30</span>
                                    </div>
                                    <div class="prose">
                                        <p>Bonjour Aminatou,</p>
                                        <p>Nous vous confirmons votre inscription à la formation de premiers secours qui aura lieu les 3 et 4 décembre 2023 à Maradi, École primaire Centre.</p>
                                        <p>Horaires: 09:00 - 15:00 chaque jour</p>
                                        <p>Veuillez apporter:</p>
                                        <ul class="list-disc pl-5">
                                            <li>Votre carnet de volontaire</li>
                                            <li>De quoi prendre des notes</li>
                                            <li>Une bouteille d'eau</li>
                                        </ul>
                                        <p>Merci de confirmer votre présence par retour de message.</p>
                                        <p>Cordialement,<br>L'équipe CRN</p>
                                    </div>
                                </div>
                                <div class="border-t border-gray-200 pt-4">
                                    <form>
                                        <div class="mb-4">
                                            <textarea class="w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-red-500" rows="4" placeholder="Répondre à ce message..."></textarea>
                                        </div>
                                        <div class="flex justify-between items-center">
                                            <div class="flex space-x-2">
                                                <button type="button" class="text-gray-500 hover:text-red-600">
                                                    <i data-feather="paperclip" class="w-4 h-4"></i>
                                                </button>
                                            </div>
                                            <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-md">
                                                Envoyer
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
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