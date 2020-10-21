<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $dados = File::all();
        //return $dados;
        return view('files.list', compact('dados'));

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('files.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = new File($request->all());

        if (isset($_FILES['file'])) {
            $ext = strtolower(substr($_FILES['file']['name'], -4));
            $new_name = md5(time()) . $ext;
            $dir = __DIR__ . "./../../../public/arquivos/";
            $file['name_md5'] = $new_name;
            move_uploaded_file($_FILES['file']['tmp_name'], $dir . $new_name);
        }
        echo $file;


        $file->save();
        flash('Criado com sucesso')->success();
        return redirect()->route('files.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $file = File::findOrFail($id);// primeira forma. traz o objeto
        //$busca = File::all()->where('id', $id)->values();//objeto em array
        return view('files.show', compact('file'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $file = File::findOrFail($id);// primeira forma. traz o objeto
        //$busca = File::all()->where('id', $id)->values();//objeto em array
        return view('files.edit', compact('file'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $file = File::findOrFail($id);
        $file->name = $request['name'];
        $file->author = $request['author'];
        $file->type = $request['type'];
        $file->save();
        flash('Atualizado com sucesso')->success();

        return redirect()->route('files.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $file = File::findOrFail($id);
        flash('Excluído com sucesso')->success();
        $file->delete();
        return redirect()->route('files.index');
    }
}
