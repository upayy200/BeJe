<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil</title>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }

    .fade-in {
      animation: fadeIn 0.5s ease-in-out;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
      }
      to {
        opacity: 1;
      }
    }
    /* Notifikasi Badge */
      .bg-blue-100 { background-color: #ebf8ff; }
      .bg-yellow-100 { background-color: #fff9db; }
      .bg-red-100 { background-color: #fddede; }

      .text-blue-800 { color: #2b6cb0; }
      .text-yellow-800 { color: #9a7b32; }
      .text-red-800 { color: #9b2c2c; }

      .font-semibold { font-weight: 600; }
      .font-medium { font-weight: 500; }

      .rounded-full { border-radius: 9999px; }

      .text-sm { font-size: 0.875rem; }
      .text-xs { font-size: 0.75rem; }

      /* Responsive Design */
      @media (max-width: 768px) {
        .content-section {
          padding: 15px;
        }
      }
      /* Transisi animasi untuk modal */
      #logoutModal {
        transition: opacity 0.3s ease;
      }

      #logoutModal.hidden {
        opacity: 0;
        visibility: hidden;
      }

      #logoutModal:not(.hidden) {
        opacity: 1;
        visibility: visible;
      }

  </style>
</head>
<body class="bg-gray-100">
  <!-- Navbar -->
  <nav class="bg-white shadow fixed w-full top-0 z-50">
    <div class="container mx-auto px-4 flex items-center justify-center h-16 space-x-6">
      <!-- Logo -->
      <a href="/" class="absolute left-4 flex items-center space-x-2">
        <img src="icon/logo.jpg" alt="Beje Logo" class="h-5">
        <span class="text-gray-700 font-bold text-lg hover:text-blue-500"></span>
      </a>

      <!-- Navigation Links -->
      <a href="/" class="text-sm text-gray-700 hover:text-blue-500 transition-transform transform hover:scale-105">Beranda</a>
      <a href="/furniture" class="text-sm text-gray-700 hover:text-blue-500 transition-transform transform hover:scale-105">Furniture</a>
      <a href="/fashion" class="text-sm text-gray-700 hover:text-blue-500 transition-transform transform hover:scale-105">Fashion</a>
      <a href="/elektronik" class="text-sm text-gray-700 hover:text-blue-500 transition-transform transform hover:scale-105">Elektronik</a>
      <a href="/kecantikan" class="text-sm text-gray-700 hover:text-blue-500 transition-transform transform hover:scale-105">Kecantikan</a>
      <a href="/mainan" class="text-sm text-gray-700 hover:text-blue-500 transition-transform transform hover:scale-105">Mainan</a>
      <a href="/dukungan" class="text-sm text-gray-700 hover:text-blue-500 transition-transform transform hover:scale-105">Dukungan</a>
    </div>
  </nav>

      <div class="mt-20 max-w-6xl mx-auto px-4 py-8">
        <!-- Breadcrumb -->
        <div class="text-sm text-gray-500">
          <a href="#" class="hover:underline">Home</a> / <span class="text-gray-800 font-medium">Akun Saya</span>
        </div>

        <!-- Page Title -->
        <h1 class="text-2xl font-semibold text-gray-900 mt-4">Akun Saya</h1>

        <div class="mt-6 flex">
        <!-- Sidebar -->
          <div class="w-1/4 bg-white shadow rounded p-6">
            <ul class="space-y-4">
              <!-- Menu Profil -->
              <li>
                <button onclick="showContent('profil')" class="flex items-center text-gray-600 hover:text-blue-600">
                  <i class="fas fa-user-circle text-gray-600 mr-3"></i> Profil
                </button>
              </li>
              <li>
                <button onclick="showContent('alamat')" class="flex items-center text-gray-600 hover:text-blue-600">
                  <i class="fas fa-map-marker-alt text-gray-600 mr-3"></i> Alamat
                </button>
              </li>
              
              <!-- Menu Pesanan -->
          <li>
            <button onclick="showContent('orders')" class="flex items-center text-gray-600 hover:text-blue-600">
              <i class="fas fa-shopping-cart text-gray-600 mr-3"></i> Pesanan
            </button>
          </li>
              <li>
                <button onclick="showContent('notifications')" class="flex items-center text-gray-600 hover:text-blue-600">
                  <i class="fas fa-bell text-gray-600 mr-3"></i> Notifikasi
                </button>
              </li>
              <li>
              <button onclick="openLogoutModal()" class="flex items-center text-gray-600 hover:text-blue-600">
                  <i class="fas fa-sign-out-alt text-gray-600 mr-3"></i> Keluar Akun
                </button>
              </li>
            </ul>
          </div>

        <!-- Konten Utama -->
          <div class="w-full lg:w-3/4 ml-6">
         <!-- Profil -->
            <div id="profil" class="content-section bg-white shadow rounded-lg p-6">
              <h2 class="text-lg font-semibold text-gray-900 mb-4">Profil Saya</h2>
              <div>
              <h3 class="text-sm font-semibold text-gray-800">Informasi Pribadi</h3>
              <p class="text-sm text-gray-500 mt-1 mb-4">Kelola informasi profil Anda untuk mengontrol, melindungi dan mengamankan akun</p>

              <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
                <div>
                  <label for="username" class="text-sm font-medium text-gray-700">Username</label>
                  <input type="text" id="username" placeholder="Masukkan nama depan Anda" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-blue-500 focus:border-blue-500 text-sm">
                </div>
                <div>
                  <label for="name" class="text-sm font-medium text-gray-700">Nama</label>
                  <input type="text" id="second-name" placeholder="Masukkan nama belakang Anda" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-blue-500 focus:border-blue-500 text-sm">
                </div>
              </div>

              <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
                <div>
                  <label for="birth-date" class="text-sm font-medium text-gray-700">Tanggal Lahir</label>
                  <div class="relative mt-1">
                    <input type="date" id="birth-date" class="block w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-blue-500 focus:border-blue-500 text-sm">
                  </div>
                </div>
                <div>
                  <label for="no-hp" class="text-sm font-medium text-gray-700">Nomor Hp</label>
                  <input type="text" id="no-hp" placeholder="Masukkan nomor hp" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-blue-500 focus:border-blue-500 text-sm">
                  <p class="text-xs text-gray-400 mt-1">Perhatikan: format tanpa spasi dan tanda hubung.</p>
                </div>
              </div>
              <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
              <!-- Bagian Jenis Kelamin -->
              <div>
                <label for="gender" class="text-sm font-medium text-gray-700">Jenis Kelamin</label>
                <div class="mt-1">
                  <label class="inline-flex items-center mr-4">
                    <input type="radio" id="male" name="gender" value="male" class="form-radio text-blue-500">
                    <span class="ml-2">Laki-laki</span>
                  </label>
                  <label class="inline-flex items-center">
                    <input type="radio" id="female" name="gender" value="female" class="form-radio text-blue-500">
                    <span class="ml-2">Perempuan</span>
                  </label>
                </div>
              </div>

              <!-- Bagian Email -->
              <div>
                <label for="email" class="text-sm font-medium text-gray-700">Email</label>
                <input type="text" id="email" placeholder="Masukkan email Anda" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-blue-500 focus:border-blue-500 text-sm">
              </div>
              <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-1 text-sm">
                    Simpan
                  </button>
            </div>
          </div>
            </div>
            <!-- Alamat -->
            <div id="alamat" class="content-section hidden bg-white shadow rounded-lg p-6">
              <h2 class="text-lg font-semibold text-gray-900 mb-4">Alamat</h2>
              <!-- Form Alamat -->
              <form>
                <!-- Nama Penerima -->
                <div class="mb-4">
                  <label for="nama-penerima" class="text-sm font-medium text-gray-700">Nama Penerima</label>
                  <input type="text" id="nama-penerima" placeholder="Masukkan nama penerima" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-blue-500 focus:border-blue-500 text-sm">
                </div>

                <!-- Nomor Telepon -->
                <div class="mb-4">
                  <label for="no-hp" class="text-sm font-medium text-gray-700">Nomor Hp</label>
                  <input type="text" id="no-hp" placeholder="Masukkan nomor hp" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-blue-500 focus:border-blue-500 text-sm">
                  <p class="text-xs text-gray-400 mt-1">Format tanpa spasi atau tanda hubung.</p>
                </div>

                <!-- Alamat Lengkap -->
                <div class="mb-4">
                  <label for="alamat-lengkap" class="text-sm font-medium text-gray-700">Alamat Lengkap</label>
                  <textarea id="alamat-lengkap" rows="3" placeholder="Masukkan alamat lengkap" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-blue-500 focus:border-blue-500 text-sm"></textarea>
                </div>

                <!-- Provinsi -->
                <div class="mb-4 flex space-x-4">
                <div class="flex-1">
                  <label for="provinsi" class="text-sm font-medium text-gray-700">Provinsi</label>
                  <input type="text" id="provinsi" placeholder="Masukkan provinsi" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-blue-500 focus:border-blue-500 text-sm">
                </div>

                <!-- Kota -->
                <div class="flex-1">
                  <label for="kota" class="text-sm font-medium text-gray-700">Kota</label>
                  <input type="text" id="kota" placeholder="Masukkan kota" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-blue-500 focus:border-blue-500 text-sm">
                </div>
              </div>

                <!-- Kecamatan -->
                <div class="mb-4 flex space-x-4">
                <div class="flex-1">
                  <label for="kecamatan" class="text-sm font-medium text-gray-700">Kecamatan</label>
                  <input type="text" id="kecamatan" placeholder="Masukkan kecamatan" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-blue-500 focus:border-blue-500 text-sm">
                </div>

                <!-- Kode Pos -->
                <div class="flex-1">
                  <label for="kode-pos" class="text-sm font-medium text-gray-700">Kode Pos</label>
                  <input type="text" id="kode-pos" placeholder="Masukkan kode pos" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-blue-500 focus:border-blue-500 text-sm">
                </div>
              </div>
                <!-- Tombol Aksi -->
                <div class="relative p-4 bg-gray-50 rounded-lg shadow-md">
                  <!-- Tombol Aksi Utama -->
                  <button 
                    id="action-button" 
                    class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-1 text-sm transition-all"
                    onclick="toggleDropdown()"
                  >
                    Pilih Aksi
                  </button>

                  <!-- Dropdown Menu -->
                <div 
                  id="action-dropdown" 
                  class="absolute mt-2 w-48 bg-gray-100 rounded shadow-lg hidden transition-all duration-300 origin-top-right"
                >
                  <ul class="py-2">
                    <li>
                      <button 
                        class="w-full text-left px-4 py-2 text-sm text-black hover:bg-green-100 focus:outline-none"
                        onclick="createAlamat()"
                      >
                        Tambah Alamat
                      </button>
                    </li>
                    <li>
                      <button 
                        class="w-full text-left px-4 py-2 text-sm text-black hover:bg-yellow-100 focus:outline-none"
                        onclick="readAlamat()"
                      >
                        Lihat Alamat
                      </button>
                    </li>
                    <li>
                      <button 
                        class="w-full text-left px-4 py-2 text-sm text-black hover:bg-indigo-100 focus:outline-none"
                        onclick="updateAlamat()"
                      >
                        Edit Alamat
                      </button>
                    </li>
                    <li>
                      <button 
                        class="w-full text-left px-4 py-2 text-sm text-black hover:bg-red-100 focus:outline-none"
                        onclick="deleteAlamat()"
                      >
                        Hapus Alamat
                      </button>
                    </li>
                    <li>
                      <button 
                        type="submit"
                        class="w-full text-left px-4 py-2 text-sm text-black hover:bg-blue-100 focus:outline-none"
                      >
                        Simpan Alamat
                      </button>
                    </li>
                  </ul>
                </div>
            
              </form>
            </div>
        </div>
          <!-- Daftar Pesanan -->
          <div id="orders" class="content-section hidden w-full lg:w-3/4 ml-6">
            <div class="bg-white shadow-lg rounded-lg p-6 space-y-6">
            <h2 class="text-lg font-semibold text-gray-900 mb-4">Daftar Pesanan</h2>

<!-- Filter Pesanan -->
<div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-4 sm:gap-6">
  <!-- Filter Status -->
  <div class="w-full sm:w-56">
    <label for="status-filter" class="text-sm font-medium text-gray-700">Filter Status</label>
    <select 
      id="status-filter" 
      class="mt-1 px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-blue-500 focus:border-blue-500 text-sm w-full"
    >
      <option value="all">Semua</option>
      <option value="pending">Menunggu</option>
      <option value="processing">Diproses</option>
      <option value="shipped">Dikirim</option>
      <option value="delivered">Diterima</option>
    </select>
  </div>

  <!-- Pencarian Pesanan -->
  <div class="w-full sm:w-56">
    <input 
      type="text" 
      placeholder="Cari Pesanan" 
      class="mt-1 px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-blue-500 focus:border-blue-500 text-sm w-full"
    />
  </div>
</div>

<!-- Tabel Pesanan -->
<div class="overflow-x-auto mx-auto w-full max-w-screen-xl mt-6">
  <table class="w-full bg-white border border-gray-200 rounded-lg shadow-sm">
    <thead class="bg-gray-100">
      <tr class="border-b border-gray-300">
        <th class="py-3 px-4 text-left text-sm font-semibold text-gray-700">ID Pesanan</th>
        <th class="py-3 px-4 text-left text-sm font-semibold text-gray-700">Produk</th>
        <th class="py-3 px-4 text-left text-sm font-semibold text-gray-700">Jumlah</th>
        <th class="py-3 px-4 text-left text-sm font-semibold text-gray-700">Status</th>
        <th class="py-3 px-4 text-left text-sm font-semibold text-gray-700">Tanggal Pesan</th>
        <th class="py-3 px-4 text-left text-sm font-semibold text-gray-700">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <tr class="border-b hover:bg-gray-50 transition-all">
        <td class="py-3 px-4 text-sm text-gray-800">#12345</td>
        <td class="py-3 px-4 text-sm text-gray-800 flex items-center w-[300px]">
          <img 
            src="https://images.unsplash.com/photo-1686831889330-b059693080dd?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt="Produk Tepache" 
            class="w-12 h-12 mr-3 rounded"
          />
        LuxeFoam Sesderma
        </td>
        <td class="py-3 px-4 text-sm text-gray-800">3</td>
        <td class="py-3 px-4 text-sm text-yellow-500 font-semibold">Menunggu</td>
        <td class="py-3 px-4 text-sm text-gray-600">2025-01-06</td>
        <td class="py-3 px-4 text-sm">
          <button 
            class="px-4 py-2 bg-blue-500 text-white text-xs rounded hover:bg-blue-600 focus:ring-2 focus:ring-blue-500 transition"
          >
            Lihat
          </button>
        </td>
      </tr>
      <tr class="border-b hover:bg-gray-50 transition-all">
        <td class="py-3 px-4 text-sm text-gray-800">#12346</td>
        <td class="py-3 px-4 text-sm text-gray-800 flex items-center w-[300px]">
          <img 
            src="https://images.unsplash.com/photo-1598300056393-4aac492f4344?q=80&w=2034&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
            alt="Produk Tepache Madu" 
            class="w-12 h-12 mr-3 rounded"
          />
          ErgoChair Flex
        </td>
        <td class="py-3 px-4 text-sm text-gray-800">2</td>
        <td class="py-3 px-4 text-sm text-green-500 font-semibold">Dikirim</td>
        <td class="py-3 px-4 text-sm text-gray-600">2025-01-05</td>
        <td class="py-3 px-4 text-sm">
          <button 
            class="px-4 py-2 bg-blue-500 text-white text-xs rounded hover:bg-blue-600 focus:ring-2 focus:ring-blue-500 transition"
          >
            Lihat
          </button>
        </td>
      </tr>
    </tbody>
  </table>
</div>
</div>
</div>




                <!-- Konten Notifikasi -->
                <div id="notifications" class="content-section bg-white shadow rounded-lg p-6 hidden">
                <h2 class="text-lg font-semibold text-gray-900 mb-4">Notifikasi Saya</h2>
                
                <!-- Header -->
                <div class="flex justify-between items-center mb-4">
                  <h3 class="text-sm font-semibold text-gray-800">Daftar Notifikasi</h3>
                  <button class="text-sm text-blue-500 hover:text-blue-700" onclick="markAllAsRead()">Tandai Semua Dibaca</button>
                </div>

                <!-- Notifikasi 1 -->
                <div class="bg-gray-100 p-4 rounded-lg shadow-sm mb-3">
                  <div class="flex justify-between items-center">
                    <div>
                      <p class="font-medium text-gray-800">Pemberitahuan Baru</p>
                      <p class="text-sm text-gray-500">Pesanan Anda #1234 telah dikirim</p>
                    </div>
                    <button onclick="deleteNotification(this)" class="text-red-500 hover:text-red-700 text-sm">Hapus</button>
                  </div>
                  <div class="mt-2">
                    <span class="bg-blue-100 text-blue-800 text-xs font-semibold py-1 px-3 rounded-full">Baru</span>
                  </div>
                </div>

                <!-- Notifikasi 2 -->
                <div class="bg-gray-100 p-4 rounded-lg shadow-sm mb-3">
                  <div class="flex justify-between items-center">
                    <div>
                      <p class="font-medium text-gray-800">Peringatan</p>
                      <p class="text-sm text-gray-500">Segera lakukan pembayaran</p>
                    </div>
                    <button onclick="deleteNotification(this)" class="text-red-500 hover:text-red-700 text-sm">Hapus</button>
                  </div>
                  <div class="mt-2">
                    <span class="bg-yellow-100 text-yellow-800 text-xs font-semibold py-1 px-3 rounded-full">Peringatan</span>
                  </div>
                </div>

                <!-- Notifikasi 3 -->
                <div class="bg-gray-100 p-4 rounded-lg shadow-sm mb-3">
                  <div class="flex justify-between items-center">
                    <div>
                      <p class="font-medium text-gray-800">Kesalahan</p>
                      <p class="text-sm text-gray-500">Gagal memproses pembayaran</p>
                    </div>
                    <button onclick="deleteNotification(this)" class="text-red-500 hover:text-red-700 text-sm">Hapus</button>
                  </div>
                  <div class="mt-2">
                    <span class="bg-red-100 text-red-800 text-xs font-semibold py-1 px-3 rounded-full">Kesalahan</span>
                  </div>
                </div>

                <!-- No Notification Message -->
                <div id="no-notification" class="text-center text-gray-400 mt-6 hidden">
                  <p>Anda tidak memiliki notifikasi.</p>
                </div>
              </div>

            <!-- Modal Logout -->
            <div id="logoutModal" class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 hidden">
              <div class="bg-white rounded-lg shadow-lg w-96 p-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Konfirmasi Keluar</h3>
                <p class="text-sm text-gray-500 mb-6">Apakah Anda yakin ingin keluar dari akun Anda?</p>
                <div class="flex justify-end space-x-4">
                  <!-- Tombol Batal -->
                  <button onclick="closeLogoutModal()" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400 focus:outline-none">
                    Batal
                  </button>
                  <!-- Tombol Logout -->
                  <button onclick="logout()" class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 focus:outline-none">
                    Keluar
                  </button>
                </div>
          </div>
        </div>
        

    <!-- SideBar -->
      <script>       
      function showContent(sectionId) {
        // Sembunyikan semua konten
        const sections = document.querySelectorAll('.content-section');
        sections.forEach((section) => {
          section.classList.add('hidden');
        });

        // Tampilkan konten yang sesuai
        const activeSection = document.getElementById(sectionId);
        if (activeSection) {
          activeSection.classList.remove('hidden');
        }
      }
      </script>

     <!-- Tombol Aksi -->
      <script>
      function toggleDropdown() {
          const dropdown = document.getElementById("action-dropdown");
          dropdown.classList.toggle("hidden");
        }

        function createAlamat() {
          console.log("Tambah Alamat diaktifkan.");
        }

        function readAlamat() {
          console.log("Lihat Alamat diaktifkan.");
        }

        function updateAlamat() {
          console.log("Edit Alamat diaktifkan.");
        }

        function deleteAlamat() {
          console.log("Hapus Alamat diaktifkan.");
        }

        // Klik di luar dropdown untuk menutup
        document.addEventListener("click", (event) => {
          const dropdown = document.getElementById("action-dropdown");
          const button = document.getElementById("action-button");

          if (!dropdown.contains(event.target) && !button.contains(event.target)) {
            dropdown.classList.add("hidden");
          }
        });

        </script>
        <!-- Daftar Pesanan -->
        <script>
          document.addEventListener('DOMContentLoaded', function () {
            // Filter status pesanan
            const statusFilter = document.getElementById('status-filter');
            const searchInput = document.querySelector('input[type="text"][placeholder="Cari Pesanan"]');
            const orderRows = document.querySelectorAll('tbody tr');
            
            // Menyaring pesanan berdasarkan status
            statusFilter.addEventListener('change', function () {
              const selectedStatus = statusFilter.value;
              orderRows.forEach(row => {
                const orderStatus = row.querySelector('td:nth-child(4)').innerText.toLowerCase();
                if (selectedStatus === 'all' || orderStatus.includes(selectedStatus.toLowerCase())) {
                  row.style.display = ''; // Menampilkan baris pesanan
                } else {
                  row.style.display = 'none'; // Menyembunyikan baris pesanan yang tidak sesuai
                }
              });
            });

            // Mencari pesanan berdasarkan teks pencarian
            searchInput.addEventListener('input', function () {
              const searchTerm = searchInput.value.toLowerCase();
              orderRows.forEach(row => {
                const orderId = row.querySelector('td:nth-child(1)').innerText.toLowerCase();
                const productName = row.querySelector('td:nth-child(2)').innerText.toLowerCase();
                if (orderId.includes(searchTerm) || productName.includes(searchTerm)) {
                  row.style.display = ''; // Menampilkan baris pesanan yang sesuai
                } else {
                  row.style.display = 'none'; // Menyembunyikan baris pesanan yang tidak sesuai
                }
              });
            });

            // Menampilkan detail pesanan ketika diklik
            const orderDetails = (orderId) => {
              alert(`Menampilkan detail untuk pesanan ${orderId}`);
              // Di sini Anda bisa mengganti dengan modal atau tampilan detail lainnya
            };

            const actionCells = document.querySelectorAll('tbody td:last-child');
            actionCells.forEach(cell => {
              cell.addEventListener('click', function () {
                const orderId = this.closest('tr').querySelector('td:nth-child(1)').innerText;
                orderDetails(orderId);
              });
            });
          });
        </script>

      <!-- Konten Notifikasi -->
       <script>
        function showContent(sectionId) {
          // Sembunyikan semua konten
          const sections = document.querySelectorAll('.content-section');
          sections.forEach((section) => {
            section.classList.add('hidden');
          });

          // Tampilkan konten yang sesuai
          const activeSection = document.getElementById(sectionId);
          if (activeSection) {
            activeSection.classList.remove('hidden');
          }
        }

        function deleteNotification(button) {
          // Hapus elemen notifikasi yang dipilih
          const notification = button.closest('div.bg-gray-100');
          notification.remove();
          // Menampilkan pesan jika tidak ada notifikasi lagi
          const remainingNotifications = document.querySelectorAll('div.bg-gray-100');
          if (remainingNotifications.length === 0) {
            document.getElementById('no-notification').classList.remove('hidden');
          }
        }

        function markAllAsRead() {
          const notifications = document.querySelectorAll('.bg-gray-100');
          notifications.forEach(notification => {
            notification.querySelector('span').classList.add('bg-gray-300', 'text-gray-600');
            notification.querySelector('span').classList.remove('bg-blue-100', 'text-blue-800');
          });
          alert('Semua notifikasi telah ditandai sebagai dibaca.');
        }
       </script>

      <!-- Konten Kontrol Modal -->
       <script>
        // Fungsi untuk membuka modal logout
        function openLogoutModal() {
          document.getElementById('logoutModal').classList.remove('hidden');
        }

        // Fungsi untuk menutup modal logout
        function closeLogoutModal() {
          document.getElementById('logoutModal').classList.add('hidden');
        }

        // Fungsi untuk logout (di sini hanya simulasi, Anda bisa menambahkan logika untuk logout sebenarnya)
        function logout() {
          // Logika logout sebenarnya (misalnya menghapus sesi atau mengalihkan ke halaman login)
          alert('Anda telah keluar dari akun.');
          closeLogoutModal();
        }
       </script>

        <script>
        function showContent(sectionId) {
          // Sembunyikan semua konten
          const sections = document.querySelectorAll('.content-section');
          sections.forEach((section) => {
            section.classList.add('hidden');
          });

          // Tampilkan konten yang sesuai
          const activeSection = document.getElementById(sectionId);
          if (activeSection) {
            activeSection.classList.remove('hidden');
          }
        }
        </script>
      </body>
  </html>