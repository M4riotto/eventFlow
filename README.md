# 🚀 EventFlow - Sistema de Registro e Gerenciamento de Participantes

<img src="https://img.shields.io/badge/Tecnologia-PHP%20%7C%20TailwindCSS-blueviolet?style=flat-square" />

**EventFlow** é um sistema simples e funcional para registrar e gerenciar participantes de eventos, feito com **PHP** + **HTML/JS** + **Tailwind CSS**.

> 💡 Criado para auxiliar minha turma do curso de **Análise e Desenvolvimento de Sistemas (ADS)** a compreender melhor como funciona o backend com PHP, formulários HTML, manipulação de arquivos e design responsivo com Tailwind.  
>  
> Ideal também para quem deseja treinar **formulários, salvar dados no servidor (via .CSV)** e exibir os participantes em uma interface interativa.

---

## 🛠️ Tecnologias utilizadas

- ✅ **PHP (sem banco de dados)** — os dados são salvos em arquivo `.csv`
- ✅ **TailwindCSS** — para estilização moderna e responsiva
- ✅ **HTML5 + JavaScript Vanilla**
- ✅ **Lucide Icons** — para ícones elegantes no menu
- ✅ **XAMPP** — ambiente local com servidor Apache

---

## 📦 Funcionalidades

- [x] Registro de participantes com: nome, e-mail, telefone, status e observações
- [x] Salva as informações em um arquivo `.csv`
- [x] Lista dinâmica com opção de busca
- [x] Alteração de status diretamente na lista
- [x] Plano de evento exibido em abas (por dia)
- [x] Menu responsivo com botão hambúrguer

---

## 🧪 Como rodar localmente (Passo a Passo)

### 1. Baixe e instale o **XAMPP**
> 🔗 [https://www.apachefriends.org/pt_br/index.html](https://www.apachefriends.org/pt_br/index.html)

- Após baixar, **instale o XAMPP normalmente**
- Execute o **XAMPP Control Panel** e inicie o módulo **Apache**

### 2. Coloque os arquivos no diretório `htdocs`

- Vá até a pasta onde o XAMPP foi instalado
- Entre na pasta: `C:/xampp/htdocs`
- Crie uma nova pasta chamada `eventflow`
- Cole todos os arquivos do projeto nesta pasta

Exemplo final:
C:/xampp/htdocs/eventflow/index.php
C:/xampp/htdocs/eventflow/participantes.php
C:/xampp/htdocs/eventflow/plano.php
C:/xampp/htdocs/eventflow/salvar.php
C:/xampp/htdocs/eventflow/get-participantes.php
C:/xampp/htdocs/eventflow/dados.csv


### 3. Acesse o projeto no navegador

- Abra o navegador e digite:
http://localhost/eventflow


> Agora você verá a tela inicial do sistema! 😎

---

## 📁 Estrutura dos Arquivos

📂 eventflow/
├── 📄 index.php # Página de registro
├── 📄 participantes.php # Lista de participantes
├── 📄 plano.php # Plano do evento
├── 📄 salvar.php # Salva os dados no arquivo CSV
├── 📄 get-participantes.php # Retorna JSON para a lista
├── 📄 dados.csv # Arquivo onde os dados são armazenados
├── 📄 README.md # Este arquivo


---

## ❤️ Agradecimentos

Este projeto foi desenvolvido com dedicação para:

🎓 **Minha turma de ADS** — como material de apoio e prática de PHP real  
🎨 Para treinar **Tailwind CSS na prática** com responsividade  
📚 Para aplicar conceitos de manipulação de arquivos com **PHP puro**

---

## ✍️ Autor

**Vitor Moreira**  
Desenvolvedor Fullstack  
🌐 [Vitor Moreira - Portfolio](https://vitormoreira.vercel.app/)

---

### 🚀 Bora codar, aprender e evoluir!

