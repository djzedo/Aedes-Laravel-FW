<?php

namespace App\Http\Controllers;

use Request;
use DB;
use App\Models\Mapa;


class MapController extends Controller
{
    public function __construct(){
        //$this->middleware('thursday', ['except' => ['getIndex','getAbout']]);
    }
    
    public function import(){
        return view('import');
    }
    
    public function postImport()
    {
        Excel::load(Input::file('file'), function($reader)
        {
            $reader->each(function($sheet)
            {
                foreach ($sheet->toArray() as $row)
                {
                    User::firstOrCreate($sheet->toArray());
                }

            });
        });
        echo "Archivoimportado?";
            /*
        // Import a user provided file
        $file = Input::file('report');
        $filename = $this->doSomethingLikeUpload($file);

        // Return it's location
        return $filename;*/
    }
    
    public function getIndex()
    {    
        $Ano = 2016;
        $Semana = 1;
        
        //$input = Input::only('name','email','password'); 
        //return view('landing');
       
         $paris = Mapa::where
            ([                  
                ['ano', '=', $Ano ],
                ['semana', '=', $Semana ],
                ['comuna', '=', 'PARIS']
            ])->count();
        
         $acevedo = Mapa::where
            ([                  
                ['ano', '=', $Ano ],
                ['semana', '=', $Semana ],
                ['comuna', '=', 'ACEVEDO']
            ])->count();
        
        $madera = Mapa::where
            ([                  
                ['ano', '=', $Ano ],
                ['semana', '=', $Semana ],
                ['comuna', '=', 'MADERA']
            ])->count();
        
         $santaana = Mapa::where
            ([                  
                ['ano', '=', $Ano ],
                ['semana', '=', $Semana ],
                ['comuna', '=', 'SANTA ANA']
            ])->count();
        
         $centro = Mapa::where
            ([                  
                ['ano', '=', $Ano ],
                ['semana', '=', $Semana ],
                ['comuna', '=', 'CENTRO']
            ])->count();
        
         $lacumbre = Mapa::where
            ([                  
                ['ano', '=', $Ano ],
                ['semana', '=', $Semana ],
                ['comuna', '=', 'LA CUMBRE']
            ])->count();
        
         $bellavista = Mapa::where
            ([                  
                ['ano', '=', $Ano ],
                ['semana', '=', $Semana ],
                ['comuna', '=', 'BELLAVISTA']
            ])->count();
        
         $altosdeniquia = Mapa::where
            ([                  
                ['ano', '=', $Ano ],
                ['semana', '=', $Semana ],
                ['comuna', '=', 'ALTOS DE NIQUIA']
            ])->count();
        
         $niquia = Mapa::where
            ([                  
                ['ano', '=', $Ano ],
                ['semana', '=', $Semana ],
                ['comuna', '=', 'NIQUIA']
            ])->count();
        
         $fontidueno = Mapa::where
            ([                  
                ['ano', '=', $Ano ],
                ['semana', '=', $Semana ],
                ['comuna', '=', 'FONTIDUENO']
            ])->count();
        
     
        return view('landing' , 
                    [
                        'ano' => $Ano,
                        'semana' => $Semana,
                        'paris' =>  $paris,
                        'acevedo' => $acevedo,
                        'madera' => $madera,
                        'santaana' => $santaana,
                        'centro' => $centro,
                        'lacumbre' => $lacumbre,
                        'bellavista' => $bellavista,
                        'altosdeniquia' => $altosdeniquia,
                        'niquia' => $niquia,
                        'fontidueno' => $fontidueno
                    ]
            );
    }
    
     public function process()
    {    
        
      //  $deleteUser = User::find($id);
    //    $deleteUser->delete();
        
        //return redirect('users');
        
        $Ano =  Request::get('Ano');
        $Semana = Request::get('Semana');
        
        //$input = Input::only('name','email','password'); 
        //return view('landing');
       
         $paris = Mapa::where
            ([                  
                ['ano', '=', $Ano ],
                ['semana', '=', $Semana ],
                ['comuna', '=', 'PARIS']
            ])->count();
        
         $acevedo = Mapa::where
            ([                  
                ['ano', '=', $Ano ],
                ['semana', '=', $Semana ],
                ['comuna', '=', 'ACEVEDO']
            ])->count();
        
        $madera = Mapa::where
            ([                  
                ['ano', '=', $Ano ],
                ['semana', '=', $Semana ],
                ['comuna', '=', 'MADERA']
            ])->count();
        
         $santaana = Mapa::where
            ([                  
                ['ano', '=', $Ano ],
                ['semana', '=', $Semana ],
                ['comuna', '=', 'SANTA ANA']
            ])->count();
        
         $centro = Mapa::where
            ([                  
                ['ano', '=', $Ano ],
                ['semana', '=', $Semana ],
                ['comuna', '=', 'CENTRO']
            ])->count();
        
         $lacumbre = Mapa::where
            ([                  
                ['ano', '=', $Ano ],
                ['semana', '=', $Semana ],
                ['comuna', '=', 'LA CUMBRE']
            ])->count();
        
         $bellavista = Mapa::where
            ([                  
                ['ano', '=', $Ano ],
                ['semana', '=', $Semana ],
                ['comuna', '=', 'BELLAVISTA']
            ])->count();
        
         $altosdeniquia = Mapa::where
            ([                  
                ['ano', '=', $Ano ],
                ['semana', '=', $Semana ],
                ['comuna', '=', 'ALTOS DE NIQUIA']
            ])->count();
        
         $niquia = Mapa::where
            ([                  
                ['ano', '=', $Ano ],
                ['semana', '=', $Semana ],
                ['comuna', '=', 'NIQUIA']
            ])->count();
        
         $fontidueno = Mapa::where
            ([                  
                ['ano', '=', $Ano ],
                ['semana', '=', $Semana ],
                ['comuna', '=', 'FONTIDUENO']
            ])->count();
        
        return view('landing' , 
                    [
                        'ano' => $Ano,
                        'semana' => $Semana,
                        'paris' =>  $paris,
                        'acevedo' => $acevedo,
                        'madera' => $madera,
                        'santaana' => $santaana,
                        'centro' => $centro,
                        'lacumbre' => $lacumbre,
                        'bellavista' => $bellavista,
                        'altosdeniquia' => $altosdeniquia,
                        'niquia' => $niquia,
                        'fontidueno' => $fontidueno
                    ]
            );
    }
    
}