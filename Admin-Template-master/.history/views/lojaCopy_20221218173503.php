<header>
    <!--Nav-->
    <nav aria-label="menu nav" class="bg-gray-800 pt-2 md:pt-1 pb-1 px-1 mt-0 h-auto fixed w-full z-20 top-0">

        <div class="flex flex-wrap items-center">
            <div class="flex flex-shrink md:w-1/3 justify-center md:justify-start text-white">
                <a href="#" aria-label="Home">
                    <img class="w-20 ml-8" src="img/logo.png" alt="">
                </a>
            </div>

            <div class="flex flex-1 md:w-1/3 justify-center md:justify-start text-white px-2">
                <span class="relative w-full">
                    <input aria-label="search" type="search" id="search" placeholder="Search" class="w-full bg-gray-900 text-white transition border border-transparent focus:outline-none focus:border-gray-400 rounded py-3 px-2 pl-10 appearance-none leading-normal">
                    <div class="absolute search-icon" style="top: 1rem; left: .8rem;">
                        <svg class="fill-current pointer-events-none text-white w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path>
                        </svg>
                    </div>
                </span>
            </div>

            <div class="flex w-full pt-2 content-center justify-between md:w-1/3 md:justify-end">
                <ul class="list-reset flex justify-between flex-1 md:flex-none items-center">
                    <li class="flex-1 md:flex-none md:mr-3">
                        <a class="inline-block py-2 px-4 text-white no-underline" href="#">Active</a>
                    </li>
                    <li class="flex-1 md:flex-none md:mr-3">
                        <a class="inline-block text-gray-400 no-underline hover:text-gray-200 hover:text-underline py-2 px-4" href="#">link</a>
                    </li>
                    <li class="flex-1 md:flex-none md:mr-3">
                        <div class="relative inline-block">
                            <button onclick="toggleDD('myDropdown')" class="drop-button text-white py-2 px-2"> <span class="pr-2"><i class="em em-robot_face"></i></span> Hi, User <svg class="h-3 fill-current inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" /></svg></button>
                            <div id="myDropdown" class="dropdownlist absolute bg-gray-800 text-white right-0 mt-3 p-3 overflow-auto z-30 invisible">
                                <input type="text" class="drop-search p-2 text-gray-600" placeholder="Search.." id="myInput" onkeyup="filterDD('myDropdown','myInput')">
                                <a href="#" class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block"><i class="fa fa-user fa-fw"></i> Profile</a>
                                <a href="#" class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block"><i class="fa fa-cog fa-fw"></i> Settings</a>
                                <div class="border border-gray-800"></div>
                                <a href="#" class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block"><i class="fas fa-sign-out-alt fa-fw"></i> Log Out</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </nav>
</header>


