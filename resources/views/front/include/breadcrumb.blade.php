<nav class="" aria-label="Breadcrumb">
    <div class="container">
        <div class="py-5 px-5 primary-bg">
            <h2 class="text-white text-2xl font-semibold mb-5">{{$page_title}}</h2>
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="{{route('homepage')}}" class="inline-flex items-center text-sm font-medium text-white hover:text-gray-200 dark:text-gray-400 dark:hover:text-white">
                        <svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                        Home
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                        <a href="#" class="ml-1 text-sm font-medium text-white hover:text-gray-200 md:ml-2 dark:text-gray-200 dark:hover:text-white">{{$page_title}}</a>
                    </div>
                </li>
            </ol>
        </div>
    </div>
</nav>
