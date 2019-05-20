# Upcoming Movies - ArcTouch

### Back-end

After reading the specs I've realized that I'd need to create an internal API in PHP to avoid direct calls into TMDB API through the REST app. I've chosen Slim framework because it is a very small and dedicated framework for this kind of work.

My idea was to make the internal API as much reusable as possible. So, if in the future we need to change the movies provider to another API, it should be easy to adjust the code without a huge overhead.

For this, I've created a couple of components that helped me to achieve this reusability:

- Defined a model class for the movie, to avoid using normal arrays
- Then, I've defined the following structure for each route. A factory class, which should return a new Instance of the related route. An interface for the route handler (which works like a controller in MVC). As each route has its own interface for the handler, I had to define a separated interface for the Route itself. Take for example Search route, all of this is basically to ensure that the factory `App\Routes\Search\Factory` should generate an instance of `App\Routes\Search\Route`, and this route instance should have a dependency (by composition) `App\Routes\Search\HandlerInterface` which will handle the request and return API results.

This is basically the interface of the API, written in a reusable way. Then, there are the actual handlers for TMDB, one for each route, `App\TMDB\Routes\Search` and `App\TMDB\Routes\UpComingMovies`.

As long as you use the right interfaces passing the right parameters and returning expected data, the program should work just fine with any other new movie API.

### Front-end

I've broken the design in a few components:

- App: the main
- UpComingMovies
- SingleMovie: this is each line of the upcoming movie
- NavBar
- Movie: this is the single page of a movie

I've used Context API (`CurrentMovie`) in order to pass some functions to nested components and avoid passing them through props in several levels.

The app basically consumes two endpoints of the PHP API `search` and `/movies`. It fetches data from the API when the component is mounted, when doing a search, and when going back to the list of upcoming movies.