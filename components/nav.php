<nav class="sticky top-0 z-30 w-full backdrop-blur-lg bg-white/60 border-b border-purple-300/20">
  <div class="container mx-auto flex justify-between items-center py-4 px-4">
    <!-- Logo -->
    <a href="/" class="text-2xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-purple-400 to-pink-400">
      EventFlow
    </a>

    <button id="menuToggle" class="md:hidden focus:outline-none">
      <i data-lucide="menu" class="w-6 h-6 text-purple-600"></i>
    </button>


    <div id="menu" class="hidden md:flex flex-col md:flex-row gap-4 md:gap-6 absolute md:static top-16 left-0 w-full md:w-auto bg-white/80 md:bg-transparent p-4 md:p-0 shadow-md md:shadow-none z-40">
      <a href="./index.php" class="flex items-center gap-2 px-3 py-2 rounded-md hover:bg-purple-100 transition-all">
        <i data-lucide="plus" class="w-4 h-4"></i>
        <span>Registrar</span>
      </a>
      <a href="./participantes.php" class="flex items-center gap-2 px-3 py-2 rounded-md hover:bg-purple-100 transition-all">
        <i data-lucide="list" class="w-4 h-4"></i>
        <span>Participantes</span>
      </a>
      <a href="./plano.php" class="flex items-center gap-2 px-3 py-2 rounded-md hover:bg-purple-100 transition-all">
        <i data-lucide="calendar" class="w-4 h-4"></i>
        <span>Plano de Evento</span>
      </a>
    </div>
  </div>
</nav>

<script>
  lucide.createIcons();

  // Toggle mobile menu
  const toggle = document.getElementById('menuToggle');
  const menu = document.getElementById('menu');

  toggle.addEventListener('click', () => {
    menu.classList.toggle('hidden');
  });
</script>
