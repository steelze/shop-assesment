## 🛒 Laravel E-Commerce API
🌍 [](https://shop-assesment-main-rzfchg.laravel.cloud/api/v1/products)
This is a minimal e-commerce API built with Laravel, powered by Laravel Sail (Docker), supporting customer/supplier flows:
- Product management (CRUD)
- Cart management (add/remove items)
- Order listing
- Role-based access (Customer vs Supplier)

## 🚀 Getting Started

### 📦 Requirements
Docker

### Installation 🔌⚡

1. Clone repository and install dependencies

bash `https://github.com/steelze/shop-assesment && composer install`

2. Setup environment file 

bash `cp .env.example .env`

3. Start Docker containers

bash `./vendor/bin/sail up -d` OR `docker compose down && docker compose up -d`

4. Generate application key

bash `./vendor/bin/sail artisan key:generate`


### Database Setup 📊🖥️

1. Run Migration

bash `./vendor/bin/sail artisan migrate`

2. Run Seeder

bash `./vendor/bin/sail artisan db:seed`

3. Clear cache files

bash `./vendor/bin/sail artisan optimize:clear`

### 🌍
The project should be accessible now at http://localhost:8099


### Postman Collection

You can find the published postman collection here - https://cloudy-zodiac-675588.postman.co/workspace/My-Workspace~67afa849-a7ae-4d14-8e0c-2ca572935ba8/collection/4645093-e25c7a34-f626-4e0b-bd36-55fda93125d1?action=share&creator=4645093

### Endpoints
All endpoints are prefixed with `/api/v1`

| Method | Endpoint | Description | Auth Required |
|--------|----------|-------------|---------------|
| POST | `login` | Authenticate user and get token | No |
| POST | `register` | Register new user | No |
| POST | `logout` | Logout user | Yes |
| GET | `profile` | Current Authenticated User | Yes |
|GET | `products` | List all products | No |
|POST | `products` | Create product (Supplier) | Yes |
|PUT | `products/{id}` | Update product (Supplier) | Yes |
|DELETE | `products/{id}` | Delete product (Supplier) | Yes |
|POST | `carts` | Add product to cart | Yes |
|GET | `carts` | Get items in cart | Yes |
|DELETE | `carts/{product_id}/remove` | Remove item from cart | Yes |
|GET | `orders` | List user orsupplier orders | Yes |
|POST | `orders` | Place orders | Yes |


## Running Tests 🏃‍♂️🏃‍♂️

1. Run All Tests

bash `./vendor/bin/sail artisan test`
![alt text](https://github.com/steelze/shop-assesment/blob/main/public/Screenshot%202025-05-02%20at%2008.08.48.png)

2. Refresh Database and Re-seed

bash `./vendor/bin/sail artisan migrate:fresh --seed`