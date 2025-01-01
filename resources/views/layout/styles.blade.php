<!-- resources/views/partials/styles.blade.php -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&family=Roboto:wght@300;400&display=swap" rel="stylesheet">
<style>
        body {
            margin: 0;
            padding: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        }
        .navbar {
            background-color: white;
            z-index: 1030;
        }
        .navbar-nav .nav-link {
            color: #333;
            font-size: 12px;
            padding: 3px 10px;
            margin-right: 25px;
        }
        .navbar-nav .nav-link:hover {
            color: #0071e3;
        }
        .carousel-item img {
            max-height: 90vh;
            object-fit: cover;
        }
        .carousel-caption {
            position: absolute;
            bottom: 30%;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
            color: #fff;
            padding: 20px;
            border-radius: 10px;
            width: 80%;
        }
        .carousel-caption h5 {
            font-size: 3rem;
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            margin-bottom: 10px;
        }
        .carousel-caption p {
            font-size: 1.2rem;
            font-family: 'Roboto', sans-serif;
            margin-bottom: 20px;
        }
        .carousel-caption .btn {
            padding: 10px 20px;
            font-size: 1rem;
            border-radius: 10px;
            background-color: #00e381;
            border: none;
            color: white;
            transition: all 0.3s ease;
        }
        .carousel-caption .btn:hover {
            background-color: #016635;
            transform: scale(1.05);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }
        .carousel-item {
            transition: opacity 0.8s ease-in-out, transform 0.8s ease-in-out;
            opacity: 0;
            transform: scale(0.95);
        }
        .carousel-item.active {
            opacity: 1;
            transform: scale(1);
        }
        .carousel-control-prev-icon:hover,
        .carousel-control-next-icon:hover {
            background-color: rgba(0, 0, 0, 0.2);
        }
        .category-title {
            font-size: 24px; /* Increased font size */
            font-weight: bold;
            margin: 30px 0 15px;
            text-align: center; /* Center the title */
            color: #0071e3; /* Attractive color */
        }
        .divider {
            height: 2px;
            background-color: #e0e0e0;
            margin: 40px 0; /* Space around the divider */
        }
        .cta-banner {
            background-image: url('https://images.unsplash.com/photo-1595246140625-573b715d11dc?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
            background-size: cover;
            background-position: center;
            max-width: 1400px;
            margin: 0 auto;
            color: white;
            position: relative;
            overflow: hidden;
            opacity: 0;
            transform: translateY(50px);
            transition: all 0.6s ease-in-out;
        }
        .cta-banner::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 0;
        }
        .cta-banner h4, .cta-banner p, .cta-banner a {
            position: relative;
            z-index: 1;
        }
        .cta-banner h4 {
            font-size: 2rem;
            font-family: 'Poppins', sans-serif;
        }
        .cta-banner p {
            font-size: 1.2rem;
            margin-bottom: 1rem;
            font-family: 'Roboto', sans-serif;
        }
        .cta-banner .btn {
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
        .cta-banner .btn:hover {
            transform: scale(1.05);
            background-color: #016635;
        }
        #cta-banner.show {
            opacity: 1;
            transform: translateY(0);
        }
        .product-item {
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 10px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            background-color: #fff;
            height: 100%; /* Ensure all product items have the same height */
            position: relative; /* Position relative for popup */
        }
        .product-item img {
            width: 500px; /* Set fixed width */
            height: 500px; /* Set fixed height */
            object-fit: cover; /* Maintain aspect ratio */
            border-radius: 10px; /* Rounded corners */
        }
        .product-item:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }
        .product-rating i {
            font-size: 1rem;
        }
        .content {
            padding-top: 80px;
            font-family: 'Poppins';
        }
        .quick-review-button {
            display: none; /* Hidden by default */
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            background-color: #201D17;
            color: white;
            border: none;
            border-radius: 3px;
            padding: 5px 10px;
            cursor: pointer;
        }
        .quick-review-popup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            display: none; /* Hidden by default */
            z-index: 1000; /* Ensure it appears above other elements */
            max-width: 450px; /* Limit the width of the popup */
            width: 100%; /* Responsive width */
            transition: all 0.3s ease; /* Smooth transition */
        }
        .quick-review-popup img {
            max-width: 100%;
            height: 450px; /* Fixed height for uniformity */
            object-fit: cover; /* Maintain aspect ratio */
            border-radius: 7px; /* Rounded corners */
        }
        .quick-review-popup h5 {
            font-family: 'Poppins', sans-serif;
            margin: 10px 0;
        }
        .quick-review-popup p {
            margin: 5px 0;
        }
        .quick-review-popup .close-popup {
            position: absolute;
            top: 15px;
            right: 15px;
            cursor: pointer;
            font-size: 2rem;
            color: white;
            border-radius: 4px;
            background-color: black;
        }
        footer {
            background-color: #f8f9fa;
            padding: 20px 0;
            text-align: center;
        }
        
        .overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7); /* Dark background with transparency */
        display: none; /* Hidden by default */
        z-index: 500; /* Ensure it's below */
        }

    </style>