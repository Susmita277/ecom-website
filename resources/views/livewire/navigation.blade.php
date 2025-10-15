<nav class="font-poppins lg:block hidden px-12 py-2 bg-white sticky top-0 z-50 " x-data>
    <ul class="flex  justify-between items-center">
        <a href="{{route('home')}}">
            <li class="flex gap-0 items-center w-[40px] h-[40px] overflow-hidden">
                <img src="logo.png" alt="logo" class="  object-cover w-full h-full object-center">

            </li>
        </a>

        <li class="flex items-center gap-8 ">
            <div class="flex gap-8 items-center transition-all smooth  text-gray-800">
                <a href="{{route('home')}}"><span class="hover:text-primary  cursor-pointer">Home</span></a>

                <div class=" group  inline-block ">
                    <span class="group-hover:text-primary z-50 cursor-pointer">Women</span>

                </div>
                <div class=" group ">
                    <span class="group-hover:text-primary cursor-pointer">Men</span>
                </div>
                <div class=" group ">
                    <span class="group-hover:text-primary cursor-pointer">Kids</span>

                </div>

                <a href="{{route('products')}}"><span class="hover:text-primary cursor-pointer">All</span></a>

            </div>
            <div class="flex gap-4">
                <x-heroicon-o-magnifying-glass class="w-5 h-5 " />
                <x-heroicon-o-heart class="w-5 h-5" />
                <x-heroicon-o-shopping-bag class="w-5 h-5" />
                <x-heroicon-o-user class="w-5 h-5"/>

            </div>

        </li>
    </ul>
</nav>
