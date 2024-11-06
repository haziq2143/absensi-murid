<nav aria-label="menu nav" class="bg-slate-500 pt-2 md:pt-1 pb-1 px-1 mt-0 h-auto fixed w-full z-20 top-0">

    <div class="flex flex-wrap items-center justify-center w-full ">
        <div class="flex flex-shrink w-1/2 justify-start  text-slate-700">
            <a href="#" aria-label="Home">
                <span class="text-xl pl-2"><i class="em em-grinning"></i></span>
            </a>
        </div>


        <div class=" pt-2 w-1/2">
            <ul class="list-reset flex justify-end">
                <li class="md:mr-3">
                    <div class="relative inline-block">
                        <button onclick="toggleDD('myDropdown')" class="drop-button text-slate-100 py-2 px-2">
                            <span class="pr-2"><i class="em em-user"></i></span> Hi, User <svg
                                class="h-3 fill-current inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg></button>
                        <div id="myDropdown"
                            class="dropdownlist absolute bg-yellow-500 text-slate-100 right-0 mt-3 p-3 overflow-auto z-30 invisible">
                            <a href="#"
                                class="p-2 hover:bg-yellow-400 text-white text-sm no-underline hover:no-underline hover:text-red-500  block md:hidden">
                                Add Teacher</a>
                            <a href="#"
                                class="p-2 hover:bg-yellow-400 text-white text-sm no-underline hover:no-underline hover:text-red-500  block md:hidden">
                                Add Student</a>
                            <div class="border border-slate-100"></div>
                            <a href="/logout"
                                class="p-2 hover:bg-yellow-400 text-white text-sm no-underline hover:no-underline hover:text-red-500 block"><i
                                    class="fas fa-sign-out-alt fa-fw"></i> Log Out</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

</nav>
