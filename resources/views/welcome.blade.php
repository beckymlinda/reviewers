<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NCHE Reviewer System</title>

    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Custom NCHE Theme Colors -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        nchepurple: '#52074f',
                        ncheorange: '#dd8027',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-white text-gray-800 flex items-center justify-center min-h-screen p-6">

    <div class="max-w-4xl w-full rounded-lg shadow-md border bg-white">
        <!-- Header -->
        <div class="bg-nchepurple px-6 py-4 text-white flex justify-between items-center">
            <h1 class="text-xl font-semibold">NCHE Reviewer System</h1>
            <div class="space-x-4 text-sm">
                <a href="/login" class="hover:underline">Log in</a>
                <a href="/register" class="hover:underline">Register</a>
            </div>
        </div>

        <!-- Content -->
        <div class="px-8 py-10">
            <h2 class="text-2xl font-bold mb-4 text-nchepurple">Welcome Reviewers</h2>
            <p class="text-gray-700 mb-6">Login to access your dashboard, manage reviews, and more.</p>

            <ul class="space-y-2 mb-6 text-sm">
                <li class="flex items-center gap-2">
                    <div class="w-2 h-2 rounded-full bg-ncheorange"></div>
                    Secure reviewer login and dashboard
                </li>
                <li class="flex items-center gap-2">
                    <div class="w-2 h-2 rounded-full bg-ncheorange"></div>
                    Access submitted applications for review
                </li>
                <li class="flex items-center gap-2">
                    <div class="w-2 h-2 rounded-full bg-ncheorange"></div>
                    View your review history and tasks
                </li>
            </ul>

            <div class="flex gap-4">
                <a href="/login" class="px-6 py-2 text-white bg-ncheorange hover:bg-orange-600 rounded">Log in</a>
                <a href="/register" class="px-6 py-2 text-ncheorange border border-ncheorange hover:bg-ncheorange hover:text-white rounded">Register</a>
            </div>
        </div>

        <!-- Footer -->
        <div class="bg-gray-100 text-center text-sm text-gray-600 py-4">
            &copy; {{ date('Y') }} NCHE Malawi. All rights reserved.
        </div>
    </div>
</body>
</html>
