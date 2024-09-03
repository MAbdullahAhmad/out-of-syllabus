curl -X POST http://localhost:8000/api/auth/login \
-H "Content-Type: application/json" \
-d '{
  "email": "john.admin@example.com",
  "password": "john.admin"
}'
