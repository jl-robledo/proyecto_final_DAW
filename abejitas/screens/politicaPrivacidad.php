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
            <p>??ltima actualizaci??n: Enero 2021.</p>

            1. INFORMACI??N AL USUARIO</h3>
            <p></p><b>BEEAPP, S.L.</b>, como Responsable del Tratamiento, le informa que, seg??n lo dispuesto en el Reglamento (UE) 2016/679, de 27 de abril, (RGPD) y en la L.O. 3/2018, de 5 de diciembre, de protecci??n de datos y garant??a de los derechos digitales (LOPDGDD), trataremos su datos tal y como reflejamos en la presente Pol??tica de Privacidad.
            En esta Pol??tica de Privacidad describimos c??mo recogemos sus datos personales y por qu?? los recogemos, qu?? hacemos con ellos, con qui??n los compartimos, c??mo los protegemos y sus opciones en cuanto al tratamiento de sus datos personales.
            Esta Pol??tica se aplica al tratamiento de sus datos personales recogidos por la empresa para la prestaci??n de sus servicios. Si acepta las medidas de esta Pol??tica, acepta que tratemos sus datos personales como se define en esta Pol??tica.</p>
            <h3>2. CONTACTO</h3>
            <ul>
                <li>Denominaci??n social: <b>BEEAPP, S.L.</b></li>
                <li>Nombre comercial: BEEAPP</li>
                <li>CIF: NUMERO CIF</li>
                <li>Domicilio: DIRECCION DE TU NEGOCIO</li>
                <li>e-mail: info@beeapp. com</li>
            </ul>

            <h3>3. PRINCIPIOS CLAVE</h3>
            Siempre hemos estado comprometidos con prestar nuestros servicios con el m??s alto grado de calidad, lo que incluye tratar sus datos con seguridad y transparencia. Nuestros principios son:
            <ul>   
                <li>Legalidad: Solo recopilaremos sus Datos personales para fines espec??ficos, expl??citos y leg??timos.</li>
                <li>Minimizaci??n de datos: Limitamos la recogida de datos de car??cter personal a lo que es estrictamente relevante y necesario para los fines para los que se han recopilado.</li>
                <li>Limitaci??n de la Finalidad: Solo recogeremos sus datos personales para los fines declarados y solo seg??n sus deseos.</li>
                <li>Precisi??n: Mantendremos sus datos personales exactos y actualizados.</li>
                <li>Seguridad de los Datos: Aplicamos las medidas t??cnicas y organizativas adecuadas y proporcionales a los riesgos para garantizar que sus datos no sufran da??os, tales como divulgaci??n o acceso no autorizado, la destrucci??n accidental o il??cita o su p??rdida accidental o alteraci??n y cualquier otra forma de tratamiento il??cito.</li>
                <li>Acceso y Rectificaci??n: Disponemos de medios para que acceda o rectifique sus datos cuando lo considere oportuno.</li>
                <li>Conservaci??n: Conservamos sus datos personales de manera legal y apropiada y solo mientras es necesario para los fines para los que se han recopilado.</li>
                <li>Las transferencias internacionales: cuando se d?? el caso de que sus datos vayan a ser transferidos fuera de la UE/EEE se proteger??n adecuadamente.</li>
                <li>Terceros: El acceso y transferencia de datos personales a terceros se llevan a cabo de acuerdo con las leyes y reglamentos aplicables y con las garant??as contractuales adecuadas.</li>
                <li>Marketing Directo y cookies: Cumplimos con la legislaci??n aplicable en materia de publicidad y cookies.</li>
            </ul> 
            <h3>4. RECOGIDA Y TRATAMIENTO DE SUS DATOS PERSONALES</h3>
            Las tipos de datos que se pueden solicitar y tratar son:
                <li>Datos de car??cter identificativo.
            Tambi??n recogemos de forma autom??tica datos sobre su visita a nuestro sitio web  seg??n se describe en la pol??tica de cookies.
            Siempre que solicitemos sus Datos personales, le informaremos con claridad de qu?? datos personales recogemos y con qu?? fin. En general, recogemos y tratamos sus datos personales con el prop??sito de:
            <ul>   
                <li>Proporcionar informaci??n, servicios, productos, informaci??n relevante y novedades en el sector.</li>
                <li>Env??o de comunicaciones.</li>
            </ul> 
            <h3>5. LEGITIMIDAD</h3>
            De acuerdo con la normativa de protecci??n de datos aplicable, sus datos personales podr??n tratarse siempre que:
            <ul>
                <li>Nos ha dado su consentimiento a los efectos del tratamiento. Por supuesto podr?? retirar su consentimiento en cualquier momento.</li>
                <li>Por requerimiento legal.</li>
                <li>Por exisitr un inter??s leg??timo que no se vea menoscabado por sus derechos de privacidad, como por ejemplo el env??o de informaci??n comercial bien por suscripci??n a nuestra newsletter o por su condici??n de cliente.</li>
                <li>Por se necesaria para la prestaci??n de alguno de nuestros servicios mediante relaci??n contractual entre usted y nosotros.</li>
            </ul>    
            <h3>6. COMUNICACI??N DE DATOS PERSONALES</h3>
            Los datos pueden ser comunicados a empresas relacionadas con BEEAPP, S.L. para la prestaci??n de los diversos servicios en calidad de Encargados del Tratamiento. La empresa no realizar?? ninguna cesi??n, salvo por obligaci??n legal.
            <h3>7. SUS DERECHOS</h3>
            En relaci??n con la recogida y tratamiento de sus datos personales, puede ponerse en contacto con nosotros en cualquier momento para:
            <ul>
                <li>Acceder a sus datos personales y a cualquier otra informaci??n indicada en el Art??culo 15.1 del RGPD.</li>
                <li>Rectificar sus datos personales que sean inexactos o est??n incompletos de acuerdo con el Art??culo 16 del RGPD.</li>
                <li>Suprimir sus datos personales de acuerdo con el Art??culo 17 del RGPD.</li>
                <li>Limitar el tratamiento de sus datos personales de acuerdo con el Art??culo 18 del RGPD.</li>
                <li>Solicitar la portabilidad de sus datos de acuerdo con el Art??culo 20 del RGPD.</li>
                <li>Oponerse al tratamiento de sus datos personales de acuerdo con el art??culo 21 del RGPD.</li>
            </ul>
            Si ha otorgado su consentimiento para alguna finalidad concreta, tiene derecho a retirar el consentimiento otorgado en cualquier momento, sin que ello afecte a la licitud del tratamiento basado en el consentimiento previo a su retirada rrhh.
            Puede ejercer estos derechos enviando comunicaci??n, motivada y acreditada, a info@beeapp.com .
            Tambi??n tiene derecho a presentar una reclamaci??n ante la Autoridad de control competente (www.aepd.es) si considera que el tratamiento no se ajusta a la normativa vigente.
            <h3>8. INFORMACI??N LEGAL</h3>
            Los requisitos de esta Pol??tica complementan, y no reemplazan, cualquier otro requisito existente bajo la ley de protecci??n de datos aplicable, que ser?? la que prevalezca en cualquier caso.
            Esta Pol??tica est?? sujeta a revisiones peri??dicas y la empresa puede modificarla en cualquier momento. Cuando esto ocurra, le avisaremos de cualquier cambio y le pediremos que vuelva a leer la versi??n m??s reciente de nuestra Pol??tica y que confirme su aceptaci??n.

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
            <span>&copy;2021 pagina dise??ada por @joseluisrobledo @kirillpanferov</span>
        </div>
    </footer>


    <div id="cajacookies">
        <p class="center">
        ??ste sitio web usa cookies, si permanece aqu?? acepta su uso.
        Puede leer m??s sobre el uso de cookies en nuestra <a href="./screens/politicaCookies.php" class="mapa">pol??tica de privacidad</a>.
        <button onclick="aceptarCookies()" class="cookies__btn"><i class="fas fa-times"></i> Aceptar y cerrar ??ste mensaje</button>
        </p>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../js/verMenu.js"></script>
    <script src="../js/cookies_nuevas.js"></script>
</body>
</html>