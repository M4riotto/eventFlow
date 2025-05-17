  const statusClasses = {
    confirmado: "bg-green-100 text-green-800 hover:bg-green-200",
    pendente: "bg-yellow-100 text-yellow-800 hover:bg-yellow-200",
    cancelado: "bg-red-100 text-red-800 hover:bg-red-200"
  };

  let participants = [];

  function renderParticipants(list) {
    const container = document.getElementById("participantsContainer");
    container.innerHTML = "";

    if (list.length === 0) {
      container.innerHTML = `
        <div class="glass-card p-6 text-center text-gray-500">Nenhum participante encontrado</div>
      `;
      return;
    }

    list.forEach((p) => {
      const card = document.createElement("div");
      card.className = "glass-card overflow-hidden";

      const topBarColor = p.status === "confirmado" ? "bg-green-400" :
        p.status === "pendente" ? "bg-yellow-400" : "bg-red-400";

      const dataFormatada = new Date(p.createdAt).toLocaleString("pt-BR");

      card.innerHTML = `
        <div class="h-2 ${topBarColor}"></div>
        <div class="p-4">
          <div class="flex justify-between items-center mb-2">
            <h2 class="text-lg font-semibold">${p.name}</h2>
            <select onchange="updateStatus(${p.id}, this.value)" class="w-32 p-1 rounded border border-gray-300">
              <option value="confirmado" ${p.status === "confirmado" ? "selected" : ""}>Confirmado</option>
              <option value="pendente" ${p.status === "pendente" ? "selected" : ""}>Pendente</option>
              <option value="cancelado" ${p.status === "cancelado" ? "selected" : ""}>Cancelado</option>
            </select>
          </div>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 text-sm">
            <div><strong>Email:</strong> ${p.email}</div>
            <div><strong>Telefone:</strong> ${p.phone}</div>
            <div class="sm:col-span-2"><strong>Observação:</strong> ${p.observation || "Nenhuma observação"}</div>
            <div class="sm:col-span-2 text-xs text-gray-500 pt-2">Registrado em: ${dataFormatada}</div>
          </div>
        </div>
      `;

      container.appendChild(card);
    });
  }

  function updateStatus(id, newStatus) {
    const p = participants.find(p => p.id === id);
    if (p) {
      p.status = newStatus;
      renderParticipants(filteredParticipants(document.getElementById("searchInput").value));
    }
  }

  function filteredParticipants(search) {
    return participants.filter(p =>
      p.name.toLowerCase().includes(search.toLowerCase()) ||
      p.email.toLowerCase().includes(search.toLowerCase()) ||
      p.phone.toLowerCase().includes(search.toLowerCase())
    );
  }

  document.getElementById("searchInput").addEventListener("input", (e) => {
    renderParticipants(filteredParticipants(e.target.value));
  });
  

  // Carregar os dados do PHP
  fetch('./backend/get-participantes.php')
    .then(res => res.json())
    .then(data => {
      participants = data;
      renderParticipants(participants);
    });
