## Routes

Application routes are added here. 

For API endpoints, see [`api/endpoints.md`](api/endpoints.md)

### Application Routes

Following routes are in use by application.

- `/` : Homepage
- `/about-us`: About Us Page
- `/programs`: All Programs
    - `/programs/{name}`: Single Program Details
- `/apply`: Apply for selected program
- `/resources`: Resources Page
    - `/resource/{name}`: Single Resouce Detials page.
- `/login`: Login Page
- `/register`: Registeration Page
- `/cart`: Cart
- `/checkout`: Checkout Page (redirects to `/register` after purchase)
- `/account`: User Profile Page
    - `/account/my-resources`: Purchased Resources
    - `/account/enrolled-programs`: Active enrolled & history
    - `/account/program/{name}`: Visit Program details.
    - `/account/orders`: Order history
    - `/account/settings`: Change name, picture, password