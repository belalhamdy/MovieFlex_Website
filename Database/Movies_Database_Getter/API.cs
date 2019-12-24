using System;
using System.Collections.Generic;
using System.Diagnostics.Eventing.Reader;
using System.Linq;
using System.Net.Http;
using System.Text;
using System.Threading.Tasks;
using System.Web.Script.Serialization;

namespace Movies_Database_Getter
{
    class API
    {
        private const string Key = "ca8e030f4275593f6aa2fbd107c56e65";
        private static List<Movie> movies_data;
        private const int maxPages = 10; // change here
        private const int perPage = 20;
        private static int MoviesNo { get; } = maxPages * perPage;

        private static async Task<List<Movie>> GetMoviesPage(int pageNo)
        {
            var url = $"https://api.themoviedb.org/3/movie/top_rated?api_key={Key}&language=en-US&page={pageNo}&region=US";

            var client = new HttpClient();
            var response = await client.GetAsync(url);
            response.EnsureSuccessStatusCode();
            var text = await response.Content.ReadAsStringAsync();
            var res = new JavaScriptSerializer().Deserialize<Result>(text);

            return res.Results;

        }
        public static List<Movie> GetMoviesData()
        {
            if (movies_data != null) return movies_data;
            movies_data = new List<Movie>(MoviesNo);
            for (int i = 1; i <= maxPages; ++i)
            {
                Task<List<Movie>> task = Task.Run<List<Movie>>(async () => await API.GetMoviesPage(i));
                movies_data.AddRange(task.Result);
            }
            movies_data.RemoveAll(x => x.poster_path == null);

            foreach (var movie in movies_data)
            {
                movie.Title = movie.Title.Replace("'", "\"");
                movie.Overview = movie.Overview.Replace("'", "\"");
                movie.poster_path = "http://image.tmdb.org/t/p/w185" + movie.poster_path.ToString();
            }
            return movies_data;
        }
        
        

    }
}
