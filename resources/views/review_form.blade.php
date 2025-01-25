<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Review</title>
    @vite(['resources/css/app.css']) {{-- For Tailwind (optional) --}}
</head>
<body class="bg-gray-100 p-8">
<div class="max-w-md mx-auto bg-white rounded-lg shadow p-6">
    <h1 class="text-xl font-bold mb-4">Create Review</h1>

    <!-- Display Validation Errors -->
    @if ($errors->any())
        <div class="mb-4">
            <ul class="text-red-500">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
@endif

<!-- Review Form -->
    <form action="{{ route('reviews.store') }}" method="POST">
    @csrf

    <!-- User Select -->
        <div class="mb-4">
            <label for="user_id" class="block text-sm font-medium text-gray-700">Select User</label>
            <select name="user_id" id="user_id" class="w-full p-2 border border-gray-300 rounded">
                <option value="" disabled selected>Select a user</option>
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Note Textarea -->
        <div class="mb-4">
            <label for="note" class="block text-sm font-medium text-gray-700">Note</label>
            <textarea name="note" id="note" rows="4" class="w-full p-2 border border-gray-300 rounded"></textarea>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600">
            Submit Review
        </button>
    </form>
</div>
</body>
</html>
