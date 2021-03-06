<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Guía pagos varios - Infocat Soluciones</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="css/bootstrap-datepicker3.css?version=1.1">
	<link rel="stylesheet" href="css/bootstrap-select.min.css">
	<link rel="stylesheet" href="icofont.min.css">

</head>
<body>
	<style>
		select, input{
			margin: 20px 0;
		}
		#txtMontoAPagar{
			margin: 0;
		}
		#divComboBusqueda .dropdown-toggle{
			color: #495057;
			background-color: #fff;
			background-clip: padding-box;
			border: 1px solid #ced4da;
			border-radius: .25rem;
			transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
		}
		.bootstrap-select .dropdown-menu{
			max-width: 100%!important;
		}
		.noSelect {
			-webkit-touch-callout: none; /* iOS Safari */
				-webkit-user-select: none; /* Safari */
				-khtml-user-select: none; /* Konqueror HTML */
					-moz-user-select: none; /* Old versions of Firefox */
						-ms-user-select: none; /* Internet Explorer/Edge */
								user-select: none; /* Non-prefixed version, currently supported by Chrome, Edge, Opera and Firefox */
		}
		#txtMontoAPagar{
			border-left: 0px solid transparent!important;
		}
		.input-group-text{
			background-color: transparent;
		}
		.form-control:disabled, .form-control[readonly]{
			background-color: #ffffff;
		}
		h1, .tFlotante{ color: #057dcc;}
		#divImagen{
			position: relative;
		}
		.tFlotante{position: absolute;}
		
		@media (max-width: 4000px) {
			#primX{ top: calc(23.5%); left: calc(3.6%); }
			#seguX{ top: calc(26.1%); left: calc(3.6%); }
			#tercX{ top: calc(29%); left: calc(3.6%); }
			#cuarX{ top: calc(31.9%); left: calc(3.6%); }
			#rucX{ top: 39%; left: 16rem; font-size: 1.1rem }
			#mesX{ top: 48%; left: 16rem; font-size: 1.1rem }
			#anioX{ top: 48%; left: 18.5rem; font-size: 1.1rem }
			#tribX{ top: 53.5%; left: 16rem; font-size: 1.1rem }
			#montX{ top: 61.5%; left: 16rem; font-size: 1.1rem }
			#decimales{font-size: 0.8rem}
		}
		@media (max-width: 1500px) {
			#primX{ top: calc(23.2%); left: calc(5.5%); }
			#seguX{ top: calc(25.9%); left: calc(5.5%); }
			#tercX{ top: calc(28.8%); left: calc(5.5%); }
			#cuarX{ top: calc(31.8%); left: calc(5.5%); }
			#rucX{ top: 39%; left: 27%; font-size: 1.1rem }
			#mesX{ top: 48%; left: 27%; font-size: 1.1rem }
			#anioX{ top: 48%; left: 33%; font-size: 1.1rem }
			#tribX{ top: 53.5%; left: 27%; font-size: 1.1rem }
			#montX{ top: 61.5%; left: 27%; font-size: 1.1rem }
			#decimales{font-size: 0.8rem}
		}
		
		@media (max-width: 1354px) {
			#primX{ top: calc(23.2%); left: calc(5.5%); }
			#seguX{ top: calc(25.9%); left: calc(5.5%); }
			#tercX{ top: calc(28.8%); left: calc(5.5%); }
			#cuarX{ top: calc(31.8%); left: calc(5.5%); }
			#rucX{ top: 39%; left: 30%; font-size: 1.1rem }
			#mesX{ top: 48%; left: 30%; font-size: 1.1rem }
			#anioX{ top: 48%; left: 36%; font-size: 1.1rem }
			#tribX{ top: 53.5%; left:30%; font-size: 1.1rem }
			#montX{ top: 61.5%; left: 30%; font-size: 1.1rem }
			#decimales{font-size: 0.8rem}
		}
		@media (max-width: 1320px) {
			#primX{ top: calc(23%); left: calc(5.6%); }
			#seguX{ top: calc(25.7%); left: calc(5.6%); }
			#tercX{ top: calc(28.8%); left: calc(5.6%); }
			#cuarX{ top: calc(31.8%); left: calc(5.6%); }
			#rucX{ top: 38.5%; left: 33%; font-size: 1.1rem }
			#mesX{ top: 47.5%; left: 31%; font-size: 1.1rem }
			#anioX{ top: 47.5%; left: 37%; font-size: 1.1rem }
			#tribX{ top: 53.5%; left:31%; font-size: 1.1rem }
			#montX{ top: 61%; left: 31%; font-size: 1.1rem }
			#decimales{font-size: 0.8rem}
		}
		@media (max-width: 549px) {
			#divImagen{
				display: none;
			}
		}
		@media print{
			#primX{ top: calc(23%); left: calc(5.6%); }
			#seguX{ top: calc(25.7%); left: calc(5.6%); }
			#tercX{ top: calc(28.8%); left: calc(5.6%); }
			#cuarX{ top: calc(31.8%); left: calc(5.6%); }
			#rucX{ top: 38.5%; left: 33%; font-size: 1.1rem }
			#mesX{ top: 47.5%; left: 31%; font-size: 1.1rem }
			#anioX{ top: 47.5%; left: 37%; font-size: 1.1rem }
			#tribX{ top: 53.5%; left:31%; font-size: 1.1rem }
			#montX{ top: 61%; left: 31%; font-size: 1.1rem }
			#decimales{font-size: 0.8rem}
		}

		.form-control.is-invalid, .was-validated .form-control:invalid{ background-image: url(img/close.svg); }
		.form-control.is-valid, .was-validated .form-control:valid{ background-image: url(img/check.svg); }
	</style>

	
	<div class="container-fluid mt-3 noSelect " id="app">
		<div class="row">
			<div class="col-md-4 d-print-none">
				<p>Rellene su formulario:</p>
				<select id="sltTributoX" class="form-control" name="" v-model="tributoX">
					<option selected disabled value="-1">¿Qué tibuto se pagará?</option>	
					<option value="1">Tributos (Inc. Órdenes de pago y Resoluciones)</option>	
					<option value="2">Multas (Inc. Nuevo Régimen Único Simplificado)</option>
					<option value="3">Costos y Gastos Administrativos</option>
					<option value="4">Fraccionamientos (Art. 36 Cód. Tributario, D. Leg. 848, PERT, PERTA, REFT, SEAP, RESIT)</option>
				</select>
				<input type="text" class="form-control" :class="{'is-invalid': rucMal, 'is-valid': !rucMal}" id="txtRuc" placeholder="Número de R.U.C." autocomplete="off" v-model="ruc" max_length="11" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
				<input type="text" id="txtPeriodo" class="form-control" placeholder="Mes y Año" readonly>
				<div class="input-group my-4">
					<div class="input-group-prepend">
						<span class="input-group-text">S/</span>
					</div>
					<input type="number" class="form-control" id="txtMontoAPagar" placeholder="Monto a pagar" step=1 v-model="monto">
					
				</div>

				<div id="divComboBusqueda">
					<select id="sltTributos" class="form-control selectpicker" data-live-search="true" title="Cod. Tributo, concepto o multa" v-model="tipTributo">
						<?php include 'combo.php'; ?>
					</select>
				</div>
			
				<div>
					<button class="btn btn-outline-primary my-2" v-on:click="imprimir()"><i class="icofont-print"></i> Imprimir</button>
					<button class="btn btn-outline-secondary my-2" v-on:click="guardar()"><i class="icofont-file-pdf"></i> Guardar PDF</button>
					<button class="btn btn-outline-warning my-2 d-none"><i class="icofont-mail"></i> Correo electrónico</button>
					<button class="btn btn-outline-success my-2 d-none"><i class="icofont-share"></i> Compartir</button>
				</div>

				
			</div>
			
			<div class="col-12 col-md mt-3">
				<div id="divImagen">
					<img class="img-fluid" src="img/plantilla_sunat.png" alt="">
					<span class="tFlotante " :class="{'d-none': tributoX!=1}" id="primX"><i class="icofont-close"></i></span>
					<span class="tFlotante " :class="{'d-none': tributoX!=2}" id="seguX"><i class="icofont-close"></i></span>
					<span class="tFlotante " :class="{'d-none': tributoX!=3}" id="tercX"><i class="icofont-close"></i></span>
					<span class="tFlotante " :class="{'d-none': tributoX!=4}" id="cuarX"><i class="icofont-close"></i></span>
					<span class="tFlotante" id="rucX"><strong>{{ruc}}</strong></span>
					<span class="tFlotante" id="mesX"><strong>{{mes}}</strong></span>
					<span class="tFlotante" id="anioX"><strong>{{anio}}</strong></span>
					<span class="tFlotante" id="tribX"><strong>{{tipTributo}}</strong></span>
					<span class="tFlotante" id="montX"><strong><span id="entero">{{Math.trunc(monto)}}</span><span id="decimales">{{parDecimal()}}</span>	</strong></span>
				</div>
			</div>
		</div>
		<div class="row d-none">
			<div class="col">
				<iframe id="iframePDF" frameborder="0" width="500" height="400"></iframe>
			</div>
		</div>
		
	</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/bootstrap-datepicker.es.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/imagen.js"></script>
