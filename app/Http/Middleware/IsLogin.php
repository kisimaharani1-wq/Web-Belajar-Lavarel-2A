<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsLogin
{
    public function handle(Request $request, Closure $next): Response
    {
        // belum login? kembali ke halaman login
        if (!session('logged_in')) {
            return redirect('/');
        }

        return $next($request);
    }
}