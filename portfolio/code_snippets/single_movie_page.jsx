const SinglePage = () => {
    // check if the location has the id
    // if so then split using split('=');
    //console.log(window.location.href);

    //console.log(splitURL);

    // Make sure last child is called, this ensures that
    // The ID is always called
    let {id} = useParams();
    //console.log(movieId);

    // Set your states
    const [movieInfo, setMovieInfo] = useState(null);

    // Generate the data from the API
    useEffect(() => {
        const fetchMovie = async () => {
            const res = await fetch(`${SINGLE_MOVIE}${id}?${API_KEY}`);
            const data = await res.json();
            const movieInfoData = data;
            setMovieInfo(movieInfoData);
            //console.log(movieInfoData);

        }
        fetchMovie();
    }, []);

    return (
        <div className = "single-page">
            { movieInfo !== null && <Single movieInfo={movieInfo} />}
        </div>
    )
};

export default SinglePage;