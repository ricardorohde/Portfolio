
	<footer class="conter-site-fluid texto-centro">
		<div class="conter-site-fluid">
			<a class="icon-btn twitter" href="https://www.linkedin.com/in/diego-fiuza/" target="_blank">
				<i class="fa fa-linkedin icon-twitter">
				</i>
				<span>
				</span>
			</a>
		
			<a class="icon-btn facebook" href="https://www.facebook.com/cantinhoartes.fiuza/" target="_blank">
				<i aria-hidden="true" class="fa fa-facebook icon-facebook">
				</i>
				<span>
				</span>
			</a>		
					
			<div class="agradecimentos texto-centro">
				Copyright © 2016 | Webdesigner Freelancer Diego Fiuza - Todos os direitos reservados.
			</div>
		</div>
	</footer>
</div>
</div>
</body>
</html>
<script>	
/** Window preloaload **/
$(document).ready(function($) {
    var Body = $('body');
    Body.addClass('preloader-site');
});
$(window).load(function() {
    $('.preloaders').fadeOut();
    $('body').removeClass('preloader-site');
});
	
var texto = function ( ele, rotacao, tempo ) {
		this.rotacao = rotacao;
		this.ele = ele;
		this.loopNum = 0;
		this.tempo = parseInt( tempo, 10 ) || 2000;
		this.txt = '';
		this.tick();
		this.inicoDeletar = false;
	};

	texto.prototype.tick = function () {
		var i = this.loopNum % this.rotacao.length;
		var fullTxt = this.rotacao[ i ];

		if ( this.inicoDeletar ) {
			this.txt = fullTxt.substring( 0, this.txt.length - 1 );
		} else {
			this.txt = fullTxt.substring( 0, this.txt.length + 1 );
		}

		this.ele.innerHTML = '<span class="autoescrita">' + this.txt + '</span>';

		var aquele = this;
		var delta = 180 - Math.random() * 100;

		if ( this.inicoDeletar ) {
			delta /= 4;
			//2
		}

		if ( !this.inicoDeletar && this.txt === fullTxt ) {
			delta = this.tempo;
			this.inicoDeletar = true;
		} else if ( this.inicoDeletar && this.txt === '' ) {
			this.inicoDeletar = false;
			this.loopNum++;
			delta = 500;
		}

		setTimeout( function () {
			aquele.tick();
		}, delta );
	};

	window.onload = function () {
		var elementos = document.getElementsByClassName( 'barrabranca' );
		for ( var i = 0; i < elementos.length; i++ ) {
			var rotacao = elementos[ i ].getAttribute( 'data-type' );
			var tempo = elementos[ i ].getAttribute( 'data-temp' );
			if ( rotacao ) {
				new texto( elementos[ i ], JSON.parse( rotacao ), tempo );
			}
		}
		// INJETAR BARRA CSS
		var css = document.createElement( "style" );
		css.type = "text/css";
		css.innerHTML = ".barrabranca > .autoescrita { border-right: 0.08em solid #fff; transition: .5s; }";
		document.body.appendChild( css );
	};	
	
</script>
<script src="assets/script/menus.js"></script>