@extends('layout.auth_layout')
@section('title', 'Masukan Email')

<html>
<head>
<title>Forgot Password</title>
    <script src="https://unpkg.com/@babel/standalone/babel.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">    
    <div class="bg-white p-8 shadow-lg rounded-lg mb-8">
        <h1 class="text-3xl font-serif italic mb-4 text-center text-gray-800">Masukan Email</h1>
        <p class="text-center text-gray-600 mb-4">Enter your email to receive a password reset link.</p>
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="mb-4">
                <input 
                    id="email" 
                    type="email" 
                    class="w-full p-3 border border-gray-300 rounded" 
                    name="email" 
                    value="{{ old('email') }}" 
                    required 
                    autocomplete="email" 
                    autofocus 
                    placeholder="Email Address">
                @error('email')
                    <span class="text-red-500 text-sm mt-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-4 text-center">
                <button 
                    type="submit" 
                    class="w-full bg-black text-white p-3 rounded transition duration-300 hover:bg-gray-800">
                    Send Password Reset Link
                </button>
            </div>

            <div class="text-center">
                @if (session('status'))
                    <div class="bg-green-100 text-green-800 p-3 rounded mb-4">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
        </form>
    </div>

    <!-- Modal -->
    <div id="successModal" class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center hidden">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-sm">
            <h2 class="text-2xl font-bold text-center text-gray-800">Berhasil!</h2>
            <p class="text-center text-gray-600 mb-4">Tautan reset kata sandi telah dikirim ke email Anda.</p>
            <div class="flex justify-center">
                <button 
                    class="w-full bg-black text-white p-3 rounded transition duration-300 hover:bg-gray-800"
                    onclick="closeModal()">Tutup</button>
            </div>
        </div>
    </div>
</body>

<script>
    // Fungsi untuk membuka modal
    function openModal() {
        document.getElementById('successModal').classList.remove('hidden');
    }

    // Fungsi untuk menutup modal
    function closeModal() {
        document.getElementById('successModal').classList.add('hidden');
    }

    // Jika ada sesi status (misalnya reset password berhasil), buka modal
    @if (session('status'))
        openModal();
    @endif
</script>

</html>