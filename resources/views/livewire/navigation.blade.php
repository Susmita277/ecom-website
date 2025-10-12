
<nav class="font-poppins lg:block hidden px-12 py-2 bg-white " x-data>
    <ul class="flex  justify-between items-center">
        <a href="">
            <li class="flex gap-0 items-center ">
                <img src="logo.png" alt="logo" class=" w-[120px] object-cover object-center">

            </li>
        </a>

        <li class="flex items-center gap-8 ">
            <div class="flex gap-8 items-center transition-all smooth ">
                <h5 class="hover:text-primary">Home</h5>

                <div class=" group  inline-block ">
                    <h5 class="group-hover:text-primary z-50">Women</h5>
             
                </div>
                <div class=" group ">
                    <h5 class="group-hover:text-primary">Men</h5>
                </div>
                <div class=" group ">
                    <h5 class="group-hover:text-primary">Kids</h5>
    
                </div>



            
                    <h5 class="hover:text-primary">All</h5>
                

            </div>
            <div class="flex gap-4">

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6" @click.prevent="$store.modal.showSearchModal()">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>

                <label for="wishlist"  class="relative">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                    </svg>

                    {{-- <span x-show="$store.app.wishlist.length > 0"
                        class="absolute top-1  -right-px w-2 h-2 bg-red-500 rounded-full flex text-white items-center justify-center"></span> --}}
                </label>



                <a href="" class="relative">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                    </svg>

                    <span
                        class="absolute top-1  -right-px w-2 h-2 bg-red-500 rounded-full flex text-white items-center justify-center"></span>
                </a>

                <div class="relative group">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                    </svg>
                    <div
                        class="absolute px-5 py-2 bg-white  translate py-4 -translate-x-[110px] w-[150px] group-hover:block hidden top-full">
                        
                            <div>
                                <p class="py-1 cursor-pointer" @click.prevent="$store.modal.showLogin()">Sign in</p>
                                <p class="py-1 cursor-pointer" @click.prevent="$store.modal.showSignup()">Sign up</p>
                            </div>
                    

                         

                    </div>

                </div>


            </div>

        </li>
    </ul>
</nav>




                  