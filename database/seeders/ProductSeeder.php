<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [

                    ["name" => "Acer Laptop 1", "description" => "Modern Acer laptop for daily use", "price" => 899.99, "image" => "acer1.jpg"],
                    ["name" => "Acer Laptop 2", "description" => "Slim Acer laptop with stylish design", "price" => 949.99, "image" => "acer2.jpg"],
                    ["name" => "Acer Laptop 3", "description" => "Powerful Acer gaming laptop", "price" => 1199.99, "image" => "acer3.jfif"],

                    ["name" => "Asus Laptop 1", "description" => "Lightweight Asus laptop for work", "price" => 899.99, "image" => "asus1.png"],
                    ["name" => "Asus Laptop 2", "description" => "Asus laptop with high performance", "price" => 999.99, "image" => "asus2.png"],
                    ["name" => "Asus TUF Gaming Laptop", "description" => "High performance gaming laptop", "price" => 1299.99, "image" => "asus4.jpg"],
                    ["name" => "Asus TUF Laptop", "description" => "Durable gaming laptop with RGB", "price" => 1399.99, "image" => "asus5.jfif"],
                    ["name" => "Asus Laptop Display", "description" => "Asus laptop with vibrant screen", "price" => 1099.99, "image" => "asus6.png"],

                    ["name" => "Cooling Fan RGB 1", "description" => "RGB cooling fan for PC case", "price" => 29.99, "image" => "cooling.jfif"],
                    ["name" => "Cooling Fan RGB 2", "description" => "High airflow RGB cooling fan", "price" => 34.99, "image" => "cooling2.jfif"],
                    ["name" => "Cooling Fan Set", "description" => "Triple RGB fan kit", "price" => 79.99, "image" => "cooling3.jfif"],

                    ["name" => "Intel CPU", "description" => "High performance processor", "price" => 299.99, "image" => "cpu1.jfif"],

                    ["name" => "Dell Laptop 1", "description" => "Dell laptop for office work", "price" => 899.99, "image" => "dell1.jpg"],
                    ["name" => "Dell Laptop 2", "description" => "Premium Dell ultrabook", "price" => 1199.99, "image" => "dell2.jfif"],
                    ["name" => "Dell Laptop 3", "description" => "Portable Dell laptop", "price" => 799.99, "image" => "dell3.jfif"],

                    ["name" => "Gaming Desktop 1", "description" => "RGB gaming desktop setup", "price" => 1499.99, "image" => "desktop2.jpg"],
                    ["name" => "Gaming Desktop 2", "description" => "High-end gaming PC", "price" => 1799.99, "image" => "desktop3.jfif"],
                    ["name" => "Gaming Desktop 3", "description" => "Custom RGB desktop build", "price" => 1599.99, "image" => "desktop4.jfif"],
                    ["name" => "Gaming Desktop 4", "description" => "Powerful desktop with RGB fans", "price" => 1699.99, "image" => "desktop5.jpg"],
                    ["name" => "Gaming Desktop 5", "description" => "Advanced cooling gaming PC", "price" => 1899.99, "image" => "desktop6.jpg"],

                    ["name" => "Hard Disk 1TB", "description" => "Reliable storage hard drive", "price" => 59.99, "image" => "hard1.jpg"],
                    ["name" => "Hard Disk 2TB", "description" => "High capacity HDD storage", "price" => 89.99, "image" => "had2.jpg"],

                    ["name" => "HDMI Cable", "description" => "High speed HDMI cable", "price" => 9.99, "image" => "hdmi1.webp"],
                    ["name" => "HDMI Adapter", "description" => "HDMI connector adapter", "price" => 12.99, "image" => "hdmi2.jfif"],

                    ["name" => "Gaming Headset 1", "description" => "RGB gaming headset with mic", "price" => 49.99, "image" => "head1.jfif"],
                    ["name" => "Gaming Headset 2", "description" => "Comfortable stereo headset", "price" => 39.99, "image" => "head2.jfif"],
                    ["name" => "Gaming Headset 3", "description" => "High quality sound headset", "price" => 59.99, "image" => "head3.jpg"],

                    ["name" => "Mechanical Keyboard 1", "description" => "RGB mechanical keyboard", "price" => 79.99, "image" => "keyboard1.jpg"],
                    ["name" => "Mechanical Keyboard 2", "description" => "Gaming keyboard RGB lights", "price" => 69.99, "image" => "keyboard2.jpg"],
                    ["name" => "Mechanical Keyboard 3", "description" => "High performance keyboard", "price" => 89.99, "image" => "keyboard3.jpg"],

                    ["name" => "Gaming Mouse 1", "description" => "RGB gaming mouse", "price" => 29.99, "image" => "mouse1.jpg"],
                    ["name" => "Gaming Mouse 2", "description" => "Ergonomic gaming mouse", "price" => 34.99, "image" => "mouse2.jpg"],
                    ["name" => "Gaming Mouse 3", "description" => "High precision gaming mouse", "price" => 39.99, "image" => "mouse3.jfif"],

                    ["name" => "Mouse Pad RGB", "description" => "Large RGB mouse pad", "price" => 24.99, "image" => "pad1.jfif"],
                    ["name" => "Mouse Pad XL", "description" => "Extended gaming mouse pad", "price" => 19.99, "image" => "pad2.webp"],

                    ["name" => "Power Supply 500W", "description" => "Reliable PSU for PC", "price" => 59.99, "image" => "power1.jfif"],
                    ["name" => "Power Supply 650W", "description" => "High efficiency PSU", "price" => 79.99, "image" => "power2.jpg"],

                    ["name" => "RAM 16GB", "description" => "High speed DDR4 RAM", "price" => 89.99, "image" => "ram.jfif"],
                    ["name" => "RAM RGB 16GB", "description" => "RGB gaming memory", "price" => 109.99, "image" => "ram2.jfif"],

                    ["name" => "Router 1", "description" => "Wireless router high speed", "price" => 49.99, "image" => "route1.jfif"],
                    ["name" => "Router 2", "description" => "Dual band WiFi router", "price" => 59.99, "image" => "route2.webp"],

                    ["name" => "SSD 256GB", "description" => "Fast solid state drive", "price" => 39.99, "image" => "ssd1.webp"],
                    ["name" => "SSD 512GB", "description" => "High speed SSD storage", "price" => 59.99, "image" => "ssd2.webp"],
                    ["name" => "SSD 1TB", "description" => "Large capacity SSD", "price" => 99.99, "image" => "ssd3.jfif"]
                ];

                     Product::insert($products);
                }

}
