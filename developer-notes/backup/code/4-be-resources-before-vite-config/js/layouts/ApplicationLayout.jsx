import React from 'react';
import Header from '../partials/Header';
import Footer from '../partials/Footer';

function ApplicationLayout({ children }) {
    return (
        <div>
            <Header />
            <main>{children}</main>
            <Footer />
        </div>
    );
}

export default ApplicationLayout;
