const Favourites = (props) => {

    const favouritedMovies = getStorage();

    return (
        <div className = "favourites">
            <h1>Favourites</h1>
            {favouritedMovies.length === 0 ? <p>You do not have any favourited movies. Go back to the home page and add some movies.</p> :
            <div className="favourites-section">
                <p>Below is a list of your favourite movies (that you selected!). You can add and remove any time you want!</p>
                <div className="favourites-container">
                    <MovieTile sort={false} movies={favouritedMovies} />
                </div>
            </div>}
        </div>
    );
    
};

export default Favourites;