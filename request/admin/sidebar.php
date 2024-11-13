<!-- Sidebar -->
<aside class="w-64 bg-indigo-700 text-white flex flex-col p-6 hidden md:block md:w-1/4 lg:w-1/5 xl:w-1/6">
    <h2 class="text-2xl font-bold mb-6 text-center">Dashboard</h2>
    <nav class="space-y-4">
        <a href="admin_dashboard.php" class="block py-2 px-3 rounded hover:bg-indigo-600">Dashboard</a>
            
        <!-- Procurement Process with Dropdown -->
        <div x-data="{ open: false }" class="relative">
            <button @click="open = !open" class="w-full flex justify-between items-center py-2 px-3 rounded hover:bg-indigo-600">
                Procurement Process
                <svg :class="{ 'rotate-180': open }" class="w-4 h-4 transform transition-transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div x-show="open" class="mt-2 pl-6 space-y-2">
                <a href="app.php" class="block py-2 px-3 rounded hover:bg-indigo-600">APP</a>
                <a href="ppmp.php" class="block py-2 px-3 rounded hover:bg-indigo-600">PPMP</a>
                <a href="pr.php" class="block py-2 px-3 rounded hover:bg-indigo-600">PR</a>
                <a href="pr.php" class="block py-2 px-3 rounded hover:bg-indigo-600">PMAF</a>
                <a href="pr.php" class="block py-2 px-3 rounded hover:bg-indigo-600">RFQ</a>
                <a href="pr.php" class="block py-2 px-3 rounded hover:bg-indigo-600">AOQ</a>
                <a href="pr.php" class="block py-2 px-3 rounded hover:bg-indigo-600">RESO</a>
                <a href="pr.php" class="block py-2 px-3 rounded hover:bg-indigo-600">NOA</a>
                <a href="pr.php" class="block py-2 px-3 rounded hover:bg-indigo-600">NTP</a>
                <a href="pr.php" class="block py-2 px-3 rounded hover:bg-indigo-600">PO</a>
                <a href="pr.php" class="block py-2 px-3 rounded hover:bg-indigo-600">PMR</a>
            </div>
        </div>

        <!-- User -->
        <div x-data="{ open: false }" class="relative">
            <button @click="open = !open" class="w-full flex justify-between items-center py-2 px-3 rounded hover:bg-indigo-600">
                User
                <svg :class="{ 'rotate-180': open }" class="w-4 h-4 transform transition-transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div x-show="open" class="mt-2 pl-6 space-y-2">
                <a href="user.php" class="block py-2 px-3 rounded hover:bg-indigo-600">User Management</a>
      
            </div>
        </div>
        
        <a href="history.php" class="block py-2 px-3 rounded hover:bg-indigo-600">History Logs</a>
            
        <!-- Settings and Log Out -->
         <a href="settings.php" class="block py-2 px-3 rounded hover:bg-indigo-600">Settings</a>
         <a href="logout.php" class="block py-2 px-3 rounded hover:bg-indigo-600">Log Out</a>
    </nav>
</aside>
