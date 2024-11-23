
<style>
.top-right-icons {
      position: fixed;
      top: 10px;
      right: 80px;
      z-index: 9999;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 15px;
    }

    .top-right-icons a {
      font-size: 24px;
      color: #333;
      text-decoration: none; 
    }

    .top-right-icons a:hover {
      color: #007bff;
    }

    .top-right-icons h2 {
      
      color: black;
      text-decoration: none;
    }


    /* User info section */
    .user-info {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .user-info h2 {
      font-size: 18px;
      margin: 0;
      color: black !important; 
    }

    .user-info img {
      width: 30px;
      height: 30px;
      border-radius: 50%;
      object-fit: cover;
      border: 2px solid black; 
    }
        
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<!-- Top-right icons section -->
<div class="top-right-icons">
    <a href="./Notification.php"><i class="bi bi-bell-fill"></i></a>
    <a href="./settings.php"><i class="bi bi-person-circle"></i></a>
    <h2>John Doe</h2>
    <img src="" alt="profile-image">
</div>

<aside class="w-64 bg-indigo-700 text-white flex flex-col p-6 hidden md:block md:w-1/4 lg:w-1/5 xl:w-1/6">
    <h2 class="text-2xl font-bold mb-6 text-center">Dashboard</h2>
    <nav class="space-y-4">
        <a href="admin_dashboard.php" class="block py-2 px-3 rounded hover:bg-indigo-600">Dashboard</a>
        
        <!-- Procurement Process with Dropdown -->
        <div x-data="{ open: false }" class="relative">
            <!-- Make this an anchor tag for proper navigation -->
            <a href="./procurement.php" @click="open = !open" class="w-full flex justify-between items-center py-2 px-3 rounded hover:bg-indigo-600">
                Procurement Process
                <svg :class="{ 'rotate-180': open }" class="w-4 h-4 transform transition-transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </a>
            <div x-show="open" class="mt-2 pl-6 space-y-2">
                <a href="./app.php" class="block py-2 px-3 rounded hover:bg-indigo-600">APP</a>
                <a href="./ppmp.php" class="block py-2 px-3 rounded hover:bg-indigo-600">PPMP</a>
                <a href="./pr.php" class="block py-2 px-3 rounded hover:bg-indigo-600">PR</a>
                <a href="pr.php" class="block py-2 px-3 rounded hover:bg-indigo-600">PMAF</a>
                <a href="./rfq.php" class="block py-2 px-3 rounded hover:bg-indigo-600">RFQ</a>
                <a href="./aoq.php" class="block py-2 px-3 rounded hover:bg-indigo-600">AOQ</a>
                <a href="pr.php" class="block py-2 px-3 rounded hover:bg-indigo-600">RESO</a>
                <a href="pr.php" class="block py-2 px-3 rounded hover:bg-indigo-600">NOA</a>
                <a href="pr.php" class="block py-2 px-3 rounded hover:bg-indigo-600">NTP</a>
                <a href="pr.php" class="block py-2 px-3 rounded hover:bg-indigo-600">PO</a>
                <a href="pr.php" class="block py-2 px-3 rounded hover:bg-indigo-600">PMR</a>
            </div>
        </div>
        <a href="logout.php" class="block py-2 px-3 rounded hover:bg-indigo-600">Log Out</a>
    </nav>
</aside>
