<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> MERCURY </title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;800&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --pink: #ff52a1;
            --pink-soft: #ffc8dd;
            --violet: #5a189a;
            --lavender: #e2e2ff;
            --bg: #fff0f6;
            --text: #4a4a4a;
            --glass: rgba(255, 255, 255, 0.75);
        }

        /* ANIMATED BACKGROUND */
        @keyframes gradientMove {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        body {
            background: linear-gradient(-45deg, #fff0f6, #f8edff, #e2e2ff, #fff5f8);
            background-size: 400% 400%;
            animation: gradientMove 15s ease infinite;
            font-family: 'Poppins', sans-serif;
            color: var(--text);
            min-height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            padding: 20px;
        }

        .container {
            width: 100%;
            max-width: 700px;
            margin-top: 30px;
            align-self: flex-start;
        }

        /* TITLES with subtle float */
        h1, h2 {
            color: var(--violet);
            margin-bottom: 25px;
            font-weight: 800;
            text-shadow: 0 10px 20px rgba(90, 24, 154, 0.1);
        }

        /* CARDS (The Glassmorphism look) */
        .card, .group-item {
            background: var(--glass);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border-radius: 24px;
            padding: 25px;
            box-shadow: 0 15px 35px rgba(90, 24, 154, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.6);
            margin-bottom: 20px;
            animation: fadeUp 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275) both;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover, .group-item:hover {
            transform: translateY(-5px) scale(1.01);
            box-shadow: 0 20px 40px rgba(90, 24, 154, 0.12);
        }

        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(25px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* FORMS */
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--violet);
            font-size: 14px;
            margin-left: 5px;
        }

        input, select {
            width: 100%;
            padding: 14px 18px;
            border-radius: 16px;
            border: 2px solid transparent;
            background: white;
            margin-bottom: 22px;
            font-size: 14px;
            transition: 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-sizing: border-box;
            box-shadow: 0 4px 10px rgba(0,0,0,0.02);
        }

        input:focus {
            outline: none;
            border-color: var(--pink);
            transform: scale(1.02);
            box-shadow: 0 10px 20px rgba(255, 82, 161, 0.1);
        }

        /* BUTTONS (Liquid Bouncy Style) */
        .btn {
            padding: 12px 22px;
            border-radius: 16px;
            border: none;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            display: inline-flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--pink), var(--violet));
            color: white;
            box-shadow: 0 8px 20px rgba(255, 82, 161, 0.3);
        }

        .btn-primary:hover {
            transform: scale(1.1) rotate(1deg);
            box-shadow: 0 12px 25px rgba(255, 82, 161, 0.4);
        }

        .btn-secondary { background: var(--lavender); color: var(--violet); }
        .btn-secondary:hover { background: #d0d0ff; transform: scale(1.05); }

        .btn-danger { background: var(--pink-soft); color: var(--violet); }
        .btn-danger:hover { background: #ffb3c1; transform: rotate(-2deg); }

        /* BADGES */
        .group-badge {
            background: var(--pink-soft);
            color: var(--violet);
            padding: 6px 16px;
            border-radius: 999px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        .empty {
            text-align: center;
            margin-top: 60px;
            color: var(--pink);
            opacity: 0.6;
            font-weight: 500;
        }
    </style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>