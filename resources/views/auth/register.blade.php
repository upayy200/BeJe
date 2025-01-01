<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: Helvetica, system-ui, -apple-system, Segoe UI, Roboto, Ubuntu, Cantarell, Noto Sans, sans-serif;
        }
    </style>
</head>

<body class="bg-black flex items-center justify-center min-h-screen">
    <div class="absolute inset-0">
        <img class="w-full h-full object-cover opacity-50"
            src="https://storage.googleapis.com/a1aa/image/DfQiDZoK1KWnZSgQ46szus1El0H6AftynXOzt0sGHu8CufsnA.jpg"
            alt="Background image" />
    </div>
    <div class="relative bg-white p-8 rounded-lg shadow-lg max-w-md w-full mt-20">
        <div class="text-center mb-6">
            <h1 class="font-serif text-4xl md:text-4xl italic mb-1">Register</h1>
            <p class="text-gray-600">
                Please fill in the form below to create an account.
            </p>
        </div>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            {{-- auto assign role (customer) --}}
            <input type="hidden" id="role" name="role" value="buyer">
            @error('role')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            {{-- auto assign role (customer) --}}

            <div class="mb-4">
                <input id="name" type="text" placeholder="Name"
                    class="w-full p-3 border border-gray-300 rounded" name="name" value="{{ old('name') }}"
                    required autocomplete="name" autofocus />
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-4">
                <input id="no_telepon" type="text" placeholder="Phone Number"
                    class="w-full p-3 border border-gray-300 rounded" name="no_telepon" value="{{ old('no_telepon') }}"
                    required autocomplete="no_telepon" />
                @error('no_telepon')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-4">
                <input id="alamat" type="text" placeholder="Address"
                    class="w-full p-3 border border-gray-300 rounded" name="alamat" value="{{ old('alamat') }}"
                    required autocomplete="alamat" />
                @error('alamat')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-4">
                <input id="email" type="email" placeholder="Email Address"
                    class="w-full p-3 border border-gray-300 rounded" name="email" value="{{ old('email') }}"
                    required autocomplete="email" />
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-4">
                <input id="username" type="text" placeholder="Username"
                    class="w-full p-3 border border-gray-300 rounded" name="username" value="{{ old('username') }}"
                    required autocomplete="username" />
                @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-4 relative">
                <input id="password" type="password" placeholder="Password"
                    class="w-full p-3 border border-gray-300 rounded" name="password" required
                    autocomplete="new-password" />
                <span id="togglePassword"
                    class="absolute right-3 top-3 text-gray-600 cursor-pointer transition-transform transform hover:scale-110">
                    <i class="fas fa-eye"></i>
                </span>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-4">
                <input id="password-confirm" type="password" placeholder="Confirm Password"
                    class="w-full p-3 border border-gray-300 rounded" name="password_confirmation" required
                    autocomplete="new-password" />
            </div>

            <div class="mb-4 text-center">
                <p style="font-size: 1.2rem" class="align-middle">Already have an account?
                    <a style="font-size: 1.2rem" class="btn btn_link_custom" href="{{ route('login') }}">Login</a>
                </p>
            </div>

            <div class="mb-4">
                <button type="submit" class="w-full bg-black text-white py-3 rounded">
                    Register
                </button>
            </div>
        </form>
    </div>

    <script>
        // Handle show/hide password
        const passwordInput = document.getElementById("password");
        const togglePassword = document.getElementById("togglePassword");

        togglePassword.addEventListener("click", () => {
            const isPasswordVisible = passwordInput.type === "text";
            passwordInput.type = isPasswordVisible ? "password" : "text";

            // Change icon based on visibility
            togglePassword.innerHTML = isPasswordVisible ?
                '<i class="fas fa-eye"></i>' :
                '<i class="fas fa-eye-slash"></i>';
        });
    </script>
</body>

</html>
