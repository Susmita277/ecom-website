<div class="p-12">
    <h3 class="pb-4">Women Accessories</h3>
    <div class="sticky top-14 z-50 bg-white">
    <div class="flex gap-8 text-gray-500 py-4">
        <span>Dresses</span>
        <span>Jackets</span>
        <span>Skirts</span>
    </div>
    <div class="flex justify-between gap-20  items-center  py-4">
        <ul class=" flex gap-4">
            <li class="flex gap-2 w-fit py-2 px-4 text-gray-800 rounded-full  border border-gray-200">
                <span>Category</span>
                <x-heroicon-s-chevron-down class="w-5 h-5 text-gray-500" />
            </li>
            <li class="flex gap-2 w-fit py-2 px-4 text-gray-800 rounded-full  border border-gray-200">
                <span>Price</span>
                <x-heroicon-s-chevron-down class="w-5 h-5 text-gray-500" />
            </li>
            <li class="flex gap-2 w-fit py-2 px-4 text-gray-800 rounded-full  border border-gray-200">
                <span>Color</span>
                <x-heroicon-s-chevron-down class="w-5 h-5 text-gray-500" />
            </li>
            <li class="flex gap-2 w-fit py-2 px-4 text-gray-800 rounded-full  border border-gray-200">
                <span>Size</span>
                <x-heroicon-s-chevron-down class="w-5 h-5 text-gray-500" />
            </li>
            <li class="flex gap-2 w-fit py-2 px-4 text-gray-800 rounded-full  border border-gray-200">
                <span>All Fliters</span>
                <x-heroicon-o-bars-3-center-left class="w-5 h-5 text-gray-500" />
            </li>
        </ul>
        <ul class="flex gap-4 items-center">
            <li><span class=" text-gray-500">1200 items</span></li>
            <li class="w-[2px] h-3 bg-gray-200"></li>
            <li><span class="capitalize text-gray-500">Sort By</span>
                <details class="dropdown">
                    <summary
                        class="flex justify-between w-40 py-2 px-4 text-gray-800 rounded-full  border border-gray-200">
                        <span>Featured</span>
                        <x-heroicon-s-chevron-down class="w-5 h-5 text-gray-500" />

                    </summary>
                    <ul class="menu dropdown-content bg-base-100 rounded-box z-1 w-40 p-2 shadow-sm  !text-gray-500 ">
                        <li><span class="!text-[12px]  capitalize">Price low-to-high </span></li>
                        <li><span class="!text-[12px] capitalize">Price high-to-low </span></li>
                    </ul>
                </details>
            </li>
        </ul>
    </div>
    </div>
    <div class="grid grid-cols-5 gap-8 pt-8">
        <x-partials.product />
        <x-partials.product />
        <x-partials.product />
        <x-partials.product />
        <x-partials.product />
        <x-partials.product />
        <x-partials.product />
        <x-partials.product />
        <x-partials.product />
        <x-partials.product />
    </div>
</div>
