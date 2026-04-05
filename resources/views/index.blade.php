<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-4xl">
        <h1 class="text-3xl font-bold text-center mb-6 text-gray-800">Student List</h1>
        
        @if(session('success'))
            <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
                {{ session('success') }}
            </div>
        @endif
        
        @if(session('warning'))
            <div class="mb-4 p-4 bg-yellow-100 border border-yellow-400 text-yellow-700 rounded">
                {{ session('warning') }}
            </div>
        @endif
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-300 rounded-lg">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="py-3 px-4 text-left text-sm font-semibold text-gray-700 border-b">Name</th>
                        <th class="py-3 px-4 text-left text-sm font-semibold text-gray-700 border-b">Course</th>
                        <th class="py-3 px-4 text-left text-sm font-semibold text-gray-700 border-b">Marks</th>
                        <th class="py-3 px-4 text-left text-sm font-semibold text-gray-700 border-b">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $student)
                    <tr class="hover:bg-gray-50">
                        <td class="py-3 px-4 text-sm text-gray-900 border-b">{{ $student->name }}</td>
                        <td class="py-3 px-4 text-sm text-gray-900 border-b">{{ $student->course }}</td>
                        <td class="py-3 px-4 text-sm text-gray-900 border-b">{{ $student->marks }}</td>
                        <td class="py-3 px-4 text-sm border-b space-x-2">
                            <a href="/edit/{{ $student->id }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded text-xs">Edit</a>
                            <form action="/delete/{{ $student->id }}" method="POST" class="inline">
                                @csrf @method('DELETE')
                                <button onclick="return confirm('Are you sure?')" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded text-xs">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-6 text-center">
            <a href="/add" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Add New Student</a>
        </div>
    </div>
</body>
</html>


