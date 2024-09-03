## Resources

Backend resources management documentation.

#### ReactJS Resources

ReactJS resources are placed in two directories:

- **Components** in `resources/js/reactjs/`
- **Styles** in `resources/sass/react/`

> `resources/js/app.jsx` loads `App.jsx` to setup react application. `main.jsx` has no role in rendering App or configuration. For any changes in `main.jsx`, please consult backend developer for implementation.

> `main.scss` from reactjs styles is imported in `resources/sass/app.scss`. Make sure it is the entery point in reactjs styles also. Also it is recommended to keep styles seperate from components for scalability.

#### Blade templates

Blade templates are placed as follow:
- `resources/views/layouts/app.blade.php` is primary react-root layout
- `resources/views/home.blade.php` is application entery-point for all react-js rendered routes.