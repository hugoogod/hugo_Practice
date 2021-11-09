@extends('layouts.main')

@section('content')
     
<main class="login-form">
<div class="w-full h-screen flex items-center justify-center">
        <form class="w-full md:w-1/3 bg-gray-800 rounded-lg">
            <div class="flex font-bold justify-center mt-6">
                
            </div>
            <h2 class="text-3xl text-center text-white mb-4">Member login</h2>
            <div class="px-12 pb-10">
                <div class="w-full mb-2">
                    <div class="flex items-center">
                        <i class='ml-3 fill-current text-gray-400 text-xs z-10 fas fa-user'></i>
                        <input type='text' placeholder="Username"
                            class="-mx-6 px-8  w-full border rounded px-3 py-2 text-gray-700 focus:outline-none" />
                    </div>
                </div>
                <div class="w-full mb-2">
                    <div class="flex items-center">
                        <i class='ml-3 fill-current text-gray-400 text-xs z-10 fas fa-lock'></i>
                        <input type='text' placeholder="Password"
                            class="-mx-6 px-8 w-full border rounded px-3 py-2 text-gray-700 focus:outline-none" />
                    </div>
                </div>
                <a href="#" class="text-xs text-gray-500 float-right mb-4">Forgot Password?</a>
                <button type="submit"
                    class="w-full py-2 rounded-full bg-green-600 text-gray-100  focus:outline-none">Sign In</button>
        </form>
    </div>
</main>



@endsection

