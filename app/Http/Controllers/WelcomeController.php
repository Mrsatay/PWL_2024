<?php
    namespace App\http\Controllers;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    class WelcomeController extends Controller
    {
        public function hello(){
            return ('Hello World');
        }
        public function greeting(){
            return view('blog.hello')
            ->with('name','Maulana Dwi Cahyono')
            ->with('occupation','Astronaut');
        }
    }
