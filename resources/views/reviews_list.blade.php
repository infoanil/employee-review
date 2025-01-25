<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $user->name }}'s Reviews</title>
    @vite(['resources/css/app.css']) {{-- For Tailwind (optional) --}}
</head>
<body class="bg-gray-100 p-8">
<div class="max-w-2xl mx-auto bg-white rounded-lg shadow p-6">
    <h1 class="text-2xl font-bold mb-4">{{ $user->name }}'s Reviews</h1>

    @if ($reviews->isEmpty())
        <p class="text-gray-500">No reviews available for this user.</p>
    @else
        <ul class="space-y-4">
            @foreach ($reviews as $review)
                <li class="border p-4 rounded shadow">
                    <p class="text-gray-800">{{ $review->note }}</p>
                    <span class="text-sm text-gray-500">Posted on {{ $review->created_at->format('d M, Y') }}</span>
                </li>
            @endforeach
        </ul>
    @endif

    <a href="{{ url('/') }}" class="block text-blue-500 mt-6">Go back</a>
</div>
</body>
</html>
