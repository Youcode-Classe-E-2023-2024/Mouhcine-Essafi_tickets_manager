<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>
<body>
<div class="bg-white">
    <nav class="bg-gray-900">
      <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
          <div class="flex items-center">
            <div class="flex-shrink-0">
            </div>
            <div class="hidden md:block">
              <div class="flex items-center ml-10">
                <input type="text" class="hidden px-4 py-1 text-sm text-white placeholder-white bg-gray-700 rounded-lg focus:outline-none focus:shadow-none lg:block" placeholder="Search or jump to...">
                <a href="#" class="px-3 py-2 ml-4 text-sm font-semibold text-white bg-gray-900 rounded-md focus:outline-none hover:bg-gray-700 focus:text-white focus:bg-gray-700">All recent tickets
                </a>
                <a href="#" class="px-3 py-2 ml-4 text-sm font-semibold text-gray-300 rounded-md hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Tickets to handle
                </a>
                <a href="#" class="px-3 py-2 ml-4 text-sm font-semibold text-gray-300 rounded-md hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">My open tickets
                </a>
              </div>
            </div>
          </div>
          <div class="hidden md:block">
            <div class="flex items-center ml-4 md:ml-6">
              <button class="p-1 text-gray-400 border-2 border-transparent rounded-full hover:text-white focus:outline-none focus:text-white focus:bg-gray-700" aria-label="Notifications">
                <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                </svg>
              </button>

              <div class="relative ml-3">
                <div>
                  <button class="flex items-center max-w-xs text-sm text-white rounded-full focus:outline-none focus:shadow-solid" id="user-menu" aria-label="User menu" aria-haspopup="true">
                    <img class="w-8 h-8 rounded-full" src="https://images.unsplash.com/photo-1592242481757-a0519c3d0d89?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="" />
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="flex -mr-2 md:hidden">
            <button class="inline-flex items-center justify-center p-2 text-gray-400 rounded-md hover:text-white hover:bg-gray-700 focus:outline-none focus:bg-gray-700 focus:text-white">
              <svg class="block w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
              </svg>
            </button>
          </div>
        </div>
      </div>
    </nav>
    <div class="px-6 mt-4 overflow-x-hidden lg:px-10">
      <div class="flex items-center justify-between px-10 mt-6 -mx-10 border-b select-none md:mt-4">
        <div class="flex">
          <div class="flex items-center px-4 pb-2 text-sm border-b-2 border-orange-400 cursor-pointer">
            Open
            <span class="flex items-center justify-center w-6 h-6 p-1 ml-1 text-xs bg-gray-200 rounded-full">38</span>
            </div>
          <div class="flex items-center px-4 pb-2 text-sm border-b-2 border-transparent cursor-pointer hover:border-gray-300">
            Pending
            <span class="flex items-center justify-center w-6 h-6 p-1 ml-1 text-xs bg-gray-200 rounded-full">129</span>
          </div>
          <div class="flex items-center px-4 pb-2 text-sm border-b-2 border-transparent cursor-pointer hover:border-gray-300">
            On hold
            <span class="flex items-center justify-center w-6 h-6 p-1 ml-1 text-xs bg-gray-200 rounded-full">38</span>
          </div>
          <div class="flex items-center px-4 pb-2 text-sm border-b-2 border-transparent cursor-pointer hover:border-gray-300 md:flex md:block">
              <path d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"></path></svg>
            Solved
            <span class="flex items-center justify-center w-6 h-6 p-1 ml-1 text-xs bg-gray-200 rounded-full">38</span>
          </div>
          <div class="flex items-center px-4 pb-2 text-sm border-b-2 border-transparent cursor-pointer hover:border-gray-300 md:block md:flex">
              <path d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path><path d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
              Closed
              <span class="flex items-center justify-center w-6 h-6 p-1 ml-1 text-xs bg-gray-200 rounded-full">38</span>
          </div>
        </div>
      </div>
    </div>
</div>
</body>
</html>