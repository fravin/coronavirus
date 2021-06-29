<html>
<head>
    <title>Certificado de Vacinação</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,400italic' rel='stylesheet'>
    <link rel="shortcut icon" href="/assets/images/alura/favicon.ico">
</head>
<body class="certificate">
    <div class="certificate-options">
        <a href="about.html" class="buttonLink">
            Voltar ao site
        </a>
        <a onclick="window.print();" class="buttonLink">
            Imprimir
        </a>
    </div>
    <link rel="stylesheet" href="css/certificado.css">
    
 <?php  
    if(isset($_POST['botao'])){
        $vacina = $_POST['vacina'];
        $nome = $_POST['nome'];
        $pdose = $_POST['pdose'];
        $sdose = $_POST['sdose'];
        $pdose = date_create($pdose);
        $sdose = date_create($sdose);
    }
 ?>     
    <div class="certificate-back">
        <img class="image" src="images/certificado.png" />
        <div class="off-fix ">
            <p style="padding:3%;"></p>
            <span class="certificate-course">
                Certificado de Vacinação
            </span>
            <span class="certificate-banner">
                Conferimos este certificado a:
            </span>
            <h4 class="certificate-user-name  name" style=""><?php echo @$nome?></h4>
            <span class="certificate-banner">
                por tomar as duas doses da vacina :
            </span>
            <h5 class="certificate-course"><?php echo @$vacina?></h5>
            
            <span class="certificate-date">
                primeira dose em <b class="certificate-course"><?php echo date_format($pdose,"d/m/Y");?></b> e a segunda dose em <b class="certificate-course"><?php echo date_format($sdose,"d/m/Y")?></b>.
            </span>
            <p style="padding:1%;"></p>
            <span class="certificate-course" >
                É tempo de ter esperança e de acreditar que dias melhores logo chegarão!
                
            </span>
            
            <span class="certificate-date">
                #FiqueEmCasa #VacinaSim #ForaBolsonaro
                <br>
                Certificado emitido em: <?php echo date("d/m/Y");?>
            </span>
        </div>
        <!--<a class="authenticity 
              alura"
            href="https://cursos.alura.com.br/certificate/ae4b59c4-fa17-4322-ba23-1edc8040aa56">https://cursos.alura.com.br/certificate/ae4b59c4-fa17-4322-ba23-1edc8040aa56</a>
    </div>-->
</body>
</html>