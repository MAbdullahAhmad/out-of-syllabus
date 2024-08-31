import React, { useState, useEffect } from 'react';
import APIRequest from '../core/APIRequest';

function PostComponent() {
    const [posts, setPosts] = useState(null);
    const [loading, setLoading] = useState(true);
    const [error, setError] = useState(null);

    useEffect(() => {
        const fetchData = async () => {
            try {
                const result = await APIRequest.get('/api/example-endpoint');
                setPosts(result);
                setLoading(false);
            } catch (error) {
                setError(error.message);
                setLoading(false);
            }
        };

        fetchData();
    }, []);

    if (loading) return <p>Loading...</p>;
    if (error) return <p>Error: {error}</p>;

    return (
        <div>
            <h2>All Posts</h2>
            <pre>{JSON.stringify(posts, null, 2)}</pre>
        </div>
    );
}

export default PostComponent;
