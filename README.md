## 🛒 Laravel E-Commerce API
This is a minimal e-commerce API built with Laravel, powered by Laravel Sail (Docker), supporting customer/supplier flows:
- Product management (CRUD)
- Cart management (add/remove items)
- Order listing
- Role-based access (Customer vs Supplier)

- 🌍 [Live Url FE](https://super-fenglisu-070e3b.netlify.app/)
- 🌍 [Live Url BE](https://shop-assesment-main-rzfchg.laravel.cloud/api/v1/products)


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

## Notes
### 🧩 Project Structure & Approach
In line with the suggested 6–8 hour time constraint, I prioritized:
- A clear API design with clear separation of supplier vs customer flow
- Endpoints testing and proper request validation
- Basic authentication/authorization layers using Laravel Sanctum
- Database seeders for quick testing
- A documented Postman collection to simulate end-to-end usage

### 🔐 Role-Based Authentication
- I used a single users table with a role column to distinguish between supplier and customer using an enum-based approach (e.g., RoleEnum::CUSTOMER, RoleEnum::SUPPLIER).
- At registration, a role is passed in the payload (/register) and used to assign proper permissions.
- Middleware was implemented to restrict access to routes based on role (e.g., suppliers cannot access customer-specific routes and vice versa).
- This allows for one login system, but two isolated experiences per role — including token-based auth that reflects access rights.

### 💡 What I Would Add With More Time
Currently, I prioritized the API for the supplier flow (CRUD products, view orders), but due to time limits I did not implement a UI for product CRUD operations. The APIs are fully functional and tested via Postman. I also did not implement product image upload which I would have loved to do 

I would have also handled some FE ux quirks, like all bitton disabled when adding to cart, ability to remove from cart/update quantity in cart. Proper error message display etc 
