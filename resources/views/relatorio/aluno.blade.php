<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <style>

        body {
            font-family: DejaVu Sans, sans-serif;
            padding: 0;
            margin: 0;
            font-size: 13px;
        }

        .container {
            width: 95%;
            margin: auto;
        }

        /* Cabeçalho */
        .header {
            text-align: center;
            border-bottom: 1px solid #333;
            padding-bottom: 10px;
            margin-bottom: 15px;
        }

        .header img {
            width: 80px;
            height: auto;
        }

        .school-info {
            font-size: 12px;
        }

        .title {
            font-weight: bold;
            text-align: center;
            font-size: 15px;
            margin-top: 10px;
            text-transform: uppercase;
        }

        .photo-box {
            width: 120px;
            height: 150px;
            border: 1px solid #000;
            text-align: center;
            float: right;
            margin-top: -80px;
            font-size: 12px;
            padding-top: 60px;
        }

        .content {
            margin-top: 20px;
            text-align: justify;
            line-height: 1.5;
        }

        .signature-area {
            margin-top: 40px;
            width: 100%;
        }

        .signature {
            width: 45%;
            display: inline-block;
            text-align: center;
            margin-top: 50px;
        }

        .signature-line {
            border-top: 1px solid #000;
            width: 70%;
            margin: 0 auto;
            padding-top: 3px;
        }

        /* Rodapé */
        .footer {
            text-align: center;
            font-size: 11px;
            padding: 10px;
            margin-top: 20px;
            border-top: 1px dashed #999;
        }

        .separator {
            border-bottom: 1px dashed #000;
            margin: 25px 0;
        }

    </style>
</head>
<body>

<div class="container">

    {{-- VIA 1 – TALÃO DE INSCRIÇÃO --}}
    <div class="header">
        <img src="{{ public_path('images/logo.png') }}" width="100" alt="Logo">
        <div class="school-info">
            <strong>COMPLEXO ESCOLAR PRIVADO A SABEDORIA DA SILVA</strong><br>
            LOCALIZACAO - CAZENGA<br>
            Tel: 945265853 | 995212934 | NIF: 542000550
        </div>
    </div>

    <div class="title">Talão de Matrícula Nº {{ $aluno->id }} | {{ date('Y') }}/{{ date('Y')+1 }}</div>

    <div class="photo-box">Foto</div>

    <div class="content">
        <p>
            <strong>{{ $aluno->nome }}</strong>, do gênero 
            <strong>{{ $aluno->sexo }}</strong>,
            filho de <strong>{{ $aluno->pai }}</strong> e de
            <strong>{{ $aluno->mae }}</strong>, 
            Nascido aos <strong>{{ date('d/m/Y', strtotime($aluno->data_nascimento)) }}</strong>, 
            Natural de <strong>{{ $aluno->residencia }}</strong>,
            Município de <strong>{{ $aluno->municipio }}</strong>,
            Província de <strong>{{ $aluno->provincia }}</strong>, 
            Residente em <strong>{{ $aluno->residencia }}</strong>,
            Portador do BI/Cédula Nº <strong>{{ $aluno->bi }}</strong>. 
            Matriculou para <strong>{{ $turma->grau }}</strong>ª Classe,
            Turma <strong>{{ $turma->turma }}</strong>,
            Período <strong>{{ $turma->periodo }}</strong>,
            Sala <strong>{{ $turma->sala }}</strong>,
            Curso <strong>{{ $turma->curso }}</strong>.
        </p>
    </div>

    <div class="content">
        <strong>Encarregado de Educação:</strong> {{ $aluno->pai }} <br>
        <strong>Contacto:</strong> {{ $aluno->contacto }}
    </div>

    <div class="signature-area">
        <div class="signature">
            <div class="signature-line"></div>
            <small>Assinatura do Informante</small>
        </div>

        <div class="signature" style="float:right;">
            <div class="signature-line"></div>
            <small>O Funcionário</small>
        </div>
    </div>

    <div class="footer">
        Luanda, {{ date('d') }} de {{ date('m') }} de {{ date('Y') }}
    </div>

    <div class="separator"></div>

    {{-- VIA 2 – COMPROVATIVO --}}
    <div class="header">
        <img src="{{ public_path('logo.png') }}" alt="Logo">
        <div class="school-info">
            <strong>COMPLEXO ESCOLAR PRIVADO FONTE DE SABER</strong><br>
            Distrito Urbano 11 de Novembro - Cacuaco<br>
            Tel: 945265853 | 995212934 | NIF: 542000550
        </div>
    </div>

    <div class="title">Comprovativo de Matrícula Nº {{ $aluno->id }} | {{ date('Y') }}/{{ date('Y')+1 }}</div>

    <div class="content">
        <p>
            <strong>{{ $aluno->nome }}</strong>, do gênero 
            <strong>{{ $aluno->sexo }}</strong>,
            filho de <strong>{{ $aluno->pai }}</strong> e de
            <strong>{{ $aluno->mae }}</strong>, 
            Nascido aos <strong>{{ date('d/m/Y', strtotime($aluno->data_nascimento)) }}</strong>, 
            Natural de <strong>{{ $aluno->residencia }}</strong>,
            Município de <strong>{{ $aluno->municipio }}</strong>, 
            Província de <strong>{{ $aluno->provincia }}</strong>.
            Está oficialmente matriculado na 
            <strong>{{ $turma->classe }}ª Classe</strong>,
            Período <strong>{{ $turma->periodo }}</strong>,
            Sala <strong>{{ $turma->sala }}</strong>,
            Curso <strong>{{ $turma->curso }}</strong>.
        </p>
    </div>

    <div class="footer">
        Copyright © 2020-2025. Todos os direitos reservados.
    </div>

</div>

</body>
</html>
