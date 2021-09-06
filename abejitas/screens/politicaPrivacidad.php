<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="../css/estilos_cabecera.css">
    <link rel="stylesheet" href="../css/estilos-formulario.css">
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <title>BeeApp - PRIVACIDAD</title>
</head>
<body>
    <header class="cabecera">
        <div class="container logo-nav-container">
            <a href="../index.php" class="logo">
                <img src="../utils/logo.png" alt="logo" class="imagen-logo">
                <h3 class="brand">BeeApp</h3>
            </a>
            <span class="menu-icon">MENU</span>
            <nav class="navigation">
                <ul>
                    <li><a href="./prensaScreen.php">Articulos de Prensa</a></li> 
                    <li><a href="./shopScreen.php">Tienda</a></li> 
                    <?php 
                        session_start();
                        function logOut() {
                        session_destroy(); 
                        echo '<script>location.href = "./loginScreen.php"</script>';
                        }
                        if(isset($_POST['button1'])) {
                            logOut();
                        }

                        if (isset( $_SESSION['admin'] )){
                            if($_SESSION['admin'] === 'si'){
                    ?>
                                <li><a href="./adminScreen.php">Editar cliente</a></li>
                                <li><a href="./insertarProductoScreen.php">Insertar producto</a></li>
                        
                    <?php   }  ?>        
                            <li>
                            <form method="post">
                                <input type="submit" name="button1"
                                        value="LogOut" class="formulario__logout" />
                            </form>
                    </li>
                        <?php
                        }else{
                            ?>
                            <li><a href="./loginScreen.php">Login</a></li> 
                            <li><a href="./registerScreen.php">Register</a></li>
                        <?php
                        }                                
                    ?> 
                </ul>
            </nav>
        </div>
    </header>
    
    <main class="main">
        
        <div class="container">
            <h1>POLITICA DE PRIVACIDAD</h1>
            <p>Última actualización: Enero 2021.</p>

            1. INFORMACIÓN AL USUARIO</h3>
            <p></p><b>BEEAPP, S.L.</b>, como Responsable del Tratamiento, le informa que, según lo dispuesto en el Reglamento (UE) 2016/679, de 27 de abril, (RGPD) y en la L.O. 3/2018, de 5 de diciembre, de protección de datos y garantía de los derechos digitales (LOPDGDD), trataremos su datos tal y como reflejamos en la presente Política de Privacidad.
            En esta Política de Privacidad describimos cómo recogemos sus datos personales y por qué los recogemos, qué hacemos con ellos, con quién los compartimos, cómo los protegemos y sus opciones en cuanto al tratamiento de sus datos personales.
            Esta Política se aplica al tratamiento de sus datos personales recogidos por la empresa para la prestación de sus servicios. Si acepta las medidas de esta Política, acepta que tratemos sus datos personales como se define en esta Política.</p>
            <h3>2. CONTACTO</h3>
            <ul>
                <li>Denominación social: <b>BEEAPP, S.L.</b></li>
                <li>Nombre comercial: BEEAPP</li>
                <li>CIF: NUMERO CIF</li>
                <li>Domicilio: DIRECCION DE TU NEGOCIO</li>
                <li>e-mail: info@beeapp. com</li>
            </ul>

            <h3>3. PRINCIPIOS CLAVE</h3>
            Siempre hemos estado comprometidos con prestar nuestros servicios con el más alto grado de calidad, lo que incluye tratar sus datos con seguridad y transparencia. Nuestros principios son:
            <ul>   
                <li>Legalidad: Solo recopilaremos sus Datos personales para fines específicos, explícitos y legítimos.</li>
                <li>Minimización de datos: Limitamos la recogida de datos de carácter personal a lo que es estrictamente relevante y necesario para los fines para los que se han recopilado.</li>
                <li>Limitación de la Finalidad: Solo recogeremos sus datos personales para los fines declarados y solo según sus deseos.</li>
                <li>Precisión: Mantendremos sus datos personales exactos y actualizados.</li>
                <li>Seguridad de los Datos: Aplicamos las medidas técnicas y organizativas adecuadas y proporcionales a los riesgos para garantizar que sus datos no sufran daños, tales como divulgación o acceso no autorizado, la destrucción accidental o ilícita o su pérdida accidental o alteración y cualquier otra forma de tratamiento ilícito.</li>
                <li>Acceso y Rectificación: Disponemos de medios para que acceda o rectifique sus datos cuando lo considere oportuno.</li>
                <li>Conservación: Conservamos sus datos personales de manera legal y apropiada y solo mientras es necesario para los fines para los que se han recopilado.</li>
                <li>Las transferencias internacionales: cuando se dé el caso de que sus datos vayan a ser transferidos fuera de la UE/EEE se protegerán adecuadamente.</li>
                <li>Terceros: El acceso y transferencia de datos personales a terceros se llevan a cabo de acuerdo con las leyes y reglamentos aplicables y con las garantías contractuales adecuadas.</li>
                <li>Marketing Directo y cookies: Cumplimos con la legislación aplicable en materia de publicidad y cookies.</li>
            </ul> 
            <h3>4. RECOGIDA Y TRATAMIENTO DE SUS DATOS PERSONALES</h3>
            Las tipos de datos que se pueden solicitar y tratar son:
                <li>Datos de carácter identificativo.
            También recogemos de forma automática datos sobre su visita a nuestro sitio web  según se describe en la política de cookies.
            Siempre que solicitemos sus Datos personales, le informaremos con claridad de qué datos personales recogemos y con qué fin. En general, recogemos y tratamos sus datos personales con el propósito de:
            <ul>   
                <li>Proporcionar información, servicios, productos, información relevante y novedades en el sector.</li>
                <li>Envío de comunicaciones.</li>
            </ul> 
            <h3>5. LEGITIMIDAD</h3>
            De acuerdo con la normativa de protección de datos aplicable, sus datos personales podrán tratarse siempre que:
            <ul>
                <li>Nos ha dado su consentimiento a los efectos del tratamiento. Por supuesto podrá retirar su consentimiento en cualquier momento.</li>
                <li>Por requerimiento legal.</li>
                <li>Por exisitr un interés legítimo que no se vea menoscabado por sus derechos de privacidad, como por ejemplo el envío de información comercial bien por suscripción a nuestra newsletter o por su condición de cliente.</li>
                <li>Por se necesaria para la prestación de alguno de nuestros servicios mediante relación contractual entre usted y nosotros.</li>
            </ul>    
            <h3>6. COMUNICACIÓN DE DATOS PERSONALES</h3>
            Los datos pueden ser comunicados a empresas relacionadas con BEEAPP, S.L. para la prestación de los diversos servicios en calidad de Encargados del Tratamiento. La empresa no realizará ninguna cesión, salvo por obligación legal.
            <h3>7. SUS DERECHOS</h3>
            En relación con la recogida y tratamiento de sus datos personales, puede ponerse en contacto con nosotros en cualquier momento para:
            <ul>
                <li>Acceder a sus datos personales y a cualquier otra información indicada en el Artículo 15.1 del RGPD.</li>
                <li>Rectificar sus datos personales que sean inexactos o estén incompletos de acuerdo con el Artículo 16 del RGPD.</li>
                <li>Suprimir sus datos personales de acuerdo con el Artículo 17 del RGPD.</li>
                <li>Limitar el tratamiento de sus datos personales de acuerdo con el Artículo 18 del RGPD.</li>
                <li>Solicitar la portabilidad de sus datos de acuerdo con el Artículo 20 del RGPD.</li>
                <li>Oponerse al tratamiento de sus datos personales de acuerdo con el artículo 21 del RGPD.</li>
            </ul>
            Si ha otorgado su consentimiento para alguna finalidad concreta, tiene derecho a retirar el consentimiento otorgado en cualquier momento, sin que ello afecte a la licitud del tratamiento basado en el consentimiento previo a su retirada rrhh.
            Puede ejercer estos derechos enviando comunicación, motivada y acreditada, a info@beeapp.com .
            También tiene derecho a presentar una reclamación ante la Autoridad de control competente (www.aepd.es) si considera que el tratamiento no se ajusta a la normativa vigente.
            <h3>8. INFORMACIÓN LEGAL</h3>
            Los requisitos de esta Política complementan, y no reemplazan, cualquier otro requisito existente bajo la ley de protección de datos aplicable, que será la que prevalezca en cualquier caso.
            Esta Política está sujeta a revisiones periódicas y la empresa puede modificarla en cualquier momento. Cuando esto ocurra, le avisaremos de cualquier cambio y le pediremos que vuelva a leer la versión más reciente de nuestra Política y que confirme su aceptación.

        </div>
    </main>
    
    <footer class="footer">
        <div class="container">
            <div class="footer-items">
                <a href="./mapaWebScreen.php" class="mapa">Mapa Web</a>
                <a href="./politicaPrivacidad.php" class="mapa">Politica de privacidad</a>
                <a href="./avisoLegal.php" class="mapa">Aviso Legal</a>
                <a href="./contactoScreen.php" class="mapa">Contacto</a>
                <span>#JuntosPosLasAbejas</span>
            </div>
            <span>&copy;2021 pagina diseñada por @joseluisrobledo @kirillpanferov</span>
        </div>
    </footer>


    <div id="cajacookies">
        <p class="center">
        Éste sitio web usa cookies, si permanece aquí acepta su uso.
        Puede leer más sobre el uso de cookies en nuestra <a href="./screens/politicaCookies.php" class="mapa">política de privacidad</a>.
        <button onclick="aceptarCookies()" class="cookies__btn"><i class="fas fa-times"></i> Aceptar y cerrar éste mensaje</button>
        </p>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../js/verMenu.js"></script>
    <script src="../js/cookies_nuevas.js"></script>
</body>
</html>