<main>

    <div class="flex flex-col md:flex-row">
        <nav aria-label="alternative nav">
            <div class="bg-gray-800 shadow-xl h-20 fixed bottom-0 mt-12 md:relative md:h-screen z-10 w-full md:w-48 content-center">

                <div class="md:mt-12 md:w-48 md:fixed md:left-0 md:top-0 content-center md:content-start text-left justify-between">
                    <ul class="list-reset flex flex-row md:flex-col pt-3 md:py-3 px-1 md:px-2 text-center md:text-left">
                        <li class="mr-3 flex-1">
                            <a href="#" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-blue-600">
                                <i class="fas fa-tasks pr-0 md:pr-3 text-blue-600"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-white md:text-white block md:inline-block">Tasks</span>
                            </a>
                        </li>
                        <li class="mr-3 flex-1">
                            <a href="painel.php?r=lojaCopy" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-purple-500">
                                <i class="fa fa-envelope pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Messages</span>
                            </a>
                        </li>
                        <li class="mr-3 flex-1">
                            <a href="painel.php?r=loja" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-purple-500">
                                <i class="fa fa-envelope pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Messages</span>
                            </a>
                        </li>
                        <li class="mr-3 flex-1">
                            <a href="painel.php?r=menu" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-purple-500">
                                <i class="fas fa-chart-area pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-white md:text-white block md:inline-block">Analytics</span>
                            </a>
                        </li>
                        <li class="mr-3 flex-1">
                            <a href="#" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-red-500">
                                <i class="fa fa-wallet pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Payments</span>
                            </a>
                        </li>
                        <li class="mr-3 flex-1">
                            <a href="#" id="dropdownDefault" data-dropdown-toggle="dropdown" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-red-500">
                                <i class="fa-solid fa-clipboard-list pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Pedidos</span>
                            </a>
                        
        <!-- Dropdown menu -->
                                <div id="dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                                <li>
                                    <a href="painel.php?r=concluidos" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Concluidos</a>
                                </li>
                                <li>
                                    <a href="painel.php?r=cancelados" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Cancelados</a>
                                </li>
                                <li>
                                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                </li>
                                <li>
                                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
                                </li>
                                </ul>
                            </div>
                         </li>
                    </ul>
                </div>


            </div>
        </nav>
        <section class="w-full">
          <div id="main" class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">
            <div class="bg-gray-800 pt-3">
                <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
                      <h1 class="font-bold pl-2">Pedidos Cancelados</h1>
                </div>
            </div>
            <div  class="flex flex-row flex-wrap flex-grow mt-2 ml-14 ">
                    <div  class="mt-10 sm:mt-0 ">
                        <div id="full" class="md:grid md:grid-cols-3 md:gap-6">
                            <div  class="mt-5 md:col-span-2 md:mt-0  ">
                                <form  action="#" method="POST">
                                    <div  class="overflow-hidden shadow sm:rounded-md ">
                                      <div  class="bg-white px-4 py-5 sm:p-6">
                                                <div  class="grid grid-cols-6 gap-6">
                                                        <div class="col-span-6 sm:col-span-6">
                                                        <label for="establecimento-name" class="block text-sm font-medium text-gray-700">Nome</label>
                                                        <input type="text" name="estabelecimento-name" id="estabelecimento-name" autocomplete="given-name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                                                        </div>
                                        
                                                       
                                        
                                            
                            
                                        
                                                        <div class="col-span-3">
                                                        <label for="street-address" class="block text-sm font-medium text-gray-700">Endereço</label>
                                                        <input type="text" name="street-address" id="street-address" autocomplete="street-address" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                        </div>

                                                        <div class="col-span-3">
                                                        <label for="street-address" class="block text-sm font-medium text-gray-700">Bairro</label>
                                                        <input type="text" name="street-address" id="street-address" autocomplete="street-address" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                        </div>
                                        
                                                        <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                                        <label for="city" class="block text-sm font-medium text-gray-700">Cidade</label>
                                                        <input type="text" name="city" id="city" autocomplete="address-level2" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                        </div>
                                        
                                                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                                        <label for="region" class="block text-sm font-medium text-gray-700">Estado</label>
                                                        <input type="text" name="region" id="region" autocomplete="address-level1" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                        </div>
                                        
                                                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                                        <label for="postal-code" class="block text-sm font-medium text-gray-700">Cep</label>
                                                        <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                        </div>
                                                    </div>  
        
        </div>
        
          





        </section>

</main>




<script>
    /*Toggle dropdown list*/
    function toggleDD(myDropMenu) {
        document.getElementById(myDropMenu).classList.toggle("invisible");
    }
    /*Filter dropdown options*/
    function filterDD(myDropMenu, myDropMenuSearch) {
        var input, filter, ul, li, a, i;
        input = document.getElementById(myDropMenuSearch);
        filter = input.value.toUpperCase();
        div = document.getElementById(myDropMenu);
        a = div.getElementsByTagName("a");
        for (i = 0; i < a.length; i++) {
            if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
                a[i].style.display = "";
            } else {
                a[i].style.display = "none";
            }
        }
    }
    // Close the dropdown menu if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.drop-button') && !event.target.matches('.drop-search')) {
            var dropdowns = document.getElementsByClassName("dropdownlist");
            for (var i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (!openDropdown.classList.contains('invisible')) {
                    openDropdown.classList.add('invisible');
                }
            }
        }
    }
</script>



