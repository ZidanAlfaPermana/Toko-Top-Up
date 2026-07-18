<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Modern</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-gray-900 text-white flex">


    <aside id="sidebar" class="fixed top-0 left-0 h-full w-[250px] bg-gray-800 border-r border-gray-700 flex flex-col transition-all duration-300 z-50">
        <header class="relative flex items-center p-4 w-full h-[70px]">
            <div id="full-logo" class="flex items-center gap-3 w-full transition-all duration-300">
                <img src="https://img.icons8.com/fluency/48/shortcuts.png" alt="CodingLab Logo" class="w-10 h-10 object-contain flex-shrink-0">
                <div class="flex flex-col whitespace-nowrap sidebar-text">
                    <span class="font-bold text-white">CodingLab</span>
                    <span class="text-xs text-gray-400">Web Developer</span>
                </div>
            </div>
            <button id="toggle-btn" class="absolute -right-3.5 top-[25px] bg-blue-600 text-white rounded-full w-7 h-7 flex items-center justify-center shadow-md z-[60] border-2 border-gray-900 transition-all duration-300">
                <i class='bx bx-chevron-left text-lg transition-transform duration-300'></i>
            </button>
        </header>

        <div class="flex flex-col flex-grow px-3 mt-4 w-full">
            <ul class="space-y-2">
                <li class="flex items-center bg-gray-700 rounded-lg p-2 transition-all duration-300">
                    <i class='bx bx-search-alt text-xl text-gray-400'></i>
                    <input type="text" placeholder="Search..." class="bg-transparent outline-none ml-3 text-sm w-full text-white placeholder-gray-400 sidebar-text">
                </li>

                <li class="nav-link">
                    <a href="{{ url('/') }}" class="menu-item flex items-center p-3 hover:bg-blue-600 rounded-lg transition-all duration-300 ease-out hover:translate-x-2 active:scale-95 {{ Request::is('/') ? 'bg-blue-600' : '' }}">
                        <i class='bx bx-home text-xl'></i> <span class="ml-4 sidebar-text">Dashboard</span>
                    </a>
                </li>

               <li class="nav-link">
                    <a href="{{ url('/categories') }}" class="menu-item flex items-center p-3 hover:bg-blue-600 rounded-lg transition-all duration-300 ease-out hover:translate-x-2 active:scale-95 {{ Request::is('categories') ? 'bg-blue-600' : '' }}">
                        <i class='bx bx-category text-xl'></i> <span class="ml-4 sidebar-text">Categories</span>
                    </a>
                </li>

                  <li class="nav-link">
                    <a href="{{ url('/products') }}" class="menu-item flex items-center p-3 hover:bg-blue-600 rounded-lg transition-all duration-300 ease-out hover:translate-x-2 active:scale-95 {{ Request::is('products') ? 'bg-blue-600' : '' }}">
                        <i class='bx bx-package text-xl'></i> <span class="ml-4 sidebar-text">Products</span>
                    </a>
                </li>


                <li class="nav-link">
                    <a href="{{ url('/orders') }}" class="menu-item flex items-center p-3 hover:bg-blue-600 rounded-lg transition-all duration-300 ease-out hover:translate-x-2 active:scale-95 {{ Request::is('orders') ? 'bg-blue-600' : '' }}">
                        <i class='bx bx-shopping-bag text-xl'></i> <span class="ml-4 sidebar-text">Orders</span>
                    </a>
                </li>


                <li class="nav-link">
                    <a href="{{ url('/customers') }}" class="menu-item flex items-center p-3 hover:bg-blue-600 rounded-lg transition-all duration-300 ease-out hover:translate-x-2 active:scale-95 {{ Request::is('customers') ? 'bg-blue-600' : '' }}">
                        <i class='bx bx-user text-xl'></i> <span class="ml-4 sidebar-text">Customers/Users</span>
                    </a>
                </li>


            </ul>

            <div class="mt-auto pb-6 w-full list-none">
                <li>
                    <a href="{{ url('/logout') }}" class="logout-link flex items-center p-3 text-white hover:bg-red-500 rounded-lg transition-all duration-300 cursor-pointer">
                        <i class='bx bx-log-out text-xl'></i>
                        <span class="ml-4 sidebar-text">Logout</span>
                    </a>
                </li>
                <div id="profile-box" class="flex items-center p-3 bg-gray-700 rounded-lg w-full transition-all duration-300 cursor-pointer hover:bg-gray-600 active:-translate-y-1 active:shadow-xl active:scale-[1.02] mt-2">
                    <div class="w-10 h-10 rounded-full bg-blue-500 flex items-center justify-center font-bold flex-shrink-0">US</div>
                    <div class="ml-3 sidebar-text">
                        <p class="text-sm font-semibold">Nama User</p>
                        <p class="text-[10px] text-gray-400">user@example.com</p>
                    </div>
                </div>
            </div>
        </div>
    </aside>

    <section id="main-content" class="ml-[250px] p-8 w-full transition-all duration-300 flex flex-col min-h-screen">
        <div class="flex-grow">
            @yield('content')
        </div>



     <style>
        @keyframes footerFadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes pop {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        .footer-animate { animation: footerFadeIn 0.6s ease-out forwards; }
        .logout-pop { animation: pop 0.4s ease-out forwards; }
     </style>

     <script>
        // Logika Sidebar Toggle
        const sidebar = document.getElementById('sidebar');
        const toggleBtn = document.getElementById('toggle-btn');
        const icon = toggleBtn.querySelector('i');
        const mainContent = document.getElementById('main-content');
        const sidebarTexts = document.querySelectorAll('.sidebar-text');

        toggleBtn.addEventListener('click', () => {
            const isCollapsed = sidebar.classList.contains('w-[80px]');
            if (!isCollapsed) {
                sidebar.classList.replace('w-[250px]', 'w-[80px]');
                mainContent.classList.replace('ml-[250px]', 'ml-[80px]');
                icon.classList.add('rotate-180');
                sidebarTexts.forEach(t => t.classList.add('hidden'));
            } else {
                sidebar.classList.replace('w-[80px]', 'w-[250px]');
                mainContent.classList.replace('ml-[80px]', 'ml-[250px]');
                icon.classList.remove('rotate-180');
                sidebarTexts.forEach(t => t.classList.remove('hidden'));
            }
        });

        // Logika Logout Dinamis (Gabungan Animasi Pop & SweetAlert2)
        const logoutLink = document.querySelector('.logout-link');
        logoutLink.addEventListener('click', function(e) {
            e.preventDefault(); // Tahan pemindahan halaman instan
            const url = this.getAttribute('href');

            // Jalankan animasi pop visual terlebih dahulu
            this.classList.add('logout-pop');

            // Munculkan popup konfirmasi SweetAlert2 yang modern
            Swal.fire({
                title: 'Yakin ingin keluar?',
                text: "Anda akan diarahkan kembali ke halaman utama.",
                icon: 'warning',
                background: '#1f2937', // Menyesuaikan tema gelap gray-800
                color: '#fff',
                showCancelButton: true,
                confirmButtonColor: '#ef4444', // Red-500 Tailwind
                cancelButtonColor: '#3b82f6',  // Blue-500 Tailwind
                confirmButtonText: 'Ya, Logout!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                // Bersihkan class animasi setelah popup selesai merespon
                logoutLink.classList.remove('logout-pop');

                if (result.isConfirmed) {
                    // Jika klik ya, langsung meluncur ke rute Laravel /logout
                    window.location.href = url;
                }
            });
        });
      </script>

      <footer class="mt-12 py-12 border-t border-slate-800 text-slate-400 footer-animate">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
        <div class="col-span-1">
            <div class="flex items-center gap-3 mb-4 w-full">
                <img src="https://img.icons8.com/fluency/48/shortcuts.png" alt="Logo" class="w-10 h-10 object-cover flex-shrink-0 filter brightness-90">
                <div class="flex flex-col whitespace-nowrap">
                    <span class="font-bold text-white text-base">CodingLab</span>
                    <span class="text-xs text-slate-500">Web Developer</span>
                </div>
            </div>
            <div class="w-full h-[1px] bg-slate-800 mb-3"></div>
            <p class="text-sm text-slate-600">Building better web solutions since 2021.</p>
        </div>
        <div>
            <h4 class="text-white font-semibold mb-4 text-xs uppercase tracking-widest">Explore</h4>
            <ul class="space-y-3 text-sm">
                <li><a href="#" class="inline-block transition-all duration-300 hover:text-blue-400 hover:scale-105 active:scale-95 active:opacity-70">About Us</a></li>
                <li><a href="#" class="inline-block transition-all duration-300 hover:text-blue-400 hover:scale-105 active:scale-95 active:opacity-70">Our Services</a></li>
                <li><a href="#" class="inline-block transition-all duration-300 hover:text-blue-400 hover:scale-105 active:scale-95 active:opacity-70">Blog</a></li>
            </ul>
        </div>
        <div>
            <h4 class="text-white font-semibold mb-4 text-xs uppercase tracking-widest">Support</h4>
            <ul class="space-y-3 text-sm">
                <li><a href="#" class="inline-block transition-all duration-300 hover:text-blue-400 hover:scale-105 active:scale-95 active:opacity-70">FAQ</a></li>
                <li><a href="#" class="inline-block transition-all duration-300 hover:text-blue-400 hover:scale-105 active:scale-95 active:opacity-70">Contact Us</a></li>
            </ul>
        </div>
        <div>
            <h4 class="text-white font-semibold mb-4 text-xs uppercase tracking-widest">Connect</h4>
            <ul class="space-y-3 text-sm">
                <li><a href="#" class="hover:text-blue-400 transition-colors">LinkedIn</a></li>
                <li><a href="#" class="hover:text-blue-400 transition-colors">GitHub</a></li>
            </ul>
        </div>
    </div>
    <div class="mt-12 pt-6 border-t border-slate-800/50 flex justify-between text-xs text-slate-600">
        <p>&copy; 2026 CodingLab. All rights reserved.</p>
        <p>Designed with <span class="text-red-500">♥</span> for developers.</p>
    </div>
</footer>
    </section>



</body>
</html>
