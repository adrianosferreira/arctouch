import React, { Component } from 'react';

class Movie extends Component {

	render() {

		const movie = this.props.movie;

		return (

			<div className="card mb-3">
				<div className="row no-gutters">
					<div className="col-md-4">
						<img src={movie.poster} className="card-img" alt="..." />
					</div>
					<div className="col-md-8">
						<div className="card-body">
							<h5 className="card-title">{movie.name}</h5>
							<p className="card-text">
								{movie.genre}
								<br />
								<br />
								<img src={movie.backdropImage} />
								<br />
								<br />
								{movie.overview}
								</p>
							<p className="card-text">
								<small className="text-muted">Release date: {movie.releaseDate}</small>
							</p>
						</div>
					</div>
				</div>
			</div>

		)
	}
}

export default Movie;