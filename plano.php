<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Plano do Evento</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .bg-pastel-gradient {
      background-image: linear-gradient(to right, #fdba74, #fcd34d);
    }

    .glass-card {
      background: rgba(255, 255, 255, 0.6);
      backdrop-filter: blur(8px);
      border-radius: 1rem;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }

    .tab-button.active {
      background-color: rgba(251, 191, 36, 0.2);
    }
  </style>
</head>

<body class="min-h-screen bg-gradient-to-br from-yellow-100 to-orange-100">


  <?php require './components/nav.php' ?>

  <div class="container mx-auto py-10 px-4 max-w-4xl">
    <div class="text-center mb-8">
      <h1 class="text-4xl font-bold bg-pastel-gradient bg-clip-text text-transparent">Plano do Evento</h1>
      <p class="text-gray-600 mt-2">Calendário e programação completa do evento</p>
    </div>

    <!-- Card Informações Gerais -->
    <div class="glass-card mb-8 p-6">
      <h2 class="text-xl font-semibold mb-4">Informações Gerais</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
          <h3 class="text-lg font-semibold mb-2">Detalhes do Evento</h3>
          <div class="space-y-2">
            <div><strong>Nome:</strong> Conferência Inovação 2025</div>
            <div><strong>Data:</strong> 12 a 13 de Junho de 2025</div>
            <div><strong>Local:</strong> Centro de Convenções Exemplo</div>
            <div><strong>Público esperado:</strong> 500 participantes</div>
          </div>
        </div>
        <div>
          <h3 class="text-lg font-semibold mb-2">Contatos Importantes</h3>
          <div class="space-y-2">
            <div>
              <strong>Coordenador:</strong> Luciana Costa<br />
              <span class="text-sm text-gray-500">luciana@exemplo.com • (11) 99999-0000</span>
            </div>
            <div>
              <strong>Suporte técnico:</strong> Roberto Almeida<br />
              <span class="text-sm text-gray-500">suporte@exemplo.com • (11) 99999-1111</span>
            </div>
            <div>
              <strong>Emergências:</strong> Maria Pereira<br />
              <span class="text-sm text-gray-500">emergencia@exemplo.com • (11) 99999-2222</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Tabs de Agenda -->
    <div>
      <div class="flex gap-2 mb-6 bg-white/50 p-1 rounded" id="tabs">
        <button class="tab-button px-4 py-2 rounded active" data-tab="day1">Dia 1 (12/06/2025)</button>
        <button class="tab-button px-4 py-2 rounded" data-tab="day2">Dia 2 (13/06/2025)</button>
      </div>

      <div id="day1" class="tab-content space-y-6">
        <!-- Dia 1 - Itens -->
        <div class="glass-card overflow-hidden">
          <div class="bg-orange-300 h-1"></div>
          <div class="p-6">
            <div class="flex flex-col sm:flex-row justify-between mb-2">
              <div class="flex items-center gap-3 mb-2 sm:mb-0">
                <span class="bg-yellow-100 text-yellow-800 border border-yellow-200 text-sm px-2 py-1 rounded">08:30 - 09:30</span>
                <h3 class="font-semibold text-lg">Credenciamento</h3>
              </div>
              <div class="text-sm text-gray-500">Entrada Principal</div>
            </div>
            <p class="text-gray-700 mb-2">Recepção e entrega de crachás</p>
            <div class="text-sm text-gray-500"><strong>Responsável:</strong> Equipe de recepção</div>
          </div>
        </div>

        <div class="glass-card overflow-hidden">
          <div class="bg-orange-300 h-1"></div>
          <div class="p-6">
            <div class="flex flex-col sm:flex-row justify-between mb-2">
              <div class="flex items-center gap-3 mb-2 sm:mb-0">
                <span class="bg-yellow-100 text-yellow-800 border border-yellow-200 text-sm px-2 py-1 rounded">09:30 - 10:30</span>
                <h3 class="font-semibold text-lg">Abertura</h3>
              </div>
              <div class="text-sm text-gray-500">Auditório Principal</div>
            </div>
            <p class="text-gray-700 mb-2">Discurso de boas-vindas e apresentação do evento</p>
            <div class="text-sm text-gray-500"><strong>Responsável:</strong> Maria Oliveira</div>
          </div>
        </div>

      </div>

      <div id="day2" class="tab-content space-y-6 hidden">
        <!-- Dia 2 - Itens -->
        <div class="glass-card overflow-hidden">
          <div class="bg-orange-300 h-1"></div>
          <div class="p-6">
            <div class="flex flex-col sm:flex-row justify-between mb-2">
              <div class="flex items-center gap-3 mb-2 sm:mb-0">
                <span class="bg-yellow-100 text-yellow-800 border border-yellow-200 text-sm px-2 py-1 rounded">09:00 - 10:30</span>
                <h3 class="font-semibold text-lg">Workshop</h3>
              </div>
              <div class="text-sm text-gray-500">Sala Workshop 1</div>
            </div>
            <p class="text-gray-700 mb-2">Técnicas avançadas de design</p>
            <div class="text-sm text-gray-500"><strong>Responsável:</strong> Ana Silva</div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <script>
    const tabs = document.querySelectorAll(".tab-button");
    const contents = document.querySelectorAll(".tab-content");

    tabs.forEach((tab) => {
      tab.addEventListener("click", () => {
        const value = tab.getAttribute("data-tab");

        tabs.forEach(t => t.classList.remove("active"));
        tab.classList.add("active");

        contents.forEach((c) => {
          c.classList.add("hidden");
        });

        document.getElementById(value).classList.remove("hidden");
      });
    });
  </script>
</body>

</html>