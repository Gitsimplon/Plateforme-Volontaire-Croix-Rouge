<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord | Volontaires Croix-Rouge</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js"></script>
</head>
<body class="bg-gray-100">
    <!-- Navigation Sidebar -->
    <div class="flex">
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
                <a href="/dashboard" class="flex items-center px-4 py-3 text-white bg-red-900">
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
                    <h1 class="text-xl font-semibold text-gray-800">Tableau de bord</h1>
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

            <!-- Dashboard Content -->
            <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
                <!-- Stats Cards -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-red-100 text-red-600 mr-4">
                                <i data-feather="users"></i>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">Missions complétées</p>
                                <p class="text-2xl font-bold">12</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-blue-100 text-blue-600 mr-4">
                                <i data-feather="clock"></i>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">Heures de bénévolat</p>
                                <p class="text-2xl font-bold">84</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-green-100 text-green-600 mr-4">
                                <i data-feather="award"></i>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">Formations suivies</p>
                                <p class="text-2xl font-bold">5</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Charts and Calendar -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
                    <div class="bg-white rounded-lg shadow p-6">
                        <h2 class="text-lg font-semibold mb-4">Progression mensuelle</h2>
                        <canvas id="progressChart" height="250"></canvas>
                    </div>
                    <div class="bg-white rounded-lg shadow p-6">
                        <h2 class="text-lg font-semibold mb-4">Calendrier des activités</h2>
                        <div id="calendar"></div>
                    </div>
                </div>

                <!-- Recent Missions -->
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h2 class="text-lg font-semibold">Missions récentes</h2>
                    </div>
                    <div class="divide-y divide-gray-200">
                        <div class="px-6 py-4 flex items-center justify-between hover:bg-gray-50">
                            <div>
                                <p class="font-medium">Distribution alimentaire</p>
                                <p class="text-sm text-gray-500">Niamey, 15 Oct 2023</p>
                            </div>
                            <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full">Complétée</span>
                        </div>
                        <div class="px-6 py-4 flex items-center justify-between hover:bg-gray-50">
                            <div>
                                <p class="font-medium">Formation premiers secours</p>
                                <p class="text-sm text-gray-500">Maradi, 22 Oct 2023</p>
                            </div>
                            <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full">En cours</span>
                        </div>
                        <div class="px-6 py-4 flex items-center justify-between hover:bg-gray-50">
                            <div>
                                <p class="font-medium">Sensibilisation santé</p>
                                <p class="text-sm text-gray-500">Zinder, 5 Nov 2023</p>
                            </div>
                            <span class="bg-yellow-100 text-yellow-800 text-xs px-2 py-1 rounded-full">À venir</span>
                        </div>
                    </div>
                    <div class="px-6 py-4 border-t border-gray-200 text-center">
                        <a href="/missions" class="text-red-600 hover:text-red-800 text-sm font-medium">Voir toutes les missions</a>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script>
        // Initialize feather icons
        document.addEventListener('DOMContentLoaded', function() {
            feather.replace();
            
            // Initialize progress chart
            const ctx = document.getElementById('progressChart').getContext('2d');
            const progressChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Juin'],
                    datasets: [{
                        label: 'Heures de bénévolat',
                        data: [12, 19, 8, 15, 22, 18],
                        backgroundColor: '#ED1C3A',
                        borderRadius: 4
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            // Initialize calendar
            const calendarEl = document.getElementById('calendar');
            const calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
                events: [
                    {
                        title: 'Formation premiers secours',
                        start: new Date().toISOString().split('T')[0],
                        color: '#ED1C3A'
                    },
                    {
                        title: 'Réunion régionale',
                        start: new Date(Date.now() + 86400000 * 3).toISOString().split('T')[0],
                        color: '#2E86AB'
                    },
                    {
                        title: 'Campagne de vaccination',
                        start: new Date(Date.now() + 86400000 * 7).toISOString().split('T')[0],
                        end: new Date(Date.now() + 86400000 * 9).toISOString().split('T')[0],
                        color: '#00A878'
                    }
                ]
            });
            calendar.render();
        });
    </script>
</body>
</html>