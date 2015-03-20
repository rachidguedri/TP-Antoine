<?php namespace projetAntoine\Http\ViewComposers;



use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Request;
use projetAntoine\User;
use projetAntoine\Student;


class DashboardComposer{
    
    protected $user;
    protected $student;
    
    
    public function __construct(User $user, Student $student){
        
        $this->user=$user;
        $this->student=$student;
    }
    
    public function compose(View $view){
        
        
        
    }
    
    
    
    public function sidebar(View $view){
        $active ='';
        if(Request::is('dashboard')){
            $active ='dashboard';
        }
        $view->with('active', $active);
        
        $countPost= $this->post->type('post')->count();
        $view->with('countPost', $countPost);
        
        $countArchive= $this->post->type('archive')->count();
        $view->with('countArchive', $countArchive);
        
        $countComment= $this->post->type('comment')->count();
        $view->with('countComment', $countComment);
        
        $countCategory= $this->post->type('category')->count();
        $view->with('countCategory', $countCategory);
        
    }
}