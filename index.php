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

?>