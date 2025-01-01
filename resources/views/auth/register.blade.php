<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        rel="stylesheet"
    />
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap"
        rel="stylesheet"
    />
    <style>
        body {
            
        }
    </style>
</head>
<body class="bg-black flex items-center justify-center min-h-screen">
    <div class="absolute inset-0">
        <img
            class="w-full h-full object-cover opacity-50"
            src="https://storage.googleapis.com/a1aa/image/DfQiDZoK1KWnZSgQ46szus1El0H6AftynXOzt0sGHu8CufsnA.jpg"
            alt="Background image"
        />
    </div>
    <div class="relative bg-white p-8 rounded-lg shadow-lg max-w-md w-full">
        <div class="text-center mb-6">
        <h1 class="font-serif text-4xl md:text-4xl italic mb-1">Register</h1>
            <p class="text-gray-600">
                Please fill in the form below to create an account.
            </p>
        </div>
        <form>
            <!-- First Name -->
            <div class="mb-4">
                <input
                    type="text"
                    placeholder="First Name"
                    class="w-full p-3 border border-gray-300 rounded"
                    required
                />
            </div>
            <!-- Last Name -->
            <div class="mb-4">
                <input
                    type="text"
                    placeholder="Last Name"
                    class="w-full p-3 border border-gray-300 rounded"
                    required
                />
            </div>
            <!-- Email Address -->
            <div class="mb-4">
                <input
                    type="email"
                    placeholder="Email Address"
                    class="w-full p-3 border border-gray-300 rounded"
                    required
                />
            </div>
            <!-- Phone Number -->
            <div class="mb-4">
                <input
                    type="tel"
                    placeholder="Phone Number"
                    class="w-full p-3 border border-gray-300 rounded"
                    required
                />
            </div>
            <!-- Address -->
            <div class="mb-4">
                <input
                    type="text"
                    placeholder="Address"
                    class="w-full p-3 border border-gray-300 rounded"
                    required
                />
            </div>
            <!-- City -->
            <div class="mb-4">
                <input
                    type="text"
                    placeholder="City"
                    class="w-full p-3 border border-gray-300 rounded"
                    required
                />
            </div>
            <!-- Postal Code -->
            <div class="mb-4">
                <input
                    type="text"
                    placeholder="Postal Code"
                    class="w-full p-3 border border-gray-300 rounded"
                    required
                />
            </div>
            <!-- Password -->
            <div class="mb-4 relative">
                <input
                    id="password"
                    type="password"
                    placeholder="Password"
                    class="w-full p-3 border border-gray-300 rounded"
                    required
                />
                <span
                    id="togglePassword"
                    class="absolute right-3 top-3 text-gray-600 cursor-pointer transition-transform transform hover:scale-110"
                >
                    <i class="fas fa-eye"></i>
                </span>
            </div>
            <!-- Terms and Conditions -->
            <div class="mb-4 flex items-center">
                <input type="checkbox" id="terms" class="mr-2" required />
                <label for="terms" class="text-gray-600">
                    I agree to the <a href="#" class="underline">Terms & Conditions</a> and <a href="#" class="underline">Privacy Policy</a>.
                </label>
            </div>
            <!-- Subscribe to Newsletter -->
            <div class="mb-4 flex items-center">
                <input type="checkbox" id="promo" class="mr-2" />
                <label for="promo" class="text-gray-600">
                    Subscribe to receive the latest news & promotions.
                </label>
            </div>
            <!-- Submit Button -->
            <button
                type="submit"
                class="w-full bg-black text-white py-3 rounded"
            >
                Register
            </button>
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
            togglePassword.innerHTML = isPasswordVisible
                ? '<i class="fas fa-eye"></i>'
                : '<i class="fas fa-eye-slash"></i>';
        });
    </script>   
</body>
</html>