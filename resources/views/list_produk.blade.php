<div class="ml-10 mt-20">
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"
        rel="stylesheet"/>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
    <table
        class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead
            class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">No</th>
                <th scope="col" class="px-6 py-3">Nama Produk</th>
                <th scope="col" class="px-6 py-3">
                    Deskripsi Produk</th>
                <th scope="col" class="px-6 py-3">Harga Produk</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($nama as $index => $item)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td class="px-6 py-4">{{  $index + 1 }}</td>
                <td class="px-6 py-4">{{  $item }}</td>
                <td class="px-6 py-4">{{  $desc[$index] }}</td>
                <td class="px-6 py-4">{{  $harga[$index] }}</td>
            </tr>
            @endforeach

        </tbody>
    </table>

</div>