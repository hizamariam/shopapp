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
        <div class="flex justify-between">
            <h1 class="text-2xl">Weka bidhaa</h1>
            <a class="bg-blue-500 text-white px-2 py-1 rounded-md"  href="/admin/products">Bidhaa zilizopo</a>
        </div>
        <hr class="mt-3">
        <form action="{{ $product->id?"/admin/products/$product->id/update":'/admin/products/store' }}" class="mt-3" method="POST">
            @csrf
            <div>
                <label for="jina">Jina la bidhaa</label>
                <input class="border border-gray-200 block w-full" value="{{ $product->jina }}" type="text" name="jina">
            </div>
            <div>
                <label for="maelezo">maelezo la bidhaa</label>
                <textarea name="maelezo" class="border border-gray-200 block w-full" cols="30" rows="10">{{ $product->maelezo }}</textarea>
            </div>
            <div>
                <label for="bei">bei la bidhaa</label>
                <input class="border border-gray-200 block w-full" value="{{ $product->bei }}" type="number" name="bei">
            </div>
            <div class="mt-3 text-right">
                <input class="bg-blue-500 text-white px-2 py-1 rounded-md" type="submit" value="Hifadhi">
            </div>
        </form>
    </div>
</body>
</html>
