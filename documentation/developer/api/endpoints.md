# Endpoints

### Versioning

- we shall implement API versioning
- i.e., all endpoints for first development will start with `api/v1/`.

### Example Endpoints

Here are some example endpoints that we shall use for API development

## API Endpoints

Following are actual api endpoints for this project:

```txt
# User and Authentication Management
POST   /api/v1/auth/register             # Register a new user
POST   /api/v1/auth/login                # Login a user and return a token
POST   /api/v1/auth/logout               # Logout a user and invalidate the token
GET    /api/v1/auth/refresh-token        # Refresh the authentication token

# User Profile Management
GET    /api/v1/user/profile              # Get the current user's profile
PUT    /api/v1/user/profile              # Update the current user's profile
PATCH  /api/v1/user/profile/password     # Change the current user's password
DELETE /api/v1/user/profile              # Delete the current user's account

# Product Management
GET    /api/v1/products                  # Get a list of all products
GET    /api/v1/products/{productId}      # Get details of a specific product
POST   /api/v1/products                  # Add a new product (admin only)
PUT    /api/v1/products/{productId}      # Update an existing product (admin only)
DELETE /api/v1/products/{productId}      # Delete a product (admin only)

# Cart Management
GET    /api/v1/cart                      # Get the current user's cart
POST   /api/v1/cart                      # Add an item to the cart
PATCH  /api/v1/cart/{itemId}             # Update the quantity of an item in the cart
DELETE /api/v1/cart/{itemId}             # Remove an item from the cart
DELETE /api/v1/cart                      # Clear the entire cart

# Checkout and Orders
POST   /api/v1/checkout                  # Process the checkout and create an order
GET    /api/v1/orders                    # Get a list of the current user's orders
GET    /api/v1/orders/{orderId}          # Get details of a specific order

# Miscellaneous
GET    /api/v1/categories                # Get a list of all product categories
GET    /api/v1/categories/{categoryId}   # Get details of a specific category
GET    /api/v1/brands                    # Get a list of all product brands
GET    /api/v1/brands/{brandId}          # Get details of a specific brand

```