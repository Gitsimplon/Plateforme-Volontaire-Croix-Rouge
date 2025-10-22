<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plateforme Volontariat - Croix-Rouge Nigérienne</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="icon" href="http://static.photos/red/32x32/1" type="image/x-icon">
    <style>
        .hero-bg {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), 
                        url('http://static.photos/people/1200x630/100');
            background-size: cover;
            background-position: center;
        }
        .stats-card {
            transition: transform 0.3s ease;
        }
        .stats-card:hover {
            transform: translateY(-5px);
        }
    </style>
</head>
<body class="font-sans antialiased">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <img src="http://static.photos/red/64x64/1" alt="Logo CRN" class="h-10 mr-3">
                    <span class="text-xl font-bold text-red-600">CRN Volontaires</span>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#about" class="text-gray-800 hover:text-red-600">À propos</a>
                    <a href="#stats" class="text-gray-800 hover:text-red-600">Statistiques</a>
                    <a href="#activities" class="text-gray-800 hover:text-red-600">Activités</a>
                    <a href="#documents" class="text-gray-800 hover:text-red-600">Documents</a>
                    <a href="/login" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-md">Connexion</a>
                </div>
                <button class="md:hidden focus:outline-none">
                    <i data-feather="menu" class="text-gray-800"></i>
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-bg text-white py-20">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">Devenez Volontaire de la Croix-Rouge Nigérienne</h1>
            <p class="text-xl md:text-2xl mb-8">Rejoignez notre réseau de volontaires engagés pour des actions humanitaires partout au Niger</p>
            <a href="/register" class="bg-red-600 hover:bg-red-700 text-white font-bold py-3 px-8 rounded-md inline-block">S'inscrire maintenant</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-16 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Qui sommes-nous ?</h2>
                <p class="text-gray-600 max-w-3xl mx-auto">La Croix-Rouge Nigérienne est une organisation humanitaire qui intervient dans les domaines de la santé, de l'eau et assainissement, de la sécurité alimentaire et de la réduction des risques de catastrophes.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-md text-center">
                    <div class="bg-red-100 text-red-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i data-feather="heart" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Mission</h3>
                    <p class="text-gray-600">Prévenir et alléger les souffrances humaines en toutes circonstances, protéger la vie et la santé.</p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-md text-center">
                    <div class="bg-red-100 text-red-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i data-feather="users" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Valeurs</h3>
                    <p class="text-gray-600">Humanité, impartialité, neutralité, indépendance, volontariat, unité, universalité.</p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-md text-center">
                    <div class="bg-red-100 text-red-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i data-feather="target" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Objectifs</h3>
                    <p class="text-gray-600">Mobiliser des volontaires pour répondre efficacement aux besoins humanitaires à travers tout le Niger.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section id="stats" class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Nos Volontaires en Chiffres</h2>
                <p class="text-gray-600 max-w-3xl mx-auto">Découvrez l'impact de notre réseau de volontaires à travers le pays</p>
            </div>
            <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-6">
                <div class="stats-card bg-red-600 text-white p-6 rounded-lg shadow-lg text-center">
                    <div class="text-4xl font-bold mb-2">4,250+</div>
                    <div class="text-lg">Volontaires actifs</div>
                </div>
                <div class="stats-card bg-red-500 text-white p-6 rounded-lg shadow-lg text-center">
                    <div class="text-4xl font-bold mb-2">8</div>
                    <div class="text-lg">Régions couvertes</div>
                </div>
                <div class="stats-card bg-red-400 text-white p-6 rounded-lg shadow-lg text-center">
                    <div class="text-4xl font-bold mb-2">120+</div>
                    <div class="text-lg">Missions mensuelles</div>
                </div>
                <div class="stats-card bg-red-300 text-white p-6 rounded-lg shadow-lg text-center">
                    <div class="text-4xl font-bold mb-2">15,000+</div>
                    <div class="text-lg">Personnes aidées</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Activities Section -->
    <section id="activities" class="py-16 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Nos Activités Récentes</h2>
                <p class="text-gray-600 max-w-3xl mx-auto">Découvrez quelques-unes de nos dernières actions humanitaires à travers le Niger</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="http://static.photos/people/640x360/10" alt="Activité 1" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <i data-feather="calendar" class="w-4 h-4 mr-1"></i>
                            <span>15 Nov 2023</span>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Distribution alimentaire à Niamey</h3>
                        <p class="text-gray-600 mb-4">Distribution de kits alimentaires à 500 familles vulnérables du quartier Dar Salam.</p>
                        <a href="#" class="text-red-600 hover:text-red-800 font-medium">En savoir plus →</a>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="http://static.photos/people/640x360/11" alt="Activité 2" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <i data-feather="calendar" class="w-4 h-4 mr-1"></i>
                            <span>5 Nov 2023</span>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Formation premiers secours à Maradi</h3>
                        <p class="text-gray-600 mb-4">Formation de 30 enseignants aux gestes de premiers secours dans les écoles primaires.</p>
                        <a href="#" class="text-red-600 hover:text-red-800 font-medium">En savoir plus →</a>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="http://static.photos/people/640x360/12" alt="Activité 3" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <i data-feather="calendar" class="w-4 h-4 mr-1"></i>
                            <span>28 Oct 2023</span>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Sensibilisation COVID-19 à Zinder</h3>
                        <p class="text-gray-600 mb-4">Campagne de sensibilisation et distribution de masques au marché central de Zinder.</p>
                        <a href="#" class="text-red-600 hover:text-red-800 font-medium">En savoir plus →</a>
                    </div>
                </div>
            </div>
            <div class="text-center mt-8">
                <a href="#" class="inline-block bg-red-600 hover:bg-red-700 text-white font-medium py-2 px-6 rounded-md">Voir toutes les activités</a>
            </div>
        </div>
    </section>

    <!-- Documents Section -->
    <section id="documents" class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Documents et Ressources</h2>
                <p class="text-gray-600 max-w-3xl mx-auto">Téléchargez nos documents officiels et ressources pour en savoir plus sur notre action</p>
            </div>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="border border-gray-200 rounded-lg p-6 hover:shadow-md transition-shadow">
                    <div class="flex items-center mb-4">
                        <div class="bg-red-100 text-red-600 p-3 rounded-full mr-4">
                            <i data-feather="file-text"></i>
                        </div>
                        <h3 class="text-lg font-semibold">Charte du Volontaire</h3>
                    </div>
                    <p class="text-gray-600 mb-4">Document présentant les droits et devoirs des volontaires de la CRN.</p>
                    <a href="#" class="text-red-600 hover:text-red-800 font-medium flex items-center">
                        <i data-feather="download" class="w-4 h-4 mr-2"></i> Télécharger (PDF)
                    </a>
                </div>
                <div class="border border-gray-200 rounded-lg p-6 hover:shadow-md transition-shadow">
                    <div class="flex items-center mb-4">
                        <div class="bg-red-100 text-red-600 p-3 rounded-full mr-4">
                            <i data-feather="book"></i>
                        </div>
                        <h3 class="text-lg font-semibold">Guide des Principes</h3>
                    </div>
                    <p class="text-gray-600 mb-4">Guide complet sur les principes fondamentaux du Mouvement International de la Croix-Rouge.</p>
                    <a href="#" class="text-red-600 hover:text-red-800 font-medium flex items-center">
                        <i data-feather="download" class="w-4 h-4 mr-2"></i> Télécharger (PDF)
                    </a>
                </div>
                <div class="border border-gray-200 rounded-lg p-6 hover:shadow-md transition-shadow">
                    <div class="flex items-center mb-4">
                        <div class="bg-red-100 text-red-600 p-3 rounded-full mr-4">
                            <i data-feather="clipboard"></i>
                        </div>
                        <h3 class="text-lg font-semibold">Rapport Annuel 2022</h3>
                    </div>
                    <p class="text-gray-600 mb-4">Rapport complet des activités et résultats de la CRN pour l'année 2022.</p>
                    <a href="#" class="text-red-600 hover:text-red-800 font-medium flex items-center">
                        <i data-feather="download" class="w-4 h-4 mr-2"></i> Télécharger (PDF)
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-16 bg-red-600 text-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-6">Prêt à devenir volontaire ?</h2>
            <p class="text-xl mb-8 max-w-3xl mx-auto">Rejoignez notre réseau de volontaires engagés et faites la différence dans votre communauté.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="/register" class="bg-white text-red-600 hover:bg-gray-100 font-bold py-3 px-8 rounded-md">S'inscrire maintenant</a>
                <a href="/login" class="border-2 border-white text-white hover:bg-red-700 font-bold py-3 px-8 rounded-md">Se connecter</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">CRN Volontaires</h3>
                    <p class="text-gray-400">Plateforme de gestion du volontariat de la Croix-Rouge Nigérienne.</p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Liens utiles</h4>
                    <ul class="space-y-2">
                        <li><a href="/index#about" class="text-gray-400 hover:text-white">À propos de la CRN</a></li>
                        <li><a href="/register" class="text-gray-400 hover:text-white">Devenir volontaire</a></li>
                        <li><a href="/index#contact" class="text-gray-400 hover:text-white">Nos activités</a></li>
                        <li><a href="/index#contact" class="text-gray-400 hover:text-white">Contactez-nous</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Documents</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Charte du volontaire</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Rapports annuels</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Publications</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Politique de confidentialité</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Contact</h4>
                    <address class="text-gray-400 not-italic">
                        <p class="flex items-center mb-2">
                            <i data-feather="map-pin" class="w-4 h-4 mr-2"></i>
                            Avenue de la Mairie, Niamey, Niger
                        </p>
                        <p class="flex items-center mb-2">
                            <i data-feather="mail" class="w-4 h-4 mr-2"></i>
                            contact@crn-volontaires.ne
                        </p>
                        <p class="flex items-center">
                            <i data-feather="phone" class="w-4 h-4 mr-2"></i>
                            +227 20 73 20 00
                        </p>
                    </address>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400 text-sm mb-4 md:mb-0">© 2023 Croix-Rouge Nigérienne. Tous droits réservés.</p>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-white"><i data-feather="facebook"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white"><i data-feather="twitter"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white"><i data-feather="instagram"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white"><i data-feather="youtube"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Initialize feather icons
        document.addEventListener('DOMContentLoaded', function() {
            feather.replace();
        });
    </script>
</body>
</html>