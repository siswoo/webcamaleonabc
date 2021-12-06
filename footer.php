<style type="text/css">

/************BOTON DE WHATSAPP****************/
.float{
	position:fixed;
	width:110px;
	height:70px;
	bottom:40px;
	right:40px;
	background-color:#25d366;
	color:#FFF;
	border-radius:50px;
	text-align:center;
	font-size:30px;
	box-shadow: 2px 2px 3px #999;
	z-index:100;
}

.float:hover {
	text-decoration: none;
	color: #25d366;
	background-color:#fff;
}

.my-float{
	margin-top:11px;
}
/****************************************************/


/***********SIDE BARS REDES SOCIALES*****************/
.sticky-container{
    padding:0px;
    margin:0px;
    position:fixed;
    right:-130px;
    top:150px;
    width:210px;
    z-index: 1100;
}
.sticky li{
    list-style-type:none;
    /*background-color:#fff;*/
    /*background-color: #3b5896;*/
    color:#efefef;
    height:43px;
    padding:0px;
    margin:20px 0px 1px 0px;
    -webkit-transition:all 0.25s ease-in-out;
    -moz-transition:all 0.25s ease-in-out;
    -o-transition:all 0.25s ease-in-out;
    transition:all 0.25s ease-in-out;
    cursor:pointer;
    border-radius: 1rem;
}
.sticky li:hover{
    /*margin-left:-115px;*/
}
.sticky li img{
    float:left;
    margin:5px 4px;
    margin-right:5px;
}
.sticky li p{
    padding-top:5px;
    margin:0px;
    line-height:16px;
    font-size:11px;
}
.sticky li p a{
    text-decoration:none;
    /*color:#2C3539;*/
    color: black;
    font-weight: bold;
}
.sticky li p a:hover{
    text-decoration:underline;
}
/****************************************************/
</style>

<div class="footer" style="background: black url('img/cenefa.webp') no-repeat center; color:white;">
	<div class="container" style="padding-top: 2rem; font-size: 14px;">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
				<p style="margin-top: -15px; font-weight: bold;">NUESTRAS SEDES BOGOTÁ</p>
                <p style="margin-top: -15px; font-weight: bold;">VIP OCCIDENTE | Barrio Carvajal</p>
                <p style="margin-top: -15px; font-weight: bold;">OCCIDENTE I | Barrio Mandalay</p>
                <p style="margin-top: -15px; font-weight: bold;">NORTE | Barrio La Española</p>
                <p style="margin-top: -15px; font-weight: bold;">SUBA | Barrio Costa Azul</p>
                <p style="margin-top: -15px; font-weight: bold;">CAV | Barrio Soacha</p>
			</div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <p style="margin-top: -15px; font-weight: bold;">NUESTRAS SEDES MEDELLIN</p>
                <p style="font-weight: bold;">SEDE BELÉN | Barrio Belén</p>
                <p style="margin-top: -15px; font-weight: bold;">SEDE MANRIQUE | Barrio Manrique</p>
                <p style="margin-top: -15px; font-weight: bold;">SEDE SUR AMERICANA | Barrio Sur Americana</p>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mt-3">
                <p style="margin-top: -15px; font-weight: bold;">INFORMACIÓN GENERAL</p>
                <p style="margin-top: -15px; font-weight: bold; text-transform: uppercase;">Email: contactomodelos@web.camaleonmg.com</p>
                <?php
                $sql1 = "SELECT * FROM numeros_whatsapp WHERE ambiente = 'webcamaleonabc_opcion2'";
                $proceso1 = mysqli_query($conexion,$sql1);
                $contador1 = mysqli_num_rows($proceso1);
                if($contador1>=1){
                    while($row1 = mysqli_fetch_array($proceso1)) {
                        $webcamaleonabcopcion2 = $row1["numero"];
                    }
                }else{
                    $webcamaleonabcopcion2 = "";
                }
                ?>
                <p style="margin-top: -15px; font-weight: bold;">Teléfono: <?php echo $webcamaleonabcopcion2; ?></p>
                <p style="margin-top: -15px; font-weight: bold;">Estamos presentes en toda Latinoamérica.</p>
            </div>
		</div>
	</div>
</div>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://api.whatsapp.com/send?phone=57<?php echo $webcamaleonabcopcion2; ?>&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n!!!" class="float" target="_blank">
<i class="fa fa-whatsapp my-float" style="font-size: 50px;"></i>
</a>

<div class="sticky-container">
    <ul class="sticky">
        <li style="background-color: #d7273c94;">
            <a href="https://www.instagram.com/webcamaleonabc/" target="_blank">
            	<img src="img/icons/instagram1.webp" style="width: 32px; height: 32px;">
            </a>
            <!--<p><a href="https://www.instagram.com/camaleonmodels/?hl=es-la" target="_blank">Síguenos en <br>Instagram</a></p>-->
        </li>
        <li style="background-color: #3b5896a6;">
            <a href="https://www.facebook.com/profile.php?id=100070776395766" target="_blank">
            	<img src="img/icons/facebook1.webp" style="width: 28px; height: 28px;">
            </a>
            <!--<p><a href="https://www.facebook.com/camaleon.latam" target="_blank">Danos tu Like<br>Facebook</a></p>-->
        </li>
        <li style="background-color: #1ca1f173;">
            <a href="https://twitter.com/CamaleonModels" target="_blank">
            	<img src="img/icons/twitter1.webp" style="width: 32px; height: 32px;">
            </a>
            <!--<p><a href="https://twitter.com/modelslatam?s=11" target="_blank">Síguenos en <br>Twitter</a></p>-->
        </li>
        <li style="background-color: #cb37379e;">
            <a href="https://www.youtube.com/channel/UCYOiiDOd8X9nsEufMFfa9SA/videos" target="_blank">
            	<img src="img/icons/youtube1.webp" style="width: 32px; height: 32px;">
            </a>
            <!--<p><a href="https://www.youtube.com/channel/UC4Sp29vYda88cXvvm17zckw" target="_blank">Sigue nuestro canal de <br>Youtube</a></p>-->
        </li>
    </ul>
</div>