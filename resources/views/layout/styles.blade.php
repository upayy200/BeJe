<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&family=Roboto:wght@300;400&display=swap" rel="stylesheet">
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: 'Poppins', sans-serif; /* Menggunakan Poppins sebagai font utama */
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }
    .navbar {
        background-color: white;
        z-index: 1030;
        position: fixed;
        top: 0;
        width: 100%;
    }
    .navbar-nav .nav-link {
        color: #333;
        font-size: 14px; /* Ukuran font sedikit lebih besar untuk keterbacaan */
        padding: 5px 15px; /* Menyesuaikan padding */
        margin-right: 20px; /* Mengurangi margin untuk tampilan lebih baik */
    }
    .navbar-nav .nav-link:hover {
        color: #0071e3;
    }
    .content {
        flex: 1; /* Membuat konten mengisi ruang yang tersisa */
        padding-top: 70px; /* Mengimbangi navbar yang lebih tinggi */
        padding-bottom: 30px; /* Mengimbangi footer */
    }
    footer {
        background-color: white;
        padding: 20px;
        text-align: center;
        width: 100%;
        position: relative; /* Memastikan footer tetap di bawah konten */
    }
    /* Responsivitas untuk navbar */
    @media (max-width: 768px) {
        .navbar-nav .nav-link {
            margin-right: 10px; /* Mengurangi margin pada tampilan mobile */
        }
    }
</style>