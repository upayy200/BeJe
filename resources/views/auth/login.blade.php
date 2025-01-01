@section('title', 'Login')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Register Beje</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&amp;display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="styles.css">
    <style>
    body {
        Helvetica, system-ui, -apple-system, Segoe UI, Roboto, Ubuntu, Cantarell, Noto Sans, sans-serif, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen, Ubuntu, Cantarell, Open Sans, Helvetica Neue, sans-serif;
    }
    </style>
</head>
<body class="bg-black flex items-center justify-center min-h-screen">
    <div class="absolute inset-0">
        <img alt="Background image of purple shoes" class="w-full h-full object-cover opacity-20" 
            src="https://storage.googleapis.com/a1aa/image/20yYNgDfWv0oXSPeYnXeeNXqXQRvDwftSJW3auDDwS5rJvzeE.jpg" />
    </div>
    <div class="relative z-10 w-full max-w-md mx-auto">
        <!-- Login Card -->
        <div class="bg-white p-8 shadow-lg rounded-lg mb-8">
        <h1 class="font-serif text-4xl md:text-4xl italic mb-1">Login</h1>
            <p class="text-gray-600 mb-4">Enter your email and password below if you already have an account.</p>
            <form>
                <div class="mb-4">
                    <input class="w-full p-3 border border-gray-300 rounded" placeholder="Email Address" type="email"/>
                </div>
                <div class="mb-4 relative">
                    <input id="password" class="w-full p-3 border border-gray-300 rounded pr-10" 
                           placeholder="Password" type="password"/>
                    <button id="togglePassword" class="absolute right-3 top-3 text-gray-600 focus:outline-none" 
                            type="button">
                        <i class="fas fa-eye"></i>
                    </button>
                </div>
                <div class="flex justify-end items-center mb-4">
                    @if (Route::has('password.request'))
                    <a 
                    class="relative transition-all duration-300 ease-in-out inline-flex items-center justify-center whitespace-nowrap rounded-none ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 text-primary hover:text-black-600 hover:underline uppercase !px-0 font-normal px-3 text-xs float-right my-3 border-none 
                    before:content-[''] before:absolute before:bottom-0 before:left-0 before:w-full before:h-[2px] before:bg-black before:scale-x-0 before:origin-center hover:before:scale-x-100 before:transition-transform before:duration-300"
                    href="{{ route('password.request') }}" 
                    aria-haspopup="dialog" 
                    aria-expanded="false" 
                    aria-controls="radix-:Redrh9:" 
                    data-state="closed">
                    Forgot Password
                    </a>

                    </a>

                    @endif
                </div>
                <button class="w-full bg-black text-white p-3 rounded" type="submit">Login</button>
            </form>
        </div>
        <!-- Register Card -->
        <div class="bg-white p-8 shadow-lg rounded-lg">
        <h2 class="font-serif text-3xl md:text-4xl italic mb-1">Register</h2>
            <p class="text-gray-600 mb-4">Don't have an account? Click the button below to register.</p>
            <a href="{{ route('register') }}">
                <button class="w-full bg-black text-white p-3 rounded">Register</button>
            </a>
        </div>
    </div>
    <script>
        // Show/Hide Password Functionality
        const togglePassword = document.getElementById("togglePassword");
        const passwordInput = document.getElementById("password");
        
        togglePassword.addEventListener("click", function () {
            // Toggle input type
            const type = passwordInput.type === "password" ? "text" : "password";
            passwordInput.type = type;

            // Toggle icon
            this.querySelector("i").classList.toggle("fa-eye");
            this.querySelector("i").classList.toggle("fa-eye-slash");

            // Add animation to the password field
            passwordInput.classList.add("transition", "duration-300");
        });
    </script>
</body>
</html>