Laravel 8 

Packages Added 
	=> Laravel Translate Manager => Done
	    https://github.com/barryvdh/laravel-translation-manager

	=> Image Intervention

	=> Debugger Bar  => Done
	    https://github.com/barryvdh/laravel-debugbar
	=> Auth
	    => iwill Use Auth normal but view will be created Manulay 

	=> html Minimize => Done
	   https://github.com/HTMLMin/Laravel-HTMLMin
	   => Dont Forget to 
		=> add this line 'HTMLMin' => HTMLMin\HTMLMin\Facades\HTMLMin::class,
     		  In app/config.php
		=> php artisan vendor:publish
		=> add all files u want to ignore in config/htmlmin 
		=> and finaly => php artisan view:clear


	=> CSS & JS Minimize and Collect  Webmax or maxins
	    npm install
	    On webpack.mix.js
		=> mix.scripts([
    			   'public/js/test2.js',
			], 'public/js/app.js').version();
		=> i will do this with all my styles and scripts
	    On blade file 
		=> <script src="{{ url(mix('/js/app.js')) }}"></script>
		=> same with Styles
	    npm run dev => for development Environement
	    npm run prod => for Production Environnement

	=> Laravel Localization => Done
	    https://github.com/mcamara/laravel-localization

	=> laravel uuid 
		https://github.com/webpatser/laravel-uuid

