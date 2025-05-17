<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registro de Participantes</title>
  <script src="https://unpkg.com/lucide@latest"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .bg-pastel-gradient {
      background-image: linear-gradient(to right, #c084fc, #f472b6, #60a5fa);
    }

    .glass-card {
      background: rgba(255, 255, 255, 0.6);
      backdrop-filter: blur(8px);
      border-radius: 1rem;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>

<body class="min-h-screen bg-gradient-to-br from-purple-100 via-pink-100 to-blue-100">

  <?php require './components/nav.php' ?>

  <div class="container mx-auto py-10 px-4 max-w-2xl">
    <div class="text-center mb-8">
      <h1 class="text-4xl font-bold bg-pastel-gradient bg-clip-text text-transparent">Registro de Participantes</h1>
      <p class="text-gray-600 mt-2">Preencha o formulário para registrar um novo participante no evento</p>
    </div>

    <div class="glass-card p-6">
      <h2 class="text-xl font-semibold mb-1">Formulário de Inscrição</h2>
      <p class="text-gray-500 mb-6">Preencha todos os campos obrigatórios</p>

      <form action="./backend/salvar.php" method="POST" class="space-y-6">
        <div>
          <label for="name" class="flex items-center gap-2 text-sm font-medium">
            <i data-lucide="user" class="text-purple-400 w-4 h-4"></i> Nome Completo
          </label>
          <input id="name" name="name" required placeholder="Digite o nome completo" class="w-full border border-purple-300 rounded p-2 focus:outline-none focus:ring focus:ring-purple-300" />
        </div>

        <div>
          <label for="email" class="flex items-center gap-2 text-sm font-medium">
            <i data-lucide="mail" class="text-purple-400 w-4 h-4"></i> Email
          </label>
          <input id="email" name="email" type="email" required placeholder="Digite o email" class="w-full border border-purple-300 rounded p-2 focus:outline-none focus:ring focus:ring-purple-300" />
        </div>

        <div>
          <label for="phone" class="flex items-center gap-2 text-sm font-medium">
            <i data-lucide="phone" class="text-purple-400 w-4 h-4"></i> Telefone
          </label>
          <input id="phone" name="phone" required placeholder="(00) 00000-0000" class="w-full border border-purple-300 rounded p-2 focus:outline-none focus:ring focus:ring-purple-300" />
        </div>

        <div>
          <label for="status" class="text-sm font-medium">Status</label>
          <select id="status" name="status" class="w-full border border-purple-300 rounded p-2 focus:outline-none focus:ring focus:ring-purple-300">
            <option value="confirmado">Confirmado</option>
            <option value="pendente" selected>Pendente</option>
            <option value="cancelado">Cancelado</option>
          </select>
        </div>

        <div>
          <label for="observation" class="flex items-center gap-2 text-sm font-medium">
            <i data-lucide="message-square" class="text-purple-400 w-4 h-4"></i> Observação
          </label>
          <textarea id="observation" name="observation" rows="4" placeholder="Digite qualquer observação relevante" class="w-full border border-purple-300 rounded p-2 focus:outline-none focus:ring focus:ring-purple-300"></textarea>
        </div>

        <input type="hidden" name="createdAt" id="createdAt" />

        <button type="submit" class="w-full text-white py-2 px-4 rounded bg-pastel-gradient hover:opacity-90">
          Registrar Participante
        </button>
      </form>
    </div>
  </div>

  <script>
    lucide.createIcons();
  </script>

  
</body>

</html>