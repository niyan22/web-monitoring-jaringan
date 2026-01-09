<x-guest-layout>
    <div class="auth-container">
        <div class="logo">
            <img src="assets/images/logo.png">
        </div>

        <div class="auth-card">
            <h2>Login</h2>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <input class="input" type="email" name="email" placeholder="Email" required>
                <input class="input" type="password" name="password" placeholder="Password" required>

                <button class="btn">Login</button>
            </form>
        </div>
    </div>
</x-guest-layout>
