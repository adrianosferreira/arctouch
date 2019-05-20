import React, { Component } from 'react';

class NavBar extends Component {

	render() {
		return (
			<nav className="navbar navbar-expand-lg navbar-light bg-light">
				<div className="collapse navbar-collapse" id="navbarSupportedContent">
					<ul className="navbar-nav mr-auto">
						<li className="nav-item">
							<a onClick={ () => this.props.handleShowUpComing() } className="navbar-brand" href="#">Upcoming Movies</a>
						</li>
					</ul>
					<input onKeyDown={ e => e.key === 'Enter' ? this.props.handleSearch() : '' } onChange={ e => this.props.handleSearchForMovieChange( e.target.value ) } className="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" />
					<button onClick={ () => this.props.handleSearch() } className="btn btn-outline-success my-2 my-sm-0">Search</button>
				</div>
			</nav>
		)
	}
}

export default NavBar;