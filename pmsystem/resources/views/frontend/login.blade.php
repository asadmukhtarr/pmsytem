 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    @vite('resources/css/app.css')

    <title>Login</title>

</head>
<body>
    <div class="flex items-center justify-center min-h-screen bg-gray-200">
        <div class="w-full max-w-md p-8 space-y-6 bg-white shadow-lg rounded-lg">
          <h2 class="text-2xl font-bold text-center">Sign In</h2>
          <form class="space-y-4">
            <div>
              <label for="email" class="block text-sm font-medium text-muted-foreground">Email Address</label>
              <input
                type="email"
                id="email"
                name="email"
                required
                class="w-full px-3 py-2 mt-1 border rounded-md bg-input text-foreground border-border focus:outline-none focus:ring-2 focus:ring-primary"
                placeholder="you@example.com"
              />
            </div>
            <div>
              <label for="password" class="block text-sm font-medium text-muted-foreground">Password</label>
              <input
                type="password"
                id="password"
                name="password"
                required
                class="w-full px-3 py-2 mt-1 border rounded-md bg-input text-foreground border-border focus:outline-none focus:ring-2 focus:ring-primary"
                placeholder="••••••••"
              />
            </div>
            <button type="submit" class="w-full py-2 mt-4 text-white bg-black rounded-md hover:bg-primary/80 focus:outline-none focus:ring-2 focus:ring-primary">Sign In</button>
          </form>
          <div class="flex justify-between mt-4 text-sm text-muted-foreground">
            <a href="#" class="hover:underline">Forgot Password?</a>
            <a href="#" class="hover:underline">Create a New Account</a>
          </div>
        </div>
      </div>
</body>
</html>