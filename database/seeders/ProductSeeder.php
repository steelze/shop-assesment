<?php

namespace Database\Seeders;

use App\Enums\RoleEnum;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = Arr::take($this->products(), 100);
        $suppliers = User::select('id')->where('role', RoleEnum::SUPPLIER)->pluck('id');

        $data = [];
        foreach ($products as $product) {
            $data[] = [
                'supplier_id' => $suppliers->random(),
                'name' => $product['name'],
                'category' => $product['category'],
                'description' => $product['description'],
                'price' => $product['price'] * 100,
                'images' => json_encode([]),
                'stock' => mt_rand(0, 100)
            ];
        }

        Product::fillAndInsert($data);
    }

    protected function products(): array
    {
        return [
            [
                'name' => 'Personal Safety Alarm',
                'category' => 'safety',
                'description' => 'Compact alarm for personal safety and security.',
                'price' => 12.99
            ],
            [
                'name' => 'Organic Sweet Potatoes',
                'category' => 'Food - Produce',
                'description' => 'Fresh and organic sweet potatoes, ideal for roasting.',
                'price' => 1.99
            ],
            [
                'name' => 'Customizable Name Puzzle',
                'category' => 'Toys',
                'description' => 'Personalized wooden puzzles for children that encourage learning.',
                'price' => 29.99
            ],
            [
                'name' => 'Electric Meat Grinder',
                'category' => 'Kitchen',
                'description' => 'Powerful grinder for making sausage and burgers at home.',
                'price' => 89.99
            ],
            [
                'name' => 'Pet Hair Vacuum Cleaner Attachment',
                'category' => 'pets',
                'description' => 'specialized attachment for removing pet hair from surfaces.',
                'price' => 14.99
            ],
            [
                'name' => 'Bamboo Memory Foam Pillow',
                'category' => 'Home',
                'description' => 'Ergonomically designed pillow with breathable bamboo cover.',
                'price' => 34.99
            ],
            [
                'name' => 'Portable Hammock',
                'category' => 'Outdoor',
                'description' => 'Lightweight hammock for easy setup anywhere.',
                'price' => 27.99
            ],
            [
                'name' => 'savory Mushroom Risotto',
                'category' => 'Food - Gourmet Rice',
                'description' => 'Creamy risotto infused with wild mushrooms.',
                'price' => 6.49
            ],
            [
                'name' => 'Couscous Mix',
                'category' => 'Food - Grains',
                'description' => 'Fluffy couscous that cooks in just minutes, perfect as a side.',
                'price' => 2.49
            ],
            [
                'name' => 'Almond Joy Bars',
                'category' => 'Food - Confectionery',
                'description' => 'Chocolate-covered candy bars with coconut and almonds.',
                'price' => 1.29
            ],
            [
                'name' => 'Gluten-Free Biscuits',
                'category' => 'Food - Baking',
                'description' => 'Fluffy biscuits made without gluten',
                'price' => 3.79
            ],
            [
                'name' => 'Chocolate Dipped Fruit',
                'category' => 'Food - Snacks',
                'description' => 'Fruits dipped in rich chocolate, perfect for desserts.',
                'price' => 5.99
            ],
            [
                'name' => 'Tomato Basil Pasta Sauce',
                'category' => 'Food - Sauces',
                'description' => 'Rich and flavorful pasta sauce made with ripe tomatoes and basil.',
                'price' => 3.99
            ],
            [
                'name' => 'Portable Air Pump',
                'category' => 'Outdoor',
                'description' => 'Compact pump ideal for inflating sports equipment or rafts.',
                'price' => 19.99
            ],
            [
                'name' => 'Barbecue Chicken Pizza',
                'category' => 'Food - Frozen Foods',
                'description' => 'Pizza topped with barbecue chicken, cheese, and red onions.',
                'price' => 8.99
            ],
            [
                'name' => 'slim Wallet',
                'category' => 'Accessories',
                'description' => 'RFID-blocking slim wallet for cards and cash.',
                'price' => 24.99
            ],
            [
                'name' => 'LED Camping Lantern with USB Charging',
                'category' => 'Outdoor',
                'description' => 'Rechargeable lantern with multiple brightness settings for outdoors.',
                'price' => 34.99
            ],
            [
                'name' => 'smartphone Hand Grip',
                'category' => 'Accessories',
                'description' => 'sturdy grip to hold your phone securely while taking selfies.',
                'price' => 9.99
            ],
            [
                'name' => 'Roasted Vegetable Medley',
                'category' => 'Food - Frozen Foods',
                'description' => 'A mix of frozen roasted vegetables for an easy side dish.',
                'price' => 3.99
            ],
            [
                'name' => 'Dog Collar',
                'category' => 'pets',
                'description' => 'Adjustable dog collar with personalized tags.',
                'price' => 15.99
            ],
            [
                'name' => 'Pineapple Teriyaki Chicken Mix',
                'category' => 'Food - Meat',
                'description' => 'A perfect blend of pineapple and teriyaki for stir-fry.',
                'price' => 6.99
            ],
            [
                'name' => 'Mini Hand Gesture Drone',
                'category' => 'Toys',
                'description' => 'Toy drone that flies with gestures and is easy to control.',
                'price' => 29.99
            ],
            [
                'name' => 'USB Desk Fan',
                'category' => 'Home',
                'description' => 'Compact USB fan for personal cooling.',
                'price' => 14.99
            ],
            [
                'name' => 'Video Camera',
                'category' => 'Electronics',
                'description' => '1080p HD video camera with night vision.',
                'price' => 199
            ],
            [
                'name' => 'Fridge Magnet Set',
                'category' => 'Home',
                'description' => 'Fun fridge magnets to decorate your kitchen.',
                'price' => 15.99
            ],
            [
                'name' => 'stainless Steel Water Pitcher',
                'category' => 'Kitchen',
                'description' => 'Insulated pitcher to keep beverages cold or hot.',
                'price' => 39.99
            ],
            [
                'name' => 'Automatic Pet Feeder',
                'category' => 'pets',
                'description' => 'Programmable pet feeder for scheduled meals.',
                'price' => 69.99
            ],
            [
                'name' => 'Board Game Storage',
                'category' => 'Toys',
                'description' => 'Organize your board games with this storage bin.',
                'price' => 19.99
            ],
            [
                'name' => 'Lightweight Rain Jacket',
                'category' => 'Clothing - Outerwear',
                'description' => 'Water-resistant jacket ideal for outdoor activities, featuring a packable design.',
                'price' => 79.99
            ],
            [
                'name' => 'V-Neck Sweater',
                'category' => 'Clothing - Tops',
                'description' => 'Classic V-neck sweater crafted from soft wool for warmth and style.',
                'price' => 49.99
            ],
            [
                'name' => 'Cacao Powder',
                'category' => 'Food - Baking',
                'description' => 'Unsweetened cacao powder for baking and smoothies.',
                'price' => 4.49
            ],
            [
                'name' => 'Classic Watch',
                'category' => 'Accessories',
                'description' => 'Timeless analog watch with a leather strap.',
                'price' => 99.99
            ],
            [
                'name' => 'sliced Turkey Breast',
                'category' => 'Food - Deli Meats',
                'description' => 'Oven-roasted sliced turkey, perfect for sandwiches.',
                'price' => 5.49
            ],
            [
                'name' => 'Bamboo Cutting Board Set',
                'category' => 'Kitchen',
                'description' => 'Eco-friendly bamboo cutting boards in various sizes.',
                'price' => 34.99
            ],
            [
                'name' => 'Utility Cargo Pants',
                'category' => 'Clothing - Pants',
                'description' => 'Practical cargo pants with lots of pockets for functionality.',
                'price' => 54.99
            ],
            [
                'name' => 'Body Wash',
                'category' => 'Beauty',
                'description' => 'Moisturizing body wash with natural ingredients.',
                'price' => 12.99
            ],
            [
                'name' => 'Artisan Cornbread Mix',
                'category' => 'Food - Baking',
                'description' => 'Mix for homemade cornbread, just add water and bake for a delicious side.',
                'price' => 2.49
            ],
            [
                'name' => 'Pet Training Clicker',
                'category' => 'pets',
                'description' => 'simple tool to train your pet with positive reinforcement.',
                'price' => 5.99
            ],
            [
                'name' => 'Homestyle Beef Stew',
                'category' => 'Food - Canned Soups',
                'description' => 'Hearty beef stew with vegetables, ready to heat and serve.',
                'price' => 7.99
            ],
            [
                'name' => 'Pine Nuts',
                'category' => 'Food - Nuts',
                'description' => 'Nutty flavor perfect for pesto and salads.',
                'price' => 7.99
            ],
            [
                'name' => 'Honey Sriracha Chicken Bites',
                'category' => 'Food - Frozen Foods',
                'description' => 'Frozen chicken bites coated in a honey sriracha glaze, spicy and sweet.',
                'price' => 7.99
            ],
            [
                'name' => 'Frozen Mixed Vegetables',
                'category' => 'Food - Frozen',
                'description' => 'A mix of carrots, peas, and corn, easy to stir-fry.',
                'price' => 1.99
            ],
            [
                'name' => 'Peas (frozen)',
                'category' => 'Food - Frozen Foods',
                'description' => 'Frozen green peas, a great addition to meals.',
                'price' => 1.89
            ],
            [
                'name' => 'LED Canopy Lights',
                'category' => 'Outdoor',
                'description' => 'Energy-efficient lights to illuminate outdoor areas.',
                'price' => 29.99
            ],
            [
                'name' => 'Fleece Throw Blanket',
                'category' => 'Home',
                'description' => 'super soft fleece blanket, perfect for coziness.',
                'price' => 29.99
            ],
            [
                'name' => 'Noise-Canceling Earbuds',
                'category' => 'Audio',
                'description' => 'Wireless earbuds designed for immersive sound experience.',
                'price' => 79.99
            ],
            [
                'name' => 'Wrap Front Midi Skirt',
                'category' => 'Clothing - Bottoms',
                'description' => 'Elegant midi skirt with a wrap design, great for both formal and casual events.',
                'price' => 44.99
            ],
            [
                'name' => 'Pet Carrier',
                'category' => 'pets',
                'description' => 'Comfortable pet carrier for travel and vet visits.',
                'price' => 39.99
            ],
            [
                'name' => 'Chickpea Pasta',
                'category' => 'Food - Pasta',
                'description' => 'Healthy pasta alternative made from chickpeas',
                'price' => 4.19
            ],
            [
                'name' => 'Coloring Books for Adults',
                'category' => 'Books',
                'description' => 'Intricate designs for adults to relax and unwind.',
                'price' => 14.99
            ],
            [
                'name' => 'Creamy Avocado Dip',
                'category' => 'Food - Snacks',
                'description' => 'Rich and creamy dip made with real avocado, great for chips.',
                'price' => 3.49
            ],
            [
                'name' => 'Classic Pumps',
                'category' => 'Clothing - Footwear',
                'description' => 'Elegant classic pumps that add sophistication to any outfit.',
                'price' => 64.99
            ],
            [
                'name' => 'Collapsible Water Bottle',
                'category' => 'Fitness',
                'description' => 'space-saving collapsible bottle for outdoor activities.',
                'price' => 12.99
            ],
            [
                'name' => 'Fashionable Fanny Pack',
                'category' => 'Clothing - Accessories',
                'description' => 'A trendy fanny pack, perfect for hands-free outings.',
                'price' => 24.99
            ],
            [
                'name' => 'Organic Brown Rice Cakes',
                'category' => 'Food - Snacks',
                'description' => 'Light and crunchy rice cakes made from organic brown rice.',
                'price' => 3.99
            ],
            [
                'name' => 'Portable Hammock Swing',
                'category' => 'Outdoor',
                'description' => 'Lightweight and portable swing hammock for relaxing outdoors.',
                'price' => 59.99
            ],
            [
                'name' => 'Tuna Fish (canned)',
                'category' => 'Food - Canned Goods',
                'description' => 'Wild-caught tuna in olive oil, perfect for salads.',
                'price' => 2.29
            ],
            [
                'name' => 'Oven Mitts with Pocket',
                'category' => 'Kitchen',
                'description' => 'silicone oven mitts designed for safe cooking and baking.',
                'price' => 19.99
            ],
            [
                'name' => 'Energy Bites',
                'category' => 'Food - Snacks',
                'description' => 'Healthy energy bites made with oats and natural sweeteners.',
                'price' => 3.99
            ],
            [
                'name' => 'Ice Cream Scoop',
                'category' => 'Kitchen',
                'description' => 'Durable scoop for perfectly shaped ice cream servings.',
                'price' => 12.99
            ],
            [
                'name' => 'surimi Crab Sticks',
                'category' => 'Food - Seafood',
                'description' => 'synthetic crab meat sticks, great for salads and sushi.',
                'price' => 4.19
            ],
            [
                'name' => 'Kale and Quinoa Salad',
                'category' => 'Food - Salads',
                'description' => 'A nutritious salad with kale, quinoa, and a zesty lemon dressing.',
                'price' => 6.49
            ],
            [
                'name' => 'Wireless Earbud Silicone Covers',
                'category' => 'Accessories',
                'description' => 'soft silicone earbud covers for comfort and fit.',
                'price' => 9.99
            ],
            [
                'name' => 'Interactive Robot Toy',
                'category' => 'Toys',
                'description' => 'Fun robot that engages kids with games and activities.',
                'price' => 34.99
            ],
            [
                'name' => 'Almond Quinoa Salad',
                'category' => 'Food - Salads',
                'description' => 'Healthy salad made with quinoa, almonds, and mixed greens, perfect for a light meal.',
                'price' => 5.99
            ],
            [
                'name' => 'Portable Pet Pooper Scooper',
                'category' => 'pets',
                'description' => 'Compact scooper for easy waste clean-up during walks.',
                'price' => 12.99
            ],
            [
                'name' => 'Pork Chops',
                'category' => 'Food - Meat',
                'description' => 'Tender and juicy pork chops, perfect on the grill.',
                'price' => 9.49
            ],
            [
                'name' => 'Outdoor Portable Fire Pit',
                'category' => 'Outdoor',
                'description' => 'Compact fire pit for campfires and gatherings.',
                'price' => 149.99
            ],
            [
                'name' => 'Coconut Chips',
                'category' => 'Food - Snacks',
                'description' => 'Crunchy, toasted coconut chips for snacking.',
                'price' => 3.59
            ],
            [
                'name' => 'Dish Soap Dispenser',
                'category' => 'Kitchen',
                'description' => 'stylish dish soap dispenser with sponge holder.',
                'price' => 18.99
            ],
            [
                'name' => 'Bluetooth Shower Speaker',
                'category' => 'Audio',
                'description' => 'Water-resistant Bluetooth speaker for showers.',
                'price' => 24.99
            ],
            [
                'name' => 'Trendy Bomber Jacket',
                'category' => 'Clothing - Outerwear',
                'description' => 'A fashion-forward bomber jacket to elevate your casual looks.',
                'price' => 69.99
            ],
            [
                'name' => 'Berry Smoothie Mix',
                'category' => 'Food - Frozen Foods',
                'description' => 'Frozen mix for quick berry smoothies.',
                'price' => 4.99
            ],
            [
                'name' => 'Artisan Cornbread Mix',
                'category' => 'Food - Baking',
                'description' => 'Mix for homemade cornbread, just add water and bake for a delicious side.',
                'price' => 2.49
            ],
            [
                'name' => 'Mayonnaise',
                'category' => 'Food - Condiments',
                'description' => 'Creamy mayonnaise, perfect for salads and sandwiches.',
                'price' => 3.29
            ],
            [
                'name' => 'Coconut Flakes',
                'category' => 'Food - Baking',
                'description' => 'Unsweetened coconut flakes for baking and topping.',
                'price' => 3.29
            ],
            [
                'name' => 'Heavy Duty Gardening Tool Set',
                'category' => 'Garden',
                'description' => 'Comprehensive tool set for gardening enthusiasts.',
                'price' => 49.99
            ],
            [
                'name' => 'Pet Carrier Backpack',
                'category' => 'pets',
                'description' => 'Comfortable and breathable backpack for carrying small pets.',
                'price' => 39.99
            ],
            [
                'name' => 'sweet Potato Chips',
                'category' => 'Food - Snacks',
                'description' => 'Deliciously crunchy sweet potato chips, seasoned to perfection.',
                'price' => 2.99
            ],
            [
                'name' => 'Collapsible Folding Chair',
                'category' => 'Outdoor',
                'description' => 'Lightweight and portable chair for camping or events.',
                'price' => 29.99
            ],
            [
                'name' => 'Cajun Seasoning',
                'category' => 'Food - Spices',
                'description' => 'spicy seasoning mix for all your favorite dishes.',
                'price' => 1.99
            ],
            [
                'name' => 'Memory Card',
                'category' => 'storage',
                'description' => '64GB SD memory card for cameras and devices.',
                'price' => 15.99
            ],
            [
                'name' => 'Fruit Infuser Water Bottle',
                'category' => 'Fitness',
                'description' => 'Water bottle designed to infuse flavors from fruits.',
                'price' => 15.99
            ],
            [
                'name' => 'Digital Food Thermometer',
                'category' => 'Kitchen',
                'description' => 'Instant-read thermometer for accurate cooking temperatures.',
                'price' => 19.99
            ],
            [
                'name' => 'Teriyaki Salmon Fillets',
                'category' => 'Food - Seafood',
                'description' => 'Frozen salmon fillets marinated in teriyaki sauce, ready to grill or bake.',
                'price' => 9.99
            ],
            [
                'name' => 'Rechargeable Battery Organizer',
                'category' => 'Home',
                'description' => 'Tidy storage solution for rechargeable batteries.',
                'price' => 17.99
            ],
            [
                'name' => 'Classic Chicken Noodle Soup',
                'category' => 'Food - Canned Goods',
                'description' => 'A comforting soup filled with chicken and noodles in broth.',
                'price' => 3.49
            ],
            [
                'name' => 'Dried Fruit Medley',
                'category' => 'Food - Snacks',
                'description' => 'A delightful mix of dried fruits for trail mix or snacks.',
                'price' => 5.49
            ],
            [
                'name' => 'Cinnamon Sugar Mix',
                'category' => 'Food - Baking',
                'description' => 'sweet mixture of cinnamon and sugar for sprinkling.',
                'price' => 1.49
            ],
            [
                'name' => 'Pet Water Bottle',
                'category' => 'pets',
                'description' => 'Portable water bottle for pets when traveling.',
                'price' => 18.99
            ],
            [
                'name' => 'Deluxe First Aid Kit',
                'category' => 'Health',
                'description' => 'Comprehensive first aid kit for home and travel.',
                'price' => 39.99
            ],
            [
                'name' => 'Blackberry Jam',
                'category' => 'Food - Condiments',
                'description' => 'Delicious homemade style blackberry jam.',
                'price' => 4.29
            ],
            [
                'name' => 'Teriyaki Tofu Stir-Fry',
                'category' => 'Food - Prepared Meals',
                'description' => 'Tofu stir-fried with fresh vegetables in teriyaki sauce.',
                'price' => 7.49
            ],
            [
                'name' => 'Comfortable Jogger Pants',
                'category' => 'Clothing - Bottoms',
                'description' => 'Relaxed fit joggers made from soft fleece, ideal for lounging or workouts.',
                'price' => 29.99
            ],
            [
                'name' => 'Non-Stick Grill Pan',
                'category' => 'Kitchen',
                'description' => 'Heavy-duty grill pan for indoor grilling.',
                'price' => 39.99
            ],
            [
                'name' => 'Biodegradable Phone Case',
                'category' => 'Accessories',
                'description' => 'Eco-friendly phone case designed to decompose safely.',
                'price' => 23.99
            ],
            [
                'name' => 'Roasted Sweet Corn',
                'category' => 'Food - Frozen',
                'description' => 'sweet corn roasted to perfection for a delightful side.',
                'price' => 1.99
            ],
            [
                'name' => 'Thai Peanut Noodles',
                'category' => 'Food - Pasta',
                'description' => 'Noodles tossed in a spicy Thai peanut sauce.',
                'price' => 4.99
            ],
            [
                'name' => 'Comfortable Bed Pillow',
                'category' => 'Home',
                'description' => 'supportive pillow designed for a good night\'s sleep.',
                'price' => 24.99
            ],
            [
                'name' => 'Car Sunshade',
                'category' => 'Automotive',
                'description' => 'Windshield sunshade for car interior protection.',
                'price' => 19.99
            ],
            [
                'name' => 'Folding Exercise Bike',
                'category' => 'Fitness',
                'description' => 'space-saving bike for indoor workouts.',
                'price' => 199.99
            ],
            [
                'name' => 'Grilled Vegetable Medley',
                'category' => 'Food - Vegetables',
                'description' => 'A mix of grilled vegetables, ready to heat for quick side dishes.',
                'price' => 4.49
            ],
            [
                'name' => 'Gardening Gloves',
                'category' => 'Garden',
                'description' => 'Durable gardening gloves with reinforced fingertips.',
                'price' => 15.99
            ],
            [
                'name' => 'Kids Tablet',
                'category' => 'Electronics',
                'description' => 'Durable tablet designed for kids with parental controls.',
                'price' => 129.99
            ],
            [
                'name' => 'Ramen Noodle Soup Cups',
                'category' => 'Food - Prepared Meals',
                'description' => 'Instant ramen cups with flavor-packed broth.',
                'price' => 1.29
            ],
            [
                'name' => 'Tropical Fruit Bowl',
                'category' => 'Food - Snacks',
                'description' => 'A mix of tropical fruits for a refreshing snack or dessert.',
                'price' => 4.99
            ],
            [
                'name' => 'Belted Trench Coat',
                'category' => 'Clothing - Outerwear',
                'description' => 'Timeless belted trench coat for a polished look during fall.',
                'price' => 89.99
            ],
            [
                'name' => 'Coloring Books for Adults',
                'category' => 'Books',
                'description' => 'Intricate designs for adults to relax and unwind.',
                'price' => 14.99
            ],
            [
                'name' => 'stylish Combat Boots',
                'category' => 'Clothing - Shoes',
                'description' => 'Bold combat boots that make a statement with any outfit.',
                'price' => 99.99
            ],
            [
                'name' => 'smart WiFi Plug',
                'category' => 'smart Home',
                'description' => 'Control appliances remotely using your smartphone.',
                'price' => 19.99
            ],
            [
                'name' => 'LED Flashing Pet Collar',
                'category' => 'pets',
                'description' => 'safety collar with flashing lights for pets during night walks.',
                'price' => 14.99
            ],
            [
                'name' => 'Golf Polo Shirt',
                'category' => 'Clothing - Tops',
                'description' => 'Breathable polo shirt designed for both style and comfort on the greens.',
                'price' => 39.99
            ],
            [
                'name' => 'sushi Roll Kit',
                'category' => 'Food - Cooking Kits',
                'description' => 'All ingredients needed to make your own sushi',
                'price' => 9.99
            ],
            [
                'name' => 'Avocado Lime Dressing',
                'category' => 'Food - Condiments',
                'description' => 'Refreshing dressing made with avocado and lime, perfect for salads.',
                'price' => 4.29
            ],
            [
                'name' => 'silicone Ice Cube Tray',
                'category' => 'Kitchen',
                'description' => 'Flexible tray for easy-release ice cubes.',
                'price' => 10.99
            ],
            [
                'name' => 'Camera Lens Cleaning Kit',
                'category' => 'Photography',
                'description' => 'Complete cleaning kit for camera lenses.',
                'price' => 14.99
            ],
            [
                'name' => 'Tailored Dress Pants',
                'category' => 'Clothing - Bottoms',
                'description' => 'smart tailored dress pants, perfect for work or formal events.',
                'price' => 79.99
            ],
            [
                'name' => 'Foam Muscle Roller',
                'category' => 'Fitness',
                'description' => 'Relieve muscle tension and soreness with this foam roller.',
                'price' => 24.99
            ],
            [
                'name' => 'Children\'s Gardening Set',
                'category' => 'Toys',
                'description' => 'Fun gardening tools designed specifically for kids.',
                'price' => 19.99
            ],
            [
                'name' => 'First Aid Kit',
                'category' => 'Health',
                'description' => 'Comprehensive first aid kit for emergency situations.',
                'price' => 29.99
            ],
            [
                'name' => 'Peach Salsa',
                'category' => 'Food - Dips',
                'description' => 'sweet and spicy salsa made with fresh peaches.',
                'price' => 3.29
            ],
            [
                'name' => 'sea Salt Caramel Brownie',
                'category' => 'Food - Bakery',
                'description' => 'Moist brownie topped with sea salt and caramel drizzle.',
                'price' => 2.49
            ],
            [
                'name' => 'Portable Ice Maker',
                'category' => 'Kitchen',
                'description' => 'Compact ice maker for creating ice at home or in offices.',
                'price' => 199.99
            ],
            [
                'name' => 'Kale Salad Kit',
                'category' => 'Food - Salads',
                'description' => 'Ready-to-eat salad with kale, lemon, and cheese.',
                'price' => 4.99
            ],
            [
                'name' => 'savory Oatmeal',
                'category' => 'Food - Breakfast',
                'description' => 'Oatmeal made with savory spices and vegetables.',
                'price' => 2.49
            ],
            [
                'name' => 'Buffalo Chicken Wraps',
                'category' => 'Food - Prepared Meals',
                'description' => 'savory wraps with buffalo chicken and fresh vegetables.',
                'price' => 5.99
            ],
            [
                'name' => 'Greek Yogurt',
                'category' => 'Food - Dairy',
                'description' => 'Creamy Greek yogurt packed with protein and probiotics.',
                'price' => 1.99
            ],
            [
                'name' => 'Honey Sesame Chicken Mix',
                'category' => 'Food - Frozen Meals',
                'description' => 'A meal kit featuring tender chicken with honey sesame sauce.',
                'price' => 8.99
            ],
            [
                'name' => 'Wall-Mounted Organizer',
                'category' => 'Home',
                'description' => 'Practical organizer for keeping your home tidy and clutter-free.',
                'price' => 34.99
            ],
            [
                'name' => 'Frozen Pizza',
                'category' => 'Food - Frozen Foods',
                'description' => 'Delicious frozen pizza with a variety of toppings.',
                'price' => 7.99
            ],
            [
                'name' => 'White Rice',
                'category' => 'Food - Grains',
                'description' => 'Plain white rice, a staple for any meal.',
                'price' => 1.49
            ],
            [
                'name' => 'Fitbit Activity Tracker',
                'category' => 'Fitness',
                'description' => 'Advanced wristband that tracks daily activities and sleep.',
                'price' => 99.99
            ],
            [
                'name' => 'Indoor Grill',
                'category' => 'Kitchen',
                'description' => 'Electric indoor grill for quick meals.',
                'price' => 59.99
            ],
            [
                'name' => 'smartphone Photography Tripod',
                'category' => 'Electronics',
                'description' => 'Lightweight tripod designed for smartphone photography.',
                'price' => 29.99
            ],
            [
                'name' => 'striped Long Sleeve Shirt',
                'category' => 'Clothing - Shirts',
                'description' => 'A casual striped long sleeve shirt that\'s perfect for layering.',
                'price' => 29.99
            ],
            [
                'name' => 'Whole Wheat Pasta',
                'category' => 'Food - Grains',
                'description' => 'Nutritious and hearty pasta made from whole wheat flour.',
                'price' => 2.49
            ],
            [
                'name' => 'Dog Training Whistle',
                'category' => 'pets',
                'description' => 'High-frequency whistle for training your dog effectively.',
                'price' => 8.99
            ],
            [
                'name' => 'Coconut Chips',
                'category' => 'Food - Snacks',
                'description' => 'Crunchy, toasted coconut chips for snacking.',
                'price' => 3.59
            ],
            [
                'name' => 'Kale Chips',
                'category' => 'Food - Snacks',
                'description' => 'Healthy, crunchy kale chips, a nutritious snack.',
                'price' => 3.99
            ],
            [
                'name' => 'Dog Waste Bag Dispenser',
                'category' => 'pets',
                'description' => 'Convenient dispenser for dog waste bags on walks.',
                'price' => 6.99
            ],
            [
                'name' => 'Grilled Vegetable Medley',
                'category' => 'Food - Vegetables',
                'description' => 'A mix of grilled vegetables, ready to heat for quick side dishes.',
                'price' => 4.49
            ],
            [
                'name' => 'sweet Potato and Chickpea Bowl',
                'category' => 'Food - Frozen Food',
                'description' => 'A nourishing bowl of sweet potatoes and chickpeas with spices.',
                'price' => 6.49
            ],
            [
                'name' => 'Low-Fat Cottage Cheese',
                'category' => 'Food - Dairy',
                'description' => 'Creamy cottage cheese, perfect for healthy snacking.',
                'price' => 2.99
            ],
            [
                'name' => 'steak Seasoning Rub',
                'category' => 'Food - Spices',
                'description' => 'A blend of spices perfect for seasoning steak.',
                'price' => 2.49
            ],
            [
                'name' => 'solar Garden Lights',
                'category' => 'Outdoor',
                'description' => 'Energy-efficient lights that charge during the day and illuminate at night.',
                'price' => 39.99
            ],
            [
                'name' => 'Cooking Utensil Set',
                'category' => 'Kitchen',
                'description' => 'Complete set of cooking utensils made from bamboo.',
                'price' => 24.99
            ],
            [
                'name' => 'High-Waisted Skirt',
                'category' => 'Clothing - Bottoms',
                'description' => 'Chic high-waisted skirt, perfect for professional or casual settings.',
                'price' => 34.99
            ],
            [
                'name' => 'Outdoor Picnic Blanket',
                'category' => 'Outdoor',
                'description' => 'Water-resistant blanket for picnics and outdoor events.',
                'price' => 34.99
            ],
            [
                'name' => 'Chocolate Mint Protein Shake',
                'category' => 'Food - Beverages',
                'description' => 'A nutritious shake with rich chocolate and refreshing mint flavors.',
                'price' => 3.99
            ],
            [
                'name' => 'Pet First Aid Kit',
                'category' => 'pets',
                'description' => 'Essential kit for taking care of your pets health emergencies.',
                'price' => 29.99
            ],
            [
                'name' => 'Biodegradable Dog Waste Bags',
                'category' => 'pets',
                'description' => 'Eco-friendly bags for picking up after your pet.',
                'price' => 14.99
            ],
            [
                'name' => 'Travel Shoe Bags Set',
                'category' => 'Travel',
                'description' => 'set of breathable bags for organizing shoes while traveling.',
                'price' => 15.99
            ],
            [
                'name' => 'Orange Ginger Vinaigrette',
                'category' => 'Food - Condiments',
                'description' => 'Tangy vinaigrette with orange and ginger flavors.',
                'price' => 3.99
            ],
            [
                'name' => 'Banana Chips',
                'category' => 'Food - Snacks',
                'description' => 'Crunchy and sweet banana chips, a great on-the-go snack.',
                'price' => 1.99
            ],
            [
                'name' => 'Roasted Garlic Mashed Potatoes',
                'category' => 'Food - Frozen Foods',
                'description' => 'Creamy mashed potatoes infused with roasted garlic flavor.',
                'price' => 3.99
            ],
            [
                'name' => 'Coconut Milk Ice Cream',
                'category' => 'Food - Frozen Desserts',
                'description' => 'Dairy-free ice cream made with coconut milk, creamy and delicious.',
                'price' => 6.99
            ],
            [
                'name' => 'Yoga Mat Carrier',
                'category' => 'Fitness',
                'description' => 'Convenient carrier for transporting yoga mat.',
                'price' => 12.99
            ],
            [
                'name' => 'Magnetic Whiteboard',
                'category' => 'Office',
                'description' => 'Reusable whiteboard for notes and reminders with magnetic backing.',
                'price' => 34.99
            ],
            [
                'name' => 'Chocolate Coconut Protein Balls',
                'category' => 'Food - Snacks',
                'description' => 'No-bake protein balls with chocolate and coconut flavors.',
                'price' => 2.99
            ],
            [
                'name' => 'Outdoor String Lights',
                'category' => 'Outdoor',
                'description' => 'Fairy lights perfect for decorating patios and backyards.',
                'price' => 24.99
            ],
            [
                'name' => 'Oven Mitts',
                'category' => 'Kitchen',
                'description' => 'silicone oven mitts for safe handling of hot cookware.',
                'price' => 15.99
            ],
            [
                'name' => 'stick Vacuums Cleaner',
                'category' => 'Home Appliances',
                'description' => 'Cordless vacuum cleaner for quick clean-ups.',
                'price' => 129.99
            ],
            [
                'name' => 'Thai Green Curry Paste',
                'category' => 'Food - Sauces',
                'description' => 'A rich curry paste for making authentic Thai green curry at home.',
                'price' => 2.49
            ],
            [
                'name' => 'Electric Griddle with Removable Plates',
                'category' => 'Kitchen',
                'description' => 'Non-stick surface for easy cooking and cleaning.',
                'price' => 59.99
            ],
            [
                'name' => 'Foam Muscle Roller',
                'category' => 'Fitness',
                'description' => 'Relieve muscle tension and soreness with this foam roller.',
                'price' => 24.99
            ],
            [
                'name' => 'Camping Chair',
                'category' => 'Outdoor',
                'description' => 'Portable folding camping chair with cup holder.',
                'price' => 29.99
            ],
            [
                'name' => 'Electric Food Slicer',
                'category' => 'Kitchen',
                'description' => 'Versatile slicer for meats, cheeses, and vegetables.',
                'price' => 99.99
            ],
            [
                'name' => 'Handmade Leather Wallet',
                'category' => 'Accessories',
                'description' => 'High-quality leather wallet with multiple compartments.',
                'price' => 49.99
            ],
            [
                'name' => 'Peanut Butter Pretzel Nuggets',
                'category' => 'Food - Snacks',
                'description' => 'Crunchy pretzel nuggets filled with creamy peanut butter.',
                'price' => 3.29
            ],
            [
                'name' => 'Graphic Print Leggings',
                'category' => 'Clothing - Activewear',
                'description' => 'Trendy leggings with a unique graphic print, versatile for workouts and casual wear.',
                'price' => 29.99
            ],
            [
                'name' => 'Handmade Wooden Utensil Set',
                'category' => 'Kitchen',
                'description' => 'Unique handcrafted utensils for cooking and serving.',
                'price' => 24.99
            ],
            [
                'name' => 'Voice-Controlled Speaker',
                'category' => 'Audio',
                'description' => 'smart speaker with Alexa and music streaming features.',
                'price' => 99.99
            ],
            [
                'name' => 'spaghetti Squash',
                'category' => 'Food - Produce',
                'description' => 'Low-carb vegetable for pasta alternatives.',
                'price' => 3.99
            ],
            [
                'name' => 'Digital Alarm Clock',
                'category' => 'Home',
                'description' => 'snooze function and LED display for easy reading.',
                'price' => 19.99
            ],
            [
                'name' => 'Wireless Gaming Mouse',
                'category' => 'Gaming',
                'description' => 'Ergonomic mouse designed for gamers with high DPI.',
                'price' => 39.99
            ],
            [
                'name' => 'Homestyle Beef Stew',
                'category' => 'Food - Canned Soups',
                'description' => 'Hearty beef stew with vegetables, ready to heat and serve.',
                'price' => 7.99
            ],
            [
                'name' => 'Honey Mustard Chicken Breasts',
                'category' => 'Food - Meat',
                'description' => 'Marinated chicken breasts coated in a sweet honey mustard glaze.',
                'price' => 8.99
            ],
            [
                'name' => 'Caramelized Onion Dip',
                'category' => 'Food - Dairy',
                'description' => 'Creamy dip made with caramelized onions, perfect for chips or veggies.',
                'price' => 3.99
            ],
            [
                'name' => 'Potato Wedge Seasoning',
                'category' => 'Food - Condiments',
                'description' => 'seasoning mix for making crispy and flavorful potato wedges.',
                'price' => 2.49
            ],
            [
                'name' => 'Insulated Lunch Bag',
                'category' => 'Kitchen',
                'description' => 'stylish insulated lunch bag for on-the-go meals.',
                'price' => 24.99
            ],
            [
                'name' => 'Cold Brew Coffee Concentrate',
                'category' => 'Food - Beverages',
                'description' => 'Rich and smooth cold brew coffee concentrate, just add water or milk.',
                'price' => 7.99
            ],
            [
                'name' => 'Graphic Print Leggings',
                'category' => 'Clothing - Activewear',
                'description' => 'Trendy leggings with a unique graphic print, versatile for workouts and casual wear.',
                'price' => 29.99
            ],
            [
                'name' => 'Rice Noodles',
                'category' => 'Food - Grains',
                'description' => 'Thin rice noodles, ideal for stir-fries and soups.',
                'price' => 3.49
            ],
            [
                'name' => 'Pet Travel Bed',
                'category' => 'pets',
                'description' => 'Portable bed for pets while traveling.',
                'price' => 26.99
            ],
            [
                'name' => 'Pistachio Ice Cream',
                'category' => 'Food - Frozen Desserts',
                'description' => 'Creamy pistachio-flavored ice cream with real nuts.',
                'price' => 4.99
            ],
            [
                'name' => 'Wireless Printer',
                'category' => 'Office',
                'description' => 'Compact wireless printer for home use.',
                'price' => 99.99
            ],
            [
                'name' => 'Buffalo Stilton Cheese',
                'category' => 'Food - Cheese',
                'description' => 'spicy blue cheese with a hint of buffalo flavor.',
                'price' => 8.99
            ],
            [
                'name' => 'sourdough Bread',
                'category' => 'Food - Bakery',
                'description' => 'Artisan-made sourdough bread with a tangy flavor.',
                'price' => 4.99
            ],
            [
                'name' => 'Buffalo Chicken Dip',
                'category' => 'Food - Dips',
                'description' => 'spicy and creamy dip made with shredded chicken, perfect for parties.',
                'price' => 5.99
            ],
            [
                'name' => 'Deluxe First Aid Kit',
                'category' => 'Health',
                'description' => 'Comprehensive first aid kit for home and travel.',
                'price' => 39.99
            ],
            [
                'name' => 'Weighted Blanket for Adults',
                'category' => 'Health',
                'description' => 'A calming blanket that provides gentle pressure for relaxation.',
                'price' => 59.99
            ],
            [
                'name' => 'Inflatable Party Cooler',
                'category' => 'Outdoor',
                'description' => 'Fun inflatable cooler to keep drinks cold at parties.',
                'price' => 19.99
            ],
            [
                'name' => 'Heart-Shaped Baking Molds',
                'category' => 'Kitchen',
                'description' => 'Love-themed molds for creating desserts and treats.',
                'price' => 10.99
            ],
            [
                'name' => 'Cinnamon Apple Sauce',
                'category' => 'Food - Canned Goods',
                'description' => 'Delicious apple sauce with a hint of cinnamon',
                'price' => 2.49
            ],
            [
                'name' => 'Frozen Cauliflower Rice',
                'category' => 'Food - Frozen Foods',
                'description' => 'Convenient and low-carb alternative to traditional rice.',
                'price' => 2.99
            ],
            [
                'name' => 'Cinnamon Sugar Tortilla Chips',
                'category' => 'Food - Snacks',
                'description' => 'Crispy chips with a sweet twist, perfect for dipping.',
                'price' => 3.29
            ],
            [
                'name' => 'Athletic Compression Tights',
                'category' => 'Clothing - Activewear',
                'description' => 'High-performance compression tights designed for optimal support and comfort.',
                'price' => 39.99
            ],
            [
                'name' => 'Mini Indoor Herb Garden Kit',
                'category' => 'Garden',
                'description' => 'All-in-one kit for growing herbs in your kitchen.',
                'price' => 24.99
            ],
            [
                'name' => 'Zesty Garlic Hummus',
                'category' => 'Food - Snacks',
                'description' => 'Creamy chickpea dip infused with zesty garlic flavor.',
                'price' => 3.99
            ],
            [
                'name' => 'Microfiber Cleaning Cloths',
                'category' => 'Home',
                'description' => 'Pack of ultra-soft microfiber cloths for cleaning.',
                'price' => 9.99
            ],
            [
                'name' => 'Classic Leather Wallet',
                'category' => 'Clothing - Accessories',
                'description' => 'A sleek leather wallet that combines style and functionality.',
                'price' => 34.99
            ],
            [
                'name' => 'Artisan Bread',
                'category' => 'Food - Bakery',
                'description' => 'Freshly baked artisan bread, perfect for sandwiches or toasting.',
                'price' => 4.59
            ],
            [
                'name' => 'Bamboo Cotton Tank Top',
                'category' => 'Clothing - Tops',
                'description' => 'sustainable tank top made of bamboo cotton, offering breathability and comfort.',
                'price' => 22.99
            ],
            [
                'name' => 'samoas Cookie Mix',
                'category' => 'Food - Baking',
                'description' => 'Baking mix to create your favorite Samoa-style cookies at home.',
                'price' => 5.59
            ],
            [
                'name' => 'Teriyaki Sauce',
                'category' => 'Food - Condiments',
                'description' => 'sweet and savory sauce for marinating and glazing meats or vegetables.',
                'price' => 2.99
            ],
            [
                'name' => 'Baking Soda',
                'category' => 'Food - Baking',
                'description' => 'Essential ingredient for baking and cooking.',
                'price' => 0.99
            ],
            [
                'name' => 'Bamboo Cutting Board',
                'category' => 'Kitchen',
                'description' => 'Eco-friendly bamboo cutting board for food prep.',
                'price' => 22
            ],
            [
                'name' => 'Classic Slim Fit Shirt',
                'category' => 'Clothing - Shirts',
                'description' => 'A tailored slim fit shirt for a polished look at work.',
                'price' => 49.99
            ],
            [
                'name' => 'Zucchini Noodle Pasta',
                'category' => 'Food - Vegetables',
                'description' => 'Low-carb zucchini noodles, perfect for a healthy alternative to pasta.',
                'price' => 3.99
            ],
            [
                'name' => 'Non-Stick Crepe Pan',
                'category' => 'Kitchen',
                'description' => 'Perfectly designed pan for making crepes and pancakes.',
                'price' => 29.99
            ],
            [
                'name' => 'Teriyaki Beef Strips',
                'category' => 'Food - Frozen Meals',
                'description' => 'Marinated beef strips in teriyaki sauce for easy grilling.',
                'price' => 7.49
            ],
            [
                'name' => 'sweet Potato Chips',
                'category' => 'Food - Snacks',
                'description' => 'Deliciously crunchy sweet potato chips, seasoned to perfection.',
                'price' => 2.99
            ],
            [
                'name' => 'Cranberry Almond Cookies',
                'category' => 'Food - Bakery',
                'description' => 'Delicious cookies with cranberries and almonds in every bite.',
                'price' => 4.29
            ],
            [
                'name' => 'High-Speed Blender',
                'category' => 'Kitchen',
                'description' => 'Powerful blender for smoothies and soups.',
                'price' => 99.99
            ],
            [
                'name' => 'Beard Grooming Kit',
                'category' => 'Grooming',
                'description' => 'Everything you need for maintaining a healthy beard.',
                'price' => 34.99
            ],
            [
                'name' => 'Compact Digital Camera',
                'category' => 'Photography',
                'description' => 'High-resolution camera for stunning photos.',
                'price' => 249.99
            ],
            [
                'name' => 'Lasagna Noodles',
                'category' => 'Food - Pasta',
                'description' => 'Wide pasta sheets for making lasagna.',
                'price' => 1.89
            ],
            [
                'name' => 'sturdy Bookends',
                'category' => 'Office',
                'description' => 'stylish bookends to keep books organized on shelves.',
                'price' => 22.99
            ],
            [
                'name' => 'Plant Pot Drip Trays',
                'category' => 'Garden',
                'description' => 'Prevent water damage with drip trays for potted plants.',
                'price' => 9.99
            ],
            [
                'name' => 'Trainers with Mesh Inserts',
                'category' => 'Clothing - Footwear',
                'description' => 'Comfortable trainers with mesh inserts for breathability.',
                'price' => 69.99
            ],
            [
                'name' => 'Berries Medley',
                'category' => 'Food - Produce',
                'description' => 'A mix of fresh raspberries, blueberries, and blackberries.',
                'price' => 6.99
            ],
            [
                'name' => 'Luxury Yoga Mat',
                'category' => 'Fitness',
                'description' => 'High-density, non-slip yoga mat for stability and comfort.',
                'price' => 39.99
            ],
            [
                'name' => 'sweet Potato Tots',
                'category' => 'Food - Frozen Foods',
                'description' => 'Crispy sweet potato bites, delicious as a side or snack.',
                'price' => 4.29
            ],
            [
                'name' => 'Caramel Sauce',
                'category' => 'Food - Condiments',
                'description' => 'Rich sauce for desserts and ice cream.',
                'price' => 3.49
            ],
            [
                'name' => 'Gluten-Free Pancake Mix',
                'category' => 'Food - Baking Goods',
                'description' => 'Fluffy and delicious pancake mix, perfect for a gluten-free breakfast.',
                'price' => 5.99
            ],
            [
                'name' => 'Red Lentils',
                'category' => 'Food - Grains',
                'description' => 'Nutritious and quick-cooking red lentils.',
                'price' => 1.99
            ],
            [
                'name' => 'Decorative Throw Blanket',
                'category' => 'Home',
                'description' => 'soft throw blanket for cozy home decor.',
                'price' => 39.99
            ],
            [
                'name' => 'Electric Milk Frother',
                'category' => 'Kitchen',
                'description' => 'Handheld frother for creating frothed milk for coffee.',
                'price' => 19.99
            ],
            [
                'name' => 'Handheld Garment Steamer',
                'category' => 'Home',
                'description' => 'Quick and easy way to remove wrinkles from clothes.',
                'price' => 34.99
            ],
            [
                'name' => 'Pet Nail Clipper',
                'category' => 'pets',
                'description' => 'safe and easy-to-use nail clippers for pets.',
                'price' => 12.99
            ],
            [
                'name' => 'Yoga Strap',
                'category' => 'Fitness',
                'description' => 'Durable yoga strap for deeper stretches.',
                'price' => 12.99
            ],
            [
                'name' => 'Key Finder',
                'category' => 'Accessories',
                'description' => 'Bluetooth-enabled key tracker to find lost items easily.',
                'price' => 19.99
            ],
            [
                'name' => 'Gluten-Free Biscuits',
                'category' => 'Food - Baking',
                'description' => 'Fluffy biscuits made without gluten',
                'price' => 3.79
            ],
            [
                'name' => 'Cheesy Cauliflower Bake',
                'category' => 'Food - Frozen Vegetables',
                'description' => 'A frozen cheesy bake made with cauliflower, great as a side dish or a vegetarian meal.',
                'price' => 5.49
            ],
            [
                'name' => 'LED Canopy Lights',
                'category' => 'Outdoor',
                'description' => 'Energy-efficient lights to illuminate outdoor areas.',
                'price' => 29.99
            ],
            [
                'name' => 'Adjustable Laptop Desk',
                'category' => 'Office',
                'description' => 'Portable desk that can be adjusted for sitting or standing.',
                'price' => 59.99
            ],
            [
                'name' => 'Tomato Paste',
                'category' => 'Food - Canned Goods',
                'description' => 'Concentrated tomato paste, great for sauces.',
                'price' => 1.29
            ],
            [
                'name' => 'sesame Garlic Noodles',
                'category' => 'Food - Pasta',
                'description' => 'Delicious noodles tossed in a sesamegarlic sauce.',
                'price' => 3.49
            ],
            [
                'name' => 'Travel Jewelry Organizer',
                'category' => 'Accessories',
                'description' => 'Compact storage for your jewelry while traveling.',
                'price' => 19.99
            ],
            [
                'name' => 'spicy Italian Sausage',
                'category' => 'Food - Meat & Seafood',
                'description' => 'savory sausage with a blend of spices, perfect for pasta dishes.',
                'price' => 4.99
            ],
            [
                'name' => 'Coconut Oil',
                'category' => 'Food - Oils & Vinegars',
                'description' => 'Versatile organic coconut oil for cooking and baking.',
                'price' => 6.49
            ],
            [
                'name' => 'Orange Ginger Vinaigrette',
                'category' => 'Food - Condiments',
                'description' => 'Tangy vinaigrette with orange and ginger flavors.',
                'price' => 3.99
            ],
            [
                'name' => 'Pumpkin Pancake Mix',
                'category' => 'Food - Breakfast',
                'description' => 'Easy-to-make pancake mix with pumpkin spice flavor.',
                'price' => 4.19
            ],
            [
                'name' => 'Overnight Hiking Backpack',
                'category' => 'Outdoor',
                'description' => 'Durable backpack with ample storage for outdoor adventures.',
                'price' => 79.99
            ],
            [
                'name' => 'Cacao Powder',
                'category' => 'Food - Baking',
                'description' => 'Unsweetened cacao powder for baking and smoothies.',
                'price' => 4.49
            ],
            [
                'name' => 'sweet Potato Fries',
                'category' => 'Food - Frozen Foods',
                'description' => 'Crispy sweet potato fries, a delicious side dish.',
                'price' => 3.99
            ],
            [
                'name' => 'Maple Bacon Potato Chips',
                'category' => 'Food - Snacks',
                'description' => 'savory potato chips with a hint of maple sweetness and crispy bacon flavor.',
                'price' => 2.89
            ],
            [
                'name' => 'Ranch Dressing',
                'category' => 'Food - Condiments',
                'description' => 'Creamy ranch dressing, perfect for salads and dips.',
                'price' => 2.59
            ],
            [
                'name' => 'silicone Baking Cups',
                'category' => 'Kitchen',
                'description' => 'set of reusable baking cups for muffins and cupcakes.',
                'price' => 10.99
            ],
            [
                'name' => 'Travel Sewing Kit',
                'category' => 'Travel',
                'description' => 'Compact sewing kit for travel emergencies.',
                'price' => 12.99
            ],
            [
                'name' => 'Wildflower Honey',
                'category' => 'Food - Condiments',
                'description' => 'Natural honey sourced from wildflowers.',
                'price' => 4.99
            ],
            [
                'name' => 'Electric Skillet',
                'category' => 'Kitchen',
                'description' => 'Versatile electric skillet for stir-frying and searing.',
                'price' => 49.99
            ],
            [
                'name' => 'Balsamic Glazed Brussels Sprouts',
                'category' => 'Food - Vegetables',
                'description' => 'Roasted Brussels sprouts drizzled with balsamic glaze.',
                'price' => 4.99
            ],
            [
                'name' => 'Quinoa',
                'category' => 'Food - Grains',
                'description' => 'Protein-rich quinoa, a great alternative to rice.',
                'price' => 4.49
            ],
            [
                'name' => 'Creative Puzzle Game',
                'category' => 'Toys',
                'description' => 'Challenging and fun puzzle game for all ages.',
                'price' => 19.99
            ],
            [
                'name' => 'sesame Seeds',
                'category' => 'Food - Baking',
                'description' => 'Crunchy seeds perfect for toppings and baking.',
                'price' => 1.99
            ],
            [
                'name' => 'Camping Lantern',
                'category' => 'Outdoor',
                'description' => 'Rechargeable LED camping lantern for outdoor use.',
                'price' => 34.99
            ],
            [
                'name' => 'Electric Can Opener',
                'category' => 'Kitchen',
                'description' => 'Automatic can opener for easy meal prep.',
                'price' => 29.99
            ],
            [
                'name' => 'Oatmeal Raisin Cookies',
                'category' => 'Food - Baked Goods',
                'description' => 'Delicious cookies packed with oats and raisins.',
                'price' => 3.49
            ],
            [
                'name' => 'Reusable Coffee Filter',
                'category' => 'Kitchen',
                'description' => 'Eco-friendly coffee filter for brewing.',
                'price' => 10.99
            ],
            [
                'name' => 'spinach and Feta Wraps',
                'category' => 'Food - Prepared Foods',
                'description' => 'Whole wheat wraps filled with spinach and feta cheese.',
                'price' => 4.99
            ],
            [
                'name' => 'Maple Cinnamon Granola Bars',
                'category' => 'Food - Snacks',
                'description' => 'Chewy granola bars with maple and cinnamon flavor.',
                'price' => 3.49
            ],
            [
                'name' => 'Peanut Butter Chocolate Clusters',
                'category' => 'Food - Desserts',
                'description' => 'Delicious clusters of peanuts and chocolate for a sweet treat.',
                'price' => 2.99
            ],
            [
                'name' => 'Coconut Lime Rice',
                'category' => 'Food - Sides',
                'description' => 'Flavorful rice mixed with coconut and lime, a tropical side dish.',
                'price' => 2.99
            ],
            [
                'name' => 'Low-Fat Cottage Cheese',
                'category' => 'Food - Dairy',
                'description' => 'Creamy cottage cheese, perfect for healthy snacking.',
                'price' => 2.99
            ],
            [
                'name' => 'Apple Cinnamon Instant Oatmeal',
                'category' => 'Food - Cereal',
                'description' => 'Quick oatmeal packets infused with apple and cinnamon, perfect for breakfast.',
                'price' => 3.49
            ],
            [
                'name' => 'Pineapple Teriyaki Chicken Mix',
                'category' => 'Food - Meat',
                'description' => 'A perfect blend of pineapple and teriyaki for stir-fry.',
                'price' => 6.99
            ],
            [
                'name' => 'Ranch Dressing',
                'category' => 'Food - Condiments',
                'description' => 'Creamy ranch dressing, perfect for salads and dips.',
                'price' => 2.59
            ],
            [
                'name' => 'Californian Raisins',
                'category' => 'Food - Dried Fruits',
                'description' => 'sweet dried raisins, perfect for snacks or baking.',
                'price' => 3.19
            ],
            [
                'name' => 'Coloring Books for Adults',
                'category' => 'Books',
                'description' => 'Intricate designs for adults to relax and unwind.',
                'price' => 14.99
            ],
            [
                'name' => 'Coconut Rice',
                'category' => 'Food - Frozen',
                'description' => 'Fluffy rice cooked with coconut milk for a tropical twist.',
                'price' => 2.29
            ],
            [
                'name' => 'Cocktail Shaker and Mixing Glass Set',
                'category' => 'Kitchen',
                'description' => 'Complete set for mixing cocktails at home.',
                'price' => 39.99
            ],
            [
                'name' => 'Peanut Butter Granola',
                'category' => 'Food - Breakfast',
                'description' => 'Crunchy granola full of peanut butter flavor and oats.',
                'price' => 4.99
            ],
            [
                'name' => 'Wireless Security Camera',
                'category' => 'Home',
                'description' => '1080p wireless security camera with night vision.',
                'price' => 109.99
            ],
            [
                'name' => 'Roasted Vegetable Medley',
                'category' => 'Food - Frozen Foods',
                'description' => 'A mix of frozen roasted vegetables for an easy side dish.',
                'price' => 3.99
            ],
            [
                'name' => 'A-Line Skirt',
                'category' => 'Clothing - Bottoms',
                'description' => 'Classic A-line skirt that flatters every figure, perfect for work or play.',
                'price' => 35.99
            ],
            [
                'name' => 'Dark Chocolate Tart',
                'category' => 'Food - Desserts',
                'description' => 'Decadent tart made with rich dark chocolate.',
                'price' => 6.29
            ],
            [
                'name' => 'Raspberry Tart',
                'category' => 'Food - Baked Goods',
                'description' => 'A delicious tart filled with fresh raspberry filling.',
                'price' => 5.49
            ],
            [
                'name' => 'Honey Wheat Pretzels',
                'category' => 'Food - Snacks',
                'description' => 'Crunchy pretzel sticks made with honey and whole wheat.',
                'price' => 3.49
            ],
            [
                'name' => 'Peach Mango Smoothie',
                'category' => 'Food - Beverages',
                'description' => 'A refreshing blend of peaches and mangoes for a delicious smoothie.',
                'price' => 3.49
            ],
            [
                'name' => 'Compact Dishwasher',
                'category' => 'Home Appliances',
                'description' => 'Countertop dishwasher for small kitchens.',
                'price' => 299.99
            ],
            [
                'name' => 'Honey Mustard Pretzel Bites',
                'category' => 'Food - Snacks',
                'description' => 'Delicious pretzel bites with a sweet honey mustard flavor, perfect for dipping.',
                'price' => 3.99
            ],
            [
                'name' => 'Instant Pot',
                'category' => 'Kitchen',
                'description' => '7-in-1 multi-cooker for versatile cooking.',
                'price' => 89.99
            ],
            [
                'name' => 'LED Flashing Pet Collar',
                'category' => 'pets',
                'description' => 'safety collar with flashing lights for pets during night walks.',
                'price' => 14.99
            ],
            [
                'name' => 'set of Herb Garden Markers',
                'category' => 'Garden',
                'description' => 'stylish markers for labeling your indoor garden plants.',
                'price' => 8.99
            ],
            [
                'name' => 'Non-Stick Grill Pan',
                'category' => 'Kitchen',
                'description' => 'Heavy-duty grill pan for indoor grilling.',
                'price' => 39.99
            ],
            [
                'name' => 'Dark Chocolate Almond Butter Cups',
                'category' => 'Food - Snacks',
                'description' => 'Rich almond butter encased in dark chocolate.',
                'price' => 4.99
            ],
            [
                'name' => 'samsung Galaxy Smartwatch',
                'category' => 'Wearable Tech',
                'description' => 'stylish smartwatch with fitness tracking and notifications.',
                'price' => 249.99
            ],
            [
                'name' => 'High-Quality Yoga Block',
                'category' => 'Fitness',
                'description' => 'Foam yoga block for enhancing poses and stability.',
                'price' => 12.99
            ],
            [
                'name' => 'Artisan Pickles',
                'category' => 'Food - Condiments',
                'description' => 'Tangy and crunchy dill pickles.',
                'price' => 2.49
            ],
            [
                'name' => 'Butternut Squash Soup',
                'category' => 'Food - Soups',
                'description' => 'Creamy and delicious soup made with real butternut squash, ready to heat.',
                'price' => 3.49
            ],
            [
                'name' => 'Banana Nut Muffins',
                'category' => 'Food - Bakery',
                'description' => 'Moist, fluffy muffins packed with bananas and walnuts for a delightful breakfast or snack.',
                'price' => 4.49
            ],
            [
                'name' => 'Fitness Jump Rope with LCD Counter',
                'category' => 'Fitness',
                'description' => 'Weighted jump rope that counts jumps and calories burned.',
                'price' => 15.99
            ],
            [
                'name' => 'Caraway Rye Bread',
                'category' => 'Food - Bakery',
                'description' => 'Artisan bread with caraway seeds for added flavor.',
                'price' => 4.79
            ],
            [
                'name' => 'Printed Maxi Skirt',
                'category' => 'Clothing - Skirts',
                'description' => 'A colorful printed maxi skirt for a bohemian look.',
                'price' => 39.99
            ],
            [
                'name' => 'Wine Decanter',
                'category' => 'Home',
                'description' => 'Elegant glass decanter for aerating wine.',
                'price' => 34.99
            ],
            [
                'name' => 'Basil-infused Olive Oil',
                'category' => 'Food - Cooking Oil',
                'description' => 'Extra virgin olive oil infused with fresh basil.',
                'price' => 6.99
            ],
            [
                'name' => 'Organic Cereal Bars',
                'category' => 'Food - Snacks',
                'description' => 'Healthy snack bars packed with oats and fruit.',
                'price' => 4.29
            ],
            [
                'name' => 'Kale and Quinoa Salad',
                'category' => 'Food - Salads',
                'description' => 'A nutritious salad with kale, quinoa, and a zesty lemon dressing.',
                'price' => 6.49
            ],
            [
                'name' => 'Memory Foam Pillow',
                'category' => 'Home',
                'description' => 'Ergonomic memory foam pillow for better sleep.',
                'price' => 39.99
            ],
            [
                'name' => 'Photo Album',
                'category' => 'Home',
                'description' => 'Classic leather photo album for keepsakes.',
                'price' => 24.99
            ],
            [
                'name' => 'Organic Quinoa Chips',
                'category' => 'Food - Snacks',
                'description' => 'Light and crispy chips made from quinoa, ideal for dipping.',
                'price' => 3.99
            ],
            [
                'name' => 'Jasmine Rice',
                'category' => 'Food - Grains',
                'description' => 'Fragrant jasmine rice, perfect as a side dish.',
                'price' => 2.39
            ],
            [
                'name' => 'Organic Granola Cereal',
                'category' => 'Food - Breakfast',
                'description' => 'Crunchy granola made with organic oats',
                'price' => 5.99
            ],
            [
                'name' => 'Pineapple Coconut Rice Mix',
                'category' => 'Food - Grains',
                'description' => 'A flavorful blend of rice with tropical pineapple and coconut flavors.',
                'price' => 3.99
            ],
            [
                'name' => 'Interchangeable Watch Bands',
                'category' => 'Accessories',
                'description' => 'set of stylish watch bands to customize your look.',
                'price' => 24.99
            ],
            [
                'name' => 'Weighted Jump Rope with Counter',
                'category' => 'Fitness',
                'description' => 'Jump rope that counts your jumps for tracking workouts.',
                'price' => 14.99
            ],
            [
                'name' => 'Coconut Cream Pie',
                'category' => 'Food - Bakery',
                'description' => 'Delicious pie filled with coconut cream and topped with whipped cream.',
                'price' => 9.49
            ],
            [
                'name' => 'Ribbed Knit Dress',
                'category' => 'Clothing - Dresses',
                'description' => 'A fitted ribbed knit dress that hugs your curves perfectly.',
                'price' => 59.99
            ],
            [
                'name' => 'Camera Tripod',
                'category' => 'Photography',
                'description' => 'sturdy camera tripod for professional photography.',
                'price' => 49.99
            ],
            [
                'name' => 'Cacao Powder',
                'category' => 'Food - Baking',
                'description' => 'Unsweetened cacao powder for baking and smoothies.',
                'price' => 4.49
            ],
            [
                'name' => 'Essential Oils Diffuser Necklace',
                'category' => 'Health',
                'description' => 'Wearable diffuser for scenting your space and body.',
                'price' => 19.99
            ],
            [
                'name' => 'Caramelized Onion Dip',
                'category' => 'Food - Dairy',
                'description' => 'Creamy dip made with caramelized onions, perfect for chips or veggies.',
                'price' => 3.99
            ],
            [
                'name' => 'Adjustable Garden Rake',
                'category' => 'Garden',
                'description' => 'Heavy-duty rake with adjustable width for different gardening needs.',
                'price' => 22.99
            ],
            [
                'name' => 'Training Soccer Ball',
                'category' => 'sports',
                'description' => 'Durable training soccer ball for practice.',
                'price' => 19.99
            ],
            [
                'name' => 'stuffed Grape Leaves',
                'category' => 'Food - Prepared Foods',
                'description' => 'Grape leaves stuffed with rice and herbs, ready to eat.',
                'price' => 5.79
            ],
            [
                'name' => 'Honey Sesame Chicken Mix',
                'category' => 'Food - Frozen Meals',
                'description' => 'A meal kit featuring tender chicken with honey sesame sauce.',
                'price' => 8.99
            ],
            [
                'name' => 'LED Flashlight',
                'category' => 'Outdoor',
                'description' => 'Bright LED flashlight with adjustable beam.',
                'price' => 19.99
            ],
            [
                'name' => 'Organic Quinoa',
                'category' => 'Food - Grains',
                'description' => 'Nutritious organic quinoa for salads or sides',
                'price' => 4.29
            ],
            [
                'name' => 'Adjustable Pedicure Footrest',
                'category' => 'Beauty',
                'description' => 'Ergonomic footrest for easier pedicure treatment.',
                'price' => 39.99
            ],
            [
                'name' => 'Brown Sugar',
                'category' => 'Food - Baking',
                'description' => 'Raw brown sugar, perfect for baking or sweetening drinks.',
                'price' => 1.79
            ],
            [
                'name' => 'Mini Electric Kettle',
                'category' => 'Kitchen',
                'description' => 'Quick boiling kettle for small kitchens and dorms.',
                'price' => 29.99
            ],
            [
                'name' => 'smartphone Photography Tripod',
                'category' => 'Electronics',
                'description' => 'Lightweight tripod designed for smartphone photography.',
                'price' => 29.99
            ],
            [
                'name' => 'Coconut Rice',
                'category' => 'Food - Frozen',
                'description' => 'Fluffy rice cooked with coconut milk for a tropical twist.',
                'price' => 2.29
            ],
            [
                'name' => 'Home Cleaning Robot',
                'category' => 'Home Appliances',
                'description' => 'Automated cleaning robot for hassle-free home maintenance.',
                'price' => 249.99
            ],
            [
                'name' => 'Basketball',
                'category' => 'sports',
                'description' => 'Official size basketball for indoor and outdoor play.',
                'price' => 29.99
            ],
            [
                'name' => 'Vegan Cheese',
                'category' => 'Food - Dairy Alternatives',
                'description' => 'Dairy-free cheese alternative for your favorite dishes.',
                'price' => 4.99
            ],
            [
                'name' => 'Pet Nail Clipper',
                'category' => 'pets',
                'description' => 'safe and easy-to-use nail clippers for pets.',
                'price' => 12.99
            ],
            [
                'name' => 'solar Garden Lights',
                'category' => 'Outdoor',
                'description' => 'Energy-efficient lights that charge during the day and illuminate at night.',
                'price' => 39.99
            ],
            [
                'name' => 'Frozen Cauliflower Rice',
                'category' => 'Food - Frozen Foods',
                'description' => 'Convenient and low-carb alternative to traditional rice.',
                'price' => 2.99
            ],
            [
                'name' => 'Reusable Food Storage Bags',
                'category' => 'Kitchen',
                'description' => 'Eco-friendly silicone bags for food storage and snacks.',
                'price' => 19.99
            ],
            [
                'name' => 'Handmade Soap Making Kit',
                'category' => 'Crafts',
                'description' => 'Complete kit for crafting your own scented soaps.',
                'price' => 34.99
            ],
            [
                'name' => 'Pumpkin Pie Spice',
                'category' => 'Food - Baking',
                'description' => 'A blend of spices that brings the taste of fall to your baked goods.',
                'price' => 2.99
            ],
            [
                'name' => 'Pet First Aid Kit',
                'category' => 'pets',
                'description' => 'Essential kit for taking care of your pets health emergencies.',
                'price' => 29.99
            ],
            [
                'name' => 'Honey Sesame Cashews',
                'category' => 'Food - Snacks',
                'description' => 'Roasted cashews coated in honey and sesame seeds for a sweet treat.',
                'price' => 4.49
            ],
            [
                'name' => 'Rustic Italian Bread',
                'category' => 'Food - Bakery',
                'description' => 'Freshly baked rustic bread, perfect for sandwiches or dipping in olive oil.',
                'price' => 3.59
            ],
            [
                'name' => 'Cranberry Almond Cookies',
                'category' => 'Food - Bakery',
                'description' => 'Delicious cookies with cranberries and almonds in every bite.',
                'price' => 4.29
            ],
            [
                'name' => 'Garlic Parmesan Wings',
                'category' => 'Food - Frozen Foods',
                'description' => 'Frozen chicken wings with garlic parmesan sauce.',
                'price' => 8.99
            ],
            [
                'name' => 'Peanut Butter Filled Pretzels',
                'category' => 'Food - Snacks',
                'description' => 'salty pretzels filled with creamy peanut butter.',
                'price' => 3.99
            ],
            [
                'name' => 'Mayonnaise',
                'category' => 'Food - Condiments',
                'description' => 'Creamy mayonnaise, perfect for salads and sandwiches.',
                'price' => 3.29
            ],
            [
                'name' => 'Adjustable Height Standing Desk Converter',
                'category' => 'Office',
                'description' => 'Convert your desk to a standing desk easily.',
                'price' => 89.99
            ],
            [
                'name' => 'sea Salt Tortilla Chips',
                'category' => 'Food - Snacks',
                'description' => 'Crunchy tortilla chips with a hint of sea salt, great with dips.',
                'price' => 2.49
            ],
            [
                'name' => 'Decorative LED Neon Sign',
                'category' => 'Home',
                'description' => 'Bright, vibrant sign to add flair to any space.',
                'price' => 45.99
            ],
            [
                'name' => 'Pineapple Salsa',
                'category' => 'Food - Condiments',
                'description' => 'Fresh salsa made with pineapple and spices',
                'price' => 4.29
            ],
            [
                'name' => 'set of Decorative Storage Bins',
                'category' => 'Home',
                'description' => 'Colorful bins to keep your space organized.',
                'price' => 34.99
            ],
            [
                'name' => 'Bluetooth Sleep Headphones',
                'category' => 'Audio',
                'description' => 'Comfortable wireless headphones designed for sleeping.',
                'price' => 29.99
            ],
            [
                'name' => 'sweet BBQ Dipping Sauce',
                'category' => 'Food - Condiments',
                'description' => 'Perfectly balanced sweet and tangy BBQ sauce for dipping or grilling.',
                'price' => 3.49
            ],
            [
                'name' => 'Pasta Primavera Kit',
                'category' => 'Food - Meal Kits',
                'description' => 'Quick meal kit with pasta and fresh vegetables.',
                'price' => 7.49
            ],
            [
                'name' => 'Protein Bar Variety Pack',
                'category' => 'Food - Snacks',
                'description' => 'A pack of assorted nut and protein bars for a quick energy boost.',
                'price' => 12.99
            ],
            [
                'name' => 'Digital Food Thermometer',
                'category' => 'Kitchen',
                'description' => 'Instant-read thermometer for accurate cooking temperatures.',
                'price' => 19.99
            ],
            [
                'name' => 'Travel Yoga Mat',
                'category' => 'Fitness',
                'description' => 'Lightweight yoga mat for practicing on the go.',
                'price' => 34.99
            ],
            [
                'name' => 'Cereal Dispenser with Portion Control',
                'category' => 'Kitchen',
                'description' => 'Maintain freshness and dispense cereal easily.',
                'price' => 24.99
            ],
            [
                'name' => 'Vegetarian Stuffed Peppers',
                'category' => 'Food - Prepared Foods',
                'description' => 'Bell peppers stuffed with rice, beans, and spices, ready to bake.',
                'price' => 4.99
            ],
            [
                'name' => 'Canvas Wall Art',
                'category' => 'Home',
                'description' => 'stylish wall art to enhance home decor.',
                'price' => 39.99
            ],
            [
                'name' => 'slim Wallet',
                'category' => 'Accessories',
                'description' => 'RFID-blocking slim wallet for cards and cash.',
                'price' => 24.99
            ],
            [
                'name' => 'sun Protection Clothing',
                'category' => 'Clothing',
                'description' => 'UV-blocking clothing for outdoor activities.',
                'price' => 44.99
            ],
            [
                'name' => 'Tailored Blazer',
                'category' => 'Clothing - Outerwear',
                'description' => 'sharp tailored blazer perfect for office wear and professional events.',
                'price' => 99.99
            ],
            [
                'name' => 'Vegetable Stir Fry Mix',
                'category' => 'Food - Fresh Produce',
                'description' => 'A mix of fresh vegetables for quick stir-fries.',
                'price' => 3.29
            ],
            [
                'name' => 'Chicken Sausage',
                'category' => 'Food - Meat',
                'description' => 'Flavorful chicken sausage, low in fat and fully cooked.',
                'price' => 6.99
            ],
            [
                'name' => 'Electric Hot Water Dispenser',
                'category' => 'Kitchen',
                'description' => 'Instant hot water dispenser for tea and cooking.',
                'price' => 59.99
            ],
            [
                'name' => 'Foam Muscle Roller',
                'category' => 'Fitness',
                'description' => 'Relieve muscle tension and soreness with this foam roller.',
                'price' => 24.99
            ],
            [
                'name' => 'Over-Ear Headphones',
                'category' => 'Audio',
                'description' => 'Comfortable over-ear headphones with deep bass.',
                'price' => 59.99
            ],
            [
                'name' => 'Over-the-Door Shoe Organizer',
                'category' => 'Home',
                'description' => 'space-saving solution to store shoes and keep them organized.',
                'price' => 22.99
            ],
            [
                'name' => 'Pistachio Ice Cream',
                'category' => 'Food - Frozen Desserts',
                'description' => 'Creamy pistachio-flavored ice cream with real nuts.',
                'price' => 4.99
            ],
            [
                'name' => 'savory Rice Cakes',
                'category' => 'Food - Snacks',
                'description' => 'Lightly salted rice cakes, perfect for a healthy snack.',
                'price' => 2.5
            ],
            [
                'name' => 'Trackpad for Laptop',
                'category' => 'Accessories',
                'description' => 'Wireless trackpad for enhanced laptop navigation.',
                'price' => 49.99
            ],
            [
                'name' => 'smart Scale',
                'category' => 'Health',
                'description' => 'Wi-Fi smart scale for tracking weight and BMI.',
                'price' => 59.99
            ],
            [
                'name' => 'Eco-Friendly Cleaning Cloths',
                'category' => 'Home',
                'description' => 'Reusable microfiber cloths for environmentally friendly cleaning.',
                'price' => 12.99
            ],
            [
                'name' => 'Roasted Red Pepper Sauce',
                'category' => 'Food - Sauces',
                'description' => 'savory sauce perfect for pasta or dipping.',
                'price' => 3.29
            ],
            [
                'name' => 'Lasagna Noodles',
                'category' => 'Food - Pasta',
                'description' => 'Wide pasta sheets for making lasagna.',
                'price' => 1.89
            ],
            [
                'name' => 'strawberry Rhubarb Jam',
                'category' => 'Food - Condiments',
                'description' => 'A sweet and tart jam, perfect on toast or in desserts.',
                'price' => 4.29
            ],
            [
                'name' => 'Organic Tomato Ketchup',
                'category' => 'Food - Condiments',
                'description' => 'Classic ketchup made from organic tomatoes, no added sugar.',
                'price' => 3.49
            ],
            [
                'name' => 'Window A/C Unit',
                'category' => 'Home Appliances',
                'description' => 'Energy-efficient window air conditioner for cooling.',
                'price' => 299.99
            ],
            [
                'name' => 'Curried Lentil Salad',
                'category' => 'Food - Salads',
                'description' => 'A hearty salad with lentils, veggies, and curry dressing.',
                'price' => 4.29
            ],
            [
                'name' => 'Adjustable Laptop Desk',
                'category' => 'Office',
                'description' => 'Portable desk that can be adjusted for sitting or standing.',
                'price' => 59.99
            ],
            [
                'name' => 'Beef Stroganoff Mix',
                'category' => 'Food - Meal Kits',
                'description' => 'Everything you need to create a hearty beef stroganoff.',
                'price' => 5.49
            ],
            [
                'name' => 'Chickpea Salad Deluxe',
                'category' => 'Food - Produce',
                'description' => 'Chickpeas mixed with fresh vegetables and herbs, a nutritious snack or salad.',
                'price' => 4.29
            ],
            [
                'name' => 'Pet Travel Bed',
                'category' => 'pets',
                'description' => 'Portable bed for pets while traveling.',
                'price' => 26.99
            ],
            [
                'name' => 'Portable Charcoal Grill',
                'category' => 'Outdoor',
                'description' => 'Compact charcoal grill perfect for tailgating.',
                'price' => 89.99
            ],
            [
                'name' => 'Comfortable Jogger Pants',
                'category' => 'Clothing - Bottoms',
                'description' => 'Relaxed fit joggers made from soft fleece, ideal for lounging or workouts.',
                'price' => 29.99
            ],
            [
                'name' => 'Vegan Chocolate Cake Mix',
                'category' => 'Food - Baking',
                'description' => 'Plant-based mix for a rich chocolate cake.',
                'price' => 4.29
            ],
            [
                'name' => 'skincare Set',
                'category' => 'Beauty',
                'description' => 'All-natural skincare set for daily use.',
                'price' => 54.99
            ],
            [
                'name' => 'Electric Wax Warmer',
                'category' => 'Home',
                'description' => 'Wax warmer for creating a soothing atmosphere with fragrances.',
                'price' => 22.99
            ],
            [
                'name' => 'Vegetable Broth',
                'category' => 'Food - Canned Goods',
                'description' => 'Rich vegetable broth for soups and stews.',
                'price' => 2.29
            ],
            [
                'name' => 'Nordic Berry Smoothie',
                'category' => 'Food - Frozen Foods',
                'description' => 'Frozen smoothie blend with berries for a quick and healthy breakfast.',
                'price' => 3.99
            ],
            [
                'name' => 'Banana Chips',
                'category' => 'Food - Snacks',
                'description' => 'Crunchy and sweet banana chips, a great on-the-go snack.',
                'price' => 1.99
            ],
            [
                'name' => 'Beef Stroganoff Mix',
                'category' => 'Food - Meal Kits',
                'description' => 'Everything you need to create a hearty beef stroganoff.',
                'price' => 5.49
            ],
            [
                'name' => 'Dark Chocolate Bars',
                'category' => 'Food - Snacks',
                'description' => 'Rich dark chocolate bars, perfect for a sweet treat.',
                'price' => 2.99
            ],
            [
                'name' => 'Pine Nuts',
                'category' => 'Food - Nuts',
                'description' => 'Nutty flavor perfect for pesto and salads.',
                'price' => 7.99
            ],
            [
                'name' => 'Coconut Chips',
                'category' => 'Food - Snacks',
                'description' => 'Crunchy, toasted coconut chips for snacking.',
                'price' => 3.59
            ],
            [
                'name' => 'Organic Coconut Flour',
                'category' => 'Food - Baking',
                'description' => 'Finely ground flour from dried coconut meat.',
                'price' => 5.49
            ],
            [
                'name' => 'Portable Jump Starter',
                'category' => 'Automotive',
                'description' => 'Compact jump starter for emergency vehicle starts.',
                'price' => 59.99
            ],
            [
                'name' => 'Ramen Noodle Soup Cups',
                'category' => 'Food - Prepared Meals',
                'description' => 'Instant ramen cups with flavor-packed broth.',
                'price' => 1.29
            ],
            [
                'name' => 'Whipped Cream Cheese',
                'category' => 'Food - Dairy',
                'description' => 'Light and fluffy cream cheese, perfect for bagels or cooking.',
                'price' => 2.99
            ],
            [
                'name' => 'sparkling Blood Orange Soda',
                'category' => 'Food - Beverages',
                'description' => 'A refreshing sparkling beverage with a bold blood orange flavor.',
                'price' => 1.99
            ],
            [
                'name' => 'Mango Chunks',
                'category' => 'Food - Frozen Fruits',
                'description' => 'Frozen mango chunks for smoothies or snacking.',
                'price' => 4.89
            ],
            [
                'name' => 'Crispy Kale Chips',
                'category' => 'Food - Snacks',
                'description' => 'Baked kale chips seasoned for a healthy, crunchy snack.',
                'price' => 2.99
            ],
            [
                'name' => 'Reusable Snack Bags',
                'category' => 'Kitchen',
                'description' => 'Eco-friendly reusable bags for snacks.',
                'price' => 14.99
            ],
            [
                'name' => 'Electric Milk Frother',
                'category' => 'Kitchen',
                'description' => 'Handheld frother for creating frothed milk for coffee.',
                'price' => 19.99
            ],
            [
                'name' => 'Faux Leather Leggings',
                'category' => 'Clothing - Pants',
                'description' => 'stylish faux leather leggings for a trendy outfit.',
                'price' => 49.99
            ],
            [
                'name' => 'High-Low Hem Tee',
                'category' => 'Clothing - Tops',
                'description' => 'Trendy high-low tee with a relaxed fit, ideal for weekends.',
                'price' => 22.99
            ],
            [
                'name' => 'Buffalo Chicken Dip',
                'category' => 'Food - Dips',
                'description' => 'spicy and creamy dip made with shredded chicken, perfect for parties.',
                'price' => 5.99
            ],
            [
                'name' => 'Grass Fed Beef Patties',
                'category' => 'Food - Meat',
                'description' => 'Juicy burger patties made with grass-fed beef',
                'price' => 9.99
            ],
            [
                'name' => 'Artisan Cornbread Mix',
                'category' => 'Food - Baking',
                'description' => 'Mix for homemade cornbread, just add water and bake for a delicious side.',
                'price' => 2.49
            ],
            [
                'name' => 'Customizable Name Puzzle',
                'category' => 'Toys',
                'description' => 'Personalized wooden puzzles for children that encourage learning.',
                'price' => 29.99
            ],
            [
                'name' => 'Jump Rope with Counter',
                'category' => 'Fitness',
                'description' => 'Durable jump rope with built-in counter for workouts.',
                'price' => 12.99
            ],
            [
                'name' => 'Portable Bluetooth Speaker',
                'category' => 'Audio',
                'description' => 'Compact Bluetooth speaker with rich sound quality.',
                'price' => 49.99
            ],
            [
                'name' => 'DIY Candle Kit',
                'category' => 'Crafts',
                'description' => 'Everything you need to make your own scented candles at home.',
                'price' => 34.99
            ],
            [
                'name' => 'Electric Pressure Cooker',
                'category' => 'Kitchen',
                'description' => 'Multi-function pressure cooker that can sauté, steam, and slow cook.',
                'price' => 89.99
            ],
            [
                'name' => 'Fresh Basil Pesto',
                'category' => 'Food - Sauces',
                'description' => 'A fresh, flavorful basil pesto for pasta and more',
                'price' => 4.79
            ],
            [
                'name' => 'LED Strip Light Kit',
                'category' => 'Home',
                'description' => 'Flexible light strips for creative home decor.',
                'price' => 39.99
            ],
            [
                'name' => 'Portable Laptop Table',
                'category' => 'Office',
                'description' => 'Foldable table for working with laptops anywhere.',
                'price' => 39.99
            ],
            [
                'name' => 'Pineapple Teriyaki Chicken Mix',
                'category' => 'Food - Meat',
                'description' => 'A perfect blend of pineapple and teriyaki for stir-fry.',
                'price' => 6.99
            ],
            [
                'name' => 'Guitar Tuner',
                'category' => 'Music',
                'description' => 'Clip-on guitar tuner with LCD display.',
                'price' => 19.99
            ],
            [
                'name' => 'Ergonomic Mouse Pad with Wrist Support',
                'category' => 'Office',
                'description' => 'Comfortable mouse pad designed to reduce wrist strain.',
                'price' => 14.99
            ],
            [
                'name' => 'Denim Jacket',
                'category' => 'Clothing - Outerwear',
                'description' => 'A classic denim jacket that never goes out of style.',
                'price' => 69.99
            ],
            [
                'name' => 'Noise Cancelling Ear Muffs',
                'category' => 'safety',
                'description' => 'Ear protection for shooting and industrial use.',
                'price' => 24.99
            ],
            [
                'name' => 'Trackpad for Laptop',
                'category' => 'Accessories',
                'description' => 'Wireless trackpad for enhanced laptop navigation.',
                'price' => 49.99
            ],
            [
                'name' => 'Vegan Mayonnaise',
                'category' => 'Food - Condiments',
                'description' => 'Plant-based mayonnaise for a creamy taste.',
                'price' => 4.49
            ],
            [
                'name' => 'Basil Lemonade',
                'category' => 'Food - Beverages',
                'description' => 'Refreshing basil-infused lemonade for a cool drink.',
                'price' => 2.99
            ],
            [
                'name' => 'Indoor Plants',
                'category' => 'Garden',
                'description' => 'Assorted indoor plants for home decor.',
                'price' => 19.99
            ],
            [
                'name' => 'sriracha Chili Sauce',
                'category' => 'Food - Condiments',
                'description' => 'spicy chili sauce with garlic and sugar for a flavor kick.',
                'price' => 2.79
            ],
            [
                'name' => 'Art Supplies Organizer',
                'category' => 'Art Supplies',
                'description' => 'storage organizer for art supplies and tools.',
                'price' => 18.99
            ],
            [
                'name' => 'Vegetable Stock',
                'category' => 'Food - Cooking Essentials',
                'description' => 'Rich vegetable stock for cooking soups and stews.',
                'price' => 2.49
            ],
            [
                'name' => 'Herb Garden Planter Box',
                'category' => 'Garden',
                'description' => 'Elevated planter box for growing herbs or small plants easily.',
                'price' => 49.99
            ],
            [
                'name' => 'Pumpkin Ice Cream',
                'category' => 'Food - Frozen Foods',
                'description' => 'seasonal pumpkin ice cream, perfect for fall.',
                'price' => 4.99
            ],
            [
                'name' => 'Herbed Chicken Breast',
                'category' => 'Food - Meat',
                'description' => 'Marinated chicken breast seasoned with herbs, ready for grilling.',
                'price' => 7.99
            ],
            [
                'name' => 'Coconut Cream Pie',
                'category' => 'Food - Bakery',
                'description' => 'Delicious pie filled with coconut cream and topped with whipped cream.',
                'price' => 9.49
            ],
            [
                'name' => 'samoas Cookie Mix',
                'category' => 'Food - Baking',
                'description' => 'Baking mix to create your favorite Samoa-style cookies at home.',
                'price' => 5.59
            ],
            [
                'name' => 'Ceramic Non-Stick Frying Pan',
                'category' => 'Kitchen',
                'description' => 'Durable non-stick frying pan for easy cooking and cleaning.',
                'price' => 39.99
            ],
            [
                'name' => 'Oven Mitts',
                'category' => 'Kitchen',
                'description' => 'silicone oven mitts for safe handling of hot cookware.',
                'price' => 15.99
            ],
            [
                'name' => 'Cream Cheese',
                'category' => 'Food - Dairy',
                'description' => 'smooth and creamy, ideal for spreads or baking.',
                'price' => 2.69
            ],
            [
                'name' => 'Wireless Induction Charger',
                'category' => 'Electronics',
                'description' => 'Qi-certified charger for fast wireless charging of smartphones.',
                'price' => 19.99
            ],
            [
                'name' => 'Pet Grooming Kit',
                'category' => 'pets',
                'description' => 'Complete grooming kit for dogs and cats.',
                'price' => 39.99
            ],
            [
                'name' => 'Indian Curry Sauce',
                'category' => 'Food - Condiments',
                'description' => 'Authentic Indian curry sauce for quick meals.',
                'price' => 3.69
            ],
            [
                'name' => 'Workstation Laptop Stand',
                'category' => 'Office',
                'description' => 'Adjustable stand to improve ergonomics while working on a laptop.',
                'price' => 49.99
            ],
            [
                'name' => 'Almond Butter Cups',
                'category' => 'Food - Snacks',
                'description' => 'Rich chocolate cups filled with almond butter, a delicious treat.',
                'price' => 3.29
            ],
            [
                'name' => 'Electric Pressure Washer',
                'category' => 'Home Improvement',
                'description' => 'Powerful electric pressure washer for deep cleaning.',
                'price' => 199.99
            ],
            [
                'name' => 'Herbal Tea Infuser',
                'category' => 'Kitchen',
                'description' => 'Infuser for brewing loose-leaf herbal teas easily.',
                'price' => 9.99
            ],
            [
                'name' => 'Organic Sweet Potatoes',
                'category' => 'Food - Produce',
                'description' => 'Fresh and organic sweet potatoes, ideal for roasting.',
                'price' => 1.99
            ],
            [
                'name' => 'Electric Toothbrush',
                'category' => 'Health',
                'description' => 'Rechargeable electric toothbrush with smart timer.',
                'price' => 49.95
            ],
            [
                'name' => 'Maple Pecan Oatmeal Cookies',
                'category' => 'Food - Bakery',
                'description' => 'soft oatmeal cookies with maple and pecans.',
                'price' => 3.99
            ],
            [
                'name' => 'Ethically-Sourced Coffee Beans',
                'category' => 'Food - Beverages',
                'description' => 'Freshly roasted coffee beans with rich flavor.',
                'price' => 9.99
            ],
            [
                'name' => 'Organic Blueberries',
                'category' => 'Food - Fruits',
                'description' => 'Fresh organic blueberries perfect for snacking or baking.',
                'price' => 5.49
            ],
            [
                'name' => 'Legging Pants',
                'category' => 'Clothing - Activewear',
                'description' => 'Comfortable and stretchy legging pants perfect for workouts or daily wear.',
                'price' => 34.99
            ],
            [
                'name' => 'Wi-Fi Enabled Smart Light Switch',
                'category' => 'smart Home',
                'description' => 'Control your lights remotely with a smartphone app.',
                'price' => 24.99
            ],
            [
                'name' => 'Chocolate Coconut Protein Balls',
                'category' => 'Food - Snacks',
                'description' => 'No-bake protein balls with chocolate and coconut flavors.',
                'price' => 2.99
            ],
            [
                'name' => 'spicy Snack Mix',
                'category' => 'Food - Snacks',
                'description' => 'A crunchy blend of nuts and pretzels with a spicy kick.',
                'price' => 4.99
            ],
            [
                'name' => 'Compost Bin',
                'category' => 'Garden',
                'description' => 'Countertop compost bin for kitchen waste.',
                'price' => 29.99
            ],
            [
                'name' => 'Basil Tomato Soup',
                'category' => 'Food - Canned Soups',
                'description' => 'Rich tomato soup flavored with fresh basil, ready to heat up.',
                'price' => 2.99
            ],
            [
                'name' => 'Buffalo Cauliflower Bites',
                'category' => 'Food - Freezer',
                'description' => 'spicy cauliflower bites for a vegetarian snack.',
                'price' => 6.29
            ],
            [
                'name' => 'Thai Coconut Curry Sauce',
                'category' => 'Food - Condiments',
                'description' => 'A rich coconut curry sauce perfect for simmering vegetables or meats.',
                'price' => 3.99
            ],
            [
                'name' => 'Cinnamon Sugar Popcorn',
                'category' => 'Food - Snacks',
                'description' => 'sweet popcorn coated in a mixture of cinnamon and sugar.',
                'price' => 2.89
            ],
            [
                'name' => 'Wireless Car Charger',
                'category' => 'Automotive',
                'description' => 'Convenient charging pad for wireless charging in vehicles.',
                'price' => 24.99
            ],
            [
                'name' => 'stainless Steel Cutlery Set',
                'category' => 'Kitchen',
                'description' => 'High-quality cutlery set for daily use or special occasions.',
                'price' => 29.99
            ],
            [
                'name' => 'Pet Reflective Vest',
                'category' => 'pets',
                'description' => 'safety vest for pets during nighttime walks.',
                'price' => 18.99
            ],
            [
                'name' => 'Classic Minestrone Soup',
                'category' => 'Food - Soups',
                'description' => 'Hearty minestrone soup loaded with vegetables and pasta.',
                'price' => 2.99
            ],
            [
                'name' => 'Personal Safety Alarm',
                'category' => 'safety',
                'description' => 'Compact alarm for personal safety and security.',
                'price' => 12.99
            ],
            [
                'name' => 'Almond Flour Pancake Mix',
                'category' => 'Food - Baking',
                'description' => 'Gluten-free pancake mix made with almond flour.',
                'price' => 5.99
            ],
            [
                'name' => 'Mobile Workbench',
                'category' => 'Tools',
                'description' => 'sturdy mobile workbench with storage options.',
                'price' => 199.99
            ],
            [
                'name' => 'Chiffon Blouse',
                'category' => 'Clothing - Shirts',
                'description' => 'Elegant chiffon blouse perfect for work or outings.',
                'price' => 39.99
            ],
            [
                'name' => 'silicone Baking Mats',
                'category' => 'Kitchen',
                'description' => 'Reusable silicone mats for non-stick baking.',
                'price' => 19.99
            ],
            [
                'name' => 'Personalized Cutting Board',
                'category' => 'Kitchen',
                'description' => 'Custom cutting board made from high-quality wood.',
                'price' => 34.99
            ],
            [
                'name' => 'solar Power Bank',
                'category' => 'Electronics',
                'description' => 'Eco-friendly power bank that charges via sunlight.',
                'price' => 39.99
            ],
            [
                'name' => 'Tea Infuser Bottle',
                'category' => 'Kitchen',
                'description' => 'Bottle with infuser for brewing loose-leaf tea on the go.',
                'price' => 19.99
            ],
            [
                'name' => 'Italian Marinara Sauce',
                'category' => 'Food - Sauces',
                'description' => 'Classic marinara sauce for pasta, pizza, or dipping.',
                'price' => 3.29
            ],
            [
                'name' => 'Organic Coconut Flakes',
                'category' => 'Food - Baking',
                'description' => 'Unsweetened coconut flakes for baking and snacking.',
                'price' => 3.49
            ],
            [
                'name' => 'Wireless Induction Charger',
                'category' => 'Electronics',
                'description' => 'Qi-certified charger for fast wireless charging of smartphones.',
                'price' => 19.99
            ],
            [
                'name' => 'Marinated Artichokes',
                'category' => 'Food - Vegetables',
                'description' => 'Artichoke hearts marinated in herbs and oil.',
                'price' => 3.79
            ],
            [
                'name' => 'Quinoa',
                'category' => 'Food - Grains',
                'description' => 'Protein-rich quinoa, a great alternative to rice.',
                'price' => 4.49
            ],
            [
                'name' => 'Vanilla Pudding Mix',
                'category' => 'Food - Baking',
                'description' => 'Instant mix for creamy vanilla pudding.',
                'price' => 1.29
            ],
            [
                'name' => 'Rechargeable Hand Warmer',
                'category' => 'Accessories',
                'description' => 'Portable rechargeable warmer for cold days.',
                'price' => 22.99
            ],
            [
                'name' => 'Classic Leather Wallet',
                'category' => 'Clothing - Accessories',
                'description' => 'A sleek leather wallet that combines style and functionality.',
                'price' => 34.99
            ],
            [
                'name' => 'spinach and Ricotta Ravioli',
                'category' => 'Food - Pasta',
                'description' => 'Delicious ravioli filled with creamy ricotta and fresh spinach.',
                'price' => 6.49
            ],
            [
                'name' => 'Black Bean Soup',
                'category' => 'Food - Soups',
                'description' => 'spicy and flavorful soup made with black beans, perfect as a meal or starter.',
                'price' => 3.49
            ],
            [
                'name' => 'Graphic Hoodie',
                'category' => 'Clothing - Outerwear',
                'description' => 'Bold graphic hoodie featuring a comfortable fit and soft fabric.',
                'price' => 49.99
            ],
            [
                'name' => 'Cotton Pajama Set',
                'category' => 'Clothing - Loungewear',
                'description' => 'soft cotton pajama set for cozy nights in.',
                'price' => 49.99
            ],
            [
                'name' => 'Coconut Water',
                'category' => 'Food - Beverages',
                'description' => 'Refreshing coconut water, perfect for hydration.',
                'price' => 2.49
            ],
            [
                'name' => 'sliced Strawberries',
                'category' => 'Food - Fruits',
                'description' => 'Fresh sliced strawberries for toppings or snacking',
                'price' => 4.99
            ],
            [
                'name' => 'Interactive Plush Toy',
                'category' => 'Toys',
                'description' => 'soft, cuddly toy that interacts with children.',
                'price' => 34.99
            ],
            [
                'name' => 'Bluetooth Tracker',
                'category' => 'Accessories',
                'description' => 'smart tracker to locate keys or other items via app.',
                'price' => 19.99
            ],
            [
                'name' => 'Lemon Herb Quinoa',
                'category' => 'Food - Grains',
                'description' => 'Fluffy quinoa mixed with lemon zest and herbs, a perfect side.',
                'price' => 3.49
            ],
            [
                'name' => 'Chili Beans (canned)',
                'category' => 'Food - Canned Goods',
                'description' => 'Canned beans with chili sauce, perfect for chili dishes.',
                'price' => 1.69
            ],
            [
                'name' => 'Classic Pesto Sauce',
                'category' => 'Food - Sauces',
                'description' => 'Fresh basil pesto, perfect for pasta or as a sandwich spread.',
                'price' => 4.29
            ],
            [
                'name' => 'streaming Device',
                'category' => 'Electronics',
                'description' => 'HD streaming device for accessing popular services.',
                'price' => 49.99
            ],
            [
                'name' => 'Pet Travel Backpack Carrier',
                'category' => 'pets',
                'description' => 'Comfortable carry for pets while hiking or traveling.',
                'price' => 49.99
            ],
            [
                'name' => 'Vegan Caesar Dressing',
                'category' => 'Food - Condiments',
                'description' => 'Creamy vegan dressing made with cashews, perfect for salads.',
                'price' => 3.99
            ],
            [
                'name' => 'Decorative Wall Tapestry',
                'category' => 'Home',
                'description' => 'Colorful tapestry to add charm to any room.',
                'price' => 34.99
            ],
            [
                'name' => 'Italian Pasta',
                'category' => 'Food - Grains',
                'description' => 'Authentic Italian pasta, perfect for a classic meal.',
                'price' => 2.29
            ],
            [
                'name' => 'Organic Whole Grain Oats',
                'category' => 'Food - Breakfast',
                'description' => 'Whole grain oats that are perfect for breakfast or baking.',
                'price' => 2.49
            ],
            [
                'name' => 'Multi-Function Smartphone Holder',
                'category' => 'Electronics',
                'description' => 'Versatile holder that can be used on desks, cars, and more.',
                'price' => 12.99
            ],
            [
                'name' => 'Ginger Turmeric Shots',
                'category' => 'Food - Beverages',
                'description' => 'Ready-to-drink shots made with fresh ginger and turmeric.',
                'price' => 3.99
            ],
            [
                'name' => 'Faux Fur Coat',
                'category' => 'Clothing - Coats',
                'description' => 'A luxurious faux fur coat that adds glamour to any outfit.',
                'price' => 129.99
            ],
            [
                'name' => 'Insulated Lunch Box',
                'category' => 'Kitchen',
                'description' => 'Durable lunch box designed to keep food fresh and cool.',
                'price' => 24.99
            ],
            [
                'name' => 'Golf Polo Shirt',
                'category' => 'Clothing - Tops',
                'description' => 'Breathable polo shirt designed for both style and comfort on the greens.',
                'price' => 39.99
            ],
            [
                'name' => 'Thai Red Curry Paste',
                'category' => 'Food - Condiments',
                'description' => 'spicy and flavorful curry paste for authentic Thai dishes.',
                'price' => 3.99
            ],
            [
                'name' => 'First Aid Kit',
                'category' => 'Health',
                'description' => 'Comprehensive first aid kit for emergency situations.',
                'price' => 29.99
            ],
            [
                'name' => 'Pet Hair Removal Brush',
                'category' => 'pets',
                'description' => 'Effective brush for removing loose hair from pets.',
                'price' => 14.99
            ],
            [
                'name' => 'Oven-Baked Sweet Potato Fries',
                'category' => 'Food - Frozen Foods',
                'description' => 'Crispy sweet potato fries, perfectly seasoned and baked to perfection.',
                'price' => 3.99
            ],
            [
                'name' => 'Fitness Tracker Band',
                'category' => 'Fitness',
                'description' => 'Affordable fitness tracker with heart rate monitor.',
                'price' => 29.99
            ],
            [
                'name' => 'Roasted Red Pepper Sauce',
                'category' => 'Food - Sauces',
                'description' => 'savory sauce perfect for pasta or dipping.',
                'price' => 3.29
            ],
            [
                'name' => 'savory Oatmeal',
                'category' => 'Food - Breakfast',
                'description' => 'Oatmeal made with savory spices and vegetables.',
                'price' => 2.49
            ],
            [
                'name' => 'Underwater Camera',
                'category' => 'Photography',
                'description' => 'Waterproof camera for capturing underwater adventures.',
                'price' => 199.99
            ],
            [
                'name' => 'Cheesy Cauliflower Bake',
                'category' => 'Food - Frozen Vegetables',
                'description' => 'A frozen cheesy bake made with cauliflower, great as a side dish or a vegetarian meal.',
                'price' => 5.49
            ],
            [
                'name' => 'Yoga Mat',
                'category' => 'Fitness',
                'description' => 'Non-slip yoga mat for optimal grip and comfort.',
                'price' => 25
            ],
            [
                'name' => 'Robot Vacuum Cleaner',
                'category' => 'Home Appliances',
                'description' => 'smart robotic vacuum for automatic cleaning.',
                'price' => 299.99
            ],
            [
                'name' => 'Frozen Edamame',
                'category' => 'Food - Frozen Foods',
                'description' => 'Lightly salted frozen edamame, a protein-packed snack.',
                'price' => 3.29
            ],
            [
                'name' => 'Pet Travel Bowl',
                'category' => 'pets',
                'description' => 'Collapsible travel bowl for pets on the go.',
                'price' => 10.99
            ],
            [
                'name' => 'samoas Cookie Mix',
                'category' => 'Food - Baking',
                'description' => 'Baking mix to create your favorite Samoa-style cookies at home.',
                'price' => 5.59
            ],
            [
                'name' => 'Interactive Robot Toy',
                'category' => 'Toys',
                'description' => 'Fun robot that engages kids with games and activities.',
                'price' => 34.99
            ],
            [
                'name' => 'Mini Projector',
                'category' => 'Electronics',
                'description' => 'Portable projector with 1080p resolution for movies.',
                'price' => 169.99
            ],
            [
                'name' => 'Ginger Tea',
                'category' => 'Food - Beverages',
                'description' => 'A soothing herbal tea made from ginger root.',
                'price' => 4.99
            ],
            [
                'name' => 'scented Candle Set',
                'category' => 'Home',
                'description' => 'set of soothing scented candles for relaxation and ambiance.',
                'price' => 24.99
            ],
            [
                'name' => 'Coconut Cream Pie',
                'category' => 'Food - Bakery',
                'description' => 'Delicious pie filled with coconut cream and topped with whipped cream.',
                'price' => 9.49
            ],
            [
                'name' => 'Fitness Tracker Watch',
                'category' => 'Wearable Tech',
                'description' => 'Water-resistant activity tracker and smartwatch features.',
                'price' => 79.99
            ],
            [
                'name' => 'Hydration Backpack',
                'category' => 'Outdoor',
                'description' => 'Lightweight backpack with an insulated water reservoir for hydration on the go.',
                'price' => 39.99
            ],
            [
                'name' => 'Beef Taco Skillet',
                'category' => 'Food - Meal Kits',
                'description' => 'A convenient meal kit for making a delicious beef taco skillet at home.',
                'price' => 8.49
            ],
            [
                'name' => 'Camping Chair with Cooler',
                'category' => 'Outdoor',
                'description' => 'Foldable chair equipped with a cooler pouch.',
                'price' => 49.99
            ],
            [
                'name' => 'Handheld Shower Head',
                'category' => 'Bathroom',
                'description' => 'Adjustable shower head for a luxurious shower experience.',
                'price' => 34.99
            ],
            [
                'name' => 'Over-The-Door Shoe Organizer',
                'category' => 'Home',
                'description' => 'space-saving shoe organizer for tight spaces.',
                'price' => 25.99
            ],
            [
                'name' => 'Pressure Washer Accessories Kit',
                'category' => 'Home Improvement',
                'description' => 'Essential attachments for pressure washing.',
                'price' => 39.99
            ],
            [
                'name' => 'Pasta Maker Machine',
                'category' => 'Kitchen',
                'description' => 'Manual pasta maker for creating fresh pasta at home.',
                'price' => 59.99
            ],
            [
                'name' => 'Multi-Cooker',
                'category' => 'Kitchen',
                'description' => 'Versatile multi-cooker for pressure cooking and slow cooking.',
                'price' => 89.99
            ],
            [
                'name' => 'Non-Stick Grill Mat',
                'category' => 'Outdoor',
                'description' => 'Reusable mat that prevents food from sticking to the grill.',
                'price' => 19.99
            ],
            [
                'name' => 'Apple Cinnamon Instant Oatmeal',
                'category' => 'Food - Cereal',
                'description' => 'Quick oatmeal packets infused with apple and cinnamon, perfect for breakfast.',
                'price' => 3.49
            ],
            [
                'name' => 'Cocktail Shaker Set',
                'category' => 'Kitchen',
                'description' => 'Bartender kit with shaker, jigger, and strainer.',
                'price' => 29.99
            ],
            [
                'name' => 'Electric Nail File Kit',
                'category' => 'Beauty',
                'description' => 'Professional-grade nail care set for manicures and pedicures.',
                'price' => 34.99
            ],
            [
                'name' => 'Bamboo Cutting Board',
                'category' => 'Kitchen',
                'description' => 'Eco-friendly bamboo cutting board for food prep.',
                'price' => 22
            ],
            [
                'name' => 'Magic Color-Changing Mug',
                'category' => 'Kitchen',
                'description' => 'Heat-sensitive mug that changes color when filled with hot liquid.',
                'price' => 14.99
            ],
            [
                'name' => 'Wall Art Stickers',
                'category' => 'Home',
                'description' => 'Removable wall art stickers for home decoration.',
                'price' => 19.99
            ],
            [
                'name' => 'smartphone Gimbal Stabilizer',
                'category' => 'Photography',
                'description' => 'stabilizer for smooth video recording with smartphones.',
                'price' => 89.99
            ],
            [
                'name' => 'Dark Chocolate Almond Butter Cups',
                'category' => 'Food - Snacks',
                'description' => 'Rich almond butter encased in dark chocolate.',
                'price' => 4.99
            ],
            [
                'name' => 'Radish Chips',
                'category' => 'Food - Snacks',
                'description' => 'Crispy baked radish chips, a healthy snack alternative.',
                'price' => 2.89
            ],
            [
                'name' => 'Luxury Rolling Makeup Case',
                'category' => 'Beauty',
                'description' => 'stylish and spacious case for makeup and beauty products.',
                'price' => 99.99
            ],
            [
                'name' => 'Greek Feta Cheese',
                'category' => 'Food - Dairy',
                'description' => 'Creamy and crumbly cheese for salads and dishes.',
                'price' => 4.99
            ],
            [
                'name' => 'solar Charger',
                'category' => 'Electronics',
                'description' => 'Portable solar charger for outdoor adventures.',
                'price' => 39.99
            ],
            [
                'name' => 'Creamy Garlic Dressing',
                'category' => 'Food - Condiments',
                'description' => 'Rich and creamy dressing with garlic flavor, perfect for salads.',
                'price' => 3.99
            ],
            [
                'name' => 'Peanut Butter Protein Balls',
                'category' => 'Food - Snacks',
                'description' => 'No-bake energy bites made with peanut butter and oats.',
                'price' => 5.29
            ],
            [
                'name' => 'Pet Carrier',
                'category' => 'pets',
                'description' => 'Comfortable pet carrier for travel and vet visits.',
                'price' => 39.99
            ],
            [
                'name' => 'Teriyaki Stir-Fry Sauce',
                'category' => 'Food - Condiments',
                'description' => 'savory teriyaki sauce for stir-frying veggies or meats.',
                'price' => 3.49
            ],
            [
                'name' => 'Arcade Game Machine',
                'category' => 'Gaming',
                'description' => 'Retro arcade machine for classic gaming.',
                'price' => 299.99
            ],
            [
                'name' => 'Berry Smoothie Mix',
                'category' => 'Food - Frozen Foods',
                'description' => 'Frozen mix for quick berry smoothies.',
                'price' => 4.99
            ],
            [
                'name' => 'Rice Noodles',
                'category' => 'Food - Grains',
                'description' => 'Thin rice noodles, ideal for stir-fries and soups.',
                'price' => 3.49
            ],
            [
                'name' => 'Raspberry Vanilla Greek Yogurt',
                'category' => 'Food - Dairy',
                'description' => 'Creamy Greek yogurt infused with raspberry and vanilla flavors.',
                'price' => 3.49
            ],
            [
                'name' => 'Rechargeable Electric Screwdriver',
                'category' => 'Tools',
                'description' => 'Convenient electric screwdriver for DIY projects at home.',
                'price' => 39.99
            ],
            [
                'name' => 'Coconut Water',
                'category' => 'Food - Beverages',
                'description' => 'Refreshing coconut water, perfect for hydration.',
                'price' => 2.49
            ],
            [
                'name' => 'Herbal Tea Set',
                'category' => 'Food',
                'description' => 'Assorted herbal tea bags for relaxation and wellness.',
                'price' => 19.99
            ],
            [
                'name' => 'sliced Ham',
                'category' => 'Food - Meat',
                'description' => 'Delicious and fully cooked sliced ham, ready to eat.',
                'price' => 5.49
            ],
            [
                'name' => 'Nature Explorer Lens Kit',
                'category' => 'Toys',
                'description' => 'Magical lens kit for kids to explore the outdoors.',
                'price' => 19.99
            ],
            [
                'name' => 'Magnetic Phone Car Mount',
                'category' => 'Automotive',
                'description' => 'strong magnetic holder for smartphones in cars.',
                'price' => 14.99
            ],
            [
                'name' => 'Ramen Noodles',
                'category' => 'Food - Pasta',
                'description' => 'Quick-cooking ramen for instant meals.',
                'price' => 0.99
            ],
            [
                'name' => 'Honeycrisp Apple Chips',
                'category' => 'Food - Snacks',
                'description' => 'Crispy and sweet dried apple slices',
                'price' => 3.49
            ],
            [
                'name' => 'smart Home Security Camera',
                'category' => 'smart Home',
                'description' => 'Wi-Fi camera with motion detection for home security.',
                'price' => 79.99
            ],
            [
                'name' => 'Honey Garlic Shrimp',
                'category' => 'Food - Seafood',
                'description' => 'shrimp marinated in a honey garlic sauce, ready to cook.',
                'price' => 8.49
            ],
            [
                'name' => 'Bluetooth Car Adapter',
                'category' => 'Automotive',
                'description' => 'Connect your phone to the car\'s audio system via Bluetooth.',
                'price' => 24.99
            ],
            [
                'name' => 'self-Watering Planters',
                'category' => 'Garden',
                'description' => 'Planters with a self-watering feature for easy care.',
                'price' => 49.99
            ],
            [
                'name' => 'Chunky Knit Sweater',
                'category' => 'Clothing - Tops',
                'description' => 'Cozy oversized sweater perfect for chilly days with a textured knit design.',
                'price' => 59.99
            ],
            [
                'name' => 'ski Goggles',
                'category' => 'sports',
                'description' => 'Anti-fog ski goggles for winter sports.',
                'price' => 49.99
            ],
            [
                'name' => 'sweet Potato Mash',
                'category' => 'Food - Frozen Foods',
                'description' => 'Creamy mashed sweet potatoes, ready to heat and serve.',
                'price' => 3.99
            ],
            [
                'name' => 'self-Cleaning Water Bottle',
                'category' => 'Fitness',
                'description' => 'Water bottle with built-in UV-C light for self-cleaning.',
                'price' => 49.99
            ],
            [
                'name' => 'set of Gardening Gloves with Claws',
                'category' => 'Garden',
                'description' => 'Multi-functional gloves for planting and digging without tools.',
                'price' => 15.99
            ],
            [
                'name' => 'Collapsible Colander',
                'category' => 'Kitchen',
                'description' => 'space-saving colander for rinsing fruits and vegetables.',
                'price' => 14.99
            ],
            [
                'name' => 'Puzzle Game Set',
                'category' => 'Toys',
                'description' => 'Challenging puzzle game set for family entertainment.',
                'price' => 34.99
            ],
            [
                'name' => 'Classic Vanilla Fudge',
                'category' => 'Food - Desserts',
                'description' => 'Creamy vanilla fudge, a sweet treat for all occasions.',
                'price' => 4.49
            ],
            [
                'name' => 'Coffee Grinder',
                'category' => 'Kitchen',
                'description' => 'Burr coffee grinder for fresh ground coffee.',
                'price' => 39.99
            ],
            [
                'name' => 'Educational STEM Kit',
                'category' => 'Toys',
                'description' => 'Hands-on experience with science and engineering projects.',
                'price' => 35.99
            ],
            [
                'name' => 'Running Shorts',
                'category' => 'Clothing - Activewear',
                'description' => 'Lightweight and breathable running shorts for your workouts.',
                'price' => 34.99
            ],
            [
                'name' => 'Electric Kettle',
                'category' => 'Kitchen',
                'description' => 'Rapid boil electric kettle with temperature control.',
                'price' => 39.99
            ],
            [
                'name' => 'Luxury Yoga Mat',
                'category' => 'Fitness',
                'description' => 'High-density, non-slip yoga mat for stability and comfort.',
                'price' => 39.99
            ],
            [
                'name' => 'Non-Stick Grill Mat',
                'category' => 'Outdoor',
                'description' => 'Reusable mat that prevents food from sticking to the grill.',
                'price' => 19.99
            ],
            [
                'name' => 'LED Flashing Pet Collar',
                'category' => 'pets',
                'description' => 'safety collar with flashing lights for pets during night walks.',
                'price' => 14.99
            ],
            [
                'name' => 'Fitness Tracker',
                'category' => 'Fitness',
                'description' => 'Track steps, heart rate, and sleep patterns.',
                'price' => 49.99
            ],
            [
                'name' => 'Apple Juice',
                'category' => 'Food - Beverages',
                'description' => 'Refreshing apple juice, 100% juice with no added sugar.',
                'price' => 3.29
            ],
            [
                'name' => 'Protein Bar Variety Pack',
                'category' => 'Food - Snacks',
                'description' => 'A pack of assorted nut and protein bars for a quick energy boost.',
                'price' => 12.99
            ],
            [
                'name' => 'Rechargeable Electric Screwdriver',
                'category' => 'Tools',
                'description' => 'Convenient electric screwdriver for DIY projects at home.',
                'price' => 39.99
            ],
            [
                'name' => 'Puzzle Mat',
                'category' => 'Toys',
                'description' => 'Foldable mat for jigsaw puzzle assembly.',
                'price' => 22.99
            ],
            [
                'name' => 'Balsamic Salad Dressing',
                'category' => 'Food - Deli',
                'description' => 'Tangy and sweet balsamic dressing, perfect for salads.',
                'price' => 2.99
            ],
            [
                'name' => 'Magnetic Spice Containers',
                'category' => 'Kitchen',
                'description' => 'set of magnetic jars for convenient spice organization.',
                'price' => 24.99
            ],
            [
                'name' => 'Classic Caesar Dressing',
                'category' => 'Food - Condiments',
                'description' => 'Rich and creamy Caesar dressing for salads and wraps.',
                'price' => 3.49
            ],
            [
                'name' => 'Organic Baby Carrots',
                'category' => 'Food - Fresh Produce',
                'description' => 'Fresh and crunchy baby carrots ready for snacking.',
                'price' => 2.99
            ],
            [
                'name' => 'Honey Wheat Pretzels',
                'category' => 'Food - Snacks',
                'description' => 'Crunchy pretzel sticks made with honey and whole wheat.',
                'price' => 3.49
            ],
            [
                'name' => 'Garden Hose',
                'category' => 'Garden',
                'description' => 'Durable 50-foot garden hose with nozzle.',
                'price' => 32.99
            ],
            [
                'name' => 'High-Low Hem Tee',
                'category' => 'Clothing - Tops',
                'description' => 'Trendy high-low tee with a relaxed fit, ideal for weekends.',
                'price' => 22.99
            ],
            [
                'name' => 'Chia Seed Pudding',
                'category' => 'Food - Snacks',
                'description' => 'Nutritious chia seed pudding in vanilla flavor, ready to eat.',
                'price' => 3.99
            ],
            [
                'name' => 'Pet Hair Remover',
                'category' => 'pets',
                'description' => 'Effective roller for removing pet hair from furniture.',
                'price' => 9.99
            ],
            [
                'name' => 'streaming Device',
                'category' => 'Electronics',
                'description' => 'HD streaming device for accessing popular services.',
                'price' => 49.99
            ],
            [
                'name' => 'Portable Phone Mug Holder',
                'category' => 'Automotive',
                'description' => 'Convenient holder for drinks and phones while driving.',
                'price' => 14.99
            ],
            [
                'name' => 'Vegetable Fried Rice Mix',
                'category' => 'Food - Frozen Food',
                'description' => 'A quick and easy fried rice mix with colorful veggies and savory seasoning.',
                'price' => 3.99
            ],
            [
                'name' => 'Inflatable Pool Float',
                'category' => 'Outdoor',
                'description' => 'Fun inflatable float for lounging in the pool or beach.',
                'price' => 29.99
            ],
            [
                'name' => 'Knitted Infinity Scarf',
                'category' => 'Clothing - Accessories',
                'description' => 'A warm knitted scarf to keep you cozy in winter.',
                'price' => 29.99
            ],
            [
                'name' => 'Honeycrisp Apples',
                'category' => 'Food - Produce',
                'description' => 'Crisp and sweet Honeycrisp apples, freshly picked.',
                'price' => 1.89
            ],
            [
                'name' => 'Ethically-Sourced Coffee Beans',
                'category' => 'Food - Beverages',
                'description' => 'Freshly roasted coffee beans with rich flavor.',
                'price' => 9.99
            ],
            [
                'name' => 'Blueberry Muffin Mix',
                'category' => 'Food - Baking',
                'description' => 'Make delightful blueberry muffins at home with this easy mix.',
                'price' => 4.29
            ],
            [
                'name' => 'Portable Solar Path Lights',
                'category' => 'Outdoor',
                'description' => 'Eco-friendly solar lights for pathways and gardens.',
                'price' => 39.99
            ],
            [
                'name' => 'Pesto Pasta Salad',
                'category' => 'Food - Prepared Foods',
                'description' => 'Cold pasta salad tossed with pesto and fresh vegetables.',
                'price' => 4.99
            ],
            [
                'name' => 'Customizable Name Puzzle',
                'category' => 'Toys',
                'description' => 'Personalized wooden puzzles for children that encourage learning.',
                'price' => 29.99
            ],
            [
                'name' => 'Mini Electric Kettle',
                'category' => 'Kitchen',
                'description' => 'Quick boiling kettle for small kitchens and dorms.',
                'price' => 29.99
            ],
            [
                'name' => 'Cinnamon Raisin Bread',
                'category' => 'Food - Bakery',
                'description' => 'sweet bread with cinnamon and raisins, great for breakfast or snacks.',
                'price' => 3.79
            ],
            [
                'name' => 'Mini Air Purifier',
                'category' => 'Health',
                'description' => 'Battery-operated air purifier for small spaces.',
                'price' => 49.99
            ],
            [
                'name' => 'Wireless Charging Station',
                'category' => 'Electronics',
                'description' => 'Charge multiple devices with this sleek charging station.',
                'price' => 39.99
            ],
            [
                'name' => 'soft Plush Throw Blanket',
                'category' => 'Home',
                'description' => 'Cozy throw blanket perfect for chilly evenings.',
                'price' => 29.99
            ],
            [
                'name' => 'Vegetable Lentil Soup',
                'category' => 'Food - Canned Goods',
                'description' => 'A hearty soup made with lentils, a variety of vegetables, and spices, ideal for a nutritious meal.',
                'price' => 3.49
            ],
            [
                'name' => 'Natural Soy Candles',
                'category' => 'Home',
                'description' => 'Eco-friendly soy candles with a variety of scents.',
                'price' => 19.99
            ],
            [
                'name' => 'Almond Butter Crunch Bar',
                'category' => 'Food - Snacks',
                'description' => 'Nutritious snack bar made with almond butter and protein.',
                'price' => 1.99
            ],
            [
                'name' => 'Dog Training Whistle',
                'category' => 'pets',
                'description' => 'High-frequency whistle for training your dog effectively.',
                'price' => 8.99
            ],
            [
                'name' => 'Folding Table',
                'category' => 'Outdoor',
                'description' => 'Portable folding table for outdoor events.',
                'price' => 59.99
            ],
            [
                'name' => 'Ceramic Planter Set',
                'category' => 'Home',
                'description' => 'set of decorative ceramic planters for indoor plants.',
                'price' => 39.99
            ],
            [
                'name' => 'Bock Beer Mustard',
                'category' => 'Food - Condiments',
                'description' => 'Flavorful mustard with a tangy kick, perfect for hot dogs and sandwiches.',
                'price' => 2.29
            ],
            [
                'name' => 'Cotton Tote Bag Set',
                'category' => 'Accessories',
                'description' => 'Reusable tote bags for shopping and eco-friendly living.',
                'price' => 29.99
            ],
            [
                'name' => 'self-Watering Planter',
                'category' => 'Garden',
                'description' => 'Planter with self-watering feature for easy plant care.',
                'price' => 24.99
            ],
            [
                'name' => 'Wireless Keyboard and Mouse Combo',
                'category' => 'Electronics',
                'description' => 'Compact wireless set for easy computer usability.',
                'price' => 34.99
            ],
            [
                'name' => 'Vegan Tacos',
                'category' => 'Food - Frozen Foods',
                'description' => 'Frozen vegan tacos filled with plant-based protein and spices.',
                'price' => 7.49
            ],
            [
                'name' => 'Foldable Yoga Mat Carry Bag',
                'category' => 'Fitness',
                'description' => 'Durable bag for carrying your yoga mat and accessories.',
                'price' => 18.99
            ],
            [
                'name' => 'Maple Pecan Granola',
                'category' => 'Food - Breakfast',
                'description' => 'Crunchy granola with maple syrup and pecans, great for breakfast or snacking.',
                'price' => 4.49
            ],
            [
                'name' => 'Key Finder',
                'category' => 'Accessories',
                'description' => 'Bluetooth-enabled key tracker to find lost items easily.',
                'price' => 19.99
            ],
            [
                'name' => 'Car Trash Can',
                'category' => 'Automotive',
                'description' => 'Compact trash can for keeping your car clean.',
                'price' => 12.99
            ],
            [
                'name' => 'Reclining Camping Chair',
                'category' => 'Outdoor',
                'description' => 'Foldable reclining camping chair with cup holder.',
                'price' => 49.99
            ],
            [
                'name' => 'Blueberry Chia Jam',
                'category' => 'Food - Spreads',
                'description' => 'Homemade jam made with blueberries and chia seeds, no added sugar.',
                'price' => 4.99
            ],
            [
                'name' => 'shatterproof Wine Glasses',
                'category' => 'Outdoor',
                'description' => 'Durable, unbreakable wine glasses for outdoor use.',
                'price' => 24.99
            ],
            [
                'name' => 'Honey mustard chicken tenders',
                'category' => 'Food - Meat',
                'description' => 'Golden crispy chicken tenders coated with honey mustard flavor.',
                'price' => 7.99
            ],
            [
                'name' => 'Ground Turkey',
                'category' => 'Food - Meat',
                'description' => 'Lean and versatile ground turkey, perfect for various dishes.',
                'price' => 5.49
            ],
            [
                'name' => 'spicy BBQ Sauce',
                'category' => 'Food - Condiments',
                'description' => 'A tangy and spicy BBQ sauce that\'s perfect for grilling.',
                'price' => 3.99
            ],
            [
                'name' => 'Popcorn Chicken',
                'category' => 'Food - Frozen',
                'description' => 'Crispy chicken bites, perfect for dipping.',
                'price' => 6.49
            ],
            [
                'name' => 'Thermostatic Shower Valve Kit',
                'category' => 'Bathroom',
                'description' => 'Regulate water temperature for safe and comfortable showers.',
                'price' => 39.99
            ],
            [
                'name' => 'silicone Baking Mat Set',
                'category' => 'Kitchen',
                'description' => 'Non-stick and reusable mats for easy baking.',
                'price' => 24.99
            ],
            [
                'name' => 'Collapsible Storage Crates',
                'category' => 'Home',
                'description' => 'space-saving crates for easy organization at home or while traveling.',
                'price' => 18.99
            ],
            [
                'name' => 'Turkey Bacon',
                'category' => 'Food - Meat',
                'description' => 'Delicious turkey bacon, a healthier alternative.',
                'price' => 3.99
            ],
            [
                'name' => 'Coconut Curry Chicken',
                'category' => 'Food - Frozen Foods',
                'description' => 'Tender chicken cooked in a rich coconut curry sauce, ready to heat and serve.',
                'price' => 9.99
            ],
            [
                'name' => 'smart Thermostat with Wi-Fi',
                'category' => 'smart Home',
                'description' => 'Wi-Fi enabled thermostat that learns your habits.',
                'price' => 169.99
            ],
            [
                'name' => 'Heavy-Duty Utility Tote',
                'category' => 'Accessories',
                'description' => 'Large, durable tote bag for shopping and outdoor activities.',
                'price' => 34.99
            ],
            [
                'name' => 'Wire Shelving Unit',
                'category' => 'Home',
                'description' => 'Adjustable shelving unit for home or garage storage.',
                'price' => 69.99
            ],
            [
                'name' => 'Desk Lamp with USB Port',
                'category' => 'Office',
                'description' => 'Modern desk lamp that features a built-in USB charging port.',
                'price' => 29.99
            ],
            [
                'name' => 'spicy Beef Taco Mix',
                'category' => 'Food - Condiments',
                'description' => 'Easy mix for making spicy beef tacos.',
                'price' => 1.99
            ],
            [
                'name' => 'Pet Hair Remover',
                'category' => 'pets',
                'description' => 'Effective roller for removing pet hair from furniture.',
                'price' => 9.99
            ],
            [
                'name' => 'Gardening Gloves',
                'category' => 'Garden',
                'description' => 'Durable gardening gloves with reinforced fingertips.',
                'price' => 15.99
            ],
            [
                'name' => 'Chocolate Dipped Fruit',
                'category' => 'Food - Snacks',
                'description' => 'Fruits dipped in rich chocolate, perfect for desserts.',
                'price' => 5.99
            ],
            [
                'name' => 'BBQ Lentil Chips',
                'category' => 'Food - Snacks',
                'description' => 'savory lentil chips with BBQ flavor',
                'price' => 3.49
            ],
            [
                'name' => 'Gardening Kneeler and Seat',
                'category' => 'Garden',
                'description' => 'Foldable kneeler that doubles as a seat for gardening convenience.',
                'price' => 39.99
            ],
            [
                'name' => 'Multi-Purpose Scissors',
                'category' => 'Office',
                'description' => 'Heavy-duty scissors for crafting and office use.',
                'price' => 8.99
            ],
            [
                'name' => 'Children\'s Science Experiment Lab Kit',
                'category' => 'Toys',
                'description' => 'sTEM-based kit for kids featuring cool science experiments.',
                'price' => 29.99
            ],
            [
                'name' => 'Athletic Compression Tights',
                'category' => 'Clothing - Activewear',
                'description' => 'High-performance compression tights designed for optimal support and comfort.',
                'price' => 39.99
            ],
            [
                'name' => 'Infrared Thermometer',
                'category' => 'Health',
                'description' => 'Non-contact thermometer for checking temperatures instantly.',
                'price' => 39.99
            ],
            [
                'name' => 'Brussels Sprouts',
                'category' => 'Food - Produce',
                'description' => 'Fresh Brussels sprouts, great for roasting or steaming.',
                'price' => 3.49
            ],
            [
                'name' => 'Warm Wool Sweater',
                'category' => 'Clothing - Tops',
                'description' => 'Cozy wool sweater to keep you warm on chilly days.',
                'price' => 59.99
            ],
            [
                'name' => 'Multi-Purpose Plant Care Tool',
                'category' => 'Garden',
                'description' => 'All-in-one tool for measuring soil moisture, light, and pH.',
                'price' => 24.99
            ],
            [
                'name' => 'Chickpeas',
                'category' => 'Food - Canned Goods',
                'description' => 'Canned chickpeas, perfect for hummus or salads.',
                'price' => 1.29
            ],
            [
                'name' => 'Pet Travel Carrier',
                'category' => 'pets',
                'description' => 'Comfortable carrier for small pets during travel.',
                'price' => 39.99
            ],
            [
                'name' => 'Almond Milk',
                'category' => 'Food - Dairy',
                'description' => 'Deliciously creamy almond milk, perfect for smoothies.',
                'price' => 3.29
            ],
            [
                'name' => 'Maple Cinnamon Almonds',
                'category' => 'Food - Nuts',
                'description' => 'Roasted almonds coated in a sweet maple and cinnamon mixture.',
                'price' => 4.29
            ],
            [
                'name' => 'Granola Bars',
                'category' => 'Food - Snacks',
                'description' => 'Crispy and chewy granola bars, perfect for on-the-go.',
                'price' => 4.99
            ],
            [
                'name' => 'Creamy Tomato Basil Soup',
                'category' => 'Food - Canned Goods',
                'description' => 'Rich and creamy tomato basil soup, perfect with a grilled cheese.',
                'price' => 3.29
            ],
            [
                'name' => 'Toy Building Set',
                'category' => 'Toys',
                'description' => 'Creative building set for kids to spark imagination.',
                'price' => 29.99
            ],
            [
                'name' => 'Portable Ice Maker',
                'category' => 'Kitchen',
                'description' => 'Compact ice maker for creating ice at home or in offices.',
                'price' => 199.99
            ],
            [
                'name' => 'smartphone Gimbal',
                'category' => 'Electronics',
                'description' => 'stabilizing gimbal for smooth video recording.',
                'price' => 89.99
            ],
            [
                'name' => 'Plant Watering Spikes',
                'category' => 'Garden',
                'description' => 'Automatic watering devices for potted plants.',
                'price' => 12.99
            ],
            [
                'name' => 'Chic Ankle Strap Heels',
                'category' => 'Clothing - Shoes',
                'description' => 'stylish ankle strap heels for a classy look at any event.',
                'price' => 69.99
            ],
            [
                'name' => 'smart Light Bulbs',
                'category' => 'smart Home',
                'description' => 'Color-changing smart LED bulbs compatible with Alexa.',
                'price' => 34.99
            ],
            [
                'name' => 'spicy Snack Mix',
                'category' => 'Food - Snacks',
                'description' => 'A crunchy blend of nuts and pretzels with a spicy kick.',
                'price' => 4.99
            ],
            [
                'name' => 'soft Plush Throw Blanket',
                'category' => 'Home',
                'description' => 'Cozy throw blanket perfect for chilly evenings.',
                'price' => 29.99
            ],
            [
                'name' => 'Pumpkin Spice Pancake Mix',
                'category' => 'Food - Breakfast',
                'description' => 'Pancake mix infused with seasonal pumpkin spice flavor.',
                'price' => 3.49
            ],
            [
                'name' => 'Ice Cube Tray with Lid',
                'category' => 'Kitchen',
                'description' => 'silicone tray for making ice cubes with a lid to prevent spills.',
                'price' => 10.99
            ],
            [
                'name' => 'Portable Air Conditioner',
                'category' => 'Home Appliances',
                'description' => 'Compact air conditioner for personal cooling.',
                'price' => 299.99
            ],
            [
                'name' => 'Cauliflower Gnocchi',
                'category' => 'Food - Frozen Foods',
                'description' => 'soft and pillowy gnocchi made from cauliflower, perfect with sauce.',
                'price' => 3.59
            ],
            [
                'name' => 'smartphone Tripod with Remote',
                'category' => 'Photography',
                'description' => 'Adjustable tripod with remote shutter for smartphones.',
                'price' => 29.99
            ],
            [
                'name' => 'Car Emergency Kit',
                'category' => 'Automotive',
                'description' => 'Comprehensive emergency kit for roadside assistance.',
                'price' => 49.99
            ],
            [
                'name' => 'BBQ Lentil Chips',
                'category' => 'Food - Snacks',
                'description' => 'savory lentil chips with BBQ flavor',
                'price' => 3.49
            ],
            [
                'name' => 'snap-On Tupperware Set',
                'category' => 'Kitchen',
                'description' => 'Durable and versatile food storage containers.',
                'price' => 34.99
            ],
            [
                'name' => 'Portable Solar Phone Charger',
                'category' => 'Electronics',
                'description' => 'Eco-friendly charger that uses solar energy for powering devices.',
                'price' => 29.99
            ],
            [
                'name' => 'Classic Chicken Noodle Soup',
                'category' => 'Food - Canned Goods',
                'description' => 'A comforting soup filled with chicken and noodles in broth.',
                'price' => 3.49
            ],
            [
                'name' => 'Grilled Veggie Burgers',
                'category' => 'Food - Meat Alternatives',
                'description' => 'Delicious veggie burgers loaded with grilled vegetables.',
                'price' => 6.29
            ],
            [
                'name' => 'Electric Toothbrush',
                'category' => 'Health',
                'description' => 'Rechargeable electric toothbrush with smart timer.',
                'price' => 49.95
            ],
            [
                'name' => 'Portable Grill Cover',
                'category' => 'Outdoor',
                'description' => 'Durable cover to protect your grill from the elements.',
                'price' => 24.99
            ],
            [
                'name' => 'Honey BBQ Riblets',
                'category' => 'Food - Meat',
                'description' => 'Tender riblets coated in a honey barbecue glaze, perfect for grilling or baking.',
                'price' => 12.99
            ],
            [
                'name' => 'salsa',
                'category' => 'Food - Condiments',
                'description' => 'Fresh and zesty salsa, perfect for nachos.',
                'price' => 3.49
            ],
            [
                'name' => 'Animal Paw Print Soap Dispenser',
                'category' => 'Home',
                'description' => 'Cute dispenser for bathrooms or kitchens featuring paw prints.',
                'price' => 16.99
            ],
            [
                'name' => 'Personalized Cutting Board',
                'category' => 'Kitchen',
                'description' => 'Custom cutting board made from high-quality wood.',
                'price' => 34.99
            ],
            [
                'name' => 'Pet Water Fountain with Filtration',
                'category' => 'pets',
                'description' => 'Continuous stream of fresh water for pets, promoting hydration.',
                'price' => 39.99
            ],
            [
                'name' => 'Rustic Italian Breads',
                'category' => 'Food - Bakery',
                'description' => 'Freshly baked artisan bread with a crisp crust and soft center.',
                'price' => 3.99
            ],
            [
                'name' => 'Frozen Edamame',
                'category' => 'Food - Frozen Foods',
                'description' => 'Lightly salted frozen edamame, a protein-packed snack.',
                'price' => 3.29
            ],
            [
                'name' => 'Chocolate Mint Cookies',
                'category' => 'Food - Baking',
                'description' => 'Delicious cookies with rich chocolate flavor and a hint of mint.',
                'price' => 2.29
            ],
            [
                'name' => 'Pasta (Linguine)',
                'category' => 'Food - Pasta',
                'description' => 'Thin, flat pasta perfect for various sauces.',
                'price' => 1.89
            ],
            [
                'name' => 'safety Pin Dispenser',
                'category' => 'Office',
                'description' => 'Handy dispenser for quick access to safety pins.',
                'price' => 5.99
            ],
            [
                'name' => 'Zesty Cilantro Lime Dressing',
                'category' => 'Food - Condiments',
                'description' => 'A bright and zesty dressing perfect for salads and tacos.',
                'price' => 3.29
            ],
            [
                'name' => 'Luxe Velvet Blazer',
                'category' => 'Clothing - Outerwear',
                'description' => 'Elevate your outfit with this sophisticated velvet blazer.',
                'price' => 89.99
            ],
            [
                'name' => 'stainless Steel Mixing Bowls',
                'category' => 'Kitchen',
                'description' => 'set of versatile mixing bowls for cooking.',
                'price' => 29.99
            ],
            [
                'name' => 'Elegant Maxi Skirt',
                'category' => 'Clothing - Bottoms',
                'description' => 'Float through the day in this beautiful floor-length skirt.',
                'price' => 44.99
            ],
            [
                'name' => 'Fridge Magnet Set',
                'category' => 'Home',
                'description' => 'Fun fridge magnets to decorate your kitchen.',
                'price' => 15.99
            ],
            [
                'name' => 'Beef Jerky',
                'category' => 'Food - Snacks',
                'description' => 'savory, protein-rich beef jerky for on-the-go snacking.',
                'price' => 5.99
            ],
            [
                'name' => 'Adjustable Stand for Tablets and Smartphones',
                'category' => 'Electronics',
                'description' => 'Multi-angle stand for easy viewing of devices.',
                'price' => 19.99
            ],
            [
                'name' => 'Mint Chocolate Chip Ice Cream',
                'category' => 'Food - Frozen Desserts',
                'description' => 'Creamy ice cream with refreshing mint flavor and chocolate chips.',
                'price' => 4.99
            ],
            [
                'name' => 'Golf Polo Shirt',
                'category' => 'Clothing - Tops',
                'description' => 'Breathable polo shirt designed for both style and comfort on the greens.',
                'price' => 39.99
            ],
            [
                'name' => 'Apple Cinnamon Instant Oatmeal',
                'category' => 'Food - Cereal',
                'description' => 'Quick oatmeal packets infused with apple and cinnamon, perfect for breakfast.',
                'price' => 3.49
            ],
            [
                'name' => 'Dried Cranberries',
                'category' => 'Food - Snacks',
                'description' => 'sweet and tart dried cranberries, great for salads and baking.',
                'price' => 4.29
            ],
            [
                'name' => 'Protein Pancake Mix',
                'category' => 'Food - Breakfast',
                'description' => 'A protein-packed pancake mix for a nutritious breakfast.',
                'price' => 3.99
            ],
            [
                'name' => 'Honey Roasted Almonds',
                'category' => 'Food - Snacks',
                'description' => 'sweet and crunchy roasted almonds.',
                'price' => 4.99
            ],
            [
                'name' => 'Electric Stool Heater',
                'category' => 'Home',
                'description' => 'Heated stool cover for extra comfort during winter.',
                'price' => 29.99
            ],
            [
                'name' => 'Bamboo Utensil Holder',
                'category' => 'Kitchen',
                'description' => 'stylish holder for organizing cooking utensils.',
                'price' => 14.99
            ],
            [
                'name' => 'Pretzel Bites',
                'category' => 'Food - Snacks',
                'description' => 'soft pretzel bites, perfect for dipping in mustard or cheese sauce.',
                'price' => 4.99
            ],
            [
                'name' => 'Jigsaw Puzzle',
                'category' => 'Toys',
                'description' => '500-piece jigsaw puzzle featuring beautiful scenery.',
                'price' => 14.99
            ],
            [
                'name' => 'Electric Knife',
                'category' => 'Kitchen',
                'description' => 'Cordless electric knife for effortless slicing.',
                'price' => 39.99
            ],
            [
                'name' => 'Children\'s Musical Instrument Set',
                'category' => 'Toys',
                'description' => 'Fun instruments to introduce kids to music.',
                'price' => 39.99
            ],
            [
                'name' => 'Digital Thermostat',
                'category' => 'Home',
                'description' => 'Programmable digital thermostat for home heating.',
                'price' => 59.99
            ],
            [
                'name' => 'Electric Screwdriver',
                'category' => 'Tools',
                'description' => 'Cordless electric screwdriver for home projects.',
                'price' => 59.99
            ],
            [
                'name' => 'Waffle Maker',
                'category' => 'Kitchen',
                'description' => 'Make delicious waffles with this user-friendly device.',
                'price' => 39.99
            ],
            [
                'name' => 'Buffalo Chicken Dip',
                'category' => 'Food - Dips',
                'description' => 'spicy and creamy dip made with shredded chicken, perfect for parties.',
                'price' => 5.99
            ],
            [
                'name' => 'Personal Blender with Travel Cup',
                'category' => 'Kitchen',
                'description' => 'Blender for smoothies with a portable cup.',
                'price' => 39.99
            ],
            [
                'name' => 'Hibiscus Herbal Tea',
                'category' => 'Food - Beverages',
                'description' => 'Floral and refreshing herbal tea, great hot or iced.',
                'price' => 3.29
            ],
            [
                'name' => 'Leek and Potato Soup',
                'category' => 'Food - Soups',
                'description' => 'savory soup made with leeks and potatoes.',
                'price' => 3.29
            ],
            [
                'name' => 'Garden Hoses with Expandable Features',
                'category' => 'Garden',
                'description' => 'Lightweight, expandable hoses for easy handling.',
                'price' => 34.99
            ],
            [
                'name' => 'Mediterranean Chickpea Salad',
                'category' => 'Food - Salads',
                'description' => 'A refreshing salad with chickpeas, cucumber, tomatoes, and a light vinaigrette dressing.',
                'price' => 5.99
            ],
            [
                'name' => 'BBQ Sauce',
                'category' => 'Food - Condiments',
                'description' => 'A smoky barbecue sauce, ideal for grilling and dipping.',
                'price' => 3.49
            ],
            [
                'name' => 'Drone',
                'category' => 'Electronics',
                'description' => 'Beginner-friendly drone with HD camera.',
                'price' => 249.99
            ],
            [
                'name' => 'Phone Case',
                'category' => 'Accessories',
                'description' => 'Rugged phone case for drop protection.',
                'price' => 14.99
            ],
            [
                'name' => 'Bluetooth Shower Speaker',
                'category' => 'Audio',
                'description' => 'Water-resistant Bluetooth speaker for showers.',
                'price' => 24.99
            ],
            [
                'name' => 'Cheese Stuffed Jalapenos',
                'category' => 'Food - Snacks',
                'description' => 'spicy jalapenos stuffed with cheese, ideal for appetizers.',
                'price' => 5.99
            ],
            [
                'name' => 'Vegetarian Stuffed Peppers',
                'category' => 'Food - Prepared Foods',
                'description' => 'Bell peppers stuffed with rice, beans, and spices, ready to bake.',
                'price' => 4.99
            ],
            [
                'name' => 'Coconut Milk',
                'category' => 'Food - Canned Goods',
                'description' => 'Rich coconut milk for curries and desserts.',
                'price' => 2.49
            ],
            [
                'name' => 'Organic Quinoa Salad',
                'category' => 'Food - Prepared Meals',
                'description' => 'A refreshing salad made with quinoa and seasonal veggies.',
                'price' => 5.99
            ],
            [
                'name' => 'Hibiscus Tea Bags',
                'category' => 'Food - Beverages',
                'description' => 'Herbal tea bags made from dried hibiscus flowers.',
                'price' => 3.79
            ],
            [
                'name' => 'spiralizer',
                'category' => 'Kitchen',
                'description' => 'Vegetable spiralizer for healthy meals.',
                'price' => 22.99
            ],
            [
                'name' => 'Foot Massager',
                'category' => 'Health',
                'description' => 'Electric foot massager with heat settings.',
                'price' => 79.99
            ],
            [
                'name' => 'Action Camera',
                'category' => 'Electronics',
                'description' => 'Compact action camera for capturing adventures.',
                'price' => 199.99
            ],
            [
                'name' => 'Interchangeable Watch Bands',
                'category' => 'Accessories',
                'description' => 'set of stylish watch bands to customize your look.',
                'price' => 24.99
            ],
            [
                'name' => 'Roasted Garlic Pasta Sauce',
                'category' => 'Food - Sauces',
                'description' => 'A flavorful pasta sauce made with roasted garlic.',
                'price' => 4.99
            ],
            [
                'name' => 'Buffalo Cauliflower Bites',
                'category' => 'Food - Freezer',
                'description' => 'spicy cauliflower bites for a vegetarian snack.',
                'price' => 6.29
            ],
            [
                'name' => 'Classic Beef Chili',
                'category' => 'Food - Canned Goods',
                'description' => 'Hearty chili made with premium ground beef and kidney beans.',
                'price' => 7.99
            ],
            [
                'name' => 'Coconut Water',
                'category' => 'Food - Beverages',
                'description' => 'Refreshing coconut water, perfect for hydration.',
                'price' => 2.49
            ],
            [
                'name' => 'Children\'s Gardening Set',
                'category' => 'Toys',
                'description' => 'Fun gardening tools designed specifically for kids.',
                'price' => 19.99
            ],
            [
                'name' => 'Coconut Macaroons',
                'category' => 'Food - Confectionery',
                'description' => 'Chewy cookies made with coconut, perfect for sweet cravings.',
                'price' => 4.99
            ],
            [
                'name' => 'Organic Green Apples',
                'category' => 'Food - Produce',
                'description' => 'Fresh and tart organic green apples, great for snacking or baking.',
                'price' => 1.49
            ],
            [
                'name' => 'Graphic Print Leggings',
                'category' => 'Clothing - Activewear',
                'description' => 'Trendy leggings with a unique graphic print, versatile for workouts and casual wear.',
                'price' => 29.99
            ],
            [
                'name' => 'stylish Wide-Leg Trousers',
                'category' => 'Clothing - Bottoms',
                'description' => 'Fashionable wide-leg trousers for a chic silhouette.',
                'price' => 59.99
            ],
            [
                'name' => 'Pistachio Ice Cream',
                'category' => 'Food - Frozen Desserts',
                'description' => 'Creamy pistachio-flavored ice cream with real nuts.',
                'price' => 4.99
            ],
            [
                'name' => 'Insulated Lunch Bag',
                'category' => 'Kitchen',
                'description' => 'stylish insulated lunch bag for on-the-go meals.',
                'price' => 24.99
            ],
            [
                'name' => 'Cotton Tote Bag Set',
                'category' => 'Accessories',
                'description' => 'Reusable tote bags for shopping and eco-friendly living.',
                'price' => 29.99
            ],
            [
                'name' => 'Cheesy Broccoli Soup Mix',
                'category' => 'Food - Soups',
                'description' => 'Just add water for a hearty cheese and broccoli soup in minutes.',
                'price' => 2.99
            ],
            [
                'name' => 'Chicken Fajita Kit',
                'category' => 'Food - Prepared Foods',
                'description' => 'All ingredients included for delicious chicken fajitas.',
                'price' => 8.99
            ],
            [
                'name' => 'Brown Rice',
                'category' => 'Food - Grains',
                'description' => 'Nutty and wholesome brown rice.',
                'price' => 1.79
            ],
            [
                'name' => 'Pet Safety Harness',
                'category' => 'pets',
                'description' => 'Comfortable harness designed to keep pets safe in the car.',
                'price' => 24.99
            ],
            [
                'name' => 'Creamy Spinach Dip',
                'category' => 'Food - Prepared Foods',
                'description' => 'Deliciously creamy spinach dip, perfect for parties.',
                'price' => 5.99
            ],
            [
                'name' => 'Wall Art Stickers',
                'category' => 'Home',
                'description' => 'Removable wall art stickers for home decoration.',
                'price' => 19.99
            ],
            [
                'name' => 'Ginger Tea',
                'category' => 'Food - Beverages',
                'description' => 'A soothing herbal tea made from ginger root.',
                'price' => 4.99
            ],
            [
                'name' => 'Acoustic Guitar',
                'category' => 'Music',
                'description' => 'Beginner-friendly acoustic guitar with natural finish.',
                'price' => 199.99
            ],
            [
                'name' => 'Car Phone Mount',
                'category' => 'Automotive',
                'description' => 'Adjustable phone mount for car dashboard.',
                'price' => 15.99
            ],
            [
                'name' => 'Herb Seasoned Croutons',
                'category' => 'Food - Salad Toppings',
                'description' => 'Crunchy croutons with a blend of herbs for salads.',
                'price' => 2.99
            ],
            [
                'name' => 'Fashionable Scarves Set',
                'category' => 'Clothing',
                'description' => 'stylish scarves to accessorize any outfit.',
                'price' => 24.99
            ],
            [
                'name' => 'Pet Water Bottle',
                'category' => 'pets',
                'description' => 'Portable water bottle for pets when traveling.',
                'price' => 18.99
            ],
            [
                'name' => 'Handcrafted Wooden Coasters',
                'category' => 'Home',
                'description' => 'set of unique wooden coasters for drinks and decor.',
                'price' => 19.99
            ],
            [
                'name' => 'Thai Peanut Dressing',
                'category' => 'Food - Condiments',
                'description' => 'A creamy and tangy dressing perfect for salads or as a dipping sauce.',
                'price' => 3.29
            ],
            [
                'name' => 'Organic Italian Seasoning',
                'category' => 'Food - Spices',
                'description' => 'A blend of dried herbs commonly used in Italian cooking.',
                'price' => 2.99
            ],
            [
                'name' => 'Electric Can Opener',
                'category' => 'Kitchen',
                'description' => 'Automatic can opener for easy meal prep.',
                'price' => 29.99
            ],
            [
                'name' => 'Banana Chips',
                'category' => 'Food - Snacks',
                'description' => 'Crunchy and sweet banana chips, a great on-the-go snack.',
                'price' => 1.99
            ],
            [
                'name' => 'silicone Cooking Utensils Set',
                'category' => 'Kitchen',
                'description' => 'Non-stick and heat-resistant utensils for cooking.',
                'price' => 34.99
            ],
            [
                'name' => 'Brownie Bites',
                'category' => 'Food - Baked Goods',
                'description' => 'Fudgy brownie bites, perfect for sharing or snacking.',
                'price' => 4.99
            ],
            [
                'name' => 'Juice Extractor',
                'category' => 'Kitchen',
                'description' => 'Efficient juicer for fresh fruit and vegetable juices.',
                'price' => 99.99
            ],
            [
                'name' => 'LED Disco Ball Light',
                'category' => 'Home',
                'description' => 'Fun light that creates a disco atmosphere for parties.',
                'price' => 19.99
            ],
            [
                'name' => 'Maple Pecan Oatmeal Cookies',
                'category' => 'Food - Bakery',
                'description' => 'soft oatmeal cookies with maple and pecans.',
                'price' => 3.99
            ],
            [
                'name' => 'smartphone Hand Grip',
                'category' => 'Accessories',
                'description' => 'sturdy grip to hold your phone securely while taking selfies.',
                'price' => 9.99
            ],
            [
                'name' => 'LED Canopy Lights',
                'category' => 'Outdoor',
                'description' => 'Energy-efficient lights to illuminate outdoor areas.',
                'price' => 29.99
            ],
            [
                'name' => 'Electric Razor',
                'category' => 'Health',
                'description' => 'Rechargeable electric razor for a smooth shave.',
                'price' => 59.99
            ],
            [
                'name' => 'Garlic and Herb Rub',
                'category' => 'Food - Spices',
                'description' => 'A seasoning blend of garlic and herbs to enhance any dish.',
                'price' => 2.29
            ],
            [
                'name' => 'smartwatch',
                'category' => 'Wearable Tech',
                'description' => 'stylish smartwatch with fitness tracking features.',
                'price' => 199.99
            ],
            [
                'name' => 'Athletic Sports Bra',
                'category' => 'Clothing - Activewear',
                'description' => 'supportive sports bra designed for high-impact workouts, made with moisture-wicking fabric.',
                'price' => 24.99
            ],
            [
                'name' => 'smashed Avocado with Lime',
                'category' => 'Food - Condiments',
                'description' => 'A creamy blend of avocados and lime juice, great for spreads or dips.',
                'price' => 2.49
            ],
            [
                'name' => 'Chocolate Chip Cliff Bars',
                'category' => 'Food - Snacks',
                'description' => 'Nutritious energy bars packed with chocolate chips.',
                'price' => 2.49
            ],
            [
                'name' => 'Ginger Turmeric Tea',
                'category' => 'Food - Beverages',
                'description' => 'Herbal tea blend with ginger and turmeric for a soothing drink.',
                'price' => 3.49
            ],
            [
                'name' => 'Wireless Earbud Silicone Covers',
                'category' => 'Accessories',
                'description' => 'soft silicone earbud covers for comfort and fit.',
                'price' => 9.99
            ],
            [
                'name' => 'Rainbow Veggie Chips',
                'category' => 'Food - Snacks',
                'description' => 'Colorful veggie chips made from beets, carrots, and sweet potatoes.',
                'price' => 3.29
            ],
            [
                'name' => 'spicy Vegetable Sushi Rolls',
                'category' => 'Food - Prepared Foods',
                'description' => 'Vegan sushi filled with spicy vegetables and avocado.',
                'price' => 8.49
            ],
            [
                'name' => 'Dog Training Collar',
                'category' => 'pets',
                'description' => 'Rechargeable training collar for effective behavior training.',
                'price' => 39.99
            ],
            [
                'name' => 'stainless Steel BBQ Grill Set',
                'category' => 'Outdoor',
                'description' => 'Essential tools for outdoor barbecues including tongs and spatula.',
                'price' => 49.99
            ],
            [
                'name' => 'Lasagna Noodles',
                'category' => 'Food - Pasta',
                'description' => 'Wide pasta sheets for making lasagna.',
                'price' => 1.89
            ],
            [
                'name' => 'Elderberry Syrup Kit',
                'category' => 'Health',
                'description' => 'DIY kit to make your own elderberry syrup.',
                'price' => 22.99
            ],
            [
                'name' => 'Chocolate Peanut Butter Cups',
                'category' => 'Food - Snacks',
                'description' => 'Delicious dark chocolate cups filled with creamy peanut butter.',
                'price' => 2.29
            ],
            [
                'name' => 'Caramelized Onion Dip Mix',
                'category' => 'Food - Snacks',
                'description' => 'A mix to create a delicious onion dip for parties or snacking.',
                'price' => 2.29
            ],
            [
                'name' => 'Dish Rack',
                'category' => 'Kitchen',
                'description' => 'Collapsible dish rack for kitchen countertop use.',
                'price' => 24.99
            ],
            [
                'name' => 'Wall Planner',
                'category' => 'Office',
                'description' => 'Large wall planner for organizing schedules.',
                'price' => 19.99
            ],
            [
                'name' => 'Caramelized Onion Dip',
                'category' => 'Food - Dairy',
                'description' => 'Creamy dip made with caramelized onions, perfect for chips or veggies.',
                'price' => 3.99
            ],
            [
                'name' => 'Herbal Tea Sampler Box',
                'category' => 'Food',
                'description' => 'Assorted collection of herbal teas for relaxation and wellness.',
                'price' => 29.99
            ],
            [
                'name' => 'Honey Roasted Peanuts',
                'category' => 'Food - Snacks',
                'description' => 'Crunchy peanuts coated in honey, perfect for snacking.',
                'price' => 3.19
            ],
            [
                'name' => 'Pizza Stone',
                'category' => 'Kitchen',
                'description' => 'Ceramic pizza stone for homemade pizzas.',
                'price' => 29.99
            ],
            [
                'name' => 'smart Thermostat with Wi-Fi',
                'category' => 'smart Home',
                'description' => 'Wi-Fi enabled thermostat that learns your habits.',
                'price' => 169.99
            ],
            [
                'name' => 'scented Soy Candles',
                'category' => 'Home',
                'description' => 'Hand-poured candles made of natural soy wax.',
                'price' => 19.99
            ],
            [
                'name' => 'Chocolate Syrup',
                'category' => 'Food - Condiments',
                'description' => 'Rich chocolate syrup for ice cream or beverages.',
                'price' => 2.99
            ],
            [
                'name' => 'Apple Sauce',
                'category' => 'Food - Canned Goods',
                'description' => 'Unsweetened apple sauce, great for snacks or baking.',
                'price' => 2.19
            ],
            [
                'name' => 'Applewood Smoked Bacon',
                'category' => 'Food - Meat',
                'description' => 'Delicious bacon with a rich applewood smoked flavor.',
                'price' => 6.99
            ],
            [
                'name' => 'Chili Lime Seasoning',
                'category' => 'Food - Spices',
                'description' => 'Zesty seasoning great for tacos and grilling.',
                'price' => 2.99
            ],
            [
                'name' => 'spicy Hummus',
                'category' => 'Food - Deli',
                'description' => 'Creamy hummus with a kick of spice, great for dipping.',
                'price' => 3.49
            ],
            [
                'name' => 'Car Vacuum',
                'category' => 'Automotive',
                'description' => 'Portable car vacuum cleaner with strong suction.',
                'price' => 49.99
            ],
            [
                'name' => 'Potting Soil',
                'category' => 'Garden',
                'description' => 'Premium potting soil for indoor plants.',
                'price' => 15.99
            ],
            [
                'name' => 'Personal Blender',
                'category' => 'Kitchen',
                'description' => 'Compact blender for quick smoothies and shakes.',
                'price' => 39.99
            ],
            [
                'name' => 'Wall Art Stickers',
                'category' => 'Home',
                'description' => 'Removable wall art stickers for home decoration.',
                'price' => 19.99
            ],
            [
                'name' => 'Garlic Herb Grilled Chicken',
                'category' => 'Food - Frozen Foods',
                'description' => 'Marinated grilled chicken breasts seasoned with garlic and herbs.',
                'price' => 8.99
            ],
            [
                'name' => 'Vintage Graphic Tee',
                'category' => 'Clothing - Tops',
                'description' => 'Retro-style graphic tee with a soft wash for a vintage feel.',
                'price' => 25.99
            ],
            [
                'name' => 'salt and Pepper Grinder Set',
                'category' => 'Kitchen',
                'description' => 'Adjustable grinders for fresh spices at the table.',
                'price' => 19.99
            ],
            [
                'name' => 'smartphone Tripod',
                'category' => 'Photography',
                'description' => 'Adjustable tripod for smartphones and cameras.',
                'price' => 29.99
            ],
            [
                'name' => 'Recipe Book Stand',
                'category' => 'Kitchen',
                'description' => 'stylish stand to hold your recipes while cooking.',
                'price' => 22.99
            ],
            [
                'name' => 'Cotton Quilted Throw Blanket',
                'category' => 'Home',
                'description' => 'Cozy throw blanket perfect for adding warmth to your home.',
                'price' => 39.99
            ],
            [
                'name' => 'Hand Mixer',
                'category' => 'Kitchen',
                'description' => 'Compact hand mixer for easy baking.',
                'price' => 29.99
            ],
            [
                'name' => 'Comfy Slippers',
                'category' => 'Footwear',
                'description' => 'soft and cozy slippers for indoor wear.',
                'price' => 29.99
            ],
            [
                'name' => 'Compressed Towel Tablets',
                'category' => 'Travel',
                'description' => 'Compact towels that expand when wet, ideal for travel.',
                'price' => 12.99
            ],
            [
                'name' => 'Bluetooth Headphones',
                'category' => 'Audio',
                'description' => 'Noise-cancelling Bluetooth headphones for immersive sound.',
                'price' => 79.99
            ],
            [
                'name' => 'Oats',
                'category' => 'Food - Grains',
                'description' => 'Organic rolled oats, great for breakfast or baking.',
                'price' => 3.29
            ],
            [
                'name' => 'Magnet Travel Fridge Magnets',
                'category' => 'Accessories',
                'description' => 'Fun tourist magnets from around the world for your fridge.',
                'price' => 12.99
            ],
            [
                'name' => 'Multi-Purpose Marine Rope',
                'category' => 'Outdoor',
                'description' => 'Heavy-duty rope suitable for boating, camping, and general use.',
                'price' => 19.99
            ],
            [
                'name' => 'spaghetti Squash',
                'category' => 'Food - Produce',
                'description' => 'Low-carb vegetable for pasta alternatives.',
                'price' => 3.99
            ],
            [
                'name' => 'Multi-Function Meat Tenderizer',
                'category' => 'Kitchen',
                'description' => 'Kitchen tool for tenderizing meat to enhance flavors.',
                'price' => 19.99
            ],
            [
                'name' => 'Pet Bed',
                'category' => 'pets',
                'description' => 'Comfortable pet bed for small to medium-sized dogs.',
                'price' => 39.99
            ],
            [
                'name' => 'Colorful Post-It Notes Set',
                'category' => 'Office',
                'description' => 'Variety pack of sticky notes in different colors and sizes.',
                'price' => 9.99
            ],
            [
                'name' => 'Whole Wheat Bread',
                'category' => 'Food - Bakery',
                'description' => 'Freshly baked whole wheat bread, rich in fiber.',
                'price' => 2.49
            ],
            [
                'name' => 'Hiking Water Bottle with Filter',
                'category' => 'Outdoor',
                'description' => '8oz water bottle with built-in filter for clean drinking water.',
                'price' => 29.99
            ],
            [
                'name' => 'Digital Bullet Journal',
                'category' => 'Apps',
                'description' => 'stylish digital journaling app for notes and organizing tasks.',
                'price' => 24.99
            ],
            [
                'name' => 'spinach Pizza Rolls',
                'category' => 'Food - Frozen Foods',
                'description' => 'Frozen pizza rolls stuffed with spinach and cheese, perfect for snacking.',
                'price' => 4.99
            ],
            [
                'name' => 'Hand Crank Blender',
                'category' => 'Kitchen',
                'description' => 'Manual blender for smoothies and mixing ingredients on the go.',
                'price' => 18.99
            ],
            [
                'name' => 'Peanut Butter Banana Smoothie',
                'category' => 'Food - Beverages',
                'description' => 'smooth and creamy smoothie made with peanut butter and banana.',
                'price' => 3.99
            ],
            [
                'name' => 'Wireless Charger',
                'category' => 'Accessories',
                'description' => 'Qi-certified wireless charger for fast charging.',
                'price' => 24.99
            ],
            [
                'name' => 'Home Cleaning Robot',
                'category' => 'Home Appliances',
                'description' => 'Automated cleaning robot for hassle-free home maintenance.',
                'price' => 249.99
            ],
            [
                'name' => 'Blue Corn Tortilla Chips',
                'category' => 'Food - Snacks',
                'description' => 'Crunchy chips made from blue corn, perfect for dipping.',
                'price' => 3.49
            ],
            [
                'name' => 'Electronic Drum Kit',
                'category' => 'Music',
                'description' => 'Compact electronic drum kit for musicians of all levels.',
                'price' => 359.99
            ],
            [
                'name' => 'Chili Beans in Sauce',
                'category' => 'Food - Canned Goods',
                'description' => 'Canned beans cooked in a savory chili sauce',
                'price' => 1.79
            ],
            [
                'name' => 'sweet Potatoes (organic)',
                'category' => 'Food - Vegetables',
                'description' => 'Fresh organic sweet potatoes, great for roasting or mashing.',
                'price' => 1.99
            ],
            [
                'name' => 'Orange Ginger Vinaigrette',
                'category' => 'Food - Condiments',
                'description' => 'Tangy vinaigrette with orange and ginger flavors.',
                'price' => 3.99
            ],
            [
                'name' => 'Teriyaki Chicken Wings',
                'category' => 'Food - Frozen Food',
                'description' => 'Flavorful chicken wings marinated in a sweet teriyaki glaze.',
                'price' => 10.99
            ],
            [
                'name' => 'Beef Tacos',
                'category' => 'Food - Meat',
                'description' => 'Pre-seasoned beef mix for delicious tacos, just heat and serve.',
                'price' => 5.49
            ],
            [
                'name' => 'salsa',
                'category' => 'Food - Condiments',
                'description' => 'Fresh and zesty salsa, perfect for nachos.',
                'price' => 3.49
            ],
            [
                'name' => 'Turmeric Ginger Tea',
                'category' => 'Food - Beverages',
                'description' => 'A soothing tea blend with turmeric and ginger for wellness.',
                'price' => 3.29
            ],
            [
                'name' => 'Almond Milk Yogurt',
                'category' => 'Food - Dairy Alternatives',
                'description' => 'Creamy yogurt made from almond milk, vegan-friendly.',
                'price' => 1.99
            ],
            [
                'name' => 'Electric Meat Grinder',
                'category' => 'Kitchen',
                'description' => 'Powerful grinder for making sausage and burgers at home.',
                'price' => 89.99
            ],
            [
                'name' => 'Customizable Wall Calendar',
                'category' => 'Office',
                'description' => 'Personalize your calendar with photos and special dates.',
                'price' => 24.99
            ],
            [
                'name' => 'Basmati Rice',
                'category' => 'Food - Grains',
                'description' => 'Aromatic long-grain basmati rice, perfect for curries.',
                'price' => 5.79
            ],
            [
                'name' => 'Under Desk Footrest',
                'category' => 'Office',
                'description' => 'Adjustable footrest for improved comfort while sitting.',
                'price' => 29.99
            ],
            [
                'name' => 'Buffalo Chicken Dip',
                'category' => 'Food - Dips',
                'description' => 'spicy and creamy dip made with shredded chicken, perfect for parties.',
                'price' => 5.99
            ],
            [
                'name' => 'Peanut Butter Filled Pretzels',
                'category' => 'Food - Snacks',
                'description' => 'salty pretzels filled with creamy peanut butter.',
                'price' => 3.99
            ],
            [
                'name' => 'Belted Trench Coat',
                'category' => 'Clothing - Outerwear',
                'description' => 'Timeless belted trench coat for a polished look during fall.',
                'price' => 89.99
            ],
            [
                'name' => 'Body Wash',
                'category' => 'Beauty',
                'description' => 'Moisturizing body wash with natural ingredients.',
                'price' => 12.99
            ],
            [
                'name' => 'Coconut Almond Granola',
                'category' => 'Food - Breakfast',
                'description' => 'Crunchy granola made with oats, almonds, and coconut flakes.',
                'price' => 4.99
            ],
            [
                'name' => 'Incense Holder',
                'category' => 'Home',
                'description' => 'Ceramic incense holder for a calming atmosphere.',
                'price' => 14.99
            ],
            [
                'name' => 'Electric Fondue Pot',
                'category' => 'Kitchen',
                'description' => 'set for making fondue at home.',
                'price' => 39.99
            ],
            [
                'name' => 'Flavored Popcorn Mix',
                'category' => 'Food - Snacks',
                'description' => 'Popcorn tossed with sweet or savory flavors for a tasty snack.',
                'price' => 2.99
            ],
            [
                'name' => 'Multi-Purpose Plant Care Tool',
                'category' => 'Garden',
                'description' => 'All-in-one tool for measuring soil moisture, light, and pH.',
                'price' => 24.99
            ],
            [
                'name' => 'Peanut Butter Granola',
                'category' => 'Food - Breakfast',
                'description' => 'Crunchy granola full of peanut butter flavor and oats.',
                'price' => 4.99
            ],
            [
                'name' => 'Tomato Sauce',
                'category' => 'Food - Canned Goods',
                'description' => 'Rich and flavorful tomato sauce for pasta or pizza.',
                'price' => 2.79
            ],
            [
                'name' => 'Chocolate Peanut Butter Cups',
                'category' => 'Food - Snacks',
                'description' => 'Delicious dark chocolate cups filled with creamy peanut butter.',
                'price' => 2.29
            ],
            [
                'name' => 'Portable Water Filter',
                'category' => 'Outdoor',
                'description' => 'Lightweight water filter for outdoor adventures.',
                'price' => 29.99
            ],
            [
                'name' => 'Habanero Hot Sauce',
                'category' => 'Food - Condiments',
                'description' => 'Fiery hot sauce made with fresh habaneros and spices.',
                'price' => 3.79
            ],
            [
                'name' => 'Classic Caesar Salad Kit',
                'category' => 'Food - Salads',
                'description' => 'Everything you need for a fresh and delicious Caesar salad.',
                'price' => 4.99
            ],
            [
                'name' => 'Artisan Bread',
                'category' => 'Food - Bakery',
                'description' => 'Freshly baked artisan bread, perfect for sandwiches or toasting.',
                'price' => 4.59
            ],
            [
                'name' => 'Mobile Workbench',
                'category' => 'Tools',
                'description' => 'sturdy mobile workbench with storage options.',
                'price' => 199.99
            ],
            [
                'name' => 'Digital Kitchen Timer',
                'category' => 'Kitchen',
                'description' => 'Easy-to-read digital kitchen timer with alarms.',
                'price' => 14.99
            ],
            [
                'name' => 'sunglasses',
                'category' => 'Accessories',
                'description' => 'Polarized sunglasses with UV protection.',
                'price' => 29.99
            ],
            [
                'name' => 'Decorative Wall Tapestry',
                'category' => 'Home',
                'description' => 'Colorful tapestry to add charm to any room.',
                'price' => 34.99
            ],
            [
                'name' => 'smashed Avocado with Lime',
                'category' => 'Food - Condiments',
                'description' => 'A creamy blend of avocados and lime juice, great for spreads or dips.',
                'price' => 2.49
            ],
            [
                'name' => 'Aeropress Coffee Maker',
                'category' => 'Kitchen',
                'description' => 'Portable coffee maker for rich brews on the go.',
                'price' => 29.99
            ],
            [
                'name' => 'Electric Butter Churn',
                'category' => 'Kitchen',
                'description' => 'Automatic churner for making butter at home.',
                'price' => 49.99
            ],
            [
                'name' => 'Portable Speaker Stand',
                'category' => 'Audio',
                'description' => 'Adjustable stand for portable speakers and devices.',
                'price' => 39.99
            ],
            [
                'name' => 'Running Shorts',
                'category' => 'Clothing - Activewear',
                'description' => 'Lightweight and breathable running shorts for your workouts.',
                'price' => 34.99
            ],
            [
                'name' => 'Pecan Nuts',
                'category' => 'Food - Snacks',
                'description' => 'Nutty, crunchy pecans great for baking.',
                'price' => 6.49
            ],
            [
                'name' => 'Roasted Garlic Mashed Potatoes',
                'category' => 'Food - Frozen Foods',
                'description' => 'Creamy mashed potatoes infused with roasted garlic flavor.',
                'price' => 3.99
            ],
            [
                'name' => 'Baking Powder',
                'category' => 'Food - Baking Goods',
                'description' => 'Essential ingredient for baking fluffy cakes and pastries.',
                'price' => 1.79
            ],
            [
                'name' => 'Ice Cream Scoop',
                'category' => 'Kitchen',
                'description' => 'Durable scoop for perfectly shaped ice cream servings.',
                'price' => 12.99
            ],
            [
                'name' => 'Thai Red Curry Paste',
                'category' => 'Food - Condiments',
                'description' => 'spicy and flavorful curry paste for authentic Thai dishes.',
                'price' => 3.99
            ],
            [
                'name' => 'smartphone Photography Tripod',
                'category' => 'Electronics',
                'description' => 'Lightweight tripod designed for smartphone photography.',
                'price' => 29.99
            ],
            [
                'name' => 'Professional Chef Knife',
                'category' => 'Kitchen',
                'description' => 'High-carbon stainless steel chef knife for precision cutting.',
                'price' => 89.99
            ],
            [
                'name' => 'Peanut Butter Filled Pretzels',
                'category' => 'Food - Snacks',
                'description' => 'salty pretzels filled with creamy peanut butter.',
                'price' => 3.99
            ],
            [
                'name' => 'sliced Cheese',
                'category' => 'Food - Dairy',
                'description' => 'Assorted sliced cheese, perfect for sandwiches.',
                'price' => 4.49
            ],
            [
                'name' => 'Garden Vegetable Soup',
                'category' => 'Food - Canned Goods',
                'description' => 'A hearty soup filled with vegetables and herbs, perfect for a light meal.',
                'price' => 3.29
            ],
            [
                'name' => 'Portable Electric Fan',
                'category' => 'Home',
                'description' => 'Compact fan for personal cooling at work or home.',
                'price' => 24.99
            ],
            [
                'name' => 'Dark Chocolate Raisins',
                'category' => 'Food - Snacks',
                'description' => 'Juicy raisins coated in rich dark chocolate.',
                'price' => 3.49
            ],
            [
                'name' => 'Organic Coconut Sugar',
                'category' => 'Food - Baking Goods',
                'description' => 'A natural sweetener made from coconut sap, a healthier alternative to sugar.',
                'price' => 4.19
            ],
            [
                'name' => 'Wooden Kitchen Utensil Set',
                'category' => 'Kitchen',
                'description' => 'Eco-friendly utensil set made from natural wood.',
                'price' => 19.99
            ],
            [
                'name' => 'Buffalo Cauliflower Bites',
                'category' => 'Food - Freezer',
                'description' => 'spicy cauliflower bites for a vegetarian snack.',
                'price' => 6.29
            ],
            [
                'name' => 'Lemon Sorbet',
                'category' => 'Food - Frozen Desserts',
                'description' => 'Refreshing sorbet with a zesty lemon flavor.',
                'price' => 4.99
            ],
            [
                'name' => 'Kids Trampoline',
                'category' => 'Toys',
                'description' => 'safe and fun trampoline for children.',
                'price' => 139.99
            ],
            [
                'name' => 'Honey Mustard Chicken Breasts',
                'category' => 'Food - Meat',
                'description' => 'Marinated chicken breasts coated in a sweet honey mustard glaze.',
                'price' => 8.99
            ],
            [
                'name' => 'Camera Tripod',
                'category' => 'Photography',
                'description' => 'sturdy camera tripod for professional photography.',
                'price' => 49.99
            ],
            [
                'name' => 'Carrot and Celery Sticks',
                'category' => 'Food - Produce',
                'description' => 'Fresh pre-cut carrot and celery sticks for easy snacking.',
                'price' => 2.99
            ],
            [
                'name' => 'Garlic Parmesan Roasted Potatoes',
                'category' => 'Food - Sides',
                'description' => 'Oven-roasted potatoes tossed in garlic and parmesan cheese seasoning.',
                'price' => 3.99
            ],
            [
                'name' => 'strawberry Rhubarb Jam',
                'category' => 'Food - Condiments',
                'description' => 'A sweet and tart jam, perfect on toast or in desserts.',
                'price' => 4.29
            ],
            [
                'name' => 'Cucumber Relish',
                'category' => 'Food - Condiments',
                'description' => 'sweet relish made from cucumbers, perfect for sandwiches.',
                'price' => 3.39
            ],
            [
                'name' => 'Compressed Towel Tablets',
                'category' => 'Travel',
                'description' => 'Compact towels that expand when wet, ideal for travel.',
                'price' => 12.99
            ],
            [
                'name' => 'Essential Oils Diffuser Necklace',
                'category' => 'Health',
                'description' => 'Wearable diffuser for scenting your space and body.',
                'price' => 19.99
            ],
            [
                'name' => 'Nail Polish Set',
                'category' => 'Beauty',
                'description' => 'Assorted nail polish set for vibrant nails.',
                'price' => 25
            ],
            [
                'name' => 'Ice Cream Scoop',
                'category' => 'Kitchen',
                'description' => 'Durable scoop for perfectly shaped ice cream servings.',
                'price' => 12.99
            ],
            [
                'name' => 'Digital Wireless Meat Thermometer',
                'category' => 'Kitchen',
                'description' => 'Bluetooth thermometer that alerts you when your meat is done.',
                'price' => 39.99
            ],
            [
                'name' => 'Portable Projector',
                'category' => 'Electronics',
                'description' => 'Compact projector for movies and presentations on the go.',
                'price' => 199.99
            ],
            [
                'name' => 'Digital Voice Recorder',
                'category' => 'Electronics',
                'description' => 'High-quality voice recorder for lectures and meetings.',
                'price' => 49.99
            ],
            [
                'name' => 'Garden Vegetable Soup',
                'category' => 'Food - Canned Goods',
                'description' => 'A hearty soup filled with vegetables and herbs, perfect for a light meal.',
                'price' => 3.29
            ],
            [
                'name' => 'Toasted Coconut Granola',
                'category' => 'Food - Breakfast',
                'description' => 'Crunchy granola with toasted coconut flakes, perfect for breakfast or snacks.',
                'price' => 4.99
            ],
            [
                'name' => 'Golf Polo Shirt',
                'category' => 'Clothing - Tops',
                'description' => 'Breathable polo shirt designed for both style and comfort on the greens.',
                'price' => 39.99
            ],
            [
                'name' => 'Chocolate Avocado Pudding',
                'category' => 'Food - Desserts',
                'description' => 'Rich and creamy pudding made with ripe avocados and cocoa.',
                'price' => 4.99
            ],
            [
                'name' => 'sliced Turkey Breast',
                'category' => 'Food - Deli Meats',
                'description' => 'Oven-roasted sliced turkey, perfect for sandwiches.',
                'price' => 5.49
            ],
            [
                'name' => 'Water Bottle',
                'category' => 'Fitness',
                'description' => 'Insulated water bottle for keeping drinks cold.',
                'price' => 18.99
            ],
            [
                'name' => 'Kids Crafting Station',
                'category' => 'Toys',
                'description' => 'Complete station with supplies for kids art projects.',
                'price' => 49.99
            ],
            [
                'name' => 'Chia Seed Pudding Mix',
                'category' => 'Food - Breakfast',
                'description' => 'Mix to create a delicious chia seed pudding in just a few minutes.',
                'price' => 4.19
            ],
            [
                'name' => 'steak Seasoning Rub',
                'category' => 'Food - Spices',
                'description' => 'A blend of spices perfect for seasoning steak.',
                'price' => 2.49
            ],
            [
                'name' => 'Ready-to-Eat Chili',
                'category' => 'Food - Soups',
                'description' => 'spicy chili in a can, ready to eat for a filling meal.',
                'price' => 2.99
            ],
            [
                'name' => 'Flavored Instant Oatmeal',
                'category' => 'Food - Breakfast',
                'description' => 'Quick oatmeal with various flavors',
                'price' => 2.99
            ],
            [
                'name' => 'Organic Italian Seasoning',
                'category' => 'Food - Spices',
                'description' => 'A blend of dried herbs commonly used in Italian cooking.',
                'price' => 2.99
            ],
            [
                'name' => 'Mayonnaise',
                'category' => 'Food - Condiments',
                'description' => 'Creamy mayonnaise, perfect for salads and sandwiches.',
                'price' => 3.29
            ],
            [
                'name' => 'Athletic Jogging Jacket',
                'category' => 'Clothing - Outerwear',
                'description' => 'Designed for comfort and performance during workouts.',
                'price' => 49.99
            ],
            [
                'name' => 'Chili Lime Seasoning',
                'category' => 'Food - Spices',
                'description' => 'Zesty seasoning great for tacos and grilling.',
                'price' => 2.99
            ],
            [
                'name' => 'Portable Solar Phone Charger',
                'category' => 'Electronics',
                'description' => 'Eco-friendly charger that uses solar energy for powering devices.',
                'price' => 29.99
            ],
            [
                'name' => 'Bamboo Toothbrush Holder',
                'category' => 'Health',
                'description' => 'Eco-friendly bamboo holder for toothbrushes.',
                'price' => 14.99
            ],
            [
                'name' => 'Karaoke Microphone',
                'category' => 'Music',
                'description' => 'Wireless microphone for singing and performances.',
                'price' => 39.99
            ],
            [
                'name' => 'Wall-Mounted Wine Rack',
                'category' => 'Home',
                'description' => 'stylish and modern holder for storing wine bottles on walls.',
                'price' => 39.99
            ],
            [
                'name' => 'Pasta Primavera Kit',
                'category' => 'Food - Meal Kits',
                'description' => 'Quick meal kit with pasta and fresh vegetables.',
                'price' => 7.49
            ],
            [
                'name' => 'Dark Chocolate Covered Raisins',
                'category' => 'Food - Snacks',
                'description' => 'satisfy your sweet tooth with these dark chocolate-covered raisins.',
                'price' => 3.99
            ],
            [
                'name' => 'High-Top Leather Boots',
                'category' => 'Clothing - Footwear',
                'description' => 'Durable high-top leather boots for the stylish adventurer.',
                'price' => 99.99
            ],
            [
                'name' => 'Phone Screen Protector',
                'category' => 'Accessories',
                'description' => 'Tempered glass screen protector for smartphones.',
                'price' => 12.99
            ],
            [
                'name' => 'Hair Dryer',
                'category' => 'Beauty',
                'description' => 'Compact hair dryer with multiple heat settings.',
                'price' => 39.99
            ],
            [
                'name' => 'snack Container Set',
                'category' => 'Kitchen',
                'description' => 'stackable containers for organizing snacks and treats.',
                'price' => 19.99
            ],
            [
                'name' => 'sweet Chili Thai Sauce',
                'category' => 'Food - Condiments',
                'description' => 'Tangy sweet chili sauce perfect for dipping or cooking.',
                'price' => 3.49
            ],
            [
                'name' => 'Frozen Mixed Vegetables',
                'category' => 'Food - Frozen',
                'description' => 'A mix of carrots, peas, and corn, easy to stir-fry.',
                'price' => 1.99
            ],
            [
                'name' => 'Dark Chocolate Covered Pretzels',
                'category' => 'Food - Snacks',
                'description' => 'Crunchy pretzels dipped in rich dark chocolate.',
                'price' => 3.99
            ],
            [
                'name' => 'Faux Fur Throw Blanket',
                'category' => 'Home',
                'description' => 'Cozy faux fur blanket to add warmth and style to your home.',
                'price' => 39.99
            ],
            [
                'name' => 'Gluten-Free Biscuits',
                'category' => 'Food - Baking',
                'description' => 'Fluffy biscuits made without gluten',
                'price' => 3.79
            ],
            [
                'name' => 'Portable Ice Maker',
                'category' => 'Kitchen',
                'description' => 'Compact ice maker for creating ice at home or in offices.',
                'price' => 199.99
            ],
            [
                'name' => 'Gardening Fairy Figurines',
                'category' => 'Garden',
                'description' => 'Cute fairy figurines to decorate your garden or potted plants.',
                'price' => 14.99
            ],
            [
                'name' => 'Kombucha Drink',
                'category' => 'Food - Beverages',
                'description' => 'Refreshing and tangy fermented tea, available in various flavors.',
                'price' => 3.49
            ],
            [
                'name' => 'sweet Corn Fritters',
                'category' => 'Food - Frozen',
                'description' => 'Golden-brown fritters made with sweet corn.',
                'price' => 4.49
            ],
            [
                'name' => 'smartphone Photography Tripod',
                'category' => 'Electronics',
                'description' => 'Lightweight tripod designed for smartphone photography.',
                'price' => 29.99
            ],
            [
                'name' => 'Electric Butter Churn',
                'category' => 'Kitchen',
                'description' => 'Automatic churner for making butter at home.',
                'price' => 49.99
            ],
            [
                'name' => 'Overnight Duffle Bag',
                'category' => 'Travel',
                'description' => 'spacious duffle bag for weekend getaways.',
                'price' => 34.99
            ],
            [
                'name' => 'Coconut Almond Granola',
                'category' => 'Food - Breakfast',
                'description' => 'Crunchy granola made with oats, almonds, and coconut flakes.',
                'price' => 4.99
            ],
            [
                'name' => 'Manual Coffee Grinder',
                'category' => 'Kitchen',
                'description' => 'Compact coffee grinder for fresh ground coffee beans.',
                'price' => 22.99
            ],
            [
                'name' => 'Magnetic Phone Car Mount',
                'category' => 'Automotive',
                'description' => 'strong magnetic holder for smartphones in cars.',
                'price' => 14.99
            ],
            [
                'name' => 'Honey Roasted Chickpeas',
                'category' => 'Food - Snacks',
                'description' => 'Crispy chickpeas roasted with honey for a sweet and satisfying snack.',
                'price' => 3.29
            ],
            [
                'name' => 'Body Pillow Case',
                'category' => 'Home',
                'description' => 'soft and breathable pillowcase for body pillows.',
                'price' => 14.99
            ],
            [
                'name' => 'Memory Foam Mattress Pad',
                'category' => 'Home',
                'description' => 'Extra layer of comfort for your mattress.',
                'price' => 69.99
            ],
            [
                'name' => 'salt and Pepper Grinder Set',
                'category' => 'Kitchen',
                'description' => 'Adjustable grinders for fresh spices at the table.',
                'price' => 19.99
            ],
            [
                'name' => 'smart Plant Monitor',
                'category' => 'Garden',
                'description' => 'Device that tracks soil moisture and provides care tips.',
                'price' => 24.99
            ],
            [
                'name' => 'Infrared Thermometer Gun',
                'category' => 'Health',
                'description' => 'Non-contact thermometer for quick and easy temperature readings.',
                'price' => 29.99
            ],
            [
                'name' => 'Vegan Caesar Dressing',
                'category' => 'Food - Condiments',
                'description' => 'Creamy vegan dressing made with cashews, perfect for salads.',
                'price' => 3.99
            ],
            [
                'name' => 'Dark Chocolate Raisins',
                'category' => 'Food - Snacks',
                'description' => 'Juicy raisins coated in rich dark chocolate.',
                'price' => 3.49
            ],
            [
                'name' => 'Italian Herb Balsamic Marinade',
                'category' => 'Food - Condiments',
                'description' => 'A rich marinade perfect for meats and vegetables, infused with Italian herbs and balsamic vinegar.',
                'price' => 3.99
            ],
            [
                'name' => 'Fishing Tackle Box',
                'category' => 'Outdoor',
                'description' => 'Organized tackle box for fishing gear.',
                'price' => 24.99
            ],
            [
                'name' => 'Radish Chips',
                'category' => 'Food - Snacks',
                'description' => 'Crispy baked radish chips, a healthy snack alternative.',
                'price' => 2.89
            ],
            [
                'name' => 'smart Home Hub',
                'category' => 'smart Home',
                'description' => 'Connect and control smart devices from one app.',
                'price' => 99.99
            ],
            [
                'name' => 'Almond Flour Biscuits',
                'category' => 'Food - Bakery',
                'description' => 'Gluten-free biscuits made with almond flour.',
                'price' => 6.49
            ],
            [
                'name' => 'Emergency Preparedness Kit',
                'category' => 'safety',
                'description' => 'Complete kit for emergency situations including food and water.',
                'price' => 99.99
            ],
            [
                'name' => 'Raspberry Limeade',
                'category' => 'Food - Beverages',
                'description' => 'sweet and tangy raspberry lime beverage',
                'price' => 1.99
            ],
            [
                'name' => 'Air Fryer Oven',
                'category' => 'Kitchen',
                'description' => 'Versatile air fryer that also roasts, bakes, and broils.',
                'price' => 149.99
            ],
            [
                'name' => 'Wireless Earbuds',
                'category' => 'Audio',
                'description' => 'True wireless earbuds with touch control.',
                'price' => 69.99
            ],
            [
                'name' => 'Cocktail Shaker and Mixing Glass Set',
                'category' => 'Kitchen',
                'description' => 'Complete set for mixing cocktails at home.',
                'price' => 39.99
            ],
            [
                'name' => 'Cacao Nibs',
                'category' => 'Food - Baking',
                'description' => 'Crunchy cacao nibs, great for adding to smoothies or baking.',
                'price' => 6.49
            ],
            [
                'name' => 'safety First Aid Kit',
                'category' => 'Health',
                'description' => 'Comprehensive first aid kit for home or travel emergencies.',
                'price' => 29.99
            ],
            [
                'name' => 'Pretzel Bites',
                'category' => 'Food - Snacks',
                'description' => 'soft pretzel bites, perfect for dipping in mustard or cheese sauce.',
                'price' => 4.99
            ],
            [
                'name' => 'Classic Chicken Noodle Soup',
                'category' => 'Food - Canned Goods',
                'description' => 'A comforting soup filled with chicken and noodles in broth.',
                'price' => 3.49
            ],
            [
                'name' => 'smart Water Bottle',
                'category' => 'Fitness',
                'description' => 'Water bottle that tracks your hydration levels.',
                'price' => 39.99
            ],
            [
                'name' => 'sliced Avocado',
                'category' => 'Food - Produce',
                'description' => 'Ready-to-eat avocado slices, perfect for tacos.',
                'price' => 2.79
            ],
            [
                'name' => 'Dog Training Whistle',
                'category' => 'pets',
                'description' => 'High-frequency whistle for training your dog effectively.',
                'price' => 8.99
            ],
            [
                'name' => 'Lemon Dill Salmon',
                'category' => 'Food - Seafood',
                'description' => 'salmon fillets seasoned with lemon and dill, perfect for grilling.',
                'price' => 9.99
            ],
            [
                'name' => 'sweet Potato Mash',
                'category' => 'Food - Frozen Foods',
                'description' => 'Creamy mashed sweet potatoes, ready to heat and serve.',
                'price' => 3.99
            ],
            [
                'name' => 'spice Rack',
                'category' => 'Kitchen',
                'description' => 'Rotating spice rack with 20 spice jars.',
                'price' => 39.99
            ],
            [
                'name' => 'Blue Denim Jeans',
                'category' => 'Clothing - Bottoms',
                'description' => 'Classic fit blue jeans with a slight stretch for comfort and durability.',
                'price' => 49.99
            ],
            [
                'name' => 'Frozen Pizza',
                'category' => 'Food - Frozen Foods',
                'description' => 'Delicious frozen pizza with a variety of toppings.',
                'price' => 7.99
            ],
            [
                'name' => 'Field Journal',
                'category' => 'Books',
                'description' => 'Durable journal for nature observations and notes.',
                'price' => 14.99
            ],
            [
                'name' => 'smartphone Car Mount with Wireless Charging',
                'category' => 'Automotive',
                'description' => 'secure phone mount that wirelessly charges your device while driving.',
                'price' => 39.99
            ],
            [
                'name' => 'Classic Bagels',
                'category' => 'Food - Bakery',
                'description' => 'Freshly baked bagels, perfect for breakfast or snacks.',
                'price' => 2.99
            ],
            [
                'name' => 'Avocados',
                'category' => 'Food - Produce',
                'description' => 'Fresh, creamy avocados ideal for salads and guacamole.',
                'price' => 1.5
            ],
            [
                'name' => 'Personal Security Alarm Keychain',
                'category' => 'safety',
                'description' => 'Handy keychain that emits a loud alarm for personal safety.',
                'price' => 10.99
            ],
            [
                'name' => 'sliced Ham',
                'category' => 'Food - Meat',
                'description' => 'Delicious and fully cooked sliced ham, ready to eat.',
                'price' => 5.49
            ],
            [
                'name' => 'Almond Butter Cups',
                'category' => 'Food - Snacks',
                'description' => 'Rich chocolate cups filled with almond butter, a delicious treat.',
                'price' => 3.29
            ],
            [
                'name' => 'LED Under Cabinet Lighting',
                'category' => 'Home',
                'description' => 'Easy-to-install lights to brighten kitchen cabinets and workspaces.',
                'price' => 29.99
            ],
            [
                'name' => 'Car Vacuum Cleaner',
                'category' => 'Automotive',
                'description' => 'Compact vacuum designed specifically for cleaning vehicles.',
                'price' => 39.99
            ],
            [
                'name' => 'Multi-Function Meat Tenderizer',
                'category' => 'Kitchen',
                'description' => 'Kitchen tool for tenderizing meat to enhance flavors.',
                'price' => 19.99
            ],
            [
                'name' => 'Vegetarian Pizza',
                'category' => 'Food - Frozen Foods',
                'description' => 'Frozen pizza loaded with vegetables and cheese.',
                'price' => 5.49
            ],
            [
                'name' => 'Whole Grain Mustard',
                'category' => 'Food - Condiments',
                'description' => 'Tangy whole grain mustard for sandwiches and dressings.',
                'price' => 3.49
            ],
            [
                'name' => 'Garlic Herb Seasoning',
                'category' => 'Food - Spices',
                'description' => 'A blend of herbs and garlic for seasoning meats and vegetables.',
                'price' => 1.99
            ],
            [
                'name' => 'Adjustable Dog Harness',
                'category' => 'pets',
                'description' => 'Comfortable and adjustable harness for dogs.',
                'price' => 24.99
            ],
            [
                'name' => 'Beef Tacos',
                'category' => 'Food - Meat',
                'description' => 'Pre-seasoned beef mix for delicious tacos, just heat and serve.',
                'price' => 5.49
            ],
            [
                'name' => 'Photo Album',
                'category' => 'Home',
                'description' => 'Classic leather photo album for keepsakes.',
                'price' => 24.99
            ],
            [
                'name' => 'Organic Vanilla Bean Ice Cream',
                'category' => 'Food - Frozen Desserts',
                'description' => 'Creamy ice cream made with real vanilla beans, perfect for desserts.',
                'price' => 5.99
            ],
            [
                'name' => 'Vegan Tacos',
                'category' => 'Food - Frozen Foods',
                'description' => 'Frozen vegan tacos filled with plant-based protein and spices.',
                'price' => 7.49
            ],
            [
                'name' => 'Berry Smoothie Mix',
                'category' => 'Food - Frozen Foods',
                'description' => 'Frozen mix for quick berry smoothies.',
                'price' => 4.99
            ],
            [
                'name' => 'Thyme',
                'category' => 'Food - Fresh Produce',
                'description' => 'Fresh thyme, perfect for seasoning dishes.',
                'price' => 2.49
            ],
            [
                'name' => 'Instant Camera',
                'category' => 'Photography',
                'description' => 'Retro instant camera for capturing and printing photos instantly.',
                'price' => 89.99
            ],
            [
                'name' => 'spicy Tuna Sushi Kit',
                'category' => 'Food - Prepared Meals',
                'description' => 'Everything you need to make delicious spicy tuna rolls at home.',
                'price' => 8.99
            ],
            [
                'name' => 'Travel Document Organizer',
                'category' => 'Travel',
                'description' => 'Organize travel documents, passport, and cards.',
                'price' => 15.99
            ],
            [
                'name' => 'Ice Cream Scoop',
                'category' => 'Kitchen',
                'description' => 'Durable scoop for perfectly shaped ice cream servings.',
                'price' => 12.99
            ],
            [
                'name' => 'Classic BBQ Sauce',
                'category' => 'Food - Condiments',
                'description' => 'smoky and sweet BBQ sauce for grilling and dipping.',
                'price' => 2.79
            ],
            [
                'name' => 'Biodegradable Phone Case',
                'category' => 'Accessories',
                'description' => 'Eco-friendly phone case designed to decompose safely.',
                'price' => 23.99
            ],
            [
                'name' => 'Vegetable Stir-Fry Sauce',
                'category' => 'Food - Sauces',
                'description' => 'savory sauce for vegetable and meat stir-fries.',
                'price' => 3.49
            ],
            [
                'name' => 'Brown Rice',
                'category' => 'Food - Grains',
                'description' => 'Nutty and wholesome brown rice.',
                'price' => 1.79
            ],
            [
                'name' => 'Pear and Gorgonzola Salad',
                'category' => 'Food - Salads',
                'description' => 'Fresh salad with pears, gorgonzola cheese, and nuts, perfect for lunch.',
                'price' => 5.49
            ],
            [
                'name' => 'Interactive Plush Toy',
                'category' => 'Toys',
                'description' => 'soft, cuddly toy that interacts with children.',
                'price' => 34.99
            ],
            [
                'name' => 'Pet Hair Vacuum Cleaner Attachment',
                'category' => 'pets',
                'description' => 'specialized attachment for removing pet hair from surfaces.',
                'price' => 14.99
            ],
            [
                'name' => 'Portable Grill Cover',
                'category' => 'Outdoor',
                'description' => 'Durable cover to protect your grill from the elements.',
                'price' => 24.99
            ],
            [
                'name' => 'Pepper Jack Cheese Slices',
                'category' => 'Food - Dairy',
                'description' => 'Creamy cheese with a spicy kick, perfect for sandwiches.',
                'price' => 3.49
            ],
            [
                'name' => 'Adjustable Standing Desk',
                'category' => 'Office',
                'description' => 'Ergonomic desk that adjusts height for standing or sitting.',
                'price' => 299.99
            ],
            [
                'name' => 'Electric Razor',
                'category' => 'Health',
                'description' => 'Rechargeable electric razor for a smooth shave.',
                'price' => 59.99
            ],
            [
                'name' => 'LED Canopy Lights',
                'category' => 'Outdoor',
                'description' => 'Energy-efficient lights to illuminate outdoor areas.',
                'price' => 29.99
            ],
            [
                'name' => 'Teriyaki Chicken Bowl',
                'category' => 'Food - Prepared Meals',
                'description' => 'Ready-to-eat chicken bowl with teriyaki sauce and rice.',
                'price' => 6.49
            ],
            [
                'name' => 'Pet Training Pads',
                'category' => 'pets',
                'description' => 'Absorbent training pads for puppies and kittens.',
                'price' => 24.99
            ],
            [
                'name' => 'Plant-Based Protein Bars',
                'category' => 'Health',
                'description' => 'Nutritious protein bars for on-the-go snacking.',
                'price' => 19.99
            ],
            [
                'name' => 'Camping Chair',
                'category' => 'Outdoor',
                'description' => 'Portable folding camping chair with cup holder.',
                'price' => 29.99
            ],
            [
                'name' => 'Grapes (red)',
                'category' => 'Food - Produce',
                'description' => 'Fresh seedless red grapes, perfect for snacking.',
                'price' => 3.49
            ],
            [
                'name' => 'Fettuccine Alfredo Dinner Kit',
                'category' => 'Food - Prepared Meals',
                'description' => 'Easy meal kit for creamy fettuccine Alfredo.',
                'price' => 5.49
            ],
            [
                'name' => 'Board Game Storage',
                'category' => 'Toys',
                'description' => 'Organize your board games with this storage bin.',
                'price' => 19.99
            ],
            [
                'name' => 'Wireless Gaming Mouse',
                'category' => 'Gaming',
                'description' => 'Ergonomic mouse designed for gamers with high DPI.',
                'price' => 39.99
            ],
        ];
    }
}
