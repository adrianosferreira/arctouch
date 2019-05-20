import React, { Component } from 'react';
import {CurrentMovie} from "../Contexts/CurrentMovie";

class SingleMovie extends Component {

	render() {

		const movie = this.props.movie;

		return (
			<CurrentMovie.Consumer>
				{({ handleCurrentMovie }) => (
					<tr onClick={ () => handleCurrentMovie( movie ) } >
						<th scope="row">{movie.id}</th>
						<td>{movie.name}</td>
						<td><img height="100px" src={movie.poster}/></td>
						<td><img height="100px" src={movie.backdropImage}/></td>
						<td>{movie.genre}</td>
						<td>{movie.releaseDate}</td>
					</tr>
				)}
			</CurrentMovie.Consumer>
		)
	}
}

export default SingleMovie;