<?php

namespace App\Http\Controllers;

use App\Sector;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::latest()->paginate(5);
        return view('front.users.index',compact('users'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sectors = Sector::all();
        return view('front.users.create')->with(['sectors' => $sectors]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        User::create([
            'name' => $request->name,
            'cpf' => $request->cpf,
            'email' => $request->email,
            'nivel_acesso'  => $request->nivel_acesso,
            'password' => md5($request->password),
            'sector_id' => $request->sector_id
        ]);
        return redirect()->route('users.index')
            ->with('success','Usuario criado com sucesso.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('front.users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $sectors = Sector::all();
        $sectorUsuario=$user->sector()->get()->first();
        return view('front.users.edit',compact('user'))->with(['sectorUsuario' => $sectorUsuario, 'sectors' => $sectors]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->update([
            'name' => $request->name,
            'cpf' => $request->cpf,
            'email' => $request->email,
            'nivel_acesso'  => $request->nivel_acesso,
            'password' => md5($request->password),
            'sector_id' => $request->sector_id
        ]);

        return redirect()->route('users.index')
            ->with('success','Usuário Atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')
            ->with('success','Usuário Deletado com sucesso');

    }
}
