<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Participantes</title>
  <script src="https://unpkg.com/lucide@latest"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .bg-pastel-gradient {
      background-image: linear-gradient(to right, #6ee7b7, #93c5fd);
    }

    .glass-card {
      background: rgba(255, 255, 255, 0.6);
      backdrop-filter: blur(8px);
      border-radius: 1rem;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>

<body class="min-h-screen bg-gradient-to-br from-blue-100 to-green-100">

  <?php require './components/nav.php' ?>

  <div class="container mx-auto py-10 px-4 max-w-4xl">
    <div class="text-center mb-8">
      <h1 class="text-4xl font-bold bg-pastel-gradient bg-clip-text text-transparent">Lista de Participantes</h1>
      <p class="text-gray-600 mt-2">Consulte e gerencie os participantes registrados no evento</p>
    </div>

    <!-- Campo de Busca -->
    <div class="relative mb-6">
      <i data-lucide="search" class="absolute left-3 top-2.5 w-4 h-4 text-gray-400"></i>
      <input id="searchInput" placeholder="Buscar por nome, email ou telefone..."
        class="w-full pl-10 p-2 rounded border border-green-300 focus:outline-none focus:ring focus:ring-green-300" />
    </div>

    <div id="participantsContainer" class="space-y-4">
      <!-- Participantes serão inseridos aqui -->
    </div>
  </div>
<script src="./main.js"></script>
</body>

</html>