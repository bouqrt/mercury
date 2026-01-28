<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pink Vibes Contacts</title>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600;800&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --pink-light: #ffc8dd;
            --pink-mid: #ffafcc;
            --pink-hot: #fb6f92;
            --violet: #a2d2ff;
        }

        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        body {
            font-family: 'Outfit', sans-serif;
            background: linear-gradient(-45deg, #fde2e4, #fad2e1, #e2e2ff, #fff1f2);
            background-size: 400% 400%;
            animation: gradientBG 15s ease infinite;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            padding: 20px;
            margin: 0;
        }

        .container {
            width: 100%;
            max-width: 600px;
            background: rgba(255, 255, 255, 0.6);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-radius: 40px;
            padding: 40px;
            border: 2px solid rgba(255, 255, 255, 0.8);
            box-shadow: 0 25px 50px -12px rgba(255, 175, 204, 0.5);
            margin-top: 40px;
        }

        /* Float Animation for Header */
        h1 {
            font-weight: 800;
            font-size: 2.5rem;
            text-align: center;
            color: #5a189a;
            margin-bottom: 30px;
            animation: float 4s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        /* Bouncy Buttons */
        .btn {
            border-radius: 20px;
            padding: 12px 25px;
            border: none;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .btn-primary {
            background: var(--pink-hot);
            color: white;
            box-shadow: 0 10px 20px rgba(251, 111, 146, 0.3);
        }

        .btn-primary:hover {
            transform: scale(1.1) rotate(2deg);
            box-shadow: 0 15px 25px rgba(251, 111, 146, 0.4);
        }

        /* Search Bar Motion */
        .search-bar input {
            width: 100%;
            padding: 18px 25px;
            border-radius: 25px;
            border: 3px solid transparent;
            background: white;
            font-size: 16px;
            transition: 0.3s all;
            box-sizing: border-box;
        }

        .search-bar input:focus {
            outline: none;
            border-color: var(--pink-mid);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(255, 175, 204, 0.2);
        }

        /* Card Transitions */
        .contact-card {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 25px;
            padding: 25px;
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: all 0.3s ease;
            opacity: 0;
            transform: translateY(20px);
            animation: slideIn 0.5s forwards ease-out;
        }

        .contact-card:hover {
            background: white;
            transform: scale(1.03) translateY(-5px);
            box-shadow: 0 20px 30px rgba(0,0,0,0.05);
        }

        @keyframes slideIn {
            to { opacity: 1; transform: translateY(0); }
        }

        .contact-actions {
            display: flex;
            gap: 10px;
        }

        .btn-danger {
            background: #ffcfd2;
            color: #a4133c;
        }
        
        .btn-danger:hover {
            background: #ff4d6d;
            color: white;
            transform: rotate(-3deg);
        }

    </style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>