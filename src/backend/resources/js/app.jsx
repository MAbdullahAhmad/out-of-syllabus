import React from 'react';
import ReactDOM from 'react-dom/client';
import HomePage from './pages/HomePage/HomePage';

function App() {
    return <HomePage />;
}

ReactDOM.createRoot(document.getElementById('app')).render(<App />);
