<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Productos Tecnológicos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #74C0FC;
            color: white;
            padding: 20px;
            text-align: center;
        }
        header h1 {
            margin: 0;
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 20px;
        }
        .product {
            background-color: white;
            border-radius: 10px;
            width: 300px;
            margin: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease;
        }
        .product:hover {
            transform: translateY(-10px);
        }
        .product img {
            width: 100%;
            border-radius: 10px 10px 0 0;
        }
        .product h3 {
            color: #333;
            padding: 10px;
            font-size: 1.5rem;
        }
        .product p {
            color: #666;
            padding: 0 15px 20px;
            font-size: 1rem;
        }
        .product a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #0077b6;
            color: white;
            text-decoration: none;
            border-radius: 20px;
            margin-bottom: 20px;
            transition: background-color 0.3s ease;
        }
        .product a:hover {
            background-color: #005f86;
        }
        .back-button {
            display: inline-block;
            margin-top: 30px;
            padding: 10px 20px;
            background-color: #ff4c4c; /* Rojo */
            color: white;
            text-decoration: none;
            border-radius: 25px;
            font-size: 1.2rem;
            text-align: center;
        }

        .back-button:hover {
            background-color: #e63946; /* Rojo más oscuro */
        }
    </style>
</head>
<body>
    <header>
        <h1>Productos Tecnológicos</h1>
        <h3>Encuentra todos estos producto y mas en nuestra tienda!!!</h3>
        <a href="javascript:history.back()" class="back-button">Regresar</a>
    </header>
    
    <div class="container">
        <div class="product">
            <img src="./Imagenes/xyz.jpg" alt="Producto 1">
            <h3>Smartphone XYZ</h3>
            <p>El Smartphone XYZ es la última innovación en telefonía móvil, con características avanzadas y diseño moderno.</p>
            
        </div>
        
        <div class="product">
            <img src="./Imagenes/table.jpg" alt="Producto 2">
            <h3>Tablet Pro</h3>
            <p>La Tablet Pro te ofrece una pantalla de alta resolución y gran capacidad de almacenamiento. Ideal para el entretenimiento y trabajo.</p>
           
        </div>
        
        <div class="product">
            <img src="./Imagenes/images.jpg" alt="Producto 3">
            <h3>Smartwatch 3.0</h3>
            <p>El Smartwatch 3.0 es más que un reloj, es tu asistente personal en tu muñeca. Conéctalo a tu smartphone y mejora tu productividad.</p>
           
        </div>

        <div class="product">
            <img src="./Imagenes/mac.jpg" alt="Producto 4">
            <h3>Laptop Ultra</h3>
            <p>Potente, rápida y elegante. La Laptop Ultra es perfecta para profesionales que requieren rendimiento en todo momento.</p>
            
        </div>
    </div>
</body>
</html>
