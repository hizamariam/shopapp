<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Weka bidhaa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="max-w-xl mx-auto">
        <div class="flex justify-between items-center mt-3">
            <h1 class="text-2xl">Bidhaa Zilizopo</h1>
            <a class="bg-blue-500 text-white px-2 py-1 rounded-md shadow-md" href="/admin/products/create">Ongeza bidhaa</a>
        </div>
        <hr class="mt-3">
        <table class="w-full">
            <thead>
                <tr>
                    <th class="text-left border">s/n</th>
                    <th class="text-left border">Jina la bidhaa</th>
                    <th class="text-left border">Maelezo ya bidhaa</th>
                    <th class="text-left border">Bei ya bidhaa</th>
                    <th class="text-left border"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td class="border">{{ $loop->index+1 }}</td>
                    <td class="border">{{ $product->name }}</td>
                    <td class="border">{{ $product->maelezo }}</td>
                    <td class="border">{{ $product->bei }}</td>
                    <td class="border p-1.5">
                        <a class="bg-green-500 text-white rounded-md px-2 py-1 shadow-md" href="/admin/products/{{$product->id}}/edit'">Edit</a>
                    </td>
                    <td class="border p-1.5">
                        <a class="bg-red-500 text-white rounded-md px-2 py-1 shadow-md" href="/admin/products/{{$product->id}}/destroy'">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-3">
            {{ $products->links() }}
        </div>
    </div>
</body>
</html>
