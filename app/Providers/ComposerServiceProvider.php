<?php namespace projetAntoine\Providers;

use Illuminate\Support\ServiceProvider;
use View;


class ComposerServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		View::composer('layouts.master', 'projetAntoine\Http\ViewComposers\FrontComposer');
		
		View::composer('partials.sidebar_admin', 'projetAntoine\Http\ViewComposers\DashboardComposer@sidebar');
                
               
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

}