<script src="js/jspdf.min.js"></script>

<script>
	var doc = new jsPDF('p', 'px','a4');
	var app = new Vue({
		el: '#app',
		data: {
			ruc: '', monto: 0.00, mes:'', anio:'',
			tributoX: -1, tipTributo:'',
			rucMal: true,
		},
		methods:{
			parDecimal(){
				let dec = this.monto % Math.trunc(this.monto)
				if (isNaN(dec)){
					return '.00';}
				else{
					let entero = Math.trunc(this.monto);
					let dec = parseFloat(( this.monto - entero )).toFixed(2)*100;
					let fin = Math.trunc(dec);
					//console.log( Math.trunc(dec) );
					if(fin==0 ){
						return '.00';
					}else{
						return '.'+Math.trunc(dec);
					}
				}
			},
			validar(){
				if( this.tributoX==-1){ $('#sltTributoX').addClass('is-invalid'); return false; }
				else if( this.ruc=='' || this.ruc.length<11 || this.rucMal ){ this.rucMal = true; return false; }
				else if( this.tipTributo==''){ return false; }
				else if( parseFloat(this.monto)==0){ return false; }
				else{
					$('#sltTributoX').removeClass('is-invalid');
					$('#sltTributoX').addClass('is-valid');
					return true;
				}
			},
			imprimir(){ if( this.validar() ){ this.generarPdf(); this.autoLoad(); } },
			guardar(){ if( this.validar() ){ this.generarPdf(); this.guardarPDF(); } },
			generarPdf(){
				doc.addFont('ArialMS', 'Arial', 'normal');
				var imgData = $.imagen;
				doc.addImage(imgData, 'JPEG',  10, 10, 400, 310)
				doc.setFontSize(9);
				
				switch (this.tributoX) {
					case 1:
					case '1': doc.text("X", 34, 91); break;
					case 2:
					case '2': doc.text("X", 34, 99.5); break;
					case 3:
					case '3': doc.text("X", 34, 109); break;
					case 4:
					case '4': doc.text("X", 34, 117); break;
				
					default:
						break;
				}
				doc.setFont("Arial");
				doc.setFontType("bold");
				doc.setFontSize(14);
				doc.text(this.ruc, 130, 141);
				doc.text(this.ruc, 130, 141);
				doc.text(this.mes, 135, 170);
				doc.text(this.anio, 165, 170);
				if( this.tipTributo>-1){
					doc.text(this.tipTributo.toString(), 135, 188);
				}
				doc.text(parseFloat(this.monto).toFixed(2), 135, 211);
				doc.setFontSize(11);
				doc.text('Infocat Soluciones - Facturación electrónica Pago único en: infocatsoluciones.com', 20, 320);
				
				//abre autoprint pero en otra pestaña
				/*doc.autoPrint();
				window.open(doc.output('bloburl')); */
			},
			autoLoad(){
				/*Auto Load*/
				doc.autoPrint();
				var iframe = document.getElementById('iframePDF');
				iframe.src = doc.output('dataurlstring');
			},
			guardarPDF(){
			//Guarda el PDF
				doc.save("Guía para pagos_"+this.ruc+".pdf");
			}
		},
		watch:{
			ruc: function(newVal, oldVal){
				if( this.ruc.length>11){
					this.ruc = oldVal;
					this.rucMal = true;
				}
				else if(this.ruc.length<11){
					this.rucMal = true;
				}else{
					let inicio = this.ruc.substring(0,2);
					if( inicio =='20' || inicio =='10' ){
						this.rucMal = false;
					}else{
						this.rucMal = true;
					}
				}
			}
		},
		mounted(){
			/* $('#sltTributos').load('./combo.html', function(){
				$('.selectpicker').selectpicker('reload');
				$('.selectpicker').selectpicker('val', -1);
			}); */
			/* $.ajax({url: './combo.php', type: 'POST', data: { }}).done(function(resp) {
				$('#sltTributos').html(resp);
				console.log( 'rellenado' );
				
			}); */
			$('#sltTributos').selectpicker('reload');
			$('#sltTributos').selectpicker('val', -1);
			var d = new Date();
			let mo = d.getMonth();
			
			if(mo<10){ mo = '0'+mo;}
			this.mes = mo;
			this.anio = d.getFullYear().toString();
			$('#txtPeriodo').val(  mo + '-'+d.getFullYear() );
			$('#txtPeriodo').datepicker({
				format: "mm-yyyy",
				startView: 1,
				minViewMode: 1,
				maxViewMode: 2,
				language: "es",
				autoclose: true,
				toggleActive: true,
			});
			$('#app').on('change', '#txtPeriodo', function (e) {
				let tempo = $('#txtPeriodo').val()
				app.mes = tempo.substring(0,2);
				app.anio = tempo.substring(3,7);
			});
		}
	});


</script>
</body>
</html>

