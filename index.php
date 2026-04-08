<?php
class Page {
    private $name = "page";
    private $template = '<div style="font-family: Arial, sans-serif; text-align: center;">
            <div style="background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%); color: white; padding: 80px 20px; border-radius: 30px; margin-bottom: 50px;">
                <h1 style="font-size: 56px; margin: 0 0 20px 0;">Мир автомобилей</h1>
                <p style="font-size: 22px;">Ваш гид в мире автомобилей</p>
            </div>
            
            <div style="margin-bottom: 50px;">
                <h2 style="color: #2c3e50;">Что вас интересует?</h2>
                <div style="display: flex; gap: 30px; justify-content: center; margin-top: 30px;">
                    <a href="?page=cars" style="background: #e74c3c; color: white; padding: 15px 40px; border-radius: 50px; text-decoration: none; font-weight: bold;">🚗 Карточки машин</a>
                    <a href="?page=reviews" style="background: #3498db; color: white; padding: 15px 40px; border-radius: 50px; text-decoration: none; font-weight: bold;">⭐ Отзывы</a>
                </div>
            </div>
        </div>';
    
    public function render() {
        echo $this->template;
    }
}

class CarsPage extends Page {
    private $name = "cars";
    private $template = '
        <div style="text-align: center;">
            <h1>🚗 Каталог автомобилей</h1>
            <div style="display: flex; gap: 20px; justify-content: center; margin-top: 30px; flex-wrap: wrap;">
                <div style="border: 1px solid #ddd; border-radius: 15px; padding: 20px; width: 220px;">
                    <h3>BMW X5</h3>
                    <p>340 л.с., внедорожник</p>
                    <strong>от 5 500 000 ₽</strong>
                </div>
                <div style="border: 1px solid #ddd; border-radius: 15px; padding: 20px; width: 220px;">
                    <h3>Tesla Model 3</h3>
                    <p>450 л.с., электромобиль</p>
                    <strong>от 4 200 000 ₽</strong>
                </div>
                <div style="border: 1px solid #ddd; border-radius: 15px; padding: 20px; width: 220px;">
                    <h3>Toyota Camry</h3>
                    <p>249 л.с., седан</p>
                    <strong>от 3 000 000 ₽</strong>
                </div>
                <div style="border: 1px solid #ddd; border-radius: 15px; padding: 20px; width: 220px;">
                    <h3>Porsche 911</h3>
                    <p>450 л.с., спорткар</p>
                    <strong>от 12 000 000 ₽</strong>
                </div>
            </div>
        </div>';
    
    public function render() {
        echo $this->template;
    }
}

class ReviewsPage extends Page {
    private $name = "reviews";
    private $template = '
        <div style="text-align: center;">
            <h1>⭐ Отзывы владельцев</h1>
            <div style="display: flex; gap: 20px; justify-content: center; margin-top: 30px; flex-wrap: wrap;">
                <div style="border: 1px solid #ddd; border-radius: 15px; padding: 20px; width: 280px;">
                    <div style="color: #f39c12;">★★★★★</div>
                    <h3>Алексей</h3>
                    <p>"BMW X5 - отличный автомобиль!"</p>
                    <small>Владелец BMW X5</small>
                </div>
                <div style="border: 1px solid #ddd; border-radius: 15px; padding: 20px; width: 280px;">
                    <div style="color: #f39c12;">★★★★★</div>
                    <h3>Мария</h3>
                    <p>"Tesla - машина будущего!"</p>
                    <small>Владелица Tesla</small>
                </div>
                <div style="border: 1px solid #ddd; border-radius: 15px; padding: 20px; width: 280px;">
                    <div style="color: #f39c12;">★★★★☆</div>
                    <h3>Дмитрий</h3>
                    <p>"Camry - надежный автомобиль"</p>
                    <small>Владелец Toyota</small>
                </div>
            </div>
        </div>';
    
    public function render() {
        echo $this->template;
    }
}

$page = $_GET['page'] ?? 'page';

if ($page == 'cars') {
    $currentPage = new CarsPage();
} elseif ($page == 'reviews') {
    $currentPage = new ReviewsPage();
} else {
    $currentPage = new Page();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Мир автомобилей</title>
    <style>
        body {
            margin: 0;
            padding: 20px;
            font-family: Arial, sans-serif;
            background: #f0f2f5;
        }
        .nav-links {
            text-align: center;
            margin-bottom: 30px;
            padding: 15px;
            background: white;
            border-radius: 15px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        .nav-links a {
            display: inline-block;
            margin: 0 15px;
            padding: 12px 30px;
            background: #333;
            color: white;
            text-decoration: none;
            border-radius: 30px;
            font-weight: bold;
            transition: background 0.3s;
        }
        
        .nav-links a:hover {
            background: #e74c3c;
        }
    
        .nav-links a.active {
            background: #e74c3c;
        }
        
        .content {
            max-width: 1200px;
            margin: 0 auto;
            background: white;
            border-radius: 20px;
            padding: 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <div class="nav-links">
        <a href="?page=page" <?= $page == 'page' ? 'class="active"' : '' ?>>🏠 Главная</a>
        <a href="?page=cars" <?= $page == 'cars' ? 'class="active"' : '' ?>>🚗 Карточки машин</a>
        <a href="?page=reviews" <?= $page == 'reviews' ? 'class="active"' : '' ?>>⭐ Отзывы</a>
    </div>
    
    <div class="content">
        <?php $currentPage->render(); ?>
    </div>
</body>
</html>