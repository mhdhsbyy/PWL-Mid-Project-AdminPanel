<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="/src/output.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        body{
            font-family:'Poppins',sans-serif;
        }
    </style>

</head>
<body class="bg-gray-100">
    <header class="bg-white shadow-md px-6 py-4 flex justify-between items-center">
        <h1 class="text-xl font-semibold text-gray-700">
            AdminPanel
        </h1>

        <div class="flex items-center gap-4">
            <i class='bx bx-search absolute left-3 top-2.5 text-2xl text-gray-400'></i>
            <input type="text" placeholder="Search..." 
            class="border rounded-lg px-3 py-1">

            <div class="p-2.5 bg-gray-300 rounded-full flex items-center justify-center p-2.5">
                <i class='bx bx-user text-2xl'></i>
            </div>
        </div>
    </header>
    <div class="flex">
        <aside class="w-64 bg-gray-900 text-gray-200 min-h-screen p-5">
            <h2 class="text-xl font-bold mb-8">AdminPanel</h2>
            <nav class="space-y-2">
                <a class="block p-3 rounded-lg bg-gray-800">Dashboard</a>
                <a class="block p-3 rounded-lg hover:bg-gray-800">Users</a>
                <a class="block p-3 rounded-lg hover:bg-gray-800">Products</a>
                <a class="block p-3 rounded-lg hover:bg-gray-800">Orders</a>
                <a class="block p-3 rounded-lg hover:bg-gray-800">Reports</a>
            </nav>
        </aside>

        <!-- Bagian Ivan -->
        <main class="flex-1 p-8">
            <h1 class="text-2xl font-semibold text-gray-700 mb-6">Dashboard Overview</h1>

                        <div class="grid grid-cols-4 gap-6 mb-8">

                            <div class="bg-white p-6 rounded-xl shadow">
                                <p class="text-gray-500">Total Users</p>
                                <h2 class="text-3xl font-bold">100</h2>
                            </div>

                            <div class="bg-white p-6 rounded-x shadow">
                                <p class="text-gray-500">Total Orders</p>
                                <h2 class="text-3xl font-bold">150</h2>
                            </div>

                            <div class="bg-white p-6 rounded-xl shadow">
                                <p class="text-gray-500">Revenue</p>
                                <h2 class="text-3xl font-bold">Rp 3.500.000</h2>
                            </div>

                            <div class="bg-white p-6 rounded-xl shadow">
                                <p class="text-gray-500">Products</p>
                                <h2 class="text-3xl font-bold">200</h2>
                            </div>
                        </div>           

                        <!-- Bagian Alwi  tabel users dan footer -->
                         <div class="bg-white p-6 rounded-xl shadow">

                <h2 class="text-lg font-semibold mb-4">
                    Recent Users
                </h2>

                <table class="w-full text-left">
                    <thead class="border-b">
                        <tr class="text-gray-600">
                            <th class="py-2">Name</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Role</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr class="border-b hover:bg-gray-50">
                            <td class="py-3">Muhammad Hasby Ash Shiddiqie</td>
                            <td>mhdhsbyy@gmail.com</td>
                            <td>
                                <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">
                                Active
                                </span>
                            </td>
                            <td>Admin</td>
                        </tr>
                        <tr class="border-b hover:bg-gray-50">
                            <td class="py-3">Ivan Destian</td>
                            <td>ivan@gmail.com</td>
                            <td>
                            <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">
                            Active
                            </span>
                            </td>
                            <td>User</td>
                        </tr>
                        <tr class="border-b hover:bg-gray-50">
                            <td class="py-3">Syahrial Alwi</td>
                            <td>alwi@gmail.com</td>
                            <td>
                            <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-sm">
                            Pending
                            </span>
                            </td>
                            <td>User</td>
                        </tr>
                    </tbody>
                </table>
                
            </div>
    </div>
        </main>

        <footer class="bg-white text-center py-3 border-t">
    © 2026 Admin Dashboard
    </footer>
        
            
</body>
</html>
