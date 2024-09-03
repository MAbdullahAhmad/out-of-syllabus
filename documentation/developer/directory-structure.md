## Directory Structure

For parallel development, frontend and backend are being developed seperately.

```txt
src/
├── backend/  # Laravel Backend
└── frontend/ # ReactJS Frontend
```

- `backend/` is a complete application with `Laravel` and `ReactJS` source.
- `frontend/` is created for created for contribution.

Checkout [backend/resources.md](backend/resources.md) and [backend/merge-frontend.md](backend/merge-frontend.md) for more information.

### Backend Directory Structure

Laravel application is organized as follow

```txt
```

### Frontend Directory Structure

`/` of ReactJS Application is organized as folllow

```txt
frontend/
├── src/        # JSX
├── styles/     # sass styles
├── dist/       # compiled css
└── index.html
```

Here is a detailed directory structure for ReactJS frontend:
```txt
frontend/
│
├── src/
│   ├── main.jsx          # primary script
│   ├── App.tsx           # Application Entery Component
│   ├── core/             # Core application scripts
│   ├── layouts/          # Layouts
│   ├── partials/         # Layouts partial components
│   ├── components/       # Reusable components
│   ├── pages/            # Pages
│   └── examples/         # Components and core scripts usage examples
│
├── styles/
│   ├── main.scss         # Styles entery point
│   ├── components/       # Styles for re-usable components
│   ├── layouts/          # Styles for Layouts
│   ├── pages/            # Styles for Pages
│   ├── partials/         # Styles for Layout Partial components
│   ├── theme.scss        # Application theme and color scheme
│   ├── _variables.scss   # Global Variables
│   ├── _mixins.scss      # Global Mixins
│   ├── globals.scss      # Global Styles
│   └── misc.scss         # miscellaneous
│
├── dist/
│   └── main.css          # compiled css
│
├── index.html
├── tsconfig.json
└── (...other config files)
```
