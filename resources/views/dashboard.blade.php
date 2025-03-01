<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Space Seat</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #0f1117;
        }
        .bg-sidebar {
            background-color: #0f1117;
        }
        .bg-card {
            background-color: #1a1f2c;
        }
        .sidebar-active {
            background-color: #6c47ff;
        }
        .icon-bg {
            background-color: #2b2d40;
        }
        .icon-color {
            color: #8b5cf6;
        }
        .purple-text {
            color: #8b5cf6;
        }
        .avatar-bg {
            background-color: #6c47ff;
        }
    </style>
</head>
<body class="text-white">
    <div class="flex min-h-screen">
        <!-- Barra lateral -->
        <div class="w-60 bg-sidebar border-r border-gray-800">
            <div class="flex items-center justify-between p-4 border-b border-gray-800">
                <div class="text-xl font-bold">Space Seat</div>
                <button class="text-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M15.707 4.293a1 1 0 010 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414L10 8.586l4.293-4.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
            <nav class="mt-5">
                <a href="#" class="flex items-center px-4 py-3 sidebar-active text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                    </svg>
                    Home
                </a>
                <a href="#" class="flex items-center px-4 py-3 text-gray-400 hover:bg-gray-800">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z" />
                    </svg>
                    Minha Jornada
                </a>
                <a href="#" class="flex items-center px-4 py-3 text-gray-400 hover:bg-gray-800">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M7 4a1 1 0 011-1h4a1 1 0 011 1v1h2.5A1.5 1.5 0 0117 6.5v3.879a3 3 0 11-2 0V6.5a.5.5 0 00-.5-.5H13v1a2 2 0 01-2 2H9a2 2 0 01-2-2V6H4.5a.5.5 0 00-.5.5v7a.5.5 0 00.5.5h4.1a3 3 0 115.83 0H15.5a.5.5 0 00.5-.5v-2.879a2.98 2.98 0 01-1-.84V14.5a1.5 1.5 0 01-1.5 1.5h-9A1.5 1.5 0 013 14.5v-8A1.5 1.5 0 014.5 5H7V4z" />
                    </svg>
                    Catálogo
                </a>
                <a href="#" class="flex items-center px-4 py-3 text-gray-400 hover:bg-gray-800">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                    </svg>
                    Eventos
                </a>
                <a href="#" class="flex items-center px-4 py-3 text-gray-400 hover:bg-gray-800">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
                    </svg>
                    Fórum
                </a>
                <a href="#" class="flex items-center px-4 py-3 text-gray-400 hover:bg-gray-800">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                    </svg>
                    Comunidade
                </a>
                <a href="#" class="flex items-center px-4 py-3 text-gray-400 hover:bg-gray-800">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                    </svg>
                    Ajuda
                </a>
            </nav>
        </div>

        <!-- Conteúdo principal -->
        <div class="flex-1 bg-sidebar">
            <!-- Barra de navegação superior -->
            <div class="bg-sidebar p-4 border-b border-gray-800 flex justify-between items-center">
                <div class="relative w-96">
                    <svg class="absolute left-3 top-3 h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                    </svg>
                    <input type="text" placeholder="Busque por assuntos e aulas" class="w-full bg-gray-800 rounded-md py-2 pl-10 pr-4 text-sm text-gray-200 placeholder-gray-500 focus:outline-none focus:bg-gray-700">
                </div>
                <div class="flex items-center space-x-4">
                    <button class="relative text-gray-400 hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                        <span class="absolute top-0 right-0 h-2 w-2 rounded-full bg-purple-600"></span>
                    </button>
                    <div class="h-8 w-8 rounded-full avatar-bg flex items-center justify-center text-white text-sm font-medium">
                        DB
                    </div>
                </div>
            </div>

            <!-- Conteúdo do dashboard -->
            <div class="p-8">
                <h1 class="text-3xl font-bold mb-1">Olá, João!</h1>
                <p class="text-gray-400 mb-8">Continue sua jornada de aprendizado. Aqui está seu progresso:</p>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Cursos em Progresso -->
                    <div class="bg-card rounded-lg p-6">
                        <div class="flex justify-between items-start">
                            <div>
                                <h2 class="text-3xl font-bold">3</h2>
                                <p class="text-gray-400 text-sm mt-1">Cursos em Progresso</p>
                                <p class="purple-text text-sm mt-1">2 novos esta semana</p>
                            </div>
                            <div class="icon-bg p-3 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 icon-color" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Tempo Estudado -->
                    <div class="bg-card rounded-lg p-6">
                        <div class="flex justify-between items-start">
                            <div>
                                <h2 class="text-3xl font-bold">45h</h2>
                                <p class="text-gray-400 text-sm mt-1">Tempo Estudado</p>
                                <p class="purple-text text-sm mt-1">+5h esta semana</p>
                            </div>
                            <div class="icon-bg p-3 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 icon-color" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Cursos Concluídos -->
                    <div class="bg-card rounded-lg p-6">
                        <div class="flex justify-between items-start">
                            <div>
                                <h2 class="text-3xl font-bold">12</h2>
                                <p class="text-gray-400 text-sm mt-1">Cursos Concluídos</p>
                                <p class="purple-text text-sm mt-1">+1 este mês</p>
                            </div>
                            <div class="icon-bg p-3 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 icon-color" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Meta de Conclusão -->
                    <div class="bg-card rounded-lg p-6">
                        <div class="flex justify-between items-start">
                            <div>
                                <h2 class="text-3xl font-bold">78%</h2>
                                <p class="text-gray-400 text-sm mt-1">Meta de Conclusão</p>
                                <p class="purple-text text-sm mt-1">Meta: 85%</p>
                            </div>
                            <div class="icon-bg p-3 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 icon-color" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
