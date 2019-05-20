import React, {Component} from 'react';
import UpComingMovies from "./UpComingMovies";
import NavBar from "./NavBar";
import {CurrentMovie} from "../Contexts/CurrentMovie";
import Movie from "./Movie";

class App extends Component {

	constructor(props) {
		super(props);

		this.state = {
			movies:         [],
			searchForMovie: '',
			currentMovie:   '',
		};
	};

	handleSearchForMovieChange = (value) => {
		this.setState({searchForMovie: value});
	};

	handleSearch = () => {
		this.request('https://arctouch-upcomingmovies.herokuapp.com/search?&query=' + this.state.searchForMovie);
	};

	handleShowUpComing = () => {
		this.refreshUpcoming();
		this.setState({currentMovie: ''});
	};

	componentDidMount() {
		this.refreshUpcoming();
	};

	refreshUpcoming() {
		this.request('https://arctouch-upcomingmovies.herokuapp.com/movies');
	}

	request(url) {
		fetch(url, {
			method: 'GET',
		})
			.then(response => {
				return response.json();
			})
			.then(json => {
				this.setState({movies: json});
			})
	}

	handleCurrentMovie = (id) => {
		this.setState({currentMovie: id});
	};

	render() {
		return (<React.Fragment>
				<NavBar handleShowUpComing={this.handleShowUpComing} handleSearch={this.handleSearch} handleSearchForMovieChange={this.handleSearchForMovieChange}/>

				{this.state.currentMovie ? <Movie movie={this.state.currentMovie}/> : <CurrentMovie.Provider value={{handleCurrentMovie: this.handleCurrentMovie}}>
					<UpComingMovies movies={this.state.movies}/>
				</CurrentMovie.Provider>}
			</React.Fragment>)
	}
}

export default App;