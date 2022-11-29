<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ColetaResiduo;

class AuthenticatedSessionController extends Controller
{
    public function login()
    {
        $coletas = ColetaResiduo::where('user_id', Auth::id())->get();
        $coletasTotais = $coletas->count();
        $coletasPendentes = $coletas->where('status', 0)->count();
        $coletasCanceladas = $coletas->where('status', 1)->count();
        $coletasConfirmadas = $coletas->where('status', 2)->count();
        
        return view('dashboard')->with('coletasTotais', $coletasTotais)->with('coletasPendentes', $coletasPendentes)->with('coletasCanceladas', $coletasCanceladas)->with('coletasConfirmadas', $coletasConfirmadas);
    }
    
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $coletas = ColetaResiduo::where('user_id', Auth::id())->get();
        $coletasTotais = $coletas->count();
        $coletasPendentes = $coletas->where('status', 0)->count();
        $coletasCanceladas = $coletas->where('status', 1)->count();
        $coletasConfirmadas = $coletas->where('status', 2)->count();
        
        return view('auth.login')->with(['coletasTotais', $coletasTotais], ['coletasPendentes', $coletasPendentes], ['coletasCanceladas', $coletasCanceladas], ['coletasConfirmadas', $coletasConfirmadas]);
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
