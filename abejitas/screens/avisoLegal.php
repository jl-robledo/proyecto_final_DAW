<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="../css/estilos_cabecera.css">
    <link rel="stylesheet" href="../css/estilos-formulario.css">
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <title>BeeApp - AVISO LEGAL</title>
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

        <h1>AVISO LEGAL</h1>
        <h3>LEY DE LOS SERVICIOS DE LA SOCIEDAD DE LA INFORMACI??N (LSSI)</h3>
        <p><b>BEEAPP, S.L.</b>, responsable del sitio web, en adelante RESPONSABLE, pone a disposici??n de los usuarios el presente documento, con el que pretende dar cumplimiento a las obligaciones dispuestas en la Ley 34/2002, de 11 de julio, de Servicios de la Sociedad de la Informaci??n y del Comercio Electr??nico (LSSICE), as?? como informar a todos los usuarios del sitio web respecto a cu??les son las condiciones de uso.</p>
        <p>Toda persona que acceda a este sitio web asume el papel de usuario, comprometi??ndose a la observancia y cumplimiento riguroso de las disposiciones aqu?? dispuestas, as?? como a cualquier otra disposici??n legal que fuera de aplicaci??n. </p>
        <p>BEEAPP, S.L. se reserva el derecho de modificar cualquier tipo de informaci??n que pudiera aparecer en el sitio web, sin que exista obligaci??n de preavisar o poner en conocimiento de los usuarios dichas obligaciones, entendi??ndose como suficiente con la publicaci??n en el sitio web de BEEAPP, S.L. </p>
        <h3>1. DATOS IDENTIFICATIVOS</h3>
        <p>Denominaci??n social: <b>BEEAPP, S.L.</b><br>
        Nombre comercial: <b>BEEAPP, S.L.</b><br>
        CIF: NUMERO CIF<br>
        Domicilio: DIRECCION DE TU NEGOCIO<br>
        e-mail: info@beeapp.com</p>

        <h3>2. OBJETO</h3>
        <p>A trav??s del Sitio Web, les ofrecemos a los Usuarios la posibilidad de acceder a la informaci??n sobre nuestros servicios.</p>
        <h3>3. PRIVACIDAD Y TRATAMIENTO DE DATOS</h3>
        <p>Cuando para el acceso a determinados contenidos o servicio sea necesario facilitar datos de car??cter personal, los Usuarios garantizar??n su veracidad, exactitud, autenticidad y vigencia. La empresa dar?? a dichos datos el tratamiento automatizado que corresponda en funci??n de su naturaleza o finalidad, en los t??rminos indicados en la secci??n de Pol??tica de Privacidad.</p>
        
        <h3>4. PROPIEDAD INDUSTRIAL E INTELECTUAL</h3>
        <p>El Usuario reconoce y acepta que todos los contenidos que se muestran en el Espacio Web y en especial, dise??os, textos, im??genes, logos, iconos, botones, software, nombres comerciales, marcas, o cualesquiera otros signos susceptibles de utilizaci??n industrial y/o comercial est??n sujetos a derechos de Propiedad Intelectual y todas las marcas, nombres comerciales o signos distintivos, todos los derechos de propiedad industrial e intelectual, sobre los contenidos y/o cualesquiera otros elementos insertados en el p??gina, que son propiedad exclusiva de la empresa y/o de terceros, quienes tienen el derecho exclusivo de utilizarlos en el tr??fico econ??mico. Por todo ello el Usuario se compromete a no reproducir, copiar, distribuir, poner a disposici??n o de cualquier otra forma comunicar p??blicamente, transformar o modificar tales contenidos manteniendo indemne a la empresa de cualquier reclamaci??n que se derive del incumplimiento de tales obligaciones. En ning??n caso el acceso al Espacio Web implica ning??n tipo de renuncia, transmisi??n, licencia o cesi??n total ni parcial de dichos derechos, salvo que se establezca expresamente lo contrario. Las presentes Condiciones Generales de Uso del Espacio Web no confieren a los Usuarios ning??n otro derecho de utilizaci??n, RRHH, alteraci??n, explotaci??n, reproducci??n, distribuci??n o comunicaci??n p??blica del Espacio Web y/o de sus Contenidos distintos de los aqu?? expresamente previstos. Cualquier otro uso o explotaci??n de cualesquiera derechos estar?? sujeto a la previa y expresa autorizaci??n espec??ficamente otorgada a tal efecto por la empresa o el tercero titular de los derechos afectados.</p>
        <p>Los contenidos, textos, fotograf??as, dise??os, logotipos, im??genes, programas de ordenador, c??digos fuente y, en general, cualquier creaci??n intelectual existente en este Espacio, as?? como el propio Espacio en su conjunto, como obra art??stica multimedia, est??n protegidos como derechos de autor por la legislaci??n en materia de propiedad intelectual. La empresa es titular de los elementos que integran el dise??o gr??fico del Espacio Web, lo men??s, botones de navegaci??n, el c??digo HTML, los textos, im??genes, texturas, gr??ficos y cualquier otro contenido del Espacio Web o, en cualquier caso dispone de la correspondiente autorizaci??n para la utilizaci??n de dichos elementos. El contenido dispuesto en el Espacio Web no podr?? ser reproducido ni en todo ni en parte, ni transmitido, ni registrado por ning??n sistema de recuperaci??n de informaci??n, en ninguna forma ni en ning??n medio, a menos que se cuente con la autorizaci??n previa, por escrito, de la citada Entidad.</p>
        <p>Asimismo queda prohibido suprimir, eludir y/o manipular el ??copyright?? as?? como los dispositivos t??cnicos de protecci??n, o cualesquiera mecanismos de informaci??n que pudieren contener los contenidos. El Usuario de este Espacio Web se compromete a respetar los derechos enunciados y a evitar cualquier actuaci??n que pudiera perjudicarlos, reserv??ndose en todo caso la empresa el ejercicio de cuantos medios o acciones legales le correspondan en defensa de sus leg??timos derechos de propiedad intelectual e industrial.</p>
        <h3>5. OBLIGACIONES Y RESPONSABILIDADES DEL USUARIO DEL ESPACIO WEB</h3>
        <p>El Usuario se compromete a:</p>
        <ol>
            <li>Hacer un uso adecuado y l??cito del Espacio Web as?? como de los contenidos y servicios, de  conformidad con: (i) la legislaci??n aplicable en cada momento; (ii) las Condiciones Generales de Uso del Espacio Web; (iii) la moral y buenas costumbres generalmente aceptadas y (iv) el orden p??blico.</li>
            <li>Proveerse de todos los medios y requerimientos t??cnicos que se precisen para acceder al Espacio Web.</li>
            <li>Facilitar informaci??n veraz al cumplimentar con sus datos de car??cter personal los formularios contenidos en el Espacio Web y a mantenerlos actualizados en todo momento de forma que responda, en cada momento, a la situaci??n real del Usuario. El Usuario ser?? el ??nico responsable de las manifestaciones falsas o inexactas que realice y de los perjuicios que cause a la empresa o a terceros por la informaci??n que facilite.</li>
        </ol>
	
        <p>No obstante lo establecido en el apartado anterior el Usuario deber?? asimismo abstenerse de:</p>
        <ol>
            <li>Hacer un uso no autorizado o fraudulento del Espacio Web y/o de los contenidos con fines o efectos il??citos, prohibidos en las presentes Condiciones Generales de Uso, lesivos de los derechos e intereses de terceros, o que de cualquier forma puedan da??ar, inutilizar, sobrecargar, deteriorar o impedir la normal utilizaci??n de los servicios o los documentos, archivos y toda clase de contenidos almacenados en cualquier equipo inform??tico.</li>
            <li>Acceder o intentar acceder a recursos o ??reas restringidas del Espacio Web, sin cumplir las condiciones exigidas para dicho acceso.</li>
            <li>Provocar da??os en los sistemas f??sicos o l??gicos del Espacio Web, de sus proveedores o de terceros.</li>
            <li>Introducir o difundir en la red virus inform??ticos o cualesquiera otros sistemas f??sicos o l??gicos que sean susceptibles de provocar da??os en los sistemas f??sicos o l??gicos de la empresa, proveedores o de terceros.</li>
            <li>Intentar acceder, utilizar y/o manipular los datos de la empresa, terceros proveedores y otros Usuarios.</li>
            <li>Reproducir o copiar, distribuir, permitir el acceso del p??blico a trav??s de cualquier modalidad de comunicaci??n p??blica, transformar o modificar los contenidos, a menos que se cuente con la autorizaci??n del titular de los correspondientes derechos o ello resulte legalmente permitido.</li>
            <li>Suprimir, ocultar o manipular las notas sobre derechos de propiedad intelectual o industrial y dem??s datos identificativos de los derechos de la empresa o de terceros incorporados a los contenidos, as?? como los dispositivos t??cnicos de protecci??n o cualesquiera mecanismos de informaci??n que puedan insertarse en los contenidos.</li>
            <li>Obtener e intentar obtener los contenidos empleando para ello medios o procedimientos distintos de los que, seg??n los casos, se hayan puesto a su disposici??n a este efecto o se hayan indicado expresamente en las p??ginas web donde se encuentren los contenidos o, en general, de los que se empleen habitualmente en Internet por no entra??ar un riesgo de da??o o inutilizaci??n del Espacio web y/o de los contenidos.</li>
            <li>En particular, y a t??tulo meramente indicativo y no exhaustivo, el Usuario se compromete a no transmitir, difundir o poner a disposici??n de terceros informaciones, datos, contenidos, mensajes, gr??ficos, dibujos, archivos de sonido y/o imagen, fotograf??as, grabaciones, software y, en general, cualquier clase de material que: ??? De cualquier forma sea contrario, menosprecie o atente contra los derechos fundamentales y las libertades p??blicas reconocidas constitucionalmente, en los Tratados Internacionales y en el resto de la legislaci??n vigente.??? Induzca, incite o promueva actuaciones delictivas, denigratorias, difamatorias, violentas o, en general, contrarias a la ley, a la moral, a las buenas costumbres generalmente aceptadas o al orden p??blico.??? Induzca, incite o promueva actuaciones, actitudes o pensamientos discriminatorios por raz??n de sexo, raza, religi??n, creencias, edad o condici??n.??? Incorpore, ponga a disposici??n o permita acceder a productos, elementos, mensajes y/o servicios delictivos, violentos, ofensivos, nocivos, degradantes o, en general, contrarios a la ley, a la moral y a las buenas costumbres generalmente aceptadas o al orden p??blico. Induzca o pueda inducir a un estado inaceptable de ansiedad o temor.??? Induzca o incite a involucrarse en pr??cticas peligrosas, de riesgo o nocivas para la salud y el equilibrio ps??quico.??? Se encuentra protegido por la legislaci??n en materia de protecci??n intelectual o industrial perteneciente a la sociedad o a terceros sin que haya sido autorizado el uso que se pretenda realizar.??? Sea contrario al honor, a la intimidad personal y familiar o a la propia imagen de las personas.??? Constituya cualquier tipo de publicidad.??? Incluya cualquier tipo de virus o programa que impida el normal funcionamiento del Espacio Web.</li>
        </ol>
	
        <p>Si para acceder a algunos de los servicios y/o contenidos del Espacio Web, se le proporcionara una contrase??a, se obliga a usarla de manera diligente, manteni??ndola en todo momento en secreto. En consecuencia, ser?? responsable de su adecuada custodia y confidencialidad, comprometi??ndose a no cederla a terceros, de manera temporal o permanente, ni a permitir el acceso a los mencionados servicios y/o contenidos por parte de personas ajenas. Igualmente, se obliga a notificar a la sociedad cualquier hecho que pueda suponer un uso indebido de su contrase??a, como, a t??tulo enunciativo, su robo, extrav??o o el acceso no autorizado, con el fin de proceder a su inmediata cancelaci??n. En consecuencia, mientras no efect??e la notificaci??n anterior, la empresa quedar?? eximida de cualquier responsabilidad que pudiera derivarse del uso indebido de su contrase??a, siendo de su responsabilidad cualquier utilizaci??n il??cita de los contenidos y/o servicios del Espacio Web por cualquier tercero ileg??timo. Si de manera negligente o dolosa incumpliera cualquiera de las obligaciones establecidas en las presentes Condiciones Generales de Uso, responder?? por todos los da??os y perjuicios que de dicho incumplimiento pudieran derivarse para la empresa.</p>
        <h3>6. RESPONSABILIDADES</h3>
        <p>No se garantiza el acceso continuado, ni la correcta visualizaci??n, descarga o utilidad  de los elementos e informaciones contenidas en la web que puedan verse impedidos, dificultados o interrumpidos por factores o circunstancias que est??n fuera de su control. No se hace responsable de las decisiones que pudieran adoptarse como consecuencia del acceso a los contenidos o informaciones ofrecidas.</p>
        <p>Se podr?? interrumpir el servicio, o resolver de modo inmediato la relaci??n con el Usuario, si se detecta que un uso de su Espacio Web, o de cualquiera de los servicios ofertados en el mismo, es contrario a las presentes Condiciones Generales de Uso. No nos hacemos responsables por da??os, perjuicios, p??rdidas, reclamaciones o gastos derivados del uso del Espacio Web.</p>
        
        <p>??nicamente ser?? responsable de eliminar, lo antes posible, los contenidos que puedan generar tales perjuicios, siempre que as?? se notifique. En especial no seremos responsables de los perjuicios que se pudieran derivar, entre otros, de:</p>
        <ol>
            <li>Interferencias, interrupciones, fallos, omisiones, aver??as telef??nicas, retrasos, bloqueos o desconexiones en el funcionamiento del sistema electr??nico, motivadas por deficiencias, sobrecargas y errores en las l??neas y redes de telecomunicaciones, o por cualquier otra causa ajena al control de la empresa. </li>
            <li>Intromisiones ileg??timas mediante el uso de programas malignos de cualquier tipo y a trav??s de cualquier medio de comunicaci??n, tales como virus inform??ticos o cualesquiera otros.</li>
            <li>Abuso indebido o inadecuado del Espacio Web.</li>
            <li>Errores de seguridad o navegaci??n producidos por un mal funcionamiento del navegador o por el uso de versiones no actualizadas del mismo. El administrador del espacio web se reservan el derecho de retirar, total o parcialmente, cualquier contenido o informaci??n presente en el Espacio Web.</li>
        </ol>
        <p>La empresa excluye cualquier responsabilidad por los da??os y perjuicios de toda naturaleza que pudieran deberse a la mala utilizaci??n de los servicios de libre disposici??n y uso por parte de los Usuarios de Espacio Web. Asimismo queda exonerado de cualquier responsabilidad por el contenido e informaciones que puedan ser recibidas como consecuencia de los formularios de recogida de datos, estando los mismos ??nicamente para la prestaci??n de los servicios de consultas y dudas. Por otro lado, en caso de causar da??os y perjuicios por un uso il??cito o incorrecto de dichos servicios, podr?? ser el Usuario reclamado por los da??os o perjuicios causados.</p>
        
        <p>Usted mantendr?? a la empresa indemne frente a cualesquiera da??os y perjuicios que se deriven de reclamaciones, acciones o demandas de terceros como consecuencia de su acceso o uso del Espacio Web. Asimismo, usted se obliga a indemnizar frente a cualesquiera da??os y perjuicios, que se deriven del uso por su parte de ???robots???, ???spiders???, ???crawlers??? o herramientas similares empleadas con el fin de recabar o extraer datos o de cualquier otra actuaci??n por su parte que imponga una carga irrazonable sobre el funcionamiento del Espacio Web.
        <h3>7. HIPERV??NCULOS</h3>
        <p>El Usuario se obliga a no reproducir de ning??n modo, ni siquiera mediante un hiperenlace o hiperv??nculo, el Espacio Web, as?? como ninguno de sus contenidos, salvo autorizaci??n expresa y por escrito del responsable del fichero.
        <p>El Espacio Web puede incluir enlaces a otros espacios web, gestionados por terceros, con objeto de facilitar el acceso del Usuario a la informaci??n de empresas colaboradoras y/o patrocinadoras. Conforme con ello, la sociedad no se responsabiliza del contenido de dichos Espacios web, ni se sit??a en una posici??n de garante ni/o de parte ofertante de los servicios y/o informaci??n que se puedan ofrecer a terceros a trav??s de los enlaces de terceros.</p>
        <p>Se concede al Usuario un derecho limitado, revocable y no exclusivo a crear enlaces a la p??gina principal del Espacio Web exclusivamente para uso privado y no comercial. Los Espacios web que incluyan enlace a nuestro Espacio Web (i) no podr??n falsear su relaci??n ni afirmar que se ha autorizado tal enlace, ni incluir marcas, denominaciones, nombres comerciales, logotipos u otros signos distintivos de nuestra sociedad; (ii) no podr??n incluir contenidos que puedan considerarse de mal gusto, obscenos, ofensivos, controvertidos, que inciten a la violencia o la discriminaci??n por raz??n de sexo, raza o religi??n, contrarios al orden p??blico o il??citos; (iii) no podr??n enlazar a ninguna p??gina del Espacio Web distinta de la p??gina principal; (iv) deber?? enlazar con la propia direcci??n del Espacio Web, sin permitir que el Espacio web que realice el enlace reproduzca el Espacio Web como parte de su web o dentro de uno de sus ???frames??? o crear un ???browser??? sobre cualquiera de las p??ginas del Espacio Web. La empresa podr?? solicitar, en cualquier momento, que elimine cualquier enlace al Espacio Web, despu??s de lo cual deber?? proceder de inmediato a su eliminaci??n.</p>
        <p>La empresa no puede controlar la informaci??n, contenidos, productos o servicios facilitados por otros Espacios web que tengan establecidos enlaces con destino al Espacio Web.
        <h3>8. PROTECCI??N DE DATOS</h3>
        <p>Para utilizar algunos de los Servicios, el Usuario debe proporcionar previamente ciertos datos de car??cter personal. La empresa tratar?? automatizadamente estos datos y aplicar?? las correspondientes medidas de seguridad, todo ello en cumplimiento del RGPD, LOPDGDD y LSSI. El Usuario puede acceder a la pol??tica seguida en el tratamiento de los datos personales, as?? como el establecimiento de las finalidades previamente establecidas, en las condiciones definidas en la Pol??tica de Privacidad.
        <h3>9. COOKIES</h3>
        <p>La empresa se reserva el derecho de utilizar la tecnolog??a ???cookie??? en el Espacio Web, a fin de reconocerlo como Usuario frecuente y personalizar el uso que realice del Espacio Web mediante la preselecci??n de su idioma, o contenidos m??s deseados o espec??ficos.
        <p>Las cookies recopilan la direcci??n IP del usuario siendo Google el responsable del tratamiento de esta informaci??n.
        <p>Las cookies son ficheros enviados a un navegador, por medio de un servidor Web, para registrar la navegaci??n del Usuario en el Espacio Web, cuando el Usuario permita su recepci??n. Si usted lo desea puede configurar su navegador para ser avisado en pantalla de la recepci??n de cookies y para impedir la instalaci??n de cookies en su disco duro. Por favor consulte las instrucciones y manuales de su navegador para ampliar esta informaci??n.
        <p>Gracias a las cookies, resulta posible que se pueda reconocer el navegador del ordenador utilizado por el Usuario con la finalidad de facilitar contenidos y ofrecer las preferencias de navegaci??n u publicitarias que el Usuario, a los perfiles demogr??ficos de los Usuarios as?? como para medir las visitas y par??metros del tr??fico, controlar el progreso y n??mero de entradas.
        <h3>10. DECLARACIONES Y GARANT??AS</h3>
        <p>En general, los contenidos y servicios ofrecidos en el Espacio Web tienen car??cter meramente informativo. Por consiguiente, al ofrecerlos, no se otorga garant??a ni declaraci??n alguna en relaci??n con los contenidos y servicios ofrecidos en el Espacio web, incluyendo, a t??tulo enunciativo, garant??as de licitud, fiabilidad, utilidad, veracidad, exactitud, o comerciabilidad, salvo en la medida en que por ley no puedan excluirse tales declaraciones y garant??as.
        <h3>11. FUERZA MAYOR</h3>
        <p>La empresa no ser?? responsable en todo en caso de imposibilidad de prestar servicio, si ??sta se debe a interrupciones prolongadas del suministro el??ctrico, l??neas de telecomunicaciones, conflictos sociales, huelgas, rebeli??n, explosiones, inundaciones, actos y omisiones del Gobierno, y en general todos los supuestos de fuerza mayor o de caso fortuito.
        <h3>12. RESOLUCI??N DE CONTROVERSIAS. LEY APLICABLE Y JURISDICCI??N</h3>
        <p>Las presentes Condiciones Generales de Uso, as?? como el uso del Espacio Web, se regir??n por la legislaci??n espa??ola. Para la resoluci??n de cualquier controversia las partes se someter??n a los Juzgados y Tribunales del domicilio social del Responsable del sitio web.
        <p>En el supuesto de que cualquier estipulaci??n de las presentes Condiciones Generales de Uso resultara inexigible o nula en virtud de la legislaci??n aplicable o como consecuencia de una resoluci??n judicial o administrativa, dicha inexigibilidad o nulidad no har?? que las presentes Condiciones Generales de Uso resulten inexigibles o nulas en su conjunto. En dichos casos, la empresa proceder?? a la modificaci??n o sustituci??n de dicha estipulaci??n por otra que sea v??lida y exigible y que, en la medida de lo posible, consiga el objetivo y pretensi??n reflejados en la estipulaci??n original.</p>


        
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