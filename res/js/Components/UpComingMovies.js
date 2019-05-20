import React, { Component } from 'react';
import SingleMovie from "./SingleMovie";

class UpComingMovies extends Component {

	render() {
		return <table className="table">
			<thead className="thead-dark">
			<tr>
				<th scope="col">ID</th>
				<th scope="col">Name</th>
				<th scope="col">Poster</th>
				<th scope="col">Backdrop Image</th>
				<th scope="col">Genres</th>
				<th scope="col">Release Date</th>
			</tr>
			</thead>
			<tbody>
			{this.props.movies.map(( movie, index ) => <SingleMovie key={index} movie={movie} />)}
			</tbody>
		</table>
	}
}

export default UpComingMovies;