using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Text;
using System.Threading.Tasks;


/*
 * GENRES::
 * 0 Comedy
 * 1 Drama
 * 2 Action
 * 3 Documentary
 * 4 Thriller
 * 5 Melodrama
 * 6 Mystery
 * 7 Horror
 * 8 Suspense
 * 9 Fantasy
 */
namespace Movies_Database_Getter
{
    class Program
    {
        private static readonly List<Movie> Movies = API.GetMoviesData();
        private static readonly int UserCount = 4;
        private static readonly int MoviesCount = Movies.Count;

        static void Main(string[] args)
        {
            FileStream ostrm;
            StreamWriter writer;
            TextWriter oldOut = Console.Out;
            try
            {
                ostrm = new FileStream("../../DB_Files/Queries.sql", FileMode.OpenOrCreate, FileAccess.Write);
                writer = new StreamWriter(ostrm);
            }
            catch (Exception e)
            {
                Console.WriteLine("Cannot open Redirect.txt for writing");
                Console.WriteLine(e.Message);
                return;
            }
            Console.SetOut(writer);


            PrintLoginData();
            Console.WriteLine("\n");

            PrintUsersData();
            Console.WriteLine("\n");

            PrintMoviesData();
            Console.WriteLine("\n");

            PrintFavoriteData();
            Console.WriteLine("\n");

            PrintCommentsData();
            Console.WriteLine("\n");

            Console.SetOut(oldOut);
            writer.Close();
            ostrm.Close();
            Console.WriteLine("Done");


        }

        private static void PrintLoginData()
        {
            //Password: 1234 sha256
            var names = new List<string>();
            var passwords = new List<string>();

            names.Add("belal");
            names.Add("ahmed");
            names.Add("adham");
            names.Add("okasha");
            passwords.Add("03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4");
            passwords.Add("03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4");
            passwords.Add("03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4");
            passwords.Add("03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4");

            for (int i = 0; i < UserCount; ++i)
            {
                Console.WriteLine($"INSERT INTO LoginDatas(userID,username,password) VALUES ({i+1},'{names[i]}','{passwords[i]}');");
            }
        }

        private static void PrintUsersData()
        {
            var data = new List<user>();
            
            data.Add(new user("belal", "https://assets.change.org/photos/5/wi/ob/SzWIoBOtjBVImGM-800x800-noPad.jpg?1488236305","belal@movies.com",20,1));
            data.Add(new user("ahmed", "https://assets.change.org/photos/5/wi/ob/SzWIoBOtjBVImGM-800x800-noPad.jpg?1488236305https://www.compassionpregnancy.com/images/smiling-man.jpg","ahmed@movies.com",18,1));
            data.Add(new user("adham", "http://ximudesign.com/theone/wp-content/uploads/sites/18/2014/06/photodune-4602710-handsome-man-with-sunglasses-m-image-thumb-1-800x800.png", "adham@movies.com",21,1));
            data.Add(new user("okasha", "https://www.parexcellenceny.com/wp-content/uploads/2019/07/charles-jouffre-uai-800x800.jpg", "okasha@movies.com",19,1));


            foreach (var curr in data)
            {
                Console.WriteLine($"INSERT INTO Users(name,photoPath,email,age,gender) VALUES ('{curr.name}','{curr.photo}','{curr.email}',{curr.age},{curr.gender});");
            }   
        }

        private static void PrintMoviesData()
        {
            Random rnd = new Random();
            foreach (var curr in Movies)
            {
                Console.WriteLine($"INSERT INTO Movies(ownerID,title,posterPath,genre,votesCount,isAdult,overview,releaseDate) VALUES ({rnd.Next(UserCount)},'{curr.Title}','{curr.poster_path}',{rnd.Next(10)},{curr.Vote_Count},{(curr.Adult? 1 : 0)},'{curr.Overview}','{curr.Release_Date}');");
            }
        }
        private static void PrintFavoriteData()
        {
            List<int> movieId = new List<int>();
            for (int i = 0; i < MoviesCount; ++i)
            {
                 movieId.Add(i + 1);
            }
            Random rnd = new Random();
            var MyRandomArray = movieId.OrderBy(x => rnd.Next()).ToList();


            for (int i = 0; i < 60; ++i)
            {
                Console.WriteLine($"INSERT INTO FavoriteMovies(userID,movieID) VALUES ({rnd.Next(UserCount)},{MyRandomArray[i]});");
            }
        }
        private static void PrintCommentsData()
        {
            Random rnd = new Random();

            for (int j = 0; j < 100; ++j)
            {
                Console.WriteLine($"INSERT INTO Comments(userID,movieID,content) VALUES ({rnd.Next(UserCount)},{rnd.Next(MoviesCount)},'Best Movie Ever {j}');");

            }
        }
    }

    class user
    {
        public user(string name, string photo, string email, int age, int gender)
        {
            this.name = name;
            this.photo = photo;
            this.email = email;
            this.age = age;
            this.gender = gender;
        }

        public string name { get; set; }
        public string photo { get; set; }
        public string email { get; set; }
        public int age { get; set; }
        public int gender { get; set; }
    }
}
