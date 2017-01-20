var elixir = require('laravel-elixir'),
	bowerDir = "vendor/bower_components/";

	elixir(function(mix) {
		mix.copy(bowerDir + 'bootstrap/fonts', 'public/fonts') //Copia da pasta bootstrap/fonts para a pasta public fonts
			.copy(bowerDir + 'font-awesome/fonts', 'public/fonts')//Copia da pasta awesome/fonts para a pasta public fonts
	
			.copy(bowerDir + 'bootstrap/dist/js/bootstrap.js', 'resources/assets/js')//Copia da pasta bootstrap/js para a pasta resources/assets/js
			.copy(bowerDir + 'jquery/dist/jquery.js', 'resources/assets/js') //Copia da pasta jquery/js para a pasta resources/assets/js

			.scripts([
				'jquery.js',  //É important carregar primeiro o jquery para o funcionamento correto do sistema
				'bootstrap.js', // Carrega o bootstrap.js
				'custom.js'
			],	'public/js/scripts.js') // Diretório onde será salvo os scripts
			
			.less('app.less'); //Irá ler, minificar os arquivos e salvar na pasta public/assets/app.css
	});

	