import { useState, useEffect } from 'react'
import { useLocation } from 'react-router-dom'
import styles from './Detail.module.css'

function Detail(){
    const {state: { movie }} = useLocation();
    const [loading, setLoading] = useState(true);
    
    useEffect(() => {
        setLoading(false);
    }, []);
    console.log(movie);
    return (
        <div className={styles.container}>
            { loading ? (
                <div className={styles.loader}>
                    <span>Loading...</span>
                </div>
            ) : (
                <div>
                    <img src={movie.background_image_original} alt={movie.title} className={styles.backimg} />
                    <div className={styles.contents}>
                        <img src={movie.medium_cover_image} alt={movie.title} />
                        <ul>
                            <li><h2>{movie.title}</h2></li>
                            <li><p>Year : {movie.year}</p></li>
                            <li><p>Runtime : {movie.runtime}</p></li>
                            <li><p>Genres : {movie.genres.map((g) => (<span key={g}>{g}</span>))}</p></li>
                        </ul>
                    </div>
                    <p className={styles.summary}>{movie.summary}</p>
                </div>
            )}
        </div>
    );
}

export default Detail;