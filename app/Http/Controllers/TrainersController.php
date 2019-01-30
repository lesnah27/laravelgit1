<?php

namespace App\Http\Controllers;

use App\Trainer;
use Illuminate\Http\Request;

class TrainersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        //trainers variable para almacenar los datos del modelo.
        //Trainer es el modelo de la base de dato.
        // all se refiere que debe traer de la base de dato todos los Trainer 
        // es decir todo lo almacenado en la base de dato.
        $trainers = Trainer::all();
        //compact es un metodo de laravel que genera un array.
        return view('trainers.index', compact('trainers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trainers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request; // esto sirve para verificar si se esta enviando                     //informacion del formulario.
        
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $name = time().$file->getClientOriginalName(); //para asignale un nombre unico evitar dublicidad.
            $file->move(public_path().'/images/',$name); // con esta linea de codigo creeo la carpeta imagenes en la carpeta public del proyecto
           // return $name;
            # code...
        }
        
        $trainer=new Trainer();
        $trainer->name = $request->input('name');
        $trainer->avatar = $name;
        $trainer->slug = $request->input('name');
        $trainer->save();

       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //public function show($id)
    public function show(Trainer $trainer)
    {
        return view('trainers.show',compact('trainer'));
  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Trainer $trainer)
    {
        return view('trainers.edit',compact('trainer'));
 
        //return $trainer;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trainer $trainer)
    {
        $trainer->fill($request->except('avatar'));
          if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $name = time().$file->getClientOriginalName(); 
            $trainer->avatar = $name;
            $file->move(public_path().'/images/',$name); 
        }
        $trainer->save();
        return 'update';
        //return $request;
        //return $trainer;
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
