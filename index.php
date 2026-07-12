<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Psicóloga Letícia Leal</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="style/index.css">
    <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="style/footer.css">
</head>

<body>

<?php require_once 'includes/header.php'; ?>

<section id="inicio" class="hero">
    <div class="container">
        <div class="row align-items-center g-5">

            <div class="col-lg-7">
                <h1 class="titulo-do-inicio">
                    Cuidado 
                    <span class="gold">emocional</span>
                    <br>
                    com ética e acolhimento
                </h1>

                <p class="subtitulo-do-inicio">
                    Atendimento psicológico baseado na Terapia Cognitivo-Comportamental,
                    com escuta profissional, sigilo e acolhimento.
                </p>

                
            </div>

            <div class="col-lg-5">
                <div class="info-card p-4">
                    <h4 class="mb-3 gold2">Como funciona o atendimento?</h4>

                    <p>
                        As sessões oferecem um espaço seguro, sigiloso e acolhedor,
                        respeitando o tempo e a individualidade de cada pessoa.
                    </p>

                    <hr class="border-light">

                    <div class="d-flex align-items-center mb-3">
                        <i class="bi bi-shield-check fs-3 me-3 text-warning"></i>
                        <span>Sigilo e ética profissional</span>
                    </div>

                    <div class="d-flex align-items-center mb-3">
                        <i class="bi bi-camera-video fs-3 me-3 text-warning"></i>
                        <span>Atendimento online</span>
                    </div>

                    <div class="d-flex align-items-center">
                        <i class="bi bi-heart-pulse fs-3 me-3 text-warning"></i>
                        <span>Cuidado emocional individualizado</span>
                    </div>
                </div>
            </div>



        </div>
    </div>
</section>

<section id="tcc" class="py-5">
    <div class="container py-5">
        <div class="row align-items-center g-5">

            <div class="col-lg-6">
                <h2 class="tcc mb-4">
                Terapia Cognitivo-Comportamental
                </h2>
                
                


                <p>
                A TCC é uma abordagem que ajuda a compreender a relação entre pensamentos,
                emoções e comportamentos.
                </p>

                <p>
                Durante o processo, o paciente desenvolve recursos para lidar melhor com
                situações difíceis e construir respostas mais saudáveis.
                </p>

                <a href="#contato" class="btn btn-gold mt-3">Quero começar</a>
            </div>

            <div class="col-lg-6">
                <div class="timeline">

                    <div class="timeline-item">
                        <h5>1. Compreensão da demanda</h5>
                        <p>Entendimento da história, dificuldades e objetivos do paciente.</p>
                    </div>

                    <div class="timeline-item">
                        <h5>2. Identificação de padrões</h5>
                        <p>Observação de pensamentos, emoções e comportamentos recorrentes.</p>
                    </div>

                    <div class="timeline-item">
                        <h5>3. Construção de estratégias</h5>
                        <p>Desenvolvimento de recursos práticos para o cotidiano.</p>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>


<section id="sobre" class="sobre">
    <div class="container">
        <div class="col-lg-8 mx-auto">


            
            <h2 class="mb-4 titulo-sobre verde text-center mx-auto">Sobre a Psicóloga Letícia Leal</h2>


                <div class="row justify-content-center g-4">

                    <div class="col-lg-5">
                        <div class="sobre-card h-100 p-4">
                            
                            <p>
                                <i class="bi bi-emoji-smile"></i>
                                A Psicóloga Letícia Leal é especialista em Terapia Cognitivo-Comportamental,
                                com experiência em atendimentos individuais e grupos terapêuticos.
                                Seu trabalho é pautado na ética, sigilo e acolhimento, proporcionando
                                um espaço seguro para o desenvolvimento emocional de seus pacientes.
                            </p>
                            ...
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="sobre-card h-100 p-4">
                            
                             <p>
                                Com uma abordagem personalizada, Letícia busca compreender as necessidades
                                de cada indivíduo, auxiliando-os a superar desafios emocionais e alcançar
                                uma melhor qualidade de vida.
                            </p>
                            ...
                        </div>
                    </div>

                </div>

        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
