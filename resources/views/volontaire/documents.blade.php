<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documents | Volontaires Croix-Rouge</title>
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
                <a href="/messages" class="flex items-center px-4 py-3 text-red-100 hover:text-white">
                    <i data-feather="mail" class="mr-3"></i> Messagerie
                </a>
                <a href="/documents" class="flex items-center px-4 py-3 text-white bg-red-900">
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
                    <h1 class="text-xl font-semibold text-gray-800">Documents</h1>
                    <div class="flex items-center space-x-4">
                        <div class="relative">
                            <i data-feather="bell" class="text-gray-500 hover:text-red-600 cursor-pointer"></i>
                            <span class="absolute -top-1 -right-1 bg-red-600 text-white text-xs rounded-full h-4 w-4 flex items-center justify-center">1</span>
                        </div>
                        <div class="flex items-center">
                            <img src="http://static.photos/people/200x200/1" alt="Profile" class="w-8 h-8 rounded-full mr-2">
                            <span class="text-sm font-medium">Nom Utilisateur</span>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Documents Content -->
            <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
                <div class="bg-white rounded-lg shadow p-6 mb-6">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                        <h3 class="font-semibold mb-4 md:mb-0">Documents disponibles</h3>
                        <div class="relative">
                            <i data-feather="search" class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                            <input type="text" placeholder="Rechercher des documents..." class="pl-10 pr-4 py-2 border border-gray-300 rounded-md w-full md:w-64 focus:outline-none focus:ring-2 focus:ring-red-500">
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Document Card -->
                    <div class="bg-white rounded-lg shadow overflow-hidden hover:shadow-md transition-shadow">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <div class="bg-red-100 text-red-600 p-3 rounded-full mr-4">
                                    <i data-feather="file-text"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold">Charte du Volontaire</h3>
                                    <p class="text-sm text-gray-500">PDF • 1.2MB</p>
                                </div>
                            </div>
                            <p class="text-gray-600 mb-4">Document présentant les droits et devoirs des volontaires de la CRN.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-500">Mis à jour: 15/10/2023</span>
                                <a href="#" class="text-red-600 hover:text-red-800 font-medium flex items-center">
                                    <i data-feather="download" class="w-4 h-4 mr-1"></i> Télécharger
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Document Card -->
                    <div class="bg-white rounded-lg shadow overflow-hidden hover:shadow-md transition-shadow">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <div class="bg-red-100 text-red-600 p-3 rounded-full mr-4">
                                    <i data-feather="book"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold">Guide des Principes</h3>
                                    <p class="text-sm text-gray-500">PDF • 2.5MB</p>
                                </div>
                            </div>
                            <p class="text-gray-600 mb-4">Guide complet sur les principes fondamentaux du Mouvement International de la Croix-Rouge.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-500">Mis à jour: 01/09/2023</span>
                                <a href="#" class="text-red-600 hover:text-red-800 font-medium flex items-center">
                                    <i data-feather="download" class="w-4 h-4 mr-1"></i> Télécharger
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Document Card -->
                    <div class="bg-white rounded-lg shadow overflow-hidden hover:shadow-md transition-shadow">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <div class="bg-red-100 text-red-600 p-3 rounded-full mr-4">
                                    <i data-feather="clipboard"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold">Rapport Annuel 2022</h3>
                                    <p class="text-sm text-gray-500">PDF • 5.7MB</p>
                                </div>
                            </div>
                            <p class="text-gray-600 mb-4">Rapport complet des activités et résultats de la CRN pour l'année 2022.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-500">Mis à jour: 15/03/2023</span>
                                <a href="#" class="text-red-600 hover:text-red-800 font-medium flex items-center">
                                    <i data-feather="download" class="w-4 h-4 mr-1"></i> Télécharger
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Document Card -->
                    <div class="bg-white rounded-lg shadow overflow-hidden hover:shadow-md transition-shadow">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <div class="bg-red-100 text-red-600 p-3 rounded-full mr-4">
                                    <i data-feather="file-plus"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold">Formulaire d'évaluation</h3>
                                    <p class="text-sm text-gray-500">DOCX • 0.5MB</p>
                                </div>
                            </div>
                            <p class="text-gray-600 mb-4">Formulaire à compléter après chaque mission pour évaluer votre expérience.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-500">Mis à jour: 10/11/2023</span>
                                <a href="#" class="text-red-600 hover:text-red-800 font-medium flex items-center">
                                    <i data-feather="download" class="w-4 h-4 mr-1"></i> Télécharger
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Document Card -->
                    <div class="bg-white rounded-lg shadow overflow-hidden hover:shadow-md transition-shadow">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <div class="bg-red-100 text-red-600 p-3 rounded-full mr-4">
                                    <i data-feather="award"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold">Guide de formation</h3>
                                    <p class="text-sm text-gray-500">PDF • 3.1MB</p>
                                </div>
                            </div>
                            <p class="text-gray-600 mb-4">Manuel de référence pour les formations de premiers secours.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-500">Mis à jour: 05/09/2023</span>
                                <a href="#" class="text-red-600 hover:text-red-800 font-medium flex items-center">
                                    <i data-feather="download" class="w-4 h-4 mr-1"></i> Télécharger
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Document Card -->
                    <div class="bg-white rounded-lg shadow overflow-hidden hover:shadow-md transition-shadow">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <div class="bg-red-100 text-red-600 p-3 rounded-full mr-4">
                                    <i data-feather="shield"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold">Protocole de sécurité</h3>
                                    <p class="text-sm text-gray-500">PDF • 1.8MB</p>
                                </div>
                            </div>
                            <p class="text-gray-600 mb-4">Directives de sécurité à respecter lors des missions sur le terrain.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-500">Mis à jour: 20/10/2023</span>
                                <a href="#" class="text-red-600 hover:text-red-800 font-medium flex items-center">
                                    <i data-feather="download" class="w-4 h-4 mr-1"></i> Télécharger
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="mt-8 flex justify-center">
                    <nav class="flex items-center space-x-2">
                        <button class="px-3 py-1 rounded border text-gray-600 hover:bg-gray-100">
                            <i data-feather="chevron-left" class="w-4 h-4"></i>
                        </button>
                        <button class="px-3 py-1 rounded border bg-red-600 text-white">1</button>
                        <button class="px-3 py-1 rounded border text-gray-600 hover:bg-gray-100">2</button>
                        <button class="px-3 py-1 rounded border text-gray-600 hover:bg-gray-100">
                            <i data-feather="chevron-right" class="w-4 h-4"></i>
                        </button>
                    </nav>
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