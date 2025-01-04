<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    
    <title>Checkout</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flag-icons@7.2.3/css/flag-icons.min.css">
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places" async defer></script>
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
        .flag-icon {
        width: 20px;
        height: 15px;
        }
        input[type="radio"] {
        width: 20px;
        height: 20px;
        border-radius: 50%;
        border: 2px solid #ccc;
        }
        .checked {
            background-color: #4CAF50;
        }
    </style>
</head>

                  <body class="flex flex-col min-h-screen bg-gray-50">
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

                                <!-- Content -->
                                <main class="flex-1 container mx-auto px-4 py-20">
                                    <div class="flex flex-col lg:flex-row lg:space-x-8 fade-in">
                                        <!-- Form Section -->
                                                      <div class="flex-3 space-y-6">
                                                          <h2 class="text-2xl font-bold mb-4">Checkout</h2>

                                                          <!-- Alamat Pengiriman -->
                                                          <div class="bg-yellow-100 text-yellow-800 p-4 rounded-lg mt-4">
                                                              <span class="font-semibold">Peringatan:</span> Pastikan semua data yang dimasukkan sudah benar sebelum melanjutkan ke pembayaran.
                                                          </div>

                                                          <div class="bg-white p-6 rounded-lg shadow">
                                                              <h3 class="text-lg font-semibold mb-4">Alamat Pengiriman</h3>

                                  <!-- Nama Lengkap -->
                                  <div class="mb-4">
                                      <label for="nama-lengkap" class="block text-gray-700 font-medium">Nama Lengkap</label>
                                      <input type="text" id="nama-lengkap" class="w-full border border-gray-300 rounded-lg p-3" placeholder="Masukkan nama lengkap">
                                  </div>

                                <!-- Nomor HP dengan Bendera -->
                                  <div class="mb-4">
                                      <label for="nomor-hp" class="block text-gray-700 font-medium">Nomor HP</label>
                                      <div class="flex space-x-2 items-center">
                                          <div class="relative">
                                              <!-- Dropdown Negara -->
                                              <select id="kode-negara"  class="w-full sm:w-1/2 lg:w-64 h-12 border border-gray-300 rounded-lg pl-10 pr-3 py-3 bg-white text-gray-700 transition-all ease-in-out duration-300 transform hover:scale-105 focus:ring-2 focus:ring-blue-500" 
                                              onchange="changeFlag()">
                                                  <option value="+62" data-flag="flag-icon-id">+62 (Indonesia)</option>
                                                  <option value="+1" data-flag="flag-icon-us">+1 (USA)</option>
                                                  <option value="+44" data-flag="flag-icon-gb">+44 (UK)</option>
                                                  <option value="+91" data-flag="flag-icon-in">+91 (India)</option>
                                                  <option value="+81" data-flag="flag-icon-jp">+81 (Japan)</option>
                                                  <option value="+86" data-flag="flag-icon-cn">+86 (China)</option>
                                                  <option value="+82" data-flag="flag-icon-kr">+82 (South Korea)</option>
                                                  <option value="+66" data-flag="flag-icon-th">+66 (Thailand)</option>
                                                  <option value="+63" data-flag="flag-icon-ph">+63 (Philippines)</option>
                                                  <option value="+60" data-flag="flag-icon-my">+60 (Malaysia)</option>
                                                  <option value="+971" data-flag="flag-icon-ae">+971 (UAE)</option>
                                                  <option value="+966" data-flag="flag-icon-sa">+966 (Saudi Arabia)</option>
                                                  <option value="+49" data-flag="flag-icon-de">+49 (Germany)</option>
                                                  <option value="+33" data-flag="flag-icon-fr">+33 (France)</option>
                                                  <option value="+34" data-flag="flag-icon-es">+34 (Spain)</option>
                                                  <option value="+39" data-flag="flag-icon-it">+39 (Italy)</option>
                                                  <option value="+7" data-flag="flag-icon-ru">+7 (Russia)</option>
                                                  <option value="+31" data-flag="flag-icon-nl">+31 (Netherlands)</option>
                                                  <option value="+45" data-flag="flag-icon-dk">+45 (Denmark)</option>
                                                  <option value="+41" data-flag="flag-icon-ch">+41 (Switzerland)</option>
                                                  <option value="+48" data-flag="flag-icon-pl">+48 (Poland)</option>
                                                  <option value="+358" data-flag="flag-icon-fi">+358 (Finland)</option>
                                                  <option value="+420" data-flag="flag-icon-cz">+420 (Czech Republic)</option>
                                                  <option value="+351" data-flag="flag-icon-pt">+351 (Portugal)</option>
                                                  <option value="+353" data-flag="flag-icon-ie">+353 (Ireland)</option>
                                                  <option value="+32" data-flag="flag-icon-be">+32 (Belgium)</option>
                                                  <option value="+47" data-flag="flag-icon-no">+47 (Norway)</option>
                                                  <option value="+370" data-flag="flag-icon-lt">+370 (Lithuania)</option>
                                                  <option value="+380" data-flag="flag-icon-ua">+380 (Ukraine)</option>
                                                  <option value="+36" data-flag="flag-icon-hu">+36 (Hungary)</option>
                                                  <option value="+40" data-flag="flag-icon-ro">+40 (Romania)</option>
                                              </select>

                                              <!-- Display Flag Icon -->
                                              <span class="absolute left-2 top-1/2 transform -translate-y-1/2 transition-all ease-in-out duration-300">
                                                  <span id="flag-icon" class="flag-icon flag-icon-id"></span>
                                              </span>
                                          </div>

                                          <!-- Input Nomor HP -->
                                          <input type="text" id="nomor-hp1" class="flex-1 border border-gray-300 rounded-lg p-3" placeholder="Masukkan nomor HP">
                                      </div>
                                      <div class="mt-2">
                                          <input type="text" id="nomor-hp2" class="w-full border border-gray-300 rounded-lg p-3" placeholder="Masukkan nomor HP kedua (opsional)">
                                      </div>
                                  </div>



                                  <!-- Email -->
                                  <div class="mb-4">
                                      <label for="email" class="block text-gray-700 font-medium">Email</label>
                                      <input type="email" id="email" class="w-full border border-gray-300 rounded-lg p-3" placeholder="Masukkan email">
                                  </div>

                                  <!-- Alamat Lengkap-->
                                  <div class="mb-4">
                                      <label for="alamat-lengkap" class="block text-gray-700 font-medium">Alamat Lengkap</label>
                                      <input type="text" id="alamat-lengkap" class="w-full border border-gray-300 rounded-lg p-3" placeholder="Masukkan alamat lengkap">
                                  </div>

                                  <!-- Gabungan Provinsi, Kota, Kecamatan, dan Kode Pos -->
                                  <div class="flex flex-wrap -mx-2">
                                      <div class="w-full md:w-1/2 px-2 mb-4">
                                          <label for="provinsi" class="block text-gray-700 font-medium">Provinsi</label>
                                          <input type="text" id="provinsi" class="w-full border border-gray-300 rounded-lg p-3" placeholder="Masukkan provinsi">
                                      </div>
                                      <div class="w-full md:w-1/2 px-2 mb-4">
                                          <label for="kota" class="block text-gray-700 font-medium">Kota</label>
                                          <input type="text" id="kota" class="w-full border border-gray-300 rounded-lg p-3" placeholder="Masukkan kota">
                                      </div>
                                      <div class="w-full md:w-1/2 px-2 mb-4">
                                          <label for="kecamatan" class="block text-gray-700 font-medium">Kecamatan</label>
                                          <input type="text" id="kecamatan" class="w-full border border-gray-300 rounded-lg p-3" placeholder="Masukkan kecamatan">
                                      </div>
                                      <div class="w-full md:w-1/2 px-2 mb-4">
                                          <label for="kode-pos" class="block text-gray-700 font-medium">Kode Pos</label>
                                          <input type="text" id="kode-pos" class="w-full border border-gray-300 rounded-lg p-3" placeholder="Masukkan kode pos">
                                      </div>
                                  </div>
                              </div>

                             <!-- Opsi Pengiriman -->
                            <div class="bg-white p-6 rounded-lg shadow">
                            <h3 class="text-lg font-semibold mb-4">Pilih Opsi Pengiriman</h3>
                            <div class="space-y-6">
                            <!-- Opsi Antar ke alamatmu -->
                            <div>
                                <label for="antarAlamat" class="flex items-center cursor-pointer">
                                    <input type="radio" name="pengiriman" id="antarAlamat" class="mr-3" onclick="toggleDropdown('dropdown-antarAlamat')">
                                    <span class="mr-2">
                                        <!-- Ikon untuk Antar ke alamatmu -->
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 text-blue-500">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2C7.029 2 3 6.029 3 10c0 2.629 1.655 5.15 4.179 6.479-.022.12-.179.145-.179.21 0 .066.159.091.179.21-2.524 1.33-4.179 3.851-4.179 6.479 0 3.971 4.029 8 9 8s9-4.029 9-8c0-3.149-2.131-6-5-6-2.151 0-4 1.346-5 3.219-1-1.88-2.847-3.219-5-3.219z" />
                                        </svg>
                                    </span>
                                    <span>Antar ke alamatmu</span>
                                </label>
                                <div id="dropdown-antarAlamat" class="dropdown-content hidden mt-4 p-4 bg-gray-100 rounded-lg shadow-md">
                                    <p>Silakan pilih ekspedisi:</p>
                                    <select class="mt-2 p-2 border rounded-md w-full">
                                    <option value="jne-regular">JNE - Regular (Rp12,000)</option>
                                    <option value="jne-yes">JNE - YES (Rp20,000)</option>
                                    <option value="jne-oke">JNE - OKE (Rp10,000)</option>
                                    <option value="sicepat-best">SiCepat - BEST (Rp15,000)</option>
                                    <option value="sicepat-halu">SiCepat - HALU (Rp8,000)</option>
                                    <option value="tiki-same-day">TIKI - Same Day (Rp25,000)</option>
                                    <option value="tiki-regular">TIKI - Regular (Rp12,000)</option>
                                    <option value="pos-kilat">POS Indonesia - Kilat (Rp10,000)</option>
                                    <option value="pos-express">POS Indonesia - Express (Rp18,000)</option>
                                    <option value="jnt-regular">J&T - Regular (Rp12,000)</option>
                                    <option value="jnt-super">J&T - Super (Rp20,000)</option>
                                    <option value="ninja-standard">Ninja Xpress - Standard (Rp13,000)</option>
                                    <option value="ninja-cod">Ninja Xpress - COD (Rp15,000)</option>
                                    <option value="anteraja-regular">Anteraja - Regular (Rp10,000)</option>
                                    <option value="anteraja-next-day">Anteraja - Next Day (Rp18,000)</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Opsi Ambil di Tempat -->
                            <div>
                                <label for="ambilTempat" class="flex items-center cursor-pointer">
                                    <input type="radio" name="pengiriman" id="ambilTempat" class="mr-3" onclick="toggleDropdown('dropdown-ambilTempat')">
                                    <span class="mr-2">
                                        <!-- Ikon untuk Ambil di Tempat -->
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 text-green-500">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6H3a1 1 0 100 2h1v9.586l2.707-2.707a1 1 0 011.414 1.414L6 19.414V18h12v1.414l-2.121-2.121a1 1 0 011.414-1.414L21 15.586V6h1a1 1 0 100-2h-1V4a1 1 0 00-1-1h-3a1 1 0 00-1 1v2H8V4a1 1 0 00-1-1H4a1 1 0 00-1 1v2z" />
                                        </svg>
                                    </span>
                                    <span>Ambil di Tempat</span>
                                </label>
                                <div id="dropdown-ambilTempat" class="dropdown-content hidden mt-4 p-4 bg-gray-100 rounded-lg shadow-md">
                                    <p>Silakan pilih cabang untuk pengambilan barang:</p>
                                    <select class="mt-2 p-2 border rounded-md w-full">
                                    <option value="jakarta">Jakarta - Senin – Sabtu (08:00 – 17:00)</option>
                                    <option value="bandung">Bandung - Senin – Sabtu (09:00 – 18:00)</option>
                                    <option value="surabaya">Surabaya - Senin – Jumat (08:30 – 16:30)</option>
                                    <option value="medan">Medan - Senin – Sabtu (09:00–16:00)</option>
                                    <option value="yogyakarta">Yogyakarta - Selasa – Minggu (10:00 – 17:00)</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                              <!-- Metode Pembayaran -->
                              <div class="bg-white p-6 rounded-lg shadow">
                                  <h3 class="text-lg font-semibold mb-4">Pilih Metode Pembayaran</h3>
                                  <div class="flex flex-col space-y-3">
                                      <label class="flex items-center">
                                          <input type="radio" name="pembayaran" class="mr-3">
                                          BejePay
                                      </label>
                                      <label class="flex items-center">
                                          <input type="radio" name="pembayaran" class="mr-3">
                                          Cash on Delivery
                                      </label>
                                      <label class="flex items-center">
                                          <input type="radio" name="pembayaran" class="mr-3">
                                          Kartu Kredit
                                      </label>
                                      <label class="flex items-center">
                                          <input type="radio" name="pembayaran" class="mr-3">
                                          Transfer Bank
                                      </label>
                                  </div>
                              </div>
                          </div>

            <!-- Produk Dipesan -->
            <div class="w-full lg:w-1/3">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-lg font-semibold mb-4">Produk Dipesan</h3>
                    <div class="flex flex-col sm:flex-row items-center mb-4">
                        <img src="https://images.unsplash.com/photo-1686831889330-b059693080dd?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Product Image" class="w-12 h-12 rounded mr-4 mb-4 sm:mb-0">
                        <div>
                            <p class="text-gray-700">LuxeFoam Sesderma</p>
                            <p class="text-sm text-gray-500">Qty: 1</p>
                            <p class="text-sm text-gray-500">Rp 100.000</p>
                        </div>
                    </div>
                    <div class="flex flex-col sm:flex-row items-center mb-4">
                    <img src="https://images.unsplash.com/photo-1598300056393-4aac492f4344?q=80&w=2034&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="w-12 h-12 rounded mr-4 mb-4 sm:mb-0">
                        <div>                     
                            <p class="text-gray-700">ErgoChair Flex</p>
                            <p class="text-sm text-gray-500">Qty: 1</p>
                            <p class="text-sm text-gray-500">Rp 200.000</p>
                        </div>
                    </div>
                    <div class="flex flex-col sm:flex-row items-center mb-4">
                        <img src="https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="w-12 h-12 rounded mr-4 mb-4 sm:mb-0">
                        <div>                     
                            <p class="text-gray-700">InstaSnap Retro 300</p>
                            <p class="text-sm text-gray-500">Qty: 1</p>
                            <p class="text-sm text-gray-500">Rp 3.500.000</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow mt-6">
                    <h3 class="text-lg font-semibold mb-4">Total Pembayaran</h3>
                    
                    <div class="flex justify-between">
                        <span>Subtotal Produk</span>
                        <span>Rp 1.700.000</span>
                    </div>
                    
                    <div class="flex justify-between mt-2">
                        <span>Subtotal Pengiriman</span>
                        <span>Rp 50.000</span>
                    </div>
                    
                    <div class="flex justify-between mt-4 font-bold">
                        <span>Total Pembayaran</span>
                        <span>Rp 3.600.000</span>
                    </div>
                    
                    <!-- Tombol Proses Pembayaran -->
                    <div class="flex justify-between items-center mt-6">
                        <span></span> <!-- Placeholder untuk menjaga keseimbangan tata letak -->
                        <button class="bg-blue-500 text-white py-3 px-6 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300 w-full md:w-auto">
                            Proses Pembayaran
                        </button>
                    </div>
                </div>
            </div>


                </div>
            </div>
        </div>
    </main>
     <!-- Dropdown Opsi Pembayaran -->
    <script>
    // Fungsi untuk menampilkan dan menyembunyikan dropdown
    const toggleDropdown = (id) => {
        const allDropdowns = document.querySelectorAll('.dropdown-content');
        allDropdowns.forEach(dropdown => {
            if (dropdown.id === id) {
                dropdown.classList.remove('hidden'); // Tampilkan dropdown yang sesuai
                dropdown.classList.add('transition', 'ease-in-out', 'duration-300', 'opacity-100'); // Tambahkan transisi
                dropdown.focus(); // Fokus otomatis
            } else {
                dropdown.classList.add('hidden'); // Sembunyikan dropdown lain
                dropdown.classList.remove('transition', 'opacity-100'); // Reset transisi
            }
        });
    };

    // Highlight label radio yang aktif
    const radios = document.querySelectorAll('input[name="pengiriman"]');
    radios.forEach(radio => {
        radio.addEventListener('change', (e) => {
            // Reset semua label
            radios.forEach(r => r.parentElement.classList.remove('bg-blue-100', 'border', 'border-blue-500', 'rounded-lg'));

            // Tambahkan highlight pada label aktif
            e.target.parentElement.classList.add('bg-blue-100', 'border', 'border-blue-500', 'rounded-lg');

            // Panggil fungsi untuk toggle dropdown
            toggleDropdown(e.target.id === 'antarAlamat' ? 'dropdown-antarAlamat' : 'dropdown-ambilTempat');
        });
    });
    </script>
    <!-- Dropdown Nomor Hp Negara -->
    <script>
    // Mengambil elemen dropdown negara dan ikon bendera
    const select = document.getElementById('kode-negara');
    const flagSpan = document.getElementById('flag-icon'); // Mengakses flag-icon menggunakan ID

    // Fungsi untuk mengganti bendera berdasarkan pilihan negara
    function changeFlag() {
        const selectedOption = select.options[select.selectedIndex]; // Mendapatkan pilihan yang dipilih
        const flagClass = selectedOption.getAttribute('data-flag'); // Mengambil kelas flag dari atribut data-flag
        flagSpan.className = 'flag-icon ' + flagClass; // Menambahkan kelas flag-icon yang baru ke span
    }

    // Menambahkan event listener untuk perubahan pilihan negara
    select.addEventListener('change', function() {
        changeFlag(); // Memanggil fungsi changeFlag setiap kali pilihan dropdown berubah
    });

    // Menetapkan bendera awal berdasarkan pilihan default saat halaman dimuat
    window.onload = function() {
        changeFlag(); // Menetapkan bendera sesuai pilihan default saat halaman pertama kali dimuat
    };
    function changeFlag() {
    var select = document.getElementById("kode-negara");
    var selectedFlag = select.options[select.selectedIndex].getAttribute("data-flag");
    document.getElementById("flag-icon").className = "flag-icon " + selectedFlag;
  }

    </script>
    


    <!-- Footer -->
    <footer class="bg-gray-100 text-center py-4 mt-6">
    <div class="container mx-auto px-4">
        <p class="text-sm text-gray-500">&copy; 2025 Beje. All rights reserved.</p>
    </div>
</footer>

</body>

</html>
