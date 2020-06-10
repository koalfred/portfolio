const ModalAddMovie = (props) => {
    
    const [error, setError] = useState(false);

    const handleCloseModal = () => {
        props.handleCloseModal();
    }

    const handleAddMovie = (movie) => {
        if(isItemInStorage({movie}) === true){
            setError(true);
            return;
        }

        if(error === true){
            setError(false);
        }
        props.handleCloseModal();
        props.addMovie(movie);
        
    }

    return (
        <Modal isOpen={props.openModal}
               className="modal modal-add-movie"
               style={{
                   overlay: {
                       backgroundColor: null
                   }
               }}>
            <div className="modal-content">
                <h2>Add Movie</h2>
                {error && <p className="error">Movie already added. Add a different movie.</p>}
                {/* <div className="form-group">
                    <Location city='Vancouver'
                              country='Canada'
                              region='North America'
                              submitButtonText='Add' 
                              cancel={true}
                              handleCloseModal={handleCloseModal}
                              handleAddCity={handleAddCity} />
                </div> */}
            </div>
        </Modal>
    )
}


Modal.setAppElement('#root');

export default ModalAddMovie;