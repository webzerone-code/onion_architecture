Onion Architecture Example in Laravel

This project demonstrates a clean implementation of Onion Architecture in Laravel, focusing on domain-driven design (DDD) principles.

It currently includes a working Product creation use case with shipping calculation, illustrating domain services, application services, and repository abstraction.

📂 Project Structure
app/
├── architecture/<br/>
│   └── onion/<br/>
│       ├── domain/<br/>
│       │   ├── entity/<br/>
│       │   │   ├── Product.php<br/>
│       │   │   ├── Category.php<br/>
│       │   │   └── Tag.php<br/>
│       │   ├── repository/<br/>
│       │   │   └── ProductRepositoryInterface.php<br/>
│       │   └── service/<br/>
│       │       ├── product/<br/>
│       │       │   ├── ProductService.php<br/>
│       │       │   └── ProductServiceInterface.php<br/>
│       │       └── shipping/<br/>
│       │           └── ExpressShipping.php<br/>
│       └── application/<br/>
│           └── services/<br/>
│               └── ProductApplicationService.php<br/>
└── infrastructure/<br/>
└── persistence/<br/>
└── EloquentProductRepository.php<br/>

🧱 Layers Explanation<br/>
1️⃣ Domain Layer

Entities: Product, Category, Tag — hold business data.

Repositories: ProductRepositoryInterface — abstraction for persistence.

Domain Services:

ProductService — orchestrates domain rules like calculating shipping cost.

Depends on abstractions (ShippingInterface) for flexibility.

Shipping strategy: ExpressShipping implements shipping calculation.

2️⃣ Application Layer

ProductApplicationService:

Coordinates creation of Product entity.

Calls ProductService to enrich product data (shipping cost).

Persists product using ProductRepositoryInterface.

Maintains stateless orchestration, no domain logic leaks.

3️⃣ Infrastructure Layer

EloquentProductRepository:

Implements ProductRepositoryInterface.

Handles actual database operations.

⚙️ How It Works

Application Service receives input to create a product.

Calls ProductService (domain service) to calculate shipping cost.

Sets the shipping cost on the Product entity.

Persists the entity via repository.

✅ This keeps the domain pure, application orchestrates, and infrastructure handles persistence.

🏆 Current Achievements

Clean Product creation workflow following Onion principles.

Domain service (ProductService) depends only on ShippingInterface.

Application service orchestrates without holding state.

Flexible for multiple shipping strategies in the future.
