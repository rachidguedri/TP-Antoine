<?php namespace bloglaravel5\Http\ViewComposers;


use bloglaravel5\Taxonomy;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Request;
class BlogComposer{
    
    public function __construct(){
        
    }
    
    public function compose(View $view){
        
        // dd($view);
        
        $active ='';
        if(Request::is('/')){
            $active ='home';
        }
        
        if(Request::segment(1) == 'category'&& $id=Request::segment(2)){
            $active = $id;
        }
        $view->with('active', $active);
        $view->with('menus', Taxonomy::term('category')->get());
        
    }
}
