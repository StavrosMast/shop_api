<div>
    <div>
        <!-- <div class="py-4 space-y-4 px-4">
            <input wire:model.live="search" type="text" placeholder="Search here..." class="rounded-lg">

        </div> -->
        <table class="table-auto w-full">
            <thead>
                <tr style="border-bottom: 1px solid black;">
                    <th class="px-4 py-2" style="padding:20px">Shop Name</th>
                    <th class="px-4 py-2" style="padding:20px">Shop Owner ID</th>
                    <th class="px-4 py-2" style="padding:20px">Shop Category ID</th>
                    <th class="px-4 py-2" style="padding:20px">Description</th>
                    <th class="px-4 py-2" style="padding:20px">Open Hours</th>
                    <th class="px-4 py-2" style="padding:20px">City</th>
                    <th class="px-4 py-2" style="padding:20px">Address</th>
                    <!-- Add more columns as needed -->
                </tr>
            </thead>
            <tbody>
                @foreach ($shops as $shop)
                <tr style="border-bottom: 1px solid black;">
                    <td class="px-4 py-2 mx-auto text-center" style="padding:20px">{{ $shop->name }}</td>
                    <td class="px-4 py-2 mx-auto text-center" style="padding:20px">{{ $shop->shop_owner_id }}</td>
                    <td class="px-4 py-2 mx-auto text-center" style="padding:20px">{{ $shop->shop_category_id }}</td>
                    <td class="px-4 py-2 mx-auto text-center" style="padding:20px">{{ $shop->description }}</td>
                    <td class="px-4 py-2 mx-auto text-center" style="padding:20px">{{ $shop->open_hours }}</td>
                    <td class="px-4 py-2 mx-auto text-center" style="padding:20px">{{ $shop->city }}</td>
                    <td class="px-4 py-2 mx-auto text-center" style="padding:20px">{{ $shop->address }}</td>
                    <!-- Add more table data cells for your product attributes -->
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>