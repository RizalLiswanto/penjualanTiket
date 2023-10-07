<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next,$role)
    {
        
            // Memeriksa apakah pengguna sedang masuk
            if (Auth::check()) {
                // Mendapatkan peran pengguna saat ini
                $userRole = Auth::user()->role->name; // Anda dapat mengganti 'name' sesuai dengan kolom peran yang sesuai di model Role
            
              
                // Memeriksa apakah peran pengguna cocok dengan peran yang diperlukan
                if ($userRole === $role) {
                    return $next($request); // Lanjutkan ke rute atau tindakan berikutnya
                }
                
            }
    
            // Jika pengguna tidak memiliki peran yang sesuai, kembalikan pesan atau tindakan lain
            return redirect()->route('/')->with('error', 'Anda tidak memiliki akses ke halaman ini.');
        
    }
}
