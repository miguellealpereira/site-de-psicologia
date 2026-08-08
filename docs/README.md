# 🧠 Site de Psicologia

<p align="center">
  <img src="./logo/logo-do-site.png" alt="Logo do Site de Psicologia" width="250">
</p>

<p align="center">
  Site desenvolvido para apresentar serviços de Psicologia de forma profissional, moderna, acolhedora e responsiva.
</p>

---

## 📖 Sobre o Projeto

O **Site de Psicologia** foi desenvolvido com o objetivo de criar uma presença digital profissional para um consultório de Psicologia.

O projeto busca transmitir **acolhimento, confiança, ética e profissionalismo**, utilizando uma interface moderna, organizada e de fácil navegação.

A identidade visual utiliza principalmente tons de **verde e dourado**, criando uma experiência visual elegante e relacionada ao equilíbrio e ao bem-estar emocional.

---

## 🎯 Objetivos

O projeto tem como principais objetivos:

* Criar uma identidade digital profissional para a psicóloga;
* Apresentar informações sobre o atendimento psicológico;
* Facilitar o acesso às informações de contato;
* Proporcionar uma navegação simples e intuitiva;
* Garantir uma boa experiência em computadores, tablets e celulares;
* Aplicar conceitos de desenvolvimento web utilizando PHP, CSS e Bootstrap;
* Manter uma identidade visual consistente em todas as páginas.

---

# 🎨 Identidade Visual

A identidade visual foi desenvolvida utilizando tons de **verde, dourado e cores neutras**.

A escolha das cores procura transmitir sensações relacionadas ao atendimento psicológico, como tranquilidade, confiança, acolhimento e equilíbrio.

## 🌈 Paleta de Cores

| Cor                   | Código Hex | Utilização                           |
| --------------------- | :--------: | ------------------------------------ |
| 🟢 Verde muito escuro |  `#1A3932` | Barra de navegação e fundo principal |
| 🟢 Verde petróleo     |  `#27433B` | Overlay e elementos de profundidade  |
| 🟢 Verde musgo        |  `#304D46` | Fundo geral das seções               |
| 🟢 Verde acinzentado  |  `#4A5E56` | Cards e elementos secundários        |
| ⚪ Branco              |  `#FAFBFA` | Títulos e textos principais          |
| ⚪ Cinza claro         |  `#9BA6A2` | Bordas, linhas e detalhes            |
| 🟡 Dourado            |  `#C9A869` | Botões, ícones e logotipo            |
| 🟡 Dourado claro      |  `#F0D6A3` | Destaques e efeitos visuais          |

### Conceito da Paleta

**🟢 Tons de verde**

Os tons de verde foram escolhidos por estarem associados visualmente à tranquilidade, equilíbrio e bem-estar. No projeto, também ajudam a criar uma atmosfera acolhedora e profissional.

**🟡 Tons de dourado**

O dourado é utilizado principalmente nos elementos de destaque, como botões, ícones, bordas e detalhes da identidade visual. Ele cria contraste com os tons escuros de verde e adiciona sofisticação à interface.

**⚪ Branco e cinza**

As cores neutras são utilizadas para manter uma boa legibilidade e criar contraste entre textos, fundos e outros componentes da página.

---

# 💻 Tecnologias Utilizadas

O projeto utiliza tecnologias voltadas para o desenvolvimento web:

### Front-end

* **HTML5** — estrutura das páginas;
* **CSS3** — estilização e identidade visual;
* **Bootstrap** — sistema de grid, componentes e responsividade;
* **Bootstrap Icons** — ícones utilizados na interface.

### Back-end

* **PHP** — organização e reutilização de componentes do site;
* **MySQL** — estrutura preparada para armazenamento e gerenciamento de dados.

---

# 📁 Estrutura do Projeto

```text
site-de-psicologia/
│
├── 📁 docs/
│   └── Documentações do projeto
│
├── 📁 images/
│   └── Imagens utilizadas nas páginas
│
├── 📁 includes/
│   ├── header.php
│   └── footer.php
│
├── 📁 logo/
│   └── Arquivos relacionados à identidade visual
│
├── 📁 style/
│   └── Arquivos CSS responsáveis pela estilização
│
├── index.php
│
└── README.md
```

