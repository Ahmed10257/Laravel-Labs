<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Post as Post;
use Illuminate\Support\Facades\Auth as Auth;

class CheckPostOwner
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $post=Post::find($request->route('post'));

        if($post->user_id !== Auth::id()){

            return response('Unauthorized', 401);
        }
        return $next($request);
    }
}
