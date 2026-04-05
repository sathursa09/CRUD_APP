<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h1 class="text-3xl font-bold text-center mb-6 text-gray-800">Edit Student</h1>
        <form method="POST" action="/update/{{ $student->id }}" class="space-y-4">
            @csrf
            @method('PUT')
            <div>
                <label for="student_name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" id="student_name" name="student_name" value="{{ $student->name }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" required>
            </div>
            <div>
                <label for="student_course" class="block text-sm font-medium text-gray-700">Course</label>
                <input type="text" id="student_course" name="student_course" value="{{ $student->course }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" required>
            </div>
            <div>
                <label for="student_marks" class="block text-sm font-medium text-gray-700">Marks</label>
                <input type="number" id="student_marks" name="student_marks" value="{{ $student->marks }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" required>
            </div>
            <div class="flex justify-between">
                <a href="/" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Back</a>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update</button>
            </div>
        </form>

        @if($errors->any())
            <div class="mt-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                <ul class="list-disc list-inside">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</body>
</html>