A separação dos arquivos em diretórios facilita a **organização, manutenção e evolução do projeto**.

---

# 🧩 Organização dos Componentes

O projeto utiliza PHP para separar elementos que aparecem em diferentes partes do site.

Por exemplo:

```php
<?php require_once 'includes/header.php'; ?>
```

e:

```php
<?php require_once 'includes/footer.php'; ?>
```

Dessa maneira, o cabeçalho e o rodapé podem ser mantidos em arquivos separados, evitando repetição de código e facilitando futuras alterações.

---

# 📱 Responsividade

O site foi desenvolvido pensando na adaptação para diferentes tamanhos de tela.

O **Bootstrap Grid System** e regras personalizadas de CSS permitem reorganizar os elementos conforme o espaço disponível.

O objetivo é proporcionar uma boa experiência de navegação em:

* 🖥️ Computadores;
* 💻 Notebooks;
* 📱 Smartphones;
* 📲 Tablets.

Elementos como textos, cards, imagens, botões e menus podem se adaptar ao tamanho da tela para preservar a organização visual e a legibilidade.

---

# ✨ Características do Design

O projeto utiliza alguns conceitos para manter uma identidade visual consistente:

* Paleta de cores padronizada;
* Contraste entre verde escuro e dourado;
* Cards para organização das informações;
* Bordas e detalhes dourados;
* Tipografia clara e legível;
* Espaçamento entre seções;
* Layout responsivo;
* Componentes reutilizáveis;
* Interface minimalista e profissional.

---

# 🚀 Executando o Projeto

Como o projeto utiliza **PHP**, não é recomendado simplesmente abrir o arquivo `index.php` diretamente pelo navegador.

É necessário executá-lo através de um servidor web com suporte a PHP.

Uma opção é utilizar o **XAMPP**.

### 1. Clone o repositório

```bash
git clone https://github.com/miguellealpereira/site-de-psicologia.git
```

### 2. Entre na pasta

```bash
cd site-de-psicologia
```

### 3. Coloque o projeto no servidor local

No XAMPP, o projeto pode ser colocado dentro de:

```text
xampp/htdocs/
```

Exemplo:

```text
xampp/htdocs/site-de-psicologia/
```

### 4. Inicie o Apache

Abra o painel do XAMPP e inicie o serviço:

```text
Apache
```

Caso o projeto utilize banco de dados, inicie também:

```text
MySQL
```

### 5. Acesse pelo navegador

```text
http://localhost/site-de-psicologia/
```

---

# 🔧 Status do Projeto

> 🚧 **Projeto em desenvolvimento**

O site ainda pode receber novas funcionalidades, melhorias de interface e otimizações.

### Possíveis melhorias futuras

* [ ] Página de contato;
* [ ] Formulário de contato;
* [ ] Sistema de agendamento;
* [ ] Melhorias de acessibilidade;
* [ ] Otimização de desempenho;
* [ ] Animações e transições;
* [ ] Área administrativa;
* [ ] Integração completa com banco de dados.

---

# 🌿 Conceito do Projeto

Mais do que apresentar informações, o projeto procura criar uma experiência digital que represente os valores de um atendimento psicológico:

> **Acolhimento, ética, confiança e cuidado emocional.**

A combinação entre tecnologia, organização e identidade visual busca proporcionar uma interface agradável, profissional e acessível.

---

# 👨‍💻 Desenvolvimento

Projeto desenvolvido como aplicação prática de conhecimentos em **Desenvolvimento Web**.

Tecnologias principais:

`PHP` • `HTML5` • `CSS3` • `Bootstrap` • `MySQL`

---

## 🔒 Licença e Direitos de Uso

Este projeto foi desenvolvido para uso profissional e comercial.

Todos os direitos relacionados ao código-fonte, identidade visual, imagens, logotipo, textos e demais conteúdos presentes neste projeto são reservados aos seus respectivos proprietários.

A reprodução, distribuição, modificação, publicação ou utilização total ou parcial deste projeto por terceiros não é permitida sem autorização prévia.

© 2026 — Todos os direitos reservados.
