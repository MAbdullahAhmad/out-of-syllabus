import React from 'react';
import ApplicationLayout from '../../layouts/ApplicationLayout';

import LandingSection from './partials/LandingSection';
import Introduction from './partials/Introduction';
import Testimonial from './partials/Testimonial';

function HomePage() {
    return (
        <ApplicationLayout>
            <LandingSection />
            <Introduction />
            <Testimonial />
        </ApplicationLayout>
    );
}

export default HomePage;
